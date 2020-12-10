<?php
/*
1. Given the matrix below,
develop the code you need to show the city and its assigned IES each one in one different line
exemple of what is expected in the screen:
Manacor: IES Manacor
......
*/
$citiesIES["Manacor"]= "IES Manacor";
$citiesIES["Palma"]= "IES Borja Moll";
$citiesIES["Inca"]= "IES Pau de Cases Noves";
$citiesIES["Porto Cristo"]="IES Porto Cristo de la Mar";
$citiesIES["Calvia"]="IES Son Ferrer";


asort($citiesIES);
foreach ($citiesIES as $a => $b){
    echo $a, $b, "<br>";
}

/*
2. Orden in alphabetical order the array of the exercise 1 using the php function
asort($array);
Show the same info than in exercise 1 but in alphabetical order
*/
/*
3. Transform the exercise 1 into a matrix using the structure of Associative matrixes:
$array['stringKey']=elementvalue;
and show the same info than in exercise 1
*/


 ?>
