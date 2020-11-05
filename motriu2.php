<?php
/*$month['january']="Happy new year";
$month['february']=28;*/
/*$month['march']=array("Rain","Sun");*/
$month=array (
    array(
        "name"=>"BDD"
    ),
    array(
        "name"=>"Web applications"
    ),
    array(
        "name"=>"Network services"
    ),
    array(
        "name"=>"Network systems"
    ));
foreach ( $month as $value ) {
    /*echo "$value","<br>";*/
    foreach ($value as $value_1 => $value_2){
echo "$value_1"," ","$value_2"," ";
}
    echo "<br>";
}
?>