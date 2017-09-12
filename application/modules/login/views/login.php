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
        <title>Royal | EMR </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- MULAI TAMABAHAN -->
        <!-- SELESAI TAMABAHAN -->
        <!-- BEGIN GLOBAL MANDATORY STYLES
        <link href="<?php echo base_url().'assets/new/fonts-googleapis.css'; ?>" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url().'assets/global/plugins/font-awesome/css/font-awesome.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/simple-line-icons/simple-line-icons.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS [MULAI TAMBAHAN]-->
        <link href="<?php echo base_url().'assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS [SELESAI TAMBAHAN]-->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url().'assets/global/css/components.min.css'; ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url().'assets/global/css/plugins.min.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url().'assets/pages/css/login-5.css'; ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url().'assets/favicon.ico'; ?>" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-2 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="bg-dark bg-font-dark col-md-6 col-sm-12 col-xs-12 login-container bs-reset">
                    <img class="col-md-12 col-sm-12 col-xs-12" style="position:center" class="login-logo login-6" src="<?php echo base_url().'assets/pages/img/login/logo.png'; ?>" />

                    <div class="login-content">
                        <h1 style="text-align:center" class="font-yellow-gold"><b>Electronic Medical Record</b></h1>
                        <?php echo form_open("login/act", array('class' => 'login-form', 'method' => 'post')); ?>
                        <!--<form action="<?php echo base_url().'login/act'; ?>" class="login-form" method="post">-->
                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger">
                                    <button class="close" data-close="alert"></button>
                                    <?= $error ?>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group form-md-line-input">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username" name="username" required/>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-md-line-input">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required/>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                  <div class="form-group">
                                      <select class="bs-select form-control" name="dataDokter" id="dataDokter" data-live-search="true" data-size="8">
                                      <option value='' disabled selected>Pilih Dokter</option>
                                      <?php
                                      foreach($dataDokter as $row)
                                      {
                                          echo '<option value="'.$row->KODEDOKTER.'">'.$row->KODEDOKTER.' - '.$row->NAMA.'</option>';
                                      }
                                      ?>

                                      </select>
                                  </div>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <button class="btn blue" type="submit">Log In</button>
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-md-12 bs-reset">
                                <div class="login-copyright text-right">
                                  <?php $tahun = date('Y'); ?>
                                  <!--<p>Copyright &copy; TIM IT RS. PETROKIMIA GRESIK <?php echo $tahun; ?></p>-->
                                    <p>Copyright &copy; TIM IT <?php echo $tahun; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>

                        <img class="mySlides col-md-6 col-sm-12 col-xs-12 bs-reset login-container" src="<?php echo base_url().'assets/pages/img/login/bg1.jpeg'; ?>" >
                        <img class="mySlides col-md-6 col-sm-12 col-xs-12 bs-reset login-container" src="<?php echo base_url().'assets/pages/img/login/bg2.jpg'; ?>" >
                        <img class="mySlides col-md-6 col-sm-12 col-xs-12 bs-reset login-container" src="<?php echo base_url().'assets/pages/img/login/bg3.jpg'; ?>" >
                        <img class="mySlides col-md-6 col-sm-12 col-xs-12 bs-reset login-container" src="<?php echo base_url().'assets/pages/img/login/bg4.jpg'; ?>" >


                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-2 -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->

        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                   x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 9000);
            }
        </script>
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url().'assets/global/plugins/jquery.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/global/plugins/bootstrap/js/bootstrap.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/global/plugins/js.cookie.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/global/plugins/jquery.blockui.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'; ?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS [MULAI TAMBAHAN]-->
        <script src="<?php echo base_url().'assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js'; ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS [SELESAI TAMBAHAN]-->
        <!-- BEGIN PAGE LEVEL PLUGINS [MULAI TAMBAHAN]-->
        <script src="<?php echo base_url().'assets/global/plugins/jquery-validation/js/jquery.validate.min.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/global/plugins/jquery-validation/js/additional-methods.min.js'; ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS [SELESAI TAMBAHAN]-->
        <script src="<?php echo base_url().'assets/global/plugins/backstretch/jquery.backstretch.min.js'; ?>" type="text/javascript"></script>
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url().'assets/global/scripts/app.min.js'; ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS [MULAI TAMBAHAN]-->
        <script src="<?php echo base_url().'assets/pages/scripts/components-bootstrap-select.min.js'; ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS [SELESAI TAMBAHAN]-->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url().'assets/pages/scripts/login-5.min.js'; ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
    </body>

</html>
