//deklarasi button gigi
    var btnStruktur = document.getElementById("btnStruktur");
    var btnGigiKiriBaruAtas1 = document.getElementById("btnGigiKiriBaruAtas1");
    var btnGigiKiriBaruBawah1 = document.getElementById("btnGigiKiriBaruBawah1");
    var btnGigiKananBaruAtas1 = document.getElementById("btnGigiKananBaruAtas1");
    var btnGigiKananBaruBawah1 = document.getElementById("btnGigiKananBaruBawah1");
    var btnGigiKiriBaruAtas2 = document.getElementById("btnGigiKiriBaruAtas2");
    var btnGigiKiriBaruBawah2 = document.getElementById("btnGigiKiriBaruBawah2");
    var btnGigiKananBaruAtas2 = document.getElementById("btnGigiKananBaruAtas2");
    var btnGigiKananBaruBawah2 = document.getElementById("btnGigiKananBaruBawah2");
    var btnGigiKiriBaruAtas3 = document.getElementById("btnGigiKiriBaruAtas3");
    var btnGigiKiriBaruBawah3 = document.getElementById("btnGigiKiriBaruBawah3");
    var btnGigiKananBaruAtas3 = document.getElementById("btnGigiKananBaruAtas3");
    var btnGigiKananBaruBawah3 = document.getElementById("btnGigiKananBaruBawah3");
    var btnGigiKiriBaruAtas4 = document.getElementById("btnGigiKiriBaruAtas4");
    var btnGigiKiriBaruBawah4 = document.getElementById("btnGigiKiriBaruBawah4");
    var btnGigiKananBaruAtas4 = document.getElementById("btnGigiKananBaruAtas4");
    var btnGigiKananBaruBawah4 = document.getElementById("btnGigiKananBaruBawah4");
    var btnGigiKiriBaruAtas5 = document.getElementById("btnGigiKiriBaruAtas5");
    var btnGigiKiriBaruBawah5 = document.getElementById("btnGigiKiriBaruBawah5");
    var btnGigiKananBaruAtas5 = document.getElementById("btnGigiKananBaruAtas5");
    var btnGigiKananBaruBawah5 = document.getElementById("btnGigiKananBaruBawah5");
    var btnGigiKiriBaruAtas6 = document.getElementById("btnGigiKiriBaruAtas6");
    var btnGigiKiriBaruBawah6 = document.getElementById("btnGigiKiriBaruBawah6");
    var btnGigiKananBaruAtas6 = document.getElementById("btnGigiKananBaruAtas6");
    var btnGigiKananBaruBawah6 = document.getElementById("btnGigiKananBaruBawah6");
    var btnGigiKiriBaruAtas7 = document.getElementById("btnGigiKiriBaruAtas7");
    var btnGigiKiriBaruBawah7 = document.getElementById("btnGigiKiriBaruBawah7");
    var btnGigiKananBaruAtas7 = document.getElementById("btnGigiKananBaruAtas7");
    var btnGigiKananBaruBawah7 = document.getElementById("btnGigiKananBaruBawah7");
    var btnGigiKiriBaruAtas8 = document.getElementById("btnGigiKiriBaruAtas8");
    var btnGigiKiriBaruBawah8 = document.getElementById("btnGigiKiriBaruBawah8");
    var btnGigiKananBaruAtas8 = document.getElementById("btnGigiKananBaruAtas8");
    var btnGigiKananBaruBawah8 = document.getElementById("btnGigiKananBaruBawah8");

//Function Gigi Kiri Baru Atas 1
    var C1_GRA1 = document.getElementById('C1_GRA1');
    var C2_GRA1 = document.getElementById('C2_GRA1');
    var GRA1_P1 = document.getElementById('GRA1_P1');
    var GRA1_P2 = document.getElementById('GRA1_P2');
    var GRA1_P3 = document.getElementById('GRA1_P3');
    var GRA1_P4 = document.getElementById('GRA1_P4');
    var GRA1_P5 = document.getElementById('GRA1_P5');
    var GRA1_P6 = document.getElementById('GRA1_P6');
    var GRA1_P7 = document.getElementById('GRA1_P7');
    var GRA1_P1_P = document.getElementById('GRA1_P1_P');
    var GRA1_P2_P = document.getElementById('GRA1_P2_P');
    var GRA1_P3_P = document.getElementById('GRA1_P3_P');
    var GRA1_P4_P = document.getElementById('GRA1_P4_P');
    var GRA1_P5_P = document.getElementById('GRA1_P5_P');
    var GRA1_P6_P = document.getElementById('GRA1_P6_P');

    GRA1_P6.onchange = function()
    {
        $('#Col_GRA1').toggleClass('collapse');
    };
    GRA1_P6_P.onchange = function()
    {
        $('#Col_GRA1').toggleClass('collapse');
    };

    C2_GRA1.onchange = function() {
    if(GRA1_P6.checked == true)
    {
        $('#Col_GRA1').toggleClass('collapse');
    }
      GRA1_P1.disabled = true;
        $('#GRA1_P1').removeAttr('checked');
      GRA1_P2.disabled = true;
        $('#GRA1_P2').removeAttr('checked');
      GRA1_P3.disabled = true;
        $('#GRA1_P3').removeAttr('checked');
      GRA1_P4.disabled = true;
        $('#GRA1_P4').removeAttr('checked');
      GRA1_P5.disabled = true;
        $('#GRA1_P5').removeAttr('checked');
      GRA1_P6.disabled = true;
        $('#GRA1_P6').removeAttr('checked');
    if(GRA1_P6_P.checked == true)
    {
        $('#Col_GRA1').toggleClass('collapse');
    }
      GRA1_P1_P.disabled = true;
        $('#GRA1_P1_P').removeAttr('checked');
      GRA1_P2_P.disabled = true;
        $('#GRA1_P2_P').removeAttr('checked');
      GRA1_P3_P.disabled = true;
        $('#GRA1_P3_P').removeAttr('checked');
      GRA1_P4_P.disabled = true;
        $('#GRA1_P4_P').removeAttr('checked');
      GRA1_P5_P.disabled = true;
        $('#GRA1_P5_P').removeAttr('checked');
      GRA1_P6_P.disabled = true;
        $('#GRA1_P6_P').removeAttr('checked');
      GRA1_P7.disabled = true;
      GRA1_P7.value = '';
    };

    C1_GRA1.onchange = function() {

      GRA1_P1.disabled = false;
      GRA1_P2.disabled = false;
      GRA1_P3.disabled = false;
      GRA1_P4.disabled = false;
      GRA1_P5.disabled = false;
      GRA1_P6.disabled = false;
      GRA1_P1_P.disabled = false;
      GRA1_P2_P.disabled = false;
      GRA1_P3_P.disabled = false;
      GRA1_P4_P.disabled = false;
      GRA1_P5_P.disabled = false;
      GRA1_P6_P.disabled = false;
      GRA1_P7.disabled = false;
    };

    Obtn_GRA1.onclick = function()
    {
        if(C2_GRA1.checked == true)
        {
            btnGigiKiriBaruAtas1.style.background = "gray";
        }
        if(C1_GRA1.checked == true)
        {
            if(GRA1_P1.checked == true || GRA1_P2.checked == true || GRA1_P3.checked == true || GRA1_P4.checked == true || GRA1_P5.checked == true || GRA1_P6.checked == true || GRA1_P1_P.checked == true || GRA1_P2_P.checked == true || GRA1_P3_P.checked == true || GRA1_P4_P.checked == true || GRA1_P5_P.checked == true || GRA1_P6_P.checked == true)
            {
              btnGigiKiriBaruAtas1.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruAtas1.style.background = "";
            }
        }
    };

    function BatalKiriAtas1() {
      if(GRA1_P6.checked == true)
      {
          $('#Col_GRA1').toggleClass('collapse');
      }
      if(GRA1_P6_P.checked == true)
      {
          $('#Col_GRA1').toggleClass('collapse');
      }
      $('#GRA1_P1').removeAttr('checked');
      $('#GRA1_P2').removeAttr('checked');
      $('#GRA1_P3').removeAttr('checked');
      $('#GRA1_P4').removeAttr('checked');
      $('#GRA1_P5').removeAttr('checked');
      $('#GRA1_P6').removeAttr('checked');
      GRA1_P1.disabled = false;
      GRA1_P2.disabled = false;
      GRA1_P3.disabled = false;
      GRA1_P4.disabled = false;
      GRA1_P5.disabled = false;
      GRA1_P6.disabled = false;
      $('#GRA1_P1_P').removeAttr('checked');
      $('#GRA1_P2_P').removeAttr('checked');
      $('#GRA1_P3_P').removeAttr('checked');
      $('#GRA1_P4_P').removeAttr('checked');
      $('#GRA1_P5_P').removeAttr('checked');
      $('#GRA1_P6_P').removeAttr('checked');
      GRA1_P1_P.disabled = false;
      GRA1_P2_P.disabled = false;
      GRA1_P3_P.disabled = false;
      GRA1_P4_P.disabled = false;
      GRA1_P5_P.disabled = false;
      GRA1_P6_P.disabled = false;
      GRA1_P7.disabled = false;
      GRA1_P7.value = '';
      C1_GRA1.checked = true;
      btnGigiKiriBaruAtas1.style.background = "";
    };

//Function Gigi Kiri Baru Atas 2
    var C1_GRA2 = document.getElementById('C1_GRA2');
    var C2_GRA2 = document.getElementById('C2_GRA2');
    var GRA2_P1 = document.getElementById('GRA2_P1');
    var GRA2_P2 = document.getElementById('GRA2_P2');
    var GRA2_P3 = document.getElementById('GRA2_P3');
    var GRA2_P4 = document.getElementById('GRA2_P4');
    var GRA2_P5 = document.getElementById('GRA2_P5');
    var GRA2_P6 = document.getElementById('GRA2_P6');
    var GRA2_P7 = document.getElementById('GRA2_P7');
    var GRA2_P1_P = document.getElementById('GRA2_P1_P');
    var GRA2_P2_P = document.getElementById('GRA2_P2_P');
    var GRA2_P3_P = document.getElementById('GRA2_P3_P');
    var GRA2_P4_P = document.getElementById('GRA2_P4_P');
    var GRA2_P5_P = document.getElementById('GRA2_P5_P');
    var GRA2_P6_P = document.getElementById('GRA2_P6_P');

    GRA2_P6.onchange = function()
    {
        $('#Col_GRA2').toggleClass('collapse');
    };
    GRA2_P6_P.onchange = function()
    {
        $('#Col_GRA2').toggleClass('collapse');
    };

    C2_GRA2.onchange = function() {
    if(GRA2_P6.checked == true)
    {
        $('#Col_GRA2').toggleClass('collapse');
    }
      GRA2_P1.disabled = true;
        $('#GRA2_P1').removeAttr('checked');
      GRA2_P2.disabled = true;
        $('#GRA2_P2').removeAttr('checked');
      GRA2_P3.disabled = true;
        $('#GRA2_P3').removeAttr('checked');
      GRA2_P4.disabled = true;
        $('#GRA2_P4').removeAttr('checked');
      GRA2_P5.disabled = true;
        $('#GRA2_P5').removeAttr('checked');
      GRA2_P6.disabled = true;
        $('#GRA2_P6').removeAttr('checked');
    if(GRA2_P6_P.checked == true)
    {
        $('#Col_GRA2').toggleClass('collapse');
    }
      GRA2_P1_P.disabled = true;
        $('#GRA2_P1_P').removeAttr('checked');
      GRA2_P2_P.disabled = true;
        $('#GRA2_P2_P').removeAttr('checked');
      GRA2_P3_P.disabled = true;
        $('#GRA2_P3_P').removeAttr('checked');
      GRA2_P4_P.disabled = true;
        $('#GRA2_P4_P').removeAttr('checked');
      GRA2_P5_P.disabled = true;
        $('#GRA2_P5_P').removeAttr('checked');
      GRA2_P6_P.disabled = true;
        $('#GRA2_P6_P').removeAttr('checked');
      GRA2_P7.disabled = true;
      GRA2_P7.value = '';
    }

    C1_GRA2.onchange = function() {

      GRA2_P1.disabled = false;
      GRA2_P2.disabled = false;
      GRA2_P3.disabled = false;
      GRA2_P4.disabled = false;
      GRA2_P5.disabled = false;
      GRA2_P6.disabled = false;
      GRA2_P1_P.disabled = false;
      GRA2_P2_P.disabled = false;
      GRA2_P3_P.disabled = false;
      GRA2_P4_P.disabled = false;
      GRA2_P5_P.disabled = false;
      GRA2_P6_P.disabled = false;
      GRA2_P7.disabled = false;
    };

    Obtn_GRA2.onclick = function()
    {
        if(C2_GRA2.checked == true)
        {
            btnGigiKiriBaruAtas2.style.background = "gray";
        }
        if(C1_GRA2.checked == true)
        {
            if(GRA2_P1.checked == true || GRA2_P2.checked == true || GRA2_P3.checked == true || GRA2_P4.checked == true || GRA2_P5.checked == true || GRA2_P6.checked == true || GRA2_P1_P.checked == true || GRA2_P2_P.checked == true || GRA2_P3_P.checked == true || GRA2_P4_P.checked == true || GRA2_P5_P.checked == true || GRA2_P6_P.checked == true)
            {
              btnGigiKiriBaruAtas2.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruAtas2.style.background = "";
            }
        }
    };

    function BatalKiriAtas2() {
      if(GRA2_P6.checked == true)
      {
          $('#Col_GRA2').toggleClass('collapse');
      }
      if(GRA2_P6_P.checked == true)
      {
          $('#Col_GRA2').toggleClass('collapse');
      }
      $('#GRA2_P1').removeAttr('checked');
      $('#GRA2_P2').removeAttr('checked');
      $('#GRA2_P3').removeAttr('checked');
      $('#GRA2_P4').removeAttr('checked');
      $('#GRA2_P5').removeAttr('checked');
      $('#GRA2_P6').removeAttr('checked');
      GRA2_P1.disabled = false;
      GRA2_P2.disabled = false;
      GRA2_P3.disabled = false;
      GRA2_P4.disabled = false;
      GRA2_P5.disabled = false;
      GRA2_P6.disabled = false;
      $('#GRA2_P1_P').removeAttr('checked');
      $('#GRA2_P2_P').removeAttr('checked');
      $('#GRA2_P3_P').removeAttr('checked');
      $('#GRA2_P4_P').removeAttr('checked');
      $('#GRA2_P5_P').removeAttr('checked');
      $('#GRA2_P6_P').removeAttr('checked');
      GRA2_P1_P.disabled = false;
      GRA2_P2_P.disabled = false;
      GRA2_P3_P.disabled = false;
      GRA2_P4_P.disabled = false;
      GRA2_P5_P.disabled = false;
      GRA2_P6_P.disabled = false;
      GRA2_P7.disabled = false;
      GRA2_P7.value = '';
      C1_GRA2.checked = true;
      btnGigiKiriBaruAtas2.style.background = "";
    };

//Function Gigi Kiri Baru Atas 3
    var C1_GRA3 = document.getElementById('C1_GRA3');
    var C2_GRA3 = document.getElementById('C2_GRA3');
    var GRA3_P1 = document.getElementById('GRA3_P1');
    var GRA3_P2 = document.getElementById('GRA3_P2');
    var GRA3_P3 = document.getElementById('GRA3_P3');
    var GRA3_P4 = document.getElementById('GRA3_P4');
    var GRA3_P5 = document.getElementById('GRA3_P5');
    var GRA3_P6 = document.getElementById('GRA3_P6');
    var GRA3_P7 = document.getElementById('GRA3_P7');
    var GRA3_P1_P = document.getElementById('GRA3_P1_P');
    var GRA3_P2_P = document.getElementById('GRA3_P2_P');
    var GRA3_P3_P = document.getElementById('GRA3_P3_P');
    var GRA3_P4_P = document.getElementById('GRA3_P4_P');
    var GRA3_P5_P = document.getElementById('GRA3_P5_P');
    var GRA3_P6_P = document.getElementById('GRA3_P6_P');

    GRA3_P6.onchange = function()
    {
        $('#Col_GRA3').toggleClass('collapse');
    };
    GRA3_P6_P.onchange = function()
    {
        $('#Col_GRA3').toggleClass('collapse');
    };

    C2_GRA3.onchange = function() {
    if(GRA3_P6.checked == true)
    {
        $('#Col_GRA3').toggleClass('collapse');
    }
      GRA3_P1.disabled = true;
        $('#GRA3_P1').removeAttr('checked');
      GRA3_P2.disabled = true;
        $('#GRA3_P2').removeAttr('checked');
      GRA3_P3.disabled = true;
        $('#GRA3_P3').removeAttr('checked');
      GRA3_P4.disabled = true;
        $('#GRA3_P4').removeAttr('checked');
      GRA3_P5.disabled = true;
        $('#GRA3_P5').removeAttr('checked');
      GRA3_P6.disabled = true;
        $('#GRA3_P6').removeAttr('checked');
    if(GRA3_P6_P.checked == true)
    {
        $('#Col_GRA3').toggleClass('collapse');
    }
      GRA3_P1_P.disabled = true;
        $('#GRA3_P1_P').removeAttr('checked');
      GRA3_P2_P.disabled = true;
        $('#GRA3_P2_P').removeAttr('checked');
      GRA3_P3_P.disabled = true;
        $('#GRA3_P3_P').removeAttr('checked');
      GRA3_P4_P.disabled = true;
        $('#GRA3_P4_P').removeAttr('checked');
      GRA3_P5_P.disabled = true;
        $('#GRA3_P5_P').removeAttr('checked');
      GRA3_P6_P.disabled = true;
        $('#GRA3_P6_P').removeAttr('checked');
      GRA3_P7.disabled = true;
      GRA3_P7.value = '';
    };

    C1_GRA3.onchange = function() {

      GRA3_P1.disabled = false;
      GRA3_P2.disabled = false;
      GRA3_P3.disabled = false;
      GRA3_P4.disabled = false;
      GRA3_P5.disabled = false;
      GRA3_P6.disabled = false;
      GRA3_P1_P.disabled = false;
      GRA3_P2_P.disabled = false;
      GRA3_P3_P.disabled = false;
      GRA3_P4_P.disabled = false;
      GRA3_P5_P.disabled = false;
      GRA3_P6_P.disabled = false;
      GRA3_P7.disabled = false;
    };

    Obtn_GRA3.onclick = function()
    {
        if(C2_GRA3.checked == true)
        {
            btnGigiKiriBaruAtas3.style.background = "gray";
        }
        if(C1_GRA3.checked == true)
        {
            if(GRA3_P1.checked == true || GRA3_P2.checked == true || GRA3_P3.checked == true || GRA3_P4.checked == true || GRA3_P5.checked == true || GRA3_P6.checked == true || GRA3_P1_P.checked == true || GRA3_P2_P.checked == true || GRA3_P3_P.checked == true || GRA3_P4_P.checked == true || GRA3_P5_P.checked == true || GRA3_P6_P.checked == true)
            {
              btnGigiKiriBaruAtas3.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruAtas3.style.background = "";
            }
        }
    };

    function BatalKiriAtas3() {
      if(GRA3_P6.checked == true)
      {
          $('#Col_GRA3').toggleClass('collapse');
      }
      if(GRA3_P6_P.checked == true)
      {
          $('#Col_GRA3').toggleClass('collapse');
      }
      $('#GRA3_P1').removeAttr('checked');
      $('#GRA3_P2').removeAttr('checked');
      $('#GRA3_P3').removeAttr('checked');
      $('#GRA3_P4').removeAttr('checked');
      $('#GRA3_P5').removeAttr('checked');
      $('#GRA3_P6').removeAttr('checked');
      GRA3_P1.disabled = false;
      GRA3_P2.disabled = false;
      GRA3_P3.disabled = false;
      GRA3_P4.disabled = false;
      GRA3_P5.disabled = false;
      GRA3_P6.disabled = false;
      $('#GRA3_P1_P').removeAttr('checked');
      $('#GRA3_P2_P').removeAttr('checked');
      $('#GRA3_P3_P').removeAttr('checked');
      $('#GRA3_P4_P').removeAttr('checked');
      $('#GRA3_P5_P').removeAttr('checked');
      $('#GRA3_P6_P').removeAttr('checked');
      GRA3_P1_P.disabled = false;
      GRA3_P2_P.disabled = false;
      GRA3_P3_P.disabled = false;
      GRA3_P4_P.disabled = false;
      GRA3_P5_P.disabled = false;
      GRA3_P6_P.disabled = false;
      GRA3_P7.disabled = false;
      GRA3_P7.value = '';
      C1_GRA3.checked = true;
      btnGigiKiriBaruAtas3.style.background = "";
    };

