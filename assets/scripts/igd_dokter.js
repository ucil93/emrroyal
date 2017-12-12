$.widget('custom.mcautocomplete', $.ui.autocomplete, {
    _create: function () {
        this._super();
        this.widget().menu("option", "items", "> :not(.ui-widget-header)");
    },
    _renderMenu: function (ul, items) {
        var self = this,
            thead;
        if (this.options.showHeader) {
            table = $('<div class="ui-widget-header" style="width:100%"></div>');
            $.each(this.options.columns, function (index, item) {
                table.append('<span style="padding:0 4px;float:left;width:' + item.width + ';">' + item.name + '</span>');
            });
            table.append('<div style="clear: both;"></div>');
            ul.append(table);
        }
        $.each(items, function (index, item) {
            self._renderItem(ul, item);
        });
    },
    _renderItem: function (ul, item) {
        var t = '',
            result = '';
        $.each(this.options.columns, function (index, column) {
            t = '<span style="padding:0 0px;float:left;width:100%;">' + item.namabarang + '</span>'
            //t += '<span style="padding:0 4px;float:left;width:50%;">' + item.pabrik + '</span>'
        });
        result = $('<li></li>')
            .data('ui-autocomplete-item', item)
            .append('<a class="mcacAnchor">' + t + '<div style="clear: both;"></div></a>')
            .appendTo(ul);
        return result;
    }
});

function enable_autocomplete(InputField) {
    $(InputField).mcautocomplete({
    showHeader: true,
    minLength: 3,
    columns: [{
        name: 'Nama Obat',
        width: '120px'
    }],
    select: function( event, ui ) {
        console.log(this);
        this.value = (ui.item ? ui.item.value : '');
        $(this).closest('div').find('input.project').val(ui.item.label);
        console.log(ui.item.label);
        return false;
    },
    source: function( request, response ) {
        $.ajax({
            url: base_url + "index.php/igd/getAllObat",
            dataType: "json",
            data: {
                q: request.term
                },
            success: function( data ) {
                response(data);
                }
            });
        },
    });
}

function enable_autocomplete_diagnosis(InputField) {
    $(InputField).autocomplete({
      minLength: 2,
      select: function( event, ui ) {
          console.log(this);
          this.value = (ui.item ? ui.item.value : '');
          $(this).closest('div').find('input.id_diagnosis').val(ui.item.label_id);
          console.log(ui.item.label_id);
          $(this).closest('div').find('input.nama_diagnosis').val(ui.item.label_nama);
          console.log(ui.item.label_nama);
          return false;
      },
      source: function( request, response ) {
          $.ajax({
              url: base_url + "index.php/igd/getAllDeskripsi",
              dataType: "json",
              data: {
                  q : request.term
              },
              success: function( data ) {
                  response(data);
              }
          });
      }
    });
}

$('.EMR_IGD_KaitData').click(function() {
  var ktDT_noreg = $(this).closest('td').find('input.ktDT_noreg').val();
  var ktDT_norm = $(this).closest('td').find('input.ktDT_norm').val();

  var form_data = {
    IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
    IGD_noreg_awalkait : ktDT_noreg,
    IGD_norm_awalkait : ktDT_norm
  };
  $.ajax({
    url: base_url + "igd/btnsimpanKaitIGD",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if(msg == 'TERUJI')
      {
        window.location.href = base_url + "igd/pasien/" +ktDT_noreg;
      }
    }
  });
  return false;
})

/*
var $select1 = $( '#xEMR_dr_IGD_P5_Tindakan' ),
$select2 = $( '#xEMR_dr_IGD_P5_rute' ),
$options = $select2.find( 'option' );
$select1.on( 'change', function() {
	$select2.html( $options.filter( '[value = "' + this.value + '"]' ) );
} ).trigger( 'change' );

$("#xEMR_dr_IGD_P5_Tindakan").change(function() {
if($(this).data('options') == undefined){
    $(this).data('options',$('#xEMR_dr_IGD_P5_rute option').clone());
    }
var id = $(this).val();
var options = $(this).data('options').filter('[data=' + id + ']');
$('#xEMR_dr_IGD_P5_rute').html(options);
    alert(options);
}); */

var TriaseKu = 0;
var QTriase1 = 0;
var QTriase2 = 0;
var QTriase3 = 0;
var QTriase4 = 0;
var KurangTriase = '';

function tutup()
{
  document.getElementById('EMR_dr_IGD_btnTriase'+document.getElementById('EMR_dr_IGD_statTriase').value).classList.remove('white');
  document.getElementById('EMR_dr_IGD_btnTriase'+document.getElementById('EMR_dr_IGD_statTriase').value).classList.add('blue');
  document.getElementById('EMR_dr_IGD_TriaseQuestion'+document.getElementById('EMR_dr_IGD_statTriase').value).classList.add('collapse');
}

function buka()
{
  document.getElementById('EMR_dr_IGD_TriaseQuestion'+document.getElementById('EMR_dr_IGD_statTriase').value).classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_btnTriase'+document.getElementById('EMR_dr_IGD_statTriase').value).classList.remove('blue');
  document.getElementById('EMR_dr_IGD_btnTriase'+document.getElementById('EMR_dr_IGD_statTriase').value).classList.add('white');
}

function hapuswarna2()
{
  if(document.getElementById('EMR_dr_IGD_statTriase2').value == 'white')
  {
    document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.remove('white');
  }
  if(document.getElementById('EMR_dr_IGD_statTriase2').value == 'green')
  {
    document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.remove('green-jungle');
  }
  if(document.getElementById('EMR_dr_IGD_statTriase2').value == 'yellow')
  {
    document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.remove('yellow-crusta');
  }
  if(document.getElementById('EMR_dr_IGD_statTriase2').value == 'red')
  {
    document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.remove('red');
  }
  if(document.getElementById('EMR_dr_IGD_statTriase2').value == 'dark')
  {
    document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.remove('dark');
  }
}

$('#EMR_dr_IGD_btnTriaseHijau').click(function() {
  document.getElementById('EMR_dr_IGD_btnTriaseHijau').disable = 'true';
  hapuswarna2();
  $('#EMR_dr_IGD_statTriase2').val('green');
  document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.add('green-jungle');
  $('#EMR_dr_IGD_HasilTriase').html('Hijau');
});

$('#EMR_dr_IGD_btnTriaseKuning').click(function() {
  document.getElementById('EMR_dr_IGD_btnTriaseKuning').disable = 'true';
  hapuswarna2();
  $('#EMR_dr_IGD_statTriase2').val('yellow');
  document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.add('yellow-crusta');
  $('#EMR_dr_IGD_HasilTriase').html('Kuning');
});

$('#EMR_dr_IGD_btnTriaseMerah').click(function() {
  document.getElementById('EMR_dr_IGD_btnTriaseMerah').disable = 'true';
  hapuswarna2();
  $('#EMR_dr_IGD_statTriase2').val('red');
  document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.add('red');
  $('#EMR_dr_IGD_HasilTriase').html('Merah');
});

$('#EMR_dr_IGD_btnTriaseHitam').click(function() {
  document.getElementById('EMR_dr_IGD_btnTriaseHitam').disable = 'true';
  hapuswarna2();
  $('#EMR_dr_IGD_statTriase2').val('dark');
  document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.add('dark');
  $('#EMR_dr_IGD_HasilTriase').html('Hitam');
});

$('#EMR_dr_IGD_btnSimpanTriase').click(function() {
  simpantriase_dr();
});

function simpantriase_dr(){
  var form_data = {
    IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
    IGD_Circulation : $("input[name ='EMR_dr_IGD_Circulation']:checked").val(),
    IGD_Airway : $("input[name ='EMR_dr_IGD_Airway']:checked").val(),
    IGD_Breathing : $("input[name ='EMR_dr_IGD_Breathing']:checked").val(),
    IGD_Disability : $("input[name ='EMR_dr_IGD_Disability']:checked").val(),
    IGD_hasilTriase : $('#EMR_dr_IGD_HasilTriase').html()
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

/*function hapuswarna()
{
  if(document.getElementById('EMR_dr_IGD_statTriase2').value == 'white')
  {
    document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.remove('white');
  }
  if(document.getElementById('EMR_dr_IGD_statTriase2').value == 'green')
  {
    document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.remove('green-jungle');
  }
  if(document.getElementById('EMR_dr_IGD_statTriase2').value == 'yellow')
  {
    document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.remove('yellow-crusta');
  }
  if(document.getElementById('EMR_dr_IGD_statTriase2').value == 'red')
  {
    document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.remove('red');
  }
  if(document.getElementById('EMR_dr_IGD_statTriase2').value == 'dark')
  {
    document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.remove('dark');
  }
}

function hasiltriase()
{
  KurangTriase = 'Proses Triase Belum Lengkap pada pertanyaan : <br/>'
  if(QTriase1 != 0 && QTriase2 != 0 && QTriase3 != 0 && QTriase4 != 0)
  {
    document.getElementById('EMR_dr_IGD_PernyataanKurangTriase').classList.add('collapse');
    TriaseKu = Math.max(QTriase1,QTriase2,QTriase3,QTriase4);
    document.getElementById('EMR_dr_IGD_statTriase3').value = TriaseKu;
    if(TriaseKu == 1)
    {
      document.getElementById('EMR_dr_IGD_HasilTriase').innerHTML = "Hijau";
      hapuswarna();
      document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.add('green-jungle');
      document.getElementById('EMR_dr_IGD_statTriase2').value = 'green';
    }
    if(TriaseKu == 2)
    {
      document.getElementById('EMR_dr_IGD_HasilTriase').innerHTML = "Kuning";
      hapuswarna();
      document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.add('yellow-crusta');
      document.getElementById('EMR_dr_IGD_statTriase2').value = 'yellow';
    }
    if(TriaseKu == 3)
    {
      document.getElementById('EMR_dr_IGD_HasilTriase').innerHTML = "Merah";
      hapuswarna();
      document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.add('red');
      document.getElementById('EMR_dr_IGD_statTriase2').value = 'red';
    }
    if(TriaseKu == 4)
    {
      document.getElementById('EMR_dr_IGD_HasilTriase').innerHTML = "Hitam";
      hapuswarna();
      document.getElementById('EMR_dr_IGD_btnTriaseHasilQuestion').classList.add('dark');
      document.getElementById('EMR_dr_IGD_statTriase2').value = 'dark';
    }
  }
  else
  {
    document.getElementById('EMR_dr_IGD_PernyataanKurangTriase').classList.remove('collapse');
    if(QTriase1 == 0)
    {
      KurangTriase = KurangTriase + '- Circulation <br/>';
    }
    if(QTriase2 == 0)
    {
      KurangTriase = KurangTriase + '- Airway <br/>';
    }
    if(QTriase3 == 0)
    {
      KurangTriase = KurangTriase + '- Breathing <br/>';
    }
    if(QTriase4 == 0)
    {
      KurangTriase = KurangTriase + '- Disability <br/>';
    }
    document.getElementById('EMR_dr_IGD_PernyataanKurangTriase').innerHTML = KurangTriase;
  }
}

$('#EMR_dr_IGD_CirculationStabil').click(function() {
//document.getElementById('EMR_dr_IGD_CirculationStabil').onclick = function()
//{
  QTriase1 = 1;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Circulation';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Airway';
  buka();
})

$('#EMR_dr_IGD_CirculationPreshock').click(function() {
//document.getElementById('EMR_dr_IGD_CirculationPreshock').onclick = function()
//{
  QTriase1 = 2;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Circulation';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Airway';
  buka();
})

$('#EMR_dr_IGD_CirculationShock').click(function() {
//document.getElementById('EMR_dr_IGD_CirculationShock').onclick = function()
//{
  QTriase1 = 3;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Circulation';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Airway';
  buka();
})

$('#EMR_dr_IGD_CirculationTidakada').click(function() {
//document.getElementById('EMR_dr_IGD_CirculationTidakada').onclick = function()
//{
  QTriase1 = 3;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Circulation';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Airway';
  buka();
})

$('#EMR_dr_IGD_AirwayBebas').click(function() {
//document.getElementById('EMR_dr_IGD_AirwayBebas').onclick = function()
//{
  QTriase2 = 1;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Airway';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Breathing';
  buka();
})

$('#EMR_dr_IGD_AirwayObstruksiPartial').click(function() {
//document.getElementById('EMR_dr_IGD_AirwayObstruksiPartial').onclick = function()
//{
  QTriase2 = 2;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Airway';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Breathing';
  buka();
})

$('#EMR_dr_IGD_AirwayObstruksiTotal').click(function() {
//document.getElementById('EMR_dr_IGD_AirwayObstruksiTotal').onclick = function()
//{
  QTriase2 = 3;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Airway';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Breathing';
  buka();
})

$('#EMR_dr_IGD_BreathingNormal').click(function() {
//document.getElementById('EMR_dr_IGD_BreathingNormal').onclick = function()
//{
  QTriase3 = 1;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Breathing';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Disability';
  buka();
})

$('#EMR_dr_IGD_BreathingDistress').click(function() {
//document.getElementById('EMR_dr_IGD_BreathingDistress').onclick = function()
//{
  QTriase3 = 2;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Breathing';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Disability';
  buka();
})

$('#EMR_dr_IGD_BreathingTidakAda').click(function() {
//document.getElementById('EMR_dr_IGD_BreathingTidakAda').onclick = function()
//{
  QTriase3 = 3;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Breathing';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Disability';
  buka();
})

$('#EMR_dr_IGD_DisabilityAlert').click(function() {
//document.getElementById('EMR_dr_IGD_DisabilityAlert').onclick = function()
//{
  QTriase4 = 1;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Disability';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Hasil';
  buka();
  hasiltriase();
})

$('#EMR_dr_IGD_DisabilityVerbal').click(function() {
//document.getElementById('EMR_dr_IGD_DisabilityVerbal').onclick = function()
//{
  QTriase4 = 2;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Disability';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Hasil';
  buka();
  hasiltriase();
})

$('#EMR_dr_IGD_DisabilityPain').click(function() {
//document.getElementById('EMR_dr_IGD_DisabilityPain').onclick = function()
//{
  QTriase4 = 3;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Disability';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Hasil';
  buka();
  hasiltriase();
})

$('#EMR_dr_IGD_DisabilityUnresponsive').click(function() {
//document.getElementById('EMR_dr_IGD_DisabilityUnresponsive').onclick = function()
//{
  QTriase4 = 3;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Disability';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Hasil';
  buka();
  hasiltriase();
})

$('#EMR_dr_IGD_DisabilityPupilMidriasisTotal').click(function() {
//document.getElementById('EMR_dr_IGD_DisabilityPupilMidriasisTotal').onclick = function()
//{
  QTriase4 = 4;
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Disability';
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Hasil';
  buka();
  hasiltriase();
})

$('#EMR_dr_IGD_btnTriaseCirculation').click(function() {
//document.getElementById('EMR_dr_IGD_btnTriaseCirculation').onclick = function()
//{
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Circulation';
  buka();
})

$('#EMR_dr_IGD_btnTriaseAirway').click(function() {
//document.getElementById('EMR_dr_IGD_btnTriaseAirway').onclick = function()
//{
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Airway';
  buka();
})

$('#EMR_dr_IGD_btnTriaseBreathing').click(function() {
//document.getElementById('EMR_dr_IGD_btnTriaseBreathing').onclick = function()
//{
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Breathing';
  buka();
})

$('#EMR_dr_IGD_btnTriaseDisability').click(function() {
//document.getElementById('EMR_dr_IGD_btnTriaseDisability').onclick = function()
//{
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Disability';
  buka();
})

$('#EMR_dr_IGD_btnTriaseHasil').click(function() {
//document.getElementById('EMR_dr_IGD_btnTriaseHasil').onclick = function()
//{
  hasiltriase();
  tutup();
  document.getElementById('EMR_dr_IGD_statTriase').value = 'Hasil';
  buka();
})

$('#EMR_dr_IGD_btnSimpanTriase').click(function() {
  simpantriase();
});
function simpantriase(){
  var form_data = {
    IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
    IGD_Circulation : $("input[name ='EMR_dr_IGD_Circulation']:checked").val(),
    IGD_Airway : $("input[name ='EMR_dr_IGD_Airway']:checked").val(),
    IGD_Breathing : $("input[name ='EMR_dr_IGD_Breathing']:checked").val(),
    IGD_Disability : $("input[name ='EMR_dr_IGD_Disability']:checked").val(),
    IGD_hasilTriase : $('#EMR_dr_IGD_HasilTriase').html()
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
*/

//==============================================================================
//================================ START MENU 1 ================================

var P1_hal= 1;
var P1_hal2 = 0;
var P1_halaman1 = 'Ya';
var P1_halaman2 = 'Ya';
var P1_halaman3 = 'Ya';
var P1_halaman4 = 'Ya';
var P1_halaman5 = 'Ya';
var P1_halaman6 = 'Ya';
var EMR_dr_IGD_P1_SLTelingaKananA1 = document.getElementById('EMR_dr_IGD_P1_SLTelingaKananA1');
var EMR_dr_IGD_P1_SLTelingaKananB1 = document.getElementById('EMR_dr_IGD_P1_SLTelingaKananB1');
var EMR_dr_IGD_P1_SLTelingaKiriA1 = document.getElementById('EMR_dr_IGD_P1_SLTelingaKiriA1');
var EMR_dr_IGD_P1_SLTelingaKiriB1 = document.getElementById('EMR_dr_IGD_P1_SLTelingaKiriB1');
var EMR_dr_IGD_P1_SLHidungA1 = document.getElementById('EMR_dr_IGD_P1_SLHidungA1');
var EMR_dr_IGD_P1_SLHidungB1 = document.getElementById('EMR_dr_IGD_P1_SLHidungB1');
var EMR_dr_IGD_P1_SLTenggorokanA1 = document.getElementById('EMR_dr_IGD_P1_SLTenggorokanA1');
var EMR_dr_IGD_P1_SLTenggorokanB1 = document.getElementById('EMR_dr_IGD_P1_SLTenggorokanB1');
var EMR_dr_IGD_P1_SLRectumB3 = document.getElementById('EMR_dr_IGD_P1_SLRectumB3');
var EMR_dr_IGD_P1_SLRectumC3 = document.getElementById('EMR_dr_IGD_P1_SLRectumC3');

$('#EMR_dr_IGD_P1_HalamanNext').click(function() {
  P1_hal++;
  P1_hal2++;

  if(P1_hal== 2)
  {
    if(P1_halaman2 == 'Tidak')
    {
      EMR_dr_IGD_P1_HalamanNext.disabled = true;
      EMR_dr_IGD_P1_HalamanNext.classList.add('white');
      EMR_dr_IGD_P1_HalamanNext.classList.remove('green');
    }
  }
  else if(P1_hal== 3)
  {
    if(P1_halaman3 == 'Tidak')
    {
      EMR_dr_IGD_P1_HalamanNext.disabled = true;
      EMR_dr_IGD_P1_HalamanNext.classList.add('white');
      EMR_dr_IGD_P1_HalamanNext.classList.remove('green');
    }
  }
  else if(P1_hal== 4)
  {
      EMR_dr_IGD_P1_HalamanNext.disabled = true;
      EMR_dr_IGD_P1_HalamanNext.classList.add('white');
      EMR_dr_IGD_P1_HalamanNext.classList.remove('green');
  }

  $('#EMR_dr_IGD_P1_Halaman'+ P1_hal+'').toggleClass('collapse');
  $('#EMR_dr_IGD_P1_Halaman'+ P1_hal2 +'').toggleClass('collapse');

  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').html(P1_hal2);
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').toggleClass('white');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').toggleClass('green');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').toggleClass('col-md-9');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').toggleClass('col-md-1');

  if(P1_hal== 2)
  {
    $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').html('2. TTV');
  }
  else if(P1_hal== 3)
  {
    $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').html('3. Pemeriksaan Fisik');
  }
  else if(P1_hal== 4)
  {
    $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').html('4. Status Lokalis');
  }
  /*else if(P1_hal== 5)
  {
    $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').html('5. ');
  }*/
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').toggleClass('green');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').toggleClass('white');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').toggleClass('col-md-1');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').toggleClass('col-md-9');

  if(P1_hal== 2)
  {
    EMR_dr_IGD_P1_HalamanBack.disabled = false;
    EMR_dr_IGD_P1_HalamanBack.classList.remove('white');
    EMR_dr_IGD_P1_HalamanBack.classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_HalamanBack').click(function() {
  $('#EMR_dr_IGD_P1_Halaman'+ P1_hal+'').toggleClass('collapse');
  $('#EMR_dr_IGD_P1_Halaman'+ P1_hal2 +'').toggleClass('collapse');

  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').html(P1_hal);
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').toggleClass('white');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').toggleClass('green');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').toggleClass('col-md-9');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal+'').toggleClass('col-md-1');

  if(P1_hal2 == 1)
  {
    $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').html('1. Keluhan utama');
  }
  else if(P1_hal2 == 2)
  {
    $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').html('2. TTV');
  }
  else if(P1_hal2 == 3)
  {
    $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').html('3. Pemeriksaan Fisik');
  }
  else if(P1_hal2 == 4)
  {
    $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').html('4. Status Lokalis');
  }
  /*else if(P1_hal2 == 5)
  {
    $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').html('5. ');
  }*/
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').toggleClass('green');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').toggleClass('white');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').toggleClass('col-md-1');
  $('#EMR_dr_IGD_P1_btnHalaman'+ P1_hal2 +'').toggleClass('col-md-9');

  P1_hal--;
  P1_hal2--;

  if(P1_hal== 1)
  {
    EMR_dr_IGD_P1_HalamanBack.disabled = true;
    EMR_dr_IGD_P1_HalamanBack.classList.add('white');
    EMR_dr_IGD_P1_HalamanBack.classList.remove('green');
    if(P1_halaman1 == 'Ya')
    {
      EMR_dr_IGD_P1_HalamanNext.disabled = false;
      EMR_dr_IGD_P1_HalamanNext.classList.add('green');
      EMR_dr_IGD_P1_HalamanNext.classList.remove('white');
    }
  }
  if(P1_hal== 2)
  {
    if(P1_halaman2 == 'Ya')
    {
      EMR_dr_IGD_P1_HalamanNext.disabled = false;
      EMR_dr_IGD_P1_HalamanNext.classList.add('green');
      EMR_dr_IGD_P1_HalamanNext.classList.remove('white');
    }
  }
  if(P1_hal== 3)
  {
    if(P1_halaman3 == 'Ya')
    {
      EMR_dr_IGD_P1_HalamanNext.disabled = false;
      EMR_dr_IGD_P1_HalamanNext.classList.add('green');
      EMR_dr_IGD_P1_HalamanNext.classList.remove('white');
    }
  }
  if(P1_hal== 4)
  {
    if(P1_halaman4 == 'Ya')
    {
      EMR_dr_IGD_P1_HalamanNext.disabled = false;
      EMR_dr_IGD_P1_HalamanNext.classList.add('green');
      EMR_dr_IGD_P1_HalamanNext.classList.remove('white');
    }
  }
  /*if(P1_hal== 5)
  {
    if(P1_halaman5 == 'Ya')
    {
      EMR_dr_IGD_P1_HalamanNext.disabled = false;
      EMR_dr_IGD_P1_HalamanNext.classList.add('green');
      EMR_dr_IGD_P1_HalamanNext.classList.remove('white');
    }
  }*/
});

$('#EMR_dr_IGD_P1_btnmenu').click(function() {
  document.getElementById('EMR_dr_IGD_P1_btnmenu').disabled = true;
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_dr_IGD_statverHal').value = 'P1';
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});

/*$("input[name='EMR_dr_IGD_P1_Mental']").click(function() {
  if($("input[name='EMR_dr_IGD_P1_Mental']:checked").val() == 'Ada gangguan')
  {
    document.getElementById('EMR_dr_IGD_P1_Mentalshow').classList.remove('collapse');
  }
  else
  {
    document.getElementById('EMR_dr_IGD_P1_Mentalshow').classList.add('collapse');
    $("input[name='EMR_dr_IGD_P1_Mental2']:checked").removeAttr('checked');
    gangguanmental = 'Pasien tidak memiliki gangguan perilaku';
  }
});
$("input[name='EMR_dr_IGD_P1_Mental2']").click(function() {
  gangguanmental = 'Pasien memiliki gangguan perilaku yang '+$("input[name='EMR_dr_IGD_P1_Mental2']:checked").val();
});
$('#EMR_dr_IGD_P1_RiwayatSosial1').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_RiwayatSosial1').checked == true)
  {
    $('#EMR_dr_IGD_P1_RiwayatSosial2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_RiwayatSosial3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_RiwayatSosial4').val('');
  }
});
$('#EMR_dr_IGD_P1_RiwayatSosial2').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_RiwayatSosial2').checked == true)
  {
    $('#EMR_dr_IGD_P1_RiwayatSosial1').removeAttr('checked');
  }
});
$('#EMR_dr_IGD_P1_RiwayatSosial3').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_RiwayatSosial3').checked == true)
  {
    $('#EMR_dr_IGD_P1_RiwayatSosial1').removeAttr('checked');
  }
});
$('#EMR_dr_IGD_P1_RiwayatSosial4').keyup(function() {
  if(document.getElementById('EMR_dr_IGD_P1_RiwayatSosial4').value != '')
  {
    $('#EMR_dr_IGD_P1_RiwayatSosial1').removeAttr('checked');
  }
  else
  {
    document.getElementById('EMR_dr_IGD_P1_RiwayatSosial1').checked = true;
  }
});*/

//mulai halaman 1 menu 1
$('#EMR_dr_IGD_P1_TTVpupilKanan').keyup(function() {
  if(document.getElementById('EMR_dr_IGD_P1_TTVpupilKanan').value == document.getElementById('EMR_dr_IGD_P1_TTVpupilKiri').value)
  {
    $('#EMR_dr_IGD_P1_TTVpupilstat').html('Isokor');
  }
  else
  {
    $('#EMR_dr_IGD_P1_TTVpupilstat').html('Anisokor');
  }
});

$('#EMR_dr_IGD_P1_TTVpupilKiri').keyup(function() {
  if(document.getElementById('EMR_dr_IGD_P1_TTVpupilKanan').value == document.getElementById('EMR_dr_IGD_P1_TTVpupilKiri').value)
  {
    $('#EMR_dr_IGD_P1_TTVpupilstat').html('Isokor');
  }
  else
  {
    $('#EMR_dr_IGD_P1_TTVpupilstat').html('Anisokor');
  }
});

$('#EMR_dr_IGD_P1_TTVbtnCahayaKanan').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_TTVbtnCahayaKanan').value == '+')
  {
    $('#EMR_dr_IGD_P1_TTVbtnCahayaKanan').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_TTVbtnCahayaKanan').val('-');
    document.getElementById('EMR_dr_IGD_P1_TTVbtnCahayaKanan').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_TTVbtnCahayaKanan').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_TTVbtnCahayaKanan').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_TTVbtnCahayaKanan').val('+');
    document.getElementById('EMR_dr_IGD_P1_TTVbtnCahayaKanan').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_TTVbtnCahayaKanan').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_TTVbtnCahayaKiri').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_TTVbtnCahayaKiri').value == '+')
  {
    $('#EMR_dr_IGD_P1_TTVbtnCahayaKiri').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_TTVbtnCahayaKiri').val('-');
    document.getElementById('EMR_dr_IGD_P1_TTVbtnCahayaKiri').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_TTVbtnCahayaKiri').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_TTVbtnCahayaKiri').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_TTVbtnCahayaKiri').val('+');
    document.getElementById('EMR_dr_IGD_P1_TTVbtnCahayaKiri').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_TTVbtnCahayaKiri').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_GCSe').keyup(function() {
  if(document.getElementById('EMR_dr_IGD_P1_GCSe').value > 4)
  {
    alert("Nilai maksimal adalah 4, sistem akan memberikan nilai 4");
    document.getElementById('EMR_dr_IGD_P1_GCSe').value = 4;
  }
});

$('#EMR_dr_IGD_P1_GCSv').keyup(function() {
  if(document.getElementById('EMR_dr_IGD_P1_GCSv').value > 5)
  {
    alert("Nilai maksimal adalah 5, sistem akan memberikan nilai 5");
    document.getElementById('EMR_dr_IGD_P1_GCSv').value = 5;
  }
});

$('#EMR_dr_IGD_P1_GCSm').keyup(function() {
  if(document.getElementById('EMR_dr_IGD_P1_GCSm').value > 6)
  {
    alert("Nilai maksimal adalah 6, sistem akan memberikan nilai 6");
    document.getElementById('EMR_dr_IGD_P1_GCSm').value = 6;
  }
});
//end halaman 1 menu 1

//mulai halaman 2 menu 1
$('#EMR_dr_IGD_P1_PeFi_2_CK').click(function() {
  $('#EMR_dr_IGD_P1_PeFi_2B').toggleClass('collapse');
});

$('#EMR_dr_IGD_P1_PeFi_3_CK').click(function() {
  $('#EMR_dr_IGD_P1_PeFi_3B').toggleClass('collapse');
});

$('#EMR_dr_IGD_P1_PeFi_5_CK').click(function() {
  $('#EMR_dr_IGD_P1_PeFi_5B').toggleClass('collapse');
});

$('#EMR_dr_IGD_P1_PeFi_6_CK').click(function() {
  $('#EMR_dr_IGD_P1_PeFi_6B').toggleClass('collapse');
});

$('#EMR_dr_IGD_P1_PeFi_7_CK').click(function() {
  $('#EMR_dr_IGD_P1_PeFi_7B').toggleClass('collapse');
});

//mulai PF Kepala
$('#EMR_dr_IGD_P1_btnAnemis').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAnemis').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAnemis').html('-');
    $('#EMR_dr_IGD_P1_btnAnemis').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAnemis').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAnemis').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAnemis').html('+');
    $('#EMR_dr_IGD_P1_btnAnemis').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAnemis').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAnemis').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnIkterus').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnIkterus').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnIkterus').html('-');
    $('#EMR_dr_IGD_P1_btnIkterus').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnIkterus').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnIkterus').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnIkterus').html('+');
    $('#EMR_dr_IGD_P1_btnIkterus').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnIkterus').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnIkterus').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnCyanosis').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnCyanosis').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnCyanosis').html('-');
    $('#EMR_dr_IGD_P1_btnCyanosis').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnCyanosis').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnCyanosis').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnCyanosis').html('+');
    $('#EMR_dr_IGD_P1_btnCyanosis').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnCyanosis').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnCyanosis').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnDipsneo').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnDipsneo').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnDipsneo').html('-');
    $('#EMR_dr_IGD_P1_btnDipsneo').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnDipsneo').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnDipsneo').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnDipsneo').html('+');
    $('#EMR_dr_IGD_P1_btnDipsneo').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnDipsneo').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnDipsneo').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_pupilKanan').keyup(function() {
  if(document.getElementById('EMR_dr_IGD_P1_pupilKanan').value == document.getElementById('EMR_dr_IGD_P1_pupilKiri').value)
  {
    $('#EMR_dr_IGD_P1_pupilstat').html('Isokor');
  }
  else
  {
    $('#EMR_dr_IGD_P1_pupilstat').html('Anisokor');
  }
});

$('#EMR_dr_IGD_P1_pupilKiri').keyup(function() {
  if(document.getElementById('EMR_dr_IGD_P1_pupilKanan').value == document.getElementById('EMR_dr_IGD_P1_pupilKiri').value)
  {
    $('#EMR_dr_IGD_P1_pupilstat').html('Isokor');
  }
  else
  {
    $('#EMR_dr_IGD_P1_pupilstat').html('Anisokor');
  }
});

$('#EMR_dr_IGD_P1_btnCahayaKanan').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnCahayaKanan').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnCahayaKanan').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnCahayaKanan').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnCahayaKanan').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnCahayaKanan').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnCahayaKanan').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnCahayaKanan').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnCahayaKanan').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnCahayaKanan').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnCahayaKiri').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnCahayaKiri').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnCahayaKiri').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnCahayaKiri').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnCahayaKiri').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnCahayaKiri').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnCahayaKiri').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnCahayaKiri').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnCahayaKiri').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnCahayaKiri').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnUUK').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnUUK').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnUUK').html('-');
    $('#EMR_dr_IGD_P1_btnUUK').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnUUK').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnUUK').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnUUK').html('+');
    $('#EMR_dr_IGD_P1_btnUUK').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnUUK').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnUUK').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnUUB').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnUUB').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnUUB').html('-');
    $('#EMR_dr_IGD_P1_btnUUB').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnUUB').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnUUB').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnUUB').html('+');
    $('#EMR_dr_IGD_P1_btnUUB').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnUUB').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnUUB').classList.add('green');
  }
});
//end PF Kepala

//mulai PF THorax
$('#EMR_dr_IGD_P1_Cor1').click(function() {
    document.getElementById('EMR_dr_IGD_P1_Cor2').checked = false;
    document.getElementById('EMR_dr_IGD_P1_Cor3').checked = false;
    EMR_dr_IGD_P1_fisikhalNext.disabled = false;
    EMR_dr_IGD_P1_fisikhalNext.classList.add('yellow');
    EMR_dr_IGD_P1_fisikhalNext.classList.remove('white');
    $('#EMR_dr_IGD_P1_CorStatus').val('Tidak');
});

$('#EMR_dr_IGD_P1_Cor2').click(function() {
    if(document.getElementById('EMR_dr_IGD_P1_CorStatus').value == 'Tidak')
    {
      document.getElementById('EMR_dr_IGD_P1_Cor1').checked = false;
      EMR_dr_IGD_P1_fisikhalNext.disabled = false;
      EMR_dr_IGD_P1_fisikhalNext.classList.add('yellow');
      EMR_dr_IGD_P1_fisikhalNext.classList.remove('white');
      $('#EMR_dr_IGD_P1_CorStatus').val('Ya');
    }
    else
    {
      if (document.getElementById('EMR_dr_IGD_P1_Cor3').checked == true)
      {
        document.getElementById('EMR_dr_IGD_P1_Cor1').checked = false;
        EMR_dr_IGD_P1_fisikhalNext.disabled = false;
        EMR_dr_IGD_P1_fisikhalNext.classList.add('yellow');
        EMR_dr_IGD_P1_fisikhalNext.classList.remove('white');
        $('#EMR_dr_IGD_P1_CorStatus').val('Ya');
      }
      else
      {
        document.getElementById('EMR_dr_IGD_P1_Cor1').checked = true;
        EMR_dr_IGD_P1_fisikhalNext.disabled = false;
        EMR_dr_IGD_P1_fisikhalNext.classList.add('yellow');
        EMR_dr_IGD_P1_fisikhalNext.classList.remove('white');
        $('#EMR_dr_IGD_P1_CorStatus').val('Tidak');
      }
    }
});

$('#EMR_dr_IGD_P1_Cor3').click(function() {
    if(document.getElementById('EMR_dr_IGD_P1_CorStatus').value == 'Tidak')
    {
      document.getElementById('EMR_dr_IGD_P1_Cor1').checked = false;
      EMR_dr_IGD_P1_fisikhalNext.disabled = false;
      EMR_dr_IGD_P1_fisikhalNext.classList.add('yellow');
      EMR_dr_IGD_P1_fisikhalNext.classList.remove('white');
      $('#EMR_dr_IGD_P1_CorStatus').val('Ya');
    }
    else
    {
      if (document.getElementById('EMR_dr_IGD_P1_Cor2').checked == true)
      {
        document.getElementById('EMR_dr_IGD_P1_Cor1').checked = false;
        EMR_dr_IGD_P1_fisikhalNext.disabled = false;
        EMR_dr_IGD_P1_fisikhalNext.classList.add('yellow');
        EMR_dr_IGD_P1_fisikhalNext.classList.remove('white');
        $('#EMR_dr_IGD_P1_CorStatus').val('Ya');
      }
      else
      {
        document.getElementById('EMR_dr_IGD_P1_Cor1').checked = true;
        EMR_dr_IGD_P1_fisikhalNext.disabled = false;
        EMR_dr_IGD_P1_fisikhalNext.classList.add('yellow');
        EMR_dr_IGD_P1_fisikhalNext.classList.remove('white');
        $('#EMR_dr_IGD_P1_CorStatus').val('Tidak');
      }
    }
});

$('#EMR_dr_IGD_P1_Cor4').click(function() {
    EMR_dr_IGD_P1_fisikhalNext.disabled = false;
    EMR_dr_IGD_P1_fisikhalNext.classList.add('yellow');
    EMR_dr_IGD_P1_fisikhalNext.classList.remove('white');
});

$('#EMR_dr_IGD_P1_Cor5').click(function() {
    EMR_dr_IGD_P1_fisikhalNext.disabled = false;
    EMR_dr_IGD_P1_fisikhalNext.classList.add('yellow');
    EMR_dr_IGD_P1_fisikhalNext.classList.remove('white');
});

