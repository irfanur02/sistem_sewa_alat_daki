<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelBank');
  }

  public function index()
  {
    $data['dataBank'] = $this->ModelBank->ambilDataBank()->result();
    $data['title'] = $data['title'] = "Kelola Data | Bank";
    $data['menu_active'] = "kelola data";
    $this->load->view('admin/templates/view_header', $data);
    $this->load->view('admin/templates/view_navbar');
    $this->load->view('admin/templates/view_sidebar', $data);
    $this->load->view('admin/view_bank');
    $this->load->view('admin/templates/view_footer');
  }

  public function prosesTambah()
  {
    $bank = $this->input->post('bank');
    $status = $this->input->post('rbStatusBank');

    $data = array(
      'id_bank' => $this->db->insert_id(),
      'nama_bank' => $bank,
      'status_bank' => $status
    );

    $this->ModelBank->tambahData($data, 'bank');
    redirect('bank');
  }

  public function prosesUpdateById()
  {
    $idBank = $this->input->post('idBank');
    $bank = $this->input->post('bank');
    $status = $this->input->post('rbStatusBank');

    $data = array(
      'nama_bank' => $bank,
      'status_bank' => $status
    );

    $where = array(
      'id_bank' => $idBank
    );

    $this->ModelBank->updateDataById($where, $data, 'bank');
    redirect('bank');
  }

  public function prosesHapusById()
  {
    $idBank = $this->input->post('idBank');
    $where = array('id_bank' => $idBank);
    $this->ModelBank->hapusDataById($where, 'bank');
    redirect('bank');
  }
}
