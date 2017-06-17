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
        function deteleCouserExp()
        {
          $dCouser = $id_user = DB::table('cousers')->get();
          foreach ($dCouser as $key => $value) {
            $daym =  $value -> created_at;
            $sepparator = '-';
            $partsExp = explode($sepparator, $daym);
            $d=cal_days_in_month(CAL_GREGORIAN,$partsExp[1],$partsExp[0]);
            $date_exp= ($d + 1) - (strtotime(date('Y-m-d')) - strtotime($value -> created_at)) / (60 * 60 * 24);
            if($date_exp == 0 && $value->action == 0){
               return $value->id;
            }
          }
        }
        $idCouser = deteleCouserExp();
        DB::table('cousers')->where('id', $idCouser)->delete();
        DB::table('registercousers')->where('id_couser', $idCouser)->delete();
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
