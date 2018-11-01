<!DOCTYPE html>
<html>
    <head>
        <title>Groups</title>
    </head>
    <body>
        <h2>Registration</h2>
        <a href="index.php">Back</a><br/><br/>
        <form action="register.php" method="POST">
            Email: <input type="text" name="email" required="required" /> <br/>
            Password: <input type="password" name="password" required="required" /> <br/>
            Birth date: Day<input type="text" name="bday" required="required"/> Month<input type="text" name="bmonth" required="required" /> Year<input type="text" name="byear" required="required" />
            <input type="submit" value="Register" />
        </form>
    </body>
</html>