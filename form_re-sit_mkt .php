<?php
/*En primer lloc gracies per contestar al correu, pero tenc moltes diferencies d'opinio amb aquesta recuperacio ja que vam demanar ajuda als nostres companys que si han aprovat la asignatura ja que no estaves disponible per si teniem un problema i ni ells entenien l'objectiu d'aquesta recuperacio, m'agradaria si fos posible que ens donesis una petita prorroga per a poder si de cas tenir una oportunitat per a aprovar aquesta recuperacio. Gracies*/
//Variables definition
$mac=$is_valid_mac=null;

//Include statement
include 'form_re-sit_mkt_validation .php';
    
if ($_GET){//params are visible on url
  //mac - input text mac
  $mac=$_GET['mac'];
  if(isset($mac)){//si la variable $mac ha sigut inicialitzada i no es null
     $is_valid_mac = macValidation($mac);
  }
  //mac - seleccionada de la llista
  foreach ($_GET['macs'] as $maco){ 
      $macs=$maco;
  }

  if(isset($macs)){//si la variable que conté la mac seleccionada de la llista de macs ha sigut inicialitzada i no es null
     $is_valid_macs = macValidation($macs);
   }
  //message
  //utilitza la condició if not emprant el caracter ! per a donar un valor al missatge
  if(!$mac){
    $messageMac="Please fill in this field";
  }//missatge
  if(!$mac){
    $messageMacs="Please fill in this field"; // missatge
  }
      
}
?>
<HTML>
<head>
    <title>Re-sit marking task Form</title>
</head>
<body>
    <H2>Re-sit marking task Form</H2>
    <h5>Ompli la informació del formulari per a validar el format de les direccions MAC .</h3>
  <FORM ACTION="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="GET">
        <!--name-->
        <b>Mac:</b>
        <INPUT TYPE="text" NAME="mac" value="<?php echo $mac;?>" size=30 ></INPUT>
          <!--
           0A-00-27-00-00-14
           D2-C5-D3-68-E5-33
           E2-C5-D3-68-E5-33
           D0-C5-D3-68-E5-33
           D0-C5-D3-68-E5-32
         -->
       <!--macs-->
          <br><br><b> Macs:</b><br><br>
       <select name="macs[]">
           <option value="0A-00-27-00-00-14" >0A-00-27-00-00-14</option>
           <option value="D2-C5-D3-68-E5-33" >D2-C5-D3-68-E5-33</option>
           <option value="E2-C5-D3-68-E5-33" >E2-C5-D3-68-E5-33</option>
           <option value="D0-C5-D3-68-E5-33" >D0-C5-D3-68-E5-33</option>
           <option value="D0-C5-D3-68-E5-32" >D0-C5-D3-68-E5-32</option>
       </select>
      <br><br>
      <INPUT TYPE="submit" VALUE="validar mac & macs">
      </INPUT>
    </FORM>
    <?php
    //si $is_valid_mac i $is_valid_macs han sigut inicialitzades i no son null
    if((isset($is_valid_mac))&&(isset($is_valid_macs))){
        echo "<b>Form output</b>";
      if (!$is_valid_mac){ //si la mac (introduida al inut text) no es valida. Utilitza condició de negació !
         echo $is_valid_mac ."NOT valid<br>";//mostra el missatge
      }else{
         echo $is_valid_mac ."OK"; //mostra missatge (es valida)
      }
      if (!$is_valid_macs){//si la mac (seleccionada de la llista) no es valida. Utilitza condició de negació !
          echo $is_valid_macs . "NOT VALID";//mostra missatge
      }else{
        echo $is_valid_macs . "OK<br>";//mostra missatge (es valida)
      }
    }
  ?>
</body>
</HTML>
