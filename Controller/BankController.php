<?php

class BankController
{
  private $modelBank;

  public function __construct()
  {
    $this->modelBank = new BankModel();
  }

  public function view()
  {
    $BASE_URL = "http://localhost/projek-sewaalatdaki";
    require_once("Views/admin/view_bank.php");
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
