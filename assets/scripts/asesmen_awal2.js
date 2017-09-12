var EMR_ASESMEN_AWAL_btnChangePerPerawat = document.getElementById('EMR_ASESMEN_AWAL_btnChangePerPerawat'); //HALAMAN PERAWAT
var EMR_ASESMEN_AWAL_btnChangeDokPerawat = document.getElementById('EMR_ASESMEN_AWAL_btnChangeDokPerawat'); //HALAMAN PERAWAT
var EMR_ASESMEN_AWAL_userPerPerawat = document.getElementById('EMR_ASESMEN_AWAL_userPerPerawat'); //HALAMAN PERAWAT
var EMR_ASESMEN_AWAL_passPerPerawat = document.getElementById('EMR_ASESMEN_AWAL_passPerPerawat'); //HALAMAN PERAWAT
var EMR_ASESMEN_AWAL_passDokPerawat = document.getElementById('EMR_ASESMEN_AWAL_passDokPerawat'); //HALAMAN PERAWAT
var EMR_ASESMEN_AWAL_btnSebelumnyaDokter = document.getElementById('EMR_ASESMEN_AWAL_btnSebelumnyaDokter');
//var EMR_ASESMEN_AWAL_btnSebelumnyaDokter2 = document.getElementById('EMR_ASESMEN_AWAL_btnSebelumnyaDokter2');
var EMR_ASESMEN_AWAL_passDokDokter = document.getElementById('EMR_ASESMEN_AWAL_passDokDokter');
var EMR_ASESMEN_AWAL_statver = document.getElementById('EMR_ASESMEN_AWAL_statver');
var EMR_ASESMEN_AWAL_PosisiHalaman = document.getElementById('EMR_ASESMEN_AWAL_PosisiHalaman');
var skorNyeri = document.querySelector('#SkorNyeri');
var Gskor = document.querySelector('#Gskor');
var EMR_ASESMEN_PERAWAT_HalamanBack = document.getElementById('EMR_ASESMEN_PERAWAT_HalamanBack');
var EMR_ASESMEN_PERAWAT_HalamanNext = document.getElementById('EMR_ASESMEN_PERAWAT_HalamanNext');
var EMR_ASESMEN_PERAWAT_btnHalaman1 = document.getElementById('EMR_ASESMEN_PERAWAT_btnHalaman1');
var EMR_ASESMEN_PERAWAT_btnHalaman2 = document.getElementById('EMR_ASESMEN_PERAWAT_btnHalaman2');
var EMR_ASESMEN_PERAWAT_btnHalaman3 = document.getElementById('EMR_ASESMEN_PERAWAT_btnHalaman3');
var EMR_ASESMEN_PERAWAT_btnHalaman4 = document.getElementById('EMR_ASESMEN_PERAWAT_btnHalaman4');
var EMR_ASESMEN_PERAWAT_btnHalaman5 = document.getElementById('EMR_ASESMEN_PERAWAT_btnHalaman5');
var EMR_ASESMEN_PERAWAT_btnHalaman6 = document.getElementById('EMR_ASESMEN_PERAWAT_btnHalaman6');
var hal = 1;
var hal2 = 0;
var hala = "";
var halaman1 = 'Tidak';
var halaman2 = 'Tidak';
var halaman3 = 'Tidak';
var halaman4 = 'Tidak';
var halaman5 = 'Tidak';
var halaman6 = 'Tidak';
var halaman = '';

EMR_ASESMEN_AWAL_btnChangePerPerawat.onclick = function()
{
    EMR_ASESMEN_AWAL_statver.value = "Dokter";
    EMR_ASESMEN_AWAL_userPerPerawat.value = "";
    EMR_ASESMEN_AWAL_passPerPerawat.value = "";
    $('#EMR_ASESMEN_AWAL_verPerPerawat').toggleClass('collapse');
    $('#EMR_ASESMEN_AWAL_verDokPerawat').toggleClass('collapse');
};

EMR_ASESMEN_AWAL_btnChangeDokPerawat.onclick = function()
{
    EMR_ASESMEN_AWAL_statver.value = "Perawat";
    EMR_ASESMEN_AWAL_passDokPerawat.value = "";
    $('#EMR_ASESMEN_AWAL_verPerPerawat').toggleClass('collapse');
    $('#EMR_ASESMEN_AWAL_verDokPerawat').toggleClass('collapse');
};

