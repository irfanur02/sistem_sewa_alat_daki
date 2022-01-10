<main class="main">
  <div class="header">
    <div class="judul">Data Kategori Barang</div>
    <button class="btn btn-primary btn-modalTambah" data-modal="kategori barang">Tambah Data</button>
  </div>
  <div class="content">
    <table id="myTable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Kategori Barang</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($dataKategori as $rowDataKategori) : ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $rowDataKategori->namaKategori; ?></td>
            <td>
              <a href="" class="btn btn-link-warning btn-modalEdit" style="margin-right: 5px;" data-id="<?php echo $rowDataKategori->idKategori; ?>" data-modal="kategori barang">Edit</a>
              <div class="popup-delete" id=popup>
                <div class="popup-content">
                  <form action="<?php echo base_url('kategoribarang/prosesHapusById'); ?>" method="POST" class="form-popup">
                    <input type="hidden" name="idKategoriBarang" id="idKategoriBarang">
                    <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                    <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                  </form>
                </div>
                <a href="" class="btn btn-danger btn-hapus" data-id="<?php echo $rowDataKategori->idKategori; ?>">Hapus</a>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</main>

<div id="modal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="title">Tambah Data Kategori Barang</span>
      <span class="close"><i class="fas fa-times"></i></span>
    </div>
    <form action="<?php echo base_url('kategoribarang/prosesTambah'); ?>" method="post" class="form-contol">
      <div class="modal-body">
        <div class="row">
          <label for="kategori" class="col-3">Kategori Barang</label>
          <input type="text" class="col-7" name="kategori" id="kategori">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </form>
  </div>
</div>