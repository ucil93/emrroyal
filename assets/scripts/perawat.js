var skorNyeri = document.querySelector('#SkorNyeri');
var Gskor = document.querySelector('#Gskor');
var EMR_ASESMEN_PERAWAT_NilaiSN = document.getElementById('EMR_ASESMEN_PERAWAT_NilaiSN');
var EMR_ASESMEN_PERAWAT_btnGeserKiri = document.getElementById('EMR_ASESMEN_PERAWAT_btnGeserKiri');
var EMR_ASESMEN_PERAWAT_btnGeserKanan = document.getElementById('EMR_ASESMEN_PERAWAT_btnGeserKanan');
var EMR_ASESMEN_PERAWAT_GstsFrmSN = document.getElementById('EMR_ASESMEN_PERAWAT_GstsFrmSN');
var EMR_ASESMEN_PERAWAT_LokasiSN = document.getElementById('EMR_ASESMEN_PERAWAT_LokasiSN');
var EMR_ASESMEN_PERAWAT_btnBatalModalSN = document.getElementById('EMR_ASESMEN_PERAWAT_btnBatalModalSN');
var EMR_ASESMEN_PERAWAT_btnTanyaBack = document.getElementById('EMR_ASESMEN_PERAWAT_btnTanyaBack');
var EMR_ASESMEN_PERAWAT_btnTanyaNext = document.getElementById('EMR_ASESMEN_PERAWAT_btnTanyaNext');
var EMR_ASESMEN_PERAWAT_btnTanya1 = document.getElementById('EMR_ASESMEN_PERAWAT_btnTanya1');
var EMR_ASESMEN_PERAWAT_btnTanya2 = document.getElementById('EMR_ASESMEN_PERAWAT_btnTanya2');
var EMR_ASESMEN_PERAWAT_btnTanya3 = document.getElementById('EMR_ASESMEN_PERAWAT_btnTanya3');
var EMR_ASESMEN_PERAWAT_btnTanya4 = document.getElementById('EMR_ASESMEN_PERAWAT_btnTanya4');
var EMR_ASESMEN_PERAWAT_btnTanya5 = document.getElementById('EMR_ASESMEN_PERAWAT_btnTanya5');
var EMR_ASESMEN_PERAWAT_btnTanya6 = document.getElementById('EMR_ASESMEN_PERAWAT_btnTanya6');
var EMR_ASESMEN_PERAWAT_btnTanya7 = document.getElementById('EMR_ASESMEN_PERAWAT_btnTanya7');
var tekanandarah = document.getElementById('tekanandarah');
var nadi = document.getElementById('nadi');
var suhutubuh = document.getElementById('suhutubuh');
var respiratory = document.getElementById('respiratory');
var beratbadan = document.getElementById('beratbadan');
var tinggibadan = document.getElementById('tinggibadan');
var bmi = document.getElementById('bmi');
var EMR_ASESMEN_PERAWAT_HalamanBack = document.getElementById('EMR_ASESMEN_PERAWAT_HalamanBack');
var EMR_ASESMEN_PERAWAT_HalamanNext = document.getElementById('EMR_ASESMEN_PERAWAT_HalamanNext');
var EMR_ASESMEN_PERAWAT_btnHalaman1 = document.getElementById('EMR_ASESMEN_PERAWAT_btnHalaman1');
var EMR_ASESMEN_PERAWAT_btnHalaman2 = document.getElementById('EMR_ASESMEN_PERAWAT_btnHalaman2');
var EMR_ASESMEN_PERAWAT_btnHalaman3 = document.getElementById('EMR_ASESMEN_PERAWAT_btnHalaman3');
var EMR_ASESMEN_PERAWAT_btnHalaman4 = document.getElementById('EMR_ASESMEN_PERAWAT_btnHalaman4');
var EMR_ASESMEN_PERAWAT_btnHalaman5 = document.getElementById('EMR_ASESMEN_PERAWAT_btnHalaman5');
var EMR_ASESMEN_PERAWAT_RbtnAlergiOYA = document.getElementById('EMR_ASESMEN_PERAWAT_RbtnAlergiOYA');
var EMR_ASESMEN_PERAWAT_RbtnAlergiOTIDAK = document.getElementById('EMR_ASESMEN_PERAWAT_RbtnAlergiOTIDAK');
var alergiobat = document.getElementById('alergiobat');
var alergiobatstatus = document.getElementById('alergiobatstatus');
var Nilai_BMI = document.getElementById('Nilai_BMI');
var Kategori_BMI = document.getElementById('Kategori_BMI');
var beratbadan = document.getElementById('beratbadan');
var tinggibadan = document.getElementById('tinggibadan');
var alatbantu = document.getElementById('alatbantu');
var EMR_ASESMEN_PERAWAT_FungA1 = document.getElementById('EMR_ASESMEN_PERAWAT_FungA1');
var EMR_ASESMEN_PERAWAT_FungA2 = document.getElementById('EMR_ASESMEN_PERAWAT_FungA2');
var EMR_ASESMEN_PERAWAT_FungBYA = document.getElementById('EMR_ASESMEN_PERAWAT_FungBYA');
var EMR_ASESMEN_PERAWAT_FungBTD = document.getElementById('EMR_ASESMEN_PERAWAT_FungBTD');
var EMR_ASESMEN_PERAWAT_FungHasil = document.getElementById('EMR_ASESMEN_PERAWAT_FungHasil');
var EMR_ASESMEN_PERAWAT_FungTindakan = document.getElementById('EMR_ASESMEN_PERAWAT_FungTindakan');
var EMR_ASESMEN_PERAWAT_FungTindakanCb = document.getElementById('EMR_ASESMEN_PERAWAT_FungTindakanCb');
var EMR_ASESMEN_PERAWAT_FungNormal = document.getElementById('EMR_ASESMEN_PERAWAT_FungNormal');
var tindak2 = document.getElementById('tindak2');
var tindakSN = 0;
var halSN = 1;
var hal2SN = 0;
var tindak = 0;
var hal = 1;
var hal2 = 0;
var hala = "";
var halaman1 = 'Tidak';
var halaman2 = 'Tidak';
var halaman3 = 'Tidak';
var halaman4 = 'Tidak';
var halaman5 = 'Tidak';
var halaman = '';
var sn1 = '';
var sn2 = '';
var sn3 = '';
var sn4 = '';
var sn5 = '';
var sn6 = '';
var lergi = '';
var snV3 = '';

