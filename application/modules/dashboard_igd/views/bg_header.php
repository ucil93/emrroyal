<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <?php
        if ($nama != '')
        {
          ?>
            <title><?php echo $nama?></title>
          <?php
        }
        else
        {
          ?>
            <title>ROYAL | EMR</title>
          <?php
        }
        ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- MULAI TAMABAHAN -->
        <script type="text/javascript" src="<?php echo base_url().'assets/new/js/jquery-1.11.3.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/new/js/1.10.3/jquery-ui.js'; ?>"></script>
        <link href="<?php echo base_url().'assets/new/multiselect/css/ui-lightness/jquery-ui.css'; ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/scripts/rangeSlider2.css'; ?>" rel="stylesheet" type="text/css"/>
        <!--<link rel="stylesheet" href="<?php echo base_url().'assets/new/multiselect/main.css'; ?>">-->
        <script src="<?php echo base_url().'assets/new/multiselect/js/1.11.0/jquery.min.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/new/multiselect/js/1.10.4/jquery-ui.min.js'; ?>"></script>
        <!-- <script src="<?php echo base_url().'assets/new/multiselect/jquery.autocomplete.multiselect.js'; ?>"></script>
        SELESAI TAMABAHAN -->
        <!-- BEGIN GLOBAL MANDATORY STYLES
        <link href="<?php echo base_url().'assets/new/fonts-googleapis.css'; ?>" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url().'assets/global/plugins/font-awesome/css/font-awesome.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/simple-line-icons/simple-line-icons.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/morris/morris.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/fullcalendar/fullcalendar.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/jqvmap/jqvmap/jqvmap.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS [MULAI TAMBAHAN]-->
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS [SELESAI TAMBAHAN]-->
        <!-- BEGIN PAGE LEVEL PLUGINS [MULAI TAMBAHAN]-->
        <link href="<?php echo base_url().'assets/global/plugins/datatables/datatables.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS [SELESAI TAMBAHAN]-->
        <!-- BEGIN PAGE LEVEL PLUGINS [MULAI TAMBAHAN]-->
        <link href="<?php echo base_url().'assets/global/plugins/ladda/ladda-themeless.min.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS [SELESAI TAMBAHAN]-->
        <!-- BEGIN PAGE LEVEL PLUGINS [MULAI TAMBAHAN]-->
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/clockface/css/clockface.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS [SELESAI TAMBAHAN]-->
        <!-- BEGIN PAGE LEVEL PLUGINS [MULAI TAMBAHAN]-->
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS [SELESAI TAMBAHAN]-->
        <!-- BEGIN PAGE LEVEL PLUGINS [MULAI TAMBAHAN]-->
        <link href="<?php echo base_url().'assets/global/plugins/icheck/skins/all.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS [SELESAI TAMBAHAN]-->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url().'assets/global/css/components.min.css'; ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url().'assets/global/css/plugins.min.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url().'assets/layouts/layout/css/layout.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/layouts/layout/css/themes/darkblue.min.css'; ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url().'assets/layouts/layout/css/custom.min.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link href="<?php echo base_url().'assets/scripts/canvas.css'; ?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url().'assets/favicon.ico'; ?>" />
    </head>
    <!-- END HEAD -->

    <style>
        .ui-autocomplete
        {
            max-height: 250px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
        }
    </style>

    <script type="text/javascript">
        <?php date_default_timezone_set('Asia/Jakarta'); ?>

        var myVar = setInterval(function(){ myTimer() }, 1000);

        function myTimer()
        {
            var d = new Date();
            var today=new Date(),
              curr_hour=today.getHours(),
              curr_min=today.getMinutes(),
              curr_sec=today.getSeconds();
              curr_hour=checkTime(curr_hour);
              curr_min=checkTime(curr_min);
              curr_sec=checkTime(curr_sec);
              document.getElementById("clock").innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
        }
        function checkTime(i)
        {
            if (i<10) {
                i="0" + i;
            }
            return i;
        }
    </script>

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-fixed page-footer-fixed">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                     <img src="<?php echo base_url().'assets/pages/img/login/tulisanrsp.png'; ?>" alt="logo" class="logo-default"/>
                        <div class="menu-toggler sidebar-toggler hide hidden-ms">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-user"></i>
                                    <span class="username username-hide-on-mobile">
                                    <?php
                                    $a = date ("H");
                                    if (($a>=6) && ($a<=10)){
                                    echo "<b>Selamat Pagi,</b>";
                                    }
                                    else if(($a>10) && ($a<=14))
                                    {
                                    echo "<b>Selamat Siang,</b>";}
                                    else if (($a>14) && ($a<=18)){
                                    echo "<b>Selamat Sore,</b>";}
                                    else { echo "<b> Selamat Malam,</b>";}
                                    ?> <?php echo $level; ?> <?php echo $username; ?>
                                    </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a data-target="#ubahpassword" data-toggle="modal">
                                        <i class="icon-user"></i> Rubah Password </a>

                                        <div id="ubahpassword" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h4 class="modal-title">Rubah Password</h4>
                                              </div>
                                              <div class="modal-body">
                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                    <input type="password" id="passwordlama" name="passwordlama" value="" class="form-control">
                                                    <label for="form_control_1">Password Lama</label>
                                                    <span class="help-block">Masukkan Password Lama</span>
                                                </div>
                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                    <input type="password" id="passwordbaru" name="passwordbaru" value="" class="form-control">
                                                    <label for="form_control_1">Password Baru</label>
                                                    <span class="help-block">Masukkan Password Baru</span>
                                                </div>
                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                    <input type="password" id="passwordbaru2" name="passwordbaru2" value="" class="form-control">
                                                    <label for="form_control_1">Konfirmasi Password Baru</label>
                                                    <span class="help-block">Masukkan Konfirmasi Password Baru</span>
                                                </div>
                                                <span class="input-group-btn btn-left">

                                                  <input type=button class="btn blue-madison" id="show" value="Show Password" onclick="ShowPassword()">
                                                  <input type=button class="btn blue-madison" style="display:none" id="hide" value="Hide Password" onclick="HidePassword()">
                                                </span>
                                                <br/>
                                                  <div id="alert-msg-ubahpass"></div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                <button type="button" class="btn green" id="ubahpass" name="ubahpass">Simpan</button>
                                              </div>
                                          </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-target="#modalLogout" data-toggle="modal">
                                        <i class="icon-key"></i> Log Out </a>
                                    </li>
                                    <div id="modalLogout" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><center><b>Anda yakin ingin keluar aplikasi?</b></center></h4>
                                        </div>
                                        <div class="modal-body">
                                          <center>
                                            <img src="<?php echo base_url().'assets/pages/img/Icon/minion.gif'?>" style="width:50%">
                                            </br>
                                            Data yang baru saja dimasukkan tidak akan tersimmpan apabila anda keluar dari aplikasi.
                                          </center>
                                        </div>
                                        <div class="modal-footer">
                                          <center>
                                            <div class="btn-group btn-group btn-group-justified" style="width:50%">
                                                <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Batal</a>
                                                <a type="button" class="btn red" href="<?php echo site_url('login/logout') ?>" style="width:50%">Ya (keluar)</a>
                                            </div>
                                          </center>
                                        </div>
                                      </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-user"></i>
                                    <span class="username">
                                    Dokter <?php echo $namadokter; ?>
                                    </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a data-target="#datapemeriksaan" data-toggle="modal">
                                        Lihat Data Pemeriksaan </a>

                                        <div id="datapemeriksaan" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-width="80%" data-keyboard="false" style="width:90%">
                                          <?php
                                          $bpjs = 0;
                                          $umum = 0;
                                          $bpjs2 = 0;
                                          $umum2 = 0;
                                          foreach ($dataTabledokter as $dx)
                                          {
                                            if($dx->CUSTNO == '0005' || $dx->CUSTNO == '7326' || $dx->CUSTNO == '7327' || $dx->CUSTNO == '0003')
                                            {
                                              $bpjs = $bpjs + 1;
                                            }
                                            else
                                            {
                                              $umum = $umum + 1;
                                            }
                                          }
                                          foreach ($dataTabledokter2 as $dz)
                                          {
                                            if($dz->CUSTNO == '0005' || $dz->CUSTNO == '7326' || $dz->CUSTNO == '7327' || $dz->CUSTNO == '0003')
                                            {
                                              $bpjs2 = $bpjs2 + 1;
                                            }
                                            else
                                            {
                                              $umum2 = $umum2 + 1;
                                            }
                                          }
                                          ?>
                                          <div class="row">
                                            <div class="col-md-4">
                                              <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                                <button disable type="button" class="btn white" style="height:55px; width:30%">
                                                  <span style="font-size:8px; color:#BFBFBF"><b>Kode Dokter :</b></span><br>
                                                  <span style="font-size:14px" name><b><?php echo $kodedokter ?></b></span>
                                                </button>
                                                <button disable type="button" class="btn white" style="height:55px; width:70%">
                                                  <span style="font-size:8px; color:#BFBFBF"><b>Nama Dokter :</b></span><br>
                                                  <span style="font-size:14px"><b><?php echo $namadokter; ?></b></span><br>
                                                </button>
                                              </div>
                                            </div>
                                            <div class="modal-header bg-blue bg-font-blue col-md-4">
                                              <h4 class="modal-title"><center><b>Data Pemeriksaan</b></center></h4>
                                            </div>
                                            <div class="col-md-4 bg-blue">
                                              <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                                <a type="button" id="EMR_btnLihatPeriksaDokterHari" class="btn disabled white" style="height:55px; width:50%; font-size:12px"><b>Histori </br> Hari Ini</b></a>
                                                <a type="button" id="EMR_btnLihatPeriksaDokterBulan" class="btn blue" style="height:55px; width:50%; font-size:12px"><b>Lihat Histori </br> Bulan Ini</b></a>
                                              </div>
                                            </div>
                                            <div class="col-md-12" id="EMR_ketLihatPeriksaDokterHari">
                                              <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                                <a disable type="button" class="btn green" style="height:35px; width:100%">
                                                  <span style="font-size:14px"><b>Jumlah Pasien BPJS hari ini tanggal <?php echo date('d-M-Y'); ?> adalah : <?php echo $bpjs; ?> </b></span>
                                                </a>
                                                <a disable type="button" class="btn blue" style="height:35px; width:100%">
                                                  <span style="font-size:14px"><b>Jumlah Pasien UMUM hari ini tanggal <?php echo date('d-M-Y'); ?> adalah : <?php echo $umum; ?> </b></span>
                                                </a>
                                              </div>
                                            </div>
                                            <div class="col-md-12 collapse" id="EMR_ketLihatPeriksaDokterBulan">
                                              <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                                <a disable type="button" class="btn green" style="height:35px; width:100%">
                                                  <span style="font-size:14px"><b>Jumlah Pasien BPJS bulan <?php echo date('M'); ?> adalah : <?php echo $bpjs2; ?> </b></span>
                                                </a>
                                                <a disable type="button" class="btn blue" style="height:35px; width:100%">
                                                  <span style="font-size:14px"><b>Jumlah Pasien UMUM bulan <?php echo date('M'); ?> adalah : <?php echo $umum2; ?> </b></span>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                          <input type="hidden" id="EMR_LihatPeriksaDokterStatTXT" value="hari">
                                          <div class="modal-body" id="EMR_LihatPeriksaDokter_Harian">
                                            <table class="table table-striped table-bordered table-hover order-column" id="sample_6">
                                              <thead class="btn-success">
                                                <tr>
                                                  <th><center> Tanggal </center></th>
                                                  <th><center> Klinik </center></th>
                                                  <th><center> Diagnosis </center></th>
                                                  <th><center> Nama Pasien </center></th>
                                                  <th><center> Jenis Pasien </center></th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <?php
                                                  foreach($dataTabledokter as $dt)
                                                  {
                                                    ?>
                                                    <tr class="odd gradeX">
                                                      <td width="10%"><center><?php echo $dt->TANGGAL_PERIKSA; ?></center></td>
                                                      <td width="20%"><center><?php echo $dt->KODEUNIT; ?></center></td>
                                                      <td width="30%"><center><?php echo $dt->DIAGNOSIS; ?></center></td>
                                                      <td width="20%"><center><?php echo $dt->NAMAPASIEN; ?></center></td>
                                                      <td width="20%"><center><?php echo $dt->NMCUST; ?></center></td>
                                                    </tr>
                                                    <?php
                                                  }
                                                ?>
                                              </tbody>
                                            </table>
                                          </div>
                                          <div class="modal-body collapse" id="EMR_LihatPeriksaDokter_Bulanan">
                                            <table class="table table-striped table-bordered table-hover order-column" id="sample_8">
                                              <thead class="btn-success">
                                                <tr>
                                                  <th><center> Tanggal </center></th>
                                                  <th><center> Klinik </center></th>
                                                  <th><center> Diagnosis </center></th>
                                                  <th><center> Nama Pasien </center></th>
                                                  <th><center> Jenis Pasien </center></th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <?php
                                                  foreach($dataTabledokter2 as $dt)
                                                  {
                                                    ?>
                                                    <tr class="odd gradeX">
                                                      <td width="10%"><center><?php echo $dt->TANGGAL_PERIKSA; ?></center></td>
                                                      <td width="20%"><center><?php echo $dt->KODEUNIT; ?></center></td>
                                                      <td width="30%"><center><?php echo $dt->DIAGNOSIS; ?></center></td>
                                                      <td width="20%"><center><?php echo $dt->NAMAPASIEN; ?></center></td>
                                                      <td width="20%"><center><?php echo $dt->NMCUST; ?></center></td>
                                                    </tr>
                                                    <?php

                                                  }
                                                ?>
                                              </tbody>
                                            </table>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                          </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--<li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-feed"></i>
                                    <span class="username username-hide-on-mobile"> Radio </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a alt="listen now" onclick="return streaming('http://s2.viastreaming.net/mobile.php?port=6445')" target="blank">
                                        <i class="fa fa-volume-up"></i> Suara Surabaya </a>
                                    </li>
                                    <li>
                                        <a alt="listen now" onclick="return streaming('http://tunein.com/radio/Gen-FM-Surabaya-1031-s189829/')" target="_blank">
                                        <i class="fa fa-volume-up"></i> Gen FM Surabaya </a>
                                    </li>
                                    <li>
                                        <a alt="listen now" onclick="return streaming('http://mtbfm.co.id/')" target="_blank">
                                        <i class="fa fa-volume-up"></i> MTB FM Surabaya </a>
                                    </li>
                                    <li>
                                        <a alt="listen now" onclick="return streaming('http://tunein.com/radio/Life-Radio-Surabaya-971-s143650/')" target="_blank">
                                        <i class="fa fa-volume-up"></i> Life FM Surabaya </a>
                                    </li>
                                    <li>
                                        <a alt="listen now" onclick="return streaming('http://tunein.com/radio/Prambors-1022-893-s89413/')" target="_blank">
                                        <i class="fa fa-volume-up"></i> Prambors Surabaya </a>
                                    </li>
                                    <li>
                                        <a alt="listen now" onclick="return streaming('http://tunein.com/radio/Wijaya-FM-1035-s132128/')" target="_blank">
                                        <i class="fa fa-volume-up"></i> Wijaya Surabaya </a>
                                    </li>
                                    <li>
                                        <a onclick="return closewin()">
                                        <i class="fa fa-volume-off"></i> Matikan Radio </a>
                                    </li>

                                </ul>
                            </li>-->
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
