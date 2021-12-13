<main class="main">
  <div class="header">
    <div class="judul">Data Barang</div>
    <a href="<?php echo base_url('barang/tambah'); ?>" class="btn btn-link-primary" data-modal="bank">Tambah Data</a>
  </div>
  <div class="content">
    <div class="card-content">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo base_url(); ?>/assets/img/tenda/tenda 1.jpg" alt="tenda 1.jpg">
        </div>
        <div class="card-body">
          <div class="label-card">
            <div class="label normal-label">Tenda 1</div>
            <div class="label mini-label label-info">Stok 2</div>
          </div>
          <div class="label-card">
            <div class="label big-label label-primary">Rp. 100000</div>
          </div>
        </div>
        <div class="card-footer bg-green">
          <a href="<?php echo base_url('barang/edit/1'); ?>" class="btn btn-link-warning" style="margin-right: 5px;">Edit</a>
          <div class="popup-delete" id=popup>
            <div class="popup-content">
              <form action="<?php echo base_url('barang/prosesHapusById'); ?>" method="POST" class="form-popup">
                <input type="hidden" name="idBarang" id="idBarang">
                <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
              </form>
            </div>
            <a href="#" class="btn btn-danger btn-hapus" data-id="1">Hapus</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="<?php echo base_url(); ?>/assets/img/tenda/tenda 2.jpg" alt="tenda 2.jpg">
        </div>
        <div class="card-body">
          <div class="label-card">
            <div class="label normal-label">Tenda 2</div>
            <div class="label mini-label label-info">Stok 2</div>
          </div>
          <div class="label-card">
            <div class="label big-label label-primary">Rp. 210000</div>
          </div>
        </div>
        <div class="card-footer bg-green">
          <a href="<?php echo base_url('barang/edit/2'); ?>" class="btn btn-link-warning" style="margin-right: 5px;">Edit</a>
          <div class="popup-delete" id=popup>
            <div class="popup-content">
              <form action="<?php echo base_url('barang/prosesHapusById'); ?>" method="POST" class="form-popup">
                <input type="hidden" name="idBarang" id="idBarang">
                <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
              </form>
            </div>
            <a href="#" class="btn btn-danger btn-hapus" data-id="2">Hapus</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="<?php echo base_url(); ?>/assets/img/tongkat/tongkat 1.jpg" alt="tongkat 1.jpg">
        </div>
        <div class="card-body">
          <div class="label-card">
            <div class="label normal-label">Tongkat 1</div>
            <div class="label mini-label label-danger">Stok 2</div>
          </div>
          <div class="label-card">
            <div class="label big-label label-primary">Rp. 80000</div>
          </div>
        </div>
        <div class="card-footer bg-green">
          <a href="<?php echo base_url('barang/edit/3'); ?>" class="btn btn-link-warning" style="margin-right: 5px;">Edit</a>
          <div class="popup-delete" id=popup>
            <div class="popup-content">
              <form action="<?php echo base_url('barang/prosesHapusById'); ?>" method="POST" class="form-popup">
                <input type="hidden" name="idBarang" id="idBarang">
                <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
              </form>
            </div>
            <a href="#" class="btn btn-danger btn-hapus" data-id="3">Hapus</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="<?php echo base_url(); ?>/assets/img/ransel/ransel 3.jpg" alt="ransel 3.jpg">
        </div>
        <div class="card-body">
          <div class="label-card">
            <div class="label normal-label">Ransel 1</div>
            <div class="label mini-label label-info">Stok 2</div>
          </div>
          <div class="label-card">
            <div class="label big-label label-primary">Rp. 150000</div>
          </div>
        </div>
        <div class="card-footer bg-green">
          <a href="<?php echo base_url('barang/edit/4'); ?>" class="btn btn-link-warning" style="margin-right: 5px;">Edit</a>
          <div class="popup-delete" id=popup>
            <div class="popup-content">
              <form action="<?php echo base_url('barang/prosesHapusById'); ?>" method="POST" class="form-popup">
                <input type="hidden" name="idBarang" id="idBarang">
                <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
              </form>
            </div>
            <a href="#" class="btn btn-danger btn-hapus" data-id="4">Hapus</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>