EMR_ASESMEN_PERAWAT_HalamanNext.onclick = function()
{
  hal++;
  hal2++;

  if(hal == 2)
  {
    if(halaman2 == 'Tidak')
    {
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    }
  }
  else if(hal == 3)
  {
    if(halaman3 == 'Tidak')
    {
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    }
  }
  else if(hal == 4)
  {
    if(halaman4 == 'Tidak')
    {
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    }
  }
  else if(hal == 5)
  {
    if(halaman5 == 'Tidak')
    {
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    }
  }

  $('#EMR_ASESMEN_PERAWAT_Halaman'+ hal +'').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_Halaman'+ hal2 +'').toggleClass('collapse');

  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html(hal2);
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('green');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('col-md-8');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('col-md-1');
  if(hal == 2)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').html('2. Pengkajian Fungsional');
  }
  else if(hal == 3)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').html('3. Skor Nyeri');
  }
  else if(hal == 4)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').html('4. Alergi & Catatan');
  }
  else if(hal == 5)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').html('5. Info Pengisian');
  }
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('green');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('col-md-1');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('col-md-8');

/*  if(hal == 5)
  {
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
  }
  else */
  if(hal == 2)
  {
    EMR_ASESMEN_PERAWAT_HalamanBack.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanBack.classList.remove('white');
    EMR_ASESMEN_PERAWAT_HalamanBack.classList.add('green');
  }
};

EMR_ASESMEN_PERAWAT_HalamanBack.onclick = function()
{
  $('#EMR_ASESMEN_PERAWAT_Halaman'+ hal +'').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_Halaman'+ hal2 +'').toggleClass('collapse');

  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').html(hal);
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('green');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('col-md-8');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('col-md-1');
  if(hal2 == 1)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html('1. Tanda Vital & Nutrisi');
  }
  else if(hal2 == 2)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html('2. Pengkajian Fungsional');
  }
  else if(hal2 == 3)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html('3. Skor Nyeri');
  }
  else if(hal2 == 4)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html('4. Alergi & Catatan');
  }
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('green');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('col-md-1');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('col-md-8');

  hal--;
  hal2--;

  if(hal == 1)
  {
    EMR_ASESMEN_PERAWAT_HalamanBack.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanBack.classList.add('white');
    EMR_ASESMEN_PERAWAT_HalamanBack.classList.remove('green');
    if(halaman1 == 'Ya')
    {
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    }
  }
  if(hal == 2)
  {
    if(halaman2 == 'Ya')
    {
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    }
  }
  if(hal == 3)
  {
    if(halaman3 == 'Ya')
    {
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    }
  }
  if(hal == 4)
  {
    if(halaman4 == 'Ya')
    {
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    }
  }
  /*
  else if(hal == 4)
  {
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  } */
}

//halaman 1 START
$('#tekanandarah').keyup(function() {
  if(tekanandarah.value != '')
  {
    halaman1 = 'Ya';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  }
  else
  {
    halaman1 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
  }
});

$('#nadi').keyup(function() {
  if(tekanandarah.value != '' && nadi.value != '' && suhutubuh.value != '' && respiratory.value != '' && beratbadan.value != '' && tinggibadan.value != '')
  {
    halaman1 = 'Ya';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  }
  else
  {
    halaman1 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
  }
});

$('#suhutubuh').keyup(function() {
  if(tekanandarah.value != '' && nadi.value != '' && suhutubuh.value != '' && respiratory.value != '' && beratbadan.value != '' && tinggibadan.value != '')
  {
    halaman1 = 'Ya';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  }
  else
  {
    halaman1 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
  }
});

$('#respiratory').keyup(function() {
  if(tekanandarah.value != '' && nadi.value != '' && suhutubuh.value != '' && respiratory.value != '' && beratbadan.value != '' && tinggibadan.value != '')
  {
    halaman1 = 'Ya';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  }
  else
  {
    halaman1 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
  }
});

$('#beratbadan').keyup(function() {
  var tinggibd = tinggibadan.value/100;
  if(beratbadan.value != '' && tinggibadan.value != '')
  {
    var Nilai_BMI2 = beratbadan.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    Nilai_BMI.innerHTML = Nilai_BMI2.toFixed(2) + " " + satuanBMI;

    if(Nilai_BMI2 < 18.5)
    {
      Kategori_BMI.innerHTML = "Underweight";
    }
    else if(Nilai_BMI2 < 23)
    {
      Kategori_BMI.innerHTML = "Normo Weight";
    }
    else if(Nilai_BMI2 < 27)
    {
      Kategori_BMI.innerHTML = "Over Weight";
    }
    else if(Nilai_BMI2 >= 27)
    {
      Kategori_BMI.innerHTML = "Obese";
    }
  }
  if(tekanandarah.value != '' && nadi.value != '' && suhutubuh.value != '' && respiratory.value != '' && beratbadan.value != '' && tinggibadan.value != '')
  {
    halaman1 = 'Ya';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  }
  else
  {
    halaman1 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
  }
});

$('#tinggibadan').keyup(function() {
  var tinggibd = tinggibadan.value/100;
  if(beratbadan.value != '' && tinggibadan.value != '')
  {
    var Nilai_BMI2 = beratbadan.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    Nilai_BMI.innerHTML = Nilai_BMI2.toFixed(2) + " " + satuanBMI;

    if(Nilai_BMI2 < 18.5)
    {
      Kategori_BMI.innerHTML = "Underweight";
    }
    else if(Nilai_BMI2 < 23)
    {
      Kategori_BMI.innerHTML = "Normo Weight";
    }
    else if(Nilai_BMI2 < 27)
    {
      Kategori_BMI.innerHTML = "Over Weight";
    }
    else if(Nilai_BMI2 >= 27)
    {
      Kategori_BMI.innerHTML = "Obese";
    }
  }
  if(tekanandarah.value != '' && nadi.value != '' && suhutubuh.value != '' && respiratory.value != '' && beratbadan.value != '' && tinggibadan.value != '')
  {
    halaman1 = 'Ya';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  }
  else
  {
    halaman1 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
  }
});
//Halaman 1 END

