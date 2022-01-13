<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


	public function index()
  {
    $this->load->view('admin/view_login');
  }


  public function login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    

    if($username == "admin" && $password == "admin")
    {

        $this->session->set_userdata('admin', 'admin');
        redirect('kerusakan');

    }
    else
    {
    	$this->session->set_flashdata('message', 'Username atau password anda salah');
    	redirect('login');
    }
  }

  public function logout()
  {
  	$this->session->unset_userdata('loginadmin');
  	redirect('login');
  }

}





























