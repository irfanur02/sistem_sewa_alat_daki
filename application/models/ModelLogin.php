<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLogin extends CI_Model {

    public function prosesAuthAdmin($username, $password)
    {
        $sql = "select * from admin where username='$username' and password='$password'";
        return $this->db->query($sql)->result_array();
    }
}