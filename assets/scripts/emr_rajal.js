/*var EMR_RAJAL_Noreg = document.getElementById('EMR_RAJAL_Noreg');
var EMR_RAJAL_Norm = document.getElementById('EMR_RAJAL_Norm');
var EMR_RAJAL_Unit = document.getElementById('EMR_RAJAL_Unit');
var EMR_RAJAL_stepPerawat = document.getElementById('EMR_RAJAL_stepPerawat'); //HALAMAN PERAWAT - STEP ICON
var EMR_RAJAL_FrmLPerawat = document.getElementById('EMR_RAJAL_FrmLPerawat'); //HALAMAN PERAWAT - FORM KIRI
var EMR_RAJAL_FrmRPerawat = document.getElementById('EMR_RAJAL_FrmRPerawat'); //HALAMAN PERAWAT - FORM KANAN
var EMR_RAJAL_verPerPerawat = document.getElementById('EMR_RAJAL_verPerPerawat'); //HALAMAN PERAWAT - FORM VERIFIKASI PERAWAT
var EMR_RAJAL_verDokPerawat = document.getElementById('EMR_RAJAL_verDokPerawat');*/ //HALAMAN PERAWAT - FORM VERIFIKASI DOKTER
var EMR_RAJAL_btnChangePerPerawat = document.getElementById('EMR_RAJAL_btnChangePerPerawat'); //HALAMAN PERAWAT
var EMR_RAJAL_btnChangeDokPerawat = document.getElementById('EMR_RAJAL_btnChangeDokPerawat'); //HALAMAN PERAWAT
//var EMR_RAJAL_btnSelanjutnyaPerawat = document.getElementById('EMR_RAJAL_btnSelanjutnyaPerawat'); //HALAMAN PERAWAT
var EMR_RAJAL_userPerPerawat = document.getElementById('EMR_RAJAL_userPerPerawat'); //HALAMAN PERAWAT
var EMR_RAJAL_passPerPerawat = document.getElementById('EMR_RAJAL_passPerPerawat'); //HALAMAN PERAWAT
var EMR_RAJAL_passDokPerawat = document.getElementById('EMR_RAJAL_passDokPerawat'); //HALAMAN PERAWAT
var EMR_RAJAL_TDPerawat = document.getElementById('EMR_RAJAL_TDPerawat'); //HALAMAN PERAWAT
var EMR_RAJAL_NPerawat = document.getElementById('EMR_RAJAL_NPerawat'); //HALAMAN PERAWAT
var EMR_RAJAL_TPerawat = document.getElementById('EMR_RAJAL_TPerawat'); //HALAMAN PERAWAT
var EMR_RAJAL_RPerawat = document.getElementById('EMR_RAJAL_RPerawat'); //HALAMAN PERAWAT
var EMR_RAJAL_CPerawat = document.getElementById('EMR_RAJAL_CPerawat'); //HALAMAN PERAWAT
/*var EMR_RAJAL_stepDokter = document.getElementById('EMR_RAJAL_stepDokter'); //HALAMAN DOKTER - STEP ICON
var EMR_RAJAL_FrmLDokter = document.getElementById('EMR_RAJAL_FrmLDokter'); //HALAMAN DOKTER - FORM KIRI
var EMR_RAJAL_FrmRDokter = document.getElementById('EMR_RAJAL_FrmRDokter');*/ //HALAMAN DOKTER - FORM KANAN
var EMR_RAJAL_btnSebelumnyaDokter = document.getElementById('EMR_RAJAL_btnSebelumnyaDokter');
var EMR_RAJAL_btnSebelumnyaDokter2 = document.getElementById('EMR_RAJAL_btnSebelumnyaDokter2');
var EMR_RAJAL_passDokDokter = document.getElementById('EMR_RAJAL_passDokDokter');
//var EMR_RAJAL_passDokDokter2 = document.getElementById('EMR_RAJAL_passDokDokter2'); //HALAMAN DOKTER - FORM PASS COLLAPSE
var EMR_RAJAL_TDDokter = document.getElementById('EMR_RAJAL_TDDokter');
var EMR_RAJAL_NDokter = document.getElementById('EMR_RAJAL_NDokter');
var EMR_RAJAL_SDokter = document.getElementById('EMR_RAJAL_SDokter');
var EMR_RAJAL_RDokter = document.getElementById('EMR_RAJAL_RDokter');
var EMR_RAJAL_CDokter = document.getElementById('EMR_RAJAL_CDokter');
var EMR_RAJAL_SNDokter = document.getElementById('EMR_RAJAL_SNDokter');
var EMR_RAJAL_RJDokter = document.getElementById('EMR_RAJAL_RJDokter');
var EMR_RAJAL_statver = document.getElementById('EMR_RAJAL_statver');
var EMR_RAJAL_PosisiHalaman = document.getElementById('EMR_RAJAL_PosisiHalaman');
var EMR_RAJAL_btnObatSatuan = document.getElementById('EMR_RAJAL_btnObatSatuan');
var EMR_RAJAL_btnObatRacik = document.getElementById('EMR_RAJAL_btnObatRacik');
var EMR_RAJAL_statObat = document.getElementById('EMR_RAJAL_statObat');
/*var EMR_RAJAL_formObatSatuan = document.getElementById('EMR_RAJAL_formObatSatuan');
var EMR_RAJAL_formObatRacik = document.getElementById('EMR_RAJAL_formObatRacik');
var EMR_RAJAL_GNskor = document.querySelector('#EMR_RAJAL_GNskor'); //GAMBAR ICON SKOR NYERI
var EMR_RAJAL_GJskor = document.querySelector('#EMR_RAJAL_GJskor');*/ //GAMBAR ICON RESIKO JATUH
var EMR_RAJAL_SDokterSOAP = document.getElementById('EMR_RAJAL_SDokterSOAP'); //INPUT S DOKTER
var EMR_RAJAL_ODokterSOAP = document.getElementById('EMR_RAJAL_ODokterSOAP'); //INPUT O DOKTER
var EMR_RAJAL_ADokterSOAP = document.getElementById('EMR_RAJAL_ADokterSOAP'); //INPUT A DOKTER
var EMR_RAJAL_PDokterSOAP = document.getElementById('EMR_RAJAL_PDokterSOAP'); //INPUT P DOKTER
var EMR_RAJAL_Nskor = document.querySelector('#EMR_RAJAL_Nskor'); //INPUT SKOR NYERI PERAWAT
var EMR_RAJAL_Jskor = document.querySelector('#EMR_RAJAL_Jskor'); //INPUT SKOR RESIKO JATUH PERAWAT

