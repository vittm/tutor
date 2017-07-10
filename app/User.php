<?php

namespace App;

use Auth;
use DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Input;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','active','gender','avatar','info','like_blog','address','money_time','subjects','support',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function isAdmin()
    {
        return $this->active; // this looks for an admin column in your users table
    }

    public static  function ham_loc_dau($st){
     $codau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă", "ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề" ,"ế","ệ","ể","ễ", "ì","í","ị","ỉ","ĩ", "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ" ,"ờ","ớ","ợ","ở","ỡ", "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ", "ỳ","ý","ỵ","ỷ","ỹ", "đ", "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă" ,"Ằ","Ắ","Ặ","Ẳ","Ẵ", "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ", "Ì","Í","Ị","Ỉ","Ĩ", "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ" ,"Ờ","Ớ","Ợ","Ở","Ỡ", "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ", "Ỳ","Ý","Ỵ","Ỷ","Ỹ", "Đ"," ");
     $khongdau=array("a","a","a","a","a","a","a","a","a","a","a" ,"a","a","a","a","a","a", "e","e","e","e","e","e","e","e","e","e","e", "i","i","i","i","i", "o","o","o","o","o","o","o","o","o","o","o","o" ,"o","o","o","o","o", "u","u","u","u","u","u","u","u","u","u","u", "y","y","y","y","y", "d", "A","A","A","A","A","A","A","A","A","A","A","A" ,"A","A","A","A","A", "E","E","E","E","E","E","E","E","E","E","E", "I","I","I","I","I", "O","O","O","O","O","O","O","O","O","O","O","O" ,"O","O","O","O","O", "U","U","U","U","U","U","U","U","U","U","U", "Y","Y","Y","Y","Y", "D"," ");
     return str_replace($codau,$khongdau,$st);
    }

    public static  function convert_string($st){
     $codau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă", "ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề" ,"ế","ệ","ể","ễ", "ì","í","ị","ỉ","ĩ", "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ" ,"ờ","ớ","ợ","ở","ỡ", "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ", "ỳ","ý","ỵ","ỷ","ỹ", "đ", "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă" ,"Ằ","Ắ","Ặ","Ẳ","Ẵ", "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ", "Ì","Í","Ị","Ỉ","Ĩ", "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ" ,"Ờ","Ớ","Ợ","Ở","Ỡ", "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ", "Ỳ","Ý","Ỵ","Ỷ","Ỹ", "Đ"," ");
     $khongdau=array("a","a","a","a","a","a","a","a","a","a","a" ,"a","a","a","a","a","a", "e","e","e","e","e","e","e","e","e","e","e", "i","i","i","i","i", "o","o","o","o","o","o","o","o","o","o","o","o" ,"o","o","o","o","o", "u","u","u","u","u","u","u","u","u","u","u", "y","y","y","y","y", "d", "A","A","A","A","A","A","A","A","A","A","A","A" ,"A","A","A","A","A", "E","E","E","E","E","E","E","E","E","E","E", "I","I","I","I","I", "O","O","O","O","O","O","O","O","O","O","O","O" ,"O","O","O","O","O", "U","U","U","U","U","U","U","U","U","U","U", "Y","Y","Y","Y","Y", "D","-");
     return str_replace($codau,$khongdau,$st);
    }

    public function scopeFilterByRequest($query)
    {
        if(Input::get('coursehidden'))
        {
            $course= Input::get('coursehidden');
            $query->where([['cousers.information','=',$course]]);
        }
        if(Input::get('valueSubject'))
        {
            $course=Input::get('valueSubject');
            $query->where([['cousers.subjects','like' ,"%".$course."%"]]);
        }
        if(Input::get('address-find'))
        {
            $address= Input::get('address-find');

            $query->where('city','like' ,"%".$address."%");
        }
        if(Input::get('rating'))
        {
            $query->orderBy('sumRatings','desc')->where([['users.active','=','2']]);
        }

        if(Input::get('valueoraddress')){
             $query->where('address', 'like', "%".Input::get('valueoraddress')."%")->orWhere('field', 'like', "%".Input::get('valueoraddress')."%");
        }
        if(Input::get('lowestPrice'))
        {
            $query->join('cousers','users.id','cousers.id_user')->orderBy('courses.price','asc')->orderBy('users.ratings','asc')->groupBy('users.id');
        }
        return $query;
    }
  public static function jobs($query) {
    switch ($query) {
      case '1':
        $querys = 'Sinh Viên';
      break;
      case '2':
        $querys = 'Giáo Viên';
      break;
      case '3':
      $querys = 'Học Sinh';
      break;
      case '4':
        $querys = 'Khác';
      break;
      case '5':
      $querys = 'Giảng Viên';
      break;
      default:
      $querys = 'Khác';
      break;
    }
	  echo $querys;
  }
  public static function quanlity($quanlity) {
    switch ($quanlity) {
      case '1':
        $querys = '2 - 10 người';
      break;
      case '2':
        $querys = '10 - 20 người';
      break;
      case '3':
      $querys = 'trên 20 người';
      break;
      default:
        break;
    }
	  echo $querys;
  }
  public static function checkOnline(){
    if(Auth::check()){
      $query = DB::table('users')->where([['id', Auth::user()->id],['level_user','=','1']])->count();
      return $query;
    }
  }
}
