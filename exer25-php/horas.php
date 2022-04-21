<?php
    $hora=$_POST["hora"];
    $vMinuto=$_POST["v_minuto"];

    $minuto=$hora*60;

    $totalMinutos=$vMinuto+$minuto;
    $segundos=$totalMinutos*60;
    function showInfo(){
        global $minuto,$totalMinutos,$segundos;
         
        echo "a hora convartida em minutos é = $minuto<br>
       o total de minutos é = $totalMinutos <br>
       o total de segundos é = $segundos";
    }

    showInfo();
?>