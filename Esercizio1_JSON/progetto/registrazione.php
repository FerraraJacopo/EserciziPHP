<?php
$file_path = "credenziali.json";
$file = fopen( $file_path, 'w' );
$contenuto = file_get_contents( $file_path );
$json = json_decode( $contenuto, true );
$login = $_POST['login'];
$password = $_POST[ 'pwd'];
$registrato = false;
if ( $json === null ) {
    echo 'null';
    echo json_last_error_msg();
} else {
    foreach ( $json[ 'utenti' ] as $utente ) {
        if ( $login === $utente[ 'login' ] && $password === $utente[ 'password' ] ) {
            $regisrato = true;
            break;
        }
    }

    $dati = array("id" => 3, "login" => $login, "password" => $password);

    if ( $registrato === false ) {
        fwrite(json_encode($dati));
    }
}
fclose($file);
?>