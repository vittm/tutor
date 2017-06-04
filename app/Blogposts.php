<?php

namespace App;

use DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Blogposts extends Authenticatable
{
	public static function countCmt($id){

        $post= DB::table('comments')->where('id_post','=',$id)->get();
        return count($post);
	}
	public static function topCmt($id){
        $post= DB::table('comments')->where('id_post','=',$id)->orderBy('vote','desc')->select('content')->get();

        foreach ($post as $value) {
                return $value->content;
        }
        
	}
        
}
