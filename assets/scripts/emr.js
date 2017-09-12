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
    /*focus: function( event, ui ) {
            this.value = (ui.item ? ui.item.value : '');
            //return false;
        },*/
    select: function( event, ui ) {
        //e.preventDefault();
        console.log(this);
        this.value = (ui.item ? ui.item.value : '');
        //$(".project").val(ui.item.kodebarang);
        //$( ".project" ).val( ui.item.);
        //$(".project").val(ui.item.label);
        $(this).closest('div').find('input.project').val(ui.item.label);
        $(this).closest('div').find('input.project_racik').val(ui.item.label);
        console.log(ui.item.label);
        //$(this).val(ui.item.value);
        return false;
    },
    /*select: function (event, ui) {
        this.value = (ui.item ? ui.item.value : '');
        return false;
    },*/
    source: function( request, response ) {
        $.ajax({
            url: base_url + "index.php/emr/getAllObat",
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

/*$(document).ready(function() {
    $('#diagnosis').autocomplete({
        source: function( request, response ) {
            $.ajax({
                url: base_url + "index.php/emr/getAllDeskripsi",
                dataType: "json",
                data: {
                    q: request.term
                },
                success: function( data ) {
                    response(data);
                }
            });
        },
        multiselect: true
    });
});

$(document).ready(function() {
    $('#alergiobat').autocomplete({
        source: function( request, response ) {
            $.ajax({
                url: base_url + "index.php/emr/getAllPasienAlergiObat",
                dataType: "json",
                data: {
                    q: request.term
                },
                success: function( data ) {
                    response(data);
                }
            });
        },
        multiselect: true,
        minLength: 3
    });
});

$(function() {
    function split( val ) {
        return val.split( /,\s*/ /*);
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#diagnosis" ).bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        minLength: 1,
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
    });
});

$(function() {
    function split( val ) {
        return val.split( /,\s*/ /*);
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#alergiobat" ).bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        minLength: 3,
        source: function( request, response ) {
            // delegate back to autocomplete, but extract the last term
            $.ajax({
                url: base_url + "index.php/emr/getAllPasienAlergiObat",
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
    });
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = $('#div_button');

    var nomer = 2;

    $('#tambah').click(function() {
        var clone = $('#div1').clone().find("input:text").val("").end().appendTo('#div1').append(
          '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">'+
            '<div class="portlet light bordered">'+
              '<div class="portlet-title row">'+
                '<div class="caption font-red-sunglo col-md-8 col-sm-8 col-xs-8">'+
                  '<i class="fa fa-gift font-red-sunglo"></i>'+
                  '<span class="caption-subject bold uppercase">Obat Ke - '+ nomer +' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>'+
                '</div>'+
                '<div class="col-md-3 col-sm-3 col-xs-3">'+
                  '<a class="btn btn-danger remove">'+
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
                          '<input type="text" name="obatsatuan[]" value="" class="form-control obatsatuan" placeholder="ketik nama obat"/>'+
                          '<input type="hidden" name="idobatsatuan[]" value="" class="form-control project"/>'+
                      '</div>'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<div class="form-group">'+
                        '<label class="control-label" style="font-size:14px">Aturan Pakai</label>'+
                        '<select id="aturanpakaisatuan2" name="aturanpakaisatuan2[]" class="form-control" data-size="4">'+
                          '<option value="" disabled selected>Aturan</option>'+
                          '<option value="Sebelum Makan">a.c</option>'+
                          '<option value="Saat Makan">d.c</option>'+
                          '<option value="Sesudah Makan">p.c</option>'+
                        '</select>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                  '<div class="row mt-repeater-row">'+
                    '<div class="col-md-3">'+
                      '<input type="text" id="jumlahsatuan" name="jumlahsatuan[]" placeholder="Jumlah" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>'+
                    '</div>'+
                    '<div class="col-md-5">'+
                      '<input type="text" id="aturanpakaisatuan" name="aturanpakaisatuan[]" placeholder="Signa" class="form-control" />'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>'+
          '</div>');
        enable_autocomplete($('.obatsatuan'));
        // insert duplicate before button div
        before.before(clone);

        nomer++;
    });


    $( "body" ).on('click', '.remove', function(){
        nomer--;
        $(this).closest('#div1').remove();
    });
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = null;
    var value = null;

    //var nomer2 = 1;

     $(document).on('click', '.tambahracik-click', function () {
        value = $(this).data('todo').number;

        var before = $('#div_buttonracik'+value);
        var clone = $('#divracik'+value).clone(true).find("input:text").val("").end().appendTo('#divracik'+value).append(
            '<div class="form-group">'+
                    '<div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-1em;">'+
                        '<div class="row mt-repeater-row" style="display:block; margin-bottom:-1.5em;">'+
                            '<div class="col-md-8">'+
                                '<div class="form-group">'+
                                    '<input type="text" name="obatsatuanracik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>'+
                                    '<input type="text" name="idobatsatuan_racik[]" value="" class="form-control project_racik"/>'+
                                    '<input type="hidden" value="RACIK_000'+value+'" id="idracik" name="idraciksatuan[]" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '<div class="mt-repeater-cell">'+
                                        '<input type="text" placeholder="0" name="jumlahracik[]" id="jumlahracik" class="form-control mt-repeater-input-inline" onkeypress="return hanyaAngka(event)"/>'+
                                        '<a class="btn btn-danger removeracik mt-repeater-del-right mt-repeater-btn-inline">'+
                                            '<i class="fa fa-close"></i>'+
                                        '</a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
            '</div>');
        enable_autocomplete($('.obatsatuan'));
        // insert duplicate before button div
        before.before(clone);
        //nomer2+1;
        /*var obatsatuanracik = []
        $("input[name='obatsatuanracik[]']").each(function ()
        {
            obatsatuanracik.push($(this).val());
        });

        var jumlahracik2 = []
        $("input[name='jumlahracik[]']").each(function ()
        {
            jumlahracik2.push($(this).val());
        });

            $.ajax({
              url: base_url + "emr/CbtnSimpanID",
              type: 'POST',
              data: { obatsatuanracik:obatsatuanracik,
                      jumlahracik2:jumlahracik2
                    },
              success: function(msg)
              {
                if (msg == 'msg-Selanjutnyaxx')
                {
                  $('#alert-msg-DokterEMR').html('<div class="alert alert-danger">kesimpen bro</div>');
                }
                else if (msg == 'msg-222')
                {
                  $('#alert-msg-DokterEMR').html('<div class="alert alert-danger">Isien cok</div>');
                }
                else
                {
                  $('#alert-msg-DokterEMR').html('<div class="alert alert-danger">' + msg + '</div>');
                }
              }
            });*/


    /*});

    $( "body" ).on('click', '.removeracik', function(){
        $(this).closest('#divracik'+value).remove();
    });
});

$(document).ready(function() {

    enable_autocomplete($('.obatsatuan'));

    var before = $('#div_buttonracikobat');

    var nomer2 = 2;
    var todo = '{"number":"'+nomer2+'"}';

    $('#tambahracikobat').click(function() {
        var clone = $('#divracikobat').clone(true).find("input:text").val("").end().appendTo('#divracikobat').append(
            '<div class="portlet box grey">'+
                '<div class="portlet-title">'+
                    '<div class="caption">'+
                        '<i class="fa fa-gift"></i>Obat Racikan ke-'+ nomer2 +' </div>'+
                    '<div class="tools">'+
                        '<a href="javascript:;" class="collapse"> </a>'+
                   '</div>'+
                '</div>'+
                '<div class="portlet-body">'+
                    '<div class="form-group mt-repeater">'+
                            '<div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-0.5em;">'+
                                '<div class="row mt-repeater-row" style="display:block; margin-bottom:-1em;">'+
                                    '<div class="col-md-8">'+
                                        '<div class="form-group">'+
                                            '<label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>'+
                                            '<input type="text" name="obatsatuanracik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>'+
                                            '<input type="text" name="idobatsatuan_racik[]" value="" class="form-control project_racik"/>'+
                                            '<input type="hidden" value="RACIK_000'+nomer2+'" id="idracik" name="idraciksatuan[]" class="form-control" />'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-4">'+
                                        '<div class="form-group">'+
                                            '<label class="control-label" style="font-size:14px">Jumlah</label>'+
                                            '<input type="text" id="jumlahracik" name="jumlahracik[]" placeholder="0" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '<div id="divracik'+nomer2+'">'+
                        '</div>'+
                        '<div id="div_buttonracik'+nomer2+'">'+
                            '<a class="btn blue tambahracik-click" name="tambahracik" value="Tambah Data"><i class="fa fa-plus"></i> Tambah Bahan</a>'+
                        '</div>'+
                        '<div class="form-group">'+
                        '</div>'+
                        '<div class="form-group">'+
                            '<label class="control-label" style="font-size:14px">Aturan Pakai</label>'+
                            '<select id="aturanpakairacik2" name="aturanpakairacik2[]" class="form-control" data-size="4">'+
                                '<option value="" disabled selected>Aturan</option>'+
                                '<option value="Sebelum Makan">a.c</option>'+
                                '<option value="Saat Makan">d.c</option>'+
                                '<option value="Sesudah Makan">p.c</option>'+
                            '</select>'+
                        '</div>'+
                        '<div class="form-group">'+
                            '<input type="text" id="jumlahracik2" name="jumlahracik2[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>'+
                        '</div>'+
                        '<div class="form-group">'+
                            '<input type="text" id="aturanpakairacik" name="aturanpakairacik[]" placeholder="Signa" class="form-control" />'+
                        '</div>'+
                        '<div class="form-group">'+
                            '<input type="hidden" value="RACIK_000'+nomer2+'" id="idracik" name="idracik[]" class="form-control" />'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                        '<a class="btn btn-danger removeracikobat">'+
                            '<i class="fa fa-close"> Hapus</i>'+
                        '</a>'+
            '</div>');
        enable_autocomplete($('.obatsatuan'));
        // insert duplicate before button div
        before.before(clone);
        clone.find(".tambahracik-click").attr("data-todo", '{"number":"'+nomer2+'"}');

        /*$.ajax({
          'type': "POST",
          'url': base_url + "index.php/emr/tambahID",
          'dataType': "json",
            success: function (data) {
              console.log(data);
              clone.find('.idracik').val(data);
            }

        });*/

        /*nomer2++;
    });




    $( "body" ).on('click', '.removeracikobat', function(){

      /*var idracik = []
      $("input[name='idracik[]']").each(function ()
      {
          idracik.push($(this).val());
      });

      $.ajax({
        type : 'POST',
        //data : {id: idracik},
        url : base_url + "emr/deleteID",
        //dataType: "json",
        success : function(data){
            //console.log(data);
           alert(data);
        }
      });*/

        /*nomer2--;

      $(this).closest('#divracikobat').remove();
    });
});*/

/*var radiologi_lain = document.getElementById('radiologi_lain');
var laboratorium_lain = document.getElementById('laboratorium_lain');

$('#reset_radio').on('click', function () {
  if(radiologi_lain.checked == true)
  {
      $('#radiologi_lain_1').toggleClass('collapse');
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

$('#reset_laboratorium').on('click', function () {
  if(laboratorium_lain.checked == true)
  {
      $('#laboratorium_lain_1').toggleClass('collapse');
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

radiologi_lain.onchange = function()
{
    $('#radiologi_lain_1').toggleClass('collapse');
};

laboratorium_lain.onchange = function()
{
    $('#laboratorium_lain_1').toggleClass('collapse');
};

var rklinik = document.getElementById('rklinik');
var rlain = document.getElementById('rlain');

rklinik.onchange = function()
{
    $('#rklinik_text1').toggleClass('collapse');
};

rlain.onchange = function()
{
    $('#rlain_text1').toggleClass('collapse');
};*/
