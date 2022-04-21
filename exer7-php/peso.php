<?php
    $peso=$_POST["peso"];
    
    $newPeso=$peso+($peso*0.15);
    echo "se engordares 15% o seu peso será $newPeso";

    $newPeso=$peso+($peso*0.20);
    echo "<br> se engordares 20% o seu peso será $newPeso";
?>
