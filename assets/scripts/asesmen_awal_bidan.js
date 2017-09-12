//button halaman
var EMR_ASWAL_BDN_PR_HalamanBack = document.getElementById('EMR_ASWAL_BDN_PR_HalamanBack');
var EMR_ASWAL_BDN_PR_HalamanNext = document.getElementById('EMR_ASWAL_BDN_PR_HalamanNext');
var EMR_ASWAL_BDN_PR_btnHalaman1 = document.getElementById('EMR_ASWAL_BDN_PR_btnHalaman1');
var EMR_ASWAL_BDN_PR_btnHalaman2 = document.getElementById('EMR_ASWAL_BDN_PR_btnHalaman2');
var EMR_ASWAL_BDN_PR_btnHalaman3 = document.getElementById('EMR_ASWAL_BDN_PR_btnHalaman3');
var EMR_ASWAL_BDN_PR_btnHalaman4 = document.getElementById('EMR_ASWAL_BDN_PR_btnHalaman4');
var EMR_ASWAL_BDN_PR_btnHalaman5 = document.getElementById('EMR_ASWAL_BDN_PR_btnHalaman5');
var EMR_ASWAL_BDN_PR_btnHalaman6 = document.getElementById('EMR_ASWAL_BDN_PR_btnHalaman6');
var EMR_ASWAL_BDN_PR_btnHalaman7 = document.getElementById('EMR_ASWAL_BDN_PR_btnHalaman7');
var EMR_ASWAL_BDN_PR_btnHalaman8 = document.getElementById('EMR_ASWAL_BDN_PR_btnHalaman8');

//halaman 1
var EMR_ASWAL_BDN_PR_TDSistolik = document.getElementById('EMR_ASWAL_BDN_PR_TDSistolik');
var EMR_ASWAL_BDN_PR_TDDiastolik = document.getElementById('EMR_ASWAL_BDN_PR_TDDiastolik');
var EMR_ASWAL_BDN_PR_nadi = document.getElementById('EMR_ASWAL_BDN_PR_nadi');
var EMR_ASWAL_BDN_PR_suhutubuh = document.getElementById('EMR_ASWAL_BDN_PR_suhutubuh');
var EMR_ASWAL_BDN_PR_respiratory = document.getElementById('EMR_ASWAL_BDN_PR_respiratory');
var EMR_ASWAL_BDN_PR_beratbadan = document.getElementById('EMR_ASWAL_BDN_PR_beratbadan');
var EMR_ASWAL_BDN_PR_tinggibadan = document.getElementById('EMR_ASWAL_BDN_PR_tinggibadan');
var EMR_ASWAL_BDN_PR_Nilai_BMI = document.getElementById('EMR_ASWAL_BDN_PR_Nilai_BMI');
var EMR_ASWAL_BDN_PR_Kategori_BMI = document.getElementById('EMR_ASWAL_BDN_PR_Kategori_BMI');
var lingkarkepala = document.getElementById('lingkarkepala');

//halaman 2
var EMR_ASWAL_BDN_PR_alatbantu = document.getElementById('EMR_ASWAL_BDN_PR_alatbantu');
var EMR_ASWAL_BDN_PR_alatbantustatus = document.getElementById('EMR_ASWAL_BDN_PR_alatbantustatus');
var EMR_ASWAL_BDN_PR_FungA1 = document.getElementById('EMR_ASWAL_BDN_PR_FungA1');
var EMR_ASWAL_BDN_PR_FungA2 = document.getElementById('EMR_ASWAL_BDN_PR_FungA2');
var EMR_ASWAL_BDN_PR_FungA3 = document.getElementById('EMR_ASWAL_BDN_PR_FungA3');
var EMR_ASWAL_BDN_PR_FungBYA = document.getElementById('EMR_ASWAL_BDN_PR_FungBYA');
var EMR_ASWAL_BDN_PR_FungBTD = document.getElementById('EMR_ASWAL_BDN_PR_FungBTD');
var EMR_ASWAL_BDN_PR_FungHasil = document.getElementById('EMR_ASWAL_BDN_PR_FungHasil');
var EMR_ASWAL_BDN_PR_FungTindakan = document.getElementById('EMR_ASWAL_BDN_PR_FungTindakan');

// lainnya
var EMR_ASWAL_BDN_btnkembali = document.getElementById('EMR_ASWAL_BDN_btnkembali');
var EMR_ASWAL_BDN_btnsimpan = document.getElementById('EMR_ASWAL_BDN_btnsimpan');
var EMR_ASWAL_BDN_btnSelanjutnyaPerawat = document.getElementById('EMR_ASWAL_BDN_btnSelanjutnyaPerawat');
var tindakSN = 0;
var halSN = 1;
var hal2SN = 0;
var tindak = 0;
var hal = 1;
var hal2 = 0;
var hala = "";
var halamanBID1 = 'Tidak';
var halamanBID2 = 'Ya';
var halamanBID3 = 'Ya';
var halamanBID4 = 'Ya';
var halamanBID5 = 'Ya';
var halamanBID6 = 'Ya';
var halamanBID7 = 'Ya';
var halamanBID8 = 'Tidak';
var halaman = '';
var sn1 = '';
var sn2 = '';
var sn1a = '';
var sn1b = '';
var sn3 = '';
var sn4 = '';
var sn5 = '';
var sn6 = '';
var lergi = '';
var snV3 = '';

//ubah user perawat
EMR_ASWAL_BDN_btnChangePerPerawat.onclick = function()
{
  EMR_ASWAL_BDN_statver.value = "Perawat2";
  EMR_ASWAL_BDN_userPerPerawat.value = "";
  EMR_ASWAL_BDN_passPerPerawat.value = "";
  $('#EMR_ASWAL_BDN_verPerPerawat').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_verPerPerawat2').toggleClass('collapse');
};

EMR_ASWAL_BDN_btnChangePerPerawat2.onclick = function()
{
  EMR_ASWAL_BDN_statver.value = "Perawat1";
  VerPassAsesmen.value = "";
  $('#EMR_ASWAL_BDN_verPerPerawat').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_verPerPerawat2').toggleClass('collapse');
};

EMR_ASWAL_BDN_PR_HalamanNext.onclick = function()
{
  hal++;
  hal2++;

  if(hal == 2)
  {
    EMR_ASWAL_BDN_PR_HalamanBack.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanBack.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanBack.classList.add('green');
    if(halamanBID2 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 3)
  {
    if(halamanBID3 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 4)
  {
    if(halamanBID4 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 5)
  {
    if(halamanBID5 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 6)
  {
    if(halamanBID6 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 7)
  {
    if(halamanBID7 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 8)
  {
    EMR_ASWAL_BDN_btnselanjutnyaPerawat.disabled = false;
    EMR_ASWAL_BDN_btnselanjutnyaPerawat.classList.add('green');
    EMR_ASWAL_BDN_btnselanjutnyaPerawat.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');

  }

  $('#EMR_ASWAL_BDN_PR_Halaman'+ hal +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_Halaman'+ hal2 +'').toggleClass('collapse');

  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').html(hal2);
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').toggleClass('white');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').toggleClass('green');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').toggleClass('col-md-5');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').toggleClass('col-md-1');
  if(hal == 2)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').html('2. Asesmen Fungsional');
  }
  else if(hal == 3)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').html('3. Asesmen Nyeri');
  }
  else if(hal == 4)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').html('4. Data Keluarga');
  }
  else if(hal == 5)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').html('5. Alergi Dan Catatan');
  }
  else if(hal == 6)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').html('6. Riwayat Menstruasi');
  }
  else if(hal == 7)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').html('7. Riwayat Kehamilan');
  }
  else if(hal == 8)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').html('8. Masalah / Faktor resiko');
  }
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').toggleClass('green');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').toggleClass('white');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').toggleClass('col-md-1');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').toggleClass('col-md-5');
};