//Function Gigi Kiri Baru Atas 4
    var C1_GRA4 = document.getElementById('C1_GRA4');
    var C2_GRA4 = document.getElementById('C2_GRA4');
    var GRA4_P1 = document.getElementById('GRA4_P1');
    var GRA4_P2 = document.getElementById('GRA4_P2');
    var GRA4_P3 = document.getElementById('GRA4_P3');
    var GRA4_P4 = document.getElementById('GRA4_P4');
    var GRA4_P5 = document.getElementById('GRA4_P5');
    var GRA4_P6 = document.getElementById('GRA4_P6');
    var GRA4_P7 = document.getElementById('GRA4_P7');
    var GRA4_P1_P = document.getElementById('GRA4_P1_P');
    var GRA4_P2_P = document.getElementById('GRA4_P2_P');
    var GRA4_P3_P = document.getElementById('GRA4_P3_P');
    var GRA4_P4_P = document.getElementById('GRA4_P4_P');
    var GRA4_P5_P = document.getElementById('GRA4_P5_P');
    var GRA4_P6_P = document.getElementById('GRA4_P6_P');

    GRA4_P6.onchange = function()
    {
        $('#Col_GRA4').toggleClass('collapse');
    };
    GRA4_P6_P.onchange = function()
    {
        $('#Col_GRA4').toggleClass('collapse');
    };

    C2_GRA4.onchange = function() {
    if(GRA4_P6.checked == true)
    {
        $('#Col_GRA4').toggleClass('collapse');
    }
      GRA4_P1.disabled = true;
        $('#GRA4_P1').removeAttr('checked');
      GRA4_P2.disabled = true;
        $('#GRA4_P2').removeAttr('checked');
      GRA4_P3.disabled = true;
        $('#GRA4_P3').removeAttr('checked');
      GRA4_P4.disabled = true;
        $('#GRA4_P4').removeAttr('checked');
      GRA4_P5.disabled = true;
        $('#GRA4_P5').removeAttr('checked');
      GRA4_P6.disabled = true;
        $('#GRA4_P6').removeAttr('checked');
    if(GRA4_P6_P.checked == true)
    {
        $('#Col_GRA4').toggleClass('collapse');
    }
      GRA4_P1_P.disabled = true;
        $('#GRA4_P1_P').removeAttr('checked');
      GRA4_P2_P.disabled = true;
        $('#GRA4_P2_P').removeAttr('checked');
      GRA4_P3_P.disabled = true;
        $('#GRA4_P3_P').removeAttr('checked');
      GRA4_P4_P.disabled = true;
        $('#GRA4_P4_P').removeAttr('checked');
      GRA4_P5_P.disabled = true;
        $('#GRA4_P5_P').removeAttr('checked');
      GRA4_P6_P.disabled = true;
        $('#GRA4_P6_P').removeAttr('checked');
      GRA4_P7.disabled = true;
      GRA4_P7.value = '';
    };

    C1_GRA4.onchange = function() {

      GRA4_P1.disabled = false;
      GRA4_P2.disabled = false;
      GRA4_P3.disabled = false;
      GRA4_P4.disabled = false;
      GRA4_P5.disabled = false;
      GRA4_P6.disabled = false;
      GRA4_P1_P.disabled = false;
      GRA4_P2_P.disabled = false;
      GRA4_P3_P.disabled = false;
      GRA4_P4_P.disabled = false;
      GRA4_P5_P.disabled = false;
      GRA4_P6_P.disabled = false;
      GRA4_P7.disabled = false;
    };

    Obtn_GRA4.onclick = function()
    {
        if(C2_GRA4.checked == true)
        {
            btnGigiKiriBaruAtas4.style.background = "gray";
        }
        if(C1_GRA4.checked == true)
        {
            if(GRA4_P1.checked == true || GRA4_P2.checked == true || GRA4_P3.checked == true || GRA4_P4.checked == true || GRA4_P5.checked == true || GRA4_P6.checked == true || GRA4_P1_P.checked == true || GRA4_P2_P.checked == true || GRA4_P3_P.checked == true || GRA4_P4_P.checked == true || GRA4_P5_P.checked == true || GRA4_P6_P.checked == true)
            {
              btnGigiKiriBaruAtas4.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruAtas4.style.background = "";
            }
        }
    };

    function BatalKiriAtas4() {
      if(GRA4_P6.checked == true)
      {
          $('#Col_GRA4').toggleClass('collapse');
      }
      if(GRA4_P6_P.checked == true)
      {
          $('#Col_GRA4').toggleClass('collapse');
      }
      $('#GRA4_P1').removeAttr('checked');
      $('#GRA4_P2').removeAttr('checked');
      $('#GRA4_P3').removeAttr('checked');
      $('#GRA4_P4').removeAttr('checked');
      $('#GRA4_P5').removeAttr('checked');
      $('#GRA4_P6').removeAttr('checked');
      GRA4_P1.disabled = false;
      GRA4_P2.disabled = false;
      GRA4_P3.disabled = false;
      GRA4_P4.disabled = false;
      GRA4_P5.disabled = false;
      GRA4_P6.disabled = false;
      GRA4_P7.disabled = false;
      $('#GRA4_P1_P').removeAttr('checked');
      $('#GRA4_P2_P').removeAttr('checked');
      $('#GRA4_P3_P').removeAttr('checked');
      $('#GRA4_P4_P').removeAttr('checked');
      $('#GRA4_P5_P').removeAttr('checked');
      $('#GRA4_P6_P').removeAttr('checked');
      GRA4_P1_P.disabled = false;
      GRA4_P2_P.disabled = false;
      GRA4_P3_P.disabled = false;
      GRA4_P4_P.disabled = false;
      GRA4_P5_P.disabled = false;
      GRA4_P6_P.disabled = false;
      GRA4_P7.value = '';
      C1_GRA4.checked = true;
      btnGigiKiriBaruAtas4.style.background = "";
    };

//Function Gigi Kiri Baru Atas 5
    var C1_GRA5 = document.getElementById('C1_GRA5');
    var C2_GRA5 = document.getElementById('C2_GRA5');
    var GRA5_P1 = document.getElementById('GRA5_P1');
    var GRA5_P2 = document.getElementById('GRA5_P2');
    var GRA5_P3 = document.getElementById('GRA5_P3');
    var GRA5_P4 = document.getElementById('GRA5_P4');
    var GRA5_P5 = document.getElementById('GRA5_P5');
    var GRA5_P6 = document.getElementById('GRA5_P6');
    var GRA5_P7 = document.getElementById('GRA5_P7');
    var GRA5_P1_P = document.getElementById('GRA5_P1_P');
    var GRA5_P2_P = document.getElementById('GRA5_P2_P');
    var GRA5_P3_P = document.getElementById('GRA5_P3_P');
    var GRA5_P4_P = document.getElementById('GRA5_P4_P');
    var GRA5_P5_P = document.getElementById('GRA5_P5_P');
    var GRA5_P6_P = document.getElementById('GRA5_P6_P');

    GRA5_P6.onchange = function()
    {
        $('#Col_GRA5').toggleClass('collapse');
    };
    GRA5_P6_P.onchange = function()
    {
        $('#Col_GRA5').toggleClass('collapse');
    };

    C2_GRA5.onchange = function() {
    if(GRA5_P6.checked == true)
    {
        $('#Col_GRA5').toggleClass('collapse');
    }
      GRA5_P1.disabled = true;
        $('#GRA5_P1').removeAttr('checked');
      GRA5_P2.disabled = true;
        $('#GRA5_P2').removeAttr('checked');
      GRA5_P3.disabled = true;
        $('#GRA5_P3').removeAttr('checked');
      GRA5_P4.disabled = true;
        $('#GRA5_P4').removeAttr('checked');
      GRA5_P5.disabled = true;
        $('#GRA5_P5').removeAttr('checked');
      GRA5_P6.disabled = true;
        $('#GRA5_P6').removeAttr('checked');
    if(GRA5_P6_P.checked == true)
    {
        $('#Col_GRA5').toggleClass('collapse');
    }
      GRA5_P1_P.disabled = true;
        $('#GRA5_P1_P').removeAttr('checked');
      GRA5_P2_P.disabled = true;
        $('#GRA5_P2_P').removeAttr('checked');
      GRA5_P3_P.disabled = true;
        $('#GRA5_P3_P').removeAttr('checked');
      GRA5_P4_P.disabled = true;
        $('#GRA5_P4_P').removeAttr('checked');
      GRA5_P5_P.disabled = true;
        $('#GRA5_P5_P').removeAttr('checked');
      GRA5_P6_P.disabled = true;
        $('#GRA5_P6_P').removeAttr('checked');
      GRA5_P7.disabled = true;
      GRA5_P7.value = '';
    };

    C1_GRA5.onchange = function() {

      GRA5_P1.disabled = false;
      GRA5_P2.disabled = false;
      GRA5_P3.disabled = false;
      GRA5_P4.disabled = false;
      GRA5_P5.disabled = false;
      GRA5_P6.disabled = false;
      GRA5_P1_P.disabled = false;
      GRA5_P2_P.disabled = false;
      GRA5_P3_P.disabled = false;
      GRA5_P4_P.disabled = false;
      GRA5_P5_P.disabled = false;
      GRA5_P6_P.disabled = false;
      GRA5_P7.disabled = false;
    };

    Obtn_GRA5.onclick = function()
    {
        if(C2_GRA5.checked == true)
        {
            btnGigiKiriBaruAtas5.style.background = "gray";
        }
        if(C1_GRA5.checked == true)
        {
            if(GRA5_P1.checked == true || GRA5_P2.checked == true || GRA5_P3.checked == true || GRA5_P4.checked == true || GRA5_P5.checked == true || GRA5_P6.checked == true || GRA5_P1_P.checked == true || GRA5_P2_P.checked == true || GRA5_P3_P.checked == true || GRA5_P4_P.checked == true || GRA5_P5_P.checked == true || GRA5_P6_P.checked == true)
            {
              btnGigiKiriBaruAtas5.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruAtas5.style.background = "";
            }
        }
    };

    function BatalKiriAtas5() {
      if(GRA5_P6.checked == true)
      {
          $('#Col_GRA5').toggleClass('collapse');
      }
      if(GRA5_P6_P.checked == true)
      {
          $('#Col_GRA5').toggleClass('collapse');
      }
      $('#GRA5_P1').removeAttr('checked');
      $('#GRA5_P2').removeAttr('checked');
      $('#GRA5_P3').removeAttr('checked');
      $('#GRA5_P4').removeAttr('checked');
      $('#GRA5_P5').removeAttr('checked');
      $('#GRA5_P6').removeAttr('checked');
      GRA5_P1.disabled = false;
      GRA5_P2.disabled = false;
      GRA5_P3.disabled = false;
      GRA5_P4.disabled = false;
      GRA5_P5.disabled = false;
      GRA5_P6.disabled = false;
      $('#GRA5_P1_P').removeAttr('checked');
      $('#GRA5_P2_P').removeAttr('checked');
      $('#GRA5_P3_P').removeAttr('checked');
      $('#GRA5_P4_P').removeAttr('checked');
      $('#GRA5_P5_P').removeAttr('checked');
      $('#GRA5_P6_P').removeAttr('checked');
      GRA5_P1_P.disabled = false;
      GRA5_P2_P.disabled = false;
      GRA5_P3_P.disabled = false;
      GRA5_P4_P.disabled = false;
      GRA5_P5_P.disabled = false;
      GRA5_P6_P.disabled = false;
      GRA5_P7.disabled = false;
      GRA5_P7.value = '';
      C1_GRA5.checked = true;
      btnGigiKiriBaruAtas5.style.background = "";
    };

//Function Gigi Kiri Baru Atas 6
    var C1_GRA6 = document.getElementById('C1_GRA6');
    var C2_GRA6 = document.getElementById('C2_GRA6');
    var GRA6_P1 = document.getElementById('GRA6_P1');
    var GRA6_P2 = document.getElementById('GRA6_P2');
    var GRA6_P3 = document.getElementById('GRA6_P3');
    var GRA6_P4 = document.getElementById('GRA6_P4');
    var GRA6_P5 = document.getElementById('GRA6_P5');
    var GRA6_P6 = document.getElementById('GRA6_P6');
    var GRA6_P7 = document.getElementById('GRA6_P7');

    GRA6_P6.onchange = function()
    {
        $('#Col_GRA6').toggleClass('collapse');
    }

    C2_GRA6.onchange = function() {
    if(GRA6_P6.checked == true)
    {
        $('#Col_GRA6').toggleClass('collapse');
    }
      GRA6_P1.disabled = true;
        $('#GRA6_P1').removeAttr('checked');
      GRA6_P2.disabled = true;
        $('#GRA6_P2').removeAttr('checked');
      GRA6_P3.disabled = true;
        $('#GRA6_P3').removeAttr('checked');
      GRA6_P4.disabled = true;
        $('#GRA6_P4').removeAttr('checked');
      GRA6_P5.disabled = true;
        $('#GRA6_P5').removeAttr('checked');
      GRA6_P6.disabled = true;
        $('#GRA6_P6').removeAttr('checked');
      GRA6_P7.disabled = true;
      GRA6_P7.value = '';
    }

    C1_GRA6.onchange = function() {

      GRA6_P1.disabled = false;
      GRA6_P2.disabled = false;
      GRA6_P3.disabled = false;
      GRA6_P4.disabled = false;
      GRA6_P5.disabled = false;
      GRA6_P6.disabled = false;
      GRA6_P7.disabled = false;
    };

    Obtn_GRA6.onclick = function()
    {
        if(C2_GRA6.checked == true)
        {
            btnGigiKiriBaruAtas6.style.background = "gray";
        }
        if(C1_GRA6.checked == true)
        {
            if(GRA6_P1.checked == true || GRA6_P2.checked == true || GRA6_P3.checked == true || GRA6_P4.checked == true || GRA6_P5.checked == true || GRA6_P6.checked == true)
            {
              btnGigiKiriBaruAtas6.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruAtas6.style.background = "";
            }
        }
    };

    function BatalKiriAtas6() {
      if(GRA6_P6.checked == true)
      {
          $('#Col_GRA6').toggleClass('collapse');
      }
      $('#GRA6_P1').removeAttr('checked');
      $('#GRA6_P2').removeAttr('checked');
      $('#GRA6_P3').removeAttr('checked');
      $('#GRA6_P4').removeAttr('checked');
      $('#GRA6_P5').removeAttr('checked');
      $('#GRA6_P6').removeAttr('checked');
      GRA6_P1.disabled = false;
      GRA6_P2.disabled = false;
      GRA6_P3.disabled = false;
      GRA6_P4.disabled = false;
      GRA6_P5.disabled = false;
      GRA6_P6.disabled = false;
      GRA6_P7.disabled = false;
      GRA6_P7.value = '';
      C1_GRA6.checked = true;
      btnGigiKiriBaruAtas6.style.background = "";
    };

//Function Gigi Kiri Baru Atas 7
    var C1_GRA7 = document.getElementById('C1_GRA7');
    var C2_GRA7 = document.getElementById('C2_GRA7');
    var GRA7_P1 = document.getElementById('GRA7_P1');
    var GRA7_P2 = document.getElementById('GRA7_P2');
    var GRA7_P3 = document.getElementById('GRA7_P3');
    var GRA7_P4 = document.getElementById('GRA7_P4');
    var GRA7_P5 = document.getElementById('GRA7_P5');
    var GRA7_P6 = document.getElementById('GRA7_P6');
    var GRA7_P7 = document.getElementById('GRA7_P7');

    GRA7_P6.onchange = function()
    {
        $('#Col_GRA7').toggleClass('collapse');
    }

    C2_GRA7.onchange = function() {
    if(GRA7_P6.checked == true)
    {
        $('#Col_GRA7').toggleClass('collapse');
    }
      GRA7_P1.disabled = true;
        $('#GRA7_P1').removeAttr('checked');
      GRA7_P2.disabled = true;
        $('#GRA7_P2').removeAttr('checked');
      GRA7_P3.disabled = true;
        $('#GRA7_P3').removeAttr('checked');
      GRA7_P4.disabled = true;
        $('#GRA7_P4').removeAttr('checked');
      GRA7_P5.disabled = true;
        $('#GRA7_P5').removeAttr('checked');
      GRA7_P6.disabled = true;
        $('#GRA7_P6').removeAttr('checked');
      GRA7_P7.disabled = true;
      GRA7_P7.value = '';
    }

    C1_GRA7.onchange = function() {

      GRA7_P1.disabled = false;
      GRA7_P2.disabled = false;
      GRA7_P3.disabled = false;
      GRA7_P4.disabled = false;
      GRA7_P5.disabled = false;
      GRA7_P6.disabled = false;
      GRA7_P7.disabled = false;
    };

    Obtn_GRA7.onclick = function()
    {
        if(C2_GRA7.checked == true)
        {
            btnGigiKiriBaruAtas7.style.background = "gray";
        }
        if(C1_GRA7.checked == true)
        {
            if(GRA7_P1.checked == true || GRA7_P2.checked == true || GRA7_P3.checked == true || GRA7_P4.checked == true || GRA7_P5.checked == true || GRA7_P6.checked == true)
            {
              btnGigiKiriBaruAtas7.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruAtas7.style.background = "";
            }
        }
    };

    function BatalKiriAtas7() {
      if(GRA7_P6.checked == true)
      {
          $('#Col_GRA7').toggleClass('collapse');
      }
      $('#GRA7_P1').removeAttr('checked');
      $('#GRA7_P2').removeAttr('checked');
      $('#GRA7_P3').removeAttr('checked');
      $('#GRA7_P4').removeAttr('checked');
      $('#GRA7_P5').removeAttr('checked');
      $('#GRA7_P6').removeAttr('checked');
      GRA7_P1.disabled = false;
      GRA7_P2.disabled = false;
      GRA7_P3.disabled = false;
      GRA7_P4.disabled = false;
      GRA7_P5.disabled = false;
      GRA7_P6.disabled = false;
      GRA7_P7.disabled = false;
      GRA7_P7.value = '';
      C1_GRA7.checked = true;
      btnGigiKiriBaruAtas7.style.background = "";
    };

//Function Gigi Kiri Baru Atas 8
    var C1_GRA8 = document.getElementById('C1_GRA8');
    var C2_GRA8 = document.getElementById('C2_GRA8');
    var GRA8_P1 = document.getElementById('GRA8_P1');
    var GRA8_P2 = document.getElementById('GRA8_P2');
    var GRA8_P3 = document.getElementById('GRA8_P3');
    var GRA8_P4 = document.getElementById('GRA8_P4');
    var GRA8_P5 = document.getElementById('GRA8_P5');
    var GRA8_P6 = document.getElementById('GRA8_P6');
    var GRA8_P7 = document.getElementById('GRA8_P7');

    GRA8_P6.onchange = function()
    {
        $('#Col_GRA8').toggleClass('collapse');
    }

    C2_GRA8.onchange = function() {
    if(GRA8_P6.checked == true)
    {
        $('#Col_GRA8').toggleClass('collapse');
    }
      GRA8_P1.disabled = true;
        $('#GRA8_P1').removeAttr('checked');
      GRA8_P2.disabled = true;
        $('#GRA8_P2').removeAttr('checked');
      GRA8_P3.disabled = true;
        $('#GRA8_P3').removeAttr('checked');
      GRA8_P4.disabled = true;
        $('#GRA8_P4').removeAttr('checked');
      GRA8_P5.disabled = true;
        $('#GRA8_P5').removeAttr('checked');
      GRA8_P6.disabled = true;
        $('#GRA8_P6').removeAttr('checked');
      GRA8_P7.disabled = true;
      GRA8_P7.value = '';
    }

    C1_GRA8.onchange = function() {

      GRA8_P1.disabled = false;
      GRA8_P2.disabled = false;
      GRA8_P3.disabled = false;
      GRA8_P4.disabled = false;
      GRA8_P5.disabled = false;
      GRA8_P6.disabled = false;
      GRA8_P7.disabled = false;
    };

    Obtn_GRA8.onclick = function()
    {
        if(C2_GRA8.checked == true)
        {
            btnGigiKiriBaruAtas8.style.background = "gray";
        }
        if(C1_GRA8.checked == true)
        {
            if(GRA8_P1.checked == true || GRA8_P2.checked == true || GRA8_P3.checked == true || GRA8_P4.checked == true || GRA8_P5.checked == true || GRA8_P6.checked == true)
            {
              btnGigiKiriBaruAtas8.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruAtas8.style.background = "";
            }
        }
    };

    function BatalKiriAtas8() {
      if(GRA8_P6.checked == true)
      {
          $('#Col_GRA8').toggleClass('collapse');
      }
      $('#GRA8_P1').removeAttr('checked');
      $('#GRA8_P2').removeAttr('checked');
      $('#GRA8_P3').removeAttr('checked');
      $('#GRA8_P4').removeAttr('checked');
      $('#GRA8_P5').removeAttr('checked');
      $('#GRA8_P6').removeAttr('checked');
      GRA8_P1.disabled = false;
      GRA8_P2.disabled = false;
      GRA8_P3.disabled = false;
      GRA8_P4.disabled = false;
      GRA8_P5.disabled = false;
      GRA8_P6.disabled = false;
      GRA8_P7.disabled = false;
      GRA8_P7.value = '';
      C1_GRA8.checked = true;
      btnGigiKiriBaruAtas8.style.background = "";
    };

