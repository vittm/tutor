<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Posts;
use App\Messages;
use App\Http\Requests;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function detailPosts($id)
    {
        $post= DB::table('posts')->join('users', 'users.id', '=', 'posts.id_user')->where('posts.id', '=', $id)->get();
        $time= json_decode($post[0]->time,JSON_BIGINT_AS_STRING);;
        $target=json_decode($post[0]->target,JSON_BIGINT_AS_STRING);
        return view('posts.detailPost',['post'=>$post,'time'=>$time, 'target'=>$target]);
    }

    public function posting(Request $request){
    	$value= $request->all();
        $db = new Posts;

        if(isset($value['target_mess']) == false)
        { 		
            $target=" ";
        }else{
            $value['target_mess'];
        }
        $db->avatar = Auth::user()->avatar;
        $db->id_user = $value['id_user'];
        $db->timeHouse = $value['house-time'];
        $db->timeWeek = $value['house-week'];
        $db->price = $value['price'];
        $db->sender = $value['name_user'];
        $db->name = $value['name_user'];
        $db->subject = $value['subject'];
        $db->grade = $value['grade'];
        $db->begin = $value['begin-class'];
        $db->location = $value['location_class'];
        $db->time = json_encode(array($value['time_posts']));
        $db->content = $value['content'];
        $db->target = json_encode(array($value['target_mess']));

        $db->save();
        session()->flash('flash_message', 'Article was stored with success');
        return redirect('/');
    }

    public function sentMess(Request $request){
        $value= $request->all();
        $db = new Messages;

        $db->id_user = $value['id_user'];
        $db->sender = $value['name_user'];
        $db->name = $value['name_user'];
        $db->phone = $value['phone-contact'];
        $db->content = $value['info_contact'];
        $db->save();
        return redirect('/');
    }


}
