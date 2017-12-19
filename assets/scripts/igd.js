function hapuswarna()
{
  if(document.getElementById('EMR_pr_IGD_statTriase2').value == 'white')
  {
    document.getElementById('EMR_pr_IGD_btnTriaseHasilQuestion').classList.remove('white');
  }
  if(document.getElementById('EMR_pr_IGD_statTriase2').value == 'green')
  {
    document.getElementById('EMR_pr_IGD_btnTriaseHasilQuestion').classList.remove('green-jungle');
  }
  if(document.getElementById('EMR_pr_IGD_statTriase2').value == 'yellow')
  {
    document.getElementById('EMR_pr_IGD_btnTriaseHasilQuestion').classList.remove('yellow-crusta');
  }
  if(document.getElementById('EMR_pr_IGD_statTriase2').value == 'red')
  {
    document.getElementById('EMR_pr_IGD_btnTriaseHasilQuestion').classList.remove('red');
  }
  if(document.getElementById('EMR_pr_IGD_statTriase2').value == 'dark')
  {
    document.getElementById('EMR_pr_IGD_btnTriaseHasilQuestion').classList.remove('dark');
  }
}
$('#EMR_pr_IGD_btnTriaseHijau').click(function() {
  document.getElementById('EMR_pr_IGD_btnTriaseHijau').disable = 'true';
  hapuswarna();
  $('#EMR_pr_IGD_statTriase2').val('green');
  document.getElementById('EMR_pr_IGD_btnTriaseHasilQuestion').classList.add('green-jungle');
  $('#EMR_pr_IGD_HasilTriase').html('Hijau');
});
$('#EMR_pr_IGD_btnTriaseKuning').click(function() {
  document.getElementById('EMR_pr_IGD_btnTriaseKuning').disable = 'true';
  hapuswarna();
  $('#EMR_pr_IGD_statTriase2').val('yellow');
  document.getElementById('EMR_pr_IGD_btnTriaseHasilQuestion').classList.add('yellow-crusta');
  $('#EMR_pr_IGD_HasilTriase').html('Kuning');
});
$('#EMR_pr_IGD_btnTriaseMerah').click(function() {
  document.getElementById('EMR_pr_IGD_btnTriaseMerah').disable = 'true';
  hapuswarna();
  $('#EMR_pr_IGD_statTriase2').val('red');
  document.getElementById('EMR_pr_IGD_btnTriaseHasilQuestion').classList.add('red');
  $('#EMR_pr_IGD_HasilTriase').html('Merah');
});
$('#EMR_pr_IGD_btnTriaseHitam').click(function() {
  document.getElementById('EMR_pr_IGD_btnTriaseHitam').disable = 'true';
  hapuswarna();
  $('#EMR_pr_IGD_statTriase2').val('dark');
  document.getElementById('EMR_pr_IGD_btnTriaseHasilQuestion').classList.add('dark');
  $('#EMR_pr_IGD_HasilTriase').html('Hitam');
});

$('#EMR_pr_IGD_btnSimpanTriase').click(function() {
  simpantriase();
});
function simpantriase(){
  var form_data = {
    IGD_idpemeriksaan : $('#EMR_pr_IGD_idper').val(),
    IGD_Circulation : "",
    IGD_Airway : "",
    IGD_Breathing : "",
    IGD_Disability : "",
    IGD_hasilTriase : $('#EMR_pr_IGD_HasilTriase').html()
  };
  $.ajax({
    url: base_url + "igd/btnsimpanTriase",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if(msg == 'TERUJI')
      {
        $('#modalIGDtriase').modal('hide');
        $('#modalLompatMenuIGD').modal('show');
      }
    }
  });
  return false;
};


//==============================================================================
//================================ START MENU 1 ================================

var _beratbadan_pr_P1 = document.getElementById('EMR_pr_IGD_P1_beratbadan');
var _tinggibadan_pr_P1 = document.getElementById('EMR_pr_IGD_P1_tinggibadan');
var _Nilai_BMI_pr_P1 = document.getElementById('EMR_pr_IGD_P1_Nilai_BMI');
var _Kategori_BMI_pr_P1 = document.getElementById('EMR_pr_IGD_P1_Kategori_BMI');
var pupil = '';
$('#EMR_pr_IGD_P1_pupilKanan').keyup(function() {
  if(document.getElementById('EMR_pr_IGD_P1_pupilKanan').value == document.getElementById('EMR_pr_IGD_P1_pupilKiri').value)
  {
    $('#EMR_pr_IGD_P1_pupilstat').html('Isokor');
    pupil = 'Isokor';
  }
  else
  {
    $('#EMR_pr_IGD_P1_pupilstat').html('Anisokor');
    pupil = 'Anisokor';
  }
});
$('#EMR_pr_IGD_P1_pupilKiri').keyup(function() {
  if(document.getElementById('EMR_pr_IGD_P1_pupilKanan').value == document.getElementById('EMR_pr_IGD_P1_pupilKiri').value)
  {
    $('#EMR_pr_IGD_P1_pupilstat').html('Isokor');
    pupil = 'Isokor';
  }
  else
  {
    $('#EMR_pr_IGD_P1_pupilstat').html('Anisokor');
    pupil = 'Anisokor';
  }
});
$('#EMR_pr_IGD_P1_btnCahayaKanan').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnCahayaKanan').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnCahayaKanan').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnCahayaKanan').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnCahayaKanan').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnCahayaKanan').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnCahayaKanan').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnCahayaKanan').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnCahayaKanan').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnCahayaKanan').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnCahayaKiri').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnCahayaKiri').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnCahayaKiri').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnCahayaKiri').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnCahayaKiri').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnCahayaKiri').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnCahayaKiri').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnCahayaKiri').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnCahayaKiri').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnCahayaKiri').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAH1').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAH1').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAH1').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAH1').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAH1').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAH1').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAH1').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAH1').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAH1').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAH1').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAH2').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAH2').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAH2').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAH2').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAH2').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAH2').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAH2').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAH2').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAH2').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAH2').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAH3').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAH3').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAH3').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAH3').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAH3').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAH3').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAH3').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAH3').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAH3').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAH3').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAH4').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAH4').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAH4').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAH4').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAH4').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAH4').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAH4').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAH4').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAH4').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAH4').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAM1').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAM1').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAM1').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAM1').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAM1').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAM1').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAM1').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAM1').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAM1').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAM1').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAM2').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAM2').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAM2').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAM2').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAM2').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAM2').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAM2').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAM2').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAM2').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAM2').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAM3').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAM3').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAM3').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAM3').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAM3').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAM3').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAM3').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAM3').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAM3').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAM3').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAM4').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAM4').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAM4').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAM4').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAM4').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAM4').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAM4').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAM4').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAM4').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAM4').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAK1').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAK1').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAK1').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAK1').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAK1').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAK1').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAK1').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAK1').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAK1').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAK1').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAK2').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAK2').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAK2').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAK2').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAK2').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAK2').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAK2').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAK2').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAK2').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAK2').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAK3').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAK3').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAK3').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAK3').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAK3').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAK3').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAK3').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAK3').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAK3').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAK3').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_btnAK4').click(function() {
  if(document.getElementById('EMR_pr_IGD_P1_btnAK4').value == '+')
  {
    $('#EMR_pr_IGD_P1_btnAK4').html('<b> - </b>');
    $('#EMR_pr_IGD_P1_btnAK4').val('-');
    document.getElementById('EMR_pr_IGD_P1_btnAK4').classList.remove('green');
    document.getElementById('EMR_pr_IGD_P1_btnAK4').classList.add('yellow');
  }
  else
  {
    $('#EMR_pr_IGD_P1_btnAK4').html('<b> + </b>');
    $('#EMR_pr_IGD_P1_btnAK4').val('+');
    document.getElementById('EMR_pr_IGD_P1_btnAK4').classList.remove('yellow');
    document.getElementById('EMR_pr_IGD_P1_btnAK4').classList.add('green');
  }
});
$('#EMR_pr_IGD_P1_beratbadan').keyup(function() {
  var tinggibd = _tinggibadan_pr_P1.value/100;
  if(_beratbadan_pr_P1.value != '' && _tinggibadan_pr_P1.value != '')
  {
    var Nilai_BMI2 = _beratbadan_pr_P1.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    _Nilai_BMI_pr_P1.innerHTML = Nilai_BMI2.toFixed(2) + " " + satuanBMI;
    $('#EMR_pr_IGD_P1_Nilai_BMItxtss').val(Nilai_BMI2.toFixed(2) + " Kg/m");

    if(Nilai_BMI2 < 18.5)
    {
      _Kategori_BMI_pr_P1.innerHTML = "Underweight";
      $('#EMR_pr_IGD_P1_Kategori_BMItxtss').val("Underweight");
    }
    else if(Nilai_BMI2 < 23)
    {
      _Kategori_BMI_pr_P1.innerHTML = "Normo Weight";
      $('#EMR_pr_IGD_P1_Kategori_BMItxtss').val("Normo Weight");
    }
    else if(Nilai_BMI2 < 27)
    {
      _Kategori_BMI_pr_P1.innerHTML = "Over Weight";
      $('#EMR_pr_IGD_P1_Kategori_BMItxtss').val("Over Weight");
    }
    else if(Nilai_BMI2 >= 27)
    {
      _Kategori_BMI_pr_P1.innerHTML = "Obese";
      $('#EMR_pr_IGD_P1_Kategori_BMItxtss').val("Obese");
    }
  }
});
$('#EMR_pr_IGD_P1_tinggibadan').keyup(function() {
  var tinggibd = _tinggibadan_pr_P1.value/100;
  if(_beratbadan_pr_P1.value != '' && _tinggibadan_pr_P1.value != '')
  {
    var Nilai_BMI2 = _beratbadan_pr_P1.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    _Nilai_BMI_pr_P1.innerHTML = Nilai_BMI2.toFixed(2) + " " + satuanBMI;
    $('#EMR_pr_IGD_P1_Nilai_BMItxtss').val(Nilai_BMI2.toFixed(2) + " Kg/m");

    if(Nilai_BMI2 < 18.5)
    {
      _Kategori_BMI_pr_P1.innerHTML = "Underweight";
      $('#EMR_pr_IGD_P1_Kategori_BMItxtss').val("Underweight");
    }
    else if(Nilai_BMI2 < 23)
    {
      _Kategori_BMI_pr_P1.innerHTML = "Normo Weight";
      $('#EMR_pr_IGD_P1_Kategori_BMItxtss').val("Normo Weight");
    }
    else if(Nilai_BMI2 < 27)
    {
      _Kategori_BMI_pr_P1.innerHTML = "Over Weight";
      $('#EMR_pr_IGD_P1_Kategori_BMItxtss').val("Over Weight");
    }
    else if(Nilai_BMI2 >= 27)
    {
      _Kategori_BMI_pr_P1.innerHTML = "Obese";
      $('#EMR_pr_IGD_P1_Kategori_BMItxtss').val("Obese");
    }
  }
});
$('#EMR_pr_IGD_P1_GCSe').keyup(function() {
  if(document.getElementById('EMR_pr_IGD_P1_GCSe').value > 4)
  {
    alert("Nilai maksimal adalah 4, sistem akan memberikan nilai 4");
    document.getElementById('EMR_pr_IGD_P1_GCSe').value = 4;
  }
})
$('#EMR_pr_IGD_P1_GCSv').keyup(function() {
  if(document.getElementById('EMR_pr_IGD_P1_GCSv').value > 5)
  {
    alert("Nilai maksimal adalah 5, sistem akan memberikan nilai 5");
    document.getElementById('EMR_pr_IGD_P1_GCSv').value = 5;
  }
})
$('#EMR_pr_IGD_P1_GCSm').keyup(function() {
  if(document.getElementById('EMR_pr_IGD_P1_GCSm').value > 6)
  {
    alert("Nilai maksimal adalah 6, sistem akan memberikan nilai 6");
    document.getElementById('EMR_pr_IGD_P1_GCSm').value = 6;
  }
})
$('#EMR_pr_IGD_P1_btnmenu').click(function() {
  document.getElementById('EMR_pr_IGD_P1_btnmenu').disabled = true;
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_IGD_statverHal').value = 'P1';
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});
$('#EMR_pr_IGD_P1_btnsimpan').click(function() {
  var form_data = {
    EMR_pr_IGD_P1_Kesadaran : $('#EMR_pr_IGD_P1_Kesadaran').val(),
    EMR_pr_IGD_P1_SpO2 : $('#EMR_pr_IGD_P1_SpO2').val(),
    EMR_pr_IGD_P1_GCSe : $('#EMR_pr_IGD_P1_GCSe').val(),
    EMR_pr_IGD_P1_GCSv : $('#EMR_pr_IGD_P1_GCSv').val(),
    EMR_pr_IGD_P1_GCSm : $('#EMR_pr_IGD_P1_GCSm').val(),
    EMR_pr_IGD_P1_Mata : '<table border="0">'+
                        '<tr><td></td><td>Mata Kiri</td><td>Mata Kanan</td></tr>'+
                        '<tr><td>Pupil '+ pupil +' </td><td>'+ $('#EMR_pr_IGD_P1_pupilKiri').val() +' mm</td><td>'+ $('#EMR_pr_IGD_P1_pupilKanan').val() +' mm</td></tr>'+
                        '<tr><td>Cahaya </td><td>'+ $('#EMR_pr_IGD_P1_btnCahayaKiri').val() +'</td><td>'+ $('#EMR_pr_IGD_P1_btnCahayaKanan').val() +'</td></tr>'+
                        '</table>',
    EMR_pr_IGD_P1_AH : '<table border="1">'+
                        '<tr><td>'+ $('#EMR_pr_IGD_P1_btnAH1').val() +'</td><td>'+ $('#EMR_pr_IGD_P1_btnAH2').val() +'</td></tr>'+
                        '<tr><td>'+ $('#EMR_pr_IGD_P1_btnAH3').val() +'</td><td>'+ $('#EMR_pr_IGD_P1_btnAH4').val() +'</td></tr>'+
                        '</table>',
    EMR_pr_IGD_P1_AM : '<table border="1">'+
                        '<tr><td>'+ $('#EMR_pr_IGD_P1_btnAM1').val() +'</td><td>'+ $('#EMR_pr_IGD_P1_btnAM2').val() +'</td></tr>'+
                        '<tr><td>'+ $('#EMR_pr_IGD_P1_btnAM3').val() +'</td><td>'+ $('#EMR_pr_IGD_P1_btnAM4').val() +'</td></tr>'+
                        '</table>',
    EMR_pr_IGD_P1_AK : '<table border="1">'+
                        '<tr><td>'+ $('#EMR_pr_IGD_P1_btnAK1').val() +'</td><td>'+ $('#EMR_pr_IGD_P1_btnAK2').val() +'</td></tr>'+
                        '<tr><td>'+ $('#EMR_pr_IGD_P1_btnAK3').val() +'</td><td>'+ $('#EMR_pr_IGD_P1_btnAK4').val() +'</td></tr>'+
                        '</table>',
    EMR_pr_IGD_P1_TDSistolik : $('#EMR_pr_IGD_P1_TDSistolik').val(),
    EMR_pr_IGD_P1_TDDiastolik : $('#EMR_pr_IGD_P1_TDDiastolik').val(),
    EMR_pr_IGD_P1_suhutubuh : $('#EMR_pr_IGD_P1_suhutubuh').val(),
    EMR_pr_IGD_P1_nadi : $('#EMR_pr_IGD_P1_nadi').val(),
    EMR_pr_IGD_P1_NadiCH : $("input[name ='EMR_pr_IGD_P1_NadiCH']:checked").val(),
    EMR_pr_IGD_P1_respiratory : $('#EMR_pr_IGD_P1_respiratory').val(),
    EMR_pr_IGD_P1_RespiratoryCH : $("input[name ='EMR_pr_IGD_P1_RespiratoryCH']:checked").val(),
    EMR_pr_IGD_P1_lingkarkepala : $('#EMR_pr_IGD_P1_lingkarkepala').val(),
    IGD_idpemeriksaan : $('#EMR_pr_IGD_idper').val()
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_pr_P1",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if(msg == 'TERUJI')
      {
        $('#modalLompatMenuIGD').modal('show');
      }
    }
  });
  return false;
});

