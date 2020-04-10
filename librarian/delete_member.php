<?php
	$link = mysqli_connect("127.0.0.1", "root","", "lib_management");
	$id=$_GET['id'];
	mysqli_query($link, "delete from member where member_id='$id'") or die(mysqli_error($link));
	header('location:member.php');
?>