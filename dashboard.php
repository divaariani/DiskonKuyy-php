<?php include 'connect.php'; ?>
<?php include 'header.php'; ?>

    <h1 class="mt-3 mb-3">︎⠀⠀⠀⠀⠀⠀</h1>
	<h1 class="mt-3 mb-3">︎⠀⠀⠀⠀⠀⠀</h1>
	<div class="section-title">
		<h2>Daftar  <span>Promo</span></h2>
	</div>
    <a href="formtambahPromo.php" class="book-a-table-btn scrollto">Tambah</a>
	<h1>︎⠀⠀⠀⠀⠀⠀</h1>
    <table class="table">
      <thead class="table-dark"> <!-- table-info -->
        <tr>
          <th>Nama Promo</th>
          <th>Keterangan Promo</th>
          <th>Promo Berlaku Sampai</th>
          <th>Harga Awal (Rp)</th>
          <th>Harga Akhir (Rp)</th>
        </tr>
      </thead>
      <tbody>

        <?php 
          $sql = 'SELECT * FROM datapromo';

          $query = mysqli_query($conn, $sql);

          while ($row = mysqli_fetch_object($query)) {
        ?>

        <tr>
          <td><?php echo $row->nama; ?></td>
          <td><?php echo $row->keterangan; ?></td>
          <td><?php echo $row->batas_promo; ?></td>
          <td><?php echo $row->harga_awal; ?></td>
          <td><?php echo $row->harga_akhir; ?></td>
		  <td><a href="formeditPromo.php?nama=<?php echo $row->nama; ?>" >Edit</a></td>
		  <td><a href="hapusPromo.php?nama=<?php echo $row->nama; ?>" >Hapus</a></td>
        </tr>

        <?php 
          } if (!mysqli_num_rows($query)) {
            echo '<tr><td colspan="6" class="text-center">Tidak ada data.</td></tr>';
          }
        ?>

      </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>