<main class="main">
  <div class="header">
    <div class="judul">Peminjaman</div>
  </div>
  <div class="content">
    <form action="">
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
    </div>
  </div>
</main>