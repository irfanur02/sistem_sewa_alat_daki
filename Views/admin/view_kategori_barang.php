<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Data | Kategori Barang</title>
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
      <div class="judul">Data Kategori Barang</div>
      <button class="btn btn-primary btn-modalTambah" data-modal="kategori barang">Tambah Data</button>
    </div>
    <div class="content">
      <table id="myTable">
        <thead>
          <tr>
            <th>No.</th>
            <th>Kategori Barang</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Tenda</td>
            <td>
              <a href="" class="btn btn-link-warning btn-modalEdit" style="margin-right: 5px;" data-id="1" data-modal="kategori barang">Edit</a>
              <div class="popup-delete" id=popup>
                <div class="popup-content">
                  <form action="<?php echo $BASE_URL; ?>/index.php?view=admin&page=kategoriBarang&aksi=hapus" method="POST" class="form-popup">
                    <input type="hidden" name="idKategoriBarang" id="idKategoriBarang">
                    <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                    <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                  </form>
                </div>
                <a href="" class="btn btn-danger btn-hapus" data-id="1">Hapus</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Ransel</td>
            <td>
              <a href="#" class="btn btn-link-warning btn-modalEdit" style="margin-right: 5px;" data-id="2" data-modal="kategori barang">Edit</a>
              <div class="popup-delete" id=popup>
                <div class="popup-content">
                  <form action="<?php echo $BASE_URL; ?>/index.php?view=admin&page=kategoriBarang&aksi=hapus" method="POST" class="form-popup">
                    <input type="hidden" name="idKategoriBarang" id="idKategoriBarang">
                    <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                    <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                  </form>
                </div>
                <a href="" class="btn btn-danger btn-hapus" data-id="2">Hapus</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Kompor Mini</td>
            <td>
              <a href="#" class="btn btn-link-warning btn-modalEdit" style="margin-right: 5px;" data-id="3" data-modal="kategori barang">Edit</a>
              <div class="popup-delete" id=popup>
                <div class="popup-content">
                  <form action="<?php echo $BASE_URL; ?>/index.php?view=admin&page=kategoriBarang&aksi=hapus" method="POST" class="form-popup">
                    <input type="hidden" name="idKategoriBarang" id="idKategoriBarang">
                    <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                    <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                  </form>
                </div>
                <a href="" class="btn btn-danger btn-hapus" data-id="3">Hapus</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Tongkat</td>
            <td>
              <a href="#" class="btn btn-link-warning btn-modalEdit" style="margin-right: 5px;" data-id="4" data-modal="kategori barang">Edit</a>
              <div class="popup-delete" id=popup>
                <div class="popup-content">
                  <form action="<?php echo $BASE_URL; ?>/index.php?view=admin&page=kategoriBarang&aksi=hapus" method="POST" class="form-popup">
                    <input type="hidden" name="idKategoriBarang" id="idKategoriBarang">
                    <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                    <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                  </form>
                </div>
                <a href="" class="btn btn-danger btn-hapus" data-id="4">Hapus</a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <div id="modal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="title">Tambah Data Kategori Barang</span>
        <span class="close"><i class="fas fa-times"></i></span>
      </div>
      <form action="<?php echo $BASE_URL; ?>/index.php?view=admin&page=kategoriBarang&aksi=tambah" method="post" class="form-contol">
        <div class="modal-body">
          <div class="row">
            <label for="kategori" class="col-3">Kategori Barang</label>
            <input type="text" class="col-7" name="kategori" id="kategori">
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