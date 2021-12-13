<main class="main">
  <div class="header">
    <div class="judul">Data Bank</div>
    <button class="btn btn-primary btn-modalTambah" data-modal="bank">Tambah Data</button>
  </div>
  <div class="content">
    <table id="myTable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Bank</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>BCA</td>
          <td>
            <div class="badge badge-success">active</div>
          </td>
          <td>
            <a href="#" class="btn btn-link-warning btn-modalEdit" style="margin-right: 5px;" data-id="1" data-modal="bank">Edit</a>
            <div class="popup-delete" id=popup>
              <div class="popup-content">
                <form action="<?php echo base_url('bank/prosesHapusById'); ?>" method="POST" class="form-popup">
                  <input type="hidden" name="idBank" id="idBank">
                  <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                  <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                </form>
              </div>
              <a href="" class="btn btn-danger btn-hapus" data-id="1">Hapus</a>
            </div>
          </td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Mandiri</td>
          <td>
            <div class="badge badge-success">active</div>
          </td>
          <td>
            <a href="#" class="btn btn-link-warning btn-modalEdit" style="margin-right: 5px;" data-id="2" data-modal="bank">Edit</a>
            <div class="popup-delete" id=popup>
              <div class="popup-content">
                <form action="<?php echo base_url('bank/prosesHapusById'); ?>" method="POST" class="form-popup">
                  <input type="hidden" name="idBank" id="idBank">
                  <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                  <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                </form>
              </div>
              <a href="" class="btn btn-danger btn-hapus" data-id="2">Hapus</a>
            </div>
          </td>
        </tr>
        <tr>
          <td>3.</td>
          <td>BNI</td>
          <td>
            <div class="badge badge-danger">inactive</div>
          </td>
          <td>
            <a href="#" class="btn btn-link-warning btn-modalEdit" style="margin-right: 5px;" data-id="3" data-modal="bank">Edit</a>
            <div class="popup-delete" id=popup>
              <div class="popup-content">
                <form action="<?php echo base_url('bank/prosesHapusById'); ?>" method="POST" class="form-popup">
                  <input type="hidden" name="idBank" id="idBank">
                  <button type="submit" class="btn btn-sm btn-danger">Iya</button>
                  <button type="button" class="btn btn-sm btn-gray btn-cancel">Tidak</button>
                </form>
              </div>
              <a href="" class="btn btn-danger btn-hapus" data-id="3">Hapus</a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</main>

<div id="modal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="title">Tambah Data Bank</span>
      <span class="close"><i class="fas fa-times"></i></span>
    </div>
    <form action="<?php echo base_url('bank/prosesTambah'); ?>" method="post" class="form-contol">
      <div class="modal-body">
        <div class="row">
          <label for="bank" class="col-3">Bank</label>
          <input type="text" class="col-7" name="bank" id="bank">
        </div>
        <div class="row">
          <label class="col-3">Active</label>
          <div class="form-group col-7">
            <div class="radioButton">
              <input type="radio" class="" name="rbStatusBank" id="active" value="active" checked="true">
              <label for="active">Active</label>
            </div>
            <div class="radioButton">
              <input type="radio" class="" name="rbStatusBank" id="inactive" value="inactive">
              <label for="inactive">Inactive</label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </form>
  </div>
</div>