<html>
    <title>Presentazione</title>
    <body>
        <h2>Presentazione</h2>
        
        <?php
            echo "<br>Mail: $_POST[mail]"; 
            echo "<br>Password: $_POST[pwd]"; 
        ?>
        <br>
        <form action="login.php">
            <button>Torna al login</button>
        </form>
        </body>
</html>
