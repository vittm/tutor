<?php

namespace App;

use DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Comments extends Authenticatable
{
	public static function find($id,$idpost) {
		$find = DB::table('comments')->where([['id_comment','=',$id],['id_post','=',$idpost]])->join('users','users.id','=','comments.id_user')->select('comments.*','users.name','users.avatar','users.level_user');
	    return $find;
	}
	public static function resuilt($id, $idpost) {
		$post= DB::table('comments')->where([['id_comment','=',$id],['id_post','=',$idpost]])->join('users','users.id','=','comments.id_user')->select('comments.*','users.name','users.avatar','users.level_user')->get();
	    return $post;
	}
}
