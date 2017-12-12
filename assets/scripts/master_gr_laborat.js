function cleartambahgrlabo() {
    $("#namagrlb").val("");
    $("#alert-msg-tambahgrlb").empty();
};

$('#tambah_gr_labo').on('hidden', function(){
    cleartambahgrlabo();
});

$('#tambahgrlb').click(function() {
    var form_data = {
        namagrlb: $('#namagrlb').val()
    };
    $.ajax({
        url: base_url + "master_grup_laboratorium/simpan",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-tambahgrlb').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#tambah_gr_labo").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#tambah_gr_labo").modal('hide');
              });
              window.location.href = base_url + "master_grup_laboratorium";
            }
            else
            {
              $('#alert-msg-tambahgrlb').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});

function editDataLabo(id)
{
    var json = getDataLabo(id);
    $.map(json, function(item) {
        $('#kodegrlbedit').val(item.KODE_GR_LABORATORIUM);
        $('#namagrlbedit').val(item.NM_GR_LABORATORIUM);
        $('#statusgrlbedit').val(item.STATUS_GR_LABORAT);
        $('#edit_gr_labo').modal('show');
    })
}

function hapusDataLabo(id)
{
    var json = getDataLabo(id);
    $.map(json, function(item) {
        $('#kodegrlbhapus').val(item.KODE_GR_LABORATORIUM);
        $('#namagrlbhapus').html(item.NM_GR_LABORATORIUM);
        $('#hapus_gr_labo').modal('show');
    })
}

function getDataLabo(id)
{
  var json = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': base_url + "master_grup_laboratorium/getDataById",
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

function cleareditgrlabo() {
    $("#kodegrlbedit").val("");
    $("#namagrlbedit").val("");
    $("#statusgrlbedit").val("");
    $("#alert-msg-editgrlb").empty();
};

$('#edit_gr_labo').on('hidden', function(){
    cleareditgrlabo();
});

$('#editgrlb').click(function() {
    var form_data = {
        kodegrlbedit: $('#kodegrlbedit').val(),
        namagrlbedit: $('#namagrlbedit').val(),
        statusgrlbedit: $('#statusgrlbedit').val(),
    };
    $.ajax({
        url: base_url + "master_grup_laboratorium/simpan_edit",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-editgrlb').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#edit_gr_labo").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#edit_gr_labo").modal('hide');
              });
              window.location.href = base_url + "master_grup_laboratorium";
            }
            else
            {
              $('#alert-msg-editgrlb').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});

function clearhapusgrlabo() {
    $("#kodegrlbhapus").val("");
    $("#namagrlbhapus").html("");
    $("#alert-msg-hapusgrlb").empty();
};

$('#hapus_gr_labo').on('hidden', function(){
    clearhapusgrlabo();
});

$('#hapusgrlb').click(function() {
    var form_data = {
        kodegrlbhapus: $('#kodegrlbhapus').val()
    };
    $.ajax({
        url: base_url + "master_grup_laboratorium/hapus",
        type: 'POST',
        data: form_data,
        success: function(msg) {
             if (msg == 'YES')
            {
              $('#alert-msg-hapusgrlb').html('<div class="alert alert-success text-center">Data Berhasil Dihapus!</div>');
              $("#hapus_gr_labo").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#hapus_gr_labo").modal('hide');
              });
              window.location.href = base_url + "master_grup_laboratorium";
            }
            else if (msg == 'NO')
            {
              $('#alert-msg-hapusgrlb').html('<div class="alert alert-danger text-center">Data Tidak Dapat Dihapus, Karena Masih Ada Di Tempat Lainnya!</div>');
            }
            else
            {
              $('#alert-msg-hapusgrlb').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});
