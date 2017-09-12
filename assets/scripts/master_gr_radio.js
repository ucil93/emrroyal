function cleartambahgrradio() {
    $("#namagrradio").val("");
    $("#alert-msg-tambahgrradio").empty();
};

$('#tambah_gr_radio').on('hidden', function(){
    cleartambahgrradio();
});

$('#tambahgrradio').click(function() {
    var form_data = {
        namagrradio: $('#namagrradio').val()
    };
    $.ajax({
        url: base_url + "master_grup_radio/simpan",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-tambahgrradio').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#tambah_gr_radio").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#tambah_gr_radio").modal('hide');
              });
              window.location.href = base_url + "master_grup_radio";
            }
            else
            {
              $('#alert-msg-tambahgrradio').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});

function editDataRadio(id)
{
    var json = getDataRadio(id);
    $.map(json, function(item) {
        $('#kodegrradioedit').val(item.KODE_GR_RADIO);
        $('#namagrradioedit').val(item.NM_GR_RADIO);
        $('#statusgrradioedit').val(item.STATUS_GR_RADIO);
        $('#edit_gr_radio').modal('show');
    })
}

function hapusDataRadio(id)
{
    var json = getDataRadio(id);
    $.map(json, function(item) {
        $('#kodegrradiohapus').val(item.KODE_GR_RADIO);
        $('#namagrradiohapus').html(item.NM_GR_RADIO);
        $('#hapus_gr_radio').modal('show');
    })
}

function getDataRadio(id)
{
  var json = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': base_url + "master_grup_radio/getDataById",
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

function cleareditgrradio() {
    $("#kodegrradioedit").val("");
    $("#namagrradioedit").val("");
    $("#statusgrradioedit").val("");
    $("#alert-msg-editgrradio").empty();
};

$('#edit_gr_radio').on('hidden', function(){
    cleareditgrradio();
});

$('#editgrradio').click(function() {
    var form_data = {
        kodegrradioedit: $('#kodegrradioedit').val(),
        namagrradioedit: $('#namagrradioedit').val(),
        statusgrradioedit: $('#statusgrradioedit').val(),
    };
    $.ajax({
        url: base_url + "master_grup_radio/simpan_edit",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-editgrradio').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#edit_gr_radio").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#edit_gr_radio").modal('hide');
              });
              window.location.href = base_url + "master_grup_radio";
            }
            else
            {
              $('#alert-msg-editgrradio').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});

function clearhapusgrradio() {
    $("#kodegrradiohapus").val("");
    $("#namagrradiohapus").html("");
    $("#alert-msg-hapusgrradio").empty();
};

$('#hapus_gr_radio').on('hidden', function(){
    clearhapusgrradio();
});

$('#hapusgrradio').click(function() {
    var form_data = {
        kodegrradiohapus: $('#kodegrradiohapus').val()
    };
    $.ajax({
        url: base_url + "master_grup_radio/hapus",
        type: 'POST',
        data: form_data,
        success: function(msg) {
             if (msg == 'YES')
            {
              $('#alert-msg-hapusgrradio').html('<div class="alert alert-success text-center">Data Berhasil Dihapus!</div>');
              $("#hapus_gr_radio").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#hapus_gr_radio").modal('hide');
              });
              window.location.href = base_url + "master_grup_radio";
            }
            else if (msg == 'NO')
            {
              $('#alert-msg-hapusgrradio').html('<div class="alert alert-danger text-center">Data Tidak Dapat Dihapus, Karena Masih Ada Di Tempat Lainnya!</div>');
            }
            else
            {
              $('#alert-msg-hapusgrradio').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});
