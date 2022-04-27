<?php 
    $number1="";
    $number2="";
    $option="";
    $result="";
    $message="";
    if(isset($_GET['number1'],$_GET['number2'],$_GET['option'])){
        $number1=$_GET['number1'];
        $number2=$_GET['number2'];
        $option=$_GET['option'];
      
        switch ($option) {
            case 'somar':
                $result=$number1+$number2;
                break;
            case 'subtrair':
                $result=$number1-$number2;
                break;
            case 'multiplicar':
                $result=$number1*$number2;
                break;
            case 'dividir':
                $result=$number1/$number2;
                break;       
        }
        $message="o resultado é = $result";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha calculadora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
        <form action="" method="get">
            <h2>calculadora</h2>
           
            <input type="number" placeholder="informe o primeiro valor" name="number1"><br>
           
            <input type="number" placeholder="informe o segundo valor" name="number2"><br>

            <select name="option" id="">
                <option value="somar">Somar</option>
                <option value="subtrair">Subtrair</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
            <input type="text" value="<?= $message?>" disabled>
            <input type="submit" value="calcular">
        </form>
    </div>
</body>
</html>