//Function Gigi Kiri Baru Bawah 1
    var C1_GRB1 = document.getElementById('C1_GRB1');
    var C2_GRB1 = document.getElementById('C2_GRB1');
    var GRB1_P1 = document.getElementById('GRB1_P1');
    var GRB1_P2 = document.getElementById('GRB1_P2');
    var GRB1_P3 = document.getElementById('GRB1_P3');
    var GRB1_P4 = document.getElementById('GRB1_P4');
    var GRB1_P5 = document.getElementById('GRB1_P5');
    var GRB1_P6 = document.getElementById('GRB1_P6');
    var GRB1_P7 = document.getElementById('GRB1_P7');
    var GRB1_P1_P = document.getElementById('GRB1_P1_P');
    var GRB1_P2_P = document.getElementById('GRB1_P2_P');
    var GRB1_P3_P = document.getElementById('GRB1_P3_P');
    var GRB1_P4_P = document.getElementById('GRB1_P4_P');
    var GRB1_P5_P = document.getElementById('GRB1_P5_P');
    var GRB1_P6_P = document.getElementById('GRB1_P6_P');


    GRB1_P6.onchange = function()
    {
        $('#Col_GRB1').toggleClass('collapse');
    };
    GRB1_P6_P.onchange = function()
    {
        $('#Col_GRB1').toggleClass('collapse');
    };

    C2_GRB1.onchange = function() {
    if(GRB1_P6.checked == true)
    {
        $('#Col_GRB1').toggleClass('collapse');
    }
      GRB1_P1.disabled = true;
        $('#GRB1_P1').removeAttr('checked');
      GRB1_P2.disabled = true;
        $('#GRB1_P2').removeAttr('checked');
      GRB1_P3.disabled = true;
        $('#GRB1_P3').removeAttr('checked');
      GRB1_P4.disabled = true;
        $('#GRB1_P4').removeAttr('checked');
      GRB1_P5.disabled = true;
        $('#GRB1_P5').removeAttr('checked');
      GRB1_P6.disabled = true;
        $('#GRB1_P6').removeAttr('checked');
    if(GRB1_P6_P.checked == true)
    {
        $('#Col_GRB1').toggleClass('collapse');
    }
      GRB1_P1_P.disabled = true;
        $('#GRB1_P1_P').removeAttr('checked');
      GRB1_P2_P.disabled = true;
        $('#GRB1_P2_P').removeAttr('checked');
      GRB1_P3_P.disabled = true;
        $('#GRB1_P3_P').removeAttr('checked');
      GRB1_P4_P.disabled = true;
        $('#GRB1_P4_P').removeAttr('checked');
      GRB1_P5_P.disabled = true;
        $('#GRB1_P5_P').removeAttr('checked');
      GRB1_P6_P.disabled = true;
        $('#GRB1_P6_P').removeAttr('checked');
      GRB1_P7.disabled = true;
      GRB1_P7.value = '';
    };

    C1_GRB1.onchange = function() {

      GRB1_P1.disabled = false;
      GRB1_P2.disabled = false;
      GRB1_P3.disabled = false;
      GRB1_P4.disabled = false;
      GRB1_P5.disabled = false;
      GRB1_P6.disabled = false;
      GRB1_P1_P.disabled = false;
      GRB1_P2_P.disabled = false;
      GRB1_P3_P.disabled = false;
      GRB1_P4_P.disabled = false;
      GRB1_P5_P.disabled = false;
      GRB1_P6_P.disabled = false;
      GRB1_P7.disabled = false;
    };

    Obtn_GRB1.onclick = function()
    {
        if(C2_GRB1.checked == true)
        {
            btnGigiKiriBaruBawah1.style.background = "gray";
        }
        if(C1_GRB1.checked == true)
        {
            if(GRB1_P1.checked == true || GRB1_P2.checked == true || GRB1_P3.checked == true || GRB1_P4.checked == true || GRB1_P5.checked == true || GRB1_P6.checked == true || GRB1_P1_P.checked == true || GRB1_P2_P.checked == true || GRB1_P3_P.checked == true || GRB1_P4_P.checked == true || GRB1_P5_P.checked == true || GRB1_P6_P.checked == true)
            {
              btnGigiKiriBaruBawah1.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruBawah1.style.background = "";
            }
        }
    };

    function BatalKiriBawah1() {
      if(GRB1_P6.checked == true)
      {
          $('#Col_GRB1').toggleClass('collapse');
      }
      if(GRB1_P6_P.checked == true)
      {
          $('#Col_GRB1').toggleClass('collapse');
      }
      $('#GRB1_P1').removeAttr('checked');
      $('#GRB1_P2').removeAttr('checked');
      $('#GRB1_P3').removeAttr('checked');
      $('#GRB1_P4').removeAttr('checked');
      $('#GRB1_P5').removeAttr('checked');
      $('#GRB1_P6').removeAttr('checked');
      GRB1_P1.disabled = false;
      GRB1_P2.disabled = false;
      GRB1_P3.disabled = false;
      GRB1_P4.disabled = false;
      GRB1_P5.disabled = false;
      GRB1_P6.disabled = false;
      $('#GRB1_P1_P').removeAttr('checked');
      $('#GRB1_P2_P').removeAttr('checked');
      $('#GRB1_P3_P').removeAttr('checked');
      $('#GRB1_P4_P').removeAttr('checked');
      $('#GRB1_P5_P').removeAttr('checked');
      $('#GRB1_P6_P').removeAttr('checked');
      GRB1_P1_P.disabled = false;
      GRB1_P2_P.disabled = false;
      GRB1_P3_P.disabled = false;
      GRB1_P4_P.disabled = false;
      GRB1_P5_P.disabled = false;
      GRB1_P6_P.disabled = false;
      GRB1_P7.disabled = false;
      GRB1_P7.value = '';
      C1_GRB1.checked = true;
      btnGigiKiriBaruBawah1.style.background = "";
    };

//Function Gigi Kiri Baru Bawah 2
    var C1_GRB2 = document.getElementById('C1_GRB2');
    var C2_GRB2 = document.getElementById('C2_GRB2');
    var GRB2_P1 = document.getElementById('GRB2_P1');
    var GRB2_P2 = document.getElementById('GRB2_P2');
    var GRB2_P3 = document.getElementById('GRB2_P3');
    var GRB2_P4 = document.getElementById('GRB2_P4');
    var GRB2_P5 = document.getElementById('GRB2_P5');
    var GRB2_P6 = document.getElementById('GRB2_P6');
    var GRB2_P7 = document.getElementById('GRB2_P7');
    var GRB2_P1_P = document.getElementById('GRB2_P1_P');
    var GRB2_P2_P = document.getElementById('GRB2_P2_P');
    var GRB2_P3_P = document.getElementById('GRB2_P3_P');
    var GRB2_P4_P = document.getElementById('GRB2_P4_P');
    var GRB2_P5_P = document.getElementById('GRB2_P5_P');
    var GRB2_P6_P = document.getElementById('GRB2_P6_P');

    GRB2_P6.onchange = function()
    {
        $('#Col_GRB2').toggleClass('collapse');
    };
    GRB2_P6_P.onchange = function()
    {
        $('#Col_GRB2').toggleClass('collapse');
    };

    C2_GRB2.onchange = function() {
    if(GRB2_P6.checked == true)
    {
        $('#Col_GRB2').toggleClass('collapse');
    }
      GRB2_P1.disabled = true;
        $('#GRB2_P1').removeAttr('checked');
      GRB2_P2.disabled = true;
        $('#GRB2_P2').removeAttr('checked');
      GRB2_P3.disabled = true;
        $('#GRB2_P3').removeAttr('checked');
      GRB2_P4.disabled = true;
        $('#GRB2_P4').removeAttr('checked');
      GRB2_P5.disabled = true;
        $('#GRB2_P5').removeAttr('checked');
      GRB2_P6.disabled = true;
        $('#GRB2_P6').removeAttr('checked');
    if(GRB2_P6_P.checked == true)
    {
        $('#Col_GRB2').toggleClass('collapse');
    }
      GRB2_P1_P.disabled = true;
        $('#GRB2_P1_P').removeAttr('checked');
      GRB2_P2_P.disabled = true;
        $('#GRB2_P2_P').removeAttr('checked');
      GRB2_P3_P.disabled = true;
        $('#GRB2_P3_P').removeAttr('checked');
      GRB2_P4_P.disabled = true;
        $('#GRB2_P4_P').removeAttr('checked');
      GRB2_P5_P.disabled = true;
        $('#GRB2_P5_P').removeAttr('checked');
      GRB2_P6_P.disabled = true;
        $('#GRB2_P6_P').removeAttr('checked');
      GRB2_P7.disabled = true;
      GRB2_P7.value = '';
    };

    C1_GRB2.onchange = function() {

      GRB2_P1.disabled = false;
      GRB2_P2.disabled = false;
      GRB2_P3.disabled = false;
      GRB2_P4.disabled = false;
      GRB2_P5.disabled = false;
      GRB2_P6.disabled = false;
      GRB2_P1_P.disabled = false;
      GRB2_P2_P.disabled = false;
      GRB2_P3_P.disabled = false;
      GRB2_P4_P.disabled = false;
      GRB2_P5_P.disabled = false;
      GRB2_P6_P.disabled = false;
      GRB2_P7.disabled = false;
    };

    Obtn_GRB2.onclick = function()
    {
        if(C2_GRB2.checked == true)
        {
            btnGigiKiriBaruBawah2.style.background = "gray";
        }
        if(C1_GRB2.checked == true)
        {
            if(GRB2_P1.checked == true || GRB2_P2.checked == true || GRB2_P3.checked == true || GRB2_P4.checked == true || GRB2_P5.checked == true || GRB2_P6.checked == true || GRB2_P1_P.checked == true || GRB2_P2_P.checked == true || GRB2_P3_P.checked == true || GRB2_P4_P.checked == true || GRB2_P5_P.checked == true || GRB2_P6_P.checked == true)
            {
              btnGigiKiriBaruBawah2.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruBawah2.style.background = "";
            }
        }
    };

    function BatalKiriBawah2() {
      if(GRB2_P6.checked == true)
      {
          $('#Col_GRB2').toggleClass('collapse');
      }
      if(GRB2_P6_P.checked == true)
      {
          $('#Col_GRB2').toggleClass('collapse');
      }
      $('#GRB2_P1').removeAttr('checked');
      $('#GRB2_P2').removeAttr('checked');
      $('#GRB2_P3').removeAttr('checked');
      $('#GRB2_P4').removeAttr('checked');
      $('#GRB2_P5').removeAttr('checked');
      $('#GRB2_P6').removeAttr('checked');
      GRB2_P1.disabled = false;
      GRB2_P2.disabled = false;
      GRB2_P3.disabled = false;
      GRB2_P4.disabled = false;
      GRB2_P5.disabled = false;
      GRB2_P6.disabled = false;
      $('#GRB2_P1_P').removeAttr('checked');
      $('#GRB2_P2_P').removeAttr('checked');
      $('#GRB2_P3_P').removeAttr('checked');
      $('#GRB2_P4_P').removeAttr('checked');
      $('#GRB2_P5_P').removeAttr('checked');
      $('#GRB2_P6_P').removeAttr('checked');
      GRB2_P1_P.disabled = false;
      GRB2_P2_P.disabled = false;
      GRB2_P3_P.disabled = false;
      GRB2_P4_P.disabled = false;
      GRB2_P5_P.disabled = false;
      GRB2_P6_P.disabled = false;
      GRB2_P7.disabled = false;
      GRB2_P7.value = '';
      C1_GRB2.checked = true;
      btnGigiKiriBaruBawah2.style.background = "";
    };

//Function Gigi Kiri Baru Bawah 3
    var C1_GRB3 = document.getElementById('C1_GRB3');
    var C2_GRB3 = document.getElementById('C2_GRB3');
    var GRB3_P1 = document.getElementById('GRB3_P1');
    var GRB3_P2 = document.getElementById('GRB3_P2');
    var GRB3_P3 = document.getElementById('GRB3_P3');
    var GRB3_P4 = document.getElementById('GRB3_P4');
    var GRB3_P5 = document.getElementById('GRB3_P5');
    var GRB3_P6 = document.getElementById('GRB3_P6');
    var GRB3_P7 = document.getElementById('GRB3_P7');
    var GRB3_P1_P = document.getElementById('GRB3_P1_P');
    var GRB3_P2_P = document.getElementById('GRB3_P2_P');
    var GRB3_P3_P = document.getElementById('GRB3_P3_P');
    var GRB3_P4_P = document.getElementById('GRB3_P4_P');
    var GRB3_P5_P = document.getElementById('GRB3_P5_P');
    var GRB3_P6_P = document.getElementById('GRB3_P6_P');

    GRB3_P6.onchange = function()
    {
        $('#Col_GRB3').toggleClass('collapse');
    };
    GRB3_P6_P.onchange = function()
    {
        $('#Col_GRB3').toggleClass('collapse');
    };

    C2_GRB3.onchange = function() {
    if(GRB3_P6.checked == true)
    {
        $('#Col_GRB3').toggleClass('collapse');
    }
      GRB3_P1.disabled = true;
        $('#GRB3_P1').removeAttr('checked');
      GRB3_P2.disabled = true;
        $('#GRB3_P2').removeAttr('checked');
      GRB3_P3.disabled = true;
        $('#GRB3_P3').removeAttr('checked');
      GRB3_P4.disabled = true;
        $('#GRB3_P4').removeAttr('checked');
      GRB3_P5.disabled = true;
        $('#GRB3_P5').removeAttr('checked');
      GRB3_P6.disabled = true;
        $('#GRB3_P6').removeAttr('checked');
    if(GRB3_P6_P.checked == true)
    {
        $('#Col_GRB3').toggleClass('collapse');
    }
      GRB3_P1_P.disabled = true;
        $('#GRB3_P1_P').removeAttr('checked');
      GRB3_P2_P.disabled = true;
        $('#GRB3_P2_P').removeAttr('checked');
      GRB3_P3_P.disabled = true;
        $('#GRB3_P3_P').removeAttr('checked');
      GRB3_P4_P.disabled = true;
        $('#GRB3_P4_P').removeAttr('checked');
      GRB3_P5_P.disabled = true;
        $('#GRB3_P5_P').removeAttr('checked');
      GRB3_P6_P.disabled = true;
        $('#GRB3_P6_P').removeAttr('checked');
      GRB3_P7.disabled = true;
      GRB3_P7.value = '';
    };

    C1_GRB3.onchange = function() {

      GRB3_P1.disabled = false;
      GRB3_P2.disabled = false;
      GRB3_P3.disabled = false;
      GRB3_P4.disabled = false;
      GRB3_P5.disabled = false;
      GRB3_P6.disabled = false;
      GRB3_P1_P.disabled = false;
      GRB3_P2_P.disabled = false;
      GRB3_P3_P.disabled = false;
      GRB3_P4_P.disabled = false;
      GRB3_P5_P.disabled = false;
      GRB3_P6_P.disabled = false;
      GRB3_P7.disabled = false;
    };

    Obtn_GRB3.onclick = function()
    {
        if(C2_GRB3.checked == true)
        {
            btnGigiKiriBaruBawah3.style.background = "gray";
        }
        if(C1_GRB3.checked == true)
        {
            if(GRB3_P1.checked == true || GRB3_P2.checked == true || GRB3_P3.checked == true || GRB3_P4.checked == true || GRB3_P5.checked == true || GRB3_P6.checked == true || GRB3_P1_P.checked == true || GRB3_P2_P.checked == true || GRB3_P3_P.checked == true || GRB3_P4_P.checked == true || GRB3_P5_P.checked == true || GRB3_P6_P.checked == true)
            {
              btnGigiKiriBaruBawah3.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruBawah3.style.background = "";
            }
        }
    };

    function BatalKiriBawah3() {
      if(GRB3_P6.checked == true)
      {
          $('#Col_GRB3').toggleClass('collapse');
      }
      if(GRB3_P6_P.checked == true)
      {
          $('#Col_GRB3').toggleClass('collapse');
      }
      $('#GRB3_P1').removeAttr('checked');
      $('#GRB3_P2').removeAttr('checked');
      $('#GRB3_P3').removeAttr('checked');
      $('#GRB3_P4').removeAttr('checked');
      $('#GRB3_P5').removeAttr('checked');
      $('#GRB3_P6').removeAttr('checked');
      GRB3_P1.disabled = false;
      GRB3_P2.disabled = false;
      GRB3_P3.disabled = false;
      GRB3_P4.disabled = false;
      GRB3_P5.disabled = false;
      GRB3_P6.disabled = false;
      $('#GRB3_P1_P').removeAttr('checked');
      $('#GRB3_P2_P').removeAttr('checked');
      $('#GRB3_P3_P').removeAttr('checked');
      $('#GRB3_P4_P').removeAttr('checked');
      $('#GRB3_P5_P').removeAttr('checked');
      $('#GRB3_P6_P').removeAttr('checked');
      GRB3_P1_P.disabled = false;
      GRB3_P2_P.disabled = false;
      GRB3_P3_P.disabled = false;
      GRB3_P4_P.disabled = false;
      GRB3_P5_P.disabled = false;
      GRB3_P6_P.disabled = false;
      GRB3_P7.disabled = false;
      GRB3_P7.value = '';
      C1_GRB3.checked = true;
      btnGigiKiriBaruBawah3.style.background = "";
    };

//Function Gigi Kiri Baru Bawah 4
    var C1_GRB4 = document.getElementById('C1_GRB4');
    var C2_GRB4 = document.getElementById('C2_GRB4');
    var GRB4_P1 = document.getElementById('GRB4_P1');
    var GRB4_P2 = document.getElementById('GRB4_P2');
    var GRB4_P3 = document.getElementById('GRB4_P3');
    var GRB4_P4 = document.getElementById('GRB4_P4');
    var GRB4_P5 = document.getElementById('GRB4_P5');
    var GRB4_P6 = document.getElementById('GRB4_P6');
    var GRB4_P7 = document.getElementById('GRB4_P7');
    var GRB4_P1_P = document.getElementById('GRB4_P1_P');
    var GRB4_P2_P = document.getElementById('GRB4_P2_P');
    var GRB4_P3_P = document.getElementById('GRB4_P3_P');
    var GRB4_P4_P = document.getElementById('GRB4_P4_P');
    var GRB4_P5_P = document.getElementById('GRB4_P5_P');
    var GRB4_P6_P = document.getElementById('GRB4_P6_P');

    GRB4_P6.onchange = function()
    {
        $('#Col_GRB4').toggleClass('collapse');
    };
    GRB4_P6_P.onchange = function()
    {
        $('#Col_GRB4').toggleClass('collapse');
    };

    C2_GRB4.onchange = function() {
    if(GRB4_P6.checked == true)
    {
        $('#Col_GRB4').toggleClass('collapse');
    }
      GRB4_P1.disabled = true;
        $('#GRB4_P1').removeAttr('checked');
      GRB4_P2.disabled = true;
        $('#GRB4_P2').removeAttr('checked');
      GRB4_P3.disabled = true;
        $('#GRB4_P3').removeAttr('checked');
      GRB4_P4.disabled = true;
        $('#GRB4_P4').removeAttr('checked');
      GRB4_P5.disabled = true;
        $('#GRB4_P5').removeAttr('checked');
      GRB4_P6.disabled = true;
        $('#GRB4_P6').removeAttr('checked');
    if(GRB4_P6_P.checked == true)
    {
        $('#Col_GRB4').toggleClass('collapse');
    }
      GRB4_P1_P.disabled = true;
        $('#GRB4_P1_P').removeAttr('checked');
      GRB4_P2_P.disabled = true;
        $('#GRB4_P2_P').removeAttr('checked');
      GRB4_P3_P.disabled = true;
        $('#GRB4_P3_P').removeAttr('checked');
      GRB4_P4_P.disabled = true;
        $('#GRB4_P4_P').removeAttr('checked');
      GRB4_P5_P.disabled = true;
        $('#GRB4_P5_P').removeAttr('checked');
      GRB4_P6_P.disabled = true;
        $('#GRB4_P6_P').removeAttr('checked');
      GRB4_P7.disabled = true;
      GRB4_P7.value = '';
    };

    C1_GRB4.onchange = function() {

      GRB4_P1.disabled = false;
      GRB4_P2.disabled = false;
      GRB4_P3.disabled = false;
      GRB4_P4.disabled = false;
      GRB4_P5.disabled = false;
      GRB4_P6.disabled = false;
      GRB4_P1_P.disabled = false;
      GRB4_P2_P.disabled = false;
      GRB4_P3_P.disabled = false;
      GRB4_P4_P.disabled = false;
      GRB4_P5_P.disabled = false;
      GRB4_P6_P.disabled = false;
      GRB4_P7.disabled = false;
    };

    Obtn_GRB4.onclick = function()
    {
        if(C2_GRB4.checked == true)
        {
            btnGigiKiriBaruBawah4.style.background = "gray";
        }
        if(C1_GRB4.checked == true)
        {
            if(GRB4_P1.checked == true || GRB4_P2.checked == true || GRB4_P3.checked == true || GRB4_P4.checked == true || GRB4_P5.checked == true || GRB4_P6.checked == true || GRB4_P1_P.checked == true || GRB4_P2_P.checked == true || GRB4_P3_P.checked == true || GRB4_P4_P.checked == true || GRB4_P5_P.checked == true || GRB4_P6_P.checked == true)
            {
              btnGigiKiriBaruBawah4.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruBawah4.style.background = "";
            }
        }
    };

    function BatalKiriBawah4() {
      if(GRB4_P6.checked == true)
      {
          $('#Col_GRB4').toggleClass('collapse');
      }
      if(GRB4_P6_P.checked == true)
      {
          $('#Col_GRB4').toggleClass('collapse');
      }
      $('#GRB4_P1').removeAttr('checked');
      $('#GRB4_P2').removeAttr('checked');
      $('#GRB4_P3').removeAttr('checked');
      $('#GRB4_P4').removeAttr('checked');
      $('#GRB4_P5').removeAttr('checked');
      $('#GRB4_P6').removeAttr('checked');
      GRB4_P1.disabled = false;
      GRB4_P2.disabled = false;
      GRB4_P3.disabled = false;
      GRB4_P4.disabled = false;
      GRB4_P5.disabled = false;
      GRB4_P6.disabled = false;
      $('#GRB4_P1_P').removeAttr('checked');
      $('#GRB4_P2_P').removeAttr('checked');
      $('#GRB4_P3_P').removeAttr('checked');
      $('#GRB4_P4_P').removeAttr('checked');
      $('#GRB4_P5_P').removeAttr('checked');
      $('#GRB4_P6_P').removeAttr('checked');
      GRB4_P1_P.disabled = false;
      GRB4_P2_P.disabled = false;
      GRB4_P3_P.disabled = false;
      GRB4_P4_P.disabled = false;
      GRB4_P5_P.disabled = false;
      GRB4_P6_P.disabled = false;
      GRB4_P7.disabled = false;
      GRB4_P7.value = '';
      C1_GRB4.checked = true;
      btnGigiKiriBaruBawah4.style.background = "";
    };

