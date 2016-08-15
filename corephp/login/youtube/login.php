<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    if($username&&$password)
    {
        $connect = mysql_connect("server.cdatasystems.com.au","cdataco","8nch0rinG") or die ("Cant connect");
        mysql_selectdb("dbnoel") or die ("Can't find db");
        $query = mysql_query("SELECT * FROM users WHERE login = '" . $username ."'");
        $numrows = mysql_numrows($query);
        echo $numrows;
    }
    else{
        die("Please enter login info");
    }

 