<?php
    $value=$_POST["value"];
    for ($i=0; $i <=12; $i++) {
        $operation=$i*$value;
      echo "$i * $value = $operation <br>";
    }
?>
