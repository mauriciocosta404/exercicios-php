<?php
    $result=0;
    $message="";
    $r=0;
    if(isset($_GET['iqual'])){
        $result=$_GET['result'];
        $result=str_replace('=','',$result);
        $message=$result;

        if(strpos($message,'+')){
            $message=str_replace('+',' ',$message);
            $message=explode(' ',$message);
            $r= $message[0]+$message[1];
        }
        elseif(strpos($message,'-')){
            $message=str_replace('-',' ',$message);
            $message=explode(' ',$message);
            $r= $message[0]-$message[1];
        }
        elseif(strpos($message,'/')){
            $message=str_replace('/',' ',$message);
            $message=explode(' ',$message);
            $r= $message[0]/$message[1];
        }
        elseif(strpos($message,'*')){
            $message=str_replace('*',' ',$message);
            $message=explode(' ',$message);
            $r= $message[0]*$message[1];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="myName">
        <h1>Mauricio Costa</h1>
            <h2><?php echo $r;?></h2>
           
        </div>
        
        <div class="calculatorContainer">
            <h1>
                Calculadora
            </h1>
            
           <form action="" method="get">
           <input type="text"  name="result"  id="result"  value="<?=$r?>">
          
           <table>
                <tr>
                    <td><button class="button" value="C">C</button></td>
                    <td><button class="button" value="<"><</button></td>
                    <td><button class="button" value="/">/</button></td>
                    <td><button class="button" value="*">*</button></td>
                </tr>
                <tr>
                    <td><button class="button" value="7">7</button></td>
                    <td><button class="button" value="8">8</button></td>
                    <td><button class="button" value="9">9</button></td>
                    <td><button class="button" value="-">-</button></td>
                </tr>
                <tr>
                    <td><button class="button" value="4">4</button></td>
                    <td><button class="button" value="5">5</button></td>
                    <td><button class="button" value="6">6</button></td>
                    <td><button class="button" value="+">+</button></td>
                </tr>
                <tr>
                    <td><button class="button" value="1">1</button></td>
                    <td><button class="button" value="2">2</button></td>
                    <td><button class="button" value="3">3</button></td>
                    <td rowspan="2"><input name="iqual" type="submit" class="button" value="=" style="height: 106px;" name="operation" value="="></td>
                </tr>
                <tr>
                    <td colspan="2"><button class="button" value="0" style="width: 106px;">0</button></td>
                    <td><button class="button" value=".">.</button></td>
                    
                </tr>
            </table>
        </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>