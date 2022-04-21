<?php
    $salary=$_POST["salary"];
    $minimumSalary=$_POST["minimum_salary"];

    $quantity=$salary/$minimumSalary;

    echo "recebeste $quantity salarios minimos";
?>