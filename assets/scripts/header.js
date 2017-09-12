    function streaming(url)
    {
        newwindow=window.open(url,'name','scrollbars=0, resizeable=0, width=415, height=150');
        if (window.focus) {newwindow.focus()}
        return false;
    }

    function closewin()
    {
        if (name)
        {
            newWindow.close();
        }
    }

    $('#EMR_btnLihatPeriksaDokterHari').click(function()
    {
      if(document.getElementById('EMR_LihatPeriksaDokterStatTXT').value == 'bulan')
      {
        $('#EMR_btnLihatPeriksaDokterHari').html("<b>Histori </br> Hari Ini</b>");
        document.getElementById('EMR_btnLihatPeriksaDokterHari').classList.remove('blue');
        document.getElementById('EMR_btnLihatPeriksaDokterHari').classList.add('white');
        document.getElementById('EMR_btnLihatPeriksaDokterHari').classList.add('disabled');
        document.getElementById('EMR_LihatPeriksaDokter_Harian').classList.remove('collapse');
        document.getElementById('EMR_ketLihatPeriksaDokterHari').classList.remove('collapse');

        $('#EMR_btnLihatPeriksaDokterBulan').html("<b>Lihat Histori </br> Bulan Ini</b>");
        document.getElementById('EMR_btnLihatPeriksaDokterBulan').classList.add('blue');
        document.getElementById('EMR_btnLihatPeriksaDokterBulan').classList.remove('white');
        document.getElementById('EMR_btnLihatPeriksaDokterBulan').classList.remove('disabled');
        document.getElementById('EMR_LihatPeriksaDokter_Bulanan').classList.add('collapse');
        document.getElementById('EMR_ketLihatPeriksaDokterBulan').classList.add('collapse');

        document.getElementById('EMR_LihatPeriksaDokterStatTXT').value = 'hari';
      }
    });
    $('#EMR_btnLihatPeriksaDokterBulan').click(function()
    {
      if(document.getElementById('EMR_LihatPeriksaDokterStatTXT').value == 'hari')
      {
        $('#EMR_btnLihatPeriksaDokterHari').html("<b>Lihat Histori </br> Hari Ini</b>");
        document.getElementById('EMR_btnLihatPeriksaDokterHari').classList.add('blue');
        document.getElementById('EMR_btnLihatPeriksaDokterHari').classList.remove('white');
        document.getElementById('EMR_btnLihatPeriksaDokterHari').classList.remove('disabled');
        document.getElementById('EMR_LihatPeriksaDokter_Harian').classList.add('collapse');
        document.getElementById('EMR_ketLihatPeriksaDokterHari').classList.add('collapse');

        $('#EMR_btnLihatPeriksaDokterBulan').html("<b>Histori </br> Bulan Ini</b>");
        document.getElementById('EMR_btnLihatPeriksaDokterBulan').classList.remove('blue');
        document.getElementById('EMR_btnLihatPeriksaDokterBulan').classList.add('white');
        document.getElementById('EMR_btnLihatPeriksaDokterBulan').classList.add('disabled');
        document.getElementById('EMR_LihatPeriksaDokter_Bulanan').classList.remove('collapse');
        document.getElementById('EMR_ketLihatPeriksaDokterBulan').classList.remove('collapse');

        document.getElementById('EMR_LihatPeriksaDokterStatTXT').value = 'bulan';
      }
    });

    function hanyaAngka(evt)
    {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))

		    return false;
		  return true;
		}

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
            url: base_url + "dashboard/ubahpass",
            type: 'POST',
            data: form_data,
            success: function(msg) {
                if (msg == 'YES')
                {
                  $('#alert-msg-ubahpass').html('<div class="alert alert-success text-center">Password Berhasil Disimpan!</div>');
                  $("#ubahpassword").fadeTo(10000, 5000).slideUp(2000, function(){
                       $("#ubahpassword").modal('hide');
                  });
                  window.location.href = base_url + "dashboard";
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
