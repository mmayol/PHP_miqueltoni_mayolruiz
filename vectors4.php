<?php

$key=array(
    "January" => array=(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31.),
    "Menu" => array=("Beef with mushroom sauce", "spaghetti carbonara", "Spanish omelette."),
    "Alarm times" => array=(8, 12, 14, 16, 20),
    "Product 123" => array=("PC", "Mouse", "Keyboard", "i3core", "8GB RAM", "1TB")
  );

foreach ($key as $k => $string){
  echo "$k: $string <br><br>";
}
?>