$('#EMR_dr_IGD_P1_btnMurmur').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnMurmur').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnMurmur').html('<b> Murmur - </b>');
    $('#EMR_dr_IGD_P1_btnMurmur').val('-');
    $('#EMR_dr_IGD_P1_btnMurmurText').val('');
    $('#EMR_dr_IGD_P1_btnMurmurText').toggleClass('collapse');
    document.getElementById('EMR_dr_IGD_P1_btnMurmur').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnMurmur').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnMurmur').html('<b> Murmur + </b>');
    $('#EMR_dr_IGD_P1_btnMurmur').val('+');
    $('#EMR_dr_IGD_P1_btnMurmurText').val('');
    $('#EMR_dr_IGD_P1_btnMurmurText').toggleClass('collapse');
    document.getElementById('EMR_dr_IGD_P1_btnMurmur').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnMurmur').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnGallop').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnGallop').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnGallop').html('<b> Gallop - </b>');
    $('#EMR_dr_IGD_P1_btnGallop').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnGallop').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnGallop').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnGallop').html('<b> Gallop + </b>');
    $('#EMR_dr_IGD_P1_btnGallop').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnGallop').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnGallop').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnVesikuler1').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnVesikuler1').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnVesikuler1').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler1').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler1').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler1').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnVesikuler1').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler1').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler1').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler1').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnVesikuler2').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnVesikuler2').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnVesikuler2').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler2').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler2').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler2').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnVesikuler2').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler2').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler2').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler2').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnVesikuler3').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnVesikuler3').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnVesikuler3').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler3').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler3').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler3').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnVesikuler3').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler3').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler3').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler3').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnVesikuler4').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnVesikuler4').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnVesikuler4').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler4').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler4').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler4').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnVesikuler4').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler4').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler4').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler4').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnVesikuler5').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnVesikuler5').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnVesikuler5').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler5').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler5').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler5').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnVesikuler5').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler5').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler5').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler5').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnVesikuler6').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnVesikuler6').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnVesikuler6').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler6').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler6').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler6').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnVesikuler6').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnVesikuler6').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler6').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnVesikuler6').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnRhonki1').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnRhonki1').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnRhonki1').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnRhonki1').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki1').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki1').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnRhonki1').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnRhonki1').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki1').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki1').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnRhonki2').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnRhonki2').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnRhonki2').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnRhonki2').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki2').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki2').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnRhonki2').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnRhonki2').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki2').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki2').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnRhonki3').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnRhonki3').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnRhonki3').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnRhonki3').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki3').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki3').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnRhonki3').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnRhonki3').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki3').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki3').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnRhonki4').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnRhonki4').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnRhonki4').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnRhonki4').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki4').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki4').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnRhonki4').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnRhonki4').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki4').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki4').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnRhonki5').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnRhonki5').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnRhonki5').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnRhonki5').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki5').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki5').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnRhonki5').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnRhonki5').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki5').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki5').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnRhonki6').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnRhonki6').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnRhonki6').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnRhonki6').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki6').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki6').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnRhonki6').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnRhonki6').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki6').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnRhonki6').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnWheezing1').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnWheezing1').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnWheezing1').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnWheezing1').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing1').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing1').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnWheezing1').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnWheezing1').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing1').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing1').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnWheezing2').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnWheezing2').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnWheezing2').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnWheezing2').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing2').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing2').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnWheezing2').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnWheezing2').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing2').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing2').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnWheezing3').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnWheezing3').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnWheezing3').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnWheezing3').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing3').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing3').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnWheezing3').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnWheezing3').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing3').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing3').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnWheezing4').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnWheezing4').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnWheezing4').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnWheezing4').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing4').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing4').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnWheezing4').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnWheezing4').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing4').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing4').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnWheezing5').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnWheezing5').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnWheezing5').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnWheezing5').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing5').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing5').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnWheezing5').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnWheezing5').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing5').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing5').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnWheezing6').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnWheezing6').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnWheezing6').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnWheezing6').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing6').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing6').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnWheezing6').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnWheezing6').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing6').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnWheezing6').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnretraksiKanan').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnretraksiKanan').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnretraksiKanan').html('<b>Kanan - </b>');
    $('#EMR_dr_IGD_P1_btnretraksiKanan').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnretraksiKanan').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnretraksiKanan').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnretraksiKanan').html('<b>Kanan + </b>');
    $('#EMR_dr_IGD_P1_btnretraksiKanan').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnretraksiKanan').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnretraksiKanan').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnretraksiKiri').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnretraksiKiri').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnretraksiKiri').html('<b>Kiri - </b>');
    $('#EMR_dr_IGD_P1_btnretraksiKiri').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnretraksiKiri').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnretraksiKiri').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnretraksiKiri').html('<b>Kiri + </b>');
    $('#EMR_dr_IGD_P1_btnretraksiKiri').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnretraksiKiri').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnretraksiKiri').classList.add('green');
  }
});
//end PF THorax

//mulai PF Abdomen
$('#EMR_dr_IGD_P1_btnAbdomen1A').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen1Estatus').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen1E').toggleClass('collapse');
    $("#EMR_dr_IGD_P1_btnAbdomen1E").val('');
    $('#EMR_dr_IGD_P1_btnAbdomen1Estatus').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen1B').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen1Estatus').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen1E').toggleClass('collapse');
    $("#EMR_dr_IGD_P1_btnAbdomen1E").val('');
    $('#EMR_dr_IGD_P1_btnAbdomen1Estatus').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen1C').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen1Estatus').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen1E').toggleClass('collapse');
    $("#EMR_dr_IGD_P1_btnAbdomen1E").val('');
    $('#EMR_dr_IGD_P1_btnAbdomen1Estatus').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen1D').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen1Estatus').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen1E').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_btnAbdomen1E').focus();
    $('#EMR_dr_IGD_P1_btnAbdomen1Estatus').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_btnAbdomen1E").focusout(function() {
  if(EMR_dr_IGD_P1_btnAbdomen1E.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan bising usus dianggap normal");
    $('#EMR_dr_IGD_P1_btnAbdomen1D').removeAttr('checked');
    EMR_dr_IGD_P1_btnAbdomen1A.checked = true;
    $("#EMR_dr_IGD_P1_btnAbdomen1E").val('');
    $("#EMR_dr_IGD_P1_btnAbdomen1Estatus").val('Tidak');
    $("#EMR_dr_IGD_P1_btnAbdomen1E").toggleClass('collapse');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen2').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen2').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen2').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen2').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen2').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen2').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen2').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen2').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen2').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen2').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen3').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen3').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen3').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen3').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen3').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen3').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen3').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen3').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen3').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen3').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen4').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen4').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen4').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen4').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen4').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen4').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen4').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen4').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen4').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen4').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen5').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen5').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen5').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen5').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen5').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen5').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen5').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen5').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen5').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen5').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen6').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen6').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen6').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen6').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen6').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen6').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen6').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen6').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen6').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen6').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen7A').click(function() {
  $('#EMR_dr_IGD_P1_btnAbdomen7B').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen7Cstatus').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen7C').toggleClass('collapse');
    $("#EMR_dr_IGD_P1_btnAbdomen7C").val('');
    $('#EMR_dr_IGD_P1_btnAbdomen7Cstatus').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen7B').click(function() {
  $('#EMR_dr_IGD_P1_btnAbdomen7A').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen7Cstatus').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen7C').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_btnAbdomen7C').focus();
    $('#EMR_dr_IGD_P1_btnAbdomen7Cstatus').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_btnAbdomen7C").focusout(function() {
  if(EMR_dr_IGD_P1_btnAbdomen7C.value == '')
  {
    alert("Teraba belum di isi, centang akan dihapus otomatis dan hepar dianggap tidak teraba");
    $('#EMR_dr_IGD_P1_btnAbdomen7B').removeAttr('checked');
    EMR_dr_IGD_P1_btnAbdomen7A.checked = true;
    $("#EMR_dr_IGD_P1_btnAbdomen7C").val('');
    $("#EMR_dr_IGD_P1_btnAbdomen7Cstatus").val('Tidak');
    $("#EMR_dr_IGD_P1_btnAbdomen7C").toggleClass('collapse');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen8A').click(function() {
  $('#EMR_dr_IGD_P1_btnAbdomen8B').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen8Cstatus').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen8C').toggleClass('collapse');
    $("#EMR_dr_IGD_P1_btnAbdomen8C").val('');
    $('#EMR_dr_IGD_P1_btnAbdomen8Cstatus').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen8B').click(function() {
  $('#EMR_dr_IGD_P1_btnAbdomen8A').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen8Cstatus').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen8C').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_btnAbdomen8C').focus();
    $('#EMR_dr_IGD_P1_btnAbdomen8Cstatus').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_btnAbdomen8C").focusout(function() {
  if(EMR_dr_IGD_P1_btnAbdomen8C.value == '')
  {
    alert("Teraba belum di isi, centang akan dihapus otomatis dan hepar dianggap tidak teraba");
    $('#EMR_dr_IGD_P1_btnAbdomen8B').removeAttr('checked');
    EMR_dr_IGD_P1_btnAbdomen8A.checked = true;
    $("#EMR_dr_IGD_P1_btnAbdomen8C").val('');
    $("#EMR_dr_IGD_P1_btnAbdomen8Cstatus").val('Tidak');
    $("#EMR_dr_IGD_P1_btnAbdomen8C").toggleClass('collapse');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen8').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen8').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen8').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen8').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen8').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen8').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen8').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen8').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen8').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen8').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_AbdomenLainChb').click(function(){
  $('#EMR_dr_IGD_P1_AbdomenLain').toggleClass('collapse');
  $('#EMR_dr_IGD_P1_btnAbdomenText1').val('');
});

$('#EMR_dr_IGD_P1_btnAbdomen9').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen9').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen9').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen9').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen9').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen9').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen9').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen9').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen9').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen9').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen10').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen10').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen10').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen10').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen10').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen10').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen10').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen10').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen10').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen10').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen11').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen11').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen11').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen11').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen11').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen11').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen11').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen11').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen11').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen11').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen12').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen12').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen12').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen12').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen12').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen12').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen12').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen12').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen12').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen12').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen13').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen13').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen13').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen13').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen13').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen13').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen13').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen13').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen13').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen13').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen14').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen14').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen14').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen14').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen14').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen14').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen14').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen14').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen14').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen14').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen15').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen15').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen15').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen15').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen15').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen15').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen15').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen15').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen15').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen15').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen16').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen16').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen16').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen16').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen16').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen16').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen16').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen16').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen16').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen16').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen17').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen17').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen17').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen17').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen17').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen17').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen17').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen17').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen17').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen17').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen18').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen18').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen18').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen18').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen18').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen18').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen18').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen18').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen18').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen18').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen19').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen19').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen19').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen19').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen19').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen19').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen19').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen19').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen19').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen19').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnAbdomen20').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnAbdomen20').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnAbdomen20').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen20').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen20').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen20').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnAbdomen20').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnAbdomen20').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen20').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnAbdomen20').classList.add('green');
  }
});
//end PF Abdomen

//mulai PF ekstremitas
$('#EMR_dr_IGD_P1_btnEkstremitas1').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnEkstremitas1').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas1').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas1').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas1').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas1').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas1').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas1').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas1').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas1').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnEkstremitas2').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnEkstremitas2').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas2').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas2').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas2').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas2').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas2').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas2').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas2').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas2').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnEkstremitas3').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnEkstremitas3').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas3').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas3').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas3').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas3').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas3').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas3').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas3').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas3').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnEkstremitas4').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnEkstremitas4').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas4').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas4').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas4').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas4').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas4').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas4').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas4').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas4').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnEkstremitas9').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnEkstremitas9').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas9').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas9').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas9').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas9').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas9').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas9').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas9').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas9').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnEkstremitas10').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnEkstremitas10').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas10').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas10').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas10').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas10').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas10').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas10').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas10').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas10').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnEkstremitas11').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnEkstremitas11').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas11').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas11').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas11').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas11').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas11').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas11').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas11').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas11').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnEkstremitas12').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnEkstremitas12').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas12').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas12').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas12').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas12').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnEkstremitas12').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnEkstremitas12').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas12').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnEkstremitas12').classList.add('green');
  }
});
//end PF ekstremitas

//mulai PF neurologis
$('#EMR_dr_IGD_P1_Sensorik1').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_Sensorik7status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_Sensorik7').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_Sensorik7').val('');
    $('#EMR_dr_IGD_P1_Sensorik7status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_Sensorik2').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_Sensorik7status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_Sensorik7').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_Sensorik7').val('');
    $('#EMR_dr_IGD_P1_Sensorik7status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_Sensorik3').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_Sensorik7status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_Sensorik7').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_Sensorik7').val('');
    $('#EMR_dr_IGD_P1_Sensorik7status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_Sensorik4').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_Sensorik7status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_Sensorik7').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_Sensorik7').val('');
    $('#EMR_dr_IGD_P1_Sensorik7status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_Sensorik5').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_Sensorik7status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_Sensorik7').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_Sensorik7').val('');
    $('#EMR_dr_IGD_P1_Sensorik7status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_Sensorik6').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_Sensorik7status').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_Sensorik7').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_Sensorik7').focus();
    $('#EMR_dr_IGD_P1_Sensorik7status').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_Sensorik7").focusout(function() {
  if(EMR_dr_IGD_P1_Sensorik7.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan sensorik dianggap normal");
    $('#EMR_dr_IGD_P1_Sensorik6').removeAttr('checked');
    EMR_dr_IGD_P1_Sensorik1.checked = true;
    $("#EMR_dr_IGD_P1_Sensorik7").val('');
    $("#EMR_dr_IGD_P1_Sensorik7status").val('Tidak');
    $("#EMR_dr_IGD_P1_Sensorik7").toggleClass('collapse');
  }
});
//end PF neurologis

/*
$('#EMR_dr_IGD_P1_PeFi_2_CK').click(function(){

  if(document.getElementById('EMR_dr_IGD_P1_PeFi_2_CK').checked == true)
  {
    $('#EMR_dr_IGD_P1_PeFi_2_CK').val('Kepala');
  }
  else
  {
    $('#EMR_dr_IGD_P1_PeFi_2_CK').val('');
  }
});

$('#EMR_dr_IGD_P1_PeFi_3_CK').click(function(){
  if(document.getElementById('EMR_dr_IGD_P1_PeFi_3_CK').checked == true)
  {
    $('#EMR_dr_IGD_P1_PeFi_3_CK').val('Thorax');
  }
  else
  {
    $('#EMR_dr_IGD_P1_PeFi_3_CK').val('');
  }
});

$('#EMR_dr_IGD_P1_PeFi_5_CK').click(function(){
  if(document.getElementById('EMR_dr_IGD_P1_PeFi_5_CK').checked == true)
  {
    $('#EMR_dr_IGD_P1_PeFi_5_CK').val('Abdomen');
  }
  else
  {
    $('#EMR_dr_IGD_P1_PeFi_5_CK').val('');
  }
});

$('#EMR_dr_IGD_P1_PeFi_6_CK').click(function(){
  if(document.getElementById('EMR_dr_IGD_P1_PeFi_6_CK').checked == true)
  {
    $('#EMR_dr_IGD_P1_PeFi_6_CK').val('Ekstremitas');
  }
  else
  {
    $('#EMR_dr_IGD_P1_PeFi_6_CK').val('');
  }
});

$('#EMR_dr_IGD_P1_PeFi_7_CK').click(function(){
  if(document.getElementById('EMR_dr_IGD_P1_PeFi_7_CK').checked == true)
  {
    $('#EMR_dr_IGD_P1_PeFi_7_CK').val('Neurologis');
  }
  else
  {
    $('#EMR_dr_IGD_P1_PeFi_7_CK').val('');
  }
});*/

//halaman 3 menu 1
//THT
$('#EMR_dr_IGD_P1_SLTHT').click(function() {
    $('#EMR_dr_IGD_P1_SLTHT2').toggleClass('collapse');
    EMR_dr_IGD_P1_SLTelingaKananA1.checked = true;
    $('#EMR_dr_IGD_P1_SLTelingaKananA2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKananA3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKananA4').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKananA5').val('');
    if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKananA5status').value == 'Ya')
    {
      $('#EMR_dr_IGD_P1_SLTelingaKananA5div').toggleClass('collapse');
      $('#EMR_dr_IGD_P1_SLTelingaKananA5').val('');
      $('#EMR_dr_IGD_P1_SLTelingaKananA5status').val('Tidak');
    }
    EMR_dr_IGD_P1_SLTelingaKananB1.checked = true;
    $('#EMR_dr_IGD_P1_SLTelingaKananB2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKananB3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKananB4').val('');
    if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKananB4status').value == 'Ya')
    {
      $('#EMR_dr_IGD_P1_SLTelingaKananB4div').toggleClass('collapse');
      $('#EMR_dr_IGD_P1_SLTelingaKananB4').val('');
      $('#EMR_dr_IGD_P1_SLTelingaKananB4status').val('Tidak');
    }
    EMR_dr_IGD_P1_SLTelingaKiriA1.checked = true;
    $('#EMR_dr_IGD_P1_SLTelingaKiriA2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKiriA3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKiriA4').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKiriA5').val('');
    if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKiriA5status').value == 'Ya')
    {
      $('#EMR_dr_IGD_P1_SLTelingaKiriA5div').toggleClass('collapse');
      $('#EMR_dr_IGD_P1_SLTelingaKiriA5').val('');
      $('#EMR_dr_IGD_P1_SLTelingaKiriA5status').val('Tidak');
    }
    EMR_dr_IGD_P1_SLTelingaKiriB1.checked = true;
    $('#EMR_dr_IGD_P1_SLTelingaKiriB2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKiriB3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKiriB4').val('');
    if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKiriB4status').value == 'Ya')
    {
      $('#EMR_dr_IGD_P1_SLTelingaKiriB4div').toggleClass('collapse');
      $('#EMR_dr_IGD_P1_SLTelingaKiriB4').val('');
      $('#EMR_dr_IGD_P1_SLTelingaKiriB4status').val('Tidak');
    }
    EMR_dr_IGD_P1_SLHidungA1.checked = true;
    $('#EMR_dr_IGD_P1_SLHidungA2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLHidungA3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLHidungA4').val('');
    if(document.getElementById('EMR_dr_IGD_P1_SLHidungA4status').value == 'Ya')
    {
      $('#EMR_dr_IGD_P1_SLHidungA4div').toggleClass('collapse');
      $('#EMR_dr_IGD_P1_SLHidungA4').val('');
      $('#EMR_dr_IGD_P1_SLHidungA4status').val('Tidak');
    }
    EMR_dr_IGD_P1_SLHidungB1.checked = true;
    $('#EMR_dr_IGD_P1_SLHidungB2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLHidungB3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLHidungB4').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLHidungB5').val('');
    if(document.getElementById('EMR_dr_IGD_P1_SLHidungB5status').value == 'Ya')
    {
      $('#EMR_dr_IGD_P1_SLHidungB5div').toggleClass('collapse');
      $('#EMR_dr_IGD_P1_SLHidungB5').val('');
      $('#EMR_dr_IGD_P1_SLHidungB5status').val('Tidak');
    }
    EMR_dr_IGD_P1_SLTenggorokanA1.checked = true;
    $('#EMR_dr_IGD_P1_SLTenggorokanA2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTenggorokanA3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTenggorokanA4').val('');
    if(document.getElementById('EMR_dr_IGD_P1_SLTenggorokanA4status').value == 'Ya')
    {
      $('#EMR_dr_IGD_P1_SLTenggorokanA4div').toggleClass('collapse');
      $('#EMR_dr_IGD_P1_SLTenggorokanA4').val('');
      $('#EMR_dr_IGD_P1_SLTenggorokanA4status').val('Tidak');
    }
    EMR_dr_IGD_P1_SLTenggorokanB1.checked = true;
    $('#EMR_dr_IGD_P1_SLTenggorokanB2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTenggorokanB3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTenggorokanB4').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTenggorokanB5').val('');
    if(document.getElementById('EMR_dr_IGD_P1_SLTenggorokanB5status').value == 'Ya')
    {
      $('#EMR_dr_IGD_P1_SLTenggorokanB5div').toggleClass('collapse');
      $('#EMR_dr_IGD_P1_SLTenggorokanB5').val('');
      $('#EMR_dr_IGD_P1_SLTenggorokanB5status').val('Tidak');
    }
});

//telinga Kanan
//saluran
$('#EMR_dr_IGD_P1_SLTelingaKananA1').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKananA2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLTelingaKananA3').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLTelingaKananA4').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKananA5status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLTelingaKananA5div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTelingaKananA5').val('');
    $('#EMR_dr_IGD_P1_SLTelingaKananA5status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLTelingaKananA2').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKananA1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLTelingaKananA3').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKananA1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLTelingaKananA4').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKananA1').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKananA5status').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLTelingaKananA5div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTelingaKananA5').focus();
    $('#EMR_dr_IGD_P1_SLTelingaKananA5status').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_SLTelingaKananA5").focusout(function() {
  if(EMR_dr_IGD_P1_SLTelingaKananA5.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan telinga kanan saluran dianggap bersih");
    $('#EMR_dr_IGD_P1_SLTelingaKananA2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKananA3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKananA4').removeAttr('checked');
    EMR_dr_IGD_P1_SLTelingaKananA1.checked = true;
    $("#EMR_dr_IGD_P1_SLTelingaKananA5").val('');
    $("#EMR_dr_IGD_P1_SLTelingaKananA5status").val('Tidak');
    $("#EMR_dr_IGD_P1_SLTelingaKananA5div").toggleClass('collapse');
  }
});

//membran timpani
$('#EMR_dr_IGD_P1_SLTelingaKananB1').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKananB2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLTelingaKananB3').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKananB4status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLTelingaKananB4div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTelingaKananB4').val('');
    $('#EMR_dr_IGD_P1_SLTelingaKananB4status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLTelingaKananB2').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKananB1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLTelingaKananB3').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKananB1').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKananB4status').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLTelingaKananB4div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTelingaKananB4').focus();
    $('#EMR_dr_IGD_P1_SLTelingaKananB4status').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_SLTelingaKananB4").focusout(function() {
  if(EMR_dr_IGD_P1_SLTelingaKananB4.value == '')
  {
    alert("Lain-lain belum di isi, centang lainnya akan dihapus otomatis");
    $('#EMR_dr_IGD_P1_SLTelingaKananB2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKananB3').removeAttr('checked');
    EMR_dr_IGD_P1_SLTelingaKananB1.checked = true;
    $("#EMR_dr_IGD_P1_SLTelingaKananB4").val('');
    $("#EMR_dr_IGD_P1_SLTelingaKananB4status").val('Tidak');
    $("#EMR_dr_IGD_P1_SLTelingaKananB4div").toggleClass('collapse');
  }
});

//telinga Kiri
//saluran
$('#EMR_dr_IGD_P1_SLTelingaKiriA1').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKiriA2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLTelingaKiriA3').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLTelingaKiriA4').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKiriA5status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLTelingaKiriA5div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTelingaKiriA5').val('');
    $('#EMR_dr_IGD_P1_SLTelingaKiriA5status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLTelingaKiriA2').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKiriA1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLTelingaKiriA3').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKiriA1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLTelingaKiriA4').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKiriA1').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKiriA5status').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLTelingaKiriA5div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTelingaKiriA5').focus();
    $('#EMR_dr_IGD_P1_SLTelingaKiriA5status').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_SLTelingaKiriA5").focusout(function() {
  if(EMR_dr_IGD_P1_SLTelingaKiriA5.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan telinga Kiri saluran dianggap bersih");
    $('#EMR_dr_IGD_P1_SLTelingaKiriA2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKiriA3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKiriA4').removeAttr('checked');
    EMR_dr_IGD_P1_SLTelingaKiriA1.checked = true;
    $("#EMR_dr_IGD_P1_SLTelingaKiriA5").val('');
    $("#EMR_dr_IGD_P1_SLTelingaKiriA5status").val('Tidak');
    $("#EMR_dr_IGD_P1_SLTelingaKiriA5div").toggleClass('collapse');
  }
});

//membran timpani
$('#EMR_dr_IGD_P1_SLTelingaKiriB1').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKiriB2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLTelingaKiriB3').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKiriB4status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLTelingaKiriB4div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTelingaKiriB4').val('');
    $('#EMR_dr_IGD_P1_SLTelingaKiriB4status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLTelingaKiriB2').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKiriB1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLTelingaKiriB3').click(function() {
  $('#EMR_dr_IGD_P1_SLTelingaKiriB1').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTelingaKiriB4status').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLTelingaKiriB4div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTelingaKiriB4').focus();
    $('#EMR_dr_IGD_P1_SLTelingaKiriB4status').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_SLTelingaKiriB4").focusout(function() {
  if(EMR_dr_IGD_P1_SLTelingaKiriB4.value == '')
  {
    alert("Lain-lain belum di isi, centang lainnya akan dihapus otomatis");
    $('#EMR_dr_IGD_P1_SLTelingaKiriB2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTelingaKiriB3').removeAttr('checked');
    EMR_dr_IGD_P1_SLTelingaKiriB1.checked = true;
    $("#EMR_dr_IGD_P1_SLTelingaKiriB4").val('');
    $("#EMR_dr_IGD_P1_SLTelingaKiriB4status").val('Tidak');
    $("#EMR_dr_IGD_P1_SLTelingaKiriB4div").toggleClass('collapse');
  }
});

//hidung
//nose septum
$('#EMR_dr_IGD_P1_SLHidungA1').click(function() {
  $('#EMR_dr_IGD_P1_SLHidungA2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLHidungA3').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLHidungA4status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLHidungA4div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLHidungA4').val('');
    $('#EMR_dr_IGD_P1_SLHidungA4status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLHidungA2').click(function() {
  $('#EMR_dr_IGD_P1_SLHidungA1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLHidungA3').click(function() {
  //$('#EMR_dr_IGD_P1_SLHidungA2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLHidungA1').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLHidungA4status').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLHidungA4div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLHidungA4').focus();
    $('#EMR_dr_IGD_P1_SLHidungA4status').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_SLHidungA4").focusout(function() {
  if(EMR_dr_IGD_P1_SLHidungA4.value == '')
  {
    alert("Lain-lain belum di isi, centang lainnya akan dihapus otomatis");
    $('#EMR_dr_IGD_P1_SLHidungA2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLHidungA3').removeAttr('checked');
    EMR_dr_IGD_P1_SLHidungA1.checked = true;
    $("#EMR_dr_IGD_P1_SLHidungA4").val('');
    $("#EMR_dr_IGD_P1_SLHidungA4status").val('Tidak');
    $("#EMR_dr_IGD_P1_SLHidungA4div").toggleClass('collapse');
  }
});

//nose konka
$('#EMR_dr_IGD_P1_SLHidungB1').click(function() {
  $('#EMR_dr_IGD_P1_SLHidungB2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLHidungB3').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLHidungB4').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLHidungB5status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLHidungB5div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLHidungB5').val('');
    $('#EMR_dr_IGD_P1_SLHidungB5status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLHidungB2').click(function() {
  $('#EMR_dr_IGD_P1_SLHidungB1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLHidungB3').click(function() {
  $('#EMR_dr_IGD_P1_SLHidungB1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLHidungB4').click(function() {
  $('#EMR_dr_IGD_P1_SLHidungB1').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLHidungB5status').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLHidungB5div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLHidungB5').focus();
    $('#EMR_dr_IGD_P1_SLHidungB5status').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_SLHidungB5").focusout(function() {
  if(EMR_dr_IGD_P1_SLHidungB5.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan hidung/nose konka dianggap normal");
    $('#EMR_dr_IGD_P1_SLHidungB2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLHidungB3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLHidungB4').removeAttr('checked');
    EMR_dr_IGD_P1_SLHidungB1.checked = true;
    $("#EMR_dr_IGD_P1_SLHidungB5").val('');
    $("#EMR_dr_IGD_P1_SLHidungB5status").val('Tidak');
    $("#EMR_dr_IGD_P1_SLHidungB5div").toggleClass('collapse');
  }
});

//tenggorokan
//faring
$('#EMR_dr_IGD_P1_SLTenggorokanA1').click(function() {
  $('#EMR_dr_IGD_P1_SLTenggorokanA2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLTenggorokanA3').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTenggorokanA4status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLTenggorokanA4div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTenggorokanA4').val('');
    $('#EMR_dr_IGD_P1_SLTenggorokanA4status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLTenggorokanA2').click(function() {
  $('#EMR_dr_IGD_P1_SLTenggorokanA1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLTenggorokanA3').click(function() {
  $('#EMR_dr_IGD_P1_SLTenggorokanA1').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTenggorokanA4status').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLTenggorokanA4div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTenggorokanA4').focus();
    $('#EMR_dr_IGD_P1_SLTenggorokanA4status').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_SLTenggorokanA4").focusout(function() {
  if(EMR_dr_IGD_P1_SLTenggorokanA4.value == '')
  {
    alert("Lain-lain belum di isi, centang lainnya akan dihapus otomatis");
    $('#EMR_dr_IGD_P1_SLTenggorokanA2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTenggorokanA3').removeAttr('checked');
    EMR_dr_IGD_P1_SLTenggorokanA1.checked = true;
    $("#EMR_dr_IGD_P1_SLTenggorokanA3").val('');
    $("#EMR_dr_IGD_P1_SLTenggorokanA4status").val('Tidak');
    $("#EMR_dr_IGD_P1_SLTenggorokanA4div").toggleClass('collapse');
  }
});

//amandel
$('#EMR_dr_IGD_P1_SLTenggorokanB1').click(function() {
  $('#EMR_dr_IGD_P1_SLTenggorokanB2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLTenggorokanB3').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLTenggorokanB4').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTenggorokanB5status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLTenggorokanB5div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTenggorokanB5').val('');
    $('#EMR_dr_IGD_P1_SLTenggorokanB5status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLTenggorokanB2').click(function() {
  $('#EMR_dr_IGD_P1_SLTenggorokanB1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLTenggorokanB3').click(function() {
  $('#EMR_dr_IGD_P1_SLTenggorokanB1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLTenggorokanB4').click(function() {
  $('#EMR_dr_IGD_P1_SLTenggorokanB1').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLTenggorokanB5status').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLTenggorokanB5div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLTenggorokanB5').focus();
    $('#EMR_dr_IGD_P1_SLTenggorokanB5status').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_SLTenggorokanB5").focusout(function() {
  if(EMR_dr_IGD_P1_SLTenggorokanB5.value == '')
  {
    alert("Lain-lain belum di isi, centang akan dihapus otomatis dan tonsil/amandel dianggap normal");
    $('#EMR_dr_IGD_P1_SLTenggorokanB2').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTenggorokanB3').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLTenggorokanB4').removeAttr('checked');
    EMR_dr_IGD_P1_SLTenggorokanB1.checked = true;
    $("#EMR_dr_IGD_P1_SLTenggorokanB5").val('');
    $("#EMR_dr_IGD_P1_SLTenggorokanB5status").val('Tidak');
    $("#EMR_dr_IGD_P1_SLTenggorokanB5div").toggleClass('collapse');
  }
});

//Mata
$('#EMR_dr_IGD_P1_SLMata').click(function() {
  $('#EMR_dr_IGD_P1_SLMata2').toggleClass('collapse');
  $("#EMR_dr_IGD_P1_AVOD").val('');
  $("#EMR_dr_IGD_P1_AVOS").val('');
  $("#EMR_dr_IGD_P1_GerakMataOD").val('Gerakan bebas ke semua arah');
  $("#EMR_dr_IGD_P1_GerakMataOS").val('Gerakan bebas ke semua arah');
  $("#EMR_dr_IGD_P1_PosisiMataOD").val('Normal');
  $("#EMR_dr_IGD_P1_PosisiMataOS").val('Normal');
  $("#EMR_dr_IGD_P1_PalpebraMataOD").val('Normal');
  $("#EMR_dr_IGD_P1_PalpebraMataOS").val('Normal');
  $("#EMR_dr_IGD_P1_KonjungtivaMataSilOD").val('inj silier +');
  $("#EMR_dr_IGD_P1_KonjungtivaMataSilOD").html('<b> inj silier - </b>');
  $("#EMR_dr_IGD_P1_KonjungtivaMataCojOD").val('inj coj -');
  $("#EMR_dr_IGD_P1_KonjungtivaMataCojOD").html('<b> inj coj - </b>');
  $("#EMR_dr_IGD_P1_KonjungtivaMataSilOS").val('inj silier +');
  $("#EMR_dr_IGD_P1_KonjungtivaMataSilOS").html('<b> inj silier - </b>');
  $("#EMR_dr_IGD_P1_KonjungtivaMataCojOS").val('inj coj -');
  $("#EMR_dr_IGD_P1_KonjungtivaMataCojOS").html('<b> inj coj - </b>');
  $("#EMR_dr_IGD_P1_KorneaMataOD").val('Jernih');
  $("#EMR_dr_IGD_P1_KorneaMataOS").val('Jernih');
  $("#EMR_dr_IGD_P1_BMDMataOD").val('Dalam');
  $("#EMR_dr_IGD_P1_BMDMataOS").val('Dalam');
  $("#EMR_dr_IGD_P1_IrisMataOD").val('Normal');
  $("#EMR_dr_IGD_P1_IrisMataOS").val('Normal');
  $("#EMR_dr_IGD_P1_pupilKanan2").val('3');
  $("#EMR_dr_IGD_P1_pupilKiri2").val('3');
  $("#EMR_dr_IGD_P1_pupilstat2").html('<center><b> Isokor </b></center>');
  $("#EMR_dr_IGD_P1_PupilMataOD").val('');
  $("#EMR_dr_IGD_P1_PupilMataOS").val('');
  $("#EMR_dr_IGD_P1_LensaMataOD").val('Jernih');
  $("#EMR_dr_IGD_P1_LensaMataOS").val('Jernih');
  $("#EMR_dr_IGD_P1_VitreusMataOD").val('Tidak Dilakukan Pemeriksaan');
  $("#EMR_dr_IGD_P1_VitreusMataOD").html('<b> Tidak Dilakukan</br>Pemeriksaan </b>');
  $("#EMR_dr_IGD_P1_VitreusMataOS").val('Tidak Dilakukan Pemeriksaan');
  $("#EMR_dr_IGD_P1_VitreusMataOS").html('<b> Tidak Dilakukan</br>Pemeriksaan </b>');
  $("#EMR_dr_IGD_P1_TIOMataOD").val('Tidak Dilakukan Pemeriksaan');
  $("#EMR_dr_IGD_P1_TIOMataOD").html('<b> Tidak Dilakukan</br>Pemeriksaan </b>');
  $("#EMR_dr_IGD_P1_TIOMataOS").val('Tidak Dilakukan Pemeriksaan');
  $("#EMR_dr_IGD_P1_TIOMataOS").html('<b> Tidak Dilakukan</br>Pemeriksaan </b>');
});

$('#EMR_dr_IGD_P1_KonjungtivaMataSilOD').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataSilOD').value == 'inj silier +')
  {
    $('#EMR_dr_IGD_P1_KonjungtivaMataSilOD').html('<b> inj silier - </b>');
    $('#EMR_dr_IGD_P1_KonjungtivaMataSilOD').val('inj silier -');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataSilOD').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataSilOD').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_KonjungtivaMataSilOD').html('<b> inj silier + </b>');
    $('#EMR_dr_IGD_P1_KonjungtivaMataSilOD').val('inj silier +');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataSilOD').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataSilOD').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_KonjungtivaMataCojOD').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataCojOD').value == 'inj coj +')
  {
    $('#EMR_dr_IGD_P1_KonjungtivaMataCojOD').html('<b> inj coj - </b>');
    $('#EMR_dr_IGD_P1_KonjungtivaMataCojOD').val('inj coj -');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataCojOD').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataCojOD').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_KonjungtivaMataCojOD').html('<b> inj coj + </b>');
    $('#EMR_dr_IGD_P1_KonjungtivaMataCojOD').val('inj coj +');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataCojOD').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataCojOD').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_KonjungtivaMataSilOS').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataSilOS').value == 'inj silier +')
  {
    $('#EMR_dr_IGD_P1_KonjungtivaMataSilOS').html('<b> inj silier - </b>');
    $('#EMR_dr_IGD_P1_KonjungtivaMataSilOS').val('inj silier -');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataSilOS').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataSilOS').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_KonjungtivaMataSilOS').html('<b> inj silier + </b>');
    $('#EMR_dr_IGD_P1_KonjungtivaMataSilOS').val('inj silier +');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataSilOS').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataSilOS').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_KonjungtivaMataCojOS').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataCojOS').value == 'inj coj +')
  {
    $('#EMR_dr_IGD_P1_KonjungtivaMataCojOS').html('<b> inj coj - </b>');
    $('#EMR_dr_IGD_P1_KonjungtivaMataCojOS').val('inj coj -');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataCojOS').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataCojOS').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_KonjungtivaMataCojOS').html('<b> inj coj + </b>');
    $('#EMR_dr_IGD_P1_KonjungtivaMataCojOS').val('inj coj +');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataCojOS').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_KonjungtivaMataCojOS').classList.add('green');
  }
});
/*
$('#EMR_dr_IGD_P1_KorneaMataOD').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_KorneaMataOD').value == 'Jernih')
  {
    $('#EMR_dr_IGD_P1_KorneaMataOD').html('<b> Epiteliopah + </b>');
    $('#EMR_dr_IGD_P1_KorneaMataOD').val('Epiteliopah +');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOD').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOD').classList.add('yellow');
  }
  else if(document.getElementById('EMR_dr_IGD_P1_KorneaMataOD').value == 'Epiteliopah +')
  {
    $('#EMR_dr_IGD_P1_KorneaMataOD').html('<b> Epiteliopah - </b>');
    $('#EMR_dr_IGD_P1_KorneaMataOD').val('Epiteliopah -');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOD').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOD').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_KorneaMataOD').html('<b> Jernih </b>');
    $('#EMR_dr_IGD_P1_KorneaMataOD').val('Jernih');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOD').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOD').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_KorneaMataOS').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_KorneaMataOS').value == 'Jernih')
  {
    $('#EMR_dr_IGD_P1_KorneaMataOS').html('<b> Epiteliopah + </b>');
    $('#EMR_dr_IGD_P1_KorneaMataOS').val('Epiteliopah +');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOS').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOS').classList.add('yellow');
  }
  else if(document.getElementById('EMR_dr_IGD_P1_KorneaMataOS').value == 'Epiteliopah +')
  {
    $('#EMR_dr_IGD_P1_KorneaMataOS').html('<b> Epiteliopah - </b>');
    $('#EMR_dr_IGD_P1_KorneaMataOS').val('Epiteliopah -');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOS').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOS').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_KorneaMataOS').html('<b> Jernih </b>');
    $('#EMR_dr_IGD_P1_KorneaMataOS').val('Jernih');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOS').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_KorneaMataOS').classList.add('green');
  }
});
*/
$('#EMR_dr_IGD_P1_VitreusMataOD').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_VitreusMataOD').value == 'Tidak Dilakukan Pemeriksaan')
  {
    $('#EMR_dr_IGD_P1_VitreusMataOD').html('<b> Refleks fundus + </b>');
    $('#EMR_dr_IGD_P1_VitreusMataOD').val('Refleks fundus +');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOD').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOD').classList.add('green');
  }
  else if(document.getElementById('EMR_dr_IGD_P1_VitreusMataOD').value == 'Refleks fundus +')
  {
    $('#EMR_dr_IGD_P1_VitreusMataOD').html('<b> Refleks fundus - </b>');
    $('#EMR_dr_IGD_P1_VitreusMataOD').val('Refleks fundus -');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOD').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOD').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_VitreusMataOD').html('<b> Tidak Dilakukan</br>Pemeriksaan </b>');
    $('#EMR_dr_IGD_P1_VitreusMataOD').val('Tidak Dilakukan Pemeriksaan');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOD').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOD').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_VitreusMataOS').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_VitreusMataOS').value == 'Tidak Dilakukan Pemeriksaan')
  {
    $('#EMR_dr_IGD_P1_VitreusMataOS').html('<b> Refleks fundus + </b>');
    $('#EMR_dr_IGD_P1_VitreusMataOS').val('Refleks fundus +');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOS').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOS').classList.add('green');
  }
  else if(document.getElementById('EMR_dr_IGD_P1_VitreusMataOS').value == 'Refleks fundus +')
  {
    $('#EMR_dr_IGD_P1_VitreusMataOS').html('<b> Refleks fundus - </b>');
    $('#EMR_dr_IGD_P1_VitreusMataOS').val('Refleks fundus -');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOS').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOS').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_VitreusMataOS').html('<b> Tidak Dilakukan</br>Pemeriksaan </b>');
    $('#EMR_dr_IGD_P1_VitreusMataOS').val('Tidak Dilakukan Pemeriksaan');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOS').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_VitreusMataOS').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_TIOMataOD').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_TIOMataOD').value == 'Tidak Dilakukan Pemeriksaan')
  {
    $('#EMR_dr_IGD_P1_TIOMataOD').html('<b> Normal </b>');
    $('#EMR_dr_IGD_P1_TIOMataOD').val('Normal');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOD').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOD').classList.add('green');
  }
  else if(document.getElementById('EMR_dr_IGD_P1_TIOMataOD').value == 'Normal')
  {
    $('#EMR_dr_IGD_P1_TIOMataOD').html('<b> Meningkat </b>');
    $('#EMR_dr_IGD_P1_TIOMataOD').val('Meningkat');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOD').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOD').classList.add('yellow');
  }
  else if(document.getElementById('EMR_dr_IGD_P1_TIOMataOD').value == 'Meningkat')
  {
    $('#EMR_dr_IGD_P1_TIOMataOD').html('<b> Menurun </b>');
    $('#EMR_dr_IGD_P1_TIOMataOD').val('Menurun');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOD').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOD').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_TIOMataOD').html('<b> Tidak Dilakukan</br>Pemeriksaan </b>');
    $('#EMR_dr_IGD_P1_TIOMataOD').val('Tidak Dilakukan Pemeriksaan');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOD').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOD').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_TIOMataOS').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_TIOMataOS').value == 'Tidak Dilakukan Pemeriksaan')
  {
    $('#EMR_dr_IGD_P1_TIOMataOS').html('<b> Normal </b>');
    $('#EMR_dr_IGD_P1_TIOMataOS').val('Normal');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOS').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOS').classList.add('green');
  }
  else if(document.getElementById('EMR_dr_IGD_P1_TIOMataOS').value == 'Normal')
  {
    $('#EMR_dr_IGD_P1_TIOMataOS').html('<b> Meningkat </b>');
    $('#EMR_dr_IGD_P1_TIOMataOS').val('Meningkat');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOS').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOS').classList.add('yellow');
  }
  else if(document.getElementById('EMR_dr_IGD_P1_TIOMataOS').value == 'Meningkat')
  {
    $('#EMR_dr_IGD_P1_TIOMataOS').html('<b> Menurun </b>');
    $('#EMR_dr_IGD_P1_TIOMataOS').val('Menurun');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOS').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOS').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_TIOMataOS').html('<b> Tidak Dilakukan</br>Pemeriksaan </b>');
    $('#EMR_dr_IGD_P1_TIOMataOS').val('Tidak Dilakukan Pemeriksaan');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOS').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_TIOMataOS').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_pupilKanan2').keyup(function() {
  if(document.getElementById('EMR_dr_IGD_P1_pupilKanan2').value == document.getElementById('EMR_dr_IGD_P1_pupilKiri2').value)
  {
    $('#EMR_dr_IGD_P1_pupilstat2').html('<center><b> Isokor </b></center>');
  }
  else
  {
    $('#EMR_dr_IGD_P1_pupilstat2').html('<center><b> Anisokor </b></center>');
  }
});

