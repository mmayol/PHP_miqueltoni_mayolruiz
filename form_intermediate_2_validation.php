<?php

$name="Miquel Toni Mayol Ruiz";
function fullNameSplit($name){
return str_split ($name,6);
}
$sep=fullNameSplit($name);
foreach ($sep as $frag){
echo $frag, "<br>";}

echo "<br>","<br>";

$name2="Miquel Toni Mayol Ruiz";
function fullNameSplit2($name2){
return explode (" ",$name2);
}
$sep2=fullNameSplit2($name2);
foreach ($sep2 as $frag2){
echo $frag2, "<br>";}

echo "<br>","<br>";

function pwd_hush($passw){
    return pwd_hush($passw, PASSWORD_DEFAULT);
}
    
echo pwd_hush("tomeukelly")

?>