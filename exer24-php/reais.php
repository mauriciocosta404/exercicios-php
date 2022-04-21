<?php
    $dinheiroReais=$_POST["dinheiro_reais"];
    $dinheiroDolar=$dinheiroReais/1.80;
    $dinheiroAlemao=$dinheiroReais/2.00;
    $dinheiroLibras=$dinheiroReais/3.57;

    echo "o dinhairo em dolar é $dinheiroDolar <br>
        o dinheiro em Alemão é $dinheiroAlemao <br>
        o dinheiro em libras é = $dinheiroLibras";
?>