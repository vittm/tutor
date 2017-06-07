<?php

namespace App\Http\Controllers;

use View;
use DB;
use Auth;
use App\User;
use App\Learns;
use App\Ratings;
use App\Messages;
use App\Http\Requests;
use Illuminate\Http\Request;
use File;
use Validator;
use Hash;
use App\Followers;
class UserController extends Controller
{

    public function __construct()
    {
    }
    public function myprofile($id)
    {
        $id_user = DB::table('users')->where('id', '=', $id)->get();
        $couser = DB::table('cousers')->where('id_user', '=', $id)->get();
        $post= DB::table('posts')->where('id_user', '=', $id)->get();
        $contact= explode(',', $id_user[0]->field);
        $subject= explode(',', $id_user[0]->subjects);
        $learn = DB::table('learns')->where('id_user', '=', $id)->get();
        $rating =DB::table('ratings')->where('id_user', '=', $id)->get();
        $content_teach = DB::table('ratings')->where('id_user', '=', $id)->sum('content_teach');
        $value_get = DB::table('ratings')->where('id_user', '=', $id)->sum('value_get');
        $connect = DB::table('ratings')->where('id_user', '=', $id)->sum('connect');
        $count_id = DB::table('ratings')->where('id_user', '=', $id)->count();
        $learn_teach = DB::table('ratings')->where('id_user', '=', $id)->sum('learn');
        $feeling = DB::table('ratings')->where('id_user', '=', $id)->sum('feeling');
        $cmt = DB::table('cmtprofiles')->join('users','cmtprofiles.id_user','=','users.id')->where('cmtprofiles.id_user', '=', $id)->get();
        $feedback = DB::table('feedbacks')->join('users','feedbacks.id_user','=','users.id')->join('projects','feedbacks.id_feed','=','projects.id')->where('feedbacks.id_user', '=', $id)->get();

        if($count_id === 0){
            $rating = 0;
            $content_teach = 0;
            $value_get = 0;
            $connect = 0;
            $learn_teach = 0;
            $feeling = 0;
            $count_id= 1;
        }else{
            $rating =DB::table('ratings')->where('id_user', '=', $id)->get();
            $content_teach = DB::table('ratings')->where('id_user', '=', $id)->sum('content_teach');
            $value_get = DB::table('ratings')->where('id_user', '=', $id)->sum('value_get');
            $connect = DB::table('ratings')->where('id_user', '=', $id)->sum('connect');
            $count_id = DB::table('ratings')->where('id_user', '=', $id)->count();
            $learn_teach = DB::table('ratings')->where('id_user', '=', $id)->sum('learn');
            $feeling = DB::table('ratings')->where('id_user', '=', $id)->sum('feeling');

        }
        if(Auth::check()){
            $idAuth= Auth::user()->id;
        }
        else{
            $idAuth= $id;
        }
        $id_student = DB::table('registercousers')->join('cousers', 'cousers.id', '=', 'registercousers.id_couser')->join('users', 'users.id', '=', 'registercousers.id_couser')->where([['registercousers.id_couser', '=', $id]])->get();
        $list_cousers = DB::table('cousers')->join('users', 'users.id', '=', 'cousers.id_user')->where('cousers.id_user', '=', $id)->get();
        $view= $id_user[0]->viewed + 1;

        //user_id là trang cá nhân của người khác
        //follower_id là của user
        $kkfollowers= DB::table('followers')->where([['follower_id','=',$idAuth],['user_id','=',$id_user[0]->id]])->count(); //button xem user hiện tại có theo dõi trên profile khác
        $zfollowers= DB::table('followers')->where([['follower_id','=',$id_user[0]->id]])->count(); //đang follow người ta
        $kfollowers= DB::table('followers')->where([['user_id','=',$id_user[0]->id]])->count(); // người ta theo dõi
        $listfollowers= DB::table('followers')->where([['user_id','=',$id_user[0]->id]])->get();
        $ratingsuser =  round(($content_teach+ $value_get + $connect + $feeling + $learn_teach)/($count_id*5),2);
        DB::table('users')->where('id', $id)->update(['sumRatings' => $ratingsuser , 'countRatings' => $count_id,'viewed' => $view ]);

        $job= json_decode($id_user[0]->job,JSON_BIGINT_AS_STRING);
        $status =  DB::table('users')->where('id', $idAuth )->select('id')->first();
        DB::table('users')->where('id', $id)->update(['level_user'=>'1']);
        return view('users.index', ['id_user' => $id_user,'ratings' => $rating,'kkfollowers'=>$kkfollowers,'kfollowers'=>$kfollowers,'zfollowers'=>$zfollowers,'list_cousers'=>$list_cousers,'student'=>$id_student,'couser'=>$couser,'contact'=>$contact,'subject' => $subject, 'content_teach' => $content_teach,'value_get' => $value_get, 'connect' => $connect, 'learn_teach' => $learn_teach, 'feeling' => $feeling, 'count_id' => $count_id, 'cmtprofiles' => $cmt,'feedbacks' => $feedback,'status' => $status,'post'=>$post,'job' => $job ]);
    }
    public function tab_pay()
    {
        return view('users.thanh_toan');
    }

