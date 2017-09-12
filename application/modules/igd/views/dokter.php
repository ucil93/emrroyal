
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content" style="background-color:#BFBFBF;">
    <div class="row">
      <div class="col-md-8">
        <div class="mt-element-ribbon bg-grey-steel">
          <?php
          if($alergiobat != "")
          {
            echo '<div class="ribbon ribbon-right ribbon-clip ribbon-shadow ribbon-round ribbon-border-dash-hor ribbon-color-danger uppercase"><div class="ribbon-sub ribbon-clip ribbon-right"></div>Pasien Mempunyai Alergi Obat</div>';
          }
          else
          {
            echo '<div class="ribbon ribbon-right ribbon-clip ribbon-shadow ribbon-round ribbon-border-dash-hor ribbon-color-primary uppercase"><div class="ribbon-sub ribbon-clip ribbon-right"></div>Pasien Tidak Mempunyai Alergi Obat</div>';
          }
          ?>
          <div class="portlet light bordered ribbon-content">
            <div class="caption font-red-sunglo">
              <div class="col-md-5">
                <span class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">Electronic Medical Record</span>
              </div>
              <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="row" id="stepPerawatEMR">
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <button type="" class="btn red btn-lg mt-ladda-btn ladda-button btn-circle">
                      <span class="ladda-label"><b>1</b></span>
                    </button>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <span><center>Form </br> <b>Perawat</b><center></span>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <button type="" class="btn c-btn-red btn-lg mt-ladda-btn ladda-button btn-circle">
                      <span class="font-default"><b>2</b></span>
                    </button>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <span class="font-default"><center>Form </br> <b>Dokter</b></center></span>
                  </div>
                </div>
                <div class="row collapse" id="stepDokterEMR">
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <button type="" class="btn c-btn-red btn-lg mt-ladda-btn ladda-button btn-circle">
                      <span class="font-default"><b>1</b></span>
                    </button>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <span class="font-default"><center>Form </br> <b>Perawat</b><center></span>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <button type="" class="btn red btn-lg mt-ladda-btn ladda-button btn-circle">
                      <span class="ladda-label"><b>2</b></span>
                    </button>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <span><center>Form </br> <b>Dokter</b></center></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="portlet-body form">
              <div class="form-body">
                <div class="row">

                  <div id="FrmLPerawatEMR">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                          <div class="caption">
                            <span class="caption-subject font-dark bold">Tanda Vital</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="TDPerawatEMR" name="TDPerawatEMR" value="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3">
                                    <label for="form_control_1">TD</label>
                                    <span class="help-block">Masukkan Tekanan Darah</span>
                                    <i style="font-size:12px"><b>mmHg</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="NPerawatEMR" name="NPerawatEMR" value="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3">
                                    <label for="form_control_1">N</label>
                                    <span class="help-block">Masukkan Nadi</span>
                                    <i style="font-size:12px"><b>x/mnt</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="SPerawatEMR" name="SPerawatEMR" value="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3">
                                    <label for="form_control_1">t</label>
                                    <span class="help-block">Masukkan Suhu Tubuh</span>
                                    <i style="font-size:12px"><b>&deg;C</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="RPerawatEMR" name="RPerawatEMR" value="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3">
                                    <label for="form_control_1">Rr</label>
                                    <span class="help-block">Masukkan Respiratory</span>
                                    <i style="font-size:12px"><b>x/mnt</b></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                          <div class="caption">
                            <span class="caption-subject font-dark bold">Skor Nyeri</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="range" id="NskorEMR" value="0" name="" min="0" max="10" data-rangeSlider></input>
                                <output></output>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4">
                                <center><img id="GNskorEMR" src="<?php echo base_url().'assets/pages/img/Icon/emot01.png'?>" style="width:90%"></center>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                          <div class="caption">
                            <span class="caption-subject font-dark bold">Skor Resiko Jatuh</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="range" id="JskorEMR" value="0" name="" min="0" max="10" data-rangeSlider></input>
                                <output></output>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4">
                                <center><img id="GJskorEMR" src="<?php echo base_url().'assets/pages/img/Icon/emot01.png'?>" style="width:90%"></center>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="collapse" id="FrmLDokterEMR">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-title">
                          <div class="caption font-red-intense">
                            <i class="fa fa-heartbeat font-red-intense"></i>
                            <span class="caption-subject bold uppercase"> Pemeriksaan </span>
                            <span class="caption-helper">Tanda Vital</span>
                          </div>
                          <div class="tools">
                            <a href="" class="collapse" data-original-title="" title=""> </a>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div data-toggle="context">
                            <div class="row">
                              <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                      Tekanan Darah
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                      : <span id="TDDokterEMR"><center>0</center></span>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                      <i style="font-size:12px"><b>mmHg</b></i>
                                    </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                      Nadi
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                      : <span id="NDokterEMR"><center>0</center></span>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                      <i style="font-size:12px"><b>x/mnt</b></i>
                                    </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                      Skor Nyeri
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                      : <span id="SNDokterEMR"><center>0</center></span>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                      <i style="font-size:12px"><b>/10</b></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                      Suhu Tubuh
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                      : <span id="SDokterEMR"><center>0</center></span>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                      <i style="font-size:12px"><b>&deg;C</b></i>
                                    </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                      Respiratory
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                      : <span id="RDokterEMR"><center>0</center></span>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                      <i style="font-size:12px"><b>x/mnt</b></i>
                                    </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                      Resiko Jatuh
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                      : <span id="RJDokterEMR"><center>0</center></span>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                      <i style="font-size:12px"><b>/10</b></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="col-md-3 col-sm-3 col-xs-3">
                                    Catatan Perawat
                                  </div>
                                  <div class="col-md-9 col-sm-9 col-xs-9">
                                    : <span id="CDokterEMR"></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-1 col-sm-2 col-xs-2 portlet-title">
                        <font size="11"><center><b>S</b></center></font>
                      </div>
                      <div class="col-md-11 col-sm-10 col-xs-10 portlet-body">
                        <div class="form-group form-md-line-input form-md-floating-label">
                          <textarea class="form-control" id="" name="" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                          <label for="form_control_1">Masukkan data</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-1 col-sm-2 col-xs-2 portlet-title">
                        <font size="11"><center><b>O</b></center></font>
                      </div>
                      <div class="col-md-11 col-sm-10 col-xs-10 portlet-body">
                        <div class="form-group form-md-line-input form-md-floating-label">
                          <textarea class="form-control" id="" name="" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                          <label for="form_control_1">Masukkan data</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-1 col-sm-2 col-xs-2 portlet-title">
                        <font size="11"><center><b>A</b></center></font>
                      </div>
                      <div class="col-md-11 col-sm-10 col-xs-10 portlet-body">
                        <div class="form-group form-md-line-input form-md-floating-label">
                          <textarea class="form-control" id="" name="" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                          <label for="form_control_1">Masukkan data</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-1 col-sm-2 col-xs-2 portlet-title">
                        <font size="11"><center><b>P</b></center></font>
                      </div>
                      <div class="col-md-11 col-sm-10 col-xs-10 portlet-body">
                        <div class="form-group form-md-line-input form-md-floating-label">
                          <textarea class="form-control" id="" name="" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                          <label for="form_control_1">Masukkan data</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fs-container col-md-12">
                    <div class="literally"></div>
                    <div class="toolset">
                      <span class='toolLabel'>Actions:</span>
                      <a href="javascript:void(0);" class='tool' id="open-image">Open image</a>
                      <a href="javascript:void(0);" class='tool' id="change-size">Change size</a>
                      <a href="javascript:void(0);" class='tool' id="reset-size">Reset size</a>
                      <a href="javascript:void(0);" class='tool' id="hide-lc">Teardown</a>
                      <a href="javascript:void(0);" class='tool' id="show-lc">Setup</a>
                      <a href="javascript:void(0);" class='tool' id="clear-lc">Clear</a>
                    </div>
                    <div class="toolset">
                      <span class='toolLabel'>Tools:</span>
                      <a href="javascript:void(0);" class='tool' id="tool-pencil">Pencil</a>
                      <a href="javascript:void(0);" class='tool' id="tool-eraser">Eraser</a>
                      <a href="javascript:void(0);" class='tool' id="tool-text">Text</a>
                      <a href="javascript:void(0);" class='tool' id="tool-line">Line</a>
                      <a href="javascript:void(0);" class='tool' id="tool-arrow">Arrow</a>
                      <a href="javascript:void(0);" class='tool' id="tool-dashed">Dashed Line</a>
                      <a href="javascript:void(0);" class='tool' id="tool-ellipse">Ellipse</a>
                      <a href="javascript:void(0);" class='tool' id="tool-rectangle">Rectangle</a>
                      <a href="javascript:void(0);" class='tool' id="tool-polygon">Polygon</a>
                      <a href="javascript:void(0);" class='tool' id="tool-select">Select</a>
                    </div>
                    <div class="toolset" id="tools-colors">
                      <span class='toolLabel'>Colors:</span>
                      <a href="javascript:void(0);" class='tool' id="colorTool-black">Black</a>
                      <a href="javascript:void(0);" class='tool' id="colorTool-blue">Blue</a>
                      <a href="javascript:void(0);" class='tool' id="colorTool-red">Red</a>
                    </div>
                    <br>
                    <div class="svg-container" style="display: inline-block; border: 1px solid yellow"></div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Sisi Kanan-->
      <div class="col-md-4">
        <!-- BEGIN TAB PORTLET-->
        <div class="portlet box red">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-gift"></i>Alergi Obat
            </div>
            <div class="tools">
              <a href="javascript:;" class="expand" data-original-title="" title=""> </a>
            </div>
          </div>
          <div class="portlet-body tabs-below">
            <div class="tab-content">
              <div class="tab-pane active in" id="tab_4_1">
                <?php
                if($alergiobat != "")
                {
                  echo "Pasien Mempunyai Alergi Obat : ".$alergiobat."";
                }
                else
                {
                  echo "Pasien Tidak Mempunyai Alergi Obat";
                }
                ?>
              </div>
              <div class="tab-pane fade" id="tab_4_2">
                  <div class="form-group">
                    <label for="form_control_1">Masukkan Alergi</label>
                    <input type="text" id="alergiobat" name="alergiobat" value="" class="form-control">
                  </div>
              </div>
            </div>
              <ul class="nav nav-pills">
                <li class="active">
                  <a href="#tab_4_1" data-toggle="tab" aria-expanded="true"> Daftar Alergi </a>
                </li>
                <li class="">
                  <a href="#tab_4_2" data-toggle="tab" aria-expanded="false"> Input Baru </a>
                </li>
              </ul>
          </div>
        </div>
        <div id="FrmRPerawatEMR">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Catatan</b></span>
            </div>
            <div class="portlet-body">
              <div class="form-group form-md-line-input form-md-floating-label">
                <textarea class="form-control" id="CPerawatEMR" name="CPerawatEMR" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                <label for="form_control_1">Textarea input</label>
              </div>
            </div>
          </div>
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <input type="hidden" id="statverEMR" name="statverEMR" value="Perawat">
            <div class="row portlet-body" id="verPerPerawatEMR">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data berikut, masukkan password anda terlebih dahulu sebagai proses verifikasi penginput data, kelengkapan pengisian data akan mempengaruhi penilaian anda</p>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="password" id="userPerPerawatEMR" name="userPerPerawatEMR" class="form-control">
                    <label for="form_control_1">Masukkan Username Perawat</label>
                    <span class="help-block">Masukkan password</span>
                  </div>
                </div>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="password" id="passPerPerawatEMR" name="passPerPerawatEMR" class="form-control">
                    <label for="form_control_1">Masukkan Password</label>
                    <span class="help-block">Masukkan password</span>
                  </div>
                </div>
              </div>
              <div class="btn-group btn-group btn-group-justified">
                <a id="btnChangePerawatEMR" class="btn red"> Click disini apabila anda <?php echo $level; ?> <?php echo $username; ?></a>
              </div>
            </div>
            <div class="row portlet-body collapse" id="verDokPerawatEMR">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Anda akan mengambil alih tanggung jawab proses pengisian data, kelengkapan data berikut akan mempengaruhi penilaian anda.</p>
                <span>Anda Login sebagai <?php echo $level; ?> : <b> <?php echo $username; ?> </b></span>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="password" id="passDokPerawatEMR" name="passDokPerawatEMR" class="form-control">
                    <label for="form_control_1">Masukkan Password</label>
                    <span class="help-block">Masukkan password</span>
                  </div>
                </div>
              </div>
              <div class="btn-group btn-group btn-group-justified">
                <a id="btnChangeDokterEMR" class="btn red"> Click disini apabila anda Perawat</a>
              </div>
            </div>
          </div>
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-body">
              <div class="row">
                <div id="alert-msg-PerawatEMR"></div>
                <div class="btn-group btn-group btn-group-justified">
                    <!--<button type="button" class="btn blue" style="width:50%" id="btnsimpanasesmen" name="btnsimpanasesmen">Simpan</button>
                    <button type="button" class="btn red" style="width:50%">Batal</button>-->
                    <button type="button" class="btn btn-default" style="width:50%">Batal</button>
                    <button type="button" class="btn green" id="btnSelanjutnyaEMR" name="btnSelanjutnyaEMR" style="width:50%">Selanjutnya</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="FrmRDokterEMR">
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-gift"></i>Obat Pasien</div>
              <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
              </div>
            </div>
            <div class="portlet-body">
              <div class="tabbable-custom nav-justified">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a href="#tab_1_1_1" data-toggle="tab">Obat Satuan</a>
                  </li>
                  <li>
                    <a href="#tab_1_1_2" data-toggle="tab">Obat Racik</a>
                  </li>
                </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1_1_1">
                  <div class="portlet-body">
                    <div class="form-group mt-repeater">
                      <div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-0.5em; margin-bottom: 1em;">
                          <div class="row mt-repeater-row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label class="control-label" style="font-size:14px">Obat ke-1</label>
                                <input type="text" name="obatsatuan[]" value="" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                <input type="hidden" name="idobatsatuan[]" value="" class="form-control project"/>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                <select id="aturanpakaisatuan2" name="aturanpakaisatuan2[]" class="form-control" data-size="2">
                                  <option value="" disabled selected>Aturan</option>
                                  <option value="Sebelum Makan">a.c</option>
                                  <option value="Saat Makan">d.c</option>
                                  <option value="Sesudah Makan">p.c</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-repeater-row" >
                            <div class="col-md-3">
                              <input type="text" id="jumlahsatuan" name="jumlahsatuan[]" placeholder="Jumlah" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                            </div>
                            <div class="col-md-5">
                              <input type="text" id="aturanpakaisatuan" name="aturanpakaisatuan[]" placeholder="Signa" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div id="div1">
                        </div>
                        <div id="div_button">
                          <a class="btn blue" name="tambah" value="Tambah Data" id="tambah"><i class="fa fa-plus"></i> Tambah</a>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab_1_1_2">
                  <div class="portlet-body">
                    <div class="form-group mt-repeater">
                        <div data-repeater-item class="mt-repeater-item">
                          <div class="portlet box grey">
                            <div class="portlet-title">
                              <div class="caption">
                                <i class="fa fa-gift"></i>Obat Racikan ke-1 </div>
                                <div class="tools">
                                  <a href="javascript:;" class="collapse"> </a>
                                </div>
                              </div>
                              <div class="portlet-body">
                                <div class="form-group mt-repeater">
                                    <div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-0.5em;">
                                      <div class="row mt-repeater-row" style="display:block; margin-bottom:-0.5em;">
                                        <div class="col-md-8">
                                          <div class="form-group">
                                            <label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>
                                            <input type="text" name="obatsatuanracik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                            <input type="text" name="idobatsatuan_racik[]" value="" class="form-control project_racik"/>
                                            <input type="hidden" value="RACIK_0001" id="idracik" name="idraciksatuan[]" class="form-control" />
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <label class="control-label" style="font-size:14px">Jumlah</label>
                                            <input type="text" id="jumlahracik" name="jumlahracik[]" placeholder="0" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  <div id="divracik1">
                                  </div>
                                  <div id="div_buttonracik1">
                                    <a class="btn blue tambahracik-click" name="tambahracik" value="Tambah Data" data-todo='{"number":"1"}'><i class="fa fa-plus"></i> Tambah Bahan</a>
                                  </div>
                                  <div class="form-group">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                    <select id="aturanpakairacik2" name="aturanpakairacik2[]" class="form-control" data-size="4">
                                      <option value="" disabled selected>Aturan</option>
                                      <option value="Sebelum Makan">a.c</option>
                                      <option value="Saat Makan">d.c</option>
                                      <option value="Sesudah Makan">p.c</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" id="jumlahracik2" name="jumlahracik2[]" placeholder="Jumlah" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" id="aturanpakairacik" name="aturanpakairacik[]" placeholder="Signa" class="form-control" />
                                  </div>
                                  <div class="form-group">
                                      <input type="hidden" value="RACIK_0001" id="idracik" name="idracik[]" class="form-control" />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="divracikobat">
                            </div>
                            <div id="div_buttonracikobat">
                              <a class="btn blue" name="tambahracikobat" value="Tambah Data" id="tambahracikobat"><i class="fa fa-plus"></i> Tambah Obat</a>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <div class="row portlet-body">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data Rekam Medis berikut, isi password di bawah ini terlebih dahulu sebagai proses verifikasi pengisi data.</p>
                <span>Anda Login sebagai <?php echo $level; ?> : <b> <?php echo $username; ?> </b></span>
                <div class="form-group form-md-line-input has-success form-md-floating-label" id="passDokDokterEMR2">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="password" id="passDokDokterEMR" name="passDokDokterEMR" class="form-control">
                    <label for="form_control_1">Masukkan Password</label>
                    <span class="help-block">Masukkan password</span>
                  </div>
                </div>
              </div>
              <input type="hidden" id="norm2" name="norm2" value="<?php echo $norm; ?>">
              <input type="hidden" id="tanggungjawab" name="tanggungjawab" value="<?php echo $username; ?>">
            </div>
          </div>
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-body">
              <div class="row">
                <div id="alert-msg-DokterEMR"></div>
                <div class="btn-group btn-group btn-group-justified">
                    <button type="button" class="btn btn-default" id="btnSebelumnyaEMR" style="width:50%">Sebelumnya</button>
                    <button type="button" class="btn green" id="btnsimpanDokterEMR" name="btnsimpanDokterEMR" style="width:50%">Simpan</button>
                </div>
              </div>
            </div>
          </div>
          <div id="verPass" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
            <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title"><center>Simpan data berhasil</center></h4>
              </div>
              <div class="modal-body">
                <center>
                  <img src="<?php echo base_url().'assets/pages/img/Icon/thanks.gif'?>" style="width:50%">
                  </br>
                  Terimakasih atas kerjasama anda, aplikasi akan otomatis kembali ke halaman depan
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
