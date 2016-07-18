<?php
    //open connection to mysql db
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "dbnoel";
    $dbport = 3306;
    
    $connection = mysqli_connect($servername,$username,$password,$database) or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from tbl_employee";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
    

    //close the db connection
    mysqli_close($connection);
?>