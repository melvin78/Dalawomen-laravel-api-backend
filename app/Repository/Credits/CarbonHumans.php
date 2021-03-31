<?php


namespace App\Repository\Credits;


use Carbon\Carbon;

class CarbonHumans
{

    public static function loantype($date)
    {
      $t=  new Carbon($date);

      return $t->diffForHumans();


    }

}
