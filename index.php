<!DOCTYPE html>
<html>
    <head>
    <title>Groups</title>
    </head>
    <body>
        <?php
            echo "<p>Hello Boys</p>";
        ?>
        <form action="checklogin.php" method="POST">
            Enter email: <input type="text" name="email" required="required" /> <br/>
            Enter password: <input type="password" name="password" required="required" /> <br/>
            <input type="submit" value="Login" />
        </form>
        <br/><br/>
        <a href="register.php"> Not member yet ? Click her to register</a>
    </body>
</html>