EMR_ASWAL_BDN_PR_HalamanBack.onclick = function()
{
  $('#EMR_ASWAL_BDN_PR_Halaman'+ hal +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_Halaman'+ hal2 +'').toggleClass('collapse');

  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').html(hal);
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').toggleClass('white');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').toggleClass('green');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').toggleClass('col-md-5');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal +'').toggleClass('col-md-1');
  if(hal2 == 1)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').html('1. Tanda Vital dan Nutrisi');
  }
  else if(hal2 == 2)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').html('2. Asesmen Fungsional');
  }
  else if(hal2 == 3)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').html('3. Asesmen Nyeri');
  }
  else if(hal2 == 4)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').html('4. Data Keluarga');
  }
  else if(hal2 == 5)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').html('5. Alergi Dan Catatan');
  }
  else if(hal2 == 6)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').html('6. Riwayat Menstruasi');
  }
  else if(hal2 == 7)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').html('7. Riwayat Kehamilan');
  }
  else if(hal2 == 8)
  {
    $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').html('8. Masalah / Faktor resiko');
  }
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').toggleClass('green');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').toggleClass('white');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').toggleClass('col-md-1');
  $('#EMR_ASWAL_BDN_PR_btnHalaman'+ hal2 +'').toggleClass('col-md-5');

  hal--;
  hal2--;

  if(hal == 1)
  {
    EMR_ASWAL_BDN_PR_HalamanBack.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanBack.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanBack.classList.remove('green');
    if(halamanBID1 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 2)
  {
    if(halamanBID2 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 3)
  {
    if(halamanBID3 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 4)
  {
    if(halamanBID4 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 5)
  {
    if(halamanBID5 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 6)
  {
    if(halamanBID6 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
  else if(hal == 7)
  {
    if(halamanBID7 == 'Tidak')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    }
  }
}

//halaman 1 START
$('#EMR_ASWAL_BDN_PR_TDSistolik').keyup(function() {
  if(EMR_ASWAL_BDN_PR_TDSistolik.value != '')
  //if(EMR_ASWAL_BDN_PR_TDSistolik.value != '' && EMR_ASWAL_BDN_PR_TDDiastolik.value != '' && EMR_ASWAL_BDN_PR_nadi.value != '' && $('input[name="EMR_ASWAL_BDN_PR_NadiCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_suhutubuh.value != '' && EMR_ASWAL_BDN_PR_respiratory.value != '' &&  $('input[name="EMR_ASWAL_BDN_PR_RespiratoryCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_beratbadan.value != '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    halamanBID1 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  }
  else
  {
    halamanBID1 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  }
});

$('#EMR_ASWAL_BDN_PR_TDDiastolik').keyup(function() {
  if(EMR_ASWAL_BDN_PR_TDSistolik.value != '' && EMR_ASWAL_BDN_PR_TDDiastolik.value != '' && EMR_ASWAL_BDN_PR_nadi.value != '' && $('input[name="EMR_ASWAL_BDN_PR_NadiCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_suhutubuh.value != '' && EMR_ASWAL_BDN_PR_respiratory.value != '' && $('input[name="EMR_ASWAL_BDN_PR_RespiratoryCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_beratbadan.value != '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    halamanBID1 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  }
  else
  {
    halamanBID1 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  }
});

$('#EMR_ASWAL_BDN_PR_nadi').keyup(function() {
  if(EMR_ASWAL_BDN_PR_TDSistolik.value != '' && EMR_ASWAL_BDN_PR_TDDiastolik.value != '' && EMR_ASWAL_BDN_PR_nadi.value != '' && $('input[name="EMR_ASWAL_BDN_PR_NadiCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_suhutubuh.value != '' && EMR_ASWAL_BDN_PR_respiratory.value != '' && $('input[name="EMR_ASWAL_BDN_PR_RespiratoryCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_beratbadan.value!='' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    halamanBID1 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  }
  else
  {
    halamanBID1 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  }
});

$('#EMR_ASWAL_BDN_PR_NadiCH_reguler').click(function() {
  if(EMR_ASWAL_BDN_PR_TDSistolik.value != '' && EMR_ASWAL_BDN_PR_TDDiastolik.value != '' && EMR_ASWAL_BDN_PR_nadi.value != '' && $('input[name="EMR_ASWAL_BDN_PR_NadiCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_suhutubuh.value != '' && EMR_ASWAL_BDN_PR_respiratory.value != '' && $('input[name="EMR_ASWAL_BDN_PR_RespiratoryCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_beratbadan.value != '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    halamanBID1 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  }
  else
  {
    halamanBID1 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  }
});

$('#EMR_ASWAL_BDN_PR_NadiCH_irreguler').click(function() {
  if(EMR_ASWAL_BDN_PR_TDSistolik.value != '' && EMR_ASWAL_BDN_PR_TDDiastolik.value != '' && EMR_ASWAL_BDN_PR_nadi.value != '' && $('input[name="EMR_ASWAL_BDN_PR_NadiCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_suhutubuh.value != '' && EMR_ASWAL_BDN_PR_respiratory.value != '' && $('input[name="EMR_ASWAL_BDN_PR_RespiratoryCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_beratbadan.value != '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    halamanBID1 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  }
  else
  {
    halamanBID1 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  }
});

$('#EMR_ASWAL_BDN_PR_suhutubuh').keyup(function() {
  if(EMR_ASWAL_BDN_PR_TDSistolik.value != '' && EMR_ASWAL_BDN_PR_TDDiastolik.value != '' && EMR_ASWAL_BDN_PR_nadi.value != '' && $('input[name="EMR_ASWAL_BDN_PR_NadiCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_suhutubuh.value != '' && EMR_ASWAL_BDN_PR_respiratory.value != '' && $('input[name="EMR_ASWAL_BDN_PR_RespiratoryCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_beratbadan.value != '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    halamanBID1 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  }
  else
  {
    halamanBID1 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  }
});

$('#EMR_ASWAL_BDN_PR_respiratory').keyup(function() {
  if(EMR_ASWAL_BDN_PR_TDSistolik.value != '' && EMR_ASWAL_BDN_PR_TDDiastolik.value != '' && EMR_ASWAL_BDN_PR_nadi.value != '' && $('input[name="EMR_ASWAL_BDN_PR_NadiCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_suhutubuh.value != '' && EMR_ASWAL_BDN_PR_respiratory.value != '' && $('input[name="EMR_ASWAL_BDN_PR_RespiratoryCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_beratbadan.value != '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    halamanBID1 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  }
  else
  {
    halamanBID1 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  }
});

$('#EMR_ASWAL_BDN_PR_RespiratoryCH_teratur').click(function() {
  if(EMR_ASWAL_BDN_PR_TDSistolik.value != '' && EMR_ASWAL_BDN_PR_TDDiastolik.value != '' && EMR_ASWAL_BDN_PR_nadi.value != '' && $('input[name="EMR_ASWAL_BDN_PR_NadiCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_suhutubuh.value != '' && EMR_ASWAL_BDN_PR_respiratory.value != '' && $('input[name="EMR_ASWAL_BDN_PR_RespiratoryCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_beratbadan.value != '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    halamanBID1 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  }
  else
  {
    halamanBID1 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  }
});

$('#EMR_ASWAL_BDN_PR_RespiratoryCH_titeratur').click(function() {
  if(EMR_ASWAL_BDN_PR_TDSistolik.value != '' && EMR_ASWAL_BDN_PR_TDDiastolik.value != '' && EMR_ASWAL_BDN_PR_nadi.value != '' && $('input[name="EMR_ASWAL_BDN_PR_NadiCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_suhutubuh.value != '' && EMR_ASWAL_BDN_PR_respiratory.value != '' && $('input[name="EMR_ASWAL_BDN_PR_RespiratoryCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_beratbadan.value != '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    halamanBID1 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  }
  else
  {
    halamanBID1 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  }
});

$('#EMR_ASWAL_BDN_PR_beratbadan').keyup(function() {
  var tinggibd = EMR_ASWAL_BDN_PR_tinggibadan.value/100;
  if(EMR_ASWAL_BDN_PR_beratbadan.value != '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    var EMR_ASWAL_BDN_PR_Nilai_BMI2 = EMR_ASWAL_BDN_PR_beratbadan.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    EMR_ASWAL_BDN_PR_Nilai_BMI.innerHTML = EMR_ASWAL_BDN_PR_Nilai_BMI2.toFixed(2) + " " + satuanBMI;

    if(EMR_ASWAL_BDN_PR_Nilai_BMI2 < 18.5)
    {
      EMR_ASWAL_BDN_PR_Kategori_BMI.innerHTML = "Underweight";
    }
    else if(EMR_ASWAL_BDN_PR_Nilai_BMI2 < 23)
    {
      EMR_ASWAL_BDN_PR_Kategori_BMI.innerHTML = "Normo Weight";
    }
    else if(EMR_ASWAL_BDN_PR_Nilai_BMI2 < 27)
    {
      EMR_ASWAL_BDN_PR_Kategori_BMI.innerHTML = "Over Weight";
    }
    else if(EMR_ASWAL_BDN_PR_Nilai_BMI2 >= 27)
    {
      EMR_ASWAL_BDN_PR_Kategori_BMI.innerHTML = "Obe  se";
    }
  }
  if(EMR_ASWAL_BDN_PR_TDSistolik.value != '' && EMR_ASWAL_BDN_PR_TDDiastolik.value != '' && EMR_ASWAL_BDN_PR_nadi.value != '' && $('input[name="EMR_ASWAL_BDN_PR_NadiCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_suhutubuh.value != '' && EMR_ASWAL_BDN_PR_respiratory.value != '' && $('input[name="EMR_ASWAL_BDN_PR_RespiratoryCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_beratbadan.value!= '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    halamanBID1 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  }
  else
  {
    halamanBID1 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  }
});

$('#EMR_ASWAL_BDN_PR_tinggibadan').keyup(function() {
  var tinggibd = EMR_ASWAL_BDN_PR_tinggibadan.value/100;
  if(EMR_ASWAL_BDN_PR_beratbadan.value != '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    var EMR_ASWAL_BDN_PR_Nilai_BMI2 = EMR_ASWAL_BDN_PR_beratbadan.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    EMR_ASWAL_BDN_PR_Nilai_BMI.innerHTML = EMR_ASWAL_BDN_PR_Nilai_BMI2.toFixed(2) + " " + satuanBMI;

    if(EMR_ASWAL_BDN_PR_Nilai_BMI2 < 18.5)
    {
      EMR_ASWAL_BDN_PR_Kategori_BMI.innerHTML = "Underweight";
    }
    else if(EMR_ASWAL_BDN_PR_Nilai_BMI2 < 23)
    {
      EMR_ASWAL_BDN_PR_Kategori_BMI.innerHTML = "Normo Weight";
    }
    else if(EMR_ASWAL_BDN_PR_Nilai_BMI2 < 27)
    {
      EMR_ASWAL_BDN_PR_Kategori_BMI.innerHTML = "Over Weight";
    }
    else if(EMR_ASWAL_BDN_PR_Nilai_BMI2 >= 27)
    {
      EMR_ASWAL_BDN_PR_Kategori_BMI.innerHTML = "Obese";
    }
  }
  if(EMR_ASWAL_BDN_PR_TDSistolik.value != '' && EMR_ASWAL_BDN_PR_TDDiastolik.value != '' && EMR_ASWAL_BDN_PR_nadi.value != '' && $('input[name="EMR_ASWAL_BDN_PR_NadiCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_suhutubuh.value != '' && EMR_ASWAL_BDN_PR_respiratory.value != '' && $('input[name="EMR_ASWAL_BDN_PR_RespiratoryCH"]:checked').length > 0 && EMR_ASWAL_BDN_PR_beratbadan.value != '' && EMR_ASWAL_BDN_PR_tinggibadan.value != '')
  {
    halamanBID1 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  }
  else
  {
    halamanBID1 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  }
});
//Halaman 1 END

//Halaman 2 START
$('#EMR_ASWAL_BDN_PR_FungA1').click(function() {
  if(EMR_ASWAL_BDN_PR_alatbantustatus.value == "Ya")
  {
    $("#EMR_ASWAL_BDN_PR_alatbantu").toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_alatbantu").val('');
    $("#EMR_ASWAL_BDN_PR_alatbantustatus").val('Tidak');
  }
  $("#EMR_ASWAL_BDN_PR_FungBYA").removeAttr('checked');
  $("#EMR_ASWAL_BDN_PR_FungBTD").removeAttr('checked');
  if(EMR_ASWAL_BDN_PR_FungA1.checked == true)
  {
    tindak = tindak;
  }
  if(EMR_ASWAL_BDN_PR_FungA1.checked == false)
  {
    tindak = tindak;
  }
  if(EMR_ASWAL_BDN_PR_FungA2.checked == true)
  {
    tindak = tindak + 1;
  }
  if(EMR_ASWAL_BDN_PR_FungA2.checked == false)
  {
    tindak = tindak;
  }
  if(EMR_ASWAL_BDN_PR_alatbantu.value != '')
  {
    tindak = tindak + 1;
  }
  if(EMR_ASWAL_BDN_PR_FungBYA.checked == true)
  {
    tindak = tindak + 3;
  }
  if(tindak == 0)
  {
    halamanBID2 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Tidak beresiko</b>";
    EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Tidak ada tindakan</b>";
  }
  else if (tindak > 0 && tindak < 4)
  {
    halamanBID2 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Risiko rendah</b>";
    EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Edukasi</b>";
  }
  else if(tindak > 3)
  {
    halamanBID2 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Risiko tinggi</b>";
    EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Edukasi & pasang pita kuning</b>";
  }
});

$('#EMR_ASWAL_BDN_PR_FungA2').click(function() {
  tindak = 0;
  if(EMR_ASWAL_BDN_PR_alatbantustatus.value == "Ya")
  {
    $("#EMR_ASWAL_BDN_PR_alatbantu").toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_alatbantu").val('');
    $("#EMR_ASWAL_BDN_PR_alatbantustatus").val('Tidak');
  }
  $("#EMR_ASWAL_BDN_PR_FungBYA").removeAttr('checked');
  $("#EMR_ASWAL_BDN_PR_FungBTD").removeAttr('checked');
  if(EMR_ASWAL_BDN_PR_FungA1.checked == true)
  {
    tindak = tindak;
  }
  if(EMR_ASWAL_BDN_PR_FungA1.checked == false)
  {
    tindak = tindak;
  }
  if(EMR_ASWAL_BDN_PR_FungA2.checked == true)
  {
    tindak = tindak + 1;
  }
  if(EMR_ASWAL_BDN_PR_FungA2.checked == false)
  {
    tindak = tindak;
  }
  if(EMR_ASWAL_BDN_PR_alatbantu.value != '')
  {
    tindak = tindak + 1;
  }
  if(EMR_ASWAL_BDN_PR_FungBYA.checked == true)
  {
    tindak = tindak + 3;
  }
  if(tindak == 0)
  {
    halamanBID2 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Tidak beresiko</b>";
    EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Tidak ada tindakan</b>";
  }
  else if (tindak > 0 && tindak < 4)
  {
    halamanBID2 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Risiko rendah</b>";
    EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Edukasi</b>";
  }
  else if(tindak > 3)
  {
    halamanBID2 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Risiko tinggi</b>";
    EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Edukasi & pasang pita kuning</b>";
  }
});

$('#EMR_ASWAL_BDN_PR_FungA3').click(function() {
  $("#EMR_ASWAL_BDN_PR_FungBYA").removeAttr('checked');
  $("#EMR_ASWAL_BDN_PR_FungBTD").removeAttr('checked');
  if(EMR_ASWAL_BDN_PR_alatbantustatus.value == "Tidak")
  {
    $("#EMR_ASWAL_BDN_PR_alatbantu").toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_alatbantu").focus();
    $("#EMR_ASWAL_BDN_PR_alatbantustatus").val('Ya');
  }
  if(EMR_ASWAL_BDN_PR_alatbantu.value != '')
  {
    tindak = tindak + 1;
  }
  halamanBID2 = 'Tidak';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
  EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Risiko rendah</b>";
  EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Edukasi</b>";
});

$('#EMR_ASWAL_BDN_PR_FungBYA').click(function() {
  if ($('input[name="EMR_ASWAL_BDN_PR_FungA"]:checked').length > 0) {
    tindak = 0;
    if(EMR_ASWAL_BDN_PR_FungA1.checked == true)
    {
      tindak = tindak;
    }
    if(EMR_ASWAL_BDN_PR_FungA1.checked == false)
    {
      tindak = tindak;
    }
    if(EMR_ASWAL_BDN_PR_FungA2.checked == true)
    {
      tindak = tindak + 1;
    }
    if(EMR_ASWAL_BDN_PR_FungA2.checked == false)
    {
      tindak = tindak;
    }
    if(EMR_ASWAL_BDN_PR_alatbantu.value != '')
    {
      tindak = tindak + 1;
    }
    if(EMR_ASWAL_BDN_PR_FungBYA.checked == true)
    {
      tindak = tindak + 3;
    }
    if(tindak == 0)
    {
      halamanBID2 = 'Ya';
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
      EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Tidak beresiko</b>";
      EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Tidak ada tindakan</b>";
    }
    else if (tindak > 0 && tindak < 4)
    {
      halamanBID2 = 'Ya';
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
      EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Risiko rendah</b>";
      EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Edukasi</b>";
    }
    else if(tindak > 3)
    {
      halamanBID2 = 'Ya';
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
      EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Risiko tinggi</b>";
      EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Edukasi & pasang pita kuning</b>";
    }
  }
});

$('#EMR_ASWAL_BDN_PR_FungBTD').click(function() {
  if ($('input[name="EMR_ASWAL_BDN_PR_FungA"]:checked').length > 0) {
    tindak = 0;
    if(EMR_ASWAL_BDN_PR_FungA1.checked == true)
    {
      tindak = tindak;
    }
    if(EMR_ASWAL_BDN_PR_FungA1.checked == false)
    {
      tindak = tindak;
    }
    if(EMR_ASWAL_BDN_PR_FungA2.checked == true)
    {
      tindak = tindak + 1;
    }
    if(EMR_ASWAL_BDN_PR_FungA2.checked == false)
    {
      tindak = tindak;
    }
    if(EMR_ASWAL_BDN_PR_alatbantu.value != '')
    {
      tindak = tindak + 1;
    }
    if(EMR_ASWAL_BDN_PR_FungBYA.checked == true)
    {
      tindak = tindak + 3;
    }
    if(tindak == 0)
    {
      halamanBID2 = 'Ya';
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
      EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Tidak beresiko</b>";
      EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Tidak ada tindakan</b>";
    }
    else if (tindak > 0 && tindak < 4)
    {
      halamanBID2 = 'Ya';
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
      EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Risiko rendah</b>";
      EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Edukasi</b>";
    }
    else if(tindak > 3)
    {
      halamanBID2 = 'Ya';
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
      EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Risiko tinggi</b>";
      EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Edukasi & pasang pita kuning</b>";
    }
  }
});

$("#EMR_ASWAL_BDN_PR_alatbantu").focusout(function() {
  if(EMR_ASWAL_BDN_PR_alatbantu.value == '')
  {
    alert("Alat bantu belum di isi, centang akan dihapus otomatis dan dianggap pasien tidak menggunakan Alat bantu");
    $('#EMR_ASWAL_BDN_PR_FungA3').removeAttr('checked');
    document.getElementById('EMR_ASWAL_BDN_PR_FungA1').checked = true;
    $("#EMR_ASWAL_BDN_PR_alatbantu").val('');
    $("#EMR_ASWAL_BDN_PR_alatbantu").toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_alatbantustatus").val('Tidak');
    $("#EMR_ASWAL_BDN_PR_FungBYA").removeAttr('checked');
    $("#EMR_ASWAL_BDN_PR_FungBTD").removeAttr('checked');
  }
  tindak = 0;
  if(EMR_ASWAL_BDN_PR_FungA1.checked == true)
  {
    tindak = tindak;
  }
  if(EMR_ASWAL_BDN_PR_FungA1.checked == false)
  {
    tindak = tindak;
  }
  if(EMR_ASWAL_BDN_PR_FungA2.checked == true)
  {
    tindak = tindak + 1;
  }
  if(EMR_ASWAL_BDN_PR_FungA2.checked == false)
  {
    tindak = tindak;
  }
  if(EMR_ASWAL_BDN_PR_alatbantu.value != '')
  {
    tindak = tindak + 1;
  }
  if(EMR_ASWAL_BDN_PR_FungBYA.checked == true)
  {
    tindak = tindak + 3;
  }
  if(tindak == 0)
  {
    halamanBID2 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Tidak beresiko</b>";
    EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Tidak ada tindakan</b>";
  }
  else if (tindak > 0 && tindak < 4)
  {
    halamanBID2 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Risiko rendah</b>";
    EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Edukasi</b>";
  }
  else if(tindak > 3)
  {
    halamanBID2 = 'Tidak';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_PR_FungHasil.innerHTML = "<b> Risiko tinggi</b>";
    EMR_ASWAL_BDN_PR_FungTindakan.innerHTML = "<b> Edukasi & pasang pita kuning</b>";
  }
});
//END Halaman 2

//START HALAMAN 3
$('#EMR_ASWAL_BDN_PR_SN1Ada').click(function() {
  if(EMR_ASWAL_BDN_PR_SN_statadaNyeri.value == "Tidak")
  {
    $("#EMR_ASWAL_BDN_PR_SN1Takda2").toggleClass('collapse');
    $('#HasilNyeri_tampilan').toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_nyeri_ada_focus").focus();
    $("#EMR_ASWAL_BDN_PR_SN_statadaNyeri").val('Ya');
  }
  halamanBID3 = 'Tidak';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');

  EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  $('#EMR_ASWAL_BDN_PR_SN1_1').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN2_1').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN3_1').toggleClass('collapse');

  $('#EMR_ASWAL_BDN_PR_SN1_'+halSN).toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN2_'+halSN).toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN3_'+halSN).toggleClass('collapse');
  halSN = 1;

  tindakSN = 0;
  sn1 = '';
  sn2 = '';
  sn3 = '';
  sn4 = '';
  sn5 = '';
  sn6 = '';
  if(document.getElementById('ststsetiapselamaapa').value == 'ada')
  {
    $('#ststsetiapselamaapa').val('tidak');
    $('#setiapselamaapa').toggleClass('collapse');
  }

  if(document.getElementById('ststsetiapselamaapa2').value == 'ada')
  {
    $('#ststsetiapselamaapa2').val('tidak');
    $('#setiapselamaapa2').toggleClass('collapse');
  }

});

$('#EMR_ASWAL_BDN_PR_SN1Takda').click(function() {
  if(EMR_ASWAL_BDN_PR_SN_statadaNyeri.value == "Ya")
  {
    $("#EMR_ASWAL_BDN_PR_SN1Takda2").toggleClass('collapse');
    $('#HasilNyeri_tampilan').toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_nyeri_ada_focus").val('');
    $("#EMR_ASWAL_BDN_PR_SN_statadaNyeri").val('Tidak');
  }
  halamanBID3 = 'Ya';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  EMR_ASWAL_BDN_PR_SN1Back.disabled = true;
  EMR_ASWAL_BDN_PR_SN1Back.classList.add('white');
  EMR_ASWAL_BDN_PR_SN1Back.classList.remove('yellow');
  EMR_ASWAL_BDN_PR_SkorNyeri.innerHTML = "<b> 0</b>";
  if (document.getElementById('EMR_ASWAL_BDN_PR_umur_skala').value < 1)
  {
    EMR_ASWAL_BDN_PR_SkalaNyeri.innerHTML = "<b> Nyeri ringan sampai tidak nyeri</b>";
  }
  else if (document.getElementById('EMR_ASWAL_BDN_PR_umur_skala').value < 4)
  {
    EMR_ASWAL_BDN_PR_SkalaNyeri.innerHTML = "<b> Relaxed dan comfortable (santai dan nyaman)</b>";
  }
  else
  {
    EMR_ASWAL_BDN_PR_SkalaNyeri.innerHTML = "<b> Tidak nyeri</b>";
  }
  //skor nyeri 1
  $('input[name=EMR_ASWAL_BDN_PR_SN_NIPSA]').attr('checked',false);
  //$('#EMR_ASWAL_BDN_PR_SN_NIPSA1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSA2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSB1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSB2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSB3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSC1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSC2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSD1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSD2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSD3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSD4').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSE1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSE2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSE3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSE4').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSF1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSF2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_NIPSF3').removeAttr('checked');
  //skor nyeri 2
  $('#EMR_ASWAL_BDN_PR_SN_FLACCA1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCA2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCA3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCB1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCB2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCB3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCC1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCC2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCC3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCD1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCD2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCD3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCE1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCE2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SN_FLACCE3').removeAttr('checked');
  //skor nyeri 3
  $('#EMR_ASWAL_BDN_PR_CbtnBertambahParah1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_CbtnBertambahParah2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_textBertambahParah').val('');
  $('#EMR_ASWAL_BDN_PR_CbtnBerkurang1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_CbtnBerkurang2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_CbtnBerkurang3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_CbtnBerkurang4').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_CbtnBerkurang5').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_textBertambahParah2').val('');
  $('#EMR_ASWAL_BDN_PR_CbtnGambaran1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_CbtnGambaran2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_CbtnGambaran3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_CbtnGambaran4').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_CbtnGambaran5').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_CbtnGambaran6').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_CbtnGambaran7').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_textGambaran').val('');
  $('#EMR_ASWAL_BDN_PR_SNMenjalar1').val('');
  $('#EMR_ASWAL_BDN_PR_SNMenjalar').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SNMenjalar2').val('');
  $('#EMR_ASWAL_BDN_PR_RbtnSNsetiapinsan1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_RbtnSNsetiapinsan2').removeAttr('checked');
  if(document.getElementById('ststsetiapselamaapa').value == 'ada')
  {
    $('#ststsetiapselamaapa').val('tidak');
    $('#setiapselamaapa').toggleClass('collapse');
  }
  else
  {
    $('#ststsetiapselamaapa').val('ada');
    $('#setiapselamaapa').toggleClass('collapse');
  }
  $('#EMR_ASWAL_BDN_PR_RbtnSNsetiap1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_RbtnSNsetiap2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_RbtnSNsetiap3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SNlamawaktu').val('');
  if(document.getElementById('ststsetiapselamaapa2').value == 'ada')
  {
    $('#ststsetiapselamaapa2').val('tidak');
    $('#setiapselamaapa2').toggleClass('collapse');
  }
  else
  {
    $('#ststsetiapselamaapa2').val('ada');
    $('#setiapselamaapa2').toggleClass('collapse');
  }
  $('#EMR_ASWAL_BDN_PR_RbtnSNselama1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_RbtnSNselama2').removeAttr('checked');

  $('#EMR_ASWAL_BDN_PR_SN1_1').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN2_1').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN3_1').toggleClass('collapse');

  $('#EMR_ASWAL_BDN_PR_SN1_'+halSN).toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN2_'+halSN).toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN3_'+halSN).toggleClass('collapse');
  halSN = 1;

  tindakSN = 0;
  sn1 = '';
  sn2 = '';
  sn3 = '';
  sn4 = '';
  sn5 = '';
  sn6 = '';
});

$("#EMR_ASWAL_BDN_PR_nyeri_ada_focus").focusout(function() {
  if(EMR_ASWAL_BDN_PR_nyeri_ada_focus.value =='')
  {
    $('#EMR_ASWAL_BDN_PR_SN1Ada').removeAttr('checked');
    EMR_ASWAL_BDN_PR_SN1Takda.checked = true;
    $("#EMR_ASWAL_BDN_PR_nyeri_ada_focus").val('');
    $("#EMR_ASWAL_BDN_PR_SN_statadaNyeri").val('Tidak');
    $("#EMR_ASWAL_BDN_PR_SN1Takda2").toggleClass('collapse');
  }
});

// Skor Nyeri 1
$('#EMR_ASWAL_BDN_PR_SN_NIPSA1').click(function() {
  if(sn1 == 1)
  {
    tindakSN = tindakSN - 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn1 = '0';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSA2').click(function() {
  if(sn1 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn1 = '1';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSB1').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSB2').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSB3').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSC1').click(function() {
  if(sn3 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn3 = '0';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSC2').click(function() {
  if(sn3 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn3 = '1';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSD1').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn4 = '0';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSD2').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn4 = '0';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSD3').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn4 = '1';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSD4').click(function() {
  if(sn4 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn4 = '1';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSE1').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn5 = '0';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSE2').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn5 = '0';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSE3').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn5 = '1';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSE4').click(function() {
  if(sn5 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn5 = '1';
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSF1').click(function() {
  if(sn6 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn6 = '0';
  halamanBID4 = 'Ya';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSF2').click(function() {
  if(sn6 == 0)
  {
    tindakSN = tindakSN;
  }
  else
  {
    tindakSN = tindakSN - 1;
  }
  sn6 = '0';
  halamanBID3 = 'Ya';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_NIPSF3').click(function() {
  if(sn6 == 0)
  {
    tindakSN = tindakSN + 1;
  }
  else
  {
    tindakSN = tindakSN;
  }
  sn6 = '1';
  halamanBID3 = 'Ya';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN >= 0 && tindakSN < 3)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan sampai tidak nyeri</b>')
  }
  else if(tindakSN > 2 && tindakSN < 5)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang sampai nyeri ringan</b>')
  }
  else if(tindakSN > 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri hebat</b>')
  }
});

//Skor Nyeri 2
$('#EMR_ASWAL_BDN_PR_SN_FLACCA1').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCA2').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCA3').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCB1').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCB2').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCB3').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCC1').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCC2').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCC3').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCD1').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCD2').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCD3').click(function() {
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
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCE1').click(function() {
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
  halamanBID3 = 'Ya';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCE2').click(function() {
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
  halamanBID3 = 'Ya';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

$('#EMR_ASWAL_BDN_PR_SN_FLACCE3').click(function() {
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
  halamanBID3 = 'Ya';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  if(tindakSN == 0)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Relaxed dan comfortable (santai dan nyaman)</b>')
  }
  else if(tindakSN > 0 && tindakSN < 4)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Mild discomfort (nyeri ringan)</b>')
  }
  else if(tindakSN > 3 && tindakSN < 7)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Moderate pain (nyeri sedang)</b>')
  }
  else if(tindakSN > 6 && tindakSN < 11)
  {
    $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Severe discomfory/pain (nyeri hebat)</b>')
  }
});

//skor nyeri 3
//Pertanyaan Nyeri 3 hal 1 START
var tam1 = 0;
var tam2 = 0;
$('#EMR_ASWAL_BDN_PR_CbtnBertambahParah1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnBertambahParah1').checked == true)
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
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnBertambahParah2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnBertambahParah2').checked == true)
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
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_textBertambahParah').keyup(function() {
    if(EMR_ASWAL_BDN_PR_textBertambahParah.value == '')
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
      EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
      EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
      EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
    }
    else
    {
      sn1 = 0;
      EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
      EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
      EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
    }
});
$('#EMR_ASWAL_BDN_PR_CbtnBerkurang1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnBerkurang1').checked == true)
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
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnBerkurang2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnBerkurang2').checked == true)
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
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnBerkurang3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnBerkurang3').checked == true)
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
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnBerkurang4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnBerkurang4').checked == true)
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
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnBerkurang5').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnBerkurang5').checked == true)
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
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0;
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_textBertambahParah2').keyup(function() {
  if( EMR_ASWAL_BDN_PR_textBertambahParah2.value == "")
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
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    sn1 = 0
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
//Pertanyaan Nyeri 3 hal 1 END

//Pertanyaan Nyeri 3 hal 2 START
var tam3 = 0;
$('#EMR_ASWAL_BDN_PR_CbtnGambaran1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnGambaran1').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnGambaran2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnGambaran2').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnGambaran3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnGambaran3').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnGambaran4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnGambaran4').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {

    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnGambaran5').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnGambaran5').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnGambaran6').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnGambaran6').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {

    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnGambaran7').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnGambaran7').checked == true)
  {
    sn2 = sn2 + 1;
  }
  else
  {
    sn2 = sn2 - 1;
  }
  if(sn2 > 0)
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {

    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_textGambaran').keyup(function() {
  if(EMR_ASWAL_BDN_PR_textGambaran.value != '')
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
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
//Pertanyaan Nyeri 3 hal 2 END

//Pertanyaan Nyeri 3 hal 3 START
var tam4 = 0;
$('#EMR_ASWAL_BDN_PR_SNMenjalar1').keyup(function() {
  if(EMR_ASWAL_BDN_PR_SNMenjalar1.value != '')
  {
    sn3 = 1;
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
  }
  else
  {
    sn3 = 0;
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_PR_MenjalarY').click(function() {
  if(EMR_ASWAL_BDN_PR_SNMenjalar2status.value == "Tidak")
  {
    $("#EMR_ASWAL_BDN_PR_SNMenjalar2").toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_SNMenjalar2").focus();
    $("#EMR_ASWAL_BDN_PR_SNMenjalar2status").val('Ya');
  }
});
$('#EMR_ASWAL_BDN_PR_MenjalarTD').click(function() {
  if(EMR_ASWAL_BDN_PR_SNMenjalar2status.value == "Ya")
  {
    $("#EMR_ASWAL_BDN_PR_SNMenjalar2").toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_SNMenjalar2").val('');
    $("#EMR_ASWAL_BDN_PR_SNMenjalar2status").val('Tidak');
  }
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$("#EMR_ASWAL_BDN_PR_SNMenjalar2").focusout(function() {
  if(EMR_ASWAL_BDN_PR_SNMenjalar2.value =='')
  {
    alert("Lokasi menjalar belum di isi, centang akan dihapus otomatis dan dianggap pasien tidak memiliki lokasi menjalar");
    $('#EMR_ASWAL_BDN_PR_MenjalarY').removeAttr('checked');
    EMR_ASWAL_BDN_PR_MenjalarTD.checked = true;
    $("#EMR_ASWAL_BDN_PR_SNMenjalar2").val('');
    $("#EMR_ASWAL_BDN_PR_SNMenjalar2status").val('Tidak');
    $("#EMR_ASWAL_BDN_PR_SNMenjalar2").toggleClass('collapse');
  }
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
//Pertanyaan Nyeri 3 hal 3 END

//Pertanyaan Nyeri 3 hal 4 START
$('#EMR_ASWAL_BDN_PR_btnSN3A_1').click(function() {
  sn4 = 1;
  tindakSN = 0;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Tidak nyeri</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3A_2').click(function() {
  sn4 = 1;
  tindakSN = 2;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3A_3').click(function() {
  sn4 = 1;
  tindakSN = 4;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3A_4').click(function() {
  sn4 = 1;
  tindakSN = 6;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3A_5').click(function() {
  sn4 = 1;
  tindakSN = 8;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri berat</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3A_6').click(function() {
  sn4 = 1;
  tindakSN = 10;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri berat</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3B_0').click(function() {
  sn4 = 1;
  tindakSN = 0;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Tidak nyeri</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3B_1').click(function() {
  sn4 = 1;
  tindakSN = 1;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3B_2').click(function() {
  sn4 = 1;
  tindakSN = 2;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3B_3').click(function() {
  sn4 = 1;
  tindakSN = 3;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri ringan</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3B_4').click(function() {
  sn4 = 1;
  tindakSN = 4;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3B_5').click(function() {
  sn4 = 1;
  tindakSN = 5;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3B_6').click(function() {
  sn4 = 1;
  tindakSN = 6;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri sedang</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3B_7').click(function() {
  sn4 = 1;
  tindakSN = 7;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri berat</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3B_8').click(function() {
  sn4 = 1;
  tindakSN = 8;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri berat</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3B_9').click(function() {
  sn4 = 1;
  tindakSN = 9;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri berat</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
$('#EMR_ASWAL_BDN_PR_btnSN3B_10').click(function() {
  sn4 = 1;
  tindakSN = 10;
  $('#EMR_ASWAL_BDN_PR_SkorNyeri').html('<b>'+tindakSN+'</b>');
  $('#EMR_ASWAL_BDN_PR_SkalaNyeri').html('<b> Nyeri berat</b>');
  EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
  EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
  EMR_ASWAL_BDN_PR_SN1Next.classList.remove('white');
});
//Pertanyaan Nyeri 3 hal 4 END

//Pertanyaan Nyeri 3 hal 5 START
var batu = 0;
$('#EMR_ASWAL_BDN_PR_RbtnSNsetiapinsan1').click(function() {
  if(batu > 0)
  {
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
    batu = 0;
  }
  if(document.getElementById('ststsetiapselamaapa').value == 'tidak')
  {
    $('#ststsetiapselamaapa').val('ada');
    $('#setiapselamaapa').toggleClass('collapse');
  }
});
$('#EMR_ASWAL_BDN_PR_RbtnSNsetiapinsan2').click(function() {
  if(batu == 0)
  {
    halamanBID3 = 'Ya';
    EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
    EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
    batu = 1;
    $('#EMR_ASWAL_BDN_PR_RbtnSNsetiap1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_PR_RbtnSNsetiap2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_PR_RbtnSNsetiap3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_PR_SNlamawaktu').val('');
    $('#EMR_ASWAL_BDN_PR_RbtnSNselama1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_PR_RbtnSNselama2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_PR_SNlamawaktu2').val('');
  }
  if(document.getElementById('ststsetiapselamaapa').value == 'ada')
  {
    $('#ststsetiapselamaapa').val('tidak');
    $('#setiapselamaapa').toggleClass('collapse');
    if(document.getElementById('ststsetiapselamaapa2').value == 'ada')
    {
      $('#ststsetiapselamaapa2').val('tidak');
      $('#setiapselamaapa2').toggleClass('collapse');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_RbtnSNsetiap1').click(function() {
  if(document.getElementById('ststsetiapselamaapa2').value == 'tidak')
  {
    $('#ststsetiapselamaapa2').val('ada');
    $('#setiapselamaapa2').toggleClass('collapse');
  }
  $('#EMR_ASWAL_BDN_PR_SNlamawaktu').val('');
  $('#EMR_ASWAL_BDN_PR_RbtnSNselama1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_RbtnSNselama2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SNlamawaktu2').val('');
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
});
$('#EMR_ASWAL_BDN_PR_RbtnSNsetiap2').click(function() {
  if(document.getElementById('ststsetiapselamaapa2').value == 'tidak')
  {
    $('#ststsetiapselamaapa2').val('ada');
    $('#setiapselamaapa2').toggleClass('collapse');
  }
  $('#EMR_ASWAL_BDN_PR_SNlamawaktu').val('');
  $('#EMR_ASWAL_BDN_PR_RbtnSNselama1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_RbtnSNselama2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SNlamawaktu2').val('');
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
});
$('#EMR_ASWAL_BDN_PR_RbtnSNsetiap3').click(function() {
  if(document.getElementById('ststsetiapselamaapa2').value == 'tidak')
  {
    $('#ststsetiapselamaapa2').val('ada');
    $('#setiapselamaapa2').toggleClass('collapse');
  }
  $('#EMR_ASWAL_BDN_PR_SNlamawaktu').val('');
  $('#EMR_ASWAL_BDN_PR_RbtnSNselama1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_RbtnSNselama2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_PR_SNlamawaktu2').val('');
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
});
$('#EMR_ASWAL_BDN_PR_RbtnSNselama1').click(function() {
  halamanBID3 = 'Ya';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SNlamawaktu2').val('');
});
$('#EMR_ASWAL_BDN_PR_RbtnSNselama2').click(function() {
  halamanBID3 = 'Ya';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
  $('#EMR_ASWAL_BDN_PR_SNlamawaktu2').val('');
});
$('#EMR_ASWAL_BDN_PR_SNlamawaktu').keyup(function() {
    if($(this).val() !='')
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
      $('#EMR_ASWAL_BDN_PR_RbtnSNsetiap1').removeAttr('checked');
      $('#EMR_ASWAL_BDN_PR_RbtnSNsetiap2').removeAttr('checked');
      $('#EMR_ASWAL_BDN_PR_RbtnSNsetiap3').removeAttr('checked');
      if(document.getElementById('ststsetiapselamaapa2').value == 'tidak')
      {
        $('#ststsetiapselamaapa2').val('ada');
        $('#setiapselamaapa2').toggleClass('collapse');
      }
      $('#EMR_ASWAL_BDN_PR_RbtnSNselama1').removeAttr('checked');
      $('#EMR_ASWAL_BDN_PR_RbtnSNselama2').removeAttr('checked');
      $('#EMR_ASWAL_BDN_PR_SNlamawaktu2').val('');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
      $('#ststsetiapselamaapa2').val('tidak');
      $('#setiapselamaapa2').toggleClass('collapse');
      $('#EMR_ASWAL_BDN_PR_RbtnSNselama1').removeAttr('checked');
      $('#EMR_ASWAL_BDN_PR_RbtnSNselama2').removeAttr('checked');
      $('#EMR_ASWAL_BDN_PR_SNlamawaktu2').val('');
    }
});
$('#EMR_ASWAL_BDN_PR_SNlamawaktu2').keyup(function() {
    if($(this).val() !='')
    {
      halamanBID3 = 'Ya';
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
      $('#EMR_ASWAL_BDN_PR_RbtnSNselama1').removeAttr('checked');
      $('#EMR_ASWAL_BDN_PR_RbtnSNselama2').removeAttr('checked');
    }
    else
    {
      EMR_ASWAL_BDN_PR_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_PR_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('green');
      $('#EMR_ASWAL_BDN_PR_RbtnSNselama1').removeAttr('checked');
      $('#EMR_ASWAL_BDN_PR_RbtnSNselama2').removeAttr('checked');
    }
});
//Pertanyaan Nyeri 3 hal 5 END

$('#EMR_ASWAL_BDN_PR_SN1Next').click(function() {
  $('#EMR_ASWAL_BDN_PR_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN3_'+ halSN +'').toggleClass('collapse');
  halSN++;
  $('#EMR_ASWAL_BDN_PR_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN3_'+ halSN +'').toggleClass('collapse');
  if(halSN == 1 && sn1 == '')
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
  if(halSN == 2 && sn2 == '')
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
  if(halSN == 3 && sn3 == '')
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
  if(halSN == 4 && sn4 == '')
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
  if(halSN == 5)
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('yellow');
  }
  if(halSN == 2)
  {
    EMR_ASWAL_BDN_PR_SN1Back.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Back.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Back.classList.remove('white');
  }
});

$('#EMR_ASWAL_BDN_PR_SN1Back').click(function() {
  $('#EMR_ASWAL_BDN_PR_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN3_'+ halSN +'').toggleClass('collapse');
  halSN--;
  $('#EMR_ASWAL_BDN_PR_SN1_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN2_'+ halSN +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_PR_SN3_'+ halSN +'').toggleClass('collapse');
  if(halSN == 1)
  {
    EMR_ASWAL_BDN_PR_SN1Back.disabled = true;
    EMR_ASWAL_BDN_PR_SN1Back.classList.add('white');
    EMR_ASWAL_BDN_PR_SN1Back.classList.remove('yellow');
  }
  if(sn2 == ''|| sn3 == '' || sn4 =='' || sn5 == '')
  {
    EMR_ASWAL_BDN_PR_SN1Next.disabled = false;
    EMR_ASWAL_BDN_PR_SN1Next.classList.add('yellow');
    EMR_ASWAL_BDN_PR_SN1Next.classList.remove('green');
  }
});
//END Halaman 3

//START Halaman 4
$('#EMR_ASWAL_BDN_PR_StatKawin1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_StatKawinTxt2').value == "no")
  {
    $("#EMR_ASWAL_BDN_PR_StatKawinTxt").toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_kawin").focus();
    $("#EMR_ASWAL_BDN_PR_StatKawinTxt2").val('Ya');
  }
});
$('#EMR_ASWAL_BDN_PR_StatKawin2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_StatKawinTxt2').value == "Ya")
  {
    $("#EMR_ASWAL_BDN_PR_StatKawinTxt").toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_kawin").val('');
    $("#EMR_ASWAL_BDN_PR_StatKawinTxt2").val('No');
  }
});
$('#EMR_ASWAL_BDN_PR_StatKawinS1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_StatKawinTxt2S').value == "no")
  {
    $("#EMR_ASWAL_BDN_PR_StatKawinTxtS").toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_kawinS").focus();
    $("#EMR_ASWAL_BDN_PR_StatKawinTxt2S").val('Ya');
  }
});
$('#EMR_ASWAL_BDN_PR_StatKawinS2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_StatKawinTxt2S').value == "Ya")
  {
    $("#EMR_ASWAL_BDN_PR_StatKawinTxtS").toggleClass('collapse');
    $("#EMR_ASWAL_BDN_PR_kawinS").val('');
    $("#EMR_ASWAL_BDN_PR_StatKawinTxt2S").val('No');
  }
});
//END Halaman 4

//START Halaman 5
$('#EMR_ASWAL_BDN_PR_RbtnAlergiOYA').click(function() {
  if(alergiobatstatus.value == "Tidak")
  {
    $("#EMR_ASWAL_BDN_PR_InputAlergiObat").toggleClass('collapse');
    $("#alergiobat_asesmen_awal").focus();
    $("#alergiobatstatus").val('Ya');
  }
  halamanBID5 = 'Ya';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
});

$('#EMR_ASWAL_BDN_PR_RbtnAlergiOTIDAK').click(function() {
  if(alergiobatstatus.value == "Ya")
  {
    $("#EMR_ASWAL_BDN_PR_InputAlergiObat").toggleClass('collapse');
    $("#alergiobat_asesmen_awal").val('');
    $("#alergiobatstatus").val('Tidak');
  }
  halamanBID5 = 'Ya';
  EMR_ASWAL_BDN_PR_HalamanNext.disabled = false;
  EMR_ASWAL_BDN_PR_HalamanNext.classList.add('green');
  EMR_ASWAL_BDN_PR_HalamanNext.classList.remove('white');
});

$("#alergiobat_asesmen_awal").focusout(function() {
  if(alergiobat_asesmen_awal.value =='')
  {
    alert("Alergi obat belum di isi, centang akan dihapus otomatis dan dianggap pasien tidak memiliki Alergi obat lain");
    $('#EMR_ASWAL_BDN_PR_RbtnAlergiOYA').removeAttr('checked');
    EMR_ASWAL_BDN_PR_RbtnAlergiOTIDAK.checked = true;
    $("#alergiobat_asesmen_awal").val('');
    $("#alergiobatstatus").val('Tidak');
    $("#EMR_ASWAL_BDN_PR_InputAlergiObat").toggleClass('collapse');
  }
});
//END Halaman 5

//Start halaman 6
$('#EMR_ASWAL_BDN_PR_tglHPHT').on('change', function() {
  var dates = $(this).val();

  var dd = dates.getDate();
  var mm = dates.getMonth() + 1;
  var y = dates.getFullYear();

  var someFormattedDate = dd + '/'+ mm + '/'+ y;

  $('#EMR_ASWAL_BDN_PR_HPL').val(someFormattedDate);
});
//End halaman 6

//Start halaman 7
$('#EMR_ASWAL_BDN_PR_RbtPrematur').click(function() {
  document.getElementById('EMR_ASWAL_BDN_PR_RKprematur').disabled = false;
  document.getElementById('EMR_ASWAL_BDN_PR_RKimmatur').disabled = true;
  document.getElementById('EMR_ASWAL_BDN_PR_RKabortus').disabled = true;
});
$('#EMR_ASWAL_BDN_PR_RbtImmatur').click(function() {
  document.getElementById('EMR_ASWAL_BDN_PR_RKimmatur').disabled = false;
  document.getElementById('EMR_ASWAL_BDN_PR_RKprematur').disabled = true;
  document.getElementById('EMR_ASWAL_BDN_PR_RKabortus').disabled = true;
});
$('#EMR_ASWAL_BDN_PR_RbtAbortus').click(function() {
  document.getElementById('EMR_ASWAL_BDN_PR_RKabortus').disabled = false;
  document.getElementById('EMR_ASWAL_BDN_PR_RKimmatur').disabled = true;
  document.getElementById('EMR_ASWAL_BDN_PR_RKprematur').disabled = true;
});
//End halaman 7

//Start halaman 8
var resikohamil = 2;
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko1').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko2').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko3').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko4').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko5').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko5').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko6').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko6').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko7').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko7').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko8').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko8').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko9').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko9').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko10').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko10').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko11').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko11').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko12').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko12').checked == true)
  {
    resikohamil = resikohamil + 8;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 8;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko13').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko13').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko14').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko14').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko15').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko15').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko16').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko16').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko17').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko17').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko18').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko18').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko19').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko19').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko20').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko20').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko21').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko21').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko22').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko22').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko23').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko23').checked == true)
  {
    resikohamil = resikohamil + 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 4;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko24').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko24').checked == true)
  {
    resikohamil = resikohamil + 8;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 8;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko25').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko25').checked == true)
  {
    resikohamil = resikohamil + 8;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 8;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko26').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko26').checked == true)
  {
    resikohamil = resikohamil + 8;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 8;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
$('#EMR_ASWAL_BDN_PR_CbtnMasalahresiko27').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_PR_CbtnMasalahresiko27').checked == true)
  {
    resikohamil = resikohamil + 8;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
  else
  {
    resikohamil = resikohamil - 8;
    $('#EMR_ASWAL_BDN_PR_SkorResiko').html(resikohamil);
    if(resikohamil < 3 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan rendah, persalinan dilakukan dibidan/polindes</b>');
    }
    else if (resikohamil < 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Kehamilan risiko tinggi, persalinan dilakukan di puskesmas</b>');
    }
    else if (resikohamil > 11 )
    {
      $('#EMR_ASWAL_BDN_PR_SkalaResiko').html('<b>Risiko kehamilan sangat tingggi</b>');
    }
  }
});
//End halaman 8

