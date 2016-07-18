<?php
session_start();
if (isset($_POST['submit'])) {
    $errMsg = '';
    //username and password sent from Form
    $username = trim($_POST['username']);
    echo $username;
    header("Location:saved_sessions.php");
}
?>
<html>
    
    <head>
        
    </head>
    <body>
        <form action="saved_sessions.php" method="post">
            <input type="text" name="username"></br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>