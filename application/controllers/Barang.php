<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelBarang');
  }

  public function index()
  {
    $data['title'] = $data['title'] = "Kelola Data | Barang";
    $data['menu_active'] = "kelola data";
    $this->load->view('admin/templates/view_header', $data);
    $this->load->view('admin/templates/view_navbar');
    $this->load->view('admin/templates/view_sidebar', $data);
    $this->load->view('admin/barang/view_barang');
    $this->load->view('admin/templates/view_footer');
  }

  public function tambah()
  {
    $data['title'] = $data['title'] = "Kelola Data | Tambah Barang";
    $data['menu_active'] = "kelola data";
    $this->load->view('admin/templates/view_header', $data);
    $this->load->view('admin/templates/view_navbar');
    $this->load->view('admin/templates/view_sidebar', $data);
    $this->load->view('admin/barang/view_tambah');
    $this->load->view('admin/templates/view_footer');
  }

  public function edit()
  {
    $data['title'] = $data['title'] = "Kelola Data | Edit Barang";
    $data['menu_active'] = "kelola data";
    $this->load->view('admin/templates/view_header', $data);
    $this->load->view('admin/templates/view_navbar');
    $this->load->view('admin/templates/view_sidebar', $data);
    $this->load->view('admin/barang/view_edit');
    $this->load->view('admin/templates/view_footer');
  }

  public function getBarangById()
  {
    $idBarang = $this->input->post('idBarang');
    $where = array(
      'id_barang' => $idBarang
    );
    $dataBarang = $this->ModelBarang->getDataById($where, 'barang')->row_array();
    var_dump($dataBarang);
    die();
    $barang = array(
      "idBarang" => $dataBarang['idBarang'],
      "namaBarang" => $dataBarang['namaBarang'],
      "gambarBarang" => $dataBarang['gambarBarang'],
      "hargaSewa" => $dataBarang['hargaSewa'],
      "stokBarang" => $dataBarang['stokBarang']
    );
    echo json_encode($barang);
  }

  public function prosesTambah()
  {
  }

  public function prosesUpdateById()
  {
  }

  public function prosesHapusById()
  {
  }
}
