<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKategoriBarang extends CI_Model
{
  function ambilDataKategori()
  {
    $this->db->select('id_kategori AS idKategori, nama_kategori AS namaKategori');
    $this->db->from('kategori_barang');
    return $this->db->get();
  }

  function getDataById($idKategori)
  {
    $this->db->select('id_kategori AS idKategori, nama_kategori AS namaKategori');
    $this->db->from('kategori_barang');
    $this->db->where('id_kategori', $idKategori);
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
