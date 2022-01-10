<main class="main">
  <div class="header">
    <div class="judul">Edit Data Barang</div>
    <a href="<?php echo base_url('barang'); ?>" class="btn btn-link-primary" data-modal="bank">Kembali</a>
  </div>
  <div class="content">
    <div class="col">
      <div class="frame-image">
        <img src="<?php echo base_url() ?>assets/img/<?php echo strtolower($dataBarang['namaKategori']); ?>/<?php echo $dataBarang['gambarBarang']; ?>" id="imagePreview">
      </div>
    </div>
    <div class="col">
      <form action="<?php echo base_url('barang/prosesUpdateById'); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="idBarang" id="idBarang" value="<?php echo $dataBarang['idBarang']; ?>">
        <input type="hidden" name="gambarLama" id="gambarLama" value="<?php echo $dataBarang['gambarBarang']; ?>">
        <div class="row">
          <label for="barang" class="col-3">Barang</label>
          <input type="text" class="col-7" name="barang" id="barang" value="<?php echo $dataBarang['namaBarang']; ?>">
        </div>
        <div class="row">
          <label for="kategori" class="col-3">Kategori</label>
          <select name="kategori" id="kategori" class="col-7">
            <option>Kategori</option>
            <?php foreach ($dataKategori as $rowDataKategori) : ?>
              <option <?php echo $dataBarang['idKategori'] == $rowDataKategori->idKategori ? "selected" : "" ?> value="<?php echo $rowDataKategori->idKategori; ?>"><?php echo $rowDataKategori->namaKategori; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="row">
          <label for="jumlahBarang" class="col-3">Jumlah Barang</label>
          <input type="text" class="col-7" name="jumlah" id="jumlahBarang" value="<?php echo $dataBarang['stokBarang']; ?>">
        </div>
        <div class="row">
          <label for="harga" class="col-3">Harga Barang (Rp.)</label>
          <input type="text" class="col-7" name="harga" id="harga" value="<?php echo $dataBarang['hargaSewa']; ?>">
        </div>
        <div class="row">
          <label for="gambar" class="col-3">Gambar</label>
          <input type="file" class="col-7" name="gambar" id="gambar" value="<?php echo $dataBarang['gambarBarang']; ?>">
        </div>
        <div class="row text-center">
          <button type="submit" class="btn btn-medium btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</main>