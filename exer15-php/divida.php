<?php
    $salario=$_POST["salario"];
    $quantidadeContas=$_POST["quantidade_contas"];
    $percentagem=($salario*0.02);

    for ($i=0; $i < $quantidadeContas ; $i++) { 
        $salario=$salario-$percentagem;
    }
    echo "no seu salário restará=$salario";
?>