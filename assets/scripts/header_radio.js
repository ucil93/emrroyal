function clear() {
    $("#passwordlama").val("");
    $("#passwordbaru").val("");
    $("#passwordbaru2").val("");
    $("#alert-msg-ubahpass").empty();
};

$('#ubahpassword').on('hidden', function(){
    clear();
});

$('#ubahpass').click(function() {
    var form_data = {
        passwordlama: $('#passwordlama').val(),
        passwordbaru: $('#passwordbaru').val(),
        passwordbaru2: $('#passwordbaru2').val()
    };
    $.ajax({
        url: base_url + "dashboard_radio/ubahpass",
        type: 'POST',
        data: form_data,
        success: function(msg) {
            if (msg == 'YES')
            {
              $('#alert-msg-ubahpass').html('<div class="alert alert-success text-center">Password Berhasil Disimpan!</div>');
              $("#ubahpassword").fadeTo(10000, 5000).slideUp(2000, function(){
                   $("#ubahpassword").modal('hide');
              });
              window.location.href = base_url + "dashboard_radio";
            }
            else if (msg == 'NO1')
            {
              $('#alert-msg-ubahpass').html('<div class="alert alert-danger text-center">Password Lama Anda Salah!</div>');
            }
            else if (msg == 'NO2')
            {
              $('#alert-msg-ubahpass').html('<div class="alert alert-danger text-center">Password Baru Anda Tidak Sama!</div>');
            }
            else
            {
              $('#alert-msg-ubahpass').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        }
    });
    return false;
});

function ShowPassword()
{
  if(document.getElementById("passwordlama").value!="")
  {
    document.getElementById("passwordlama").type="text";
    document.getElementById("show").style.display="none";
    document.getElementById("hide").style.display="block";
  }

  if(document.getElementById("passwordbaru").value!="")
  {
    document.getElementById("passwordbaru").type="text";
    document.getElementById("show").style.display="none";
    document.getElementById("hide").style.display="block";
  }

  if(document.getElementById("passwordbaru2").value!="")
  {
    document.getElementById("passwordbaru2").type="text";
    document.getElementById("show").style.display="none";
    document.getElementById("hide").style.display="block";
  }
}

function HidePassword()
{
  if(document.getElementById("passwordlama").type == "text")
  {
    document.getElementById("passwordlama").type="password"
    document.getElementById("show").style.display="block";
    document.getElementById("hide").style.display="none";
  }

  if(document.getElementById("passwordbaru").type == "text")
  {
    document.getElementById("passwordbaru").type="password"
    document.getElementById("show").style.display="block";
    document.getElementById("hide").style.display="none";
  }

  if(document.getElementById("passwordbaru2").type == "text")
  {
    document.getElementById("passwordbaru2").type="password"
    document.getElementById("show").style.display="block";
    document.getElementById("hide").style.display="none";
  }
}

$(document).ready(function(){

    $("#tampil_awal_radio").datepicker({
        todayBtn:  1,
        autoclose: true,
    }).on('changeDate', function (selected) {
        var minDate = new Date(selected.date.valueOf());
        $('#tampil_akhir_radio').datepicker('setStartDate', minDate);
    });

    $("#tampil_akhir_radio").datepicker({
        todayBtn:  1,
        autoclose: true,
    })
        .on('changeDate', function (selected) {
            var maxDate = new Date(selected.date.valueOf());
            $('#tampil_awal_radio').datepicker('setEndDate', maxDate);
        });

});