//================================= END MENU 1 =================================
//==============================================================================
//================================ START MENU 2 ================================

var hal = 1;
var hal2 = 0;
var halaman1 = 'Ya';
var halaman2 = 'Ya';
var halaman3 = 'Ya';
var halaman4 = 'Ya';
var halaman5 = 'Ya';
var halaman6 = 'Ya';

$('#EMR_pr_IGD_P2_btnmenu').click(function() {
  document.getElementById('EMR_pr_IGD_P2_btnmenu').disabled = true;
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_IGD_statverHal').value = 'P2';
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});
$('#EMR_pr_IGD_HalamanNext').click(function() {
  hal++;
  hal2++;

  if(hal == 2)
  {
    if(halaman2 == 'Tidak')
    {
      EMR_pr_IGD_HalamanNext.disabled = true;
      EMR_pr_IGD_HalamanNext.classList.add('white');
      EMR_pr_IGD_HalamanNext.classList.remove('green');
    }
  }
  else if(hal == 3)
  {
    if(halaman3 == 'Tidak')
    {
      EMR_pr_IGD_HalamanNext.disabled = true;
      EMR_pr_IGD_HalamanNext.classList.add('white');
      EMR_pr_IGD_HalamanNext.classList.remove('green');
    }
  }
  else if(hal == 4)
  {
    if(halaman4 == 'Tidak')
    {
      EMR_pr_IGD_HalamanNext.disabled = true;
      EMR_pr_IGD_HalamanNext.classList.add('white');
      EMR_pr_IGD_HalamanNext.classList.remove('green');
    }
  }
  else if(hal == 5)
  {
      EMR_pr_IGD_HalamanNext.disabled = true;
      EMR_pr_IGD_HalamanNext.classList.add('white');
      EMR_pr_IGD_HalamanNext.classList.remove('green');
  }

  $('#EMR_pr_IGD_Halaman'+ hal +'').toggleClass('collapse');
  $('#EMR_pr_IGD_Halaman'+ hal2 +'').toggleClass('collapse');

  $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').html(hal2);
  $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').toggleClass('white');
  $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').toggleClass('green');
  $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').toggleClass('col-md-8');
  $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').toggleClass('col-md-1');
  if(hal == 2)
  {
    $('#EMR_pr_IGD_btnHalaman'+ hal +'').html('2. Cara Masuk');
  }
  else if(hal == 3)
  {
    $('#EMR_pr_IGD_btnHalaman'+ hal +'').html('3. Asal Masuk');
  }
  else if(hal == 4)
  {
    $('#EMR_pr_IGD_btnHalaman'+ hal +'').html('4. Riwayat Penyakit');
  }
  else if(hal == 5)
  {
    $('#EMR_pr_IGD_btnHalaman'+ hal +'').html('5. Riwayat Pengobatan');
  }
  $('#EMR_pr_IGD_btnHalaman'+ hal +'').toggleClass('green');
  $('#EMR_pr_IGD_btnHalaman'+ hal +'').toggleClass('white');
  $('#EMR_pr_IGD_btnHalaman'+ hal +'').toggleClass('col-md-1');
  $('#EMR_pr_IGD_btnHalaman'+ hal +'').toggleClass('col-md-8');

  if(hal == 2)
  {
    EMR_pr_IGD_HalamanBack.disabled = false;
    EMR_pr_IGD_HalamanBack.classList.remove('white');
    EMR_pr_IGD_HalamanBack.classList.add('green');
  }
});
$('#EMR_pr_IGD_HalamanBack').click(function() {
  $('#EMR_pr_IGD_Halaman'+ hal +'').toggleClass('collapse');
  $('#EMR_pr_IGD_Halaman'+ hal2 +'').toggleClass('collapse');

  $('#EMR_pr_IGD_btnHalaman'+ hal +'').html(hal);
  $('#EMR_pr_IGD_btnHalaman'+ hal +'').toggleClass('white');
  $('#EMR_pr_IGD_btnHalaman'+ hal +'').toggleClass('green');
  $('#EMR_pr_IGD_btnHalaman'+ hal +'').toggleClass('col-md-8');
  $('#EMR_pr_IGD_btnHalaman'+ hal +'').toggleClass('col-md-1');
  if(hal2 == 1)
  {
    $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').html('1. Informasi');
  }
  else if(hal2 == 2)
  {
    $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').html('2. Cara Masuk');
  }
  else if(hal2 == 3)
  {
    $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').html('3. Asal Masuk');
  }
  else if(hal2 == 4)
  {
    $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').html('4. Riwayat Penyakit');
  }
  else if(hal2 == 5)
  {
    $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').html('5. Riwayat Pengobatan');
  }
  $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').toggleClass('green');
  $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').toggleClass('white');
  $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').toggleClass('col-md-1');
  $('#EMR_pr_IGD_btnHalaman'+ hal2 +'').toggleClass('col-md-8');

  hal--;
  hal2--;

  if(hal == 1)
  {
    EMR_pr_IGD_HalamanBack.disabled = true;
    EMR_pr_IGD_HalamanBack.classList.add('white');
    EMR_pr_IGD_HalamanBack.classList.remove('green');
    if(halaman1 == 'Ya')
    {
      EMR_pr_IGD_HalamanNext.disabled = false;
      EMR_pr_IGD_HalamanNext.classList.add('green');
      EMR_pr_IGD_HalamanNext.classList.remove('white');
    }
  }
  if(hal == 2)
  {
    if(halaman2 == 'Ya')
    {
      EMR_pr_IGD_HalamanNext.disabled = false;
      EMR_pr_IGD_HalamanNext.classList.add('green');
      EMR_pr_IGD_HalamanNext.classList.remove('white');
    }
  }
  if(hal == 3)
  {
    if(halaman3 == 'Ya')
    {
      EMR_pr_IGD_HalamanNext.disabled = false;
      EMR_pr_IGD_HalamanNext.classList.add('green');
      EMR_pr_IGD_HalamanNext.classList.remove('white');
    }
  }
  if(hal == 4)
  {
    if(halaman4 == 'Ya')
    {
      EMR_pr_IGD_HalamanNext.disabled = false;
      EMR_pr_IGD_HalamanNext.classList.add('green');
      EMR_pr_IGD_HalamanNext.classList.remove('white');
    }
  }
});
$('#EMR_pr_IGD_P2_btnsimpan').click(function() {
  var RPenyDahu = '';
  if(document.getElementById('EMR_pr_IGD_RiwayatPenyakitDahuluA7').checked == true)
  {
    RPenyDahu = $("input[name ='EMR_pr_IGD_RiwayatPenyakitDahuluA7']:checked").val();
  }
  else
  {
    if(document.getElementById('EMR_pr_IGD_RiwayatPenyakitDahuluA1').checked == true)
    {
      RPenyDahu = RPenyDahu + $("input[name ='EMR_pr_IGD_RiwayatPenyakitDahuluA1']:checked").val()+', ';
    }
    if(document.getElementById('EMR_pr_IGD_RiwayatPenyakitDahuluA2').checked == true)
    {
      RPenyDahu = RPenyDahu + $("input[name ='EMR_pr_IGD_RiwayatPenyakitDahuluA2']:checked").val()+', ';
    }
    if(document.getElementById('EMR_pr_IGD_RiwayatPenyakitDahuluA3').checked == true)
    {
      RPenyDahu = RPenyDahu + $("input[name ='EMR_pr_IGD_RiwayatPenyakitDahuluA3']:checked").val()+', ';
    }
    if(document.getElementById('EMR_pr_IGD_RiwayatPenyakitDahuluA4').checked == true)
    {
      RPenyDahu = RPenyDahu + $("input[name ='EMR_pr_IGD_RiwayatPenyakitDahuluA4']:checked").val()+', ';
    }
    if(document.getElementById('EMR_pr_IGD_RiwayatPenyakitDahuluA5').checked == true)
    {
      RPenyDahu = RPenyDahu + $("input[name ='EMR_pr_IGD_RiwayatPenyakitDahuluA5']:checked").val()+', ';
    }
    if(document.getElementById('EMR_pr_IGD_RiwayatPenyakitDahuluA6').value != '')
    {
      RPenyDahu = RPenyDahu + $("input[name ='EMR_pr_IGD_RiwayatPenyakitDahuluA6']").val();
    }
  }
  var form_data = {
    EMR_pr_IGD_P2_jamTindakan : 'Pasien datang pukul : ' + $('#EMR_pr_IGD_P2_jamTindakan1').val() +' WIB</br>'+
                                'Tindakan dimulai pukul : ' + $('#EMR_pr_IGD_P2_jamTindakan2').val() +' WIB</br>'+
                                'Tindakan selesai pukul : ' + $('#EMR_pr_IGD_P2_jamTindakan2').val() +' WIB</br>',
    EMR_pr_IGD_P2_jamMasuk : $('#EMR_pr_IGD_P2_jamMasuk').val(),
    EMR_pr_IGD_P2_tglMasuk : $('#EMR_pr_IGD_P2_tglMasuk').val(),
    EMR_pr_IGD_Anamese : $("input[name ='EMR_pr_IGD_Anamese']:checked").val(),
    EMR_pr_IGD_AnameseNamaHetero : $('#EMR_pr_IGD_AnameseNamaHetero').val(),
    EMR_pr_IGD_AnameseHubungan : $('#EMR_pr_IGD_AnameseHubungan').val(),
    EMR_pr_IGD_CaraMasuk : $("input[name ='EMR_pr_IGD_CaraMasuk']:checked").val(),
    EMR_pr_IGD_caraMasukbantuan : $('#EMR_pr_IGD_caraMasukbantuan').val(),
    EMR_pr_IGD_Rujukan : $("input[name ='EMR_pr_IGD_Rujukan']:checked").val(),
    EMR_pr_IGD_RujukanIsi : $('#EMR_pr_IGD_RujukanIsi').val(),
    EMR_pr_IGD_RPenyDahu : RPenyDahu,
    EMR_pr_IGD_RiwayatPenyakitSekarang : $('#EMR_pr_IGD_RiwayatPenyakitSekarang').val(),
    EMR_pr_IGD_Pengobatansebelumnya : $("input[name ='EMR_pr_IGD_Pengobatansebelumnya']:checked").val(),
    EMR_pr_IGD_PengobatanSebelumnyatxt : $("textarea[name ='EMR_pr_IGD_PengobatanSebelumnyatxt']").val(),
    IGD_idpemeriksaan : $('#EMR_pr_IGD_idper').val()
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_pr_P2",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if(msg == 'TERUJI')
      {
        $('#modalLompatMenuIGD').modal('show');
      }
    }
  });
  return false;
});
document.getElementById('EMR_pr_IGD_AnameseAuto').onclick = function()
{
  document.getElementById('EMR_pr_IGD_isianHetero').classList.add('collapse');
}
document.getElementById('EMR_pr_IGD_AnameseHetero').onclick = function()
{
  document.getElementById('EMR_pr_IGD_isianHetero').classList.remove('collapse');
}
document.getElementById('EMR_pr_IGD_RujukanNon').onclick = function()
{
  document.getElementById('EMR_pr_IGD_isianRujukan').classList.add('collapse');
}
document.getElementById('EMR_pr_IGD_RujukanY').onclick = function()
{
  document.getElementById('EMR_pr_IGD_isianRujukan').classList.remove('collapse');
}
document.getElementById('EMR_pr_IGD_CaraMasukJalanTanpaBantuan').onclick = function()
{
  document.getElementById('EMR_pr_IGD_isianCaraMasuk').classList.add('collapse');
}
document.getElementById('EMR_pr_IGD_CaraMasukKursiRoda').onclick = function()
{
  document.getElementById('EMR_pr_IGD_isianCaraMasuk').classList.add('collapse');
}
document.getElementById('EMR_pr_IGD_CaraMasukTempatTidurDorong').onclick = function()
{
  document.getElementById('EMR_pr_IGD_isianCaraMasuk').classList.add('collapse');
}
document.getElementById('EMR_pr_IGD_CaraMasukDenganBantuan').onclick = function()
{
  document.getElementById('EMR_pr_IGD_isianCaraMasuk').classList.remove('collapse');
}
document.getElementById('EMR_pr_IGD_KajiFungsiMandiri').onclick = function()
{
  document.getElementById('EMR_pr_IGD_isianKajiFungsi').classList.add('collapse');
}
document.getElementById('EMR_pr_IGD_KajiFungsiDenganBantuan').onclick = function()
{
  document.getElementById('EMR_pr_IGD_isianKajiFungsi').classList.remove('collapse');
}
document.getElementById('EMR_pr_IGD_PengobatansebelumnyaA').onclick = function()
{
  document.getElementById('EMR_pr_IGD_RiwayatSebelumnya').classList.remove('collapse');
}
document.getElementById('EMR_pr_IGD_PengobatansebelumnyaT').onclick = function()
{
  document.getElementById('EMR_pr_IGD_RiwayatSebelumnya').classList.add('collapse');
}

//================================= END MENU 2 =================================
//==============================================================================
//================================ START MENU 3 ================================

var P3_hal= 1;
var P3_hal2 = 0;
var P3_halaman1 = 'Ya';
var P3_halaman2 = 'Ya';
var P3_halaman3 = 'Ya';
var P3_halaman4 = 'Ya';
var P3_halaman5 = 'Ya';
var P3_halaman6 = 'Ya';
var halSN = 1;

var tindakSN = 0;
var sn1 = '';
var sn1a = '';
var sn1b = '';
var sn2 = '';
var sn3 = '';
var sn4 = '';
var sn5 = '';
var sn6 = '';

