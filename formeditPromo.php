<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>

<h1 class="mt-3 mb-3">︎⠀⠀⠀⠀⠀⠀</h1>
<h1 class="mt-3 mb-3">︎⠀⠀⠀⠀⠀⠀</h1>
<div class="section-title">
    <h2>Silahkan  <span>Update Promo</span></h2>
</div>
<form action="editPromo.php" method="POST">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Promo</label>
      <input type="text" class="form-control" name="nama" placeholder="isi Nama Promo" required>
    </div>

    <div class="mb-3">
      <label for="keterangan" class="form-label">Keterangan Promo</label>
      <input type="text" class="form-control" name="keterangan" placeholder="isi Keterangan Promo" required>
    </div>

    <div class="mb-3">
      <label for="batas_promo" class="form-label">Promo Berlaku Sampai</label>
      <input type="date" class="form-control" name="batas_promo" placeholder="Berlaku" required>
    </div>

	<div class="mb-3">
      <label for="harga_awal" class="form-label">Harga Awal (Rupiah)</label>
      <input type="text" class="form-control" name="harga_awal" placeholder="isi Harga Awal" required>
    </div>

	<div class="mb-3">
      <label for="harga_akhir" class="form-label">Harga Akhir (Rupiah)</label>
      <input type="text" class="form-control" name="harga_akhir" placeholder="isi Harga Akhir" required>
    </div>

    <div class="mb-3">
      <input type="submit" value="Simpan Perubahan" class="book-a-table-btn scrollto">
    </div>
  </form>

<?php include 'footer.php'; ?>