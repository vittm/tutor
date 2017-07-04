<?php

namespace App\Http\Controllers\Auth;

use App\User;
Use Image;
use Validator;
use Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'active'   => 'required',
            'phone'   => 'required|unique:users',
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
             if($input['active'] == 1) $filename="hocvien.jpg";
             if($input['active'] == 3) $filename="hocvien.jpg";
             if($input['active'] == 2) $filename="giasu.jpg";
         }

         $user = array('email' => Input::get('email'),'name' => Input::get('name'));

        //  Mail::send('auth.emails.welcome', ['user' => $user], function ($m) use ($user) {
        //      $m->to($user['email'], $user['name'])->subject('Chào mừng bạn đến với Wiis');
        //  });

          $request->session()->flash('form-success', 'Đăng ký thành công');
         return User::create([
             'name' => trim($data['name']),
             'email' => $data['email'],
             'password' => bcrypt($data['password']),
             'active'   => $input['active'],
             'avatar' => $filename
         ]);

     }
}
