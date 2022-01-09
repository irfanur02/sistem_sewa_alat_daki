$(document).ready(function(){

  var BASE_URL = "http://localhost/projek-sewaAlatDaki/";

  $('#pembayaran').hide();

  // make modal
  $('.close').on('click', function() {
    $('#modal').css("display", "none");
    $('input[type=text]').val('');
    $('input[type=radio]').eq(0).prop('checked', 'true');
    $('.modal-body input[type=hidden]').remove();
    $('#tglSewa, #tglKembali').val('');
    $('#pembayaran').hide();
    $('.modal input[type=radio]').eq(0).prop('checked', 'false');
    $('.modal input[type=radio]').eq(1).prop('checked', 'false');
  });
  
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
      $('.modal input[type=text]').val('');
      $('input[type=radio]').eq(0).prop('checked', 'true');
      $('.modal-body input[type=hidden]').remove();
      $('#tglSewa, #tglKembali').val('');
      $('#pembayaran').hide();
      $('.modal input[type=radio]').eq(1).prop('checked', 'false');
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

  // radio untuk pembayaran
  $('.modal input[type=radio]').on('change', function() {
    if($(this).val() == 'active') {
      $('#pembayaran').show();
    } else {
      $('#pembayaran').hide();
    }
  });
  
  // button cancel in popup
  $('.btn-cancel').on('click', function() {
    $('.popup-content').animate({opacity: '0'});
    setTimeout(function() {
        $('.popup-content').removeClass("active");
    }, 800);
  });

  // button tambah jumlah sewa barang
  $('#detailRekamBarang').on('click', '.btn-plusJumlah', function() {
    var currentRow = $(this).closest("tr");
    var colBank = currentRow.find("td:eq(3) input").val();
    currentRow.find("td:eq(3) input").val(parseInt(colBank) + 1);
  });

  // button kurangi jumlah sewa barang
  $('#detailRekamBarang').on('click', '.btn-minJumlah', function() {
    var currentRow = $(this).closest("tr");
    var colBank = currentRow.find("td:eq(3) input").val();
    currentRow.find("td:eq(3) input").val((parseInt(colBank) > 1 ? (parseInt(colBank) - 1) : 1));
  });

  // set disable date before today
  $('#tglSewa, #tglKembali').attr('min', new Date().toISOString().split('T')[0]);

  // button rekam barang
  $('#btn-rekamBarang').on('click', function() {
    var idBarang = $('#cariIdBarang').val();
    $.ajax({
      url: BASE_URL + 'barang/getBarangById',
      type: 'POST',
      data: { idBarang: idBarang },
      dataType: 'json',
      statusCode: {
        500: function() {
          alert("server error");
        }
      },
      success: function(response) {
        $("#detailRekamBarang").append(`<tr>
          <td>
            <input type="hidden" name="idBarang" id="idBarang" value="` + response.idBarang + `">
            1.
          </td>
          <td>
            <div class="thumb">
              <img src="` + BASE_URL + `/assets/img/` + response.folderGambar + `/` + response.gambarBarang + `" alt="` + response.namaBarang + `.jpg">
            </div>
            <span>` + response.namaBarang + `</span>
          </td>
          <td>Rp. ` + response.hargaSewa + `</td>
          <td>
            <button type="button" class="btn btn-info btn-minJumlah">-</button>
            <input type="text" name="jumlahSewaBarang" class="jumlahSewaBarang" value="1">
            <button type="button" class="btn btn-info btn-plusJumlah">+</button>
          </td>
          <td>
            <button type="button" class="btn btn-danger btn-hapusRekamBarang">Batal</button>
          </td>
        </tr>`
        );
        $('#cariIdBarang').val("");
        $('#cariIdBarang').focus();
        $('#btn-prosesRekamBarang').show();
      }
    });
  });

  // button simpan rekam barang
  $('#btn-prosesRekamBarang').on('click', function() {
    $('#modal').css("display", "block");
    $('#namaPenyewa').focus();
  })
  
  // button simpan data penyewa
  $('#btn-simpanDataPenyewa').on('click', function() {
    var nama = $("#namaPenyewa").val();
    var noHp = $("#noHpPenyewa").val();
    var tglSewa = $("#tglSewa").val();
    var tglKembali = $("#tglKembali").val();
    var dataId = [];
    var dataJumlah = [];
    var tb = $('#detailRekamBarang');
    if($('.modal input[type=radio]').val() == 'active') {
      var pembayaran = $('#pembayaran').val();
    }
    tb.find("tr").each(function(index, element) {
      var id = $(element).find('td:eq(0) input').val();
      var jumlah = $(element).find('td:eq(3) input').val();
      dataId.push(id);
      dataJumlah.push(jumlah);
    });

    $.ajax({
      url: BASE_URL + 'peminjaman/storePenyewaan',
      type: 'POST',
      data: { dataIdBarang: dataId, dataJumlahPerBarang: dataJumlah, nama: nama, noHp: noHp, tglSewa: tglSewa, tglKembali: tglKembali, pembayaran: pembayaran },
      dataType: 'json',
      statusCode: {
        500: function() {
          alert("server error");
        }
      },
      success: function(data) {
        if(data.status == true) {
          location.reload(true);
        }
      }
    });
  });
  
  // button hapus rekam barang
  $('#detailRekamBarang').on('click', '.btn-hapusRekamBarang', function() {
    var currentRow = $(this).closest("tr");
    currentRow.remove();
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