$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#alergiobat_asesmen_awal" ).bind( "keydown", function( event ) {
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

$('#EMR_ASWAL_BDN_btnselanjutnyaPerawat').click(function() {
  var form_data = {
    VerPassAsesmen: $('#VerPassAsesmen').val(),
    EMR_ASWAL_BDN_userPerPerawat: $('#EMR_ASWAL_BDN_userPerPerawat').val(),
    EMR_ASWAL_BDN_passPerPerawat: $('#EMR_ASWAL_BDN_passPerPerawat').val(),
    EMR_ASWAL_BDN_statver: $('#EMR_ASWAL_BDN_statver').val()
  };
  $.ajax({
    url: base_url + "emr/btnSelanjutnyaEMR_AWAL",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if (msg == 'msg-Selanjutnya_AWAL')
      {
        $("#modalAlertCounter_perawat").modal('show');
      }
      else if (msg == 'msg-UPPerKosongPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASWAL_BDN_PR').html('<div class="alert alert-danger">User dan Password dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-UserPerKosongPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASWAL_BDN_PR').html('<div class="alert alert-danger">User dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-PassPerKosongPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASWAL_BDN_PR').html('<div class="alert alert-danger">Password dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-UserPerSalahPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASWAL_BDN_PR').html('<div class="alert alert-danger text-center">User Anda Salah!</div>');
      }
      else if (msg == 'msg-PassPerSalahPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASWAL_BDN_PR').html('<div class="alert alert-danger text-center">Password Anda Salah!</div>');
      }
      else if (msg == 'msg-PassPer1SalahPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASWAL_BDN_PR').html('<div class="alert alert-danger text-center">Password Anda Salah!</div>');
      }
      else if (msg == 'msg-PassPer1KosongPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASWAL_BDN_PR').html('<div class="alert alert-danger">Password dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else
      {
        $('#alert-msg-EMR_ASWAL_BDN_PR').html('<div class="alert alert-danger">' + msg +'</div>');
      }
    }
  });
  return false;
});

$('#EMR_ASWAL_BDN_btnselanjutnyaPerawat2').click(function() {
  if (EMR_ASWAL_BDN_userPerPerawat.value != "")
  {
    EMR_ASWAL_BDN_userPerPerawatHalDok.value = EMR_ASWAL_BDN_userPerPerawat.value;
  }
  $('#EMR_ASWAL_BDN_PR_btnCommand').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_DR_btnCommand').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_stepPerawat').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_stepDokter').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_HalamanPerawat').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_HalamanDokter').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_FrmRPerawat').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_FrmRDokter').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_judulHalaman').html('ASESMEN AWAL DOKTER PASIEN RAWAT JALAN');
  if(document.getElementById('alergiobat_asesmen_awal').value != '')
  {
    document.getElementById('alergiobat2').value = document.getElementById('alergiobat_asesmen_awal').value;
    document.getElementById('EMR_ASWAL_BDN_DR_RbtnAlergiOYA').checked = true;
    if(document.getElementById('alergiobatstatus2').value == 'Tidak')
    {
      $('#EMR_ASWAL_BDN_DR_InputalergiObat2').toggleClass('collapse');
      $('#alergiobatstatus2').val('Ya');
    }
  }
  //$('#tekanandarah2').val(tekanandarah.value);
  $('#EMR_ASWAL_BDN_PR_TDSistolik2').val(EMR_ASWAL_BDN_PR_TDSistolik.value);
  $('#EMR_ASWAL_BDN_PR_TDDiastolik2').val(EMR_ASWAL_BDN_PR_TDDiastolik.value);
  $('#EMR_ASWAL_BDN_PR_nadi2').val(EMR_ASWAL_BDN_PR_nadi.value);
  $('#EMR_ASWAL_BDN_PR_suhutubuh2').val(EMR_ASWAL_BDN_PR_suhutubuh.value);
  $('#EMR_ASWAL_BDN_PR_respiratory2').val(EMR_ASWAL_BDN_PR_respiratory.value);
  $('#EMR_ASWAL_BDN_PR_beratbadan2').val(EMR_ASWAL_BDN_PR_beratbadan.value);
  $('#EMR_ASWAL_BDN_PR_tinggibadan2').val(EMR_ASWAL_BDN_PR_tinggibadan.value);
  $('#EMR_ASWAL_BDN_PR_Nilai_BMI2').html(EMR_ASWAL_BDN_PR_Nilai_BMI.innerHTML);
  $('#EMR_ASWAL_BDN_PR_Kategori_BMI2').html(EMR_ASWAL_BDN_PR_Kategori_BMI.innerHTML);
  $("#alert-msg-EMR_ASWAL_BDN_PR").empty();
  if(document.getElementById('EMR_ASWAL_BDN_PR_NadiCH_reguler').checked == true)
  {
    document.getElementById('EMR_ASWAL_BDN_PR_NadiCH_reguler2').checked = true;
  }
  else
  {
    document.getElementById('EMR_ASWAL_BDN_PR_NadiCH_reguler2').checked = false;
  }
  if(document.getElementById('EMR_ASWAL_BDN_PR_NadiCH_irreguler').checked == true)
  {
    document.getElementById('EMR_ASWAL_BDN_PR_NadiCH_irreguler2').checked = true;
  }
  else
  {
    document.getElementById('EMR_ASWAL_BDN_PR_NadiCH_irreguler2').checked = false;
  }
  if(document.getElementById('EMR_ASWAL_BDN_PR_RespiratoryCH_teratur').checked == true)
  {
    document.getElementById('EMR_ASWAL_BDN_PR_RespiratoryCH_teratur2').checked = true;
  }
  else
  {
    document.getElementById('EMR_ASWAL_BDN_PR_RespiratoryCH_teratur2').checked = false;
  }
  if(document.getElementById('EMR_ASWAL_BDN_PR_RespiratoryCH_titeratur').checked == true)
  {
    document.getElementById('EMR_ASWAL_BDN_PR_RespiratoryCH_titeratur2').checked = true;
  }
  else
  {
    document.getElementById('EMR_ASWAL_BDN_PR_RespiratoryCH_titeratur2').checked = false;
  }
});

$(document).ready(function() {

  var anak = $('#EMR_ASWAL_BDN_AppendBidanTambahAnak');

  var nomer = 1;

  $('#EMR_ASWAL_BDN_PR_BtnInsertanak').click(function() {
    var Isian1 = document.getElementById('EMR_ASWAL_BDN_PR_RKsuamike').value;
    var Isian2 = document.getElementById('EMR_ASWAL_BDN_PR_RKjenisBBL').value;
    var Isian3 = document.getElementById('EMR_ASWAL_BDN_PR_RKjenisPB').value;
    var Isian4 = document.getElementById('EMR_ASWAL_BDN_PR_RKhidupusiaT').value;
    var Isian5 = document.getElementById('EMR_ASWAL_BDN_PR_RKhidupusiaB').value;
    var Isian6 = document.getElementById('EMR_ASWAL_BDN_PR_RKhidupusiaH').value;
    var Isian7 = document.getElementById('EMR_ASWAL_BDN_PR_SebabMati').value;
    var Isian8 = document.getElementById('EMR_ASWAL_BDN_PR_CaraLahir').value;
    var Isian9 = '';
    var Isian10 = '';
    if(document.getElementById('EMR_ASWAL_BDN_PR_RbtPrematur').checked == true)
    {
      Isian9 = 'Prematur';
      Isian10 = document.getElementById('EMR_ASWAL_BDN_PR_RKprematur').value;
    }
    else if(document.getElementById('EMR_ASWAL_BDN_PR_RbtImmatur').checked == true)
    {
      Isian9 = 'Immatur';
      Isian10 = document.getElementById('EMR_ASWAL_BDN_PR_RKimmatur').value;
    }
    else if(document.getElementById('EMR_ASWAL_BDN_PR_RbtAbortus').checked == true)
    {
      Isian9 = 'Abortus';
      Isian10 = document.getElementById('EMR_ASWAL_BDN_PR_RKabortus').value;
    }
    var Isian11 = '';
    if(document.getElementById('EMR_ASWAL_BDN_PR_RbtNifasYa').checked == true)
    {
      Isian11 = 'Normal';
    }
    else
    {
      Isian11 = document.getElementById('EMR_ASWAL_BDN_PR_TxtNifasTidak').value;
    }


    var clone = $('#EMR_ASWAL_BDN_AppendHasilBidanTambahAnak').clone().find("input:text").val("").end().appendTo('#EMR_ASWAL_BDN_AppendHasilBidanTambahAnak').append(
      '<div class="panel panel-default">'+
        '<div class="panel-heading">'+
          '<h4 class="panel-title">'+
            '<a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_'+ nomer +'" aria-expanded="true"> AnaK #'+ nomer +' </a>'+
          '</h4>'+
        '</div>'+
        '<div id="collapse_3_'+ nomer +'" class="panel-collapse collapse" aria-expanded="true">'+
          '<div class="panel-body">'+
            '<div class="col-md-4">'+
              '<label>Suami ke</label>'+
              '<input type="text" id="EMR_ASWAL_BDN_PR_RKsuamike[]" name="EMR_ASWAL_BDN_PR_RKsuamike[]" value="'+ Isian1 +'" class="form-control">'+
            '</div>'+
            '<div class="col-md-4">'+
              '<label>BBL</label>'+
              '<input type="text" id="EMR_ASWAL_BDN_PR_RKjenisBBL[]" name="EMR_ASWAL_BDN_PR_RKjenisBBL[]" value="'+ Isian2 +'" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">'+
            '</div>'+
            '<div class="col-md-4">'+
              '<label>PB</label>'+
              '<input type="text" id="EMR_ASWAL_BDN_PR_RKjenisPB[]" name="EMR_ASWAL_BDN_PR_RKjenisPB[]" value="'+ Isian3 +'" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">'+
            '</div>'+
            '</br>'+
            '<span class="col-md-12">Usia anak</span>'+
            '<div class="col-md-2">'+
              '<label>Tahun</label>'+
              '<input type="text" id="EMR_ASWAL_BDN_PR_RKhidupusiaT[]" name="EMR_ASWAL_BDN_PR_RKhidupusiaT[]" value="'+ Isian4 +'" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">'+
            '</div>'+
            '<div class="col-md-2">'+
              '<label>Bulan</label>'+
              '<input type="text" id="EMR_ASWAL_BDN_PR_RKhidupusiaB[]" name="EMR_ASWAL_BDN_PR_RKhidupusiaB[]" value="'+ Isian5 +'" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">'+
            '</div>'+
            '<div class="col-md-2">'+
              '<label>Hari</label>'+
              '<input type="text" id="EMR_ASWAL_BDN_PR_RKhidupusiaH[]" name="EMR_ASWAL_BDN_PR_RKhidupusiaH[]" value="'+ Isian6 +'" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">'+
            '</div>'+
            '<div class="col-md-6">'+
              '<label>Sebab Kematian </label>'+
              '<input type="text" id="EMR_ASWAL_BDN_PR_SebabMati[]" name="EMR_ASWAL_BDN_PR_SebabMati[]" value="'+ Isian7 +'" class="form-control">'+
            '</div>'+
            '<div class="col-md-12">'+
            '</br>'+
            '</div>'+
            '<div class="col-md-4">'+
              '<label> Riwayat lahir : '+ Isian9 +' </label>'+
            '</div>'+
            '<div class="col-md-8">'+
              '<input type="text" id="EMR_ASWAL_BDN_PR_Riwkeh[]" name="EMR_ASWAL_BDN_PR_Riwkeh[]" value="'+ Isian10 +'" class="form-control">'+
            '</div>'+
            '<div class="col-md-12">'+
            '</br>'+
            '</div>'+
            '<div class="col-md-6">'+
              '<label>Nifas / Lactasi </label>'+
              '<input type="text" id="EMR_ASWAL_BDN_PR_TxtNifas[]" name="EMR_ASWAL_BDN_PR_TxtNifas[]" value="'+ Isian11 +'" class="form-control">'+
            '</div>'+
            '<div class="col-md-6">'+
              '<label>Cara Lahir </label>'+
              '<input type="text" id="EMR_ASWAL_BDN_PR_CaraLahir[]" name="EMR_ASWAL_BDN_PR_CaraLahir[]" value="'+ Isian8 +'" class="form-control">'+
            '</div>'+
          '</div>'+
        '</div>'+
      '</div>');
    anak.before(clone);

    nomer++;
    $('#nomeranak').html(nomer);
    document.getElementById('EMR_ASWAL_BDN_PR_RKsuamike').value = '';
    document.getElementById('EMR_ASWAL_BDN_PR_RKjenisBBL').value = '';
    document.getElementById('EMR_ASWAL_BDN_PR_RKjenisPB').value = '';
    document.getElementById('EMR_ASWAL_BDN_PR_RKhidupusiaT').value = '';
    document.getElementById('EMR_ASWAL_BDN_PR_RKhidupusiaB').value = '';
    document.getElementById('EMR_ASWAL_BDN_PR_RKhidupusiaH').value = '';
    document.getElementById('EMR_ASWAL_BDN_PR_SebabMati').value = '';
    document.getElementById('EMR_ASWAL_BDN_PR_CaraLahir').value = '';
    document.getElementById('EMR_ASWAL_BDN_PR_RbtPrematur').checked = false;
    document.getElementById('EMR_ASWAL_BDN_PR_RKprematur').value = '';
    document.getElementById('EMR_ASWAL_BDN_PR_RbtImmatur').checked = false;
    document.getElementById('EMR_ASWAL_BDN_PR_RKimmatur').value = '';
    document.getElementById('EMR_ASWAL_BDN_PR_RbtAbortus').checked = false;
    document.getElementById('EMR_ASWAL_BDN_PR_RKabortus').value = '';
    document.getElementById('EMR_ASWAL_BDN_PR_RbtNifasYa').checked = false;
    document.getElementById('EMR_ASWAL_BDN_PR_RbtNifasTidak').checked = false;
    document.getElementById('EMR_ASWAL_BDN_PR_TxtNifasTidak').value = '';
  });
});

