<?php

namespace App\Http\Controllers;

use View;
use DB;
use Auth;
use App\User;
use App\Cousers;
use App\Learns;
use App\Ratings;
use App\Messages;
use App\Http\Requests;
use Illuminate\Http\Request;
use File;
use Validator;
use Hash;
use App\Registercousers;

class CouserController extends Controller
{

    public function __construct()
    {
    }

    public function look(Request $request, $id) {
        $id_user = DB::table('users')->where('id', '=', $id)->get();
        $couser = DB::table('cousers')->where('id_user', '=', $id)->get();
        return view('couser.add', ['id_user' => $id_user, 'couser' => $couser]);
    }
    public function adding_couser(Request $request, $id){
      $input = $request->all();
      $id = $input['id_user'];
      $db = new Cousers;
      if($files=$request->file('coverMain')){
          $file = $input['coverMain'];
          $filename = $file->getClientOriginalName();
          $nameConvert = date('H-i-sYmd').$filename;
          $file->move(public_path().'/img/couser', $nameConvert);
      }else{
          $nameConvert= 'couser.jpg';
      }
          $db->id_user = $id;
          $db->picture = $nameConvert;
          $db->title = $input['title'];
          $db->who = $input['who'];
          $db->information = $input['information'];
          $db->study = $input['study'];
          $db->type = $input['type'];
          $db->program = $input['program'];
          $db->timetype1 = json_encode($input['morning']);
          $db->price = $input['id_user'];
          $db->typeCourse = '1';
          $db->typeclass = $input['typeclass'];
          $db->save();
        return redirect('/trang-ca-nhan-'.$id);
    }
    public function adding_opening(Request $request, $id){
      $input = $request->all();
      $id = $input['id_user'];
      $db = new Cousers;
      if($files=$request->file('coverMain')){
          $file = $input['coverMain'];
          $filename = $file->getClientOriginalName();
          $nameConvert = date('H-i-sYmd').$filename;
          $file->move(public_path().'/img/couser', $nameConvert);
      }else{
          $nameConvert= 'couser.jpg';
      }
          $db->id_user = $id;
          $db->picture = $input['picuture'];
          $db->title = $input['title'];
          $db->who = $input['who'];
          $db->information = $input['information'];
          $db->study = $input['study'];
          $db->type = $input['type'];
          $db->program = $input['program'];
          $db->opentime =  $input['opentime'];
          $db->closetime =  $input['closetime'];
          $db->timeplan = $input['timeplan'];
          $db->typeCourse = '2';

          $db->save();
          return redirect('/trang-ca-nhan-'.$id);
      }
      public function editing_couser(Request $request, $couserid){
        $input = $request->all();
        $id_user = DB::table('cousers')->where('id', '=', $couserid)->get();
        if($files=$request->file('coverMain')){
            $file = $input['coverMain'];
            $filename = $file->getClientOriginalName();
            $nameConvert = date('H-i-sYmd').$filename;
            $file->move(public_path().'/img/couser', $nameConvert);
        }else{
            $nameConvert= 'couser.jpg';
        }

        if($id_user[0]->typeCouser == '1') {
          $profile= ([
              'picture' => $nameConvert,
              'title' => $input['title'],
              'who' => $input['who'],
              'information' => $input['information'],
              'study' => $input['study'],
              'type' => $input['type'],
              'program' => $input['program'],
              'timetype1' => json_encode($input['morning']),
              'price' =>  $input['price'],
              'typeclass' => $input['typeclass']
          ]);
        }else if($id_user[0]->typeCourse == '2') {
          $arr1=array('morning'=>$morning,'afternoon'=>$afternoon, 'night'=> $night );
          $profile= ([
              'picture' => $nameConvert,
              'title' => $input['title'],
              'who' => $input['who'],
              'information' => $input['information'],
              'study' => $input['study'],
              'type' => $input['type'],
              'program' => $input['program'],
              'opentime' =>  $input['opentime'],
              'price' =>  $input['price'],
              'closetime' => $input['closetime']
          ]);
        }

        DB::table('cousers')->where('id', $couserid)->update($profile);
        return redirect('/trang-ca-nhan-'.$couserid);
      }

      public function edit_couser($couserid){
          $couser = DB::table('cousers')->where('id', '=', $couserid)->get();
          return view('couser.edit', ['couser' => $couser ]);
      }

      public function register_couser(Request $request){
        $input = $request->all();
        $id = $input['user_login'];
        $db = new Registercousers;

        $db->id_user = $id;
        $db->planmoment = $input['planmoment'];
        $db->plantime = $input['plantime'];
        $db->price = $input['price'];
        $db->couser = $input['selectCouser'];

        $db->save();
        return redirect('/');
      }

      public function mange_student() {
        $id = Auth::id();
        $id_student = DB::table('registercousers')->join('users', 'users.id', '=', 'registercousers.id_user')->where('registercousers.teacher', '=', $id)->get();

        return view('couser.managestudent', ['student' => $id_student ]);
      }
}
