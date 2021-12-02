<?php

require_once("Koneksi.php");

require_once("Model/DashboardModel.php");
require_once("Model/KerusakanModel.php");
require_once("Model/BankModel.php");
require_once("Model/KategoriBarangModel.php");
require_once("Model/BarangModel.php");
require_once("Model/PeminjamanModel.php");
require_once("Controller/DashboardController.php");
require_once("Controller/KerusakanController.php");
require_once("Controller/BankController.php");
require_once("Controller/KategoriBarangController.php");
require_once("Controller/BarangController.php");
require_once("Controller/PeminjamanController.php");

if (isset($_GET['view'])) {
  $view = $_GET['view'];

  if ($view == "admin") {
    if (isset($_GET['page']) && isset($_GET['aksi'])) {
      $page = $_GET['page'];
      $aksi = $_GET['aksi'];

      if ($page == "dashboard") {
        $dashboard = new DashboardController();
        if ($aksi == "view") {
          $dashboard->view();
        }
      } else if ($page == "kerusakan") {
        $kerusakan = new KerusakanController();
        if ($aksi == "view") {
          $kerusakan->view();
        } elseif ($aksi == "tambah") {
          $kerusakan->prosesTambah();
        } elseif ($aksi == "edit") {
          $kerusakan->prosesEdit();
        } elseif ($aksi == "hapus") {
          $kerusakan->prosesHapus();
        }
      } else if ($page == "bank") {
        $bank = new BankController();
        if ($aksi == "view") {
          $bank->view();
        } elseif ($aksi == "tambah") {
          $bank->prosesTambah();
        } elseif ($aksi == "edit") {
          $bank->prosesEdit();
        } elseif ($aksi == "hapus") {
          $bank->prosesHapus();
        }
      } else if ($page == "kategoriBarang") {
        $kategoriBarang = new KategoriBarangController();
        if ($aksi == "view") {
          $kategoriBarang->view();
        } elseif ($aksi == "tambah") {
          $kategoriBarang->prosesTambah();
        } elseif ($aksi == "edit") {
          $kategoriBarang->prosesEdit();
        } elseif ($aksi == "hapus") {
          $kategoriBarang->prosesHapus();
        }
      } else if ($page == "barang") {
        $barang = new BarangController();
        if ($aksi == "view") {
          $barang->view();
        } elseif ($aksi == "tambah") {
          $barang->viewTambah();
        } elseif ($aksi == "edit") {
          $barang->viewEdit();
        } elseif ($aksi == "prosesTambah") {
          $barang->prosesTambah();
        } elseif ($aksi == "hapus") {
          $barang->prosesHapus();
        }
      } else if ($page == "peminjaman") {
        $peminjaman = new PeminjamanController();
        if ($aksi == "view") {
          $peminjaman->view();
        } elseif ($aksi == "tambah") {
          // $peminjaman->viewTambah();
        } elseif ($aksi == "edit") {
          // $peminjaman->viewEdit();
        } elseif ($aksi == "prosesTambah") {
          // $peminjaman->prosesTambah();
        } elseif ($aksi == "hapus") {
          // $peminjaman->prosesHapus();
        }
      }
    }
  } else {
    // header("location: index.php?view=admin");
  }
} elseif (isset($_GET['page']) && isset($_GET['aksi'])) {
  $page = $_GET['page'];
  $aksi = $_GET['aksi'];

  if ($page == "utama") {
  }
}
