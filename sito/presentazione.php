<html>
    <title>Presentazione</title>
    <body>
        <h2>Presentazione</h2>
        
        <?php
        $inviato = false;
        if((isset($_POST["pwd"]) && !empty($_POST["pwd"])) && (isset($_POST["mail"]) && !empty($_POST["mail"]))){
            echo "<br>Mail: $_POST[mail]"; 
            echo "<br>Password: $_POST[pwd]"; 
        }else{
            header("Location: http://ferrara.jacopo.tave.osdb.it/sito/login.php?Error=Error");
        }
        ?>
        <br>
        <form action="login.php">
            <button>Torna al login</button>
        </form>
        </body>
</html>