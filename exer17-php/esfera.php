<?php
    $raio=$_POST["raio"];

    $comprimento=2*pi()*$raio;
    $area=pi()*(pow($raio,2));
    $volume=(3/4)*pi()*(pow($raio,3));
    echo "o comprimento é = $comprimento <br>
    a area é = $area <br>
    o volume é = $volume";
?>