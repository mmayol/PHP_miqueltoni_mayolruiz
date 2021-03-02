<?php
function macValidation($mac){
  //use filter_var PHP function
  //return a boolean variable:
  // true if the param contains a valid format for mac address and false if not

if (filter_var($mac,FILTER_VALIDATE_BOOLEAN)){
    echo("$mac is valid mac");
  } else{
    echo "<br>";
    echo("$mac is not valid mac");
  }
}

?>
