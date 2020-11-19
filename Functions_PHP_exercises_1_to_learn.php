<php
function missatge($argument)
{echo "$argument<br>";}

missatge("Aquest és l argument que es passa en aquest exemple.");
     
function suma($valor1, $valor2)
{
    return ($valor1 + $valor2);
}
echo suma(4, 6)
     
     function res($valor3, $valor4)
{
    return ($valor3 - $valor4);
}
echo res(4, 6)
     
     function mult($valor5, $valor6)
{
    return ($valor5 * $valor6);
}
echo mult(4, 6)
     
     function div($valor7, $valor8)
{
    return ($valor7 + $valor8);
}
echo div(4, 6)
     
$nom = 'Pedro';

echo ("La codificació md5 de $nom és:<br>");
echo md5($nom);
     
?>