$('#EMR_IGD_btnMerah').click(function() {
  $('#EMR_ASESMEN_AWAL_HalamanTriase').toggleClass('collapse');
  $('#EMR_ASESMEN_AWAL_HalamanPerawat').toggleClass('collapse');
});

EMR_RAJAL_Nskor.addEventListener('input', function()
{
  if(EMR_RAJAL_Nskor.value == "10" || EMR_RAJAL_Nskor.value == "9")
  {
    $("#EMR_RAJAL_GNskor").attr("src",base_url + "assets/pages/img/Icon/emot11.png");
  }
  else if(EMR_RAJAL_Nskor.value == "8" || EMR_RAJAL_Nskor.value == "7")
  {
    $("#EMR_RAJAL_GNskor").attr("src",base_url + "assets/pages/img/Icon/emot08.png");
  }
  else if(EMR_RAJAL_Nskor.value == "6" || EMR_RAJAL_Nskor.value == "5")
  {
    $("#EMR_RAJAL_GNskor").attr("src",base_url + "assets/pages/img/Icon/emot06.png");
  }
  else if(EMR_RAJAL_Nskor.value == "4" || EMR_RAJAL_Nskor.value == "3")
  {
    $("#EMR_RAJAL_GNskor").attr("src",base_url + "assets/pages/img/Icon/emot04.png");
  }
  else if(EMR_RAJAL_Nskor.value == "2" || EMR_RAJAL_Nskor.value == "1")
  {
    $("#EMR_RAJAL_GNskor").attr("src",base_url + "assets/pages/img/Icon/emot02.png");
  }
  else if(EMR_RAJAL_Nskor.value == "0")
  {
    $("#EMR_RAJAL_GNskor").attr("src",base_url + "assets/pages/img/Icon/emot01.png");
  }
});

EMR_RAJAL_Jskor.addEventListener('input', function()
{
  if(EMR_RAJAL_Jskor.value == "10" || EMR_RAJAL_Jskor.value == "9")
  {
    $("#EMR_RAJAL_GJskor").attr("src",base_url + "assets/pages/img/Icon/emot11.png");
  }
  else if(EMR_RAJAL_Jskor.value == "8" || EMR_RAJAL_Jskor.value == "7")
  {
    $("#EMR_RAJAL_GJskor").attr("src",base_url + "assets/pages/img/Icon/emot08.png");
  }
  else if(EMR_RAJAL_Jskor.value == "6" || EMR_RAJAL_Jskor.value == "5")
  {
    $("#EMR_RAJAL_GJskor").attr("src",base_url + "assets/pages/img/Icon/emot06.png");
  }
  else if(EMR_RAJAL_Jskor.value == "4" || EMR_RAJAL_Jskor.value == "3")
  {
    $("#EMR_RAJAL_GJskor").attr("src",base_url + "assets/pages/img/Icon/emot04.png");
  }
  else if(EMR_RAJAL_Jskor.value == "2" || EMR_RAJAL_Jskor.value == "1")
  {
    $("#EMR_RAJAL_GJskor").attr("src",base_url + "assets/pages/img/Icon/emot02.png");
  }
  else if(EMR_RAJAL_Jskor.value == "0")
  {
    $("#EMR_RAJAL_GJskor").attr("src",base_url + "assets/pages/img/Icon/emot01.png");
  }
});

EMR_RAJAL_btnChangePerPerawat.onclick = function()
{
    EMR_RAJAL_statver.value = "Dokter";
    EMR_RAJAL_userPerPerawat.value = "";
    EMR_RAJAL_passPerPerawat.value = "";
    $('#EMR_RAJAL_verPerPerawat').toggleClass('collapse');
    $('#EMR_RAJAL_verDokPerawat').toggleClass('collapse');
};
EMR_RAJAL_btnChangeDokPerawat.onclick = function()
{
    EMR_RAJAL_statver.value = "Perawat";
    EMR_RAJAL_passDokPerawat.value = "";
    $('#EMR_RAJAL_verPerPerawat').toggleClass('collapse');
    $('#EMR_RAJAL_verDokPerawat').toggleClass('collapse');
};

onkeypress = function(e){
  if(e.keyCode==13){
    if(EMR_RAJAL_PosisiHalaman.value == "Perawat")
    {
      document.getElementById('EMR_RAJAL_btnSelanjutnyaPerawat').click();
    }
    else if(EMR_RAJAL_PosisiHalaman.value == "Warning")
    {
      document.getElementById('btnAbaikanEMR').click();
    }
    else
    {
      document.getElementById('btnsimpanDokterEMR').click();
    }
  }
}

EMR_RAJAL_btnSebelumnyaDokter2.onclick = function()
{
  EMR_RAJAL_PosisiHalaman.value = "Perawat";
  if(EMR_RAJAL_passDokPerawat.value != "")
  {
    $('#EMR_RAJAL_passDokDokter2').toggleClass('collapse');
  }
  $('#EMR_RAJAL_stepPerawat').toggleClass('collapse');
  $('#EMR_RAJAL_stepDokter').toggleClass('collapse');
  $('#EMR_RAJAL_FrmLPerawat').toggleClass('collapse');
  $('#EMR_RAJAL_FrmRPerawat').toggleClass('collapse');
  $('#EMR_RAJAL_FrmLDokter').toggleClass('collapse');
  $('#EMR_RAJAL_FrmRDokter').toggleClass('collapse');
  //$('#CanvasLDokterEMR').toggleClass('collapse');
};

