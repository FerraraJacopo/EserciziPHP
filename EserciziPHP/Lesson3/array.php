<?php
//dichiaro una variabile array
    $nome_array = array();
    $nome_array2 = array("paolo", 23, "...");

    for($i = 0; $i < 3; $i++){
        echo "$nome_array2[$i] ";
    }

    /*$nome_array[<key>] = <valore>;
    Aggiungere un elemento in coda all'array
    */
    echo "</br>";
    $nome_array2[3] = "ELEMENTO NUOVO";

    for($i = 0; $i < 4; $i++){
        echo "$nome_array2[$i] ";
    }

    //count($nome_array) conta le celle contenute nell'array

    echo "</br><h2>Array associativo</h2>";
    $nome_array = array();
    $nome_array["key1"] = "Jacopo";
    $nome_array["key2"] = "Vacanza";

    foreach($nome_array as $key=>$value){
        echo "$key -> $value ";
    }

    echo "</br>";


    $nome_array3 = array("a" => "Mele", "b" => "Pere");
    foreach($nome_array3 as $key=>$value){
        echo "$key -> $value ";
    }
    echo "</br>";
    $carattere = str_split("ciao", 1);

    foreach($carattere as $value){
        echo "$value ";
    }


?>