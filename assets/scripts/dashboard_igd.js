$('#btnIGDpasienUNK').click(function() {
  simpen();
});

function simpen()
{
  var form_data = {
    IGD_namaAlias : $('#IGD_noname_nama').val(),
    IGD_tahunAlias : $('#IGD_noname_tahun').val(),
    IGD_tglmasuk : $('#tgl_masuk_igd').val()
  };
  $.ajax({
    url: base_url + "dashboard_igd/btnsimpanawalIGDunk",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if(msg == 'TERUJI')
      {
        window.location.href = base_url + "dashboard_igd";
      }
    }
  });
  return false;
}

$('#ubahpass').click(function() {
    var form_data = {
        passwordlama: $('#passwordlama').val(),
        passwordbaru: $('#passwordbaru').val(),
        passwordbaru2: $('#passwordbaru2').val()
    };
    $.ajax({
        url: base_url + "dashboard/ubahpass",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-ubahpass').html('<div class="alert alert-success text-center">Password Berhasil Disimpan!</div>');
              $("#ubahpassword").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#ubahpassword").modal('hide');
              });
              window.location.href = base_url + "dashboard";
            }
            else if (msg == 'NO1')
            {
              $('#alert-msg-ubahpass').html('<div class="alert alert-danger text-center">Password Lama Anda Salah!</div>');
            }
            else if (msg == 'NO2')
            {
              $('#alert-msg-ubahpass').html('<div class="alert alert-danger text-center">Password Baru Anda Tidak Sama!</div>');
            }
            else
            {
              $('#alert-msg-ubahpass').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});
