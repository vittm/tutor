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
use App\Notifications;
use Session;

class CouserController extends Controller
{

    public function __construct()
    {
    }

    public function look(Request $request, $id) {
        $id_user = DB::table('users')->where('id', '=', $id)->get();
        $couser = DB::table('cousers')->leftJoin('users','users.id','=','cousers.id_user')->select('users.name','users.jobs','users.district','users.city','cousers.*')->where('id_user', '=', $id)->get();
        return view('couser.add', ['id_user' => $id_user, 'couser' => $couser]);
    }
    public function adding_couser(Request $request, $id){
      $input = $request->all();
      $id = $input['id_user'];
      $db = new Cousers;
      if($files=$request->file('imgCouser')){
          $file = $input['imgCouser'];
          $filename = $file->getClientOriginalName();
          $nameConvert = date('H-i-sYmd').$filename;
          $file->move(public_path().'/img/couser', $nameConvert);
      }else{
          $nameConvert= 'couser.jpg';
      }
          $db->id_user = $id;
          $db->picture_couser = $nameConvert;
          $db->name_couser = $input['title'];
          $db->who = $input['who'];
          $db->information = $input['information'];
          $db->study = $input['study'];
          $db->type = $input['type'];
          $db->program = $input['program'];
          $db->timetype1 = json_encode($input['morning']);
          $db->price = $input['price'];
          $db->typeCouser = '1';
          $db->typeclass = $input['typeclass'];
          $db->save();
        return redirect('/trang-ca-nhan-'.$id.'-'.User::convert_string(Auth::user()->name).'?tab=info');
    }
    public function adding_opening(Request $request, $id){
      $input = $request->all();
      $id = $input['id_user'];
      $db = new Cousers;
      if($files=$request->file('imgCouser')){
          $file = $input['imgCouser'];
          $filename = $file->getClientOriginalName();
          $nameConvert = date('H-i-sYmd').$filename;
          $file->move(public_path().'/img/couser', $nameConvert);
      }else{
          $nameConvert= 'couser.jpg';
      }
          $db->id_user = $id;
          $db->picture_couser = $nameConvert;
          $db->name_couser = $input['title'];
          $db->who = $input['who'];
          $db->information = $input['information'];
          $db->study = $input['study'];
          $db->type = $input['type'];
          $db->program = $input['program'];
          $db->opentime =  $input['opentime'];
          $db->closetime =  $input['closetime'];
          $db->timeplan = $input['timeplan'];
          $db->typeCouser = '2';
          $db->price = $input['price'];
          $db->save();
          return redirect('/trang-ca-nhan-'.$id.'-'.User::convert_string(Auth::user()->name).'?tab=info');
      }
      public function editing_couser(Request $request, $couserid){
        $input = $request->all();
        if($files=$request->file('imgCouser')){
            $file = $input['imgCouser'];
            $filename = $file->getClientOriginalName();
            $nameConvert = date('H-i-sYmd').$filename;
            $file->move(public_path().'/img/couser', $nameConvert);
        }else{
            $nameConvert= $input['picture'];
        }

        if($input['cousertype'] == '1') {
          $profile= ([
              'picture_couser' => $nameConvert,
              'name_couser' => $input['title'],
              'who' => $input['who'],
              'information' => $input['information'],
              'study' => $input['study'],
              'type' => $input['type'],
              'program' => $input['program'],
              'timetype1' => json_encode($input['morning']),
              'price' =>  $input['price'],
              'typeclass' => $input['typeclass']
          ]);
        }else if($input['cousertype'] == '2') {
          $profile= ([
              'picture_couser' => $nameConvert,
              'name_couser' => $input['title'],
              'who' => $input['who'],
              'information' => $input['information'],
              'study' => $input['study'],
              'type' => $input['type'],
              'program' => $input['program'],
              'opentime' =>  $input['opentime'],
              'timeplan' => $input['timeplan'],
              'price' =>  $input['price'],
              'closetime' => $input['closetime']
          ]);
        }

        DB::table('cousers')->where('id', $couserid)->update($profile);
        return redirect('/trang-ca-nhan-'.Auth::user()->id.'-'.User::convert_string(Auth::user()->name).'?tab=info');
      }

