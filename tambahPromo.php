<?php
    include 'connect.php';

    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $batas_promo = $_POST['batas_promo'];
    $harga_awal = $_POST['harga_awal'];
    $harga_akhir = $_POST['harga_akhir'];

    $sql = 'INSERT INTO datapromo VALUE ("'.$nama.'","'.$keterangan.'","'.$batas_promo.'",
    "'.$harga_awal.'","'.$harga_akhir.'")';

    $result = mysqli_query($conn, $sql);

    if($result) {
      header('Location: dashboard.php');
    } else {
      echo 'Inserted Failed.';
    }
?>