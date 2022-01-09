<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{

  public function index()
  {
    $data['title'] = $data['title'] = "Penyewaan | Peminjaman";
    $data['menu_active'] = "penyewaan";
    $this->load->view('admin/templates/view_header', $data);
    $this->load->view('admin/templates/view_navbar');
    $this->load->view('admin/templates/view_sidebar', $data);
    $this->load->view('admin/view_peminjaman');
    $this->load->view('admin/templates/view_footer');
  }

  public function storePenyewaan()
  {
    $dataBarang = $this->input->post('dataIdBarang');
    $dataJumlahBarang = $this->input->post('dataJumlahPerBarang');
    $nama = $this->input->post('nama');
    $noHp = $this->input->post('noHp');
    $tglSewa = $this->input->post('tglSewa');
    $tglKembali = $this->input->post('tglKembali');
    $pembayaran = $this->input->post('pembayaran');
    $result = array(
      'status' => true
    );
    echo json_encode($result);
  }
}
