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
      $db = new Cousers;
      if($files=$request->file('coverMain')){
          $file = $input['coverMain'];
          $filename = $file->getClientOriginalName();
          $nameConvert = date('H-i-sYmd').$filename;
          $file->move(public_path().'/img/couser', $nameConvert);
      }else{
          $nameConvert= 'couser.jpg';
      }
      if($input['night'] != null ){
        $night= $input['night'];
      }else {
        $night= 0;
      }
      if($input['morning'] != null ){
        $morning= $input['morning'];
      }else {
        $morning= 0;
      }
      if($input['afternoon'] != null ){
        $afternoon= $input['afternoon'];
      }else {
        $afternoon= 0;
      }
      $arr1=array('morning'=>$morning,'afternoon'=>$afternoon, 'night'=> $night );
          $db->id_user = $id;
          $db->picture = $nameConvert;
          $db->title = $input['title'];
          $db->who = $input['who'];
          $db->information = $input['information'];
          $db->study = $input['study'];
          $db->type = $input['type'];
          $db->program = $input['program'];
          $db->timetype1 = json_encode($arr1);
          $db->price = $input['id_user'];
          $db->typeCourse = '1';
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
      public function editing_couser(Request $request, $id){
        $input = $request->all();
        $id = $input['id_user'];


        $profile= ([
            'name' => $input['name'],
            'title' => $input['title-profile'],
            'field' => $input['edit-profile__field'],
            'subjects' => $input['filed-subject'],
            'date' => $input['edit-profile__date'],
            'gender' => $input['gender'],
            'ward' => $input['ward'],
            'district' =>  $input['distric'],
            'city' =>  $input['city'],
            'expericen' => $input['edit-profile__exper'],
            'jobs' => $input['edit-profile__jobs'],
            'subjects' => $input['filed-subject']
        ]);

        DB::table('couser')->where('id', $id)->update($profile);
        return redirect('/trang-ca-nhan-'.$id);
      }
      public function editing_opening(Request $request, $id){
        $input = $request->all();
        $id = $input['id_user'];


        $profile= ([
            'name' => $input['name'],
            'title' => $input['title-profile'],
            'field' => $input['edit-profile__field'],
            'subjects' => $input['filed-subject'],
            'date' => $input['edit-profile__date'],
            'gender' => $input['gender'],
            'ward' => $input['ward'],
            'district' =>  $input['distric'],
            'city' =>  $input['city'],
            'expericen' => $input['edit-profile__exper'],
            'jobs' => $input['edit-profile__jobs'],
            'subjects' => $input['filed-subject']
        ]);

        DB::table('couser')->where('id', $id)->update($profile);
        return redirect('/trang-ca-nhan-'.$id);
      }

      public function edit_couser($couserid){
          $couser = DB::table('cousers')->where('id', '=', $couserid)->get(); 
          return view('couser.edit', ['couser' => $couser ]);
      }

}
