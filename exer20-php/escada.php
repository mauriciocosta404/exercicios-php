<?php
    $angulo=$_POST["angulo"];
    $distancia=$_POST["distancia"];
    $calc=$distancia*($angulo*pi()/180);
    echo "a medida da escada é = $calc";
?>