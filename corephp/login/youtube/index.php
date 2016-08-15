<?php
    session_start();
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="POST" action="login.php">
            <input type="text" name="username"><br>
            <input type="password" name="password"><br>
            <input type="submit" value="login">
        </form>
        
    </body>
</html>