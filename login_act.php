<?php
session_start();
include 'admin/config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];

if(!empty ($uname) && !empty ($pass)){
	$sql = mysqli_query ($connect, "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'");
	$result = mysqli_num_rows($sql);
	if($result){
	$_SESSION['uname']=$uname;
	header("location:admin/index.php");
	}else{
	header("location:index.php?pesan=gagal");
	}
	}
?>