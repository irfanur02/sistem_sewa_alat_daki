<?php

class BarangController
{
  private $modelBarang;

  public function __construct()
  {
    $this->modelBarang = new BarangModel();
  }

  public function view()
  {
    $BASE_URL = "http://localhost/projek-sewaalatdaki";
    require_once("Views/admin/barang/index.php");
  }

  public function viewTambah()
  {
    $BASE_URL = "http://localhost/projek-sewaalatdaki";
    require_once("Views/admin/barang/tambah.php");
  }

  public function viewEdit()
  {
    $BASE_URL = "http://localhost/projek-sewaalatdaki";
    require_once("Views/admin/barang/edit.php");
  }

  public function prosesTambah()
  {
  }

  public function prosesEdit()
  {
  }

  public function prosesHapus()
  {
  }
}