//Function Gigi Kiri Baru Bawah 5
    var C1_GRB5 = document.getElementById('C1_GRB5');
    var C2_GRB5 = document.getElementById('C2_GRB5');
    var GRB5_P1 = document.getElementById('GRB5_P1');
    var GRB5_P2 = document.getElementById('GRB5_P2');
    var GRB5_P3 = document.getElementById('GRB5_P3');
    var GRB5_P4 = document.getElementById('GRB5_P4');
    var GRB5_P5 = document.getElementById('GRB5_P5');
    var GRB5_P6 = document.getElementById('GRB5_P6');
    var GRB5_P7 = document.getElementById('GRB5_P7');
    var GRB5_P1_P = document.getElementById('GRB5_P1_P');
    var GRB5_P2_P = document.getElementById('GRB5_P2_P');
    var GRB5_P3_P = document.getElementById('GRB5_P3_P');
    var GRB5_P4_P = document.getElementById('GRB5_P4_P');
    var GRB5_P5_P = document.getElementById('GRB5_P5_P');
    var GRB5_P6_P = document.getElementById('GRB5_P6_P');

    GRB5_P6.onchange = function()
    {
        $('#Col_GRB5').toggleClass('collapse');
    };
    GRB5_P6_P.onchange = function()
    {
        $('#Col_GRB5').toggleClass('collapse');
    };

    C2_GRB5.onchange = function() {
    if(GRB5_P6.checked == true)
    {
        $('#Col_GRB5').toggleClass('collapse');
    }
      GRB5_P1.disabled = true;
        $('#GRB5_P1').removeAttr('checked');
      GRB5_P2.disabled = true;
        $('#GRB5_P2').removeAttr('checked');
      GRB5_P3.disabled = true;
        $('#GRB5_P3').removeAttr('checked');
      GRB5_P4.disabled = true;
        $('#GRB5_P4').removeAttr('checked');
      GRB5_P5.disabled = true;
        $('#GRB5_P5').removeAttr('checked');
      GRB5_P6.disabled = true;
        $('#GRB5_P6').removeAttr('checked');
    if(GRB5_P6_P.checked == true)
    {
        $('#Col_GRB5').toggleClass('collapse');
    }
      GRB5_P1_P.disabled = true;
        $('#GRB5_P1_P').removeAttr('checked');
      GRB5_P2_P.disabled = true;
        $('#GRB5_P2_P').removeAttr('checked');
      GRB5_P3_P.disabled = true;
        $('#GRB5_P3_P').removeAttr('checked');
      GRB5_P4_P.disabled = true;
        $('#GRB5_P4_P').removeAttr('checked');
      GRB5_P5_P.disabled = true;
        $('#GRB5_P5_P').removeAttr('checked');
      GRB5_P6_P.disabled = true;
        $('#GRB5_P6_P').removeAttr('checked');
      GRB5_P7.disabled = true;
      GRB5_P7.value = '';
    };

    C1_GRB5.onchange = function() {

      GRB5_P1.disabled = false;
      GRB5_P2.disabled = false;
      GRB5_P3.disabled = false;
      GRB5_P4.disabled = false;
      GRB5_P5.disabled = false;
      GRB5_P6.disabled = false;
      GRB5_P1_P.disabled = false;
      GRB5_P2_P.disabled = false;
      GRB5_P3_P.disabled = false;
      GRB5_P4_P.disabled = false;
      GRB5_P5_P.disabled = false;
      GRB5_P6_P.disabled = false;
      GRB5_P7.disabled = false;
    };

    Obtn_GRB5.onclick = function()
    {
        if(C2_GRB5.checked == true)
        {
            btnGigiKiriBaruBawah5.style.background = "gray";
        }
        if(C1_GRB5.checked == true)
        {
            if(GRB5_P1.checked == true || GRB5_P2.checked == true || GRB5_P3.checked == true || GRB5_P4.checked == true || GRB5_P5.checked == true || GRB5_P6.checked == true || GRB5_P1_P.checked == true || GRB5_P2_P.checked == true || GRB5_P3_P.checked == true || GRB5_P4_P.checked == true || GRB5_P5_P.checked == true || GRB5_P6_P.checked == true)
            {
              btnGigiKiriBaruBawah5.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruBawah5.style.background = "";
            }
        }
    };

    function BatalKiriBawah5() {
      if(GRB5_P6.checked == true)
      {
          $('#Col_GRB5').toggleClass('collapse');
      }
      if(GRB5_P6_P.checked == true)
      {
          $('#Col_GRB5').toggleClass('collapse');
      }
      $('#GRB5_P1').removeAttr('checked');
      $('#GRB5_P2').removeAttr('checked');
      $('#GRB5_P3').removeAttr('checked');
      $('#GRB5_P4').removeAttr('checked');
      $('#GRB5_P5').removeAttr('checked');
      $('#GRB5_P6').removeAttr('checked');
      GRB5_P1.disabled = false;
      GRB5_P2.disabled = false;
      GRB5_P3.disabled = false;
      GRB5_P4.disabled = false;
      GRB5_P5.disabled = false;
      GRB5_P6.disabled = false;
      $('#GRB5_P1_P').removeAttr('checked');
      $('#GRB5_P2_P').removeAttr('checked');
      $('#GRB5_P3_P').removeAttr('checked');
      $('#GRB5_P4_P').removeAttr('checked');
      $('#GRB5_P5_P').removeAttr('checked');
      $('#GRB5_P6_P').removeAttr('checked');
      GRB5_P1_P.disabled = false;
      GRB5_P2_P.disabled = false;
      GRB5_P3_P.disabled = false;
      GRB5_P4_P.disabled = false;
      GRB5_P5_P.disabled = false;
      GRB5_P6_P.disabled = false;
      GRB5_P7.disabled = false;
      GRB5_P7.value = '';
      C1_GRB5.checked = true;
      btnGigiKiriBaruBawah5.style.background = "";
    };

//Function Gigi Kiri Baru Bawah 6
    var C1_GRB6 = document.getElementById('C1_GRB6');
    var C2_GRB6 = document.getElementById('C2_GRB6');
    var GRB6_P1 = document.getElementById('GRB6_P1');
    var GRB6_P2 = document.getElementById('GRB6_P2');
    var GRB6_P3 = document.getElementById('GRB6_P3');
    var GRB6_P4 = document.getElementById('GRB6_P4');
    var GRB6_P5 = document.getElementById('GRB6_P5');
    var GRB6_P6 = document.getElementById('GRB6_P6');
    var GRB6_P7 = document.getElementById('GRB6_P7');

    GRB6_P6.onchange = function()
    {
        $('#Col_GRB6').toggleClass('collapse');
    };

    C2_GRB6.onchange = function() {
    if(GRB6_P6.checked == true)
    {
        $('#Col_GRB6').toggleClass('collapse');
    }
      GRB6_P1.disabled = true;
        $('#GRB6_P1').removeAttr('checked');
      GRB6_P2.disabled = true;
        $('#GRB6_P2').removeAttr('checked');
      GRB6_P3.disabled = true;
        $('#GRB6_P3').removeAttr('checked');
      GRB6_P4.disabled = true;
        $('#GRB6_P4').removeAttr('checked');
      GRB6_P5.disabled = true;
        $('#GRB6_P5').removeAttr('checked');
      GRB6_P6.disabled = true;
        $('#GRB6_P6').removeAttr('checked');
      GRB6_P7.disabled = true;
      GRB6_P7.value = '';
    };

    C1_GRB6.onchange = function() {

      GRB6_P1.disabled = false;
      GRB6_P2.disabled = false;
      GRB6_P3.disabled = false;
      GRB6_P4.disabled = false;
      GRB6_P5.disabled = false;
      GRB6_P6.disabled = false;
      GRB6_P7.disabled = false;
    };

    Obtn_GRB6.onclick = function()
    {
        if(C2_GRB6.checked == true)
        {
            btnGigiKiriBaruBawah6.style.background = "gray";
        }
        if(C1_GRB6.checked == true)
        {
            if(GRB6_P1.checked == true || GRB6_P2.checked == true || GRB6_P3.checked == true || GRB6_P4.checked == true || GRB6_P5.checked == true || GRB6_P6.checked == true)
            {
              btnGigiKiriBaruBawah6.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruBawah6.style.background = "";
            }
        }
    };

    function BatalKiriBawah6() {
      if(GRB6_P6.checked == true)
      {
          $('#Col_GRB6').toggleClass('collapse');
      }
      $('#GRB6_P1').removeAttr('checked');
      $('#GRB6_P2').removeAttr('checked');
      $('#GRB6_P3').removeAttr('checked');
      $('#GRB6_P4').removeAttr('checked');
      $('#GRB6_P5').removeAttr('checked');
      $('#GRB6_P6').removeAttr('checked');
      GRB6_P1.disabled = false;
      GRB6_P2.disabled = false;
      GRB6_P3.disabled = false;
      GRB6_P4.disabled = false;
      GRB6_P5.disabled = false;
      GRB6_P6.disabled = false;
      GRB6_P7.disabled = false;
      GRB6_P7.value = '';
      C1_GRB6.checked = true;
      btnGigiKiriBaruBawah6.style.background = "";
    };

//Function Gigi Kiri Baru Bawah 7
    var C1_GRB7 = document.getElementById('C1_GRB7');
    var C2_GRB7 = document.getElementById('C2_GRB7');
    var GRB7_P1 = document.getElementById('GRB7_P1');
    var GRB7_P2 = document.getElementById('GRB7_P2');
    var GRB7_P3 = document.getElementById('GRB7_P3');
    var GRB7_P4 = document.getElementById('GRB7_P4');
    var GRB7_P5 = document.getElementById('GRB7_P5');
    var GRB7_P6 = document.getElementById('GRB7_P6');
    var GRB7_P7 = document.getElementById('GRB7_P7');

    GRB7_P6.onchange = function()
    {
        $('#Col_GRB7').toggleClass('collapse');
    };

    C2_GRB7.onchange = function() {
    if(GRB7_P6.checked == true)
    {
        $('#Col_GRB7').toggleClass('collapse');
    }
      GRB7_P1.disabled = true;
        $('#GRB7_P1').removeAttr('checked');
      GRB7_P2.disabled = true;
        $('#GRB7_P2').removeAttr('checked');
      GRB7_P3.disabled = true;
        $('#GRB7_P3').removeAttr('checked');
      GRB7_P4.disabled = true;
        $('#GRB7_P4').removeAttr('checked');
      GRB7_P5.disabled = true;
        $('#GRB7_P5').removeAttr('checked');
      GRB7_P6.disabled = true;
        $('#GRB7_P6').removeAttr('checked');
      GRB7_P7.disabled = true;
      GRB7_P7.value = '';
    };

    C1_GRB7.onchange = function() {

      GRB7_P1.disabled = false;
      GRB7_P2.disabled = false;
      GRB7_P3.disabled = false;
      GRB7_P4.disabled = false;
      GRB7_P5.disabled = false;
      GRB7_P6.disabled = false;
      GRB7_P7.disabled = false;
    };

    Obtn_GRB7.onclick = function()
    {
        if(C2_GRB7.checked == true)
        {
            btnGigiKiriBaruBawah7.style.background = "gray";
        }
        if(C1_GRB7.checked == true)
        {
            if(GRB7_P1.checked == true || GRB7_P2.checked == true || GRB7_P3.checked == true || GRB7_P4.checked == true || GRB7_P5.checked == true || GRB7_P6.checked == true)
            {
              btnGigiKiriBaruBawah7.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruBawah7.style.background = "";
            }
        }
    };

    function BatalKiriBawah7() {
      if(GRB7_P6.checked == true)
      {
          $('#Col_GRB7').toggleClass('collapse');
      }
      $('#GRB7_P1').removeAttr('checked');
      $('#GRB7_P2').removeAttr('checked');
      $('#GRB7_P3').removeAttr('checked');
      $('#GRB7_P4').removeAttr('checked');
      $('#GRB7_P5').removeAttr('checked');
      $('#GRB7_P6').removeAttr('checked');
      GRB7_P1.disabled = false;
      GRB7_P2.disabled = false;
      GRB7_P3.disabled = false;
      GRB7_P4.disabled = false;
      GRB7_P5.disabled = false;
      GRB7_P6.disabled = false;
      GRB7_P7.disabled = false;
      GRB7_P7.value = '';
      C1_GRB7.checked = true;
      btnGigiKiriBaruBawah7.style.background = "";
    };

//Function Gigi Kiri Baru Bawah 8
    var C1_GRB8 = document.getElementById('C1_GRB8');
    var C2_GRB8 = document.getElementById('C2_GRB8');
    var GRB8_P1 = document.getElementById('GRB8_P1');
    var GRB8_P2 = document.getElementById('GRB8_P2');
    var GRB8_P3 = document.getElementById('GRB8_P3');
    var GRB8_P4 = document.getElementById('GRB8_P4');
    var GRB8_P5 = document.getElementById('GRB8_P5');
    var GRB8_P6 = document.getElementById('GRB8_P6');
    var GRB8_P7 = document.getElementById('GRB8_P7');

    GRB8_P6.onchange = function()
    {
        $('#Col_GRB8').toggleClass('collapse');
    };

    C2_GRB8.onchange = function() {
    if(GRB8_P6.checked == true)
    {
        $('#Col_GRB8').toggleClass('collapse');
    }
      GRB8_P1.disabled = true;
        $('#GRB8_P1').removeAttr('checked');
      GRB8_P2.disabled = true;
        $('#GRB8_P2').removeAttr('checked');
      GRB8_P3.disabled = true;
        $('#GRB8_P3').removeAttr('checked');
      GRB8_P4.disabled = true;
        $('#GRB8_P4').removeAttr('checked');
      GRB8_P5.disabled = true;
        $('#GRB8_P5').removeAttr('checked');
      GRB8_P6.disabled = true;
        $('#GRB8_P6').removeAttr('checked');
      GRB8_P7.disabled = true;
      GRB8_P7.value = '';
    };

    C1_GRB8.onchange = function() {

      GRB8_P1.disabled = false;
      GRB8_P2.disabled = false;
      GRB8_P3.disabled = false;
      GRB8_P4.disabled = false;
      GRB8_P5.disabled = false;
      GRB8_P6.disabled = false;
      GRB8_P7.disabled = false;
    };

    Obtn_GRB8.onclick = function()
    {
        if(C2_GRB8.checked == true)
        {
            btnGigiKiriBaruBawah8.style.background = "gray";
        }
        if(C1_GRB8.checked == true)
        {
            if(GRB8_P1.checked == true || GRB8_P2.checked == true || GRB8_P3.checked == true || GRB8_P4.checked == true || GRB8_P5.checked == true || GRB8_P6.checked == true)
            {
              btnGigiKiriBaruBawah8.style.background = "red";
            }
            else
            {
            btnGigiKiriBaruBawah8.style.background = "";
            }
        }
    };

    function BatalKiriBawah8() {
      if(GRB8_P6.checked == true)
      {
          $('#Col_GRB8').toggleClass('collapse');
      }
      $('#GRB8_P1').removeAttr('checked');
      $('#GRB8_P2').removeAttr('checked');
      $('#GRB8_P3').removeAttr('checked');
      $('#GRB8_P4').removeAttr('checked');
      $('#GRB8_P5').removeAttr('checked');
      $('#GRB8_P6').removeAttr('checked');
      GRB8_P1.disabled = false;
      GRB8_P2.disabled = false;
      GRB8_P3.disabled = false;
      GRB8_P4.disabled = false;
      GRB8_P5.disabled = false;
      GRB8_P6.disabled = false;
      GRB8_P7.disabled = false;
      GRB8_P7.value = '';
      C1_GRB8.checked = true;
      btnGigiKiriBaruBawah8.style.background = "";
    };

//Function Gigi Kanan Baru Bawah 1
    var C1_GLB1 = document.getElementById('C1_GLB1');
    var C2_GLB1 = document.getElementById('C2_GLB1');
    var GLB1_P1 = document.getElementById('GLB1_P1');
    var GLB1_P2 = document.getElementById('GLB1_P2');
    var GLB1_P3 = document.getElementById('GLB1_P3');
    var GLB1_P4 = document.getElementById('GLB1_P4');
    var GLB1_P5 = document.getElementById('GLB1_P5');
    var GLB1_P6 = document.getElementById('GLB1_P6');
    var GLB1_P7 = document.getElementById('GLB1_P7');
    var GLB1_P1_P = document.getElementById('GLB1_P1_P');
    var GLB1_P2_P = document.getElementById('GLB1_P2_P');
    var GLB1_P3_P = document.getElementById('GLB1_P3_P');
    var GLB1_P4_P = document.getElementById('GLB1_P4_P');
    var GLB1_P5_P = document.getElementById('GLB1_P5_P');
    var GLB1_P6_P = document.getElementById('GLB1_P6_P');

    GLB1_P6.onchange = function()
    {
        $('#Col_GLB1').toggleClass('collapse');
    };
    GLB1_P6_P.onchange = function()
    {
        $('#Col_GLB1').toggleClass('collapse');
    };

    C2_GLB1.onchange = function() {
    if(GLB1_P6.checked == true)
    {
        $('#Col_GLB1').toggleClass('collapse');
    }
      GLB1_P1.disabled = true;
        $('#GLB1_P1').removeAttr('checked');
      GLB1_P2.disabled = true;
        $('#GLB1_P2').removeAttr('checked');
      GLB1_P3.disabled = true;
        $('#GLB1_P3').removeAttr('checked');
      GLB1_P4.disabled = true;
        $('#GLB1_P4').removeAttr('checked');
      GLB1_P5.disabled = true;
        $('#GLB1_P5').removeAttr('checked');
      GLB1_P6.disabled = true;
        $('#GLB1_P6').removeAttr('checked');
    if(GLB1_P6_P.checked == true)
    {
        $('#Col_GLB1').toggleClass('collapse');
    }
      GLB1_P1_P.disabled = true;
        $('#GLB1_P1_P').removeAttr('checked');
      GLB1_P2_P.disabled = true;
        $('#GLB1_P2_P').removeAttr('checked');
      GLB1_P3_P.disabled = true;
        $('#GLB1_P3_P').removeAttr('checked');
      GLB1_P4_P.disabled = true;
        $('#GLB1_P4_P').removeAttr('checked');
      GLB1_P5_P.disabled = true;
        $('#GLB1_P5_P').removeAttr('checked');
      GLB1_P6_P.disabled = true;
        $('#GLB1_P6_P').removeAttr('checked');
      GLB1_P7.disabled = true;
      GLB1_P7.value = '';
    };

    C1_GLB1.onchange = function() {

      GLB1_P1.disabled = false;
      GLB1_P2.disabled = false;
      GLB1_P3.disabled = false;
      GLB1_P4.disabled = false;
      GLB1_P5.disabled = false;
      GLB1_P6.disabled = false;
      GLB1_P1_P.disabled = false;
      GLB1_P2_P.disabled = false;
      GLB1_P3_P.disabled = false;
      GLB1_P4_P.disabled = false;
      GLB1_P5_P.disabled = false;
      GLB1_P6_P.disabled = false;
      GLB1_P7.disabled = false;
    };

    Obtn_GLB1.onclick = function()
    {
        if(C2_GLB1.checked == true)
        {
            btnGigiKananBaruBawah1.style.background = "gray";
        }
        if(C1_GLB1.checked == true)
        {
            if(GLB1_P1.checked == true || GLB1_P2.checked == true || GLB1_P3.checked == true || GLB1_P4.checked == true || GLB1_P5.checked == true || GLB1_P6.checked == true || GLB1_P1_P.checked == true || GLB1_P2_P.checked == true || GLB1_P3_P.checked == true || GLB1_P4_P.checked == true || GLB1_P5_P.checked == true || GLB1_P6_P.checked == true)
            {
              btnGigiKananBaruBawah1.style.background = "red";
            }
            else
            {
            btnGigiKananBaruBawah1.style.background = "";
            }
        }
    };

    function BatalKananBawah1() {
      if(GLB1_P6.checked == true)
      {
          $('#Col_GLB1').toggleClass('collapse');
      }
      if(GLB1_P6_P.checked == true)
      {
          $('#Col_GLB1').toggleClass('collapse');
      }
      $('#GLB1_P1').removeAttr('checked');
      $('#GLB1_P2').removeAttr('checked');
      $('#GLB1_P3').removeAttr('checked');
      $('#GLB1_P4').removeAttr('checked');
      $('#GLB1_P5').removeAttr('checked');
      $('#GLB1_P6').removeAttr('checked');
      GLB1_P1.disabled = false;
      GLB1_P2.disabled = false;
      GLB1_P3.disabled = false;
      GLB1_P4.disabled = false;
      GLB1_P5.disabled = false;
      GLB1_P6.disabled = false;
      $('#GLB1_P1_P').removeAttr('checked');
      $('#GLB1_P2_P').removeAttr('checked');
      $('#GLB1_P3_P').removeAttr('checked');
      $('#GLB1_P4_P').removeAttr('checked');
      $('#GLB1_P5_P').removeAttr('checked');
      $('#GLB1_P6_P').removeAttr('checked');
      GLB1_P1_P.disabled = false;
      GLB1_P2_P.disabled = false;
      GLB1_P3_P.disabled = false;
      GLB1_P4_P.disabled = false;
      GLB1_P5_P.disabled = false;
      GLB1_P6_P.disabled = false;
      GLB1_P7.disabled = false;
      GLB1_P7.value = '';
      C1_GLB1.checked = true;
      btnGigiKananBaruBawah1.style.background = "";
    };