//Halaman 2 START
$('#EMR_ASESMEN_PERAWAT_FungNormal').click(function() {
  $('#EMR_ASESMEN_PERAWAT_FungAbnormal').toggleClass('collapse');
  if(EMR_ASESMEN_PERAWAT_FungNormal.checked == true)
  {
    halaman2 = 'Ya';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Tidak beresiko</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Tidak ada tindakan</b>";
    EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tidak";
    $('#EMR_ASESMEN_PERAWAT_FungTindakanCb').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_FungA1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_FungA2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_FungBYA').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_FungBTD').removeAttr('checked');
    $('#prothesis').val('');
    $('#cacattubuh').val('');
    $('#cacattubuh').val('');
    if(tindak > 0)
    {
      tindak = 0;
      $('#EMR_ASESMEN_PERAWAT_FungTindakan2').toggleClass('collapse');
      tindak2.value = tindak;
    }
  }
  else
  {
    halaman2 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
  }
});

$('#EMR_ASESMEN_PERAWAT_FungA1').click(function() {
  tindak = 0;
  if(EMR_ASESMEN_PERAWAT_FungA1.checked == true)
  {
    tindak = tindak + 1;
  }
  if(EMR_ASESMEN_PERAWAT_FungA1.checked == false)
  {
    tindak = tindak;
  }
  if(alatbantu.value != '')
  {
    tindak = tindak + 1;
  }
  if(EMR_ASESMEN_PERAWAT_FungBYA.checked == true)
  {
    tindak = tindak + 3;
  }
  if(tindak == 0)
  {
    halaman2 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Tidak beresiko</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Tidak ada tindakan</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tindakan")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakanCb").removeAttr('checked');
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tidak";
    }
  }
  else if (tindak > 0 && tindak < 4)
  {
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Risiko rendah</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Edukasi</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tidak")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tindakan";
    }
  }
  else if(tindak > 3)
  {
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Risiko tinggi</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Edukasi & pasang pita kuning</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tidak")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tindakan";
    }
  }
  tindak2.value = tindak;
});

$('#EMR_ASESMEN_PERAWAT_FungA2').click(function() {
  $("#alatbantu").toggleClass('collapse');
  $("#alatbantu").val('');
  if(EMR_ASESMEN_PERAWAT_FungA2.checked == true)
  {
    $("#alatbantu").focus();
  }
});

$('#EMR_ASESMEN_PERAWAT_FungBYA').click(function() {
  tindak = 0;
  if(EMR_ASESMEN_PERAWAT_FungA1.checked == true)
  {
    tindak = tindak + 1;
  }
  if(alatbantu.value != '')
  {
    tindak = tindak + 1;
  }
  if(EMR_ASESMEN_PERAWAT_FungBYA.checked == true)
  {
    tindak = tindak + 3;
  }
  if(tindak == 0)
  {
    halaman2 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Tidak beresiko</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Tidak ada tindakan</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tindakan")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakanCb").removeAttr('checked');
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tidak";
    }
  }
  else if (tindak > 0 && tindak < 4)
  {
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Risiko rendah</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Edukasi</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tidak")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tindakan";
    }
  }
  else if(tindak > 3)
  {
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Risiko tinggi</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Edukasi & pasang pita kuning</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tidak")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tindakan";
    }
  }
  tindak2.value = tindak;
});

$('#EMR_ASESMEN_PERAWAT_FungBTD').click(function() {
  tindak = 0;
  if(EMR_ASESMEN_PERAWAT_FungA1.checked == true)
  {
    tindak = tindak + 1;
  }
  if(alatbantu.value != '')
  {
    tindak = tindak + 1;
  }
  if(EMR_ASESMEN_PERAWAT_FungBYA.checked == true)
  {
    tindak = tindak + 3;
  }
  if(tindak == 0)
  {
    halaman2 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Tidak beresiko</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Tidak ada tindakan</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tindakan")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakanCb").removeAttr('checked');
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tidak";
    }
  }
  else if (tindak > 0 && tindak < 4)
  {
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Risiko rendah</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Edukasi</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tidak")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tindakan";
    }
  }
  else if(tindak > 3)
  {
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Risiko tinggi</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Edukasi & pasang pita kuning</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tidak")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tindakan";
    }
  }
  tindak2.value = tindak;
});

$("#alatbantu").focusout(function() {
  if(alatbantu.value == '')
  {
    alert("Alat bantu belum di isi, centang akan dihapus otomatis dan dianggap pasien tidak menggunakan Alat bantu");
    $('#EMR_ASESMEN_PERAWAT_FungA2').removeAttr('checked');
    $("#alatbantu").toggleClass('collapse');
  }
  tindak = 0;
  if(EMR_ASESMEN_PERAWAT_FungA1.checked == true)
  {
    tindak = tindak + 1;
  }
  if(alatbantu.value != '')
  {
    tindak = tindak + 1;
  }
  if(EMR_ASESMEN_PERAWAT_FungBYA.checked == true)
  {
    tindak = tindak + 3;
  }
  if(tindak == 0)
  {
    halaman2 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Tidak beresiko</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Tidak ada tindakan</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tindakan")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakanCb").removeAttr('checked');
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tidak";
    }
  }
  else if (tindak > 0 && tindak < 4)
  {
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Risiko rendah</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Edukasi</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tidak")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tindakan";
    }
  }
  else if(tindak > 3)
  {
    EMR_ASESMEN_PERAWAT_FungHasil.innerHTML = "<b> Risiko tinggi</b>";
    EMR_ASESMEN_PERAWAT_FungTindakan.innerHTML = "<b> Edukasi & pasang pita kuning</b>";
    if(EMR_ASESMEN_PERAWAT_FungTindakanCb.value == "tidak")
    {
      $("#EMR_ASESMEN_PERAWAT_FungTindakan2").toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_FungTindakanCb.value = "tindakan";
    }
  }
  tindak2.value = tindak;
});

