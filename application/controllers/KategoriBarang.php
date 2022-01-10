<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KategoriBarang extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelKategoriBarang');
  }

  public function index()
  {
    $data['dataKategori'] = $this->ModelKategoriBarang->ambilDataKategori()->result();
    $data['title'] = $data['title'] = "Kelola Data | Kategori Barang";
    $data['menu_active'] = "kelola data";
    $this->load->view('admin/templates/view_header', $data);
    $this->load->view('admin/templates/view_navbar');
    $this->load->view('admin/templates/view_sidebar', $data);
    $this->load->view('admin/view_kategoriBarang');
    $this->load->view('admin/templates/view_footer');
  }

  public function prosesTambah()
  {
    $kategori = $this->input->post('kategori');

    $data = array(
      'id_kategori' => $this->db->insert_id(),
      'nama_kategori' => $kategori
    );

    $this->ModelKategoriBarang->tambahData($data, 'kategori_barang');
    redirect('kategoriBarang');
  }

  public function prosesUpdateById()
  {
    $idKategori = $this->input->post('idKategoriBarang');
    $kategori = $this->input->post('kategori');

    $data = array(
      'nama_kategori' => $kategori
    );

    $where = array(
      'id_kategori' => $idKategori
    );

    $this->ModelKategoriBarang->updateDataById($where, $data, 'kategori_barang');
    redirect('kategoriBarang');
  }

  public function prosesHapusById()
  {
    $idKategori = $this->input->post('idKategoriBarang');
    $where = array('id_kategori' => $idKategori);
    $this->ModelKategoriBarang->hapusDataById($where, 'kategori_barang');
    redirect('kategoriBarang');
  }
}
