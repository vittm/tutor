<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index()
    {
        if(Auth::check()){
            DB::table('users')->where('id', Auth::user()->id)->update(['id_uni'=>Auth::user()->id]);
        }
        $slide= DB::table('slides')->get();
        $feedbacks= DB::table('feedbackhomes')->get();
        $subject= explode(',', $feedbacks[0]->subject);
        $show = DB::table('wigets')->get();
        return view('welcome',['slide'=>$slide, 'feedbacks' => $feedbacks, 'subject' => $subject,'show' => $show]);
    }
}