$('#EMR_ASESMEN_PERAWAT_FungTindakanCb').click(function() {
  if(EMR_ASESMEN_PERAWAT_FungTindakanCb.checked == true)
  {
    halaman2 = 'Ya';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
  }
  else
  {
    halaman2 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
  }
});
//END Halaman 2

//START Halaman 3
$('#EMR_ASESMEN_PERAWAT_SN1Ada').click(function() {
  $('#EMR_ASESMEN_PERAWAT_SN1Takda').toggleClass('collapse');
  if(EMR_ASESMEN_PERAWAT_SN1Ada.checked == true)
  {
    halaman3 = 'Ya';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
    EMR_ASESMEN_PERAWAT_SN1Back.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Back.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Back.classList.remove('yellow');
    EMR_ASESMEN_PERAWAT_SkorNyeri.innerHTML = "<b> 0</b>";
    EMR_ASESMEN_PERAWAT_SkalaNyeri.innerHTML = "<b> Nyeri ringan sampai tidak nyeri</b>";
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSA1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSA2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSB1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSB2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSB3').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSC1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSC2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSD1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSD2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSD3').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSD4').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSE1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSE2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSE3').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSE4').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSF1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSF2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_NIPSF3').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCA1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCA2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCA3').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCB1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCB2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCB3').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCC1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCC2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCC3').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCD1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCD2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCD3').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCE1').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCE2').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN_FLACCE3').removeAttr('checked');
    $('#EMR_ASESMEN_PERAWAT_SN1_'+halSN).toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_SN1_1').toggleClass('collapse');
    halSN = 1;
    tindakSN = 0;
    sn1 = '';
    sn2 = '';
    sn3 = '';
    sn4 = '';
    sn5 = '';
    sn6 = '';
  }
  else
  {
    halaman3 = 'Tidak';
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
  }
});

// Skor Nyeri 1
$('#EMR_ASESMEN_PERAWAT_SN_NIPSA1').click(function() {
  if(sn1 == 1)
  {
    tindakSN = tindakSN - 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn1 = '0';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSA2').click(function() {
  if(sn1 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn1 = '1';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSB1').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSB2').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSB3').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSC1').click(function() {
  if(sn3 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn3 = '0';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSC2').click(function() {
  if(sn3 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn3 = '1';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSD1').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn4 = '0';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSD2').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn4 = '0';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSD3').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn4 = '1';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSD4').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn4 = '1';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSE1').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn5 = '0';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSE2').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn5 = '0';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSE3').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn5 = '1';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSE4').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn5 = '1';
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSF1').click(function() {
  if(sn6 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn6 = '0';
  halaman3 = 'Ya';
  EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSF2').click(function() {
  if(sn6 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn6 = '0';
  halaman3 = 'Ya';
  EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_NIPSF3').click(function() {
  if(sn6 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn6 = '1';
  halaman3 = 'Ya';
  EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

//Skor Nyeri 2
$('#EMR_ASESMEN_PERAWAT_SN_FLACCA1').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCA2').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCA3').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCB1').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCB2').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCB3').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCC1').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCC2').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCC3').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCD1').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCD2').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCD3').click(function() {
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
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCE1').click(function() {
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
  EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCE2').click(function() {
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
  EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_SN_FLACCE3').click(function() {
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
  EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASESMEN_PERAWAT_btnSN3A_1').click(function() {
  tindakSN = 0;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Tidak nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_1').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_1').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'A_1';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3A_2').click(function() {
  tindakSN = 2;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Sedikit nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_2').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_2').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'A_2';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3A_3').click(function() {
  tindakSN = 4;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Cukup nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_3').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_3').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'A_3';
});


$('#EMR_ASESMEN_PERAWAT_btnSN3A_4').click(function() {
  tindakSN = 6;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Lumayan nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_4').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_4').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'A_4';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3A_5').click(function() {
  tindakSN = 8;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Sangat nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_5').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_5').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'A_5';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3A_6').click(function() {
  tindakSN = 10;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Amat sangat nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_6').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3A_6').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'A_6';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3B_0').click(function() {
  tindakSN = 0;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Tidak nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_0').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_0').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'B_0';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3B_1').click(function() {
  tindakSN = 1;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Tidak nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_1').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_1').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'B_1';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3B_2').click(function() {
  tindakSN = 2;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Sedikit nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_2').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_2').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'B_2';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3B_3').click(function() {
  tindakSN = 3;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Sedikit nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_3').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_3').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'B_3';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3B_4').click(function() {
  tindakSN = 4;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Cukup nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_4').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_4').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'B_4';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3B_5').click(function() {
  tindakSN = 5;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Cukup nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_5').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_5').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'B_5';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3B_6').click(function() {
  tindakSN = 6;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Lumayan nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_6').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_6').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'B_6';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3B_7').click(function() {
  tindakSN = 7;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Lumayan nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_7').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_7').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'B_7';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3B_8').click(function() {
  tindakSN = 8;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Sangat nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_8').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_8').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'B_8';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3B_9').click(function() {
  tindakSN = 9;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Sangat nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_9').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_9').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'B_9';
});

$('#EMR_ASESMEN_PERAWAT_btnSN3B_10').click(function() {
  tindakSN = 10;
  $('#EMR_ASESMEN_PERAWAT_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASESMEN_PERAWAT_SkalaNyeri').html('<b> Amat sangat nyeri</b>');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_10').classList.add('green');
  document.getElementById('EMR_ASESMEN_PERAWAT_btnSN3B_10').classList.remove('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnSN3'+sn1).toggleClass('green');
  EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  sn1 = 'B_10';
});

$('#EMR_ASESMEN_PERAWAT_CbtnBerkurang1').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnBerkurang1').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});

$('#EMR_ASESMEN_PERAWAT_CbtnBerkurang2').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnBerkurang2').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});

