//verifikasi Perawat
var EMR_BPJS_btnChangePerUser = document.getElementById('EMR_BPJS_btnChangePerUser');
var EMR_BPJS_btnChangePerUser2 = document.getElementById('EMR_BPJS_btnChangePerUser2');
var EMR_BPJS_userUser2 = document.getElementById('EMR_BPJS_userUser2');
var EMR_BPJS_passUser2 = document.getElementById('EMR_BPJS_passUser2');
var VerPassAwal = document.getElementById('VerPassAwal');
var EMR_BPJS_statver = document.getElementById('EMR_BPJS_statver');

//ubah user perawat
$('#EMR_BPJS_btnChangePerUser').click(function() {
    EMR_BPJS_statver.value = "User2";
    EMR_BPJS_userUser2.value = "";
    EMR_BPJS_passUser2.value = "";
    $('#EMR_BPJS_verPerUser').toggleClass('collapse');
    $('#EMR_BPJS_verPerUser2').toggleClass('collapse');
});

$('#EMR_BPJS_btnChangePerUser2').click(function() {
    EMR_BPJS_statver.value = "User1";
    VerPassAwal.value = "";
    $('#EMR_BPJS_verPerUser').toggleClass('collapse');
    $('#EMR_BPJS_verPerUser2').toggleClass('collapse');
});

$('#EMR_BPJS_btnsimpan').click(function() {
  var form_data = {
    VerPassAwal: $('#VerPassAwal').val(),
    EMR_BPJS_userUser2: $('#EMR_BPJS_userUser2').val(),
    EMR_BPJS_passUser2: $('#EMR_BPJS_passUser2').val(),
    EMR_BPJS_statver: $('#EMR_BPJS_statver').val()
  };
  $.ajax({
    url: base_url + "approval_bpjs/VerifikasiUser",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if (msg == 'msg-Selanjutnya_APRROV_BPJS')
      {
        $("#modalAlertCounter").modal('show');
      }
      else if (msg == 'msg-UPPerKosongPerawatEMR_APPROV_BPJS')
      {
        $('#alert-msg-EMR_BPJS_USER').html('<div class="alert alert-danger">User dan Password dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-UserPerKosongPerawatEMR_APPROV_BPJS')
      {
        $('#alert-msg-EMR_BPJS_USER').html('<div class="alert alert-danger">User dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-PassPerKosongPerawatEMR_APPROV_BPJS')
      {
        $('#alert-msg-EMR_BPJS_USER').html('<div class="alert alert-danger">Password dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-UserPerSalahPerawatEMR_APPROV_BPJS')
      {
        $('#alert-msg-EMR_BPJS_USER').html('<div class="alert alert-danger text-center">User Anda Salah!</div>');
      }
      else if (msg == 'msg-PassPerSalahPerawatEMR_APPROV_BPJS')
      {
        $('#alert-msg-EMR_BPJS_USER').html('<div class="alert alert-danger text-center">Password Anda Salah!</div>');
      }
      else if (msg == 'msg-PassPer1SalahPerawatEMR_APPROV_BPJS')
      {
        $('#alert-msg-EMR_BPJS_USER').html('<div class="alert alert-danger text-center">Password Anda Salah!</div>');
      }
      else if (msg == 'msg-PassPer1KosongPerawatEMR_APPROV_BPJS')
      {
        $('#alert-msg-EMR_BPJS_USER').html('<div class="alert alert-danger">Password dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else
      {
        $('#alert-msg-EMR_BPJS_USER').html('<div class="alert alert-danger">' + msg +'</div>');
      }
    }
  });
  return false;
});

$('#EMR_BPJS_btnsimpan2').click(function() {

  var EMR_BPJS_laborat_checkbox_simpan = []
  $("input[name='EMR_BPJS_laborat_checkbox[]']:checked").each(function ()
  {
      EMR_BPJS_laborat_checkbox_simpan.push($(this).val());
  });

  var EMR_BPJS_radiologi_checkbox_simpan = []
  $("input[name='EMR_BPJS_radiologi_checkbox[]']:checked").each(function ()
  {
      EMR_BPJS_radiologi_checkbox_simpan.push($(this).val());
  });

  var EMR_BPJS_radiologi_checkbox_not = []
  $("input[name='EMR_BPJS_radiologi_checkbox[]']:not(:checked)").each(function ()
  {
      EMR_BPJS_radiologi_checkbox_not.push($(this).val());
  });

  var EMR_BPJS_laborat_checkbox_not = []
  $("input[name='EMR_BPJS_laborat_checkbox[]']:not(:checked)").each(function ()
  {
      EMR_BPJS_laborat_checkbox_not.push($(this).val());
  });

  var EMR_BPJS_checkup_checkbox_simpan = []
  $("input[name='EMR_BPJS_checkup_checkbox[]']:checked").each(function ()
  {
      EEMR_BPJS_checkup_checkbox_simpan.push($(this).val());
  });

  var EMR_BPJS_checkup_checkbox_not = []
  $("input[name='EMR_BPJS_checkup_checkbox[]']:not(:checked)").each(function ()
  {
      EMR_BPJS_checkup_checkbox_not.push($(this).val());
  });

  var form_data = {
    id_pemeriksaan: $('#id_pemeriksaan').val(),
    EMR_BPJS_catatan: $('#EMR_BPJS_catatan').val(),
    EMR_BPJS_userUser2: $('#EMR_BPJS_userUser2').val(),
    EMR_BPJS_statver: $('#EMR_BPJS_statver').val(),
    EMR_BPJS_radiologi_checkbox_simpan: EMR_BPJS_radiologi_checkbox_simpan,
    EMR_BPJS_laborat_checkbox_simpan: EMR_BPJS_laborat_checkbox_simpan,
    EMR_BPJS_radiologi_checkbox_not: EMR_BPJS_radiologi_checkbox_not,
    EMR_BPJS_laborat_checkbox_not: EMR_BPJS_laborat_checkbox_not,
    EMR_BPJS_checkup_checkbox_simpan: EMR_BPJS_checkup_checkbox_simpan,
    EMR_BPJS_checkup_checkbox_not: EMR_BPJS_checkup_checkbox_not
  };
  $.ajax({
    url: base_url + "approval_bpjs/UbahStatus",
    type: 'POST',
    data: form_data,
    //dataType:'JSON',
    success: function(msg)
    {
      if (msg == 'YES')
      {
        $('#alert-msg-EMR_BPJS_USER').html('<div class="alert alert-success">Data Berhasil Dirubah</div>');
        $("#modalAlertCounter").fadeTo(500, 500).slideUp(1000, function(){
             $("#modalAlertCounter").modal('hide');
             window.location.href = base_url + "dashboard_bpjs";
        });
      }
      else
      {
        $('#alert-msg-EMR_BPJS_UBAH').html('<div class="alert alert-danger">' + msg +'</div>');
      }
    }
  });
  return false;
});
