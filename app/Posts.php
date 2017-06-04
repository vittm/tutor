<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Input;

class Posts extends Authenticatable
{

	public function scopefilterClass($query)
    {
        
        if(Input::get('valueSubject'))
        {
            $query->where('subject', 'like', "%".Input::get('valueSubject')."%");
        }
        if(Input::get('levle-find'))
        {
            $query->orwhere('grade', 'like', "%".Input::get('levle-find')."%");
        }
    
        if(Input::get('address'))
        {
            $query->where('location', 'like', "%".Input::get('address-find')."%");
        }
        if(Input::get('news'))
        {
            $query->orderBy('id','desc');
        }
        if(Input::get('lowestPrice'))
        {
            $query->orderBy('price','asc');
        }
        if(Input::get('highestPrice'))
        {
            $query->orderBy('price','desc');
        }
        return $query;
    }
    
}