$('#EMR_ASESMEN_PERAWAT_CbtnBerkurang3').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnBerkurang3').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});

$('#EMR_ASESMEN_PERAWAT_CbtnBerkurang4').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnBerkurang4').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});

$('#EMR_ASESMEN_PERAWAT_CbtnBerkurang5').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnBerkurang5').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});


$('#EMR_ASESMEN_PERAWAT_CbtnGambaran1').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnGambaran1').checked == true)
  {
    sn3 = sn3 + 1;
  }
  else
  {
    sn3 = sn3 - 1;
  }
  if(sn3 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});

$('#EMR_ASESMEN_PERAWAT_CbtnGambaran2').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnGambaran2').checked == true)
  {
    sn3 = sn3 + 1;
  }
  else
  {
    sn3 = sn3 - 1;
  }
  if(sn3 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});

$('#EMR_ASESMEN_PERAWAT_CbtnGambaran3').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnGambaran3').checked == true)
  {
    sn3 = sn3 + 1;
  }
  else
  {
    sn3 = sn3 - 1;
  }
  if(sn3 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});

$('#EMR_ASESMEN_PERAWAT_CbtnGambaran4').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnGambaran4').checked == true)
  {
    sn3 = sn3 + 1;
  }
  else
  {
    sn3 = sn3 - 1;
  }
  if(sn3 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {

    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});

$('#EMR_ASESMEN_PERAWAT_CbtnGambaran5').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnGambaran5').checked == true)
  {
    sn3 = sn3 + 1;
  }
  else
  {
    sn3 = sn3 - 1;
  }
  if(sn3 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {

    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});

$('#EMR_ASESMEN_PERAWAT_CbtnGambaran6').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnGambaran6').checked == true)
  {
    sn3 = sn3 + 1;
  }
  else
  {
    sn3 = sn3 - 1;
  }
  if(sn3 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {

    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});

$('#EMR_ASESMEN_PERAWAT_CbtnGambaran7').click(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_CbtnGambaran7').checked == true)
  {
    sn3 = sn3 + 1;
  }
  else
  {
    sn3 = sn3 - 1;
  }
  if(sn3 > 0)
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else
  {

    EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  }
});

$('#EMR_ASESMEN_PERAWAT_SNMenjalar').click(function() {
  $('#EMR_ASESMEN_PERAWAT_SNMenjalar2').toggleClass('collapse');
});

$('#EMR_ASESMEN_PERAWAT_RbtnSNsetiap1').click(function() {

    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('blue');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');

});
$('#EMR_ASESMEN_PERAWAT_RbtnSNsetiap2').click(function() {

    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('blue');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');

});
$('#EMR_ASESMEN_PERAWAT_RbtnSNsetiap3').click(function() {

    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('blue');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');

});
$('#EMR_ASESMEN_PERAWAT_SNlamawaktu').keyup(function() {
  if(document.getElementById('EMR_ASESMEN_PERAWAT_SNlamawaktu').value != '')
  {
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('blue');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
  }
});

$('#EMR_ASESMEN_PERAWAT_SN1Next').click(function() {
  $('#EMR_ASESMEN_PERAWAT_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_SN3_'+ halSN +'').toggleClass('collapse');
  halSN++;
  $('#EMR_ASESMEN_PERAWAT_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_SN3_'+ halSN +'').toggleClass('collapse');

  EMR_ASESMEN_PERAWAT_SN1Next.disabled = true;
  EMR_ASESMEN_PERAWAT_SN1Next.classList.add('white');
  EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('yellow');
  if(halSN == 2)
  {
    EMR_ASESMEN_PERAWAT_SN1Back.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Back.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Back.classList.remove('white');
    if(sn2 != '')
    {
      EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
      EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
      EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
    }
  }
  else if(halSN == 3 && sn3 != '')
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else if(halSN == 4 && sn4 != '')
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else if(halSN == 5 && sn5 != '')
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else if(halSN == 6 && sn6 != '')
  {
    EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
    EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
  }
});

$('#EMR_ASESMEN_PERAWAT_SN1Back').click(function() {
  $('#EMR_ASESMEN_PERAWAT_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_SN3_'+ halSN +'').toggleClass('collapse');
  halSN--;
  $('#EMR_ASESMEN_PERAWAT_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_SN3_'+ halSN +'').toggleClass('collapse');
  if(halSN == 1)
  {
    EMR_ASESMEN_PERAWAT_SN1Back.disabled = true;
    EMR_ASESMEN_PERAWAT_SN1Back.classList.add('white');
    EMR_ASESMEN_PERAWAT_SN1Back.classList.remove('yellow');
    if(sn1 != '')
    {
      EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
      EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
      EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
    }
  }
  else if(halSN == 2 && sn2 != '')
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else if(halSN == 3 && sn3 != '')
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else if(halSN == 4 && sn4 != '')
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
  else if(halSN == 5 && sn5 != '')
  {
    EMR_ASESMEN_PERAWAT_SN1Next.disabled = false;
    EMR_ASESMEN_PERAWAT_SN1Next.classList.add('yellow');
    EMR_ASESMEN_PERAWAT_SN1Next.classList.remove('white');
  }
});
//END Halaman 3

//START Halaman 4
$('#EMR_ASESMEN_PERAWAT_RbtnAlergiOYA').click(function() {
  if(alergiobatstatus.value == "Tidak")
  {
    $("#EMR_ASESMEN_PERAWAT_InputAlergiObat").toggleClass('collapse');
    $("#alergiobat").focus();
    $("#alergiobatstatus").val('Ya');
  }
  halaman4 = 'Ya';
  EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
});

$('#EMR_ASESMEN_PERAWAT_RbtnAlergiOTIDAK').click(function() {
  if(alergiobatstatus.value == "Ya")
  {
    $("#EMR_ASESMEN_PERAWAT_InputAlergiObat").toggleClass('collapse');
    $("#alergiobat").val('');
    $("#alergiobatstatus").val('Tidak');
  }
  halaman4 = 'Ya';
  EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
  EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
});

