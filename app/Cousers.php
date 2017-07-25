<?php

namespace App;

use DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cousers extends Authenticatable
{
    public static function calculateDate ($day) {
      $daym =  $day;
      $sepparator = '-';
      $partsExp = explode($sepparator, $daym);
      $d= 7;
      $date_exp= $d - (strtotime(date('Y-m-d')) - strtotime($day)) / (60 * 60 * 24);
      $date= date( 'Y-m-d');
      $new_date = strtotime ( '+'.$date_exp.'day' , strtotime ( $date ) ) ;
      $new_date = date ( 'd-m-Y' , $new_date );
      $parts = explode($sepparator, $new_date);
      $dayForDate = date("w", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));
      echo "Hạn phí khoá học sau ";
      if($date_exp > 0 ) echo $date_exp; else echo '0';
      echo " ngày, Thứ ";
      if($dayForDate == 0) echo  'CN';   if ($dayForDate == 6) echo 'Bảy';
      if($dayForDate!= 0 && $dayForDate !=6) echo ' '.$dayForDate,' ngày '.$new_date ;
    }

    public static function findCourse($sb) {
      $query = DB::table('cousers')->where('subjects','like','%'.$sb.'%');
      return $query;
    }
    public static function findTeacher($sb) {
      $query = DB::table('users')->join('cousers','cousers.id_user','users.id')->where('cousers.subjects','like','%'.$sb.'%')->groupBy('users.id');
      return $query;
    }
    public static function findStudent($sb) {
      $query = DB::table('cousers')->join('registercousers','registercousers.id_course','cousers.id')->where('cousers.subjects','like','%'.$sb.'%');
      return $query;
    }

    public static function list_subject($sb1,$sb1Img,$sb2,$sb2Img,$sb3,$sb3Img,$sb4,$sb4Img,$sb5,$sb5Img,$sb6,$sb6Img) {

      $arrayName1 = [
          [
            'name' =>$sb1,
             'img' => $sb1Img,
             'course' => self::findCourse($sb1)->count(),
             'teacher' => self::findTeacher($sb1)->count(),
             'student' => self::findStudent($sb1)->count()
          ],
          [
            'name' =>$sb2,
             'img' => $sb2Img,
             'course' => self::findCourse($sb2)->count(),
             'teacher' => self::findTeacher($sb2)->count(),
             'student' => self::findStudent($sb2)->count()
          ],
          [
            'name' =>$sb3,
             'img' => $sb3Img,
             'course' => self::findCourse($sb3)->count(),
             'teacher' => self::findTeacher($sb3)->count(),
             'student' => self::findStudent($sb3)->count()
          ],
          [
            'name' =>$sb4,
             'img' => $sb4Img,
             'course' => self::findCourse($sb4)->count(),
             'teacher' => self::findTeacher($sb4)->count(),
             'student' => self::findStudent($sb4)->count()
          ],
          [
            'name' =>$sb5,
             'img' => $sb5Img,
             'course' => self::findCourse($sb5)->count(),
             'teacher' => self::findTeacher($sb5)->count(),
             'student' => self::findStudent($sb5)->count()
          ],
          [
            'name' =>$sb6,
             'img' => $sb6Img,
             'course' => self::findCourse($sb6)->count(),
             'teacher' => self::findTeacher($sb6)->count(),
             'student' => self::findStudent($sb6)->count()
          ]
      ];
      $arrayName2 = [
          [
            'name' =>$sb1,
             'img' => $sb1Img,
             'course' => self::findCourse($sb1)->count(),
             'teacher' => self::findTeacher($sb1)->count(),
             'student' => self::findStudent($sb1)->count()
          ],
          [
            'name' =>$sb2,
             'img' => $sb2Img,
             'course' => self::findCourse($sb2)->count(),
             'teacher' => self::findTeacher($sb2)->count(),
             'student' => self::findStudent($sb2)->count()
          ],
        ];

        if($sb3 != ' ') {
          return $arrayName1;
        }else {
          return $arrayName2;
        }
    }

}
