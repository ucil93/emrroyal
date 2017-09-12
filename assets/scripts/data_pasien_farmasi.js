$(document).ready(function(){
  $(document).on('click', '#getUser', function(){
    var tgltampilobat = $(this).attr('data-tgltampilobat');
    var jamtampilobat = $(this).attr('data-jamtampilobat');
    var noreg = $(this).attr('data-noreg');
    var namaunit = $(this).attr('data-namaunit');
    var dokter = $(this).attr('data-dokter');
    var namapasien = $(this).attr('data-namapasien');
    var tgllahir = $(this).attr('data-tgllahir');
    var nik = $(this).attr('data-nik');
    var norm = $(this).attr('data-norm');
    var nmcustomer = $(this).attr('data-nmcustomer');
    var alergi = $(this).attr('data-alergi');
    var tagihan = $(this).attr('data-tagihan');
    var idobat = $(this).attr('data-idobat');
    var kelamin = $(this).attr('data-kelamin');
    var usia = $(this).attr('data-usia');

    $.ajax({
      type : "POST",
      data: {idobat: idobat},
      url: base_url + "index.php/transaksi_farmasi/getDataById_Obat",
      success : function(data){
        $("#result_table").html(data);
        //$('#noregobat').val(noreg);
        //$('#normobat').val(norm);
        $('#idobatutama').val(idobat);
        $('#tgltampilobatlabel').html(tgltampilobat);
        $('#jamtampilobatlabel').html(jamtampilobat);
        $('#noregobatlabel').html(noreg);
        $('#namaunitlabel').html(namaunit);
        $('#dokterlabel').html(dokter);
        $('#namapasienlabel').html(namapasien);
        $('#namapasienlabel2').html(namapasien);
        $('#tgllahirlabel').html(tgllahir);
        $('#niklabel').html(nik);
        $('#normlabel').html(norm);
        $('#nmcustomerlabel').html(nmcustomer);
        $('#alergilabel').html(alergi);
        $('#tagihanlabel').html(tagihan);
        $('#kelaminlabel').html(kelamin);
        $('#usialabel').html(usia);
      }
    });
  });
});

document.getElementById("btnPrint").onclick = function() {
    printElement(document.getElementById("printing_table"));
    //printElement(document.getElementById("printThis"));
    //printElement(document.getElementById("printThisToo"), true, "<hr />");
    window.print();
}

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

$('#ubahstatustransaksi').click(function() {

    $.ajax({
        url: base_url + "transaksi_farmasi/ubah_proses",
        type: 'POST',
        data: { idobatstatus:$('#idobatutama').val() },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-transaksipasienfarmasi').html('<div class="alert alert-success text-center">Status Berhasil Dirubah!</div>');
              $("#transaksi_pasien_farmasi").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#transaksi_pasien_farmasi").modal('hide');
              });
              window.location.href = base_url + "transaksi_farmasi";
            }
            else
            {
              $('#alert-msg-transaksipasienfarmasi').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});

$(document).ready(function(){
  $(document).on('click', '#getUserSelesai', function(){
    var tgltampilobatsl = $(this).attr('data-tgltampilobatsl');
    var jamtampilobatsl = $(this).attr('data-jamtampilobatsl');
    var noregsl = $(this).attr('data-noregsl');
    var namaunitsl = $(this).attr('data-namaunitsl');
    var doktersl = $(this).attr('data-doktersl');
    var namapasiensl = $(this).attr('data-namapasiensl');
    var tgllahirsl = $(this).attr('data-tgllahirsl');
    var niksl = $(this).attr('data-niksl');
    var normsl = $(this).attr('data-normsl');
    var nmcustomersl = $(this).attr('data-nmcustomersl');
    var alergisl = $(this).attr('data-alergisl');
    var tagihansl = $(this).attr('data-tagihansl');
    var idobatsl = $(this).attr('data-idobatsl');
    var kelaminsl = $(this).attr('data-kelaminsl');
    var usiasl = $(this).attr('data-usiasl');

    $.ajax({
      type : "POST",
      //data: {idobatsl: idobatsl},
      //url: base_url + "index.php/transaksi_farmasi/UbahDataSelesai",
      success : function(data){
        //$("#result_table_selesai").html(data);
        $('#idobatutamasl').val(idobatsl);
        $('#tgltampilobatlabelsl').html(tgltampilobatsl);
        $('#jamtampilobatlabelsl').html(jamtampilobatsl);
        $('#noregobatlabelsl').html(noregsl);
        $('#namaunitlabelsl').html(namaunitsl);
        $('#dokterlabelsl').html(doktersl);
        $('#namapasienlabelsl').html(namapasiensl);
        $('#tgllahirlabelsl').html(tgllahirsl);
        $('#niklabelsl').html(niksl);
        $('#normlabelsl').html(normsl);
        $('#nmcustomerlabelsl').html(nmcustomersl);
        $('#alergilabelsl').html(alergisl);
        $('#tagihanlabelsl').html(tagihansl);
        $('#kelaminlabelsl').html(kelaminsl);
        $('#usialabelsl').html(usiasl);
      }
    });
  });
});

$('#ubahstatustransaksiselesai').click(function() {

    $.ajax({
        url: base_url + "transaksi_farmasi/ubah_proses_selesai",
        type: 'POST',
        data: { idobatutamasl:$('#idobatutamasl').val() },
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-transaksipasienfarmasiselesai').html('<div class="alert alert-success text-center">Status Berhasil Dirubah!</div>');
              $("#transaksi_pasien_farmasi_selesai").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#transaksi_pasien_farmasi_selesai").modal('hide');
              });
              window.location.href = base_url + "transaksi_farmasi";
            }
            else
            {
              $('#alert-msg-transaksipasienfarmasiselesai').html('<div class="alert alert-danger text-center">' + msg + '</div>');
            }
        }
    });
    return false;
});