$("#alergiobat").focusout(function() {
  if(alergiobat.value =='')
  {
    alert("Alergi obat belum di isi, centang akan dihapus otomatis dan dianggap pasien tidak memiliki Alergi obat lain");
    $('#EMR_ASESMEN_PERAWAT_RbtnAlergiOYA').removeAttr('checked');
    EMR_ASESMEN_PERAWAT_RbtnAlergiOTIDAK.checked = true;
    $("#alergiobat").val('');
    $("#alergiobatstatus").val('Tidak');
    $("#EMR_ASESMEN_PERAWAT_InputAlergiObat").toggleClass('collapse');
  }
});
//END Halaman 4

//START SkorNyer
EMR_ASESMEN_PERAWAT_btnGeserKiri.onclick = function()
{
  if(EMR_ASESMEN_PERAWAT_GstsFrmSN.innerHTML == "Tubuh Depan")
  {
    $("#EMR_ASESMEN_PERAWAT_GFrmSN").attr("src",base_url + "assets/pages/img/tubuh/Tubuh Belakang.png");
    EMR_ASESMEN_PERAWAT_GstsFrmSN.innerHTML = "Tubuh Belakang";
  }
  else
  {
    $("#EMR_ASESMEN_PERAWAT_GFrmSN").attr("src",base_url + "assets/pages/img/tubuh/Tubuh Depan.png");
    EMR_ASESMEN_PERAWAT_GstsFrmSN.innerHTML = "Tubuh Depan";
  }
}
EMR_ASESMEN_PERAWAT_btnGeserKanan.onclick = function()
{
  if(EMR_ASESMEN_PERAWAT_GstsFrmSN.innerHTML == "Tubuh Depan")
  {
    $("#EMR_ASESMEN_PERAWAT_GFrmSN").attr("src",base_url + "assets/pages/img/tubuh/Tubuh Belakang.png");
    EMR_ASESMEN_PERAWAT_GstsFrmSN.innerHTML = "Tubuh Belakang";
  }
  else
  {
    $("#EMR_ASESMEN_PERAWAT_GFrmSN").attr("src",base_url + "assets/pages/img/tubuh/Tubuh Depan.png");
    EMR_ASESMEN_PERAWAT_GstsFrmSN.innerHTML = "Tubuh Depan";
  }
}

var urut = 1;
EMR_ASESMEN_PERAWAT_btnTanyaNext.onclick = function()
{
  urut++;
  if(urut == 2)
  {
    EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.remove('white');
    EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.add('blue');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya1').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya2').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya1.classList.add('white');
    EMR_ASESMEN_PERAWAT_btnTanya1.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya1.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.remove('white');
  }
  else if(urut == 3)
  {
    $('#EMR_ASESMEN_PERAWAT_FrmTanya2').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya3').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.add('white');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.remove('white');
  }
  else if(urut == 4)
  {
    $('#EMR_ASESMEN_PERAWAT_FrmTanya3').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya4').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.add('white');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.remove('white');
  }
  else if(urut == 5)
  {
    $('#EMR_ASESMEN_PERAWAT_FrmTanya4').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya5').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.add('white');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.remove('white');
  }
  else if(urut == 6)
  {
    $('#EMR_ASESMEN_PERAWAT_FrmTanya5').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya6').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.add('white');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.remove('white');
  }
  else if(urut == 7)
  {
    EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.add('white');
    EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.add('disabled');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya6').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya7').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya8').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya9').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.add('white');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya7.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya7.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya7.classList.remove('white');
  }
}

EMR_ASESMEN_PERAWAT_btnTanyaBack.onclick = function()
{
  urut--;
  if(urut == 1)
  {
    EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.add('white');
    EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.remove('blue');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya1').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya2').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya1.classList.remove('white');
    EMR_ASESMEN_PERAWAT_btnTanya1.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya1.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.add('white');
  }
  else if(urut == 2)
  {
    $('#EMR_ASESMEN_PERAWAT_FrmTanya2').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya3').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.remove('white');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya2.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.add('white');
  }
  else if(urut == 3)
  {
    $('#EMR_ASESMEN_PERAWAT_FrmTanya3').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya4').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.remove('white');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya3.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.add('white');
  }
  else if(urut == 4)
  {
    $('#EMR_ASESMEN_PERAWAT_FrmTanya4').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya5').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.remove('white');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya4.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.add('white');
  }
  else if(urut == 5)
  {
    $('#EMR_ASESMEN_PERAWAT_FrmTanya5').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya6').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.remove('white');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya5.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.add('white');
  }
  else if(urut == 6)
  {
    EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.remove('white');
    EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.add('blue');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya6').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya7').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya8').toggleClass('collapse');
    $('#EMR_ASESMEN_PERAWAT_FrmTanya9').toggleClass('collapse');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.remove('white');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.add('blue');
    EMR_ASESMEN_PERAWAT_btnTanya6.classList.add('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya7.classList.remove('disabled');
    EMR_ASESMEN_PERAWAT_btnTanya7.classList.remove('blue');
    EMR_ASESMEN_PERAWAT_btnTanya7.classList.add('white');
  }
}

/*
EMR_ASESMEN_PERAWAT_btnTanya1.onclick = fuinction()
{
  if(urut == 2)
  {

  }
}*/

