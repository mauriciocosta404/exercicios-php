<?php
    $salary=$_POST["salary"];
    $comissao=$_POST["comissao"];
    $newSalary=$salary+($comissao*0.04);

    echo "o seu novo salario é = $newSalary";
?>