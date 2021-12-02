<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peminjaman</title>
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
      <div class="judul">Peminjaman</div>
    </div>
    <div class="content">
      <form action="">
        <span>Masukkan ID Barang</span>
        <input type="text" name="cariIdBarang" id="cariIdBarang" autofocus>
        <button type="button" class="btn btn-primary" id="btn-rekamBarang">Tambah Barang</button>
      </form>
      <div class="container-top">
        <table id="myTableRekam">
          <thead>
            <tr>
              <th>No.</th>
              <th>Barang</th>
              <th>Harga Sewa</th>
              <th>Jumlah Barang</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="detailRekamBarang">
            <!-- <tr>
              <td>1.</td>
              <td>
                <div class="thumb">
                  <img src="<?php echo $BASE_URL; ?>/assets/img/tenda/tenda 1.jpg" alt="tenda 1.jpg">
                </div>
                <span>Tenda 1</span>
              </td>
              <td>Rp. 100000</td>
              <td>
                <button type="button" class="btn btn-info" id="btnMinJumlah">-</button>
                <input type="text" name="jumlahSewaBarang" id="jumlahSewaBarang" value="1">
                <button type="button" class="btn btn-info" id="btnPlusJumlah">+</button>
              </td>
              <td>
                <button type="button" class="btn btn-danger" id="btnHapusRekamBarang">Batal</button>
              </td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <div id="modal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="title">Tambah Data Bank</span>
        <span class="close"><i class="fas fa-times"></i></span>
      </div>
      <form action="<?php echo $BASE_URL; ?>/index.php?view=admin&page=bank&aksi=tambah" method="post" class="form-contol">
        <div class="modal-body">
          <div class="row">
            <label for="bank" class="col-3">Bank</label>
            <input type="text" class="col-7" name="bank" id="bank">
          </div>
          <div class="row">
            <label class="col-3">Active</label>
            <div class="form-group col-7">
              <div class="radioButton">
                <input type="radio" class="" name="rbStatusBank" id="active" value="active" checked="true">
                <label for="active">Active</label>
              </div>
              <div class="radioButton">
                <input type="radio" class="" name="rbStatusBank" id="inactive" value="inactive">
                <label for="inactive">Inactive</label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
  <script src="<?php echo $BASE_URL; ?>/assets/js/jquery-3.6.0.min.js"></script>
  <script src="<?php echo $BASE_URL; ?>/assets/js/script.js"></script>
</body>

</html>