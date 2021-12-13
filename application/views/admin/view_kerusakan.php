<main class="main">
  <div class="header">
    <div class="judul">Data Kerusakan</div>
    <button class="btn btn-primary btn-modalTambah" data-modal="kerusakan">Tambah Data</button>
  </div>
  <div class="content">
    <table id="myTable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Kerusakan</th>
          <th>Denda</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($dataKerusakan as $rowDataKerusakan) : ?>
          <tr>
            <td><?php echo $no++; ?>.</td>
            <td><?php echo $rowDataKerusakan->kerusakan; ?></td>
            <td>Rp. <?php echo $rowDataKerusakan->denda; ?></td>
            <td>
              <a href="#" class="btn btn-link-warning btn-modalEdit" style="margin-right: 5px;" data-id="<?php echo $rowDataKerusakan->idKerusakan; ?>" data-modal="kerusakan">Edit</a>
              <div class="popup-delete" id=popup>
                <div class="popup-content">
                  <form action="<?php echo base_url('kerusakan/prosesHapusById'); ?>" method="POST" class="form-popup">
                    <input type="hidden" name="idKerusakan" id="idKerusakan">
                    <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                    <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                  </form>
                </div>
                <a href="" class="btn btn-danger btn-hapus" data-id="<?php echo $rowDataKerusakan->idKerusakan; ?>">Hapus</a>
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
      <span class="title">Tambah Data Kerusakan</span>
      <span class="close"><i class="fas fa-times"></i></span>
    </div>
    <form action="<?php echo base_url('kerusakan/prosesTambah'); ?>" method="post" class="form-contol">
      <div class="modal-body">
        <div class="row">
          <label for="kerusakan" class="col-3">Kerusakan</label>
          <input type="text" class="col-7" name="kerusakan" id="kerusakan">
        </div>
        <div class="row">
          <label for="denda" class="col-3">Denda (Rp.)</label>
          <input type="text" class="col-7" name="denda" id="denda">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </form>
  </div>
</div>