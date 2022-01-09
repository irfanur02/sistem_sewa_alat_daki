<main class="main">
  <div class="header">
    <div class="judul">Peminjaman</div>
  </div>
  <div class="content">
    <form>
      <span>Masukkan ID Barang</span>
      <input type="text" name="cariIdBarang" id="cariIdBarang" autofocus>
      <button type="button" class="btn btn-primary" id="btn-rekamBarang">Tambah Barang</button>
    </form>
    <div class="container-top">
      <table id="myTableRekam">
        <thead>
          <tr>
            <th>No.</th>
            <th>Barang</th>
            <th>Harga Sewa</th>
            <th>Jumlah Barang</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="detailRekamBarang">
        </tbody>
      </table>
      <div class="row text-center">
        <button type="submit" class="btn btn-medium btn-success" id="btn-prosesRekamBarang" data-modal="penyewa">Proses</button>
      </div>
    </div>
  </div>
  <div id="modal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="title">Data Penyewa</span>
        <span class="close"><i class="fas fa-times"></i></span>
      </div>
      <form class="form-control">
        <div class="modal-body">
          <div class="row">
            <label for="namaPenyewa" class="col-3">Nama</label>
            <input type="text" class="col-7" name="namaPenyewa" id="namaPenyewa">
          </div>
          <div class="row">
            <label for="noHpPenyewa" class="col-3">No. HP</label>
            <input type="text" class="col-7" name="noHpPenyewa" id="noHpPenyewa">
          </div>
          <div class="row">
            <label for="tglSewa" class="col-3">Tanggal Sewa</label>
            <input type="date" class="col-7" name="tglSewa" id="tglSewa">
          </div>
          <div class="row">
            <label for="tglKembali" class="col-3">Tanggal Kembali</label>
            <input type="date" class="col-7" name="tglKembali" id="tglKembali">
          </div>
          <div class="row">
            <label class="col-3">Pembayaran</label>
            <div class="form-group col-7">
              <div class="row">
                <div class="radioButton">
                  <input type="radio" class="" name="rbStatusBank" id="active" value="active">
                  <label for="active">Bank</label>
                  <select name="pembayaran" id="pembayaran">
                    <option selected>Pilih Bank</option>
                    <option value="1">BCA</option>
                    <option value="2">BRI</option>
                    <option value="3">Mandiri</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="radioButton">
                  <input type="radio" class="" name="rbStatusBank" id="inactive" value="inactive">
                  <label for="inactive">Tunai</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="btn-simpanDataPenyewa">Lanjut Proses</button>
        </div>
      </form>
    </div>
  </div>
</main>