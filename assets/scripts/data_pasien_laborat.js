$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#LABORAT_Diagnosis" ).bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        //minLength: 3,
        source: function( request, response ) {
            $.ajax({
                url: base_url + "index.php/ubah_status_laboratorium/getAllDeskripsi",
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

function editDataPasienLabo(id)
{
    var json = getDataPasienLabo(id);
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
        $('#edit_dt_pasien_labo').modal('show');
    })
}

function getDataPasienLabo(id)
{
  var json = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': base_url + "ubah_status_laboratorium/getDataById",
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
      url: base_url + "index.php/ubah_status_laboratorium/getDataById34",
      success : function(data){
        $("#result_table").html(data);
        $('#noreglaborat').val(uid);
        $('#normlaborat').val(uid2);
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
      url: base_url + "index.php/ubah_status_laboratorium/getDataById34",
      success : function(data){
        $("#result_tablebpjs").html(data);
        $('#noreglaboratbpjs').val(uidbpjs);
        $('#normlaboratbpjs').val(uid2bpjs);
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

function lihatHasilPasienLabo(id)
{
    var json = getDataHasilPasienLabo(id);
    $.map(json, function(item) {
        $('#noreg_hasil').html(item.Noreg);
        $('#noreg_hasil2').html(item.Noreg);
        Number.prototype.padLeft = function(base,chr){
            var  len = (String(base || 10).length - String(this).length)+1;
            return len > 0? new Array(len).join(chr || '0')+this : this;
        };
        var monthNames = ["Januari", "Februari", "Maret","April", "Mei", "Juni", "Juli","Augustus", "September", "Oktober","November", "Desember"];
        var d = new Date(item.TglPeriksa);
        var dformat = [d.getDate().padLeft(),monthNames[d.getMonth()],d.getFullYear()].join(' ') + ' ' + [d.getHours().padLeft(),d.getMinutes().padLeft(),d.getSeconds().padLeft()].join(':');
        $('#Tgl_Periksa').html(dformat);
        $('#Hemo_globin').html(item.Hemoglobin);
        $('#leko_sit').html(item.Lekosit);
        $('#led_1').html(item.LED1);
        $('#led_2').html(item.LED2);
        $('#Diff_Count').html(item.DiffCount);
        $('#Hema_tocrit').html(item.Hematocrit);
        $('#Throm_bosit').html(item.Thrombosit);
        $('#Eri_throsit').html(item.Erithrosit);
        $('#SG_OT').html(item.SGOT);
        $('#SG_PT').html(item.SGPT);
        $('#HBs_AG').html(item.HBsAG);
        $('#HBs_AB').html(item.HBsAB);
        $('#Choles_tereol').html(item.Cholestereol);
        $('#H_DL').html(item.HDL);
        $('#L_DL').html(item.LDL);
        $('#Trigli_serida').html(item.Trigliserida);
        $('#U_rea').html(item.Urea);
        $('#Asam_Urat').html(item.AsamUrat);
        $('#Crea_tinin').html(item.Creatinin);
        $('#Pu_asa').html(item.Puasa);
        $('#dua_JamPP').html(item.duaJamPP);
        $('#Albu_min').html(item.Albumin);
        $('#Re_duksi').html(item.Reduksi);
        $('#p_H').html(item.pH);
        $('#SedEri_throsit1').html(item.SedErithrosit1);
        $('#SedEri_throsit2').html(item.SedErithrosit2);
        $('#SedLe_kosit1').html(item.SedLekosit1);
        $('#SedLe_kosit2').html(item.SedLekosit2);
        $('#SedE_pithel1').html(item.SedEpithel1);
        $('#SedE_pithel2').html(item.SedEpithel2);
        $('#Sed_Kristal').html(item.SedKristal);
        $('#Lain_lain').html(item.Lainlain);
        $('#Amphe_tamin').html(item.Amphetamin);
        $('#Opi_um').html(item.Opium);
        $('#Cho_lines').html(item.Cholines);
        $('#G6_PD').html(item.G6PD);
        $('#Ke_lainan').html(item.Kelainan);
        $('#Uro_bilinogen').html(item.Urobilinogen);
        $('#Bili_rubin').html(item.Bilirubin);
        $('#A_lk').html(item.Alk);
        $('#H_iv').html(item.Hiv);
        $('#lihat_hasil_pasien_labo').modal('show');
    })
}

function getDataHasilPasienLabo(id)
{
  var json = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': base_url + "ubah_status_laboratorium/getHasilPasienLabo",
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

var laboratorium_pasien_lain = document.getElementById('laboratorium_pasien_lain');

function clearedit() {
    $("#namadtlbedit1").val("");
    $("#namadtlbedit2").val("");
    $("#LABORAT_Diagnosis").val("");
    $("#LABORAT_catatan").val("");
    if(laboratorium_pasien_lain.checked == true)
    {
        $('#laboratorium_pasien_lain1').toggleClass('collapse');
    }
    $("#laboratorium_pasien_lain2").val("");
    $("#alert-msg-tambahpasienlb").empty();
};

function clearubah() {
    $("#noreglaborat").val("");
    $("#normlaborat").val("");
    $("#alert-msg-ubahpasienlb").empty();
};

function clearubahbpjs() {
    $("#noreglaboratbpjs").val("");
    $("#normlaboratbpjs").val("");
    $("#alert-msg-ubahpasienlbbpjs").empty();
};

$('#edit_dt_pasien_labo').on('hidden', function(){
    clearedit();
    $(this).find("input[type=checkbox], input[type=radio]").prop("checked", "").end();
});

$('#ubah_dt_pasien_labo').on('hidden', function(){
    clearubah();
});

$('#ubah_dt_pasien_labo_bpjs').on('hidden', function(){
    clearubahbpjs();
});

$('#tambahpasienlb1').click(function() {

    var checked = []
    $("input[name='laborat_pasien_checkbox[]']:checked").each(function ()
    {
        checked.push($(this).val());
    });

    var checkedValue = null;
    $('input[name="laboratorium_pasien_lain"]:checked').each(function() {
      checkedValue = $('#laboratorium_pasien_lain').val()
    });

    $.ajax({
        url: base_url + "ubah_status_laboratorium/simpan",
        type: 'POST',
        data: { namadtlbedit1:$('#namadtlbedit1').val(),
                namadtlbedit2:$('#namadtlbedit2').val(),
                laborat_checkbox:checked,
                laboratorium_pasien_lain:checkedValue,
                laboratorium_pasien_lain2:$('#laboratorium_pasien_lain2').val(),
                LABORAT_Diagnosis:$('#LABORAT_Diagnosis').val(),
                LABORAT_catatan:$('#LABORAT_catatan').val()
              },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-tambahpasienlb').html('<div class="alert alert-success text-center">Data Berhasil Disimpan!</div>');
              $("#edit_dt_pasien_labo").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#edit_dt_pasien_labo").modal('hide');
              });
              window.location.href = base_url + "ubah_status_laboratorium";
            }
            else if (msg == 'NO1')
            {
              $('#alert-msg-tambahpasienlb').html('<div class="alert alert-danger text-center">Data Laboratorium Pasien Harus Diisi!</div>');
            }
            else
            {
              $('#alert-msg-tambahpasienlb').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});

$('#laboratorium_pasien_lain').click(function() {
    $('#laboratorium_pasien_lain1').toggleClass('collapse');
    $("#laboratorium_pasien_lain2").val("");
});

$('#ubahpasienlb1').click(function() {
    $.ajax({
        url: base_url + "ubah_status_laboratorium/ubah_status",
        type: 'POST',
        data: { noreglaborat:$('#noreglaborat').val(),
                normlaborat:$('#normlaborat').val()
              },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-ubahpasienlb').html('<div class="alert alert-success text-center">Status Berhasil Dirubah!</div>');
              $("#ubah_dt_pasien_labo").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#ubah_dt_pasien_labo").modal('hide');
              });
              window.location.href = base_url + "ubah_status_laboratorium";
            }
            /*else if (msg == 'NO')
            {
              $('#alert-msg-ubahpasienlb').html('<div class="alert alert-danger text-center">Pasien Sudah Melakukan Pemeriksaan Sebelumnya!</br><button type="button" class="btn btn-default" data-dismiss="modal">Ok</button></div>');
            }*/
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
        url: base_url + "ubah_status_laboratorium/ubah_status",
        type: 'POST',
        data: { noreglaborat:$('#noreglaboratbpjs').val(),
                normlaborat:$('#normlaboratbpjs').val()
              },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-ubahpasienlbbpjs').html('<div class="alert alert-success text-center">Status Berhasil Dirubah!</div>');
              $("#ubah_dt_pasien_labo_bpjs").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#ubah_dt_pasien_labo_bpjs").modal('hide');
              });
              window.location.href = base_url + "ubah_status_laboratorium";
            }
            /*else if (msg == 'NO')
            {
              $('#alert-msg-ubahpasienlb').html('<div class="alert alert-danger text-center">Pasien Sudah Melakukan Pemeriksaan Sebelumnya!</br><button type="button" class="btn btn-default" data-dismiss="modal">Ok</button></div>');
            }*/
            else
            {
              $('#alert-msg-ubahpasienlbbpjs').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});
