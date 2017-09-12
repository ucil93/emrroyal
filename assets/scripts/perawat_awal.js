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
                //$('#alert-msg-versimpan').html('<div class="alert alert-danger">Password dibutuhkan!! Untuk proses verifikasi penanggung jawab</div>');
                $('#alert-msg-versimpan').html('<div class="alert alert-danger">' + msg + '</div>');
              }
          }
      });
      return false;
    }
  });
