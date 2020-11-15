<?php


  $days_1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);
  $days_2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
  $days_3 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28);

  $month['jaunary']=$days_1;
  $month['february']=$days_3;
  $month['march']=$days_1;
  $month['april']=$days_2;
  $month['may']=$days_1;
  $month['june']=$days_2;
  $month['july']=$days_2;
  $month['august']=$days_1;
  $month['september']=$days_2;
  $month['october']=$days_1;
  $month['november']=$days_2;
  $month['december']=$days_1;


    foreach ($month as $1 => $2 ) {
            echo "$1";
            echo ":";
        foreach ($2 as $3 => $4)  {
            echo " $4 ";
        }
        echo"</br>";
}

?>
