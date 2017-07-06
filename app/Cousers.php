<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Cousers extends Authenticatable
{
    public static function calculateDate ($day) {
      $daym =  $day;
      $sepparator = '-';
      $partsExp = explode($sepparator, $daym);
      $d= 8;
      $date_exp= $d - (strtotime(date('Y-m-d')) - strtotime($day)) / (60 * 60 * 24);
      $date= date( 'Y-m-d');
      $new_date = strtotime ( '+'.$date_exp.'day' , strtotime ( $date ) ) ;
      $new_date = date ( 'd-m-Y' , $new_date );
      $parts = explode($sepparator, $new_date);
      $dayForDate = date("w", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));
      echo "Hạn phí khoá học ";
      if($date_exp > 0 ) echo $date_exp; else echo '0';
      echo " ngày, Thứ ";
      if($dayForDate == 0) echo  'CN';   if ($dayForDate == 6) echo 'Bảy';
      if($dayForDate!= 0 && $dayForDate !=6) echo ' '.$dayForDate,'ngày '.$new_date ;
    }
}