$('#EMR_pr_IGD_P3_btnmenu').click(function() {
  document.getElementById('EMR_pr_IGD_P3_btnmenu').disabled = true;
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_IGD_statverHal').value = 'P3';
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});
$('#EMR_pr_IGD_P3_HalamanNext').click(function() {
  P3_hal++;
  P3_hal2++;

  if(P3_hal== 2)
  {
    if(P3_halaman2 == 'Tidak')
    {
      EMR_pr_IGD_P3_HalamanNext.disabled = true;
      EMR_pr_IGD_P3_HalamanNext.classList.add('white');
      EMR_pr_IGD_P3_HalamanNext.classList.remove('green');
    }
  }
  else if(P3_hal== 3)
  {
    if(P3_halaman3 == 'Tidak')
    {
      EMR_pr_IGD_P3_HalamanNext.disabled = true;
      EMR_pr_IGD_P3_HalamanNext.classList.add('white');
      EMR_pr_IGD_P3_HalamanNext.classList.remove('green');
    }
  }
  else if(P3_hal== 4)
  {
    if(P3_halaman4 == 'Tidak')
    {
      EMR_pr_IGD_P3_HalamanNext.disabled = true;
      EMR_pr_IGD_P3_HalamanNext.classList.add('white');
      EMR_pr_IGD_P3_HalamanNext.classList.remove('green');
    }
  }
  else if(P3_hal== 5)
  {
    if(P3_halaman5 == 'Tidak')
    {
      EMR_pr_IGD_P3_HalamanNext.disabled = true;
      EMR_pr_IGD_P3_HalamanNext.classList.add('white');
      EMR_pr_IGD_P3_HalamanNext.classList.remove('green');
    }
  }
  else if(P3_hal== 6)
  {

      EMR_pr_IGD_P3_HalamanNext.disabled = true;
      EMR_pr_IGD_P3_HalamanNext.classList.add('white');
      EMR_pr_IGD_P3_HalamanNext.classList.remove('green');

  }

  $('#EMR_pr_IGD_P3_Halaman'+ P3_hal+'').toggleClass('collapse');
  $('#EMR_pr_IGD_P3_Halaman'+ P3_hal2 +'').toggleClass('collapse');

  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').html(P3_hal2);
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').toggleClass('white');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').toggleClass('green');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').toggleClass('col-md-7');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').toggleClass('col-md-1');
  if(P3_hal== 2)
  {
    $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').html('2. Pengkajian Fungsi');
  }
  else if(P3_hal== 3)
  {
    $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').html('3. Pengkajian Risiko Jatuh');
  }
  else if(P3_hal== 4)
  {
    $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').html('4. Pengkajian Risiko Dikubitus');
  }
  else if(P3_hal== 5)
  {
    $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').html('5. Pengkajian Gizi');
  }
  else if(P3_hal== 6)
  {
    $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').html('6. Pengkajian Restrain');
  }
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').toggleClass('green');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').toggleClass('white');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').toggleClass('col-md-1');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').toggleClass('col-md-7');

  if(P3_hal== 2)
  {
    EMR_pr_IGD_P3_HalamanBack.disabled = false;
    EMR_pr_IGD_P3_HalamanBack.classList.remove('white');
    EMR_pr_IGD_P3_HalamanBack.classList.add('green');
  }
});
$('#EMR_pr_IGD_P3_HalamanBack').click(function() {
  $('#EMR_pr_IGD_P3_Halaman'+ P3_hal+'').toggleClass('collapse');
  $('#EMR_pr_IGD_P3_Halaman'+ P3_hal2 +'').toggleClass('collapse');

  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').html(P3_hal);
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').toggleClass('white');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').toggleClass('green');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').toggleClass('col-md-7');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal+'').toggleClass('col-md-1');
  if(P3_hal2 == 1)
  {
    $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').html('1. Pengkajian Nyeri');
  }
  else if(P3_hal2 == 2)
  {
    $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').html('2. Pengkajian Fungsi');
  }
  else if(P3_hal2 == 3)
  {
    $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').html('3. Pengkajian Risiko Jatuh');
  }
  else if(P3_hal2 == 4)
  {
    $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').html('4. Pengkajian Risiko Dikubitus');
  }
  else if(P3_hal2 == 5)
  {
    $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').html('5. Pengkajian Gizi');
  }
  else if(P3_hal2 == 6)
  {
    $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').html('5. Pengkajian Restrain');
  }
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').toggleClass('green');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').toggleClass('white');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').toggleClass('col-md-1');
  $('#EMR_pr_IGD_P3_btnHalaman'+ P3_hal2 +'').toggleClass('col-md-7');

  P3_hal--;
  P3_hal2--;

  if(P3_hal== 1)
  {
    EMR_pr_IGD_P3_HalamanBack.disabled = true;
    EMR_pr_IGD_P3_HalamanBack.classList.add('white');
    EMR_pr_IGD_P3_HalamanBack.classList.remove('green');
    if(P3_halaman1 == 'Ya')
    {
      EMR_pr_IGD_P3_HalamanNext.disabled = false;
      EMR_pr_IGD_P3_HalamanNext.classList.add('green');
      EMR_pr_IGD_P3_HalamanNext.classList.remove('white');
    }
  }
  if(P3_hal== 2)
  {
    if(P3_halaman2 == 'Ya')
    {
      EMR_pr_IGD_P3_HalamanNext.disabled = false;
      EMR_pr_IGD_P3_HalamanNext.classList.add('green');
      EMR_pr_IGD_P3_HalamanNext.classList.remove('white');
    }
  }
  if(P3_hal== 3)
  {
    if(P3_halaman3 == 'Ya')
    {
      EMR_pr_IGD_P3_HalamanNext.disabled = false;
      EMR_pr_IGD_P3_HalamanNext.classList.add('green');
      EMR_pr_IGD_P3_HalamanNext.classList.remove('white');
    }
  }
  if(P3_hal== 4)
  {
    if(P3_halaman4 == 'Ya')
    {
      EMR_pr_IGD_P3_HalamanNext.disabled = false;
      EMR_pr_IGD_P3_HalamanNext.classList.add('green');
      EMR_pr_IGD_P3_HalamanNext.classList.remove('white');
    }
  }
  if(P3_hal== 5)
  {
    if(P3_halaman5 == 'Ya')
    {
      EMR_pr_IGD_P3_HalamanNext.disabled = false;
      EMR_pr_IGD_P3_HalamanNext.classList.add('green');
      EMR_pr_IGD_P3_HalamanNext.classList.remove('white');
    }
  }
});

// START NYERI
$('#EMR_pr_IGD_SN1Ada').click(function() {
  if(EMR_pr_IGD_SN_statadaNyeri.value == "Tidak")
  {
    $("#EMR_pr_IGD_SN1Takda2").toggleClass('collapse');
    $('#EMR_pr_IGD_HasilNyeri_tampilan').toggleClass('collapse');
    $("#EMR_pr_IGD_nyeri_ada_focus").focus();
    $("#EMR_pr_IGD_SN_statadaNyeri").val('Ya');
  }
  halaman4 = 'Tidak';
  EMR_pr_IGD_HalamanNext.disabled = true;
  EMR_pr_IGD_HalamanNext.classList.add('white');
  EMR_pr_IGD_HalamanNext.classList.remove('green');

  EMR_pr_IGD_SN1Next.disabled = true;
  EMR_pr_IGD_SN1Next.classList.add('white');
  EMR_pr_IGD_SN1Next.classList.remove('yellow');
  $('#EMR_pr_IGD_SN1_1').toggleClass('collapse');
  $('#EMR_pr_IGD_SN2_1').toggleClass('collapse');
  $('#EMR_pr_IGD_SN3_1').toggleClass('collapse');

  $('#EMR_pr_IGD_SN1_'+halSN).toggleClass('collapse');
  $('#EMR_pr_IGD_SN2_'+halSN).toggleClass('collapse');
  $('#EMR_pr_IGD_SN3_'+halSN).toggleClass('collapse');
  halSN = 1;

  tindakSN = 0;
  sn1 = '';
  sn1a = '';
  sn1b = '';
  sn2 = '';
  sn3 = '';
  sn4 = '';
  sn5 = '';
  sn6 = '';
  if(document.getElementById('EMR_pr_IGD_ststsetiapselamaapa').value == 'ada')
  {
    $('#EMR_pr_IGD_ststsetiapselamaapa').val('tidak');
    $('#EMR_pr_IGD_setiapselamaapa').toggleClass('collapse');
    $('#EMR_pr_IGD_NyeriAkhir').toggleClass('collapse');
  }

  if(document.getElementById('EMR_pr_IGD_ststsetiapselamaapa2').value == 'ada')
  {
    $('#EMR_pr_IGD_ststsetiapselamaapa2').val('tidak');
    $('#EMR_pr_IGD_setiapselamaapa2').toggleClass('collapse');
  }

});
$('#EMR_pr_IGD_SN1Takda').click(function() {
  if(EMR_pr_IGD_SN_statadaNyeri.value == "Ya")
  {
    $("#EMR_pr_IGD_SN1Takda2").toggleClass('collapse');
    $('#EMR_pr_IGD_HasilNyeri_tampilan').toggleClass('collapse');
    $("#EMR_pr_IGD_nyeri_ada_focus").val('');
    $("#EMR_pr_IGD_SN_statadaNyeri").val('Tidak');
  }
  halaman4 = 'Ya';
  EMR_pr_IGD_HalamanNext.disabled = false;
  EMR_pr_IGD_HalamanNext.classList.add('green');
  EMR_pr_IGD_HalamanNext.classList.remove('white');
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  EMR_pr_IGD_SN1Back.disabled = true;
  EMR_pr_IGD_SN1Back.classList.add('white');
  EMR_pr_IGD_SN1Back.classList.remove('yellow');
  EMR_pr_IGD_SkorNyeri.innerHTML = "<b> 0</b>";
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = "0";
  if (document.getElementById('EMR_pr_IGD_umur_skala').value < 1)
  {
    EMR_pr_IGD_SkalaNyeri.innerHTML = "<b> Nyeri ringan sampai tidak nyeri</b>";
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if (document.getElementById('EMR_pr_IGD_umur_skala').value < 4)
  {
    EMR_pr_IGD_SkalaNyeri.innerHTML = "<b> Relaxed dan comfortable (santai dan nyaman)</b>";
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else
  {
    EMR_pr_IGD_SkalaNyeri.innerHTML = "<b> Tidak nyeri</b>";
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Tidak nyeri";
  }
  //skor nyeri 1
  $('#EMR_pr_IGD_SN_NIPSA1').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSA2').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSB1').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSB2').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSB3').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSC1').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSC2').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSD1').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSD2').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSD3').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSD4').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSE1').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSE2').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSE3').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSE4').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSF1').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSF2').removeAttr('checked');
  $('#EMR_pr_IGD_SN_NIPSF3').removeAttr('checked');
  //skor nyeri 2
  $('#EMR_pr_IGD_SN_FLACCA1').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCA2').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCA3').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCB1').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCB2').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCB3').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCC1').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCC2').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCC3').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCD1').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCD2').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCD3').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCE1').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCE2').removeAttr('checked');
  $('#EMR_pr_IGD_SN_FLACCE3').removeAttr('checked');
  //skor nyeri 3
  $('#EMR_pr_IGD_CbtnBertambahParah1').removeAttr('checked');
  $('#EMR_pr_IGD_CbtnBertambahParah2').removeAttr('checked');
  $('#EMR_pr_IGD_textBertambahParah').val('');
  $('#EMR_pr_IGD_CbtnBerkurang1').removeAttr('checked');
  $('#EMR_pr_IGD_CbtnBerkurang2').removeAttr('checked');
  $('#EMR_pr_IGD_CbtnBerkurang3').removeAttr('checked');
  $('#EMR_pr_IGD_CbtnBerkurang4').removeAttr('checked');
  $('#EMR_pr_IGD_CbtnBerkurang5').removeAttr('checked');
  $('#EMR_pr_IGD_textBertambahParah2').val('');
  $('#EMR_pr_IGD_CbtnGambaran1').removeAttr('checked');
  $('#EMR_pr_IGD_CbtnGambaran2').removeAttr('checked');
  $('#EMR_pr_IGD_CbtnGambaran3').removeAttr('checked');
  $('#EMR_pr_IGD_CbtnGambaran4').removeAttr('checked');
  $('#EMR_pr_IGD_CbtnGambaran5').removeAttr('checked');
  $('#EMR_pr_IGD_CbtnGambaran6').removeAttr('checked');
  $('#EMR_pr_IGD_CbtnGambaran7').removeAttr('checked');
  $('#EMR_pr_IGD_textGambaran').val('');
  $('#EMR_pr_IGD_SNMenjalar1').val('');
  $('#EMR_pr_IGD_SNMenjalar').removeAttr('checked');
  $('#EMR_pr_IGD_SNMenjalar2').val('');
  $('#EMR_pr_IGD_RbtnSNsetiapinsan1').removeAttr('checked');
  $('#EMR_pr_IGD_RbtnSNsetiapinsan2').removeAttr('checked');
  if(document.getElementById('EMR_pr_IGD_ststsetiapselamaapa').value == 'ada')
  {
    $('#EMR_pr_IGD_ststsetiapselamaapa').val('tidak');
    $('#EMR_pr_IGD_setiapselamaapa').toggleClass('collapse');
    $('#EMR_pr_IGD_NyeriAkhir').toggleClass('collapse');
  }
  else
  {
    $('#EMR_pr_IGD_ststsetiapselamaapa').val('ada');
    $('#EMR_pr_IGD_setiapselamaapa').toggleClass('collapse');
    $('#EMR_pr_IGD_NyeriAkhir').toggleClass('collapse');
  }
  $('#EMR_pr_IGD_RbtnSNsetiap1').removeAttr('checked');
  $('#EMR_pr_IGD_RbtnSNsetiap2').removeAttr('checked');
  $('#EMR_pr_IGD_RbtnSNsetiap3').removeAttr('checked');
  $('#EMR_pr_IGD_SNlamawaktu').val('');
  if(document.getElementById('EMR_pr_IGD_ststsetiapselamaapa2').value == 'ada')
  {
    $('#EMR_pr_IGD_ststsetiapselamaapa2').val('tidak');
    $('#EMR_pr_IGD_setiapselamaapa2').toggleClass('collapse');
  }
  else
  {
    $('#EMR_pr_IGD_ststsetiapselamaapa2').val('ada');
    $('#EMR_pr_IGD_setiapselamaapa2').toggleClass('collapse');
  }
  $('#EMR_pr_IGD_RbtnSNselama1').removeAttr('checked');
  $('#EMR_pr_IGD_RbtnSNselama2').removeAttr('checked');

  $('#EMR_pr_IGD_SN1_1').toggleClass('collapse');
  $('#EMR_pr_IGD_SN2_1').toggleClass('collapse');
  $('#EMR_pr_IGD_SN3_1').toggleClass('collapse');

  $('#EMR_pr_IGD_SN1_'+halSN).toggleClass('collapse');
  $('#EMR_pr_IGD_SN2_'+halSN).toggleClass('collapse');
  $('#EMR_pr_IGD_SN3_'+halSN).toggleClass('collapse');
  halSN = 1;

  tindakSN = 0;
  sn1 = '';
  sn1a = '';
  sn1b = '';
  sn2 = '';
  sn3 = '';
  sn4 = '';
  sn5 = '';
  sn6 = '';
});
$("#EMR_pr_IGD_nyeri_ada_focus").focusout(function() {
  if(EMR_pr_IGD_nyeri_ada_focus.value =='')
  {
    $('#EMR_pr_IGD_SN1Ada').removeAttr('checked');
    EMR_pr_IGD_SN1Takda.checked = true;
    $("#EMR_pr_IGD_nyeri_ada_focus").val('');
    $("#EMR_pr_IGD_SN_statadaNyeri").val('Tidak');
    $("#EMR_pr_IGD_SN1Takda2").toggleClass('collapse');
  }
});

