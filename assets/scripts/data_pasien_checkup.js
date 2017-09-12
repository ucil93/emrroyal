$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#CHECKUP_Diagnosis" ).bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        //minLength: 3,
        source: function( request, response ) {
            $.ajax({
                url: base_url + "index.php/ubah_status_checkup/getAllDeskripsi",
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

function editDataPasienCheckup(id)
{
    var json = getDataPasienCheckup(id);
    $.map(json, function(item) {
        $('#namadtlbedit1').val(item.NOREG);
        $('#namadtlbedit2').val(item.NORM);
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
        $('#edit_dt_pasien_chekcup').modal('show');
    })
}

function getDataPasienCheckup(id)
{
  var json = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': base_url + "ubah_status_checkup/getDataById",
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
  $(document).on('click', '#getUser', function(){
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
      url: base_url + "index.php/ubah_status_checkup/getDataById34",
      success : function(data){
        $("#result_table").html(data);
        $('#noregchekcup').val(uid);
        $('#normchekcup').val(uid2);
        $('#noreg2').html(uid);
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
  $(document).on('click', '#getUserbpjs', function(){
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
      url: base_url + "index.php/ubah_status_checkup/getDataById34",
      success : function(data){
        $("#result_tablebpjs").html(data);
        $('#noregchekcupbpjs').val(uidbpjs);
        $('#normchekcupbpjs').val(uid2bpjs);
        $('#noreg2bpjs').html(uidbpjs);
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
        $('#tglperiksalabel').html(tglperiksabpjs);
        $('#niklabelbpjs').html(nikbpjs);
        $('#nmdokterlabelbpjs').html(nmdokterbpjs);
      }
    });
  });
});

var chekcup_pasien_lain = document.getElementById('chekcup_pasien_lain');

function clearedit() {
    $("#namadtlbedit1").val("");
    $("#namadtlbedit2").val("");
    if(chekcup_pasien_lain.checked == true)
    {
        $('#chekcup_pasien_lain1').toggleClass('collapse');
    }
    $("#chekcup_pasien_lain2").val("");
    $("#alert-msg-tambahpasienlb").empty();
};

function clearubah() {
    $("#noregchekcup").val("");
    $("#normchekcup").val("");
    $("#alert-msg-ubahpasienlb").empty();
};

function clearubahbpjs() {
    $("#noregchekcupbpjs").val("");
    $("#normchekcupbpjs").val("");
    $("#alert-msg-ubahpasienlbbpjs").empty();
};

$('#edit_dt_pasien_chekcup').on('hidden', function(){
    clearedit();
    $(this).find("input[type=checkbox], input[type=radio]").prop("checked", "").end();
});

$('#ubah_dt_pasien_chekcup').on('hidden', function(){
    clearubah();
});

$('#ubah_dt_pasien_chekcup_bpjs').on('hidden', function(){
    clearubahbpjs();
});

$('#tambahpasienlb1').click(function() {

    var checked = []
    $("input[name='chekcup_pasien_checkbox[]']:checked").each(function ()
    {
        checked.push($(this).val());
    });

    var checkedValue = null;
    $('input[name="chekcup_pasien_lain"]:checked').each(function() {
      checkedValue = $('#chekcup_pasien_lain').val()
    });

    $.ajax({
        url: base_url + "ubah_status_checkup/simpan",
        type: 'POST',
        data: { namadtlbedit1:$('#namadtlbedit1').val(),
                namadtlbedit2:$('#namadtlbedit2').val(),
                CHEKCUP_pasien_checkbox:checked,
                CHEKCUP_pasien_lain:checkedValue,
                CHEKCUP_pasien_lain2:$('#chekcup_pasien_lain2').val(),
                CHEKCUP_Diagnosis:$('#CHECKUP_Diagnosis').val(),
                CHEKCUP_catatan:$('#CHECKUP_Diagnosis').val()
              },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-tambahpasienlb').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#edit_dt_pasien_chekcup").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#edit_dt_pasien_chekcup").modal('hide');
              });
              window.location.href = base_url + "ubah_status_checkup";
            }
            else if (msg == 'NO1')
            {
              $('#alert-msg-tambahpasienlb').html('<div class="alert alert-danger text-center">Data Check Up Pasien Harus Diisi!</div>');
            }
            else
            {
              $('#alert-msg-tambahpasienlb').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});

$('#chekcup_pasien_lain').click(function() {
    $('#chekcup_pasien_lain1').toggleClass('collapse');
    $('#chekcup_pasien_lain2').val("");
});

$('#ubahpasienlb1').click(function() {
    $.ajax({
        url: base_url + "ubah_status_checkup/ubah_status",
        type: 'POST',
        data: { noregchekcup:$('#noregchekcup').val(),
                normchekcup:$('#normchekcup').val()
              },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-ubahpasienlb').html('<div class="alert alert-success text-center">Status Berhasil Dirubah!</div>');
              $("#ubah_dt_pasien_chekcup").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#ubah_dt_pasien_chekcup").modal('hide');
              });
              window.location.href = base_url + "ubah_status_checkup";
            }
            else
            {
              $('#alert-msg-ubahpasienlb').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});

$('#ubahpasienlb1bpjs').click(function() {
    $.ajax({
        url: base_url + "ubah_status_checkup/ubah_status",
        type: 'POST',
        data: { noregchekcup:$('#noregchekcupbpjs').val(),
                normchekcup:$('#normchekcupbpjs').val()
              },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-ubahpasienlbbpjs').html('<div class="alert alert-success text-center">Status Berhasil Dirubah!</div>');
              $("#ubah_dt_pasien_chekcup_bpjs").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#ubah_dt_pasien_chekcup_bpjs").modal('hide');
              });
              window.location.href = base_url + "ubah_status_checkup";
            }
            else
            {
              $('#alert-msg-ubahpasienlbbpjs').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});
