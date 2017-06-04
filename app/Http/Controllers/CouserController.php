<?php

namespace App\Http\Controllers;

use View;
use DB;
use Auth;
use App\User;
use App\Couser;
use App\Experiences;
use App\Learns;
use App\Ratings;
use App\Messages;
use App\Http\Requests;
use Illuminate\Http\Request;
use File;
use Validator;
use Hash;
class CouserController extends Controller
{

    public function __construct()
    {


    }

    public function look(Request $request, $id) {
        $id_user = DB::table('users')->where('id', '=', $id)->get();
        return view('couser.add', ['id_user' => $id_user]);
    }
    public function adding_couser(Request $request, $id){
      $input = $request->all();
      $id = $input['id_user'];

      if($files=$request->file('coverMain')){
          $file = $input['coverMain'];
          $filename = $file->getClientOriginalName();
          $nameConvert = date('H-i-s==Y-m-d==').'-'.$filename;
          $file->move(public_path().'/img/cover', $nameConvert);
      }else{
          $nameConvert=$input['cover'];
      }
      if($request->hasFile('avatarMain')){
          $file = $input['avatarMain'];
          $filename1 = $file->getClientOriginalName();
          $nameConvert1 = date('H-i-s==Y-m-d==').'-'.$filename1;
          $file->move(public_path().'/img/avatar', $nameConvert1);
      }else{
          $nameConvert1 =$input['avatar'];
      }

        $profile= ([
          'avatar' => $nameConvert,
          'cover' => $nameConvert1
        ]);

        DB::table('users')->where('id', $id)->update($profile);
        return redirect('/chinh-sua-ca-nhan-'.$id);
    }


}