EMR_RAJAL_btnSebelumnyaDokter.onclick = function()
{
  EMR_RAJAL_PosisiHalaman.value = "Perawat";
  if(EMR_RAJAL_passDokPerawat.value != "")
  {
    $('#EMR_RAJAL_passDokDokter2').toggleClass('collapse');
  }
  $('#EMR_RAJAL_stepPerawat').toggleClass('collapse');
  $('#EMR_RAJAL_stepDokter').toggleClass('collapse');
  $('#EMR_RAJAL_FrmLPerawat').toggleClass('collapse');
  $('#EMR_RAJAL_FrmRPerawat').toggleClass('collapse');
  $('#EMR_RAJAL_FrmLDokter').toggleClass('collapse');
  $('#EMR_RAJAL_FrmRDokter').toggleClass('collapse');
  //$('#CanvasLDokterEMR').toggleClass('collapse');
};

$('#EMR_RAJAL_btnSelanjutnyaPerawat').click(function() {
  var form_data = {
    EMR_RAJAL_passDokPerawat: $('#EMR_RAJAL_passDokPerawat').val(),
    EMR_RAJAL_userPerPerawat: $('#EMR_RAJAL_userPerPerawat').val(),
    EMR_RAJAL_passPerPerawat: $('#EMR_RAJAL_passPerPerawat').val(),
    EMR_RAJAL_statver: $('#EMR_RAJAL_statver').val()
  };
  $.ajax({
    url: base_url + "emr/CbtnSelanjutnyaEMR",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if (msg == 'msg-Selanjutnya')
      {
        var counter = 0;
        if(EMR_RAJAL_TDPerawat.value != "")
        {
          counter = counter + 1;
        }
        if(EMR_RAJAL_NPerawat.value != "")
        {
          counter = counter + 1;
        }
        if(EMR_RAJAL_TPerawat.value != "")
        {
          counter = counter + 1;
        }
        if(EMR_RAJAL_RPerawat.value != "")
        {
          counter = counter + 1;
        }
        if(EMR_RAJAL_Nskor.value != "")
        {
          counter = counter + 1;
        }
        if(EMR_RAJAL_Jskor.value != "")
        {
          counter = counter + 1;
        }
        if(EMR_RAJAL_CPerawat.value != "")
        {
          counter = counter + 1;
        }
        if(counter <= 3)
        {
          $("#modalAlertCounter").modal('show');
          EMR_RAJAL_PosisiHalaman.value = "Warning";
        }
        else
        {
          EMR_RAJAL_PosisiHalaman.value = "Dokter";
        }
        if(EMR_RAJAL_passDokPerawat.value != "")
        {
          $('#EMR_RAJAL_passDokDokter2').toggleClass('collapse');
        }
        EMR_RAJAL_TDDokter.innerHTML = EMR_RAJAL_TDPerawat.value;
        EMR_RAJAL_NDokter.innerHTML = EMR_RAJAL_NPerawat.value;
        EMR_RAJAL_SDokter.innerHTML = EMR_RAJAL_TPerawat.value;
        EMR_RAJAL_RDokter.innerHTML = EMR_RAJAL_RPerawat.value;
        EMR_RAJAL_SNDokter.innerHTML = EMR_RAJAL_Nskor.value;
        EMR_RAJAL_RJDokter.innerHTML = EMR_RAJAL_Jskor.value;
        EMR_RAJAL_CDokter.innerHTML = EMR_RAJAL_CPerawat.value;
        EMR_RAJAL_passDokDokter.value = EMR_RAJAL_passDokPerawat.value;
        $('#EMR_RAJAL_stepPerawat').toggleClass('collapse');
        $('#EMR_RAJAL_stepDokter').toggleClass('collapse');
        $('#EMR_RAJAL_FrmLPerawat').toggleClass('collapse');
        $('#EMR_RAJAL_FrmRPerawat').toggleClass('collapse');
        $('#EMR_RAJAL_FrmLDokter').toggleClass('collapse');
        $('#EMR_RAJAL_FrmRDokter').toggleClass('collapse');
        //$('#CanvasLDokterEMR').toggleClass('collapse');
      }
      else if (msg == 'msg-UPPerKosongPerawatEMR')
      {
        $('#alert-msg-PerawatEMR').html('<div class="alert alert-danger">User dan Password Perawat dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-UserPerKosongPerawatEMR')
      {
        $('#alert-msg-PerawatEMR').html('<div class="alert alert-danger">User Perawat dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-PassPerKosongPerawatEMR')
      {
        $('#alert-msg-PerawatEMR').html('<div class="alert alert-danger">Password Perawat dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-UserPerSalahPerawatEMR')
      {
        $('#alert-msg-PerawatEMR').html('<div class="alert alert-danger text-center">User Perawat Anda Salah!</div>');
      }
      else if (msg == 'msg-PassPerSalahPerawatEMR')
      {
        $('#alert-msg-PerawatEMR').html('<div class="alert alert-danger text-center">Password Perawat Anda Salah!</div>');
      }
      else if (msg == 'msg-PassDokSalahPerawatEMR')
      {
        $('#alert-msg-PerawatEMR').html('<div class="alert alert-danger text-center">Password Dokter Anda Salah!</div>');
      }
      else if (msg == 'msg-PassDokKosongPerawatEMR')
      {
        $('#alert-msg-PerawatEMR').html('<div class="alert alert-danger">Password Dokter dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
    }
  });
  return false;
});

EMR_RAJAL_btnObatSatuan.onclick = function()
{
  EMR_RAJAL_statObat.value = "Satuan";
  $('#EMR_RAJAL_formObatRacik').toggleClass('collapse');
  $('#EMR_RAJAL_formObatSatuan').toggleClass('collapse');

  EMR_RAJAL_btnObatSatuan.innerHTML = "<b>Obat </br> Satuan</b>";
  EMR_RAJAL_btnObatSatuan.classList.remove('blue');
  EMR_RAJAL_btnObatSatuan.classList.add('white');
  EMR_RAJAL_btnObatSatuan.classList.add('disabled');

  EMR_RAJAL_btnObatRacik.innerHTML = "<b>Obat </br> Racik</b>";
  EMR_RAJAL_btnObatRacik.classList.add('blue');
  EMR_RAJAL_btnObatRacik.classList.remove('white');
  EMR_RAJAL_btnObatRacik.classList.remove('disabled');
};

EMR_RAJAL_btnObatRacik.onclick = function()
{
  EMR_RAJAL_statObat.value = "Racik";
  $('#EMR_RAJAL_formObatRacik').toggleClass('collapse');
  $('#EMR_RAJAL_formObatSatuan').toggleClass('collapse');

  EMR_RAJAL_btnObatSatuan.innerHTML = "<b>Obat </br> Satuan</b>";
  EMR_RAJAL_btnObatSatuan.classList.add('blue');
  EMR_RAJAL_btnObatSatuan.classList.remove('white');
  EMR_RAJAL_btnObatSatuan.classList.remove('disabled');

  EMR_RAJAL_btnObatRacik.innerHTML = "<b>Obat </br> Racik</b>";
  EMR_RAJAL_btnObatRacik.classList.remove('blue');
  EMR_RAJAL_btnObatRacik.classList.add('white');
  EMR_RAJAL_btnObatRacik.classList.add('disabled');
};

var radiologi_lain_rajal = document.getElementById('radiologi_lain_rajal');
var laboratorium_lain_rajal = document.getElementById('laboratorium_lain_rajal');

$('#reset_radio_rajal').on('click', function () {
  if(radiologi_lain_rajal.checked == true)
  {
      $('#radiologi_lain_rajal_1').toggleClass('collapse');
  }

  var $t = $(this),
      target = $t[0].href || $t.data("target") || $t.parents('.modal') || [];

  $(target)
    .find("input,textarea,select")
       .val('')
       .end()
    .find("input[type=checkbox], input[type=radio]")
       .prop("checked", "")
       .end();
});

$('#reset_laboratorium_rajal').on('click', function () {
  if(laboratorium_lain_rajal.checked == true)
  {
      $('#laboratorium_lain_rajal_1').toggleClass('collapse');
  }

  var $t = $(this),
      target = $t[0].href || $t.data("target") || $t.parents('.modal') || [];

  $(target)
    .find("input,textarea,select")
       .val('')
       .end()
    .find("input[type=checkbox], input[type=radio]")
       .prop("checked", "")
       .end();
});

radiologi_lain_rajal.onchange = function()
{
    $('#radiologi_lain_rajal_1').toggleClass('collapse');
    $('#radiologi_lain_rajal_2').val('');
};

laboratorium_lain_rajal.onchange = function()
{
    $('#laboratorium_lain_rajal_1').toggleClass('collapse');
    $('#laboratorium_lain_rajal_2').val('');
};

var rklinik_rajal = document.getElementById('rklinik_rajal');
var rlain_rajal = document.getElementById('rlain_rajal');

rklinik_rajal.onchange = function()
{
    $('#rklinik_rajal_1').toggleClass('collapse');
    $('#rklinik_rajal_2').val('');
};

rlain_rajal.onchange = function()
{
    $('#rlain_rajal_1').toggleClass('collapse');
    $('#rlain_rajal_2').val('');
};

$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#alergiobat_rajal" ).bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        //minLength: 3,
        source: function( request, response ) {
            $.ajax({
                url: base_url + "index.php/emr/getAllPasienAlergiObat",
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
          if ( term.length < 3 ) {
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

$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#EMR_RAJAL_ADokterSOAP" ).bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        //minLength: 3,
        source: function( request, response ) {
            $.ajax({
                url: base_url + "index.php/emr/getAllDeskripsi",
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

/*function enable_autocomplete_diagnosis(InputField) {
    $(InputField).autocomplete({
      minLength: 1,
      select: function( event, ui ) {
          console.log(this);
          this.value = (ui.item ? ui.item.value : '');
          $(this).closest('div').find('input.label_rajal_diagnosis').val(ui.item.label_id);
          console.log(ui.item.label_id);
          return false;
      },
      source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          $.ajax({
              url: base_url + "index.php/emr/getAllDeskripsi",
              dataType: "json",
              data: {
                  q: request.term
                  //q : extractLast(request.term)
              },
              success: function( data ) {
                  response(data);
              }
          });
      }
    });
}*/

/*$(function() {
    function split( val ) {
        return val.split( /,\s*/ /*);
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#EMR_RAJAL_ADokterSOAP" ).bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        //minLength: 1,
        source: function( request, response ) {
            // delegate back to autocomplete, but extract the last term
            $.ajax({
                url: base_url + "index.php/emr/getAllDeskripsi",
                dataType: "json",
                data: {
                    //q: request.term
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
            // prevent value inserted on focus
            return false;
        },
        select: function( event, ui ) {
            var terms = split( this.value );
            // remove the current input
            terms.pop();
            // add the selected item
            terms.push( ui.item.value );
            // add placeholder to get the comma-and-space at the end
            terms.push( "" );
            this.value = terms.join( ", " );
            return false;
        }
        select: function( event, ui ) {
            var terms = split( this.value );
            // remove the current input
            terms.pop();
            // add the selected item
            terms.push( ui.item.value );
            // add placeholder to get the comma-and-space at the end
            terms.push( "" );
            this.value = terms.join( ", " );

            var selected_label = ui.item.label_id;
            var selected_value = ui.item.value;

            var labels = $('#EMR_RAJAL_ADokterSOAP_label').val();
            $(this).closest('div').find('input.label_rajal_diagnosis').val(ui.item.label_id).clone().appendTo('#label_rajal_diagnosis_1');
            //$('.label_rajal_diagnosis').clone();
            //$('.label_rajal_diagnosis').val(selected_label);
            var values = $('#EMR_RAJAL_ADokterSOAP_value').val();

            if(labels == "")
            {
                $('#EMR_RAJAL_ADokterSOAP_label').val(selected_label);
                $('#EMR_RAJAL_ADokterSOAP_value').val(selected_value);
            }
            else
            {
                $('#EMR_RAJAL_ADokterSOAP_label').val(labels+", "+selected_label);

                $('#EMR_RAJAL_ADokterSOAP_value').val(values+", "+selected_value);
            }

            return false;
            }
    });
});*/

/*$(document).ready(function() {

    enable_autocomplete_diagnosis($('.EMR_RAJAL_ADokterSOAP'));

    var before = $('#button_diagnosis_rajal');

    $('#tambah_diagnosis_rajal').click(function() {
        var clone = $('#diagnosis_rajal').clone().find("input:text").val("").end().appendTo('#diagnosis_rajal').append(
          '<div class="row">'+
            '<div class="col-md-11">'+
              '<div class="form-group form-md-line-input form-md-floating-label">'+
                '<input type="text" id="EMR_RAJAL_ADokterSOAP[]" name="EMR_RAJAL_ADokterSOAP[]" class="form-control EMR_RAJAL_ADokterSOAP">'+
                '<input type="hidden" id="label_rajal_diagnosis[]" name="label_rajal_diagnosis[]" class="form-control label_rajal_diagnosis">'+
                '<label for="form_control_1">Masukkan data</label>'+
              '</div>'+
            '</div>'+
            '<div class="col-md-1">'+
              '<a class="btn btn-danger remove_diagnosis_rajal">'+
                '<i class="fa fa-close"></i>'+
              '</a>'+
            '</div>'+
          '</div>');
        enable_autocomplete_diagnosis($('.EMR_RAJAL_ADokterSOAP'));
        // insert duplicate before button div
        before.before(clone);

    });


    $( "body" ).on('click', '.remove_diagnosis_rajal', function(){
        $(this).closest('#diagnosis_rajal').remove();
    });
});*/

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = $('#div_buttonSatuan_rajal');

    var nomerSatuan_rajal = 2;

    $('#tambahSatuan_rajal').click(function() {
        var clone = $('#div1Satuan_rajal').clone().find("input:text").val("").end().appendTo('#div1Satuan_rajal').append(
          '<div class="col-md-4">'+
            '<div class="portlet light bordered">'+
              '<div class="portlet-title row">'+
                '<div class="caption font-red-sunglo col-md-8 col-sm-8 col-xs-8">'+
                  '<i class="fa fa-gift font-red-sunglo"></i>'+
                  '<span class="caption-subject bold uppercase">Obat Ke - '+ nomerSatuan_rajal +' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>'+
                '</div>'+
                '<div class="col-md-3 col-sm-3 col-xs-3">'+
                  '<a class="btn btn-danger removeSatuan_rajal">'+
                    '<i class="fa fa-close"> Hapus</i>'+
                  '</a>'+
                '</div>'+
                '<div class="tools col-md-1 col-sm-1 col-xs-1"> &nbsp;&nbsp;'+
                  '<a href="javascript:;" class="collapse" data-original-title="" title=""> </a>'+
                '</div>'+
              '</div>'+
              '<div class="portlet-body">'+
                '<div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-0.5em">'+
                  '<div class="row mt-repeater-row">'+
                    '<div class="col-md-8">'+
                      '<div class="form-group">'+
                          '<label class="control-label" style="font-size:14px">Nama Obat</label>'+
                          '<input type="text" name="obatsatuanRajal[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>'+
                          '<input type="hidden" name="idobatsatuan_rajal[]" class="form-control project"/>'+
                      '</div>'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<div class="form-group">'+
                        '<label class="control-label" style="font-size:14px">Jumlah Obat</label>'+
                        '<input type="text" id="jumlahsatuan_rajal" name="jumlahsatuan_rajal[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                  '<div class="row mt-repeater-row">'+
                    '<div class="col-md-4">'+
                      '<label class="control-label" style="font-size:14px">Aturan Pakai</label>'+
                      '<input type="text" id="aturanPakai_rajal_1" name="aturanPakai_rajal_1[]" placeholder="Aturan Pakai" class="form-control"/>'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;</label>'+
                      '<input type="text" id="aturanPakai_rajal_2" name="aturanPakai_rajal_2[]" placeholder="Aturan Pakai" class="form-control"/>'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<label class="control-label" style="font-size:14px">Ket.</label>'+
                      '<input type="text" id="keterangan_rajal" name="keterangan_rajal[]" placeholder="Ket" class="form-control" />'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        // insert duplicate before button div
        before.before(clone);

        nomerSatuan_rajal++;
    });


    $( "body" ).on('click', '.removeSatuan_rajal', function(){
        nomerSatuan_rajal--;
        $(this).closest('#div1Satuan_rajal').remove();
    });
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = null;
    var value = null;

    //var nomer2 = 1;

     $(document).on('click', '.tambahRacikBahan_rajal-click', function () {
        value = $(this).data('todo').number;

        var before = $('#div_buttonracikBahan_rajal'+value);
        var clone = $('#divracikBahan_rajal'+value).clone(true).find("input:text").val("").end().appendTo('#divracikBahan_rajal'+value).append(
          '<div class="form-group">'+
                  '<div data-repeater-item class="mt-repeater-item">'+
                      '<div class="row mt-repeater-row">'+
                          '<div class="col-md-8">'+
                              '<input type="text" name="obatsatuanRacik_rajal[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>'+
                              '<input type="hidden" name="idobatsatuanRacik_rajal[]" value="" class="form-control project_racik"/>'+
                              '<input type="hidden" value="RACIK_000'+value+'" id="idRacik_rajal" name="idRacik_rajal[]" class="form-control" />'+
                          '</div>'+
                          '<div class="col-md-4">'+
                              '<div class="mt-repeater-cell">'+
                                  '<input type="text" placeholder="Jumlah" name="jumlahRacik_rajal[]" id="jumlahRacik_rajal" class="form-control mt-repeater-input-inline" onkeypress="return hanyaAngka(event)"/>'+
                                  '<a class="btn btn-danger removeRacikBahan_rajal mt-repeater-del-right mt-repeater-btn-inline">'+
                                      '<i class="fa fa-close"></i>'+
                                  '</a>'+
                              '</div>'+
                          '</div>'+
                      '</div>'+
                  '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        before.before(clone);
    });

    $( "body" ).on('click', '.removeRacikBahan_rajal', function(){
        $(this).closest('#divracikBahan_rajal'+value).remove();
    });
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = $('#div_buttonracikobat_rajal');

    var nomer2 = 2;
    var todo = '{"number":"'+nomer2+'"}';

    $('#tambahracikobat_rajal').click(function() {
        var clone = $('#divracikobat_rajal').clone(true).find("input:text").val("").end().appendTo('#divracikobat_rajal').append(
          '<div class="col-md-4">'+
            '<div class="portlet light">'+
              '<div class="portlet-title">'+
                '<div class="caption">'+
                  '<i class="icon-puzzle font-grey-gallery"></i><span class="caption-subject bold font-grey-gallery uppercase"> Obat Racikan ke-'+nomer2+' </span>'+
                '</div>'+
                '<div class="tools">'+
                  '<a href="" class="collapse" data-original-title="" title=""> </a>'+
                '</div>'+
              '</div>'+
              '<div class="portlet-body">'+
                '<div class="form-group mt-repeater">'+
                  '<div class="row">'+
                    '<div class="col-md-12">'+
                      '<div data-repeater-item class="mt-repeater-item">'+
                        '<div class="row mt-repeater-row">'+
                          '<div class="col-md-8">'+
                            '<label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>'+
                            '<input type="text" name="obatsatuanRacik_rajal[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>'+
                            '<input type="hidden" name="idobatsatuanRacik_rajal[]" value="" class="form-control project_racik"/>'+
                            '<input type="hidden" value="RACIK_000'+nomer2+'" id="idRacik_rajal" name="idRacik_rajal[]" class="form-control" />'+
                          '</div>'+
                          '<div class="col-md-4">'+
                            '<label class="control-label" style="font-size:14px">Jumlah</label>'+
                            '<input type="text" id="jumlahRacik_rajal" name="jumlahRacik_rajal[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                      '<div id="divracikBahan_rajal'+nomer2+'"></div>'+
                      '<div id="div_buttonracikBahan_rajal'+nomer2+'">'+
                        '<a class="btn blue tambahRacikBahan_rajal-click col-md-12" name="tambahRacikBahan_rajal" value="Tambah Data"><i class="fa fa-plus"></i> Tambah Bahan</a>'+
                      '</div>'+
                    '</div>'+
                    '<div class="col-md-12">'+
                      '<label class="control-label" style="font-size:14px">Detail Obat</label>'+
                      '<div class="row">'+
                        '<div class="col-md-4">'+
                          '<input type="text" id="jumlahRacik_rajal_2" name="jumlahRacik_rajal_2[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                        '</div>'+
                        '<div class="col-md-8">'+
                          '<input type="text" id="aturanpakaiRacik_rajal" name="aturanpakaiRacik_rajal[]" placeholder="Aturan Pakai" class="form-control" />'+
                        '</div>'+
                      '</div>'+
                      '<br>'+
                      '<div class="row">'+
                        '<div class="col-md-4">'+
                          '<input type="text" id="aturanpakaiRacik_rajal_2" name="aturanpakaiRacik_rajal_2[]" placeholder="Aturan Pakai" class="form-control" />'+
                        '</div>'+
                        '<div class="col-md-8">'+
                          '<input type="text" id="keteranganRacik_rajal" name="keteranganRacik_rajal[]" placeholder="Keterangan" class="form-control"/>'+
                        '</div>'+
                      '</div>'+
                      '<div class="col-md-8">'+
                        '<input type="hidden" value="RACIK_000'+nomer2+'" id="idRacik_rajal_2" name="idRacik_rajal_2[]" class="form-control" />'+
                      '</div>'+
                    '</div>'+
                  '</div></br>'+
                    '<a class="btn btn-danger removeracikobat_rajal col-md-12">'+
                      '<i class="fa fa-close"> Hapus Obat Racikan</i>'+
                    '</a>'+
                    '</div>'+
              '</div>'+
            '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        before.before(clone);
        clone.find(".tambahRacikBahan_rajal-click").attr("data-todo", '{"number":"'+nomer2+'"}');
        nomer2++;
    });

    $( "body" ).on('click', '.removeracikobat_rajal', function(){
        nomer2--;
      $(this).closest('#divracikobat_rajal').remove();
    });
});

$('#btnsimpanDokterEMR_Rajal').click(function() {

    var radiologi_checkbox_rajal_simpan = []
    $("input[name='radiologi_checkbox_rajal[]']:checked").each(function ()
    {
        radiologi_checkbox_rajal_simpan.push($(this).val());
    });

    var radiologi_lain_rajal_simpan = null;
    $('input[name="radiologi_lain_rajal"]:checked').each(function() {
      radiologi_lain_rajal_simpan = $('#radiologi_lain_rajal').val();
    });

    var laboratorium_checkbox_rajal_simpan = []
    $("input[name='laboratorium_checkbox_rajal[]']:checked").each(function ()
    {
        laboratorium_checkbox_rajal_simpan.push($(this).val());
    });

    var laboratorium_lain_rajal_simpan = null;
    $('input[name="laboratorium_lain_rajal"]:checked').each(function() {
      laboratorium_lain_rajal_simpan = $('#laboratorium_lain_rajal').val()
    });

    var rahligizi_rajal_simpan = null;
    $('input[name="rahligizi_rajal"]:checked').each(function() {
      rahligizi_rajal_simpan = $('#rahligizi_rajal').val()
    });

    var rrehabilitasi_rajal_simpan = null;
    $('input[name="rrehabilitasi_rajal"]:checked').each(function() {
      rrehabilitasi_rajal_simpan = $('#rrehabilitasi_rajal').val()
    });

    var rklinik_rajal_simpan = null;
    $('input[name="rklinik_rajal"]:checked').each(function() {
      rklinik_rajal_simpan = $('#rklinik_rajal').val()
    });

    var rlain_rajal_simpan = null;
    $('input[name="rlain_rajal"]:checked').each(function() {
      rlain_rajal_simpan = $('#rlain_rajal').val()
    });

    var obatsatuanRajal_simpan = [];
    $("input[name='obatsatuanRajal[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            obatsatuanRajal_simpan.push(value);
        }
        //obatsatuanRajal_simpan.push($(this).val());
    });

    var idobatsatuan_rajal_simpan = []
    $("input[name='idobatsatuan_rajal[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            idobatsatuan_rajal_simpan.push(value);
        }
        //idobatsatuan_rajal_simpan.push($(this).val());
    });

    var jumlahsatuan_rajal_simpan = []
    $("input[name='jumlahsatuan_rajal[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            jumlahsatuan_rajal_simpan.push(value);
        }
        //jumlahsatuan_rajal_simpan.push($(this).val());
    });

    var aturanPakai_rajal_1_simpan = []
    $("input[name='aturanPakai_rajal_1[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            aturanPakai_rajal_1_simpan.push(value);
        }
        //aturanPakai_rajal_1_simpan.push($(this).val());
    });

    var aturanPakai_rajal_2_simpan = []
    $("input[name='aturanPakai_rajal_2[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            aturanPakai_rajal_2_simpan.push(value);
        }
        //aturanPakai_rajal_2_simpan.push($(this).val());
    });

    var keterangan_rajal_simpan = []
    $("input[name='keterangan_rajal[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            keterangan_rajal_simpan.push(value);
        }
        //keterangan_rajal_simpan.push($(this).val());
    });

    var obatsatuanRacik_rajal_simpan = []
    $("input[name='obatsatuanRacik_rajal[]']").each(function ()
    {
      var value = $(this).val();
      if (value)
      {
          obatsatuanRacik_rajal_simpan.push(value);
      }
        //obatsatuanRacik_rajal_simpan.push($(this).val());
    });

    var idobatsatuanRacik_rajal_simpan = []
    $("input[name='idobatsatuanRacik_rajal[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            idobatsatuanRacik_rajal_simpan.push(value);
        }
        //idobatsatuanRacik_rajal_simpan.push($(this).val());
    });

    var idRacik_rajal_simpan = []
    $("input[name='idRacik_rajal[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            idRacik_rajal_simpan.push(value);
        }
        //idRacik_rajal_simpan.push($(this).val());
    });

    var jumlahRacik_rajal_simpan = []
    $("input[name='jumlahRacik_rajal[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            jumlahRacik_rajal_simpan.push(value);
        }
        //jumlahRacik_rajal_simpan.push($(this).val());
    });

    var jumlahRacik_rajal_2_simpan = []
    $("input[name='jumlahRacik_rajal_2[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            jumlahRacik_rajal_2_simpan.push(value);
        }
        //jumlahRacik_rajal_2_simpan.push($(this).val());
    });

    var aturanpakaiRacik_rajal_simpan = []
    $("input[name='aturanpakaiRacik_rajal[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            aturanpakaiRacik_rajal_simpan.push(value);
        }
        //aturanpakaiRacik_rajal_simpan.push($(this).val());
    });

    var aturanpakaiRacik_rajal_2_simpan = []
    $("input[name='aturanpakaiRacik_rajal_2[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            aturanpakaiRacik_rajal_2_simpan.push(value);
        }
        //aturanpakaiRacik_rajal_2_simpan.push($(this).val());
    });

    var keteranganRacik_rajal_simpan = []
    $("input[name='keteranganRacik_rajal[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            keteranganRacik_rajal_simpan.push(value);
        }
        //keteranganRacik_rajal_simpan.push($(this).val());
    });

    var idRacik_rajal_2_simpan = []
    $("input[name='idRacik_rajal_2[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            idRacik_rajal_2_simpan.push(value);
        }
        //idRacik_rajal_2_simpan.push($(this).val());
    });

    /*var EMRRAJALADokterSOAP = []
    var EMRRAJALADokterSOAP_2 = []
    $("input[name='EMR_RAJAL_ADokterSOAP[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            EMRRAJALADokterSOAP.push(value);
        }
        //idRacik_rajal_2_simpan.push($(this).val());
    });

    var label_rajal_diagnosis_simpan = []
    $("input[name='label_rajal_diagnosis[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            label_rajal_diagnosis_simpan.push(value);
        }
        //idRacik_rajal_2_simpan.push($(this).val());
    });*/

    var suratsakit_rajal_simpan = null;
    $('input[name="suratsakit_rajal"]:checked').each(function() {
      suratsakit_rajal_simpan = $('#suratsakit_rajal').val()
    });

    var form_data_rajal = {
      idpemeriksaan:$('#idpemeriksaan').val(),
      EMRRAJALNoreg:$('#EMR_RAJAL_Noreg').val(),
      EMRRAJALNorm:$('#EMR_RAJAL_Norm').val(),
      kodeunitRajal: $('#kodeunit_rajal').val(),
      userDokterRajal: $('#userDokterRajal').val(),
      EMR_RAJAL_statver: $('#EMR_RAJAL_statver').val(),
      EMR_RAJAL_userPerPerawat: $('#EMR_RAJAL_userPerPerawat').val(),
      EMRRAJALTDPerawat:$('#EMR_RAJAL_TDPerawat').val(),
      EMRRAJALTPerawat:$('#EMR_RAJAL_TPerawat').val(),
      EMRRAJALNPerawat:$('#EMR_RAJAL_NPerawat').val(),
      EMRRAJALRPerawat:$('#EMR_RAJAL_RPerawat').val(),
      EMRRAJALCPerawat:$('#EMR_RAJAL_CPerawat').val(),
      EMRRAJALNskor:$('#EMR_RAJAL_Nskor').val(),
      EMRRAJALJskor:$('#EMR_RAJAL_Jskor').val(),
      EMRRAJALSDokterSOAP:$('#EMR_RAJAL_SDokterSOAP').val(),
      EMRRAJALODokterSOAP:$('#EMR_RAJAL_ODokterSOAP').val(),
      EMRRAJALADokterSOAP:$('#EMR_RAJAL_ADokterSOAP').val(),
      //EMRRAJALADokterSOAP:EMRRAJALADokterSOAP,
      //label_rajal_diagnosis_simpan:label_rajal_diagnosis_simpan,
      EMRRAJALPDokterSOAP:$('#EMR_RAJAL_PDokterSOAP').val(),
      EMRRAJALpassDokDokter:$('#EMR_RAJAL_passDokDokter').val(),
      radiologi_checkbox_rajal_simpan:radiologi_checkbox_rajal_simpan,
      radiologi_lain_rajal_simpan:radiologi_lain_rajal_simpan,
      radiologi_lain_rajal_2:$('#radiologi_lain_rajal_2').val(),
      laboratorium_checkbox_rajal_simpan:laboratorium_checkbox_rajal_simpan,
      laboratorium_lain_rajal_simpan:laboratorium_lain_rajal_simpan,
      laboratorium_lain_rajal_2:$('#laboratorium_lain_rajal_2').val(),
      alergiobat_rajal_simpan:$('#alergiobat_rajal').val(),
      rahligizi_rajal_simpan:rahligizi_rajal_simpan,
      rrehabilitasi_rajal_simpan:rrehabilitasi_rajal_simpan,
      rklinik_rajal_simpan:rklinik_rajal_simpan,
      rklinik_rajal_2:$('#rklinik_rajal_2').val(),
      rlain_rajal_simpan:rlain_rajal_simpan,
      rlain_rajal_2:$('#rlain_rajal_2').val(),
      obatsatuanRajal_simpan:obatsatuanRajal_simpan,
      idobatsatuan_rajal_simpan:idobatsatuan_rajal_simpan,
      jumlahsatuan_rajal_simpan:jumlahsatuan_rajal_simpan,
      aturanPakai_rajal_1_simpan:aturanPakai_rajal_1_simpan,
      aturanPakai_rajal_2_simpan:aturanPakai_rajal_2_simpan,
      keterangan_rajal_simpan:keterangan_rajal_simpan,
      obatsatuanRacik_rajal_simpan:obatsatuanRacik_rajal_simpan,
      idobatsatuanRacik_rajal_simpan:idobatsatuanRacik_rajal_simpan,
      idRacik_rajal_simpan:idRacik_rajal_simpan,
      jumlahRacik_rajal_simpan:jumlahRacik_rajal_simpan,
      jumlahRacik_rajal_2_simpan:jumlahRacik_rajal_2_simpan,
      aturanpakaiRacik_rajal_simpan:aturanpakaiRacik_rajal_simpan,
      aturanpakaiRacik_rajal_2_simpan:aturanpakaiRacik_rajal_2_simpan,
      keteranganRacik_rajal_simpan:keteranganRacik_rajal_simpan,
      idRacik_rajal_2_simpan:idRacik_rajal_2_simpan,
      suratsakit_rajal_simpan:suratsakit_rajal_simpan
    };

    $.ajax({
        url: base_url + "emr/simpan_semua_rajal",
        type: 'POST',
        data: form_data_rajal,
        success: function(msg) {
          var counter = 0;
          if(EMR_RAJAL_SDokterSOAP.value != "")
          {
            counter = counter + 1;
          }
          if(EMR_RAJAL_ODokterSOAP.value != "")
          {
            counter = counter + 1;
          }
          if(EMR_RAJAL_ADokterSOAP.value != "")
          {
            counter = counter + 1;
          }
          if(counter < 3)
          {
            $("#modalAlertCounter_dokter").modal('show');
          }
          else
          {
            if (msg == 'YES')
            {
              $("#EMRmodalRajal_Sukses").modal('show');
              //$('#alert-msg-versimpan').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#EMRmodalRajal_Sukses").fadeTo(5000, 5000).slideUp(1000, function(){
                   $("#EMRmodalRajal_Sukses").modal('hide');
                   window.location.href = base_url + "dashboard";
              });
              //$('#alert-msg-DokterEMR').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
            }
            else if(msg == 'NO_PASS_DOKTER')
            {
              $('#alert-msg-DokterEMR').html('<div class="alert alert-danger text-center">Password Dokter Harus Diisi Dahulu!</div>');
            }
            else if(msg == 'PASS_DOKTER_SALAH')
            {
              $('#alert-msg-DokterEMR').html('<div class="alert alert-danger text-center">Password Dokter Salah!</div>');
            }
            else if(msg == 'NO_OBAT')
            {
              $('#alert-msg-DokterEMR').html('<div class="alert alert-danger text-center">Data Obat Belum Ada!</div>');
            }
            else
            {
              $('#alert-msg-DokterEMR').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
          }
        }
    });
    return false;
});
