<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDaftarAdmin extends CI_Model {
    public function prosesStoreAdmin($data)
    {
        $this->db->insert('admin',$data);
    }
}