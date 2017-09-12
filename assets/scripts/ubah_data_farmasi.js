//verifikasi Perawat
var EMR_FARMASI_btnChangePerUser = document.getElementById('EMR_FARMASI_btnChangePerUser');
var EMR_FARMASI_btnChangePerUser2 = document.getElementById('EMR_FARMASI_btnChangePerUser2');
var EMR_FARMASI_userUser2 = document.getElementById('EMR_FARMASI_userUser2');
var EMR_FARMASI_passUser2 = document.getElementById('EMR_FARMASI_passUser2');
var VerPassAwal = document.getElementById('VerPassAwal');
var EMR_FARMASI_statver = document.getElementById('EMR_FARMASI_statver');

//ubah user perawat
$('#EMR_FARMASI_btnChangePerUser').click(function() {
    EMR_FARMASI_statver.value = "User2";
    EMR_FARMASI_userUser2.value = "";
    EMR_FARMASI_passUser2.value = "";
    $('#EMR_FARMASI_verPerUser').toggleClass('collapse');
    $('#EMR_FARMASI_verPerUser2').toggleClass('collapse');
});

$('#EMR_FARMASI_btnChangePerUser2').click(function() {
    EMR_FARMASI_statver.value = "User1";
    VerPassAwal.value = "";
    $('#EMR_FARMASI_verPerUser').toggleClass('collapse');
    $('#EMR_FARMASI_verPerUser2').toggleClass('collapse');
});

