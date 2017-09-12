var EMR_ASESMEN_btnObatSatuan = document.getElementById('EMR_ASESMEN_btnObatSatuan');
var EMR_ASESMEN_btnObatRacik = document.getElementById('EMR_ASESMEN_btnObatRacik');
var EMR_ASESMEN_statObat = document.getElementById('EMR_ASESMEN_statObat');
var EMR_ASESMEN_formObatSatuan = document.getElementById('EMR_ASESMEN_formObatSatuan');
var EMR_ASESMEN_formObatRacik = document.getElementById('EMR_ASESMEN_formObatRacik');
var EMR_ASESMEN_btnRiwayatDahulu = document.getElementById('EMR_ASESMEN_btnRiwayatDahulu');
var EMR_ASESMEN_btnRiwayatKeluarga = document.getElementById('EMR_ASESMEN_btnRiwayatKeluarga');
var EMR_ASESMEN_statRiwayat = document.getElementById('EMR_ASESMEN_statRiwayat');
var EMR_ASESMEN_formRiwayatDahulu = document.getElementById('EMR_ASESMEN_formRiwayatDahulu');
var EMR_ASESMEN_formRiwayatKeluarga = document.getElementById('EMR_ASESMEN_formRiwayatKeluarga');
var EMR_ASESMEN_DOKTER_FrmMouseoverTubuh = document.getElementById('EMR_ASESMEN_DOKTER_FrmMouseoverTubuh');
var EMR_ASESMEN_DOKTER_FrmMouseoverKepala = document.getElementById('EMR_ASESMEN_DOKTER_FrmMouseoverKepala');
var EMR_ASESMEN_DOKTER_FrmMouseoverBadan = document.getElementById('EMR_ASESMEN_DOKTER_FrmMouseoverBadan');
var EMR_ASESMEN_DOKTER_FrmMouseoverTangan = document.getElementById('EMR_ASESMEN_DOKTER_FrmMouseoverTangan');
var EMR_ASESMEN_DOKTER_FrmMouseoverKaki = document.getElementById('EMR_ASESMEN_DOKTER_FrmMouseoverKaki');
var EMR_ASESMEN_DOKTER_btnGeserKanan = document.getElementById('EMR_ASESMEN_DOKTER_btnGeserKanan');
var EMR_ASESMEN_DOKTER_btnGeserKiri = document.getElementById('EMR_ASESMEN_DOKTER_btnGeserKiri');
var EMR_ASESMEN_DOKTER_btnSimpanModalLokalis = document.getElementById('EMR_ASESMEN_DOKTER_btnSimpanModalLokalis');
var EMR_ASESMEN_DOKTER_btnBatalModalLokalis = document.getElementById('EMR_ASESMEN_DOKTER_btnBatalModalLokalis');
//var EMR_ASESMEN_DOKTER_ShowLokalisHeader = document.getElementById('EMR_ASESMEN_DOKTER_ShowLokalisHeader');
//var EMR_ASESMEN_DOKTER_ShowLokalisGambar = document.getElementById('EMR_ASESMEN_DOKTER_ShowLokalisGambar');
//var EMR_ASESMEN_DOKTER_ShowLokalisKeluhan = document.getElementById('EMR_ASESMEN_DOKTER_ShowLokalisKeluhan');
var EMR_ASESMEN_DOKTER_btnLokalis = document.getElementById('EMR_ASESMEN_DOKTER_btnLokalis');
var EMR_ASESMEN_DOKTER_GstsFrmLokalis2 = document.getElementById('EMR_ASESMEN_DOKTER_GstsFrmLokalis2');
var EMR_ASESMEN_DOKTER_statLokalis = document.getElementById('EMR_ASESMEN_DOKTER_statLokalis');

//BUTTON OBAT CHANGE
EMR_ASESMEN_btnObatSatuan.onclick = function()
{
  EMR_ASESMEN_statObat.value = "Satuan";
  $('#EMR_ASESMEN_formObatRacik').toggleClass('collapse');
  $('#EMR_ASESMEN_formObatSatuan').toggleClass('collapse');

  EMR_ASESMEN_btnObatSatuan.innerHTML = "<b>Obat </br> Satuan</b>";
  EMR_ASESMEN_btnObatSatuan.classList.remove('blue');
  EMR_ASESMEN_btnObatSatuan.classList.add('white');
  EMR_ASESMEN_btnObatSatuan.classList.add('disabled');

  EMR_ASESMEN_btnObatRacik.innerHTML = "<b>Obat </br> Racik</b>";
  EMR_ASESMEN_btnObatRacik.classList.add('blue');
  EMR_ASESMEN_btnObatRacik.classList.remove('white');
  EMR_ASESMEN_btnObatRacik.classList.remove('disabled');
};
EMR_ASESMEN_btnObatRacik.onclick = function()
{
  EMR_ASESMEN_statObat.value = "Racik";
  $('#EMR_ASESMEN_formObatRacik').toggleClass('collapse');
  $('#EMR_ASESMEN_formObatSatuan').toggleClass('collapse');

  EMR_ASESMEN_btnObatSatuan.innerHTML = "<b>Obat </br> Satuan</b>";
  EMR_ASESMEN_btnObatSatuan.classList.add('blue');
  EMR_ASESMEN_btnObatSatuan.classList.remove('white');
  EMR_ASESMEN_btnObatSatuan.classList.remove('disabled');

  EMR_ASESMEN_btnObatRacik.innerHTML = "<b>Obat </br> Racik</b>";
  EMR_ASESMEN_btnObatRacik.classList.remove('blue');
  EMR_ASESMEN_btnObatRacik.classList.add('white');
  EMR_ASESMEN_btnObatRacik.classList.add('disabled');
};

