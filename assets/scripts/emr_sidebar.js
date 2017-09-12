var btnAsesmenSidebarEMR = document.getElementById('btnAsesmenSidebarEMR');
var btnRajalSidebarEMR = document.getElementById('btnRajalSidebarEMR');
var btnLabrSidebarEMR = document.getElementById('btnLabrSidebarEMR');
var statsSidebarEMR = document.getElementById('statsSidebarEMR');

$('#btnAsesmenSidebarEMR').click(function() {
  btnAsesmenSidebarEMR.innerHTML = "<b>Histori </br> Asesmen Awal</b>";
  btnAsesmenSidebarEMR.classList.remove('blue');
  btnAsesmenSidebarEMR.classList.add('white');
  btnAsesmenSidebarEMR.classList.add('disabled');
  if(statsSidebarEMR.value == "rajal")
  {
    btnRajalSidebarEMR.innerHTML = "<b>Lihat Histori </br> Asesmen Ulang</b>";
    btnRajalSidebarEMR.classList.add('blue');
    btnRajalSidebarEMR.classList.remove('white');
    btnRajalSidebarEMR.classList.remove('disabled');
    $('#AsesmenSidebarEMR').toggleClass('collapse');
    $('#RajalSidebarEMR').toggleClass('collapse');
  }
  else
  {
    btnLabrSidebarEMR.innerHTML = "<b>Lihat Histori </br> Lab Dan Radiologi</b>";
    btnLabrSidebarEMR.classList.add('blue');
    btnLabrSidebarEMR.classList.remove('white');
    btnLabrSidebarEMR.classList.remove('disabled');
    $('#AsesmenSidebarEMR').toggleClass('collapse');
    $('#LabRadSidebarEMR').toggleClass('collapse');
  }
  statsSidebarEMR.value = "asesmen";
});

$('#btnRajalSidebarEMR').click(function() {
  btnRajalSidebarEMR.innerHTML = "<b>Histori </br> Asesmen Ulang</b>";
  btnRajalSidebarEMR.classList.remove('blue');
  btnRajalSidebarEMR.classList.add('white');
  btnRajalSidebarEMR.classList.add('disabled');
  if(statsSidebarEMR.value == "asesmen")
  {
    btnAsesmenSidebarEMR.innerHTML = "<b>Lihat Histori </br> Asesmen Awal</b>";
    btnAsesmenSidebarEMR.classList.add('blue');
    btnAsesmenSidebarEMR.classList.remove('white');
    btnAsesmenSidebarEMR.classList.remove('disabled');
    $('#RajalSidebarEMR').toggleClass('collapse');
    $('#AsesmenSidebarEMR').toggleClass('collapse');
  }
  else
  {
    btnLabrSidebarEMR.innerHTML = "<b>Lihat Histori </br> Lab Dan Radiologi</b>";
    btnLabrSidebarEMR.classList.add('blue');
    btnLabrSidebarEMR.classList.remove('white');
    btnLabrSidebarEMR.classList.remove('disabled');
    $('#RajalSidebarEMR').toggleClass('collapse');
    $('#LabRadSidebarEMR').toggleClass('collapse');
  }
  statsSidebarEMR.value = "rajal";
});

$('#btnLabrSidebarEMR').click(function() {
  btnLabrSidebarEMR.innerHTML = "<b>Histori </br> Lab Dan Radiologi</b>";
  btnLabrSidebarEMR.classList.remove('blue');
  btnLabrSidebarEMR.classList.add('white');
  btnLabrSidebarEMR.classList.add('disabled');
  if(statsSidebarEMR.value == "rajal")
  {
    btnRajalSidebarEMR.innerHTML = "<b>Lihat Histori </br> Asesmen Ulang</b>";
    btnRajalSidebarEMR.classList.add('blue');
    btnRajalSidebarEMR.classList.remove('white');
    btnRajalSidebarEMR.classList.remove('disabled');
    $('#LabRadSidebarEMR').toggleClass('collapse');
    $('#RajalSidebarEMR').toggleClass('collapse');
  }
  else
  {
    btnAsesmenSidebarEMR.innerHTML = "<b>Lihat Histori </br>  Asesmen Awal</b>";
    btnAsesmenSidebarEMR.classList.add('blue');
    btnAsesmenSidebarEMR.classList.remove('white');
    btnAsesmenSidebarEMR.classList.remove('disabled');
    $('#LabRadSidebarEMR').toggleClass('collapse');
    $('#AsesmenSidebarEMR').toggleClass('collapse');
  }
  statsSidebarEMR.value = "labr";
});

