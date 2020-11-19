<?php
/*Vars*/
$time[0]="Morning ";
$time[1]="Noon ";
$time[2]="Afternoon ";
$time[3]="Evening ";
$time[4]="Night";
$dishes=array("Beef with mushroom sauce","spaghetti carbonara","Spanish omelette");
$alarm=array(8,12,14,16,20);
$com[0]="PC";
$com[1]="Mouse";
$com[2]="Keyboard";
$com[3]="i3core";
$com[4]="8GB RAM";
$com[5]="1TB";

echo "<br>";

echo "Times: ";
foreach ( $time as $1 => $2 ){
        echo "$time",":","$1";echo ;

echo "<br>";

echo "Dishes: ";
foreach ( $dishes as $1 => $2 ){
        echo "$dishes",":","$1";echo ;

echo "<br>";

echo "Alarms: ";
foreach ( $alarm as $1 => $2 ){
        echo "$alarm",":","$1";echo ;

echo "<br>";

echo "Components: ";
echo ;

echo "<br>";

?>