    public function edit(Request $request, $id) {
        $id_user = DB::table('users')->where('id', '=', $id)->get();
        $time = json_decode($id_user[0]->time_learn,JSON_BIGINT_AS_STRING);
        $learn = DB::table('learns')->where('id_user', '=', $id)->get();
        $job= json_decode($id_user[0]->job,JSON_BIGINT_AS_STRING);
        $subject= explode(',', $id_user[0]->subjects);
        return view('users.edit', ['id_user' => $id_user,'subject' => $subject, 'learn' => $learn,'time'=> $time,'job' => $job ]);
    }
    public function editing_style(Request $request, $id){
      $input = $request->all();
      $id = $input['id_user'];

      if($files=$request->file('coverMain')){
          $file = $input['coverMain'];
          $filename = $file->getClientOriginalName();
          $nameConvert = date('H-i-sYmd').$filename;
          $file->move(public_path().'/img/cover', $nameConvert);
      }else{
          $nameConvert=$input['cover'];
      }
      if($files=$request->file('avatarMain')){
          $file1 = $input['avatarMain'];
          $filename = $file->getClientOriginalName();
          $nameConvert1 = date('H-i-sYmd').$filename1;
          $file->move(public_path().'/img/avatar', $nameConvert1);
      }else{
          $nameConvert1=$input['avatar'];
      }
        $profile= ([
          'cover' => $nameConvert,
          'avatar' => $nameConvert1
        ]);

        DB::table('users')->where('id', $id)->update($profile);
        return redirect('/chinh-sua-ca-nhan-'.$id);
    }
    public function editing_picture(Request $request, $id){
      $input = $request->all();
      $id = $input['id_user'];
      $id_user = DB::table('users')->where('id', '=', $id)->get();
      $images=array();
      if($files=$request->file('images')){
          if(json_decode($id_user[0]->picture) != null) {
            foreach( json_decode($id_user[0]->picture) as $value ){
              $file = public_path('img\picture\\'.$value);
              $result= File::delete( $file );
            }
          }
          foreach($files as $file){
              $name=$file->getClientOriginalName();
              $nameConvert = date('H-i-s==Y-m-d==').'-'.$name;
              $file->move('img/picture',$nameConvert);
              $images[]=$nameConvert;
          }
      }else {
        $images[] = $input['picture'];
      }
        $profile= ([
          'picture' => json_encode($images)
        ]);

        DB::table('users')->where('id', $id)->update($profile);
        return redirect('/chinh-sua-ca-nhan-'.$id);
    }
    public function editing_video(Request $request, $id){
      $input = $request->all();
      $id = $input['id_user'];
      $id_user = DB::table('users')->where('id', '=', $id)->get();
      $video=array();
      if($files=$request->file('video')){
          if(json_decode($id_user[0]->video) != null) {
            foreach( json_decode($id_user[0]->video) as $value ){
              $file = public_path('video\\'.$value);
              $result= File::delete( $file );
            }
          }
          foreach($files as $file){
              $name=$file->getClientOriginalName();
              $nameConvert = date('H-i-s==Y-m-d==').'-'.$name;
              $file->move('video/', $nameConvert);
              $video[]= $nameConvert;
          }
      }else {
        $video[] = $input['video'];
      }
        $profile= ([
          'video' => json_encode($video)
        ]);

        DB::table('users')->where('id', $id)->update($profile);
        return redirect('/chinh-sua-ca-nhan-'.$id);
    }
    public function editing_level(Request $request, $id){
      $input = $request->all();
      $id = $input['id_user'];
      $id_user = DB::table('users')->where('id', '=', $id)->get();
      $level=array();
      if($files=$request->file('level')){
          if(json_decode($id_user[0]->level) != null) {
            foreach( json_decode($id_user[0]->level) as $value ){
              $file = public_path('img\level\\'.$value);
              $result= File::delete( $file );
            }
          }
          foreach($files as $file){
              $name=$file->getClientOriginalName();
              $nameConvert = date('H-i-s==Y-m-d==').'-'.$name;
              $file->move('img/level',$nameConvert);
              $level[]= $nameConvert;
          }
      }else {
        $level[] = $input['level'];
      }
        $profile= ([
          'level' => json_encode($level)
        ]);

        DB::table('users')->where('id', $id)->update($profile);
        return redirect('/chinh-sua-ca-nhan-'.$id);
    }
    public function admin_credential_rules(array $data)
    {
      $messages = [
        'current-password.required' => 'Vui lòng nhập mật khẩu hiện tại',
        'password.required' => 'Đánh mật khẩu',
      ];

      $validator = Validator::make($data, [
        'current-password' => 'required|same:current-password',
        'password' => 'required|same:password',
        'password_confirmation' => 'required|same:password',
      ], $messages);

      return $validator;
    }
    public function editing_password(Request $request, $id){
      $input = $request->all();
      $id = $input['id_user'];
      if(Auth::Check())
          {
            $request_data = $request->All();
            $validator = $this->admin_credential_rules($request_data);
            if($validator->fails())
            {
              return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
            }
            else
            {
              $current_password = Auth::User()->password;
              if(Hash::check($request_data['current-password'], $current_password))
              {
                $obj_user = User::find($id);
                $obj_user->password = Hash::make($request_data['password']);;
                $obj_user->save();
                return redirect('/chinh-sua-ca-nhan-'.$id);
              }
              else
              {
                $error = array('current-password' => 'Mật khẩu không đúng');
                return response()->json(array('error' => $error), 400);
              }
            }
          }
          else
          {
            return redirect()->to('/');
          }
    }
    public function editing(Request $request, $id){

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

        DB::table('users')->where('id', $id)->update($profile);
        return redirect('/chinh-sua-ca-nhan-'.$id);
    }