//BUTTON RIWAYAT CHANGE
EMR_ASESMEN_btnRiwayatDahulu.onclick = function()
{
  EMR_ASESMEN_statRiwayat.value = "Dahulu";
  $('#EMR_ASESMEN_formRiwayatKeluarga').toggleClass('collapse');
  $('#EMR_ASESMEN_formRiwayatDahulu').toggleClass('collapse');

  EMR_ASESMEN_btnRiwayatDahulu.innerHTML = "<b>Riwayat Penyakit </br> Dahulu</b>";
  EMR_ASESMEN_btnRiwayatDahulu.classList.remove('blue');
  EMR_ASESMEN_btnRiwayatDahulu.classList.add('white');
  EMR_ASESMEN_btnRiwayatDahulu.classList.add('disabled');

  EMR_ASESMEN_btnRiwayatKeluarga.innerHTML = "<b>Riwayat Penyakit </br> Keluarga</b>";
  EMR_ASESMEN_btnRiwayatKeluarga.classList.add('blue');
  EMR_ASESMEN_btnRiwayatKeluarga.classList.remove('white');
  EMR_ASESMEN_btnRiwayatKeluarga.classList.remove('disabled');
};
EMR_ASESMEN_btnRiwayatKeluarga.onclick = function()
{
  EMR_ASESMEN_statRiwayat.value = "Keluarga";
  $('#EMR_ASESMEN_formRiwayatKeluarga').toggleClass('collapse');
  $('#EMR_ASESMEN_formRiwayatDahulu').toggleClass('collapse');

  EMR_ASESMEN_btnRiwayatDahulu.innerHTML = "<b>Riwayat Penyakit </br> Dahulu</b>";
  EMR_ASESMEN_btnRiwayatDahulu.classList.add('blue');
  EMR_ASESMEN_btnRiwayatDahulu.classList.remove('white');
  EMR_ASESMEN_btnRiwayatDahulu.classList.remove('disabled');

  EMR_ASESMEN_btnRiwayatKeluarga.innerHTML = "<b>Riwayat Penyakit </br> Keluarga</b>";
  EMR_ASESMEN_btnRiwayatKeluarga.classList.remove('blue');
  EMR_ASESMEN_btnRiwayatKeluarga.classList.add('white');
  EMR_ASESMEN_btnRiwayatKeluarga.classList.add('disabled');
};

function EMR_ASESMEN_DOKTER_btnKepalaMOver()
{
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverTubuh').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverKepala').toggleClass('collapse');
}
function EMR_ASESMEN_DOKTER_btnKepalaMOut() {
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverKepala').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverTubuh').toggleClass('collapse');
}

function EMR_ASESMEN_DOKTER_btnBadanMOver()
{
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverTubuh').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverBadan').toggleClass('collapse');
}
function EMR_ASESMEN_DOKTER_btnBadanMOut() {
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverBadan').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverTubuh').toggleClass('collapse');
}

function EMR_ASESMEN_DOKTER_btnTanganMOver()
{
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverTubuh').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverTangan').toggleClass('collapse');
}
function EMR_ASESMEN_DOKTER_btnTanganMOut() {
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverTangan').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverTubuh').toggleClass('collapse');
}

function EMR_ASESMEN_DOKTER_btnKakiMOver()
{
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverTubuh').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverKaki').toggleClass('collapse');
}
function EMR_ASESMEN_DOKTER_btnKakiMOut() {
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverKaki').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmMouseoverTubuh').toggleClass('collapse');
}

EMR_ASESMEN_DOKTER_BtnKembaliFrmLokalis2.onclick = function()
{
  $('#EMR_ASESMEN_DOKTER_FrmLokalis2').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmLokalis1').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_BtnKembaliFrmLokalis2').toggleClass('collapse');
  EMR_ASESMEN_DOKTER_statLokalis.value = "Utuh";
}

EMR_ASESMEN_DOKTER_btnKepala.onclick = function()
{
  $('#EMR_ASESMEN_DOKTER_BtnKembaliFrmLokalis2').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmLokalis1').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmLokalis2').toggleClass('collapse');
  EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Kepala Depan";
  EMR_ASESMEN_DOKTER_statLokalis.value = "Kepala";
  $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Kepala Depan.png");
}

EMR_ASESMEN_DOKTER_btnBadan.onclick = function()
{
  $('#EMR_ASESMEN_DOKTER_BtnKembaliFrmLokalis2').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmLokalis1').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmLokalis2').toggleClass('collapse');
  EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Badan Depan";
  EMR_ASESMEN_DOKTER_statLokalis.value = "Badan";
  $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Badan Depan.png");
}

EMR_ASESMEN_DOKTER_btnGeserKiri.onclick = function()
{
  if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Kepala Depan")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Kepala Kanan.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Kepala Kanan";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Kepala Kanan")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Kepala Belakang.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Kepala Belakang";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Kepala Belakang")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Kepala Kiri.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Kepala Kiri";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Kepala Kiri")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Kepala Depan.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Kepala Depan";
  }

  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Badan Depan")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Badan Kanan.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Badan Kanan";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Badan Kanan")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Badan Belakang.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Badan Belakang";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Badan Belakang")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Badan Kiri.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Badan Kiri";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Badan Kiri")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Badan Depan.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Badan Depan";
  }
}
EMR_ASESMEN_DOKTER_btnGeserKanan.onclick = function()
{
  if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Kepala Depan")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Kepala Kiri.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Kepala Kiri";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Kepala Kiri")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Kepala Belakang.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Kepala Belakang";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Kepala Belakang")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Kepala Kanan.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Kepala Kanan";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Kepala Kanan")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Kepala Depan.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Kepala Depan";
  }

  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Badan Depan")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Badan Kiri.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Badan Kiri";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Badan Kiri")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Badan Belakang.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Badan Belakang";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Badan Belakang")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Badan Kanan.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Badan Kanan";
  }
  else if(EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML == "Badan Kanan")
  {
    $("#EMR_ASESMEN_DOKTER_GFrmLokalis2").attr("src",base_url + "assets/pages/img/tubuh/Badan Depan.png");
    EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML = "Badan Depan";
  }
}

