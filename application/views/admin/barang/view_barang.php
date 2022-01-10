<main class="main">
  <div class="header">
    <div class="judul">Data Barang</div>
    <a href="<?php echo base_url('barang/tambah'); ?>" class="btn btn-link-primary" data-modal="bank">Tambah Data</a>
  </div>
  <div class="content">
    <div class="card-content">
      <?php foreach ($dataBarang as $rowDataBarang) : ?>
        <div class="card">
          <div class="card-image">
            <img src="<?php echo base_url(); ?>/assets/img/<?php echo strtolower($rowDataBarang->folderGambar); ?>/<?php echo $rowDataBarang->gambarBarang; ?>" alt="<?php echo $rowDataBarang->gambarBarang; ?>">
          </div>
          <div class="card-body">
            <div class="label-card">
              <div class="label normal-label"><?php echo $rowDataBarang->namaBarang; ?></div>
              <div class="label mini-label label-<?php echo $rowDataBarang->stokBarang < 1 ? "danger" : "info"; ?>">Stok <?php echo $rowDataBarang->stokBarang; ?></div>
            </div>
            <div class="label-card">
              <div class="label big-label label-primary">Rp. <?php echo $rowDataBarang->hargaSewa; ?></div>
            </div>
          </div>
          <div class="card-footer bg-green">
            <a href="<?php echo base_url('barang/edit/' . $rowDataBarang->idBarang . ''); ?>" class="btn btn-link-warning" style="margin-right: 5px;">Edit</a>
            <div class="popup-delete" id=popup>
              <div class="popup-content">
                <form action="<?php echo base_url('barang/prosesHapusById'); ?>" method="POST" class="form-popup">
                  <input type="hidden" name="idBarang" id="idBarang">
                  <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                  <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                </form>
              </div>
              <a href="#" class="btn btn-danger btn-hapus" data-id="<?php echo $rowDataBarang->idBarang; ?>">Hapus</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>