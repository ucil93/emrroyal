
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
                <div class="row" id="EMR_RAJAL_stepPerawat">
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
                <div class="row collapse" id="EMR_RAJAL_stepDokter">
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
                  <div id="EMR_RAJAL_FrmLPerawat">
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
                                    <input type="text" id="EMR_RAJAL_TDPerawat" name="EMR_RAJAL_TDPerawat" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">TD</label>
                                    <span class="help-block">Masukkan Tekanan Darah</span>
                                    <i style="font-size:12px"><b>mmHg</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_RAJAL_NPerawat" name="EMR_RAJAL_NPerawat" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">N</label>
                                    <span class="help-block">Masukkan Nadi</span>
                                    <i style="font-size:12px"><b>x/mnt</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_RAJAL_TPerawat" name="EMR_RAJAL_TPerawat" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">t</label>
                                    <span class="help-block">Masukkan Suhu Tubuh</span>
                                    <i style="font-size:12px"><b>&deg;C</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_RAJAL_RPerawat" name="EMR_RAJAL_RPerawat" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
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
                                <input type="range" id="EMR_RAJAL_Nskor" value="0" name="" min="0" max="10" data-rangeSlider></input>
                                <output></output>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4">
                                <center><img id="EMR_RAJAL_GNskor" src="<?php echo base_url().'assets/pages/img/Icon/emot01.png'?>" style="width:90%"></center>
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
                                <input type="range" id="EMR_RAJAL_Jskor" value="0" name="" min="0" max="10" data-rangeSlider></input>
                                <output></output>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4">
                                <center><img id="EMR_RAJAL_GJskor" src="<?php echo base_url().'assets/pages/img/Icon/emot01.png'?>" style="width:90%"></center>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="collapse" id="EMR_RAJAL_FrmLDokter">

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
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-4">
                                    Tekanan Darah
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-1">
                                    :
                                  </div>
                                  <div class="col-md-3 col-sm-3 col-xs-2">
                                    <span id="EMR_RAJAL_TDDokter"></span>
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-2">
                                    <i style="font-size:12px"><b>mmHg</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-4">
                                    Nadi
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-1">
                                    :
                                  </div>
                                  <div class="col-md-3 col-sm-3 col-xs-2">
                                    <span id="EMR_RAJAL_NDokter"></span>
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-2">
                                    <i style="font-size:12px"><b>x/mnt</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-4">
                                    Suhu Tubuh
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-1">
                                    :
                                  </div>
                                  <div class="col-md-3 col-sm-3 col-xs-2">
                                    <span id="EMR_RAJAL_SDokter"></span>
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-2">
                                    <i style="font-size:12px"><b>°C</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-4">
                                    Respiratory
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-1">
                                    :
                                  </div>
                                  <div class="col-md-3 col-sm-3 col-xs-2">
                                    <span id="EMR_RAJAL_RDokter"></span>
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-2">
                                    <i style="font-size:12px"><b>x/mnt</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-4">
                                    Skor Nyeri
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-1">
                                    :
                                  </div>
                                  <div class="col-md-3 col-sm-3 col-xs-2">
                                    <span id="EMR_RAJAL_SNDokter">0</span>
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-2">
                                    <i style="font-size:12px"><b>/10</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-4">
                                    Resiko Jatuh
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-1">
                                    :
                                  </div>
                                  <div class="col-md-3 col-sm-3 col-xs-2">
                                    <span id="EMR_RAJAL_RJDokter">0</span>
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-2">
                                    <i style="font-size:12px"><b>/10</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                  <div class="col-md-5 col-sm-5 col-xs-4">
                                    Catatan Perawat
                                  </div>
                                  <div class="col-md-1 col-sm-1 col-xs-1">
                                    :
                                  </div>
                                </div>
                                  <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                      <span id="EMR_RAJAL_CDokter"></span>
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
                        <div class="portlet-title">
                          <div class="caption font-red-intense">
                            <span class="caption-subject bold uppercase"> Pemeriksaan </span>
                            <span class="caption-helper">Dokter</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div data-toggle="context">
                            <div class="row">

                              <div class="col-md-12">
                                <div class="col-md-1 col-sm-2 col-xs-2 portlet-title">
                                  <font size="11"><center><b>S</b></center></font>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-10 portlet-body">
                                  <div class="form-group form-md-line-input form-md-floating-label">
                                    <textarea class="form-control edited" id="EMR_RAJAL_SDokterSOAP" name="EMR_RAJAL_SDokterSOAP" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
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
                                    <textarea class="form-control edited" id="EMR_RAJAL_ODokterSOAP" name="EMR_RAJAL_ODokterSOAP" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
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
                                    <textarea class="form-control" id="EMR_RAJAL_ADokterSOAP" name="EMR_RAJAL_ADokterSOAP" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                                    <!--<textarea class="form-control" id="EMR_RAJAL_ADokterSOAP_value" name="EMR_RAJAL_ADokterSOAP_value" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                                    <textarea class="form-control" id="EMR_RAJAL_ADokterSOAP_label" name="EMR_RAJAL_ADokterSOAP_label" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                                    <input type="text" id="EMR_RAJAL_ADokterSOAP[]" name="EMR_RAJAL_ADokterSOAP[]" class="form-control EMR_RAJAL_ADokterSOAP" style="margin-top: 0px; margin-bottom: 0px;">
                                    <input type="hidden" id="label_rajal_diagnosis[]" name="label_rajal_diagnosis[]" class="form-control label_rajal_diagnosis" style="margin-top: 0px; margin-bottom: 0px;">-->
                                    <label for="form_control_1">Masukkan data</label>
                                  </div>
                                  <!--<div id="diagnosis_rajal">
                                  </div>
                                  <div id="button_diagnosis_rajal">
                                      <a class="btn green-jungle" name="tambah_diagnosis_rajal" value="Tambah Data" id="tambah_diagnosis_rajal"><i class="fa fa-plus"></i> Tambah Diagnosis</a>
                                  </div>-->
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="col-md-1 col-sm-2 col-xs-2 portlet-title">
                                  <font size="11"><center><b>P</b></center></font>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-10 portlet-body">
                                  <div class="form-group form-md-line-input form-md-floating-label">
                                    <textarea class="form-control" id="EMR_RAJAL_PDokterSOAP" name="EMR_RAJAL_PDokterSOAP" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                                    <label for="form_control_1">Masukkan data</label>
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
                            <span class="caption-subject font-dark bold">Saran Pemeriksaan</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <a class="btn btn-outline blue" href="#radiologi_rajal" data-toggle="modal"> Radiologi </a>
                              <div id="radiologi_rajal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Pilih Radiologi</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                    <?php
                                    foreach($dataRadio as $row)
                                    {
                                      ?>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <label class="text-success bold"><u><?php echo $row->NM_GR_RADIO;?> </u></label></br>
                                          <?php
                                          $get = $this->db->query("select * FROM EMR_DT_RADIOLOGI WHERE KODE_GR_RADIO = '".$row->KODE_GR_RADIO."' AND STATUS_DT_RADIO='AKTIF' order by KODE_DT_RADIO ASC");

                                          foreach($get->result() as $row)
                                          {
                                              ?>
                                              <div class="col-md-4">
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox" id="radiologi_checkbox_rajal" name="radiologi_checkbox_rajal[]" value="<?php echo $row->KODE_DT_RADIO;?>">
                                                <?php
                                                  echo $row->NM_DT_RADIO;
                                                ?>
                                                <span></span>
                                                </label>
                                              </div>
                                              <?php
                                          }
                                          ?>

                                        </div>
                                      </div>
                                      <?php
                                    }
                                    ?>
                                    <label class="text-success bold"><u>RADIOLOGI LAIN</u></label>
                                    </br>
                                    <div class="col-md-4">
                                      <label class="mt-checkbox mt-checkbox-outline">
                                      <input type="checkbox" id="radiologi_lain_rajal" name="radiologi_lain_rajal" value="DTR_0000">
                                      Lain-Lain
                                      <span></span>
                                      </label>
                                      <div class="form-group collapse" id="radiologi_lain_rajal_1">
                                          <div class="form-group form-md-line-input">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="radiologi_lain_rajal_2" name="radiologi_lain_rajal_2" class="form-control">
                                                  <label for="form_control">Radiologi Lain</label>
                                                  <span class="help-block">Masukkan Radiologi</span>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="modal-footer" style="display:block; text-align: left;">
                                      <p>
                                          CATATAN</br>
                                          *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa semalam, makan terakhir max jam 22.00,jam 07.00 pagi periksa</br>
                                          *)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hubungi Laboratorium dulu karena ada syarat-syarat khusus</br>
                                          **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa 8-12 jam, makan terakhir max jam 19.00, jam 07.00 pagi periksa</br>
                                          ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa 8-12 jam, makan terakhir max jam 21.00, jam 07.00 pagi periksa</br>
                                          ****&nbsp;&nbsp;&nbsp;&nbsp;Darah diambil tepat 2 jam sesudah makan</br>
                                          *****&nbsp;&nbsp;&nbsp;Urine pertama bangun tidur pagi, dibawa ke lab tidak boleh > 1 jam</br>
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bila > 1 jam, simpan dalam kulkas (bukan yang freezer)</br></br>
                                          Puasa tidak boleh makan dan tidak boleh minum sesuatu (kecuali air putih boleh)
                                      </p>
                                      <button type="button" class="btn btn-default" id="reset_radio_rajal" data-dismiss="modal">Batal</button>
                                      <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                  </div>
                              </div>
                              <a class="btn btn-outline blue" href="#laboratorium_rajal" data-toggle="modal"> Laboratorium </a>
                              <div id="laboratorium_rajal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                      <h4 class="modal-title">Pilih Laboratorium</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                    <?php
                                    foreach($dataLaboratorium as $row)
                                    {
                                      ?>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <label class="text-success bold"><u><?php echo $row->NM_GR_LABORATORIUM;?> </u></label></br>
                                          <?php
                                          $get = $this->db->query("select * FROM EMR_DT_LABORATORIUM WHERE KODE_GR_LABORATORIUM = '".$row->KODE_GR_LABORATORIUM."' AND STATUS_DT_LABORAT='AKTIF' order by KODE_DT_LABORATORIUM ASC");

                                          foreach($get->result() as $row)
                                          {
                                              ?>
                                              <div class="col-md-4">
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox" id="laboratorium_checkbox_rajal" name="laboratorium_checkbox_rajal[]" value="<?php echo $row->KODE_DT_LABORATORIUM;?>">
                                                <?php
                                                  echo $row->NM_DT_LABORATORIUM;
                                                ?>
                                                <span></span>
                                                </label>
                                              </div>
                                              <?php
                                          }
                                          ?>

                                        </div>
                                      </div>
                                      <?php
                                    }
                                    ?>
                                    <label class="text-success bold"><u>LABORATORIUM LAIN</u></label>
                                    </br>
                                    <div class="col-md-4">
                                      <label class="mt-checkbox mt-checkbox-outline">
                                      <input type="checkbox" id="laboratorium_lain_rajal" name="laboratorium_lain_rajal" value="DTL_0000">
                                      Lain-Lain
                                      <span></span>
                                      </label>
                                      <div class="form-group collapse" id="laboratorium_lain_rajal_1">
                                          <div class="form-group form-md-line-input">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="laboratorium_lain_rajal_2" name="laboratorium_lain_rajal_2" class="form-control">
                                                  <label for="form_control">Laboratorium Lain</label>
                                                  <span class="help-block">Masukkan Laboratorium</span>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="modal-footer" style="display:block; text-align: left;">
                                      <p>
                                          CATATAN</br>
                                          *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa semalam, makan terakhir max jam 22.00,jam 07.00 pagi periksa</br>
                                          *)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hubungi Laboratorium dulu karena ada syarat-syarat khusus</br>
                                          **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa 8-12 jam, makan terakhir max jam 19.00, jam 07.00 pagi periksa</br>
                                          ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa 8-12 jam, makan terakhir max jam 21.00, jam 07.00 pagi periksa</br>
                                          ****&nbsp;&nbsp;&nbsp;&nbsp;Darah diambil tepat 2 jam sesudah makan</br>
                                          *****&nbsp;&nbsp;&nbsp;Urine pertama bangun tidur pagi, dibawa ke lab tidak boleh > 1 jam</br>
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bila > 1 jam, simpan dalam kulkas (bukan yang freezer)</br></br>
                                          Puasa tidak boleh makan dan tidak boleh minum sesuatu (kecuali air putih boleh)
                                      </p>
                                      <button type="button" class="btn btn-default" id="reset_laboratorium_rajal" data-dismiss="modal">Batal</button>
                                      <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
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
                            <span class="caption-subject font-dark bold">Dirujuk ke:</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.25em;">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" id="rahligizi_rajal" name="rahligizi_rajal" value="Ahli Gizi" >
                                    Ahli Gizi
                                    <span></span>
                                    </label>
                                  </div>
                                  <div class="col-md-4">
                                    <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" id="rrehabilitasi_rajal" name="rrehabilitasi_rajal" value="Rehabilitasi Medik" >
                                    Rehabilitasi Medik
                                    <span></span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.5em;">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" id="rklinik_rajal" name="rklinik_rajal" value="Klinik Spesialis" >
                                    Klinik Spesialis
                                    <span></span>
                                    </label>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group collapse" id="rklinik_rajal_1">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="rklinik_rajal_2" name="rklinik_rajal_2" class="form-control">
                                                <label for="form_control">Klinik Spesialis</label>
                                                <span class="help-block">Masukkan Rujukan Klinik Spesialis</span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" id="rlain_rajal" name="rlain_rajal" value="lain" >
                                    Lain - Lain
                                    <span></span>
                                    </label>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group collapse" id="rlain_rajal_1">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="rlain_rajal_2" name="rlain_rajal_2" class="form-control">
                                                <label for="form_control">Lain - Lain</label>
                                                <span class="help-block">Masukkan Rujukan Lain - Lain</span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--
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
                -->

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
                    <!--<input type="text" id="alergiobat_rajal" name="alergiobat_rajal" value="" class="form-control">-->
                    <textarea class="form-control" id="alergiobat_rajal" name="alergiobat_rajal"></textarea>
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
        <div id="EMR_RAJAL_FrmRPerawat">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Catatan</b></span>
            </div>
            <div class="portlet-body">
              <div class="form-group form-md-line-input form-md-floating-label">
                <textarea class="form-control" id="EMR_RAJAL_CPerawat" name="EMR_RAJAL_CPerawat" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                <label for="form_control_1">Textarea input</label>
              </div>
            </div>
          </div>
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <input type="hidden" id="EMR_RAJAL_statver" name="EMR_RAJAL_statver" value="Perawat">
            <div class="row portlet-body" id="EMR_RAJAL_verPerPerawat">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data berikut, masukkan password anda terlebih dahulu sebagai proses verifikasi penginput data, kelengkapan pengisian data akan mempengaruhi penilaian anda</p>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_RAJAL_userPerPerawat" name="EMR_RAJAL_userPerPerawat" class="form-control">
                    <label for="form_control_1">Masukkan Username Perawat</label>
                    <span class="help-block">Masukkan Username Perawat</span>
                  </div>
                </div>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="password" id="EMR_RAJAL_passPerPerawat" name="EMR_RAJAL_passPerPerawat" class="form-control">
                    <label for="form_control_1">Masukkan Password Perawat</label>
                    <span class="help-block">Masukkan Password Perawat</span>
                  </div>
                </div>
              </div>
              <div class="btn-group btn-group btn-group-justified">
                <a id="EMR_RAJAL_btnChangePerPerawat" class="btn red"> Klik disini apabila anda <?php echo $level; ?> <?php echo $username; ?></a>
              </div>
            </div>
            <div class="row portlet-body collapse" id="EMR_RAJAL_verDokPerawat">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Anda akan mengambil alih tanggung jawab proses pengisian data, kelengkapan data berikut akan mempengaruhi penilaian anda.</p>
                <span>Anda Login sebagai <?php echo $level; ?> : <b> <?php echo $username; ?> </b></span>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="password" id="EMR_RAJAL_passDokPerawat" name="EMR_RAJAL_passDokPerawat" class="form-control">
                    <label for="form_control_1">Masukkan Password</label>
                    <span class="help-block">Masukkan Password</span>
                  </div>
                </div>
              </div>
              <div class="btn-group btn-group btn-group-justified">
                <a id="EMR_RAJAL_btnChangeDokPerawat" class="btn red"> Klik Disini Apabila Anda Perawat</a>
              </div>
            </div>
          </div>
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-body">
              <div class="row">
                <div id="alert-msg-PerawatEMR"></div>
                <div class="btn-group btn-group btn-group-justified">
                    <!--<button type="button" class="btn btn-default" style="width:50%" data-toggle="modal" href="#EMRmodalObatRajal">Batal</button>-->
                    <button type="button" class="btn green" id="EMR_RAJAL_btnSelanjutnyaPerawat" name="EMR_RAJAL_btnSelanjutnyaPerawat" style="width:100%">Selanjutnya</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="modalAlertCounter" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><center>Peringatan !!</center></h4>
            </div>
            <div class="modal-body">
              <center>
                Data pemeriksaan fisik yang anda isi belum lengkap, harap dilengkapkan kembali kedepannya. Untuk pelayanan yang lebih baik.
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                    <a type="button" id="btnAbaikanEMR" class="btn red" data-dismiss="modal" style="width:50%">Abaikan</a>
                    <a type="button" id="EMR_RAJAL_btnSebelumnyaDokter2" class="btn blue" data-dismiss="modal" style="width:50%">Kembali</a>
                </div>
              </center>
            </div>
          </div>
        </div>

        <div class="collapse" id="EMR_RAJAL_FrmRDokter">
          <div class="portlet box bg-green-jungle bg-font-green-jungle">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-gift"></i>Obat Pasien</div>
              <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""></a>
              </div>
            </div>
            <center>
              <a class="btn bg-green-jungle bg-font-green-jungle" value="Tambah Data" data-toggle="modal" href="#EMRmodalObatRajal" style="height:80px;"><center><font size=6.5><b><i class="fa fa-plus"></i> Masukkan Obat</b></font></center></a>
            </center>
              <div id="EMRmodalObatRajal" class="modal" data-width="100%" style="width:90%;">
                <div class="row">
                  <div class="col-md-4">
                    <div class="btn-group btn-group btn-group-justified" style="width:100%">
                      <button disable type="button" class="btn white" style="height:55px; width:30%">
                        <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                        <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                      </button>
                      <button disable type="button" class="btn white" style="height:55px; width:70%">
                        <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                        <span style="font-size:14px"><b><?php echo $jk,$nama?></b></span><br>
                      </button>
                    </div>
                  </div>
                  <div class="modal-header bg-blue bg-font-blue col-md-4">
                    <h4 class="modal-title"><center><b>Obat Pasien</b></center></h4>
                  </div>
                  <div class="col-md-4 bg-blue">
                    <div class="btn-group btn-group btn-group-justified" style="width:100%">
                      <a type="button" id="EMR_RAJAL_btnObatSatuan" class="btn disabled white" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Satuan</b></a>
                      <a type="button" id="EMR_RAJAL_btnObatRacik" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Racik</b></a>
                    </div>
                  </div>
                </div>
                <div class="modal-body">
                  <input type="hidden" id="EMR_RAJAL_statObat" value="Satuan">
                  <div class="row" id="EMR_RAJAL_formObatSatuan">
                    <div class="col-md-4">
                      <div class="portlet light bordered">
                        <!--<div class="portlet-title row">
                            <div class="caption font-red-sunglo col-md-8 col-sm-8 col-xs-8">
                                <i class="fa fa-gift font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase">Obat Ke - 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                              <a class="btn blue" name="tambahSatuan_rajal" value="Tambah Data" id="tambahSatuan_rajal"><i class="fa fa-plus"></i> Tambah</a>
                            </div>
                            <div class="tools col-md-1 col-sm-1 col-xs-1">
                              &nbsp;&nbsp;
                              <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                            </div>
                        </div>-->
                        <div class="portlet-title row">
                          <div class="caption font-red-sunglo col-md-8 col-sm-8 col-xs-8">
                              <i class="fa fa-gift font-red-sunglo"></i>
                              <span class="caption-subject bold uppercase">Obat Ke - 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                          </div>
                          <div class="tools col-md-1 col-sm-1 col-xs-1">
                            &nbsp;&nbsp;
                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                          </div>
                        </div>
                        <div class="portlet-body">
                            <div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-0.5em; margin-bottom: 1em;">
                              <div class="row mt-repeater-row">
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <label class="control-label" style="font-size:14px">Nama Obat</label>
                                    <input type="text" name="obatsatuanRajal[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>
                                    <input type="hidden" name="idobatsatuan_rajal[]" class="form-control project"/>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="control-label" style="font-size:14px">Jumlah Obat</label>
                                    <input type="text" id="jumlahsatuan_rajal" name="jumlahsatuan_rajal[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>
                                  </div>
                                  <!--<div class="form-group">
                                    <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                    <select id="aturanpakaisatuan2" name="aturanpakaisatuan2[]" class="form-control" data-size="2">
                                      <option value="" disabled selected>Aturan</option>
                                      <option value="Sebelum Makan">a.c</option>
                                      <option value="Saat Makan">d.c</option>
                                      <option value="Sesudah Makan">p.c</option>
                                    </select>
                                  </div>-->
                                </div>
                              </div>
                              <div class="row mt-repeater-row" style="position:relative; display: block; margin-bottom: -1em;">
                                <div class="col-md-4">
                                  <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                  <input type="text" id="aturanPakai_rajal_1" name="aturanPakai_rajal_1[]" placeholder="Aturan Pakai" class="form-control"/>
                                </div>
                                <div class="col-md-4">
                                  <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;</label>
                                  <input type="text" id="aturanPakai_rajal_2" name="aturanPakai_rajal_2[]" placeholder="Aturan Pakai" class="form-control"/>
                                </div>
                                <div class="col-md-4">
                                  <label class="control-label" style="font-size:14px">Ket.</label>
                                  <input type="text" id="keterangan_rajal" name="keterangan_rajal[]" placeholder="Ket" class="form-control" />
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div id="div1Satuan_rajal">
                    </div>
                    <div class="col-md-4" id="div_buttonSatuan_rajal">
                      <center>
                        <a class="btn green-jungle col-md-12" name="tambahSatuan_rajal" value="Tambah Data" id="tambahSatuan_rajal" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                      </center>
                    </div>
                  </div>
                  <div class="collapse" id="EMR_RAJAL_formObatRacik">
                    <div class="form-group mt-repeater row">
                      <div class="col-md-4">
                        <div class="portlet light">
                          <div class="portlet-title">
                            <div class="caption">
                              <i class="icon-puzzle font-grey-gallery"></i><span class="caption-subject bold font-grey-gallery uppercase"> Obat Racikan ke-1 </span>
                            </div>
                            <div class="tools">
                              <a href="" class="collapse" data-original-title="" title=""> </a>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="form-group mt-repeater">
                              <div class="row">
                                <div class="col-md-12">
                                  <div data-repeater-item class="mt-repeater-item">
                                    <div class="row mt-repeater-row">
                                      <div class="col-md-8">
                                        <label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>
                                        <input type="text" name="obatsatuanRacik_rajal[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                        <input type="hidden" name="idobatsatuanRacik_rajal[]" value="" class="form-control project_racik"/>
                                        <input type="hidden" value="RACIK_0001" id="idRacik_rajal" name="idRacik_rajal[]" class="form-control" />
                                      </div>
                                      <div class="col-md-4">
                                        <label class="control-label" style="font-size:14px">Jumlah</label>
                                        <input type="text" id="jumlahRacik_rajal" name="jumlahRacik_rajal[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="divracikBahan_rajal1"></div>
                                  <div id="div_buttonracikBahan_rajal1">
                                    <a class="btn blue tambahRacikBahan_rajal-click col-md-12" name="tambahRacikBahan_rajal" value="Tambah Data" data-todo='{"number":"1"}'><i class="fa fa-plus"></i> Tambah Bahan</a>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <label class="control-label" style="font-size:14px">Detail Obat</label>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <input type="text" id="jumlahRacik_rajal_2" name="jumlahRacik_rajal_2[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>
                                    </div>
                                    <div class="col-md-8">
                                      <input type="text" id="aturanpakaiRacik_rajal" name="aturanpakaiRacik_rajal[]" placeholder="Aturan Pakai" class="form-control" />
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <input type="text" id="aturanpakaiRacik_rajal_2" name="aturanpakaiRacik_rajal_2[]" placeholder="Aturan Pakai" class="form-control" />
                                    </div>
                                    <div class="col-md-8">
                                      <input type="text" id="keteranganRacik_rajal" name="keteranganRacik_rajal[]" placeholder="Keterangan" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="col-md-8">
                                      <input type="hidden" value="RACIK_0001" id="idRacik_rajal_2" name="idRacik_rajal_2[]" class="form-control" />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="divracikobat_rajal"></div>
                      <div class="col-md-4" id="div_buttonracikobat_rajal">
                        <center>
                          <a class="btn green-jungle col-md-12" name="tambahracikobat_rajal" value="Tambah Data" id="tambahracikobat_rajal" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" id="" data-dismiss="modal" class="btn blue">Tutup</button>
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
                <div class="form-group form-md-line-input has-success form-md-floating-label" id="EMR_RAJAL_passDokDokter2">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="password" id="EMR_RAJAL_passDokDokter" name="EMR_RAJAL_passDokDokter" class="form-control">
                    <label for="form_control_1">Masukkan Password</label>
                    <span class="help-block">Masukkan Password</span>
                  </div>
                </div>
              </div>
              <input type="hidden" id="EMR_RAJAL_PosisiHalaman" name="EMR_RAJAL_PosisiHalaman" value="Perawat">
              <input type="hidden" id="EMR_RAJAL_Norm" name="EMR_RAJAL_Norm" value="<?php echo $norm; ?>">
              <input type="hidden" id="EMR_RAJAL_Noreg" name="EMR_RAJAL_Noreg" value="<?php echo $noreg; ?>">
              <input type="hidden" id="EMR_RAJAL_Unit" name="EMR_RAJAL_Unit" value="<?php echo $namaunit; ?>">
              <input type="hidden" id="kodeunit_rajal" name="kodeunit_rajal" value="<?php echo $KodeUnit; ?>">
              <input type="hidden" id="userDokterRajal" name="userDokterRajal" value="<?php echo $username; ?>">
              <input type="text" id="idpemeriksaan" name="idpemeriksaan" value="<?php echo $id_pemeriksaan; ?>">
              <!--<input type="hidden" id="userPerawatRajal" name="" value="">-->
            </div>
          </div>
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-body">
              <div class="portlet-title">
                  <div class="caption">
                    <label class="mt-checkbox mt-checkbox-outline">
                    <input type="checkbox" id="suratsakit_rajal" name="suratsakit_rajal" value="Surat Sakit"><b>Surat Sakit</b>
                    <span></span>
                    </label>
                  </div>
              </div>
              <div class="row">
                <div id="alert-msg-DokterEMR"></div>
                <div class="btn-group btn-group-justified">
                    <button type="button" class="btn btn-default" id="EMR_RAJAL_btnSebelumnyaDokter" style="width:50%">Sebelumnya</button>
                    <button type="button" class="btn green" id="btnsimpanDokterEMR_Rajal" name="btnsimpanDokterEMR_Rajal" style="width:50%">Simpan</button>
                </div>
              </div>
            </div>
          </div>
          <div id="modalAlertCounter_dokter" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
            <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title"><center>Peringatan !!</center></h4>
              </div>
              <div class="modal-body">
                <center>
                  Data pemeriksaan dokter yang anda isi belum lengkap, harap dilengkapkan kembali agar data dapat disimpan.
                </center>
              </div>
              <div class="modal-footer">
                <center>
                  <div class="btn-group btn-group btn-group-justified" style="width:50%">
                      <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Kembali</a>
                  </div>
                </center>
              </div>
            </div>
          </div>
          <div id="EMRmodalRajal_Sukses" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