EMR_ASESMEN_DOKTER_btnBatalModalLokalis.onclick = function()
{
  if(EMR_ASESMEN_DOKTER_statLokalis.value != "Utuh")
  {
    $('#EMR_ASESMEN_DOKTER_FrmLokalis2').toggleClass('collapse');
    $('#EMR_ASESMEN_DOKTER_FrmLokalis1').toggleClass('collapse');
    $('#EMR_ASESMEN_DOKTER_BtnKembaliFrmLokalis2').toggleClass('collapse');
    $('#AsesmenModalStatusLokalis').modal('hide');
    EMR_ASESMEN_DOKTER_KeluhanLokalis.value = "";
    EMR_ASESMEN_DOKTER_LokasiLokalis.value = "";
  }
  EMR_ASESMEN_DOKTER_KeluhanLokalis.value = "";
  EMR_ASESMEN_DOKTER_LokasiLokalis.value = "";
  $('#AsesmenModalStatusLokalis').modal('hide');
  /*if(EMR_ASESMEN_DOKTER_KeluhanLokalis.value != "")
  {
    $('#EMR_ASESMEN_DOKTER_ShowLokalis').toggleClass('collapse');
    EMR_ASESMEN_DOKTER_btnLokalis.innerHTML = "<center><font size=6.5><b>Status Lokalis</b></font></center>";
  }*/
}

EMR_ASESMEN_DOKTER_btnBatalModalLokalis2.onclick = function()
{
  $('#EMR_ASESMEN_DOKTER_BtnKembaliFrmLokalis2').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmLokalis2').toggleClass('collapse');
  $('#EMR_ASESMEN_DOKTER_FrmLokalis1').toggleClass('collapse');
  $('#AsesmenModalStatusLokalis').modal('hide');
  EMR_ASESMEN_DOKTER_btnLokalis.innerHTML = "<center><font size=6.5><b>Status Lokalis</b></font></center>";
}

EMR_ASESMEN_DOKTER_btnSimpanModalLokalis.onclick = function()
{
  if(EMR_ASESMEN_DOKTER_KeluhanLokalis.value != "")
  {
    /*
    $('#EMR_ASESMEN_DOKTER_ShowLokalis').toggleClass('collapse');
    EMR_ASESMEN_DOKTER_ShowLokalisHeader.innerHTML = EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML;
    EMR_ASESMEN_DOKTER_ShowLokalisKeluhan.innerHTML = EMR_ASESMEN_DOKTER_KeluhanLokalis.value;
    EMR_ASESMEN_DOKTER_btnLokalis.innerHTML = "<center><font size=6.5><b>Ubah Lokalis</b></font></center>";
    $("#EMR_ASESMEN_DOKTER_ShowLokalisGambar").attr("src",base_url + "assets/pages/img/tubuh/"+ EMR_ASESMEN_DOKTER_ShowLokalisHeader.innerHTML +".png");
    */
    $('#AsesmenModalStatusLokalis').modal('hide');
  }
  else
  {
    $('#modalKosongLokalis').modal('show');
  }
}