//Function Gigi Kanan Baru Bawah 2
    var C1_GLB2 = document.getElementById('C1_GLB2');
    var C2_GLB2 = document.getElementById('C2_GLB2');
    var GLB2_P1 = document.getElementById('GLB2_P1');
    var GLB2_P2 = document.getElementById('GLB2_P2');
    var GLB2_P3 = document.getElementById('GLB2_P3');
    var GLB2_P4 = document.getElementById('GLB2_P4');
    var GLB2_P5 = document.getElementById('GLB2_P5');
    var GLB2_P6 = document.getElementById('GLB2_P6');
    var GLB2_P7 = document.getElementById('GLB2_P7');
    var GLB2_P1_P = document.getElementById('GLB2_P1_P');
    var GLB2_P2_P = document.getElementById('GLB2_P2_P');
    var GLB2_P3_P = document.getElementById('GLB2_P3_P');
    var GLB2_P4_P = document.getElementById('GLB2_P4_P');
    var GLB2_P5_P = document.getElementById('GLB2_P5_P');
    var GLB2_P6_P = document.getElementById('GLB2_P6_P');

    GLB2_P6.onchange = function()
    {
        $('#Col_GLB2').toggleClass('collapse');
    };
    GLB2_P6_P.onchange = function()
    {
        $('#Col_GLB2').toggleClass('collapse');
    };

    C2_GLB2.onchange = function() {
    if(GLB2_P6.checked == true)
    {
        $('#Col_GLB2').toggleClass('collapse');
    }
      GLB2_P1.disabled = true;
        $('#GLB2_P1').removeAttr('checked');
      GLB2_P2.disabled = true;
        $('#GLB2_P2').removeAttr('checked');
      GLB2_P3.disabled = true;
        $('#GLB2_P3').removeAttr('checked');
      GLB2_P4.disabled = true;
        $('#GLB2_P4').removeAttr('checked');
      GLB2_P5.disabled = true;
        $('#GLB2_P5').removeAttr('checked');
      GLB2_P6.disabled = true;
        $('#GLB2_P6').removeAttr('checked');
    if(GLB2_P6_P.checked == true)
    {
        $('#Col_GLB2').toggleClass('collapse');
    }
      GLB2_P1_P.disabled = true;
        $('#GLB2_P1_P').removeAttr('checked');
      GLB2_P2_P.disabled = true;
        $('#GLB2_P2_P').removeAttr('checked');
      GLB2_P3_P.disabled = true;
        $('#GLB2_P3_P').removeAttr('checked');
      GLB2_P4_P.disabled = true;
        $('#GLB2_P4_P').removeAttr('checked');
      GLB2_P5_P.disabled = true;
        $('#GLB2_P5_P').removeAttr('checked');
      GLB2_P6_P.disabled = true;
        $('#GLB2_P6_P').removeAttr('checked');
      GLB2_P7.disabled = true;
      GLB2_P7.value = '';
    };

    C1_GLB2.onchange = function() {

      GLB2_P1.disabled = false;
      GLB2_P2.disabled = false;
      GLB2_P3.disabled = false;
      GLB2_P4.disabled = false;
      GLB2_P5.disabled = false;
      GLB2_P6.disabled = false;
      GLB2_P1_P.disabled = false;
      GLB2_P2_P.disabled = false;
      GLB2_P3_P.disabled = false;
      GLB2_P4_P.disabled = false;
      GLB2_P5_P.disabled = false;
      GLB2_P6_P.disabled = false;
      GLB2_P7.disabled = false;
    };

    Obtn_GLB2.onclick = function()
    {
        if(C2_GLB2.checked == true)
        {
            btnGigiKananBaruBawah2.style.background = "gray";
        }
        if(C1_GLB2.checked == true)
        {
            if(GLB2_P1.checked == true || GLB2_P2.checked == true || GLB2_P3.checked == true || GLB2_P4.checked == true || GLB2_P5.checked == true || GLB2_P6.checked == true || GLB2_P1_P.checked == true || GLB2_P2_P.checked == true || GLB2_P3_P.checked == true || GLB2_P4_P.checked == true || GLB2_P5_P.checked == true || GLB2_P6_P.checked == true)
            {
              btnGigiKananBaruBawah2.style.background = "red";
            }
            else
            {
            btnGigiKananBaruBawah2.style.background = "";
            }
        }
    };

    function BatalKananBawah2() {
      if(GLB2_P6.checked == true)
      {
          $('#Col_GLB2').toggleClass('collapse');
      }
      if(GLB2_P6_P.checked == true)
      {
          $('#Col_GLB2').toggleClass('collapse');
      }
      $('#GLB2_P1').removeAttr('checked');
      $('#GLB2_P2').removeAttr('checked');
      $('#GLB2_P3').removeAttr('checked');
      $('#GLB2_P4').removeAttr('checked');
      $('#GLB2_P5').removeAttr('checked');
      $('#GLB2_P6').removeAttr('checked');
      GLB2_P1.disabled = false;
      GLB2_P2.disabled = false;
      GLB2_P3.disabled = false;
      GLB2_P4.disabled = false;
      GLB2_P5.disabled = false;
      GLB2_P6.disabled = false;
      $('#GLB2_P1_P').removeAttr('checked');
      $('#GLB2_P2_P').removeAttr('checked');
      $('#GLB2_P3_P').removeAttr('checked');
      $('#GLB2_P4_P').removeAttr('checked');
      $('#GLB2_P5_P').removeAttr('checked');
      $('#GLB2_P6_P').removeAttr('checked');
      GLB2_P1_P.disabled = false;
      GLB2_P2_P.disabled = false;
      GLB2_P3_P.disabled = false;
      GLB2_P4_P.disabled = false;
      GLB2_P5_P.disabled = false;
      GLB2_P6_P.disabled = false;
      GLB2_P7.disabled = false;
      GLB2_P7.value = '';
      C1_GLB2.checked = true;
      btnGigiKananBaruBawah2.style.background = "";
    };

//Function Gigi Kanan Baru Bawah 3
    var C1_GLB3 = document.getElementById('C1_GLB3');
    var C2_GLB3 = document.getElementById('C2_GLB3');
    var GLB3_P1 = document.getElementById('GLB3_P1');
    var GLB3_P2 = document.getElementById('GLB3_P2');
    var GLB3_P3 = document.getElementById('GLB3_P3');
    var GLB3_P4 = document.getElementById('GLB3_P4');
    var GLB3_P5 = document.getElementById('GLB3_P5');
    var GLB3_P6 = document.getElementById('GLB3_P6');
    var GLB3_P7 = document.getElementById('GLB3_P7');
    var GLB3_P1_P = document.getElementById('GLB3_P1_P');
    var GLB3_P2_P = document.getElementById('GLB3_P2_P');
    var GLB3_P3_P = document.getElementById('GLB3_P3_P');
    var GLB3_P4_P = document.getElementById('GLB3_P4_P');
    var GLB3_P5_P = document.getElementById('GLB3_P5_P');
    var GLB3_P6_P = document.getElementById('GLB3_P6_P');

    GLB3_P6.onchange = function()
    {
        $('#Col_GLB3').toggleClass('collapse');
    };
    GLB3_P6_P.onchange = function()
    {
        $('#Col_GLB3').toggleClass('collapse');
    };


    C2_GLB3.onchange = function() {
    if(GLB3_P6.checked == true)
    {
        $('#Col_GLB3').toggleClass('collapse');
    }
      GLB3_P1.disabled = true;
        $('#GLB3_P1').removeAttr('checked');
      GLB3_P2.disabled = true;
        $('#GLB3_P2').removeAttr('checked');
      GLB3_P3.disabled = true;
        $('#GLB3_P3').removeAttr('checked');
      GLB3_P4.disabled = true;
        $('#GLB3_P4').removeAttr('checked');
      GLB3_P5.disabled = true;
        $('#GLB3_P5').removeAttr('checked');
      GLB3_P6.disabled = true;
        $('#GLB3_P6').removeAttr('checked');
    if(GLB3_P6_P.checked == true)
    {
        $('#Col_GLB3').toggleClass('collapse');
    }
      GLB3_P1_P.disabled = true;
        $('#GLB3_P1_P').removeAttr('checked');
      GLB3_P2_P.disabled = true;
        $('#GLB3_P2_P').removeAttr('checked');
      GLB3_P3_P.disabled = true;
        $('#GLB3_P3_P').removeAttr('checked');
      GLB3_P4_P.disabled = true;
        $('#GLB3_P4_P').removeAttr('checked');
      GLB3_P5_P.disabled = true;
        $('#GLB3_P5_P').removeAttr('checked');
      GLB3_P6_P.disabled = true;
        $('#GLB3_P6_P').removeAttr('checked');
      GLB3_P7.disabled = true;
      GLB3_P7.value = '';
    };

    C1_GLB3.onchange = function() {

      GLB3_P1.disabled = false;
      GLB3_P2.disabled = false;
      GLB3_P3.disabled = false;
      GLB3_P4.disabled = false;
      GLB3_P5.disabled = false;
      GLB3_P6.disabled = false;
      GLB3_P1_P.disabled = false;
      GLB3_P2_P.disabled = false;
      GLB3_P3_P.disabled = false;
      GLB3_P4_P.disabled = false;
      GLB3_P5_P.disabled = false;
      GLB3_P6_P.disabled = false;
      GLB3_P7.disabled = false;
    };

    Obtn_GLB3.onclick = function()
    {
        if(C2_GLB3.checked == true)
        {
            btnGigiKananBaruBawah3.style.background = "gray";
        }
        if(C1_GLB3.checked == true)
        {
            if(GLB3_P1.checked == true || GLB3_P2.checked == true || GLB3_P3.checked == true || GLB3_P4.checked == true || GLB3_P5.checked == true || GLB3_P6.checked == true || GLB3_P1_P.checked == true || GLB3_P2_P.checked == true || GLB3_P3_P.checked == true || GLB3_P4_P.checked == true || GLB3_P5_P.checked == true || GLB3_P6_P.checked == true)
            {
              btnGigiKananBaruBawah3.style.background = "red";
            }
            else
            {
            btnGigiKananBaruBawah3.style.background = "";
            }
        }
    };

    function BatalKananBawah3() {
      if(GLB3_P6.checked == true)
      {
          $('#Col_GLB3').toggleClass('collapse');
      }
      if(GLB3_P6_P.checked == true)
      {
          $('#Col_GLB3').toggleClass('collapse');
      }
      $('#GLB3_P1').removeAttr('checked');
      $('#GLB3_P2').removeAttr('checked');
      $('#GLB3_P3').removeAttr('checked');
      $('#GLB3_P4').removeAttr('checked');
      $('#GLB3_P5').removeAttr('checked');
      $('#GLB3_P6').removeAttr('checked');
      GLB3_P1.disabled = false;
      GLB3_P2.disabled = false;
      GLB3_P3.disabled = false;
      GLB3_P4.disabled = false;
      GLB3_P5.disabled = false;
      GLB3_P6.disabled = false;
      $('#GLB3_P1_P').removeAttr('checked');
      $('#GLB3_P2_P').removeAttr('checked');
      $('#GLB3_P3_P').removeAttr('checked');
      $('#GLB3_P4_P').removeAttr('checked');
      $('#GLB3_P5_P').removeAttr('checked');
      $('#GLB3_P6_P').removeAttr('checked');
      GLB3_P1_P.disabled = false;
      GLB3_P2_P.disabled = false;
      GLB3_P3_P.disabled = false;
      GLB3_P4_P.disabled = false;
      GLB3_P5_P.disabled = false;
      GLB3_P6_P.disabled = false;
      GLB3_P7.disabled = false;
      GLB3_P7.value = '';
      C1_GLB3.checked = true;
      btnGigiKananBaruBawah3.style.background = "";
    };

//Function Gigi Kanan Baru Bawah 4
    var C1_GLB4 = document.getElementById('C1_GLB4');
    var C2_GLB4 = document.getElementById('C2_GLB4');
    var GLB4_P1 = document.getElementById('GLB4_P1');
    var GLB4_P2 = document.getElementById('GLB4_P2');
    var GLB4_P3 = document.getElementById('GLB4_P3');
    var GLB4_P4 = document.getElementById('GLB4_P4');
    var GLB4_P5 = document.getElementById('GLB4_P5');
    var GLB4_P6 = document.getElementById('GLB4_P6');
    var GLB4_P7 = document.getElementById('GLB4_P7');
    var GLB4_P1_P = document.getElementById('GLB4_P1_P');
    var GLB4_P2_P = document.getElementById('GLB4_P2_P');
    var GLB4_P3_P = document.getElementById('GLB4_P3_P');
    var GLB4_P4_P = document.getElementById('GLB4_P4_P');
    var GLB4_P5_P = document.getElementById('GLB4_P5_P');
    var GLB4_P6_P = document.getElementById('GLB4_P6_P');

    GLB4_P6.onchange = function()
    {
        $('#Col_GLB4').toggleClass('collapse');
    };
    GLB4_P6_P.onchange = function()
    {
        $('#Col_GLB4').toggleClass('collapse');
    };

    C2_GLB4.onchange = function() {
    if(GLB4_P6.checked == true)
    {
        $('#Col_GLB4').toggleClass('collapse');
    }
      GLB4_P1.disabled = true;
        $('#GLB4_P1').removeAttr('checked');
      GLB4_P2.disabled = true;
        $('#GLB4_P2').removeAttr('checked');
      GLB4_P3.disabled = true;
        $('#GLB4_P3').removeAttr('checked');
      GLB4_P4.disabled = true;
        $('#GLB4_P4').removeAttr('checked');
      GLB4_P5.disabled = true;
        $('#GLB4_P5').removeAttr('checked');
      GLB4_P6.disabled = true;
        $('#GLB4_P6').removeAttr('checked');
    if(GLB4_P6_P.checked == true)
    {
        $('#Col_GLB4').toggleClass('collapse');
    }
      GLB4_P1_P.disabled = true;
        $('#GLB4_P1_P').removeAttr('checked');
      GLB4_P2_P.disabled = true;
        $('#GLB4_P2_P').removeAttr('checked');
      GLB4_P3_P.disabled = true;
        $('#GLB4_P3_P').removeAttr('checked');
      GLB4_P4_P.disabled = true;
        $('#GLB4_P4_P').removeAttr('checked');
      GLB4_P5_P.disabled = true;
        $('#GLB4_P5_P').removeAttr('checked');
      GLB4_P6_P.disabled = true;
        $('#GLB4_P6_P').removeAttr('checked');
      GLB4_P7.disabled = true;
      GLB4_P7.value = '';
    };

    C1_GLB4.onchange = function() {

      GLB4_P1.disabled = false;
      GLB4_P2.disabled = false;
      GLB4_P3.disabled = false;
      GLB4_P4.disabled = false;
      GLB4_P5.disabled = false;
      GLB4_P6.disabled = false;
      GLB4_P1_P.disabled = false;
      GLB4_P2_P.disabled = false;
      GLB4_P3_P.disabled = false;
      GLB4_P4_P.disabled = false;
      GLB4_P5_P.disabled = false;
      GLB4_P6_P.disabled = false;
      GLB4_P7.disabled = false;
    };

    Obtn_GLB4.onclick = function()
    {
        if(C2_GLB4.checked == true)
        {
            btnGigiKananBaruBawah4.style.background = "gray";
        }
        if(C1_GLB4.checked == true)
        {
            if(GLB4_P1.checked == true || GLB4_P2.checked == true || GLB4_P3.checked == true || GLB4_P4.checked == true || GLB4_P5.checked == true || GLB4_P6.checked == true || GLB4_P1_P.checked == true || GLB4_P2_P.checked == true || GLB4_P3_P.checked == true || GLB4_P4_P.checked == true || GLB4_P5_P.checked == true || GLB4_P6_P.checked == true)
            {
              btnGigiKananBaruBawah4.style.background = "red";
            }
            else
            {
            btnGigiKananBaruBawah4.style.background = "";
            }
        }
    };

    function BatalKananBawah4() {
      if(GLB4_P6.checked == true)
      {
          $('#Col_GLB4').toggleClass('collapse');
      }
      if(GLB4_P6_P.checked == true)
      {
          $('#Col_GLB4').toggleClass('collapse');
      }
      $('#GLB4_P1').removeAttr('checked');
      $('#GLB4_P2').removeAttr('checked');
      $('#GLB4_P3').removeAttr('checked');
      $('#GLB4_P4').removeAttr('checked');
      $('#GLB4_P5').removeAttr('checked');
      $('#GLB4_P6').removeAttr('checked');
      GLB4_P1.disabled = false;
      GLB4_P2.disabled = false;
      GLB4_P3.disabled = false;
      GLB4_P4.disabled = false;
      GLB4_P5.disabled = false;
      GLB4_P6.disabled = false;
      $('#GLB4_P1_P').removeAttr('checked');
      $('#GLB4_P2_P').removeAttr('checked');
      $('#GLB4_P3_P').removeAttr('checked');
      $('#GLB4_P4_P').removeAttr('checked');
      $('#GLB4_P5_P').removeAttr('checked');
      $('#GLB4_P6_P').removeAttr('checked');
      GLB4_P1_P.disabled = false;
      GLB4_P2_P.disabled = false;
      GLB4_P3_P.disabled = false;
      GLB4_P4_P.disabled = false;
      GLB4_P5_P.disabled = false;
      GLB4_P6_P.disabled = false;
      GLB4_P7.disabled = false;
      GLB4_P7.value = '';
      C1_GLB4.checked = true;
      btnGigiKananBaruBawah4.style.background = "";
    };

//Function Gigi Kanan Baru Bawah 5
    var C1_GLB5 = document.getElementById('C1_GLB5');
    var C2_GLB5 = document.getElementById('C2_GLB5');
    var GLB5_P1 = document.getElementById('GLB5_P1');
    var GLB5_P2 = document.getElementById('GLB5_P2');
    var GLB5_P3 = document.getElementById('GLB5_P3');
    var GLB5_P4 = document.getElementById('GLB5_P4');
    var GLB5_P5 = document.getElementById('GLB5_P5');
    var GLB5_P6 = document.getElementById('GLB5_P6');
    var GLB5_P7 = document.getElementById('GLB5_P7');
    var GLB5_P1_P = document.getElementById('GLB5_P1_P');
    var GLB5_P2_P = document.getElementById('GLB5_P2_P');
    var GLB5_P3_P = document.getElementById('GLB5_P3_P');
    var GLB5_P4_P = document.getElementById('GLB5_P4_P');
    var GLB5_P5_P = document.getElementById('GLB5_P5_P');
    var GLB5_P6_P = document.getElementById('GLB5_P6_P');

    GLB5_P6.onchange = function()
    {
        $('#Col_GLB5').toggleClass('collapse');
    };
    GLB5_P6_P.onchange = function()
    {
        $('#Col_GLB5').toggleClass('collapse');
    };

    C2_GLB5.onchange = function() {
    if(GLB5_P6.checked == true)
    {
        $('#Col_GLB5').toggleClass('collapse');
    }
      GLB5_P1.disabled = true;
        $('#GLB5_P1').removeAttr('checked');
      GLB5_P2.disabled = true;
        $('#GLB5_P2').removeAttr('checked');
      GLB5_P3.disabled = true;
        $('#GLB5_P3').removeAttr('checked');
      GLB5_P4.disabled = true;
        $('#GLB5_P4').removeAttr('checked');
      GLB5_P5.disabled = true;
        $('#GLB5_P5').removeAttr('checked');
      GLB5_P6.disabled = true;
        $('#GLB5_P6').removeAttr('checked');
    if(GLB5_P6_P.checked == true)
    {
        $('#Col_GLB5').toggleClass('collapse');
    }
      GLB5_P1_P.disabled = true;
        $('#GLB5_P1_P').removeAttr('checked');
      GLB5_P2_P.disabled = true;
        $('#GLB5_P2_P').removeAttr('checked');
      GLB5_P3_P.disabled = true;
        $('#GLB5_P3_P').removeAttr('checked');
      GLB5_P4_P.disabled = true;
        $('#GLB5_P4_P').removeAttr('checked');
      GLB5_P5_P.disabled = true;
        $('#GLB5_P5_P').removeAttr('checked');
      GLB5_P6_P.disabled = true;
        $('#GLB5_P6_P').removeAttr('checked');
      GLB5_P7.disabled = true;
      GLB5_P7.value = '';
    };

    C1_GLB5.onchange = function() {

      GLB5_P1.disabled = false;
      GLB5_P2.disabled = false;
      GLB5_P3.disabled = false;
      GLB5_P4.disabled = false;
      GLB5_P5.disabled = false;
      GLB5_P6.disabled = false;
      GLB5_P1_P.disabled = false;
      GLB5_P2_P.disabled = false;
      GLB5_P3_P.disabled = false;
      GLB5_P4_P.disabled = false;
      GLB5_P5_P.disabled = false;
      GLB5_P6_P.disabled = false;
      GLB5_P7.disabled = false;
    };

    Obtn_GLB5.onclick = function()
    {
        if(C2_GLB5.checked == true)
        {
            btnGigiKananBaruBawah5.style.background = "gray";
        }
        if(C1_GLB5.checked == true)
        {
            if(GLB5_P1.checked == true || GLB5_P2.checked == true || GLB5_P3.checked == true || GLB5_P4.checked == true || GLB5_P5.checked == true || GLB5_P6.checked == true || GLB5_P1_P.checked == true || GLB5_P2_P.checked == true || GLB5_P3_P.checked == true || GLB5_P4_P.checked == true || GLB5_P5_P.checked == true || GLB5_P6_P.checked == true)
            {
              btnGigiKananBaruBawah5.style.background = "red";
            }
            else
            {
            btnGigiKananBaruBawah5.style.background = "";
            }
        }
    };

    function BatalKananBawah5() {
      if(GLB5_P6.checked == true)
      {
          $('#Col_GLB5').toggleClass('collapse');
      }
      if(GLB5_P6_P.checked == true)
      {
          $('#Col_GLB5').toggleClass('collapse');
      }
      $('#GLB5_P1').removeAttr('checked');
      $('#GLB5_P2').removeAttr('checked');
      $('#GLB5_P3').removeAttr('checked');
      $('#GLB5_P4').removeAttr('checked');
      $('#GLB5_P5').removeAttr('checked');
      $('#GLB5_P6').removeAttr('checked');
      GLB5_P1.disabled = false;
      GLB5_P2.disabled = false;
      GLB5_P3.disabled = false;
      GLB5_P4.disabled = false;
      GLB5_P5.disabled = false;
      GLB5_P6.disabled = false;
      $('#GLB5_P1_P').removeAttr('checked');
      $('#GLB5_P2_P').removeAttr('checked');
      $('#GLB5_P3_P').removeAttr('checked');
      $('#GLB5_P4_P').removeAttr('checked');
      $('#GLB5_P5_P').removeAttr('checked');
      $('#GLB5_P6_P').removeAttr('checked');
      GLB5_P1_P.disabled = false;
      GLB5_P2_P.disabled = false;
      GLB5_P3_P.disabled = false;
      GLB5_P4_P.disabled = false;
      GLB5_P5_P.disabled = false;
      GLB5_P6_P.disabled = false;
      GLB5_P7.disabled = false;
      GLB5_P7.value = '';
      C1_GLB5.checked = true;
      btnGigiKananBaruBawah5.style.background = "";
    };

