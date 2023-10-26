<html>
    <title>Login</title>
    <body>
        <h2>Login</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="mail">Mail</label>
            <input type="email" name="mail" id="mail"><br>
            <label for="pwd">Password</label>
            <input type="password" name="pwd" id="pwd"><br>
            <input type="submit" value="Accedi">
        </form>
        <?php
        $inviato = false;
        if((isset($_POST["pwd"]) && !empty($_POST["pwd"])) && (isset($_POST["mail"]) && !empty($_POST["mail"]))){
            $inviato = true;
            header("Location: presentazione.php");
            exit;
        }else{
            if($inviato){
            
            echo "<br>ERRORE";
            }
        }
        ?>
    </body>
</html>