<?php
    $anoNascimento=$_POST["ano_nascimento"];
    $anoActual=$_POST["ano_actual"];

    $anos=$anoActual-$anoNascimento;
    $meses=$anos*12;
    $dias=$anoActual*365;
    $semanas=$meses*4;
    
    echo "a sua idade em anos é = $anos
    <br> a sua idade em meses é = $meses
    <br>a sua idade em dias é = $dias
    <br>a sua idade em semanas é = $semanas";
?>