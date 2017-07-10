<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Slides;
use App\User;
use App\Posts;
use App\Vouchers;
Use App\Ratings;
use App\FeedbackHomes;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Notifications;

class WidgetController extends Controller
{

    public function index(Request $request)
    {
      if (isset($_GET['address-find'])){
        $search = User::filterByRequest($request)->get();
      }else {
        $search = DB::table('users')->where('active','=','2')->get();
      }
      $top_teacher = DB::table('users')->where('top_teacher','=','1')->orderBy('sumRatings','dess')->get();
      return view('search.index',['search'=>$search,'top_teacher'=>$top_teacher]);
    }

    public function adding_slider(Request $request){
        $value= $request->all();
        $db = new Slides;
        if($request->hasFile('images_slide')){
            $file = $value['images_slide'];
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/img/slider', $filename);
        }else{
            $filename=" ";
        }
        $db->title_big = $value['title_big'];
        $db->title_small = $value['title_small'];
        $db->name_button = $value['name_button'];
        $db->url_slide = $value['url_slide'];
        $db->images_slide = $filename;

        $db->save();

        return redirect('/admin/listing-slide');
    }
    public function adding_feedback(Request $request){
        $value= $request->all();
        $db = new Feedbackhomes;
        if($request->hasFile('images_feedback')){
            $file = $value['images_feedback'];
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/img/feedbacks', $filename);
        }else{
            $filename=" ";
        }
        $db->subject = $value['subject_feedback'];
        $db->name = $value['name_feedback'];
        $db->rating = $value['rating_feedback'];
        $db->cmt = $value['cmt_feedback'];
        $db->user= $value['user_feedback'];
        $db->images= $filename;

        $db->save();

        return redirect('/admin/feedback');
    }

    public function listing_slide(){
        $slide= DB::table('slides')->paginate(15);
        return view('admin.listing-slide',['slide'=>$slide]);
    }

    public function listing_feedback(){
        $feedback= DB::table('feedbackhomes')->paginate(15);
        return view('admin.listing-feedback',['feedback'=>$feedback]);
    }

    public function edit_slide($id){
        $slide= DB::table('slides')->where('id','=',$id)->get();
        return view('admin.edit-slide',['slide'=>$slide]);
    }

    public function edit_feedback($id){
        $feedback= DB::table('feedbackhomes')->where('id','=',$id)->get();
        $subject= explode(',', $feedback[0]->subject);
        return view('admin.edit-feedback',['feedback'=>$feedback,'subject'=> $subject]);
    }

    public function editing_slide(Request $request, $id){
        $value= $request->all();
        if($request->hasFile('images_slide')){
            $file = $value['images_slide'];
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/img/slider', $filename);
        }else{
            $filename=$value['images_slide_hidden'];
        }
        $slider = ([
            'title_big' => $value['title_big'],
            'title_small' => $value['title_small'],
            'name_button' => $value['name_button'],
            'url_slide' => $value['url_slide'],
            'images_slide' => $filename
        ]);
        DB::table('slides')->where('id', $id)->update($slider);
        return redirect('/admin/listing-slide');
    }
    public function editing_feedback(Request $request, $id){
        $value= $request->all();
        if($request->hasFile('images_feedback')){
            $file = $value['images_feedback'];
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/img/feedback', $filename);
        }else{
            $filename=$value['images_feedback_hidden'];
        }

        $feedback = ([
            'subject' => $value['subject_feedback'],
            'name' => $value['name_feedback'],
            'rating' => $value['rating_feedback'],
            'cmt' => $value['cmt_feedback'],
            'user' => $value['user_feedback'],
            'images' => $filename
        ]);
        DB::table('feedbackhomes')->where('id', $id)->update($feedback);
        return redirect('/admin/feedback');
    }
    public function destroy_slide($id){
         DB::table('slides')->where('id', $id)->delete();
        return redirect('/admin/listing-slide');
    }

    public function destroy_feedback($id){
         DB::table('feedbackhomes')->where('id', $id)->delete();
        return redirect('/admin/feedback');
    }

    public function update_text(Request $request){
        $list= $request->all();
        $id= $request->get('id_edit');
        $text= $request->get('text_value');
        foreach ( $id as $key =>$value)
        {
            DB::table('texts')->where('id', $id[ $key ])->update([
                        'text' => $text[$key]
                    ]);
        }
        return redirect('/admin/text');
    }

    public function delete_text($id){
        DB::table('texts')->where('id', $id)->delete();
        return redirect('/admin/text');
    }

    public function admin_cousers(){
        $bills= DB::table('users')->leftJoin('cousers','cousers.id_user','=','users.id')->where('cousers.action','0')->paginate(10);
        return view('admin.cousers',['bills'=>$bills]);
    }
    public function detail_user(Request $request, $id){
        $bills= DB::table('cousers')->leftJoin('users','users.id','cousers.id_user')->join('registercousers','registercousers.id_course','cousers.id')->select('users.name','registercousers.pay','registercousers.action','registercousers.code','cousers.*')->where('id_user',$id)->paginate(10);
        return view('admin.detail-user',['cousers'=>$bills]);
    }
    public function update_user(Request $request){
        $list= $request->all();
        $id= $request->get('id_edit');
        $text= $request->get('text_value');
        $active= $request->get('active');
        $email= $request->get('email_value');
        $top_teacher = $request->get('top_teacher');
        foreach ( $id as $key =>$value)
        {
            DB::table('users')->where('id', $id[ $key ])->update([
                        'name' => $text[$key], 'active' => $active[$key],'email' =>$email[$key],'top_teacher' => $top_teacher[$key]
                    ]);
        }
        return redirect('/admin/search');
    }

