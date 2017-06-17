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
            view()->share(['mess'=>$mess]);
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