// Skor Nyeri 1
$('#EMR_pr_IGD_SN_NIPSA1').click(function() {
  if(sn1 == 1)
  {
    tindakSN = tindakSN - 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn1 = '0';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSA2').click(function() {
  if(sn1 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn1 = '1';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSB1').click(function() {
  if(sn2 == 0)
  {
    tindakSN = tindakSN;
  }
  else if(sn2 == 1)
  {
    tindakSN = tindakSN - 1;
  }
  else
  {
    tindakSN = tindakSN - 2;
  }
  sn2 = '0';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSB2').click(function() {
  if(sn2 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else if(sn2 == 1)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn2 = '1';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSB3').click(function() {
  if(sn2 == 0)
  {
    tindakSN = tindakSN + 2;
  }
  else if(sn2 == 1)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn2 = '2';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSC1').click(function() {
  if(sn3 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn3 = '0';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSC2').click(function() {
  if(sn3 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn3 = '1';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSD1').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn4 = '0';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSD2').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn4 = '0';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSD3').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn4 = '1';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSD4').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn4 = '1';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSE1').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn5 = '0';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSE2').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn5 = '0';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSE3').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn5 = '1';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSE4').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn5 = '1';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSF1').click(function() {
  if(sn6 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn6 = '0';
  halaman4 = 'Ya';
  EMR_pr_IGD_HalamanNext.disabled = false;
  EMR_pr_IGD_HalamanNext.classList.add('green');
  EMR_pr_IGD_HalamanNext.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSF2').click(function() {
  if(sn6 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn6 = '0';
  halaman4 = 'Ya';
  EMR_pr_IGD_HalamanNext.disabled = false;
  EMR_pr_IGD_HalamanNext.classList.add('green');
  EMR_pr_IGD_HalamanNext.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});
$('#EMR_pr_IGD_SN_NIPSF3').click(function() {
  if(sn6 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn6 = '1';
  halaman4 = 'Ya';
  EMR_pr_IGD_HalamanNext.disabled = false;
  EMR_pr_IGD_HalamanNext.classList.add('green');
  EMR_pr_IGD_HalamanNext.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan sampai tidak nyeri";
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang sampai nyeri ringan";
  }
  else if(tindakSN > 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri hebat</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri hebat";
  }
});

//Skor Nyeri 2
$('#EMR_pr_IGD_SN_FLACCA1').click(function() {
  if(sn1 == 0)
  {
    tindakSN = tindakSN;
  }
  else if(sn1 == 1)
  {
    tindakSN = tindakSN - 1;
  }
  else
  {
    tindakSN = tindakSN - 2;
  }
  sn1 = '0';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCA2').click(function() {
  if(sn1 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else if(sn1 == 1)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn1 = '1';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCA3').click(function() {
  if(sn1 == 0)
  {
    tindakSN = tindakSN + 2;
  }
  else if(sn1 == 1)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn1 = '2';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCB1').click(function() {
  if(sn2 == 0)
  {
    tindakSN = tindakSN;
  }
  else if(sn2 == 1)
  {
    tindakSN = tindakSN - 1;
  }
  else
  {
    tindakSN = tindakSN - 2;
  }
  sn2 = '0';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCB2').click(function() {
  if(sn2 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else if(sn2 == 1)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn2 = '1';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCB3').click(function() {
  if(sn2 == 0)
  {
    tindakSN = tindakSN + 2;
  }
  else if(sn2 == 1)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn2 = '2';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCC1').click(function() {
  if(sn3 == 0)
  {
    tindakSN = tindakSN;
  }
  else if(sn3 == 1)
  {
    tindakSN = tindakSN - 1;
  }
  else
  {
    tindakSN = tindakSN - 2;
  }
  sn3 = '0';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCC2').click(function() {
  if(sn3 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else if(sn3 == 1)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn3 = '1';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCC3').click(function() {
  if(sn3 == 0)
  {
    tindakSN = tindakSN + 2;
  }
  else if(sn3 == 1)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn3 = '2';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCD1').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN;
  }
  else if(sn4 == 1)
  {
    tindakSN = tindakSN - 1;
  }
  else
  {
    tindakSN = tindakSN - 2;
  }
  sn4 = '0';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCD2').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else if(sn4 == 1)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn4 = '1';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCD3').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN + 2;
  }
  else if(sn4 == 1)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn4 = '2';
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCE1').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN;
  }
  else if(sn5 == 1)
  {
    tindakSN = tindakSN - 1;
  }
  else
  {
    tindakSN = tindakSN - 2;
  }
  sn5 = '0';
  halaman4 = 'Ya';
  EMR_pr_IGD_HalamanNext.disabled = false;
  EMR_pr_IGD_HalamanNext.classList.add('green');
  EMR_pr_IGD_HalamanNext.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCE2').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else if(sn5 == 1)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn5 = '1';
  halaman4 = 'Ya';
  EMR_pr_IGD_HalamanNext.disabled = false;
  EMR_pr_IGD_HalamanNext.classList.add('green');
  EMR_pr_IGD_HalamanNext.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});
$('#EMR_pr_IGD_SN_FLACCE3').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN + 2;
  }
  else if(sn5 == 1)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn5 = '2';
  halaman4 = 'Ya';
  EMR_pr_IGD_HalamanNext.disabled = false;
  EMR_pr_IGD_HalamanNext.classList.add('green');
  EMR_pr_IGD_HalamanNext.classList.remove('white');
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  if(tindakSN == 0)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Relaxed dan comfortable (santai dan nyaman)";
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Mild discomfort (nyeri ringan)";
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Moderate pain (nyeri sedang)";
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_pr_IGD_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>');
    document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Severe discomfory/pain (nyeri hebat)";
  }
});

