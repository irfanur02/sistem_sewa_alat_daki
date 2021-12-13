<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kerusakan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelKerusakan');
  }

  public function index()
  {
    $data['dataKerusakan'] = $this->ModelKerusakan->ambilDataKerusakan()->result();
    $data['title'] = "Kelola Data | Kerusakan";
    $data['menu_active'] = "kelola data";
    $this->load->view('admin/templates/view_header', $data);
    $this->load->view('admin/templates/view_navbar');
    $this->load->view('admin/templates/view_sidebar', $data);
    $this->load->view('admin/view_kerusakan');
    $this->load->view('admin/templates/view_footer');
  }

  public function prosesTambah()
  {
    $kerusakan = $this->input->post('kerusakan');
    $denda = $this->input->post('denda');

    $data = array(
      'id_kerusakan' => $this->db->insert_id(),
      'detail_kerusakan' => $kerusakan,
      'denda_kerusakan' => $denda
    );

    $this->ModelKerusakan->tambahData($data, 'kerusakan');
    redirect('kerusakan');
  }

  public function prosesUpdateById()
  {
    $idKerusakan = $this->input->post('idKerusakan');
    $kerusakan = $this->input->post('kerusakan');
    $denda = $this->input->post('denda');

    $data = array(
      'detail_kerusakan' => $kerusakan,
      'denda_kerusakan' => $denda
    );

    $where = array(
      'id_kerusakan' => $idKerusakan
    );

    $this->ModelKerusakan->updateDataById($where, $data, 'kerusakan');
    redirect('kerusakan');
  }

  public function prosesHapusById()
  {
    $idKerusakan = $this->input->post('idKerusakan');
    $where = array('id_kerusakan' => $idKerusakan);
    $this->ModelKerusakan->hapusDataById($where, 'kerusakan');
    redirect('kerusakan');
  }
}
