<!DOCTYPE html>
<html>
    <head>
        <title>Groups</title>
    </head>
    <body>
        <h2>Login</h2>
        <a href="index.php">Back</a><br/><br/>
        <form action="checklogin.php" method="POST">
            Enter email: <input type="text" name="email" required="required" /> <br/>
            Enter password: <input type="password" name="password" required="required" /> <br/>
            <input type="submit" value="Login" />
        </form>
    </body>
</html>