//skor nyeri 3
//Pertanyaan Nyeri 3 hal 1 START
var tam1 = 0;
var tam2 = 0;
$('#EMR_pr_IGD_CbtnBertambahParah1').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnBertambahParah1').checked == true)
  {
    sn1a = sn1a + 1;
  }
  else
  {
    sn1a = sn1a - 1;
  }
  if(sn1a > 0 && sn1b > 0)
  {
    sn1 = 1;
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_CbtnBertambahParah2').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnBertambahParah2').checked == true)
  {
    sn1a = sn1a + 1;
  }
  else
  {
    sn1a = sn1a - 1;
  }
  if(sn1a > 0 && sn1b > 0)
  {
    sn1 = 1;
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_textBertambahParah').keyup(function() {
    if(EMR_pr_IGD_textBertambahParah.value == '')
    {
      if(tam1 > 0)
      {
        sn1a = sn1a - 1;
        tam1 = 0;
      }
    }
    else
    {
      if(tam1 == 0)
      {
        sn1a = sn1a + 1;
        tam1 = 1;
      }
    }
    if(sn1a > 0 && sn1b > 0)
    {
      sn1 = 1;
      EMR_pr_IGD_SN1Next.disabled = false;
      EMR_pr_IGD_SN1Next.classList.add('yellow');
      EMR_pr_IGD_SN1Next.classList.remove('white');
    }
    else
    {
      sn1 = 0;
      EMR_pr_IGD_SN1Next.disabled = true;
      EMR_pr_IGD_SN1Next.classList.add('white');
      EMR_pr_IGD_SN1Next.classList.remove('yellow');
    }
});
$('#EMR_pr_IGD_CbtnBerkurang1').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnBerkurang1').checked == true)
  {
    sn1b = sn1b + 1;
  }
  else
  {
    sn1b = sn1b - 1;
  }
  if(sn1a > 0 && sn1b > 0)
  {
    sn1 = 1;
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_CbtnBerkurang2').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnBerkurang2').checked == true)
  {
    sn1b = sn1b + 1;
  }
  else
  {
    sn1b = sn1b - 1;
  }
  if(sn1a > 0 && sn1b > 0)
  {
    sn1 = 1;
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_CbtnBerkurang3').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnBerkurang3').checked == true)
  {
    sn1b = sn1b + 1;
  }
  else
  {
    sn1b = sn1b - 1;
  }
  if(sn1a > 0 && sn1b > 0)
  {
    sn1 = 1;
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_CbtnBerkurang4').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnBerkurang4').checked == true)
  {
    sn1b = sn1b + 1;
  }
  else
  {
    sn1b = sn1b - 1;
  }
  if(sn1a > 0 && sn1b > 0)
  {
    sn1 = 1;
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_CbtnBerkurang5').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnBerkurang5').checked == true)
  {
    sn1b = sn1b + 1;
  }
  else
  {
    sn1b = sn1b - 1;
  }
  if(sn1a > 0 && sn1b > 0)
  {
    sn1 = 1;
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_textBertambahParah2').keyup(function() {
  if( EMR_pr_IGD_textBertambahParah2.value == "")
  {
    if(tam2 > 0)
    {
      sn1b = sn1b - 1;
      tam2 = 0;
    }
  }
  else
  {
    if(tam2 == 0)
    {
      sn1b = sn1b + 1;
      tam2 = 1;
    }
  }
  if(sn1a > 0 && sn1b > 0)
  {
    sn1 = 1;
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
//Pertanyaan Nyeri 3 hal 1 END

//Pertanyaan Nyeri 3 hal 2 START
var tam3 = 0;
$('#EMR_pr_IGD_CbtnGambaran1').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnGambaran1').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_CbtnGambaran2').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnGambaran2').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_CbtnGambaran3').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnGambaran3').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_CbtnGambaran4').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnGambaran4').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {

    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_CbtnGambaran5').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnGambaran5').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_CbtnGambaran6').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnGambaran6').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {

    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_CbtnGambaran7').click(function() {
  if(document.getElementById('EMR_pr_IGD_CbtnGambaran7').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {

    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_textGambaran').keyup(function() {
  if(EMR_pr_IGD_textGambaran.value != '')
  {
    if(tam3 == 0)
    {
      sn2 = sn2 + 1;
      tam3 = 1;
    }
  }
  else
  {
    if(tam3 > 0)
    {
      sn2 = sn2 - 1;
      tam3 = 0;
    }
  }
  if(sn2 > 0)
  {
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
//Pertanyaan Nyeri 3 hal 2 END

//Pertanyaan Nyeri 3 hal 3 START
$('#EMR_pr_IGD_SNMenjalar1').keyup(function() {
  if(EMR_pr_IGD_SNMenjalar1.value != '' && $('input[name="EMR_pr_IGD_Menjalar"]:checked').length > 0)
  {
    sn3 = 1;
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('white');
  }
  else
  {
    sn3 = 0;
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_pr_IGD_MenjalarY').click(function() {
  if(EMR_pr_IGD_SNMenjalar2status.value == "Tidak")
  {
    $("#EMR_pr_IGD_SNMenjalar2").toggleClass('collapse');
    $("#EMR_pr_IGD_SNMenjalar2").focus();
    $("#EMR_pr_IGD_SNMenjalar2status").val('Ya');
  }
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_MenjalarTD').click(function() {
  if(EMR_pr_IGD_SNMenjalar2status.value == "Ya")
  {
    $("#EMR_pr_IGD_SNMenjalar2").toggleClass('collapse');
    $("#EMR_pr_IGD_SNMenjalar2").val('');
    $("#EMR_pr_IGD_SNMenjalar2status").val('Tidak');
  }
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$("#EMR_pr_IGD_SNMenjalar2").focusout(function() {
  if(EMR_pr_IGD_SNMenjalar2.value =='')
  {
    alert("Lokasi menjalar belum di isi, centang akan dihapus otomatis dan dianggap pasien tidak memiliki lokasi menjalar");
    $('#EMR_pr_IGD_MenjalarY').removeAttr('checked');
    EMR_pr_IGD_MenjalarTD.checked = true;
    $("#EMR_pr_IGD_SNMenjalar2").val('');
    $("#EMR_pr_IGD_SNMenjalar2status").val('Tidak');
    $("#EMR_pr_IGD_SNMenjalar2").toggleClass('collapse');
  }
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
//Pertanyaan Nyeri 3 hal 3 END

//Pertanyaan Nyeri 3 hal 4 START
$('#EMR_pr_IGD_btnSN3A_1').click(function() {
  sn4 = 1;
  tindakSN = 0;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Tidak nyeri</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Tidak nyeri";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3A_2').click(function() {
  sn4 = 1;
  tindakSN = 2;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3A_3').click(function() {
  sn4 = 1;
  tindakSN = 4;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3A_4').click(function() {
  sn4 = 1;
  tindakSN = 6;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3A_5').click(function() {
  sn4 = 1;
  tindakSN = 8;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri berat</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri berat";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3A_6').click(function() {
  sn4 = 1;
  tindakSN = 10;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri berat</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri berat";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3B_0').click(function() {
  sn4 = 1;
  tindakSN = 0;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Tidak nyeri</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Tidak nyeri";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3B_1').click(function() {
  sn4 = 1;
  tindakSN = 1;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3B_2').click(function() {
  sn4 = 1;
  tindakSN = 2;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3B_3').click(function() {
  sn4 = 1;
  tindakSN = 3;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri ringan</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri ringan";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3B_4').click(function() {
  sn4 = 1;
  tindakSN = 4;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3B_5').click(function() {
  sn4 = 1;
  tindakSN = 5;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3B_6').click(function() {
  sn4 = 1;
  tindakSN = 6;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri sedang</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri sedang";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3B_7').click(function() {
  sn4 = 1;
  tindakSN = 7;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri berat</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri berat";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3B_8').click(function() {
  sn4 = 1;
  tindakSN = 8;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri berat</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri berat";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3B_9').click(function() {
  sn4 = 1;
  tindakSN = 9;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri berat</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri berat";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
$('#EMR_pr_IGD_btnSN3B_10').click(function() {
  sn4 = 1;
  tindakSN = 10;
  $('#EMR_pr_IGD_SkorNyeri').html('<b>'+tindakSN+'</b>');
  document.getElementById('EMR_pr_IGD_SkorNyeri_text').value = tindakSN;
  $('#EMR_pr_IGD_SkalaNyeri').html('<b> Nyeri berat</b>');
  document.getElementById('EMR_pr_IGD_SkalaNyeri_text').value = "Nyeri berat";
  EMR_pr_IGD_SN1Next.disabled = false;
  EMR_pr_IGD_SN1Next.classList.add('yellow');
  EMR_pr_IGD_SN1Next.classList.remove('white');
});
//Pertanyaan Nyeri 3 hal 4 END

//Pertanyaan Nyeri 3 hal 5 START
var batu = 0;
$('#EMR_pr_IGD_RbtnSNsetiapinsan1').click(function() {
  if(batu > 0)
  {
    EMR_pr_IGD_HalamanNext.disabled = true;
    EMR_pr_IGD_HalamanNext.classList.add('white');
    EMR_pr_IGD_HalamanNext.classList.remove('green');
    batu = 0;
  }
  if(document.getElementById('EMR_pr_IGD_ststsetiapselamaapa').value == 'tidak')
  {
    $('#EMR_pr_IGD_ststsetiapselamaapa').val('ada');
    $('#EMR_pr_IGD_setiapselamaapa').toggleClass('collapse');
    $('#EMR_pr_IGD_NyeriAkhir').toggleClass('collapse');
  }
});
$('#EMR_pr_IGD_RbtnSNsetiapinsan2').click(function() {
  if(batu == 0)
  {
    halaman4 = 'Ya';
    EMR_pr_IGD_HalamanNext.disabled = false;
    EMR_pr_IGD_HalamanNext.classList.add('green');
    EMR_pr_IGD_HalamanNext.classList.remove('white');
    batu = 1;
    $('#EMR_pr_IGD_RbtnSNsetiap1').removeAttr('checked');
    $('#EMR_pr_IGD_RbtnSNsetiap2').removeAttr('checked');
    $('#EMR_pr_IGD_RbtnSNsetiap3').removeAttr('checked');
    $('#EMR_pr_IGD_SNlamawaktu').val('');
    $('#EMR_pr_IGD_RbtnSNselama1').removeAttr('checked');
    $('#EMR_pr_IGD_RbtnSNselama2').removeAttr('checked');
    $('#EMR_pr_IGD_SNlamawaktu2').val('');
  }
  if(document.getElementById('EMR_pr_IGD_ststsetiapselamaapa').value == 'ada')
  {
    $('#EMR_pr_IGD_ststsetiapselamaapa').val('tidak');
    $('#EMR_pr_IGD_setiapselamaapa').toggleClass('collapse');
    $('#EMR_pr_IGD_NyeriAkhir').toggleClass('collapse');
    if(document.getElementById('EMR_pr_IGD_ststsetiapselamaapa2').value == 'ada')
    {
      $('#EMR_pr_IGD_ststsetiapselamaapa2').val('tidak');
      $('#EMR_pr_IGD_setiapselamaapa2').toggleClass('collapse');
    }
  }
});
$('#EMR_pr_IGD_RbtnSNsetiap1').click(function() {
  if(document.getElementById('EMR_pr_IGD_ststsetiapselamaapa2').value == 'tidak')
  {
    $('#EMR_pr_IGD_ststsetiapselamaapa2').val('ada');
    $('#EMR_pr_IGD_setiapselamaapa2').toggleClass('collapse');
    $('#EMR_pr_IGD_NyeriAkhir').toggleClass('collapse');
  }
  $('#EMR_pr_IGD_SNlamawaktu').val('');
  $('#EMR_pr_IGD_RbtnSNselama1').removeAttr('checked');
  $('#EMR_pr_IGD_RbtnSNselama2').removeAttr('checked');
  $('#EMR_pr_IGD_SNlamawaktu2').val('');
  EMR_pr_IGD_HalamanNext.disabled = true;
  EMR_pr_IGD_HalamanNext.classList.add('white');
  EMR_pr_IGD_HalamanNext.classList.remove('green');
});
$('#EMR_pr_IGD_RbtnSNsetiap2').click(function() {
  if(document.getElementById('EMR_pr_IGD_ststsetiapselamaapa2').value == 'tidak')
  {
    $('#EMR_pr_IGD_ststsetiapselamaapa2').val('ada');
    $('#EMR_pr_IGD_setiapselamaapa2').toggleClass('collapse');
  }
  $('#EMR_pr_IGD_SNlamawaktu').val('');
  $('#EMR_pr_IGD_RbtnSNselama1').removeAttr('checked');
  $('#EMR_pr_IGD_RbtnSNselama2').removeAttr('checked');
  $('#EMR_pr_IGD_SNlamawaktu2').val('');
  EMR_pr_IGD_HalamanNext.disabled = true;
  EMR_pr_IGD_HalamanNext.classList.add('white');
  EMR_pr_IGD_HalamanNext.classList.remove('green');
});
$('#EMR_pr_IGD_RbtnSNsetiap3').click(function() {
  if(document.getElementById('EMR_pr_IGD_ststsetiapselamaapa2').value == 'tidak')
  {
    $('#EMR_pr_IGD_ststsetiapselamaapa2').val('ada');
    $('#EMR_pr_IGD_setiapselamaapa2').toggleClass('collapse');
  }
  $('#EMR_pr_IGD_SNlamawaktu').val('');
  $('#EMR_pr_IGD_RbtnSNselama1').removeAttr('checked');
  $('#EMR_pr_IGD_RbtnSNselama2').removeAttr('checked');
  $('#EMR_pr_IGD_SNlamawaktu2').val('');
  EMR_pr_IGD_HalamanNext.disabled = true;
  EMR_pr_IGD_HalamanNext.classList.add('white');
  EMR_pr_IGD_HalamanNext.classList.remove('green');
});
$('#EMR_pr_IGD_RbtnSNselama1').click(function() {
  halaman4 = 'Ya';
  EMR_pr_IGD_HalamanNext.disabled = false;
  EMR_pr_IGD_HalamanNext.classList.add('green');
  EMR_pr_IGD_HalamanNext.classList.remove('white');
  $('#EMR_pr_IGD_SNlamawaktu2').val('');
});
$('#EMR_pr_IGD_RbtnSNselama2').click(function() {
  halaman4 = 'Ya';
  EMR_pr_IGD_HalamanNext.disabled = false;
  EMR_pr_IGD_HalamanNext.classList.add('green');
  EMR_pr_IGD_HalamanNext.classList.remove('white');
  $('#EMR_pr_IGD_SNlamawaktu2').val('');
});
$('#EMR_pr_IGD_SNlamawaktu').keyup(function() {
    if($(this).val() !='')
    {
      EMR_pr_IGD_HalamanNext.disabled = true;
      EMR_pr_IGD_HalamanNext.classList.add('white');
      EMR_pr_IGD_HalamanNext.classList.remove('green');
      $('#EMR_pr_IGD_RbtnSNsetiap1').removeAttr('checked');
      $('#EMR_pr_IGD_RbtnSNsetiap2').removeAttr('checked');
      $('#EMR_pr_IGD_RbtnSNsetiap3').removeAttr('checked');
      if(document.getElementById('EMR_pr_IGD_ststsetiapselamaapa2').value == 'tidak')
      {
        $('#EMR_pr_IGD_ststsetiapselamaapa2').val('ada');
        $('#EMR_pr_IGD_setiapselamaapa2').toggleClass('collapse');
      }
      $('#EMR_pr_IGD_RbtnSNselama1').removeAttr('checked');
      $('#EMR_pr_IGD_RbtnSNselama2').removeAttr('checked');
      $('#EMR_pr_IGD_SNlamawaktu2').val('');
    }
    else
    {
      EMR_pr_IGD_HalamanNext.disabled = true;
      EMR_pr_IGD_HalamanNext.classList.add('white');
      EMR_pr_IGD_HalamanNext.classList.remove('green');
      $('#EMR_pr_IGD_ststsetiapselamaapa2').val('tidak');
      $('#EMR_pr_IGD_setiapselamaapa2').toggleClass('collapse');
      $('#EMR_pr_IGD_RbtnSNselama1').removeAttr('checked');
      $('#EMR_pr_IGD_RbtnSNselama2').removeAttr('checked');
      $('#EMR_pr_IGD_SNlamawaktu2').val('');
    }
});
$('#EMR_pr_IGD_SNlamawaktu2').keyup(function() {
    if($(this).val() !='')
    {
      halaman4 = 'Ya';
      EMR_pr_IGD_HalamanNext.disabled = false;
      EMR_pr_IGD_HalamanNext.classList.add('green');
      EMR_pr_IGD_HalamanNext.classList.remove('white');
      $('#EMR_pr_IGD_RbtnSNselama1').removeAttr('checked');
      $('#EMR_pr_IGD_RbtnSNselama2').removeAttr('checked');
    }
    else
    {
      EMR_pr_IGD_HalamanNext.disabled = true;
      EMR_pr_IGD_HalamanNext.classList.add('white');
      EMR_pr_IGD_HalamanNext.classList.remove('green');
      $('#EMR_pr_IGD_RbtnSNselama1').removeAttr('checked');
      $('#EMR_pr_IGD_RbtnSNselama2').removeAttr('checked');
    }
});
//Pertanyaan Nyeri 3 hal 5 END

$('#EMR_pr_IGD_SN1Next').click(function() {
  $('#EMR_pr_IGD_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_pr_IGD_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_pr_IGD_SN3_'+ halSN +'').toggleClass('collapse');
  halSN++;
  $('#EMR_pr_IGD_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_pr_IGD_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_pr_IGD_SN3_'+ halSN +'').toggleClass('collapse');
  if(halSN == 1 && sn1 == '')
  {
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
  if(halSN == 2 && sn2 == '')
  {
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
  if(halSN == 3 && sn3 == '')
  {
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
  if(halSN == 4 && sn4 == '')
  {
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
  if(halSN == 5)
  {
    EMR_pr_IGD_SN1Next.disabled = true;
    EMR_pr_IGD_SN1Next.classList.add('white');
    EMR_pr_IGD_SN1Next.classList.remove('yellow');
  }
  if(halSN == 2)
  {
    EMR_pr_IGD_SN1Back.disabled = false;
    EMR_pr_IGD_SN1Back.classList.add('yellow');
    EMR_pr_IGD_SN1Back.classList.remove('white');
  }
});
$('#EMR_pr_IGD_SN1Back').click(function() {
  $('#EMR_pr_IGD_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_pr_IGD_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_pr_IGD_SN3_'+ halSN +'').toggleClass('collapse');
  halSN--;
  $('#EMR_pr_IGD_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_pr_IGD_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_pr_IGD_SN3_'+ halSN +'').toggleClass('collapse');
  if(halSN == 1)
  {
    EMR_pr_IGD_SN1Back.disabled = true;
    EMR_pr_IGD_SN1Back.classList.add('white');
    EMR_pr_IGD_SN1Back.classList.remove('yellow');
  }
  if(sn2 == ''|| sn3 == '' || sn4 =='' || sn5 == '')
  {
    EMR_pr_IGD_SN1Next.disabled = false;
    EMR_pr_IGD_SN1Next.classList.add('yellow');
    EMR_pr_IGD_SN1Next.classList.remove('green');
  }
});
// END NYERI

//START JATUH
var risiko_jatuh = 0;
var tampungRJ1 = 0;
var tampungRJ2 = 0;
var tampungRJ3 = 0;
$("input[name='EMR_pr_IGD_P3_RJ']").click(function() {
  if($("input[name='EMR_pr_IGD_P3_RJ']:checked").val() == 'Ya')
  {
    document.getElementById('EMR_pr_IGD_P3_RJatuhShow').classList.remove('collapse');
  }
  else
  {
    document.getElementById('EMR_pr_IGD_P3_RJatuhShow').classList.add('collapse');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']").click(function() {
  if($("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val() == 0)
  {
    document.getElementById('EMR_pr_IGD_P3_RJGeriartri_AShow').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_P3_RJGeriartri_A21').checked = true;
    document.getElementById('EMR_pr_IGD_P3_RJGeriartri_A22').checked = false;
  }
  else
  {
    document.getElementById('EMR_pr_IGD_P3_RJGeriartri_AShow').classList.add('collapse');
  }
});
$("input[name='EMR_pr_IGD_P3_RJBayi_A']").click(function() {
  tampungRJ1 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJBayi_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_D']:checked").val());
  risiko_jatuh = tampungRJ1 + (+$("input[name='EMR_pr_IGD_P3_RJBayi_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_F']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_G']:checked").val());
  if(risiko_jatuh < 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJBayi_B']").click(function() {
  tampungRJ1 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJBayi_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_D']:checked").val());
  risiko_jatuh = tampungRJ1 + (+$("input[name='EMR_pr_IGD_P3_RJBayi_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_F']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_G']:checked").val());
  if(risiko_jatuh < 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJBayi_C']").click(function() {
  tampungRJ1 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJBayi_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_D']:checked").val());
  risiko_jatuh = tampungRJ1 + (+$("input[name='EMR_pr_IGD_P3_RJBayi_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_F']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_G']:checked").val());
  if(risiko_jatuh < 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJBayi_D']").click(function() {
  tampungRJ1 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJBayi_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_D']:checked").val());
  risiko_jatuh = tampungRJ1 + (+$("input[name='EMR_pr_IGD_P3_RJBayi_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_F']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_G']:checked").val());
  if(risiko_jatuh < 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJBayi_E']").click(function() {
  tampungRJ1 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJBayi_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_D']:checked").val());
  risiko_jatuh = tampungRJ1 + (+$("input[name='EMR_pr_IGD_P3_RJBayi_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_F']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_G']:checked").val());
  if(risiko_jatuh < 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJBayi_F']").click(function() {
  tampungRJ1 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJBayi_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_D']:checked").val());
  risiko_jatuh = tampungRJ1 + (+$("input[name='EMR_pr_IGD_P3_RJBayi_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_F']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_G']:checked").val());
  if(risiko_jatuh < 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJBayi_G']").click(function() {
  tampungRJ1 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJBayi_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_D']:checked").val());
  risiko_jatuh = tampungRJ1 + (+$("input[name='EMR_pr_IGD_P3_RJBayi_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_F']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJBayi_G']:checked").val());
  if(risiko_jatuh < 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 12 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJMorse_A']").click(function() {
  risiko_jatuh = 0;
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJMorse_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_D']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_F']:checked").val());
  if(risiko_jatuh <= 24 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Tidak berisiko");
    $('#EMR_pr_IGD_FungTindakan').html("Tidak ada tindakan");
    $('#EMR_pr_IGD_FungTindakan_text').val("Tidak ada tindakan");
  }
  else if(risiko_jatuh < 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko sedang");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko sedang");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJMorse_B']").click(function() {
  risiko_jatuh = 0;
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJMorse_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_D']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_F']:checked").val());
  if(risiko_jatuh <= 24 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Tidak berisiko");
    $('#EMR_pr_IGD_FungTindakan').html("Tidak ada tindakan");
    $('#EMR_pr_IGD_FungTindakan_text').val("Tidak ada tindakan");
  }
  else if(risiko_jatuh < 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko sedang");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko sedang");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJMorse_C']").click(function() {
  risiko_jatuh = 0;
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJMorse_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_D']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_F']:checked").val());
  if(risiko_jatuh <= 24 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Tidak berisiko");
    $('#EMR_pr_IGD_FungTindakan').html("Tidak ada tindakan");
    $('#EMR_pr_IGD_FungTindakan_text').val("Tidak ada tindakan");
  }
  else if(risiko_jatuh < 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko sedang");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko sedang");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJMorse_D']").click(function() {
  risiko_jatuh = 0;
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJMorse_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_D']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_F']:checked").val());
  if(risiko_jatuh <= 24 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Tidak berisiko");
    $('#EMR_pr_IGD_FungTindakan').html("Tidak ada tindakan");
    $('#EMR_pr_IGD_FungTindakan_text').val("Tidak ada tindakan");
  }
  else if(risiko_jatuh < 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko sedang");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko sedang");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJMorse_E']").click(function() {
  risiko_jatuh = 0;
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJMorse_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_D']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_F']:checked").val());
  if(risiko_jatuh <= 24 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Tidak berisiko");
    $('#EMR_pr_IGD_FungTindakan').html("Tidak ada tindakan");
    $('#EMR_pr_IGD_FungTindakan_text').val("Tidak ada tindakan");
  }
  else if(risiko_jatuh < 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko sedang");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko sedang");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJMorse_F']").click(function() {
  risiko_jatuh = 0;
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJMorse_A']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_B']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_C']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_D']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJMorse_F']:checked").val());
  if(risiko_jatuh <= 24 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Tidak berisiko");
    $('#EMR_pr_IGD_FungTindakan').html("Tidak ada tindakan");
    $('#EMR_pr_IGD_FungTindakan_text').val("Tidak ada tindakan");
  }
  else if(risiko_jatuh < 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko sedang");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko sedang");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 45 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']").click(function() {
  tampungRJ1 = 0;
  tampungRJ2 = 0;
  tampungRJ3 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']:checked").val());
  tampungRJ2 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']:checked").val());
  tampungRJ3 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']:checked").val());
  if(tampungRJ3 < 3)
  {
    tampungRJ3 = 0;
  }
  else
  {
    tampungRJ3 = 7;
  }
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']:checked").val()) + tampungRJ1 + tampungRJ2 + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']:checked").val()) + tampungRJ3;
  $('#as').val($("input[name='EMR_pr_IGD_P3_RJMorse_D']:checked").val());
  if(risiko_jatuh < 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']").click(function() {
  tampungRJ1 = 0;
  tampungRJ2 = 0;
  tampungRJ3 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']:checked").val());
  tampungRJ2 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']:checked").val());
  tampungRJ3 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']:checked").val());
  if(tampungRJ3 < 3)
  {
    tampungRJ3 = 0;
  }
  else
  {
    tampungRJ3 = 7;
  }
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']:checked").val()) + tampungRJ1 + tampungRJ2 + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']:checked").val()) + tampungRJ3;
  if(risiko_jatuh < 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']").click(function() {
  tampungRJ1 = 0;
  tampungRJ2 = 0;
  tampungRJ3 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']:checked").val());
  tampungRJ2 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']:checked").val());
  tampungRJ3 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']:checked").val());
  if(tampungRJ3 < 3)
  {
    tampungRJ3 = 0;
  }
  else
  {
    tampungRJ3 = 7;
  }
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']:checked").val()) + tampungRJ1 + tampungRJ2 + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']:checked").val()) + tampungRJ3;
  if(risiko_jatuh < 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']").click(function() {
  tampungRJ1 = 0;
  tampungRJ2 = 0;
  tampungRJ3 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']:checked").val());
  tampungRJ2 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']:checked").val());
  tampungRJ3 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']:checked").val());
  if(tampungRJ3 < 3)
  {
    tampungRJ3 = 0;
  }
  else
  {
    tampungRJ3 = 7;
  }
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']:checked").val()) + tampungRJ1 + tampungRJ2 + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']:checked").val()) + tampungRJ3;
  if(risiko_jatuh < 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']").click(function() {
  tampungRJ1 = 0;
  tampungRJ2 = 0;
  tampungRJ3 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']:checked").val());
  tampungRJ2 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']:checked").val());
  tampungRJ3 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']:checked").val());
  if(tampungRJ3 < 3)
  {
    tampungRJ3 = 0;
  }
  else
  {
    tampungRJ3 = 7;
  }
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']:checked").val()) + tampungRJ1 + tampungRJ2 + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']:checked").val()) + tampungRJ3;
  if(risiko_jatuh < 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']").click(function() {
  tampungRJ1 = 0;
  tampungRJ2 = 0;
  tampungRJ3 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']:checked").val());
  tampungRJ2 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']:checked").val());
  tampungRJ3 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']:checked").val());
  if(tampungRJ3 < 3)
  {
    tampungRJ3 = 0;
  }
  else
  {
    tampungRJ3 = 7;
  }
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']:checked").val()) + tampungRJ1 + tampungRJ2 + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']:checked").val()) + tampungRJ3;
  if(risiko_jatuh < 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']").click(function() {
  tampungRJ1 = 0;
  tampungRJ2 = 0;
  tampungRJ3 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']:checked").val());
  tampungRJ2 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']:checked").val());
  tampungRJ3 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']:checked").val());
  if(tampungRJ3 < 3)
  {
    tampungRJ3 = 0;
  }
  else
  {
    tampungRJ3 = 7;
  }
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']:checked").val()) + tampungRJ1 + tampungRJ2 + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']:checked").val()) + tampungRJ3;
  if(risiko_jatuh < 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']").click(function() {
  tampungRJ1 = 0;
  tampungRJ2 = 0;
  tampungRJ3 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']:checked").val());
  tampungRJ2 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']:checked").val());
  tampungRJ3 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']:checked").val());
  if(tampungRJ3 < 3)
  {
    tampungRJ3 = 0;
  }
  else
  {
    tampungRJ3 = 7;
  }
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']:checked").val()) + tampungRJ1 + tampungRJ2 + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']:checked").val()) + tampungRJ3;
  if(risiko_jatuh < 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']").click(function() {
  tampungRJ1 = 0;
  tampungRJ2 = 0;
  tampungRJ3 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']:checked").val());
  tampungRJ2 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']:checked").val());
  tampungRJ3 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']:checked").val());
  if(tampungRJ3 < 3)
  {
    tampungRJ3 = 0;
  }
  else
  {
    tampungRJ3 = 7;
  }
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']:checked").val()) + tampungRJ1 + tampungRJ2 + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']:checked").val()) + tampungRJ3;
  if(risiko_jatuh < 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']").click(function() {
  tampungRJ1 = 0;
  tampungRJ2 = 0;
  tampungRJ3 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']:checked").val());
  tampungRJ2 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']:checked").val());
  tampungRJ3 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']:checked").val());
  if(tampungRJ3 < 3)
  {
    tampungRJ3 = 0;
  }
  else
  {
    tampungRJ3 = 7;
  }
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']:checked").val()) + tampungRJ1 + tampungRJ2 + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']:checked").val()) + tampungRJ3;
  if(risiko_jatuh < 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']").click(function() {
  tampungRJ1 = 0;
  tampungRJ2 = 0;
  tampungRJ3 = 0;
  risiko_jatuh = 0;
  tampungRJ1 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_B3']:checked").val());
  tampungRJ2 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C2']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_C3']:checked").val());
  tampungRJ3 = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_E']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_F']:checked").val());
  if(tampungRJ3 < 3)
  {
    tampungRJ3 = 0;
  }
  else
  {
    tampungRJ3 = 7;
  }
  risiko_jatuh = (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A1']:checked").val()) + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_A2']:checked").val()) + tampungRJ1 + tampungRJ2 + (+$("input[name='EMR_pr_IGD_P3_RJGeriartri_D']:checked").val()) + tampungRJ3;
  if(risiko_jatuh < 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html("Risiko rendah");
    $('#EMR_pr_IGD_FungHasil_text').val("Risiko rendah");
    $('#EMR_pr_IGD_FungTindakan').html("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
    $('#EMR_pr_IGD_FungTindakan_text').val("</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh");
  }
  else if(risiko_jatuh >= 9 )
  {
    $('#EMR_pr_IGD_FungHasil').html('Risiko tinggi');
    $('#EMR_pr_IGD_FungHasil_text').val('Risiko ttinggi');
    $('#EMR_pr_IGD_FungTindakan').html('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
    $('#EMR_pr_IGD_FungTindakan_text').val('</br>1.Memastikan tempat tidur/brankard dalam posisi roda terkunci</br>2.Pagar sisi tempat tidur/brankard dalam posisi berdiri/terpasang</br>3.Lingkungan bebas dari alat yang tidak digunakan</br>4.Berikan penjelasan kepada pasien & keluarga tentang pencegahan jatuh</br>5.Pastikan pasien memiliki stiker penanda risiko tinggi jatuh pada gelang identitas dan tanda kewaspadaan pada panel informasi pasien');
  }
});
//END JATUH

var P3_beratbadan = document.getElementById('EMR_pr_IGD_P3_beratbadan');
var P3_tinggibadan = document.getElementById('EMR_pr_IGD_P3_tinggibadan');
var P3_Nilai_BMI = document.getElementById('EMR_pr_IGD_P3_Nilai_BMI');
var P3_Kategori_BMI = document.getElementById('EMR_pr_IGD_P3_Kategori_BMI');

$('#EMR_pr_IGD_P3_beratbadan').keyup(function() {
  var tinggibd = P3_tinggibadan.value/100;
  if(P3_beratbadan.value != '' && P3_tinggibadan.value != '')
  {
    var Nilai_BMI2 = P3_beratbadan.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    P3_Nilai_BMI.innerHTML = Nilai_BMI2.toFixed(2) + " " + satuanBMI;

    if(Nilai_BMI2 < 18.5)
    {
      P3_Kategori_BMI.innerHTML = "Underweight";
    }
    else if(Nilai_BMI2 < 23)
    {
      P3_Kategori_BMI.innerHTML = "Normo Weight";
    }
    else if(Nilai_BMI2 < 27)
    {
      P3_Kategori_BMI.innerHTML = "Over Weight";
    }
    else if(Nilai_BMI2 >= 27)
    {
      P3_Kategori_BMI.innerHTML = "Obese";
    }
  }
});
$('#EMR_pr_IGD_P3_tinggibadan').keyup(function() {
  var tinggibd = P3_tinggibadan.value/100;
  var pr_umur = document.getElementById('EMR_pr_IGD_Umur').value;
  var pr_ideal = '';
  if(document.getElementById('EMR_pr_IGD_Umur').value >= 13)
  {
    pr_ideal = P3_tinggibadan.value - (100*0.9);
    document.getElementById('EMR_pr_IGD_P3_BBIdeal_BMI').innerHTML = pr_ideal +' Kg';
    document.getElementById('EMR_pr_IGD_P3_BBIdeal_BMItxtss').value = pr_ideal;
  }
  else if(document.getElementById('EMR_pr_IGD_Umur').value >= 1 && document.getElementById('EMR_pr_IGD_Umur').value < 13)
  {
    pr_ideal = (2 * pr_umur)+8;
    document.getElementById('EMR_pr_IGD_P3_BBIdeal_BMI').innerHTML = pr_ideal +' Kg';
    document.getElementById('EMR_pr_IGD_P3_BBIdeal_BMItxtss').value = pr_ideal;
  }
  else
  {
    pr_ideal = (0.5 * pr_umur)+4;
    document.getElementById('EMR_pr_IGD_P3_BBIdeal_BMI').innerHTML = pr_ideal +' Kg';
    document.getElementById('EMR_pr_IGD_P3_BBIdeal_BMItxtss').value = pr_ideal;
  }

  if(P3_beratbadan.value != '' && P3_tinggibadan.value != '')
  {
    var Nilai_BMI2 = P3_beratbadan.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    P3_Nilai_BMI.innerHTML = Nilai_BMI2.toFixed(2) + " " + satuanBMI;

    if(Nilai_BMI2 < 18.5)
    {
      P3_Kategori_BMI.innerHTML = "Underweight";
    }
    else if(Nilai_BMI2 < 23)
    {
      P3_Kategori_BMI.innerHTML = "Normo Weight";
    }
    else if(Nilai_BMI2 < 27)
    {
      P3_Kategori_BMI.innerHTML = "Over Weight";
    }
    else if(Nilai_BMI2 >= 27)
    {
      P3_Kategori_BMI.innerHTML = "Obese";
    }
  }
});
$("input[name='EMR_pr_IGD_P3_Gastrointestinal']").click(function() {
  if($("input[name='EMR_pr_IGD_P3_Gastrointestinal']:checked").val() == 'Ada gangguan')
  {
    document.getElementById('EMR_pr_IGD_P3_Gastrointestinalshow1').classList.remove('collapse');
  }
  else
  {
    $("input[name='EMR_pr_IGD_P3_GastrointestinalY']").removeAttr('checked');
    $("input[name='EMR_pr_IGD_P3_GastrointestinalYkurang']").removeAttr('checked');
    $("input[name='EMR_pr_IGD_P3_GastrointestinalYkurangtxt']").val('');
    $("input[name='EMR_pr_IGD_P3_GastrointestinalYlebih']").removeAttr('checked');
    document.getElementById('EMR_pr_IGD_P3_Gastrointestinalshow1').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_P3_Gastrointestinalshow2').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_P3_Gastrointestinalshow3').classList.add('collapse');
  }
});
$("input[name='EMR_pr_IGD_P3_GastrointestinalY']").click(function() {
  if($("input[name='EMR_pr_IGD_P3_GastrointestinalY']:checked").val() == '< 2 minggu dengan gejala : ')
  {
    $("input[name='EMR_pr_IGD_P3_GastrointestinalYkurang']").removeAttr('checked');
    $("input[name='EMR_pr_IGD_P3_GastrointestinalYkurangtxt']").val('');
    document.getElementById('EMR_pr_IGD_P3_Gastrointestinalshow3').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_P3_Gastrointestinalshow2').classList.remove('collapse');
  }
  else
  {
    $("input[name='EMR_pr_IGD_P3_GastrointestinalYlebih']").removeAttr('checked');
    $("input[name='EMR_pr_IGD_P3_GastrointestinalYlebihtxt']").val('');
    document.getElementById('EMR_pr_IGD_P3_Gastrointestinalshow2').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_P3_Gastrointestinalshow3').classList.remove('collapse');
  }
});
$("input[name='EMR_pr_IGD_P3_Asupan']").click(function() {
  if($("input[name='EMR_pr_IGD_P3_Asupan']:checked").val() == 'Ada perubahan')
  {
    $("input[name='EMR_pr_IGD_P3_AsupanY']").removeAttr('checked');
    document.getElementById('EMR_pr_IGD_P3_Asupanshow1').classList.remove('collapse');
  }
  else
  {
    $("input[name='EMR_pr_IGD_P3_AsupanY']").removeAttr('checked');
    document.getElementById('EMR_pr_IGD_P3_Asupanshow1').classList.add('collapse');
  }
});
$("input[name='EMR_pr_IGD_P3_Penyakit']").click(function() {
  if($("input[name='EMR_pr_IGD_P3_Penyakit']:checked").val() == 'Ada')
  {
    document.getElementById('EMR_pr_IGD_P3_Penyakitshow1').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_P3_RJatuhShow').classList.remove('collapse');
  }
  else
  {
    document.getElementById('EMR_pr_IGD_P3_Penyakitshow1').classList.add('collapse');
  }
});

$("input[name='EMR_dr_IGD_P1_Mental']").click(function() {
  if($("input[name='EMR_dr_IGD_P1_Mental']:checked").val() == 'Ada gangguan')
  {
    document.getElementById('EMR_dr_IGD_P1_Mentalshow').classList.remove('collapse');
  }
  else
  {
    document.getElementById('EMR_dr_IGD_P1_Mentalshow').classList.add('collapse');
  }
});
$("#EMR_dr_IGD_P1_MentalRestrain1").click(function() {
  $('#EMR_dr_IGD_P1_MentalRestrain1Show').toggleClass('collapse');
});
$("#EMR_dr_IGD_P1_MentalRestrain2").click(function() {
  $('#EMR_dr_IGD_P1_MentalRestrain2Show').toggleClass('collapse');
});

$('#EMR_pr_IGD_P3_btnsimpan').click(function() {
  var gastro = '';
  if($("input[name='EMR_pr_IGD_P3_GastrointestinalY'].checked").val() == ' < dari 2 minggu dengan gejala : ')
  {
    gastro = $("input[name='EMR_pr_IGD_P3_GastrointestinalYkurang'].checked").val();
  }
  else {
    gastro = $("input[name='EMR_pr_IGD_P3_GastrointestinalYlebih'].checked").val();
  }
  var asupan = '';
  if($("input[name='EMR_pr_IGD_P3_Asupan'].checked").val() == 'Ada perubahan')
  {
    asupan = ' Asupan makan '+$("input[name='EMR_pr_IGD_P3_AsupanY'].checked").val();
  }
  else {
    asupan = 'Tidak ada perubahan asupan makan';
  }
  var penyakit = '';
  if($("input[name='EMR_pr_IGD_P3_Penyakit'].checked").val() == 'Ada')
  {
    penyakit = $("input[name='EMR_pr_IGD_P3_Penyakit1'].checked").val();
  }
  else {
    penyakit = 'Tidak ada risiko';
  }
  var perilaku = '';
  if($("input[name='EMR_dr_IGD_P1_Mental'].checked").val() == 'Ada gangguan')
  {
    perilaku = 'Ada gangguan perilaku </br>'+
                'Hasil Observasi : '+$("input[name='EMR_dr_IGD_P1_MentalObservasi'].checked").val()+'</br>'+
                'Hasil Pertimbangan klinis : '+$("input[name='EMR_dr_IGD_P1_MentalPertimbanganklinis'].checked").val()+'</br>'+
                'Penilaian & Order dokter : '+$("input[name='EMR_dr_IGD_P1_MentalPertimbanganklinis'].checked").val()+'</br>';
  }
  else {
    perilaku = 'Tidak ada gangguan';
  }
  var form_data = {
    EMR_pr_IGD_P3_KajiFungsi : 'Aktifitas sehari-hari : ' + $("input[name='EMR_pr_IGD_KajiFungsi'].checked").val() +' '+ $('#EMR_pr_IGD_kajiFungsiBantu').val(),
    EMR_pr_IGD_P3_RJstat : $("input[name='EMR_pr_IGD_P3_RJ']:checked").val(),
    EMR_pr_IGD_P3_SkorRJ : risiko_jatuh,
    EMR_pr_IGD_P3_SkalaRJ : $('#EMR_pr_IGD_FungHasil_text').val(),
    EMR_pr_IGD_P3_RJKet : $('#EMR_pr_IGD_FungTindakan_text').val(),
    EMR_pr_IGD_P3_Dekubitus : 'Pasien '+$("input[name='EMR_pr_IGD_DekubitasA]'").val()+'</br>'+
                              'Pasien '+$("input[name='EMR_pr_IGD_DekubitasB]'").val()+'</br>'+
                              'Pasien '+$("input[name='EMR_pr_IGD_DekubitasC]'").val()+'</br>'+
                              'Pasien '+$("input[name='EMR_pr_IGD_DekubitasD]'").val()+'</br>'+
                              'Pasien '+$("input[name='EMR_pr_IGD_DekubitasE]'").val(),
    EMR_pr_IGD_P3_beratbadan : $('#EMR_pr_IGD_P3_beratbadan').val(),
    EMR_pr_IGD_P3_tinggibadan : $('#EMR_pr_IGD_P3_tinggibadan').val(),
    EMR_pr_IGD_P3_Nilai : $('#EMR_pr_IGD_P3_Nilai_BMItxtss').val(),
    EMR_pr_IGD_P3_Kategori : $('#EMR_pr_IGD_P3_Kategori_BMItxtss').val(),
    EMR_pr_IGD_P3_BBIdeal : $('#EMR_pr_IGD_P3_BBIdeal_BMItxtss').val(),
    EMR_pr_IGD_P3_NILAI_Z : $("input[name='EMR_pr_IGD_P3_stsGizi'].checked").val(),
    EMR_pr_IGD_P3_Gastro : $("input[name='EMR_pr_IGD_P3_Gastrointestinal'].checked").val() +' gastrointestinal'+ $("input[name='EMR_pr_IGD_P3_GastrointestinalY'].checked").val()+' '+ gastro,
    EMR_pr_IGD_P3_Asupanmakan : asupan,
    EMR_pr_IGD_P3_RisikoSakit : penyakit,
    EMR_pr_IGD_P3_Tindakan : $("textarea[name ='EMR_dr_IGD_P1_Dietisientxt']").val(),
    EMR_pr_IGD_P3_Prilaku : perilaku,
    IGD_idpemeriksaan : $('#EMR_pr_IGD_idper').val()
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_pr_P3",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if(msg == 'TERUJI')
      {
        $('#modalLompatMenuIGD').modal('show');
      }
    }
  });
  return false;
});

//================================= END MENU 3 =================================
//==============================================================================
//================================ START MENU 4 ================================

var P4_hal= 1;
var P4_hal2 = 0;
var P4_halaman1 = 'Ya';
var P4_halaman2 = 'Ya';
var P4_halaman3 = 'Ya';
var DT_sistem = 'Belum';

$('#EMR_pr_IGD_P4_btnmenu').click(function() {
  document.getElementById('EMR_pr_IGD_P4_btnmenu').disabled = true;
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_IGD_statverHal').value = 'P4';
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});
$('#EMR_pr_IGD_P4_HalamanNext').click(function() {
  P4_hal++;
  P4_hal2++;

  if(P4_hal== 2)
  {
    if(P4_halaman2 == 'Tidak')
    {
      EMR_pr_IGD_P4_HalamanNext.disabled = true;
      EMR_pr_IGD_P4_HalamanNext.classList.add('white');
      EMR_pr_IGD_P4_HalamanNext.classList.remove('green');
    }
  }
  else if(P4_hal== 3)
  {
    EMR_pr_IGD_btnselanjutnyaPerawat.disabled = false;
    EMR_pr_IGD_btnselanjutnyaPerawat.classList.add('green');
    EMR_pr_IGD_btnselanjutnyaPerawat.classList.remove('white');
    if(P4_halaman3 == 'Tidak')
    {
      EMR_pr_IGD_P4_HalamanNext.disabled = true;
      EMR_pr_IGD_P4_HalamanNext.classList.add('white');
      EMR_pr_IGD_P4_HalamanNext.classList.remove('green');
    }
  }

  $('#EMR_pr_IGD_P4_Halaman'+ P4_hal+'').toggleClass('collapse');
  $('#EMR_pr_IGD_P4_Halaman'+ P4_hal2 +'').toggleClass('collapse');

  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').html(P4_hal2);
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').toggleClass('white');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').toggleClass('green');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').toggleClass('col-md-10');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').toggleClass('col-md-1');
  if(P4_hal== 2)
  {
    $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal+'').html('2. Tindakan');
  }
  else if(P4_hal== 3)
  {
    $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal+'').html('3. Verifikasi Data');
  }
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal+'').toggleClass('green');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal+'').toggleClass('white');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal+'').toggleClass('col-md-1');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal+'').toggleClass('col-md-10');

  if(P4_hal== 2)
  {
    EMR_pr_IGD_P4_HalamanBack.disabled = false;
    EMR_pr_IGD_P4_HalamanBack.classList.remove('white');
    EMR_pr_IGD_P4_HalamanBack.classList.add('green');
  }
});
$('#EMR_pr_IGD_P4_HalamanBack').click(function() {
  $('#EMR_pr_IGD_P4_Halaman'+ P4_hal+'').toggleClass('collapse');
  $('#EMR_pr_IGD_P4_Halaman'+ P4_hal2 +'').toggleClass('collapse');

  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal+'').html(P4_hal);
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal+'').toggleClass('white');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal+'').toggleClass('green');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal+'').toggleClass('col-md-10');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal+'').toggleClass('col-md-1');
  if(P4_hal2 == 1)
  {
    $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').html('1. Masalah Keperawatan');
  }
  else if(P4_hal2 == 2)
  {
    $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').html('2. Tindakan');
  }
  else if(P4_hal2 == 3)
  {
    $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').html('3. Verifikasi Data');
  }
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').toggleClass('green');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').toggleClass('white');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').toggleClass('col-md-1');
  $('#EMR_pr_IGD_P4_btnHalaman'+ P4_hal2 +'').toggleClass('col-md-10');

  P4_hal--;
  P4_hal2--;

  if(P4_hal== 1)
  {
    EMR_pr_IGD_P4_HalamanBack.disabled = true;
    EMR_pr_IGD_P4_HalamanBack.classList.add('white');
    EMR_pr_IGD_P4_HalamanBack.classList.remove('green');
    if(P4_halaman1 == 'Ya')
    {
      EMR_pr_IGD_P4_HalamanNext.disabled = false;
      EMR_pr_IGD_P4_HalamanNext.classList.add('green');
      EMR_pr_IGD_P4_HalamanNext.classList.remove('white');
    }
  }
  if(P4_hal== 2)
  {
    if(P4_halaman2 == 'Ya')
    {
      EMR_pr_IGD_P4_HalamanNext.disabled = false;
      EMR_pr_IGD_P4_HalamanNext.classList.add('green');
      EMR_pr_IGD_P4_HalamanNext.classList.remove('white');
    }
  }
  if(P4_hal== 3)
  {
    if(P4_halaman3 == 'Ya')
    {
      EMR_pr_IGD_P4_HalamanNext.disabled = false;
      EMR_pr_IGD_P4_HalamanNext.classList.add('green');
      EMR_pr_IGD_P4_HalamanNext.classList.remove('white');
    }
  }
});

$('#EMR_pr_IGD_Sistem').change(function(){
  if(document.getElementById('EMR_pr_IGD_Sistem').value == 'Breathing')
  {
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.add('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.add('collapse');
    DT_sistem = 'Breathing';
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.remove('collapse');
  }
  if(document.getElementById('EMR_pr_IGD_Sistem').value == 'Blood')
  {
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.add('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.add('collapse');
    DT_sistem = 'Blood';
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.remove('collapse');
  }
  if(document.getElementById('EMR_pr_IGD_Sistem').value == 'Brain')
  {
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.add('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.add('collapse');
    DT_sistem = 'Brain';
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.remove('collapse');
  }
  if(document.getElementById('EMR_pr_IGD_Sistem').value == 'Bladder')
  {
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.add('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.add('collapse');
    DT_sistem = 'Bladder';
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.remove('collapse');
  }
  if(document.getElementById('EMR_pr_IGD_Sistem').value == 'Bowl')
  {
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.add('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.add('collapse');
    DT_sistem = 'Bowl';
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.remove('collapse');
  }
  if(document.getElementById('EMR_pr_IGD_Sistem').value == 'Bone')
  {
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.add('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.add('collapse');
    DT_sistem = 'Bone';
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.remove('collapse');
  }
  if(document.getElementById('EMR_pr_IGD_Sistem').value == 'Exposure')
  {
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.add('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.add('collapse');
    DT_sistem = 'Exposure';
    document.getElementById('EMR_pr_IGD_D_'+DT_sistem).classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_'+DT_sistem).classList.remove('collapse');
  }
})
$('#EMR_pr_IGD_Diagnosa_Breathing').change(function(){
  if(document.getElementById('EMR_pr_IGD_Diagnosa_Breathing').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_D_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_D_Breathing').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Diagnosa_Breathing').value = '';
  }
});
$('#EMR_pr_IGD_Diagnosa_Blood').change(function(){
  if(document.getElementById('EMR_pr_IGD_Diagnosa_Blood').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_D_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_D_Blood').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Diagnosa_Blood').value = '';
  }
});
$('#EMR_pr_IGD_Diagnosa_Brain').change(function(){
  if(document.getElementById('EMR_pr_IGD_Diagnosa_Brain').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_D_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_D_Brain').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Diagnosa_Brain').value = '';
  }
});
$('#EMR_pr_IGD_Diagnosa_Bladder').change(function(){
  if(document.getElementById('EMR_pr_IGD_Diagnosa_Bladder').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_D_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_D_Bladder').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Diagnosa_Bladder').value = '';
  }
});
$('#EMR_pr_IGD_Diagnosa_Bowl').change(function(){
  if(document.getElementById('EMR_pr_IGD_Diagnosa_Bowl').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_D_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_D_Bowl').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Diagnosa_Bowl').value = '';
  }
});
$('#EMR_pr_IGD_Diagnosa_Bone').change(function(){
  if(document.getElementById('EMR_pr_IGD_Diagnosa_Bone').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_D_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_D_Bone').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Diagnosa_Bone').value = '';
  }
});
$('#EMR_pr_IGD_Diagnosa_Exposure').change(function(){
  if(document.getElementById('EMR_pr_IGD_Diagnosa_Exposure').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_D_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_D_Exposure').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Diagnosa_Exposure').value = '';
  }
});
$('#EMR_pr_IGD_Tindakan_Breathing').change(function(){
  if(document.getElementById('EMR_pr_IGD_Tindakan_Breathing').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_T_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_Breathing').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Tindakan_Breathing').value = '';
  }
});
$('#EMR_pr_IGD_Tindakan_Blood').change(function(){
  if(document.getElementById('EMR_pr_IGD_Tindakan_Blood').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_T_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_Blood').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Tindakan_Blood').value = '';
  }
});
$('#EMR_pr_IGD_Tindakan_Brain').change(function(){
  if(document.getElementById('EMR_pr_IGD_Tindakan_Brain').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_T_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_Brain').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Tindakan_Brain').value = '';
  }
});
$('#EMR_pr_IGD_Tindakan_Bladder').change(function(){
  if(document.getElementById('EMR_pr_IGD_Tindakan_Bladder').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_T_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_Bladder').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Tindakan_Bladder').value = '';
  }
});
$('#EMR_pr_IGD_Tindakan_Bowl').change(function(){
  if(document.getElementById('EMR_pr_IGD_Tindakan_Bowl').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_T_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_Bowl').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Tindakan_Bowl').value = '';
  }
});
$('#EMR_pr_IGD_Tindakan_Bone').change(function(){
  if(document.getElementById('EMR_pr_IGD_Tindakan_Bone').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_T_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_Bone').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Tindakan_Bone').value = '';
  }
});
$('#EMR_pr_IGD_Tindakan_Exposure').change(function(){
  if(document.getElementById('EMR_pr_IGD_Tindakan_Exposure').value == 'Tambah')
  {
    document.getElementById('EMR_pr_IGD_T_input').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_Exposure').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Tindakan_Exposure').value = '';
  }
});

