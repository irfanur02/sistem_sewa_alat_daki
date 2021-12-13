$(document).ready(function(){

  var BASE_URL = "http://localhost/projek-sewaAlatDaki/";

  // make modal
  $('.close').on('click', function() {
    $('#modal').css("display", "none");
    $('input[type=text]').val('');
    $('input[type=radio]').eq(0).prop('checked', 'true');
    $('.modal-body input[type=hidden]').remove();
  });
  
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
      $('input[type=text]').val('');
      $('input[type=radio]').eq(0).prop('checked', 'true');
      $('.modal-body input[type=hidden]').remove();
    }
  }
  
  var modalData = "";
  var titleModalData = "";
  var dataController = "";

  function createModalNamingVariabel(modal) {
    var words = modal.split(" ");
    var countWords = words.length;
    for (let i = 0; i < countWords; i++) {
      modalData += words[i].charAt(0).toUpperCase() + words[i].slice(1);
      titleModalData += words[i].charAt(0).toUpperCase() + words[i].slice(1) + " ";
      dataController = modalData.toLowerCase();
    }
    // for (let i = 0; i < countWords; i++) {
    //   if(i == 0) {
    //     modalDataPage = words[i];
    //   } else {
    //     modalDataPage += words[i].charAt(0).toUpperCase() + words[i].slice(1);
    //   }
    // }
  }

  $('.btn-modalTambah').on('click', function() {
    var modal = $(this).attr("data-modal");
    createModalNamingVariabel(modal);
    $('#modal').css("display", "block");
    $('.title').html("Tambah Data " + titleModalData + "");
    titleModalData = "";
    $('.form-contol').attr("action", BASE_URL + "" + dataController + "/prosesTambah");
    modalData = "";
    dataController = "";
    $('.form-contol button').text("Simpan");
  });

  // button edit in table
  $('.btn-modalEdit').on('click', function(e) {
    e.preventDefault();
    var modal = $(this).attr("data-modal");
    createModalNamingVariabel(modal);
    var id = $(this).attr('data-id');
    var currentRow = $(this).closest("tr");
    if(modal == "kerusakan") {
      var colKerusakan = currentRow.find("td:eq(1)").html();
      var colDenda = currentRow.find("td:eq(2)").html();
      $('#kerusakan').val(colKerusakan);
      $('#denda').val(colDenda.slice(4));
    } else if(modal == "bank") {
      var colBank = currentRow.find("td:eq(1)").html();
      var colStatusBank = currentRow.find("td:eq(2) div").text();
      $('#bank').val(colBank);
      if(colStatusBank == "active") {
        $('input[name=rbStatusBank]').eq(0).prop("checked", true);
        $('input[name=rbStatusBank]').eq(1).prop("checked", false);
      } else {
        $('input[name=rbStatusBank]').eq(1).prop("checked", true);
        $('input[name=rbStatusBank]').eq(0).prop("checked", false);
      }
    } else if (modal == "kategori barang") {
      var colKategoriBarang = currentRow.find("td:eq(1)").html();
      $('#kategori').val(colKategoriBarang);
    }
    $('#modal').css("display", "block");
    $('.title').html("Edit Data " + titleModalData + "");
    titleModalData = "";
    $('.modal-body').append(`<input type="hidden" name="id` + modalData + `" id="id` + modalData + `" value="` + id + `">
    `);
    modalData = "";
    $('.form-contol').attr("action", BASE_URL + "" + dataController + "/prosesUpdateById");
    dataController = "";
    $('.form-contol button').text("Update");
  });

  // Make capital
  $('#kerusakan').keyup(function() {
    $(this).val($(this).val().charAt(0).toUpperCase() + $(this).val().slice(1));
  });

  // Make uppercase
  $('#cariIdBarang').keyup(function() {
    $(this).val($(this).val().toUpperCase());
  });

  // button delete in table
  $('.btn-hapus').each(function(i) {
    $(this).on('click', function(e) {
      e.preventDefault();
      $('.popup-content').removeClass("active");
      $('.popup-content').css("opacity", "0");
      $('.popup-content').css("left", "-50px");
      $('.popup-content').animate({left: '-105px', opacity: '1'});
      var id = $(this).attr('data-id');
      $('.form-popup input[type=hidden]').attr("value", id);
      $('.popup-content').eq(i).addClass("active");
    });
  });
  
  // button cancel in popup
  $('.btn-cancel').on('click', function() {
    $('.popup-content').animate({opacity: '0'});
    setTimeout(function() {
        $('.popup-content').removeClass("active");
    }, 800);
  });

  // button tambah jumlah sewa barang
  $('#detailRekamBarang').on('click', '.btnPlusJumlah', function() {
    var currentRow = $(this).closest("tr");
    var colBank = currentRow.find("td:eq(3) input").val();
    currentRow.find("td:eq(3) input").val(parseInt(colBank) + 1);
  });

  // button kurangi jumlah sewa barang
  $('#detailRekamBarang').on('click', '.btnMinJumlah', function() {
    var currentRow = $(this).closest("tr");
    var colBank = currentRow.find("td:eq(3) input").val();
    currentRow.find("td:eq(3) input").val((parseInt(colBank) > 1 ? (parseInt(colBank) - 1) : 1));
  });

  // button rekam barang
  $('#btn-rekamBarang').on('click', function() {
    var idBarang = $('#cariIdBarang').val();
    $.ajax({
      url: BASE_URL + 'barang/getBarangById',
      type: 'POST',
      data: { idBarang: idBarang },
      dataType: 'json',
      success: function(response) { 
          if (response.status === "sukses") {
            
          }
      }
    })
    $("#detailRekamBarang").append(`<tr>
    <td>1.</td>
    <td>
      <div class="thumb">
        <img src="` + BASE_URL + `/assets/img/tenda/tenda 1.jpg" alt="tenda 1.jpg">
      </div>
      <span>Tenda 1</span>
    </td>
    <td>Rp. 100000</td>
    <td>
      <button type="button" class="btn btn-info btnMinJumlah">-</button>
      <input type="text" name="jumlahSewaBarang" class="jumlahSewaBarang" value="1">
      <button type="button" class="btn btn-info btnPlusJumlah">+</button>
    </td>
    <td>
      <button type="button" class="btn btn-danger btnHapusRekamBarang">Batal</button>
    </td>
  </tr>`);
  });

  $('#detailRekamBarang').on('click', '.btnHapusRekamBarang', function() {
    var currentRow = $(this).closest("tr");
    currentRow.remove();
});

  // button hapus rekam barang
  $('table.btn-hapusRekamBarang').each(function(i) {
    $(this).on('click', function() {
      var table = document.getElementById("detailRekamBarang");
      var rowCount = table.rows.length;
      table.deleteRow(i);
      for (var i = 1; i < rowCount; i++) {
        table.deleteRow(i);
        rowCount--;
        i--;
      }
    });
  });

  // preview gambar when auto change
  $('#gambar').change(function(){
    const file = this.files[0];
    if (file){
      let reader = new FileReader();
      reader.onload = function(event){
      $('#imagePreview').attr('src', event.target.result);
    }
    reader.readAsDataURL(file);
    }
  });

})
