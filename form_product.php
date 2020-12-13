<?php
//viusi corrections - see comments below amd rubric in moodle
//Variables definition
$name=$capitalisedName=$price=$discount=$discountQuantity=$finalPrice=$replacedMessage=null;

//Reference to php file where the functions are
include 'form_product_validation.php';

if ($_POST){
  //name format
  $name=$_POST['name'];
  //if the $name variable has been initialised and is not null
  if(($name))     //visusi corrections: Falta isset
     $capitalisedName = nameToCapitalLetters($name);
  //price value
  $price=$_POST['price'];
  //selected discount
   foreach ($_POST['discounts'] as $option)
    $discount = $option;

  //discountQuantity
  //if $discount and $price have been initialised and are not null
  if((isset($discount))&&(isset($price))){
    $finalPrice= discountCalculation($discount,$price);
  }
  //message replacement
  //if $finalPrice is false using !
  //visusi corrections - correct answer - if(!$finalPrice)
  if($finalPrice !== "True")
    $replacedMessage="Discount cannot be greater than price";
  else
    $replacedMessage=messageReplacement($capitalisedName,$finalPrice);
}//end
?>
<HTML>
<head>
    <title>Product Form</title>
</head>
<body>
    <H2>Product Form</H2>
    <h3>Fill the form with the product information, please.</h3>
    <!--use the METHOD that hide (don't show) the params in the url-->
  <FORM ACTION="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="POST">
        <!--name-->
        <b>Name:</b>
        <INPUT TYPE="text" NAME="name" value="Product" >
        <!--price-->
        <br><br><b> Price:</b><br><br>
       <input type="text" name="price" value="500" >
       <!--discount-->
          <br><br><b> Discount in €:</b><br><br>
       <select name="discounts[]">
           <option value="5" <?php if (isset($discount) && $discount=="5") echo "selected";?>>5</option>
           <option value="10" >10</option>
           <option value="15" >15</option>
           <option value="20" >20</option>
           <option value="25" >25</option>
       </select>
       <!--final price-->
          <br><br> <b>Final Price:</b><br><br>
       <input type="text" name="finalPrice" value=$finalPrice>
      <br><br>
      <INPUT TYPE="submit" VALUE="Enviar">
    </FORM>

    <?php
    //if $finalPrice or $replacedMessage have been initialised and aren't null value
    //visusi corrections - condition it has to be || instead of $$
    if ((isset($finalPrice))&&(isset($replacedMessage))){
        echo "<p><b>Form output</b></p>";
        echo "<p></p>"; //show message to the user
    }
  ?>
</body>
</HTML>
