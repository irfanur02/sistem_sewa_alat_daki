<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelBarang');
    $this->load->model('ModelKategoriBarang');
  }

  public function index()
  {
    $data['dataBarang'] = $this->ModelBarang->ambilDataBarang()->result();
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
    $data['dataKategori'] = $this->ModelKategoriBarang->ambilDataKategori()->result();
    $data['title'] = $data['title'] = "Kelola Data | Tambah Barang";
    $data['menu_active'] = "kelola data";
    $this->load->view('admin/templates/view_header', $data);
    $this->load->view('admin/templates/view_navbar');
    $this->load->view('admin/templates/view_sidebar', $data);
    $this->load->view('admin/barang/view_tambah', $data);
    $this->load->view('admin/templates/view_footer');
  }

  public function edit($idBarang)
  {
    $data['dataBarang'] = $this->ModelBarang->ambilDataBarangById($idBarang)->row_array();
    $data['dataKategori'] = $this->ModelKategoriBarang->ambilDataKategori()->result();
    $data['title'] = $data['title'] = "Kelola Data | Edit Barang";
    $data['menu_active'] = "kelola data";
    $this->load->view('admin/templates/view_header', $data);
    $this->load->view('admin/templates/view_navbar');
    $this->load->view('admin/templates/view_sidebar', $data);
    $this->load->view('admin/barang/view_edit', $data);
    $this->load->view('admin/templates/view_footer');
  }

  public function getBarangById()
  {
    $idBarang = $this->input->post('idBarang');
    $dataBarang = $this->ModelBarang->ambilDataBarangById($idBarang)->row_array();
    $folder = strtolower($dataBarang['namaKategori']);
    $barang = array(
      'idBarang' => $dataBarang['idBarang'],
      'namaBarang' => $dataBarang['namaBarang'],
      'folderGambar' => $folder,
      'gambarBarang' => $dataBarang['gambarBarang'],
      'hargaSewa' => $dataBarang['hargaSewa'],
      'stokBarang' => $dataBarang['stokBarang']
    );
    echo json_encode($barang);
  }

  public function prosesTambah()
  {
    $barang = ucwords($this->input->post('barang'));
    $kategori = $this->input->post('kategori');
    $jumlah = $this->input->post('jumlah');
    $harga = $this->input->post('harga');

    $dataKategori = $this->ModelKategoriBarang->getDataById($kategori)->row_array();
    $folderGambar = strtolower($dataKategori['namaKategori']);

    $namaFile = $_FILES['gambar']['name'];
    $ekstensi = explode('.', $namaFile);
    $ekstensi = end($ekstensi);
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensi;
    $tmpName = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmpName, 'assets/img/' . $folderGambar . '/' . $namaFileBaru);

    $data = array(
      'id_barang' => $this->db->insert_id(),
      'nama_barang' => $barang,
      'gambar_barang' => $namaFileBaru,
      'id_kategori' => $kategori,
      'jumlah_barang' => $jumlah,
      'harga_sewa' => $harga
    );
    $this->ModelBarang->tambahData($data, 'barang');
    redirect('barang');
  }

  public function prosesUpdateById()
  {
    $idBarang = $this->input->post('idBarang');
    $barang = ucwords($this->input->post('barang'));
    $kategori = $this->input->post('kategori');
    $jumlah = $this->input->post('jumlah');
    $harga = $this->input->post('harga');
    $gambarLama = $this->input->post('gambarLama');

    $dataKategori = $this->ModelKategoriBarang->getDataById($kategori)->row_array();
    $folderGambar = strtolower($dataKategori['namaKategori']);

    if ($_FILES['gambar']['error'] == 4) {
      $namaFileBaru = $gambarLama;
    } else {
      $namaFile = $_FILES['gambar']['name'];
      $ekstensi = explode('.', $namaFile);
      $ekstensi = end($ekstensi);
      $namaFileBaru = uniqid();
      $namaFileBaru .= '.';
      $namaFileBaru .= $ekstensi;
      $tmpName = $_FILES['gambar']['tmp_name'];
      move_uploaded_file($tmpName, 'assets/img/' . $folderGambar . '/' . $namaFileBaru);
    }

    $data = array(
      'nama_barang' => $barang,
      'gambar_barang' => $namaFileBaru,
      'id_kategori' => $kategori,
      'jumlah_barang' => $jumlah,
      'harga_sewa' => $harga
    );

    $where = array(
      'id_barang' => $idBarang
    );
    $this->ModelBarang->updateDataById($where, $data, 'barang');
    redirect('barang');
  }

  public function prosesHapusById()
  {
    $idBarang = $this->input->post('idBarang');
    $where = array('id_barang' => $idBarang);
    $this->ModelBarang->hapusDataById($where, 'barang');
    redirect('barang');
  }
}