$('#EMR_dr_IGD_P1_pupilKiri2').keyup(function() {
  if(document.getElementById('EMR_dr_IGD_P1_pupilKanan2').value == document.getElementById('EMR_dr_IGD_P1_pupilKiri2').value)
  {
    $('#EMR_dr_IGD_P1_pupilstat2').html('<center><b> Isokor </b></center>');
  }
  else
  {
    $('#EMR_dr_IGD_P1_pupilstat2').html('<center><b> Anisokor </b></center>');
  }
});

//Tulang
$('#EMR_dr_IGD_P1_SLTulang').click(function() {
  $('#EMR_dr_IGD_P1_SLTulang1').toggleClass('collapse');
});

$('#EMR_dr_IGD_P1_btnVulnus').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnVulnus').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnVulnus').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnVulnus').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnVulnus').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnVulnus').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnVulnus').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnVulnus').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnVulnus').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnVulnus').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnSwelling').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnSwelling').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnSwelling').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnSwelling').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnSwelling').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnSwelling').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnSwelling').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnSwelling').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnSwelling').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnSwelling').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnHematom').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnHematom').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnHematom').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnHematom').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnHematom').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnHematom').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnHematom').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnHematom').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnHematom').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnHematom').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnNyeritekan').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnNyeritekan').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnNyeritekan').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnNyeritekan').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnNyeritekan').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnNyeritekan').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnNyeritekan').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnNyeritekan').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnNyeritekan').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnNyeritekan').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnPerubahanSuhu').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnPerubahanSuhu').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnPerubahanSuhu').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnPerubahanSuhu').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnPerubahanSuhu').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnPerubahanSuhu').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnPerubahanSuhu').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnPerubahanSuhu').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnPerubahanSuhu').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnPerubahanSuhu').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnKrepitasi').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnKrepitasi').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnKrepitasi').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnKrepitasi').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnKrepitasi').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnKrepitasi').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnKrepitasi').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnKrepitasi').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnKrepitasi').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnKrepitasi').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnHiperetesi').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnHiperetesi').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnHiperetesi').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnHiperetesi').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnHiperetesi').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnHiperetesi').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnHiperetesi').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnHiperetesi').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnHiperetesi').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnHiperetesi').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnROM').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnROM').value == '+')
  {
    $('#EMR_dr_IGD_P1_btnROM').html('<b> - </b>');
    $('#EMR_dr_IGD_P1_btnROM').val('-');
    document.getElementById('EMR_dr_IGD_P1_btnROM').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnROM').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnROM').html('<b> + </b>');
    $('#EMR_dr_IGD_P1_btnROM').val('+');
    document.getElementById('EMR_dr_IGD_P1_btnROM').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnROM').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_btnMove').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_btnMove').value == 'Bebas')
  {
    $('#EMR_dr_IGD_P1_btnMove').html('<b> Terbatas </b>');
    $('#EMR_dr_IGD_P1_btnMove').val('Terbatas');
    document.getElementById('EMR_dr_IGD_P1_btnMove').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_btnMove').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_btnMove').html('<b> Bebas </b>');
    $('#EMR_dr_IGD_P1_btnMove').val('Bebas');
    document.getElementById('EMR_dr_IGD_P1_btnMove').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_btnMove').classList.add('green');
  }
});

//bedah
$('#EMR_dr_IGD_P1_SLBedah').click(function() {
  $('#EMR_dr_IGD_P1_SLBedah1').toggleClass('collapse');
});

//rectum
$('#EMR_dr_IGD_P1_SLRec').click(function() {
  $('#EMR_dr_IGD_P1_SLRec2').toggleClass('collapse');
  $('#EMR_dr_IGD_P1_SLRectumA1').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLRectumA2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLRectumA3').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLRectumB1').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLRectumB2').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLRectumB3status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLRectumB3div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLRectumB3').val('');
    $('#EMR_dr_IGD_P1_SLRectumB3status').val('Tidak');
  }
  $('#EMR_dr_IGD_P1_SLRectumC1').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLRectumC2').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLRectumC3status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLRectumC3div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLRectumC3').val('');
    $('#EMR_dr_IGD_P1_SLRectumC3status').val('Tidak');
  }
  $('#EMR_dr_IGD_P1_SLRectumD1').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLRectumD2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLRectumE').val('');
});

//tonus
$('#EMR_dr_IGD_P1_SLRectumA1').click(function() {
  $('#EMR_dr_IGD_P1_SLRectumA2').removeAttr('checked');
  $('#EMR_dr_IGD_P1_SLRectumA3').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLRectumA2').click(function() {
  $('#EMR_dr_IGD_P1_SLRectumA1').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLRectumA3').click(function() {
  $('#EMR_dr_IGD_P1_SLRectumA1').removeAttr('checked');
});

//teraba
$('#EMR_dr_IGD_P1_SLRectumB1').click(function() {
  $('#EMR_dr_IGD_P1_SLRectumB2').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLRectumB3status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLRectumB3div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLRectumB3').val('');
    $('#EMR_dr_IGD_P1_SLRectumB3status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLRectumB2').click(function() {
  $('#EMR_dr_IGD_P1_SLRectumB1').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLRectumB3status').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLRectumB3div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLRectumB3').focus();
    $('#EMR_dr_IGD_P1_SLRectumB3status').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_SLRectumB3").focusout(function() {
  if(EMR_dr_IGD_P1_SLRectumB3.value == '')
  {
    alert("Isian belum di isi, centang akan dihapus otomatis");
    $('#EMR_dr_IGD_P1_SLRectumB2').removeAttr('checked');
    $("#EMR_dr_IGD_P1_SLRectumB3").val('');
    $("#EMR_dr_IGD_P1_SLRectumB3status").val('Tidak');
    $("#EMR_dr_IGD_P1_SLRectumB3div").toggleClass('collapse');
  }
});

//kosong
$('#EMR_dr_IGD_P1_SLRectumD1').click(function() {
  $('#EMR_dr_IGD_P1_SLRectumD2').removeAttr('checked');
});

$('#EMR_dr_IGD_P1_SLRectumD2').click(function() {
  $('#EMR_dr_IGD_P1_SLRectumD1').removeAttr('checked');
});

//nyeri
$('#EMR_dr_IGD_P1_SLRectumC1').click(function() {
  $('#EMR_dr_IGD_P1_SLRectumC2').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLRectumC3status').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLRectumC3div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLRectumC3').val('');
    $('#EMR_dr_IGD_P1_SLRectumC3status').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLRectumC2').click(function() {
  $('#EMR_dr_IGD_P1_SLRectumC1').removeAttr('checked');
  if(document.getElementById('EMR_dr_IGD_P1_SLRectumC3status').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLRectumC3div').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLRectumC3').focus();
    $('#EMR_dr_IGD_P1_SLRectumC3status').val('Ya');
  }
});

$("#EMR_dr_IGD_P1_SLRectumC3").focusout(function() {
  if(EMR_dr_IGD_P1_SLRectumC3.value == '')
  {
    alert("Isian belum di isi, centang akan dihapus otomatis");
    $('#EMR_dr_IGD_P1_SLRectumC2').removeAttr('checked');
    $("#EMR_dr_IGD_P1_SLRectumC3").val('');
    $("#EMR_dr_IGD_P1_SLRectumC3status").val('Tidak');
    $("#EMR_dr_IGD_P1_SLRectumC3div").toggleClass('collapse');
  }
});

//neurologis
$('#EMR_dr_IGD_P1_SLNeurologis').click(function() {
  $('#EMR_dr_IGD_P1_SLNeurologis1').toggleClass('collapse');
  $('#EMR_dr_IGD_P1_SLNeurologis2').val('');
});

//jiwa
$('#EMR_dr_IGD_P1_SLJiwa').click(function() {
  $('#EMR_dr_IGD_P1_SLJiwa1').toggleClass('collapse');
  $('#EMR_dr_IGD_P1_SLJiwa2').val('');
});

//kandungan
$('#EMR_dr_IGD_P1_SLKandungan').click(function() {
  $('#EMR_dr_IGD_P1_SLKandungan1').toggleClass('collapse');
  $('#EMR_dr_IGD_P1_SLKandungan2').val('');
});

//kulit
$('#EMR_dr_IGD_P1_SLKulit').click(function() {
  $('#EMR_dr_IGD_P1_SLKulit1').toggleClass('collapse');
  $('#EMR_dr_IGD_P1_SLKulit2').val('');
});

//obsgin
$('#EMR_dr_IGD_P1_SLObsgin').click(function() {
  $('#EMR_dr_IGD_P1_SLObsgin1').toggleClass('collapse');
  if(document.getElementById('EMR_dr_IGD_P1_SLObstetricStatus').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLObstetric2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLObstetric').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLObstetricStatus').val('Tidak');
  }
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisStatus').value == 'Ya')
  {
    $('#EMR_dr_IGD_P1_SLGinekologis2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLGinekologis').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLGinekologisStatus').val('Tidak');
  }
});

//obstetric
$('#EMR_dr_IGD_P1_SLObstetric').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLObstetricStatus').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLObstetric2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLObstetricStatus').val('Ya');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLObstetric2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLObstetric').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLObstetricStatus').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLObstetricbtnKetuban').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLObstetricbtnKetuban').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLObstetricKetubantxt2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLObstetricKetubantxt').focus();
    $('#EMR_dr_IGD_P1_SLObstetricbtnKetuban').html('-');
    $('#EMR_dr_IGD_P1_SLObstetricbtnKetuban').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLObstetricbtnKetuban').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLObstetricbtnKetuban').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLObstetricKetubantxt2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLObstetricKetubantxt').val('');
    $('#EMR_dr_IGD_P1_SLObstetricbtnKetuban').html('+');
    $('#EMR_dr_IGD_P1_SLObstetricbtnKetuban').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLObstetricbtnKetuban').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLObstetricbtnKetuban').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLObstetricleopoid4kon').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLObstetricleopoid4konStatus').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLObstetricleopoid4kon2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLObstetricleopoid4konStatus').val('Ya');
    if(document.getElementById('EMR_dr_IGD_P1_SLObstetricleopoid4devStatus').value == 'Ya')
    {
      $('#EMR_dr_IGD_P1_SLObstetricleopoid4dev2').toggleClass('collapse');
      $('#EMR_dr_IGD_P1_SLObstetricleopoid4devStatus').val('Tidak');
    }
  }
});

$('#EMR_dr_IGD_P1_SLObstetricleopoid4dev').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLObstetricleopoid4devStatus').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLObstetricleopoid4dev2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLObstetricleopoid4devStatus').val('Ya');
    if(document.getElementById('EMR_dr_IGD_P1_SLObstetricleopoid4konStatus').value == 'Ya')
    {
      $('#EMR_dr_IGD_P1_SLObstetricleopoid4kon2').toggleClass('collapse');
      $('#EMR_dr_IGD_P1_SLObstetricleopoid4konStatus').val('Tidak');
    }
  }
});

//ginekologi
$('#EMR_dr_IGD_P1_SLGinekologis').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisStatus').value == 'Tidak')
  {
    $('#EMR_dr_IGD_P1_SLGinekologis2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLGinekologisStatus').val('Ya');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologis2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLGinekologis').removeAttr('checked');
    $('#EMR_dr_IGD_P1_SLGinekologisStatus').val('Tidak');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnNyeTek').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeTek').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeTek').html('-');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeTek').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeTek').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeTek').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeTek').html('+');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeTek').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeTek').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeTek').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnBenjolan').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnBenjolan').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnBenjolan').html('-');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnBenjolan').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnBenjolan').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnBenjolan').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnBenjolan').html('+');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnBenjolan').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnBenjolan').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnBenjolan').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnDefmus').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnDefmus').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnDefmus').html('-');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnDefmus').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnDefmus').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnDefmus').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnDefmus').html('+');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnDefmus').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnDefmus').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnDefmus').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek').html('-');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek').html('+');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnFluksus').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnFluksus').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnFluksus').html('-');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnFluksus').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnFluksus').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnFluksus').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnFluksus').html('+');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnFluksus').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnFluksus').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnFluksus').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnFluor').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnFluor').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnFluor').html('-');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnFluor').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnFluor').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnFluor').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnFluor').html('+');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnFluor').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnFluor').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnFluor').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT').html('-');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT').html('+');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnMassa').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnMassa').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisMassatxt2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLGinekologisMassatxt').focus();
    $('#EMR_dr_IGD_P1_SLGinekologisbtnMassa').html('-');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnMassa').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnMassa').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnMassa').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisMassatxt2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLGinekologisMassatxt').val('');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnMassa').html('+');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnMassa').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnMassa').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnMassa').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnErosi').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnErosi').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisErositxt2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLGinekologisErositxt').focus();
    $('#EMR_dr_IGD_P1_SLGinekologisbtnErosi').html('-');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnErosi').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnErosi').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnErosi').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisErositxt2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLGinekologisErositxt').val('');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnErosi').html('+');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnErosi').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnErosi').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnErosi').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt').focus();
    $('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan').html('-');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt').val('');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan').html('+');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri').value == '+')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt').focus();
    $('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri').html('-');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri').val('-');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt2').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt').val('');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri').html('+');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri').val('+');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnSupel').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnSupel').value == 'Supel')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnSupel').html('Distensi');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnSupel').val('Distensi');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnSupel').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnSupel').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnSupel').html('Supel');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnSupel').val('Supel');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnSupel').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnSupel').classList.add('green');
  }
});

$('#EMR_dr_IGD_P1_SLGinekologisbtnUterus').click(function() {
  if(document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnUterus').value == 'Antefleksi')
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnUterus').html('Retrofleksi');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnUterus').val('Retrofleksi');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnUterus').classList.remove('green');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnUterus').classList.add('yellow');
  }
  else
  {
    $('#EMR_dr_IGD_P1_SLGinekologisbtnUterus').html('Antefleksi');
    $('#EMR_dr_IGD_P1_SLGinekologisbtnUterus').val('Antefleksi');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnUterus').classList.remove('yellow');
    document.getElementById('EMR_dr_IGD_P1_SLGinekologisbtnUterus').classList.add('green');
  }
});
//end halaman 3 menu 1

