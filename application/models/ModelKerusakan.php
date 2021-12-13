<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKerusakan extends CI_Model
{
  function ambilDataKerusakan()
  {
    $this->db->select('id_kerusakan AS idKerusakan, detail_kerusakan AS kerusakan, denda_kerusakan AS denda');
    $this->db->from('kerusakan');
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
