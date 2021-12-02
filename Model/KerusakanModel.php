<?php

class KerusakanModel
{
  public function getAllKerusakan()
  {
    $sql = "SELECT id_kerusakan AS idKerusakan, detail_kerusakan AS kerusakan, denda_kerusakan AS denda FROM kerusakan";
    $query = koneksi()->query($sql);
    $hasil = [];
    while ($data = $query->fetch_assoc()) {
      $hasil[] = $data;
    }
    return $hasil;
  }

  public function insertKerusakan($kerusakan, $denda)
  {
    $sql = "INSERT INTO kerusakan(detail_kerusakan, denda_kerusakan) VALUES('$kerusakan', $denda)";
    koneksi()->query($sql);
  }

  public function updateKerusakanById($kerusakan, $denda, $idKerusakan)
  {
    $sql = "UPDATE kerusakan SET
              detail_kerusakan = '$kerusakan',
              denda_kerusakan = '$denda'
            WHERE id_kerusakan = $idKerusakan";
    koneksi()->query($sql);
  }

  public function deleteKerusakanById($idKerusakan)
  {
    $sql = "DELETE FROM kerusakan WHERE id_kerusakan = $idKerusakan";
    koneksi()->query($sql);
  }
}