$('#EMR_pr_IGD_T_btnChange').click(function(){
  document.getElementById('EMR_pr_IGD_T_input').classList.add('collapse');
  document.getElementById('EMR_pr_IGD_T_'+$('#EMR_pr_IGD_Sistem').val()).classList.remove('collapse');
});
$('#EMR_pr_IGD_D_btnChange').click(function(){
  document.getElementById('EMR_pr_IGD_D_input').classList.add('collapse');
  document.getElementById('EMR_pr_IGD_D_'+$('#EMR_pr_IGD_Sistem').val()).classList.remove('collapse');
});


function simpanDT(){
  var form_data = {
    IGD_no : $('#EMR_pr_IGD_InputcekisiDT').val(),
    IGD_idper : $('#EMR_pr_IGD_idper').val(),
    IGD_jam : $('#EMR_pr_IGD_JamDT').val(),
    IGD_sistem : $('#EMR_pr_IGD_sistemDT').val(),
    IGD_diagnosaInput : $('#EMR_pr_IGD_Diagnosa_Input').val(),
    IGD_diagnosa : $('#EMR_pr_IGD_diagnosaDT').val(),
    IGD_tindakanInput : $('#EMR_pr_IGD_Tindakan_Input').val(),
    IGD_tindakan : $('#EMR_pr_IGD_tindakanDT').val()
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_pr_P4",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if(msg == 'TERUJI')
      {
        $('#modalLompatMenuIGD').modal('show');
      }
    }
  });
  return false;
}