//simpan menu 1
$('#EMR_dr_IGD_P1_btnsimpan').click(function() {

  /*var KeluhUtama = '';
  var RSosial = '';

  if(document.getElementById('EMR_dr_IGD_P1_Keluhanutama1').checked == true)
  {
    KeluhUtama = KeluhUtama + $("input[name ='EMR_dr_IGD_P1_Keluhanutama1']:checked").val()+', ';
  }
  if(document.getElementById('EMR_dr_IGD_P1_Keluhanutama2').checked == true)
  {
    KeluhUtama = KeluhUtama + $("input[name ='EMR_dr_IGD_P1_Keluhanutama2']:checked").val()+', ';
  }
  if(document.getElementById('EMR_dr_IGD_P1_Keluhanutama3').checked == true)
  {
    KeluhUtama = KeluhUtama + $("input[name ='EMR_dr_IGD_P1_Keluhanutama3']:checked").val()+', ';
  }
  if(document.getElementById('EMR_dr_IGD_P1_Keluhanutama4').checked == true)
  {
    KeluhUtama = KeluhUtama + $("input[name ='EMR_dr_IGD_P1_Keluhanutama4']:checked").val()+', ';
  }
  if(document.getElementById('EMR_dr_IGD_P1_Keluhanutama5').checked == true)
  {
    KeluhUtama = KeluhUtama + $("input[name ='EMR_dr_IGD_P1_Keluhanutama5']:checked").val()+', ';
  }
  if(document.getElementById('EMR_dr_IGD_P1_Keluhanutama6').checked == true)
  {
    KeluhUtama = KeluhUtama + $("input[name ='EMR_dr_IGD_P1_Keluhanutama6']:checked").val()+', ';
  }
  if(document.getElementById('EMR_dr_IGD_P1_Keluhanutama7').checked == true)
  {
    KeluhUtama = KeluhUtama + $("input[name ='EMR_dr_IGD_P1_Keluhanutama7']:checked").val()+', ';
  }
  if(document.getElementById('EMR_dr_IGD_P1_Keluhanutama9').checked == true)
  {
    KeluhUtama = KeluhUtama + $("input[name ='EMR_dr_IGD_P1_Keluhanutama9']:checked").val()+', ';
  }
  if(document.getElementById('EMR_dr_IGD_P1_Keluhanutama8').value != '')
  {
    KeluhUtama = KeluhUtama + $("input[name ='EMR_dr_IGD_P1_Keluhanutama8']").val();
  }
  if(document.getElementById('EMR_dr_IGD_P1_RiwayatSosial1').checked == true)
  {
    RSosial = $("input[name ='EMR_dr_IGD_P1_RiwayatSosial1']:checked").val();
  }
  else
  {
    if(document.getElementById('EMR_dr_IGD_P1_RiwayatSosial2').checked == true)
    {
      RSosial = RSosial + $("input[name ='EMR_dr_IGD_P1_RiwayatSosial2']:checked").val()+', ';
    }
    if(document.getElementById('EMR_dr_IGD_P1_RiwayatSosial3').checked == true)
    {
      RSosial = RSosial + $("input[name ='EMR_dr_IGD_P1_RiwayatSosial3']:checked").val()+', ';
    }
    if(document.getElementById('EMR_dr_IGD_P1_RiwayatSosial4').value != '')
    {
      RSosial = RSosial + $("input[name ='EMR_dr_IGD_P1_RiwayatSosial4']").val();
    }
  }*/

  //Pemeriksaan Fisik
  var EMR_dr_IGD_P1_PeFi_2_CK_simpan = null;
  $('input[name="EMR_dr_IGD_P1_PeFi_2_CK"]:checked').each(function() {
    EMR_dr_IGD_P1_PeFi_2_CK_simpan = $('#EMR_dr_IGD_P1_PeFi_2_CK').val()
  });

  var EMR_dr_IGD_P1_PeFi_3_CK_simpan = null;
  $('input[name="EMR_dr_IGD_P1_PeFi_3_CK"]:checked').each(function() {
    EMR_dr_IGD_P1_PeFi_3_CK_simpan = $('#EMR_dr_IGD_P1_PeFi_3_CK').val()
  });

  var EMR_dr_IGD_P1_PeFi_5_CK_simpan = null;
  $('input[name="EMR_dr_IGD_P1_PeFi_5_CK"]:checked').each(function() {
    EMR_dr_IGD_P1_PeFi_5_CK_simpan = $('#EMR_dr_IGD_P1_PeFi_5_CK').val()
  });

  var EMR_dr_IGD_P1_PeFi_6_CK_simpan = null;
  $('input[name="EMR_dr_IGD_P1_PeFi_6_CK"]:checked').each(function() {
    EMR_dr_IGD_P1_PeFi_6_CK_simpan = $('#EMR_dr_IGD_P1_PeFi_6_CK').val()
  });

  var EMR_dr_IGD_P1_PeFi_7_CK_simpan = null;
  $('input[name="EMR_dr_IGD_P1_PeFi_7_CK"]:checked').each(function() {
    EMR_dr_IGD_P1_PeFi_7_CK_simpan = $('#EMR_dr_IGD_P1_PeFi_7_CK').val()
  });

  var EMR_dr_IGD_P1_CorSplit1 = $("input[name ='EMR_dr_IGD_P1_CorSplit1']:checked").val();

  var EMR_dr_IGD_P1_Cor2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_Cor2"]:checked').each(function() {
    EMR_dr_IGD_P1_Cor2_simpan = $('#EMR_dr_IGD_P1_Cor2').val()
  });

  var EMR_dr_IGD_P1_Cor3_simpan = null;
  $('input[name="EMR_dr_IGD_P1_Cor3"]:checked').each(function() {
    EMR_dr_IGD_P1_Cor3_simpan = $('#EMR_dr_IGD_P1_Cor3').val()
  });

  var EMR_dr_IGD_P1_CorReg = $("input[name ='EMR_dr_IGD_P1_CorReg']:checked").val();
  var EMR_dr_IGD_P1_btnAbdomen1 = $("input[name ='EMR_dr_IGD_P1_btnAbdomen1']:checked").val();
  var EMR_dr_IGD_P1_btnAbdomen7Radio = $("input[name ='EMR_dr_IGD_P1_btnAbdomen7Radio']:checked").val();
  var EMR_dr_IGD_P1_btnAbdomen8Radio = $("input[name ='EMR_dr_IGD_P1_btnAbdomen8Radio']:checked").val();

  var EMR_dr_IGD_P1_AbdomenLainChb_simpan = null;
  $('input[name="EMR_dr_IGD_P1_AbdomenLainChb"]:checked').each(function() {
    EMR_dr_IGD_P1_AbdomenLainChb_simpan = $('#EMR_dr_IGD_P1_AbdomenLainChb').val()
  });

  var EMR_dr_IGD_P1_CRT_simpan = $("input[name ='EMR_dr_IGD_P1_CRT']:checked").val();
  var EMR_dr_IGD_P1_Sensorik = $("input[name ='EMR_dr_IGD_P1_Sensorik']:checked").val();

  //Status Lokalis
  var EMR_dr_IGD_P1_SLBedah_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLBedah"]:checked').each(function() {
    EMR_dr_IGD_P1_SLBedah_simpan = $('#EMR_dr_IGD_P1_SLBedah').val()
  });

  var EMR_dr_IGD_P1_SLTulang_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTulang"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTulang_simpan = $('#EMR_dr_IGD_P1_SLTulang').val()
  });

  var EMR_dr_IGD_P1_SLRec_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLRec"]:checked').each(function() {
    EMR_dr_IGD_P1_SLRec_simpan = $('#EMR_dr_IGD_P1_SLRec').val()
  });

  var EMR_dr_IGD_P1_SLTHT_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTHT"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTHT_simpan = $('#EMR_dr_IGD_P1_SLTHT').val()
  });

  var EMR_dr_IGD_P1_SLMata_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLMata"]:checked').each(function() {
    EMR_dr_IGD_P1_SLMata_simpan = $('#EMR_dr_IGD_P1_SLMata').val()
  });

  var EMR_dr_IGD_P1_SLNeurologis_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLNeurologis"]:checked').each(function() {
    EMR_dr_IGD_P1_SLNeurologis_simpan = $('#EMR_dr_IGD_P1_SLNeurologis').val()
  });

  var EMR_dr_IGD_P1_SLJiwa_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLJiwa"]:checked').each(function() {
    EMR_dr_IGD_P1_SLJiwa_simpan = $('#EMR_dr_IGD_P1_SLJiwa').val()
  });

  var EMR_dr_IGD_P1_SLKulit_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLKulit"]:checked').each(function() {
    EMR_dr_IGD_P1_SLKulit_simpan = $('#EMR_dr_IGD_P1_SLKulit').val()
  });

  var EMR_dr_IGD_P1_SLObsgin_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLObsgin"]:checked').each(function() {
    EMR_dr_IGD_P1_SLObsgin_simpan = $('#EMR_dr_IGD_P1_SLObsgin').val()
  });

  var EMR_dr_IGD_P1_SLObstetric_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLObstetric"]:checked').each(function() {
    EMR_dr_IGD_P1_SLObstetric_simpan = $('#EMR_dr_IGD_P1_SLObstetric').val()
  });

  var EMR_dr_IGD_P1_SLGinekologis_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLGinekologis"]:checked').each(function() {
    EMR_dr_IGD_P1_SLGinekologis_simpan = $('#EMR_dr_IGD_P1_SLGinekologis').val()
  });

  var EMR_dr_IGD_P1_SLRectumA1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLRectumA1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLRectumA1_simpan = $('#EMR_dr_IGD_P1_SLRectumA1').val()
  });

  var EMR_dr_IGD_P1_SLRectumA2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLRectumA2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLRectumA2_simpan = $('#EMR_dr_IGD_P1_SLRectumA2').val()
  });

  var EMR_dr_IGD_P1_SLRectumA3_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLRectumA3"]:checked').each(function() {
    EMR_dr_IGD_P1_SLRectumA3_simpan = $('#EMR_dr_IGD_P1_SLRectumA3').val()
  });

  var EMR_dr_IGD_P1_SLRectumB1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLRectumB1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLRectumB1_simpan = $('#EMR_dr_IGD_P1_SLRectumB1').val()
  });

  var EMR_dr_IGD_P1_SLRectumB2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLRectumB2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLRectumB2_simpan = $('#EMR_dr_IGD_P1_SLRectumB2').val()
  });

  var EMR_dr_IGD_P1_SLRectumC1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLRectumC1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLRectumC1_simpan = $('#EMR_dr_IGD_P1_SLRectumC1').val()
  });

  var EMR_dr_IGD_P1_SLRectumC2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLRectumC2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLRectumC2_simpan = $('#EMR_dr_IGD_P1_SLRectumC2').val()
  });

  var EMR_dr_IGD_P1_SLRectumD1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLRectumD1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLRectumD1_simpan = $('#EMR_dr_IGD_P1_SLRectumD1').val()
  });

  var EMR_dr_IGD_P1_SLRectumD2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLRectumD2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLRectumD2_simpan = $('#EMR_dr_IGD_P1_SLRectumD2').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKananA1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKananA1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKananA1_simpan = $('#EMR_dr_IGD_P1_SLTelingaKananA1').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKananA2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKananA2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKananA2_simpan = $('#EMR_dr_IGD_P1_SLTelingaKananA2').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKananA3_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKananA3"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKananA3_simpan = $('#EMR_dr_IGD_P1_SLTelingaKananA3').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKananA4_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKananA4"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKananA4_simpan = $('#EMR_dr_IGD_P1_SLTelingaKananA4').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKananB1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKananB1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKananB1_simpan = $('#EMR_dr_IGD_P1_SLTelingaKananB1').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKananB2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKananB2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKananB2_simpan = $('#EMR_dr_IGD_P1_SLTelingaKananB2').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKananB3_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKananB3"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKananB3_simpan = $('#EMR_dr_IGD_P1_SLTelingaKananB3').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKiriA1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKiriA1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKiriA1_simpan = $('#EMR_dr_IGD_P1_SLTelingaKiriA1').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKiriA2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKiriA2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKiriA2_simpan = $('#EMR_dr_IGD_P1_SLTelingaKiriA2').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKiriA3_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKiriA3"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKiriA3_simpan = $('#EMR_dr_IGD_P1_SLTelingaKiriA3').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKiriA4_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKiriA4"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKiriA4_simpan = $('#EMR_dr_IGD_P1_SLTelingaKiriA4').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKiriB1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKiriB1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKiriB1_simpan = $('#EMR_dr_IGD_P1_SLTelingaKiriB1').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKiriB2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKiriB2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKiriB2_simpan = $('#EMR_dr_IGD_P1_SLTelingaKiriB2').val()
  });

  var EMR_dr_IGD_P1_SLTelingaKiriB3_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTelingaKiriB3"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTelingaKiriB3_simpan = $('#EMR_dr_IGD_P1_SLTelingaKiriB3').val()
  });

  var EMR_dr_IGD_P1_SLHidungA1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLHidungA1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLHidungA1_simpan = $('#EMR_dr_IGD_P1_SLHidungA1').val()
  });

  var EMR_dr_IGD_P1_SLHidungA2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLHidungA2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLHidungA2_simpan = $('#EMR_dr_IGD_P1_SLHidungA2').val()
  });

  var EMR_dr_IGD_P1_SLHidungA3_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLHidungA3"]:checked').each(function() {
    EMR_dr_IGD_P1_SLHidungA3_simpan = $('#EMR_dr_IGD_P1_SLHidungA3').val()
  });

  var EMR_dr_IGD_P1_SLHidungB1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLHidungB1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLHidungB1_simpan = $('#EMR_dr_IGD_P1_SLHidungB1').val()
  });

  var EMR_dr_IGD_P1_SLHidungB2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLHidungB2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLHidungB2_simpan = $('#EMR_dr_IGD_P1_SLHidungB2').val()
  });

  var EMR_dr_IGD_P1_SLHidungB3_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLHidungB3"]:checked').each(function() {
    EMR_dr_IGD_P1_SLHidungB3_simpan = $('#EMR_dr_IGD_P1_SLHidungB3').val()
  });

  var EMR_dr_IGD_P1_SLHidungB4_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLHidungB4"]:checked').each(function() {
    EMR_dr_IGD_P1_SLHidungB4_simpan = $('#EMR_dr_IGD_P1_SLHidungB4').val()
  });

  var EMR_dr_IGD_P1_SLTenggorokanA1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTenggorokanA1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTenggorokanA1_simpan = $('#EMR_dr_IGD_P1_SLTenggorokanA1').val()
  });

  var EMR_dr_IGD_P1_SLTenggorokanA2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTenggorokanA2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTenggorokanA2_simpan = $('#EMR_dr_IGD_P1_SLTenggorokanA2').val()
  });

  var EMR_dr_IGD_P1_SLTenggorokanA3_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTenggorokanA3"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTenggorokanA3_simpan = $('#EMR_dr_IGD_P1_SLTenggorokanA3').val()
  });

  var EMR_dr_IGD_P1_SLTenggorokanB1_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTenggorokanB1"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTenggorokanB1_simpan = $('#EMR_dr_IGD_P1_SLTenggorokanB1').val()
  });

  var EMR_dr_IGD_P1_SLTenggorokanB2_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTenggorokanB2"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTenggorokanB2_simpan = $('#EMR_dr_IGD_P1_SLTenggorokanB2').val()
  });

  var EMR_dr_IGD_P1_SLTenggorokanB3_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTenggorokanB3"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTenggorokanB3_simpan = $('#EMR_dr_IGD_P1_SLTenggorokanB3').val()
  });

  var EMR_dr_IGD_P1_SLTenggorokanB4_simpan = null;
  $('input[name="EMR_dr_IGD_P1_SLTenggorokanB4"]:checked').each(function() {
    EMR_dr_IGD_P1_SLTenggorokanB4_simpan = $('#EMR_dr_IGD_P1_SLTenggorokanB4').val()
  });

  var EMR_dr_IGD_P1_SLObstetricleopoid4 = $("input[name ='EMR_dr_IGD_P1_SLObstetricleopoid4']:checked").val();

  var form_data = {
    IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
    //EMR_dr_IGD_P1_KeluhUtama : KeluhUtama,

    //halaman 1
    EMR_dr_IGD_P1_KeluhUtama : $("#EMR_dr_IGD_P1_KeluhanUtama").val(),
    EMR_dr_IGD_P1_RiwayatPenySkrg : $("#EMR_dr_IGD_P1_RiwayatPenyakitSekarang").val(),
    /*MR_dr_IGD_P1_RiwayatPenySkrg : $("textarea[name ='EMR_dr_IGD_P1_RiwayatPenyakitSekarang']").val(),
    EMR_dr_IGD_P1_Survei1 : gangguanmental,
    EMR_dr_IGD_P1_RiwayatSosial : RSosial,
    EMR_dr_IGD_P1_RiwayatPenggunaanObat : $("textarea[name ='EMR_dr_IGD_P1_RiwayatPenggunaanObat']").val(),*/

    //halaman 2
    EMR_dr_IGD_P1_Kesadaran : $("#EMR_dr_IGD_P1_Kesadaran").val(),
    EMR_dr_IGD_P1_GCSe : $('#EMR_dr_IGD_P1_GCSe').val(),
    EMR_dr_IGD_P1_GCSv : $('#EMR_dr_IGD_P1_GCSv').val(),
    EMR_dr_IGD_P1_GCSm : $('#EMR_dr_IGD_P1_GCSm').val(),
    EMR_dr_IGD_P1_SpO2 : $('#EMR_dr_IGD_P1_SpO2').val(),
    EMR_dr_IGD_P1_TDSistolik : $('#EMR_dr_IGD_P1_TDSistolik').val(),
    EMR_dr_IGD_P1_TDDiastolik : $('#EMR_dr_IGD_P1_TDDiastolik').val(),
    EMR_dr_IGD_P1_suhutubuh : $('#EMR_dr_IGD_P1_suhutubuh').val(),
    EMR_dr_IGD_P1_nadi : $('#EMR_dr_IGD_P1_nadi').val(),
    EMR_dr_IGD_P1_NadiCH : $("input[name ='EMR_dr_IGD_P1_NadiCH']:checked").val(),
    EMR_dr_IGD_P1_respiratory : $('#EMR_dr_IGD_P1_respiratory').val(),
    EMR_dr_IGD_P1_RespiratoryCH : $("input[name ='EMR_dr_IGD_P1_RespiratoryCH']:checked").val(),
    EMR_dr_IGD_P1_lingkarkepala : $('#EMR_dr_IGD_P1_lingkarkepala').val(),
    EMR_dr_IGD_P1_TTVpupilstat: $('#EMR_dr_IGD_P1_TTVpupilstat').html(),
    EMR_dr_IGD_P1_TTVpupilKanan: $('#EMR_dr_IGD_P1_TTVpupilKanan').val(),
    EMR_dr_IGD_P1_TTVpupilKiri: $('#EMR_dr_IGD_P1_TTVpupilKiri').val(),
    EMR_dr_IGD_P1_TTVbtnCahayaKanan: $('#EMR_dr_IGD_P1_TTVbtnCahayaKanan').val(),
    EMR_dr_IGD_P1_TTVbtnCahayaKiri: $('#EMR_dr_IGD_P1_TTVbtnCahayaKiri').val(),
    EMR_dr_IGD_P1_TTVlain2: $('#EMR_dr_IGD_P1_TTVlain2').val(),

    //halaman 3
    EMR_dr_IGD_P1_PeFi_2_CK_simpan: EMR_dr_IGD_P1_PeFi_2_CK_simpan,
    EMR_dr_IGD_P1_PeFi_3_CK_simpan: EMR_dr_IGD_P1_PeFi_3_CK_simpan,
    EMR_dr_IGD_P1_PeFi_5_CK_simpan: EMR_dr_IGD_P1_PeFi_5_CK_simpan,
    EMR_dr_IGD_P1_PeFi_6_CK_simpan: EMR_dr_IGD_P1_PeFi_6_CK_simpan,
    EMR_dr_IGD_P1_PeFi_7_CK_simpan: EMR_dr_IGD_P1_PeFi_7_CK_simpan,
    EMR_dr_IGD_P1_btnAnemis: $('#EMR_dr_IGD_P1_btnAnemis').val(),
    EMR_dr_IGD_P1_btnIkterus: $('#EMR_dr_IGD_P1_btnIkterus').val(),
    EMR_dr_IGD_P1_btnCyanosis: $('#EMR_dr_IGD_P1_btnCyanosis').val(),
    EMR_dr_IGD_P1_btnDipsneo: $('#EMR_dr_IGD_P1_btnDipsneo').val(),
    EMR_dr_IGD_P1_btnUUK: $('#EMR_dr_IGD_P1_btnUUK').val(),
    EMR_dr_IGD_P1_btnUUB: $('#EMR_dr_IGD_P1_btnUUB').val(),
    EMR_dr_IGD_P1_pupilstat: $('#EMR_dr_IGD_P1_pupilstat').html(),
    EMR_dr_IGD_P1_pupilKanan: $('#EMR_dr_IGD_P1_pupilKanan').val(),
    EMR_dr_IGD_P1_pupilKiri: $('#EMR_dr_IGD_P1_pupilKiri').val(),
    EMR_dr_IGD_P1_btnCahayaKanan: $('#EMR_dr_IGD_P1_btnCahayaKanan').val(),
    EMR_dr_IGD_P1_btnCahayaKiri: $('#EMR_dr_IGD_P1_btnCahayaKiri').val(),
    EMR_dr_IGD_P1_KepalaLeher: $('#EMR_dr_IGD_P1_KepalaLeher').val(),
    EMR_dr_IGD_P1_CorStatus: $('#EMR_dr_IGD_P1_CorStatus').val(),
    EMR_dr_IGD_P1_CorSplit1:EMR_dr_IGD_P1_CorSplit1,
    EMR_dr_IGD_P1_Cor2_simpan:EMR_dr_IGD_P1_Cor2_simpan,
    EMR_dr_IGD_P1_Cor3_simpan:EMR_dr_IGD_P1_Cor3_simpan,
    EMR_dr_IGD_P1_CorReg:EMR_dr_IGD_P1_CorReg,
    EMR_dr_IGD_P1_btnMurmur: $('#EMR_dr_IGD_P1_btnMurmur').val(),
    EMR_dr_IGD_P1_btnMurmurText: $('#EMR_dr_IGD_P1_btnMurmurText').val(),
    EMR_dr_IGD_P1_btnGallop: $('#EMR_dr_IGD_P1_btnGallop').val(),
    EMR_dr_IGD_P1_btnVesikuler1: $('#EMR_dr_IGD_P1_btnVesikuler1').val(),
    EMR_dr_IGD_P1_btnVesikuler2: $('#EMR_dr_IGD_P1_btnVesikuler2').val(),
    EMR_dr_IGD_P1_btnVesikuler3: $('#EMR_dr_IGD_P1_btnVesikuler3').val(),
    EMR_dr_IGD_P1_btnVesikuler4: $('#EMR_dr_IGD_P1_btnVesikuler4').val(),
    EMR_dr_IGD_P1_btnVesikuler5: $('#EMR_dr_IGD_P1_btnVesikuler5').val(),
    EMR_dr_IGD_P1_btnVesikuler6: $('#EMR_dr_IGD_P1_btnVesikuler6').val(),
    EMR_dr_IGD_P1_btnRhonki1: $('#EMR_dr_IGD_P1_btnRhonki1').val(),
    EMR_dr_IGD_P1_btnRhonki2: $('#EMR_dr_IGD_P1_btnRhonki2').val(),
    EMR_dr_IGD_P1_btnRhonki3: $('#EMR_dr_IGD_P1_btnRhonki3').val(),
    EMR_dr_IGD_P1_btnRhonki4: $('#EMR_dr_IGD_P1_btnRhonki4').val(),
    EMR_dr_IGD_P1_btnRhonki5: $('#EMR_dr_IGD_P1_btnRhonki5').val(),
    EMR_dr_IGD_P1_btnRhonki6: $('#EMR_dr_IGD_P1_btnRhonki6').val(),
    EMR_dr_IGD_P1_btnWheezing1: $('#EMR_dr_IGD_P1_btnWheezing1').val(),
    EMR_dr_IGD_P1_btnWheezing2: $('#EMR_dr_IGD_P1_btnWheezing2').val(),
    EMR_dr_IGD_P1_btnWheezing3: $('#EMR_dr_IGD_P1_btnWheezing3').val(),
    EMR_dr_IGD_P1_btnWheezing4: $('#EMR_dr_IGD_P1_btnWheezing4').val(),
    EMR_dr_IGD_P1_btnWheezing5: $('#EMR_dr_IGD_P1_btnWheezing5').val(),
    EMR_dr_IGD_P1_btnWheezing6: $('#EMR_dr_IGD_P1_btnWheezing6').val(),
    EMR_dr_IGD_P1_btnretraksiKanan: $('#EMR_dr_IGD_P1_btnretraksiKanan').val(),
    EMR_dr_IGD_P1_btnretraksiKiri: $('#EMR_dr_IGD_P1_btnretraksiKiri').val(),
    EMR_dr_IGD_P1_ThoraxCorLain: $('#EMR_dr_IGD_P1_ThoraxCorLain').val(),
    EMR_dr_IGD_P1_btnAbdomen1: EMR_dr_IGD_P1_btnAbdomen1,
    EMR_dr_IGD_P1_btnAbdomen1E: $('#EMR_dr_IGD_P1_btnAbdomen1E').val(),
    EMR_dr_IGD_P1_btnAbdomen2: $('#EMR_dr_IGD_P1_btnAbdomen2').val(),
    EMR_dr_IGD_P1_btnAbdomen3: $('#EMR_dr_IGD_P1_btnAbdomen3').val(),
    EMR_dr_IGD_P1_btnAbdomen4: $('#EMR_dr_IGD_P1_btnAbdomen4').val(),
    EMR_dr_IGD_P1_btnAbdomen5: $('#EMR_dr_IGD_P1_btnAbdomen5').val(),
    EMR_dr_IGD_P1_btnAbdomen6: $('#EMR_dr_IGD_P1_btnAbdomen6').val(),
    EMR_dr_IGD_P1_btnAbdomen7Radio: EMR_dr_IGD_P1_btnAbdomen7Radio,
    EMR_dr_IGD_P1_btnAbdomen7C: $('#EMR_dr_IGD_P1_btnAbdomen7C').val(),
    EMR_dr_IGD_P1_btnAbdomen8Radio: EMR_dr_IGD_P1_btnAbdomen8Radio,
    EMR_dr_IGD_P1_btnAbdomen8C: $('#EMR_dr_IGD_P1_btnAbdomen8C').val(),
    EMR_dr_IGD_P1_AbdomenLainChb_simpan: EMR_dr_IGD_P1_AbdomenLainChb_simpan,
    EMR_dr_IGD_P1_btnAbdomen9: $('#EMR_dr_IGD_P1_btnAbdomen9').val(),
    EMR_dr_IGD_P1_btnAbdomen10: $('#EMR_dr_IGD_P1_btnAbdomen10').val(),
    EMR_dr_IGD_P1_btnAbdomen11: $('#EMR_dr_IGD_P1_btnAbdomen11').val(),
    EMR_dr_IGD_P1_btnAbdomenText1: $('#EMR_dr_IGD_P1_btnAbdomenText1').val(),
    EMR_dr_IGD_P1_btnAbdomen12: $('#EMR_dr_IGD_P1_btnAbdomen12').val(),
    EMR_dr_IGD_P1_btnAbdomen13: $('#EMR_dr_IGD_P1_btnAbdomen13').val(),
    EMR_dr_IGD_P1_btnAbdomen14: $('#EMR_dr_IGD_P1_btnAbdomen14').val(),
    EMR_dr_IGD_P1_btnAbdomen15: $('#EMR_dr_IGD_P1_btnAbdomen15').val(),
    EMR_dr_IGD_P1_btnAbdomen16: $('#EMR_dr_IGD_P1_btnAbdomen16').val(),
    EMR_dr_IGD_P1_btnAbdomen17: $('#EMR_dr_IGD_P1_btnAbdomen17').val(),
    EMR_dr_IGD_P1_btnAbdomen18: $('#EMR_dr_IGD_P1_btnAbdomen18').val(),
    EMR_dr_IGD_P1_btnAbdomen19: $('#EMR_dr_IGD_P1_btnAbdomen19').val(),
    EMR_dr_IGD_P1_btnAbdomen20: $('#EMR_dr_IGD_P1_btnAbdomen20').val(),
    EMR_dr_IGD_P1_btnEkstremitas1: $('#EMR_dr_IGD_P1_btnEkstremitas1').val(),
    EMR_dr_IGD_P1_btnEkstremitas2: $('#EMR_dr_IGD_P1_btnEkstremitas2').val(),
    EMR_dr_IGD_P1_btnEkstremitas3: $('#EMR_dr_IGD_P1_btnEkstremitas3').val(),
    EMR_dr_IGD_P1_btnEkstremitas4: $('#EMR_dr_IGD_P1_btnEkstremitas4').val(),
    EMR_dr_IGD_P1_btnEkstremitas9: $('#EMR_dr_IGD_P1_btnEkstremitas9').val(),
    EMR_dr_IGD_P1_btnEkstremitas10: $('#EMR_dr_IGD_P1_btnEkstremitas10').val(),
    EMR_dr_IGD_P1_btnEkstremitas11: $('#EMR_dr_IGD_P1_btnEkstremitas11').val(),
    EMR_dr_IGD_P1_btnEkstremitas12: $('#EMR_dr_IGD_P1_btnEkstremitas12').val(),
    EMR_dr_IGD_P1_CRT_simpan:EMR_dr_IGD_P1_CRT_simpan,
    EMR_dr_IGD_P1_EkstremitasLainTXT: $('#EMR_dr_IGD_P1_EkstremitasLainTXT').val(),
    EMR_dr_IGD_P1_Neu_Motorik1: $('#EMR_dr_IGD_P1_Neu_Motorik1').val(),
    EMR_dr_IGD_P1_Neu_Motorik2: $('#EMR_dr_IGD_P1_Neu_Motorik2').val(),
    EMR_dr_IGD_P1_Neu_Motorik3: $('#EMR_dr_IGD_P1_Neu_Motorik3').val(),
    EMR_dr_IGD_P1_Neu_Motorik4: $('#EMR_dr_IGD_P1_Neu_Motorik4').val(),
    EMR_dr_IGD_P1_Sensorik: EMR_dr_IGD_P1_Sensorik,
    EMR_dr_IGD_P1_Sensorik7: $('#EMR_dr_IGD_P1_Sensorik7').val(),
    EMR_dr_IGD_P1_Neu_Lain: $('#EMR_dr_IGD_P1_Neu_Lain').val(),

    //halaman 4
    EMR_dr_IGD_P1_SLBedah_simpan: EMR_dr_IGD_P1_SLBedah_simpan,
    EMR_dr_IGD_P1_SLTulang_simpan: EMR_dr_IGD_P1_SLTulang_simpan,
    EMR_dr_IGD_P1_SLRec_simpan: EMR_dr_IGD_P1_SLRec_simpan,
    EMR_dr_IGD_P1_SLTHT_simpan: EMR_dr_IGD_P1_SLTHT_simpan,
    EMR_dr_IGD_P1_SLMata_simpan: EMR_dr_IGD_P1_SLMata_simpan,
    EMR_dr_IGD_P1_SLNeurologis_simpan: EMR_dr_IGD_P1_SLNeurologis_simpan,
    EMR_dr_IGD_P1_SLJiwa_simpan: EMR_dr_IGD_P1_SLJiwa_simpan,
    EMR_dr_IGD_P1_SLKulit_simpan: EMR_dr_IGD_P1_SLKulit_simpan,
    EMR_dr_IGD_P1_SLObsgin_simpan: EMR_dr_IGD_P1_SLObsgin_simpan,
    EMR_dr_IGD_P1_SLObstetric_simpan: EMR_dr_IGD_P1_SLObstetric_simpan,
    EMR_dr_IGD_P1_SLGinekologis_simpan: EMR_dr_IGD_P1_SLGinekologis_simpan,
    EMR_dr_IGD_P1_SLRectumA1_simpan: EMR_dr_IGD_P1_SLRectumA1_simpan,
    EMR_dr_IGD_P1_SLRectumA2_simpan: EMR_dr_IGD_P1_SLRectumA2_simpan,
    EMR_dr_IGD_P1_SLRectumA3_simpan: EMR_dr_IGD_P1_SLRectumA3_simpan,
    EMR_dr_IGD_P1_SLRectumB1_simpan: EMR_dr_IGD_P1_SLRectumB1_simpan,
    EMR_dr_IGD_P1_SLRectumB2_simpan: EMR_dr_IGD_P1_SLRectumB2_simpan,
    EMR_dr_IGD_P1_SLRectumB3: $('#EMR_dr_IGD_P1_SLRectumB3').val(),
    EMR_dr_IGD_P1_SLRectumC1_simpan: EMR_dr_IGD_P1_SLRectumC1_simpan,
    EMR_dr_IGD_P1_SLRectumC2_simpan: EMR_dr_IGD_P1_SLRectumC2_simpan,
    EMR_dr_IGD_P1_SLRectumC3: $('#EMR_dr_IGD_P1_SLRectumC3').val(),
    EMR_dr_IGD_P1_SLRectumD1_simpan: EMR_dr_IGD_P1_SLRectumD1_simpan,
    EMR_dr_IGD_P1_SLRectumD2_simpan: EMR_dr_IGD_P1_SLRectumD2_simpan,
    EMR_dr_IGD_P1_SLRectumE: $('#EMR_dr_IGD_P1_SLRectumE').val(),
    EMR_dr_IGD_P1_SLTelingaKananA1_simpan: EMR_dr_IGD_P1_SLTelingaKananA1_simpan,
    EMR_dr_IGD_P1_SLTelingaKananA2_simpan: EMR_dr_IGD_P1_SLTelingaKananA2_simpan,
    EMR_dr_IGD_P1_SLTelingaKananA3_simpan: EMR_dr_IGD_P1_SLTelingaKananA3_simpan,
    EMR_dr_IGD_P1_SLTelingaKananA4_simpan: EMR_dr_IGD_P1_SLTelingaKananA4_simpan,
    EMR_dr_IGD_P1_SLTelingaKananA5: $('#EMR_dr_IGD_P1_SLTelingaKananA5').val(),
    EMR_dr_IGD_P1_SLTelingaKananB1_simpan: EMR_dr_IGD_P1_SLTelingaKananB1_simpan,
    EMR_dr_IGD_P1_SLTelingaKananB2_simpan: EMR_dr_IGD_P1_SLTelingaKananB2_simpan,
    EMR_dr_IGD_P1_SLTelingaKananB3_simpan: EMR_dr_IGD_P1_SLTelingaKananB3_simpan,
    EMR_dr_IGD_P1_SLTelingaKananB4: $('#EMR_dr_IGD_P1_SLTelingaKananB4').val(),
    EMR_dr_IGD_P1_SLTelingaKiriA1_simpan: EMR_dr_IGD_P1_SLTelingaKiriA1_simpan,
    EMR_dr_IGD_P1_SLTelingaKiriA2_simpan: EMR_dr_IGD_P1_SLTelingaKiriA2_simpan,
    EMR_dr_IGD_P1_SLTelingaKiriA3_simpan: EMR_dr_IGD_P1_SLTelingaKiriA3_simpan,
    EMR_dr_IGD_P1_SLTelingaKiriA4_simpan: EMR_dr_IGD_P1_SLTelingaKiriA4_simpan,
    EMR_dr_IGD_P1_SLTelingaKiriA5: $('#EMR_dr_IGD_P1_SLTelingaKiriA5').val(),
    EMR_dr_IGD_P1_SLTelingaKiriB1_simpan: EMR_dr_IGD_P1_SLTelingaKiriB1_simpan,
    EMR_dr_IGD_P1_SLTelingaKiriB2_simpan: EMR_dr_IGD_P1_SLTelingaKiriB2_simpan,
    EMR_dr_IGD_P1_SLTelingaKiriB3_simpan: EMR_dr_IGD_P1_SLTelingaKiriB3_simpan,
    EMR_dr_IGD_P1_SLTelingaKiriB4: $('#EMR_dr_IGD_P1_SLTelingaKiriB4').val(),
    EMR_dr_IGD_P1_SLHidungA1_simpan: EMR_dr_IGD_P1_SLHidungA1_simpan,
    EMR_dr_IGD_P1_SLHidungA2_simpan: EMR_dr_IGD_P1_SLHidungA2_simpan,
    EMR_dr_IGD_P1_SLHidungA3_simpan: EMR_dr_IGD_P1_SLHidungA3_simpan,
    EMR_dr_IGD_P1_SLHidungA4: $('#EMR_dr_IGD_P1_SLHidungA4').val(),
    EMR_dr_IGD_P1_SLHidungB1_simpan: EMR_dr_IGD_P1_SLHidungB1_simpan,
    EMR_dr_IGD_P1_SLHidungB2_simpan: EMR_dr_IGD_P1_SLHidungB2_simpan,
    EMR_dr_IGD_P1_SLHidungB3_simpan: EMR_dr_IGD_P1_SLHidungB3_simpan,
    EMR_dr_IGD_P1_SLHidungB4_simpan: EMR_dr_IGD_P1_SLHidungB4_simpan,
    EMR_dr_IGD_P1_SLHidungB5: $('#EMR_dr_IGD_P1_SLHidungB5').val(),
    EMR_dr_IGD_P1_SLTenggorokanA1_simpan: EMR_dr_IGD_P1_SLTenggorokanA1_simpan,
    EMR_dr_IGD_P1_SLTenggorokanA2_simpan: EMR_dr_IGD_P1_SLTenggorokanA2_simpan,
    EMR_dr_IGD_P1_SLTenggorokanA3_simpan: EMR_dr_IGD_P1_SLTenggorokanA3_simpan,
    EMR_dr_IGD_P1_SLTenggorokanA4: $('#EMR_dr_IGD_P1_SLTenggorokanA4').val(),
    EMR_dr_IGD_P1_SLTenggorokanB1_simpan: EMR_dr_IGD_P1_SLTenggorokanB1_simpan,
    EMR_dr_IGD_P1_SLTenggorokanB2_simpan: EMR_dr_IGD_P1_SLTenggorokanB2_simpan,
    EMR_dr_IGD_P1_SLTenggorokanB3_simpan: EMR_dr_IGD_P1_SLTenggorokanB3_simpan,
    EMR_dr_IGD_P1_SLTenggorokanB4_simpan: EMR_dr_IGD_P1_SLTenggorokanB4_simpan,
    EMR_dr_IGD_P1_AVOD_simpan: $('#EMR_dr_IGD_P1_AVOD').val(),
    EMR_dr_IGD_P1_AVOS_simpan: $('#EMR_dr_IGD_P1_AVOS').val(),
    EMR_dr_IGD_P1_GerakMataOD: $('#EMR_dr_IGD_P1_GerakMataOD').val(),
    EMR_dr_IGD_P1_GerakMataOS: $('#EMR_dr_IGD_P1_GerakMataOS').val(),
    EMR_dr_IGD_P1_PosisiMataOD: $('#EMR_dr_IGD_P1_PosisiMataOD').val(),
    EMR_dr_IGD_P1_PosisiMataOS: $('#EMR_dr_IGD_P1_PosisiMataOS').val(),
    EMR_dr_IGD_P1_PalpebraMataOD: $('#EMR_dr_IGD_P1_PalpebraMataOD').val(),
    EMR_dr_IGD_P1_PalpebraMataOS: $('#EMR_dr_IGD_P1_PalpebraMataOS').val(),
    EMR_dr_IGD_P1_KonjungtivaMataSilOD: $('#EMR_dr_IGD_P1_KonjungtivaMataSilOD').val(),
    EMR_dr_IGD_P1_KonjungtivaMataCojOD: $('#EMR_dr_IGD_P1_KonjungtivaMataCojOD').val(),
    EMR_dr_IGD_P1_KonjungtivaMataCojOS: $('#EMR_dr_IGD_P1_KonjungtivaMataCojOS').val(),
    EMR_dr_IGD_P1_KonjungtivaMataSilOS: $('#EMR_dr_IGD_P1_KonjungtivaMataSilOS').val(),
    EMR_dr_IGD_P1_KorneaMataOD: $('#EMR_dr_IGD_P1_KorneaMataOD').val(),
    EMR_dr_IGD_P1_KorneaMataOS: $('#EMR_dr_IGD_P1_KorneaMataOS').val(),
    EMR_dr_IGD_P1_BMDMataOD: $('#EMR_dr_IGD_P1_BMDMataOD').val(),
    EMR_dr_IGD_P1_BMDMataOS: $('#EMR_dr_IGD_P1_BMDMataOS').val(),
    EMR_dr_IGD_P1_IrisMataOD: $('#EMR_dr_IGD_P1_IrisMataOD').val(),
    EMR_dr_IGD_P1_IrisMataOS: $('#EMR_dr_IGD_P1_IrisMataOS').val(),
    EMR_dr_IGD_P1_pupilKanan2: $('#EMR_dr_IGD_P1_pupilKanan2').val(),
    EMR_dr_IGD_P1_pupilKiri2: $('#EMR_dr_IGD_P1_pupilKiri2').val(),
    EMR_dr_IGD_P1_PupilMataOD: $('#EMR_dr_IGD_P1_PupilMataOD').val(),
    EMR_dr_IGD_P1_pupilstat2: $('#EMR_dr_IGD_P1_pupilstat2').html(),
    EMR_dr_IGD_P1_PupilMataOS: $('#EMR_dr_IGD_P1_PupilMataOS').val(),
    EMR_dr_IGD_P1_LensaMataOD: $('#EMR_dr_IGD_P1_LensaMataOD').val(),
    EMR_dr_IGD_P1_LensaMataOS: $('#EMR_dr_IGD_P1_LensaMataOS').val(),
    EMR_dr_IGD_P1_VitreusMataOD: $('#EMR_dr_IGD_P1_VitreusMataOD').val(),
    EMR_dr_IGD_P1_VitreusMataOS: $('#EMR_dr_IGD_P1_VitreusMataOS').val(),
    EMR_dr_IGD_P1_TIOMataOD: $('#EMR_dr_IGD_P1_TIOMataOD').val(),
    EMR_dr_IGD_P1_TIOMataOS: $('#EMR_dr_IGD_P1_TIOMataOS').val(),
    EMR_dr_IGD_P1_SLNeurologis2: $('#EMR_dr_IGD_P1_SLNeurologis2').val(),
    EMR_dr_IGD_P1_SLJiwa2: $('#EMR_dr_IGD_P1_SLJiwa2').val(),
    EMR_dr_IGD_P1_SLKulit2: $('#EMR_dr_IGD_P1_SLKulit2').val(),
    EMR_dr_IGD_P1_SLObstetricInspeksi: $('#EMR_dr_IGD_P1_SLObstetricInspeksi').val(),
    EMR_dr_IGD_P1_SLObstetrictfu: $('#EMR_dr_IGD_P1_SLObstetrictfu').val(),
    EMR_dr_IGD_P1_SLObstetriclp: $('#EMR_dr_IGD_P1_SLObstetriclp').val(),
    EMR_dr_IGD_P1_SLObstetrichis: $('#EMR_dr_IGD_P1_SLObstetrichis').val(),
    EMR_dr_IGD_P1_SLObstetricKekuatan: $('#EMR_dr_IGD_P1_SLObstetricKekuatan').val(),
    EMR_dr_IGD_P1_SLObstetrictbbj: $('#EMR_dr_IGD_P1_SLObstetrictbbj').val(),
    EMR_dr_IGD_P1_SLObstetricleopoid1: $('#EMR_dr_IGD_P1_SLObstetricleopoid1').val(),
    EMR_dr_IGD_P1_SLObstetricleopoid2: $('#EMR_dr_IGD_P1_SLObstetricleopoid2').val(),
    EMR_dr_IGD_P1_SLObstetricleopoid3: $('#EMR_dr_IGD_P1_SLObstetricleopoid3').val(),
    EMR_dr_IGD_P1_SLObstetricleopoid4: EMR_dr_IGD_P1_SLObstetricleopoid4,
    EMR_dr_IGD_P1_SLObstetricleopoid4konKanan: $('#EMR_dr_IGD_P1_SLObstetricleopoid4konKanan').val(),
    EMR_dr_IGD_P1_SLObstetricleopoid4konKiri: $('#EMR_dr_IGD_P1_SLObstetricleopoid4konKiri').val(),
    EMR_dr_IGD_P1_SLObstetricleopoid4devKanan: $('#EMR_dr_IGD_P1_SLObstetricleopoid4devKanan').val(),
    EMR_dr_IGD_P1_SLObstetricleopoid4devKiri: $('#EMR_dr_IGD_P1_SLObstetricleopoid4devKiri').val(),
    EMR_dr_IGD_P1_SLObstetricpembukaan: $('#EMR_dr_IGD_P1_SLObstetricpembukaan').val(),
    EMR_dr_IGD_P1_SLObstetricpenipisan: $('#EMR_dr_IGD_P1_SLObstetricpenipisan').val(),
    EMR_dr_IGD_P1_SLObstetricbtnKetuban: $('#EMR_dr_IGD_P1_SLObstetricbtnKetuban').val(),
    EMR_dr_IGD_P1_SLObstetricKetubantxt: $('#EMR_dr_IGD_P1_SLObstetricKetubantxt').val(),
    EMR_dr_IGD_P1_SLObstetricrabahodge: $('#EMR_dr_IGD_P1_SLObstetricrabahodge').val(),
    EMR_dr_IGD_P1_SLObstetricDJJ: $('#EMR_dr_IGD_P1_SLObstetricDJJ').val(),
    EMR_dr_IGD_P1_SLObstetricLain2: $('#EMR_dr_IGD_P1_SLObstetricLain2').val(),
    EMR_dr_IGD_P1_SLGinekologisInspeksi: $('#EMR_dr_IGD_P1_SLGinekologisInspeksi').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnSupel: $('#EMR_dr_IGD_P1_SLGinekologisbtnSupel').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnNyeTek: $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeTek').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnBenjolan: $('#EMR_dr_IGD_P1_SLGinekologisbtnBenjolan').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnDefmus: $('#EMR_dr_IGD_P1_SLGinekologisbtnDefmus').val(),
    EMR_dr_IGD_P1_SLGinekologisPalpasiTxt: $('#EMR_dr_IGD_P1_SLGinekologisPalpasiTxt').val(),
    EMR_dr_IGD_P1_SLGinekologisPerkusiTxt: $('#EMR_dr_IGD_P1_SLGinekologisPerkusiTxt').val(),
    EMR_dr_IGD_P1_SLGinekologisAuskultasiTxt: $('#EMR_dr_IGD_P1_SLGinekologisAuskultasiTxt').val(),
    EMR_dr_IGD_P1_SLGinekologisPelvikTxt: $('#EMR_dr_IGD_P1_SLGinekologisPelvikTxt').val(),
    EMR_dr_IGD_P1_SLGinekologisDindingvagTxt: $('#EMR_dr_IGD_P1_SLGinekologisDindingvagTxt').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek: $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnMassa: $('#EMR_dr_IGD_P1_SLGinekologisbtnMassa').val(),
    EMR_dr_IGD_P1_SLGinekologisMassatxt: $('#EMR_dr_IGD_P1_SLGinekologisMassatxt').val(),
    EMR_dr_IGD_P1_SLGinekologisPorUkTxt: $('#EMR_dr_IGD_P1_SLGinekologisPorUkTxt').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnFluksus: $('#EMR_dr_IGD_P1_SLGinekologisbtnFluksus').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnFluor: $('#EMR_dr_IGD_P1_SLGinekologisbtnFluor').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnErosi: $('#EMR_dr_IGD_P1_SLGinekologisbtnErosi').val(),
    EMR_dr_IGD_P1_SLGinekologisErositxt: $('#EMR_dr_IGD_P1_SLGinekologisErositxt').val(),
    EMR_dr_IGD_P1_SLGinekologisOUEtxt: $('#EMR_dr_IGD_P1_SLGinekologisOUEtxt').val(),
    EMR_dr_IGD_P1_SLGinekologisInspektxt: $('#EMR_dr_IGD_P1_SLGinekologisInspektxt').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnUterus: $('#EMR_dr_IGD_P1_SLGinekologisbtnUterus').val(),
    EMR_dr_IGD_P1_SLGinekologisBentukVTtxt: $('#EMR_dr_IGD_P1_SLGinekologisBentukVTtxt').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT: $('#EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT').val(),
    EMR_dr_IGD_P1_SLGinekologisUkurantxt: $('#EMR_dr_IGD_P1_SLGinekologisUkurantxt').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan: $('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan').val(),
    EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt: $('#EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt').val(),
    EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri: $('#EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri').val(),
    EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt: $('#EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt').val(),
    EMR_dr_IGD_P1_SLGinekologisKayumDougtxt: $('#EMR_dr_IGD_P1_SLGinekologisKayumDougtxt').val(),
    EMR_dr_IGD_P1_SLGinekologisVTtxt: $('#EMR_dr_IGD_P1_SLGinekologisVTtxt').val(),
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_dr_P1",
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


/*var _beratbadan_dr_P2 = document.getElementById('EMR_dr_IGD_P2_beratbadan');
var _tinggibadan_dr_P2 = document.getElementById('EMR_dr_IGD_P2_tinggibadan');
var _Nilai_BMI_dr_P2 = document.getElementById('EMR_dr_IGD_P2_Nilai_BMI');
var _Kategori_BMI_dr_P2 = document.getElementById('EMR_dr_IGD_P2_Kategori_BMI');
var P2_hal= 1;
var P2_hal2 = 0;
var P2_halaman1 = 'Ya';
var P2_halaman2 = 'Ya';
var P2_halaman3 = 'Ya';
var P2_halaman4 = 'Ya';
var P2_halaman5 = 'Ya';
var P2_halaman6 = 'Ya';*/

var EMR_dr_IGD_P2_radiologi_lain = document.getElementById('EMR_dr_IGD_P2_radiologi_lain');
var EMR_dr_IGD_P2_Gigi_Satuan = document.getElementById('EMR_dr_IGD_P2_Gigi_Satuan');
var EMR_dr_IGD_P2_laboratorium_lain = document.getElementById('EMR_dr_IGD_P2_laboratorium_lain');

$('#EMR_dr_IGD_P2_btnmenu').click(function() {
  document.getElementById('EMR_dr_IGD_P2_btnmenu').disabled = true;
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_dr_IGD_statverHal').value = 'P2';
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});

//radiologi
$('#EMR_dr_IGD_P2_Radiologi').click(function() {
  $('#EMR_dr_IGD_P2_Radiologi2').toggleClass('collapse');
});

$('#EMR_dr_IGD_P2_reset_radio').on('click', function () {
  if(EMR_dr_IGD_P2_radiologi_lain.checked == true)
  {
      $('#EMR_dr_IGD_P2_radiologi_lain1').toggleClass('collapse');
  }
  if (EMR_dr_IGD_P2_Gigi_Satuan.checked == true)
  {
    $('#EMR_dr_IGD_P2_Gigi_Satuan1').toggleClass('collapse');
  }

  $('#alert-msg-EMR_dr_IGD_P2_isianRadiologi').empty();

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

$('#EMR_dr_IGD_P2_ok_radio').on('click', function () {
  if(EMR_dr_IGD_P2_radiologi_lain.checked == true)
  {
    if (document.getElementById('EMR_dr_IGD_P2_radiologi_lain2').value == '')
    {
      $('#alert-msg-EMR_dr_IGD_P2_isianRadiologi').html('<div class="alert alert-danger">Radiologi Lain Masih Kosong, Harap Diisi Terlebih Dahulu!!</div>');
    }
    else
    {
      if(EMR_dr_IGD_P2_Gigi_Satuan.checked == true)
      {
        if (document.getElementById('EMR_dr_IGD_P2_Gigi_Satuan2').value == '')
        {
          $('#alert-msg-EMR_dr_IGD_P2_isianRadiologi').html('<div class="alert alert-danger">Gigi Masih Kosong, Harap Diisi Terlebih Dahulu!!</div>');
        }
        else
        {
          var EMR_dr_IGD_P2_Radiologi_simpan = null;
          $('input[name="EMR_dr_IGD_P2_Radiologi"]:checked').each(function() {
            EMR_dr_IGD_P2_Radiologi_simpan = $('#EMR_dr_IGD_P2_Radiologi').val();
          });

          var EMR_dr_IGD_P2_Laborat_simpan = null;
          $('input[name="EMR_dr_IGD_P2_Laborat"]:checked').each(function() {
            EMR_dr_IGD_P2_Laborat_simpan = $('#EMR_dr_IGD_P2_Laborat').val();
          });

          var EMR_dr_IGD_P2_radiologi_checkbox_simpan = []
          $("input[name='EMR_dr_IGD_P2_radiologi_checkbox[]']:checked").each(function ()
          {
              EMR_dr_IGD_P2_radiologi_checkbox_simpan.push($(this).val());
          });

          var EMR_dr_IGD_P2_radiologi_lain_simpan = null;
          $('input[name="EMR_dr_IGD_P2_radiologi_lain"]:checked').each(function() {
            EMR_dr_IGD_P2_radiologi_lain_simpan = $('#EMR_dr_IGD_P2_radiologi_lain').val();
          });

          var EMR_dr_IGD_P2_Gigi_Satuan_simpan = null;
          $('input[name="EMR_dr_IGD_P2_Gigi_Satuan"]:checked').each(function() {
            EMR_dr_IGD_P2_Gigi_Satuan_simpan = $('#EMR_dr_IGD_P2_Gigi_Satuan').val();
          });

          var form_data = {
            IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
            EMR_dr_IGD_NOREG : $('#EMR_dr_IGD_NOREG_2').val(),
            EMR_dr_IGD_NORM : $('#EMR_dr_IGD_NORM_2').val(),
            EMR_dr_IGD_P2_radiologi_checkbox_simpan:EMR_dr_IGD_P2_radiologi_checkbox_simpan,
            EMR_dr_IGD_P2_radiologi_lain_simpan:EMR_dr_IGD_P2_radiologi_lain_simpan,
            EMR_dr_IGD_P2_radiologi_lain2:$('#EMR_dr_IGD_P2_radiologi_lain2').val(),
            EMR_dr_IGD_P2_Gigi_Satuan_simpan:EMR_dr_IGD_P2_Gigi_Satuan_simpan,
            EMR_dr_IGD_P2_Gigi_Satuan2:$('#EMR_dr_IGD_P2_Gigi_Satuan2').val(),
          };
          $.ajax({
            url: base_url + "igd/btnsimpanIGD_dr_P2_RAD",
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
      }
      else
      {
        var EMR_dr_IGD_P2_Radiologi_simpan = null;
        $('input[name="EMR_dr_IGD_P2_Radiologi"]:checked').each(function() {
          EMR_dr_IGD_P2_Radiologi_simpan = $('#EMR_dr_IGD_P2_Radiologi').val();
        });

        var EMR_dr_IGD_P2_Laborat_simpan = null;
        $('input[name="EMR_dr_IGD_P2_Laborat"]:checked').each(function() {
          EMR_dr_IGD_P2_Laborat_simpan = $('#EMR_dr_IGD_P2_Laborat').val();
        });

        var EMR_dr_IGD_P2_radiologi_checkbox_simpan = []
        $("input[name='EMR_dr_IGD_P2_radiologi_checkbox[]']:checked").each(function ()
        {
            EMR_dr_IGD_P2_radiologi_checkbox_simpan.push($(this).val());
        });

        var EMR_dr_IGD_P2_radiologi_lain_simpan = null;
        $('input[name="EMR_dr_IGD_P2_radiologi_lain"]:checked').each(function() {
          EMR_dr_IGD_P2_radiologi_lain_simpan = $('#EMR_dr_IGD_P2_radiologi_lain').val();
        });

        var EMR_dr_IGD_P2_Gigi_Satuan_simpan = null;
        $('input[name="EMR_dr_IGD_P2_Gigi_Satuan"]:checked').each(function() {
          EMR_dr_IGD_P2_Gigi_Satuan_simpan = $('#EMR_dr_IGD_P2_Gigi_Satuan').val();
        });

        var form_data = {
          IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
          EMR_dr_IGD_NOREG : $('#EMR_dr_IGD_NOREG_2').val(),
          EMR_dr_IGD_NORM : $('#EMR_dr_IGD_NORM_2').val(),
          EMR_dr_IGD_P2_radiologi_checkbox_simpan:EMR_dr_IGD_P2_radiologi_checkbox_simpan,
          EMR_dr_IGD_P2_radiologi_lain_simpan:EMR_dr_IGD_P2_radiologi_lain_simpan,
          EMR_dr_IGD_P2_radiologi_lain2:$('#EMR_dr_IGD_P2_radiologi_lain2').val(),
          EMR_dr_IGD_P2_Gigi_Satuan_simpan:EMR_dr_IGD_P2_Gigi_Satuan_simpan,
          EMR_dr_IGD_P2_Gigi_Satuan2:$('#EMR_dr_IGD_P2_Gigi_Satuan2').val(),
        };
        $.ajax({
          url: base_url + "igd/btnsimpanIGD_dr_P2_RAD",
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
    }
  }
  else if(EMR_dr_IGD_P2_Gigi_Satuan.checked == true)
  {
    if (document.getElementById('EMR_dr_IGD_P2_Gigi_Satuan2').value == '')
    {
      $('#alert-msg-EMR_dr_IGD_P2_isianRadiologi').html('<div class="alert alert-danger">Gigi Masih Kosong, Harap Diisi Terlebih Dahulu!!</div>');
    }
    else
    {
      var EMR_dr_IGD_P2_Radiologi_simpan = null;
      $('input[name="EMR_dr_IGD_P2_Radiologi"]:checked').each(function() {
        EMR_dr_IGD_P2_Radiologi_simpan = $('#EMR_dr_IGD_P2_Radiologi').val();
      });

      var EMR_dr_IGD_P2_Laborat_simpan = null;
      $('input[name="EMR_dr_IGD_P2_Laborat"]:checked').each(function() {
        EMR_dr_IGD_P2_Laborat_simpan = $('#EMR_dr_IGD_P2_Laborat').val();
      });

      var EMR_dr_IGD_P2_radiologi_checkbox_simpan = []
      $("input[name='EMR_dr_IGD_P2_radiologi_checkbox[]']:checked").each(function ()
      {
          EMR_dr_IGD_P2_radiologi_checkbox_simpan.push($(this).val());
      });

      var EMR_dr_IGD_P2_radiologi_lain_simpan = null;
      $('input[name="EMR_dr_IGD_P2_radiologi_lain"]:checked').each(function() {
        EMR_dr_IGD_P2_radiologi_lain_simpan = $('#EMR_dr_IGD_P2_radiologi_lain').val();
      });

      var EMR_dr_IGD_P2_Gigi_Satuan_simpan = null;
      $('input[name="EMR_dr_IGD_P2_Gigi_Satuan"]:checked').each(function() {
        EMR_dr_IGD_P2_Gigi_Satuan_simpan = $('#EMR_dr_IGD_P2_Gigi_Satuan').val();
      });

      var form_data = {
        IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
        EMR_dr_IGD_NOREG : $('#EMR_dr_IGD_NOREG_2').val(),
        EMR_dr_IGD_NORM : $('#EMR_dr_IGD_NORM_2').val(),
        EMR_dr_IGD_P2_radiologi_checkbox_simpan:EMR_dr_IGD_P2_radiologi_checkbox_simpan,
        EMR_dr_IGD_P2_radiologi_lain_simpan:EMR_dr_IGD_P2_radiologi_lain_simpan,
        EMR_dr_IGD_P2_radiologi_lain2:$('#EMR_dr_IGD_P2_radiologi_lain2').val(),
        EMR_dr_IGD_P2_Gigi_Satuan_simpan:EMR_dr_IGD_P2_Gigi_Satuan_simpan,
        EMR_dr_IGD_P2_Gigi_Satuan2:$('#EMR_dr_IGD_P2_Gigi_Satuan2').val(),
      };
      $.ajax({
        url: base_url + "igd/btnsimpanIGD_dr_P2_RAD",
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
  }
  else
  {
    var EMR_dr_IGD_P2_Radiologi_simpan = null;
    $('input[name="EMR_dr_IGD_P2_Radiologi"]:checked').each(function() {
      EMR_dr_IGD_P2_Radiologi_simpan = $('#EMR_dr_IGD_P2_Radiologi').val();
    });

    var EMR_dr_IGD_P2_Laborat_simpan = null;
    $('input[name="EMR_dr_IGD_P2_Laborat"]:checked').each(function() {
      EMR_dr_IGD_P2_Laborat_simpan = $('#EMR_dr_IGD_P2_Laborat').val();
    });

    var EMR_dr_IGD_P2_radiologi_checkbox_simpan = []
    $("input[name='EMR_dr_IGD_P2_radiologi_checkbox[]']:checked").each(function ()
    {
        EMR_dr_IGD_P2_radiologi_checkbox_simpan.push($(this).val());
    });

    var EMR_dr_IGD_P2_radiologi_lain_simpan = null;
    $('input[name="EMR_dr_IGD_P2_radiologi_lain"]:checked').each(function() {
      EMR_dr_IGD_P2_radiologi_lain_simpan = $('#EMR_dr_IGD_P2_radiologi_lain').val();
    });

    var EMR_dr_IGD_P2_Gigi_Satuan_simpan = null;
    $('input[name="EMR_dr_IGD_P2_Gigi_Satuan"]:checked').each(function() {
      EMR_dr_IGD_P2_Gigi_Satuan_simpan = $('#EMR_dr_IGD_P2_Gigi_Satuan').val();
    });

    var form_data = {
      IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
      EMR_dr_IGD_NOREG : $('#EMR_dr_IGD_NOREG_2').val(),
      EMR_dr_IGD_NORM : $('#EMR_dr_IGD_NORM_2').val(),
      EMR_dr_IGD_P2_radiologi_checkbox_simpan:EMR_dr_IGD_P2_radiologi_checkbox_simpan,
      EMR_dr_IGD_P2_radiologi_lain_simpan:EMR_dr_IGD_P2_radiologi_lain_simpan,
      EMR_dr_IGD_P2_radiologi_lain2:$('#EMR_dr_IGD_P2_radiologi_lain2').val(),
      EMR_dr_IGD_P2_Gigi_Satuan_simpan:EMR_dr_IGD_P2_Gigi_Satuan_simpan,
      EMR_dr_IGD_P2_Gigi_Satuan2:$('#EMR_dr_IGD_P2_Gigi_Satuan2').val(),
    };
    $.ajax({
      url: base_url + "igd/btnsimpanIGD_dr_P2_RAD",
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
});

$('#EMR_dr_IGD_P2_radiologi_lain').click(function() {
    $('#EMR_dr_IGD_P2_radiologi_lain1').toggleClass('collapse');
    $('#EMR_dr_IGD_P2_radiologi_lain2').val('');
});

$('#EMR_dr_IGD_P2_Gigi_Satuan').click(function() {
    $('#EMR_dr_IGD_P2_Gigi_Satuan1').toggleClass('collapse');
    $('#EMR_dr_IGD_P2_Gigi_Satuan2').val('');
});

//laborat
$('#EMR_dr_IGD_P2_Laborat').click(function() {
  $('#EMR_dr_IGD_P2_Laborat2').toggleClass('collapse');
});

$('#EMR_dr_IGD_P2_reset_laboratorium').on('click', function () {
  if(EMR_dr_IGD_P2_laboratorium_lain.checked == true)
  {
      $('#EMR_dr_IGD_P2_laboratorium_lain1').toggleClass('collapse');
  }

  $('#alert-msg-EMR_dr_IGD_P2_isianLaborat').empty();

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

$('#EMR_dr_IGD_P2_ok_laboratorium').on('click', function () {
  if(EMR_dr_IGD_P2_laboratorium_lain.checked == true)
  {
    if (document.getElementById('EMR_dr_IGD_P2_laboratorium_lain2').value == '')
    {
      $('#alert-msg-EMR_dr_IGD_P2_isianLaborat').html('<div class="alert alert-danger">Laboratorium Lain Masih Kosong, Harap Diisi Terlebih Dahulu!!</div>');
    }
    else
    {
      var EMR_dr_IGD_P2_laboratorium_checkbox_simpan = []
      $("input[name='EMR_dr_IGD_P2_laboratorium_checkbox[]']:checked").each(function ()
      {
          EMR_dr_IGD_P2_laboratorium_checkbox_simpan.push($(this).val());
      });

      var EMR_dr_IGD_P2_laboratorium_lain_simpan = null;
      $('input[name="EMR_dr_IGD_P2_laboratorium_lain"]:checked').each(function() {
        EMR_dr_IGD_P2_laboratorium_lain_simpan = $('#EMR_dr_IGD_P2_laboratorium_lain').val()
      });

      var form_data = {
        IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
        EMR_dr_IGD_NOREG : $('#EMR_dr_IGD_NOREG_2').val(),
        EMR_dr_IGD_NORM : $('#EMR_dr_IGD_NORM_2').val(),
        EMR_dr_IGD_P2_laboratorium_checkbox_simpan:EMR_dr_IGD_P2_laboratorium_checkbox_simpan,
        EMR_dr_IGD_P2_laboratorium_lain_simpan:EMR_dr_IGD_P2_laboratorium_lain_simpan,
        EMR_dr_IGD_P2_laboratorium_lain2:$('#EMR_dr_IGD_P2_laboratorium_lain2').val(),
      };
      $.ajax({
        url: base_url + "igd/btnsimpanIGD_dr_P2_LAB",
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
  }
  else
  {
    var EMR_dr_IGD_P2_laboratorium_checkbox_simpan = []
    $("input[name='EMR_dr_IGD_P2_laboratorium_checkbox[]']:checked").each(function ()
    {
        EMR_dr_IGD_P2_laboratorium_checkbox_simpan.push($(this).val());
    });

    var EMR_dr_IGD_P2_laboratorium_lain_simpan = null;
    $('input[name="EMR_dr_IGD_P2_laboratorium_lain"]:checked').each(function() {
      EMR_dr_IGD_P2_laboratorium_lain_simpan = $('#EMR_dr_IGD_P2_laboratorium_lain').val()
    });

    var form_data = {
      IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
      EMR_dr_IGD_NOREG : $('#EMR_dr_IGD_NOREG_2').val(),
      EMR_dr_IGD_NORM : $('#EMR_dr_IGD_NORM_2').val(),
      EMR_dr_IGD_P2_laboratorium_checkbox_simpan:EMR_dr_IGD_P2_laboratorium_checkbox_simpan,
      EMR_dr_IGD_P2_laboratorium_lain_simpan:EMR_dr_IGD_P2_laboratorium_lain_simpan,
      EMR_dr_IGD_P2_laboratorium_lain2:$('#EMR_dr_IGD_P2_laboratorium_lain2').val(),
    };
    $.ajax({
      url: base_url + "igd/btnsimpanIGD_dr_P2_LAB",
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
});

$('#EMR_dr_IGD_P2_laboratorium_lain').click(function() {
    $('#EMR_dr_IGD_P2_laboratorium_lain1').toggleClass('collapse');
    $('#EMR_dr_IGD_P2_laboratorium_lain2').val('');
});

//simpan menu 2
/*$('#EMR_dr_IGD_P2_btnsimpan').click(function() {

  var EMR_dr_IGD_P2_Radiologi_simpan = null;
  $('input[name="EMR_dr_IGD_P2_Radiologi"]:checked').each(function() {
    EMR_dr_IGD_P2_Radiologi_simpan = $('#EMR_dr_IGD_P2_Radiologi').val();
  });

  var EMR_dr_IGD_P2_Laborat_simpan = null;
  $('input[name="EMR_dr_IGD_P2_Laborat"]:checked').each(function() {
    EMR_dr_IGD_P2_Laborat_simpan = $('#EMR_dr_IGD_P2_Laborat').val();
  });

  var EMR_dr_IGD_P2_radiologi_checkbox_simpan = []
  $("input[name='EMR_dr_IGD_P2_radiologi_checkbox[]']:checked").each(function ()
  {
      EMR_dr_IGD_P2_radiologi_checkbox_simpan.push($(this).val());
  });

  var EMR_dr_IGD_P2_radiologi_lain_simpan = null;
  $('input[name="EMR_dr_IGD_P2_radiologi_lain"]:checked').each(function() {
    EMR_dr_IGD_P2_radiologi_lain_simpan = $('#EMR_dr_IGD_P2_radiologi_lain').val();
  });

  var EMR_dr_IGD_P2_Gigi_Satuan_simpan = null;
  $('input[name="EMR_dr_IGD_P2_Gigi_Satuan"]:checked').each(function() {
    EMR_dr_IGD_P2_Gigi_Satuan_simpan = $('#EMR_dr_IGD_P2_Gigi_Satuan').val();
  });

  var EMR_dr_IGD_P2_laboratorium_checkbox_simpan = []
  $("input[name='EMR_dr_IGD_P2_laboratorium_checkbox[]']:checked").each(function ()
  {
      EMR_dr_IGD_P2_laboratorium_checkbox_simpan.push($(this).val());
  });

  var EMR_dr_IGD_P2_laboratorium_lain_simpan = null;
  $('input[name="EMR_dr_IGD_P2_laboratorium_lain"]:checked').each(function() {
    EMR_dr_IGD_P2_laboratorium_lain_simpan = $('#EMR_dr_IGD_P2_laboratorium_lain').val()
  });

  var form_data = {
    IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
    EMR_dr_IGD_NOREG : $('#EMR_dr_IGD_NOREG_2').val(),
    EMR_dr_IGD_NORM : $('#EMR_dr_IGD_NORM_2').val(),
    EMR_dr_IGD_P2_Radiologi_simpan:EMR_dr_IGD_P2_Radiologi_simpan,
    EMR_dr_IGD_P2_Laborat_simpan:EMR_dr_IGD_P2_Laborat_simpan,
    EMR_dr_IGD_P2_radiologi_checkbox_simpan:EMR_dr_IGD_P2_radiologi_checkbox_simpan,
    EMR_dr_IGD_P2_radiologi_lain_simpan:EMR_dr_IGD_P2_radiologi_lain_simpan,
    EMR_dr_IGD_P2_radiologi_lain2:$('#EMR_dr_IGD_P2_radiologi_lain2').val(),
    EMR_dr_IGD_P2_Gigi_Satuan_simpan:EMR_dr_IGD_P2_Gigi_Satuan_simpan,
    EMR_dr_IGD_P2_Gigi_Satuan2:$('#EMR_dr_IGD_P2_Gigi_Satuan2').val(),
    EMR_dr_IGD_P2_laboratorium_checkbox_simpan:EMR_dr_IGD_P2_laboratorium_checkbox_simpan,
    EMR_dr_IGD_P2_laboratorium_lain_simpan:EMR_dr_IGD_P2_laboratorium_lain_simpan,
    EMR_dr_IGD_P2_laboratorium_lain2:$('#EMR_dr_IGD_P2_laboratorium_lain2').val(),
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_dr_P2",
    type: 'POST',
    data: form_data,
    success: function(msg)
    {
      if(msg == 'TERUJI')
      {
        $('#modalLompatMenuIGD').modal('show');
      }
      else if(msg == 'NOTERUJI')
      {
        $('#alert-msg-EMR_dr_IGD_P2_belumpilih').html('<div class="alert alert-danger">Data Belum Dipilih</div>');
      }
    }
  });
  return false;
});*/

//================================= END MENU 2 =================================
//==============================================================================
//================================ START MENU 3 ================================

$('#EMR_dr_IGD_P3_btnmenu').click(function() {
  document.getElementById('EMR_dr_IGD_P3_btnmenu').disabled = true;
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_dr_IGD_statverHal').value = 'P3';
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});

$(document).ready(function() {
  enable_autocomplete_diagnosis($('.TampilanDiagnosis'));
  var before = $('#EMR_dr_IGD_P3_TambahDiagnosisKerja');
  $('#EMR_dr_IGD_P3_ButtonTambahDiagnosisKerja').click(function() {
      var clone = $('#EMR_dr_IGD_P3_TemplateDiagnosisKerja').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P3_TemplateDiagnosisKerja').append(
        '<div class="col-md-10">'+
          '<div class="form-group form-md-line-input form-md-floating-label">'+
            '<input type="text" class="form-control TampilanDiagnosis" name="EMR_dr_IGD_P3_DiagnosisKerja[]">'+
            '<input type="hidden" name="EMR_dr_IGD_P3_SimpanIdDiagnosisKerja[]" class="form-control id_diagnosis"/>'+
            '<input type="hidden" name="EMR_dr_IGD_P3_SimpanNamaDiagnosisKerja[]" class="form-control nama_diagnosis"/>'+
            '<label for="form_control_1">Diagnosis Kerja</label>'+
            '<span class="help-block">Masukkan Diagnosis Kerja</span>'+
          '</div>'+
        '</div>'+
        '<div class="col-md-1">'+
          '<button class="btn red-haze EMR_dr_IGD_P3_ButtonHapusDiagnosisKerja" type="button">x</button>'+
        '</div>');
      enable_autocomplete_diagnosis($('.TampilanDiagnosis'));
      // insert duplicate before button div
      before.before(clone);
  });
  $( "body" ).on('click', '.EMR_dr_IGD_P3_ButtonHapusDiagnosisKerja', function(){
      $(this).closest('#EMR_dr_IGD_P3_TemplateDiagnosisKerja').remove();
  });
});

$(document).ready(function() {
  enable_autocomplete_diagnosis($('.TampilanDiagnosis'));
  var before = $('#EMR_dr_IGD_P3_TambahDiagnosisKomplikasi');
  $('#EMR_dr_IGD_P3_ButtonTambahDiagnosisKomplikasi').click(function() {
      var clone = $('#EMR_dr_IGD_P3_TemplateDiagnosisKomplikasi').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P3_TemplateDiagnosisKomplikasi').append(
        '<div class="col-md-10">'+
          '<div class="form-group form-md-line-input form-md-floating-label">'+
            '<input type="text" class="form-control TampilanDiagnosis" name="EMR_dr_IGD_P3_DiagnosisKomplikasi[]">'+
            '<input type="hidden" name="EMR_dr_IGD_P3_SimpanIdDiagnosisKomplikasi[]" class="form-control id_diagnosis"/>'+
            '<input type="hidden" name="EMR_dr_IGD_P3_SimpanNamaDiagnosisKomplikasi[]" class="form-control nama_diagnosis"/>'+
            '<label for="form_control_1">Diagnosis Komplikasi</label>'+
            '<span class="help-block">Masukkan Diagnosis Komplikasi</span>'+
          '</div>'+
        '</div>'+
        '<div class="col-md-1">'+
          '<button class="btn red-haze EMR_dr_IGD_P3_ButtonHapusDiagnosisKomplikasi" type="button">x</button>'+
        '</div>');
      enable_autocomplete_diagnosis($('.TampilanDiagnosis'));
      // insert duplicate before button div
      before.before(clone);
  });
  $( "body" ).on('click', '.EMR_dr_IGD_P3_ButtonHapusDiagnosisKomplikasi', function(){
      $(this).closest('#EMR_dr_IGD_P3_TemplateDiagnosisKomplikasi').remove();
  });
});

$(document).ready(function() {
  enable_autocomplete_diagnosis($('.TampilanDiagnosis'));
  var before = $('#EMR_dr_IGD_P3_TambahDiagnosisSekunder');
  $('#EMR_dr_IGD_P3_ButtonTambahDiagnosisSekunder').click(function() {
      var clone = $('#EMR_dr_IGD_P3_TemplateDiagnosisSekunder').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P3_TemplateDiagnosisSekunder').append(
        '<div class="col-md-10">'+
          '<div class="form-group form-md-line-input form-md-floating-label">'+
            '<input type="text" class="form-control TampilanDiagnosis" name="EMR_dr_IGD_P3_DiagnosisSekunder[]">'+
            '<input type="hidden" name="EMR_dr_IGD_P3_SimpanIdDiagnosisSekunder[]" class="form-control id_diagnosis"/>'+
            '<input type="hidden" name="EMR_dr_IGD_P3_SimpanNamaDiagnosisSekunder[]" class="form-control nama_diagnosis"/>'+
            '<label for="form_control_1">Diagnosis Sekunder</label>'+
            '<span class="help-block">Masukkan Diagnosis Sekunder</span>'+
          '</div>'+
        '</div>'+
        '<div class="col-md-1">'+
          '<button class="btn red-haze EMR_dr_IGD_P3_ButtonHapusDiagnosisSekunder" type="button">x</button>'+
        '</div>');
      enable_autocomplete_diagnosis($('.TampilanDiagnosis'));
      // insert duplicate before button div
      before.before(clone);
  });
  $( "body" ).on('click', '.EMR_dr_IGD_P3_ButtonHapusDiagnosisSekunder', function(){
      $(this).closest('#EMR_dr_IGD_P3_TemplateDiagnosisSekunder').remove();
  });
});

/*$(document).ready(function() {
  var before2 = $('#EMR_dr_IGD_P3_TambahDiagnosisBanding');
  $('#EMR_dr_IGD_P3_ButtonTambahDiagnosisBanding').click(function() {
      var clone2 = $('#EMR_dr_IGD_P3_TemplateDiagnosisBanding').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P3_TemplateDiagnosisBanding').append(
        '<div class="col-md-10">'+
          '<div class="form-group form-md-line-input form-md-floating-label">'+
            '<input type="text" class="form-control TampilanDiagnosis" name="EMR_dr_IGD_P3_DiagnosisBanding[]">'+
            '<input type="hidden" name="EMR_dr_IGD_P3_SimpanIdDiagnosisBanding[]" class="form-control id_diagnosis"/>'+
            '<input type="hidden" name="EMR_dr_IGD_P3_SimpanNamaDiagnosisBanding[]" class="form-control nama_diagnosis"/>'+
            '<label for="form_control_1">Diagnosis Banding</label>'+
            '<span class="help-block">Masukkan Diagnosis Banding</span>'+
          '</div>'+
        '</div>'+
        '<div class="col-md-1">'+
          '<button class="btn red-haze EMR_dr_IGD_P3_ButtonHapusDiagnosisBanding" type="button">x</button>'+
        '</div>');
      enable_autocomplete_diagnosis($('.TampilanDiagnosis'));
      // insert duplicate before button div
      before2.before(clone2);
  });
  $( "body" ).on('click', '.EMR_dr_IGD_P3_ButtonHapusDiagnosisBanding', function(){
      $(this).closest('#EMR_dr_IGD_P3_TemplateDiagnosisBanding').remove();
  });
});*/

$('#EMR_dr_IGD_P3_btnsimpan').click(function() {

  var EMR_dr_IGD_P3_DiagnosisKerja_simpan = [];
  $("input[name='EMR_dr_IGD_P3_DiagnosisKerja[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P3_DiagnosisKerja_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P3_DiagnosisKerja_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P3_SimpanIdDiagnosisKerja_simpan = [];
  $("input[name='EMR_dr_IGD_P3_SimpanIdDiagnosisKerja[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P3_SimpanIdDiagnosisKerja_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P3_SimpanIdDiagnosisKerja_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P3_SimpanNamaDiagnosisKerja_simpan = [];
  $("input[name='EMR_dr_IGD_P3_SimpanNamaDiagnosisKerja[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P3_SimpanNamaDiagnosisKerja_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P3_SimpanNamaDiagnosisKerja_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan = [];
  $("input[name='EMR_dr_IGD_P3_DiagnosisKomplikasi[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P3_SimpanIdDiagnosisKomplikasi_simpan = [];
  $("input[name='EMR_dr_IGD_P3_SimpanIdDiagnosisKomplikasi[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P3_SimpanIdDiagnosisKomplikasi_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P3_SimpanIdDiagnosisKomplikasi_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P3_SimpanNamaDiagnosisKomplikasi_simpan = [];
  $("input[name='EMR_dr_IGD_P3_SimpanNamaDiagnosisKomplikasi[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P3_SimpanNamaDiagnosisKomplikasi_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P3_SimpanNamaDiagnosisKomplikasi_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P3_DiagnosisSekunder_simpan = [];
  $("input[name='EMR_dr_IGD_P3_DiagnosisSekunder[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P3_DiagnosisSekunder_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P3_DiagnosisSekunder_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P3_SimpanIdDiagnosisSekunder_simpan = [];
  $("input[name='EMR_dr_IGD_P3_SimpanIdDiagnosisSekunder[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P3_SimpanIdDiagnosisSekunder_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P3_SimpanIdDiagnosisSekunder_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P3_SimpanNamaDiagnosisSekunder_simpan = [];
  $("input[name='EMR_dr_IGD_P3_SimpanNamaDiagnosisSekunder[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P3_SimpanNamaDiagnosisSekunder_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P3_SimpanNamaDiagnosisSekunder_simpan.push(null);
      }
  });

  var form_data = {
    IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
    EMR_dr_IGD_P3_DiagnosisUtama : $('#EMR_dr_IGD_P3_DiagnosisUtama').val(),
    EMR_dr_IGD_P3_SimpanIdDiagnosisUtama : $('#EMR_dr_IGD_P3_SimpanIdDiagnosisUtama').val(),
    EMR_dr_IGD_P3_SimpanNamaDiagnosisUtama : $('#EMR_dr_IGD_P3_SimpanNamaDiagnosisUtama').val(),
    EMR_dr_IGD_P3_DiagnosisKerja_simpan:EMR_dr_IGD_P3_DiagnosisKerja_simpan,
    EMR_dr_IGD_P3_SimpanIdDiagnosisKerja_simpan:EMR_dr_IGD_P3_SimpanIdDiagnosisKerja_simpan,
    EMR_dr_IGD_P3_SimpanNamaDiagnosisKerja_simpan:EMR_dr_IGD_P3_SimpanNamaDiagnosisKerja_simpan,
    EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan:EMR_dr_IGD_P3_DiagnosisKomplikasi_simpan,
    EMR_dr_IGD_P3_SimpanIdDiagnosisKomplikasi_simpan:EMR_dr_IGD_P3_SimpanIdDiagnosisKomplikasi_simpan,
    EMR_dr_IGD_P3_SimpanNamaDiagnosisKomplikasi_simpan:EMR_dr_IGD_P3_SimpanNamaDiagnosisKomplikasi_simpan,
    EMR_dr_IGD_P3_DiagnosisSekunder_simpan:EMR_dr_IGD_P3_DiagnosisSekunder_simpan,
    EMR_dr_IGD_P3_SimpanIdDiagnosisSekunder_simpan:EMR_dr_IGD_P3_SimpanIdDiagnosisSekunder_simpan,
    EMR_dr_IGD_P3_SimpanNamaDiagnosisSekunder_simpan:EMR_dr_IGD_P3_SimpanNamaDiagnosisSekunder_simpan,
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_dr_P3",
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
/*
$('#EMR_dr_IGD_P2_HalamanNext').click(function() {
  P2_hal++;
  P2_hal2++;

  if(P2_hal== 2)
  {
      EMR_dr_IGD_P2_HalamanNext.disabled = true;
      EMR_dr_IGD_P2_HalamanNext.classList.add('white');
      EMR_dr_IGD_P2_HalamanNext.classList.remove('green');
  }

  $('#EMR_dr_IGD_P2_Halaman'+ P2_hal+'').toggleClass('collapse');
  $('#EMR_dr_IGD_P2_Halaman'+ P2_hal2 +'').toggleClass('collapse');

  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal2 +'').html(P2_hal2);
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal2 +'').toggleClass('white');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal2 +'').toggleClass('green');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal2 +'').toggleClass('col-md-11');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal2 +'').toggleClass('col-md-1');
  if(P2_hal== 2)
  {
    $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal+'').html('2. Pemeriksaan Fisik');
  }
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal+'').toggleClass('green');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal+'').toggleClass('white');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal+'').toggleClass('col-md-1');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal+'').toggleClass('col-md-11');

  if(P2_hal== 2)
  {
    EMR_dr_IGD_P2_HalamanBack.disabled = false;
    EMR_dr_IGD_P2_HalamanBack.classList.remove('white');
    EMR_dr_IGD_P2_HalamanBack.classList.add('green');
  }
});
$('#EMR_dr_IGD_P2_HalamanBack').click(function() {
  $('#EMR_dr_IGD_P2_Halaman'+ P2_hal+'').toggleClass('collapse');
  $('#EMR_dr_IGD_P2_Halaman'+ P2_hal2 +'').toggleClass('collapse');

  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal+'').html(P2_hal);
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal+'').toggleClass('white');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal+'').toggleClass('green');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal+'').toggleClass('col-md-11');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal+'').toggleClass('col-md-1');
  if(P2_hal2 == 1)
  {
    $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal2 +'').html('1. TTV');
  }
  else if(P2_hal2 == 2)
  {
    $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal2 +'').html('2. Pemeriksaan Fisik');
  }
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal2 +'').toggleClass('green');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal2 +'').toggleClass('white');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal2 +'').toggleClass('col-md-1');
  $('#EMR_dr_IGD_P2_btnHalaman'+ P2_hal2 +'').toggleClass('col-md-11');

  P2_hal--;
  P2_hal2--;

  if(P2_hal== 1)
  {
    EMR_dr_IGD_P2_HalamanBack.disabled = true;
    EMR_dr_IGD_P2_HalamanBack.classList.add('white');
    EMR_dr_IGD_P2_HalamanBack.classList.remove('green');
    if(P2_halaman1 == 'Ya')
    {
      EMR_dr_IGD_P2_HalamanNext.disabled = false;
      EMR_dr_IGD_P2_HalamanNext.classList.add('green');
      EMR_dr_IGD_P2_HalamanNext.classList.remove('white');
    }
  }
  if(P2_hal== 2)
  {
    if(P2_halaman2 == 'Ya')
    {
      EMR_dr_IGD_P2_HalamanNext.disabled = false;
      EMR_dr_IGD_P2_HalamanNext.classList.add('green');
      EMR_dr_IGD_P2_HalamanNext.classList.remove('white');
    }
  }
});
$('#EMR_dr_IGD_P2_beratbadan').keyup(function() {
  var tinggibd = _tinggibadan_dr_P2.value/100;
  if(_beratbadan_dr_P2.value != '' && _tinggibadan_dr_P2.value != '')
  {
    var Nilai_BMI2 = _beratbadan_dr_P2.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m<sup>2</sup>'
    _Nilai_BMI_dr_P2.innerHTML = Nilai_BMI2.toFixed(2) + " " + satuanBMI;
    $('#EMR_dr_IGD_P2_Nilai_BMItxtss').val(Nilai_BMI2.toFixed(2) + " Kg/m");

    if(Nilai_BMI2 < 18.5)
    {
      _Kategori_BMI_dr_P2.innerHTML = "Underweight";
      $('#EMR_dr_IGD_P2_Kategori_BMItxtss').val("Underweight");
    }
    else if(Nilai_BMI2 < 23)
    {
      _Kategori_BMI_dr_P2.innerHTML = "Normo Weight";
      $('#EMR_dr_IGD_P2_Kategori_BMItxtss').val("Normo Weight");
    }
    else if(Nilai_BMI2 < 27)
    {
      _Kategori_BMI_dr_P2.innerHTML = "Over Weight";
      $('#EMR_dr_IGD_P2_Kategori_BMItxtss').val("Over Weight");
    }
    else if(Nilai_BMI2 >= 27)
    {
      _Kategori_BMI_dr_P2.innerHTML = "Obese";
      $('#EMR_dr_IGD_P2_Kategori_BMItxtss').val("Obese");
    }
  }
});
$('#EMR_dr_IGD_P2_tinggibadan').keyup(function() {
  var tinggibd = _tinggibadan_dr_P2.value/100;
  if(_beratbadan_dr_P2.value != '' && _tinggibadan_dr_P2.value != '')
  {
    var Nilai_BMI2 = _beratbadan_dr_P2.value/(tinggibd*tinggibd);
    var satuanBMI = 'Kg/m'
    _Nilai_BMI_dr_P2.innerHTML = Nilai_BMI2.toFixed(2) + " " + satuanBMI;
    $('#EMR_dr_IGD_P2_Nilai_BMItxtss').val(Nilai_BMI2.toFixed(2) + " Kg/m");

    if(Nilai_BMI2 < 18.5)
    {
      _Kategori_BMI_dr_P2.innerHTML = "Underweight";
      $('#EMR_dr_IGD_P2_Kategori_BMItxtss').val("Underweight");
    }
    else if(Nilai_BMI2 < 23)
    {
      _Kategori_BMI_dr_P2.innerHTML = "Normo Weight";
      $('#EMR_dr_IGD_P2_Kategori_BMItxtss').val("Normo Weight");
    }
    else if(Nilai_BMI2 < 27)
    {
      _Kategori_BMI_dr_P2.innerHTML = "Over Weight";
      $('#EMR_dr_IGD_P2_Kategori_BMItxtss').val("Over Weight");
    }
    else if(Nilai_BMI2 >= 27)
    {
      _Kategori_BMI_dr_P2.innerHTML = "Obese";
      $('#EMR_dr_IGD_P2_Kategori_BMItxtss').val("Obese");
    }
  }
});
$('#EMR_dr_IGD_P2_btnsimpan').click(function() {
  var form_data = {
    IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
    EMR_dr_IGD_Umur : $('#EMR_dr_IGD_Umur').val(),
    EMR_dr_IGD_P2_KeadaanUmum : $("input[name ='EMR_dr_IGD_P2_KeadaanUmum']:checked").val(),

    EMR_dr_IGD_P2_GCSe : $('#EMR_dr_IGD_P2_GCSe').val(),
    EMR_dr_IGD_P2_GCSv : $('#EMR_dr_IGD_P2_GCSv').val(),
    EMR_dr_IGD_P2_GCSm : $('#EMR_dr_IGD_P2_GCSm').val(),
    EMR_dr_IGD_P2_SpO2 : $('#EMR_dr_IGD_P2_SpO2').val(),
    EMR_dr_IGD_P2_TDSistolik : $('#EMR_dr_IGD_P2_TDSistolik').val(),
    EMR_dr_IGD_P2_TDDiastolik : $('#EMR_dr_IGD_P2_TDDiastolik').val(),
    EMR_dr_IGD_P2_suhutubuh : $('#EMR_dr_IGD_P2_suhutubuh').val(),
    EMR_dr_IGD_P2_nadi : $('#EMR_dr_IGD_P2_nadi').val(),
    EMR_dr_IGD_P2_NadiCH : $("input[name ='EMR_dr_IGD_P2_NadiCH']:checked").val(),
    EMR_dr_IGD_P2_respiratory : $('#EMR_dr_IGD_P2_respiratory').val(),
    EMR_dr_IGD_P2_RespiratoryCH : $("input[name ='EMR_dr_IGD_P2_RespiratoryCH']:checked").val(),
    EMR_dr_IGD_P2_lingkarkepala : $('#EMR_dr_IGD_P2_lingkarkepala').val(),
    EMR_dr_IGD_P2_beratbadan : $('#EMR_dr_IGD_P2_beratbadan').val(),
    EMR_dr_IGD_P2_tinggibadan : $('#EMR_dr_IGD_P2_tinggibadan').val(),
    EMR_dr_IGD_P2_Nilai_BMI : $('#EMR_dr_IGD_P2_Nilai_BMItxtss').val(),
    EMR_dr_IGD_P2_Kategori_BMI : $('#EMR_dr_IGD_P2_Kategori_BMItxtss').val(),
    EMR_dr_IGD_P2_PeFi_2_CK_simpan: $('#EMR_dr_IGD_P2_PeFi_2_CK').val(),
    EMR_dr_IGD_P2_PeFi_3_CK_simpan: $('#EMR_dr_IGD_P2_PeFi_3_CK').val(),
    EMR_dr_IGD_P2_PeFi_5_CK_simpan: $('#EMR_dr_IGD_P2_PeFi_5_CK').val(),
    EMR_dr_IGD_P2_PeFi_6_CK_simpan: $('#EMR_dr_IGD_P2_PeFi_6_CK').val(),
    EMR_dr_IGD_P2_PeFi_7_CK_simpan: $('#EMR_dr_IGD_P2_PeFi_7_CK').val(),
    EMR_dr_IGD_P2_btnAnemis: $('#EMR_dr_IGD_P2_btnAnemis').val(),
    EMR_dr_IGD_P2_btnIkterus: $('#EMR_dr_IGD_P2_btnIkterus').val(),
    EMR_dr_IGD_P2_btnCyanosis: $('#EMR_dr_IGD_P2_btnCyanosis').val(),
    EMR_dr_IGD_P2_btnDipsneo: $('#EMR_dr_IGD_P2_btnDipsneo').val(),
    EMR_dr_IGD_P2_btnUUK: $('#EMR_dr_IGD_P2_btnUUK').val(),
    EMR_dr_IGD_P2_btnUUB: $('#EMR_dr_IGD_P2_btnUUB').val(),
    EMR_dr_IGD_P2_pupilstat: $('#EMR_dr_IGD_P2_pupilstat').html(),
    EMR_dr_IGD_P2_pupilKanan: $('#EMR_dr_IGD_P2_pupilKanan').val(),
    EMR_dr_IGD_P2_pupilKiri: $('#EMR_dr_IGD_P2_pupilKiri').val(),
    EMR_dr_IGD_P2_btnCahayaKanan: $('#EMR_dr_IGD_P2_btnCahayaKanan').val(),
    EMR_dr_IGD_P2_btnCahayaKiri: $('#EMR_dr_IGD_P2_btnCahayaKiri').val(),
    EMR_dr_IGD_P2_KepalaLeher: $('#EMR_dr_IGD_P2_KepalaLeher').val(),
    EMR_dr_IGD_P2_CorStatus: $('#EMR_dr_IGD_P2_CorStatus').val(),
    EMR_dr_IGD_P2_CorSplit1: $("input[name ='EMR_dr_IGD_P2_CorSplit1']:checked").val(),
    EMR_dr_IGD_P2_Cor2_simpan: $("input[name ='EMR_dr_IGD_P2_Cor3']:checked").val(),
    EMR_dr_IGD_P2_Cor3_simpan: $("input[name ='EMR_dr_IGD_P2_Cor3']:checked").val(),
    EMR_dr_IGD_P2_CorReg: $("input[name ='EMR_dr_IGD_P2_CorReg']:checked").val(),
    EMR_dr_IGD_P2_btnMurmur: $('#EMR_dr_IGD_P2_btnMurmur').val(),
    EMR_dr_IGD_P2_btnMurmurText: $('#EMR_dr_IGD_P2_btnMurmurText').val(),
    EMR_dr_IGD_P2_btnGallop: $('#EMR_dr_IGD_P2_btnGallop').val(),
    EMR_dr_IGD_P2_btnVesikuler1: $('#EMR_dr_IGD_P2_btnVesikuler1').val(),
    EMR_dr_IGD_P2_btnVesikuler2: $('#EMR_dr_IGD_P2_btnVesikuler2').val(),
    EMR_dr_IGD_P2_btnVesikuler3: $('#EMR_dr_IGD_P2_btnVesikuler3').val(),
    EMR_dr_IGD_P2_btnVesikuler4: $('#EMR_dr_IGD_P2_btnVesikuler4').val(),
    EMR_dr_IGD_P2_btnVesikuler5: $('#EMR_dr_IGD_P2_btnVesikuler5').val(),
    EMR_dr_IGD_P2_btnVesikuler6: $('#EMR_dr_IGD_P2_btnVesikuler6').val(),
    EMR_dr_IGD_P2_btnRhonki1: $('#EMR_dr_IGD_P2_btnRhonki1').val(),
    EMR_dr_IGD_P2_btnRhonki2: $('#EMR_dr_IGD_P2_btnRhonki2').val(),
    EMR_dr_IGD_P2_btnRhonki3: $('#EMR_dr_IGD_P2_btnRhonki3').val(),
    EMR_dr_IGD_P2_btnRhonki4: $('#EMR_dr_IGD_P2_btnRhonki4').val(),
    EMR_dr_IGD_P2_btnRhonki5: $('#EMR_dr_IGD_P2_btnRhonki5').val(),
    EMR_dr_IGD_P2_btnRhonki6: $('#EMR_dr_IGD_P2_btnRhonki6').val(),
    EMR_dr_IGD_P2_btnWheezing1: $('#EMR_dr_IGD_P2_btnWheezing1').val(),
    EMR_dr_IGD_P2_btnWheezing2: $('#EMR_dr_IGD_P2_btnWheezing2').val(),
    EMR_dr_IGD_P2_btnWheezing3: $('#EMR_dr_IGD_P2_btnWheezing3').val(),
    EMR_dr_IGD_P2_btnWheezing4: $('#EMR_dr_IGD_P2_btnWheezing4').val(),
    EMR_dr_IGD_P2_btnWheezing5: $('#EMR_dr_IGD_P2_btnWheezing5').val(),
    EMR_dr_IGD_P2_btnWheezing6: $('#EMR_dr_IGD_P2_btnWheezing6').val(),
    EMR_dr_IGD_P2_btnretraksiKanan: $('#EMR_dr_IGD_P2_btnretraksiKanan').val(),
    EMR_dr_IGD_P2_btnretraksiKiri: $('#EMR_dr_IGD_P2_btnretraksiKiri').val(),
    EMR_dr_IGD_P2_ThoraxCorLain: $('#EMR_dr_IGD_P2_ThoraxCorLain').val(),
    EMR_dr_IGD_P2_btnAbdomen1: $("input[name ='EMR_dr_IGD_P2_btnAbdomen1']:checked").val(),
    EMR_dr_IGD_P2_btnAbdomen1E: $('#EMR_dr_IGD_P2_btnAbdomen1E').val(),
    EMR_dr_IGD_P2_btnAbdomen2: $('#EMR_dr_IGD_P2_btnAbdomen2').val(),
    EMR_dr_IGD_P2_btnAbdomen3: $('#EMR_dr_IGD_P2_btnAbdomen3').val(),
    EMR_dr_IGD_P2_btnAbdomen4: $('#EMR_dr_IGD_P2_btnAbdomen4').val(),
    EMR_dr_IGD_P2_btnAbdomen5: $('#EMR_dr_IGD_P2_btnAbdomen5').val(),
    EMR_dr_IGD_P2_btnAbdomen6: $('#EMR_dr_IGD_P2_btnAbdomen6').val(),
    EMR_dr_IGD_P2_btnAbdomen7Radio: $("input[name ='EMR_dr_IGD_P2_btnAbdomen7Radio']:checked").val(),
    EMR_dr_IGD_P2_btnAbdomen7C: $('#EMR_dr_IGD_P2_btnAbdomen7C').val(),
    EMR_dr_IGD_P2_btnAbdomen8Radio: $("input[name ='EMR_dr_IGD_P2_btnAbdomen8Radio']:checked").val(),
    EMR_dr_IGD_P2_btnAbdomen8C: $('#EMR_dr_IGD_P2_btnAbdomen8C').val(),
    EMR_dr_IGD_P2_AbdomenLainChb_simpan: $("input[name='EMR_dr_IGD_P2_AbdomenLainChb']:checked").val(),
    EMR_dr_IGD_P2_btnAbdomen9: $('#EMR_dr_IGD_P2_btnAbdomen9').val(),
    EMR_dr_IGD_P2_btnAbdomen10: $('#EMR_dr_IGD_P2_btnAbdomen10').val(),
    EMR_dr_IGD_P2_btnAbdomen11: $('#EMR_dr_IGD_P2_btnAbdomen11').val(),
    EMR_dr_IGD_P2_btnAbdomenText1: $('#EMR_dr_IGD_P2_btnAbdomenText1').val(),
    EMR_dr_IGD_P2_btnAbdomen12: $('#EMR_dr_IGD_P2_btnAbdomen12').val(),
    EMR_dr_IGD_P2_btnAbdomen13: $('#EMR_dr_IGD_P2_btnAbdomen13').val(),
    EMR_dr_IGD_P2_btnAbdomen14: $('#EMR_dr_IGD_P2_btnAbdomen14').val(),
    EMR_dr_IGD_P2_btnAbdomen15: $('#EMR_dr_IGD_P2_btnAbdomen15').val(),
    EMR_dr_IGD_P2_btnAbdomen16: $('#EMR_dr_IGD_P2_btnAbdomen16').val(),
    EMR_dr_IGD_P2_btnAbdomen17: $('#EMR_dr_IGD_P2_btnAbdomen17').val(),
    EMR_dr_IGD_P2_btnAbdomen18: $('#EMR_dr_IGD_P2_btnAbdomen18').val(),
    EMR_dr_IGD_P2_btnAbdomen19: $('#EMR_dr_IGD_P2_btnAbdomen19').val(),
    EMR_dr_IGD_P2_btnAbdomen20: $('#EMR_dr_IGD_P2_btnAbdomen20').val(),
    EMR_dr_IGD_P2_btnEkstremitas1: $('#EMR_dr_IGD_P2_btnEkstremitas1').val(),
    EMR_dr_IGD_P2_btnEkstremitas2: $('#EMR_dr_IGD_P2_btnEkstremitas2').val(),
    EMR_dr_IGD_P2_btnEkstremitas3: $('#EMR_dr_IGD_P2_btnEkstremitas3').val(),
    EMR_dr_IGD_P2_btnEkstremitas4: $('#EMR_dr_IGD_P2_btnEkstremitas4').val(),
    EMR_dr_IGD_P2_btnEkstremitas9: $('#EMR_dr_IGD_P2_btnEkstremitas9').val(),
    EMR_dr_IGD_P2_btnEkstremitas10: $('#EMR_dr_IGD_P2_btnEkstremitas10').val(),
    EMR_dr_IGD_P2_btnEkstremitas11: $('#EMR_dr_IGD_P2_btnEkstremitas11').val(),
    EMR_dr_IGD_P2_btnEkstremitas12: $('#EMR_dr_IGD_P2_btnEkstremitas12').val(),
    EMR_dr_IGD_P2_CRT_simpan: $("input[name ='EMR_dr_IGD_P2_CRT']:checked").val(),
    EMR_dr_IGD_P2_EkstremitasLainTXT: $('#EMR_dr_IGD_P2_EkstremitasLainTXT').val(),
    EMR_dr_IGD_P2_Neu_Motorik1: $('#EMR_dr_IGD_P2_Neu_Motorik1').val(),
    EMR_dr_IGD_P2_Neu_Motorik2: $('#EMR_dr_IGD_P2_Neu_Motorik2').val(),
    EMR_dr_IGD_P2_Neu_Motorik3: $('#EMR_dr_IGD_P2_Neu_Motorik3').val(),
    EMR_dr_IGD_P2_Neu_Motorik4: $('#EMR_dr_IGD_P2_Neu_Motorik4').val(),
    EMR_dr_IGD_P2_Sensorik: $("input[name ='EMR_dr_IGD_P2_Sensorik']:checked").val(),
    EMR_dr_IGD_P2_Sensorik7: $('#EMR_dr_IGD_P2_Sensorik7').val(),
    EMR_dr_IGD_P2_Neu_Lain: $('#EMR_dr_IGD_P2_Neu_Lain').val()
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_dr_P2",
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
*/

//================================= END MENU 3 =================================
//==============================================================================
//================================ START MENU 4 ================================

var EMR_dr_IGD_P4_ObatbtnObatSatuan = document.getElementById('EMR_dr_IGD_P4_ObatbtnObatSatuan');
var EMR_dr_IGD_P4_ObatbtnObatRacik = document.getElementById('EMR_dr_IGD_P4_ObatbtnObatRacik');
var EMR_dr_IGD_P4_ObatstatObat = document.getElementById('EMR_dr_IGD_P4_ObatstatObat');

$('#EMR_dr_IGD_P4_btnmenu').click(function() {
  document.getElementById('EMR_dr_IGD_P4_btnmenu').disabled = true;
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_dr_IGD_statverHal').value = 'P4';
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});

$('#EMR_dr_IGD_P4_Obat').click(function() {
  $('#EMR_dr_IGD_P4_Obat2').toggleClass('collapse');
});

$('#EMR_dr_IGD_P4_ObatbtnObatSatuan').click(function() {
  EMR_dr_IGD_P4_ObatstatObat.value = "Satuan";
  $('#EMR_dr_IGD_P4_ObatformObatRacik').toggleClass('collapse');
  $('#EMR_dr_IGD_P4_ObatformObatSatuan').toggleClass('collapse');

  EMR_dr_IGD_P4_ObatbtnObatSatuan.innerHTML = "<b>Obat </br> Satuan</b>";
  EMR_dr_IGD_P4_ObatbtnObatSatuan.classList.remove('blue');
  EMR_dr_IGD_P4_ObatbtnObatSatuan.classList.add('white');
  EMR_dr_IGD_P4_ObatbtnObatSatuan.classList.add('disabled');

  EMR_dr_IGD_P4_ObatbtnObatRacik.innerHTML = "<b>Obat </br> Racik</b>";
  EMR_dr_IGD_P4_ObatbtnObatRacik.classList.add('blue');
  EMR_dr_IGD_P4_ObatbtnObatRacik.classList.remove('white');
  EMR_dr_IGD_P4_ObatbtnObatRacik.classList.remove('disabled');
});

$('#EMR_dr_IGD_P4_ObatbtnObatRacik').click(function() {
  EMR_dr_IGD_P4_ObatstatObat.value = "Racik";
  $('#EMR_dr_IGD_P4_ObatformObatRacik').toggleClass('collapse');
  $('#EMR_dr_IGD_P4_ObatformObatSatuan').toggleClass('collapse');

  EMR_dr_IGD_P4_ObatbtnObatSatuan.innerHTML = "<b>Obat </br> Satuan</b>";
  EMR_dr_IGD_P4_ObatbtnObatSatuan.classList.add('blue');
  EMR_dr_IGD_P4_ObatbtnObatSatuan.classList.remove('white');
  EMR_dr_IGD_P4_ObatbtnObatSatuan.classList.remove('disabled');

  EMR_dr_IGD_P4_ObatbtnObatRacik.innerHTML = "<b>Obat </br> Racik</b>";
  EMR_dr_IGD_P4_ObatbtnObatRacik.classList.remove('blue');
  EMR_dr_IGD_P4_ObatbtnObatRacik.classList.add('white');
  EMR_dr_IGD_P4_ObatbtnObatRacik.classList.add('disabled');
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = $('#EMR_dr_IGD_P4_Obatdiv_buttonSatuan');

    var EMR_dr_IGD_P4_ObatnomerSatuan = 1;

    $('#EMR_dr_IGD_P4_ObattambahSatuan').click(function() {
        var clone = $('#EMR_dr_IGD_P4_Obatdiv1Satuan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P4_Obatdiv1Satuan').append(
          '<div class="col-md-4">'+
            '<div class="portlet light bordered">'+
              '<div class="portlet-title row">'+
                '<div class="caption font-red-sunglo col-md-8">'+
                    '<i class="fa fa-gift font-red-sunglo"></i>'+
                    '<span class="caption-subject bold uppercase">Obat Ke - '+ EMR_dr_IGD_P4_ObatnomerSatuan +' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>'+
                '</div>'+
                '<div class="col-md-3">'+
                  '<a class="btn btn-danger EMR_dr_IGD_P4_ObatremoveSatuan">'+
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
                          '<input type="text" name="EMR_dr_IGD_P4_Obatobatsatuan[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>'+
                          '<input type="hidden" name="EMR_dr_IGD_P4_Obatidobatsatuan[]" class="form-control project"/>'+
                        '</div>'+
                      '</div>'+
                      '<div class="col-md-4">'+
                        '<div class="form-group">'+
                          '<label class="control-label" style="font-size:14px">Jumlah Obat</label>'+
                          '<input type="text" id="EMR_dr_IGD_P4_ObatSatuanJumlah" name="EMR_dr_IGD_P4_ObatSatuanJumlah[]" placeholder="Jumlah" class="form-control" />'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                      '<div class="col-md-12">'+
                        '<label class="control-label" style="font-size:14px">Aturan Pakai</label>'+
                      '</div>'+
                        '<div class="col-md-3">'+
                          '<input type="text" id="EMR_dr_IGD_P4_ObatSatuanAturanPakai1" name="EMR_dr_IGD_P4_ObatSatuanAturanPakai1[]" class="form-control"/>'+
                        '</div>'+
                        '<div class="col-md-1">'+
                          '<p class="form-control-static"> dd </p>'+
                        '</div>'+
                        '<div class="col-md-3">'+
                          '<input type="text" id="EMR_dr_IGD_P4_ObatSatuanAturanPakai2" name="EMR_dr_IGD_P4_ObatSatuanAturanPakai2[]" class="form-control"/>'+
                        '</div>'+
                        '<div class="col-md-5">'+
                          '<select class="form-control" id="EMR_dr_IGD_P4_ObatSatuanAturanPakai4" name="EMR_dr_IGD_P4_ObatSatuanAturanPakai4[]">'+
                                '<option value=""></option>'+
                                '<option value="Tab/Kap/Cap">Tab/Kap/Cap</option>'+
                                '<option value="cth">cth</option>'+
                                '<option value="ml">ml</option>'+
                                '<option value="International Unit">International Unit</option>'+
                                '<option value="C">C</option>'+
                            '</select>'+
                        '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                        '<div class="col-md-6">'+
                          '<select class="form-control" id="EMR_dr_IGD_P4_ObatSatuanAturanPakai3" name="EMR_dr_IGD_P4_ObatSatuanAturanPakai3[]">'+
                                '<option value=""></option>'+
                                '<option value="Tetes">Tetes</option>'+
                                '<option value="Oles">Oles</option>'+
                                '<option selected="selected" value="Minum">Minum</option>'+
                                '<option value="Vaginal Suppositoria">Vaginal Suppositoria</option>'+
                                '<option value="Rectal Suppositoria">Rectal Suppositoria</option>'+
                                '<option value="Obat Kumur">Obat Kumur</option>'+
                                '<option value="gtt Mata">gtt Mata</option>'+
                                '<option value="gtt Telinga">gtt Telinga</option>'+
                                '<option value="gtt Hidung">gtt Hidung</option>'+
                                '<option value="Suntik">Suntik</option>'+
                            '</select>'+
                        '</div>'+
                        '<div class="col-md-6">'+
                          '<select class="form-control" id="EMR_dr_IGD_P4_ObatSatuanKetPakai1" name="EMR_dr_IGD_P4_ObatSatuanKetPakai1[]">'+
                                '<option value=""></option>'+
                                '<option value="a.c.">a.c.</option>'+
                                '<option value="p.c.">p.c.</option>'+
                                '<option value="d.c.">d.c.</option>'+
                                '<option value="ad.lib.">ad.lib.</option>'+
                                '<option value="s.i.m.m.">s.i.m.m.</option>'+
                                '<option value="s.u.e.">s.u.e.</option>'+
                                '<option value="o.d.">o.d.</option>'+
                                '<option value="o.s.">o.s.</option>'+
                                '<option value="a.d.">a.d.</option>'+
                                '<option value="a.s.">a.s.</option>'+
                                '<option value="o.d.s.">o.d.s.</option>'+
                                '<option value="a.d.s.">a.d.s.</option>'+
                                '<option value="Injeksi Sub Cutan">Injeksi Sub Cutan</option>'+
                                '<option value="Injeksi Intra Vena">Injeksi Intra Vena</option>'+
                                '<option value="Injeksi Intra Muscula">Injeksi Intra Muscula</option>'+
                                '<option value="Injeksi Intra Cutan">Injeksi Intra Cutan</option>'+
                            '</select>'+
                        '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                      '<div class="col-md-4">'+
                        '<select class="form-control" id="EMR_dr_IGD_P4_ObatSatuanKetPakai2" name="EMR_dr_IGD_P4_ObatSatuanKetPakai2[]">'+
                              '<option value=""></option>'+
                              '<option value="p.r.n.">p.r.n.</option>'+
                              '<option value="Sampai Habis">Sampai Habis</option>'+
                          '</select>'+
                      '</div>'+
                      '<div class="col-md-8">'+
                          '<input type="text" id="EMR_dr_IGD_P4_ObatSatuanLain" name="EMR_dr_IGD_P4_ObatSatuanLain[]" class="form-control" placeholder="Lain-lain"/>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
              '</div>'+
            '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        // insert duplicate before button div
        before.before(clone);

        EMR_dr_IGD_P4_ObatnomerSatuan++;
    });


    $( "body" ).on('click', '.EMR_dr_IGD_P4_ObatremoveSatuan', function(){
        EMR_dr_IGD_P4_ObatnomerSatuan--;
        $(this).closest('#EMR_dr_IGD_P4_Obatdiv1Satuan').remove();
    });
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = null;
    var value = null;

    //var nomer2 = 1;

     $(document).on('click', '.EMR_dr_IGD_P4_ObattambahRacikBahan-click', function () {
        value = $(this).data('todo').number;

        var before = $('#EMR_dr_IGD_P4_Obatdiv_buttonracikBahan'+value);
        var clone = $('#EMR_dr_IGD_P4_ObatdivracikBahan'+value).clone(true).find("input:text").val("").end().appendTo('#EMR_dr_IGD_P4_ObatdivracikBahan'+value).append(
          '<div class="form-group">'+
            '<div data-repeater-item class="mt-repeater-item">'+
              '<div class="row mt-repeater-row">'+
                '<div class="col-md-12">'+
                  '<label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>'+
                  '<input type="text" name="EMR_dr_IGD_P4_ObatobatsatuanRacik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>'+
                  '<input type="hidden" name="EMR_dr_IGD_P4_ObatidobatsatuanRacik[]" value="" class="form-control project_racik"/>'+
                  '<input type="hidden" value="RACIK_000'+value+'" id="EMR_dr_IGD_P4_ObatidRacik" name="EMR_dr_IGD_P4_ObatidRacik[]" class="form-control" />'+
                '</div>'+
              '</div>'+
              '</br>'+
              '<div class="row mt-repeater-row">'+
                '<div class="col-md-4">'+
                  '<label class="control-label" style="font-size:14px">Jumlah</label>'+
                  '<input type="text" id="EMR_dr_IGD_P4_ObatRacikJumlahBahan" name="EMR_dr_IGD_P4_ObatRacikJumlahBahan[]" placeholder="Jumlah" class="form-control" />'+
                '</div>'+
                '<div class="col-md-6">'+
                  '<label class="control-label" style="font-size:14px">Satuan</label>'+
                  '<select class="form-control" id="EMR_dr_IGD_P4_ObatRacikSatuan" name="EMR_dr_IGD_P4_ObatRacikSatuan[]">'+
                        '<option value="Gram">Gram</option>'+
                        '<option selected="selected" value="Mg">Mg</option>'+
                        '<option value="Tab/Kap/Cap">Tab/Kap/Cap</option>'+
                        '<option value="Tube">Tube</option>'+
                        '<option value="Botol">Botol</option>'+
                    '</select>'+
                '</div>'+
                '<label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;</label>'+
                '</br>'+
                '<a class="btn btn-danger EMR_dr_IGD_P4_ObatremoveRacikBahan mt-repeater-del-right mt-repeater-btn-inline">'+
                    '<i class="fa fa-close"></i>'+
                '</a>'+
              '</div>'+
            '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        before.before(clone);
    });

    $( "body" ).on('click', '.EMR_dr_IGD_P4_ObatremoveRacikBahan', function(){
        $(this).closest('#EMR_dr_IGD_P4_ObatdivracikBahan'+value).remove();
    });
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = $('#EMR_dr_IGD_P4_Obatdiv_buttonracikobat');

    var nomer2 = 1;
    var todo = '{"number":"'+nomer2+'"}';

    $('#EMR_dr_IGD_P4_Obattambahracikobat').click(function() {
        var clone = $('#EMR_dr_IGD_P4_Obatdivracikobat').clone(true).find("input:text").val("").end().appendTo('#EMR_dr_IGD_P4_Obatdivracikobat').append(
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
                      '<div class="form-group">'+
                        '<div data-repeater-item class="mt-repeater-item">'+
                          '<div class="row mt-repeater-row">'+
                            '<div class="col-md-12">'+
                              '<label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>'+
                              '<input type="text" name="EMR_dr_IGD_P4_ObatobatsatuanRacik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>'+
                              '<input type="hidden" name="EMR_dr_IGD_P4_ObatidobatsatuanRacik[]" value="" class="form-control project_racik"/>'+
                              '<input type="hidden" value="RACIK_000'+nomer2+'" id="EMR_dr_IGD_P4_ObatidRacik" name="EMR_dr_IGD_P4_ObatidRacik[]" class="form-control" />'+
                            '</div>'+
                          '</div>'+
                          '</br>'+
                          '<div class="row mt-repeater-row">'+
                            '<div class="col-md-4">'+
                              '<label class="control-label" style="font-size:14px">Jumlah</label>'+
                              '<input type="text" id="EMR_dr_IGD_P4_ObatRacikJumlahBahan" name="EMR_dr_IGD_P4_ObatRacikJumlahBahan[]" placeholder="Jumlah" class="form-control" />'+
                            '</div>'+
                            '<div class="col-md-6">'+
                              '<label class="control-label" style="font-size:14px">Satuan</label>'+
                              '<select class="form-control" id="EMR_dr_IGD_P4_ObatRacikSatuan" name="EMR_dr_IGD_P4_ObatRacikSatuan[]">'+
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
                      '<div id="EMR_dr_IGD_P4_ObatdivracikBahan'+nomer2+'"></div>'+
                      '<div id="EMR_dr_IGD_P4_Obatdiv_buttonracikBahan'+nomer2+'">'+
                        '<a class="btn blue EMR_dr_IGD_P4_ObattambahRacikBahan-click col-md-12" name="EMR_dr_IGD_P4_ObattambahRacikBahan" value="Tambah Data"><i class="fa fa-plus"></i> Tambah Bahan</a>'+
                      '</div>'+
                    '<div class="row mt-repeater-row">'+
                      '<div class="col-md-12">'+
                        '<label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Detail Obat</label>'+
                      '</div>'+
                        '<div class="col-md-8">'+
                          '<select class="form-control" id="EMR_dr_IGD_P4_ObatRacikAturanBahan" name="EMR_dr_IGD_P4_ObatRacikAturanBahan[]">'+
                                '<option selected="selected" value="m.f.da.in caps.dtd">m.f.da.in caps.dtd</option>'+
                                '<option value="m.f.l.a.pulv.dtd">m.f.l.a.pulv.dtd</option>'+
                                '<option value="m.f.da.in caps">m.f.da.in caps</option>'+
                                '<option value="m.f.l.a.pulv">m.f.l.a.pulv</option>'+
                                '<option value="m.f.krim">m.f.krim</option>'+
                                '<option value="m.f.da.in.bottle">m.f.da.in.bottle</option>'+
                            '</select>'+
                          '</div>'+
                        '<div class="col-md-4">'+
                          '<input type="text" id="EMR_dr_IGD_P4_ObatRacikJumlahRacik" name="EMR_dr_IGD_P4_ObatRacikJumlahRacik[]" placeholder="Jumlah" class="form-control"/>'+
                        '</div>'+
                        '<div class="col-md-8">'+
                            '<input type="hidden" value="RACIK_0001" id="EMR_dr_IGD_P4_ObatidRacik_2" name="EMR_dr_IGD_P4_ObatidRacik_2[]" class="form-control" />'+
                        '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                      '<div class="col-md-12">'+
                        '<label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Aturan Pakai</label>'+
                      '</div>'+
                        '<div class="col-md-3">'+
                          '<input type="text" id="EMR_dr_IGD_P4_ObatRacikAturanPakai1" name="EMR_dr_IGD_P4_ObatRacikAturanPakai1[]" class="form-control" />'+
                        '</div>'+
                        '<div class="col-md-1">'+
                          '<p class="form-control-static"> dd </p>'+
                        '</div>'+
                        '<div class="col-md-3">'+
                          '<input type="text" id="EMR_dr_IGD_P4_ObatRacikAturanPakai2" name="EMR_dr_IGD_P4_ObatRacikAturanPakai2[]" class="form-control" />'+
                        '</div>'+
                        '<div class="col-md-5">'+
                          '<select class="form-control" id="EMR_dr_IGD_P4_ObatRacikAturanPakai4" name="EMR_dr_IGD_P4_ObatRacikAturanPakai4[]" >'+
                            '<option value=""></option>'+
                            '<option value="Bungkus">Bungkus</option>'+
                            '<option value="Kapsul">Kapsul</option>'+
                            '<option value="Sirup">Sirup</option>'+
                            '<option value="Krim">Krim</option>'+
                          '</select>'+
                        '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                      '<div class="col-md-6">'+
                        '<select class="form-control" id="EMR_dr_IGD_P4_ObatRacikAturanPakai3" name="EMR_dr_IGD_P4_ObatRacikAturanPakai3[]" >'+
                          '<option value=""></option>'+
                          '<option value="Tetes">Tetes</option>'+
                          '<option value="Oles">Oles</option>'+
                          '<option selected="selected" value="Minum">Minum</option>'+
                          '<option value="Vaginal Suppositoria">Vaginal Suppositoria</option>'+
                          '<option value="Rectal Suppositoria">Rectal Suppositoria</option>'+
                          '<option value="Obat Kumur">Obat Kumur</option>'+
                          '<option value="gtt Mata">gtt Mata</option>'+
                          '<option value="gtt Telinga">gtt Telinga</option>'+
                          '<option value="gtt Hidung">gtt Hidung</option>'+
                          '<option value="Suntik">Suntik</option>'+
                        '</select>'+
                      '</div>'+
                        '<div class="col-md-6">'+
                          '<select class="form-control" id="EMR_dr_IGD_P4_ObatRacikKetPakai1" name="EMR_dr_IGD_P4_ObatRacikKetPakai1[]" >'+
                            '<option value=""></option>'+
                            '<option value="a.c.">a.c.</option>'+
                            '<option value="p.c.">p.c.</option>'+
                            '<option value="d.c.">d.c.</option>'+
                            '<option value="ad.lib.">ad.lib.</option>'+
                            '<option value="s.i.m.m.">s.i.m.m.</option>'+
                            '<option value="s.u.e.">s.u.e.</option>'+
                            '<option value="o.d.">o.d.</option>'+
                            '<option value="o.s.">o.s.</option>'+
                            '<option value="a.d.">a.d.</option>'+
                            '<option value="a.s.">a.s.</option>'+
                            '<option value="o.d.s.">o.d.s.</option>'+
                            '<option value="a.d.s.">a.d.s.</option>'+
                            '<option value="Injeksi Sub Cutan">Injeksi Sub Cutan</option>'+
                            '<option value="Injeksi Intra Vena">Injeksi Intra Vena</option>'+
                            '<option value="Injeksi Intra Muscula">Injeksi Intra Muscula</option>'+
                            '<option value="Injeksi Intra Cutan">Injeksi Intra Cutan</option>'+
                          '</select>'+
                        '</div>'+
                    '</div>'+
                    '<div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">'+
                      '<div class="col-md-4">'+
                        '<select class="form-control" id="EMR_dr_IGD_P4_ObatRacikKetPakai2" name="EMR_dr_IGD_P4_ObatRacikKetPakai2[]" >'+
                            '<option value=""></option>'+
                            '<option value="p.r.n.">p.r.n.</option>'+
                            '<option value="Sampai Habis">Sampai Habis</option>'+
                        '</select>'+
                      '</div>'+
                      '<div class="col-md-8">'+
                          '<input type="text" id="EMR_dr_IGD_P4_ObatRacikLain" name="EMR_dr_IGD_P4_ObatRacikLain[]" class="form-control" placeholder="Lain-lain"/>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                    '</br>'+
                    '<a class="btn btn-danger EMR_dr_IGD_P4_Obatremoveracikobat col-md-12">'+
                      '<i class="fa fa-close"> Hapus Obat Racikan</i>'+
                    '</a>'+
                '</div>'+
              '</div>'+
            '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        before.before(clone);
        clone.find(".EMR_dr_IGD_P4_ObattambahRacikBahan-click").attr("data-todo", '{"number":"'+nomer2+'"}');
        nomer2++;
    });

    $( "body" ).on('click', '.EMR_dr_IGD_P4_Obatremoveracikobat', function(){
        nomer2--;
      $(this).closest('#EMR_dr_IGD_P4_Obatdivracikobat').remove();
    });
});
/*
//EkgDll
$('#EMR_dr_IGD_P4_EkgDll').click(function() {
  $('#EMR_dr_IGD_P4_EkgDll2').toggleClass('collapse');
});
$('#EMR_dr_IGD_P4_Checkup_lain').click(function() {
    $('#EMR_dr_IGD_P4_Checkup_lain1').toggleClass('collapse');
    $('#EMR_dr_IGD_P4_Checkup_lain2').val('');
});
var EMR_dr_IGD_P4_Checkup_lain = document.getElementById('EMR_dr_IGD_P4_Checkup_lain');
$('#EMR_dr_IGD_P4_reset_EKG').on('click', function () {
  if(EMR_dr_IGD_P4_Checkup_lain.checked == true)
  {
      $('#EMR_dr_IGD_P4_Checkup_lain1').toggleClass('collapse');
  }

  $('#alert-msg-EMR_dr_IGD_P4_isianEKG').empty();

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
$('#EMR_dr_IGD_P4_ok_EKG').on('click', function () {
  if(EMR_dr_IGD_P4_Checkup_lain.checked == true)
  {
    if (document.getElementById('EMR_dr_IGD_P4_Checkup_lain2').value == '')
    {
      $('#alert-msg-EMR_dr_IGD_P4_isianEKG').html('<div class="alert alert-danger">Check Up Lain Masih Kosong, Harap Diisi Terlebih Dahulu!!</div>');
    }
    else
    {
      $('#alert-msg-EMR_dr_IGD_P4_isianEKG').empty();
      $('#EMR_dr_IGD_P4_EkgDll2Modal').modal('hide');
    }
  }
  else
  {
    $('#alert-msg-EMR_dr_IGD_P4_isianEKG').empty();
    $('#EMR_dr_IGD_P4_EkgDll2Modal').modal('hide');
  }
});
//Rujukan
$('#EMR_dr_IGD_P4_Rujukan').click(function() {
  $('#EMR_dr_IGD_P4_Rujukan2').toggleClass('collapse');
});
var EMR_dr_IGD_P4_rklinik = document.getElementById('EMR_dr_IGD_P4_rklinik');
var EMR_dr_IGD_P4_rlain = document.getElementById('EMR_dr_IGD_P4_rlain');
$('#EMR_dr_IGD_P4_reset_Rujuk').on('click', function () {
  if(EMR_dr_IGD_P4_rklinik.checked == true)
  {
      $('#EMR_dr_IGD_P4_rklinik_1').toggleClass('collapse');
  }
  if (EMR_dr_IGD_P4_rlain.checked == true)
  {
    $('#EMR_dr_IGD_P4_rlain_1').toggleClass('collapse');
  }

  $('#alert-msg-EMR_dr_IGD_P4_isianRujuk').empty();

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
$('#EMR_dr_IGD_P4_ok_Rujuk').on('click', function () {
  if(EMR_dr_IGD_P4_rklinik.checked == true)
  {
    if (document.getElementById('EMR_dr_IGD_P4_rklinik_2').value == '')
    {
      $('#alert-msg-EMR_dr_IGD_P4_isianRujuk').html('<div class="alert alert-danger">Klinik Spesialis Masih Kosong, Harap Diisi Terlebih Dahulu!!</div>');
    }
    else
    {
      if(EMR_dr_IGD_P4_rlain.checked == true)
      {
        if (document.getElementById('EMR_dr_IGD_P4_rlain_2').value == '')
        {
          $('#alert-msg-EMR_dr_IGD_P4_isianRujuk').html('<div class="alert alert-danger">Rujukan Lain Masih Kosong, Harap Diisi Terlebih Dahulu!!</div>');
        }
        else
        {
          $('#alert-msg-EMR_dr_IGD_P4_isianRujuk').empty();
          $('#EMR_dr_IGD_P4_Rujukan2Modal').modal('hide');
        }
      }
      else
      {
        $('#alert-msg-EMR_dr_IGD_P4_isianRujuk').empty();
        $('#EMR_dr_IGD_P4_Rujukan2Modal').modal('hide');
      }
    }
  }
  else if(EMR_dr_IGD_P4_rlain.checked == true)
  {
    if (document.getElementById('EMR_dr_IGD_P4_rlain_2').value == '')
    {
      $('#alert-msg-EMR_dr_IGD_P4_isianRujuk').html('<div class="alert alert-danger">Rujukan Lain Masih Kosong, Harap Diisi Terlebih Dahulu!!</div>');
    }
    else
    {
      $('#alert-msg-EMR_dr_IGD_P4_isianRujuk').empty();
      $('#EMR_dr_IGD_P4_Rujukan2Modal').modal('hide');
    }
  }
  else
  {
    $('#alert-msg-EMR_dr_IGD_P4_isianRujuk').empty();
    $('#EMR_dr_IGD_P4_Rujukan2Modal').modal('hide');
  }
});
$('#EMR_dr_IGD_P4_rklinik').click(function() {
    $('#EMR_dr_IGD_P4_rklinik_1').toggleClass('collapse');
    $('#EMR_dr_IGD_P4_rklinik_2').val('');
});
$('#EMR_dr_IGD_P4_rlain').click(function() {
    $('#EMR_dr_IGD_P4_rlain_1').toggleClass('collapse');
    $('#EMR_dr_IGD_P4_rlain_2').val('');
});
*/
//edukasi
$('#EMR_dr_IGD_P4_Edukasi').click(function() {
  $('#EMR_dr_IGD_P4_edukasi_1').toggleClass('collapse');
  $('#EMR_dr_IGD_P4_edukasi_2').val('');
});
//Prognosis
$('#EMR_dr_IGD_P4_Prognosis').click(function() {
  $('#EMR_dr_IGD_P4_Prognosis_1').toggleClass('collapse');
  //$('#EMR_dr_IGD_P4_Prognosis_2').val('');
});
/*
//kontrol
$('#EMR_dr_IGD_P4_KontrolK').click(function() {
  $('#EMR_dr_IGD_P4_KontrolK_1').toggleClass('collapse');
  $('#EMR_dr_IGD_P4_KontrolK_2').val('');
});
*/

$('#EMR_dr_IGD_P4_btnsimpan').click(function() {

  var EMR_dr_IGD_P4_Obatobatsatuan_simpan = [];
  $("input[name='EMR_dr_IGD_P4_Obatobatsatuan[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_Obatobatsatuan_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_Obatobatsatuan_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_Obatidobatsatuan_simpan = [];
  $("input[name='EMR_dr_IGD_P4_Obatidobatsatuan[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_Obatidobatsatuan_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_Obatidobatsatuan_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatSatuanJumlah_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatSatuanJumlah[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatSatuanJumlah_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatSatuanJumlah_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatSatuanAturanPakai1_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatSatuanAturanPakai1[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatSatuanAturanPakai1_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatSatuanAturanPakai1_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatSatuanAturanPakai2_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatSatuanAturanPakai2[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatSatuanAturanPakai2_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatSatuanAturanPakai2_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatSatuanAturanPakai3_simpan = [];
  $("select[name='EMR_dr_IGD_P4_ObatSatuanAturanPakai3[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatSatuanAturanPakai3_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatSatuanAturanPakai3_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatSatuanAturanPakai4_simpan = [];
  $("select[name='EMR_dr_IGD_P4_ObatSatuanAturanPakai4[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatSatuanAturanPakai4_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatSatuanAturanPakai4_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatSatuanKetPakai1_simpan = [];
  $("select[name='EMR_dr_IGD_P4_ObatSatuanKetPakai1[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatSatuanKetPakai1_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatSatuanKetPakai1_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatSatuanKetPakai2_simpan = [];
  $("select[name='EMR_dr_IGD_P4_ObatSatuanKetPakai2[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatSatuanKetPakai2_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatSatuanKetPakai2_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatSatuanLain_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatSatuanLain[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatSatuanLain_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatSatuanLain_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatobatsatuanRacik_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatobatsatuanRacik[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatobatsatuanRacik_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatobatsatuanRacik_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatidobatsatuanRacik_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatidobatsatuanRacik[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatidobatsatuanRacik_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatidobatsatuanRacik_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatidRacik_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatidRacik[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatidRacik_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatidRacik_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatRacikJumlahBahan_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatRacikJumlahBahan[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatRacikJumlahBahan_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatRacikJumlahBahan_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatRacikSatuan_simpan = [];
  $("select[name='EMR_dr_IGD_P4_ObatRacikSatuan[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatRacikSatuan_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatRacikSatuan_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatRacikAturanBahan_simpan = [];
  $("select[name='EMR_dr_IGD_P4_ObatRacikAturanBahan[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatRacikAturanBahan_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatRacikAturanBahan_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatRacikJumlahRacik_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatRacikJumlahRacik[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatRacikJumlahRacik_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatRacikJumlahRacik_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatidRacik_2_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatidRacik_2[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatidRacik_2_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatidRacik_2_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatRacikAturanPakai1_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatRacikAturanPakai1[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatRacikAturanPakai1_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatRacikAturanPakai1_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatRacikAturanPakai2_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatRacikAturanPakai2[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatRacikAturanPakai2_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatRacikAturanPakai2_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatRacikAturanPakai3_simpan = [];
  $("select[name='EMR_dr_IGD_P4_ObatRacikAturanPakai3[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatRacikAturanPakai3_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatRacikAturanPakai3_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatRacikAturanPakai4_simpan = [];
  $("select[name='EMR_dr_IGD_P4_ObatRacikAturanPakai4[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatRacikAturanPakai4_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatRacikAturanPakai4_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatRacikKetPakai1_simpan = [];
  $("select[name='EMR_dr_IGD_P4_ObatRacikKetPakai1[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatRacikKetPakai1_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatRacikKetPakai1_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatRacikKetPakai2_simpan = [];
  $("select[name='EMR_dr_IGD_P4_ObatRacikKetPakai2[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatRacikKetPakai2_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatRacikKetPakai2_simpan.push(null);
      }
  });

  var EMR_dr_IGD_P4_ObatRacikLain_simpan = [];
  $("input[name='EMR_dr_IGD_P4_ObatRacikLain[]']").each(function ()
  {
      var value = $(this).val();
      if (value)
      {
          EMR_dr_IGD_P4_ObatRacikLain_simpan.push(value);
      }
      else
      {
        EMR_dr_IGD_P4_ObatRacikLain_simpan.push(null);
      }
  });

  var form_data = {
    IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
    EMR_dr_IGD_NOREG : $('#EMR_dr_IGD_NOREG_2').val(),
    EMR_dr_IGD_NORM : $('#EMR_dr_IGD_NORM_2').val(),
    EMR_dr_IGD_P4_Obatobatsatuan_simpan:EMR_dr_IGD_P4_Obatobatsatuan_simpan,
    EMR_dr_IGD_P4_Obatidobatsatuan_simpan:EMR_dr_IGD_P4_Obatidobatsatuan_simpan,
    EMR_dr_IGD_P4_ObatSatuanJumlah_simpan:EMR_dr_IGD_P4_ObatSatuanJumlah_simpan,
    EMR_dr_IGD_P4_ObatSatuanAturanPakai1_simpan:EMR_dr_IGD_P4_ObatSatuanAturanPakai1_simpan,
    EMR_dr_IGD_P4_ObatSatuanAturanPakai2_simpan:EMR_dr_IGD_P4_ObatSatuanAturanPakai2_simpan,
    EMR_dr_IGD_P4_ObatSatuanAturanPakai3_simpan:EMR_dr_IGD_P4_ObatSatuanAturanPakai3_simpan,
    EMR_dr_IGD_P4_ObatSatuanAturanPakai4_simpan:EMR_dr_IGD_P4_ObatSatuanAturanPakai4_simpan,
    EMR_dr_IGD_P4_ObatSatuanKetPakai1_simpan:EMR_dr_IGD_P4_ObatSatuanKetPakai1_simpan,
    EMR_dr_IGD_P4_ObatSatuanKetPakai2_simpan:EMR_dr_IGD_P4_ObatSatuanKetPakai2_simpan,
    EMR_dr_IGD_P4_ObatSatuanLain_simpan:EMR_dr_IGD_P4_ObatSatuanLain_simpan,
    EMR_dr_IGD_P4_ObatobatsatuanRacik_simpan:EMR_dr_IGD_P4_ObatobatsatuanRacik_simpan,
    EMR_dr_IGD_P4_ObatidobatsatuanRacik_simpan:EMR_dr_IGD_P4_ObatidobatsatuanRacik_simpan,
    EMR_dr_IGD_P4_ObatidRacik_simpan:EMR_dr_IGD_P4_ObatidRacik_simpan,
    EMR_dr_IGD_P4_ObatRacikJumlahBahan_simpan:EMR_dr_IGD_P4_ObatRacikJumlahBahan_simpan,
    EMR_dr_IGD_P4_ObatRacikSatuan_simpan:EMR_dr_IGD_P4_ObatRacikSatuan_simpan,
    EMR_dr_IGD_P4_ObatRacikAturanBahan_simpan:EMR_dr_IGD_P4_ObatRacikAturanBahan_simpan,
    EMR_dr_IGD_P4_ObatRacikJumlahRacik_simpan:EMR_dr_IGD_P4_ObatRacikJumlahRacik_simpan,
    EMR_dr_IGD_P4_ObatidRacik_2_simpan:EMR_dr_IGD_P4_ObatidRacik_2_simpan,
    EMR_dr_IGD_P4_ObatRacikAturanPakai1_simpan:EMR_dr_IGD_P4_ObatRacikAturanPakai1_simpan,
    EMR_dr_IGD_P4_ObatRacikAturanPakai2_simpan:EMR_dr_IGD_P4_ObatRacikAturanPakai2_simpan,
    EMR_dr_IGD_P4_ObatRacikAturanPakai3_simpan:EMR_dr_IGD_P4_ObatRacikAturanPakai3_simpan,
    EMR_dr_IGD_P4_ObatRacikAturanPakai4_simpan:EMR_dr_IGD_P4_ObatRacikAturanPakai4_simpan,
    EMR_dr_IGD_P4_ObatRacikKetPakai1_simpan:EMR_dr_IGD_P4_ObatRacikKetPakai1_simpan,
    EMR_dr_IGD_P4_ObatRacikKetPakai2_simpan:EMR_dr_IGD_P4_ObatRacikKetPakai2_simpan,
    EMR_dr_IGD_P4_ObatRacikLain_simpan:EMR_dr_IGD_P4_ObatRacikLain_simpan,
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_dr_P4",
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

//================================= END MENU 4 =================================
//==============================================================================
//================================ START MENU 5 ================================


$('#EMR_dr_IGD_P5_btnmenu').click(function() {
  document.getElementById('EMR_dr_IGD_P5_btnmenu').disabled = true;
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_dr_IGD_statverHal').value = 'P5';
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});

//================================= END MENU 5 =================================
//==============================================================================
//================================ START MENU 6 ================================

var P6_hal= 1;
var P6_hal2 = 0;
var P6_halaman1 = 'Ya';
var P6_halaman2 = 'Ya';

$('#EMR_dr_IGD_P6_btnmenu').click(function() {
  document.getElementById('EMR_dr_IGD_P6_btnmenu').disabled = true;
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_dr_IGD_statverHal').value = 'P6';
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_dr_IGD_'+document.getElementById('EMR_dr_IGD_statverHal').value+'_btnmenu').classList.add('white');
});

/*$('#EMR_dr_IGD_P6_HalamanNext').click(function() {
  P6_hal++;
  P6_hal2++;

  if(P6_hal== 2)
  {
    if(P6_halaman2 == 'Tidak')
    {
      EMR_dr_IGD_P6_HalamanNext.disabled = true;
      EMR_dr_IGD_P6_HalamanNext.classList.add('white');
      EMR_dr_IGD_P6_HalamanNext.classList.remove('green');
    }
  }
  else if(P6_hal== 3)
  {
    EMR_dr_IGD_btnselanjutnyaPerawat.disabled = false;
    EMR_dr_IGD_btnselanjutnyaPerawat.classList.add('green');
    EMR_dr_IGD_btnselanjutnyaPerawat.classList.remove('white');
    if(P6_halaman3 == 'Tidak')
    {
      EMR_dr_IGD_P6_HalamanNext.disabled = true;
      EMR_dr_IGD_P6_HalamanNext.classList.add('white');
      EMR_dr_IGD_P6_HalamanNext.classList.remove('green');
    }
  }

  $('#EMR_dr_IGD_P6_Halaman'+ P6_hal+'').toggleClass('collapse');
  $('#EMR_dr_IGD_P6_Halaman'+ P6_hal2 +'').toggleClass('collapse');

  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal2 +'').html(P6_hal2);
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('white');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('green');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('col-md-10');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('col-md-2');
  if(P6_hal== 2)
  {
    $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal+'').html('2. Verifikasi Data');
  }
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('green');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('white');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('col-md-2');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('col-md-10');

  if(P6_hal== 2)
  {
    EMR_dr_IGD_P6_HalamanBack.disabled = false;
    EMR_dr_IGD_P6_HalamanBack.classList.remove('white');
    EMR_dr_IGD_P6_HalamanBack.classList.add('green');
  }
});
$('#EMR_dr_IGD_P6_HalamanBack').click(function() {
  $('#EMR_dr_IGD_P6_Halaman'+ P6_hal+'').toggleClass('collapse');
  $('#EMR_dr_IGD_P6_Halaman'+ P6_hal2 +'').toggleClass('collapse');

  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal+'').html(P6_hal);
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('white');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('green');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('col-md-10');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal+'').toggleClass('col-md-2');
  if(P6_hal2 == 1)
  {
    $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal2 +'').html('1. Evaluasi');
  }
  else if(P6_hal2 == 2)
  {
    $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal2 +'').html('2. Verifikasi Data');
  }
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('green');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('white');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('col-md-2');
  $('#EMR_dr_IGD_P6_btnHalaman'+ P6_hal2 +'').toggleClass('col-md-10');

  P6_hal--;
  P6_hal2--;

  if(P6_hal== 1)
  {
    EMR_dr_IGD_P6_HalamanBack.disabled = true;
    EMR_dr_IGD_P6_HalamanBack.classList.add('white');
    EMR_dr_IGD_P6_HalamanBack.classList.remove('green');
    if(P6_halaman1 == 'Ya')
    {
      EMR_dr_IGD_P6_HalamanNext.disabled = false;
      EMR_dr_IGD_P6_HalamanNext.classList.add('green');
      EMR_dr_IGD_P6_HalamanNext.classList.remove('white');
    }
  }
  if(P6_hal== 2)
  {
    if(P6_halaman2 == 'Ya')
    {
      EMR_dr_IGD_P6_HalamanNext.disabled = false;
      EMR_dr_IGD_P6_HalamanNext.classList.add('green');
      EMR_dr_IGD_P6_HalamanNext.classList.remove('white');
    }
  }
});

function simpanObx_dr(){
  var form_data = {
    dr_IGD_P6_idper : $('#EMR_dr_IGD_idper').val(),
    dr_IGD_P6_jam : $('#EMR_dr_IGD_P6_JamOb').val(),
    dr_IGD_P6_no : $('#EMR_dr_IGD_P6_InputcekisiOb').val(),
    dr_IGD_P6_Observasi : '<div class="panel panel-default">'+
                      '<div class="panel-heading bg-white bg-font-white">'+
                        '<h4 class="panel-title">'+
                          '<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_AOb'+ $('#EMR_dr_IGD_P6_InputcekisiOb').val() +'" aria-expanded="false"> SOAP (Klik untuk melihat) </a>'+
                        '</h4>'+
                      '</div>'+
                      '<div id="collapse_AOb'+ $('#EMR_dr_IGD_P6_InputcekisiOb').val() +'" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">'+
                        '<div class="panel-body bg-white bg-font-white">'+
                          '<center>'+
                            '<h5><b>Subyektif : </b></h5>'+
                              $("textarea[name='EMR_dr_IGD_P6_SubyektifOb']").val()+'</br>'+
                            '<h5><b>Obyektif : </b></h5>'+
                              '<table class="col-md-12" border="0">'+
                                '<tr>'+
                                  '<td style="width:250px">Keadaan Umum : '+$("input[name ='EMR_dr_IGD_P6_KeadaanUmum']:checked").val()+'</td>'+
                                  '<td>GCS E/V/M : '+$('#EMR_dr_IGD_P6_GCSe').val()+' / '+$('#EMR_dr_IGD_P6_GCSv').val()+' / '+$('#EMR_dr_IGD_P6_GCSm').val()+'</td>'+
                                '</tr>'+
                                '<tr>'+
                                  '<td>Kesadaran : '+$('#EMR_dr_IGD_P6_Kesadaran').val()+'</td>'+
                                  '<td>Suhu tubuh : '+$('#EMR_dr_IGD_P6_suhutubuh').val()+' <b>&deg;C</b> </td>'+
                                '</tr>'+
                                '<tr>'+
                                  '<td>Sistolik/Diastolik : '+$('#EMR_dr_IGD_P6_TDSistolik').val()+' / '+$('#EMR_dr_IGD_P6_TDDiastolik').val()+' <b>mmHG</b>'+'</td>'+
                                  '<td>SpO2 : '+$('#EMR_dr_IGD_P6_SpO2').val()+' <b>%</b> </td>'+
                                '</tr>'+
                                '<tr>'+
                                  '<td>Nadi : '+$('#EMR_dr_IGD_P6_nadi').val()+' <b>x/mnt</b> ('+$("input[name='EMR_dr_IGD_P6_NadiCH']:checked").val()+') </td>'+
                                  '<td>Berat badan : '+$('#EMR_dr_IGD_P6_beratbadan').val()+' <b>Kg</b> </td>'+
                                '</tr>'+
                                '<tr>'+
                                  '<td>Respiratory : '+$('#EMR_dr_IGD_P6_respiratory').val()+' <b>x/mnt</b> ('+$("input[name='EMR_dr_IGD_P6_RespiratoryCH']:checked").val()+') </td>'+
                                  '<td>Tinggi badan : '+$('#EMR_dr_IGD_P6_tinggibadan').val()+' <b>Cm</b> </td>'+
                                '</tr>'+
                                '<tr>'+
                                  '<td>Kategori BMI : '+$('#EMR_dr_IGD_P6_Kategori_BMI').html()+'</td>'+
                                  '<td>Nilai BMI : '+$('#EMR_dr_IGD_P6_Nilai_BMI').html()+'</td>'+
                                '</tr>'+
                              '</table>'+
                            '<h5><b>Assesment : </b></h5>'+
                              $('#EMR_dr_IGD_P6_A').val()+'</br>'+
                            '<h5><b>Plan : </b></h5>'+
                              $("textarea[name='EMR_dr_IGD_P6_PlanningOb']").val()+
                          '</center>'+
                        '</div>'+
                      '</div>'+
                    '</div>',
    dr_IGD_P6_Oleh : $('#EMR_dr_IGD_P6_olehOb').val()
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_dr_P6",
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

$('#EMR_dr_IGD_P6_btnsimpan').click(function(){
  simpanObx_dr();
});*/

$("input[name='EMR_dr_IGD_P6_KetExit']").click(function(){
  if($("input[name='EMR_dr_IGD_P6_KetExit']:checked").val() == '1')
  {
    document.getElementById('EMR_dr_IGD_P6_Rawin1').classList.remove('collapse');

    document.getElementById('EMR_dr_IGD_P6_Lanjut1').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P6_Lanjutlain').classList.add('collapse');
    $("input[name ='EMR_dr_IGD_P6_Lanjutxx']").removeAttr('checked');
    $('#EMR_dr_IGD_P6_Lanjutlaintxt').val('');

    document.getElementById('EMR_dr_IGD_P6_Rujuk1').classList.add('collapse');
    $('#EMR_dr_IGD_P6_Rujuklain').val('');

    document.getElementById('EMR_dr_IGD_P6_Pulang1').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P6_PulangMeninggalJam2').classList.add('collapse');
    $('#EMR_dr_IGD_P6_PulangJam').val();
    $("input[name ='EMR_dr_IGD_P6_Pulangxx']").removeAttr('checked');
    $('#EMR_dr_IGD_P6_PulangMeninggalJam').val();
  }
  if($("input[name='EMR_dr_IGD_P6_KetExit']:checked").val() == '2')
  {
    document.getElementById('EMR_dr_IGD_P6_Rawin1').classList.add('collapse');
    $('#EMR_dr_IGD_P6_Ruangan').val('');
    $('#EMR_dr_IGD_P6_Petugas').val('');

    document.getElementById('EMR_dr_IGD_P6_Lanjut1').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P6_Lanjutlain').classList.add('collapse');

    document.getElementById('EMR_dr_IGD_P6_Rujuk1').classList.add('collapse');
    $('#EMR_dr_IGD_P6_Rujuklaintxt').val('');

    document.getElementById('EMR_dr_IGD_P6_Pulang1').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P6_PulangMeninggalJam2').classList.add('collapse');
    $('#EMR_dr_IGD_P6_PulangJam').val();
    $("input[name ='EMR_dr_IGD_P6_Pulangxx']").removeAttr('checked');
    $('#EMR_dr_IGD_P6_PulangMeninggalJam').val();
  }
  if($("input[name='EMR_dr_IGD_P6_KetExit']:checked").val() == '3')
  {
    document.getElementById('EMR_dr_IGD_P6_Rawin1').classList.add('collapse');
    $('#EMR_dr_IGD_P6_Ruangan').val('');
    $('#EMR_dr_IGD_P6_Petugas').val('');

    document.getElementById('EMR_dr_IGD_P6_Lanjut1').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P6_Lanjutlain').classList.add('collapse');
    $("input[name ='EMR_dr_IGD_P6_Lanjutxx']").removeAttr('checked');
    $('#EMR_dr_IGD_P6_Lanjutlaintxt').val('');

    document.getElementById('EMR_dr_IGD_P6_Rujuk1').classList.remove('collapse');

    document.getElementById('EMR_dr_IGD_P6_Pulang1').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P6_PulangMeninggalJam2').classList.add('collapse');
    $('#EMR_dr_IGD_P6_PulangJam').val();
    $("input[name ='EMR_dr_IGD_P6_Pulangxx']").removeAttr('checked');
    $('#EMR_dr_IGD_P6_PulangMeninggalJam').val();
  }
  if($("input[name='EMR_dr_IGD_P6_KetExit']:checked").val() == '4')
  {
    document.getElementById('EMR_dr_IGD_P6_Rawin1').classList.add('collapse');
    $('#EMR_dr_IGD_P6_Ruangan').val('');
    $('#EMR_dr_IGD_P6_Petugas').val('');

    document.getElementById('EMR_dr_IGD_P6_Lanjut1').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P6_Lanjutlain').classList.add('collapse');
    $("input[name ='EMR_dr_IGD_P6_Lanjutxx']").removeAttr('checked');
    $('#EMR_dr_IGD_P6_Lanjutlaintxt').val('');

    document.getElementById('EMR_dr_IGD_P6_Rujuk1').classList.add('collapse');
    $('#EMR_dr_IGD_P6_Rujuklain').val('');

    document.getElementById('EMR_dr_IGD_P6_Pulang1').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P6_PulangMeninggalJam2').classList.add('collapse');
  }
});
$("input[name ='EMR_dr_IGD_P6_Lanjutxx']").click(function(){
  if($("input[name ='EMR_dr_IGD_P6_Lanjutxx']:checked").val() == 'Kosong')
  {
    document.getElementById('EMR_dr_IGD_P6_Lanjutlain').classList.remove('collapse');
  }
  else
  {
    $('#EMR_dr_IGD_P6_Lanjutlaintxt').val('');
    document.getElementById('EMR_dr_IGD_P6_Lanjutlain').classList.add('collapse');
  }
});
$("input[name ='EMR_dr_IGD_P6_Pulangxx']").click(function(){
  if($("input[name ='EMR_dr_IGD_P6_Pulangxx']:checked").val() == 'Meninggal Pukul')
  {
    document.getElementById('EMR_dr_IGD_P6_PulangMeninggalJam2').classList.remove('collapse');
  }
  else
  {
    $('#EMR_dr_IGD_P6_PulangMeninggalJam').val('');
    document.getElementById('EMR_dr_IGD_P6_PulangMeninggalJam2').classList.add('collapse');
  }
});
$('#EMR_dr_IGD_P6_PendidikanDiet').click(function(){
  $('#EMR_dr_IGD_P6_PendidikanDiet1').toggleClass('collapse');
})
function simpanExit_dr(){
  var ketKeluar = '';
  var ketKeluar1 = '';
  var eduKeluar = '';
  if($("input[name ='EMR_dr_IGD_P6_KetExit']:checked").val() == 1)
  {
    ketKeluar = 'Pasien masuk rawat inap <br>'+
                'Diterima oleh : ' +$('#EMR_dr_IGD_P6_Petugas').val()+'<br>'+
                'Di ruangan : ' +$('#EMR_dr_IGD_P6_Ruangan').val()+'<br>';
  }
  if($("input[name ='EMR_dr_IGD_P6_KetExit']:checked").val() == 2)
  {
    if($("input[name='EMR_dr_IGD_P6_Lanjutxx']:checked").val() == 'Kosong')
    {
      ketKeluar1 = $('#EMR_dr_IGD_P6_Lanjutlaintxt').val();
    }
    else
    {
      ketKeluar1 = $("input[name='EMR_dr_IGD_P6_Lanjutxx']:checked").val();
    }
    ketKeluar = 'Pasien mendapat tindakan lanjutan di '+ ketKeluar1;
  }
  if($("input[name ='EMR_dr_IGD_P6_KetExit']:checked").val() == 3)
  {
    ketKeluar = 'Pasien dirujuk ke ' + $('#EMR_dr_IGD_P6_Rujuklain').val();
  }
  if($("input[name ='EMR_dr_IGD_P6_KetExit']:checked").val() == 4)
  {
    if($("input[name'EMR_dr_IGD_P6_Pulangxx']:checked").val() == 'DOA')
    {
      ketKeluar1 = 'DOA';
    }
    else
    {
      ketKeluar1 = 'meninggal pukul : ' + $('#EMR_dr_IGD_P6_PulangMeninggalJam').val();
    }
    ketKeluar = 'Dipulangkan pukul : ' + $('#EMR_dr_IGD_P6_PulangJam').val() + 'dengan keadaan ' + ketKeluar1;
  }
  if(document.getElementById('EMR_dr_IGD_P6_PendidikanObatTeratur').checked == true)
  {
    eduKeluar = eduKeluar + 'Makan / minum obat teratur, ';
  }
  if(document.getElementById('EMR_dr_IGD_P6_PendidikanKebersihanLuka').checked == true)
  {
    eduKeluar = eduKeluar + 'Jaga kebersihan luka, ';
  }
  if(document.getElementById('EMR_dr_IGD_P6_PendidikanDiet').checked == true)
  {
    eduKeluar = eduKeluar + 'Diet : ' + $('#EMR_dr_IGD_P6_PendidikanDiet2').val();
  }
  if(document.getElementById('EMR_dr_IGD_P6_PendidikanLain').value != '')
  {
    eduKeluar = eduKeluar + $('#EMR_dr_IGD_P6_PendidikanLain').val();
  }

  var form_data = {
    EMR_dr_IGD_P6_ketKeluar : ketKeluar,
    EMR_dr_IGD_P6_transKeluar : $("input[name ='EMR_dr_IGD_P6_Transportasi']:checked").val(),
    EMR_dr_IGD_P6_eduKeluar : eduKeluar,
    IGD_idpemeriksaan : $('#EMR_dr_IGD_idper').val(),
    EMR_dr_IGD_P6_Jam : $('#EMR_dr_IGD_P6_Jam').val(),
    EMR_dr_IGD_P6_Airway : $('#EMR_dr_IGD_P6_Airway').val(),
    EMR_dr_IGD_P6_KeadaanUmum : $("input[name ='EMR_dr_IGD_P6_KeadaanUmum']:checked").val(),
    EMR_dr_IGD_P6_Kesadaran : $("#EMR_dr_IGD_P6_Kesadaran").val(),
    EMR_dr_IGD_P6_GCSe : $("input[name ='EMR_dr_IGD_P6_GCSe']").val(),
    EMR_dr_IGD_P6_GCSv : $("input[name ='EMR_dr_IGD_P6_GCSv']").val(),
    EMR_dr_IGD_P6_GCSm : $("input[name ='EMR_dr_IGD_P6_GCSm']").val(),
    EMR_dr_IGD_P6_SpO2 : $("input[name ='EMR_dr_IGD_P6_SpO2']").val(),
    EMR_dr_IGD_P6_TDSistolik : $('#EMR_dr_IGD_P6_TDSistolik').val(),
    EMR_dr_IGD_P6_TDDiastolik : $('#EMR_dr_IGD_P6_TDDiastolik').val(),
    EMR_dr_IGD_P6_suhutubuh : $('#EMR_dr_IGD_P6_suhutubuh').val(),
    EMR_dr_IGD_P6_nadi : $('#EMR_dr_IGD_P6_nadi').val(),
    EMR_dr_IGD_P6_NadiCH : $("input[name ='EMR_dr_IGD_P6_NadiCH']:checked").val(),
    EMR_dr_IGD_P6_respiratory : $('#EMR_dr_IGD_P6_respiratory').val(),
    EMR_dr_IGD_P6_RespiratoryCH : $("input[name ='EMR_dr_IGD_P6_RespiratoryCH']:checked").val(),
    EMR_dr_IGD_P6_Oleh : $('#EMR_dr_IGD_P6_olehOb').val()
  };
  $.ajax({
    url: base_url + "igd/btnsimpanIGD_dr_P7",
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
$('#EMR_dr_IGD_P6_btnsimpan').click(function(){
  simpanExit_dr();
});

//================================= END MENU 6 =================================

//==============================================================================
//==============================================================================

//============================= Modal View Start ===============================
var stst = $('#EMR_dr_IGD_statMV').val();

$('#EMR_dr_IGD_P0_btntriase').click(function(){
  $('#ModalView_dr_IGD').modal('show');
  $('#EMR_dr_IGD_mvH_'+stst).toggleClass('collapse');
  $('#EMR_dr_IGD_mvB_'+stst).toggleClass('collapse');
  $('#EMR_dr_IGD_mvH_Triase').toggleClass('collapse');
  $('#EMR_dr_IGD_mvB_Triase').toggleClass('collapse');
});

//============================== Modal View End ================================

//==============================================================================

//================================ Print Start =================================

$('#btnPrint1').click(function() {
    window.print();
});

function printElement(elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof(delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof(delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);
}

//================================= Print End ==================================

//Regio
var EMR_dr_IGD_P1_FrmMouseoverTubuh = document.getElementById('EMR_dr_IGD_P1_FrmMouseoverTubuh');
var EMR_dr_IGD_P1_FrmMouseoverKepala = document.getElementById('EMR_dr_IGD_P1_FrmMouseoverKepala');
var EMR_dr_IGD_P1_FrmMouseoverBadan = document.getElementById('EMR_dr_IGD_P1_FrmMouseoverBadan');
var EMR_dr_IGD_P1_FrmMouseoverTangan = document.getElementById('EMR_dr_IGD_P1_FrmMouseoverTangan');
var EMR_dr_IGD_P1_FrmMouseoverKaki = document.getElementById('EMR_dr_IGD_P1_FrmMouseoverKaki');
var EMR_dr_IGD_P1_btnGeserKanan = document.getElementById('EMR_dr_IGD_P1_btnGeserKanan');
var EMR_dr_IGD_P1_btnGeserKiri = document.getElementById('EMR_dr_IGD_P1_btnGeserKiri');
var EMR_dr_IGD_P1_Orto_btnGeserKanan = document.getElementById('EMR_dr_IGD_P1_Orto_btnGeserKanan');
var EMR_dr_IGD_P1_Orto_btnGeserKiri = document.getElementById('EMR_dr_IGD_P1_Orto_btnGeserKiri');
var EMR_dr_IGD_P1_btnSimpanModalLokalis = document.getElementById('EMR_dr_IGD_P1_btnSimpanModalLokalis');
var EMR_dr_IGD_P1_btnBatalModalLokalis = document.getElementById('EMR_dr_IGD_P1_btnBatalModalLokalis');
var EMR_dr_IGD_P1_btnBatalModalLokalis2 = document.getElementById('EMR_dr_IGD_P1_btnBatalModalLokalis2');
//var EMR_dr_IGD_P1_ShowLokalisHeader = document.getElementById('EMR_dr_IGD_P1_ShowLokalisHeader');
//var EMR_dr_IGD_P1_ShowLokalisGambar = document.getElementById('EMR_dr_IGD_P1_ShowLokalisGambar');
//var EMR_dr_IGD_P1_ShowLokalisKeluhan = document.getElementById('EMR_dr_IGD_P1_ShowLokalisKeluhan');
var EMR_dr_IGD_P1_btnLokalis = document.getElementById('EMR_dr_IGD_P1_btnLokalis');
var EMR_dr_IGD_P1_GstsFrmLokalis2 = document.getElementById('EMR_dr_IGD_P1_GstsFrmLokalis2');
var EMR_dr_IGD_P1_Orto_GstsFrmLokalis2 = document.getElementById('EMR_dr_IGD_P1_Orto_GstsFrmLokalis2');
var EMR_dr_IGD_P1_statLokalis = document.getElementById('EMR_dr_IGD_P1_statLokalis');
var EMR_dr_IGD_P1_statLokalis2 = document.getElementById('EMR_dr_IGD_P1_statLokalis2');

$('#EMR_dr_IGD_P1_btnLokalisFrontalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Frontalis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraTemporalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Temporalis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraTemporalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Temporalis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraZygomatical').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Zygomatical Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraZygomatical').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Zygomatical Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraOrbitalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Orbitalis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraOrbitalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Orbitalis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraInfraorbitalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Infraorbitalis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraInfraorbitalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Infraorbitalis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraBuccalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Buccalis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraBuccalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Buccalis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisNasalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Nasalis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisOralis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Oralis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisMentalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Mentalis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisParietalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Parietalis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisOccipitalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Occipitalis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisCervicalisPasterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cervicalis Pasterior </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisCervicalisAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cervicalis Anterior </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraSternocleidomastoidea').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Sternocleidomastoidea Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraSternocleidomastoidea').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Sternocleidomastoidea Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraCervicalisLateralis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cervicalis Lateralis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraCervicalisLateralis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cervicalis Lateralis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraTrigonumClavipectorale').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Trigonum Clavipectorale Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraTrigonumClavipectorale').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Trigonum Clavipectorale Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraPectoralis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Pectoralis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraPectoralis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Pectoralis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisPresternalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Presternalis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraAxillaris').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Axillaris Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraAxillaris').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Axillaris Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraMammaria').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Mammaria Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraMammaria').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Mammaria Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraInframammaria').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Inframammaria Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraInframammaria').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Inframammaria Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraHypochondriaca').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Hypochondriaca Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraHypochondriaca').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Hypochondriaca Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisEpigastrica').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Epigastrica </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraLateralis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Lateralis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraLateralis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Lateralis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisUmbilicalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Umbilicalis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraInguinalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Inguinalis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraInguinalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Inguinalis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisPubica').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Pubica </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisUrogenitalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Urogenitalis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisVerterbralis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Verterbralis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraScapularis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Scapularis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraScapularis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Scapularis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraInfrascapularis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Infrascapularis Dextra</i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraInfrascapularis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i>  Infrascapularis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraLumbaris').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i>  Lumbaris Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraLumbaris').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i>  Lumbaris Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraGlutealis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i>  Glutealis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraGlutealis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i>  Glutealis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSacralis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Sacralis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisAnalis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Analis </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraDormusManus').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Dormus Manus Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraDormusManus').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Dormus Manus Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraPalmaManus').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Palma Manus Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraPalmaManus').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Palma Manus Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraAntebrachialisPosterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Antebrachialis Posterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraAntebrachialisPosterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Antebrachialis Posterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraAntebrachialisAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Antebrachialis Anterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraAntebrachialisAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Antebrachialis Anterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraAntebrachialisPosterior2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Antebrachialis Posterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraAntebrachialisPosterior2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Antebrachialis Posterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraAntebrachialisAnterior2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Antebrachialis Anterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraAntebrachialisAnterior2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Antebrachialis Anterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraCubitalisAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cubitalis Anterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraCubitalisAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cubitalis Anterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraCubitalisPosterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cubitalis Posterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraCubitalisPosterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cubitalis Posterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraBrachialisAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Brachialis Anterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraBrachialisAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Brachialis Anterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraBrachialisPosterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Brachialis Posterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraBrachialisPosterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Brachialis Posterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraDeltoidea').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Deltoidea Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraDeltoidea2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Deltoidea Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraDeltoidea').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Deltoidea Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraDeltoidea2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Deltoidea Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraTrigonumfemorale').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Trigonum Femorale Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraTrigonumfemorale').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Trigonum Femorale Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraFemoralisAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Femoralis Anterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraFemoralisAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Femoralis Anterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraFemoralisAnterior1').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Femoralis Anterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraFemoralisAnterior1').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Femoralis Anterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraFemoralisPasterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Femoralis Pasterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraFemoralisPasterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Femoralis Pasterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraGenusAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Genus Anterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraGenusAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Genus Anterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraGenusPosterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Genus Posterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraGenusPosterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Genus Posterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraSura').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Sura Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraSura').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Sura Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraCruralisAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cruralis Anterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraCruralisAnterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cruralis Anterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraCruralisPosterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cruralis Posterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraCruralisPosterior').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cruralis Posterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraCruralisAnterior2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cruralis Anterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraCruralisAnterior2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cruralis Anterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraCruralisPosterior2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cruralis Posterior Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraCruralisPosterior2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Cruralis Posterior Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraDorsumPedis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Dorsum Pedis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraDorsumPedis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Dorsum Pedis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraDorsumPedis2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Dorsum Pedis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraDorsumPedis2').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Dorsum Pedis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraCalcanea').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Calcanea Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraCalcanea').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Calcanea Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraPlantaPedis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Planta Pedis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraPlantaPedis').click(function() {
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('<b><i> Planta Pedis Sinistra </i></b>');
});

$('#EMR_dr_IGD_P1_btnLokalisFrontal').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Frontal </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSphenoid1').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Sphenoid </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSphenoid2').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Sphenoid </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisNasal').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Nasal </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisZygomatic1').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Zygomatic Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisZygomatic2').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Zygomatic Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisMaxilla1').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Maxilla </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisMaxilla2').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Maxilla </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisMaxilla3').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Maxilla </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisEthmoid').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Ethmoid </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisMandible').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Mandible </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraParietal').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Sinistra Parietal </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraParietal').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Dextra Parietal </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisOccipital').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Occipital </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraClavicle').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Clavicle Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraClavicle').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Clavicle Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraScapula').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Scapula Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraScapula').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Scapula Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraHumerus').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Humerus Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraHumerus').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Humerus Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraRadius').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Radius Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraRadius').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Radius Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraUlna').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Ulna Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraUlna').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Ulna Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraCarpus').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Carpus Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraCarpus').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Carpus Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraFibula').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Fibula Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraFibula').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Fibula Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraTibia').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Tibia Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraTibia').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Tibia Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraFemur').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Femur Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraFemur').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Femur Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraPatelia').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Patelia Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraPatelia').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Patelia Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraFibula').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Fibula Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraFibula').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Fibula Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraTibia').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Tibia Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraTibia').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Tibia Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraTalus').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Talus Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraTalus').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Talus Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisDextraIschium').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Ischium Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSinistraIschium').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Ischium Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisPubisDextra').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Pubis Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisPubisSinistra').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Pubis Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSacrum').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Sacrum </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSternum').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Sternum </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisIlliumDextra').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Illium Dextra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisIlliumSinistra').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Illium Sinistra </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisAtlasC1').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Atlas C1 </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisAxisC2').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Axis C2 </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisThirdCervicalVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Third Cervical Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisFourthCervicalVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Fourth Cervical Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisFifthCervicalVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Fifth Cervical Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSixthCervicalVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Sixth Cervical Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSeventhCervicalVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Seventh Cervical Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisFirstThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> First Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSecondThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Second Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisThirdThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Third Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisFourthThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Fourth Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisFifthThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Fifth Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSixthThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Sixth Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSeventhThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Seventh Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisEightThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Eight Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisNinthThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Ninth Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisTenthThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Tenth Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisEleventhThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Eleventh Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisTwelfthThoracicVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Twelfth Thoracic Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisFirstLumbarVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> First Lumbar Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisSecondLumbarVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Second Lumbar Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisThirdLumbarVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Third Lumbar Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisFourthLumbarVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Fourth Lumbar Verterbral </i></b>');
});
$('#EMR_dr_IGD_P1_btnLokalisFifthLumbarVerterbral').click(function() {
  $('#EMR_dr_IGD_P1_Orto_LokasiLokalis').html('<b><i> Fifth Lumbar Verterbral </i></b>');
});


$('#EMR_dr_IGD_P1_btnLokalisVerterbral1').click(function() {
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisBadanDepan').classList.add('collapse');
  EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Cervical Verterbral";
  EMR_dr_IGD_P1_statLokalis2.value = "CervicalVerterbral";
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.remove('collapse');
});
$('#EMR_dr_IGD_P1_btnLokalisVerterbral2').click(function() {
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisBadanDepan').classList.add('collapse');
  EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Thoracic Verterbral";
  EMR_dr_IGD_P1_statLokalis2.value = "ThoracicVerterbral";
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.remove('collapse');
});
$('#EMR_dr_IGD_P1_btnLokalisVerterbral3').click(function() {
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisBadanDepan').classList.add('collapse');
  EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Lumbar Verterbral";
  EMR_dr_IGD_P1_statLokalis2.value = "LumbarVerterbral";
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.remove('collapse');
});
$('#EMR_dr_IGD_P1_btnLokalisRibs1').click(function() {
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisBadanDepan').classList.add('collapse');
  EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Rusuk";
  EMR_dr_IGD_P1_statLokalis2.value = "Rusuk";
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.remove('collapse');
});
$('#EMR_dr_IGD_P1_btnLokalisRibs2').click(function() {
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisBadanDepan').classList.add('collapse');
  EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Rusuk";
  EMR_dr_IGD_P1_statLokalis2.value = "Rusuk";
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.remove('collapse');
});

function EMR_dr_IGD_P1_btnKepalaMOver() {
  if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverKepala').toggleClass('collapse');
  }
  else
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverKepala2').toggleClass('collapse');
  }
}
function EMR_dr_IGD_P1_btnKepalaMOut() {
  if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverKepala').toggleClass('collapse');
  }
  else
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverKepala2').toggleClass('collapse');
  }
}

