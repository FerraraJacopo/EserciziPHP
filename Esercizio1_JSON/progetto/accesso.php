<?php
$file_path = "credenziali.json";
$file = fopen( $file_path, 'r' );
$contenuto = file_get_contents( $file_path );
$json = json_decode( $contenuto, true );
$login = $_POST['login'];
$password = $_POST[ 'pwd'];
$accesso = false;
if ( $json === null ) {
    echo 'null';
} else {
    foreach ( $json[ 'utenti' ] as $utente ) {
        if ( $login === $utente[ 'login' ] && $password === $utente[ 'password' ] ) {
            echo "<h1>Accesso consentito. Benvenuto, $login</h1>";
            $accesso = true;
            break;

        }
    }

    if ( $accesso === false ) {
        echo '<h1>Accesso negato. Login o password errati</h1>';
    }
}
fclose($file);
?>