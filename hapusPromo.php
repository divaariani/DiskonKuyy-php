<?php
    include 'connect.php';

    $nama = $_GET['nama'];
	
	echo $nama;

	mysqli_query($conn,"DELETE FROM datapromo WHERE nama='$nama'")or die(mysqli_error());
	 
	header("location:dashboard.php");
?>