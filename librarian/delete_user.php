<?php
	$link = mysqli_connect("127.0.0.1", "root","", "lib_management");
	$id=$_GET['id'];
	mysqli_query($link, "delete from users where user_id='$id'") or die(mysqli_error($link));
	header('location:users.php');
?>