<?php

class KerusakanController
{
  private $modelKerusakan;

  public function __construct()
  {
    $this->modelKerusakan = new KerusakanModel();
  }

  public function view()
  {
    $dataKerusakan = $this->modelKerusakan->getAllKerusakan();
    extract($dataKerusakan);
    $BASE_URL = "http://localhost/projek-sewaalatdaki";
    require_once("Views/admin/view_kerusakan.php");
  }

  public function prosesTambah()
  {
    $kerusakan = htmlspecialchars($_POST['kerusakan']);
    $denda = htmlspecialchars($_POST['denda']);
    $this->modelKerusakan->insertKerusakan($kerusakan, $denda);
    header("location: index.php?view=admin&page=kerusakan&aksi=view");
  }

  public function prosesEdit()
  {
    $idKerusakan = htmlspecialchars($_POST['idKerusakan']);
    $kerusakan = htmlspecialchars($_POST['kerusakan']);
    $denda = htmlspecialchars($_POST['denda']);
    $this->modelKerusakan->updateKerusakanById($kerusakan, $denda, $idKerusakan);
    header("location: index.php?view=admin&page=kerusakan&aksi=view");
  }

  public function prosesHapus()
  {
    $idKerusakan = htmlspecialchars($_POST['idKerusakan']);
    $this->modelKerusakan->deleteKerusakanById($idKerusakan);
    header("location: index.php?view=admin&page=kerusakan&aksi=view");
  }
}