    public function delete_user($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin/thanh-vien');
    }

    public function voucher($id) {
         $voucher= DB::table('vouchers')->get();
         foreach ($voucher as $key => $value) {
            if($value->voucher == $id ){
                $price = $value -> price;
                return $price;
            }
         }
    }
    public function mangevoucher() {
        $voucher= DB::table('vouchers')->get();
        return view('admin.vouchers',['voucher'=>$voucher]);
    }
    public function add_voucher() {
        return view('admin.add-voucher');
    }
    public function adding_voucher(Request $request){
        $value= $request->all();
        $db = new Vouchers;
        $db->voucher = $value['name'];
        $db->price = $value['value-price'];
        $db->save();

        return redirect('/admin/manage-voucher');
    }
    public function delete_voucher($id){
        DB::table('vouchers')->where('id', $id)->delete();
        return redirect('/admin/manage-voucher');
    }

    public function show_index() {
        $wiget= DB::table('wigets')->get();
        return view('admin.show',['wiget'=>$wiget]);
    }

    public function update_show_index($id,$value){

            DB::table('wigets')->where('id', $id)->update([
                        'value' => $value
                    ]);
            echo 'ok';
    }

    public function review($id, Request $request) {
        $value= $request->all();
        $db = new Ratings;
        if($request->hasFile('imgRatings')){
            $file = $value['imgRatings'];
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/img/ratings', $filename);
        }else{
            $filename="NULL";
        }

        $db->img_ratings = $filename;
        $db->id_user = $value['id_user'];
        $db->id_post = Auth::user()->id;
        $db->content_teach = $value['js-score1'];
        $db->value_get = $value['js-score4'];
        $db->feeling = $value['js-score3'];
        $db->learn = $value['js-score5'];
        $db->feebacks = $value['contentReview'];
        $db->price = $value['js-score2'];
        $db->save();

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
          $name = DB::table('users')->where('id',$id)->first();
        $nDb = new Notifications;
        $nDb->id_user = $id ;
        $nDb->name_notification = 'Bạn có một đánh giá mới';
        $nDb->content_notification = '
          <p> Bạn hãy xem đánh giá của mình trong <a href="'.url('/trang-ca-nhan-'.$id.'-'.User::convert_string($name->name).'?tab=messages').'">phần đánh giá nhé </a> nhé.</p>
          '
        ;
        $nDb->save();

        return redirect('/trang-ca-nhan-'.$id.'-'.User::convert_string(Auth::user()->name).'?tab=messages');
    }
    public function reviewReply($id, Request $request) {
        $value= $request->all();
        $db = new Ratings;
        $zDB= new User;
        $db->id_user = $id;
        $db->img_ratings ="NULL";
        $db->id_post = Auth::user()->id;
        $db->id_child = $value['id_child'];
        $db->feebacks = $value['contentReview'];
        $db->save();
        $zDB->save();
        $name = DB::table('ratings')->join('users','users.id','ratings.id_post')->where('ratings.id',$value['id_child'])->first();
        $nDb = new Notifications;
        $nDb->id_user = $name->id_post;
        $nDb->name_notification = 'Bạn có một phản hồi từ đánh giá của bạn';
        $nDb->content_notification = '
          <p> Bạn hãy xem phản hồi đánh giá của mình trong <a href="'.url('/trang-ca-nhan-'.$id.'-'.User::convert_string($name->name).'?tab=messages').'">phần đánh giá </a> nhé.</p>
          '
        ;
        $nDb->save();

        return redirect('/trang-ca-nhan-'.$id.'-'.User::convert_string(Auth::user()->name).'?tab=messages');
    }
    //search users
    public function result_user(Request $request) {
      $value= $request->all();
      if(isset($value['search-phone'])){
          $phone= $value['search-phone'];
          $searchs = DB::table('users')->where('phone','LIKE','%'.$phone.'%')->get();
          return view('admin.result',['search'=>$searchs]);
      }else if (isset($value['search-bill'])){
          $code= $value['search-bill'];
          $bills= DB::table('cousers')->leftJoin('users','users.id','cousers.id_user')->join('registercousers','registercousers.id_course','cousers.id')->select('users.name','users.phone','registercousers.id','registercousers.pay','registercousers.action','registercousers.id_course','registercousers.code','registercousers.id_teacher','registercousers.pay','cousers.created_at','cousers.name_couser','cousers.typeclass','cousers.typeCouser','cousers.picture_couser','cousers.price')->where('registercousers.code',$code)->get();
          return view('admin.result',['bills'=>$bills]);
      }
    }
    public function pay_couser(Request $request) {
      $value= $request->all();
      $nDb = new Notifications;
      $id = $value['wam'];
      $id_teacher = $value['wan'];
      $array = ([
          'action' => '1'
      ]);
      $couser = DB::table('cousers')->leftJoin('users','users.id','=','cousers.id_user')->select('users.name','cousers.*')->where('cousers.id', '=', $value['couser'])->get();
      $nDb->id_user = $id_teacher;
      $nDb->name_notification = 'Thanh toán khóa học '. $couser[0]->name_couser .'';
      $nDb->content_notification = '
        <p> Chào '.Auth::user()->name .'</p>
        <p> Hệ thống xin thông báo khoá học <strong>'. $couser[0]->name_couser .'</strong> của bạn đã được thanh toán thành công. Bạn hãy vào trang <a href='.url('/quan-ly-hoc-vien').'>Quản lý học viên </a> để kiểm tra lại.</p>
        <p> Cảm ơn bạn </p>
        '
      ;
      $nDb->save();
      DB::table('registercousers')->where('id', $id)->update($array);
      return redirect('/admin/search');
    }
}
