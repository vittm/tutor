<?php

namespace App\Http\Controllers;

use DB;
use App\Slides;
use App\User;
use App\Posts;
use App\Vouchers;
Use App\Feedbacks;
use App\FeedbackHomes;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Http\Request;

class WidgetController extends Controller
{

    public function index()
    {
        $search = DB::table('users')->leftJoin('learns','users.id','=','learns.id_user')->get();
        return view('search.index',['search'=>$search]);
    }

    public function search_teach(Request $request){
        $search = User::filterByRequest($request)->get();
		    return view('search.result',['search'=>$search]);
    }

    public function findClass(){
        $search = DB::table('posts')->get();
    	return view('search.findClass',['search'=>$search]);
    }
    public function search_class(Request $request){
        $search = Posts::filterClass($request)->get();
		return view('search.resultClass',['search'=>$search]);
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
        $bills= DB::table('cousers')->leftJoin('users','users.id','cousers.id_user')->select('users.name','cousers.*')->where('id_user',$id)->paginate(10);
        return view('admin.detail-user',['cousers'=>$bills]);
    }
    public function update_user(Request $request){
        $list= $request->all();
        $id= $request->get('id_edit');
        $text= $request->get('text_value');
        $active= $request->get('active');
        $email= $request->get('email_value');
        $pay= $request->get('pay');
        foreach ( $id as $key =>$value)
        {
            DB::table('users')->where('id', $id[ $key ])->update([
                        'name' => $text[$key], 'active' => $active[$key],'email' =>$email[$key],'pay' => $pay[$key]
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
        $db = new Feedbacks;
        $db->id_user = $value['id_user'];
        $db->content_feed = $value['contentReview'];
        $db->start = $value['start-review'];
        $db->save();

        return redirect('/trang-ca-nhan-'.$id);
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
          $bills= DB::table('users')->leftJoin('cousers','cousers.id_user','=','users.id')->where('cousers.code',$code)->get();
          return view('admin.result',['bills'=>$bills]);
      }
    }
    public function pay_couser(Request $request) {
      $value= $request->all();
      $id = $value['wam'];
      $id_couser = $value['wan'];
      $array = ([
          'action' => '1'
      ]);
      DB::table('cousers')->where('id', $id_couser)->update($array);
      return redirect('/admin/search');
    }
}
