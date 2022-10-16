<?php 
	include "connect.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = mysqli_query("SELECT * FROM sign
	WHERE username = '".$username."' AND password = '".$password."' ") 
	or die (mysqli_error()); 
			
	if(mysqli_num_rows($sql) == 0){
		echo '<script language = "javascript">
		alert("Username dan Password Salah! Silahkan Login Kembali."); 
		document.location="login.php";</script>';
	}else{
		$qry = mysqli_fetch_array($sql) or die (mysqli_error());
		
		$_SESSION['username'] = $qry['username'];
		$_SESSION['level'] = $qry['level'];
		
		echo '<script language = "javascript">
		alert("Anda berhasil Login!."); document.location="halaman.php";</script>';
	}
?>