//halaman dokter
var EMR_ASWAL_BDN_subhalNext = document.getElementById('EMR_ASWAL_BDN_subhalNext');
var EMR_ASWAL_BDN_subhalBack = document.getElementById('EMR_ASWAL_BDN_subhalBack');
var EMR_ASWAL_BDN_fisikhalNext = document.getElementById('EMR_ASWAL_BDN_fisikhalNext');
var EMR_ASWAL_BDN_fisikhalBack = document.getElementById('EMR_ASWAL_BDN_fisikhalBack');
var EMR_ASWAL_BDN_KeluhanPenyakit = document.getElementById('EMR_ASWAL_BDN_KeluhanPenyakit');
var EMR_ASWAL_BDN_RiwayatPenyakitSekarang = document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitSekarang');
var EMR_ASWAL_BDN_KodeUnit_SP = document.getElementById('EMR_ASWAL_BDN_KodeUnit_SP');
var beratbadan2 = document.getElementById('beratbadan2');
var tinggibadan2 = document.getElementById('tinggibadan2');
var Nilai_BMI_dokter = document.getElementById('Nilai_BMI_dokter');
var Kategori_BMI_dokter = document.getElementById('Kategori_BMI_dokter');
var hal_dokbdn = 1;
var hal_dokbdn_1 = '';
var hal_dokbdn_2a = '';
var hal_dokbdn_2b = '';
var hal_dokbdn_3 = '';
var hal_dokbdn_4 = '';
var hal_dokbdn_5a = '';
var hal_dokbdn_5b = '';
var hal_dokbdn_6 = '';
var halamandokbdn1 = 'Tidak';
var halamandokbdn2 = 'Tidak';
var halamandokbdn3 = 'Tidak';
var halamandokbdn4 = 'Tidak';
var halamandokbdn5 = 'Tidak';
var halamandokbdn6 = 'Tidak';
var haldokbdn = 1;
var haldokbdn2 = 0;

$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#alergiobat2" ).bind( "keydown", function( event ) {
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

$('#EMR_ASWAL_BDN_HalamanNext').click(function() {
  haldokbdn++;
  haldokbdn2++;

  if(haldokbdn == 2)
  {
    if(halamandokbdn2 == 'Tidak')
    {
      EMR_ASWAL_BDN_HalamanNext.disabled = true;
      EMR_ASWAL_BDN_HalamanNext.classList.add('white');
      EMR_ASWAL_BDN_HalamanNext.classList.remove('green');
    }
  }
  else if(haldokbdn == 3)
  {
    if(halamandokbdn3 == 'Tidak' || halamandokbdn3 == 'Ya')
    {
      EMR_ASWAL_BDN_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
    }
  }
  else if(haldokbdn == 4)
  {
    EMR_ASWAL_BDN_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('green');
  }

  $('#EMR_ASWAL_BDN_Halaman'+ haldokbdn +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_Halaman'+ haldokbdn2 +'').toggleClass('collapse');

  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').html(haldokbdn2);
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').toggleClass('white');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').toggleClass('green');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').toggleClass('col-md-8');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').toggleClass('col-md-1');
  if(haldokbdn == 2)
  {
    $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').html('2. Pemeriksaan Fisik');
  }
  else if(haldokbdn == 3)
  {
    $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').html('3. Status Lokalis');
  }
  else if(haldokbdn == 4)
  {
    $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').html('4. Diagnosis');
  }
  else if(haldokbdn == 5)
  {
    $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').html('5. Rencana');
  }
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').toggleClass('green');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').toggleClass('white');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').toggleClass('col-md-1');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').toggleClass('col-md-8');

  if(haldokbdn == 2)
  {
    EMR_ASWAL_BDN_HalamanBack.disabled = false;
    EMR_ASWAL_BDN_HalamanBack.classList.remove('white');
    EMR_ASWAL_BDN_HalamanBack.classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_HalamanBack').click(function() {
  $('#EMR_ASWAL_BDN_Halaman'+ haldokbdn +'').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_Halaman'+ haldokbdn2 +'').toggleClass('collapse');

  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').html(hal);
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').toggleClass('white');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').toggleClass('green');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').toggleClass('col-md-8');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn +'').toggleClass('col-md-1');
  if(haldokbdn2 == 1)
  {
    $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').html('1. Anamnesa');
  }
  else if(haldokbdn2 == 2)
  {
    $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').html('2. Pemeriksaan Fisik');
  }
  else if(haldokbdn2 == 3)
  {
    $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').html('3. Status Lokalis');
  }
  else if(haldokbdn2 == 4)
  {
    $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').html('4. Diagnosis');
  }
  else if(haldokbdn2 == 5)
  {
    $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').html('5. Renccana');
  }
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').toggleClass('green');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').toggleClass('white');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').toggleClass('col-md-1');
  $('#EMR_ASWAL_BDN_btnHalaman'+ haldokbdn2 +'').toggleClass('col-md-8');

  haldokbdn--;
  haldokbdn2--;

  if(haldokbdn == 1)
  {
    EMR_ASWAL_BDN_HalamanBack.disabled = true;
    EMR_ASWAL_BDN_HalamanBack.classList.add('white');
    EMR_ASWAL_BDN_HalamanBack.classList.remove('green');
    if(halamandokbdn1 == 'Ya')
    {
      EMR_ASWAL_BDN_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
    }
  }
  if(haldokbdn == 2)
  {
    if(halamandokbdn2 == 'Ya')
    {
      EMR_ASWAL_BDN_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
    }
  }
  if(haldokbdn == 3)
  {
    if(halamandokbdn3 == 'Tidak' || halamandokbdn3 == 'Ya')
    {
      EMR_ASWAL_BDN_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
    }
  }
  if(haldokbdn == 4)
  {
    if(halamandokbdn4 == 'Ya')
    {
      EMR_ASWAL_BDN_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
    }
  }
  if(haldokbdn == 5)
  {
    if(halamandokbdn5 == 'Ya')
    {
      EMR_ASWAL_BDN_HalamanNext.disabled = false;
      EMR_ASWAL_BDN_HalamanNext.classList.add('green');
      EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
    }
  }
});

//halaman 1 START
//sub halaman 1.1 START
$('#EMR_ASWAL_BDN_Keluhanutama1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Keluhanutama1').checked == true)
  {
    hal_dokbdn_1 = hal_dokbdn_1 + 1;
  }
  else
  {
    hal_dokbdn_1 = hal_dokbdn_1 - 1;
  }
  if(hal_dokbdn_1 > 0 && EMR_ASWAL_BDN_RiwayatPenyakitSekarang.value != '')
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_Keluhanutama2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Keluhanutama2').checked == true)
  {
    hal_dokbdn_1 = hal_dokbdn_1 + 1;
  }
  else
  {
    hal_dokbdn_1 = hal_dokbdn_1 - 1;
  }
  if(hal_dokbdn_1 > 0 && EMR_ASWAL_BDN_RiwayatPenyakitSekarang.value != '')
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_Keluhanutama3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Keluhanutama3').checked == true)
  {
    hal_dokbdn_1 = hal_dokbdn_1 + 1;
  }
  else
  {
    hal_dokbdn_1 = hal_dokbdn_1 - 1;
  }
  if(hal_dokbdn_1 > 0 && EMR_ASWAL_BDN_RiwayatPenyakitSekarang.value != '')
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_Keluhanutama4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Keluhanutama4').checked == true)
  {
    hal_dokbdn_1 = hal_dokbdn_1 + 1;
  }
  else
  {
    hal_dokbdn_1 = hal_dokbdn_1 - 1;
  }
  if(hal_dokbdn_1 > 0 && EMR_ASWAL_BDN_RiwayatPenyakitSekarang.value != '')
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_Keluhanutama5').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Keluhanutama5').checked == true)
  {
    hal_dokbdn_1 = hal_dokbdn_1 + 1;
  }
  else
  {
    hal_dokbdn_1 = hal_dokbdn_1 - 1;
  }
  if(hal_dokbdn_1 > 0 && EMR_ASWAL_BDN_RiwayatPenyakitSekarang.value != '')
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_Keluhanutama6').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Keluhanutama6').checked == true)
  {
    hal_dokbdn_1 = hal_dokbdn_1 + 1;
  }
  else
  {
    hal_dokbdn_1 = hal_dokbdn_1 - 1;
  }
  if(hal_dokbdn_1 > 0 && EMR_ASWAL_BDN_RiwayatPenyakitSekarang.value != '')
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_Keluhanutama7').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Keluhanutama7').checked == true)
  {
    hal_dokbdn_1 = hal_dokbdn_1 + 1;
  }
  else
  {
    hal_dokbdn_1 = hal_dokbdn_1 - 1;
  }
  if(hal_dokbdn_1 > 0 && EMR_ASWAL_BDN_RiwayatPenyakitSekarang.value != '')
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

var tamdok1 = 0;
$('#EMR_ASWAL_BDN_Keluhanutama8').keyup(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Keluhanutama8').value == '')
  {
    if(tamdok1 > 0)
    {
      hal_dokbdn_1 = hal_dokbdn_1 - 1;
      tamdok1 = 0;
    }
  }
  else
  {
    if(tamdok1 == 0)
    {
      hal_dokbdn_1 = hal_dokbdn_1 + 1;
      tamdok1 = 1;
    }
  }
  if(hal_dokbdn_1 > 0 && EMR_ASWAL_BDN_RiwayatPenyakitSekarang.value != '')
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_RiwayatPenyakitSekarang').keyup(function() {
  if(hal_dokbdn_1 > 0 && EMR_ASWAL_BDN_RiwayatPenyakitSekarang.value != '')
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});
//sub halaman 1.1 END

//sub halaman 1.2 START
$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluA1').checked == true)
  {
    hal_dokbdn_2a= hal_dokbdn_2a+ 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA7').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_2a= hal_dokbdn_2a- 1;
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluA2').checked == true)
  {
    hal_dokbdn_2a= hal_dokbdn_2a+ 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA7').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_2a= hal_dokbdn_2a- 1;
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});
$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluA3').checked == true)
  {
    hal_dokbdn_2a= hal_dokbdn_2a+ 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA7').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_2a= hal_dokbdn_2a- 1;
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluA4').checked == true)
  {
    hal_dokbdn_2a= hal_dokbdn_2a+ 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA7').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_2a= hal_dokbdn_2a- 1;
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA5').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluA5').checked == true)
  {
    hal_dokbdn_2a= hal_dokbdn_2a+ 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA7').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_2a= hal_dokbdn_2a- 1;
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

var tamdok2 = 0;

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA6').keyup(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluA6').value == '')
  {
    if(tamdok2 > 0)
    {
      hal_dokbdn_2a= hal_dokbdn_2a- 1;
      tamdok2 = 0;
    }
  }
  else
  {
    if(tam1 == 0)
    {
      hal_dokbdn_2a= hal_dokbdn_2a+ 1;
      tamdok2 = 1;
      $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA7').removeAttr('checked');
    }
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA7').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluA7').checked == true)
  {
    hal_dokbdn_2a = hal_dokbdn_2a + 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA4').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA5').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluA6').val('');
  }
  else
  {
    hal_dokbdn_2a= hal_dokbdn_2a- 1;
  }
  if(hal_dokbdn_2a > 0 && (document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluB7').checked == true || hal_dokbdn_2b > 0))
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluB1').checked == true)
  {
    hal_dokbdn_2b= hal_dokbdn_2b+ 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB7').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_2b= hal_dokbdn_2b- 1;
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluB2').checked == true)
  {
    hal_dokbdn_2b= hal_dokbdn_2b+ 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB7').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_2b= hal_dokbdn_2b- 1;
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluB3').checked == true)
  {
    hal_dokbdn_2b= hal_dokbdn_2b+ 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB7').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_2b= hal_dokbdn_2b- 1;
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluB4').checked == true)
  {
    hal_dokbdn_2b= hal_dokbdn_2b+ 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB7').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_2b= hal_dokbdn_2b- 1;
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB5').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluB5').checked == true)
  {
    hal_dokbdn_2b= hal_dokbdn_2b+ 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB7').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_2b= hal_dokbdn_2b- 1;
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

var tamdok3 = 0;

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB6').keyup(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluB6').value == '')
  {
    if(tamdok3 > 0)
    {
      hal_dokbdn_2b= hal_dokbdn_2b- 1;
      tamdok3 = 0;
    }
  }
  else
  {
    if(tamdok3 == 0)
    {
      hal_dokbdn_2b= hal_dokbdn_2b+ 1;
      tamdok3 = 1;
      $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB7').removeAttr('checked');
    }
  }
  if(hal_dokbdn_2a > 0 && hal_dokbdn_2b > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});

$('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB7').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluB7').checked == true)
  {
    hal_dokbdn_2b = hal_dokbdn_2b + 1;
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB4').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB5').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatPenyakitDahuluB6').val('');
  }
  else
  {
    hal_dokbdn_2b= hal_dokbdn_2b- 1;
  }
  if(hal_dokbdn_2b > 0 && (document.getElementById('EMR_ASWAL_BDN_RiwayatPenyakitDahuluA7').checked == true || hal_dokbdn_2a > 0))
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
  }
});
//sub halaman 1.2 END

//sub halaman 1.3 START
$('#EMR_ASWAL_BDN_RbtnAlergiOYA').click(function() {
  if(document.getElementById('alergiobatstatus2').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_InputalergiObat2').toggleClass('collapse');
    $('#alergiobat2').focus();
    $('#alergiobatstatus2').val('Ya');
  }
  hal_dokbdn_3 = 0;
  EMR_ASWAL_BDN_subhalNext.disabled = false;
  EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
  EMR_ASWAL_BDN_subhalNext.classList.remove('white');
});

$('#EMR_ASWAL_BDN_RbtnAlergiOTIDAK').click(function() {
  if(document.getElementById('alergiobatstatus2').value == "Ya")
  {
    $("#EMR_ASWAL_BDN_InputalergiObat2").toggleClass('collapse');
    $("#alergiobat2").val('');
    $("#alergiobatstatus2").val('Tidak');
  }
  hal_dokbdn_3 = 0;
  EMR_ASWAL_BDN_subhalNext.disabled = false;
  EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
  EMR_ASWAL_BDN_subhalNext.classList.remove('white');
});

$("#alergiobat2").focusout(function() {
  if(document.getElementById('alergiobat2').value =='')
  {
    alert("Alergi obat belum di isi, centang akan dihapus otomatis dan dianggap pasien tidak memiliki Alergi obat lain");
    $('#EMR_ASWAL_BDN_RbtnAlergiOYA').removeAttr('checked');
    document.getElementById('EMR_ASWAL_BDN_RbtnAlergiOTIDAK').checked = true;
    $("#alergiobat2").val('');
    $("#alergiobatstatus2").val('Tidak');
    $("#EMR_ASWAL_BDN_InputalergiObat2").toggleClass('collapse');
  }
});
//sub halaman 1.3 END

//sub halaman 1.4 START
$('#EMR_ASWAL_BDN_RiwayatSosial1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatSosial1').checked == true)
  {
    //hal_dokbdn_4 = 0;
    $('#EMR_ASWAL_BDN_RiwayatSosial2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatSosial3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_RiwayatSosial4').val('');
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
  }
  else
  {
    //hal_dokbdn_4 = '';
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
    EMR_ASWAL_BDN_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('green');
  }
});

$('#EMR_ASWAL_BDN_RiwayatSosial2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatSosial2').checked == true)
  {
    hal_dokbdn_4 = hal_dokbdn_4+ 1;
    $('#EMR_ASWAL_BDN_RiwayatSosial1').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_4 = hal_dokbdn_4- 1;
  }
  if(hal_dokbdn_4 > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
    EMR_ASWAL_BDN_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('green');
  }
});

$('#EMR_ASWAL_BDN_RiwayatSosial3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatSosial3').checked == true)
  {
    hal_dokbdn_4 = hal_dokbdn_4+ 1;
    $('#EMR_ASWAL_BDN_RiwayatSosial1').removeAttr('checked');
  }
  else
  {
    hal_dokbdn_4 = hal_dokbdn_4- 1;
  }
  if(hal_dokbdn_4 > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
    EMR_ASWAL_BDN_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('green');
  }
});

var tamdok4 = 0;
$('#EMR_ASWAL_BDN_RiwayatSosial4').keyup(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatSosial4').value == '')
  {
    if(tamdok4 > 0)
    {
      hal_dokbdn_4 = hal_dokbdn_4 - 1;
      tamdok4 = 0;
    }
  }
  else
  {
    if(tamdok4 == 0)
    {
      hal_dokbdn_4 = hal_dokbdn_4 + 1;
      tamdok4 = 1;
      $('#EMR_ASWAL_BDN_RiwayatSosial1').removeAttr('checked');
    }
  }
  if(hal_dokbdn_4 > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
  }
  else
  {
    EMR_ASWAL_BDN_subhalNext.disabled = true;
    EMR_ASWAL_BDN_subhalNext.classList.add('white');
    EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
    EMR_ASWAL_BDN_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_HalamanNext.classList.add('white');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('green');
  }
});
//sub halaman 1.4 END

//sub halaman 1.5 START
$('#EMR_ASWAL_BDN_RiwayatTumbuh1Ya').click(function() {
  hal_dokbdn_5a = 1;
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya3').value == 'show')
  {
    $('#EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya3').val('collapse');
    $('#EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya').val('');
  }
  if(hal_dokbdn_5a == 1 && hal_dokbdn_5b == 1)
  {
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
  }
});

$('#EMR_ASWAL_BDN_RiwayatTumbuh1Lain').click(function() {
  hal_dokbdn_5a = 1;
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya3').value == 'collapse')
  {
    $('#EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya3').val('show');
    $('#EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya').focus();
  }
  if(hal_dokbdn_5a == 1 && hal_dokbdn_5b == 1)
  {
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
  }
});

$("#EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya").focusout(function() {
  if(document.getElementById('EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya').value =='')
  {
    alert("Riwayat tumbuh kembang belum di isi, centang akan dihapus otomatis dan dianggap tumbuh kembang pasien baik");
    $('#EMR_ASWAL_BDN_RiwayatTumbuh1Lain').removeAttr('checked');
    document.getElementById('EMR_ASWAL_BDN_RiwayatTumbuh1Ya').checked = true;
    $("#EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya").val('');
    $("#EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya3").val('collapse');
    $("#EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya2").toggleClass('collapse');
  }
});

$('#EMR_ASWAL_BDN_RiwayatTumbuh1').click(function() {
  hal_dokbdn_5b = 1;
  if(hal_dokbdn_5a == 1 && hal_dokbdn_5b == 1)
  {
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
  }
});

$('#EMR_ASWAL_BDN_RiwayatTumbuh2').click(function() {
  hal_dokbdn_5b = 1;
  if(hal_dokbdn_5a == 1 && hal_dokbdn_5b == 1)
  {
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
  }
});
$('#EMR_ASWAL_BDN_RiwayatTumbuh3').keyup(function() {
  hal_dokbdn_5b = 1;
  if(hal_dokbdn_5a == 1 && hal_dokbdn_5b == 1)
  {
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
  }
});