var before = $('#EMR_pr_IGD_DTtableshow');
var TampungDiagnosa = '';
var TampungTindakan = '';
var TampungSistem = '';

$('#EMR_pr_IGD_btnTambahDNT').click(function() {
  TampungSistem = document.getElementById('EMR_pr_IGD_Sistem').value;

  if(TampungSistem != 'Belum')
  {
    if(document.getElementById('EMR_pr_IGD_Diagnosa_'+ TampungSistem).value == '' && document.getElementById('EMR_pr_IGD_Diagnosa_Input').value == '')
    {
      alert('Diagnosa belum anda isi');
    }
    if(document.getElementById('EMR_pr_IGD_Diagnosa_'+ TampungSistem).value == '')
    {
      TampungDiagnosa = document.getElementById('EMR_pr_IGD_Diagnosa_Input').value;
    }
    if(document.getElementById('EMR_pr_IGD_Diagnosa_Input').value == '')
    {
      TampungDiagnosa = document.getElementById('EMR_pr_IGD_Diagnosa_'+ TampungSistem).value;
    }

    if(document.getElementById('EMR_pr_IGD_Tindakan_'+ TampungSistem).value == '' && document.getElementById('EMR_pr_IGD_Tindakan_Input').value == '')
    {
      alert('Tindakan belum anda isi');
    }
    if(document.getElementById('EMR_pr_IGD_Tindakan_'+ TampungSistem).value == '')
    {
      TampungTindakan = document.getElementById('EMR_pr_IGD_Tindakan_Input').value;
    }
    if(document.getElementById('EMR_pr_IGD_Tindakan_Input').value == '')
    {
      TampungTindakan = document.getElementById('EMR_pr_IGD_Tindakan_'+ TampungSistem).value;
    }
  }
  else {
    alert('Anda belum memilih Sistem');
  }

  if(TampungSistem != 'Belum' && TampungDiagnosa != '' && TampungTindakan != '')
  {
    if(document.getElementById('EMR_pr_IGD_InputcekisiDT').value == 0)
    {
      document.getElementById('EMR_pr_IGD_showtabelDT').classList.add('collapse');
    }

    document.getElementById('EMR_pr_IGD_sistemDT').value = TampungSistem;
    document.getElementById('EMR_pr_IGD_diagnosaDT').value = TampungDiagnosa;
    document.getElementById('EMR_pr_IGD_tindakanDT').value = TampungTindakan;

    simpanDT();

    /*
    var clone = $('#EMR_pr_IGD_DTtableatas').clone().find("input:text").val("").end().appendTo('#EMR_pr_IGD_DTtableatas').append(
      '<tr>'+
        '<td><center>'+ document.getElementById('EMR_pr_IGD_JamDT').value +'</center></td>'+
        '<td><center>'+ TampungSistem +'</center></td>'+
        '<td><center>'+ TampungDiagnosa +'</center></td>'+
        '<td><center>'+ TampungTindakan +'</center></td>'+
        '<input type="hidden" name="EMR_pr_IGD_hd_JamDT[]" id="EMR_pr_IGD_hd_JamDT[]" class="form-control"/>'+
        '<input type="hidden" name="EMR_pr_IGD_hd_SistemDT[]" id="EMR_pr_IGD_hd_SistemDT[]" class="form-control"/>'+
        '<input type="hidden" name="EMR_pr_IGD_hd_DiagnosaDT[]" id="EMR_pr_IGD_hd_DiagnosaDT[]" class="form-control"/>'+
        '<input type="hidden" name="EMR_pr_IGD_hd_TindakanDT[]" id="EMR_pr_IGD_hd_TindakanDT[]" class="form-control"/>'+
      '</tr>');
    before.before(clone);

    document.getElementById('EMR_pr_IGD_Sistem').value = 'Belum';
    document.getElementById('EMR_pr_IGD_D_Belum').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_D_'+ TampungSistem).classList.add('collapse');
    document.getElementById('EMR_pr_IGD_D_input').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Diagnosa_Input').value = '';
    document.getElementById('EMR_pr_IGD_T_Belum').classList.remove('collapse');
    document.getElementById('EMR_pr_IGD_T_'+ TampungSistem).classList.add('collapse');
    document.getElementById('EMR_pr_IGD_T_input').classList.add('collapse');
    document.getElementById('EMR_pr_IGD_Tindakan_Input').value = '';
    */
  }
});

