
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
              <span class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">Electronic Medical Record</span>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                  <div class="row">

                    <div class="col-md-6">
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
                                    <input type="text" id="tekanandarah" name="tekanandarah" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">TD</label>
                                    <span class="help-block">Masukkan TD</span>
                                    <i style="font-size:12px"><b>mmHg</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="nadi" name="nadi" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">N</label>
                                    <span class="help-block">Masukkan N</span>
                                    <i style="font-size:12px"><b>x/mnt</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="suhutubuh" name="suhutubuh" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">t</label>
                                    <span class="help-block">Masukkan t</span>
                                    <i style="font-size:12px"><b>&deg;C</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="respiratory" name="respiratory" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">Rr</label>
                                    <span class="help-block">Masukkan Rr</span>
                                    <i style="font-size:12px"><b>x/mnt</b></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                          <div class="caption">
                            <span class="caption-subject font-dark bold">Nutrisi</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="beratbadan" name="beratbadan" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">BB</label>
                                    <span class="help-block">Masukkan BB</span>
                                    <i style="font-size:12px"><b>Kg</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="tinggibadan" name="tinggibadan" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">TB</label>
                                    <span class="help-block">Masukkan TB</span>
                                    <i style="font-size:12px"><b>cm</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="bmi" name="bmi" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">BMI</label>
                                    <span class="help-block">Masukkan BMI</span>
                                    <i style="font-size:12px"><b>Kg/m</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="lingkarkepala" name="lingkarkepala" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">Lingkar Kepala</label>
                                    <span class="help-block">Masukkan Lingkar Kepala (Khusus Bayi)</span>
                                    <i style="font-size:12px"><b>cm</b></i>
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
                            <span class="caption-subject font-dark bold">Fungsional</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="col-md-5">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="alatbantu" name="alatbantu" value="" class="form-control" maxlength="30">
                                    <label for="form_control_1">Alat bantu</label>
                                    <span class="help-block">Masukkan Data</span>
                                    <i style="font-size:12px"><b></b></i>
                                  </div>
                                </div>
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="prothesis" name="prothesis" value="" class="form-control" maxlength="30">
                                    <label for="form_control_1">Prothesis</label>
                                    <span class="help-block">Masukkan Data</span>
                                    <i style="font-size:12px"><b></b></i>
                                  </div>
                                </div>
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="cacattubuh" name="cacattubuh" value="" class="form-control" maxlength="30">
                                    <label for="form_control_1">Cacat tubuh</label>
                                    <span class="help-block">Masukkan Data</span>
                                    <i style="font-size:12px"><b></b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-7">
                                <span>
                                  <b>Pengkajian</b>
                                  </br>
                                  &nbsp;&nbsp;&nbsp;a. Cara berjalan Pasien
                                  </br>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Tidak seimbang / sempoyongan
                                  </br>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Jalan dengan menggunakan alat bantu
                                  </br>
                                  &nbsp;&nbsp;&nbsp;b. Menopang saat akan duduk
                                  </br>
                                  <b>Hasil</b>
                                  </br>
                                  &nbsp;&nbsp;&nbsp;1. Tidak Beresiko : Tidak ditemukan a dan b
                                  </br>
                                  &nbsp;&nbsp;&nbsp;2. Resiko Rendah : DItemukan salah satu a atau b
                                  </br>
                                  &nbsp;&nbsp;&nbsp;3. Resiko Tinggi : Ditemukan a dan b
                                  </br>
                                  <b>Tindakan</b>
                                  </br>
                                  &nbsp;&nbsp;&nbsp;1. Tidak Beresiko : Tidak ada tindakan
                                  </br>
                                  &nbsp;&nbsp;&nbsp;2. Resiko Rendah : Edukasi
                                  </br>
                                  &nbsp;&nbsp;&nbsp;3. Resiko Tinggi : Edukasi dan pasang pita kuning
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-12">
                        <h4>SKOR NYERI :</h4>
                        <div class="col-md-5">
                          <center>
                            <a id="EMR_ASESMEN_PERAWAT_btnSkorNyeri" class="btn bg-green-jungle bg-font-green-jungle" data-toggle="modal" href="#AsesmenModalSkorNyeri"><center><font size=6.5><b>Skor Nyeri</b></font></center></a>
                            </br>
                            <br>
                          </center>
                        </div>
                      </div>

                    <!-- Modals Skor Nyeri -->
                    <div id="AsesmenModalSkorNyeri" class="modal" data-width="100%" style="width:50%">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="btn-group btn-group btn-group-justified" style="width:100%">
                            <button disable typ"PERAWATton" class="btn white" style="height:55px; width:30%">
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
                          <h4 class="modal-title"><center><b>Skor Nyeri</b></center></h4>
                        </div>
                        <div class="col-md-4 bg-blue" style="height:56px;">

                        </div>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-4">

                            <div id="EMR_ASESMEN_PERAWAT_AppendHasilHeaderNyeriDepan"></div>
                            <div id="EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriDepan"></div>
                            <div id="EMR_ASESMEN_PERAWAT_AppendKeluhanNyeriDepan"></div>

                            <div id="EMR_ASESMEN_PERAWAT_AppendHasilHeaderNyeriBelakang"></div>
                            <div id="EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriBelakang"></div>
                            <div id="EMR_ASESMEN_PERAWAT_AppendKeluhanNyeriBelakang"></div>

                          </div>
                          <div class="col-md-4">
                            <center>
                              <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                                <a class="btn grey" id="EMR_ASESMEN_PERAWAT_btnGeserKiri" style="height:100%"> << Left </a>
                                <a class="btn grey" id="EMR_ASESMEN_PERAWAT_btnGeserKanan" style="height:100%"> Right >> </a>
                              </div>
                            </center>
                            <center>
                              <img id="EMR_ASESMEN_PERAWAT_GFrmSN" src="<?php echo base_url().'assets/pages/img/tubuh/Tubuh Depan.png'?>">
                            </center>
                          </div>
                          <div class="col-md-4 row">
                            <input type="hidden" id="EMR_ASESMEN_PERAWAT_JumlahData" value="0">
                            <center><h4><span><b>Nyeri Bagian : </b></span>
                            <span id="EMR_ASESMEN_PERAWAT_GstsFrmSN">Tubuh Depan</span></h4></center>
                            <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: 0em; border-style: inset; border-width: 1px; height:1px; width:100%">
                            </br>
                            <div class="col-md-12">
                              <center>
                                <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                                  <a class="btn blue disabled" id="EMR_ASESMEN_PERAWAT_btnTanya1" style="height:100%"> 1 </a>
                                  <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya2" style="height:100%"> 2 </a>
                                  <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya3" style="height:100%"> 3 </a>
                                  <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya4" style="height:100%"> 4 </a>
                                  <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya5" style="height:100%"> 5 </a>
                                  <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya6" style="height:100%"> 6 </a>
                                  <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya7" style="height:100%"> 7 </a>
                                </div>
                              </center>
                            </div>
                            </br>
                            <div class="col-md-12">
                            </br>
                              <center>
                                <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                                  <a class="btn white disabled" id="EMR_ASESMEN_PERAWAT_btnTanyaBack" style="height:100%"> << Back </a>
                                  <a class="btn blue" id="EMR_ASESMEN_PERAWAT_btnTanyaNext" style="height:100%"> Next >> </a>
                                </div>
                              </center>
                            </br>
                            </br>
                            </div>
                            <div class="col-md-12" id="EMR_ASESMEN_PERAWAT_FrmTanya1">
                              <span>1. Apakah Nyeri berpindah dari suatu tempat ke tempat lain?</span>
                              <center>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNpindahYA" name="EMR_ASESMEN_PERAWAT_RbtnSNpindah" class="md-radiobtn">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnSNpindahYA">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> YA </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNpindahTIDAK" name="EMR_ASESMEN_PERAWAT_RbtnSNpindah" class="md-radiobtn">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnSNpindahTIDAK">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> TIDAK </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </center>
                            </div>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya2">
                              <span>2. Sudah berapa lama anda merasakan nyeri?</span>
                              <center>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNakut" name="EMR_ASESMEN_PERAWAT_RbtnSNdurasi" class="md-radiobtn">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnSNakut">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> AKUT : < 3 bulan </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNkronik" name="EMR_ASESMEN_PERAWAT_RbtnSNdurasi" class="md-radiobtn">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnSNkronik">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> KRONIK : > 3 bulan </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </center>
                            </div>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya3">
                              <span>3. Setiap berapa waktu anda merasakan nyeri?</span>
                              <center>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap1" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap1">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> 1-2 Jam</label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap2" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap2">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> < 4 Jam</label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap3" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap3">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> > 4 Jam</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </center>
                            </div>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya4">
                              <span>4. Gambaran rasa nyeri?</span>
                              <center>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-5 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran1" name="" value="Nyeri Tumpul" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran1">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Nyeri tumpul </label>
                                    </div>
                                    <div class="col-md-5 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran2" name="" value="Seperti Ditarik" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran2">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Seperti Ditarik </label>
                                    </div>
                                  </div>
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-5 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran3" name="" value="Seperti Ditusuk" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran3">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Seperti Ditusuk</label>
                                    </div>
                                    <div class="col-md-5 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran4" name="" value="Seperti Dipukul" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran4">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Seperti Dipukul </label>
                                    </div>
                                  </div>
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-5 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran5" name="" value="Seperti Dibakar" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran5">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Seperti Dibakar </label>
                                    </div>
                                    <div class="col-md-5 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran6" name="" value="Seperti Berdenyut" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran6">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Seperti Berdenyut </label>
                                    </div>
                                  </div>
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-5 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran7" name="" value="Seperti Ditikam" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran7">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Seperti Ditikam </label>
                                    </div>
                                    <div class="col-md-5 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran8" name="" value="Seperti Kram" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran8">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Seperti Kram </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </center>
                            </div>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya5">
                              <span>5. Berapa lamanya waktu anda merasakan nyeri?</span>
                              <center>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNlama1" name="EMR_ASESMEN_PERAWAT_RbtnSNlama" class="md-radiobtn">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnSNlama1">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> < 30 menit</label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNlama2" name="EMR_ASESMEN_PERAWAT_RbtnSNlama" class="md-radiobtn">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnSNlama2">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> > 30 menit</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </center>
                            </div>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya6">
                              <span>6A. Apa yang membuat nyeri berkurang?</span>
                              <center>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-12 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang1" name="" value="Nyeri berkurang dengan kompres dingin" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang1">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Kompres dingin </label>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang2" name="" value="Nyeri berkurang dengan komres hangat" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang2">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Kompres hangat </label>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang3" name="" value="Nyeri berkurang dengan istirahat" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang3">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Istirahat </label>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang4" name="" value="Nyeri berkurang dengan minum obat" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang4">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Minum Obat </label>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang5" name="" value="Nyeri berkurang dengan berubah posisi" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang5">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Berubah posisi </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </center>
                              <span>6B. Apa yang membuat nyeri bertambah?</span>
                              <center>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-12 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambah1" name="" value="Nyeri bertambah dengan kompres dingin" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnBertambah1">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Kompres dingin </label>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambah2" name="" value="Nyeri bertambah dengan komres hangat" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnBertambah2">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Kompres hangat </label>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambah3" name="" value="Nyeri bertambah dengan istirahat" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnBertambah3">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Istirahat </label>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambah4" name="" value="Nyeri bertambah dengan minum obat" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnBertambah4">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Minum Obat </label>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambah5" name="" value="Nyeri bertambah dengan berubah posisi" class="md-check">
                                      <label for="EMR_ASESMEN_PERAWAT_CbtnBertambah5">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Berubah posisi </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </center>
                            </div>
                            <div class="col-md-12 form-group form-md-line-input has-success form-md-floating-label collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya7">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASESMEN_PERAWAT_LokasiSN" class="form-control">
                                <label for="form_control">Lokasi</label>
                                <span class="help-block">Lokasi trauma</span>
                              </div>
                            </div>
                          </br>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya8">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-8">
                                  <input type="range" id="SkorNyeri" value="0" name="SkorNyeri" min="0" max="10" data-rangeSlider></input>
                                </br><center><b><h4><span>Skala Nyeri : </span><span id="EMR_ASESMEN_PERAWAT_NilaiSN"> 0 </span></h4></b></center>
                                </div>
                                <div class="col-md-4">
                                  <center><img id="Gskor" src="<?php echo base_url().'assets/pages/img/Icon/emot01.png'?>" style="width:90%"></center>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya9">
                              <center>
                                <a class="btn green-jungle col-md-12" name="insertNyeri" value="Tambah Data" id="insertNyeri"> <i class="fa fa-plus"></i> <b>Tampung Keluhan</b></a>
                              </center>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <center>
                          <div class="btn-group btn-group btn-group-justified" style="width:50%">
                            <button class="btn red" data-toggle="modal" href="#modalBatalSN" style="width:50%">Batal</button>
                            <button class="btn blue" id="EMR_ASESMEN_PERAWAT_btnSimpanModalSN" style="width:50%" data-dismiss="modal">Simpan</button>
                          </div>
                        </center>
                      </div>
                    </div>
                    <div id="modalBatalSN" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><center>Peringatan !!</center></h4>
                        </div>
                        <div class="modal-body">
                          <center>
                            Data keluhan Skor Nyeri yang anda isi tidak akan tersimpan apabila anda membatalkannya.</br><h4><b>Batalkan Skor Nyeri??</b></h4>
                          </center>
                        </div>
                        <div class="modal-footer">
                          <center>
                            <div class="btn-group btn-group btn-group-justified" style="width:50%">
                              <a type="button" id="EMR_ASESMEN_PERAWAT_btnBatalModalSN" class="btn red" data-dismiss="modal" style="width:50%">Ya</a>
                              <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tidak</a>
                            </div>
                          </center>
                        </div>
                      </div>
                    </div>
                    <div id="modalKosongSN" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><center>Peringatan !!</center></h4>
                        </div>
                        <div class="modal-body">
                          <center>
                            Anda belum mengisi data keluhan pasien, coba klik salah satu bagian tubuh pada gambar apabila anda belum menemukan kolom keluhan.</br><h4><b>Batalkan Skor Nyeri??</b></h4>
                          </center>
                        </div>
                        <div class="modal-footer">
                          <center>
                            <div class="btn-group btn-group btn-group-justified" style="width:50%">
                                <a type="button" id="EMR_ASESMEN_PERAWAT_btnBatalModalSN2" class="btn red" data-dismiss="modal" style="width:50%">Ya</a>
                                <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tidak</a>
                            </div>
                          </center>
                        </div>
                      </div>
                    </div>
                    <div id="modalKosongKeluhandanSN" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><center>Peringatan !!</center></h4>
                        </div>
                        <div class="modal-body">
                          <center>
                            Anda belum mengisi data keluhan pasien, anda perlu mengisi kolom keluhan dan lokasi untuk dapat ditampung.
                          </center>
                        </div>
                        <div class="modal-footer">
                          <center>
                            <div class="btn-group btn-group btn-group-justified" style="width:50%">
                                <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tutup</a>
                            </div>
                          </center>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
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
        <div class="portlet light portlet-fit bordered">
          <div class="portlet-title">
            <span><b>Catatan</b></span>
          </div>
          <div class="portlet-body">
            <div class="form-group form-md-line-input form-md-floating-label">
              <textarea class="form-control" id="catatan" name="catatan" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
              <label for="form_control_1">Textarea input</label>
            </div>
          </div>
        </div>
        <div class="portlet light portlet-fit bordered">
          <div class="portlet-title">
            <span><b>Penanggung jawab pengisi data :</b></span>
          </div>
          <div class="row portlet-body">
            <div class="col-sm-12">
              <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data berikut, masukkan password anda terlebih dahulu sebagai proses verifikasi penginput data</p>
              <div class="form-group form-md-line-input has-success form-md-floating-label">
                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                  <input type="password" id="VerPassAsesmen" name="VerPassAsesmen" class="form-control">
                  <label for="form_control_1">Masukkan Password</label>
                  <span class="help-block">Masukkan password</span>
                </div>
              </div>
            </div>
            <input type="hidden" id="norm2" name="norm2" value="<?php echo $norm; ?>">
            <input type="hidden" id="noreg2" name="noreg2" value="<?php echo $noreg; ?>">
            <input type="hidden" id="unitlayanan" name="unitlayanan" value="<?php echo $KodeUnit; ?>">
            <input type="hidden" id="tanggungjawab" name="tanggungjawab" value="<?php echo $username; ?>">
            <div class="btn-group btn-group btn-group-justified" id="btnbukan">
              <a data-target="#modalLogoutBukan" data-toggle="modal" class="btn red"> Saya bukan <?php echo $username; ?></a>
              <!--<a href="<?php echo site_url('login/logout') ?>" class="btn red"> Saya bukan <?php echo $username; ?></a>-->
            </div>
            <div id="modalLogoutBukan" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
              <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><center><b>Anda yakin bukan <?php echo $username; ?>?</b></center></h4>
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
          </div>
        </div>
        <div class="portlet light portlet-fit bordered">
          <div class="portlet-body">
            <div class="row">
              <div id="alert-msg-versimpan"></div>
              <div class="btn-group btn-group btn-group-justified">
                  <!--<button type="button" class="btn blue" style="width:50%" id="btnsimpanasesmen" name="btnsimpanasesmen">Simpan</button>
                  <button type="button" class="btn red" style="width:50%">Batal</button>-->
                  <button type="button" class="btn btn-default" style="width:50%">Batal</button>
                  <button type="button" class="btn green" id="btnsimpanasesmen" name="btnsimpanasesmen" style="width:50%">Simpan</button>
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
        <div id="modalAlertTambah" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><center>Peringatan !!</center></h4>
            </div>
            <div class="modal-body">
              <center>
                Data asesmen keperawatan yang anda isi belum lengkap, harap dilengkapkan kembali.
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
      </div>
    </div>
  </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