EMR_ASESMEN_PERAWAT_btnBatalModalSN.onclick = function()
{
  $('#AsesmenModalSkorNyeri').modal('hide');
  $("#Gskor").attr("src",base_url + "assets/pages/img/Icon/emot01.png");
  EMR_ASESMEN_PERAWAT_LokasiSN.value = "";
  EMR_ASESMEN_PERAWAT_NilaiSN.innerHTML = "0";
  skorNyeri.value = 0;
  urut = 1;
  EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.add('disabled');
  EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.add('white');
  EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.remove('blue');
  EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.remove('disabled');
  EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.remove('white');
  EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.add('blue');
  $('#EMR_ASESMEN_PERAWAT_FrmTanya7').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_FrmTanya8').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_FrmTanya9').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_FrmTanya1').toggleClass('collapse');
  EMR_ASESMEN_PERAWAT_btnTanya1.classList.remove('white');
  EMR_ASESMEN_PERAWAT_btnTanya1.classList.add('blue');
  EMR_ASESMEN_PERAWAT_btnTanya1.classList.add('disabled');
  EMR_ASESMEN_PERAWAT_btnTanya7.classList.remove('disabled');
  EMR_ASESMEN_PERAWAT_btnTanya7.classList.remove('blue');
  EMR_ASESMEN_PERAWAT_btnTanya7.classList.add('white');
  $('#EMR_ASESMEN_PERAWAT_RbtnSNpindahYA').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_RbtnSNpindahTIDAK').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_RbtnSNakut').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_RbtnSNkronik').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_RbtnSNsetiap1').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_RbtnSNsetiap2').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_RbtnSNsetiap3').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnGambaran1').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnGambaran2').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnGambaran3').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnGambaran4').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnGambaran5').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnGambaran6').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnGambaran7').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnGambaran8').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_RbtnSNlama1').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_RbtnSNlama2').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnBertambah1').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnBertambah2').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnBertambah3').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnBertambah4').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnBertambah5').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnBerkurang1').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnBerkurang2').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnBerkurang3').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnBerkurang4').removeAttr('checked');
  $('#EMR_ASESMEN_PERAWAT_CbtnBerkurang5').removeAttr('checked');
}

skorNyeri.addEventListener('input', function()
{
  EMR_ASESMEN_PERAWAT_NilaiSN.innerHTML = skorNyeri.value;
  if(skorNyeri.value == "10" || skorNyeri.value == "9")
  {
    $("#Gskor").attr("src",base_url + "assets/pages/img/Icon/emot11.png");
  }
  else if(skorNyeri.value == "8" || skorNyeri.value == "7")
  {
    $("#Gskor").attr("src",base_url + "assets/pages/img/Icon/emot08.png");
  }
  else if(skorNyeri.value == "6" || skorNyeri.value == "5")
  {
    $("#Gskor").attr("src",base_url + "assets/pages/img/Icon/emot06.png");
  }
  else if(skorNyeri.value == "4" || skorNyeri.value == "3")
  {
    $("#Gskor").attr("src",base_url + "assets/pages/img/Icon/emot04.png");
  }
  else if(skorNyeri.value == "2" || skorNyeri.value == "1")
  {
    $("#Gskor").attr("src",base_url + "assets/pages/img/Icon/emot02.png");
  }
  else if(skorNyeri.value == "0")
  {
    $("#Gskor").attr("src",base_url + "assets/pages/img/Icon/emot01.png");
  }
});

$(document).ready(function() {

  var apSNDepan = $('#EMR_ASESMEN_PERAWAT_AppendKeluhanNyeriDepan');
  var apSNBelakang = $('#EMR_ASESMEN_PERAWAT_AppendKeluhanNyeriBelakang');
  var nomer = 1;
  var SNDpn = 0;
  var SNBlk = 0;

  $('#insertNyeri').click(function() {
    var lokasiA = EMR_ASESMEN_PERAWAT_GstsFrmSN.innerHTML;
    var lokasiB = EMR_ASESMEN_PERAWAT_LokasiSN.value;
    var SkalaNyeri = skorNyeri.value;


    //if(nomer == 1)
    if(EMR_ASESMEN_PERAWAT_LokasiSN.value == "" || SkorNyeri.value == "0")
    {
      $('#modalKosongKeluhandanSN').modal('show');
    }
    else
    {
      $("#Gskor").attr("src",base_url + "assets/pages/img/Icon/emot01.png");
      EMR_ASESMEN_PERAWAT_LokasiSN.value = "";
      EMR_ASESMEN_PERAWAT_NilaiSN.innerHTML = "0";
      skorNyeri.value = 0;
      urut = 1;
      EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.add('disabled');
      EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.add('white');
      EMR_ASESMEN_PERAWAT_btnTanyaBack.classList.remove('blue');
      EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.remove('disabled');
      EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.remove('white');
      EMR_ASESMEN_PERAWAT_btnTanyaNext.classList.add('blue');
      $('#EMR_ASESMEN_PERAWAT_FrmTanya7').toggleClass('collapse');
      $('#EMR_ASESMEN_PERAWAT_FrmTanya8').toggleClass('collapse');
      $('#EMR_ASESMEN_PERAWAT_FrmTanya9').toggleClass('collapse');
      $('#EMR_ASESMEN_PERAWAT_FrmTanya1').toggleClass('collapse');
      EMR_ASESMEN_PERAWAT_btnTanya1.classList.remove('white');
      EMR_ASESMEN_PERAWAT_btnTanya1.classList.add('blue');
      EMR_ASESMEN_PERAWAT_btnTanya1.classList.add('disabled');
      EMR_ASESMEN_PERAWAT_btnTanya7.classList.remove('disabled');
      EMR_ASESMEN_PERAWAT_btnTanya7.classList.remove('blue');
      EMR_ASESMEN_PERAWAT_btnTanya7.classList.add('white');
      $('#EMR_ASESMEN_PERAWAT_RbtnSNpindahYA').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_RbtnSNpindahTIDAK').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_RbtnSNakut').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_RbtnSNkronik').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_RbtnSNsetiap1').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_RbtnSNsetiap2').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_RbtnSNsetiap3').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnGambaran1').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnGambaran2').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnGambaran3').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnGambaran4').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnGambaran5').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnGambaran6').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnGambaran7').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnGambaran8').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_RbtnSNlama1').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_RbtnSNlama2').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnBertambah1').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnBertambah2').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnBertambah3').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnBertambah4').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnBertambah5').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnBerkurang1').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnBerkurang2').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnBerkurang3').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnBerkurang4').removeAttr('checked');
      $('#EMR_ASESMEN_PERAWAT_CbtnBerkurang5').removeAttr('checked');

      if(lokasiA == "Tubuh Depan")
      {
        if(SNDpn == 0)
        {
          SNDpn++;
          var cloneHead = $('#EMR_ASESMEN_PERAWAT_AppendHasilHeaderNyeriDepan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_PERAWAT_AppendHasilHeaderNyeriDepan').append(
            '<button disable type="button" class="btn btn-default removeSNDpn" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasiA +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriDepan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ SkalaNyeri +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasiB +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeSNDpn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
            '</div>');
          apSNDepan.before(cloneHead);
          apSNDepan.before(cloneBody);
        }
        else
        {
          SNDpn++;
          var clone = $('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriDepan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ SkalaNyeri +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasiB +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeSNDpn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_GstsFrmSN[]" value="'+ lokasiA +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_LokasiSN[]" value="'+ lokasiB +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_skorNyeri[]" value="'+ SkalaNyeri +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban1[]" value="'+ Jawaban1 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban2[]" value="'+ Jawaban2 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban3[]" value="'+ Jawaban3 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban4[]" value="'+ Jawaban4 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban5[]" value="'+ Jawaban5 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban6[]" value="'+ Jawaban6 +'">'+
            '</div>');
          apSNDepan.before(clone);
        }
      }
      else if(lokasiA == "Tubuh Belakang")
      {
        if(SNBlk == 0)
        {
          SNBlk++;
          var cloneHead = $('#EMR_ASESMEN_PERAWAT_AppendHasilHeaderNyeriBelakang').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_PERAWAT_AppendHasilHeaderNyeriBelakang').append(
            '<button disable type="button" class="btn btn-default removeSNBlk" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasiA +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriBelakang').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ SkalaNyeri +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasiB +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeSNBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
            '</div>');
          apSNBelakang.before(cloneHead);
          apSNBelakang.before(cloneBody);
        }
        else
        {
          SNBlk++;
          var clone = $('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriBelakang').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ SkalaNyeri +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasiB +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeSNBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_GstsFrmSN[]" value="'+ lokasiA +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_LokasiSN[]" value="'+ lokasiB +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_skorNyeri[]" value="'+ SkalaNyeri +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban1[]" value="'+ Jawaban1 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban2[]" value="'+ Jawaban2 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban3[]" value="'+ Jawaban3 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban4[]" value="'+ Jawaban4 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban5[]" value="'+ Jawaban5 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_PERAWAT_Jawaban6[]" value="'+ Jawaban6 +'">'+
            '</div>');
          apSNBelakang.before(clone);
        }
      }
    }

    nomer++;
  });


  $( "body" ).on('click', '.removeSNDpn', function(){
      if(SNDpn <= 1)
      {
        $(this).closest('#EMR_ASESMEN_PERAWAT_AppendHasilHeaderNyeriDepan').remove();
        $(this).closest('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriDepan').remove();
        SNDpn--;
      }
      else
      {
        $(this).closest('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriDepan').remove();
        SNDpn--;
      }
  });
  $( "body" ).on('click', '.removeSNBlk', function(){
      if(SNBlk <= 1)
      {
        $(this).closest('#EMR_ASESMEN_PERAWAT_AppendHasilHeaderNyeriBelakang').remove();
        $(this).closest('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriBelakang').remove();
        SNBlk--;
      }
      else
      {
        $(this).closest('#EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriBelakang').remove();
        SNBlk--;
      }
  });
});