function EMR_dr_IGD_P1_btnBadanMOver() {
  if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverBadan').toggleClass('collapse');
  }
  else
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverBadan2').toggleClass('collapse');
  }
}
function EMR_dr_IGD_P1_btnBadanMOut() {
  if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverBadan').toggleClass('collapse');
  }
  else
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverBadan2').toggleClass('collapse');
  }
}

function EMR_dr_IGD_P1_btnTanganMOver() {
  if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverTangan').toggleClass('collapse');
  }
  else
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverTangan2').toggleClass('collapse');
  }
}
function EMR_dr_IGD_P1_btnTanganMOut() {
  if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverTangan').toggleClass('collapse');
  }
  else
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverTangan2').toggleClass('collapse');
  }
}

function EMR_dr_IGD_P1_btnKakiMOver() {
  if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverKaki').toggleClass('collapse');
  }
  else
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverKaki2').toggleClass('collapse');
  }
}
function EMR_dr_IGD_P1_btnKakiMOut() {
  if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverKaki').toggleClass('collapse');
  }
  else
  {
    $('#EMR_dr_IGD_P1_FrmMouseoverTubuh').toggleClass('collapse');
    $('#EMR_dr_IGD_P1_FrmMouseoverKaki2').toggleClass('collapse');
  }
}

