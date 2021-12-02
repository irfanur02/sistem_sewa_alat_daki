<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Data | Tambah Barang</title>
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/fontawesome-free-5.15.4-web/css/all.css">
</head>

<body>
  <nav class="nav">
    <div class="navbar">
      <div class="brand">
        <span class="brand-text">Sistem Climber KIT</span>
      </div>
      <button class="btn">Logout</button>
    </div>
  </nav>
  <aside class="aside">
    <div class="menu">
      <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=dashboard&aksi=view" class="menu-item">
        <div class="icon"></div>
        <span>Dashboard</span>
      </a>
      <div class="dropdown">
        <button class="menu-item active">Kelola Data</button>
        <div class="dropdown-items">
          <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=view" class="dropdown-item">Barang</a>
          <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=kategoriBarang&aksi=view" class="dropdown-item">Kategori Barang</a>
          <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=kerusakan&aksi=view" class="dropdown-item">Kerusakan</a>
          <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=bank&aksi=view" class="dropdown-item">Bank</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="menu-item">Penyewaan</button>
        <div class="dropdown-items">
          <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=peminjaman&aksi=view" class="dropdown-item">Peminjaman</a>
          <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=pengembalian&aksi=view" class="dropdown-item">Pengembalian</a>
        </div>
      </div>
    </div>
  </aside>
  <main class="main">
    <div class="header">
      <div class="judul">Tambah Data Barang</div>
      <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=view" class="btn btn-link-primary" data-modal="bank">Kembali</a>
    </div>
    <div class="content">
      <div class="col">
        <div class="frame-image">
          <img src="" id="imagePreview">
        </div>
      </div>
      <div class="col">
        <form action="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=prosesTambah" method="POST">
          <div class="row row-input">
            <label for="barang" class="col-3">Barang</label>
            <input type="text" class="col-7" name="barang" id="barang">
          </div>
          <div class="row row-input">
            <label for="kategori" class="col-3">Kategori</label>
            <select name="kategori" id="kategori" class="col-7">
              <option selected>Kategori</option>
              <option value="tenda">Tenda</option>
              <option value="kompor">Kompor</option>
              <option value="tongkat">Tongkat</option>
            </select>
          </div>
          <div class="row row-input">
            <label for="jumlahBarang" class="col-3">Jumlah Barang</label>
            <input type="text" class="col-7" name="jumlah" id="jumlahBarang">
          </div>
          <div class="row row-input">
            <label for="harga" class="col-3">Harga Barang (Rp.)</label>
            <input type="text" class="col-7" name="harga" id="harga">
          </div>
          <div class="row row-input">
            <label for="gambar" class="col-3">Gambar</label>
            <input type="file" class="col-7" name="gambar" id="gambar">
          </div>
          <div class="row">
            <div class="col-7 col-10 text-center">
              <button type="submit" class="btn btn-medium btn-success">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
  <script src="<?php echo $BASE_URL; ?>/assets/js/jquery-3.6.0.min.js"></script>
  <script src="<?php echo $BASE_URL; ?>/assets/js/script.js"></script>
</body>

</html>