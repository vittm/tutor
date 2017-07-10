<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Texts extends Model
{
	public static function printText($id){
		$db=  DB::table('texts')->where('id','=',$id)->select('text')->first();
		return $db->text;
	}
}

?>
