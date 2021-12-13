<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
{

  public function index()
  {
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
  }

  public function prosesUpdateById()
  {
  }

  public function prosesHapusById()
  {
  }
}