$('#EMR_ASWAL_BDN_subhalNext').click(function() {
  $('#EMR_ASWAL_BDN_anamnesa_'+hal_dokbdn).toggleClass('collapse');
  hal_dokbdn++;
  $('#EMR_ASWAL_BDN_anamnesa_'+hal_dokbdn).toggleClass('collapse');
  if(hal_dokbdn == 2)
  {
    EMR_ASWAL_BDN_subhalBack.disabled = false;
    EMR_ASWAL_BDN_subhalBack.classList.add('yellow');
    EMR_ASWAL_BDN_subhalBack.classList.remove('white');
  }
  if(hal_dokbdn == 3)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
  if(hal_dokbdn == 4)
  {
    halamandokbdn1 = 'Ya';
  }
  if(hal_dokbdn == 5)
  {
    halamandokbdn1 = 'Ya';
  }
  EMR_ASWAL_BDN_subhalNext.disabled = true;
  EMR_ASWAL_BDN_subhalNext.classList.add('white');
  EMR_ASWAL_BDN_subhalNext.classList.remove('yellow');
});
$('#EMR_ASWAL_BDN_subhalBack').click(function() {
  $('#EMR_ASWAL_BDN_anamnesa_'+hal_dokbdn).toggleClass('collapse');
  hal_dokbdn--;
  $('#EMR_ASWAL_BDN_anamnesa_'+hal_dokbdn).toggleClass('collapse');
  if(hal_dokbdn == 1)
  {
    EMR_ASWAL_BDN_subhalBack.disabled = true;
    EMR_ASWAL_BDN_subhalBack.classList.add('white');
    EMR_ASWAL_BDN_subhalBack.classList.remove('yellow');
    if(hal_dokbdn_1 == 0)
    {
      EMR_ASWAL_BDN_subhalNext.disabled = false;
      EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
      EMR_ASWAL_BDN_subhalNext.classList.remove('white');
    }
  }
  if(hal_dokbdn_2a > 0)
  {
    EMR_ASWAL_BDN_subhalNext.disabled = false;
    EMR_ASWAL_BDN_subhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_subhalNext.classList.remove('white');
  }
});
//halaman 1 END

//Halaman 2 START
//Halaman 2.1 START
$('#beratbadan2').keyup(function() {
  var tinggibd = tinggibadan2.value/100;
  if(beratbadan2.value != '' && tinggibadan2.value != '')
  {
    var Nilai_BMI3 = beratbadan2.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    Nilai_BMI_dokter.innerHTML = Nilai_BMI3.toFixed(2) + " " + satuanBMI;

    if(Nilai_BMI3 < 18.5)
    {
      Kategori_BMI_dokter.innerHTML = "Underweight";
    }
    else if(Nilai_BMI3 < 23)
    {
      Kategori_BMI_dokter.innerHTML = "Normo Weight";
    }
    else if(Nilai_BMI3 < 27)
    {
      Kategori_BMI_dokter.innerHTML = "Over Weight";
    }
    else if(Nilai_BMI3 >= 27)
    {
      Kategori_BMI_dokter.innerHTML = "Obese";
    }
  }
});

$('#tinggibadan2').keyup(function() {
  var tinggibd = tinggibadan2.value/100;
  if(beratbadan2.value != '' && tinggibadan2.value != '')
  {
    var Nilai_BMI3 = beratbadan2.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    Nilai_BMI_dokter.innerHTML = Nilai_BMI3.toFixed(2) + " " + satuanBMI;

    if(Nilai_BMI3 < 18.5)
    {
      Kategori_BMI_dokter.innerHTML = "Underweight";
    }
    else if(Nilai_BMI3 < 23)
    {
      Kategori_BMI_dokter.innerHTML = "Normo Weight";
    }
    else if(Nilai_BMI3 < 27)
    {
      Kategori_BMI_dokter.innerHTML = "Over Weight";
    }
    else if(Nilai_BMI3 >= 27)
    {
      Kategori_BMI_dokter.innerHTML = "Obese";
    }
  }
});

var gcs = 0;
$('#EMR_ASWAL_BDN_GCSe').keyup(function() {
  if(document.getElementById('EMR_ASWAL_BDN_GCSe').value > 4)
  {
    alert("Nilai maksimal adalah 4, sistem akan memberikan nilai 4");
    document.getElementById('EMR_ASWAL_BDN_GCSe').value = 4;
  }

  gcs = parseInt(document.getElementById('EMR_ASWAL_BDN_GCSe').value) + parseInt(document.getElementById('EMR_ASWAL_BDN_GCSv').value) + parseInt(document.getElementById('EMR_ASWAL_BDN_GCSm').value);
  if(gcs <= 3)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Coma');
  }
  else if(gcs <= 6)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Sporo coma');
  }
  else if(gcs <= 9)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Delirium');
  }
  else if(gcs <= 11)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Somnolen');
  }
  else if(gcs <= 13)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Apatis');
  }
  else if(gcs <= 15)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Compos mentis');
  }
});

$('#EMR_ASWAL_BDN_GCSm').keyup(function() {
  if(document.getElementById('EMR_ASWAL_BDN_GCSm').value > 6)
  {
    alert("Nilai maksimal adalah 6, sistem akan memberikan nilai 6");
    document.getElementById('EMR_ASWAL_BDN_GCSm').value = 6;
  }

  gcs = parseInt(document.getElementById('EMR_ASWAL_BDN_GCSe').value) + parseInt(document.getElementById('EMR_ASWAL_BDN_GCSv').value) + parseInt(document.getElementById('EMR_ASWAL_BDN_GCSm').value);
  if(gcs <= 3)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Coma');
  }
  else if(gcs <= 6)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Sporo coma');
  }
  else if(gcs <= 9)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Delirium');
  }
  else if(gcs <= 11)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Somnolen');
  }
  else if(gcs <= 13)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Apatis');
  }
  else if(gcs <= 15)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Compos mentis');
  }
});

$('#EMR_ASWAL_BDN_GCSv').keyup(function() {
  if(document.getElementById('EMR_ASWAL_BDN_GCSv').value > 5)
  {
    alert("Nilai maksimal adalah 5, sistem akan memberikan nilai 5");
    document.getElementById('EMR_ASWAL_BDN_GCSv').value = 5;
  }

  gcs = parseInt(document.getElementById('EMR_ASWAL_BDN_GCSe').value) + parseInt(document.getElementById('EMR_ASWAL_BDN_GCSv').value) + parseInt(document.getElementById('EMR_ASWAL_BDN_GCSm').value);
  if(gcs <= 3)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Coma');
  }
  else if(gcs <= 6)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Sporo coma');
  }
  else if(gcs <= 9)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Delirium');
  }
  else if(gcs <= 11)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Somnolen');
  }
  else if(gcs <= 13)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Apatis');
  }
  else if(gcs <= 15)
  {
    $('#EMR_ASWAL_BDN_Kesadaran').val('Compos mentis');
  }
});
//Halaman 2.1 END

//Halaman 2.2 START
$('#EMR_ASWAL_BDN_btnAnemis').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAnemis').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAnemis').html('-');
    $('#EMR_ASWAL_BDN_btnAnemis').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAnemis').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAnemis').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAnemis').html('+');
    $('#EMR_ASWAL_BDN_btnAnemis').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAnemis').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAnemis').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnIkterus').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnIkterus').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnIkterus').html('-');
    $('#EMR_ASWAL_BDN_btnIkterus').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnIkterus').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnIkterus').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnIkterus').html('+');
    $('#EMR_ASWAL_BDN_btnIkterus').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnIkterus').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnIkterus').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnCyanosis').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnCyanosis').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnCyanosis').html('-');
    $('#EMR_ASWAL_BDN_btnCyanosis').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnCyanosis').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnCyanosis').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnCyanosis').html('+');
    $('#EMR_ASWAL_BDN_btnCyanosis').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnCyanosis').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnCyanosis').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnDipsneo').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnDipsneo').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnDipsneo').html('-');
    $('#EMR_ASWAL_BDN_btnDipsneo').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnDipsneo').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnDipsneo').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnDipsneo').html('+');
    $('#EMR_ASWAL_BDN_btnDipsneo').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnDipsneo').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnDipsneo').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_pupilKanan').keyup(function() {
  if(document.getElementById('EMR_ASWAL_BDN_pupilKanan').value == document.getElementById('EMR_ASWAL_BDN_pupilKiri').value)
  {
    $('#pupilstat').html('Isokor');
  }
  else
  {
    $('#pupilstat').html('Anisokor');
  }
});
$('#EMR_ASWAL_BDN_pupilKiri').keyup(function() {
  if(document.getElementById('EMR_ASWAL_BDN_pupilKanan').value == document.getElementById('EMR_ASWAL_BDN_pupilKiri').value)
  {
    $('#pupilstat').html('Isokor');
  }
  else
  {
    $('#pupilstat').html('Anisokor');
  }
});
$('#EMR_ASWAL_BDN_btnCahayaKanan').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnCahayaKanan').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnCahayaKanan').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnCahayaKanan').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnCahayaKanan').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnCahayaKanan').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnCahayaKanan').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnCahayaKanan').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnCahayaKanan').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnCahayaKanan').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnCahayaKiri').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnCahayaKiri').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnCahayaKiri').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnCahayaKiri').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnCahayaKiri').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnCahayaKiri').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnCahayaKiri').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnCahayaKiri').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnCahayaKiri').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnCahayaKiri').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_Cor1').click(function() {
  //if(document.getElementById('statcorranger').value == 'show')
  //{
    //$('#statcorranger').val('hidden');
    //document.getElementById('EMR_ASWAL_BDN_Cor4').checked = false;
    //document.getElementById('EMR_ASWAL_BDN_Cor5').checked = false;
    //$('#coresplitshow').toggleClass('collapse');
    document.getElementById('EMR_ASWAL_BDN_Cor2').checked = false;
    document.getElementById('EMR_ASWAL_BDN_Cor3').checked = false;
    EMR_ASWAL_BDN_fisikhalNext.disabled = false;
    EMR_ASWAL_BDN_fisikhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_fisikhalNext.classList.remove('white');
  //}
});

$('#EMR_ASWAL_BDN_Cor2').click(function() {
  //if(document.getElementById('statcorranger').value == 'hidden')
  //{
    //$('#statcorranger').val('show');
    //$('#coresplitshow').toggleClass('collapse');
    document.getElementById('EMR_ASWAL_BDN_Cor1').checked = false;
    EMR_ASWAL_BDN_fisikhalNext.disabled = false;
    EMR_ASWAL_BDN_fisikhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_fisikhalNext.classList.remove('white');
  //}
});

$('#EMR_ASWAL_BDN_Cor3').click(function() {
  //if(document.getElementById('statcorranger').value == 'hidden')
  //{
    //$('#statcorranger').val('show');
    //$('#coresplitshow').toggleClass('collapse');
    document.getElementById('EMR_ASWAL_BDN_Cor1').checked = false;
    EMR_ASWAL_BDN_fisikhalNext.disabled = false;
    EMR_ASWAL_BDN_fisikhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_fisikhalNext.classList.remove('white');
  //}
});

$('#EMR_ASWAL_BDN_Cor4').click(function() {
    EMR_ASWAL_BDN_fisikhalNext.disabled = false;
    EMR_ASWAL_BDN_fisikhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_fisikhalNext.classList.remove('white');
});

$('#EMR_ASWAL_BDN_Cor5').click(function() {
    EMR_ASWAL_BDN_fisikhalNext.disabled = false;
    EMR_ASWAL_BDN_fisikhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_fisikhalNext.classList.remove('white');
});

$('#EMR_ASWAL_BDN_btnMurmur').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnMurmur').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnMurmur').html('<b> Murmur - </b>');
    $('#EMR_ASWAL_BDN_btnMurmur').val('-');
    $('#EMR_ASWAL_BDN_btnMurmurText').val('');
    $('#EMR_ASWAL_BDN_btnMurmurText').toggleClass('collapse');
    document.getElementById('EMR_ASWAL_BDN_btnMurmur').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnMurmur').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnMurmur').html('<b> Murmur + </b>');
    $('#EMR_ASWAL_BDN_btnMurmur').val('+');
    $('#EMR_ASWAL_BDN_btnMurmurText').val('');
    $('#EMR_ASWAL_BDN_btnMurmurText').toggleClass('collapse');
    document.getElementById('EMR_ASWAL_BDN_btnMurmur').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnMurmur').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnGallop').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnGallop').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnGallop').html('<b> Gallop - </b>');
    $('#EMR_ASWAL_BDN_btnGallop').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnGallop').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnGallop').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnGallop').html('<b> Gallop + </b>');
    $('#EMR_ASWAL_BDN_btnGallop').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnGallop').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnGallop').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_btnVesikuler1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnVesikuler1').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnVesikuler1').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler1').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler1').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler1').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnVesikuler1').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler1').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler1').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler1').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnVesikuler2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnVesikuler2').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnVesikuler2').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler2').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler2').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler2').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnVesikuler2').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler2').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler2').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler2').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnVesikuler3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnVesikuler3').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnVesikuler3').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler3').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler3').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler3').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnVesikuler3').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler3').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler3').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler3').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnVesikuler4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnVesikuler4').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnVesikuler4').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler4').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler4').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler4').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnVesikuler4').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler4').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler4').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler4').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnVesikuler5').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnVesikuler5').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnVesikuler5').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler5').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler5').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler5').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnVesikuler5').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler5').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler5').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler5').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnVesikuler6').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnVesikuler6').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnVesikuler6').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler6').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler6').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler6').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnVesikuler6').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnVesikuler6').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler6').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnVesikuler6').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnRhonki1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnRhonki1').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnRhonki1').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnRhonki1').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki1').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki1').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnRhonki1').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnRhonki1').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki1').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki1').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnRhonki2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnRhonki2').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnRhonki2').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnRhonki2').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki2').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki2').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnRhonki2').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnRhonki2').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki2').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki2').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnRhonki3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnRhonki3').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnRhonki3').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnRhonki3').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki3').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki3').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnRhonki3').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnRhonki3').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki3').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki3').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnRhonki4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnRhonki4').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnRhonki4').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnRhonki4').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki4').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki4').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnRhonki4').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnRhonki4').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki4').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki4').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnRhonki5').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnRhonki5').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnRhonki5').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnRhonki5').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki5').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki5').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnRhonki5').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnRhonki5').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki5').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki5').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnRhonki6').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnRhonki6').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnRhonki6').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnRhonki6').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki6').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki6').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnRhonki6').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnRhonki6').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki6').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnRhonki6').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnWheezing1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnWheezing1').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnWheezing1').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnWheezing1').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing1').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing1').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnWheezing1').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnWheezing1').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing1').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing1').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnWheezing2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnWheezing2').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnWheezing2').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnWheezing2').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing2').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing2').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnWheezing2').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnWheezing2').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing2').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing2').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnWheezing3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnWheezing3').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnWheezing3').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnWheezing3').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing3').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing3').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnWheezing3').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnWheezing3').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing3').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing3').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnWheezing4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnWheezing4').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnWheezing4').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnWheezing4').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing4').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing4').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnWheezing4').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnWheezing4').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing4').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing4').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnWheezing5').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnWheezing5').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnWheezing5').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnWheezing5').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing5').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing5').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnWheezing5').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnWheezing5').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing5').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing5').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnWheezing6').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnWheezing6').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnWheezing6').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnWheezing6').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing6').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing6').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnWheezing6').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnWheezing6').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing6').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnWheezing6').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnretraksiKanan').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnretraksiKanan').value == 'Kanan +')
  {
    $('#EMR_ASWAL_BDN_btnretraksiKanan').html('<b>Kanan - </b>');
    $('#EMR_ASWAL_BDN_btnretraksiKanan').val('Kanan -');
    document.getElementById('EMR_ASWAL_BDN_btnretraksiKanan').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnretraksiKanan').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnretraksiKanan').html('<b>Kanan + </b>');
    $('#EMR_ASWAL_BDN_btnretraksiKanan').val('Kanan +');
    document.getElementById('EMR_ASWAL_BDN_btnretraksiKanan').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnretraksiKanan').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnretraksiKiri').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnretraksiKiri').value == 'Kiri +')
  {
    $('#EMR_ASWAL_BDN_btnretraksiKiri').html('<b>Kiri - </b>');
    $('#EMR_ASWAL_BDN_btnretraksiKiri').val('Kiri -');
    document.getElementById('EMR_ASWAL_BDN_btnretraksiKiri').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnretraksiKiri').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnretraksiKiri').html('<b>Kiri + </b>');
    $('#EMR_ASWAL_BDN_btnretraksiKiri').val('Kiri +');
    document.getElementById('EMR_ASWAL_BDN_btnretraksiKiri').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnretraksiKiri').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_btnAbdomen1A').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen1D').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen1E').toggleClass('collapse');
    $("#EMR_ASWAL_BDN_btnAbdomen1E").val('');
    $('#EMR_ASWAL_BDN_btnAbdomen1D').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_btnAbdomen1B').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen1D').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen1E').toggleClass('collapse');
    $("#EMR_ASWAL_BDN_btnAbdomen1E").val('');
    $('#EMR_ASWAL_BDN_btnAbdomen1D').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_btnAbdomen1C').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen1D').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen1E').toggleClass('collapse');
    $("#EMR_ASWAL_BDN_btnAbdomen1E").val('');
    $('#EMR_ASWAL_BDN_btnAbdomen1D').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_btnAbdomen1D').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen1D').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen1E').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_btnAbdomen1E').focus();
    $('#EMR_ASWAL_BDN_btnAbdomen1D').val('Ya');
  }
});

$("#EMR_ASWAL_BDN_btnAbdomen1E").focusout(function() {
  if(EMR_ASWAL_BDN_btnAbdomen1E.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan bising usus dianggap normal");
    $('#EMR_ASWAL_BDN_btnAbdomen1D').removeAttr('checked');
    EMR_ASWAL_BDN_btnAbdomen1A.checked = true;
    $("#EMR_ASWAL_BDN_btnAbdomen1E").val('');
    $("#EMR_ASWAL_BDN_btnAbdomen1D").val('Tidak');
    $("#EMR_ASWAL_BDN_btnAbdomen1E").toggleClass('collapse');
  }
});

$('#EMR_ASWAL_BDN_btnAbdomen2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen2').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen2').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen2').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen2').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen2').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen2').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen2').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen2').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen2').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen3').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen3').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen3').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen3').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen3').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen3').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen3').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen3').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen3').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen4').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen4').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen4').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen4').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen4').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen4').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen4').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen4').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen4').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen5').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen5').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen5').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen5').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen5').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen5').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen5').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen5').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen5').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen5').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen6').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen6').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen6').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen6').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen6').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen6').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen6').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen6').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen6').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen6').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_btnAbdomen7A').click(function() {
  $('#EMR_ASWAL_BDN_btnAbdomen7B').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen7Cstatus').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen7C').toggleClass('collapse');
    $("#EMR_ASWAL_BDN_btnAbdomen7C").val('');
    $('#EMR_ASWAL_BDN_btnAbdomen7Cstatus').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_btnAbdomen7B').click(function() {
  $('#EMR_ASWAL_BDN_btnAbdomen7A').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen7Cstatus').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen7C').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_btnAbdomen7C').focus();
    $('#EMR_ASWAL_BDN_btnAbdomen7Cstatus').val('Ya');
  }
});

  $("#EMR_ASWAL_BDN_btnAbdomen7C").focusout(function() {
    if(EMR_ASWAL_BDN_btnAbdomen7C.value == '')
    {
      alert("Teraba belum di isi, centang akan dihapus otomatis dan hepar dianggap tidak teraba");
      $('#EMR_ASWAL_BDN_btnAbdomen7B').removeAttr('checked');
      EMR_ASWAL_BDN_btnAbdomen7A.checked = true;
      $("#EMR_ASWAL_BDN_btnAbdomen7C").val('');
      $("#EMR_ASWAL_BDN_btnAbdomen7Cstatus").val('Tidak');
      $("#EMR_ASWAL_BDN_btnAbdomen7C").toggleClass('collapse');
    }
  });

  $('#EMR_ASWAL_BDN_btnAbdomen8A').click(function() {
    $('#EMR_ASWAL_BDN_btnAbdomen8B').removeAttr('checked');
    if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen8Cstatus').value == 'Ya')
    {
      $('#EMR_ASWAL_BDN_btnAbdomen8C').toggleClass('collapse');
      $("#EMR_ASWAL_BDN_btnAbdomen8C").val('');
      $('#EMR_ASWAL_BDN_btnAbdomen8Cstatus').val('Tidak');
    }
  });

  $('#EMR_ASWAL_BDN_btnAbdomen8B').click(function() {
    $('#EMR_ASWAL_BDN_btnAbdomen8A').removeAttr('checked');
    if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen8Cstatus').value == 'Tidak')
    {
      $('#EMR_ASWAL_BDN_btnAbdomen8C').toggleClass('collapse');
      $('#EMR_ASWAL_BDN_btnAbdomen8C').focus();
      $('#EMR_ASWAL_BDN_btnAbdomen8Cstatus').val('Ya');
    }
  });

    $("#EMR_ASWAL_BDN_btnAbdomen8C").focusout(function() {
      if(EMR_ASWAL_BDN_btnAbdomen8C.value == '')
      {
        alert("Teraba belum di isi, centang akan dihapus otomatis dan hepar dianggap tidak teraba");
        $('#EMR_ASWAL_BDN_btnAbdomen8B').removeAttr('checked');
        EMR_ASWAL_BDN_btnAbdomen8A.checked = true;
        $("#EMR_ASWAL_BDN_btnAbdomen8C").val('');
        $("#EMR_ASWAL_BDN_btnAbdomen8Cstatus").val('Tidak');
        $("#EMR_ASWAL_BDN_btnAbdomen8C").toggleClass('collapse');
      }
    });

$('#EMR_ASWAL_BDN_btnAbdomen8').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen8').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen8').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen8').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen8').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen8').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen8').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen8').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen8').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen8').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_AbdomenLainChb').click(function(){
  $('#EMR_ASWAL_BDN_AbdomenLain').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_btnAbdomenText1').val('');
});

