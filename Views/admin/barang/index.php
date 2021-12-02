<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Data | Barang</title>
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
      <div class="judul">Data Barang</div>
      <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=tambah" class="btn btn-link-primary" data-modal="bank">Tambah Data</a>
    </div>
    <div class="content">
      <div class="card-content">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo $BASE_URL; ?>/assets/img/tenda/tenda 1.jpg" alt="tenda 1.jpg">
          </div>
          <div class="card-body">
            <div class="label-card">
              <div class="label normal-label">Tenda 1</div>
              <div class="label mini-label label-info">Stok 2</div>
            </div>
            <div class="label-card">
              <div class="label big-label label-primary">Rp. 100000</div>
            </div>
          </div>
          <div class="card-footer bg-green">
            <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=edit&id=1" class="btn btn-link-warning" style="margin-right: 5px;">Edit</a>
            <div class="popup-delete" id=popup>
              <div class="popup-content">
                <form action="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=hapus" method="POST" class="form-popup">
                  <input type="hidden" name="idBarang" id="idBarang">
                  <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                  <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                </form>
              </div>
              <a href="#" class="btn btn-danger btn-hapus" data-id="1">Hapus</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-image">
            <img src="<?php echo $BASE_URL; ?>/assets/img/tenda/tenda 2.jpg" alt="tenda 2.jpg">
          </div>
          <div class="card-body">
            <div class="label-card">
              <div class="label normal-label">Tenda 2</div>
              <div class="label mini-label label-info">Stok 2</div>
            </div>
            <div class="label-card">
              <div class="label big-label label-primary">Rp. 210000</div>
            </div>
          </div>
          <div class="card-footer bg-green">
            <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=edit&id=2" class="btn btn-link-warning" style="margin-right: 5px;">Edit</a>
            <div class="popup-delete" id=popup>
              <div class="popup-content">
                <form action="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=hapus" method="POST" class="form-popup">
                  <input type="hidden" name="idBarang" id="idBarang">
                  <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                  <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                </form>
              </div>
              <a href="#" class="btn btn-danger btn-hapus" data-id="2">Hapus</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-image">
            <img src="<?php echo $BASE_URL; ?>/assets/img/tongkat/tongkat 1.jpg" alt="tongkat 1.jpg">
          </div>
          <div class="card-body">
            <div class="label-card">
              <div class="label normal-label">Tongkat 1</div>
              <div class="label mini-label label-danger">Stok 2</div>
            </div>
            <div class="label-card">
              <div class="label big-label label-primary">Rp. 80000</div>
            </div>
          </div>
          <div class="card-footer bg-green">
            <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=edit&id=3" class="btn btn-link-warning" style="margin-right: 5px;">Edit</a>
            <div class="popup-delete" id=popup>
              <div class="popup-content">
                <form action="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=hapus" method="POST" class="form-popup">
                  <input type="hidden" name="idBarang" id="idBarang">
                  <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                  <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                </form>
              </div>
              <a href="#" class="btn btn-danger btn-hapus" data-id="3">Hapus</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-image">
            <img src="<?php echo $BASE_URL; ?>/assets/img/ransel/ransel 3.jpg" alt="ransel 3.jpg">
          </div>
          <div class="card-body">
            <div class="label-card">
              <div class="label normal-label">Ransel 1</div>
              <div class="label mini-label label-info">Stok 2</div>
            </div>
            <div class="label-card">
              <div class="label big-label label-primary">Rp. 150000</div>
            </div>
          </div>
          <div class="card-footer bg-green">
            <a href="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=edit&id=4" class="btn btn-link-warning" style="margin-right: 5px;">Edit</a>
            <div class="popup-delete" id=popup>
              <div class="popup-content">
                <form action="<?php echo $BASE_URL; ?>/index.php?view=admin&page=barang&aksi=hapus" method="POST" class="form-popup">
                  <input type="hidden" name="idBarang" id="idBarang">
                  <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                  <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                </form>
              </div>
              <a href="#" class="btn btn-danger btn-hapus" data-id="4">Hapus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="<?php echo $BASE_URL; ?>/assets/js/jquery-3.6.0.min.js"></script>
  <script src="<?php echo $BASE_URL; ?>/assets/js/script.js"></script>
</body>

</html>