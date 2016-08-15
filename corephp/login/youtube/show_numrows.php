<?php
    $username = $_POST['username']; 
    echo $username;
    if($username)
    {
        $connection = mysql_connect("localhost","root","") or die ("Connection not successful");
        mysql_selectdb("phpreview") or die ("Can't find db");
        $query = mysql_query("select * from users where username = '" . $username ."'");
        $numrows = mysql_numrows($query);
        echo $numrows;
    }
    
?>