$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#RADIO_Diagnosis" ).bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        //minLength: 3,
        source: function( request, response ) {
            $.ajax({
                url: base_url + "index.php/ubah_status_radio/getAllDeskripsi",
                dataType: "json",
                data: {
                    q : extractLast(request.term)
                },
                success: function( data ) {
                    response(data);
                }
            });
        },
        search: function() {
          // custom minLength
          var term = extractLast( this.value );
          if ( term.length < 1 ) {
            return false;
          }
        },
        focus: function() {
            return false;
        },
        select: function( event, ui ) {
            var terms = split( this.value );
            terms.pop();
            terms.push( ui.item.value );
            terms.push( "" );
            this.value = terms.join( ", " );
            return false;
        }
    });
});

function editDataPasienRadio(id)
{
    var json = getDataPasienRadio(id);
    $.map(json, function(item) {
        $('#namadtradioedit1').val(item.NOREG);
        $('#namadtradioedit2').val(item.NORM);
        $('#noreglabelpasien').html(item.NOREG);
        $('#normlabelpasien').html(item.NORM);
        $('#namalabelpasien').html(item.NAMA);
        $('#niklabelpasien').html(item.NIK);
        $('#kelaminlabelpasien').html(item.KELAMIN);
        var monthNames = ["Januari", "Februari", "Maret","April", "Mei", "Juni", "Juli","Augustus", "September", "Oktober","November", "Desember"];
        var d = new Date(item.TGLLAHIR);
        var dformat = [d.getDate(),monthNames[d.getMonth()],d.getFullYear()].join(' ');
        $('#tgllahirlabelpasien').html(dformat);
        $('#alamatlabelpasien').html(item.ALAMATPASIEN);
        $('#edit_dt_pasien_radio').modal('show');
    })
}

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
    var nama = $(this).attr('data-nama');
    var tgllahir = $(this).attr('data-tgllahir');
    var alamat = $(this).attr('data-alamat');
    var diagnosis = $(this).attr('data-diagnosis');
    var diagnosisbanding = $(this).attr('data-diagnosisbanding');
    var kelamin = $(this).attr('data-kelamin');
    var usia = $(this).attr('data-usia');
    var tglperiksa = $(this).attr('data-tglperiksa');
    var nik = $(this).attr('data-nik');
    var nmdokter = $(this).attr('data-nmdokter');

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
        $('#namalabel').html(nama);
        $('#tgllahirlabel').html(tgllahir);
        $('#alamatlabel').html(alamat);
        $('#diagnosislabel').html(diagnosis);
        $('#diagnosisbandinglabel').html(diagnosisbanding);
        $('#kelaminlabel').html(kelamin);
        $('#usialabel').html(usia);
        $('#tglperiksalabel').html(tglperiksa);
        $('#niklabel').html(nik);
        $('#nmdokterlabel').html(nmdokter);
      }
    });
  });
});

$(document).ready(function(){
  $(document).on('click', '#getPasienRadiobpjs', function(){
    var uidbpjs = $(this).attr('data-idbpjs');
    var uid2bpjs = $(this).attr('data-normbpjs');
    var namabpjs = $(this).attr('data-namabpjs');
    var tgllahirbpjs = $(this).attr('data-tgllahirbpjs');
    var alamatbpjs = $(this).attr('data-alamatbpjs');
    var diagnosisbpjs = $(this).attr('data-diagnosisbpjs');
    var diagnosisbandingbpjs = $(this).attr('data-diagnosisbandingbpjs');
    var catatanbpjs = $(this).attr('data-catatanbpjs');
    var pjbpjs = $(this).attr('data-pjbpjs');
    var kelaminbpjs = $(this).attr('data-kelaminbpjs');
    var usiabpjs = $(this).attr('data-usiabpjs');
    var tglperiksabpjs = $(this).attr('data-tglperiksabpjs');
    var nikbpjs = $(this).attr('data-nikbpjs');
    var nmdokterbpjs = $(this).attr('data-nmdokterbpjs');

    $.ajax({
      type : "POST",
      data: {id: uidbpjs},
      url: base_url + "index.php/ubah_status_radio/getDataByIdRadio",
      success : function(data){
        $("#result_table_radiobpjs").html(databpjs);
        $('#noregRadiobpjs').val(uidbpjs);
        $('#normRadiobpjs').val(uid2bpjs);
        $('#noregRadio2').html(uidbpjs);
        $('#normlabelbpjs').html(uid2bpjs);
        $('#namalabelbpjs').html(namabpjs);
        $('#tgllahirlabelbpjs').html(tgllahirbpjs);
        $('#alamatlabelbpjs').html(alamatbpjs);
        $('#diagnosislabelbpjs').html(diagnosisbpjs);
        $('#diagnosisbandinglabelbpjs').html(diagnosisbandingbpjs);
        $('#catatanbpjslabel').html(catatanbpjs);
        $('#pjbpjslabel').html(pjbpjs);
        $('#kelaminlabelbpjs').html(kelaminbpjs);
        $('#usialabelbpjs').html(usiabpjs);
        $('#tglperiksalabelbpjs').html(tglperiksabpjs);
        $('#niklabelbpjs').html(nikbpjs);
        $('#nmdokterlabelbpjs').html(nmdokterbpjs);
      }
    });
  });
});

var radiologi_pasien_lain = document.getElementById('radiologi_pasien_lain');

function clearedit() {
    $("#namadtradioedit1").val("");
    $("#namadtradioedit2").val("");
    $("#RADIO_Diagnosis").val("");
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
};

function clearubah() {
    $("#noregRadio").val("");
    $("#normRadio").val("");
    $("#alert-msg-ubahpasienradio").empty();
};

function clearubahbpjs() {
    $("#noregRadiobpjs").val("");
    $("#normRadiobpjs").val("");
    $("#alert-msg-ubahpasienradio").empty();
};

$('#edit_dt_pasien_radio').on('hidden', function(){
    clearedit();
    $(this).find("input[type=checkbox], input[type=radio]").prop("checked", "").end();
});

$('#ubah_dt_pasien_radio').on('hidden', function(){
    clearubah();
});

$('#ubah_dt_pasien_radio_bpjs').on('hidden', function(){
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
        data: { namadtradioedit1:$('#namadtradioedit1').val(),
                namadtradioedit2:$('#namadtradioedit2').val(),
                radio_checkbox:checked,
                radio_pasien_lain:checkedValue,
                radio_pasien_lain2:$('#radiologi_pasien_lain2').val(),
                gigi_pasien_lain:checkedValueGigi,
                gigi_pasien_lain2:$('#EMR_RADIO_Gigi_Satuan2').val(),
                RADIO_Diagnosis:$('#RADIO_Diagnosis').val(),
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
});

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
            /*else if (msg == 'NO')
            {
              $('#alert-msg-ubahpasienradio').html('<div class="alert alert-danger text-center">Pasien Sudah Melakukan Pemeriksaan Sebelumnya!</br><button type="button" class="btn btn-default" data-dismiss="modal">Ok</button></div>');

            }*/
            else
            {
              $('#alert-msg-ubahpasienradio').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});

$('#ubahpasienradio1bpjs').click(function() {
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
            /*else if (msg == 'NO')
            {
              $('#alert-msg-ubahpasienradio').html('<div class="alert alert-danger text-center">Pasien Sudah Melakukan Pemeriksaan Sebelumnya!</br><button type="button" class="btn btn-default" data-dismiss="modal">Ok</button></div>');

            }*/
            else
            {
              $('#alert-msg-ubahpasienradiobpjs').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});
