<?php
    $baseMaior=$_POST["base_maior"];
    $baseMenor=$_POST["base_menor"];
    $altura=$_POST["altura"];

    $area=(($baseMaior+$baseMenor)*$altura)/2;

    echo "a area é =$area";
?>