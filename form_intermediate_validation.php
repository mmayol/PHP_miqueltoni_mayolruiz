<?php
function mailvalidation($value){
    filter_var($value, FILTER_VALIDATE_EMAIL);
}

    if (!mailvalidation('miqui.toni1@gmail.com', FILTER_VALIDATE_EMAIL)) {
        echo 'K';
        } else {
        echo 'NOT K';
        }

echo "<br>";

function passwordvalidation($value1,$value2){
if (strcmp($value1,$value2) == 0) 
 return True;
return False;
    }
echo passwordvalidation ('Pedro','Pedro');

?>