$('#EMR_ASWAL_BDN_btnAbdomen9').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen9').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen9').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen9').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen9').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen9').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen9').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen9').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen9').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen9').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen10').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen10').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen10').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen10').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen10').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen10').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen10').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen10').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen10').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen10').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen11').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen11').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen11').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen11').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen11').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen11').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen11').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen11').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen11').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen11').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen12').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen12').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen12').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen12').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen12').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen12').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen12').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen12').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen12').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen12').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen13').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen13').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen13').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen13').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen13').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen13').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen13').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen13').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen13').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen13').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen14').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen14').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen14').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen14').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen14').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen14').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen14').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen14').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen14').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen14').classList.add('green');
  }
});$('#EMR_ASWAL_BDN_btnAbdomen15').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen15').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen15').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen15').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen15').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen15').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen15').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen15').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen15').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen15').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen16').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen16').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen16').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen16').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen16').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen16').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen16').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen16').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen16').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen16').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen17').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen17').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen17').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen17').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen17').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen17').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen17').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen17').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen17').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen17').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen18').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen18').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen18').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen18').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen18').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen18').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen18').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen18').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen18').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen18').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen19').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen19').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen19').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen19').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen19').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen19').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen19').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen19').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen19').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen19').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnAbdomen20').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnAbdomen20').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnAbdomen20').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen20').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen20').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen20').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnAbdomen20').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnAbdomen20').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen20').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnAbdomen20').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_btnEkstremitas1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnEkstremitas1').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas1').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas1').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas1').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas1').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas1').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas1').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas1').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas1').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnEkstremitas2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnEkstremitas2').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas2').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas2').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas2').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas2').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas2').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas2').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas2').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas2').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnEkstremitas3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnEkstremitas3').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas3').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas3').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas3').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas3').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas3').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas3').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas3').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas3').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnEkstremitas4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnEkstremitas4').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas4').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas4').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas4').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas4').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas4').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas4').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas4').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas4').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnEkstremitas9').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnEkstremitas9').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas9').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas9').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas9').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas9').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas9').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas9').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas9').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas9').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnEkstremitas10').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnEkstremitas10').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas10').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas10').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas10').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas10').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas10').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas10').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas10').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas10').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnEkstremitas11').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnEkstremitas11').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas11').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas11').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas11').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas11').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas11').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas11').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas11').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas11').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnEkstremitas12').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnEkstremitas12').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas12').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas12').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas12').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas12').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnEkstremitas12').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnEkstremitas12').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas12').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnEkstremitas12').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_Sensorik1').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Sensorik6').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_Sensorik7').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_Sensorik7').val('');
    $('#EMR_ASWAL_BDN_Sensorik6').val('Tidak');
  }
});
$('#EMR_ASWAL_BDN_Sensorik2').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Sensorik6').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_Sensorik7').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_Sensorik7').val('');
    $('#EMR_ASWAL_BDN_Sensorik6').val('Tidak');
  }
});
$('#EMR_ASWAL_BDN_Sensorik3').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Sensorik6').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_Sensorik7').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_Sensorik7').val('');
    $('#EMR_ASWAL_BDN_Sensorik6').val('Tidak');
  }
});
$('#EMR_ASWAL_BDN_Sensorik4').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Sensorik6').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_Sensorik7').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_Sensorik7').val('');
    $('#EMR_ASWAL_BDN_Sensorik6').val('Tidak');
  }
});
$('#EMR_ASWAL_BDN_Sensorik5').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Sensorik6').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_Sensorik7').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_Sensorik7').val('');
    $('#EMR_ASWAL_BDN_Sensorik6').val('Tidak');
  }
});
$('#EMR_ASWAL_BDN_Sensorik6').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_Sensorik6').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_Sensorik7').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_Sensorik7').focus();
    $('#EMR_ASWAL_BDN_Sensorik6').val('Ya');
  }
});

$("#EMR_ASWAL_BDN_Sensorik7").focusout(function() {
  if(EMR_ASWAL_BDN_Sensorik7.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan sensorik dianggap normal");
    $('#EMR_ASWAL_BDN_Sensorik6').removeAttr('checked');
    EMR_ASWAL_BDN_Sensorik1.checked = true;
    $("#EMR_ASWAL_BDN_Sensorik7").val('');
    $("#EMR_ASWAL_BDN_Sensorik6").val('Tidak');
    $("#EMR_ASWAL_BDN_Sensorik7").toggleClass('collapse');
  }
});

var hal_dokbdnFisik = 1;
$('#EMR_ASWAL_BDN_fisikhalNext').click(function() {
  $('#EMR_ASWAL_BDN_fisik_'+hal_dokbdnFisik).toggleClass('collapse');
  hal_dokbdnFisik++;
  $('#EMR_ASWAL_BDN_fisik_'+hal_dokbdnFisik).toggleClass('collapse');
  if(hal_dokbdnFisik == 2)
  {
    EMR_ASWAL_BDN_fisikhalBack.disabled = false;
    EMR_ASWAL_BDN_fisikhalBack.classList.add('yellow');
    EMR_ASWAL_BDN_fisikhalBack.classList.remove('white');
  }
  if(hal_dokbdnFisik == 7)
  {
    halamandokbdn2 = 'Ya';
    EMR_ASWAL_BDN_fisikhalNext.disabled = true;
    EMR_ASWAL_BDN_fisikhalNext.classList.add('white');
    EMR_ASWAL_BDN_fisikhalNext.classList.remove('yellow');
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
  }
});

$('#EMR_ASWAL_BDN_fisikhalBack').click(function() {
  $('#EMR_ASWAL_BDN_fisik_'+hal_dokbdnFisik).toggleClass('collapse');
  hal_dokbdnFisik--;
  $('#EMR_ASWAL_BDN_fisik_'+hal_dokbdnFisik).toggleClass('collapse');
  if(hal_dokbdnFisik == 1)
  {
    EMR_ASWAL_BDN_fisikhalBack.disabled = true;
    EMR_ASWAL_BDN_fisikhalBack.classList.add('white');
    EMR_ASWAL_BDN_fisikhalBack.classList.remove('yellow');
  }
  if(hal_dokbdnFisik == 6)
  {
    EMR_ASWAL_BDN_fisikhalNext.disabled = false;
    EMR_ASWAL_BDN_fisikhalNext.classList.add('yellow');
    EMR_ASWAL_BDN_fisikhalNext.classList.remove('white');
  }
});

$(document).ready(function()
{
  if (EMR_ASWAL_BDN_KodeUnit_SP === null || EMR_ASWAL_BDN_KodeUnit_SP.value == 'P01' || EMR_ASWAL_BDN_KodeUnit_SP.value == 'Q04' || EMR_ASWAL_BDN_KodeUnit_SP.value == 'Q01' || EMR_ASWAL_BDN_KodeUnit_SP.value == 'Q03')
  {
    $('#EMR_ASWAL_BDN_PeFi_2B').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_PeFi_3B').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_PeFi_4B').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_PeFi_5B').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_PeFi_6B').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_PeFi_7B').toggleClass('collapse');
  }
  else
  {
    halamandokbdn2 = 'Ya';
    $('#EMR_ASWAL_BDN_PeFi_2A').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_PeFi_3A').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_PeFi_4A').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_PeFi_5A').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_PeFi_6A').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_PeFi_7A').toggleClass('collapse');
  }
});

$('#EMR_ASWAL_BDN_PeFi_2_CK').click(function() {
  $('#EMR_ASWAL_BDN_PeFi_2B').toggleClass('collapse');
});

$('#EMR_ASWAL_BDN_PeFi_3_CK').click(function() {
  $('#EMR_ASWAL_BDN_PeFi_3B').toggleClass('collapse');
});

$('#EMR_ASWAL_BDN_PeFi_4_CK').click(function() {
  $('#EMR_ASWAL_BDN_PeFi_4B').toggleClass('collapse');
});

$('#EMR_ASWAL_BDN_PeFi_5_CK').click(function() {
  $('#EMR_ASWAL_BDN_PeFi_5B').toggleClass('collapse');
});

$('#EMR_ASWAL_BDN_PeFi_6_CK').click(function() {
  $('#EMR_ASWAL_BDN_PeFi_6B').toggleClass('collapse');
});

$('#EMR_ASWAL_BDN_PeFi_7_CK').click(function() {
  $('#EMR_ASWAL_BDN_PeFi_7B').toggleClass('collapse');
});

//halaman 3
//THT
$('#EMR_ASWAL_BDN_SLTHT').click(function() {
    $('#EMR_ASWAL_BDN_SLTHT2').toggleClass('collapse');
    //$('#EMR_ASWAL_BDN_SLTelingaKananA1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKananA2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKananA3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKananA4').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKananA5').val('');
    if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKananA5status').value == 'Ya')
    {
      $('#EMR_ASWAL_BDN_SLTelingaKananA5div').toggleClass('collapse');
      $('#EMR_ASWAL_BDN_SLTelingaKananA5').val('');
      $('#EMR_ASWAL_BDN_SLTelingaKananA5status').val('Tidak');
    }
    //$('#EMR_ASWAL_BDN_SLTelingaKananB1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKananB2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKananB3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKananB4').val('');
    if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKananB4status').value == 'Ya')
    {
      $('#EMR_ASWAL_BDN_SLTelingaKananB4div').toggleClass('collapse');
      $('#EMR_ASWAL_BDN_SLTelingaKananB4').val('');
      $('#EMR_ASWAL_BDN_SLTelingaKananB4status').val('Tidak');
    }
    //$('#EMR_ASWAL_BDN_SLTelingaKiriA1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKiriA2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKiriA3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKiriA4').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKiriA5').val('');
    if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKiriA5status').value == 'Ya')
    {
      $('#EMR_ASWAL_BDN_SLTelingaKiriA5div').toggleClass('collapse');
      $('#EMR_ASWAL_BDN_SLTelingaKiriA5').val('');
      $('#EMR_ASWAL_BDN_SLTelingaKiriA5status').val('Tidak');
    }
    //$('#EMR_ASWAL_BDN_SLTelingaKiriB1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKiriB2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKiriB3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTelingaKiriB4').val('');
    if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKiriB4status').value == 'Ya')
    {
      $('#EMR_ASWAL_BDN_SLTelingaKiriB4div').toggleClass('collapse');
      $('#EMR_ASWAL_BDN_SLTelingaKiriB4').val('');
      $('#EMR_ASWAL_BDN_SLTelingaKiriB4status').val('Tidak');
    }
    //$('#EMR_ASWAL_BDN_SLHidungA1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLHidungA2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLHidungA3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLHidungA4').val('');
    if(document.getElementById('EMR_ASWAL_BDN_SLHidungA4status').value == 'Ya')
    {
      $('#EMR_ASWAL_BDN_SLHidungA4div').toggleClass('collapse');
      $('#EMR_ASWAL_BDN_SLHidungA4').val('');
      $('#EMR_ASWAL_BDN_SLHidungA4status').val('Tidak');
    }
    //$('#EMR_ASWAL_BDN_SLHidungB1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLHidungB2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLHidungB3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLHidungB4').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLHidungB5').val('');
    if(document.getElementById('EMR_ASWAL_BDN_SLHidungB5status').value == 'Ya')
    {
      $('#EMR_ASWAL_BDN_SLHidungB5div').toggleClass('collapse');
      $('#EMR_ASWAL_BDN_SLHidungB5').val('');
      $('#EMR_ASWAL_BDN_SLHidungB5status').val('Tidak');
    }
    //$('#EMR_ASWAL_BDN_SLTenggorokanA1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTenggorokanA2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTenggorokanA3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTenggorokanA4').val('');
    if(document.getElementById('EMR_ASWAL_BDN_SLTenggorokanA4status').value == 'Ya')
    {
      $('#EMR_ASWAL_BDN_SLTenggorokanA4div').toggleClass('collapse');
      $('#EMR_ASWAL_BDN_SLTenggorokanA4').val('');
      $('#EMR_ASWAL_BDN_SLTenggorokanA4status').val('Tidak');
    }
    //$('#EMR_ASWAL_BDN_SLTenggorokanB1').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTenggorokanB2').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTenggorokanB3').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTenggorokanB4').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLTenggorokanB5').val('');
    if(document.getElementById('EMR_ASWAL_BDN_SLTenggorokanB5status').value == 'Ya')
    {
      $('#EMR_ASWAL_BDN_SLTenggorokanB5div').toggleClass('collapse');
      $('#EMR_ASWAL_BDN_SLTenggorokanB5').val('');
      $('#EMR_ASWAL_BDN_SLTenggorokanB5status').val('Tidak');
    }
});

//telinga Kanan
//saluran
$('#EMR_ASWAL_BDN_SLTelingaKananA1').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKananA2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLTelingaKananA3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLTelingaKananA4').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKananA5status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLTelingaKananA5div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTelingaKananA5').val('');
    $('#EMR_ASWAL_BDN_SLTelingaKananA5status').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLTelingaKananA2').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKananA1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLTelingaKananA3').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKananA1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLTelingaKananA4').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKananA1').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKananA5status').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLTelingaKananA5div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTelingaKananA5').focus();
    $('#EMR_ASWAL_BDN_SLTelingaKananA5status').val('Ya');
  }
});

var EMR_ASWAL_BDN_SLTelingaKananA1 = document.getElementById('EMR_ASWAL_BDN_SLTelingaKananA1');

$("#EMR_ASWAL_BDN_SLTelingaKananA5").focusout(function() {
  if(EMR_ASWAL_BDN_SLTelingaKananA5.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan telinga kanan saluran dianggap bersih");
    $('#EMR_ASWAL_BDN_SLTelingaKananA4').removeAttr('checked');
    EMR_ASWAL_BDN_SLTelingaKananA1.checked = true;
    $("#EMR_ASWAL_BDN_SLTelingaKananA5").val('');
    $("#EMR_ASWAL_BDN_SLTelingaKananA5status").val('Tidak');
    $("#EMR_ASWAL_BDN_SLTelingaKananA5div").toggleClass('collapse');
  }
});

//membran timpani
$('#EMR_ASWAL_BDN_SLTelingaKananB1').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKananB2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLTelingaKananB3').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKananB4status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLTelingaKananB4div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTelingaKananB4').val('');
    $('#EMR_ASWAL_BDN_SLTelingaKananB4status').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLTelingaKananB2').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKananB1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLTelingaKananB3').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKananB1').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKananB4status').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLTelingaKananB4div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTelingaKananB4').focus();
    $('#EMR_ASWAL_BDN_SLTelingaKananB4status').val('Ya');
  }
});

var EMR_ASWAL_BDN_SLTelingaKananB1 = document.getElementById('EMR_ASWAL_BDN_SLTelingaKananB1');

$("#EMR_ASWAL_BDN_SLTelingaKananB4").focusout(function() {
  if(EMR_ASWAL_BDN_SLTelingaKananB4.value == '')
  {
    alert("Lain-lain belum di isi, centang lainnya akan dihapus otomatis");
    $('#EMR_ASWAL_BDN_SLTelingaKananB3').removeAttr('checked');
    EMR_ASWAL_BDN_SLTelingaKananB1.checked = true;
    $("#EMR_ASWAL_BDN_SLTelingaKananB4").val('');
    $("#EMR_ASWAL_BDN_SLTelingaKananB4status").val('Tidak');
    $("#EMR_ASWAL_BDN_SLTelingaKananB4div").toggleClass('collapse');
  }
});

//telinga Kiri
//saluran
$('#EMR_ASWAL_BDN_SLTelingaKiriA1').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKiriA2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLTelingaKiriA3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLTelingaKiriA4').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKiriA5status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLTelingaKiriA5div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTelingaKiriA5').val('');
    $('#EMR_ASWAL_BDN_SLTelingaKiriA5status').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLTelingaKiriA2').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKiriA1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLTelingaKiriA3').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKiriA1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLTelingaKiriA4').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKiriA1').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKiriA5status').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLTelingaKiriA5div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTelingaKiriA5').focus();
    $('#EMR_ASWAL_BDN_SLTelingaKiriA5status').val('Ya');
  }
});

var EMR_ASWAL_BDN_SLTelingaKiriA1 = document.getElementById('EMR_ASWAL_BDN_SLTelingaKiriA1');

$("#EMR_ASWAL_BDN_SLTelingaKiriA5").focusout(function() {
  if(EMR_ASWAL_BDN_SLTelingaKiriA5.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan telinga Kiri saluran dianggap bersih");
    $('#EMR_ASWAL_BDN_SLTelingaKiriA4').removeAttr('checked');
    EMR_ASWAL_BDN_SLTelingaKiriA1.checked = true;
    $("#EMR_ASWAL_BDN_SLTelingaKiriA5").val('');
    $("#EMR_ASWAL_BDN_SLTelingaKiriA5status").val('Tidak');
    $("#EMR_ASWAL_BDN_SLTelingaKiriA5div").toggleClass('collapse');
  }
});

//membran timpani
$('#EMR_ASWAL_BDN_SLTelingaKiriB1').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKiriB2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLTelingaKiriB3').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKiriB4status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLTelingaKiriB4div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTelingaKiriB4').val('');
    $('#EMR_ASWAL_BDN_SLTelingaKiriB4status').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLTelingaKiriB2').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKiriB1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLTelingaKiriB3').click(function() {
  $('#EMR_ASWAL_BDN_SLTelingaKiriB1').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTelingaKiriB4status').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLTelingaKiriB4div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTelingaKiriB4').focus();
    $('#EMR_ASWAL_BDN_SLTelingaKiriB4status').val('Ya');
  }
});

var EMR_ASWAL_BDN_SLTelingaKiriB1 = document.getElementById('EMR_ASWAL_BDN_SLTelingaKiriB1');

$("#EMR_ASWAL_BDN_SLTelingaKiriB4").focusout(function() {
  if(EMR_ASWAL_BDN_SLTelingaKiriB4.value == '')
  {
    alert("Lain-lain belum di isi, centang lainnya akan dihapus otomatis");
    $('#EMR_ASWAL_BDN_SLTelingaKiriB3').removeAttr('checked');
    EMR_ASWAL_BDN_SLTelingaKiriB1.checked = true;
    $("#EMR_ASWAL_BDN_SLTelingaKiriB4").val('');
    $("#EMR_ASWAL_BDN_SLTelingaKiriB4status").val('Tidak');
    $("#EMR_ASWAL_BDN_SLTelingaKiriB4div").toggleClass('collapse');
  }
});

//hidung
//nose septum
$('#EMR_ASWAL_BDN_SLHidungA1').click(function() {
  $('#EMR_ASWAL_BDN_SLHidungA2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLHidungA3').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLHidungA4status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLHidungA4div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLHidungA4').val('');
    $('#EMR_ASWAL_BDN_SLHidungA4status').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLHidungA2').click(function() {
  $('#EMR_ASWAL_BDN_SLHidungA1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLHidungA3').click(function() {
  $('#EMR_ASWAL_BDN_SLHidungA2').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLHidungA4status').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLHidungA4div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLHidungA4').focus();
    $('#EMR_ASWAL_BDN_SLHidungA4status').val('Ya');
  }
});

var EMR_ASWAL_BDN_SLHidungA1 = document.getElementById('EMR_ASWAL_BDN_SLHidungA1');

$("#EMR_ASWAL_BDN_SLHidungA4").focusout(function() {
  if(EMR_ASWAL_BDN_SLHidungA4.value == '')
  {
    alert("Lain-lain belum di isi, centang lainnya akan dihapus otomatis");
    $('#EMR_ASWAL_BDN_SLHidungA3').removeAttr('checked');
    EMR_ASWAL_BDN_SLHidungA1.checked = true;
    $("#EMR_ASWAL_BDN_SLHidungA4").val('');
    $("#EMR_ASWAL_BDN_SLHidungA4status").val('Tidak');
    $("#EMR_ASWAL_BDN_SLHidungA4div").toggleClass('collapse');
  }
});

