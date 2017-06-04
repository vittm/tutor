<?php

namespace App;

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

    public function ham_loc_dau($st){
     $codau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă", "ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề" ,"ế","ệ","ể","ễ", "ì","í","ị","ỉ","ĩ", "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ" ,"ờ","ớ","ợ","ở","ỡ", "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ", "ỳ","ý","ỵ","ỷ","ỹ", "đ", "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă" ,"Ằ","Ắ","Ặ","Ẳ","Ẵ", "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ", "Ì","Í","Ị","Ỉ","Ĩ", "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ" ,"Ờ","Ớ","Ợ","Ở","Ỡ", "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ", "Ỳ","Ý","Ỵ","Ỷ","Ỹ", "Đ"," "); 
     $khongdau=array("a","a","a","a","a","a","a","a","a","a","a" ,"a","a","a","a","a","a", "e","e","e","e","e","e","e","e","e","e","e", "i","i","i","i","i", "o","o","o","o","o","o","o","o","o","o","o","o" ,"o","o","o","o","o", "u","u","u","u","u","u","u","u","u","u","u", "y","y","y","y","y", "d", "A","A","A","A","A","A","A","A","A","A","A","A" ,"A","A","A","A","A", "E","E","E","E","E","E","E","E","E","E","E", "I","I","I","I","I", "O","O","O","O","O","O","O","O","O","O","O","O" ,"O","O","O","O","O", "U","U","U","U","U","U","U","U","U","U","U", "Y","Y","Y","Y","Y", "D"," "); 
     return str_replace($codau,$khongdau,$st);
    }

    public function convert_string($st){
     $codau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă", "ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề" ,"ế","ệ","ể","ễ", "ì","í","ị","ỉ","ĩ", "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ" ,"ờ","ớ","ợ","ở","ỡ", "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ", "ỳ","ý","ỵ","ỷ","ỹ", "đ", "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă" ,"Ằ","Ắ","Ặ","Ẳ","Ẵ", "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ", "Ì","Í","Ị","Ỉ","Ĩ", "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ" ,"Ờ","Ớ","Ợ","Ở","Ỡ", "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ", "Ỳ","Ý","Ỵ","Ỷ","Ỹ", "Đ"," "); 
     $khongdau=array("a","a","a","a","a","a","a","a","a","a","a" ,"a","a","a","a","a","a", "e","e","e","e","e","e","e","e","e","e","e", "i","i","i","i","i", "o","o","o","o","o","o","o","o","o","o","o","o" ,"o","o","o","o","o", "u","u","u","u","u","u","u","u","u","u","u", "y","y","y","y","y", "d", "A","A","A","A","A","A","A","A","A","A","A","A" ,"A","A","A","A","A", "E","E","E","E","E","E","E","E","E","E","E", "I","I","I","I","I", "O","O","O","O","O","O","O","O","O","O","O","O" ,"O","O","O","O","O", "U","U","U","U","U","U","U","U","U","U","U", "Y","Y","Y","Y","Y", "D","-"); 
     return str_replace($codau,$khongdau,$st);
    }

    public function scopeFilterByRequest($query)
    {
        if(Input::get('valueField'))
        {
            $query->where('field', 'like', "%".Input::get('valueField')."%");
        }
        if(Input::get('valueSubject'))
        {
            $query->where('subjects', 'like', "%".Input::get('valueSubject')."%");
        }
        if(Input::get('levle-find'))
        {
            $userModel = new User;
            $working = $userModel->ham_loc_dau(Input::get('levle-find'));
            $query->orwhere('working_uni', 'like', "%".$working."%");
            echo json_encode(Input::get('levle-find'));
        }
        if(Input::get('type_learn'))
        {
            $query->where('type_learn', 'like', "%".Input::get('type-learn-find')."%");
        }
        if(Input::get('address-find'))
        {
            $address= Input::get('address-find');

            $query->where('city','like' ,"%".$address."%");
        }
        if(Input::get('valueoraddress')){
             $query->where('address', 'like', "%".Input::get('valueoraddress')."%")->orWhere('field', 'like', "%".Input::get('valueoraddress')."%");
        }
        if(Input::get('rating'))
        {
            $query->orderBy('sumRatings','desc');
        }
        if(Input::get('like'))
        {
            $query->orderBy('like_blog','desc');
        }
        if(Input::get('lowestPrice'))
        {
            $query->orderBy('money_time','asc');
        }
        if(Input::get('highestPrice'))
        {
            $query->orderBy('money_time','desc');
        }
        return $query;
    }
}
