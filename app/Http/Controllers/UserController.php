<?php

namespace App\Http\Controllers;

use View;
use DB;
use Auth;
use App\User  ;
use App\Learns;
use App\Ratings;
use App\Messages;
use App\Comments;
use App\Http\Requests;
use Illuminate\Http\Request;
use File;
use Validator;
use Hash;
use App\Followers;
use App\Notifications;
class UserController extends Controller
{

    public function __construct()
    {

    }
    public function myprofile($id)
    {
        $id_user = DB::table('users')->where('id', '=', $id)->get();
        $couser = DB::table('cousers')->where([['id_user', '=', $id]])->get();
        $post= DB::table('posts')->where('id_user', '=', $id)->get();
        $contact= explode(',', $id_user[0]->field);
        $subject= explode(',', $id_user[0]->subjects);
        $count_student = DB::table('registercousers')->where('id_teacher', '=', $id)->count();
        $question = DB::table('comments')->where('id_user', '=', $id)->orderBy('id', 'desc')->get();
        $cmt = DB::table('cmtprofiles')->join('users','cmtprofiles.id_user','=','users.id')->where('cmtprofiles.id_user', '=', $id)->get();
        $ratings = DB::table('ratings')->join('users','ratings.id_post','=','users.id')->where([['ratings.id_user', '=', $id],['id_child','==',0]])->select('ratings.*','users.name','users.avatar')->get();

        $count_id = DB::table('ratings')->where([['id_user', '=', $id],['id_child','==',0]])->count();

        if($count_id === 0){
            $rating = 0;
            $content_teach = 0;
            $value_get = 0;
            $price = 0;
            $learn_teach = 0;
            $feeling = 0;
            $count_id= 0;
            $ratingsuser = 0;
        }else{
            $content_teach = DB::table('ratings')->where([['id_user', '=', $id],['id_child','==',0]])->sum('content_teach');
            $value_get = DB::table('ratings')->where([['id_user', '=', $id],['id_child','==',0]])->sum('value_get');
            $price = DB::table('ratings')->where([['id_user', '=', $id],['id_child','==',0]])->sum('price');
            $count_id = DB::table('ratings')->where([['id_user', '=', $id],['id_child','==',0]])->count();
            $learn_teach = DB::table('ratings')->where([['id_user', '=', $id],['id_child','==',0]])->sum('learn');
            $feeling = DB::table('ratings')->where([['id_user', '=', $id],['id_child','==',0]])->sum('feeling');
            $ratingsuser =  round(($content_teach+ $value_get + $price + $feeling + $learn_teach)/($count_id*5),2);
        }


        DB::table('users')->where('id', $id)->update(['sumRatings' => $ratingsuser]);

        if(Auth::check()){
            $idAuth= Auth::user()->id;
        }
        else{
            $idAuth= $id;
        }
        $id_student = DB::table('registercousers')->join('cousers', 'cousers.id', '=', 'registercousers.id_course')->join('users', 'users.id', '=', 'cousers.id_user')->where([['registercousers.user', '=', $id]])->get();
        $list_cousers = DB::table('cousers')->join('users', 'users.id', '=', 'cousers.id_user')->where([['cousers.id_user', '=', $id_user[0]->id]])->get();


        //user_id là trang cá nhân của người khác
        //follower_id là của user
        $kkfollowers= DB::table('followers')->where([['follower_id','=',$idAuth],['user_id','=',$id_user[0]->id]])->count(); // có đang theo dõi người khác không
        $zfollowers= DB::table('followers')->where([['follower_id','=',$id_user[0]->id]])->count(); //đang follow người ta
        $kfollowers= DB::table('followers')->where([['user_id','=',$id_user[0]->id]])->count(); // người ta theo dõi
        $listfollowers= DB::table('followers')->join('users', 'users.id', '=', 'followers.user_id')->where([['follower_id','=',$id]])->get();
        $status =  DB::table('users')->where('id', $idAuth )->select('id')->first();
        return view('users.index', ['id_user' => $id_user,'ratings' => $ratings,'question'=>$question,'count_student'=>$count_student,'listfollowers'=>$listfollowers,'kkfollowers'=>$kkfollowers,'kfollowers'=>$kfollowers,'zfollowers'=>$zfollowers,'list_cousers'=>$list_cousers,'student'=>$id_student,'couser'=>$couser,'contact'=>$contact,'subject' => $subject,
         'content_teach' => $content_teach,'value_get' => $value_get, 'price' => $price, 'learn_teach' => $learn_teach, 'feeling' => $feeling, 'count_id' => $count_id, 'cmtprofiles' => $cmt,'status' => $status,'post'=>$post]);
    }
    public function tab_pay()
    {
        return view('users.thanh_toan');
    }

