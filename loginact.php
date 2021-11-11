<?php
	session_start();
	include "config.php";
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$sql="select id from login where username='$user' and password=('$pass')";
	// $query=mysql_query($sql);
	// $jumlah=mysql_num_rows($query);
	
	if($jumlah==1){
		$data=mysql_fetch_array($query);		
		$_SESSION['id']=$data['id'];		
		header("location:index.php");	
	}else{
		header("location:login.php?error=Maaf, username atau password anda salah");	
	}
?>