$(document).ready(function(){
  $(document).on('click', '#detilAsesmenEMR', function(){
    $('#SEMRtanggal').html($(this).attr('SEMR-tanggal'));
    $('#SEMRjam').html($(this).attr('SEMR-jam'));
    $('#SEMRhambatankomunikasi').html($(this).attr('SEMR-hambatankomunikasi'));
    $('#SEMRsistolik').html($(this).attr('SEMR-sistolik'));
    $('#SEMRdiastolik').html($(this).attr('SEMR-diastolik'));
    $('#SEMRnadi1').html($(this).attr('SEMR-nadi1'));
    $('#SEMRnadi2').html($(this).attr('SEMR-nadi2'));
    $('#SEMRsuhutubuh').html($(this).attr('SEMR-suhutubuh'));
    $('#SEMRrespiratory1').html($(this).attr('SEMR-respiratory1'));
    $('#SEMRrespiratory2').html($(this).attr('SEMR-respiratory2'));
    $('#SEMRberatbadan').html($(this).attr('SEMR-beratbadan'));
    $('#SEMRtinggibadan').html($(this).attr('SEMR-tinggibadan'));
    $('#SEMRbmi').html($(this).attr('SEMR-bmi'));
    $('#SEMRkategoribmi').html($(this).attr('SEMR-kategoribmi'));
    $('#SEMRlingkarkepala').html($(this).attr('SEMR-lingkarkepala'));
    $('#SEMRResikoJatuh').html($(this).attr('SEMR-ResikoJatuh'));
    $('#SEMRketResikoJatuh').html($(this).attr('SEMR-ketResikoJatuh'));
    $('#SEMRhasilResikoJatuh').html($(this).attr('SEMR-hasilResikoJatuh'));
    $('#SEMRtindakResikoJatuh').html($(this).attr('SEMR-tindakResikoJatuh'));
    $('#SEMRkeluhanNyeri').html($(this).attr('SEMR-keluhanNyeri'));
    $('#SEMRketKeluhanNyeri').html($(this).attr('SEMR-ketKeluhanNyeri'));
    $('#SEMRskorKeluhanNyeri').html($(this).attr('SEMR-skorKeluhanNyeri'));
    $('#SEMRskalaKeluhanNyeri').html($(this).attr('SEMR-skalaKeluhanNyeri'));
    $('#SEMRcatatan').html($(this).attr('SEMR-catatan'));
    $('#SEMRisiPerawat').html($(this).attr('SEMR-isiPerawat'));
  });

  $(document).on('click', '#detilAsesmenRadioEMR', function(){
    var RadioEMRnoreg = $(this).attr('RadioEMR-noreg') +'-'+ $(this).attr('RadioEMR-koderadio') +'.jpg';
    $('#EMR_SIDEBAR_GambarRadio').attr("src",base_url + 'hasilradio/'+RadioEMRnoreg);
    $('#RadioEMRnamaradio').html(RadioEMRnamaradio);
    $('#RadioEMRnoreg').html(RadioEMRnoreg);
    $('#RadioEMRtanggal').html($(this).attr('RadioEMR-tanggal'));
    $('#RadioEMRjam').html($(this).attr('RadioEMR-jam'));
  });
});
