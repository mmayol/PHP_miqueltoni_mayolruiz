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

echo "Times: " .sizeof($time);
for($T=0 ; $T<count($time); $T++)
echo "<br>".$time[$T];

echo "<br>";

echo "Dishes: " .sizeof($dishes);
for($T=0 ; $T<count($dishes); $T++)
echo "<br>".$dishes[$T];

echo "<br>";

echo "Alarms: " .sizeof($alarm);
for($H=0 ; $H<count($alarm); $H++)
echo "<br>".$alarm[$H];

echo "<br>";

echo "Components: " .sizeof($com);
for($C=0 ; $C<count($com); $C++)
echo "<br>".$com[$C];

echo "<br>";

?>