$('#EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').click(function() {
//EMR_dr_IGD_P1_BtnKembaliFrmLokalis2.onclick = function()
//{
  if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
  {
    $('#EMR_dr_IGD_P1_LokasiLokalis').html('');
    $('#EMR_dr_IGD_P1_SLBedahInspeksi').val('');
    $('#EMR_dr_IGD_P1_SLBedahPalpasi').val('');
    $('#EMR_dr_IGD_P1_SLBedahPerkusi').val('');
    $('#EMR_dr_IGD_P1_SLBedahAuskultasi').val('');
    document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis2').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.add('collapse');
    EMR_dr_IGD_P1_statLokalis2.value = '';
  }
  else if(EMR_dr_IGD_P1_statLokalis.value == "Orthopedi")
  {
    $('#EMR_dr_IGD_P1_LokasiLokalis').html('');
    $('#EMR_dr_IGD_P1_SLBedahInspeksi').val('');
    $('#EMR_dr_IGD_P1_SLBedahPalpasi').val('');
    $('#EMR_dr_IGD_P1_SLBedahPerkusi').val('');
    $('#EMR_dr_IGD_P1_SLBedahAuskultasi').val('');
    document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis3').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.add('collapse');
    EMR_dr_IGD_P1_statLokalis2.value = '';
  }
});

