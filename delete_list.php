<?php
include 'connectdb.php';

$id = $_GET['item_id'];
$sql = "DELETE FROM todolist Where id=$id";
mysql_query($sql) or mysql_error();
header('Location: index.php');
?>