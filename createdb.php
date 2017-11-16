<?php
    $con = mysql_connect("localhost","root","");
    if(!$con){
        die("Connection failed " . mysql_error());
    }
    $createdb = mysql_query("CREATE DATABASE todoelement", $con);
    if($createdb){
        echo "database created sucessfully";
    }
    else{
        die("Database not created " . mysql_error());
    }
?>