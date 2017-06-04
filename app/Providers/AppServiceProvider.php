<?php

namespace App\Http\Controllers;
namespace App\Providers;

use DB;
use View;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        $text= DB::table('texts')->get();
        $sleft= DB::table('blogposts')->join('users','users.id','=','blogposts.by')->select('blogposts.*','users.name','users.avatar','users.level_user')->orderBy('viewed','desc')->get();
        $sright= DB::table('users')->get();
        $category= DB::table('categoryblogs')->get();
        view()->share(['text'=>$text,'sleft' => $sleft,'sright'=>$sright,'category'=> $category]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
