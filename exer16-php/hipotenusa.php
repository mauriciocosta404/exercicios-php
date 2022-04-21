<?php
    $catetoAdjacente=$_POST["cateto_adjacente"];
    $catetoOposto=$_POST["cateto_oposto"];

    $hipotenusa=sqrt(pow($catetoAdjacente,2)+pow($catetoOposto,2));
    echo "o resultado da hipotenusa é = $hipotenusa";
?>