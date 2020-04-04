<?php
	$link = mysqli_connect("127.0.0.1", "root","", "lib_management");
	$id=$_GET['id'];
	mysqli_query($link, "update book set status = 'Archive' where book_id='$id'")or die(mysqli_error($link));
	header('location:books.php');
?>