$(document).ready(function() {

  var apKplDepan = $('#EMR_ASESMEN_DOKTER_AppendKeluhanKepalaDepan');
  var apKplBelakang = $('#EMR_ASESMEN_DOKTER_AppendKeluhanKepalaBelakang');
  var apKplKanan = $('#EMR_ASESMEN_DOKTER_AppendKeluhanKepalaKanan');
  var apKplKiri = $('#EMR_ASESMEN_DOKTER_AppendKeluhanKepalaKiri');
  var apBdnDepan = $('#EMR_ASESMEN_DOKTER_AppendKeluhanBadanDepan');
  var apBdnBelakang = $('#EMR_ASESMEN_DOKTER_AppendKeluhanBadanBelakang');
  var apBdnKanan = $('#EMR_ASESMEN_DOKTER_AppendKeluhanBadanKanan');
  var apBdnKiri = $('#EMR_ASESMEN_DOKTER_AppendKeluhanBadanKiri');
  var apTgnDepan = $('#EMR_ASESMEN_DOKTER_AppendKeluhanTanganDepan');
  var apTgnBelakang = $('#EMR_ASESMEN_DOKTER_AppendKeluhanTanganBelakang');
  var apTgnKanan = $('#EMR_ASESMEN_DOKTER_AppendKeluhanTanganKanan');
  var apTgnKiri = $('#EMR_ASESMEN_DOKTER_AppendKeluhanTanganKiri');
  var apKkiBelakang = $('#EMR_ASESMEN_DOKTER_AppendKeluhanKakiBelakang');
  var apKkiKanan = $('#EMR_ASESMEN_DOKTER_AppendKeluhanKakiKanan');
  var apKkiKiri = $('#EMR_ASESMEN_DOKTER_AppendKeluhanKakiKiri');

  var nomer = 1;
  var kplDpn = 0;
  var kplBlk = 0;
  var kplKnn = 0;
  var kplKri = 0;
  var bdnDpn = 0;
  var bdnBlk = 0;
  var bdnKnn = 0;
  var bdnKri = 0;
  var tgnDpn = 0;
  var tgnBlk = 0;
  var tgnKnn = 0;
  var tgnKri = 0;
  var kkiDpn = 0;
  var kkiBlk = 0;
  var kkiKnn = 0;
  var kkiKri = 0;

  $('#insertKeluhan').click(function() {
    var lokasi1 = EMR_ASESMEN_DOKTER_GstsFrmLokalis2.innerHTML;
    var lokasi2 = EMR_ASESMEN_DOKTER_LokasiLokalis.value;
    var keluhan = EMR_ASESMEN_DOKTER_KeluhanLokalis.value;

    //if(nomer == 1)
    if(EMR_ASESMEN_DOKTER_LokasiLokalis.value == "" || EMR_ASESMEN_DOKTER_KeluhanLokalis.value == "")
    {
      $('#modalKosongKeluhandanLokalis').modal('show');
    }
    else
    {
      EMR_ASESMEN_DOKTER_LokasiLokalis.value = "";
      EMR_ASESMEN_DOKTER_KeluhanLokalis.value = "";

      if(lokasi1 == "Kepala Depan")
      {
        if(kplDpn == 0)
        {
          kplDpn++;
          var cloneHead = $('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaDepan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaDepan').append(
            '<button disable type="button" class="btn btn-default removeKplDpn" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaDepan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplDpn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
            '</div>');
          apKplDepan.before(cloneHead);
          apKplDepan.before(cloneBody);
        }
        else
        {
          kplDpn++;
          var clone = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaDepan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplDpn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apKplDepan.before(clone);
        }
      }
      else if(lokasi1 == "Kepala Kanan")
      {
        if(kplKnn == 0)
        {
          kplKnn++;
          var cloneHead2 = $('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaKanan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaKanan').append(
            '<button disable type="button" class="btn btn-default removeKplKnn" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody2 = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKanan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKanan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplKnn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
            '</div>');
          apKplKanan.before(cloneHead2);
          apKplKanan.before(cloneBody2);
        }
        else
        {
          kplKnn++;
          var clone2 = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKanan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKanan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplKnn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apKplKanan.before(clone2);
        }
      }
      else if(lokasi1 == "Kepala Kiri")
      {
        if(kplKri == 0)
        {
          kplKri++;
          var cloneHead = $('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaKiri').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaKiri').append(
            '<button disable type="button" class="btn btn-default removeKplKri" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKiri').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKiri').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplKri" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
            '</div>');
          apKplKiri.before(cloneHead);
          apKplKiri.before(cloneBody);
        }
        else
        {
          kplKri++;
          var clone = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKiri').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKiri').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplKri" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apKplKiri.before(clone);
        }
      }
      else if(lokasi1 == "Kepala Belakang")
      {
        if(kplBlk == 0)
        {
          kplBlk++;
          var cloneHead = $('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaBelakang').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaBelakang').append(
            '<button disable type="button" class="btn btn-default removeKplBlk" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaBelakang').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
            '</div>');
          apKplBelakang.before(cloneHead);
          apKplBelakang.before(cloneBody);
        }
        else
        {
          kplBlk++;
          var clone = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaBelakang').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apKplBelakang.before(clone);
        }
      }
      if(lokasi1 == "Badan Depan")
      {
        if(bdnDpn == 0)
        {
          bdnDpn++;
          var cloneHead = $('#EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanDepan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanDepan').append(
            '<button disable type="button" class="btn btn-default removeBdnDpn" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanDepan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeBdnDpn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
            '</div>');
          apBdnDepan.before(cloneHead);
          apBdnDepan.before(cloneBody);
        }
        else
        {
          bdnDpn++;
          var clone = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanDepan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeBdnDpn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apBdnDepan.before(clone);
        }
      }
      else if(lokasi1 == "Badan Kanan")
      {
        if(bdnKnn == 0)
        {
          bdnKnn++;
          var cloneHead2 = $('#EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanKanan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanKanan').append(
            '<button disable type="button" class="btn btn-default removeBdnKnn" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody2 = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanKanan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanKanan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeBdnKnn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
            '</div>');
          apBdnKanan.before(cloneHead2);
          apBdnKanan.before(cloneBody2);
        }
        else
        {
          bdnKnn++;
          var clone2 = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanKanan').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanKanan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeBdnKnn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apBdnKanan.before(clone2);
        }
      }
      else if(lokasi1 == "Badan Kiri")
      {
        if(bdnKri == 0)
        {
          bdnKri++;
          var cloneHead = $('#EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanKiri').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanKiri').append(
            '<button disable type="button" class="btn btn-default removeBdnKri" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanKiri').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanKiri').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeBdnKri" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
            '</div>');
          apBdnKiri.before(cloneHead);
          apBdnKiri.before(cloneBody);
        }
        else
        {
          bdnKri++;
          var clone = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanKiri').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanKiri').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeBdnKri" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apBdnKiri.before(clone);
        }
      }
      else if(lokasi1 == "Badan Belakang")
      {
        if(bdnBlk == 0)
        {
          bdnBlk++;
          var cloneHead = $('#EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanBelakang').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanBelakang').append(
            '<button disable type="button" class="btn btn-default removeBdnBlk" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanBelakang').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeBdnBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
            '</div>');
          apBdnBelakang.before(cloneHead);
          apBdnBelakang.before(cloneBody);
        }
        else
        {
          bdnBlk++;
          var clone = $('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanBelakang').clone().find("input:text").val("").end().appendTo('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Keluhan : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeBdnBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_ASESMEN_DOKTER_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apBdnBelakang.before(clone);
        }
      }
    }

    nomer++;
  });


  $( "body" ).on('click', '.removeKplDpn', function(){
      if(kplDpn <= 1)
      {
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaDepan').remove();
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaDepan').remove();
        kplDpn--;
      }
      else
      {
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaDepan').remove();
        kplDpn--;
      }
  });
  $( "body" ).on('click', '.removeKplKnn', function(){
      if(kplKnn <= 1)
      {
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaKanan').remove();
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKanan').remove();
        kplKnn--;
      }
      else
      {
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKanan').remove();
        kplKnn--;
      }
  });
  $( "body" ).on('click', '.removeKplKri', function(){
      if(kplKri <= 1)
      {
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaKiri').remove();
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKiri').remove();
        kplKri--;
      }
      else
      {
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKiri').remove();
        kplKri--;
      }
  });
  $( "body" ).on('click', '.removeKplBlk', function(){
      if(kplBlk <= 1)
      {
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaBelakang').remove();
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaBelakang').remove();
        kplBlk--;
      }
      else
      {
        $(this).closest('#EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaBelakang').remove();
        kplBlk--;
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

    $( "#diagnosis_ases_dok" ).bind( "keydown", function( event ) {
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

var radiologi_lain_ases_dok = document.getElementById('radiologi_lain_ases_dok');
var laboratorium_lain_ases_dok = document.getElementById('laboratorium_lain_ases_dok');

$('#reset_radio_ases_dok').on('click', function () {
  if(radiologi_lain_ases_dok.checked == true)
  {
      $('#radiologi_lain_ases_dok_1').toggleClass('collapse');
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

$('#reset_laboratorium_ases_dok').on('click', function () {
  if(laboratorium_lain_ases_dok.checked == true)
  {
      $('#laboratorium_lain_ases_dok_1').toggleClass('collapse');
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

radiologi_lain_ases_dok.onchange = function()
{
    $('#radiologi_lain_ases_dok_1').toggleClass('collapse');
    $('#radiologi_lain_ases_dok_2').val('');
};

laboratorium_lain_ases_dok.onchange = function()
{
    $('#laboratorium_lain_ases_dok_1').toggleClass('collapse');
    $('#laboratorium_lain_ases_dok_2').val('');
};

var rklinik_ases_dok = document.getElementById('rklinik_ases_dok');
var rlain_ases_dok = document.getElementById('rlain_ases_dok');

rklinik_ases_dok.onchange = function()
{
    $('#rklinik_ases_dok_1').toggleClass('collapse');
    $('#rklinik_ases_dok_2').val('');
};

rlain_ases_dok.onchange = function()
{
    $('#rlain_ases_dok_1').toggleClass('collapse');
    $('#rlain_ases_dok_2').val('');
};

$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#alergiobat_ases_dok" ).bind( "keydown", function( event ) {
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

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = $('#div_buttonSatuan_ases_dok');

    var nomerSatuan_ases_dok = 2;

    $('#tambahSatuan_ases_dok').click(function() {
        var clone = $('#div1Satuan_ases_dok').clone().find("input:text").val("").end().appendTo('#div1Satuan_ases_dok').append(
          '<div class="col-md-4">'+
            '<div class="portlet light bordered">'+
              '<div class="portlet-title row">'+
                '<div class="caption font-red-sunglo col-md-8 col-sm-8 col-xs-8">'+
                  '<i class="fa fa-gift font-red-sunglo"></i>'+
                  '<span class="caption-subject bold uppercase">Obat Ke - '+ nomerSatuan_ases_dok +' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>'+
                '</div>'+
                '<div class="col-md-3 col-sm-3 col-xs-3">'+
                  '<a class="btn btn-danger removeSatuan_ases_dok">'+
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
                          '<input type="text" name="obatsatuan_ases_dok[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>'+
                          '<input type="hidden" name="idobatsatuan_ases_dok[]" class="form-control project"/>'+
                      '</div>'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<div class="form-group">'+
                        '<label class="control-label" style="font-size:14px">Jumlah Obat</label>'+
                        '<input type="text" id="jumlahsatuan_ases_dok" name="jumlahsatuan_ases_dok[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                  '<div class="row mt-repeater-row">'+
                    '<div class="col-md-4">'+
                      '<label class="control-label" style="font-size:14px">Aturan Pakai</label>'+
                      '<input type="text" id="aturanPakai_ases_dok_1" name="aturanPakai_ases_dok_1[]" placeholder="Aturan Pakai" class="form-control"/>'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;</label>'+
                      '<input type="text" id="aturanPakai_ases_dok_2" name="aturanPakai_ases_dok_2[]" placeholder="Aturan Pakai" class="form-control"/>'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<label class="control-label" style="font-size:14px">Ket.</label>'+
                      '<input type="text" id="keterangan_ases_dok" name="keterangan_ases_dok[]" placeholder="Ket" class="form-control" />'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        // insert duplicate before button div
        before.before(clone);

        nomerSatuan_ases_dok++;
    });


    $( "body" ).on('click', '.removeSatuan_ases_dok', function(){
        nomerSatuan_ases_dok--;
        $(this).closest('#div1Satuan_ases_dok').remove();
    });
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = null;
    var value = null;

    //var nomer2 = 1;

     $(document).on('click', '.tambahRacikBahan_ases_dok-click', function () {
        value = $(this).data('todo').number;

        var before = $('#div_buttonracikBahan_ases_dok'+value);
        var clone = $('#divracikBahan_ases_dok'+value).clone(true).find("input:text").val("").end().appendTo('#divracikBahan_ases_dok'+value).append(
          '<div class="form-group">'+
                  '<div data-repeater-item class="mt-repeater-item">'+
                      '<div class="row mt-repeater-row">'+
                          '<div class="col-md-8">'+
                              '<input type="text" name="obatsatuanRacik_ases_dok[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>'+
                              '<input type="hidden" name="idobatsatuanRacik_ases_dok[]" value="" class="form-control project_racik"/>'+
                              '<input type="hidden" value="RACIK_000'+value+'" id="idRacik_ases_dok" name="idRacik_ases_dok[]" class="form-control" />'+
                          '</div>'+
                          '<div class="col-md-4">'+
                              '<div class="mt-repeater-cell">'+
                                  '<input type="text" placeholder="Jumlah" name="jumlahRacik_ases_dok[]" id="jumlahRacik_ases_dok" class="form-control mt-repeater-input-inline" onkeypress="return hanyaAngka(event)"/>'+
                                  '<a class="btn btn-danger removeRacikBahan_ases_dok mt-repeater-del-right mt-repeater-btn-inline">'+
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

    $( "body" ).on('click', '.removeRacikBahan_ases_dok', function(){
        $(this).closest('#divracikBahan_ases_dok'+value).remove();
    });
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = $('#div_buttonracikobat_ases_dok');

    var nomer2 = 2;
    var todo = '{"number":"'+nomer2+'"}';

    $('#tambahracikobat_ases_dok').click(function() {
        var clone = $('#divracikobat_ases_dok').clone(true).find("input:text").val("").end().appendTo('#divracikobat_ases_dok').append(
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
                            '<input type="text" name="obatsatuanRacik_ases_dok[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>'+
                            '<input type="hidden" name="idobatsatuanRacik_ases_dok[]" value="" class="form-control project_racik"/>'+
                            '<input type="hidden" value="RACIK_000'+nomer2+'" id="idRacik_ases_dok" name="idRacik_ases_dok[]" class="form-control" />'+
                          '</div>'+
                          '<div class="col-md-4">'+
                            '<label class="control-label" style="font-size:14px">Jumlah</label>'+
                            '<input type="text" id="jumlahRacik_ases_dok" name="jumlahRacik_ases_dok[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                      '<div id="divracikBahan_ases_dok'+nomer2+'"></div>'+
                      '<div id="div_buttonracikBahan_ases_dok'+nomer2+'">'+
                        '<a class="btn blue tambahRacikBahan_ases_dok-click col-md-12" name="tambahRacikBahan_ases_dok" value="Tambah Data"><i class="fa fa-plus"></i> Tambah Bahan</a>'+
                      '</div>'+
                    '</div>'+
                    '<div class="col-md-12">'+
                      '<label class="control-label" style="font-size:14px">Detail Obat</label>'+
                      '<div class="row">'+
                        '<div class="col-md-4">'+
                          '<input type="text" id="jumlahRacik_ases_dok_2" name="jumlahRacik_ases_dok_2[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                        '</div>'+
                        '<div class="col-md-8">'+
                          '<input type="text" id="aturanpakaiRacik_ases_dok" name="aturanpakaiRacik_ases_dok[]" placeholder="Aturan Pakai" class="form-control" />'+
                        '</div>'+
                      '</div>'+
                      '<br>'+
                      '<div class="row">'+
                        '<div class="col-md-4">'+
                          '<input type="text" id="aturanpakaiRacik_ases_dok_2" name="aturanpakaiRacik_ases_dok_2[]" placeholder="Aturan Pakai" class="form-control" />'+
                        '</div>'+
                        '<div class="col-md-8">'+
                          '<input type="text" id="keteranganRacik_ases_dok" name="keteranganRacik_ases_dok[]" placeholder="Keterangan" class="form-control"/>'+
                        '</div>'+
                      '</div>'+
                      '<div class="col-md-8">'+
                        '<input type="hidden" value="RACIK_000'+nomer2+'" id="idRacik_ases_dok_2" name="idRacik_ases_dok_2[]" class="form-control" />'+
                      '</div>'+
                    '</div>'+
                  '</div></br>'+
                    '<a class="btn btn-danger removeracikobat_ases_dok col-md-12">'+
                      '<i class="fa fa-close"> Hapus Obat Racikan</i>'+
                    '</a>'+
                    '</div>'+
              '</div>'+
            '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        before.before(clone);
        clone.find(".tambahRacikBahan_ases_dok-click").attr("data-todo", '{"number":"'+nomer2+'"}');
        nomer2++;
    });

    $( "body" ).on('click', '.removeracikobat_ases_dok', function(){
        nomer2--;
      $(this).closest('#divracikobat_ases_dok').remove();
    });
});

$('#btnsimpanasesmen_dok').click(function() {

    var radiologi_checkbox_ases_dok_simpan = []
    $("input[name='radiologi_checkbox_ases_dok[]']:checked").each(function ()
    {
        radiologi_checkbox_ases_dok_simpan.push($(this).val());
    });

    var radiologi_lain_ases_dok_simpan = null;
    $('input[name="radiologi_lain_ases_dok"]:checked').each(function() {
      radiologi_lain_ases_dok_simpan = $('#radiologi_lain_ases_dok').val();
    });

    var laboratorium_checkbox_ases_dok_simpan = []
    $("input[name='laboratorium_checkbox_ases_dok[]']:checked").each(function ()
    {
        laboratorium_checkbox_ases_dok_simpan.push($(this).val());
    });

    var laboratorium_lain_ases_dok_simpan = null;
    $('input[name="laboratorium_lain_ases_dok"]:checked').each(function() {
      laboratorium_lain_ases_dok_simpan = $('#laboratorium_lain_ases_dok').val()
    });

    var rahligizi_ases_dok_simpan = null;
    $('input[name="rahligizi_ases_dok"]:checked').each(function() {
      rahligizi_ases_dok_simpan = $('#rahligizi_ases_dok').val()
    });

    var rrehabilitasi_ases_dok_simpan = null;
    $('input[name="rrehabilitasi_ases_dok"]:checked').each(function() {
      rrehabilitasi_ases_dok_simpan = $('#rrehabilitasi_ases_dok').val()
    });

    var rklinik_ases_dok_simpan = null;
    $('input[name="rklinik_ases_dok"]:checked').each(function() {
      rklinik_ases_dok_simpan = $('#rklinik_ases_dok').val()
    });

    var rlain_ases_dok_simpan = null;
    $('input[name="rlain_ases_dok"]:checked').each(function() {
      rlain_ases_dok_simpan = $('#rlain_ases_dok').val()
    });

    var obatsatuan_ases_dok_simpan = [];
    $("input[name='obatsatuan_ases_dok[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            obatsatuan_ases_dok_simpan.push(value);
        }
        //obatsatuanRajal_simpan.push($(this).val());
    });

    var idobatsatuan_ases_dok_simpan = []
    $("input[name='idobatsatuan_ases_dok[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            idobatsatuan_ases_dok_simpan.push(value);
        }
        //idobatsatuan_rajal_simpan.push($(this).val());
    });

    var jumlahsatuan_ases_dok_simpan = []
    $("input[name='jumlahsatuan_ases_dok[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            jumlahsatuan_ases_dok_simpan.push(value);
        }
        //jumlahsatuan_rajal_simpan.push($(this).val());
    });

    var aturanPakai_ases_dok_1_simpan = []
    $("input[name='aturanPakai_ases_dok_1[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            aturanPakai_ases_dok_1_simpan.push(value);
        }
        //aturanPakai_rajal_1_simpan.push($(this).val());
    });

    var aturanPakai_ases_dok_2_simpan = []
    $("input[name='aturanPakai_ases_dok_2[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            aturanPakai_ases_dok_2_simpan.push(value);
        }
        //aturanPakai_rajal_2_simpan.push($(this).val());
    });

    var keterangan_ases_dok_simpan = []
    $("input[name='keterangan_ases_dok[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            keterangan_ases_dok_simpan.push(value);
        }
        //keterangan_rajal_simpan.push($(this).val());
    });

    var obatsatuanRacik_ases_dok_simpan = []
    $("input[name='obatsatuanRacik_ases_dok[]']").each(function ()
    {
      var value = $(this).val();
      if (value)
      {
          obatsatuanRacik_ases_dok_simpan.push(value);
      }
        //obatsatuanRacik_rajal_simpan.push($(this).val());
    });

    var idobatsatuanRacik_ases_dok_simpan = []
    $("input[name='idobatsatuanRacik_ases_dok[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            idobatsatuanRacik_ases_dok_simpan.push(value);
        }
        //idobatsatuanRacik_rajal_simpan.push($(this).val());
    });

    var idRacik_ases_dok_simpan = []
    $("input[name='idRacik_ases_dok[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            idRacik_ases_dok_simpan.push(value);
        }
        //idRacik_rajal_simpan.push($(this).val());
    });

    var jumlahRacik_ases_dok_simpan = []
    $("input[name='jumlahRacik_ases_dok[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            jumlahRacik_ases_dok_simpan.push(value);
        }
        //jumlahRacik_rajal_simpan.push($(this).val());
    });

    var jumlahRacik_ases_dok_2_simpan = []
    $("input[name='jumlahRacik_ases_dok_2[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            jumlahRacik_ases_dok_2_simpan.push(value);
        }
        //jumlahRacik_rajal_2_simpan.push($(this).val());
    });

    var aturanpakaiRacik_ases_dok_simpan = []
    $("input[name='aturanpakaiRacik_ases_dok[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            aturanpakaiRacik_ases_dok_simpan.push(value);
        }
        //aturanpakaiRacik_rajal_simpan.push($(this).val());
    });

    var aturanpakaiRacik_ases_dok_2_simpan = []
    $("input[name='aturanpakaiRacik_ases_dok_2[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            aturanpakaiRacik_ases_dok_2_simpan.push(value);
        }
        //aturanpakaiRacik_rajal_2_simpan.push($(this).val());
    });

    var keteranganRacik_ases_dok_simpan = []
    $("input[name='keteranganRacik_ases_dok[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            keteranganRacik_ases_dok_simpan.push(value);
        }
        //keteranganRacik_rajal_simpan.push($(this).val());
    });

    var idRacik_ases_dok_2_simpan = []
    $("input[name='idRacik_ases_dok_2[]']").each(function ()
    {
        var value = $(this).val();
        if (value)
        {
            idRacik_ases_dok_2_simpan.push(value);
        }
        //idRacik_rajal_2_simpan.push($(this).val());
    });

    var suratsakit_ases_dok_simpan = null;
    $('input[name="suratsakit_ases_dok"]:checked').each(function() {
      suratsakit_ases_dok_simpan = $('#suratsakit_ases_dok').val()
    });

    var form_data_ases_dok = {
      EmrIDAsesmenAsesDok:$('#id_asesmen_ases_dok').val(),
      EmrNoregAsesDok:$('#EMR_ases_dok_Noreg').val(),
      EmrNormAsesDok:$('#norm_ases_dok').val(),
      EmrKodeUnitAsesDok: $('#kodeunit_ases_dok').val(),
      EmrUserDokAsesDok: $('#tanggungjawab').val(),
      EmrPassDokAsesDok: $('#VerPassAsesmen_dok').val(),
      EmrAnamnesaAsesDok: $('#anamnesa_ases_dok').val(),
      EmrKeluhanAsesDok: $('#keluhanutama_ases_dok').val(),
      EmrRiwayatSekarangAsesDok:$('#riwayatsekarang_ases_dok').val(),
      EmrRiwayatKeluargaAsesDok:$('#riwayatkeluarga_ases_dok').val(),
      EmrPFKepalaAsesDok:$('#PFkepala_ases_dok').val(),
      EmrPFThoraxAsesDok:$('#PFthorax_ases_dok').val(),
      EmrPFAbdomenAsesDok:$('#PFabdomen_ases_dok').val(),
      EmrPFExtermitasAsesDok:$('#PFextermitas_ases_dok').val(),
      EmrPFGenetaliaAsesDok:$('#PFgenetalia_ases_dok').val(),
      EmrDiagnosisAsesDok:$('#diagnosis_ases_dok').val(),
      EmrRencanaAsesDok:$('#rencana_ases_dok').val(),
      radiologi_checkbox_ases_dok_simpan:radiologi_checkbox_ases_dok_simpan,
      radiologi_lain_ases_dok_simpan:radiologi_lain_ases_dok_simpan,
      radiologi_lain_ases_dok_2:$('#radiologi_lain_ases_dok_2').val(),
      laboratorium_checkbox_ases_dok_simpan:laboratorium_checkbox_ases_dok_simpan,
      laboratorium_lain_ases_dok_simpan:laboratorium_lain_ases_dok_simpan,
      laboratorium_lain_ases_dok_2:$('#laboratorium_lain_ases_dok_2').val(),
      rahligizi_ases_dok_simpan:rahligizi_ases_dok_simpan,
      rrehabilitasi_ases_dok_simpan:rrehabilitasi_ases_dok_simpan,
      rklinik_ases_dok_simpan:rklinik_ases_dok_simpan,
      rklinik_ases_dok_2:$('#rklinik_ases_dok_2').val(),
      rlain_ases_dok_simpan:rlain_ases_dok_simpan,
      rlain_ases_dok_2:$('#rlain_ases_dok_2').val(),
      alergiobat_ases_dok_simpan:$('#alergiobat_ases_dok').val(),
      obatsatuan_ases_dok_simpan:obatsatuan_ases_dok_simpan,
      idobatsatuan_ases_dok_simpan:idobatsatuan_ases_dok_simpan,
      jumlahsatuan_ases_dok_simpan:jumlahsatuan_ases_dok_simpan,
      aturanPakai_ases_dok_1_simpan:aturanPakai_ases_dok_1_simpan,
      aturanPakai_ases_dok_2_simpan:aturanPakai_ases_dok_2_simpan,
      keterangan_ases_dok_simpan:keterangan_ases_dok_simpan,
      obatsatuanRacik_ases_dok_simpan:obatsatuanRacik_ases_dok_simpan,
      idobatsatuanRacik_ases_dok_simpan:idobatsatuanRacik_ases_dok_simpan,
      idRacik_ases_dok_simpan:idRacik_ases_dok_simpan,
      jumlahRacik_ases_dok_simpan:jumlahRacik_ases_dok_simpan,
      jumlahRacik_ases_dok_2_simpan:jumlahRacik_ases_dok_2_simpan,
      aturanpakaiRacik_ases_dok_simpan:aturanpakaiRacik_ases_dok_simpan,
      aturanpakaiRacik_ases_dok_2_simpan:aturanpakaiRacik_ases_dok_2_simpan,
      keteranganRacik_ases_dok_simpan:keteranganRacik_ases_dok_simpan,
      idRacik_ases_dok_2_simpan:idRacik_ases_dok_2_simpan,
      suratsakit_ases_dok_simpan:suratsakit_ases_dok_simpan
    };

    $.ajax({
        url: base_url + "emr/simpan_semua_ases_dok",
        type: 'POST',
        data: form_data_ases_dok,
        success: function(msg) {
            if (msg == 'YES')
            {
              $("#verPass_ases_dok").modal('show');
              //$('#alert-msg-versimpan').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#verPass_ases_dok").fadeTo(5000, 5000).slideUp(1000, function(){
                   $("#verPass_ases_dok").modal('hide');
                   window.location.href = base_url + "dashboard";
              });
              //$('#alert-msg-DokterEMR').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
            }
            else if(msg == 'NO_PASS_DOKTER')
            {
              $('#alert-msg-AsesDoksimpan').html('<div class="alert alert-danger text-center">Password Dokter Harus Diisi Dahulu!</div>');
            }
            else if(msg == 'PASS_DOKTER_SALAH')
            {
              $('#alert-msg-AsesDoksimpan').html('<div class="alert alert-danger text-center">Password Dokter Salah!</div>');
            }
            else if(msg == 'NO_OBAT')
            {
              $('#alert-msg-AsesDoksimpan').html('<div class="alert alert-danger text-center">Data Obat Belum Ada!</div>');
            }
            else
            {
              $('#alert-msg-AsesDoksimpan').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
          }
    });
    return false;
});