    public function message(Request $request){
        $value= $request->all();
        $db = new Messages;

        if(isset($value['target_mess']) == false)
        {
            $target=" ";
        }else{
            $target= $value['target_mess'];
        }

        $db->id_user = $value['id_user'];
        $db->id_to_mess= Auth::user()->id;
        $db->sender = $value['name_user'];
        $db->name = $value['name_user'];
        $db->subject = $value['subject'];
        $db->grade = $value['grade'];
        $db->begin = $value['begin-class'];
        $db->location = json_encode(array('value_1' => $value['location_class'], 'value_2' => $value['athome']));
        $db->time = $value['time-learn'];
        $db->content = $value['content'];
        $db->target = json_encode(array($target));

        $db->save();
        session()->flash('flash_message', 'Article was stored with success');
        return redirect('/');
    }

    public function listing_message($id){
        $listing= DB::table('messages')->where('id_user', $id)->orderBy('id','desc')->get();
        $dontread= DB::table('messages')->where([['id_user','=',$id], ['watch','=','0' ]])->orderBy('id','desc')->get();
        $read= DB::table('messages')->where([['id_user','=',$id ], ['watch','=','1' ]])->orderBy('id','desc')->get();
        return View('users.listing_messages',['listing_mess' => $listing,'dontread' => $dontread, 'read' => $read]);

    }

    public function detail_message($watch){
        DB::table('messages')->where('id', $watch)->update(['watch'=>'1']);
        $listing= DB::table('messages')->where('id', $watch)->get();
        $location= json_decode($listing[0]->location,JSON_BIGINT_AS_STRING);
        $target = json_decode($listing[0]->target,JSON_BIGINT_AS_STRING);
         return View('users.detail_message',['detail_message' => $listing,'target'=>$target,'location'=>$location]);
    }

    public function delete_message($id){
        DB::table('messages')->where('id', '=', $id)->delete();
        $iduser=  Auth::user()->id;
        return redirect('/danh-sach-tin-nhan-'.$iduser);
    }
    public function delete_all_message($id){
        DB::table('messages')->where('id', '=', $id)->delete();
        $iduser=  Auth::user()->id;
        return redirect('/danh-sach-tin-nhan-'.$iduser);
    }
    public function agreeinvite($id,$idmess){
        $user= DB::table('messages')->where([['id_user','=',$id], ['id','=',$idmess ]])->get();
        $db = new Messages;
        foreach ($user as $key => $value) {
            $db->id_user = $value->id_to_mess;
            $db->sender = 'Hệ Thống';
            $db->name = Auth::user()->name;
            $db->subject = $value->subject;
            $db->time = $value->time;
            $db->content = 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư '.Auth::user()->name .' đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn';
            $db->type_mail= '1';
        }
        $db->save();
        return redirect('/danh-sach-tin-nhan-'.Auth::user()->id);

    }
    public function follow($id,$user_id){
      $db = new Followers;
      $find= DB::table('followers')->join('users', 'users.id', '=', 'followers.user_id')->where([['follower_id','=',$user_id],['user_id','=',$id]])->count();
      if($find > 0){
          $find= DB::table('followers')->join('users', 'users.id', '=', 'followers.user_id')->where([['follower_id','=',$user_id],['user_id','=',$id]])->delete();
          return 'unfollow';
      }else {
        $db->user_id = $id;
        $db->follower_id = $user_id;
        $db->save();
        return 'okay';
      }
    }
}