onkeypress = function(e){
  if(e.keyCode==13){
    if(EMR_ASESMEN_AWAL_PosisiHalaman.value == "Perawat")
    {
      document.getElementById('EMR_ASESMEN_AWAL_btnSelanjutnyaPerawat').click();
    }
    else
    {
      document.getElementById('btnsimpanDokterEMR_ASESMEN_AWAL').click();
    }
  }
}

EMR_ASESMEN_AWAL_btnSebelumnyaDokter.onclick = function()
{
  EMR_ASESMEN_AWAL_PosisiHalaman.value = "Perawat";
  if(EMR_ASESMEN_AWAL_passDokPerawat.value != "")
  {
    $('#EMR_ASESMEN_AWAL_passDokDokter2').toggleClass('collapse');
  }
  $('#EMR_ASESMEN_AWAL_stepPerawat').toggleClass('collapse');
  $('#EMR_ASESMEN_AWAL_stepDokter').toggleClass('collapse');
  $('#EMR_ASESMEN_AWAL_FrmLPerawat').toggleClass('collapse');
  $('#EMR_ASESMEN_AWAL_FrmRPerawat').toggleClass('collapse');
  $('#EMR_ASESMEN_AWAL_FrmLDokter').toggleClass('collapse');
  $('#EMR_ASESMEN_AWAL_FrmRDokter').toggleClass('collapse');
  //$('#CanvasLDokterEMR').toggleClass('collapse');
};

EMR_ASESMEN_PERAWAT_HalamanNext.onclick = function()
{
  hal++;
  hal2++;

  if(hal == 1)
  {
    //if(halaman1 == 'Tidak')
    //{
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    //}
  }
  else if(hal == 2)
  {
    //if(halaman2 == 'Tidak')
    //{
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    //}
  }
  else if(hal == 3)
  {
    //if(halaman3 == 'Tidak')
    //{
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    //}
  }
  else if(hal == 4)
  {
    //if(halaman4 == 'Tidak')
    //{
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    //}
  }
  else if(hal == 5)
  {
    //if(halaman5 == 'Tidak')
    //{
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    //}
  }
  else if(hal == 6)
  {
    //if(halaman6 == 'Tidak')
    //{
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('white');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('green');
    //}
  }

  $('#EMR_ASESMEN_PERAWAT_Halaman'+ hal +'').toggleClass('collapse');
  $('#EMR_ASESMEN_PERAWAT_Halaman'+ hal2 +'').toggleClass('collapse');

  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html(hal2);
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('green');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('col-md-7');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('col-md-1');
  if(hal == 2)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').html('2. Tanda Vital Dan Nutrisi');
  }
  else if(hal == 3)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').html('3. Asesmen Resiko Jatuh');
  }
  else if(hal == 4)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').html('4. Asesmen Nyeri');
  }
  else if(hal == 5)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').html('5. Alergi Dan Catatan');
  }
  else if(hal == 6)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').html('6. Info Pengisian');
  }
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('green');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('col-md-1');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('col-md-7');

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
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('col-md-7');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal +'').toggleClass('col-md-1');
  if(hal2 == 1)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html('1. Hambatan Komunikasi');
  }
  else if(hal2 == 2)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html('2. Tanda Vital Dan Nutrisi');
  }
  else if(hal2 == 3)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html('3. Asesmen Resiko Jatuh');
  }
  else if(hal2 == 4)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html('4. Asesmen Nyeri');
  }
  else if(hal2 == 5)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html('5. Alergi Dan Catatan');
  }
  else if(hal2 == 6)
  {
    $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').html('6. Info Pengisian');
  }
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('green');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('white');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('col-md-1');
  $('#EMR_ASESMEN_PERAWAT_btnHalaman'+ hal2 +'').toggleClass('col-md-7');

  hal--;
  hal2--;

  if(hal == 1)
  {
    EMR_ASESMEN_PERAWAT_HalamanBack.disabled = true;
    EMR_ASESMEN_PERAWAT_HalamanBack.classList.add('white');
    EMR_ASESMEN_PERAWAT_HalamanBack.classList.remove('green');
    //if(halaman1 == 'Ya')
    //{
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    //}
  }
  if(hal == 2)
  {
    //if(halaman2 == 'Ya')
    //{
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    //}
  }
  if(hal == 3)
  {
    //if(halaman3 == 'Ya')
    //{
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    //}
  }
  if(hal == 4)
  {
    //if(halaman4 == 'Ya')
    //{
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    //}
  }
  if(hal == 5)
  {
    //if(halaman5 == 'Ya')
    //{
      EMR_ASESMEN_PERAWAT_HalamanNext.disabled = false;
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.add('green');
      EMR_ASESMEN_PERAWAT_HalamanNext.classList.remove('white');
    //}
  }
};

