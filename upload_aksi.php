<?php include 'header.php'; 
	  include 'connect.php';
	  include "excel_reader2.php";
?>

<?php
	// upload file xls
	$target = basename($_FILES['datapromo']['name']) ;
 
	// beri permisi agar file xls dapat di baca
	chmod($_FILES['datapromo']['name'],0777);
 
	// mengambil isi file xls
	$data = new Spreadsheet_Excel_Reader($_FILES['datapromo']['name'],false);

	// menghitung jumlah baris data yang ada
	$jumlah_baris = $data->rowcount($sheet_index=0);
 
	// jumlah default data yang berhasil di import
	$berhasil = 0;
	for ($i=4; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nama     = $data->val($i, 1);
	$keterangan   = $data->val($i, 2);
	$batas_promo  = $data->val($i, 3);
	$harga_awal  = $data->val($i, 4);
	$harga_akhir  = $data->val($i, 5);
 
	if($nama != "" && $keterangan != "" && $batas_promo != "" && $harga_awal != "" && $harga_akhir != ""){
		mysqli_query($connect,"INSERT into datapromo values('','$nama','$keterangan','$batas_promo','$harga_awal','$harga_akhir')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['datapromo']['name']);
 
// alihkan halaman ke index.php
header("location:dashboard.php?berhasil=$berhasil");
?>

<?php include 'footer.php'; ?>