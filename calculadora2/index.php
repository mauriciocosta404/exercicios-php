<?php
    $number1=0;
    $number2=0;
    $result=0;

    if(isset($_GET['operation'],$_GET['num1'],$_GET['num2'])){
        
        $operation=$_GET['operation'];
        $number1=$_GET['num1'];
        $number2=$_GET['num2'];
        switch ($operation) {
            case '+':
                $result=$number1+$number2;
                break;
            case '-':
                $result=$number1-$number2;
                break;
            case '*':
                $result=$number1*$number2;
                break;
            case '/':
                $result=$number1/$number2;
                break;
        }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minha calculadora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form action="" method="get">
        <input type="text" class="result"  id="result" value="<?= $result?>" disabled>
        <label for="">valor1</label>
        <input type="number" name="num1" value="<?=$number1?>" placeholder="informe o primeiro valor">
        <label for="">valor 2</label>
        <input type="number" value="<?=$number2?>" name="num2" placeholder="informe o segundo valor">

        <div class="buttons">
            <input type="submit" value="+" name="operation">
            <input type="submit" value="-" name="operation">
            <input type="submit" value="*" name="operation">
            <input type="submit" value="/" name="operation">
        </div>
    </form>
    </div>
</body>
</html>