//nose konka
$('#EMR_ASWAL_BDN_SLHidungB1').click(function() {
  $('#EMR_ASWAL_BDN_SLHidungB2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLHidungB3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLHidungB4').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLHidungB5status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLHidungB5div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLHidungB5').val('');
    $('#EMR_ASWAL_BDN_SLHidungB5status').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLHidungB2').click(function() {
  $('#EMR_ASWAL_BDN_SLHidungB1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLHidungB3').click(function() {
  $('#EMR_ASWAL_BDN_SLHidungB1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLHidungB4').click(function() {
  $('#EMR_ASWAL_BDN_SLHidungB1').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLHidungB5status').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLHidungB5div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLHidungB5').focus();
    $('#EMR_ASWAL_BDN_SLHidungB5status').val('Ya');
  }
});

var EMR_ASWAL_BDN_SLHidungB1 = document.getElementById('EMR_ASWAL_BDN_SLHidungB1');

$("#EMR_ASWAL_BDN_SLHidungB5").focusout(function() {
  if(EMR_ASWAL_BDN_SLHidungB5.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan hidung/nose konka dianggap normal");
    $('#EMR_ASWAL_BDN_SLHidungB4').removeAttr('checked');
    EMR_ASWAL_BDN_SLHidungB1.checked = true;
    $("#EMR_ASWAL_BDN_SLHidungB5").val('');
    $("#EMR_ASWAL_BDN_SLHidungB5status").val('Tidak');
    $("#EMR_ASWAL_BDN_SLHidungB5div").toggleClass('collapse');
  }
});

//tenggorokan
//faring
$('#EMR_ASWAL_BDN_SLTenggorokanA1').click(function() {
  $('#EMR_ASWAL_BDN_SLTenggorokanA2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLTenggorokanA3').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTenggorokanA4status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLTenggorokanA4div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTenggorokanA4').val('');
    $('#EMR_ASWAL_BDN_SLTenggorokanA4status').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLTenggorokanA2').click(function() {
  $('#EMR_ASWAL_BDN_SLTenggorokanA1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLTenggorokanA3').click(function() {
  $('#EMR_ASWAL_BDN_SLTenggorokanA1').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTenggorokanA4status').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLTenggorokanA4div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTenggorokanA4').focus();
    $('#EMR_ASWAL_BDN_SLTenggorokanA4status').val('Ya');
  }
});

var EMR_ASWAL_BDN_SLTenggorokanA1 = document.getElementById('EMR_ASWAL_BDN_SLTenggorokanA1');

$("#EMR_ASWAL_BDN_SLTenggorokanA4").focusout(function() {
  if(EMR_ASWAL_BDN_SLTenggorokanA4.value == '')
  {
    alert("Lain-lain belum di isi, centang lainnya akan dihapus otomatis");
    $('#EMR_ASWAL_BDN_SLTenggorokanA3').removeAttr('checked');
    EMR_ASWAL_BDN_SLTenggorokanA1.checked = true;
    $("#EMR_ASWAL_BDN_SLTenggorokanA3").val('');
    $("#EMR_ASWAL_BDN_SLTenggorokanA4status").val('Tidak');
    $("#EMR_ASWAL_BDN_SLTenggorokanA4div").toggleClass('collapse');
  }
});

//amandel
$('#EMR_ASWAL_BDN_SLTenggorokanB1').click(function() {
  $('#EMR_ASWAL_BDN_SLTenggorokanB2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLTenggorokanB3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLTenggorokanB4').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTenggorokanB5status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLTenggorokanB5div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTenggorokanB5').val('');
    $('#EMR_ASWAL_BDN_SLTenggorokanB5status').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLTenggorokanB2').click(function() {
  $('#EMR_ASWAL_BDN_SLTenggorokanB1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLTenggorokanB3').click(function() {
  $('#EMR_ASWAL_BDN_SLTenggorokanB1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLTenggorokanB4').click(function() {
  $('#EMR_ASWAL_BDN_SLTenggorokanB1').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLTenggorokanB5status').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLTenggorokanB5div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLTenggorokanB5').focus();
    $('#EMR_ASWAL_BDN_SLTenggorokanB5status').val('Ya');
  }
});

var EMR_ASWAL_BDN_SLTenggorokanB1 = document.getElementById('EMR_ASWAL_BDN_SLTenggorokanB1');

$("#EMR_ASWAL_BDN_SLTenggorokanB5").focusout(function() {
  if(EMR_ASWAL_BDN_SLTenggorokanB5.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan tonsil/amandel dianggap normal");
    $('#EMR_ASWAL_BDN_SLTenggorokanB4').removeAttr('checked');
    EMR_ASWAL_BDN_SLTenggorokanB1.checked = true;
    $("#EMR_ASWAL_BDN_SLTenggorokanB5").val('');
    $("#EMR_ASWAL_BDN_SLTenggorokanB5status").val('Tidak');
    $("#EMR_ASWAL_BDN_SLTenggorokanB5div").toggleClass('collapse');
  }
});

//Mata
$('#EMR_ASWAL_BDN_SLMata').click(function() {
  $('#EMR_ASWAL_BDN_SLMata2').toggleClass('collapse');
});

$('#EMR_ASWAL_BDN_KonjungtivaMataSilOD').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataSilOD').value == 'inj silier +')
  {
    $('#EMR_ASWAL_BDN_KonjungtivaMataSilOD').html('<b> inj silier - </b>');
    $('#EMR_ASWAL_BDN_KonjungtivaMataSilOD').val('inj silier -');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataSilOD').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataSilOD').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_KonjungtivaMataSilOD').html('<b> inj silier + </b>');
    $('#EMR_ASWAL_BDN_KonjungtivaMataSilOD').val('inj silier +');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataSilOD').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataSilOD').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_KonjungtivaMataCojOD').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataCojOD').value == 'inj coj +')
  {
    $('#EMR_ASWAL_BDN_KonjungtivaMataCojOD').html('<b> inj coj - </b>');
    $('#EMR_ASWAL_BDN_KonjungtivaMataCojOD').val('inj coj -');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataCojOD').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataCojOD').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_KonjungtivaMataCojOD').html('<b> inj coj + </b>');
    $('#EMR_ASWAL_BDN_KonjungtivaMataCojOD').val('inj coj +');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataCojOD').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataCojOD').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_KonjungtivaMataSilOS').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataSilOS').value == 'inj silier +')
  {
    $('#EMR_ASWAL_BDN_KonjungtivaMataSilOS').html('<b> inj silier - </b>');
    $('#EMR_ASWAL_BDN_KonjungtivaMataSilOS').val('inj silier -');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataSilOS').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataSilOS').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_KonjungtivaMataSilOS').html('<b> inj silier + </b>');
    $('#EMR_ASWAL_BDN_KonjungtivaMataSilOS').val('inj silier +');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataSilOS').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataSilOS').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_KonjungtivaMataCojOS').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataCojOS').value == 'inj coj +')
  {
    $('#EMR_ASWAL_BDN_KonjungtivaMataCojOS').html('<b> inj coj - </b>');
    $('#EMR_ASWAL_BDN_KonjungtivaMataCojOS').val('inj coj -');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataCojOS').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataCojOS').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_KonjungtivaMataCojOS').html('<b> inj coj + </b>');
    $('#EMR_ASWAL_BDN_KonjungtivaMataCojOS').val('inj coj +');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataCojOS').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_KonjungtivaMataCojOS').classList.add('green');
  }
});
/*
$('#EMR_ASWAL_BDN_KorneaMataOD').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_KorneaMataOD').value == 'Jernih')
  {
    $('#EMR_ASWAL_BDN_KorneaMataOD').html('<b> Epiteliopah + </b>');
    $('#EMR_ASWAL_BDN_KorneaMataOD').val('Epiteliopah +');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOD').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOD').classList.add('yellow');
  }
  else if(document.getElementById('EMR_ASWAL_BDN_KorneaMataOD').value == 'Epiteliopah +')
  {
    $('#EMR_ASWAL_BDN_KorneaMataOD').html('<b> Epiteliopah - </b>');
    $('#EMR_ASWAL_BDN_KorneaMataOD').val('Epiteliopah -');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOD').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOD').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_KorneaMataOD').html('<b> Jernih </b>');
    $('#EMR_ASWAL_BDN_KorneaMataOD').val('Jernih');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOD').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOD').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_KorneaMataOS').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_KorneaMataOS').value == 'Jernih')
  {
    $('#EMR_ASWAL_BDN_KorneaMataOS').html('<b> Epiteliopah + </b>');
    $('#EMR_ASWAL_BDN_KorneaMataOS').val('Epiteliopah +');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOS').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOS').classList.add('yellow');
  }
  else if(document.getElementById('EMR_ASWAL_BDN_KorneaMataOS').value == 'Epiteliopah +')
  {
    $('#EMR_ASWAL_BDN_KorneaMataOS').html('<b> Epiteliopah - </b>');
    $('#EMR_ASWAL_BDN_KorneaMataOS').val('Epiteliopah -');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOS').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOS').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_KorneaMataOS').html('<b> Jernih </b>');
    $('#EMR_ASWAL_BDN_KorneaMataOS').val('Jernih');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOS').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_KorneaMataOS').classList.add('green');
  }
});
*/
$('#EMR_ASWAL_BDN_VitreusMataOD').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_VitreusMataOD').value == 'Refleks fundus +')
  {
    $('#EMR_ASWAL_BDN_VitreusMataOD').html('<b> Refleks fundus - </b>');
    $('#EMR_ASWAL_BDN_VitreusMataOD').val('Refleks fundus -');
    document.getElementById('EMR_ASWAL_BDN_VitreusMataOD').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_VitreusMataOD').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_VitreusMataOD').html('<b> Refleks fundus + </b>');
    $('#EMR_ASWAL_BDN_VitreusMataOD').val('Refleks fundus +');
    document.getElementById('EMR_ASWAL_BDN_VitreusMataOD').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_VitreusMataOD').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_VitreusMataOS').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_VitreusMataOS').value == 'Refleks fundus +')
  {
    $('#EMR_ASWAL_BDN_VitreusMataOS').html('<b> Refleks fundus - </b>');
    $('#EMR_ASWAL_BDN_VitreusMataOS').val('Refleks fundus -');
    document.getElementById('EMR_ASWAL_BDN_VitreusMataOS').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_VitreusMataOS').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_VitreusMataOS').html('<b> Refleks fundus + </b>');
    $('#EMR_ASWAL_BDN_VitreusMataOS').val('Refleks fundus +');
    document.getElementById('EMR_ASWAL_BDN_VitreusMataOS').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_VitreusMataOS').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_TIOMataOD').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_TIOMataOD').value == 'Normal')
  {
    $('#EMR_ASWAL_BDN_TIOMataOD').html('<b> Meningkat </b>');
    $('#EMR_ASWAL_BDN_TIOMataOD').val('Meningkat');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOD').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOD').classList.add('yellow');
  }
  else if(document.getElementById('EMR_ASWAL_BDN_TIOMataOD').value == 'Meningkat')
  {
    $('#EMR_ASWAL_BDN_TIOMataOD').html('<b> Menurun </b>');
    $('#EMR_ASWAL_BDN_TIOMataOD').val('Menurun');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOD').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOD').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_TIOMataOD').html('<b> Normal </b>');
    $('#EMR_ASWAL_BDN_TIOMataOD').val('Normal');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOD').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOD').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_TIOMataOS').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_TIOMataOS').value == 'Normal')
  {
    $('#EMR_ASWAL_BDN_TIOMataOS').html('<b> Meningkat </b>');
    $('#EMR_ASWAL_BDN_TIOMataOS').val('Meningkat');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOS').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOS').classList.add('yellow');
  }
  else if(document.getElementById('EMR_ASWAL_BDN_TIOMataOS').value == 'Meningkat')
  {
    $('#EMR_ASWAL_BDN_TIOMataOS').html('<b> Menurun </b>');
    $('#EMR_ASWAL_BDN_TIOMataOS').val('Menurun');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOS').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOS').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_TIOMataOS').html('<b> Normal </b>');
    $('#EMR_ASWAL_BDN_TIOMataOS').val('Normal');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOS').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_TIOMataOS').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_pupilKanan2').keyup(function() {
  if(document.getElementById('EMR_ASWAL_BDN_pupilKanan2').value == document.getElementById('EMR_ASWAL_BDN_pupilKiri2').value)
  {
    $('#pupilstat2').html('<center><b> Isokor </b></center>');
  }
  else
  {
    $('#pupilstat2').html('<center><b> Anisokor </b></center>');
  }
});
$('#EMR_ASWAL_BDN_pupilKiri2').keyup(function() {
  if(document.getElementById('EMR_ASWAL_BDN_pupilKanan2').value == document.getElementById('EMR_ASWAL_BDN_pupilKiri2').value)
  {
    $('#pupilstat2').html('<center><b> Isokor </b></center>');
  }
  else
  {
    $('#pupilstat2').html('<center><b> Anisokor </b></center>');
  }
});

//Tulang
$('#EMR_ASWAL_BDN_SLTulang').click(function() {
  $('#EMR_ASWAL_BDN_SLTulang1').toggleClass('collapse');
});

$('#EMR_ASWAL_BDN_btnVulnus').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnVulnus').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnVulnus').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnVulnus').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnVulnus').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnVulnus').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnVulnus').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnVulnus').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnVulnus').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnVulnus').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_btnSwelling').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnSwelling').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnSwelling').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnSwelling').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnSwelling').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnSwelling').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnSwelling').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnSwelling').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnSwelling').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnSwelling').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_btnHematom').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnHematom').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnHematom').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnHematom').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnHematom').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnHematom').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnHematom').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnHematom').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnHematom').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnHematom').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_btnNyeritekan').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnNyeritekan').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnNyeritekan').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnNyeritekan').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnNyeritekan').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnNyeritekan').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnNyeritekan').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnNyeritekan').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnNyeritekan').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnNyeritekan').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_btnPerubahanSuhu').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnPerubahanSuhu').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnPerubahanSuhu').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnPerubahanSuhu').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnPerubahanSuhu').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnPerubahanSuhu').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnPerubahanSuhu').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnPerubahanSuhu').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnPerubahanSuhu').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnPerubahanSuhu').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_btnKrepitasi').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnKrepitasi').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnKrepitasi').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnKrepitasi').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnKrepitasi').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnKrepitasi').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnKrepitasi').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnKrepitasi').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnKrepitasi').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnKrepitasi').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_btnHiperetesi').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnHiperetesi').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnHiperetesi').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnHiperetesi').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnHiperetesi').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnHiperetesi').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnHiperetesi').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnHiperetesi').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnHiperetesi').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnHiperetesi').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_btnROM').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnROM').value == '+')
  {
    $('#EMR_ASWAL_BDN_btnROM').html('<b> - </b>');
    $('#EMR_ASWAL_BDN_btnROM').val('-');
    document.getElementById('EMR_ASWAL_BDN_btnROM').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnROM').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnROM').html('<b> + </b>');
    $('#EMR_ASWAL_BDN_btnROM').val('+');
    document.getElementById('EMR_ASWAL_BDN_btnROM').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnROM').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_btnMove').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_btnMove').value == 'Bebas')
  {
    $('#EMR_ASWAL_BDN_btnMove').html('<b> Terbatas </b>');
    $('#EMR_ASWAL_BDN_btnMove').val('Terbatas');
    document.getElementById('EMR_ASWAL_BDN_btnMove').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_btnMove').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_btnMove').html('<b> Bebas </b>');
    $('#EMR_ASWAL_BDN_btnMove').val('Bebas');
    document.getElementById('EMR_ASWAL_BDN_btnMove').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_btnMove').classList.add('green');
  }
});

//bedah
$('#EMR_ASWAL_BDN_SLBedah').click(function() {
  $('#EMR_ASWAL_BDN_SLBedah1').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_SLBedahRegio2').val('');
  $('#EMR_ASWAL_BDN_SLBedahInspeksi').val('');
  $('#EMR_ASWAL_BDN_SLBedahPalpasi').val('');
  $('#EMR_ASWAL_BDN_SLBedahPerkusi').val('');
  $('#EMR_ASWAL_BDN_SLBedahAuskultasi').val('');
});

//rectum
$('#EMR_ASWAL_BDN_SLRec').click(function() {
  $('#EMR_ASWAL_BDN_SLRec2').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_SLRectumA1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLRectumA2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLRectumA3').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLRectumB1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLRectumB2').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLRectumB3status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLRectumB3div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLRectumB3').val('');
    $('#EMR_ASWAL_BDN_SLRectumB3status').val('Tidak');
  }
  $('#EMR_ASWAL_BDN_SLRectumC1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLRectumC2').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLRectumC3status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLRectumC3div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLRectumC3').val('');
    $('#EMR_ASWAL_BDN_SLRectumC3status').val('Tidak');
  }
  $('#EMR_ASWAL_BDN_SLRectumD1').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLRectumD2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLRectumE').val('');
});

//tonus
$('#EMR_ASWAL_BDN_SLRectumA1').click(function() {
  $('#EMR_ASWAL_BDN_SLRectumA2').removeAttr('checked');
  $('#EMR_ASWAL_BDN_SLRectumA3').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLRectumA2').click(function() {
  $('#EMR_ASWAL_BDN_SLRectumA1').removeAttr('checked');
});

$('#EMR_ASWAL_BDN_SLRectumA3').click(function() {
  $('#EMR_ASWAL_BDN_SLRectumA1').removeAttr('checked');
});

//teraba
$('#EMR_ASWAL_BDN_SLRectumB1').click(function() {
  $('#EMR_ASWAL_BDN_SLRectumB2').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLRectumB3status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLRectumB3div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLRectumB3').val('');
    $('#EMR_ASWAL_BDN_SLRectumB3status').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLRectumB2').click(function() {
  $('#EMR_ASWAL_BDN_SLRectumB1').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLRectumB3status').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLRectumB3div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLRectumB3').focus();
    $('#EMR_ASWAL_BDN_SLRectumB3status').val('Ya');
  }
});

var EMR_ASWAL_BDN_SLRectumB3 = document.getElementById('EMR_ASWAL_BDN_SLRectumB3');

$("#EMR_ASWAL_BDN_SLRectumB3").focusout(function() {
  if(EMR_ASWAL_BDN_SLRectumB3.value == '')
  {
    alert("Isian belum di isi, centang akan dihapus otomatis");
    $('#EMR_ASWAL_BDN_SLRectumB2').removeAttr('checked');
    $("#EMR_ASWAL_BDN_SLRectumB3").val('');
    $("#EMR_ASWAL_BDN_SLRectumB3status").val('Tidak');
    $("#EMR_ASWAL_BDN_SLRectumB3div").toggleClass('collapse');
  }
});

//nyeri
$('#EMR_ASWAL_BDN_SLRectumC1').click(function() {
  $('#EMR_ASWAL_BDN_SLRectumC2').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLRectumC3status').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLRectumC3div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLRectumC3').val('');
    $('#EMR_ASWAL_BDN_SLRectumC3status').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLRectumC2').click(function() {
  $('#EMR_ASWAL_BDN_SLRectumC1').removeAttr('checked');
  if(document.getElementById('EMR_ASWAL_BDN_SLRectumC3status').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLRectumC3div').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLRectumC3').focus();
    $('#EMR_ASWAL_BDN_SLRectumC3status').val('Ya');
  }
});

var EMR_ASWAL_BDN_SLRectumC3 = document.getElementById('EMR_ASWAL_BDN_SLRectumC3');

$("#EMR_ASWAL_BDN_SLRectumC3").focusout(function() {
  if(EMR_ASWAL_BDN_SLRectumC3.value == '')
  {
    alert("Isian belum di isi, centang akan dihapus otomatis");
    $('#EMR_ASWAL_BDN_SLRectumC2').removeAttr('checked');
    $("#EMR_ASWAL_BDN_SLRectumC3").val('');
    $("#EMR_ASWAL_BDN_SLRectumC3status").val('Tidak');
    $("#EMR_ASWAL_BDN_SLRectumC3div").toggleClass('collapse');
  }
});

//neurologis
$('#EMR_ASWAL_BDN_SLNeurologis').click(function() {
  $('#EMR_ASWAL_BDN_SLNeurologis1').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_SLNeurologis2').val('');
});

//jiwa
$('#EMR_ASWAL_BDN_SLJiwa').click(function() {
  $('#EMR_ASWAL_BDN_SLJiwa1').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_SLJiwa2').val('');
});

//kandungan
$('#EMR_ASWAL_BDN_SLKandungan').click(function() {
  $('#EMR_ASWAL_BDN_SLKandungan1').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_SLKandungan2').val('');
});

//kulit
$('#EMR_ASWAL_BDN_SLKulit').click(function() {
  $('#EMR_ASWAL_BDN_SLKulit1').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_SLKulit2').val('');
});

//obsgin
$('#EMR_ASWAL_BDN_SLObsgin').click(function() {
  $('#EMR_ASWAL_BDN_SLObsgin1').toggleClass('collapse');
  if(document.getElementById('EMR_ASWAL_BDN_SLObstetricStatus').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLObstetric2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLObstetric').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLObstetricStatus').val('Tidak');
  }
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisStatus').value == 'Ya')
  {
    $('#EMR_ASWAL_BDN_SLGinekologis2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLGinekologis').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLGinekologisStatus').val('Tidak');
  }
});

//obstetric
$('#EMR_ASWAL_BDN_SLObstetric').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLObstetricStatus').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLObstetric2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLObstetricStatus').val('Ya');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLObstetric2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLObstetric').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLObstetricStatus').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLObstetricbtnKetuban').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLObstetricbtnKetuban').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLObstetricKetubantxt2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLObstetricKetubantxt').focus();
    $('#EMR_ASWAL_BDN_SLObstetricbtnKetuban').html('-');
    $('#EMR_ASWAL_BDN_SLObstetricbtnKetuban').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLObstetricbtnKetuban').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLObstetricbtnKetuban').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLObstetricKetubantxt2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLObstetricKetubantxt').val('');
    $('#EMR_ASWAL_BDN_SLObstetricbtnKetuban').html('+');
    $('#EMR_ASWAL_BDN_SLObstetricbtnKetuban').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLObstetricbtnKetuban').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLObstetricbtnKetuban').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_SLObstetricleopoid4kon').click(function() {
  $('#EMR_ASWAL_BDN_SLObstetricleopoid4kon2').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_SLObstetricleopoid4dev2').toggleClass('collapse');
});

$('#EMR_ASWAL_BDN_SLObstetricleopoid4dev').click(function() {
  $('#EMR_ASWAL_BDN_SLObstetricleopoid4kon2').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_SLObstetricleopoid4dev2').toggleClass('collapse');
});

//ginekologi
$('#EMR_ASWAL_BDN_SLGinekologis').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisStatus').value == 'Tidak')
  {
    $('#EMR_ASWAL_BDN_SLGinekologis2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLGinekologisStatus').val('Ya');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologis2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLGinekologis').removeAttr('checked');
    $('#EMR_ASWAL_BDN_SLGinekologisStatus').val('Tidak');
  }
});

$('#EMR_ASWAL_BDN_SLGinekologisbtnNyeTek').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeTek').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeTek').html('-');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeTek').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeTek').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeTek').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeTek').html('+');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeTek').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeTek').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeTek').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_SLGinekologisbtnBenjolan').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnBenjolan').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnBenjolan').html('-');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnBenjolan').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnBenjolan').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnBenjolan').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnBenjolan').html('+');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnBenjolan').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnBenjolan').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnBenjolan').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_SLGinekologisbtnDefmus').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnDefmus').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnDefmus').html('-');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnDefmus').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnDefmus').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnDefmus').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnDefmus').html('+');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnDefmus').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnDefmus').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnDefmus').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_SLGinekologisbtnNyeriInspek').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeriInspek').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeriInspek').html('-');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeriInspek').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeriInspek').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeriInspek').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeriInspek').html('+');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeriInspek').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeriInspek').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeriInspek').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_SLGinekologisbtnFluksus').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnFluksus').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnFluksus').html('-');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnFluksus').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnFluksus').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnFluksus').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnFluksus').html('+');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnFluksus').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnFluksus').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnFluksus').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_SLGinekologisbtnFluor').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnFluor').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnFluor').html('-');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnFluor').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnFluor').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnFluor').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnFluor').html('+');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnFluor').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnFluor').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnFluor').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_SLGinekologisbtnNyeriVT').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeriVT').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeriVT').html('-');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeriVT').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeriVT').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeriVT').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeriVT').html('+');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnNyeriVT').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeriVT').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnNyeriVT').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_SLGinekologisbtnMassa').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnMassa').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisMassatxt2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLGinekologisMassatxt').focus();
    $('#EMR_ASWAL_BDN_SLGinekologisbtnMassa').html('-');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnMassa').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnMassa').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnMassa').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisMassatxt2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLGinekologisMassatxt').val('');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnMassa').html('+');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnMassa').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnMassa').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnMassa').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_SLGinekologisbtnErosi').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnErosi').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisErositxt2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLGinekologisErositxt').focus();
    $('#EMR_ASWAL_BDN_SLGinekologisbtnErosi').html('-');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnErosi').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnErosi').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnErosi').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisErositxt2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLGinekologisErositxt').val('');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnErosi').html('+');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnErosi').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnErosi').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnErosi').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKanan').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKanan').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisAdnexaKanantxt2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLGinekologisAdnexaKanantxt').focus();
    $('#EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKanan').html('-');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKanan').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKanan').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKanan').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisAdnexaKanantxt2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLGinekologisAdnexaKanantxt').val('');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKanan').html('+');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKanan').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKanan').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKanan').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKiri').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKiri').value == '+')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisAdnexaKiritxt2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLGinekologisAdnexaKiritxt').focus();
    $('#EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKiri').html('-');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKiri').val('-');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKiri').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKiri').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisAdnexaKiritxt2').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_SLGinekologisAdnexaKiritxt').val('');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKiri').html('+');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKiri').val('+');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKiri').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKiri').classList.add('green');
  }
});

$('#EMR_ASWAL_BDN_SLGinekologisbtnSupel').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnSupel').value == 'Supel')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnSupel').html('Distensi');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnSupel').val('Distensi');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnSupel').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnSupel').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnSupel').html('Supel');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnSupel').val('Supel');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnSupel').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnSupel').classList.add('green');
  }
});
$('#EMR_ASWAL_BDN_SLGinekologisbtnUterus').click(function() {
  if(document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnUterus').value == 'Antefleksi')
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnUterus').html('Retrofleksi');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnUterus').val('Retrofleksi');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnUterus').classList.remove('green');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnUterus').classList.add('yellow');
  }
  else
  {
    $('#EMR_ASWAL_BDN_SLGinekologisbtnUterus').html('Antefleksi');
    $('#EMR_ASWAL_BDN_SLGinekologisbtnUterus').val('Antefleksi');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnUterus').classList.remove('yellow');
    document.getElementById('EMR_ASWAL_BDN_SLGinekologisbtnUterus').classList.add('green');
  }
});

//halaman 4
$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#EMR_ASWAL_BDN_Diagnosis" ).bind( "keydown", function( event ) {
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

$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#EMR_ASWAL_BDN_DiagnosisBanding" ).bind( "keydown", function( event ) {
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

$('#EMR_ASWAL_BDN_Diagnosis').keyup(function() {
  if(EMR_ASWAL_BDN_Diagnosis.value != '' || EMR_ASWAL_BDN_DiagnosisBanding.value != '')
  {
    halamandokbdn4 = 'Ya';
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
  }
  else
  {
    halamandokbdn4 = 'Tidak';
    EMR_ASWAL_BDN_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_HalamanNext.classList.add('white');
  }
});

