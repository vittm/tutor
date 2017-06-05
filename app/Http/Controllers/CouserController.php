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
          $db->id = $id;
          $db->picture = $nameConvert;
          $db->title = $input['title'];
          $db->who = $input['who'];
          $db->information = $input['information'];
          $db->study = $input['study'];
          $db->type = $input['type'];
          $db->program = $input['program'];
          $db->timetype1 = json_encode($arr1);
          $db->price = $input['id_user'];
          $db->save();
        return redirect('/chinh-sua-ca-nhan-'.$id);
    }


}
