/*
btnKepala.onclick =function()
{
    $('#tbKerangka').toggleClass('collapse');
    $('#tbKepala').toggleClass('collapse');
};
bbtnKepala.onclick =function()
{
    $('#tbKepala').toggleClass('collapse');
    $('#tbKerangka').toggleClass('collapse');
};
*/
btnTengkorakFull.onclick = function()
{
  if(btnPilihTulangTengkorak.innerHTML != "Tengkorak")
  {
    $('#btnGeserBawah').toggleClass('collapse');
    $('#btnGeserAtas').toggleClass('collapse');
  }
  txtTampakTengkorak.innerHTML = "Depan";
  btnPilihTulangTengkorak.innerHTML = "Tengkorak";
  $("#GTeng_kecil").attr("src",base_url + "assets/pages/img/tulang/Teng_Depan.png");
  $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng_Depan.png");
}

btnMaxilla.onclick = function()
{
  if(btnPilihTulangTengkorak.innerHTML = "Tengkorak")
  {
    $('#btnGeserBawah').toggleClass('collapse');
    $('#btnGeserAtas').toggleClass('collapse');
  }
  txtTampakTengkorak.innerHTML = "Maxilla Depan";
  btnPilihTulangTengkorak.innerHTML = "Maxilla";
  $("#GTeng_kecil").attr("src",base_url + "assets/pages/img/tulang/Teng_Depan Maxilla.png");
  $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Maxilla_Depan.png");
}

btnFrontal.onclick = function()
{
  if(btnPilihTulangTengkorak.innerHTML = "Tengkorak")
  {
    $('#btnGeserBawah').toggleClass('collapse');
    $('#btnGeserAtas').toggleClass('collapse');
  }
  txtTampakTengkorak.innerHTML = "Frontal Depan";
  btnPilihTulangTengkorak.innerHTML = "Frontal";
  $("#GTeng_kecil").attr("src",base_url + "assets/pages/img/tulang/Teng_Depan Frontal.png");
  $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Frontal_Depan.png");
}

btnGeserKiri.onclick =function()
{
    if(txtTampakTengkorak.innerHTML == "Depan")
    {
      txtTampakTengkorak.innerHTML = "Kanan";
      $("#GTeng_kecil").attr("src",base_url + "assets/pages/img/tulang/Teng_Kanan.png");
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng_Kanan.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Kanan")
    {
      txtTampakTengkorak.innerHTML = "Belakang";
      $("#GTeng_kecil").attr("src",base_url + "assets/pages/img/tulang/Teng_Belakang.png");
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng_Belakang.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Belakang")
    {
      txtTampakTengkorak.innerHTML = "Kiri";
      $("#GTeng_kecil").attr("src",base_url + "assets/pages/img/tulang/Teng_Kiri.png");
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng_Kiri.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Kiri")
    {
      txtTampakTengkorak.innerHTML = "Depan";
      $("#GTeng_kecil").attr("src",base_url + "assets/pages/img/tulang/Teng_Depan.png");
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng_Depan.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Frontal Depan")
    {
      txtTampakTengkorak.innerHTML = "Frontal Kanan";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Frontal_Kanan.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Frontal Kanan")
    {
      txtTampakTengkorak.innerHTML = "Frontal Belakang";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Frontal_Belakang.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Frontal Belakang")
    {
      txtTampakTengkorak.innerHTML = "Frontal Kiri";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Frontal_Kiri.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Frontal Kiri")
    {
      txtTampakTengkorak.innerHTML = "Frontal Depan";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Frontal_Depan.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Maxilla Depan")
    {
      txtTampakTengkorak.innerHTML = "Maxilla Belakang";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Maxilla_Belakang.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Maxilla Belakang")
    {
      txtTampakTengkorak.innerHTML = "Maxilla Depan";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Maxilla_Depan.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Maxilla Belakang")
    {
      txtTampakTengkorak.innerHTML = "Maxilla Depan";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Maxilla_Depan.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Maxilla Belakang")
    {
      txtTampakTengkorak.innerHTML = "Maxilla Depan";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Maxilla_Depan.png");
    }
};
btnGeserKanan.onclick =function()
{
    if(txtTampakTengkorak.innerHTML == "Depan")
    {
      txtTampakTengkorak.innerHTML = "Kiri";
      $("#GTeng_kecil").attr("src",base_url + "assets/pages/img/tulang/Teng_Kiri.png");
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng_Kiri.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Kiri")
    {
      txtTampakTengkorak.innerHTML = "Belakang";
      $("#GTeng_kecil").attr("src",base_url + "assets/pages/img/tulang/Teng_Belakang.png");
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng_Belakang.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Belakang")
    {
      txtTampakTengkorak.innerHTML = "Kanan";
      $("#GTeng_kecil").attr("src",base_url + "assets/pages/img/tulang/Teng_Kanan.png");
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng_Kanan.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Kanan")
    {
      txtTampakTengkorak.innerHTML = "Depan";
      $("#GTeng_kecil").attr("src",base_url + "assets/pages/img/tulang/Teng_Depan.png");
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng_Depan.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Frontal Depan")
    {
      txtTampakTengkorak.innerHTML = "Frontal Kiri";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Frontal_Kiri.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Frontal Kiri")
    {
      txtTampakTengkorak.innerHTML = "Frontal Belakang";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Frontal_Belakang.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Frontal Belakang")
    {
      txtTampakTengkorak.innerHTML = "Frontal Kanan";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Frontal_Kanan.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Frontal Kanan")
    {
      txtTampakTengkorak.innerHTML = "Frontal Depan";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Frontal_Depan.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Maxilla Depan")
    {
      txtTampakTengkorak.innerHTML = "Maxilla Belakang";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Maxilla_Belakang.png");
    }
    else if(txtTampakTengkorak.innerHTML == "Maxilla Belakang")
    {
      txtTampakTengkorak.innerHTML = "Maxilla Depan";
      $("#GTeng_besar").attr("src",base_url + "assets/pages/img/tulang/Teng Maxilla_Depan.png");
    }
};