$('#EMR_ASWAL_BDN_DiagnosisBanding').keyup(function() {
  if(EMR_ASWAL_BDN_Diagnosis.value != '' || EMR_ASWAL_BDN_DiagnosisBanding.value != '')
  {
    halamandokbdn4 = 'Ya';
    EMR_ASWAL_BDN_HalamanNext.disabled = false;
    EMR_ASWAL_BDN_HalamanNext.classList.remove('white');
    EMR_ASWAL_BDN_HalamanNext.classList.add('green');
  }
  else
  {
    halamandokbdn4 = 'Tidak';
    EMR_ASWAL_BDN_HalamanNext.disabled = true;
    EMR_ASWAL_BDN_HalamanNext.classList.remove('green');
    EMR_ASWAL_BDN_HalamanNext.classList.add('white');
  }
});

//halaman 5
//obat
$('#EMR_ASWAL_BDN_Obat').click(function() {
  $('#EMR_ASWAL_BDN_Obat2').toggleClass('collapse');
});

var EMR_ASWAL_BDN_ObatbtnObatSatuan = document.getElementById('EMR_ASWAL_BDN_ObatbtnObatSatuan');
var EMR_ASWAL_BDN_ObatbtnObatRacik = document.getElementById('EMR_ASWAL_BDN_ObatbtnObatRacik');
var EMR_ASWAL_BDN_ObatstatObat = document.getElementById('EMR_ASWAL_BDN_ObatstatObat');

$('#EMR_ASWAL_BDN_ObatbtnObatSatuan').click(function() {
  EMR_ASWAL_BDN_ObatstatObat.value = "Satuan";
  $('#EMR_ASWAL_BDN_ObatformObatRacik').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_ObatformObatSatuan').toggleClass('collapse');

  EMR_ASWAL_BDN_ObatbtnObatSatuan.innerHTML = "<b>Obat </br> Satuan</b>";
  EMR_ASWAL_BDN_ObatbtnObatSatuan.classList.remove('blue');
  EMR_ASWAL_BDN_ObatbtnObatSatuan.classList.add('white');
  EMR_ASWAL_BDN_ObatbtnObatSatuan.classList.add('disabled');

  EMR_ASWAL_BDN_ObatbtnObatRacik.innerHTML = "<b>Obat </br> Racik</b>";
  EMR_ASWAL_BDN_ObatbtnObatRacik.classList.add('blue');
  EMR_ASWAL_BDN_ObatbtnObatRacik.classList.remove('white');
  EMR_ASWAL_BDN_ObatbtnObatRacik.classList.remove('disabled');
});

$('#EMR_ASWAL_BDN_ObatbtnObatRacik').click(function() {
  EMR_ASWAL_BDN_ObatstatObat.value = "Racik";
  $('#EMR_ASWAL_BDN_ObatformObatRacik').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_ObatformObatSatuan').toggleClass('collapse');

  EMR_ASWAL_BDN_ObatbtnObatSatuan.innerHTML = "<b>Obat </br> Satuan</b>";
  EMR_ASWAL_BDN_ObatbtnObatSatuan.classList.add('blue');
  EMR_ASWAL_BDN_ObatbtnObatSatuan.classList.remove('white');
  EMR_ASWAL_BDN_ObatbtnObatSatuan.classList.remove('disabled');

  EMR_ASWAL_BDN_ObatbtnObatRacik.innerHTML = "<b>Obat </br> Racik</b>";
  EMR_ASWAL_BDN_ObatbtnObatRacik.classList.remove('blue');
  EMR_ASWAL_BDN_ObatbtnObatRacik.classList.add('white');
  EMR_ASWAL_BDN_ObatbtnObatRacik.classList.add('disabled');
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = $('#EMR_ASWAL_BDN_Obatdiv_buttonSatuan');

    var EMR_ASWAL_BDN_ObatnomerSatuan = 2;

    $('#EMR_ASWAL_BDN_ObattambahSatuan').click(function() {
        var clone = $('#EMR_ASWAL_BDN_Obatdiv1Satuan').clone().find("input:text").val("").end().appendTo('#EMR_ASWAL_BDN_Obatdiv1Satuan').append(
          '<div class="col-md-4">'+
            '<div class="portlet light bordered">'+
              '<div class="portlet-title row">'+
                '<div class="caption font-red-sunglo col-md-8">'+
                    '<i class="fa fa-gift font-red-sunglo"></i>'+
                    '<span class="caption-subject bold uppercase">Obat Ke - '+ EMR_ASWAL_BDN_ObatnomerSatuan +' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>'+
                '</div>'+
                '<div class="col-md-3">'+
                  '<a class="btn btn-danger EMR_ASWAL_BDN_ObatremoveSatuan">'+
                    '<i class="fa fa-close"> Hapus</i>'+
                  '</a>'+
                '</div>'+
                '<div class="tools col-md-1"> &nbsp;&nbsp;'+
                  '<a href="javascript:;" class="collapse" data-original-title="" title=""> </a>'+
                '</div>'+
              '</div>'+
              '<div class="portlet-body">'+
                  '<div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-0.5em; margin-bottom: 1em;">'+
                    '<div class="row mt-repeater-row">'+
                      '<div class="col-md-8">'+
                        '<div class="form-group">'+
                          '<label class="control-label" style="font-size:14px">Nama Obat</label>'+
                          '<input type="text" name="EMR_ASWAL_BDN_Obatobatsatuan[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>'+
                          '<input type="hidden" name="EMR_ASWAL_BDN_Obatidobatsatuan[]" class="form-control project"/>'+
                        '</div>'+
                      '</div>'+
                      '<div class="col-md-4">'+
                        '<div class="form-group">'+
                          '<label class="control-label" style="font-size:14px">Jumlah Obat</label>'+
                          '<input type="text" id="EMR_ASWAL_BDN_ObatSatuanJumlah" name="EMR_ASWAL_BDN_ObatSatuanJumlah[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                      '<div class="col-md-12">'+
                        '<label class="control-label" style="font-size:14px">Aturan Pakai</label>'+
                      '</div>'+
                      '<div class="col-md-12">'+
                        '<div class="col-md-3">'+
                          '<input type="text" id="EMR_ASWAL_BDN_ObatSatuanAturanPakai1" name="EMR_ASWAL_BDN_ObatSatuanAturanPakai1[]" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                        '</div>'+
                        '<div class="col-md-1">'+
                          '<p class="form-control-static"> dd </p>'+
                        '</div>'+
                        '<div class="col-md-3">'+
                          '<input type="text" id="EMR_ASWAL_BDN_ObatSatuanAturanPakai2" name="EMR_ASWAL_BDN_ObatSatuanAturanPakai2[]" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                        '</div>'+
                        '<div class="col-md-5">'+
                          '<select class="form-control" id="EMR_ASWAL_BDN_ObatSatuanAturanPakai3" name="EMR_ASWAL_BDN_ObatSatuanAturanPakai3[]">'+
                                '<option>Tetes</option>'+
                                '<option>Oles</option>'+
                                '<option selected="selected">Minum</option>'+
                                '<option>Vaginal Suppositoria</option>'+
                                '<option>Rectal Suppositoria</option>'+
                            '</select>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                      '<div class="col-md-12">'+
                        '<div class="col-md-6">'+
                          '<select class="form-control" id="EMR_ASWAL_BDN_ObatSatuanKetPakai1" name="EMR_ASWAL_BDN_ObatSatuanKetPakai1[]">'+
                                '<option>a.c.</option>'+
                                '<option>p.c.</option>'+
                                '<option>d.c.</option>'+
                                '<option>ad.lib.</option>'+
                            '</select>'+
                        '</div>'+
                        '<div class="col-md-6">'+
                        '<select class="form-control" id="EMR_ASWAL_BDN_ObatSatuanKetPakai2" name="EMR_ASWAL_BDN_ObatSatuanKetPakai2[]">'+
                              '<option>p.r.n.</option>'+
                              '<option>sampai habis</option>'+
                          '</select>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                      '<div class="col-md-12">'+
                          '<input type="text" id="EMR_ASWAL_BDN_ObatSatuanLain" name="EMR_ASWAL_BDN_ObatSatuanLain[]" class="form-control" placeholder="Lain-lain"/>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
              '</div>'+
            '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        // insert duplicate before button div
        before.before(clone);

        EMR_ASWAL_BDN_ObatnomerSatuan++;
    });


    $( "body" ).on('click', '.EMR_ASWAL_BDN_ObatremoveSatuan', function(){
        EMR_ASWAL_BDN_ObatnomerSatuan--;
        $(this).closest('#EMR_ASWAL_BDN_Obatdiv1Satuan').remove();
    });
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = null;
    var value = null;

    //var nomer2 = 1;

     $(document).on('click', '.EMR_ASWAL_BDN_ObattambahRacikBahan-click', function () {
        value = $(this).data('todo').number;

        var before = $('#EMR_ASWAL_BDN_Obatdiv_buttonracikBahan'+value);
        var clone = $('#EMR_ASWAL_BDN_ObatdivracikBahan'+value).clone(true).find("input:text").val("").end().appendTo('#EMR_ASWAL_BDN_ObatdivracikBahan'+value).append(
          '<div class="form-group">'+
            '<div data-repeater-item class="mt-repeater-item">'+
              '<div class="row mt-repeater-row">'+
                '<div class="col-md-12">'+
                  '<label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>'+
                  '<input type="text" name="EMR_ASWAL_BDN_ObatobatsatuanRacik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>'+
                  '<input type="hidden" name="EMR_ASWAL_BDN_ObatidobatsatuanRacik[]" value="" class="form-control project_racik"/>'+
                  '<input type="hidden" value="RACIK_000'+value+'" id="EMR_ASWAL_BDN_ObatidRacik" name="EMR_ASWAL_BDN_ObatidRacik[]" class="form-control" />'+
                '</div>'+
              '</div>'+
              '</br>'+
              '<div class="row mt-repeater-row">'+
                '<div class="col-md-4">'+
                  '<label class="control-label" style="font-size:14px">Jumlah</label>'+
                  '<input type="text" id="EMR_ASWAL_BDN_ObatRacikJumlahBahan" name="EMR_ASWAL_BDN_ObatRacikJumlahBahan[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                '</div>'+
                '<div class="col-md-6">'+
                  '<label class="control-label" style="font-size:14px">Satuan</label>'+
                  '<select class="form-control" id="EMR_ASWAL_BDN_ObatRacikSatuan" name="EMR_ASWAL_BDN_ObatRacikSatuan[]">'+
                        '<option value="Gram">Gram</option>'+
                        '<option selected="selected" value="Mg">Mg</option>'+
                        '<option value="Tab/Kap/Cap">Tab/Kap/Cap</option>'+
                        '<option value="Tube">Tube</option>'+
                        '<option value="Botol">Botol</option>'+
                    '</select>'+
                '</div>'+
                '<label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;</label>'+
                '</br>'+
                '<a class="btn btn-danger EMR_ASWAL_BDN_ObatremoveRacikBahan mt-repeater-del-right mt-repeater-btn-inline">'+
                    '<i class="fa fa-close"></i>'+
                '</a>'+
              '</div>'+
            '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        before.before(clone);
    });

    $( "body" ).on('click', '.EMR_ASWAL_BDN_ObatremoveRacikBahan', function(){
        $(this).closest('#EMR_ASWAL_BDN_ObatdivracikBahan'+value).remove();
    });
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = $('#EMR_ASWAL_BDN_Obatdiv_buttonracikobat');

    var nomer2 = 2;
    var todo = '{"number":"'+nomer2+'"}';

    $('#EMR_ASWAL_BDN_Obattambahracikobat').click(function() {
        var clone = $('#EMR_ASWAL_BDN_Obatdivracikobat').clone(true).find("input:text").val("").end().appendTo('#EMR_ASWAL_BDN_Obatdivracikobat').append(
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
                      '<div class="form-group">'+
                        '<div data-repeater-item class="mt-repeater-item">'+
                          '<div class="row mt-repeater-row">'+
                            '<div class="col-md-12">'+
                              '<label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>'+
                              '<input type="text" name="EMR_ASWAL_BDN_ObatobatsatuanRacik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>'+
                              '<input type="hidden" name="EMR_ASWAL_BDN_ObatidobatsatuanRacik[]" value="" class="form-control project_racik"/>'+
                              '<input type="hidden" value="RACIK_000'+nomer2+'" id="EMR_ASWAL_BDN_ObatidRacik" name="EMR_ASWAL_BDN_ObatidRacik[]" class="form-control" />'+
                            '</div>'+
                          '</div>'+
                          '</br>'+
                          '<div class="row mt-repeater-row">'+
                            '<div class="col-md-4">'+
                              '<label class="control-label" style="font-size:14px">Jumlah</label>'+
                              '<input type="text" id="EMR_ASWAL_BDN_ObatRacikJumlahBahan" name="EMR_ASWAL_BDN_ObatRacikJumlahBahan[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                            '</div>'+
                            '<div class="col-md-6">'+
                              '<label class="control-label" style="font-size:14px">Satuan</label>'+
                              '<select class="form-control" id="EMR_ASWAL_BDN_ObatRacikSatuan" name="EMR_ASWAL_BDN_ObatRacikSatuan[]">'+
                                    '<option value="Gram">Gram</option>'+
                                    '<option selected="selected" value="Mg">Mg</option>'+
                                    '<option value="Tab/Kap/Cap">Tab/Kap/Cap</option>'+
                                    '<option value="Tube">Tube</option>'+
                                    '<option value="Botol">Botol</option>'+
                                '</select>'+
                            '</div>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                      '<div id="EMR_ASWAL_BDN_ObatdivracikBahan'+nomer2+'"></div>'+
                      '<div id="EMR_ASWAL_BDN_Obatdiv_buttonracikBahan'+nomer2+'">'+
                        '<a class="btn blue EMR_ASWAL_BDN_ObattambahRacikBahan-click col-md-12" name="EMR_ASWAL_BDN_ObattambahRacikBahan" value="Tambah Data"><i class="fa fa-plus"></i> Tambah Bahan</a>'+
                      '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row">'+
                      '<div class="col-md-12">'+
                        '<label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Detail Obat</label>'+
                      '</div>'+
                      '<div class="col-md-12">'+
                          '<div class="col-md-8">'+
                            '<select class="form-control" id="EMR_ASWAL_BDN_ObatRacikAturanBahan" name="EMR_ASWAL_BDN_ObatRacikAturanBahan[]">'+
                                  '<option selected="selected" value="m.f.da.in caps.dtd">m.f.da.in caps.dtd</option>'+
                                  '<option value="m.f.l.a.pulv.dtd">m.f.l.a.pulv.dtd</option>'+
                                  '<option value="m.f.da.in caps">m.f.da.in caps</option>'+
                                  '<option value="m.f.l.a.pulv">m.f.l.a.pulv</option>'+
                                  '<option value="m.f.krim">m.f.krim</option>'+
                                  '<option value="m.f.da.in.bottle">m.f.da.in.bottle</option>'+
                              '</select>'+
                            '</div>'+
                          '<div class="col-md-4">'+
                            '<input type="text" id="EMR_ASWAL_BDN_ObatRacikJumlahRacik" name="EMR_ASWAL_BDN_ObatRacikJumlahRacik[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                          '</div>'+
                        '</br>'+
                        '<div class="col-md-8">'+
                            '<input type="hidden" value="RACIK_000'+nomer2+'" id="EMR_ASWAL_BDN_ObatidRacik_2" name="EMR_ASWAL_BDN_ObatidRacik_2[]" class="form-control" />'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                      '<div class="col-md-12">'+
                        '<label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Aturan Pakai</label>'+
                      '</div>'+
                      '<div class="col-md-12">'+
                        '<div class="col-md-3">'+
                          '<input type="text" id="EMR_ASWAL_BDN_ObatRacikAturanPakai1" name="EMR_ASWAL_BDN_ObatRacikAturanPakai1[]" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                        '</div>'+
                        '<div class="col-md-1">'+
                          '<p class="form-control-static"> dd </p>'+
                        '</div>'+
                        '<div class="col-md-3">'+
                          '<input type="text" id="EMR_ASWAL_BDN_ObatRacikAturanPakai2" name="EMR_ASWAL_BDN_ObatRacikAturanPakai2[]" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                        '</div>'+
                        '<div class="col-md-5">'+
                          '<select class="form-control" id="EMR_ASWAL_BDN_ObatRacikAturanPakai3" name="EMR_ASWAL_BDN_ObatRacikAturanPakai3[]">'+
                              '<option value="Tetes">Tetes</option>'+
                              '<option value="Oles">Oles</option>'+
                              '<option selected="selected" value="Minum">Minum</option>'+
                              '<option value="Vaginal Suppositoria">Vaginal Suppositoria</option>'+
                              '<option value="Rectal Suppositoria">Rectal Suppositoria</option>'+
                          '</select>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                      '<div class="col-md-12">'+
                        '<div class="col-md-6">'+
                          '<select class="form-control" id="EMR_ASWAL_BDN_ObatRacikKetPakai1" name="EMR_ASWAL_BDN_ObatRacikKetPakai1[]" >'+
                              '<option value="a.c.">a.c.</option>'+
                              '<option value="p.c.">p.c.</option>'+
                              '<option value="d.c.">d.c.</option>'+
                              '<option value="ad.lib.">ad.lib.</option>'+
                          '</select>'+
                        '</div>'+
                        '<div class="col-md-6">'+
                        '<select class="form-control" id="EMR_ASWAL_BDN_ObatRacikKetPakai2" name="EMR_ASWAL_BDN_ObatRacikKetPakai2[]" >'+
                            '<option value="p.r.n.">p.r.n.</option>'+
                            '<option value="Sampai Habis">Sampai Habis</option>'+
                        '</select>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                      '<div class="col-md-12">'+
                          '<input type="text" id="EMR_ASWAL_BDN_ObatRacikLain" name="EMR_ASWAL_BDN_ObatRacikLain[]" class="form-control" placeholder="Lain-lain"/>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                    '</br>'+
                    '<a class="btn btn-danger EMR_ASWAL_BDN_Obatremoveracikobat col-md-12">'+
                      '<i class="fa fa-close"> Hapus Obat Racikan</i>'+
                    '</a>'+
                '</div>'+
              '</div>'+
            '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        before.before(clone);
        clone.find(".EMR_ASWAL_BDN_ObattambahRacikBahan-click").attr("data-todo", '{"number":"'+nomer2+'"}');
        nomer2++;
    });

    $( "body" ).on('click', '.EMR_ASWAL_BDN_Obatremoveracikobat', function(){
        nomer2--;
      $(this).closest('#EMR_ASWAL_BDN_Obatdivracikobat').remove();
    });
});

//radiologi
$('#EMR_ASWAL_BDN_Radiologi').click(function() {
  $('#EMR_ASWAL_BDN_Radiologi2').toggleClass('collapse');
});

var EMR_ASWAL_BDN_radiologi_lain = document.getElementById('EMR_ASWAL_BDN_radiologi_lain');
var EMR_ASWAL_BDN_Gigi_Satuan = document.getElementById('EMR_ASWAL_BDN_Gigi_Satuan');

$('#EMR_ASWAL_BDN_reset_radio').on('click', function () {
  if(EMR_ASWAL_BDN_radiologi_lain.checked == true)
  {
      $('#EMR_ASWAL_BDN_radiologi_lain1').toggleClass('collapse');
  }
  if (EMR_ASWAL_BDN_Gigi_Satuan.checked == true)
  {
    $('#EMR_ASWAL_BDN_Gigi_Satuan1').toggleClass('collapse');
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

$('#EMR_ASWAL_BDN_radiologi_lain').click(function() {
    $('#EMR_ASWAL_BDN_radiologi_lain1').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_radiologi_lain2').val('');
});

$('#EMR_ASWAL_BDN_Gigi_Satuan').click(function() {
    $('#EMR_ASWAL_BDN_Gigi_Satuan1').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_Gigi_Satuan2').val('');
});

//laborat
$('#EMR_ASWAL_BDN_Laborat').click(function() {
  $('#EMR_ASWAL_BDN_Laborat2').toggleClass('collapse');
});

var laboratorium_lain_rajal = document.getElementById('laboratorium_lain_rajal');

$('#EMR_ASWAL_BDN_reset_laboratorium').on('click', function () {
  if(EMR_ASWAL_BDN_laboratorium_lain.checked == true)
  {
      $('#EMR_ASWAL_BDN_laboratorium_lain1').toggleClass('collapse');
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


$('#EMR_ASWAL_BDN_laboratorium_lain').click(function() {
    $('#EMR_ASWAL_BDN_laboratorium_lain1').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_laboratorium_lain2').val('');
});

//EkgDll
$('#EMR_ASWAL_BDN_EkgDll').click(function() {
  $('#EMR_ASWAL_BDN_EkgDll2').toggleClass('collapse');
});

$('#EMR_ASWAL_BDN_EKGlain').click(function() {
    $('#EMR_ASWAL_BDN_EKGlain_1').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_EKGlain_2').val('');
});

var EMR_ASWAL_BDN_EKGlain = document.getElementById('EMR_ASWAL_BDN_EKGlain');

$('#EMR_ASWAL_BDN_reset_EKG').on('click', function () {
  if(EMR_ASWAL_BDN_EKGlain.checked == true)
  {
      $('#EMR_ASWAL_BDN_EKGlain_1').toggleClass('collapse');
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

//Rujukan
$('#EMR_ASWAL_BDN_Rujukan').click(function() {
  $('#EMR_ASWAL_BDN_Rujukan2').toggleClass('collapse');
});

var EMR_ASWAL_BDN_rklinik = document.getElementById('EMR_ASWAL_BDN_rklinik');
var EMR_ASWAL_BDN_rlain = document.getElementById('EMR_ASWAL_BDN_rlain');

$('#EMR_ASWAL_BDN_rklinik').click(function() {
    $('#EMR_ASWAL_BDN_rklinik_1').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_rklinik_2').val('');
});

$('#EMR_ASWAL_BDN_rlain').click(function() {
    $('#EMR_ASWAL_BDN_rlain_1').toggleClass('collapse');
    $('#EMR_ASWAL_BDN_rlain_2').val('');
});

//edukasi
$('#EMR_ASWAL_BDN_Edukasi').click(function() {
  $('#EMR_ASWAL_BDN_edukasi_1').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_edukasi_2').val('');
});

//Prognosis
$('#EMR_ASWAL_BDN_Prognosis').click(function() {
  $('#EMR_ASWAL_BDN_Prognosis_1').toggleClass('collapse');
  //$('#EMR_ASWAL_BDN_Prognosis_2').val('');
});

//kontrol
$('#EMR_ASWAL_BDN_KontrolK').click(function() {
  $('#EMR_ASWAL_BDN_KontrolK_1').toggleClass('collapse');
  $('#EMR_ASWAL_BDN_KontrolK_2').val('');
});