$('#EMR_dr_IGD_P1_btnLokalisTubuh').click(function() {
  $('#EMR_dr_IGD_P1_AsesmenModalStatusLokalis').modal('show');
  EMR_dr_IGD_P1_statLokalis.value = "Bedah";
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_tblLokalis'+EMR_dr_IGD_P1_statLokalis.value).classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisOrthopedi').classList.add('collapse');
});

$('#EMR_dr_IGD_P1_btnLokalisTulang').click(function() {
  $('#EMR_dr_IGD_P1_AsesmenModalStatusLokalis').modal('show');
  EMR_dr_IGD_P1_statLokalis.value = "Orthopedi";
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalis'+EMR_dr_IGD_P1_statLokalis.value).classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_tblLokalisBedah').classList.add('collapse');
});

$('#EMR_dr_IGD_P1_btnKepala').click(function() {
//EMR_dr_IGD_P1_btnKepala.onclick = function()
//{
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_tblLokalisKepalaDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Kepala Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "KepalaDepan";
});

$('#EMR_dr_IGD_P1_btnBadan').click(function() {
//EMR_dr_IGD_P1_btnBadan.onclick = function()
//{
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_tblLokalisBadanDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Badan Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "BadanDepan";
});

$('#EMR_dr_IGD_P1_btnTangan1').click(function() {
//EMR_dr_IGD_P1_btnTangan1.onclick = function()
//{
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_tblLokalisTanganDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Tangan Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "TanganDepan";
});

$('#EMR_dr_IGD_P1_btnTangan2').click(function() {
//EMR_dr_IGD_P1_btnTangan2.onclick = function()
//{
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_tblLokalisTanganDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Tangan Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "TanganDepan";
});

$('#EMR_dr_IGD_P1_btnKaki1').click(function() {
//EMR_dr_IGD_P1_btnKaki1.onclick = function()
//{
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_tblLokalisKakiDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Kaki Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "KakiDepan";
});

$('#EMR_dr_IGD_P1_btnKaki2').click(function() {
//EMR_dr_IGD_P1_btnKaki2.onclick = function()
//{
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_tblLokalisKakiDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Kaki Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "KakiDepan";
});

$('#EMR_dr_IGD_P1_Orto_btnKepala').click(function() {
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis3').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisKepalaDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Kepala Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "KepalaDepan";
});
$('#EMR_dr_IGD_P1_Orto_btnBadan').click(function() {
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis3').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisBadanDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Badan Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "BadanDepan";
});
$('#EMR_dr_IGD_P1_Orto_btnTangan1').click(function() {
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis3').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisTanganDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Tangan Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "TanganDepan";
});
$('#EMR_dr_IGD_P1_Orto_btnTangan2').click(function() {
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis3').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisTanganDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Tangan Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "TanganDepan";
});
$('#EMR_dr_IGD_P1_Orto_btnKaki1').click(function() {
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis3').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisKakiDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Kaki Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "KakiDepan";
});
$('#EMR_dr_IGD_P1_Orto_btnKaki2').click(function() {
  document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
  document.getElementById('EMR_dr_IGD_P1_FrmLokalis3').classList.remove('collapse');
  document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisKakiDepan').classList.remove('collapse');
  EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Kaki Depan";
  EMR_dr_IGD_P1_statLokalis2.value = "KakiDepan";
});

