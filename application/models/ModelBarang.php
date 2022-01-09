<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBarang extends CI_Model
{
  function getDataById($idBarang)
  {
    $this->db->select('id_barang AS idBarang, gambar_barang AS gambarBarang, nama_barang AS namaBarang, jumlah_barang AS stokBarang, harga_sewa AS hargaSewa');
    $this->db->from('barang');
    $this->db->where('id_barang', $idBarang);
    return $this->db->get();
  }

  function tambahData($data, $tabel)
  {
  }

  function updateDataById($where, $data, $tabel)
  {
  }

  function hapusDataById($where, $tabel)
  {
  }
}
