function cleartambahdtradio() {
    $("#kodedtradio").val("");
    $("#namadtradio").val("");
    $("#templatehasilradio").val("");
    $("#dataTableGrRadioValue").val("");
    $("#alert-msg-tambahdtradio").empty();
};

$('#tambah_dt_radio').on('hidden', function(){
    cleartambahdtradio();
});

$('#tambahdtradio').click(function() {
    var form_data = {
        kodedtradio: $('#kodedtradio').val(),
        namadtradio: $('#namadtradio').val(),
        templatehasilradio: $('#templatehasilradio').val(),
        dataTableGrRadioValue: $('#dataTableGrRadioValue').val()
    };
    $.ajax({
        url: base_url + "master_detail_radio/simpan",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-tambahdtradio').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#tambah_dt_radio").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#tambah_dt_radio").modal('hide');
              });
              window.location.href = base_url + "master_detail_radio";
            }
            else
            {
              $('#alert-msg-tambahdtradio').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});

function editDataDtRadio(id)
{
    var json = getDataDtRadio(id);
    $.map(json, function(item) {
        $('#kodedtradioedit').val(item.KODE_DT_RADIO);
        $('#namadtradioedit').val(item.NM_DT_RADIO);
        $('#templatehasilradioedit').val(item.TEMPLATE_HASIL_RADIO);
        //$('#templatehasilradioedit').val(item.TEMPLATE_REPLACE);
        $('#dataTableGrRadioEdit').val(item.KODE_GR_RADIO);
        $('#statusdtradioedit').val(item.STATUS_DT_RADIO);
        $('#edit_dt_radio').modal('show');
    })
}

function hapusDataDtRadio(id)
{
    var json = getDataDtRadio(id);
    $.map(json, function(item) {
        $('#kodedtradiohapus').val(item.KODE_DT_RADIO);
        $('#namadtradiohapus').html(item.NM_DT_RADIO);
        $('#hapus_dt_radio').modal('show');
    })
}

function getDataDtRadio(id)
{
  var json = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': base_url + "master_detail_radio/getDataById",
        'data': {'id': id},
        'dataType': "json",
        'success': function (data) {
            json = data;
        }
    });
    return json;
})();
  return json;
}

function cleareditdtradio() {
    $("#kodedtradioedit").val("");
    $("#namadtradioedit").val("");
    $("#templatehasilradioedit").val("");
    $("#dataTableGrRadioEdit").val("");
    $("#statusdtradioedit").val("");
    $("#alert-msg-editdtradio").empty();
};

$('#edit_dt_radio').on('hidden', function(){
    cleareditdtradio();
});

$('#editdtradio').click(function() {
    var form_data = {
        kodedtradioedit: $('#kodedtradioedit').val(),
        namadtradioedit: $('#namadtradioedit').val(),
        templatehasilradioedit: $('#templatehasilradioedit').val(),
        dataTableGrRadioEdit: $('#dataTableGrRadioEdit').val(),
        statusdtradioedit: $('#statusdtradioedit').val(),
    };
    $.ajax({
        url: base_url + "master_detail_radio/simpan_edit",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-editdtradio').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#edit_dt_radio").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#edit_dt_radio").modal('hide');
              });
              window.location.href = base_url + "master_detail_radio";
            }
            else
            {
              $('#alert-msg-editdtradio').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});

function clearhapusdtradio() {
    $("#kodedtradiohapus").val("");
    $("#namadtradiohapus").html("");
    $("#alert-msg-hapusdtradio").empty();
};

$('#hapus_dt_radio').on('hidden', function(){
    clearhapusdtradio();
});

$('#hapusdtradio').click(function() {
    var form_data = {
        kodedtradiohapus: $('#kodedtradiohapus').val()
    };
    $.ajax({
        url: base_url + "master_detail_radio/hapus",
        type: 'POST',
        data: form_data,
        success: function(msg) {
             if (msg == 'YES')
            {
              $('#alert-msg-hapusdtradio').html('<div class="alert alert-success text-center">Data Berhasil Dihapus!</div>');
              $("#hapus_dt_radio").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#hapus_dt_radio").modal('hide');
              });
              window.location.href = base_url + "master_detail_radio";
            }
            else
            {
              $('#alert-msg-hapusdtradio').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});
