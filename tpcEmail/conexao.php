<?php
    $server="localhost";
    $user="root";
    $password="";
    $database="tarefaemail";

   

    

    $conn= mysqli_connect($server,$user,$password,$database);
    $pdoConn = new PDO("mysql:host=$server;dbname=$database", $user, $password);
?>


