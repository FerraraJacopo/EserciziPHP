<?php
    /*
    Le doppie virgolette sono utilizzate per inserire
    variabili, riconosciute.
    L'apice singolo non indica una stringa,
    non viene interpretato.

    Lunghezza stringa = strlen()
    Maiuscolo = strtoupper()
    Minuscolo = strtolower()
    Eliminare spazi in testa e coda = trim()
    Numero di parole contenuto = str_word_count()
    Posizione prima occorrenza: strpos()
    Stringa al contrario: strrev()
    Sostituire una parte di stringa: str_replace()
    */
    $nome = "jacopo";
    
    echo "Nome: $nome ";
    echo '</br>Nome: $nome ';
    echo "</br>Lunghezza stringa: ".strlen($nome);
    echo "</br>Stringa convertita in maiuscolo: ".strtoupper($nome);
    echo "</br>Stringa convertita in minuscolo: ".strtolower($nome);
    $nome = "   pippo   pluto  ";
    echo "</br>nome: ".$nome;
    echo "</br>trim(nome): ".strlen($nome);
    echo "</br>trim(nome): ".strlen(trim($nome));
    echo "</br>Numero parole: ".str_word_count($nome);
    echo "</br>Prima occorrenza di pluto: ".strpos($nome, "pluto");
    echo "</br>Pluto al contrario: ".strrev($nome);
    echo "</br>Sostituisco pluto con ciao</br>".str_replace("pluto", "ciao", $nome);
    
    $numero = "123";
    var_dump($numero);
    $v1 = (int)($numero);
    var_dump($v1);
?>