$('#EMR_dr_IGD_P1_btnGeserKanan').click(function() {
//EMR_dr_IGD_P1_btnGeserKanan.onclick = function()
//{
  $('#EMR_dr_IGD_P1_LokasiLokalis').html('');
  $('#EMR_dr_IGD_P1_SLBedahInspeksi').val('');
  $('#EMR_dr_IGD_P1_SLBedahPalpasi').val('');
  $('#EMR_dr_IGD_P1_SLBedahPerkusi').val('');
  $('#EMR_dr_IGD_P1_SLBedahAuskultasi').val('');
  if(EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML == "Kepala Depan")
  {
    EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Kepala Belakang";
    EMR_dr_IGD_P1_statLokalis2.value = "KepalaBelakang";
    document.getElementById('EMR_dr_IGD_P1_tblLokalisKepalaDepan').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalisKepalaBelakang').classList.remove('collapse');
  }
  else if(EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML == "Kepala Belakang")
  {
    EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Kepala Depan";
    EMR_dr_IGD_P1_statLokalis2.value = "KepalaDepan";
    document.getElementById('EMR_dr_IGD_P1_tblLokalisKepalaDepan').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalisKepalaBelakang').classList.add('collapse');
  }
  else if(EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML == "Badan Depan")
  {
    EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Badan Belakang";
    EMR_dr_IGD_P1_statLokalis2.value = "BadanBelakang";
    document.getElementById('EMR_dr_IGD_P1_tblLokalisBadanDepan').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalisBadanBelakang').classList.remove('collapse');
  }
  else if(EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML == "Badan Belakang")
  {
    EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Badan Depan";
    EMR_dr_IGD_P1_statLokalis2.value = "BadanDepan";
    document.getElementById('EMR_dr_IGD_P1_tblLokalisBadanDepan').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalisBadanBelakang').classList.add('collapse');
  }
  else if(EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML == "Tangan Depan")
  {
    EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Tangan Belakang";
    EMR_dr_IGD_P1_statLokalis2.value = "TanganBelakang";
    document.getElementById('EMR_dr_IGD_P1_tblLokalisTanganDepan').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalisTanganBelakang').classList.remove('collapse');
  }
  else if(EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML == "Tangan Belakang")
  {
    EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Tangan Depan";
    EMR_dr_IGD_P1_statLokalis2.value = "TanganDepan";
    document.getElementById('EMR_dr_IGD_P1_tblLokalisTanganDepan').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalisTanganBelakang').classList.add('collapse');
  }
  else if(EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML == "Kaki Depan")
  {
    EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Kaki Belakang";
    EMR_dr_IGD_P1_statLokalis2.value = "KakiBelakang";
    document.getElementById('EMR_dr_IGD_P1_tblLokalisKakiDepan').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalisKakiBelakang').classList.remove('collapse');
  }
  else if(EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML == "Kaki Belakang")
  {
    EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML = "Kaki Depan";
    EMR_dr_IGD_P1_statLokalis2.value = "KakiDepan";
    document.getElementById('EMR_dr_IGD_P1_tblLokalisKakiDepan').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalisKakiBelakang').classList.add('collapse');
  }
});

$('#EMR_dr_IGD_P1_Orto_btnGeserKanan').click(function() {
//EMR_dr_IGD_P1_Orto_btnGeserKanan.onclick = function()
//{
  if(EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML == "Kepala Depan")
  {
    EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Kepala Belakang";
    EMR_dr_IGD_P1_statLokalis2.value = "KepalaBelakang";
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisKepalaDepan').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisKepalaBelakang').classList.remove('collapse');
  }
  else if(EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML == "Kepala Belakang")
  {
    EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Kepala Depan";
    EMR_dr_IGD_P1_statLokalis2.value = "KepalaDepan";
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisKepalaDepan').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisKepalaBelakang').classList.add('collapse');
  }
  /*
  else if(EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML == "Badan Depan")
  {
    EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Badan Belakang";
    EMR_dr_IGD_P1_statLokalis2.value = "BadanBelakang";
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisBadanDepan').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisBadanBelakang').classList.remove('collapse');
  }
  else if(EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML == "Badan Belakang")
  {
    EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Badan Depan";
    EMR_dr_IGD_P1_statLokalis2.value = "BadanDepan";
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisBadanDepan').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisBadanBelakang').classList.add('collapse');
  }

  else if(EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML == "Tangan Depan")
  {
    EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Tangan Belakang";
    EMR_dr_IGD_P1_statLokalis2.value = "TanganBelakang";
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisTanganDepan').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisTanganBelakang').classList.remove('collapse');
  }
  else if(EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML == "Tangan Belakang")
  {
    EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Tangan Depan";
    EMR_dr_IGD_P1_statLokalis2.value = "TanganDepan";
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisTanganDepan').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisTanganBelakang').classList.add('collapse');
  }

  else if(EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML == "Kaki Depan")
  {
    EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Kaki Belakang";
    EMR_dr_IGD_P1_statLokalis2.value = "KakiBelakang";
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisKakiDepan').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisKakiBelakang').classList.remove('collapse');
  }
  else if(EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML == "Kaki Belakang")
  {
    EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML = "Kaki Depan";
    EMR_dr_IGD_P1_statLokalis2.value = "KakiDepan";
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisKakiDepan').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisKakiBelakang').classList.add('collapse');
  }*/
});

$('#EMR_dr_IGD_P1_btnBatalModalLokalis').click(function() {
//EMR_dr_IGD_P1_btnBatalModalLokalis.onclick = function()
//{
  $('#EMR_dr_IGD_P1_AsesmenModalStatusLokalis').modal('hide');
  if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
  {
    $('#EMR_dr_IGD_P1_LokasiLokalis').html('');
    $('#EMR_dr_IGD_P1_SLBedahInspeksi').val('');
    $('#EMR_dr_IGD_P1_SLBedahPalpasi').val('');
    $('#EMR_dr_IGD_P1_SLBedahPerkusi').val('');
    $('#EMR_dr_IGD_P1_SLBedahAuskultasi').val('');
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis2').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisOrthopedi').classList.add('collapse');
    EMR_dr_IGD_P1_statLokalis.value = "pilih";
    EMR_dr_IGD_P1_statLokalis2.value = '';
  }
  else if(EMR_dr_IGD_P1_statLokalis.value == "Orthopedi")
  {
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis0').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis3').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalisBedah').classList.add('collapse');
    EMR_dr_IGD_P1_statLokalis.value = "pilih";
    EMR_dr_IGD_P1_statLokalis2.value = '';
  }
});

$('#EMR_dr_IGD_P1_btnBatalModalLokalis2').click(function() {
//EMR_dr_IGD_P1_btnBatalModalLokalis2.onclick = function()
//{
  $('#EMR_dr_IGD_P1_AsesmenModalStatusLokalis').modal('hide');
  if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
  {
    $('#EMR_dr_IGD_P1_LokasiLokalis').html('');
    $('#EMR_dr_IGD_P1_SLBedahInspeksi').val('');
    $('#EMR_dr_IGD_P1_SLBedahPalpasi').val('');
    $('#EMR_dr_IGD_P1_SLBedahPerkusi').val('');
    $('#EMR_dr_IGD_P1_SLBedahAuskultasi').val('');
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis2').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisOrthopedi').classList.add('collapse');
    EMR_dr_IGD_P1_statLokalis.value = "pilih";
    EMR_dr_IGD_P1_statLokalis2.value = '';
  }
  else if(EMR_dr_IGD_P1_statLokalis.value == "Orthopedi")
  {
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.remove('collapse');
    document.getElementById('EMR_dr_IGD_P1_FrmLokalis3').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.add('collapse');
    document.getElementById('EMR_dr_IGD_P1_tblLokalisBedah').classList.add('collapse');
    EMR_dr_IGD_P1_statLokalis.value = "pilih";
    EMR_dr_IGD_P1_statLokalis2.value = '';
  }
});

$('#EMR_dr_IGD_P1_btnSimpanModalLokalis').click(function() {
//EMR_dr_IGD_P1_btnSimpanModalLokalis.onclick = function()
//{
  if(EMR_dr_IGD_P1_LokasiLokalis.innerHTML == "")
  {
    $('#EMR_dr_IGD_P1_AsesmenModalStatusLokalis').modal('hide');
    if(EMR_dr_IGD_P1_statLokalis.value == "Bedah")
    {
      document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.remove('collapse');
      document.getElementById('EMR_dr_IGD_P1_FrmLokalis2').classList.add('collapse');
      document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.add('collapse');
      document.getElementById('EMR_dr_IGD_P1_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.add('collapse');
      document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalisOrthopedi').classList.add('collapse');
      EMR_dr_IGD_P1_statLokalis.value = "pilih";
      EMR_dr_IGD_P1_statLokalis2.value = '';
    }
    else if(EMR_dr_IGD_P1_statLokalis.value == "Orthopedi")
    {
      document.getElementById('EMR_dr_IGD_P1_FrmLokalis1').classList.remove('collapse');
      document.getElementById('EMR_dr_IGD_P1_FrmLokalis3').classList.add('collapse');
      document.getElementById('EMR_dr_IGD_P1_BtnKembaliFrmLokalis2').classList.add('collapse');
      document.getElementById('EMR_dr_IGD_P1_Orto_tblLokalis'+EMR_dr_IGD_P1_statLokalis2.value).classList.add('collapse');
      document.getElementById('EMR_dr_IGD_P1_tblLokalisBedah').classList.add('collapse');
      EMR_dr_IGD_P1_statLokalis.value = "pilih";
      EMR_dr_IGD_P1_statLokalis2.value = '';
    }
  }
  else
  {
    $('#EMR_dr_IGD_P1_modalKosongLokalis').modal('show');
  }
});

$(document).ready(function() {

  var apKplDepan = $('#EMR_dr_IGD_P1_AppendKeluhanKepalaDepan');
  var apKplBelakang = $('#EMR_dr_IGD_P1_AppendKeluhanKepalaBelakang');
  var apBdnDepan = $('#EMR_dr_IGD_P1_AppendKeluhanBadanDepan');
  var apBdnBelakang = $('#EMR_dr_IGD_P1_AppendKeluhanBadanBelakang');
  var apTgnDepan = $('#EMR_dr_IGD_P1_AppendKeluhanTanganDepan');
  var apTgnBelakang = $('#EMR_dr_IGD_P1_AppendKeluhanTanganBelakang');
  var apKkiDepan = $('#EMR_dr_IGD_P1_AppendKeluhanKakiDepan');
  var apKkiBelakang = $('#EMR_dr_IGD_P1_AppendKeluhanKakiBelakang');
  var apKplDepanOrto = $('#EMR_dr_IGD_P1_AppendOrtoKeluhanKepalaDepan');
  var apKplBelakangOrto = $('#EMR_dr_IGD_P1_AppendOrtoKeluhanKepalaBelakang');
  var apBdnDepanOrto = $('#EMR_dr_IGD_P1_AppendOrtoKeluhanBadanDepan');
  var apBdnBelakangOrto = $('#EMR_dr_IGD_P1_AppendOrtoKeluhanBadanBelakang');
  var apTgnDepanOrto = $('#EMR_dr_IGD_P1_AppendOrtoKeluhanTanganDepan');
  var apTgnBelakangOrto = $('#EMR_dr_IGD_P1_AppendOrtoKeluhanTanganBelakang');
  var apKkiDepanOrto = $('#EMR_dr_IGD_P1_AppendOrtoKeluhanKakiDepan');
  var apKkiBelakangOrto = $('#EMR_dr_IGD_P1_AppendOrtoKeluhanKakiBelakang');
  var apCervicalVerterbral = $('#EMR_dr_IGD_P1_AppendOrtoKeluhanCervicalVerterbral');
  var apThoracicVerterbral = $('#EMR_dr_IGD_P1_AppendOrtoKeluhanThoracicVerterbral');
  var apLumbarVerterbral = $('#EMR_dr_IGD_P1_AppendOrtoKeluhanLumbarVerterbral');

  var nomer = 1;
  var kplDpn = 0;
  var kplBlk = 0;
  var bdnDpn = 0;
  var bdnBlk = 0;
  var tgnDpn = 0;
  var tgnBlk = 0;
  var kkiDpn = 0;
  var kkiBlk = 0;
  var nomerOrto = 1;
  var kplDpnOrto = 0;
  var kplBlkOrto = 0;
  var bdnDpnOrto = 0;
  var bdnBlkOrto = 0;
  var tgnDpnOrto = 0;
  var tgnBlkOrto = 0;
  var kkiDpnOrto = 0;
  var kkiBlkOrto = 0;
  var CervicalVerterbral = 0;
  var ThoracicVerterbral = 0;
  var LumbarVerterbral = 0;

  $('#EMR_dr_IGD_P1_insertKeluhan').click(function() {
    var lokasi1 = EMR_dr_IGD_P1_GstsFrmLokalis2.innerHTML;
    var lokasi2 = EMR_dr_IGD_P1_LokasiLokalis.innerHTML;
    var keluhan1 = EMR_dr_IGD_P1_SLBedahInspeksi.value;
    var keluhan2 = EMR_dr_IGD_P1_SLBedahPalpasi.value;
    var keluhan3 = EMR_dr_IGD_P1_SLBedahPerkusi.value;
    var keluhan4 = EMR_dr_IGD_P1_SLBedahAuskultasi.value;

    //if(nomer == 1)
    if(EMR_dr_IGD_P1_LokasiLokalis.innerHTML == "" || EMR_dr_IGD_P1_SLBedahInspeksi.value == "")
    {
      $('#EMR_dr_IGD_P1_modalKosongKeluhandanLokalis').modal('show');
    }
    else
    {
      EMR_dr_IGD_P1_LokasiLokalis.innerHTML = '';
      EMR_dr_IGD_P1_SLBedahInspeksi.value = '';
      EMR_dr_IGD_P1_SLBedahPalpasi.value = '';
      EMR_dr_IGD_P1_SLBedahPerkusi.value = '';
      EMR_dr_IGD_P1_SLBedahAuskultasi.value = '';

      if(lokasi1 == "Kepala Depan")
      {
        if(kplDpn == 0)
        {
          kplDpn++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendHasilHeaderKepalaDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilHeaderKepalaDepan').append(
            '<button disable type="button" class="btn btn-default removeKplDpn" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplDpn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
              '</button>'+
            '</div>');
          apKplDepan.before(cloneHead);
          apKplDepan.before(cloneBody);
        }
        else
        {
          kplDpn++;
          var clone = $('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplDpn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
              '</button>'+
              '<input type="hidden" id="EMR_dr_IGD_P1_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_KeluhanLokalis[]" value="'+ keluhan1 +'">'+
            '</div>');
          apKplDepan.before(clone);
        }
      }
      else if(lokasi1 == "Kepala Belakang")
      {
        if(kplBlk == 0)
        {
          kplBlk++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendHasilHeaderKepalaBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilHeaderKepalaBelakang').append(
            '<button disable type="button" class="btn btn-default removeKplBlk" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplDpn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
              '</button>'+
            '</div>');
          apKplBelakang.before(cloneHead);
          apKplBelakang.before(cloneBody);
        }
        else
        {
          kplBlk++;
          var clone = $('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKplDpn" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
              '</button>'+
              '<input type="hidden" id="EMR_dr_IGD_P1_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apKplBelakang.before(clone);
        }
      }
      else if(lokasi1 == "Badan Depan")
      {
        if(bdnDpn == 0)
        {
          bdnDpn++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendHasilHeaderBadanDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilHeaderBadanDepan').append(
            '<button disable type="button" class="btn btn-default removeBdnDpn" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removeBdnDpn" style="height:55px; width:20%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
            '</button>'+
            '</div>');
          apBdnDepan.before(cloneHead);
          apBdnDepan.before(cloneBody);
        }
        else
        {
          bdnDpn++;
          var clone = $('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removeBdnDpn" style="height:55px; width:20%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
            '</button>'+
              '<input type="hidden" id="EMR_dr_IGD_P1_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apBdnDepan.before(clone);
        }
      }
      else if(lokasi1 == "Badan Belakang")
      {
        if(bdnBlk == 0)
        {
          bdnBlk++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendHasilHeaderBadanBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilHeaderBadanBelakang').append(
            '<button disable type="button" class="btn btn-default removeBdnBlk" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeBdnBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
              '</button>'+
            '</div>');
          apBdnBelakang.before(cloneHead);
          apBdnBelakang.before(cloneBody);
        }
        else
        {
          bdnBlk++;
          var clone = $('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeBdnBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
              '</button>'+
              '<input type="hidden" id="EMR_dr_IGD_P1_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apBdnBelakang.before(clone);
        }
      }
      else if(lokasi1 == "Tangan Depan")
      {
        if(tgnDpn == 0)
        {
          tgnDpn++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendHasilHeaderTanganDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilHeaderTanganDepan').append(
            '<button disable type="button" class="btn btn-default removeTgnDpn" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removeTgnDpn" style="height:55px; width:20%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
            '</button>'+
            '</div>');
          apTgnDepan.before(cloneHead);
          apTgnDepan.before(cloneBody);
        }
        else
        {
          tgnDpn++;
          var clone = $('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removeTgnDpn" style="height:55px; width:20%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
            '</button>'+
              '<input type="hidden" id="EMR_dr_IGD_P1_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apTgnDepan.before(clone);
        }
      }
      else if(lokasi1 == "Tangan Belakang")
      {
        if(tgnBlk == 0)
        {
          tgnBlk++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendHasilHeaderTanganBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilHeaderTanganBelakang').append(
            '<button disable type="button" class="btn btn-default removeTgnBlk" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeTgnBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
              '</button>'+
            '</div>');
          apTgnBelakang.before(cloneHead);
          apTgnBelakang.before(cloneBody);
        }
        else
        {
          tgnBlk++;
          var clone = $('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeTgnBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
              '</button>'+
              '<input type="hidden" id="EMR_dr_IGD_P1_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apTgnBelakang.before(clone);
        }
      }
      else if(lokasi1 == "Kaki Depan")
      {
        if(kkiDpn == 0)
        {
          kkiDpn++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendHasilHeaderKakiDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilHeaderKakiDepan').append(
            '<button disable type="button" class="btn btn-default removeKkiDpn" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendHasilKeluhanKakiDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanKakiDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removeKkiDpn" style="height:55px; width:20%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
            '</button>'+
            '</div>');
          apKkiDepan.before(cloneHead);
          apKkiDepan.before(cloneBody);
        }
        else
        {
          kkiDpn++;
          var clone = $('#EMR_dr_IGD_P1_AppendHasilKeluhanKakiDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanKakiDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removeKkiDpn" style="height:55px; width:20%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
            '</button>'+
            '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
            '</button>'+
              '<input type="hidden" id="EMR_dr_IGD_P1_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apKkiDepan.before(clone);
        }
      }
      else if(lokasi1 == "Kaki Belakang")
      {
        if(kkiBlk == 0)
        {
          kkiBlk++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendHasilHeaderKakiBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilHeaderKakiBelakang').append(
            '<button disable type="button" class="btn btn-default removeKkiBlk" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendHasilKeluhanKakiBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanKakiBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKkiBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
              '</button>'+
            '</div>');
          apKkiBelakang.before(cloneHead);
          apKkiBelakang.before(cloneBody);
        }
        else
        {
          kkiBlk++;
          var clone = $('#EMR_dr_IGD_P1_AppendHasilKeluhanKakiBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendHasilKeluhanKakiBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeKkiBlk" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ keluhan4 +'</b></span><br>'+
              '</button>'+
              '<input type="hidden" id="EMR_dr_IGD_P1_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_KeluhanLokalis[]" value="'+ keluhan +'">'+
            '</div>');
          apKkiBelakang.before(clone);
        }
      }
    }
    nomer++;
  });

  $('#EMR_dr_IGD_P1_insertKeluhanOrto').click(function() {
    var lokasi1 = EMR_dr_IGD_P1_Orto_GstsFrmLokalis2.innerHTML;
    var lokasi2 = EMR_dr_IGD_P1_Orto_LokasiLokalis.innerHTML;
    var ortoKeluhan1 = EMR_dr_IGD_P1_btnVulnus.innerHTML;
    var ortoKeluhan2 = EMR_dr_IGD_P1_btnSwelling.innerHTML;
    var ortoKeluhan3 = EMR_dr_IGD_P1_btnHematom.innerHTML;
    var ortoKeluhan4 = EMR_dr_IGD_P1_btnLookLain.value;
    var ortoKeluhan5 = EMR_dr_IGD_P1_btnNyeritekan.innerHTML;
    var ortoKeluhan6 = EMR_dr_IGD_P1_btnKrepitasi.innerHTML;
    var ortoKeluhan7 = EMR_dr_IGD_P1_btnHiperetesi.innerHTML;
    var ortoKeluhan8 = EMR_dr_IGD_P1_btnPerubahanSuhu.innerHTML;
    var ortoKeluhan9 = EMR_dr_IGD_P1_btnFeelLain.value;
    var ortoKeluhan10 = EMR_dr_IGD_P1_btnROM.innerHTML;
    var ortoKeluhan11 = EMR_dr_IGD_P1_btnMove.innerHTML;
    var ortoKeluhan12 = EMR_dr_IGD_P1_MoveLain.value;

    //if(nomerOrto == 1)
    if(EMR_dr_IGD_P1_Orto_LokasiLokalis.innerHTML == "")
    {
      $('#EMR_dr_IGD_P1_modalKosongKeluhandanLokalis').modal('show');
    }
    else
    {
      EMR_dr_IGD_P1_Orto_LokasiLokalis.innerHTML = '';
      EMR_dr_IGD_P1_MoveLain.value = '';
      EMR_dr_IGD_P1_btnFeelLain.value = '';

      if(lokasi1 == "Kepala Depan")
      {
        if(kplDpnOrto == 0)
        {
          kplDpnOrto++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderKepalaDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderKepalaDepan').append(
            '<button disable type="button" class="btn btn-default removekplDpnOrto" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removekplDpnOrto" style="height:55px; width:30%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Vulnus : '+ortoKeluhan1+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Swelling : '+ortoKeluhan2+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hematom : '+ortoKeluhan3+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>ROM : '+ortoKeluhan10+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move : '+ortoKeluhan11+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
              '</button>'+
            '</div>');
          apKplDepanOrto.before(cloneHead);
          apKplDepanOrto.before(cloneBody);
        }
        else
        {
          kplDpnOrto++;
          var clone = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removekplDpnOrto" style="height:55px; width:30%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Vulnus : '+ortoKeluhan1+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Swelling : '+ortoKeluhan2+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hematom : '+ortoKeluhan3+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>ROM : '+ortoKeluhan10+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move : '+ortoKeluhan11+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
              '</button>'+
            '</div>');
          apKplDepanOrto.before(clone);
        }
      }
      else if(lokasi1 == "Badan Depan")
      {
        if(bdnDpnOrto == 0)
        {
          bdnDpnOrto++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderBadanDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderBadanDepan').append(
            '<button disable type="button" class="btn btn-default removebdnDpnOrto" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removebdnDpnOrto" style="height:55px; width:30%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Vulnus : '+ortoKeluhan1+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Swelling : '+ortoKeluhan2+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hematom : '+ortoKeluhan3+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>ROM : '+ortoKeluhan10+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move : '+ortoKeluhan11+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
              '</button>'+
            '</div>');
          apBdnDepanOrto.before(cloneHead);
          apBdnDepanOrto.before(cloneBody);
        }
        else
        {
          bdnDpnOrto++;
          var clone = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removebdnDpnOrto" style="height:55px; width:30%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Vulnus : '+ortoKeluhan1+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Swelling : '+ortoKeluhan2+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hematom : '+ortoKeluhan3+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>ROM : '+ortoKeluhan10+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move : '+ortoKeluhan11+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
              '</button>'+
            '</div>');
          apBdnDepanOrto.before(clone);
        }
      }
      else if(lokasi1 == "Cervical Verterbral")
      {
        if(CervicalVerterbral == 0)
        {
          CervicalVerterbral++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderCervicalVerterbral').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderCervicalVerterbral').append(
            '<button disable type="button" class="btn btn-default removeCervicalVerterbral" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanCervicalVerterbral').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanCervicalVerterbral').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeCervicalVerterbral" style="height:55px; width:30%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Vulnus : '+ortoKeluhan1+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Swelling : '+ortoKeluhan2+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hematom : '+ortoKeluhan3+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>ROM : '+ortoKeluhan10+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move : '+ortoKeluhan11+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
              '</button>'+
            '</div>');
          apCervicalVerterbral.before(cloneHead);
          apCervicalVerterbral.before(cloneBody);
        }
        else
        {
          CervicalVerterbral++;
          var clone = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanCervicalVerterbral').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanCervicalVerterbral').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeCervicalVerterbral" style="height:55px; width:30%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Vulnus : '+ortoKeluhan1+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Swelling : '+ortoKeluhan2+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hematom : '+ortoKeluhan3+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>ROM : '+ortoKeluhan10+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move : '+ortoKeluhan11+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
              '</button>'+
            '</div>');
          apCervicalVerterbral.before(clone);
        }
      }
      else if(lokasi1 == "Thoracic Verterbral")
      {
        if(ThoracicVerterbral == 0)
        {
          ThoracicVerterbral++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderThoracicVerterbral').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderThoracicVerterbral').append(
            '<button disable type="button" class="btn btn-default removeThoracicVerterbral" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanThoracicVerterbral').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanThoracicVerterbral').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeThoracicVerterbral" style="height:55px; width:30%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Vulnus : '+ortoKeluhan1+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Swelling : '+ortoKeluhan2+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hematom : '+ortoKeluhan3+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>ROM : '+ortoKeluhan10+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move : '+ortoKeluhan11+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
              '</button>'+
            '</div>');
          apThoracicVerterbral.before(cloneHead);
          apThoracicVerterbral.before(cloneBody);
        }
        else
        {
          ThoracicVerterbral++;
          var clone = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanThoracicVerterbral').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanThoracicVerterbral').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeThoracicVerterbral" style="height:55px; width:30%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Vulnus : '+ortoKeluhan1+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Swelling : '+ortoKeluhan2+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hematom : '+ortoKeluhan3+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>ROM : '+ortoKeluhan10+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move : '+ortoKeluhan11+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
              '</button>'+
            '</div>');
          apThoracicVerterbral.before(clone);
        }
      }
      else if(lokasi1 == "Lumbar Verterbral")
      {
        if(LumbarVerterbral == 0)
        {
          LumbarVerterbral++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderLumbarVerterbral').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderLumbarVerterbral').append(
            '<button disable type="button" class="btn btn-default removeLumbarVerterbral" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanLumbarVerterbral').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanLumbarVerterbral').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeLumbarVerterbral" style="height:55px; width:30%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Vulnus : '+ortoKeluhan1+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Swelling : '+ortoKeluhan2+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hematom : '+ortoKeluhan3+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>ROM : '+ortoKeluhan10+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move : '+ortoKeluhan11+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
              '</button>'+
            '</div>');
          apLumbarVerterbral.before(cloneHead);
          apLumbarVerterbral.before(cloneBody);
        }
        else
        {
          LumbarVerterbral++;
          var clone = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanLumbarVerterbral').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanLumbarVerterbral').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removeLumbarVerterbral" style="height:55px; width:30%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Vulnus : '+ortoKeluhan1+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Swelling : '+ortoKeluhan2+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hematom : '+ortoKeluhan3+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>ROM : '+ortoKeluhan10+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move : '+ortoKeluhan11+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
              '</button>'+
            '</div>');
          apLumbarVerterbral.before(clone);
        }
      }
      else if(lokasi1 == "Kepala Belakang")
      {
        if(kplBlkOrto == 0)
        {
          kplBlkOrto++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderKepalaBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderKepalaBelakang').append(
            '<button disable type="button" class="btn btn-default removebdnBlkOrto" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removekplBlkOrto" style="height:55px; width:30%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Vulnus : '+ortoKeluhan1+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Swelling : '+ortoKeluhan2+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hematom : '+ortoKeluhan3+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>ROM : '+ortoKeluhan10+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move : '+ortoKeluhan11+' </span>'+
              '</button>'+
              '<button  class="btn yellow" style="height:40px; width:50%">'+
                '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
              '</button>'+
            '</div>');
          apKplBelakangOrto.before(cloneHead);
          apKplBelakangOrto.before(cloneBody);
        }
        else
        {
          kplBlkOrto++;
          var clone = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removekplBlkOrto" style="height:55px; width:30%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Vulnus : '+ortoKeluhan1+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Swelling : '+ortoKeluhan2+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hematom : '+ortoKeluhan3+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>ROM : '+ortoKeluhan10+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move : '+ortoKeluhan11+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
            '</button>'+
            '</div>');
          apBdnBelakangOrto.before(clone);
        }
      }
      else if(lokasi1 == "Tangan Depan")
      {
        if(tgnDpnOrto == 0)
        {
          tgnDpnOrto++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderTanganDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderTanganDepan').append(
            '<button disable type="button" class="btn btn-default removetgnDpnOrto" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removetgnDpnOrto" style="height:55px; width:30%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Vulnus : '+ortoKeluhan1+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Swelling : '+ortoKeluhan2+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hematom : '+ortoKeluhan3+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>ROM : '+ortoKeluhan10+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move : '+ortoKeluhan11+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
            '</button>'+
            '</div>');
          apTgnDepanOrto.before(cloneHead);
          apTgnDepanOrto.before(cloneBody);
        }
        else
        {
          tgnDpnOrto++;
          var clone = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removetgnDpnOrto" style="height:55px; width:30%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Vulnus : '+ortoKeluhan1+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Swelling : '+ortoKeluhan2+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hematom : '+ortoKeluhan3+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>ROM : '+ortoKeluhan10+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move : '+ortoKeluhan11+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
            '</button>'+
            '</div>');
          apTgnDepanOrto.before(clone);
        }
      }
      else if(lokasi1 == "Tangan Belakang")
      {
        if(tgnBlkOrto == 0)
        {
          tgnBlkOrto++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderTanganBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderTanganBelakang').append(
            '<button disable type="button" class="btn btn-default removetgnBlkOrto" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removetgnBlkOrto" style="height:55px; width:30%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Vulnus : '+ortoKeluhan1+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Swelling : '+ortoKeluhan2+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hematom : '+ortoKeluhan3+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>ROM : '+ortoKeluhan10+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move : '+ortoKeluhan11+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
            '</button>'+
            '</div>');
          apTgnBelakangOrto.before(cloneHead);
          apTgnBelakangOrto.before(cloneBody);
        }
        else
        {
          tgnBlkOrto++;
          var clone = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removetgnBlkOrto" style="height:55px; width:30%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Vulnus : '+ortoKeluhan1+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Swelling : '+ortoKeluhan2+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hematom : '+ortoKeluhan3+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>ROM : '+ortoKeluhan10+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move : '+ortoKeluhan11+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
            '</button>'+
            '</div>');
          apTgnBelakangOrto.before(clone);
        }
      }
      else if(lokasi1 == "Kaki Depan")
      {
        if(kkiDpnOrto == 0)
        {
          kkiDpnOrto++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderKakiDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderKakiDepan').append(
            '<button disable type="button" class="btn btn-default removekkiDpnOrto" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKakiDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKakiDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removekkiDpnOrto" style="height:55px; width:30%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Vulnus : '+ortoKeluhan1+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Swelling : '+ortoKeluhan2+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hematom : '+ortoKeluhan3+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>ROM : '+ortoKeluhan10+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move : '+ortoKeluhan11+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
            '</button>'+
            '</div>');
          apKkiDepanOrto.before(cloneHead);
          apKkiDepanOrto.before(cloneBody);
        }
        else
        {
          kkiDpnOrto++;
          var clone = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKakiDepan').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKakiDepan').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
            '<button disable type="button" class="btn green" style="height:55px; width:70%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
            '</button>'+
            '<button class="btn btn-danger removekkiDpnOrto" style="height:55px; width:30%">'+
              '<i class="fa fa-close"> Hapus</i>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Vulnus : '+ortoKeluhan1+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Swelling : '+ortoKeluhan2+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hematom : '+ortoKeluhan3+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Look Lain2 : '+ortoKeluhan4+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Nyeri Tekan : '+ortoKeluhan5+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Krepitasi : '+ortoKeluhan6+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Hiperetesi : '+ortoKeluhan7+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Perubahan Suhu : '+ortoKeluhan8+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Feel Lain2 : '+ortoKeluhan9+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>ROM : '+ortoKeluhan10+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move : '+ortoKeluhan11+' </span>'+
            '</button>'+
            '<button  class="btn yellow" style="height:40px; width:50%">'+
              '<span>Move Lain2 : '+ortoKeluhan12+' </span>'+
            '</button>'+
            '</div>');
          apKkiDepanOrto.before(clone);
        }
      }
      else if(lokasi1 == "Kaki Belakang")
      {
        if(kkiBlkOrto == 0)
        {
          kkiBlkOrto++;
          var cloneHead = $('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderKakiBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderKakiBelakang').append(
            '<button disable type="button" class="btn btn-default removekkiBlkOrto" style="height:55px; width:100%">'+
              '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Bagian Lokalis : </b></span><br>'+
              '<span style="font-size:16px"><b>'+ lokasi1 +'</b></span><br>'+
            '</button>');
          var cloneBody = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKakiBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKakiBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ ortoKeluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removekkiBlkOrto" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ ortoKeluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ ortoKeluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ ortoKeluhan4 +'</b></span><br>'+
              '</button>'+
            '</div>');
          apKkiBelakangOrto.before(cloneHead);
          apKkiBelakangOrto.before(cloneBody);
        }
        else
        {
          kkiBlkOrto++;
          var clone = $('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKakiBelakang').clone().find("input:text").val("").end().appendTo('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKakiBelakang').append(
            '<div class="btn-group btn-group btn-group-justified" style="width:100%">'+
              '<button disable type="button" class="btn green" style="height:55px; width:50%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Lokasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ lokasi2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Inspeksi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ ortoKeluhan1 +'</b></span><br>'+
              '</button>'+
              '<button class="btn btn-danger removekkiBlkOrto" style="height:55px; width:20%">'+
                '<i class="fa fa-close"> Hapus</i>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:30%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Palpasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ ortoKeluhan2 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Perkusi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ ortoKeluhan3 +'</b></span><br>'+
              '</button>'+
              '<button disable type="button" class="btn green" style="height:55px; width:35%">'+
                '<span style="font-size:8px; display: block; margin-top: -0.2em; margin-bottom: -2em;"><b> Auskultasi : </b></span><br>'+
                '<span style="font-size:16px"><b>'+ ortoKeluhan4 +'</b></span><br>'+
              '</button>'+
              '<input type="hidden" id="EMR_dr_IGD_P1_Orto_GstsFrmLokalis2[]" value="'+ lokasi1 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_Orto_LokasiLokalis[]" value="'+ lokasi2 +'">'+
              '<input type="hidden" id="EMR_dr_IGD_P1_SLBedahInspeksi[]" value="'+ ortoKeluhan +'">'+
            '</div>');
          apKkiBelakangOrto.before(clone);
        }
      }
    }
  });


  $( "body" ).on('click', '.removeKplDpn', function(){
      if(kplDpn <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilHeaderKepalaDepan').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaDepan').remove();
        kplDpn--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaDepan').remove();
        kplDpn--;
      }
  });
  $( "body" ).on('click', '.removeKplBlk', function(){
      if(kplBlk <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilHeaderKepalaBelakang').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaBelakang').remove();
        kplBlk--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanKepalaBelakang').remove();
        kplBlk--;
      }
  });
  $( "body" ).on('click', '.removeBdnDpn', function(){
      if(bdnDpn <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilHeaderBadanDepan').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanDepan').remove();
        bdnDpn--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanDepan').remove();
        bdnDpn--;
      }
  });
  $( "body" ).on('click', '.removeBdnBlk', function(){
      if(bdnBlk <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilHeaderBadanBelakang').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanBelakang').remove();
        bdnBlk--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanBelakang').remove();
        bdnBlk--;
      }
  });
  $( "body" ).on('click', '.removeTgnDpn', function(){
      if(tgnDpn <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilHeaderTanganDepan').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganDepan').remove();
        tgnDpn--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganDepan').remove();
        tgnDpn--;
      }
  });
  $( "body" ).on('click', '.removeTgnBlk', function(){
      if(tgnBlk <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilHeaderTanganBelakang').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganBelakang').remove();
        tgnBlk--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanTanganBelakang').remove();
        tgnBlk--;
      }
  });
  $( "body" ).on('click', '.removeKkiDpn', function(){
      if(kkiDpn <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilHeaderBadanDepan').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanDepan').remove();
        kkiDpn--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanDepan').remove();
        kkiDpn--;
      }
  });
  $( "body" ).on('click', '.removeKkiBlk', function(){
      if(kkiBlk <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilHeaderBadanBelakang').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanBelakang').remove();
        kkiBlk--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendHasilKeluhanBadanBelakang').remove();
        kkiBlk--;
      }
  });

  $( "body" ).on('click', '.removeKplDpnOrto', function(){
      if(kplDpn <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderKepalaDepan').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaDepan').remove();
        kplDpn--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaDepan').remove();
        kplDpn--;
      }
  });
  $( "body" ).on('click', '.removeKplBlkOrto', function(){
      if(kplBlk <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderKepalaBelakang').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaBelakang').remove();
        kplBlk--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaBelakang').remove();
        kplBlk--;
      }
  });
  $( "body" ).on('click', '.removeBdnDpnOrto', function(){
      if(bdnDpn <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderBadanDepan').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanDepan').remove();
        bdnDpn--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanDepan').remove();
        bdnDpn--;
      }
  });
  $( "body" ).on('click', '.removeBdnBlkOrto', function(){
      if(bdnBlk <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderBadanBelakang').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanBelakang').remove();
        bdnBlk--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanBelakang').remove();
        bdnBlk--;
      }
  });
  $( "body" ).on('click', '.removeTgnDpnOrto', function(){
      if(tgnDpn <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderTanganDepan').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganDepan').remove();
        tgnDpn--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganDepan').remove();
        tgnDpn--;
      }
  });
  $( "body" ).on('click', '.removeTgnBlkOrto', function(){
      if(tgnBlk <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderTanganBelakang').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganBelakang').remove();
        tgnBlk--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganBelakang').remove();
        tgnBlk--;
      }
  });
  $( "body" ).on('click', '.removeKkiDpnOrto', function(){
      if(kkiDpn <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderBadanDepan').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanDepan').remove();
        kkiDpn--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanDepan').remove();
        kkiDpn--;
      }
  });
  $( "body" ).on('click', '.removeKkiBlkOrto', function(){
      if(kkiBlk <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderBadanBelakang').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanBelakang').remove();
        kkiBlk--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanBelakang').remove();
        kkiBlk--;
      }
  });
  $( "body" ).on('click', '.removeCervicalVerterbral', function(){
      if(CervicalVerterbral <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderCervicalVerterbral').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanCervicalVerterbral').remove();
        CervicalVerterbral--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanCervicalVerterbral').remove();
        CervicalVerterbral--;
      }
  });
  $( "body" ).on('click', '.removeThoracicVerterbral', function(){
      if(ThoracicVerterbral <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderThoracicVerterbral').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanThoracicVerterbral').remove();
        ThoracicVerterbral--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanThoracicVerterbral').remove();
        ThoracicVerterbral--;
      }
  });
  $( "body" ).on('click', '.removeLumbarVerterbral', function(){
      if(LumbarVerterbral <= 1)
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilHeaderLumbarVerterbral').remove();
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanLumbarVerterbral').remove();
        LumbarVerterbral--;
      }
      else
      {
        $(this).closest('#EMR_dr_IGD_P1_AppendOrtoHasilKeluhanLumbarVerterbral').remove();
        LumbarVerterbral--;
      }
  });
});
