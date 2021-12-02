<?php

class PeminjamanController
{
  private $modeleminjaman;

  public function __construct()
  {
    $this->modeleminjaman = new PeminjamanModel();
  }

  public function view()
  {
    $BASE_URL = "http://localhost/projek-sewaalatdaki";
    require_once("Views/admin/peminjaman/index.php");
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
