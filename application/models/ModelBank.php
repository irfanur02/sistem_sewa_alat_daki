<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBank extends CI_Model
{
  function ambilDataBank()
  {
    $this->db->select('id_bank AS idBank, nama_bank AS namaBank, status_bank as status');
    $this->db->from('bank');
    return $this->db->get();
  }

  function tambahData($data, $tabel)
  {
    $this->db->insert($tabel, $data);
  }

  function updateDataById($where, $data, $tabel)
  {
    $this->db->where($where);
    $this->db->update($tabel, $data);
  }

  function hapusDataById($where, $tabel)
  {
    $this->db->where($where);
    $this->db->delete($tabel);
  }
}
