<?php
    require('conexao.php');
    session_start();

    if(isset($_GET['name'])){
        if($_GET['name']!=""){
            $c=1; 
        $nome=$_GET['name'];
        $nomeSeparado=explode(' ',$nome); 
        $nome2=substr($nomeSeparado[0],0,$c);
        $nome3=end($nomeSeparado);
        $nomeFinal="$nome2$nome3@gmail.com";
     
       
        function verificar(){
            global $nome,$c,$nomeSeparado,$nome2,$nome3,$nomeFinal;
            $c++; 
            $nomeSeparado=explode(' ',$nome); 
            $nome2=substr($nomeSeparado[0],0,$c);
            $nome3=end($nomeSeparado);
            $nomeFinal="$nome2$nome3@gmail.com";
        } 


        function inserir($nome,$nomeFinal){
            global $conn,$pdoConn;
            $sql=$pdoConn->prepare("INSERT INTO data(nome,email) VALUES('$nome','$nomeFinal')");
            $sql->execute();    

        }
      
       $sqlSelect="SELECT email from data";
        $result = mysqli_query($conn, $sqlSelect);
    
        
  //  if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                if($row["email"]==$nomeFinal){
                    verificar();
                }            
        }
      }// else {
       // echo "0 results";
     // }
      inserir($nome,$nomeFinal);
  //  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <div class="container">
   <form action="" method="get">
        <input type="text" name="name" placeholder="informe o seu nome" id="" required >
        <input type="submit" value="converter">
    </form>
   </div>
    </main>
    <script src="script.js"></script>
</body>
</html>