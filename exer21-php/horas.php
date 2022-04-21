<?php
    $nht=$_POST["nht"];
    $sm=$_POST["sm"];
    $h_extras=$_POST["h_extras"];

    
    $vht=$nht*($sm/8);
    $v_extras=$h_extras*($sm/4);
    $sb=$nht*$vht;
    $qReceberHExtras=$h_extras*$v_extras;
    $qReceber=$sb+$qReceberHExtras;

    echo "receberás $qReceber";
?>