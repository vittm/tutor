<?php

namespace App;

use DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ratings extends Authenticatable
{
  public static function find($idpost) {
		$find = DB::table('ratings')->where([['id_child','=',$idpost]])->join('users','users.id','=','ratings.id_post')->select('ratings.*','users.name','users.avatar');
	    return $find;
	}
  public static function resuilt($idpost) {
		$find = DB::table('ratings')->where([['id_child','=',$idpost]])->join('users','users.id','=','ratings.id_post')->select('ratings.*','users.name','users.avatar')->get();
	  return $find;
	}
}
