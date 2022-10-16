<?php
	include 'connect.php';
	
	$nama = $_GET['nama'];
	
	$datapromo  = mysqli_query($conn, "SELECT * FROM datapromo WHERE nama = $nama")[0];
	
    if (mysqli_num_rows($sql) == 0){
        echo "<script>
                alert('Data Promo Berhasil Diubah');
                document.location.href = 'dashboard.php';
              </script>";
    } else{
        echo "<script>
                alert('Data Promo Gagal Diubah');
                document.location.href = 'index.php';
              </script>";
    }

	header("location:dashboard.php");
?>