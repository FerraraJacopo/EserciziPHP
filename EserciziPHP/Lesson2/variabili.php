<?php
    $v1 = 123;
    var_dump($v1);
    $v1 = 12.25;
    var_dump($v1);
    $v1 = "ciao";
    var_dump($v1);

    echo "GET TYPE";
    $gettype = gettype($v1);
    var_dump($gettype);
    /*In PHP le variabili possono cambiare
      tipo di riferimento dinamicamente. 
    */
?>