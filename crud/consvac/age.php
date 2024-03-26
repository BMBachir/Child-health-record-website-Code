<?php

function calculAge(String $DateNaissance) {


    $DateDuJour = new DateTime();
  
    $date1 = $DateNaissance;
    $date2 = $DateDuJour->format('Y-m-d');

    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);

    $year1 = date('Y', $ts1);
    $year2 = date('Y', $ts2);

    $month1 = date('m', $ts1);
    $month2 = date('m', $ts2);

    $day1 = date('d', $ts1);
    $day2 = date('d', $ts2);

    $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
   
    
    if ($day2<$day1){
        $diff  = $diff  -1;   
    }
   
    return $diff;
} 
?>