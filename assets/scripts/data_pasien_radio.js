/*function TambahDataPasienRadio(id)
{
    var json = getDataPasienRadio(id);
    $.map(json, function(item) {
        $('#tambahRadioNoreg').val(item.noreg);
        $('#tambahRadioNorm').val(item.norm);
        $('#tambahRadioNoregLabel').html(item.noreg);
        $('#tambahRadioNormLabel').html(item.norm);
        $('#tambahRadioNamaLabel').html(item.nama);
        $('#tambahRadioKelaminLabel').html(item.kdseks);
        var monthNames = ["Januari", "Februari", "Maret","April", "Mei", "Juni", "Juli","Augustus", "September", "Oktober","November", "Desember"];
        var d = new Date(item.tgllahir);
        var dformat = [d.getDate(),monthNames[d.getMonth()],d.getFullYear()].join(' ');
        $('#tambahRadioTglLahirLabel').html(dformat);
        $('#tambahRadioAlamatLabel').html(item.jalan);
        $('#tambah_dt_pasien_radio').modal('show');
    })
}*/

function getDataPasienRadio(id)
{
  var json = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': base_url + "ubah_status_radio/getDataById",
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

$(document).ready(function(){
  $(document).on('click', '#getPasienRadio', function(){
    var uid = $(this).attr('data-id');
    var uid2 = $(this).attr('data-norm');
    /*var nama = $(this).attr('data-nama');
    var tgllahir = $(this).attr('data-tgllahir');
    var alamat = $(this).attr('data-alamat');
    var kelamin = $(this).attr('data-kelamin');
    var usia = $(this).attr('data-usia');
    var tglperiksa = $(this).attr('data-tglperiksa');*/

    $.ajax({
      type : "POST",
      data: {id: uid},
      url: base_url + "index.php/ubah_status_radio/getDataByIdRadio",
      success : function(data){
        $("#result_table_radio").html(data);
        $('#noregRadio').val(uid);
        $('#normRadio').val(uid2);
        $('#noregRadio2').html(uid);
        $('#normlabel').html(uid2);
        /*$('#namalabel').html(nama);
        $('#tgllahirlabel').html(tgllahir);
        $('#alamatlabel').html(alamat);
        $('#kelaminlabel').html(kelamin);
        $('#usialabel').html(usia);
        $('#tglperiksalabel').html(tglperiksa);*/
      }
    });
  });
});

/*var radiologi_pasien_lain = document.getElementById('radiologi_pasien_lain');
var EMR_RADIO_Gigi_Satuan = document.getElementById('EMR_RADIO_Gigi_Satuan');

function cleartambah() {
    $("#tambahRadioNoreg").val("");
    $("#tambahRadioNorm").val("");
    $("#RADIO_catatan").val("");
    if(radiologi_pasien_lain.checked == true)
    {
        $('#radiologi_pasien_lain1').toggleClass('collapse');
    }
    $("#radiologi_pasien_lain2").val("");
    if(EMR_RADIO_Gigi_Satuan.checked == true)
    {
        $('#EMR_RADIO_Gigi_Satuan1').toggleClass('collapse');
    }
    $("#EMR_RADIO_Gigi_Satuan2").val("");
    $("#alert-msg-tambahpasienradio").empty();
};*/

function clearubah() {
    $("#noregRadio").val("");
    $("#normRadio").val("");
    $("#alert-msg-ubahpasienradio").empty();
};

/*function clearubahbpjs() {
    $("#noregRadiobpjs").val("");
    $("#normRadiobpjs").val("");
    $("#alert-msg-ubahpasienradiobpjs").empty();
};

$('#tambah_dt_pasien_radio').on('hidden', function(){
    cleartambah();
    $(this).find("input[type=checkbox], input[type=radio]").prop("checked", "").end();
});*/

$('#ubah_dt_pasien_radio').on('hidden', function(){
    clearubah();
});

/*$('#ubah_dt_pasien_radio_bpjs').on('hidden', function(){
    clearubahbpjs();
});

$('#tambahpasienradio1').click(function() {

    var checked = []
    $("input[name='radio_pasien_checkbox[]']:checked").each(function ()
    {
        checked.push($(this).val());
    });

    var checkedValue = null;
    $('input[name="radiologi_pasien_lain"]:checked').each(function() {
      checkedValue = $('#radiologi_pasien_lain').val()
    });

    var checkedValueGigi = null;
    $('input[name="EMR_RADIO_Gigi_Satuan"]:checked').each(function() {
      checkedValueGigi = $('#EMR_RADIO_Gigi_Satuan').val()
    });

    $.ajax({
        url: base_url + "ubah_status_radio/simpan",
        type: 'POST',
        data: { tambahRadioNoreg:$('#tambahRadioNoreg').val(),
                tambahRadioNorm:$('#tambahRadioNorm').val(),
                radio_checkbox:checked,
                radio_pasien_lain:checkedValue,
                radio_pasien_lain2:$('#radiologi_pasien_lain2').val(),
                gigi_pasien_lain:checkedValueGigi,
                gigi_pasien_lain2:$('#EMR_RADIO_Gigi_Satuan2').val(),
                RADIO_catatan:$('#RADIO_catatan').val(),
              },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-tambahpasienradio').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#edit_dt_pasien_radio").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#edit_dt_pasien_radio").modal('hide');
              });
              window.location.href = base_url + "ubah_status_radio";
            }
            else if (msg == 'NO1')
            {
              $('#alert-msg-tambahpasienradio').html('<div class="alert alert-danger text-center">Data Radiologi Pasien Harus Diisi!</div>');
            }
            else
            {
              $('#alert-msg-tambahpasienradio').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});

$('#radiologi_pasien_lain').click(function() {
    $('#radiologi_pasien_lain1').toggleClass('collapse');
    $("#radiologi_pasien_lain2").val("");
});

$('#EMR_RADIO_Gigi_Satuan').click(function() {
    $('#EMR_RADIO_Gigi_Satuan1').toggleClass('collapse');
    $("#EMR_RADIO_Gigi_Satuan2").val("");
});*/

$('#ubahpasienradio1').click(function() {
    $.ajax({
        url: base_url + "ubah_status_radio/ubah_status",
        type: 'POST',
        data: { noregRadio:$('#noregRadio').val(),
                normRadio:$('#normRadio').val()
              },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-ubahpasienradio').html('<div class="alert alert-success text-center">Status Berhasil Dirubah!</div>');
              $("#ubah_dt_pasien_radio").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#ubah_dt_pasien_radio").modal('hide');
              });
              window.location.href = base_url + "ubah_status_radio";
            }
            else
            {
              $('#alert-msg-ubahpasienradio').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});

/*$('#ubahpasienradio1bpjs').click(function() {
    $.ajax({
        url: base_url + "ubah_status_radio/ubah_status",
        type: 'POST',
        data: { noregRadio:$('#noregRadiobpjs').val(),
                normRadio:$('#normRadiobpjs').val()
              },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-ubahpasienradiobpjs').html('<div class="alert alert-success text-center">Status Berhasil Dirubah!</div>');
              $("#ubah_dt_pasien_radio_bpjs").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#ubah_dt_pasien_radio_bpjs").modal('hide');
              });
              window.location.href = base_url + "ubah_status_radio";
            }
            else
            {
              $('#alert-msg-ubahpasienradiobpjs').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});*/

$(document).ready(function(){
  $(document).on('click', '#getPasienRadioSelesai', function(){
    var uidselesai = $(this).attr('data-idselesai');
    var uid2selesai = $(this).attr('data-normselesai');
    /*var namaselesai = $(this).attr('data-namaselesai');
    var tgllahirselesai = $(this).attr('data-tgllahirselesai');
    var alamatselesai = $(this).attr('data-alamatselesai');
    var diagnosisselesai = $(this).attr('data-diagnosisselesai');
    var diagnosisbandingselesai = $(this).attr('data-diagnosisbandingselesai');
    var catatanselesai = $(this).attr('data-catatanselesai');
    var pjselesai = $(this).attr('data-pjselesai');
    var kelaminselesai = $(this).attr('data-kelaminselesai');
    var usiaselesai = $(this).attr('data-usiaselesai');
    var tglperiksaselesai = $(this).attr('data-tglperiksaselesai');
    var nikselesai = $(this).attr('data-nikselesai');
    var nmdokterselesai = $(this).attr('data-nmdokterselesai');*/

    $.ajax({
      type : "POST",
      data: {id: uidselesai},
      url: base_url + "index.php/ubah_status_radio/getDataByIdSelesai",
      success : function(data){
        $("#result_table_radioselesai").html(data);
        $('#noregRadioselesai').val(uidselesai);
        $('#normRadioselesai').val(uid2selesai);
        $('#noregRadio2selesai').html(uidselesai);
        $('#normlabelselesai').html(uid2selesai);
        /*$('#namalabelselesai').html(namaselesai);
        $('#tgllahirlabelselesai').html(tgllahirselesai);
        $('#alamatlabelselesai').html(alamatselesai);
        $('#diagnosislabelselesai').html(diagnosisselesai);
        $('#diagnosisbandinglabelselesai').html(diagnosisbandingselesai);
        $('#catatanselesailabel').html(catatanselesai);
        $('#pjselesailabel').html(pjselesai);
        $('#kelaminlabelselesai').html(kelaminselesai);
        $('#usialabelselesai').html(usiaselesai);
        $('#tglperiksalabelselesai').html(tglperiksaselesai);
        $('#niklabelselesai').html(nikselesai);
        $('#nmdokterlabelselesai').html(nmdokterselesai);*/
      }
    });
  });
});

$('#ubahpasienradio1selesai').click(function() {
    $.ajax({
        url: base_url + "ubah_status_radio/ubah_status_selesai",
        type: 'POST',
        data: { noregRadio:$('#noregRadioselesai').val(),
                normRadio:$('#normRadioselesai').val()
              },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-ubahpasienradioselesai').html('<div class="alert alert-success text-center">Status Berhasil Dirubah!</div>');
              $("#selesai_dt_pasien_radio").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#selesai_dt_pasien_radio").modal('hide');
              });
              window.location.href = base_url + "ubah_status_radio";
            }
            else
            {
              $('#alert-msg-ubahpasienradioselesai').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});
