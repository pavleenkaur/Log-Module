<?php
    $conn = mysql_connect("localhost","root","") or die(mysql_error());
    $sql = "CREATE DATABASE IF NOT EXISTS StudentDB";
    if(mysql_query($sql , $conn)){
        echo "Database Created Succesfully" ."</br>";
    }
    else{
        echo "Error creating database" ."</br>". mysql_error($conn);
    }
    mysql_select_db("StudentDB" , $conn);
    
    $sql1 = "CREATE TABLE IF NOT EXISTS studentDetails( 
        id int(11) UNIQUE, 
        username varchar(30) NOT NULL,
        email varchar(30) NOT NULL,
        password varchar(20) NOT NULL,
        course varchar(20) NOT NULL,
        year int(5) NOT NULL,
        mobile bigint(10) NOT NULL)";

    if ( mysql_query($sql1,$conn))
        echo "Table created Succesfully" ."</br>";
    else
        echo "Error creating Table"."</br>". mysql_error($conn);

    mysql_close($conn);
?>
