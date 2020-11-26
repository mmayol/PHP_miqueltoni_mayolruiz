<?php
//Variables definition
$fullName=$fullNameSplit=$email=$emailValidationMessage=$pwd=$pwdConfirm=$pwdValidationMessage=$encryptedPass=null;

//Include statement
//type below the php file name where your validation functions are
include 'form_advance_validation.php';

//add the global variable to retrieve values from the form according to the method
if ($_GET){
  //fullName format
  $fullName=$_GET['fullName'];
  if(isset($fullName))
     $fullNameSplit = fullNameSplit($fullName);
  $email=$_GET['email'];
  if(isset($email)){
    if(!emailValidation($email))
      $emailValidationMessage = "Bad EMail";
  }
  //password validation
  $pwd=$_GET['pwd'];
  $pwdConfirm=$_GET['pwdConfirm'];

  if((isset($pwd))&&(isset($pwdConfirm))){
    if(!pwdValidation($pwd,$pwdConfirm)){
      $pwdValidationMessage="<b>Wrong</b> Turn back at once.<br>";
    }else{
      $pwdValidationMessage="Nice";
    }
  }
  //password hash encryption
  if(isset($pwd))
     $encryptedPass = encryptPass($pwd);

}//end GET
?>
<HTML>
<head>
    <title>Advance Form</title>
</head>
<body>
    <H2>Advance Form</H2>
    <h3>Fill the form with the required information, please.</h3>
  <FORM ACTION="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="GET">
        <!--nom-->
        <b>Type your full name:</b> name, middle name, first surname nad second surname.
        <br>* Use the space character to separate them:<br><br>
        <INPUT TYPE="text" NAME="fullName" value="<?php echo $fullName;?>" Required>
        <!--email-->
        <br><br><b> Email account:</b><br><br>
       <input type="email" name="email" value="<?php echo $email;?>" Required>
       <!--password-->
          <br><br><b> Password:</b><br><br>
       <input type="password" name="pwd" value="<?php echo $pwd;?>" Required>
       <!--password confirmation-->
          <br><br> <b>Password confirmation:</b><br><br>
       <input type="password" name="pwdConfirm" value="<?php echo $pwdConfirm;?>" Required>
      <br><br>
      <INPUT TYPE="submit" VALUE="Enviar">
    </FORM>

    <?php
    if ((isset($fullName))||(isset($pwdValidationMessage)))
        echo "<p><b>Validation Form output</b></p>";
    //isset function check if a variable is has been defined and is not null
    if (isset($fullNameSplit)){
        echo "<b>The full name</b> is made of the sections below:<br>";
      foreach($fullNameSplit as $notfullName  ){
          //complete the foreach loop to show the split fullName in parts
        echo $notfullName;
        echo "<br>";
      }
    }
    //show the encrypted password
    if (isset($encryptedPass))
      echo $encryptedPass;
        //show the encypted password value
            echo "<br>";
    //show the pwdValidation message. If pass are equal
    if (isset($pwdValidationMessage))
      echo $pwdValidationMessage;
        //show the message about whether the passwords are equal or not
            echo "<br>";
    if (isset($emailValidationMessage))
      echo $emailValidationMessage;
  ?>
</body>
</HTML>
