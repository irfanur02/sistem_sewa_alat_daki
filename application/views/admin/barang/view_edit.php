<main class="main">
  <div class="header">
    <div class="judul">Edit Data Barang</div>
    <a href="<?php echo base_url('barang'); ?>" class="btn btn-link-primary" data-modal="bank">Kembali</a>
  </div>
  <div class="content">
    <div class="col">
      <div class="frame-image">
        <img src="" id="imagePreview">
      </div>
    </div>
    <div class="col">
      <form action="<?php echo base_url('barang/prosesUpdateById'); ?>" method="POST">
        <div class="row">
          <label for="barang" class="col-3">Barang</label>
          <input type="text" class="col-7" name="barang" id="barang">
        </div>
        <div class="row">
          <label for="kategori" class="col-3">Kategori</label>
          <select name="kategori" id="kategori" class="col-7">
            <option selected>Kategori</option>
            <option value="tenda">Tenda</option>
            <option value="kompor">Kompor</option>
            <option value="tongkat">Tongkat</option>
          </select>
        </div>
        <div class="row">
          <label for="jumlahBarang" class="col-3">Jumlah Barang</label>
          <input type="text" class="col-7" name="jumlah" id="jumlahBarang">
        </div>
        <div class="row">
          <label for="harga" class="col-3">Harga Barang (Rp.)</label>
          <input type="text" class="col-7" name="harga" id="harga">
        </div>
        <div class="row">
          <label for="gambar" class="col-3">Gambar</label>
          <input type="file" class="col-7" name="gambar" id="gambar">
        </div>
        <div class="row text-center">
          <button type="submit" class="btn btn-medium btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</main>