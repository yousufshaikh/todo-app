<?php
    define('db', 'todoelement');
    define('dbhost', 'localhost');
    define('dbuser', 'root');
    define('dbpass', '');

    $con = mysql_connect(dbhost, dbuser, dbpass);
    if(!$con){
        die("not connected " . mysql_error());
    }
    mysql_select_db(db, $con) or die(mysql_error());
?>