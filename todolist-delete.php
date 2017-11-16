<?php include 'connectdb.php';?>

<?php 
	$id = $_GET['item_id'];
	$query = "DELETE FROM todolist where id=$id";
	mysql_query($query) or die(mysql_error());
	header('Location: todolist.php');
?>