$('#EMR_ASESMEN_AWAL_btnSelanjutnyaPerawat').click(function() {
  var form_data = {
    EMR_ASESMEN_AWAL_passDokPerawat: $('#EMR_ASESMEN_AWAL_passDokPerawat').val(),
    EMR_ASESMEN_AWAL_userPerPerawat: $('#EMR_ASESMEN_AWAL_userPerPerawat').val(),
    EMR_ASESMEN_AWAL_passPerPerawat: $('#EMR_ASESMEN_AWAL_passPerPerawat').val(),
    EMR_ASESMEN_AWAL_statver: $('#EMR_ASESMEN_AWAL_statver').val()
  };
  $.ajax({
    url: base_url + "emr/btnSelanjutnyaEMR_AWAL",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if (msg == 'msg-Selanjutnya_AWAL')
      {
        if(EMR_ASESMEN_AWAL_passDokPerawat.value != "")
        {
          $('#EMR_ASESMEN_AWAL_passDokDokter2').toggleClass('collapse');
        }
        /*EMR_ASESMEN_AWAL_tekanandarahDokter.innerHTML = tekanandarah.value;
        EMR_ASESMEN_AWAL_nadiDokter.innerHTML = nadi.value;
        EMR_ASESMEN_AWAL_suhutubuhDokter.innerHTML = suhutubuh.value;
        EMR_ASESMEN_AWAL_respiratoryDokter.innerHTML = respiratory.value;
        EMR_ASESMEN_AWAL_beratbadanDokter.innerHTML = beratbadan.value;
        EMR_ASESMEN_AWAL_tinggibadanDokter.innerHTML = tinggibadan.value;
        EMR_ASESMEN_AWAL_Nilai_BMIDokter.innerHTML = Nilai_BMI.value;
        EMR_ASESMEN_AWAL_Kategori_BMIDokter.innerHTML = Kategori_BMI.value;
        EMR_ASESMEN_AWAL_lingkarkepalaDokter.innerHTML = lingkarkepala.value;*/
        EMR_ASESMEN_AWAL_passDokDokter.value = EMR_ASESMEN_AWAL_passDokPerawat.value;
        $('#EMR_ASESMEN_AWAL_stepPerawat').toggleClass('collapse');
        $('#EMR_ASESMEN_AWAL_stepDokter').toggleClass('collapse');
        $('#EMR_ASESMEN_AWAL_FrmLPerawat').toggleClass('collapse');
        $('#EMR_ASESMEN_AWAL_FrmRPerawat').toggleClass('collapse');
        $('#EMR_ASESMEN_AWAL_FrmLDokter').toggleClass('collapse');
        $('#EMR_ASESMEN_AWAL_FrmRDokter').toggleClass('collapse');
        $("#alert-msg-EMR_ASESMEN_AWAL_Perawat").empty();
        //$('#CanvasLDokterEMR').toggleClass('collapse');
      }
      else if (msg == 'msg-UPPerKosongPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASESMEN_AWAL_Perawat').html('<div class="alert alert-danger">User dan Password Perawat dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-UserPerKosongPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASESMEN_AWAL_Perawat').html('<div class="alert alert-danger">User Perawat dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-PassPerKosongPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASESMEN_AWAL_Perawat').html('<div class="alert alert-danger">Password Perawat dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else if (msg == 'msg-UserPerSalahPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASESMEN_AWAL_Perawat').html('<div class="alert alert-danger text-center">User Perawat Anda Salah!</div>');
      }
      else if (msg == 'msg-PassPerSalahPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASESMEN_AWAL_Perawat').html('<div class="alert alert-danger text-center">Password Perawat Anda Salah!</div>');
      }
      else if (msg == 'msg-PassDokSalahPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASESMEN_AWAL_Perawat').html('<div class="alert alert-danger text-center">Password Dokter Anda Salah!</div>');
      }
      else if (msg == 'msg-PassDokKosongPerawatEMR_AWAL')
      {
        $('#alert-msg-EMR_ASESMEN_AWAL_Perawat').html('<div class="alert alert-danger">Password Dokter dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
      }
      else
      {
        $('#alert-msg-EMR_ASESMEN_AWAL_Perawat').html('<div class="alert alert-danger">' + msg +'</div>');
      }
    }
  });
  return false;
});