//Function Gigi Kanan Baru Bawah 6
    var C1_GLB6 = document.getElementById('C1_GLB6');
    var C2_GLB6 = document.getElementById('C2_GLB6');
    var GLB6_P1 = document.getElementById('GLB6_P1');
    var GLB6_P2 = document.getElementById('GLB6_P2');
    var GLB6_P3 = document.getElementById('GLB6_P3');
    var GLB6_P4 = document.getElementById('GLB6_P4');
    var GLB6_P5 = document.getElementById('GLB6_P5');
    var GLB6_P6 = document.getElementById('GLB6_P6');
    var GLB6_P7 = document.getElementById('GLB6_P7');

    GLB6_P6.onchange = function()
    {
        $('#Col_GLB6').toggleClass('collapse');
    };

    C2_GLB6.onchange = function() {
    if(GLB6_P6.checked == true)
    {
        $('#Col_GLB6').toggleClass('collapse');
    }
      GLB6_P1.disabled = true;
        $('#GLB6_P1').removeAttr('checked');
      GLB6_P2.disabled = true;
        $('#GLB6_P2').removeAttr('checked');
      GLB6_P3.disabled = true;
        $('#GLB6_P3').removeAttr('checked');
      GLB6_P4.disabled = true;
        $('#GLB6_P4').removeAttr('checked');
      GLB6_P5.disabled = true;
        $('#GLB6_P5').removeAttr('checked');
      GLB6_P6.disabled = true;
        $('#GLB6_P6').removeAttr('checked');
      GLB6_P7.disabled = true;
      GLB6_P7.value = '';
    };

    C1_GLB6.onchange = function() {

      GLB6_P1.disabled = false;
      GLB6_P2.disabled = false;
      GLB6_P3.disabled = false;
      GLB6_P4.disabled = false;
      GLB6_P5.disabled = false;
      GLB6_P6.disabled = false;
      GLB6_P7.disabled = false;
    };

    Obtn_GLB6.onclick = function()
    {
        if(C2_GLB6.checked == true)
        {
            btnGigiKananBaruBawah6.style.background = "gray";
        }
        if(C1_GLB6.checked == true)
        {
            if(GLB6_P1.checked == true || GLB6_P2.checked == true || GLB6_P3.checked == true || GLB6_P4.checked == true || GLB6_P5.checked == true || GLB6_P6.checked == true)
            {
              btnGigiKananBaruBawah6.style.background = "red";
            }
            else
            {
            btnGigiKananBaruBawah6.style.background = "";
            }
        }
    };

    function BatalKananBawah6() {
      if(GLB6_P6.checked == true)
      {
          $('#Col_GLB6').toggleClass('collapse');
      }
      $('#GLB6_P1').removeAttr('checked');
      $('#GLB6_P2').removeAttr('checked');
      $('#GLB6_P3').removeAttr('checked');
      $('#GLB6_P4').removeAttr('checked');
      $('#GLB6_P5').removeAttr('checked');
      $('#GLB6_P6').removeAttr('checked');
      GLB6_P1.disabled = false;
      GLB6_P2.disabled = false;
      GLB6_P3.disabled = false;
      GLB6_P4.disabled = false;
      GLB6_P5.disabled = false;
      GLB6_P6.disabled = false;
      GLB6_P7.disabled = false;
      GLB6_P7.value = '';
      C1_GLB6.checked = true;
      btnGigiKananBaruBawah6.style.background = "";
    };

//Function Gigi Kanan Baru Bawah 7
    var C1_GLB7 = document.getElementById('C1_GLB7');
    var C2_GLB7 = document.getElementById('C2_GLB7');
    var GLB7_P1 = document.getElementById('GLB7_P1');
    var GLB7_P2 = document.getElementById('GLB7_P2');
    var GLB7_P3 = document.getElementById('GLB7_P3');
    var GLB7_P4 = document.getElementById('GLB7_P4');
    var GLB7_P5 = document.getElementById('GLB7_P5');
    var GLB7_P6 = document.getElementById('GLB7_P6');
    var GLB7_P7 = document.getElementById('GLB7_P7');

    GLB7_P6.onchange = function()
    {
        $('#Col_GLB7').toggleClass('collapse');
    };

    C2_GLB7.onchange = function() {
    if(GLB7_P6.checked == true)
    {
        $('#Col_GLB7').toggleClass('collapse');
    }
      GLB7_P1.disabled = true;
        $('#GLB7_P1').removeAttr('checked');
      GLB7_P2.disabled = true;
        $('#GLB7_P2').removeAttr('checked');
      GLB7_P3.disabled = true;
        $('#GLB7_P3').removeAttr('checked');
      GLB7_P4.disabled = true;
        $('#GLB7_P4').removeAttr('checked');
      GLB7_P5.disabled = true;
        $('#GLB7_P5').removeAttr('checked');
      GLB7_P6.disabled = true;
        $('#GLB7_P6').removeAttr('checked');
      GLB7_P7.disabled = true;
      GLB7_P7.value = '';
    };

    C1_GLB7.onchange = function() {

      GLB7_P1.disabled = false;
      GLB7_P2.disabled = false;
      GLB7_P3.disabled = false;
      GLB7_P4.disabled = false;
      GLB7_P5.disabled = false;
      GLB7_P6.disabled = false;
      GLB7_P7.disabled = false;
    };

    Obtn_GLB7.onclick = function()
    {
        if(C2_GLB7.checked == true)
        {
            btnGigiKananBaruBawah7.style.background = "gray";
        }
        if(C1_GLB7.checked == true)
        {
            if(GLB7_P1.checked == true || GLB7_P2.checked == true || GLB7_P3.checked == true || GLB7_P4.checked == true || GLB7_P5.checked == true || GLB7_P6.checked == true)
            {
              btnGigiKananBaruBawah7.style.background = "red";
            }
            else
            {
            btnGigiKananBaruBawah7.style.background = "";
            }
        }
    };

    function BatalKananBawah7() {
      if(GLB7_P6.checked == true)
      {
          $('#Col_GLB7').toggleClass('collapse');
      }
      $('#GLB7_P1').removeAttr('checked');
      $('#GLB7_P2').removeAttr('checked');
      $('#GLB7_P3').removeAttr('checked');
      $('#GLB7_P4').removeAttr('checked');
      $('#GLB7_P5').removeAttr('checked');
      $('#GLB7_P6').removeAttr('checked');
      GLB7_P1.disabled = false;
      GLB7_P2.disabled = false;
      GLB7_P3.disabled = false;
      GLB7_P4.disabled = false;
      GLB7_P5.disabled = false;
      GLB7_P6.disabled = false;
      GLB7_P7.disabled = false;
      GLB7_P7.value = '';
      C1_GLB7.checked = true;
      btnGigiKananBaruBawah7.style.background = "";
    };

//Function Gigi Kanan Baru Bawah 8
    var C1_GLB8 = document.getElementById('C1_GLB8');
    var C2_GLB8 = document.getElementById('C2_GLB8');
    var GLB8_P1 = document.getElementById('GLB8_P1');
    var GLB8_P2 = document.getElementById('GLB8_P2');
    var GLB8_P3 = document.getElementById('GLB8_P3');
    var GLB8_P4 = document.getElementById('GLB8_P4');
    var GLB8_P5 = document.getElementById('GLB8_P5');
    var GLB8_P6 = document.getElementById('GLB8_P6');
    var GLB8_P7 = document.getElementById('GLB8_P7');

    GLB8_P6.onchange = function()
    {
        $('#Col_GLB8').toggleClass('collapse');
    };

    C2_GLB8.onchange = function() {
    if(GLB8_P6.checked == true)
    {
        $('#Col_GLB8').toggleClass('collapse');
    }
      GLB8_P1.disabled = true;
        $('#GLB8_P1').removeAttr('checked');
      GLB8_P2.disabled = true;
        $('#GLB8_P2').removeAttr('checked');
      GLB8_P3.disabled = true;
        $('#GLB8_P3').removeAttr('checked');
      GLB8_P4.disabled = true;
        $('#GLB8_P4').removeAttr('checked');
      GLB8_P5.disabled = true;
        $('#GLB8_P5').removeAttr('checked');
      GLB8_P6.disabled = true;
        $('#GLB8_P6').removeAttr('checked');
      GLB8_P7.disabled = true;
      GLB8_P7.value = '';
    };

    C1_GLB8.onchange = function() {

      GLB8_P1.disabled = false;
      GLB8_P2.disabled = false;
      GLB8_P3.disabled = false;
      GLB8_P4.disabled = false;
      GLB8_P5.disabled = false;
      GLB8_P6.disabled = false;
      GLB8_P7.disabled = false;
    };

    Obtn_GLB8.onclick = function()
    {
        if(C2_GLB8.checked == true)
        {
            btnGigiKananBaruBawah8.style.background = "gray";
        }
        if(C1_GLB8.checked == true)
        {
            if(GLB8_P1.checked == true || GLB8_P2.checked == true || GLB8_P3.checked == true || GLB8_P4.checked == true || GLB8_P5.checked == true || GLB8_P6.checked == true)
            {
              btnGigiKananBaruBawah8.style.background = "red";
            }
            else
            {
            btnGigiKananBaruBawah8.style.background = "";
            }
        }
    };

    function BatalKananBawah8() {
      if(GLB8_P6.checked == true)
      {
          $('#Col_GLB8').toggleClass('collapse');
      }
      $('#GLB8_P1').removeAttr('checked');
      $('#GLB8_P2').removeAttr('checked');
      $('#GLB8_P3').removeAttr('checked');
      $('#GLB8_P4').removeAttr('checked');
      $('#GLB8_P5').removeAttr('checked');
      $('#GLB8_P6').removeAttr('checked');
      GLB8_P1.disabled = false;
      GLB8_P2.disabled = false;
      GLB8_P3.disabled = false;
      GLB8_P4.disabled = false;
      GLB8_P5.disabled = false;
      GLB8_P6.disabled = false;
      GLB8_P7.disabled = false;
      GLB8_P7.value = '';
      C1_GLB8.checked = true;
      btnGigiKananBaruBawah8.style.background = "";
    };

//Function Gigi Kanan Baru Atas 1
    var C1_GLA1 = document.getElementById('C1_GLA1');
    var C2_GLA1 = document.getElementById('C2_GLA1');
    var GLA1_P1 = document.getElementById('GLA1_P1');
    var GLA1_P2 = document.getElementById('GLA1_P2');
    var GLA1_P3 = document.getElementById('GLA1_P3');
    var GLA1_P4 = document.getElementById('GLA1_P4');
    var GLA1_P5 = document.getElementById('GLA1_P5');
    var GLA1_P6 = document.getElementById('GLA1_P6');
    var GLA1_P7 = document.getElementById('GLA1_P7');
    var GLA1_P1_P = document.getElementById('GLA1_P1_P');
    var GLA1_P2_P = document.getElementById('GLA1_P2_P');
    var GLA1_P3_P = document.getElementById('GLA1_P3_P');
    var GLA1_P4_P = document.getElementById('GLA1_P4_P');
    var GLA1_P5_P = document.getElementById('GLA1_P5_P');
    var GLA1_P6_P = document.getElementById('GLA1_P6_P');

    GLA1_P6.onchange = function()
    {
        $('#Col_GLA1').toggleClass('collapse');
    };
    GLA1_P6_P.onchange = function()
    {
        $('#Col_GLA1').toggleClass('collapse');
    };

    C2_GLA1.onchange = function() {
    if(GLA1_P6.checked == true)
    {
        $('#Col_GLA1').toggleClass('collapse');
    }
      GLA1_P1.disabled = true;
        $('#GLA1_P1').removeAttr('checked');
      GLA1_P2.disabled = true;
        $('#GLA1_P2').removeAttr('checked');
      GLA1_P3.disabled = true;
        $('#GLA1_P3').removeAttr('checked');
      GLA1_P4.disabled = true;
        $('#GLA1_P4').removeAttr('checked');
      GLA1_P5.disabled = true;
        $('#GLA1_P5').removeAttr('checked');
      GLA1_P6.disabled = true;
        $('#GLA1_P6').removeAttr('checked');
    if(GLA1_P6_P.checked == true)
    {
        $('#Col_GLA1').toggleClass('collapse');
    }
      GLA1_P1_P.disabled = true;
        $('#GLA1_P1_P').removeAttr('checked');
      GLA1_P2_P.disabled = true;
        $('#GLA1_P2_P').removeAttr('checked');
      GLA1_P3_P.disabled = true;
        $('#GLA1_P3_P').removeAttr('checked');
      GLA1_P4_P.disabled = true;
        $('#GLA1_P4_P').removeAttr('checked');
      GLA1_P5_P.disabled = true;
        $('#GLA1_P5_P').removeAttr('checked');
      GLA1_P6_P.disabled = true;
        $('#GLA1_P6_P').removeAttr('checked');
      GLA1_P7.disabled = true;
      GLA1_P7.value = '';
    };

    C1_GLA1.onchange = function() {

      GLA1_P1.disabled = false;
      GLA1_P2.disabled = false;
      GLA1_P3.disabled = false;
      GLA1_P4.disabled = false;
      GLA1_P5.disabled = false;
      GLA1_P6.disabled = false;
      GLA1_P1_P.disabled = false;
      GLA1_P2_P.disabled = false;
      GLA1_P3_P.disabled = false;
      GLA1_P4_P.disabled = false;
      GLA1_P5_P.disabled = false;
      GLA1_P6_P.disabled = false;
      GLA1_P7.disabled = false;
    };

    Obtn_GLA1.onclick = function()
    {
        if(C2_GLA1.checked == true)
        {
            btnGigiKananBaruAtas1.style.background = "gray";
        }
        if(C1_GLA1.checked == true)
        {
            if(GLA1_P1.checked == true || GLA1_P2.checked == true || GLA1_P3.checked == true || GLA1_P4.checked == true || GLA1_P5.checked == true || GLA1_P6.checked == true || GLA1_P1_P.checked == true || GLA1_P2_P.checked == true || GLA1_P3_P.checked == true || GLA1_P4_P.checked == true || GLA1_P5_P.checked == true || GLA1_P6_P.checked == true)
            {
              btnGigiKananBaruAtas1.style.background = "red";
            }
            else
            {
            btnGigiKananBaruAtas1.style.background = "";
            }
        }
    };

    function BatalKananAtas1() {
      if(GLA1_P6.checked == true)
      {
          $('#Col_GLA1').toggleClass('collapse');
      }
      if(GLA1_P6_P.checked == true)
      {
          $('#Col_GLA1').toggleClass('collapse');
      }
      $('#GLA1_P1').removeAttr('checked');
      $('#GLA1_P2').removeAttr('checked');
      $('#GLA1_P3').removeAttr('checked');
      $('#GLA1_P4').removeAttr('checked');
      $('#GLA1_P5').removeAttr('checked');
      $('#GLA1_P6').removeAttr('checked');
      GLA1_P1.disabled = false;
      GLA1_P2.disabled = false;
      GLA1_P3.disabled = false;
      GLA1_P4.disabled = false;
      GLA1_P5.disabled = false;
      GLA1_P6.disabled = false;
      $('#GLA1_P1_P').removeAttr('checked');
      $('#GLA1_P2_P').removeAttr('checked');
      $('#GLA1_P3_P').removeAttr('checked');
      $('#GLA1_P4_P').removeAttr('checked');
      $('#GLA1_P5_P').removeAttr('checked');
      $('#GLA1_P6_P').removeAttr('checked');
      GLA1_P1_P.disabled = false;
      GLA1_P2_P.disabled = false;
      GLA1_P3_P.disabled = false;
      GLA1_P4_P.disabled = false;
      GLA1_P5_P.disabled = false;
      GLA1_P6_P.disabled = false;
      GLA1_P7.disabled = false;
      GLA1_P7.value = '';
      C1_GLA1.checked = true;
      btnGigiKananBaruAtas1.style.background = "";
    };

//Function Gigi Kanan Baru Atas 2
    var C1_GLA2 = document.getElementById('C1_GLA2');
    var C2_GLA2 = document.getElementById('C2_GLA2');
    var GLA2_P1 = document.getElementById('GLA2_P1');
    var GLA2_P2 = document.getElementById('GLA2_P2');
    var GLA2_P3 = document.getElementById('GLA2_P3');
    var GLA2_P4 = document.getElementById('GLA2_P4');
    var GLA2_P5 = document.getElementById('GLA2_P5');
    var GLA2_P6 = document.getElementById('GLA2_P6');
    var GLA2_P7 = document.getElementById('GLA2_P7');
    var GLA2_P1_P = document.getElementById('GLA2_P1_P');
    var GLA2_P2_P = document.getElementById('GLA2_P2_P');
    var GLA2_P3_P = document.getElementById('GLA2_P3_P');
    var GLA2_P4_P = document.getElementById('GLA2_P4_P');
    var GLA2_P5_P = document.getElementById('GLA2_P5_P');
    var GLA2_P6_P = document.getElementById('GLA2_P6_P');

    GLA2_P6.onchange = function()
    {
        $('#Col_GLA2').toggleClass('collapse');
    };
    GLA2_P6_P.onchange = function()
    {
        $('#Col_GLA2').toggleClass('collapse');
    };

    C2_GLA2.onchange = function() {
    if(GLA2_P6.checked == true)
    {
        $('#Col_GLA2').toggleClass('collapse');
    }
      GLA2_P1.disabled = true;
        $('#GLA2_P1').removeAttr('checked');
      GLA2_P2.disabled = true;
        $('#GLA2_P2').removeAttr('checked');
      GLA2_P3.disabled = true;
        $('#GLA2_P3').removeAttr('checked');
      GLA2_P4.disabled = true;
        $('#GLA2_P4').removeAttr('checked');
      GLA2_P5.disabled = true;
        $('#GLA2_P5').removeAttr('checked');
      GLA2_P6.disabled = true;
        $('#GLA2_P6').removeAttr('checked');
    if(GLA2_P6_P.checked == true)
    {
        $('#Col_GLA2').toggleClass('collapse');
    }
      GLA2_P1_P.disabled = true;
        $('#GLA2_P1_P').removeAttr('checked');
      GLA2_P2_P.disabled = true;
        $('#GLA2_P2_P').removeAttr('checked');
      GLA2_P3_P.disabled = true;
        $('#GLA2_P3_P').removeAttr('checked');
      GLA2_P4_P.disabled = true;
        $('#GLA2_P4_P').removeAttr('checked');
      GLA2_P5_P.disabled = true;
        $('#GLA2_P5_P').removeAttr('checked');
      GLA2_P6_P.disabled = true;
        $('#GLA2_P6_P').removeAttr('checked');
      GLA2_P7.disabled = true;
      GLA2_P7.value = '';
    };

    C1_GLA2.onchange = function() {

      GLA2_P1.disabled = false;
      GLA2_P2.disabled = false;
      GLA2_P3.disabled = false;
      GLA2_P4.disabled = false;
      GLA2_P5.disabled = false;
      GLA2_P6.disabled = false;
      GLA2_P1_P.disabled = false;
      GLA2_P2_P.disabled = false;
      GLA2_P3_P.disabled = false;
      GLA2_P4_P.disabled = false;
      GLA2_P5_P.disabled = false;
      GLA2_P6_P.disabled = false;
      GLA2_P7.disabled = false;
    };

    Obtn_GLA2.onclick = function()
    {
        if(C2_GLA2.checked == true)
        {
            btnGigiKananBaruAtas2.style.background = "gray";
        }
        if(C1_GLA2.checked == true)
        {
            if(GLA2_P1.checked == true || GLA2_P2.checked == true || GLA2_P3.checked == true || GLA2_P4.checked == true || GLA2_P5.checked == true || GLA2_P6.checked == true || GLA2_P1_P.checked == true || GLA2_P2_P.checked == true || GLA2_P3_P.checked == true || GLA2_P4_P.checked == true || GLA2_P5_P.checked == true || GLA2_P6_P.checked == true)
            {
              btnGigiKananBaruAtas2.style.background = "red";
            }
            else
            {
            btnGigiKananBaruAtas2.style.background = "";
            }
        }
    };

    function BatalKananAtas2() {
      if(GLA2_P6.checked == true)
      {
          $('#Col_GLA2').toggleClass('collapse');
      }
      if(GLA2_P6_P.checked == true)
      {
          $('#Col_GLA2').toggleClass('collapse');
      }
      $('#GLA2_P1').removeAttr('checked');
      $('#GLA2_P2').removeAttr('checked');
      $('#GLA2_P3').removeAttr('checked');
      $('#GLA2_P4').removeAttr('checked');
      $('#GLA2_P5').removeAttr('checked');
      $('#GLA2_P6').removeAttr('checked');
      GLA2_P1.disabled = false;
      GLA2_P2.disabled = false;
      GLA2_P3.disabled = false;
      GLA2_P4.disabled = false;
      GLA2_P5.disabled = false;
      GLA2_P6.disabled = false;
      $('#GLA2_P1_P').removeAttr('checked');
      $('#GLA2_P2_P').removeAttr('checked');
      $('#GLA2_P3_P').removeAttr('checked');
      $('#GLA2_P4_P').removeAttr('checked');
      $('#GLA2_P5_P').removeAttr('checked');
      $('#GLA2_P6_P').removeAttr('checked');
      GLA2_P1_P.disabled = false;
      GLA2_P2_P.disabled = false;
      GLA2_P3_P.disabled = false;
      GLA2_P4_P.disabled = false;
      GLA2_P5_P.disabled = false;
      GLA2_P6_P.disabled = false;
      GLA2_P7.disabled = false;
      GLA2_P7.value = '';
      C1_GLA2.checked = true;
      btnGigiKananBaruAtas2.style.background = "";
    };

