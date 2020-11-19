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
foreach ( $dishes as $3 => $4 ){
        echo "$dishes",":","$3";echo ;

echo "<br>";

echo "Alarms: ";
foreach ( $alarm as $5 => $6 ){
        echo "$alarm",":","$5";echo ;

echo "<br>";

echo "Components: ";
foreach ( $com as $7 => $8 ){
        echo "$alarm",":","$7";echo ;
        
echo "<br>";

?>
