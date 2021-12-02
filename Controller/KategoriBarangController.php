<?php

class KategoriBarangController
{
  private $modelKategoriBarang;

  public function __construct()
  {
    $this->modelKategoriBarang = new KategoriBarangModel();
  }

  public function view()
  {
    $BASE_URL = "http://localhost/projek-sewaalatdaki";
    require_once("Views/admin/view_kategori_barang.php");
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
