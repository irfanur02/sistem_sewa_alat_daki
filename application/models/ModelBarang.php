<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBarang extends CI_Model
{

  function ambilDataBarang()
  {
    $this->db->select('b.id_barang AS idBarang, b.gambar_barang AS gambarBarang, kb.nama_kategori as folderGambar, b.nama_barang AS namaBarang, b.jumlah_barang AS stokBarang, b.harga_sewa AS hargaSewa');
    $this->db->from('barang as b');
    $this->db->join('kategori_barang as kb', 'kb.id_kategori = b.id_kategori');
    $this->db->order_by('b.nama_barang', 'ASC');
    return $this->db->get();
  }

  function ambilDataBarangById($idBarang)
  {
    $this->db->select('b.id_barang AS idBarang, b.gambar_barang AS gambarBarang, kb.id_kategori as idKategori, kb.nama_kategori as namaKategori, b.nama_barang AS namaBarang, b.jumlah_barang AS stokBarang, b.harga_sewa AS hargaSewa');
    $this->db->from('barang as b');
    $this->db->join('kategori_barang as kb', 'kb.id_kategori = b.id_kategori');
    $this->db->where('b.id_barang', $idBarang);
    return $this->db->get();
  }

  function getDataById($idBarang)
  {
    $this->db->select('id_barang AS idBarang, gambar_barang AS gambarBarang, nama_barang AS namaBarang, jumlah_barang AS stokBarang, harga_sewa AS hargaSewa');
    $this->db->from('barang');
    $this->db->where('id_barang', $idBarang);
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