      public function edit_couser($couserid){
          $couser = DB::table('cousers')->where('cousers.id', '=', $couserid)->get();
          return view('couser.edit', ['couser' => $couser ]);
      }
      function random_numbers($char,$table,$find){
        $random_code= $char.rand(1, 900000000);
        $checkcode = DB::table($table)->where($find, '=',$random_code)->count();
        if($checkcode == 0){
          $code=$random_code;
          return $code;
        }else{
          self::random_numbers($char,$table,$find);
        }
      }
      public function register_couser(Request $request){
        $input = $request->all();
        $id = $input['user_login'];
        $db = new Registercousers;
        $nDb = new Notifications;
        $couser = DB::table('cousers')->leftJoin('users','users.id','=','cousers.id_user')->select('users.name','cousers.*')->where('cousers.id', '=', $input['selectCouser'])->get();
        $typeClass= (((($input['planmoment'] * 5 ) * $input['plantime']) * $couser[0]->price ) * 30)/100;
        $typeCouser = ($couser[0]->price * 30)/100;
        if($couser[0] -> typeclass == '1') $priceofclass = $typeClass;
        if($couser[0] -> typeCouser == '2') $priceofclass = $typeCouser;
        $db->pay = $priceofclass;
        $db->user = $id;
        $db->id_teacher = $input['id_teacher'];
        $db->planmoment = $input['planmoment'];
        $db->plantime = $input['plantime'];
        $db->id_course = $input['selectCouser'];
        $db->price = $couser[0]->price;
        $db->code = self::random_numbers('Wiis','registercousers','code');


        $nDb->id_user = $input['id_teacher'];
        $nDb->name_notification = 'Học viên đăng ký khoá học '. $couser[0]->name_couser .'';
        $nDb->content_notification = '
          <p> Chào '.Auth::user()->name .'</p>
          <p> Hệ thống thông báo bạn học viên <a href="'.url('/trang-ca-nhan').'-'.$couser[0]->id_user.'-'.User::convert_string($couser[0]->name).'">'. $couser[0]->name .'</a> đã đăng ký khoá học <strong>'. $couser[0]->name_couser .'</strong> của bạn. Bạn hãy vào trang <a href='.url('/quan-ly-hoc-vien').'>Quản lý học viên </a> của mình để xem chi tiết hơn.</p>
          '
        ;

        $couserNotify = DB::table('cousers')->leftJoin('users','users.id','=','cousers.id_user')->select('users.name','cousers.*')->where([['cousers.id', '=', $input['selectCouser']],['users.id','=',$input['id_teacher']]])->get();
        $gift_code= self::random_numbers('MSDT','registercousers','giftcode');
        Session::put('name_user', $couser[0]->name);
        Session::put('name_couser', $couserNotify[0]->name_couser);
        Session::put('giftcode', $gift_code);
        Session::put('teacher', $couserNotify[0]->name);
        Session::put('pricecourse', $priceofclass);
        $db->giftcode = $gift_code;
        $nDb->save();
        $db->save();
        return redirect('/trang-ca-nhan-'.$id.'-'.User::convert_string(Auth::user()->name).'?register=true');
      }

      public function mange_student() {
        $id = Auth::id();
        $id_student = DB::table('registercousers')->join('users', 'users.id', '=', 'registercousers.user')->leftjoin('cousers','cousers.id','registercousers.id_course')->select('users.name','users.avatar','users.district','users.city','users.phone','cousers.name_couser','cousers.typeclass','cousers.typeCouser','cousers.picture_couser','registercousers.*')->where('registercousers.id_teacher', '=', $id)->get();
        return view('couser.managestudent', ['student' => $id_student ]);
      }
}
