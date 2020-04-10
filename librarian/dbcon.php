<?php
$link = mysqli_connect("127.0.0.1", "root","", "lib_management");
if(!$link){
	die(mysqli_error($link));
}
// mysqli_select_db(mysqli_connect("127.0.0.1", "root", ""), "lib_management") or die(mysqli_error());
?>