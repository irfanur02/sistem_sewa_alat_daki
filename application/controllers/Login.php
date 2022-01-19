<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelLogin');
  }

	public function index()
  {
    $this->load->view('admin/view_login');
  }

  public function authAdmin()
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = $this->ModelLogin->prosesAuthAdmin($username,$password);
    if ($data){
        $user = [
         'role' => 'admin',
         'id_admin' => $data[0]['id_admin']
         ];
     // var_dump($user);die;
    //  $this->session->set_userdata($user);
       redirect('Barang');
    } else {
     redirect('Login');
    }
  }

  public function logout()
  {
  	//$this->session->unset_userdata('loginadmin');
  	redirect('login');
  }

}





























