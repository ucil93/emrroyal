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