$('#EMR_FARMASI_btnsimpan').click(function() {
  var form_data = {
    VerPassAwal: $('#VerPassAwal').val(),
    EMR_FARMASI_userUser2: $('#EMR_FARMASI_userUser2').val(),
    EMR_FARMASI_passUser2: $('#EMR_FARMASI_passUser2').val(),
    EMR_FARMASI_statver: $('#EMR_FARMASI_statver').val()
  };
  $.ajax({
    url: base_url + "ubah_data_farmasi/VerifikasiUser",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if (msg == 'msg-Selanjutnya_EMR_DATA_FARMASI')
      {
        $("#modalAlertCounter").modal('show');
         //window.location.href = base_url + "ubah_data_farmasi/pasien/"+VerPassAwal+"/"+VerPassAwal;
      }
      else if (msg == 'msg-UPPerKosongPerawatEMR_DATA_FARMASI')
      {
        $('#alert-msg-EMR_FARMASI_USER').html('<div class="alert alert-danger">User dan Password dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-UserPerKosongPerawatEMR_DATA_FARMASI')
      {
        $('#alert-msg-EMR_FARMASI_USER').html('<div class="alert alert-danger">User dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-PassPerKosongPerawatEMR_DATA_FARMASI')
      {
        $('#alert-msg-EMR_FARMASI_USER').html('<div class="alert alert-danger">Password dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-UserPerSalahPerawatEMR_DATA_FARMASI')
      {
        $('#alert-msg-EMR_FARMASI_USER').html('<div class="alert alert-danger text-center">User Anda Salah!</div>');
      }
      else if (msg == 'msg-PassPerSalahPerawatEMR_DATA_FARMASI')
      {
        $('#alert-msg-EMR_FARMASI_USER').html('<div class="alert alert-danger text-center">Password Anda Salah!</div>');
      }
      else if (msg == 'msg-PassPer1SalahPerawatEMR_DATA_FARMASI')
      {
        $('#alert-msg-EMR_FARMASI_USER').html('<div class="alert alert-danger text-center">Password Anda Salah!</div>');
      }
      else if (msg == 'msg-PassPer1KosongPerawatEMR_DATA_FARMASI')
      {
        $('#alert-msg-EMR_FARMASI_USER').html('<div class="alert alert-danger">Password dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else
      {
        $('#alert-msg-EMR_FARMASI_USER').html('<div class="alert alert-danger">' + msg +'</div>');
      }
    }
  });
  return false;
});

$(document).ready(function(){
  $(document).on('click', '#getObatSatuan', function(){
    var idpemeriksaansatuan = $(this).attr('data-idpemeriksaansatuan');
    var idobatsatuan = $(this).attr('data-idobatsatuan');
    var namaobatsatuan = $(this).attr('data-namaobatsatuan');
    var jumlahobatsatuan = $(this).attr('data-jumlahobatsatuan');

    $.ajax({
      type : "POST",
      //data: {idobat: idobat},
      //url: base_url + "index.php/transaksi_farmasi/getDataById_Obat",
      success : function(){
        $('#idpemeriksaansatuan').val(idpemeriksaansatuan);
        $('#idobatsatuan').val(idobatsatuan);
        $('#namaobatsatuan').val(namaobatsatuan);
        $('#jumlahobatsatuan').val(jumlahobatsatuan);
        //$('#ObatSatuanModal').show();
      }
    });
  });
});

$('#UpdateObatSatuan').click(function() {

  var form_data = {
    idpemeriksaansatuan: $('#idpemeriksaansatuan').val(),
    idobatsatuan: $('#idobatsatuan').val(),
    namaobatsatuan: $('#namaobatsatuan').val(),
    idobatsatuan_update: $('#idobatsatuan_update').val(),
    jumlahobatsatuan: $('#jumlahobatsatuan').val(),
  };

  $.ajax({
    url: base_url + "ubah_data_farmasi/UbahDataObatSatuan",
    type: 'POST',
    data: form_data,
    success: function()
    {
      if (msg == 'YES')
      {
        $("#ObatSatuanModal").fadeTo(500, 500).slideUp(1000, function(){
             $("#ObatSatuanModal").modal('hide');
             window.location.reload(true);
        });
      }
      else if (true) {

      }
    }
  });
  return false;
});

$.widget('custom.mcautocomplete', $.ui.autocomplete, {
    _create: function () {
        this._super();
        this.widget().menu("option", "items", "> :not(.ui-widget-header)");
    },
    _renderMenu: function (ul, items) {
        var self = this,
            thead;
        if (this.options.showHeader) {
            table = $('<div class="ui-widget-header" style="width:100%"></div>');
            $.each(this.options.columns, function (index, item) {
                table.append('<span style="padding:0 4px;float:left;width:' + item.width + ';">' + item.name + '</span>');
            });
            table.append('<div style="clear: both;"></div>');
            ul.append(table);
        }
        $.each(items, function (index, item) {
            self._renderItem(ul, item);
        });
    },
    _renderItem: function (ul, item) {
        var t = '',
            result = '';
        $.each(this.options.columns, function (index, column) {
            t = '<span style="padding:0 0px;float:left;width:100%;">' + item.namabarang + '</span>'
            //t += '<span style="padding:0 4px;float:left;width:50%;">' + item.pabrik + '</span>'
        });
        result = $('<li></li>')
            .data('ui-autocomplete-item', item)
            .append('<a class="mcacAnchor">' + t + '<div style="clear: both;"></div></a>')
            .appendTo(ul);
        return result;
    }
});

function enable_autocomplete(InputField) {
    $(InputField).mcautocomplete({
    showHeader: true,
    minLength: 3,
    columns: [{
        name: 'Nama Obat',
        width: '120px'
    }],
    select: function( event, ui ) {
        console.log(this);
        this.value = (ui.item ? ui.item.value : '');
        $(this).closest('div').find('input.idobatsatuan').val(ui.item.label);
        console.log(ui.item.label);
        return false;
    },
    source: function( request, response ) {
        $.ajax({
            url: base_url + "index.php/ubah_data_farmasi/getAllObat",
            dataType: "json",
            data: {
                q: request.term
                },
            success: function( data ) {
                response(data);
                }
            });
        },
    });
}

$(document).ready(function() {
    enable_autocomplete($('.obatsatuan'));
});