//Function Gigi Kanan Baru Atas 3
    var C1_GLA3 = document.getElementById('C1_GLA3');
    var C2_GLA3 = document.getElementById('C2_GLA3');
    var GLA3_P1 = document.getElementById('GLA3_P1');
    var GLA3_P2 = document.getElementById('GLA3_P2');
    var GLA3_P3 = document.getElementById('GLA3_P3');
    var GLA3_P4 = document.getElementById('GLA3_P4');
    var GLA3_P5 = document.getElementById('GLA3_P5');
    var GLA3_P6 = document.getElementById('GLA3_P6');
    var GLA3_P7 = document.getElementById('GLA3_P7');
    var GLA3_P1_P = document.getElementById('GLA3_P1_P');
    var GLA3_P2_P = document.getElementById('GLA3_P2_P');
    var GLA3_P3_P = document.getElementById('GLA3_P3_P');
    var GLA3_P4_P = document.getElementById('GLA3_P4_P');
    var GLA3_P5_P = document.getElementById('GLA3_P5_P');
    var GLA3_P6_P = document.getElementById('GLA3_P6_P');

    GLA3_P6.onchange = function()
    {
        $('#Col_GLA3').toggleClass('collapse');
    };
    GLA3_P6_P.onchange = function()
    {
        $('#Col_GLA3').toggleClass('collapse');
    };

    C2_GLA3.onchange = function() {
    if(GLA3_P6.checked == true)
    {
        $('#Col_GLA3').toggleClass('collapse');
    }
      GLA3_P1.disabled = true;
        $('#GLA3_P1').removeAttr('checked');
      GLA3_P2.disabled = true;
        $('#GLA3_P2').removeAttr('checked');
      GLA3_P3.disabled = true;
        $('#GLA3_P3').removeAttr('checked');
      GLA3_P4.disabled = true;
        $('#GLA3_P4').removeAttr('checked');
      GLA3_P5.disabled = true;
        $('#GLA3_P5').removeAttr('checked');
      GLA3_P6.disabled = true;
        $('#GLA3_P6').removeAttr('checked');
    if(GLA3_P6_P.checked == true)
    {
        $('#Col_GLA3').toggleClass('collapse');
    }
      GLA3_P1_P.disabled = true;
        $('#GLA3_P1_P').removeAttr('checked');
      GLA3_P2_P.disabled = true;
        $('#GLA3_P2_P').removeAttr('checked');
      GLA3_P3_P.disabled = true;
        $('#GLA3_P3_P').removeAttr('checked');
      GLA3_P4_P.disabled = true;
        $('#GLA3_P4_P').removeAttr('checked');
      GLA3_P5_P.disabled = true;
        $('#GLA3_P5_P').removeAttr('checked');
      GLA3_P6_P.disabled = true;
        $('#GLA3_P6_P').removeAttr('checked');
      GLA3_P7.disabled = true;
      GLA3_P7.value = '';
    }

    C1_GLA3.onchange = function() {

      GLA3_P1.disabled = false;
      GLA3_P2.disabled = false;
      GLA3_P3.disabled = false;
      GLA3_P4.disabled = false;
      GLA3_P5.disabled = false;
      GLA3_P6.disabled = false;
      GLA3_P1_P.disabled = false;
      GLA3_P2_P.disabled = false;
      GLA3_P3_P.disabled = false;
      GLA3_P4_P.disabled = false;
      GLA3_P5_P.disabled = false;
      GLA3_P6_P.disabled = false;
      GLA3_P7.disabled = false;
    };

    Obtn_GLA3.onclick = function()
    {
        if(C2_GLA3.checked == true)
        {
            btnGigiKananBaruAtas3.style.background = "gray";
        }
        if(C1_GLA3.checked == true)
        {
            if(GLA3_P1.checked == true || GLA3_P2.checked == true || GLA3_P3.checked == true || GLA3_P4.checked == true || GLA3_P5.checked == true || GLA3_P6.checked == true || GLA3_P1_P.checked == true || GLA3_P2_P.checked == true || GLA3_P3_P.checked == true || GLA3_P4_P.checked == true || GLA3_P5_P.checked == true || GLA3_P6_P.checked == true)
            {
              btnGigiKananBaruAtas3.style.background = "red";
            }
            else
            {
            btnGigiKananBaruAtas3.style.background = "";
            }
        }
    };

    function BatalKananAtas3() {
      if(GLA3_P6.checked == true)
      {
          $('#Col_GLA3').toggleClass('collapse');
      }
      if(GLA3_P6_P.checked == true)
      {
          $('#Col_GLA3').toggleClass('collapse');
      }
      $('#GLA3_P1').removeAttr('checked');
      $('#GLA3_P2').removeAttr('checked');
      $('#GLA3_P3').removeAttr('checked');
      $('#GLA3_P4').removeAttr('checked');
      $('#GLA3_P5').removeAttr('checked');
      $('#GLA3_P6').removeAttr('checked');
      GLA3_P1.disabled = false;
      GLA3_P2.disabled = false;
      GLA3_P3.disabled = false;
      GLA3_P4.disabled = false;
      GLA3_P5.disabled = false;
      GLA3_P6.disabled = false;
      $('#GLA3_P1_P').removeAttr('checked');
      $('#GLA3_P2_P').removeAttr('checked');
      $('#GLA3_P3_P').removeAttr('checked');
      $('#GLA3_P4_P').removeAttr('checked');
      $('#GLA3_P5_P').removeAttr('checked');
      $('#GLA3_P6_P').removeAttr('checked');
      GLA3_P1_P.disabled = false;
      GLA3_P2_P.disabled = false;
      GLA3_P3_P.disabled = false;
      GLA3_P4_P.disabled = false;
      GLA3_P5_P.disabled = false;
      GLA3_P6_P.disabled = false;
      GLA3_P7.disabled = false;
      GLA3_P7.value = '';
      C1_GLA3.checked = true;
      btnGigiKananBaruAtas3.style.background = "";
    };

//Function Gigi Kanan Baru Atas 4
    var C1_GLA4 = document.getElementById('C1_GLA4');
    var C2_GLA4 = document.getElementById('C2_GLA4');
    var GLA4_P1 = document.getElementById('GLA4_P1');
    var GLA4_P2 = document.getElementById('GLA4_P2');
    var GLA4_P3 = document.getElementById('GLA4_P3');
    var GLA4_P4 = document.getElementById('GLA4_P4');
    var GLA4_P5 = document.getElementById('GLA4_P5');
    var GLA4_P6 = document.getElementById('GLA4_P6');
    var GLA4_P7 = document.getElementById('GLA4_P7');
    var GLA4_P1_P = document.getElementById('GLA4_P1_P');
    var GLA4_P2_P = document.getElementById('GLA4_P2_P');
    var GLA4_P3_P = document.getElementById('GLA4_P3_P');
    var GLA4_P4_P = document.getElementById('GLA4_P4_P');
    var GLA4_P5_P = document.getElementById('GLA4_P5_P');
    var GLA4_P6_P = document.getElementById('GLA4_P6_P');

    GLA4_P6.onchange = function()
    {
        $('#Col_GLA4').toggleClass('collapse');
    };
    GLA4_P6_P.onchange = function()
    {
        $('#Col_GLA4').toggleClass('collapse');
    };

    C2_GLA4.onchange = function() {
    if(GLA4_P6.checked == true)
    {
        $('#Col_GLA4').toggleClass('collapse');
    }
      GLA4_P1.disabled = true;
        $('#GLA4_P1').removeAttr('checked');
      GLA4_P2.disabled = true;
        $('#GLA4_P2').removeAttr('checked');
      GLA4_P3.disabled = true;
        $('#GLA4_P3').removeAttr('checked');
      GLA4_P4.disabled = true;
        $('#GLA4_P4').removeAttr('checked');
      GLA4_P5.disabled = true;
        $('#GLA4_P5').removeAttr('checked');
      GLA4_P6.disabled = true;
        $('#GLA4_P6').removeAttr('checked');
    if(GLA4_P6_P.checked == true)
    {
        $('#Col_GLA4').toggleClass('collapse');
    }
      GLA4_P1_P.disabled = true;
        $('#GLA4_P1_P').removeAttr('checked');
      GLA4_P2_P.disabled = true;
        $('#GLA4_P2_P').removeAttr('checked');
      GLA4_P3_P.disabled = true;
        $('#GLA4_P3_P').removeAttr('checked');
      GLA4_P4_P.disabled = true;
        $('#GLA4_P4_P').removeAttr('checked');
      GLA4_P5_P.disabled = true;
        $('#GLA4_P5_P').removeAttr('checked');
      GLA4_P6_P.disabled = true;
        $('#GLA4_P6_P').removeAttr('checked');
      GLA4_P7.disabled = true;
      GLA4_P7.value = '';
    };

    C1_GLA4.onchange = function() {

      GLA4_P1.disabled = false;
      GLA4_P2.disabled = false;
      GLA4_P3.disabled = false;
      GLA4_P4.disabled = false;
      GLA4_P5.disabled = false;
      GLA4_P6.disabled = false;
      GLA4_P1_P.disabled = false;
      GLA4_P2_P.disabled = false;
      GLA4_P3_P.disabled = false;
      GLA4_P4_P.disabled = false;
      GLA4_P5_P.disabled = false;
      GLA4_P6_P.disabled = false;
      GLA4_P7.disabled = false;
    };

    Obtn_GLA4.onclick = function()
    {
        if(C2_GLA4.checked == true)
        {
            btnGigiKananBaruAtas4.style.background = "gray";
        }
        if(C1_GLA4.checked == true)
        {
            if(GLA4_P1.checked == true || GLA4_P2.checked == true || GLA4_P3.checked == true || GLA4_P4.checked == true || GLA4_P5.checked == true || GLA4_P6.checked == true || GLA4_P1_P.checked == true || GLA4_P2_P.checked == true || GLA4_P3_P.checked == true || GLA4_P4_P.checked == true || GLA4_P5_P.checked == true || GLA4_P6_P.checked == true)
            {
              btnGigiKananBaruAtas4.style.background = "red";
            }
            else
            {
            btnGigiKananBaruAtas4.style.background = "";
            }
        }
    };

    function BatalKananAtas4() {
      if(GLA4_P6.checked == true)
      {
          $('#Col_GLA4').toggleClass('collapse');
      }
      if(GLA4_P6_P.checked == true)
      {
          $('#Col_GLA4').toggleClass('collapse');
      }
      $('#GLA4_P1').removeAttr('checked');
      $('#GLA4_P2').removeAttr('checked');
      $('#GLA4_P3').removeAttr('checked');
      $('#GLA4_P4').removeAttr('checked');
      $('#GLA4_P5').removeAttr('checked');
      $('#GLA4_P6').removeAttr('checked');
      GLA4_P1.disabled = false;
      GLA4_P2.disabled = false;
      GLA4_P3.disabled = false;
      GLA4_P4.disabled = false;
      GLA4_P5.disabled = false;
      GLA4_P6.disabled = false;
      $('#GLA4_P1_P').removeAttr('checked');
      $('#GLA4_P2_P').removeAttr('checked');
      $('#GLA4_P3_P').removeAttr('checked');
      $('#GLA4_P4_P').removeAttr('checked');
      $('#GLA4_P5_P').removeAttr('checked');
      $('#GLA4_P6_P').removeAttr('checked');
      GLA4_P1_P.disabled = false;
      GLA4_P2_P.disabled = false;
      GLA4_P3_P.disabled = false;
      GLA4_P4_P.disabled = false;
      GLA4_P5_P.disabled = false;
      GLA4_P6_P.disabled = false;
      GLA4_P7.disabled = false;
      GLA4_P7.value = '';
      C1_GLA4.checked = true;
      btnGigiKananBaruAtas4.style.background = "";
    };

//Function Gigi Kanan Baru Atas 5
    var C1_GLA5 = document.getElementById('C1_GLA5');
    var C2_GLA5 = document.getElementById('C2_GLA5');
    var GLA5_P1 = document.getElementById('GLA5_P1');
    var GLA5_P2 = document.getElementById('GLA5_P2');
    var GLA5_P3 = document.getElementById('GLA5_P3');
    var GLA5_P4 = document.getElementById('GLA5_P4');
    var GLA5_P5 = document.getElementById('GLA5_P5');
    var GLA5_P6 = document.getElementById('GLA5_P6');
    var GLA5_P7 = document.getElementById('GLA5_P7');
    var GLA5_P1_P = document.getElementById('GLA5_P1_P');
    var GLA5_P2_P = document.getElementById('GLA5_P2_P');
    var GLA5_P3_P = document.getElementById('GLA5_P3_P');
    var GLA5_P4_P = document.getElementById('GLA5_P4_P');
    var GLA5_P5_P = document.getElementById('GLA5_P5_P');
    var GLA5_P6_P = document.getElementById('GLA5_P6_P');

    GLA5_P6.onchange = function()
    {
        $('#Col_GLA5').toggleClass('collapse');
    };
    GLA5_P6_P.onchange = function()
    {
        $('#Col_GLA5').toggleClass('collapse');
    };

    C2_GLA5.onchange = function() {
    if(GLA5_P6.checked == true)
    {
        $('#Col_GLA5').toggleClass('collapse');
    }
      GLA5_P1.disabled = true;
        $('#GLA5_P1').removeAttr('checked');
      GLA5_P2.disabled = true;
        $('#GLA5_P2').removeAttr('checked');
      GLA5_P3.disabled = true;
        $('#GLA5_P3').removeAttr('checked');
      GLA5_P4.disabled = true;
        $('#GLA5_P4').removeAttr('checked');
      GLA5_P5.disabled = true;
        $('#GLA5_P5').removeAttr('checked');
      GLA5_P6.disabled = true;
        $('#GLA5_P6').removeAttr('checked');
    if(GLA5_P6_P.checked == true)
    {
        $('#Col_GLA5').toggleClass('collapse');
    }
      GLA5_P1_P.disabled = true;
        $('#GLA5_P1_P').removeAttr('checked');
      GLA5_P2_P.disabled = true;
        $('#GLA5_P2_P').removeAttr('checked');
      GLA5_P3_P.disabled = true;
        $('#GLA5_P3_P').removeAttr('checked');
      GLA5_P4_P.disabled = true;
        $('#GLA5_P4_P').removeAttr('checked');
      GLA5_P5_P.disabled = true;
        $('#GLA5_P5_P').removeAttr('checked');
      GLA5_P6_P.disabled = true;
        $('#GLA5_P6_P').removeAttr('checked');
      GLA5_P7.disabled = true;
      GLA5_P7.value = '';
    };

    C1_GLA5.onchange = function() {

      GLA5_P1.disabled = false;
      GLA5_P2.disabled = false;
      GLA5_P3.disabled = false;
      GLA5_P4.disabled = false;
      GLA5_P5.disabled = false;
      GLA5_P6.disabled = false;
      GLA5_P1_P.disabled = false;
      GLA5_P2_P.disabled = false;
      GLA5_P3_P.disabled = false;
      GLA5_P4_P.disabled = false;
      GLA5_P5_P.disabled = false;
      GLA5_P6_P.disabled = false;
      GLA5_P7.disabled = false;
    };

    Obtn_GLA5.onclick = function()
    {
        if(C2_GLA5.checked == true)
        {
            btnGigiKananBaruAtas5.style.background = "gray";
        }
        if(C1_GLA5.checked == true)
        {
            if(GLA5_P1.checked == true || GLA5_P2.checked == true || GLA5_P3.checked == true || GLA5_P4.checked == true || GLA5_P5.checked == true || GLA5_P6.checked == true || GLA5_P1_P.checked == true || GLA5_P2_P.checked == true || GLA5_P3_P.checked == true || GLA5_P4_P.checked == true || GLA5_P5_P.checked == true || GLA5_P6_P.checked == true)
            {
              btnGigiKananBaruAtas5.style.background = "red";
            }
            else
            {
            btnGigiKananBaruAtas5.style.background = "";
            }
        }
    };

    function BatalKananAtas5() {
      if(GLA5_P6.checked == true)
      {
          $('#Col_GLA5').toggleClass('collapse');
      }
      if(GLA5_P6_P.checked == true)
      {
          $('#Col_GLA5').toggleClass('collapse');
      }
      $('#GLA5_P1').removeAttr('checked');
      $('#GLA5_P2').removeAttr('checked');
      $('#GLA5_P3').removeAttr('checked');
      $('#GLA5_P4').removeAttr('checked');
      $('#GLA5_P5').removeAttr('checked');
      $('#GLA5_P6').removeAttr('checked');
      GLA5_P1.disabled = false;
      GLA5_P2.disabled = false;
      GLA5_P3.disabled = false;
      GLA5_P4.disabled = false;
      GLA5_P5.disabled = false;
      GLA5_P6.disabled = false;
      $('#GLA5_P1_P').removeAttr('checked');
      $('#GLA5_P2_P').removeAttr('checked');
      $('#GLA5_P3_P').removeAttr('checked');
      $('#GLA5_P4_P').removeAttr('checked');
      $('#GLA5_P5_P').removeAttr('checked');
      $('#GLA5_P6_P').removeAttr('checked');
      GLA5_P1_P.disabled = false;
      GLA5_P2_P.disabled = false;
      GLA5_P3_P.disabled = false;
      GLA5_P4_P.disabled = false;
      GLA5_P5_P.disabled = false;
      GLA5_P6_P.disabled = false;
      GLA5_P7.disabled = false;
      GLA5_P7.value = '';
      C1_GLA5.checked = true;
      btnGigiKananBaruAtas5.style.background = "";
    };

//Function Gigi Kanan Baru Atas 6
    var C1_GLA6 = document.getElementById('C1_GLA6');
    var C2_GLA6 = document.getElementById('C2_GLA6');
    var GLA6_P1 = document.getElementById('GLA6_P1');
    var GLA6_P2 = document.getElementById('GLA6_P2');
    var GLA6_P3 = document.getElementById('GLA6_P3');
    var GLA6_P4 = document.getElementById('GLA6_P4');
    var GLA6_P5 = document.getElementById('GLA6_P5');
    var GLA6_P6 = document.getElementById('GLA6_P6');
    var GLA6_P7 = document.getElementById('GLA6_P7');

    GLA6_P6.onchange = function()
    {
        $('#Col_GLA6').toggleClass('collapse');
    };

    C2_GLA6.onchange = function() {
    if(GLA6_P6.checked == true)
    {
        $('#Col_GLA6').toggleClass('collapse');
    }
      GLA6_P1.disabled = true;
        $('#GLA6_P1').removeAttr('checked');
      GLA6_P2.disabled = true;
        $('#GLA6_P2').removeAttr('checked');
      GLA6_P3.disabled = true;
        $('#GLA6_P3').removeAttr('checked');
      GLA6_P4.disabled = true;
        $('#GLA6_P4').removeAttr('checked');
      GLA6_P5.disabled = true;
        $('#GLA6_P5').removeAttr('checked');
      GLA6_P6.disabled = true;
        $('#GLA6_P6').removeAttr('checked');
      GLA6_P7.disabled = true;
      GLA6_P7.value = '';
    };

    C1_GLA6.onchange = function() {

      GLA6_P1.disabled = false;
      GLA6_P2.disabled = false;
      GLA6_P3.disabled = false;
      GLA6_P4.disabled = false;
      GLA6_P5.disabled = false;
      GLA6_P6.disabled = false;
      GLA6_P7.disabled = false;
    };

    Obtn_GLA6.onclick = function()
    {
        if(C2_GLA6.checked == true)
        {
            btnGigiKananBaruAtas6.style.background = "gray";
        }
        if(C1_GLA6.checked == true)
        {
            if(GLA6_P1.checked == true || GLA6_P2.checked == true || GLA6_P3.checked == true || GLA6_P4.checked == true || GLA6_P5.checked == true || GLA6_P6.checked == true)
            {
              btnGigiKananBaruAtas6.style.background = "red";
            }
            else
            {
            btnGigiKananBaruAtas6.style.background = "";
            }
        }
    };

    function BatalKananAtas6() {
      if(GLA6_P6.checked == true)
      {
          $('#Col_GLA6').toggleClass('collapse');
      }
      $('#GLA6_P1').removeAttr('checked');
      $('#GLA6_P2').removeAttr('checked');
      $('#GLA6_P3').removeAttr('checked');
      $('#GLA6_P4').removeAttr('checked');
      $('#GLA6_P5').removeAttr('checked');
      $('#GLA6_P6').removeAttr('checked');
      GLA6_P1.disabled = false;
      GLA6_P2.disabled = false;
      GLA6_P3.disabled = false;
      GLA6_P4.disabled = false;
      GLA6_P5.disabled = false;
      GLA6_P6.disabled = false;
      GLA6_P7.disabled = false;
      GLA6_P7.value = '';
      C1_GLA6.checked = true;
      btnGigiKananBaruAtas6.style.background = "";
    };

//Function Gigi Kanan Baru Atas 7
    var C1_GLA7 = document.getElementById('C1_GLA7');
    var C2_GLA7 = document.getElementById('C2_GLA7');
    var GLA7_P1 = document.getElementById('GLA7_P1');
    var GLA7_P2 = document.getElementById('GLA7_P2');
    var GLA7_P3 = document.getElementById('GLA7_P3');
    var GLA7_P4 = document.getElementById('GLA7_P4');
    var GLA7_P5 = document.getElementById('GLA7_P5');
    var GLA7_P6 = document.getElementById('GLA7_P6');
    var GLA7_P7 = document.getElementById('GLA7_P7');

    GLA7_P6.onchange = function()
    {
        $('#Col_GLA7').toggleClass('collapse');
    };

    C2_GLA7.onchange = function() {
    if(GLA7_P6.checked == true)
    {
        $('#Col_GLA7').toggleClass('collapse');
    }
      GLA7_P1.disabled = true;
        $('#GLA7_P1').removeAttr('checked');
      GLA7_P2.disabled = true;
        $('#GLA7_P2').removeAttr('checked');
      GLA7_P3.disabled = true;
        $('#GLA7_P3').removeAttr('checked');
      GLA7_P4.disabled = true;
        $('#GLA7_P4').removeAttr('checked');
      GLA7_P5.disabled = true;
        $('#GLA7_P5').removeAttr('checked');
      GLA7_P6.disabled = true;
        $('#GLA7_P6').removeAttr('checked');
      GLA7_P7.disabled = true;
      GLA7_P7.value = '';
    };

    C1_GLA7.onchange = function() {

      GLA7_P1.disabled = false;
      GLA7_P2.disabled = false;
      GLA7_P3.disabled = false;
      GLA7_P4.disabled = false;
      GLA7_P5.disabled = false;
      GLA7_P6.disabled = false;
      GLA7_P7.disabled = false;
    };

    Obtn_GLA7.onclick = function()
    {
        if(C2_GLA7.checked == true)
        {
            btnGigiKananBaruAtas7.style.background = "gray";
        }
        if(C1_GLA7.checked == true)
        {
            if(GLA7_P1.checked == true || GLA7_P2.checked == true || GLA7_P3.checked == true || GLA7_P4.checked == true || GLA7_P5.checked == true || GLA7_P6.checked == true)
            {
              btnGigiKananBaruAtas7.style.background = "red";
            }
            else
            {
            btnGigiKananBaruAtas7.style.background = "";
            }
        }
    };

    function BatalKananAtas7() {
      if(GLA7_P6.checked == true)
      {
          $('#Col_GLA7').toggleClass('collapse');
      }
      $('#GLA7_P1').removeAttr('checked');
      $('#GLA7_P2').removeAttr('checked');
      $('#GLA7_P3').removeAttr('checked');
      $('#GLA7_P4').removeAttr('checked');
      $('#GLA7_P5').removeAttr('checked');
      $('#GLA7_P6').removeAttr('checked');
      GLA7_P1.disabled = false;
      GLA7_P2.disabled = false;
      GLA7_P3.disabled = false;
      GLA7_P4.disabled = false;
      GLA7_P5.disabled = false;
      GLA7_P6.disabled = false;
      GLA7_P7.disabled = false;
      GLA7_P7.value = '';
      C1_GLA7.checked = true;
      btnGigiKananBaruAtas7.style.background = "";
    };