//================================= END MENU 4 =================================
//==============================================================================
//================================ START MENU 5 ================================

var P5_hal= 1;
var P5_hal2 = 0;
var P5_halaman1 = 'Ya';
var P5_halaman2 = 'Ya';

$('#EMR_pr_IGD_P5_btnmenu').click(function() {
  document.getElementById('EMR_pr_IGD_P5_btnmenu').disabled = true;
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_IGD_statverHal').value = 'P5';
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});
$('#EMR_pr_IGD_P5_HalamanNext').click(function() {
  P5_hal++;
  P5_hal2++;

  if(P5_hal== 2)
  {
    if(P5_halaman2 == 'Tidak')
    {
      EMR_pr_IGD_P5_HalamanNext.disabled = true;
      EMR_pr_IGD_P5_HalamanNext.classList.add('white');
      EMR_pr_IGD_P5_HalamanNext.classList.remove('green');
    }
  }
  else if(P5_hal== 3)
  {
    EMR_pr_IGD_btnselanjutnyaPerawat.disabled = false;
    EMR_pr_IGD_btnselanjutnyaPerawat.classList.add('green');
    EMR_pr_IGD_btnselanjutnyaPerawat.classList.remove('white');
    if(P5_halaman3 == 'Tidak')
    {
      EMR_pr_IGD_P5_HalamanNext.disabled = true;
      EMR_pr_IGD_P5_HalamanNext.classList.add('white');
      EMR_pr_IGD_P5_HalamanNext.classList.remove('green');
    }
  }

  $('#EMR_pr_IGD_P5_Halaman'+ P5_hal+'').toggleClass('collapse');
  $('#EMR_pr_IGD_P5_Halaman'+ P5_hal2 +'').toggleClass('collapse');

  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal2 +'').html(P5_hal2);
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal2 +'').toggleClass('white');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal2 +'').toggleClass('green');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal2 +'').toggleClass('col-md-10');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal2 +'').toggleClass('col-md-2');
  if(P5_hal== 2)
  {
    $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal+'').html('2. Verifikasi Data');
  }
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal+'').toggleClass('green');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal+'').toggleClass('white');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal+'').toggleClass('col-md-2');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal+'').toggleClass('col-md-10');

  if(P5_hal== 2)
  {
    EMR_pr_IGD_P5_HalamanBack.disabled = false;
    EMR_pr_IGD_P5_HalamanBack.classList.remove('white');
    EMR_pr_IGD_P5_HalamanBack.classList.add('green');
  }
});
$('#EMR_pr_IGD_P5_HalamanBack').click(function() {
  $('#EMR_pr_IGD_P5_Halaman'+ P5_hal+'').toggleClass('collapse');
  $('#EMR_pr_IGD_P5_Halaman'+ P5_hal2 +'').toggleClass('collapse');

  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal+'').html(P5_hal);
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal+'').toggleClass('white');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal+'').toggleClass('green');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal+'').toggleClass('col-md-10');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal+'').toggleClass('col-md-2');
  if(P5_hal2 == 1)
  {
    $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal2 +'').html('1. Penatalaksana');
  }
  else if(P5_hal2 == 2)
  {
    $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal2 +'').html('2. Verifikasi Data');
  }
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal2 +'').toggleClass('green');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal2 +'').toggleClass('white');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal2 +'').toggleClass('col-md-2');
  $('#EMR_pr_IGD_P5_btnHalaman'+ P5_hal2 +'').toggleClass('col-md-10');

  P5_hal--;
  P5_hal2--;

  if(P5_hal== 1)
  {
    EMR_pr_IGD_P5_HalamanBack.disabled = true;
    EMR_pr_IGD_P5_HalamanBack.classList.add('white');
    EMR_pr_IGD_P5_HalamanBack.classList.remove('green');
    if(P5_halaman1 == 'Ya')
    {
      EMR_pr_IGD_P5_HalamanNext.disabled = false;
      EMR_pr_IGD_P5_HalamanNext.classList.add('green');
      EMR_pr_IGD_P5_HalamanNext.classList.remove('white');
    }
  }
  if(P5_hal== 2)
  {
    if(P5_halaman2 == 'Ya')
    {
      EMR_pr_IGD_P5_HalamanNext.disabled = false;
      EMR_pr_IGD_P5_HalamanNext.classList.add('green');
      EMR_pr_IGD_P5_HalamanNext.classList.remove('white');
    }
  }
});

//================================= END MENU 5 =================================
//==============================================================================
//================================ START MENU 6 ================================

var P6_hal= 1;
var P6_hal2 = 0;
var P6_halaman1 = 'Ya';
var P6_halaman2 = 'Ya';

$('#EMR_pr_IGD_P6_btnmenu').click(function() {
  document.getElementById('EMR_pr_IGD_P6_btnmenu').disabled = true;
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_IGD_statverHal').value = 'P6';
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_IGD_'+document.getElementById('EMR_pr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});
$('#EMR_pr_IGD_P6_HalamanNext').click(function() {
  P6_hal++;
  P6_hal2++;

  if(P6_hal== 2)
  {
    if(P6_halaman2 == 'Tidak')
    {
      EMR_pr_IGD_P6_HalamanNext.disabled = true;
      EMR_pr_IGD_P6_HalamanNext.classList.add('white');
      EMR_pr_IGD_P6_HalamanNext.classList.remove('green');
    }
  }
  else if(P6_hal== 3)
  {
    EMR_pr_IGD_btnselanjutnyaPerawat.disabled = false;
    EMR_pr_IGD_btnselanjutnyaPerawat.classList.add('green');
    EMR_pr_IGD_btnselanjutnyaPerawat.classList.remove('white');
    if(P6_halaman3 == 'Tidak')
    {
      EMR_pr_IGD_P6_HalamanNext.disabled = true;
      EMR_pr_IGD_P6_HalamanNext.classList.add('white');
      EMR_pr_IGD_P6_HalamanNext.classList.remove('green');
    }
  }

  $('#EMR_pr_IGD_P6_Halaman'+ P6_hal+'').toggleClass('collapse');
  $('#EMR_pr_IGD_P6_Halaman'+ P6_hal2 +'').toggleClass('collapse');

  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal2 +'').html(P6_hal2);
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('white');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('green');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('col-md-10');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('col-md-2');
  if(P6_hal== 2)
  {
    $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal+'').html('2. Verifikasi Data');
  }
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('green');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('white');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('col-md-2');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('col-md-10');

  if(P6_hal== 2)
  {
    EMR_pr_IGD_P6_HalamanBack.disabled = false;
    EMR_pr_IGD_P6_HalamanBack.classList.remove('white');
    EMR_pr_IGD_P6_HalamanBack.classList.add('green');
  }
});
$('#EMR_pr_IGD_P6_HalamanBack').click(function() {
  $('#EMR_pr_IGD_P6_Halaman'+ P6_hal+'').toggleClass('collapse');
  $('#EMR_pr_IGD_P6_Halaman'+ P6_hal2 +'').toggleClass('collapse');

  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal+'').html(P6_hal);
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('white');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('green');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('col-md-10');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('col-md-2');
  if(P6_hal2 == 1)
  {
    $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal2 +'').html('1. Evaluasi');
  }
  else if(P6_hal2 == 2)
  {
    $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal2 +'').html('2. Verifikasi Data');
  }
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('green');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('white');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('col-md-2');
  $('#EMR_pr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('col-md-10');

  P6_hal--;
  P6_hal2--;

  if(P6_hal== 1)
  {
    EMR_pr_IGD_P6_HalamanBack.disabled = true;
    EMR_pr_IGD_P6_HalamanBack.classList.add('white');
    EMR_pr_IGD_P6_HalamanBack.classList.remove('green');
    if(P6_halaman1 == 'Ya')
    {
      EMR_pr_IGD_P6_HalamanNext.disabled = false;
      EMR_pr_IGD_P6_HalamanNext.classList.add('green');
      EMR_pr_IGD_P6_HalamanNext.classList.remove('white');
    }
  }
  if(P6_hal== 2)
  {
    if(P6_halaman2 == 'Ya')
    {
      EMR_pr_IGD_P6_HalamanNext.disabled = false;
      EMR_pr_IGD_P6_HalamanNext.classList.add('green');
      EMR_pr_IGD_P6_HalamanNext.classList.remove('white');
    }
  }
});

var _beratbadan = document.getElementById('EMR_pr_IGD_P6_beratbadan');
var _tinggibadan = document.getElementById('EMR_pr_IGD_P6_tinggibadan');
var _Nilai_BMI = document.getElementById('EMR_pr_IGD_P6_Nilai_BMI');
var _Kategori_BMI = document.getElementById('EMR_pr_IGD_P6_Kategori_BMI');

$('#EMR_pr_IGD_P6_beratbadan').keyup(function() {
  var tinggibd = _tinggibadan.value/100;
  if(_beratbadan.value != '' && _tinggibadan.value != '')
  {
    var Nilai_BMI2 = _beratbadan.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    _Nilai_BMI.innerHTML = Nilai_BMI2.toFixed(2) + " " + satuanBMI;

    if(Nilai_BMI2 < 18.5)
    {
      _Kategori_BMI.innerHTML = "Underweight";
    }
    else if(Nilai_BMI2 < 23)
    {
      _Kategori_BMI.innerHTML = "Normo Weight";
    }
    else if(Nilai_BMI2 < 27)
    {
      _Kategori_BMI.innerHTML = "Over Weight";
    }
    else if(Nilai_BMI2 >= 27)
    {
      _Kategori_BMI.innerHTML = "Obese";
    }
  }
});

$('#EMR_pr_IGD_P6_tinggibadan').keyup(function() {
  var tinggibd = _tinggibadan.value/100;
  if(_beratbadan.value != '' && _tinggibadan.value != '')
  {
    var Nilai_BMI2 = _beratbadan.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    _Nilai_BMI.innerHTML = Nilai_BMI2.toFixed(2) + " " + satuanBMI;

    if(Nilai_BMI2 < 18.5)
    {
      _Kategori_BMI.innerHTML = "Underweight";
    }
    else if(Nilai_BMI2 < 23)
    {
      _Kategori_BMI.innerHTML = "Normo Weight";
    }
    else if(Nilai_BMI2 < 27)
    {
      _Kategori_BMI.innerHTML = "Over Weight";
    }
    else if(Nilai_BMI2 >= 27)
    {
      _Kategori_BMI.innerHTML = "Obese";
    }
  }
});

function simpanOb(){
  var form_data = {
    IGD_idper : $('#EMR_pr_IGD_idper').val(),
    IGD_jam : $('#EMR_pr_IGD_JamOb').val(),
    IGD_no : $('#EMR_pr_IGD_InputcekisiOb').val(),
    IGD_Observasi : '<div class="panel panel-default">'+
                      '<div class="panel-heading bg-white bg-font-white">'+
                        '<h4 class="panel-title">'+
                          '<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_AOb'+ $('#EMR_pr_IGD_InputcekisiOb').val() +'" aria-expanded="false"> SOAP (Klik untuk melihat) </a>'+
                        '</h4>'+
                      '</div>'+
                      '<div id="collapse_AOb'+ $('#EMR_pr_IGD_InputcekisiOb').val() +'" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">'+
                        '<div class="panel-body bg-white bg-font-white">'+
                          '<center>'+
                            '<h5><b>Subyektif : </b></h5>'+
                              $('#EMR_pr_IGD_SubyektifOb').val()+'</br>'+
                            '<h5><b>Obyektif : </b></h5>'+
                              '<table class="col-md-12" border="0">'+
                                '<tr>'+
                                  '<td style="width:250px">Keadaan Umum : '+$("input[name ='EMR_pr_IGD_P6_KeadaanUmum']:checked").val()+'</td>'+
                                  '<td>GCS E/V/M : '+$('#EMR_pr_IGD_P6_GCSe').val()+' / '+$('#EMR_pr_IGD_P6_GCSv').val()+' / '+$('#EMR_pr_IGD_P6_GCSm').val()+'</td>'+
                                '</tr>'+
                                '<tr>'+
                                  '<td>Kesadaran : '+$('#EMR_pr_IGD_P6_Kesadaran').val()+'</td>'+
                                  '<td>Suhu tubuh : '+$('#EMR_pr_IGD_P6_suhutubuh').val()+' <b>&deg;C</b> </td>'+
                                '</tr>'+
                                '<tr>'+
                                  '<td>Sistolik/Diastolik : '+$('#EMR_pr_IGD_P6_TDSistolik').val()+' / '+$('#EMR_pr_IGD_P6_TDDiastolik').val()+' <b>mmHG</b>'+'</td>'+
                                  '<td>SpO2 : '+$('#EMR_pr_IGD_P6_SpO2').val()+' <b>%</b> </td>'+
                                '</tr>'+
                                '<tr>'+
                                  '<td>Nadi : '+$('#EMR_pr_IGD_P6_nadi').val()+' <b>x/mnt</b> ('+$("input[name='EMR_pr_IGD_P6_NadiCH']:checked").val()+') </td>'+
                                  '<td>Berat badan : '+$('#EMR_pr_IGD_P6_beratbadan').val()+' <b>Kg</b> </td>'+
                                '</tr>'+
                                '<tr>'+
                                  '<td>Respiratory : '+$('#EMR_pr_IGD_P6_respiratory').val()+' <b>x/mnt</b> ('+$("input[name='EMR_pr_IGD_P6_RespiratoryCH']:checked").val()+') </td>'+
                                  '<td>Tinggi badan : '+$('#EMR_pr_IGD_P6_tinggibadan').val()+' <b>Cm</b> </td>'+
                                '</tr>'+
                                '<tr>'+
                                  '<td>Kategori BMI : '+$('#EMR_pr_IGD_P6_Kategori_BMI').html()+'</td>'+
                                  '<td>Nilai BMI : '+$('#EMR_pr_IGD_P6_Nilai_BMI').html()+'</td>'+
                                '</tr>'+
                              '</table>'+
                            '<h5><b>Assesment : </b></h5>'+
                              $('#EMR_pr_IGD_P6_A').val()+'</br>'+
                            '<h5><b>Plan : </b></h5>'+
                              $('#EMR_pr_IGD_PlanningOb').val()+
                          '</center>'+
                        '</div>'+
                      '</div>'+
                    '</div>',
    IGD_Oleh : $('#EMR_pr_IGD_olehOb').val()
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_P6",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if(msg == 'TERUJI')
      {
        $('#modalLompatMenuIGD').modal('show');
      }
    }
  });
  return false;
}

$('#EMR_pr_IGD_P6_btnsimpan').click(function(){
  simpanOb();
})

//================================= END MENU 6 =================================

$('#EMR_pr_IGD_btnChangePerPerawat').click(function() {
    EMR_pr_IGD_statver.value = "Perawat2";
    EMR_pr_IGD_userPerPerawat.value = "";
    EMR_pr_IGD_passPerPerawat.value = "";
    $('#EMR_pr_IGD_verPerPerawat').toggleClass('collapse');
    $('#EMR_pr_IGD_verPerPerawat2').toggleClass('collapse');
});
$('#EMR_pr_IGD_btnChangePerPerawat2').click(function() {
    EMR_pr_IGD_statver.value = "Perawat1";
    VerPassAsesmen.value = "";
    $('#EMR_pr_IGD_verPerPerawat').toggleClass('collapse');
    $('#EMR_pr_IGD_verPerPerawat2').toggleClass('collapse');
});
