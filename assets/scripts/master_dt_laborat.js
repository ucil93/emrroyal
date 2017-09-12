function cleartambahdtlabo() {
    $("#namadtlb").val("");
    $("#dataTableGr").val("");
    $("#alert-msg-tambahdtlb").empty();
};

$('#tambah_dt_labo').on('hidden', function(){
    cleartambahdtlabo();
});

$('#tambahdtlb').click(function() {
    var form_data = {
        namadtlb: $('#namadtlb').val(),
        dataTableGr: $('#dataTableGr').val()
    };
    $.ajax({
        url: base_url + "master_detail_laboratorium/simpan",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-tambahdtlb').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#tambah_dt_labo").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#tambah_dt_labo").modal('hide');
              });
              window.location.href = base_url + "master_detail_laboratorium";
            }
            else
            {
              $('#alert-msg-tambahdtlb').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});

function editDataDtLabo(id)
{
    var json = getDataDtLabo(id);
    $.map(json, function(item) {
        $('#kodedtlbedit').val(item.KODE_DT_LABORATORIUM);
        $('#namadtlbedit').val(item.NM_DT_LABORATORIUM);
        $('#dataTableGrEdit').val(item.KODE_GR_LABORATORIUM);
        $('#statusdtlbedit').val(item.STATUS_DT_LABORAT);
        $('#edit_dt_labo').modal('show');
    })
}

function hapusDataDtLabo(id)
{
    var json = getDataDtLabo(id);
    $.map(json, function(item) {
        $('#kodedtlbhapus').val(item.KODE_DT_LABORATORIUM);
        $('#namadtlbhapus').html(item.NM_DT_LABORATORIUM);
        $('#hapus_dt_labo').modal('show');
    })
}

function getDataDtLabo(id)
{
  var json = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': base_url + "master_detail_laboratorium/getDataById",
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

function cleareditdtlabo() {
    $("#kodedtlbedit").val("");
    $("#namadtlbedit").val("");
    $("#dataTableGrEdit").val("");
    $("#statusdtlbedit").val("");
    $("#alert-msg-editdtlb").empty();
};

$('#edit_dt_labo').on('hidden', function(){
    cleareditdtlabo();
});

$('#editdtlb').click(function() {
    var form_data = {
        kodedtlbedit: $('#kodedtlbedit').val(),
        namadtlbedit: $('#namadtlbedit').val(),
        dataTableGrEdit: $('#dataTableGrEdit').val(),
        statusdtlbedit: $('#statusdtlbedit').val(),
    };
    $.ajax({
        url: base_url + "master_detail_laboratorium/simpan_edit",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-editdtlb').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#edit_dt_labo").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#edit_dt_labo").modal('hide');
              });
              window.location.href = base_url + "master_detail_laboratorium";
            }
            else
            {
              $('#alert-msg-editdtlb').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});

function clearhapusdtlabo() {
    $("#kodedtlbhapus").val("");
    $("#namadtlbhapus").html("");
    $("#alert-msg-hapusdtlb").empty();
};

$('#hapus_dt_labo').on('hidden', function(){
    clearhapusdtlabo();
});

$('#hapusdtlb').click(function() {
    var form_data = {
        kodedtlbhapus: $('#kodedtlbhapus').val()
    };
    $.ajax({
        url: base_url + "master_detail_laboratorium/hapus",
        type: 'POST',
        data: form_data,
        success: function(msg) {
             if (msg == 'YES')
            {
              $('#alert-msg-hapusdtlb').html('<div class="alert alert-success text-center">Data Berhasil Dihapus!</div>');
              $("#hapus_dt_labo").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#hapus_dt_labo").modal('hide');
              });
              window.location.href = base_url + "master_detail_laboratorium";
            }
            else
            {
              $('#alert-msg-hapusdtlb').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});