//Function Gigi Kanan Baru Atas 8
    var C1_GLA8 = document.getElementById('C1_GLA8');
    var C2_GLA8 = document.getElementById('C2_GLA8');
    var GLA8_P1 = document.getElementById('GLA8_P1');
    var GLA8_P2 = document.getElementById('GLA8_P2');
    var GLA8_P3 = document.getElementById('GLA8_P3');
    var GLA8_P4 = document.getElementById('GLA8_P4');
    var GLA8_P5 = document.getElementById('GLA8_P5');
    var GLA8_P6 = document.getElementById('GLA8_P6');
    var GLA8_P7 = document.getElementById('GLA8_P7');

    GLA8_P6.onchange = function()
    {
        $('#Col_GLA8').toggleClass('collapse');
    };

    C2_GLA8.onchange = function() {
    if(GLA8_P6.checked == true)
    {
        $('#Col_GLA8').toggleClass('collapse');
    }
      GLA8_P1.disabled = true;
        $('#GLA8_P1').removeAttr('checked');
      GLA8_P2.disabled = true;
        $('#GLA8_P2').removeAttr('checked');
      GLA8_P3.disabled = true;
        $('#GLA8_P3').removeAttr('checked');
      GLA8_P4.disabled = true;
        $('#GLA8_P4').removeAttr('checked');
      GLA8_P5.disabled = true;
        $('#GLA8_P5').removeAttr('checked');
      GLA8_P6.disabled = true;
        $('#GLA8_P6').removeAttr('checked');
      GLA8_P7.disabled = true;
      GLA8_P7.value = '';
    };

    C1_GLA8.onchange = function() {

      GLA8_P1.disabled = false;
      GLA8_P2.disabled = false;
      GLA8_P3.disabled = false;
      GLA8_P4.disabled = false;
      GLA8_P5.disabled = false;
      GLA8_P6.disabled = false;
      GLA8_P7.disabled = false;
    };

    Obtn_GLA8.onclick = function()
    {
        if(C2_GLA8.checked == true)
        {
            btnGigiKananBaruAtas8.style.background = "gray";
        }
        if(C1_GLA8.checked == true)
        {
            if(GLA8_P1.checked == true || GLA8_P2.checked == true || GLA8_P3.checked == true || GLA8_P4.checked == true || GLA8_P5.checked == true || GLA8_P6.checked == true)
            {
              btnGigiKananBaruAtas8.style.background = "red";
            }
            else
            {
            btnGigiKananBaruAtas8.style.background = "";
            }
        }
    };

    function BatalKananAtas8() {
      if(GLA8_P6.checked == true)
      {
          $('#Col_GLA8').toggleClass('collapse');
      }
      $('#GLA8_P1').removeAttr('checked');
      $('#GLA8_P2').removeAttr('checked');
      $('#GLA8_P3').removeAttr('checked');
      $('#GLA8_P4').removeAttr('checked');
      $('#GLA8_P5').removeAttr('checked');
      $('#GLA8_P6').removeAttr('checked');
      GLA8_P1.disabled = false;
      GLA8_P2.disabled = false;
      GLA8_P3.disabled = false;
      GLA8_P4.disabled = false;
      GLA8_P5.disabled = false;
      GLA8_P6.disabled = false;
      GLA8_P7.disabled = false;
      GLA8_P7.value = '';
      C1_GLA8.checked = true;
      btnGigiKananBaruAtas8.style.background = "";
    };

function StrukturGigi()
{
    if (txtStruktur.innerHTML == "Susu")
    {
        $('#susu_header_kiri_baru_atas_1').toggleClass('collapse');
        $('#permanen_header_kiri_baru_atas_1').toggleClass('collapse');
        $('#susu_body_kiri_baru_atas_1').toggleClass('collapse');
        $('#permanen_body_kiri_baru_atas_1').toggleClass('collapse');
        $('#susu_header_kiri_baru_atas_2').toggleClass('collapse');
        $('#permanen_header_kiri_baru_atas_2').toggleClass('collapse');
        $('#susu_body_kiri_baru_atas_2').toggleClass('collapse');
        $('#permanen_body_kiri_baru_atas_2').toggleClass('collapse');
        $('#susu_header_kiri_baru_atas_3').toggleClass('collapse');
        $('#permanen_header_kiri_baru_atas_3').toggleClass('collapse');
        $('#susu_body_kiri_baru_atas_3').toggleClass('collapse');
        $('#permanen_body_kiri_baru_atas_3').toggleClass('collapse');
        $('#susu_header_kiri_baru_atas_4').toggleClass('collapse');
        $('#permanen_header_kiri_baru_atas_4').toggleClass('collapse');
        $('#susu_body_kiri_baru_atas_4').toggleClass('collapse');
        $('#permanen_body_kiri_baru_atas_4').toggleClass('collapse');
        $('#susu_header_kiri_baru_atas_5').toggleClass('collapse');
        $('#permanen_header_kiri_baru_atas_5').toggleClass('collapse');
        $('#susu_body_kiri_baru_atas_5').toggleClass('collapse');
        $('#permanen_body_kiri_baru_atas_5').toggleClass('collapse');
        $('#susu_header_kiri_baru_bawah_1').toggleClass('collapse');
        $('#permanen_header_kiri_baru_bawah_1').toggleClass('collapse');
        $('#susu_body_kiri_baru_bawah_1').toggleClass('collapse');
        $('#permanen_body_kiri_baru_bawah_1').toggleClass('collapse');
        $('#susu_header_kiri_baru_bawah_2').toggleClass('collapse');
        $('#permanen_header_kiri_baru_bawah_2').toggleClass('collapse');
        $('#susu_body_kiri_baru_bawah_2').toggleClass('collapse');
        $('#permanen_body_kiri_baru_bawah_2').toggleClass('collapse');
        $('#susu_header_kiri_baru_bawah_3').toggleClass('collapse');
        $('#permanen_header_kiri_baru_bawah_3').toggleClass('collapse');
        $('#susu_body_kiri_baru_bawah_3').toggleClass('collapse');
        $('#permanen_body_kiri_baru_bawah_3').toggleClass('collapse');
        $('#susu_header_kiri_baru_bawah_4').toggleClass('collapse');
        $('#permanen_header_kiri_baru_bawah_4').toggleClass('collapse');
        $('#susu_body_kiri_baru_bawah_4').toggleClass('collapse');
        $('#permanen_body_kiri_baru_bawah_4').toggleClass('collapse');
        $('#susu_header_kiri_baru_bawah_5').toggleClass('collapse');
        $('#permanen_header_kiri_baru_bawah_5').toggleClass('collapse');
        $('#susu_body_kiri_baru_bawah_5').toggleClass('collapse');
        $('#permanen_body_kiri_baru_bawah_5').toggleClass('collapse');
        $('#susu_header_kanan_baru_bawah_1').toggleClass('collapse');
        $('#permanen_header_kanan_baru_bawah_1').toggleClass('collapse');
        $('#susu_body_kanan_baru_bawah_1').toggleClass('collapse');
        $('#permanen_body_kanan_baru_bawah_1').toggleClass('collapse');
        $('#susu_header_kanan_baru_bawah_2').toggleClass('collapse');
        $('#permanen_header_kanan_baru_bawah_2').toggleClass('collapse');
        $('#susu_body_kanan_baru_bawah_2').toggleClass('collapse');
        $('#permanen_body_kanan_baru_bawah_2').toggleClass('collapse');
        $('#susu_header_kanan_baru_bawah_3').toggleClass('collapse');
        $('#permanen_header_kanan_baru_bawah_3').toggleClass('collapse');
        $('#susu_body_kanan_baru_bawah_3').toggleClass('collapse');
        $('#permanen_body_kanan_baru_bawah_3').toggleClass('collapse');
        $('#susu_header_kanan_baru_bawah_4').toggleClass('collapse');
        $('#permanen_header_kanan_baru_bawah_4').toggleClass('collapse');
        $('#susu_body_kanan_baru_bawah_4').toggleClass('collapse');
        $('#permanen_body_kanan_baru_bawah_4').toggleClass('collapse');
        $('#susu_header_kanan_baru_bawah_5').toggleClass('collapse');
        $('#permanen_header_kanan_baru_bawah_5').toggleClass('collapse');
        $('#susu_body_kanan_baru_bawah_5').toggleClass('collapse');
        $('#permanen_body_kanan_baru_bawah_5').toggleClass('collapse');
        $('#susu_header_kanan_baru_atas_1').toggleClass('collapse');
        $('#permanen_header_kanan_baru_atas_1').toggleClass('collapse');
        $('#susu_body_kanan_baru_atas_1').toggleClass('collapse');
        $('#permanen_body_kanan_baru_atas_1').toggleClass('collapse');
        $('#susu_header_kanan_baru_atas_2').toggleClass('collapse');
        $('#permanen_header_kanan_baru_atas_2').toggleClass('collapse');
        $('#susu_body_kanan_baru_atas_2').toggleClass('collapse');
        $('#permanen_body_kanan_baru_atas_2').toggleClass('collapse');
        $('#susu_header_kanan_baru_atas_3').toggleClass('collapse');
        $('#permanen_header_kanan_baru_atas_3').toggleClass('collapse');
        $('#susu_body_kanan_baru_atas_3').toggleClass('collapse');
        $('#permanen_body_kanan_baru_atas_3').toggleClass('collapse');
        $('#susu_header_kanan_baru_atas_4').toggleClass('collapse');
        $('#permanen_header_kanan_baru_atas_4').toggleClass('collapse');
        $('#susu_body_kanan_baru_atas_4').toggleClass('collapse');
        $('#permanen_body_kanan_baru_atas_4').toggleClass('collapse');
        $('#susu_header_kanan_baru_atas_5').toggleClass('collapse');
        $('#permanen_header_kanan_baru_atas_5').toggleClass('collapse');
        $('#susu_body_kanan_baru_atas_5').toggleClass('collapse');
        $('#permanen_body_kanan_baru_atas_5').toggleClass('collapse');
        txtStruktur.innerHTML = "Permanen";
        btnGigiKiriBaruAtas1.innerHTML = "1";
        btnGigiKiriBaruBawah1.innerHTML = "1";
        btnGigiKananBaruAtas1.innerHTML = "1";
        btnGigiKananBaruBawah1.innerHTML = "1";
        btnGigiKiriBaruAtas2.innerHTML = "2";
        btnGigiKiriBaruBawah2.innerHTML = "2";
        btnGigiKananBaruAtas2.innerHTML = "2";
        btnGigiKananBaruBawah2.innerHTML = "2";
        btnGigiKiriBaruAtas3.innerHTML = "3";
        btnGigiKiriBaruBawah3.innerHTML = "3";
        btnGigiKananBaruAtas3.innerHTML = "3";
        btnGigiKananBaruBawah3.innerHTML = "3";
        btnGigiKiriBaruAtas4.innerHTML = "4";
        btnGigiKiriBaruBawah4.innerHTML = "4";
        btnGigiKananBaruAtas4.innerHTML = "4";
        btnGigiKananBaruBawah4.innerHTML = "4";
        btnGigiKiriBaruAtas5.innerHTML = "5";
        btnGigiKiriBaruBawah5.innerHTML = "5";
        btnGigiKananBaruAtas5.innerHTML = "5";
        btnGigiKananBaruBawah5.innerHTML = "5";
        btnGigiKiriBaruAtas6.style.visibility = 'visible';
        btnGigiKiriBaruBawah6.style.visibility = 'visible';
        btnGigiKananBaruAtas6.style.visibility = 'visible';
        btnGigiKananBaruBawah6.style.visibility = 'visible';
        btnGigiKiriBaruAtas7.style.visibility = 'visible';
        btnGigiKiriBaruBawah7.style.visibility = 'visible';
        btnGigiKananBaruAtas7.style.visibility = 'visible';
        btnGigiKananBaruBawah7.style.visibility = 'visible';
        btnGigiKiriBaruAtas8.style.visibility = 'visible';
        btnGigiKiriBaruBawah8.style.visibility = 'visible';
        btnGigiKananBaruAtas8.style.visibility = 'visible';
        btnGigiKananBaruBawah8.style.visibility = 'visible';
        BatalKiriAtas1();
        BatalKiriAtas2();
        BatalKiriAtas3();
        BatalKiriAtas4();
        BatalKiriAtas5();
        BatalKiriAtas6();
        BatalKiriAtas7();
        BatalKiriAtas8();
        BatalKiriBawah1();
        BatalKiriBawah2();
        BatalKiriBawah3();
        BatalKiriBawah4();
        BatalKiriBawah5();
        BatalKiriBawah6();
        BatalKiriBawah7();
        BatalKiriBawah8();
        BatalKananBawah1();
        BatalKananBawah2();
        BatalKananBawah3();
        BatalKananBawah4();
        BatalKananBawah5();
        BatalKananBawah6();
        BatalKananBawah7();
        BatalKananBawah8();
        BatalKananAtas1();
        BatalKananAtas2();
        BatalKananAtas3();
        BatalKananAtas4();
        BatalKananAtas5();
        BatalKananAtas6();
        BatalKananAtas7();
        BatalKananAtas8();
    }
    else
    {
        $('#susu_header_kiri_baru_atas_1').toggleClass('collapse');
        $('#permanen_header_kiri_baru_atas_1').toggleClass('collapse');
        $('#susu_body_kiri_baru_atas_1').toggleClass('collapse');
        $('#permanen_body_kiri_baru_atas_1').toggleClass('collapse');
        $('#susu_header_kiri_baru_atas_2').toggleClass('collapse');
        $('#permanen_header_kiri_baru_atas_2').toggleClass('collapse');
        $('#susu_body_kiri_baru_atas_2').toggleClass('collapse');
        $('#permanen_body_kiri_baru_atas_2').toggleClass('collapse');
        $('#susu_header_kiri_baru_atas_3').toggleClass('collapse');
        $('#permanen_header_kiri_baru_atas_3').toggleClass('collapse');
        $('#susu_body_kiri_baru_atas_3').toggleClass('collapse');
        $('#permanen_body_kiri_baru_atas_3').toggleClass('collapse');
        $('#susu_header_kiri_baru_atas_4').toggleClass('collapse');
        $('#permanen_header_kiri_baru_atas_4').toggleClass('collapse');
        $('#susu_body_kiri_baru_atas_4').toggleClass('collapse');
        $('#permanen_body_kiri_baru_atas_4').toggleClass('collapse');
        $('#susu_header_kiri_baru_atas_5').toggleClass('collapse');
        $('#permanen_header_kiri_baru_atas_5').toggleClass('collapse');
        $('#susu_body_kiri_baru_atas_5').toggleClass('collapse');
        $('#permanen_body_kiri_baru_atas_5').toggleClass('collapse');
        $('#susu_header_kiri_baru_bawah_1').toggleClass('collapse');
        $('#permanen_header_kiri_baru_bawah_1').toggleClass('collapse');
        $('#susu_body_kiri_baru_bawah_1').toggleClass('collapse');
        $('#permanen_body_kiri_baru_bawah_1').toggleClass('collapse');
        $('#susu_header_kiri_baru_bawah_2').toggleClass('collapse');
        $('#permanen_header_kiri_baru_bawah_2').toggleClass('collapse');
        $('#susu_body_kiri_baru_bawah_2').toggleClass('collapse');
        $('#permanen_body_kiri_baru_bawah_2').toggleClass('collapse');
        $('#susu_header_kiri_baru_bawah_3').toggleClass('collapse');
        $('#permanen_header_kiri_baru_bawah_3').toggleClass('collapse');
        $('#susu_body_kiri_baru_bawah_3').toggleClass('collapse');
        $('#permanen_body_kiri_baru_bawah_3').toggleClass('collapse');
        $('#susu_header_kiri_baru_bawah_4').toggleClass('collapse');
        $('#permanen_header_kiri_baru_bawah_4').toggleClass('collapse');
        $('#susu_body_kiri_baru_bawah_4').toggleClass('collapse');
        $('#permanen_body_kiri_baru_bawah_4').toggleClass('collapse');
        $('#susu_header_kiri_baru_bawah_5').toggleClass('collapse');
        $('#permanen_header_kiri_baru_bawah_5').toggleClass('collapse');
        $('#susu_body_kiri_baru_bawah_5').toggleClass('collapse');
        $('#permanen_body_kiri_baru_bawah_5').toggleClass('collapse');
        $('#susu_header_kanan_baru_bawah_1').toggleClass('collapse');
        $('#permanen_header_kanan_baru_bawah_1').toggleClass('collapse');
        $('#susu_body_kanan_baru_bawah_1').toggleClass('collapse');
        $('#permanen_body_kanan_baru_bawah_1').toggleClass('collapse');
        $('#susu_header_kanan_baru_bawah_2').toggleClass('collapse');
        $('#permanen_header_kanan_baru_bawah_2').toggleClass('collapse');
        $('#susu_body_kanan_baru_bawah_2').toggleClass('collapse');
        $('#permanen_body_kanan_baru_bawah_2').toggleClass('collapse');
        $('#susu_header_kanan_baru_bawah_3').toggleClass('collapse');
        $('#permanen_header_kanan_baru_bawah_3').toggleClass('collapse');
        $('#susu_body_kanan_baru_bawah_3').toggleClass('collapse');
        $('#permanen_body_kanan_baru_bawah_3').toggleClass('collapse');
        $('#susu_header_kanan_baru_bawah_4').toggleClass('collapse');
        $('#permanen_header_kanan_baru_bawah_4').toggleClass('collapse');
        $('#susu_body_kanan_baru_bawah_4').toggleClass('collapse');
        $('#permanen_body_kanan_baru_bawah_4').toggleClass('collapse');
        $('#susu_header_kanan_baru_bawah_5').toggleClass('collapse');
        $('#permanen_header_kanan_baru_bawah_5').toggleClass('collapse');
        $('#susu_body_kanan_baru_bawah_5').toggleClass('collapse');
        $('#permanen_body_kanan_baru_bawah_5').toggleClass('collapse');
        $('#susu_header_kanan_baru_atas_1').toggleClass('collapse');
        $('#permanen_header_kanan_baru_atas_1').toggleClass('collapse');
        $('#susu_body_kanan_baru_atas_1').toggleClass('collapse');
        $('#permanen_body_kanan_baru_atas_1').toggleClass('collapse');
        $('#susu_header_kanan_baru_atas_2').toggleClass('collapse');
        $('#permanen_header_kanan_baru_atas_2').toggleClass('collapse');
        $('#susu_body_kanan_baru_atas_2').toggleClass('collapse');
        $('#permanen_body_kanan_baru_atas_2').toggleClass('collapse');
        $('#susu_header_kanan_baru_atas_3').toggleClass('collapse');
        $('#permanen_header_kanan_baru_atas_3').toggleClass('collapse');
        $('#susu_body_kanan_baru_atas_3').toggleClass('collapse');
        $('#permanen_body_kanan_baru_atas_3').toggleClass('collapse');
        $('#susu_header_kanan_baru_atas_4').toggleClass('collapse');
        $('#permanen_header_kanan_baru_atas_4').toggleClass('collapse');
        $('#susu_body_kanan_baru_atas_4').toggleClass('collapse');
        $('#permanen_body_kanan_baru_atas_4').toggleClass('collapse');
        $('#susu_header_kanan_baru_atas_5').toggleClass('collapse');
        $('#permanen_header_kanan_baru_atas_5').toggleClass('collapse');
        $('#susu_body_kanan_baru_atas_5').toggleClass('collapse');
        $('#permanen_body_kanan_baru_atas_5').toggleClass('collapse');
        txtStruktur.innerHTML = "Susu";
        btnGigiKiriBaruAtas1.innerHTML = "I";
        btnGigiKiriBaruBawah1.innerHTML = "I";
        btnGigiKananBaruAtas1.innerHTML = "I";
        btnGigiKananBaruBawah1.innerHTML = "I";
        btnGigiKiriBaruAtas2.innerHTML = "II";
        btnGigiKiriBaruBawah2.innerHTML = "II";
        btnGigiKananBaruAtas2.innerHTML = "II";
        btnGigiKananBaruBawah2.innerHTML = "II";
        btnGigiKiriBaruAtas3.innerHTML = "III";
        btnGigiKiriBaruBawah3.innerHTML = "III";
        btnGigiKananBaruAtas3.innerHTML = "III";
        btnGigiKananBaruBawah3.innerHTML = "III";
        btnGigiKiriBaruAtas4.innerHTML = "IV";
        btnGigiKiriBaruBawah4.innerHTML = "IV";
        btnGigiKananBaruAtas4.innerHTML = "IV";
        btnGigiKananBaruBawah4.innerHTML = "IV";
        btnGigiKiriBaruAtas5.innerHTML = "V";
        btnGigiKiriBaruBawah5.innerHTML = "V";
        btnGigiKananBaruAtas5.innerHTML = "V";
        btnGigiKananBaruBawah5.innerHTML = "V";
        btnGigiKiriBaruAtas6.style.visibility = 'hidden';
        btnGigiKiriBaruBawah6.style.visibility = 'hidden';
        btnGigiKananBaruAtas6.style.visibility = 'hidden';
        btnGigiKananBaruBawah6.style.visibility = 'hidden';
        btnGigiKiriBaruAtas7.style.visibility = 'hidden';
        btnGigiKiriBaruBawah7.style.visibility = 'hidden';
        btnGigiKananBaruAtas7.style.visibility = 'hidden';
        btnGigiKananBaruBawah7.style.visibility = 'hidden';
        btnGigiKiriBaruAtas8.style.visibility = 'hidden';
        btnGigiKiriBaruBawah8.style.visibility = 'hidden';
        btnGigiKananBaruAtas8.style.visibility = 'hidden';
        btnGigiKananBaruBawah8.style.visibility = 'hidden';
        BatalKiriAtas1();
        BatalKiriAtas2();
        BatalKiriAtas3();
        BatalKiriAtas4();
        BatalKiriAtas5();
        BatalKiriAtas6();
        BatalKiriAtas7();
        BatalKiriAtas8();
        BatalKiriBawah1();
        BatalKiriBawah2();
        BatalKiriBawah3();
        BatalKiriBawah4();
        BatalKiriBawah5();
        BatalKiriBawah6();
        BatalKiriBawah7();
        BatalKiriBawah8();
        BatalKananBawah1();
        BatalKananBawah2();
        BatalKananBawah3();
        BatalKananBawah4();
        BatalKananBawah5();
        BatalKananBawah6();
        BatalKananBawah7();
        BatalKananBawah8();
        BatalKananAtas1();
        BatalKananAtas2();
        BatalKananAtas3();
        BatalKananAtas4();
        BatalKananAtas5();
        BatalKananAtas6();
        BatalKananAtas7();
        BatalKananAtas8();
    }
};
