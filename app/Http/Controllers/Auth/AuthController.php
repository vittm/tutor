<?php

namespace App\Http\Controllers\Auth;

use App\User;
Use Image;
use Validator;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Mail;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'active'   => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $request = app('request');
        $input = $request->all();
        if($request->hasFile('avatar')){
            $file = $input['avatar'];
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/img/avatar', $filename);
        }else{
            $filename=substr($data['name'],0,1);
        }

        $user = array('email' => Input::get('email'),'name' => Input::get('name'));
        
        Mail::send('auth.emails.welcome', ['user' => $user], function ($m) use ($user) {
            $m->to($user['email'], $user['name'])->subject('Chào mừng bạn đến với Wiis');
        });
            
         $request->session()->flash('form-success', 'Đăng ký thành công');
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'active'   => $data['active'],
            'avatar' => $filename,
            'gender' => 'Trống rỗng',
            'info' => 'Trống rỗng',
            'address' => 'Trống rỗng',
            'subjects' => 'Trống rỗng',
            'money_time' => '3000',
        ]);

    }
}
