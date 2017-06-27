<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Auth;
use App\Comments;
use App\Blogposts;
use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
class BlogController extends Controller
{
    public function index()
    {
        $post= DB::table('blogposts')->join('users','users.id','=','blogposts.by')->select('blogposts.*','users.name','users.avatar','users.level_user','users.level_user')->get();
        $category= DB::table('categoryblogs')->get();
        return View('blog',['post'=>$post,'category'=>$category]);
    }
    public function detail($name,Comments $project)
    {   $post= DB::table('blogposts')->where('title_sym','=',$name)->join('users','users.id','=','blogposts.by')->select('blogposts.*','users.name','users.avatar','users.level_user')->get();
        $category= DB::table('categoryblogs')->get();
        $id= isset($post[0]) ? $post[0]->id : '';
        $id_category= isset($post[0]) ? $post[0]->category : '';
        $cmt = DB::table('comments')->where([['id_comment','=','0'],['id_post','=',$id]])->join('users','users.id','=','comments.id_user')->select('comments.*','users.name','users.avatar','users.level_user')->get();

        $more = DB::table('blogposts')->where('category','=',$id_category)->join('users','users.id','=','blogposts.by')->select('blogposts.*','users.name','users.avatar','users.level_user')->get();
        $resuiltVote= DB::table('blogposts')->where('id',$id)->select('vote')->get();
        $resuiltView=  DB::table('blogposts')->where('id','=',$id)->select('viewed')->get();
        foreach ($resuiltView as $key => $value) {
            DB::table('blogposts')->where('id',$id)->update([
                        'viewed'=>$value->viewed + 1
                    ]);
        }


        if($cmt == null){
            $cmt1 = ' ';
        }

        return View('blogs.detail',['post'=>$post,'category'=> $category,'comments'=>$cmt,'more'=> $more]);
    }

    public function listings($name)
    {
        $post= DB::table('blogposts')->join('users','users.id','=','blogposts.by')->where('category','=',$name)->get();
        $getcategory= $name;
        return View('blogs.category',['post'=>$post,'getcategory'=>$getcategory]);
    }
    public function post($name)
    {
    	$name = $name;
        return View('blogs.post',['name'=>$name]);
    }
    public function posting(Request $request){
    	$value= $request->all();
        $db = new Blogposts;
        if($request->hasFile('images_slide')){
            $file = $value['images_slide'];
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/img', $filename);
        }else{
            $filename=" ";
        }
        $db->by = Auth::user()->id;
        $db->title = $value['title'];
        $db->img= $filename;
        $db->content = $value['content'];
        $db->category = $value['category'];
        $db->type = $value['type_ask'];
        $userModel = new User;
        $db->title_sym = $userModel->convert_string($value['title']);
        $db->save();
        session()->flash('flash_message', 'Article was stored with success');
        return redirect('/');
    }
    public function commenting(Request $request){
    	$value= $request->all();
    	$db = new Comments;
    	$db->id_user = Auth::user()->id;
    	$db->id_post = $value['id_post'];
    	$db->content = $value['comment'];
    	$db->created_at= Carbon::now();
    	$db->save();
    	return redirect('/chi-tiet-'.$value['symbol']);
    }

    public function destroy_comments($id,$name){
        DB::table('comments')->where('id', $id)->delete();
        return redirect('/chi-tiet-'.$name);
    }

    public function comment_children(Request $request,$id,$name){
    	$value= $request->all();
    	$id_comment= $request->get('id_comment');
    	foreach ($id_comment as $key =>$value)
        {
            DB::table('comments')->insert([
                        'id_user'=>Auth::user()->id,
                        'id_post'=>$id,
                        'content'=>$request->get('comment')[$key],
                        'id_comment'=>$request->get('id_comment')[$key],
                        'created_at' => Carbon::now()
                    ]);
        }
    	return redirect('/chi-tiet-'.$name);
    }
    public function upvote($id){
         $resuiltVote= DB::table('blogposts')->where('id',$id)->select('vote')->get();
         $vote= DB::table('blogposts')->where('id',$id)->update([
                        'vote'=>$resuiltVote['0']->vote + 1
                    ]);
         $getValue= $resuiltVote['0']->vote;
         echo 'oke';
    }
    public function downvote($id){
         $resuiltVote= DB::table('blogposts')->where('id',$id)->select('vote')->get();
            DB::table('blogposts')->where('id',$id)->update([
                        'vote'=>$resuiltVote['0']->vote - 1
                    ]);
        echo 'oke';
    }
    public function folower($iduser){
        $id= Auth::user()->id;
        DB::table('users')->where('id',$id)->update([
                        'folower'=>json_encode($iduser)
                    ]);
        echo 'oke';
    }
    public function voteup_comments($id){
        $resuiltVoteCmt= DB::table('comments')->where('id',$id)->select('vote')->get();
        DB::table('comments')->where('id',$id)->update([
                        'vote'=> $resuiltVoteCmt['0']->vote + 1
                    ]);
        echo 'oke';
    }
    public function votedown_comments($id){
        $resuiltVoteCmt= DB::table('comments')->where('id',$id)->select('vote')->get();
        DB::table('comments')->where('id',$id)->update([
                        'vote'=> $resuiltVoteCmt['0']->vote - 1
                    ]);
        echo 'oke';
    }
}