$('#btnsimpanasesmen').click(function() {

    var tambah = 0;
    if(tekanandarah.value != "")
    {
      tambah = tambah + 1;
    }
    if(nadi.value != "")
    {
      tambah = tambah + 1;
    }
    if(suhutubuh.value != "")
    {
      tambah = tambah + 1;
    }
    if(respiratory.value != "")
    {
      tambah = tambah + 1;
    }
    if(beratbadan.value != "")
    {
      tambah = tambah + 1;
    }
    if(tinggibadan.value != "")
    {
      tambah = tambah + 1;
    }
    if(bmi.value != "")
    {
      tambah = tambah + 1;
    }
    if(lingkarkepala.value != "")
    {
      tambah = tambah + 1;
    }
    if(alatbantu.value != "")
    {
      tambah = tambah + 1;
    }
    if(prothesis.value != "")
    {
      tambah = tambah + 1;
    }
    if(cacattubuh.value != "")
    {
      tambah = tambah + 1;
    }
    if(skorNyeri.value != "")
    {
      tambah = tambah + 1;
    }
    if(tambah <= 5)
    {
      $("#modalAlertTambah").modal('show');
    }
    else
    {
      var form_data = {
          VerPassAsesmen: $('#VerPassAsesmen').val(),
          tekanandarah: $('#tekanandarah').val(),
          nadi: $('#nadi').val(),
          suhutubuh: $('#suhutubuh').val(),
          respiratory: $('#respiratory').val(),
          beratbadan: $('#beratbadan').val(),
          tinggibadan: $('#tinggibadan').val(),
          bmi: $('#bmi').val(),
          lingkarkepala: $('#lingkarkepala').val(),
          alatbantu: $('#alatbantu').val(),
          prothesis: $('#prothesis').val(),
          cacattubuh: $('#cacattubuh').val(),
          skorNyeri: $('#skorNyeri').val(),
          catatan: $('#catatan').val(),
          tanggungjawab: $('#tanggungjawab').val(),
          alergiobat: $('#alergiobat').val(),
          norm2: $('#norm2').val(),
          noreg2: $('#noreg2').val(),
          unitlayanan: $('#unitlayanan').val()
      };
      $.ajax({
          url: base_url + "emr/simpanperawat",
          type: 'POST',
          data: form_data,
          success: function(msg) {
              if (msg == 'teruji')
              {
                $("#verPass").modal('show');
                $('#alert-msg-versimpan').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
                $("#verPass").fadeTo(5000, 5000).slideUp(1000, function(){
                     $("#verPass").modal('hide');
                     window.location.href = base_url + "dashboard";
                });
              }
              else if (msg == 'saleh')
              {
                $('#alert-msg-versimpan').html('<div class="alert alert-danger text-center">Password Anda Salah!</div>');
              }
              else
              {
                $('#alert-msg-versimpan').html('<div class="alert alert-danger">Password dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
              }
          }
      });
      return false;
    }
  });
