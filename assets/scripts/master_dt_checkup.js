function cleartambahdtcheckup() {
    $("#namadtcheckup").val("");
    $("#alert-msg-tambahdtcheckup").empty();
};

$('#tambah_dt_checkup').on('hidden', function(){
    cleartambahdtcheckup();
});

$('#tambahdtcheckup').click(function() {
    var form_data = {
        namadtcheckup: $('#namadtcheckup').val()
    };
    $.ajax({
        url: base_url + "master_detail_checkup/simpan",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-tambahdtcheckup').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#tambah_dt_checkup").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#tambah_dt_checkup").modal('hide');
              });
              window.location.href = base_url + "master_detail_checkup";
            }
            else
            {
              $('#alert-msg-tambahdtcheckup').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});

function editDataCheckup(id)
{
    var json = getDataCheckUp(id);
    $.map(json, function(item) {
        $('#kodedtcheckupedit').val(item.KODE_DT_CHECKUP);
        $('#namadtcheckupedit').val(item.NM_DT_CHECKUP);
        $('#statusdtcheckupedit').val(item.STATUS_DT_CHECKUP);
        $('#edit_dt_checkup').modal('show');
    })
}

function hapusDataCheckup(id)
{
    var json = getDataCheckUp(id);
    $.map(json, function(item) {
        $('#kodedtcheckuphapus').val(item.KODE_DT_CHECKUP);
        $('#namadtcheckuphapus').html(item.NM_DT_CHECKUP);
        $('#hapus_dt_checkup').modal('show');
    })
}

function getDataCheckUp(id)
{
  var json = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': base_url + "master_detail_checkup/getDataById",
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

function cleareditdtCheckUp() {
    $("#kodedtcheckupedit").val("");
    $("#namadtcheckupedit").val("");
    $("#statusdtcheckupedit").val("");
    $("#alert-msg-editdtcheckup").empty();
};

$('#edit_dt_checkup').on('hidden', function(){
    cleareditdtCheckUp();
});

$('#editdtcheckup').click(function() {
    var form_data = {
        kodedtcheckupedit: $('#kodedtcheckupedit').val(),
        namadtcheckupedit: $('#namadtcheckupedit').val(),
        statusdtcheckupedit: $('#statusdtcheckupedit').val(),
    };
    $.ajax({
        url: base_url + "master_detail_checkup/simpan_edit",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-editdtcheckup').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#edit_dt_checkup").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#edit_dt_checkup").modal('hide');
              });
              window.location.href = base_url + "master_detail_checkup";
            }
            else
            {
              $('#alert-msg-editdtcheckup').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});

function clearhapusdtCheckUp() {
    $("#kodedtcheckuphapus").val("");
    $("#namadtcheckuphapus").html("");
    $("#alert-msg-hapusdtcheckup").empty();
};

$('#hapus_dt_checkup').on('hidden', function(){
    clearhapusdtCheckUp();
});

$('#hapusdtcheckup').click(function() {
    var form_data = {
        kodedtcheckuphapus: $('#kodedtcheckuphapus').val()
    };
    $.ajax({
        url: base_url + "master_detail_checkup/hapus",
        type: 'POST',
        data: form_data,
        success: function(msg) {
             if (msg == 'YES')
            {
              $('#alert-msg-hapusdtcheckup').html('<div class="alert alert-success text-center">Data Berhasil Dihapus!</div>');
              $("#hapus_dt_checkup").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#hapus_dt_checkup").modal('hide');
              });
              window.location.href = base_url + "master_detail_checkup";
            }
            else
            {
              $('#alert-msg-hapusdtcheckup').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});
