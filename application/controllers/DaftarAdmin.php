<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarAdmin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelDaftarAdmin');
  }

  public function index()
  {
    $this->load->view('admin/view_daftaradmin');
  }

  public function storeAdmin()
  {
    $data= [
      'username' => $_POST['username'],
      'password' => $_POST['password'],
  ];
  $this->ModelDaftarAdmin->prosesStoreAdmin($data);
  redirect('Login');
  }
}
