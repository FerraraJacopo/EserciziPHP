<html>
    <title>Login</title>
    <body>
        <h2>Login</h2>
        <form action="presentazione.php" method="post">
            <label for="mail">Mail</label>
            <input type="email" name="mail" id="mail"><br>
            <label for="pwd">Password</label>
            <input type="password" name="pwd" id="pwd"><br>
            <input type="submit" value="Accedi">
        </form>
        <?php
        if(!empty($_GET["Error"])){
            echo $_GET["Error"];
        }
        ?>
    </body>
</html>