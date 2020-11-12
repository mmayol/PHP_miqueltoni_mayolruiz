<?php
    echo "$_POST[nom]";
    echo " $_POST[email]<br><br>";
    foreach ($_POST['navegadors'] as $opcio)
                echo $opcio . "\n";
?>