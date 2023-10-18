<?php

/* 
    x==y      uguali
    x===y     strettamente uguali (stesso valore e tipo)
    x!=y      diverso
    x!==y     strettamente diverso
*/

    $a = 123;
    $b = "123";
    echo "uguali";
    if($a == $b) 
        echo " SI</br>";
    else
        echo " NO</br>";

    echo "strettamente uguali";
    if($a === $b) 
        echo " SI</br>";
    else
        echo " NO</br>";


    

?>