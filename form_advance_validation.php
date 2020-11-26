<?php

function fullNameSplit($fullName){
  //use explode PHP function
  //return an array containing the $fullName param split by the space character
  return explode (" ",$fullName);
}

function encryptPass($pwd){
   //use  password_hash PHP function
  //return a string variable containing the $pwd param encrypted
  return password_hash($pwd, PASSWORD_DEFAULT);
}
function emailValidation($email){
    filter_var($email, FILTER_VALIDATE_EMAIL);
  //use filter_var PHP function
  //return a boolean variable:
  // true if the param $email contain a valid format for an email and false if not
}
function pwdValidation($pwd,$pwdConfirm){
  //Use the PHP strcmp function - string comparison: binary level
  //return a boolean variable
  //true if params are binaryly equal and false if not
  if (strcmp($pwd,$pwdConfirm) !== 0) 
 return False;
return True;
}

?>
