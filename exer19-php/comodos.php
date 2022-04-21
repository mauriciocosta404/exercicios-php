<?php
    $dimenssao_1=$_POST["dimenssao_1"];
    $dimenssao_2=$_POST["dimenssao_2"];

    $area=$dimenssao_1*$dimenssao_2;
    $potencia=$area*18;

    echo "a area será de $area<sup>2</sup><br>
    a potencia necessária é = $potencia";
?>