    public function edit(Request $request, $id) {
        $id_user = DB::table('users')->where('id', '=', $id)->get();
        $time = json_decode($id_user[0]->time_learn,JSON_BIGINT_AS_STRING);
        $job= json_decode($id_user[0]->job,JSON_BIGINT_AS_STRING);
        $subject= explode(',', $id_user[0]->subjects);
        return view('users.edit', ['id_user' => $id_user]);
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
      if($files1=$request->file('avatarMain')){
          $file1 = $input['avatarMain'];
          $filename1 = $file1->getClientOriginalName();
          $nameConvert1 = date('H-i-sYmd').$filename1;
          $file1->move(public_path().'/img/avatar', $nameConvert1);
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
    public function code_user(Request $request){
      $input = $request->all();
      $id = $input['id_user'];
      $id_user = DB::table('users')->where('id', $id)->get();
      $images=array();
      if($files=$request->file('images')){
          if(json_decode($id_user[0]->code_user) != null) {
            foreach( json_decode($id_user[0]->code_user) as $value ){
              $file = public_path('img\picture\\'.$value);
              $result= File::delete( $file );
            }
          }
          foreach($files as $file){
              $name=$file->getClientOriginalName();
              $nameConvert = date('H-i-s-Y-m-d-').'-'.$name;
              $file->move('img/picture',$nameConvert);
              $images[]=$nameConvert;
          }
      }else {
        $images[] = $input['picture'];
      }
        $profile= ([
          'code_user' => json_encode($images)
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
            'subjects' => $input['filed-subject'],
            'date' => $input['edit-profile__date'],
            'gender' => $input['gender'],
            'ward' => $input['ward'],
            'district' =>  $input['distric'],
            'city' =>  $input['city'],
            'educational' => $input['edit-profile__exper'],
            'jobs' => $input['edit-profile__jobs'],
            'subjects' => $input['filed-subject'],
            'info' => $input['edit-profile__info'],
            'experience' => $input['edit-profile__experience']
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
    public function comments(Request $request, $id){
      $value= $request->all();
      $db = new Comments;
      $nDb = new Notifications;
      $db->id_user = $id;
      $db->id_post = Auth::user()->id;
      $db->content= $value['question'];
      $db->save();

      $nDb->id_user = $id ;
      $nDb->name_notification = 'Bạn có một tin nhắn trong phần hỏi đáp';
      $nDb->content_notification = '
        <p> Bạn hãy trả lời tin nhăn trong <a href="'.url('/trang-ca-nhan-'.Auth::user()->id.'-'.User::convert_string(Auth::user()->name).'?tab=settings').'">phần hỏi đáp </a> nhé.</p>
        <br>
        <p>Câu hỏi: <strong>'.str_replace('<br />', PHP_EOL, $value['question']).'</strong> </p>
        '
      ;
      $nDb->save();

      return redirect('/trang-ca-nhan-'.$id.'-'.User::convert_string(Auth::user()->name).'?tab=settings');
    }
    public function replys(Request $request, $id){
      $value= $request->all();
      $nDb = new Notifications;

      $reply = ([
          'reply' => $value['reply'],
      ]);
      $find = DB::table('comments')->join('users','userd.id','=','comments.id_user')->where('id', $id)->get();
      $nDb->id_user = $find[0]->id_post ;
      $nDb->name_notification = 'Bạn có một phản hồi từ phần hỏi đáp';
      $nDb->content_notification = '
        <p> Bạn hãy vào trang cá nhân của <a href="'.url('/trang-ca-nhan-'.$find[0]->id_user.'-'.User::convert_string($find[0]->name).'?tab=settings').'"> để xem rõ hơn phần hỏi đáp </a> nhé.</p>
        <br>
        <p>Câu hỏi:<strong> '.$find[0]->content.'</strong></p>
        <br>
        <p>Câu trả lời: <strong>'.str_replace('<br />', PHP_EOL, $value['reply']).'</strong> </p>
        '
      ;
      $nDb->save();
      DB::table('comments')->where('id', $id)->update($reply);
      return redirect('/trang-ca-nhan-'.Auth::user()->id.'-'.User::convert_string(Auth::user()->name).'?tab=settings');
    }
    public function likes($id){
      $quanlity= DB::table('comments')->where('id', $id)->get();
      $number = 1;
      $vote = $quanlity[0]->vote;
      $like = ([
          'vote' => (int)$vote + (int)$number
      ]);
      DB::table('comments')->where('id', $id)->update($like);
      return 'okay';
    }
    public function notification(){
      $search = DB::table('notifications')->where('id_user',Auth::user()->id)->orderBy('id','desc')->paginate(10);
      return view('users.notification',['search'=>$search]);
    }
    public function notification_detail($id){
      $search = DB::table('notifications')->where('id',$id)->get();
      $read = ([
          'nRead' => 1
      ]);
      DB::table('notifications')->where('id', $id)->update($read);
      return view('users.notification-detail',['search'=>$search]);
    }
}
