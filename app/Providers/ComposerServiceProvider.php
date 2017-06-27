<?php

namespace App\Providers;

use DB;
use View;
use Auth;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using Closure based composers...
       view()->composer('*', function ($view) {
        if (Auth::check()){
            $id= Auth::user()->id;
            $mess= DB::table('messages')->where([['id_user','=',$id], ['watch','=','0' ]])->count();
            $quanlityNotify= DB::table('notifications')->where([['id_user',$id],['nRead','0']])->count();
            $Notify= DB::table('notifications')->where([['id_user',$id],['nRead','0']])->limit(5)->orderBy('id', 'desc')->get();
            view()->share(['mess'=>$mess,'quanlityNotify'=>$quanlityNotify,'notify'=>$Notify]);
        }
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
