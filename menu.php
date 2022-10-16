<?php include 'connect.php'; ?>
<?php include 'header.php'; ?>

    <h1 class="mt-3 mb-3">︎⠀⠀⠀⠀⠀⠀</h1>
	<h1 class="mt-3 mb-3">︎⠀⠀⠀⠀⠀⠀</h1>
	<div class="section-title">
		<h2>Daftar  <span>Promo</span></h2>
	</div>
    <a href="formtambahPromo.php" class="book-a-table-btn scrollto">Tambah</a>
	<a href="formtambahPromo.php" class="book-a-table-btn scrollto">Edit</a>
	<a href="formhapusPromo.php" class="book-a-table-btn scrollto">Hapus</a>
  
  <main id="main">
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <!-- Daftar Promo -->
        <div class="row menu-container">
		<?php 
          $sql = 'SELECT * FROM datapromo';

          $query = mysqli_query($conn, $sql);

          while ($row = mysqli_fetch_object($query)) {
        ?>
		
		<div class="col-lg-6 menu-item">
            <div class="menu-content">
              <a href="#"><?php echo $row->nama; ?></a><span> <s><?php echo $row->harga_awal; ?></s> <?php echo $row->harga_akhir; ?> </span>
            </div>
            <div class="menu-ingredients">
              <?php echo $row->keterangan; ?>
            </div>
          </div>
		
		<?php 
          } if (!mysqli_num_rows($query)) {
            echo '<tr><td colspan="6" class="text-center">Tidak ada data.</td></tr>';
          }
        ?>
		
        </div>
      </div>
    </section><!-- End Menu Section -->
  </main><!-- End #main -->

<?php include 'footer.php'; ?>