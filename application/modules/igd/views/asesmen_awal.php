
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content" style="background-color:#BFBFBF;">
    <input type="hidden" id="EMR_ASESMEN_AWAL_NamaDokter" name="EMR_ASESMEN_AWAL_NamaDokter" value="<?php echo $namadokter; ?>" class="form-control">
    <input type="hidden" id="EMR_ASESMEN_AWAL_KodeDokter" name="EMR_ASESMEN_AWAL_KodeDokter" value="<?php echo $kodedokter; ?>" class="form-control">
    <input type="hidden" id="EMR_ASESMEN_umur" name="EMR_ASESMEN_PERAWAT_umur" value="<?php echo $Utahun ?>" class="form-control">
    <div class="row">
      <div class="col-md-8">
        <div class="portlet light bordered">
          <div class="caption font-red-sunglo">
            <center><span id="EMR_ASESMEN_AWAL_judulHalaman" class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">ASESMEN AWAL KEPERAWATAN PASIEN RAWAT JALAN</span></center>
          </div>
        </div>
        <div id="EMR_ASESMEN_AWAL_HalamanPerawat">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman1" class="btn white col-md-7">1. Hambatan Komunikasi</button>
              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman2" class="btn green col-md-1">2</button>
              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman3" class="btn green col-md-1">3</button>
              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman4" class="btn green col-md-1">4</button>
              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman5" class="btn green col-md-1">5</button>
              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman6" class="btn green col-md-1">6</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_ASESMEN_PERAWAT_Halaman1">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-12">
                              <span>Apakah Pasien Memiliki Hambatan Komunikasi?</span>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnHambatanYA" name="EMR_ASESMEN_PERAWAT_RbtnHambatan" class="md-radiobtn" value="Ya">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnHambatanYA">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Ya </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnHambatanTIDAK" name="EMR_ASESMEN_PERAWAT_RbtnHambatan" class="md-radiobtn" value="Tidak">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnHambatanTIDAK">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tidak </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="EMR_ASESMEN_PERAWAT_InputHambatanKom" class="form-group collapse">
                              </br>
                              <label for="form_control_1">Masukkan Bahasa</label>
                              <input type="text" id="EMR_ASESMEN_PERAWAT_hambatanBahasa" name="EMR_ASESMEN_PERAWAT_hambatanBahasa" value="" class="form-control">
                              <input type="hidden" id="EMR_ASESMEN_PERAWAT_hambatanBahasastatus" name="EMR_ASESMEN_PERAWAT_hambatanBahasastatus" value="Tidak" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_Halaman2">
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
                              <div class="col-md-6 portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                  <div class="caption">
                                    <span class="caption-subject font-dark bold">TD</span>
                                  </div>
                                </div>
                                <div class="portlet-body">
                                  <div class="tab-content">
                                    <div class="col-md-6">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASESMEN_PERAWAT_TDSistolik" name="EMR_ASESMEN_PERAWAT_TDSistolik" value="" class="form-control">
                                          <label for="form_control_1">Sistolik</label>
                                          <span class="help-block">Masukkan Sistolik</span>
                                          <i style="font-size:12px"><b>mmHg&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</b></i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASESMEN_PERAWAT_TDDiastolik" name="EMR_ASESMEN_PERAWAT_TDDiastolik" value="" class="form-control">
                                          <label for="form_control_1">Diastolik</label>
                                          <span class="help-block">Masukkan Diastolik</span>
                                          <i style="font-size:12px"><b>mmHg</b></i>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                  <div class="caption">
                                    <span class="caption-subject font-dark bold">N</span>
                                  </div>
                                </div>
                                <div class="portlet-body">
                                  <div class="tab-content">
                                    <div class="col-md-6">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASESMEN_PERAWAT_nadi" name="EMR_ASESMEN_PERAWAT_nadi" value="" class="form-control">
                                          <label for="form_control_1">N</label>
                                          <span class="help-block">Masukkan N</span>
                                          <i style="font-size:12px"><b>x/mnt</b></i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="md-radio-inline">
                                          <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_NadiCH_reguler" name="EMR_ASESMEN_PERAWAT_NadiCH" class="md-radiobtn" value="Reguler">
                                              <label for="EMR_ASESMEN_PERAWAT_NadiCH_reguler">
                                                  <span class="inc"></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Reguler </label>
                                          </div>
                                          <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_NadiCH_irreguler" name="EMR_ASESMEN_PERAWAT_NadiCH" class="md-radiobtn" value="Irreguler">
                                              <label for="EMR_ASESMEN_PERAWAT_NadiCH_irreguler">
                                                  <span class="inc"></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Irreguler </label>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                  <div class="caption">
                                    <span class="caption-subject font-dark bold">t</span>
                                  </div>
                                </div>
                                <div class="portlet-body">
                                  <div class="tab-content">
                                    <div class="col-md-12">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASESMEN_PERAWAT_suhutubuh" name="EMR_ASESMEN_PERAWAT_suhutubuh" value="" class="form-control">
                                          <label for="form_control_1">t</label>
                                          <span class="help-block">Masukkan t</span>
                                          <i style="font-size:12px"><b>&deg;C</b></i>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                  <div class="caption">
                                    <span class="caption-subject font-dark bold">Rr</span>
                                  </div>
                                </div>
                                <div class="portlet-body">
                                  <div class="tab-content">
                                    <div class="col-md-6">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASESMEN_PERAWAT_respiratory" name="EMR_ASESMEN_PERAWAT_respiratory" value="" class="form-control">
                                          <label for="form_control_1">Rr</label>
                                          <span class="help-block">Masukkan Rr</span>
                                          <i style="font-size:12px"><b>x/mnt</b></i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="md-radio-inline">
                                          <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_RespiratoryCH_teratur" name="EMR_ASESMEN_PERAWAT_RespiratoryCH" class="md-radiobtn" value="Teratur">
                                              <label for="EMR_ASESMEN_PERAWAT_RespiratoryCH_teratur">
                                                  <span class="inc"></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Teratur </label>
                                          </div>
                                          <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_RespiratoryCH_titeratur" name="EMR_ASESMEN_PERAWAT_RespiratoryCH" class="md-radiobtn" value="Tidak Teratur">
                                              <label for="EMR_ASESMEN_PERAWAT_RespiratoryCH_titeratur">
                                                  <span class="inc"></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Tidak Teratur </label>
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
                    <div class="col-md-12">
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
                                    <input type="text" id="EMR_ASESMEN_PERAWAT_beratbadan" name="EMR_ASESMEN_PERAWAT_beratbadan" value="" class="form-control">
                                    <label for="form_control_1">BB</label>
                                    <span class="help-block">Masukkan BB</span>
                                    <i style="font-size:12px"><b>Kg</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASESMEN_PERAWAT_tinggibadan" name="EMR_ASESMEN_PERAWAT_tinggibadan" value="" class="form-control">
                                    <label for="form_control_1">TB</label>
                                    <span class="help-block">Masukkan TB</span>
                                    <i style="font-size:12px"><b>cm</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <span>Nilai BMI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><b><span id="EMR_ASESMEN_PERAWAT_Nilai_BMI">0 Kg/m<sup>2</sup></span></b></br>
                                    <input type="hidden" id="EMR_ASESMEN_PERAWAT_Nilai_BMI_text" name="EMR_ASESMEN_PERAWAT_Nilai_BMI_text" value="" class="form-control">
                                    <span>Kategori BMI : </span><b><span id="EMR_ASESMEN_PERAWAT_Kategori_BMI"></span></b>
                                    <input type="hidden" id="EMR_ASESMEN_PERAWAT_Kategori_BMI_text" name="EMR_ASESMEN_PERAWAT_Kategori_BMI_text" value="" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <input type="hidden" id="EMR_ASESMEN_PERAWAT_umur_Lingkar" name="EMR_ASESMEN_PERAWAT_umur_Lingkar" value="<?php echo $Utahun ?>" class="form-control">
                              <?php
                              if($Utahun < 1)
                              {
                                ?>
                                <div class="col-md-6">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="EMR_ASESMEN_PERAWAT_lingkarkepala" name="EMR_ASESMEN_PERAWAT_lingkarkepala" value="" class="form-control">
                                      <label for="form_control_1">Lingkar Kepala</label>
                                      <span class="help-block">Masukkan Lingkar Kepala (Khusus Bayi)</span>
                                      <i style="font-size:12px"><b>cm</b></i>
                                    </div>
                                  </div>
                                </div>
                                <?php
                              }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_Halaman3">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="col-md-12">
                                <input class="hidden" id="tindak">
                                a. Aktifitas sehari hari
                                <div class="row md-radio-inline">

                                    <div class="col-md-12 md-radio">
                                        <input type="radio" id="EMR_ASESMEN_PERAWAT_FungA3" name="EMR_ASESMEN_PERAWAT_FungA" class="md-radiobtn" value="Jalan Dengan Menggunakan Alat Bantu. ">
                                        <label for="EMR_ASESMEN_PERAWAT_FungA3">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Dengan bantuan </label>
                                    </div>
                                    <input type="text" id="EMR_ASESMEN_PERAWAT_alatbantu" name="EMR_ASESMEN_PERAWAT_alatbantu" value="" class="form-control collapse" placeholder="Alat bantu yang digunakan pasien">
                                    <input type="hidden" id="EMR_ASESMEN_PERAWAT_alatbantustatus" name="EMR_ASESMEN_PERAWAT_alatbantustatus" value="Tidak" class="form-control">
                                    <div class="col-md-12 md-radio">
                                        <input type="radio" id="EMR_ASESMEN_PERAWAT_FungA1" name="EMR_ASESMEN_PERAWAT_FungA" class="md-radiobtn" value="Normal">
                                        <label for="EMR_ASESMEN_PERAWAT_FungA1">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Mandiri </label>
                                    </div>
                                </div>
                                b. Pengkajian resiko pasien jatuh?
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_FungBYA" name="EMR_ASESMEN_PERAWAT_FungB" class="md-radiobtn" value="Ya">
                                    <label for="EMR_ASESMEN_PERAWAT_FungBYA">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_FungBTD" name="EMR_ASESMEN_PERAWAT_FungB" class="md-radiobtn" value="Tidak">
                                    <label for="EMR_ASESMEN_PERAWAT_FungBTD">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak </label>
                                  </div>
                                </div>
                                c. Risiko Dekubitus?
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_FungCYA" name="EMR_ASESMEN_PERAWAT_FungC" class="md-radiobtn" value="Ya">
                                    <label for="EMR_ASESMEN_PERAWAT_FungCYA">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_FungCTD" name="EMR_ASESMEN_PERAWAT_FungC" class="md-radiobtn" value="Tidak">
                                    <label for="EMR_ASESMEN_PERAWAT_FungCTD">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak </label>
                                  </div>
                                </div>
                                d. Status Kehamilan?
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_FungDYA" name="EMR_ASESMEN_PERAWAT_FungD" class="md-radiobtn" value="Ya">
                                    <label for="EMR_ASESMEN_PERAWAT_FungDYA">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak Hamil </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_FungDTD" name="EMR_ASESMEN_PERAWAT_FungD" class="md-radiobtn" value="Tidak">
                                    <label for="EMR_ASESMEN_PERAWAT_FungDTD">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Hamil </label>
                                  </div>
                                </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FungHamil">
                                  <input type="text" id="EMR_ASESMEN_PERAWAT_FungGravida" name="EMR_ASESMEN_PERAWAT_Fung" value="" class="form-control collapse" placeholder="Gravida">
                                  <input type="text" id="EMR_ASESMEN_PERAWAT_FungPara" name="EMR_ASESMEN_PERAWAT_Fung" value="" class="form-control collapse" placeholder="Para">
                                  <input type="text" id="EMR_ASESMEN_PERAWAT_FungAbortus" name="EMR_ASESMEN_PERAWAT_Fung" value="" class="form-control collapse" placeholder="Abortus">
                                  <input type="text" id="EMR_ASESMEN_PERAWAT_FungHPHT" name="EMR_ASESMEN_PERAWAT_Fung" value="" class="form-control collapse" placeholder="HPHT">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-12">
                              Hasil asesmen risiko :
                              <span id="EMR_ASESMEN_PERAWAT_FungHasil"><b> Tidak berisiko </b></span>
                              <input type="hidden" id="EMR_ASESMEN_PERAWAT_FungHasil_text" name="EMR_ASESMEN_PERAWAT_FungHasil_text" value="" class="form-control">
                            </div>
                            <div class="col-md-12">
                              Tindakan pencegahan risiko yg perlu dilakukan :
                              <span id="EMR_ASESMEN_PERAWAT_FungTindakan"><b> Tidak ada tindakan </b></span>
                              <input type="hidden" id="EMR_ASESMEN_PERAWAT_FungTindakan_text" name="EMR_ASESMEN_PERAWAT_FungTindakan_text" value="" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_Halaman4">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <span>Apakah Pasien Memiliki Keluhan Nyeri?</span>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="md-radio-inline">
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_PERAWAT_SN1Ada" name="EMR_ASESMEN_PERAWAT_adaNyeri" class="md-radiobtn" value="Ya">
                                <label for="EMR_ASESMEN_PERAWAT_SN1Ada">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Ya </label>
                              </div>
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_PERAWAT_SN1Takda" name="EMR_ASESMEN_PERAWAT_adaNyeri" class="md-radiobtn" value="Tidak">
                                <label for="EMR_ASESMEN_PERAWAT_SN1Takda">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Tidak </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" id="EMR_ASESMEN_PERAWAT_SN_statadaNyeri" name="EMR_ASESMEN_PERAWAT_SN_statadaNyeri" value="Tidak">
                      <div class="col-md-12 portlet light bordered collapse" id="EMR_ASESMEN_PERAWAT_SN1Takda2">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <input type="hidden" id="EMR_ASESMEN_PERAWAT_nyeri_ada_focus" name="EMR_ASESMEN_PERAWAT_nyeri_ada_focus" value="">
                            <input type="hidden" id="EMR_ASESMEN_PERAWAT_umur_skala" name="EMR_ASESMEN_PERAWAT_umur_skala" value="<?php echo $Utahun ?>">
                            <?php
                            if($Utahun < 1)
                            {?>
                              <div class="col-md-12" id="EMR_ASESMEN_PERAWAT_SN1_1">
                                a. Facial Expression (ekspresi wajah)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSA1" name="EMR_ASESMEN_PERAWAT_SN_NIPSA" value="Relaxed (Wajah Tenang, Ekspresi Netral)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (wajah tenang, ekspresi netral) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSA2" name="EMR_ASESMEN_PERAWAT_SN_NIPSA" value="Grimace (Otot Wajah Tegang, Alis Berkerut, Dagu Dan Rahang Tegang)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Grimace (otot wajah tegang, alis berkerut, dagu dan rahang tegang) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN1_2">
                                b. Cry (menangis)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSB1" name="EMR_ASESMEN_PERAWAT_SN_NIPSB" value="No Cry (Tenang, Tidak Menangis)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> No cry (tenang, tidak menangis) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSB2" name="EMR_ASESMEN_PERAWAT_SN_NIPSB" value="Whimper (Merengek Ringan, Kadang-Kadang)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Whimper (merengek ringan, kadang-kadang) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSB3" name="EMR_ASESMEN_PERAWAT_SN_NIPSB" value="Vigorour Crying (Berteriak Kencang, Menarik, Melengking Terus-Terusan)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSB3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>Vigorour crying (berteriak kencang, menarik, melengking terus-terusan)</label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN1_3">
                                c. Breathing Patterns (pola pernafasan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSC1" name="EMR_ASESMEN_PERAWAT_SN_NIPSC" value="Relaxed (Pola Pernafasan Bayi Normal)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSC1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (Pola pernafasan bayi normal) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSC2" name="EMR_ASESMEN_PERAWAT_SN_NIPSC" value="Change In Breathing (Tidak Teratur, Lebih Cepat Dari Biasanya, Tersedak, Nafas Tertahan)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSC2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Change in breathing (tidak teratur, lebih cepat dari biasanya, tersedak, nafas tertahan) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN1_4">
                                d. Arms(lengan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSD1" name="EMR_ASESMEN_PERAWAT_SN_NIPSD" value="Restrained (Tidak Ada Kekakuan Otot)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSD1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSD2" name="EMR_ASESMEN_PERAWAT_SN_NIPSD" value="Relaxed (Gerakan Tangan Acak Sesekali)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSD2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (gerakan tangan acak sesekali) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSD3" name="EMR_ASESMEN_PERAWAT_SN_NIPSD" value="Flexed (Tegang, Lengan Lurus, Kaku Dan Atau Fleksi)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSD3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Flexed (Tegang, lengan lurus, kaku dan atau fleksi) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSD4" name="EMR_ASESMEN_PERAWAT_SN_NIPSD" value="Extended (Tegang, Lengan Lurus, Kaku Dan Atau Ekstensi)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSD4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Extended (Tegang, lengan lurus, kaku dan atau ekstensi) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN1_5">
                                e. Legs(kaki)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSE1" name="EMR_ASESMEN_PERAWAT_SN_NIPSE" value="Restrained (Tidak Ada Kekakuan Otot)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSE1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSE2" name="EMR_ASESMEN_PERAWAT_SN_NIPSE" value="Relaxed (Gerakan Tangan Acak Sesekali)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSE2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (gerakan kaki acak sesekali) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSE3" name="EMR_ASESMEN_PERAWAT_SN_NIPSE" value="Flexed (Tegang, Lengan Lurus, Kaku Dan Atau Fleksi)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSE3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Flexed (Tegang, kaki lurus, kaku dan atau fleksi) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSE4" name="EMR_ASESMEN_PERAWAT_SN_NIPSE" value="Extended (Tegang, Lengan Lurus, Kaku Dan Atau Ekstensi)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSE4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Extended (Tegang, kaki lurus, kaku dan atau ekstensi) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN1_6">
                                f. State of Arousal (kesadaran)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSF1" name="EMR_ASESMEN_PERAWAT_SN_NIPSF" value="Sleeping (Tenang, Tidur Damai)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSF1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sleeping (tenang, tidur damai) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSF2" name="EMR_ASESMEN_PERAWAT_SN_NIPSF" value="Awake (Tenang, Tidak Tidur/Bangun, Gerakan Kaki Acak Yang Terjaga)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSF2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Awake (Tenang, tidak tidur/Bangun, gerakan kaki acak yang terjaga) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSF3" name="EMR_ASESMEN_PERAWAT_SN_NIPSF" value="Fussy (Rewel, Gelisah Dan Meronta-Ronta)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSF3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Fussy (rewel, gelisah dan meronta-ronta) </label>
                                  </div>
                                </div>
                              </div>
                            <?php
                            }
                            else if($Utahun < 4)
                            {?>
                              <div class="col-md-12" id="EMR_ASESMEN_PERAWAT_SN2_1">
                                a. Face Expression (ekspresi wajah)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCA1" name="EMR_ASESMEN_PERAWAT_SN_FLACCA" value="Tidak Ada Ekspresi Tertentu Atau Senyum, Kontak Mata" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak ada ekspresi tertentu atau senyum, kontak mata </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCA2" name="EMR_ASESMEN_PERAWAT_SN_FLACCA" value="Kadang Meringis Atau Mengerutkan Kening, Menarik Diri, Tidak Tertarik, Wajah Terlihat Cemas, Alis Diturunkan, Maka Sebagian Tertutup, Pipi Terangkat, Mulut Mengerut" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Kadang meringis atau mengerutkan kening, menarik diri, tidak tertarik, wajah terlihat cemas, alis diturunkan, maka sebagian tertutup, pipi terangkat, mulut mengerut </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCA3" name="EMR_ASESMEN_PERAWAT_SN_FLACCA" value="Sering Cemberut, Konstan, Rahangter Katup. Dagu Bergetar, Kerutan Yang Dalam Di Dahi, Mata Tertutup, Mulut Terbuka, Garis Yang Dalam Di Sekitar Hidung/Bibir" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCA3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sering cemberut, konstan, rahangter katup. Dagu bergetar, kerutan yang dalam di dahi, mata tertutup, mulut terbuka, garis yang dalam di sekitar hidung/bibir </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN2_2">
                                b. Leg (Kaki)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCB1" name="EMR_ASESMEN_PERAWAT_SN_FLACCB" value="Posisi Normal Atau Santai" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Posisi normal atau santai </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCB2" name="EMR_ASESMEN_PERAWAT_SN_FLACCB" value="Tidak Nyaman, Gelisah, Tegang, Tonus Meningkat, Kaku/Flexi/Ekstensi Anggota Badan Intermitten" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak nyaman, gelisah, tegang, tonus meningkat, kaku/flexi/ekstensi anggota badan intermitten </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCB3" name="EMR_ASESMEN_PERAWAT_SN_FLACCB" value="Menendang Atau Kaki Disusun, Hipertonis Fleksi/Ekstensi Anggota Badan Secara Berlebihan" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCB3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Menendang atau kaki disusun, hipertonis fleksi/ekstensi anggota badan secara berlebihan </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN2_3">
                                c. Activity (Aktivitas)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCC1" name="EMR_ASESMEN_PERAWAT_SN_FLACCC" value="Berbaring Dengan Tenang, Posisi Normal, Bergerak Dengan Bebas Dan Mudah" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCC1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Berbaring dengan tenang, posisi normal, bergerak dengan bebas dan mudah </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCC2" name="EMR_ASESMEN_PERAWAT_SN_FLACCC" value="Menggeliat, Menggeser Maju Mundur, Tegang, Ragu-Ragu Untuk Bergerak, Menjaga Tekanan Pada Bagian Tubuh" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCC2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Menggeliat, menggeser maju mundur, tegang, ragu-ragu untuk bergerak, menjaga tekanan pada bagian tubuh </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCC3" name="EMR_ASESMEN_PERAWAT_SN_FLACCC" value="Melengkung, Kaku Atau Menyentak, Posisi Tetap, Goyang Gerakan Kepala Dari Sisi Ke Sisi, Menggosok Bagian Tubuh" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCC3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Melengkung, kaku atau menyentak, posisi tetap, goyang gerakan kepala dari sisi ke sisi, menggosok bagian tubuh </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN2_4">
                                d. Cry (Menangis)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCD1" name="EMR_ASESMEN_PERAWAT_SN_FLACCD" value="Tidak Ada Teriakan/Erangan (Terjaga/Tertidur)" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCD1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Tidak ada teriakan/erangan (terjaga/tertidur) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCD2" name="EMR_ASESMEN_PERAWAT_SN_FLACCD" value="Erangan/Rengekan, Sesekali Menangis, Sesekali Mengeluh" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCD2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Erangan/rengekan, sesekali menangis, sesekali mengeluh </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCD3" name="EMR_ASESMEN_PERAWAT_SN_FLACCD" value="Terus Menerus Menangis, Menjerit, Isak Tangis, Mengeram-Ngeram, Sering Mengeluh" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCD3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Terus menerus menangis, menjerit, isak tangis, mengeram-ngeram, sering mengeluh </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN2_5">
                                e. Consolalability (respon terhadap himbauan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCE1" name="EMR_ASESMEN_PERAWAT_SN_FLACCE" value="Tenang, Santai, Tidak Perlu Di Hibur" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCE1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Tenang, santai, tidak perlu di hibur </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCE2" name="EMR_ASESMEN_PERAWAT_SN_FLACCE" value="Perlu Keyakinan Dengan Sesekali Menyentuh, Sekali-Kali Memeluk Atau Berbicara. Perhatian Mudah Beralih" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCE2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Perlu keyakinan dengan sesekali menyentuh, sekali-kali memeluk atau berbicara. Perhatian mudah beralih </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCE3" name="EMR_ASESMEN_PERAWAT_SN_FLACCE" value="Sulit Untuk Di Bujuk Atau Di Buat Nyaman" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCE3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Sulit untuk di bujuk atau di buat nyaman </label>
                                  </div>
                                </div>
                              </div>
                            <?php
                            }
                            else
                            {?>
                              <div class="col-md-12" id="EMR_ASESMEN_PERAWAT_SN3_1" >
                                <span>Apa yang membuat nyeri bertambah parah?</span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambahParah1" name="EMR_ASESMEN_PERAWAT_CbtnBertambahParah1" value="Tidak Ada Penyebab Khusus" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnBertambahParah1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak ada penyebab khusus </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambahParah2" name="EMR_ASESMEN_PERAWAT_CbtnBertambahParah2" value="Berubah Posisi" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnBertambahParah2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Berubah posisi  </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_ASESMEN_PERAWAT_textBertambahParah" name="EMR_ASESMEN_PERAWAT_textBertambahParah" value="" class="form-control collapse" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                                <span>Apa yang membuat nyeri berkurang?</span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang1" name="EMR_ASESMEN_PERAWAT_CbtnBerkurang1" value="Kompres Hangat/Dingin" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Kompres hangat/dingin </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang2" name="EMR_ASESMEN_PERAWAT_CbtnBerkurang2" value="Istirahat" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Istirahat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang3" name="EMR_ASESMEN_PERAWAT_CbtnBerkurang3" value="Minum Obat" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Minum obat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang4" name="EMR_ASESMEN_PERAWAT_CbtnBerkurang4" value="Berubah Posisi" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang4">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Berubah posisi </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang5" name="EMR_ASESMEN_PERAWAT_CbtnBerkurang5" value="Tidak Ada" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang5">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak ada </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_ASESMEN_PERAWAT_textBertambahParah2" name="EMR_ASESMEN_PERAWAT_textBertambahParah2" value="" class="form-control collapse" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN3_2">
                                <span>Gambaran rasa nyeri?</span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran1" name="EMR_ASESMEN_PERAWAT_CbtnGambaran1" value="Seperti Ditimpa Benda Berat" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti ditimpa benda berat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran2" name="EMR_ASESMEN_PERAWAT_CbtnGambaran2" value="Seperti Ditarik" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Ditarik </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran3" name="EMR_ASESMEN_PERAWAT_CbtnGambaran3" value="Seperti Ditusuk" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Ditusuk</label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran4" name="EMR_ASESMEN_PERAWAT_CbtnGambaran4" value="Seperti Dipukul" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran4">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Dipukul </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran5" name="EMR_ASESMEN_PERAWAT_CbtnGambaran5" value="Seperti Dibakar" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran5">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Dibakar </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran6" name="EMR_ASESMEN_PERAWAT_CbtnGambaran6" value="Seperti Berdenyut" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran6">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Berdenyut </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran7" name="EMR_ASESMEN_PERAWAT_CbtnGambaran7" value="Seperti Kram" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran7">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Kram </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_ASESMEN_PERAWAT_textGambaran" name="EMR_ASESMEN_PERAWAT_textGambaran" value="" class="form-control collapse" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN3_3">
                                <span>Lokasi nyeri?</span>
                                <br>
                                <br>
                                <input type="text" id="EMR_ASESMEN_PERAWAT_SNMenjalar1" name="EMR_ASESMEN_PERAWAT_SNMenjalar1" value="" class="form-control" placeholder="Lokasi nyeri">
                                <br>
                                <span>Apakah menjalar?</span>
                                <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_MenjalarY" name="EMR_ASESMEN_PERAWAT_Menjalar" class="md-radiobtn" value="Ya">
                                    <label for="EMR_ASESMEN_PERAWAT_MenjalarY">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Ya </label>
                                </div>
                                <input type="text" id="EMR_ASESMEN_PERAWAT_SNMenjalar2" name="EMR_ASESMEN_PERAWAT_SNMenjalar2" value="" class="form-control collapse" placeholder="Lokasi menjalar">
                                <input type="hidden" id="EMR_ASESMEN_PERAWAT_SNMenjalar2status" name="EMR_ASESMEN_PERAWAT_SNMenjalar2status" value="Tidak" class="form-control">
                                <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_MenjalarTD" name="EMR_ASESMEN_PERAWAT_Menjalar" class="md-radiobtn" value="Tidak">
                                    <label for="EMR_ASESMEN_PERAWAT_MenjalarTD">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak </label>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN3_4">
                                <span>Skala nyeri:</span>
                                <br>
                                <br>
                                <div class="row">
                                  <div class="btn-group btn-group-solid" style="width:100%">
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3A_1" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot001.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3A_2" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot002.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3A_3" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot003.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3A_4" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot004.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3A_5" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot005.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3A_6" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot006.png'?>" style="height:50px"> </a>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="btn-group btn-group-solid" style="width:100%">
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3B_0" class="btn white" style="height:40px; width:80px;"><div style="color: black;">0</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3B_1" class="btn white" style="height:40px;"><div style="color: black;">1</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3B_2" class="btn white" style="height:40px; width:60px;"><div style="color: black;">2</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3B_3" class="btn white" style="height:40px;"><div style="color: black;">3</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3B_4" class="btn white" style="height:40px; width:60px;"><div style="color: black;">4</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3B_5" class="btn white" style="height:40px;"><div style="color: black;">5</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3B_6" class="btn white" style="height:40px; width:60px;"><div style="color: black;">6</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3B_7" class="btn white" style="height:40px;"><div style="color: black;">7</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3B_8" class="btn white" style="height:40px; width:60px;"><div style="color: black;">8</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3B_9" class="btn white" style="height:40px;"><div style="color: black;">9</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_PERAWAT_btnSN3B_10" class="btn white" style="height:40px; width:60px;"><div style="color: black;">10</div></a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_SN3_5">
                                <span> Seberapa sering anda mengalami nyeri? </span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan1" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan" class="md-radiobtn" value="Hilang Timbul">
                                        <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Hilang timbul</label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan2" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan" class="md-radiobtn" value="Nyeri Terus Menerus">
                                        <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Nyeri terus menerus</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                                <div class="collapse" id="EMR_ASESMEN_PERAWAT_setiapselamaapa">
                                  <input type="hidden" id="EMR_ASESMEN_PERAWAT_ststsetiapselamaapa" value="tidak">
                                  <span>Setiap berapa lama timbul nyeri?</span>
                                  <center>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap1" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn" value="1-2 Jam">
                                          <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap1">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> 1-2 Jam</label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap2" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn" value="< 4 Jam">
                                          <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> < 4 Jam</label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap3" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn" value="> 4 Jam">
                                          <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap3">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> > 4 Jam</label>
                                        </div>
                                        <input type="text" id="EMR_ASESMEN_PERAWAT_SNlamawaktu" name="EMR_ASESMEN_PERAWAT_SNlamawaktu" value="" class="form-control" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                  </center>
                                </div>
                                <div class="collapse" id="EMR_ASESMEN_PERAWAT_setiapselamaapa2">
                                  <input type="hidden" id="EMR_ASESMEN_PERAWAT_ststsetiapselamaapa2" value="tidak">
                                  <span>Berapa lamanya waktu serangan?</span>
                                  <center>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNselama1" name="EMR_ASESMEN_PERAWAT_RbtnSNselama" class="md-radiobtn" value="< 30 Menit">
                                          <label for="EMR_ASESMEN_PERAWAT_RbtnSNselama1">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> < 30 menit </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNselama2" name="EMR_ASESMEN_PERAWAT_RbtnSNselama" class="md-radiobtn" value="> 30 Menit">
                                          <label for="EMR_ASESMEN_PERAWAT_RbtnSNselama2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> > 30 menit </label>
                                        </div>
                                        <input type="text" id="EMR_ASESMEN_PERAWAT_SNlamawaktu2" name="EMR_ASESMEN_PERAWAT_SNlamawaktu2" value="" class="form-control" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                  </center>
                                </div>
                              </div>
                            <?php
                            }
                            ?>
                            <center>
                              <div class="btn-group btn-group-circle btn-group-sm btn-group-solid" style="width:50%">
                                <button type="button" id="EMR_ASESMEN_PERAWAT_SN1Back" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                                <button type="button" id="EMR_ASESMEN_PERAWAT_SN1Next" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                              </div>
                            </center>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-3">
                              Skor Nyeri :

                              <span id="EMR_ASESMEN_PERAWAT_SkorNyeri"><b> 0</b></span>
                              <input type="hidden" id="EMR_ASESMEN_PERAWAT_SkorNyeri_text" name="EMR_ASESMEN_PERAWAT_SkorNyeri_text" value="" class="form-control">
                            </div>
                            <div class="col-md-9">
                              Skala Nyeri :

                              <span id="EMR_ASESMEN_PERAWAT_SkalaNyeri"><b>
                                <?php
                                if($Utahun < 1)
                                { ?>
                                  Nyeri ringan sampai tidak nyeri
                                <?php }
                                else if($Utahun < 4)
                                { ?>
                                  Relaxed dan comfortable (santai dan nyaman)
                                <?php }
                                else
                                {?>
                                  Tidak nyeri
                                <?php
                                }?></b></span>
                                <input type="hidden" id="EMR_ASESMEN_PERAWAT_SkalaNyeri_text" name="EMR_ASESMEN_PERAWAT_SkalaNyeri_text" value="" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_Halaman5">
                    <div class="col-md-6">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                          <span><b>Alergi Obat</b></span>
                        </div>
                        <div class="portlet-body">
                          <span>Status Alergi Obat Pasien Saat ini Adalah</span>
                          <?php
                          if($alergiobat != "")
                          {
                            echo "<b>Pasien Memiliki Alergi Obat</b>";
                          }
                          else
                          {
                            echo "<b>Pasien Tidak Memiliki Alergi Obat</b>";
                          }
                          ?>
                          <br><span>Apakah pasien memiliki alergi obat lain?</span>
                          <center>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="md-radio-inline">
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnAlergiOYA" name="EMR_ASESMEN_PERAWAT_RbtnAlergiO" class="md-radiobtn" value="AlergiYa">
                                  <label for="EMR_ASESMEN_PERAWAT_RbtnAlergiOYA">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Ya </label>
                                </div>
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnAlergiOTIDAK" name="EMR_ASESMEN_PERAWAT_RbtnAlergiO" class="md-radiobtn" value="AlergiTD">
                                  <label for="EMR_ASESMEN_PERAWAT_RbtnAlergiOTIDAK">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Tidak </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          </center>
                          <div id="EMR_ASESMEN_PERAWAT_InputAlergiObat" class="form-group collapse">
                          </br>
                            <label for="form_control_1">Masukkan Alergi</label>
                            <textarea class="form-control" id="EMR_ASESMEN_PERAWAT_alergiobat" name="EMR_ASESMEN_PERAWAT_alergiobat"></textarea>
                            <input type="hidden" id="EMR_ASESMEN_PERAWAT_alergiobatstatus" value="Tidak" class="form-control">
                            <input type="hidden" id="EMR_ASESMEN_PERAWAT_alergi" name="EMR_ASESMEN_PERAWAT_alergi" value="<?php echo $alergiobat ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                          <span><b>Catatan Perawat</b></span>
                        </div>
                        <div class="portlet-body">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <textarea class="form-control" id="EMR_ASESMEN_PERAWAT_catatan" name="EMR_ASESMEN_PERAWAT_catatan" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                            <label for="form_control_1">Catatan Perawat</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_Halaman6">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-title tabbable-line">
                          <div class="caption">
                            <span class="caption-subject font-dark bold">Hambatan Komunikasi</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-12">
                              <span id="EMR_ASESMEN_PERAWAT_HasilHambatan"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-title tabbable-line">
                          <div class="caption">
                            <span class="caption-subject font-dark bold">Tanda Vital & Status Nutrisi</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-12">
                              <span>TD : </span><span id="EMR_ASESMEN_PERAWAT_HasilSistolik"></span><span>/</span><span id="EMR_ASESMEN_PERAWAT_HasilDiastolik"></span><span> mmHg</span><br>
                              <span>N : </span><span id="EMR_ASESMEN_PERAWAT_HasilNadi"></span><span> x/mnt </span><span id="EMR_ASESMEN_PERAWAT_HasilNadi2"></span><br>
                              <span>t : </span><span id="EMR_ASESMEN_PERAWAT_HasilSuhuTubuh"></span><span> &deg;C</span><br>
                              <span>Rr : </span><span id="EMR_ASESMEN_PERAWAT_HasilRespiratory"></span><span> x/mnt </span><span id="EMR_ASESMEN_PERAWAT_HasilRespiratory2"></span><br>
                              <span>BB : </span><span id="EMR_ASESMEN_PERAWAT_HasilBeratBadan"></span><span> Kg </span><br>
                              <span>TB : </span><span id="EMR_ASESMEN_PERAWAT_HasilTinggiBadan"></span><span> cm </span><br>
                              <span>Hasil BMI : </span><span id="EMR_ASESMEN_PERAWAT_HasilNilaiBMI"></span><br>
                              <span>Kategori BMI : </span><span id="EMR_ASESMEN_PERAWAT_HasilKategoriBMI"></span><br>
                              <?php
                              if($Utahun < 1)
                              {
                                ?>
                                <span>Lingkar Kepala : </span><span id="EMR_ASESMEN_PERAWAT_HasilLingkarKepala"></span><span> cm </span>
                                <?php
                              }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-title tabbable-line">
                          <div class="caption">
                            <span class="caption-subject font-dark bold">Asesmen Risiko Jatuh</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-12">
                              <span>Cara Berjalan Pasien : </span><span id="EMR_ASESMEN_PERAWAT_HasilBerjalan"></span><span id="EMR_ASESMEN_PERAWAT_HasilBerjalan2"></span><br>
                              <span>Cara Duduk Pasien : </span><span id="EMR_ASESMEN_PERAWAT_HasilMenopang"></span><br>
                              <span>Hasil Asesmen Risiko Jatuh : </span><span id="EMR_ASESMEN_PERAWAT_HasilFungHasil"></span><br>
                              <span>Tindakan Pencegahan Risiko Jatuh Yang Perlu Dilakukan : </span><span id="EMR_ASESMEN_PERAWAT_HasilFungTindakan"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-title tabbable-line">
                          <div class="caption">
                            <span class="caption-subject font-dark bold">Asesmen Nyeri</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-12">
                              <span id="EMR_ASESMEN_PERAWAT_HasilNyeri"></span><br>
                              <div class="collapse" id="EMR_ASESMEN_PERAWAT_HasilNyeri_tampilan">
                              <?php
                                if($Utahun < 1)
                                {?>
                                    <span>a. Facial Expression (ekspresi wajah)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_PERAWAT_HasilNIPSA"></span><br>
                                    <span>b. Cry (menangis)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_PERAWAT_HasilNIPSB"></span><br>
                                    <span>c. Breathing Patterns (pola pernafasan)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_PERAWAT_HasilNIPSC"></span><br>
                                    <span>d. Arms(lengan)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_PERAWAT_HasilNIPSD"></span><br>
                                    <span>e. Legs(kaki)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_PERAWAT_HasilNIPSE"></span><br>
                                    <span>f. State of Arousal (kesadaran)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_PERAWAT_HasilNIPSF"></span><br>
                                <?php
                                }
                                else if($Utahun < 4)
                                {?>
                                    <span>a. Face Expression (ekspresi wajah)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_PERAWAT_HasilFLACCA"></span><br>
                                    <span>b. Leg (Kaki)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_PERAWAT_HasilFLACCB"></span><br>
                                    <span>c. Activity (Aktivitas)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_PERAWAT_HasilFLACCC"></span><br>
                                    <span>d. Cry (Menangis)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_PERAWAT_HasilFLACCD"></span><br>
                                    <span>e. Consolalability (respon terhadap himbauan)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_PERAWAT_HasilFLACCE"></span><br>
                                <?php
                                }
                                else
                                {?>
                                    <span>Apa yang membuat nyeri bertambah parah? <br><b>Jawaban:</b> </span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilTambahParah1"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilTambahParah2"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilTambahParah3"></span><br>
                                    <span>Apa yang membuat nyeri berkurang? <br><b>Jawaban:</b> </span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilBerkurang1"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilBerkurang2"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilBerkurang3"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilBerkurang4"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilBerkurang5"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilBerkurang6"></span><br>
                                    <span>Gambaran rasa nyeri? <br><b>Jawaban:</b> </span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilGambaran1"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilGambaran2"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilGambaran3"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilGambaran4"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilGambaran5"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilGambaran6"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilGambaran7"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilGambaran8"></span><br>
                                    <span>Lokasi nyeri? <br><b>Jawaban:</b> </span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilLokasiNyeri1"></span>
                                    <span>, dan </span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilLokasiNyeri2"></span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilLokasiNyeri3"></span><br>
                                    <span>Seberapa sering anda mengalami nyeri? <br><b>Jawaban:</b> </span>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilLamaNyeri1"></span><br>
                                    <div class="collapse" id="EMR_ASESMEN_PERAWAT_NyeriAkhir">
                                      <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Setiap berapa lama timbul nyeri? <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Jawaban:</b> </span>
                                      <span id="EMR_ASESMEN_PERAWAT_HasilLamaNyeri2"></span><br>
                                      <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berapa lamanya waktu serangan? <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Jawaban:</b> </span>
                                      <span id="EMR_ASESMEN_PERAWAT_HasilLamaNyeri3"></span><br>
                                    </div>
                                <?php
                                }
                                ?>
                                <br><span><b>Hasil Dari Keluhan Nyeri Pasien</b></span><br>
                                <span>Skor Nyeri :</span>
                                <span id="EMR_ASESMEN_PERAWAT_HasilSkorNyeri"></span><br>
                                <span>Skala Nyeri :</span>
                                  <?php
                                  if($Utahun < 1)
                                  {
                                    ?>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilSkalaNyeri"></span>
                                    <?php
                                  }
                                  else if($Utahun < 4)
                                  {
                                    ?>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilSkalaNyeri"></span>
                                    <?php
                                  }
                                  else
                                  {
                                    ?>
                                    <span id="EMR_ASESMEN_PERAWAT_HasilSkalaNyeri"></span>
                                    <?php
                                  }
                              ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-title tabbable-line">
                          <div class="caption">
                            <span class="caption-subject font-dark bold">Alergi dan Catatan</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-12">
                              <span>Status Alergi Obat Pasien Saat ini Adalah</span>
                              <?php
                              if($alergiobat != "")
                              {
                                echo "<b>Pasien Memiliki Alergi Obat</b>, dan";
                              }
                              else
                              {
                                echo "<b>Pasien Tidak Memiliki Alergi Obat</b>, dan";
                              }
                              ?>
                              <span id="EMR_ASESMEN_PERAWAT_HasilAlergi"></span><span id="EMR_ASESMEN_PERAWAT_HasilAlergi2"></span><br>
                              <span>Catatan Lain Untuk Pasien : </span><span id="EMR_ASESMEN_PERAWAT_HasilCatatan"></span><br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                      <button type="button" id="EMR_ASESMEN_PERAWAT_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                      <button type="button" id="EMR_ASESMEN_PERAWAT_HalamanNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse" id="EMR_ASESMEN_AWAL_HalamanDokter">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_ASESMEN_DOKTER_btnHalaman1" class="btn white col-md-8">1. Anamnesa</button>
              <button type="button" id="EMR_ASESMEN_DOKTER_btnHalaman2" class="btn green col-md-1">2</button>
              <button type="button" id="EMR_ASESMEN_DOKTER_btnHalaman3" class="btn green col-md-1">3</button>
              <button type="button" id="EMR_ASESMEN_DOKTER_btnHalaman4" class="btn green col-md-1">4</button>
              <button type="button" id="EMR_ASESMEN_DOKTER_btnHalaman5" class="btn green col-md-1">5</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_ASESMEN_DOKTER_Halaman1">
                    <div id="EMR_ASESMEN_DOKTER_anamnesa_1">
                      <div class="col-md-6">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Keluhan Utama</b></span>
                          </div>
                          <div class="portlet-body">
                            <center>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama1" name="EMR_ASESMEN_DOKTER_Keluhanutama1" value="Diare" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Diare </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama2" name="EMR_ASESMEN_DOKTER_Keluhanutama2" value="Panas/Demam" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Panas/demam </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama3" name="EMR_ASESMEN_DOKTER_Keluhanutama3" value="Muntah" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Muntah</label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama4" name="EMR_ASESMEN_DOKTER_Keluhanutama4" value="Pilek" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Pilek </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama5" name="EMR_ASESMEN_DOKTER_Keluhanutama5" value="Sakit Kepala" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sakit Kepala </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama6" name="EMR_ASESMEN_DOKTER_Keluhanutama6" value="Batuk" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama6">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Batuk </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama7" name="EMR_ASESMEN_DOKTER_Keluhanutama7" value="Pusing Berputar" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama7">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Pusing berputar </label>
                                  </div>
                                  <div class="col-md-12">
                                    <span class="control-label">Lain lain : </span>
                                    <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_Keluhanutama8" name="EMR_ASESMEN_DOKTER_Keluhanutama8" value="" placeholder="Lain lain">
                                  </div>
                                </div>
                              </div>
                            </div>
                            </center>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Riwayat Penyakit Sekarang</b></span>
                          </div>
                          <div class="portlet-body">
                            <div class="form-group form-md-line-input form-md-floating-label">
                              <textarea class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitSekarang" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitSekarang" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                              <label for="form_control_1">Riwayat penyakit pasien</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="EMR_ASESMEN_DOKTER_anamnesa_2" class="collapse">
                      <div class="col-md-6">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Riwayat Penyakit Dahulu</b></span>
                          </div>
                          <div class="portlet-body">
                            <center>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1" value="DM" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> DM </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2" value="HT" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> HT </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3" value="Stroke" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Stroke</label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4" value="Jantung" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Jantung </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5" value="Ginjal" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ginjal </label>
                                  </div>
                                  <div class="col-md-12">
                                    <span class="control-label">Lain lain : </span>
                                    <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA6" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA6" value="" placeholder="Lain lain">
                                  </div>
                                </div>
                                <br>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA7" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA7" value="Tidak ada" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA7">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak ada </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </center>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Riwayat Penyakit Keluarga</b></span>
                          </div>
                          <div class="portlet-body">
                            <center>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1" value="DM" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> DM </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2" value="HT" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> HT </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3" value="Stroke" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Stroke</label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4" value="Jantung" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Jantung </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5" value="Ginjal" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ginjal </label>
                                  </div>
                                  <div class="col-md-12">
                                    <span class="control-label">Lain lain : </span>
                                    <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB6" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB6" value="" placeholder="Lain lain">
                                  </div>
                                </div>
                                <br>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB7" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB7" value="Tidak ada" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB7">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak ada </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </center>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="EMR_ASESMEN_DOKTER_anamnesa_3" class="collapse">
                      <div class="col-md-12">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Alergi</b></span>
                          </div>
                          <div class="portlet-body">
                            <?php
                            if($alergiobat != "")
                            {
                              echo "Pasien Mempunyai Alergi : ".$alergiobat."";
                            }
                            else
                            {
                              echo "Pasien Masih Belum Mempunyai Catatan Alergi";
                            }
                            ?>
                            <div id="EMR_ASESMEN_DOKTER_InputalergiObat" class="collapse">
                              </br>
                              <label for="form_control_1">Alergi Tambahan:</label>
                              <textarea class="form-control" id="EMR_ASESMEN_DOKTER_alergiobat" name="EMR_ASESMEN_DOKTER_alergiobat"></textarea>
                              <input type="hidden" id="EMR_ASESMEN_DOKTER_alergiobatstatus" name="EMR_ASESMEN_DOKTER_alergiobatstatus" value="Tidak" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <span>Apakah pasien memiliki alergi lain?</span>
                          <center>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="md-radio-inline">
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASESMEN_DOKTER_RbtnAlergiOYA" name="EMR_ASESMEN_DOKTER_RbtnAlergiO" value="Ya" class="md-radiobtn">
                                  <label for="EMR_ASESMEN_DOKTER_RbtnAlergiOYA">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> YA </label>
                                </div>
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASESMEN_DOKTER_RbtnAlergiOTIDAK" name="EMR_ASESMEN_DOKTER_RbtnAlergiO" value="Tidak" class="md-radiobtn">
                                  <label for="EMR_ASESMEN_DOKTER_RbtnAlergiOTIDAK">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> TIDAK </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          </center>
                        </div>
                      </div>
                    </div>
                    <div id="EMR_ASESMEN_DOKTER_anamnesa_4" class="collapse">
                      <div class="col-md-12">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Riwayat Sosial</b></span>
                          </div>
                          <div class="portlet-body">
                            <div class="form-group">
                              <div class="input-group">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatSosial1" name="EMR_ASESMEN_DOKTER_RiwayatSosial1" value="Tidak ada" class="md-check" checked>
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatSosial1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak ada </label>
                                  </div>
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatSosial2" name="EMR_ASESMEN_DOKTER_RiwayatSosial2" value="Merokok" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatSosial2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Merokok </label>
                                  </div>
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatSosial3" name="EMR_ASESMEN_DOKTER_RiwayatSosial3" value="Alkohol" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatSosial3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Alkohol </label>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <span class="control-label">Lain lain : </span>
                                  <input type="text" id="EMR_ASESMEN_DOKTER_RiwayatSosial4" name="EMR_ASESMEN_DOKTER_RiwayatSosial4" class="form-control" placeholder="Lain lain">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="EMR_ASESMEN_DOKTER_anamnesa_5" class="collapse">
                      <?php
                      if($Utahun < 14)
                      {
                        ?>
                        <div class="col-md-12">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Riwayat Tumbuh Kembang</b></span>
                          </div>
                          <div class="portlet-body">
                            <center>
                            <div class="form-group">
                              <div class="input-group">
                                <span>Riwayat tumbuh kembang pasien?</span>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="md-radio-inline">
                                      <div class="col-md-6 md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Ya" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh1" value="Baik" class="md-radiobtn">
                                        <label for="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Ya">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Baik </label>
                                      </div>
                                      <div class="col-md-6 md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lain" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh1" value="Lain" class="md-radiobtn">
                                        <label for="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lain">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Lainnya </label>
                                      </div>
                                      <div id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lainnya2" class="col-md-6 collapse">
                                        <input type="text" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lainnya" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lainnya" value="" class="form-control" placeholder="Lain lain">
                                        <input type="hidden" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lainnya3" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lainnya3" value="collapse" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </br>
                                <span>Imunisasi pasien?</span>
                                <div class="row md-radio-inline">
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh" value="Imunisasi Lengkap" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatTumbuh1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Imunisasi Lengkap </label>
                                  </div>
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh2" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh" value="Imunisasi tidak lengkap" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatTumbuh2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Imunisasi tidak lengkap </label>
                                  </div>
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh3" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh" value="Tidak tahu" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatTumbuh3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak tahu </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </center>
                          </div>
                        </div>
                      </div>
                        <?php
                      }
                      ?>
                    </div>
                    <center class="col-md-12">
                      <div class="btn-group btn-group-circle btn-group-sm btn-group-solid" style="width:50%">
                        <button type="button" id="EMR_ASESMEN_DOKTER_subhalBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                        <button type="button" id="EMR_ASESMEN_DOKTER_subhalNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                      </div>
                    </br>
                    </br>
                    </center>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Halaman2">
                    <div class="" id="EMR_ASESMEN_DOKTER_fisik_1">
                      <div class="col-md-5">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body row">
                            <div class="col-md-12">
                              <span class="control-label">Keadaan Umum : </span>
                              <div class="md-radio-inline">
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASESMEN_DOKTER_KeadaanUmum1" name="EMR_ASESMEN_DOKTER_KeadaanUmum" class="md-radiobtn" value="Baik" checked>
                                  <label for="EMR_ASESMEN_DOKTER_KeadaanUmum1">
                                  <span class="inc"></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Baik </label>
                                </div>
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASESMEN_DOKTER_KeadaanUmum2" name="EMR_ASESMEN_DOKTER_KeadaanUmum" class="md-radiobtn" value="Cukup">
                                  <label for="EMR_ASESMEN_DOKTER_KeadaanUmum2">
                                  <span class="inc"></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Cukup </label>
                                </div>
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASESMEN_DOKTER_KeadaanUmum3" name="EMR_ASESMEN_DOKTER_KeadaanUmum" class="md-radiobtn" value="Lemah">
                                  <label for="EMR_ASESMEN_DOKTER_KeadaanUmum3">
                                  <span class="inc"></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Lemah </label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <span class="control-label">Kesadaran : </span>
                              <input type="text" id="EMR_ASESMEN_DOKTER_Kesadaran" name="EMR_ASESMEN_DOKTER_Kesadaran" value="Compos mentis" class="form-control" disabled>
                            </div>
                            <br>
                            <div class="col-md-12">
                              <span class="control-label">GCS : </span>
                            </div>
                            <div class="col-md-4">
                              <span class="control-label">E : </span>
                              <input type="text" id="EMR_ASESMEN_DOKTER_GCSe" name="EMR_ASESMEN_DOKTER_GCSe" value="4" class="form-control">
                            </div>
                            <div class="col-md-4">
                              <span class="control-label">V : </span>
                              <input type="text" id="EMR_ASESMEN_DOKTER_GCSv" name="EMR_ASESMEN_DOKTER_GCSv" value="5" class="form-control">
                            </div>
                            <div class="col-md-4">
                              <span class="control-label">M : </span>
                              <input type="text" id="EMR_ASESMEN_DOKTER_GCSm" name="EMR_ASESMEN_DOKTER_GCSm" value="6" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="portlet light bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="tab-content">
                                  <div class="col-md-4">
                                    <label for="form_control_1">Sistolik&nbsp;</label>
                                    <i style="font-size:12px"><b>mmHg</b></i>
                                    <input type="text" id="EMR_ASESMEN_DOKTER_TDSistolik" name="EMR_ASESMEN_DOKTER_TDSistolik" value="" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="form_control_1">Diastolik</label>
                                    <i style="font-size:12px"><b>mmHg</b></i>
                                    <input type="text" id="EMR_ASESMEN_DOKTER_TDDiastolik" name="EMR_ASESMEN_DOKTER_TDDiastolik" value="" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="form_control_1">Suhu tubuh</label>
                                    <i style="font-size:12px"><b>&deg;C</b></i>
                                    <input type="text" id="EMR_ASESMEN_DOKTER_suhutubuh" name="EMR_ASESMEN_DOKTER_suhutubuh" value="" class="form-control">
                                  </div>
                                </div>
                                <hr>
                                <div class="tab-content">
                                  <div class="col-md-6">
                                    <label for="form_control_1">N</label>
                                    <i style="font-size:12px"><b>x/mnt</b></i>
                                    <input type="text" id="EMR_ASESMEN_DOKTER_nadi" name="EMR_ASESMEN_DOKTER_nadi" value="" class="form-control">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_NadiCH_reguler" name="EMR_ASESMEN_DOKTER_NadiCH" class="md-radiobtn" value="Reguler">
                                        <label for="EMR_ASESMEN_DOKTER_NadiCH_reguler">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Reguler </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_NadiCH_irreguler" name="EMR_ASESMEN_DOKTER_NadiCH" class="md-radiobtn" value="Irreguler">
                                        <label for="EMR_ASESMEN_DOKTER_NadiCH_irreguler">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Irreguler </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-content">
                                  <div class="col-md-6">
                                    <label for="form_control_1">Rr</label>
                                    <i style="font-size:12px"><b>x/mnt</b></i>
                                    <input type="text" id="EMR_ASESMEN_DOKTER_respiratory" name="EMR_ASESMEN_DOKTER_respiratory" value="" class="form-control">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_RespiratoryCH_teratur" name="EMR_ASESMEN_DOKTER_RespiratoryCH" class="md-radiobtn" value="Teratur">
                                        <label for="EMR_ASESMEN_DOKTER_RespiratoryCH_teratur">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Teratur </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_RespiratoryCH_titeratur" name="EMR_ASESMEN_DOKTER_RespiratoryCH" class="md-radiobtn" value="Tidak Teratur">
                                        <label for="EMR_ASESMEN_DOKTER_RespiratoryCH_titeratur">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak Teratur </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-content">
                                  <div class="col-md-3">
                                    <label for="form_control_1">BB</label>
                                    <i style="font-size:12px"><b>Kg</b></i>
                                    <input type="text" id="EMR_ASESMEN_DOKTER_beratbadan" name="EMR_ASESMEN_DOKTER_beratbadan" value="" class="form-control">
                                  </div>
                                  <div class="col-md-3">
                                    <label for="form_control_1">TB</label>
                                    <i style="font-size:12px"><b>Cm</b></i>
                                    <input type="text" id="EMR_ASESMEN_DOKTER_tinggibadan" name="EMR_ASESMEN_DOKTER_tinggibadan" value="" class="form-control">
                                  </div>
                                  <div class="col-md-6">
                                    <span>Nilai BMI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><b><span id="EMR_ASESMEN_DOKTER_Nilai_BMI">0</span></b></br>
                                    <span>Kategori BMI : </span><b><span id="EMR_ASESMEN_DOKTER_Kategori_BMI"></span></b>
                                  </div>
                                  <?php
                                  if($Utahun < 1)
                                  {
                                    ?>
                                    <div class="col-md-6">
                                      <label for="form_control_1">Lingkar Kepala (Khusus Bayi)</label>
                                      <i style="font-size:12px"><b>Cm</b></i>
                                      <input type="text" id="EMR_ASESMEN_DOKTER_lingkarkepala" name="EMR_ASESMEN_DOKTER_lingkarkepala" value="" class="form-control">
                                    </div>
                                    <?php
                                  }
                                  ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <input type="hidden" id="EMR_ASESMEN_DOKTER_KodeUnit_SP" name="EMR_ASESMEN_DOKTER_KodeUnit_SP" value="<?php echo $KodeUnit2 ?>" class="form-control">

                    <div class="collapse" id="EMR_ASESMEN_DOKTER_fisik_2">
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_2A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_PeFi_2_CK" name="EMR_ASESMEN_DOKTER_PeFi_2_CK" value="Kepala" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_PeFi_2_CK">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pemeriksaan Fisik Kepala </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--<input type="text" id="EMR_ASESMEN_DOKTER_PeFi_2_CKStatus" name="EMR_ASESMEN_DOKTER_PeFi_2_CKStatus" value="Tidak" class="form-control">-->
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_2B">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Kepala/Leher</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <table class="col-md-6">
                                  <tr>
                                    <td class="col-md-3"><span>Anemis</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnAnemis" name="EMR_ASESMEN_DOKTER_btnAnemis" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Ikterus</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnIkterus" name="EMR_ASESMEN_DOKTER_btnIkterus" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Cyanosis</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnCyanosis" name="EMR_ASESMEN_DOKTER_btnCyanosis" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Dipsneo</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnDipsneo" name="EMR_ASESMEN_DOKTER_btnDipsneo" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <?php
                                  if($Utahun < 1.5)
                                  { ?>
                                  <tr>
                                    <td class="col-md-3"><span>UUK</span></td>
                                    <td colspan="2" class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnUUK" name="EMR_ASESMEN_DOKTER_btnUUK" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>UUB</span></td>
                                    <td colspan="2" class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnUUB" name="EMR_ASESMEN_DOKTER_btnUUB" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <?php } ?>
                                </table>
                                <table class="col-md-6">
                                  <tr>
                                    <td class="col-md-3"></td>
                                    <td class="col-md-3"><span><center>Kanan</center></span></td>
                                    <td class="col-md-3"><span><center>Kiri</center></span></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Pupil </span><span id="EMR_ASESMEN_DOKTER_pupilstat">Isokor</span></td>
                                    <td class="col-md-3">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASESMEN_DOKTER_pupilKanan" name="EMR_ASESMEN_DOKTER_pupilKanan" value="3" class="form-control" onkeypress="return hanyaAngka(event)">
                                          <label for="form_control_1"></label>
                                          <span class="help-block">Masukkan nilai</span>
                                          <i style="font-size:12px"><b>mm</b></i>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="col-md-3">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASESMEN_DOKTER_pupilKiri" name="EMR_ASESMEN_DOKTER_pupilKiri" value="3" class="form-control" onkeypress="return hanyaAngka(event)">
                                          <label for="form_control_1"></label>
                                          <span class="help-block">Masukkan nilai</span>
                                          <i style="font-size:12px"><b>mm</b></i>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Cahaya</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnCahayaKanan" name="EMR_ASESMEN_DOKTER_btnCahayaKanan" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnCahayaKiri" name="EMR_ASESMEN_DOKTER_btnCahayaKiri" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Lain - lain</span></td>
                                    <td colspan="2" class="col-md-6">
                                      <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_KepalaLeher" name="EMR_ASESMEN_DOKTER_KepalaLeher" value="" placeholder="Lain lain">
                                    </td>
                                  </tr>
                                </table>
                                </br>
                                </br>
                                </br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="collapse" id="EMR_ASESMEN_DOKTER_fisik_3">
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_3A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_PeFi_3_CK" name="EMR_ASESMEN_DOKTER_PeFi_3_CK" value="Thorax1" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_PeFi_3_CK">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pemeriksaan Fisik Thorax (Cor) </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_3B">
                        <div class="col-md-12">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                              <span><b>Thorax ( Cor )</b></span>
                            </div>
                            <div class="portlet-body">
                              <center>
                              <div class="form-group">
                                <div class="input-group">
                                  <input type="hidden" id="EMR_ASESMEN_DOKTER_CorStatus" name="EMR_ASESMEN_DOKTER_CorStatus" value="Tidak" class="form-control">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_ASESMEN_DOKTER_Cor1" name="EMR_ASESMEN_DOKTER_CorSplit1" value="S1, S2, Tunggal" class="md-check" checked="true">
                                      <label for="EMR_ASESMEN_DOKTER_Cor1">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> S1, S2, Tunggal</label>
                                    </div>
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <div class="row">
                                          <input type="checkbox" id="EMR_ASESMEN_DOKTER_Cor2" name="EMR_ASESMEN_DOKTER_Cor2" value="Split S1" class="md-check">
                                          <label for="EMR_ASESMEN_DOKTER_Cor2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Split S1 </label>
                                        </div>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <div class="row">
                                          <input type="checkbox" id="EMR_ASESMEN_DOKTER_Cor3" name="EMR_ASESMEN_DOKTER_Cor3" value="Split S2" class="md-check">
                                          <label for="EMR_ASESMEN_DOKTER_Cor3">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Split S2 </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="coresplitshow" class="row md-radio-inline">
                                    <div class="col-md-5 md-radio">
                                      <input type="radio" id="EMR_ASESMEN_DOKTER_Cor4" name="EMR_ASESMEN_DOKTER_CorReg" value="Irregular" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_Cor4">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Irregular </label>
                                    </div>
                                    <div class="col-md-5 md-radio">
                                      <input type="radio" id="EMR_ASESMEN_DOKTER_Cor5" name="EMR_ASESMEN_DOKTER_CorReg" value="Regular" class="md-check" checked="true">
                                      <label for="EMR_ASESMEN_DOKTER_Cor5">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Regular </label>
                                    </div>
                                  </div>
                                </div>
                                <button type="button" id="EMR_ASESMEN_DOKTER_btnMurmur" name="EMR_ASESMEN_DOKTER_btnMurmur" class="btn yellow col-md-5" value="-"><b> Murmur - </b></button>
                                <input type="text" id="EMR_ASESMEN_DOKTER_btnMurmurText" name="EMR_ASESMEN_DOKTER_btnMurmurText" value="" class="form-control collapse">
                                <button type="button" id="EMR_ASESMEN_DOKTER_btnGallop" name="EMR_ASESMEN_DOKTER_btnGallop" class="btn yellow col-md-5" value="-"><b> Gallop - </b></button>
                              </div>
                              </center>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="collapse" id="EMR_ASESMEN_DOKTER_fisik_4">
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_4A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_PeFi_4_CK" name="EMR_ASESMEN_DOKTER_PeFi_4_CK" value="Thorax2" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_PeFi_4_CK">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pemeriksaan Fisik Thorax (Pulmo) </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_4B">
                        <div class="col-md-12">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                              <span><b>Thorax ( Pulmo )</b></span>
                            </div>
                            <div class="portlet-body row">
                              <div class="col-md-4">
                                <span>Vesikuler</span></br>
                                <table>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler1" name="EMR_ASESMEN_DOKTER_btnVesikuler1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler2" name="EMR_ASESMEN_DOKTER_btnVesikuler2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler3" name="EMR_ASESMEN_DOKTER_btnVesikuler3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler4" name="EMR_ASESMEN_DOKTER_btnVesikuler4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler5" name="EMR_ASESMEN_DOKTER_btnVesikuler5" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler6" name="EMR_ASESMEN_DOKTER_btnVesikuler6" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  </tr>
                                </table>
                              </div>
                              <div class="col-md-4">
                                <span>Rhonki</span></br>
                                <table>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki1" name="EMR_ASESMEN_DOKTER_btnRhonki1" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki2" name="EMR_ASESMEN_DOKTER_btnRhonki2" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki3" name="EMR_ASESMEN_DOKTER_btnRhonki3" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki4" name="EMR_ASESMEN_DOKTER_btnRhonki4" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki5" name="EMR_ASESMEN_DOKTER_btnRhonki5" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki6" name="EMR_ASESMEN_DOKTER_btnRhonki6" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                </table>
                              </div>
                              <div class="col-md-4">
                                <span>Wheezing</span></br>
                                <table>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnWheezing1" name="EMR_ASESMEN_DOKTER_btnWheezing1" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnWheezing2" name="EMR_ASESMEN_DOKTER_btnWheezing2" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnWheezing3" name="EMR_ASESMEN_DOKTER_btnWheezing3" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnWheezing4" name="EMR_ASESMEN_DOKTER_btnWheezing4" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnWheezing5" name="EMR_ASESMEN_DOKTER_btnWheezing5" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnWheezing6" name="EMR_ASESMEN_DOKTER_btnWheezing6" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                </table>
                              </div>
                              </br>
                              <div class="col-md-6">
                                <span class="control-label">Retraksi Intercostal : </span></br>
                                <button type="button" id="EMR_ASESMEN_DOKTER_btnretraksiKanan" name="EMR_ASESMEN_DOKTER_btnretraksiKanan" class="btn yellow col-md-6" value="Kanan -"><b>Kanan - </b></button>
                                <button type="button" id="EMR_ASESMEN_DOKTER_btnretraksiKiri" name="EMR_ASESMEN_DOKTER_btnretraksiKiri" class="btn yellow col-md-6" value="Kiri -"><b>Kiri - </b></button>
                              </div>
                              <div class="col-md-6">
                                <span class="control-label">Lain - lain : </span>
                                <input type="text" id="EMR_ASESMEN_DOKTER_ThoraxCorLain" name="EMR_ASESMEN_DOKTER_ThoraxCorLain" value="" class="form-control" placeholder="Lain lain">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="collapse" id="EMR_ASESMEN_DOKTER_fisik_5">
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_5A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_PeFi_5_CK" name="EMR_ASESMEN_DOKTER_PeFi_5_CK" value="Abdomen" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_PeFi_5_CK">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pemeriksaan Fisik Abdomen </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_5B">
                        <div class="col-md-12">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                              <span><b>Abdomen</b></span>
                            </div>
                            <div class="portlet-body row">
                              <div class="col-md-12">
                                <div class="col-md-4">
                                  <span>Bising Usus :</span>
                                </div>
                                <div class="col-md-12">
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_DOKTER_btnAbdomen1A" name="EMR_ASESMEN_DOKTER_btnAbdomen1" class="md-radiobtn" value="Normal" checked="true">
                                      <label for="EMR_ASESMEN_DOKTER_btnAbdomen1A">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Normal </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_DOKTER_btnAbdomen1B" name="EMR_ASESMEN_DOKTER_btnAbdomen1" class="md-radiobtn" value="Meningkat">
                                      <label for="EMR_ASESMEN_DOKTER_btnAbdomen1B">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Meningkat </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_DOKTER_btnAbdomen1C" name="EMR_ASESMEN_DOKTER_btnAbdomen1" class="md-radiobtn" value="Menurun">
                                      <label for="EMR_ASESMEN_DOKTER_btnAbdomen1C">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Menurun </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_DOKTER_btnAbdomen1D" name="EMR_ASESMEN_DOKTER_btnAbdomen1" class="md-radiobtn" value="Lain-lain">
                                      <label for="EMR_ASESMEN_DOKTER_btnAbdomen1D">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Lain - lain </label>
                                    </div>
                                    <input type="text" id="EMR_ASESMEN_DOKTER_btnAbdomen1E" name="EMR_ASESMEN_DOKTER_btnAbdomen1E" class="form-control collapse" placeholder="Lain lain">
                                  </div>
                                </div>
                              </div>
                              <div class="row col-md-6">
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Meteorimus</center></span>
                                  </div>
                                  <div class="col-md-5">
                                    <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen2" name="EMR_ASESMEN_DOKTER_btnAbdomen2" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Flat</center></span>
                                  </div>
                                  <div class="col-md-5">
                                    <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen3" name="EMR_ASESMEN_DOKTER_btnAbdomen3" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Soeple</center></span>
                                  </div>
                                  <div class="col-md-5">
                                    <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen4" name="EMR_ASESMEN_DOKTER_btnAbdomen4" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Defans</center></span>
                                  </div>
                                  <div class="col-md-5">
                                    <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen5" name="EMR_ASESMEN_DOKTER_btnAbdomen5" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Distensi</center></span>
                                  </div>
                                  <div class="col-md-5">
                                    <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen6" name="EMR_ASESMEN_DOKTER_btnAbdomen6" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Hepar</center></span>
                                  </div>
                                  <div class="col-md-7">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_btnAbdomen7A" name="EMR_ASESMEN_DOKTER_btnAbdomen7Radio" class="md-radiobtn" value="Tidak Teraba" checked="true">
                                        <label for="EMR_ASESMEN_DOKTER_btnAbdomen7A">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak Teraba </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_btnAbdomen7B" Bame="EMR_ASESMEN_DOKTER_btnAbdomen7Radio" class="md-radiobtn" value="Teraba">
                                        <label for="EMR_ASESMEN_DOKTER_btnAbdomen7B">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Teraba </label>
                                      </div>
                                      <input type="text" id="EMR_ASESMEN_DOKTER_btnAbdomen7C" name="EMR_ASESMEN_DOKTER_btnAbdomen7C" class="form-control collapse">
                                      <input type="hidden" id="EMR_ASESMEN_DOKTER_btnAbdomen7Cstatus" name="EMR_ASESMEN_DOKTER_btnAbdomen7Cstatus" class="form-control" value="Tidak">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Lien</center></span>
                                  </div>
                                  <div class="col-md-7">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_btnAbdomen8A" name="EMR_ASESMEN_DOKTER_btnAbdomen8Radio" class="md-radiobtn" value="Tidak Teraba" checked="true">
                                        <label for="EMR_ASESMEN_DOKTER_btnAbdomen8A">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak Teraba </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_btnAbdomen8B" Bame="EMR_ASESMEN_DOKTER_btnAbdomen8Radio" class="md-radiobtn" value="Teraba">
                                        <label for="EMR_ASESMEN_DOKTER_btnAbdomen8B">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Teraba </label>
                                      </div>
                                      <input type="text" id="EMR_ASESMEN_DOKTER_btnAbdomen8C" name="EMR_ASESMEN_DOKTER_btnAbdomen8C" class="form-control collapse">
                                      <input type="hidden" id="EMR_ASESMEN_DOKTER_btnAbdomen8Cstatus" name="EMR_ASESMEN_DOKTER_btnAbdomen8Cstatus" class="form-control" value="Tidak">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_AbdomenLainChb" name="EMR_ASESMEN_DOKTER_AbdomenLainChb" class="md-radiobtn" value="Abdomen Lain">
                                    <label for="EMR_ASESMEN_DOKTER_AbdomenLainChb">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Lain - lain </label>
                                  </div>
                                </div>
                                <div id="EMR_ASESMEN_DOKTER_AbdomenLain" class="collapse">
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Shifting dullness</center></span>
                                    </div>
                                    <div class="col-md-5">
                                      <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen9" name="EMR_ASESMEN_DOKTER_btnAbdomen9" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Nyeri Tekan Mc burney</center></span>
                                    </div>
                                    <div class="col-md-5">
                                      <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen10" name="EMR_ASESMEN_DOKTER_btnAbdomen10" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Murphy Sign</center></span>
                                    </div>
                                    <div class="col-md-5">
                                      <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen11" name="EMR_ASESMEN_DOKTER_btnAbdomen11" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="col-md-5">
                                        <span><center>Lain - lain</center></span>
                                      </div>
                                      <div class="col-md-7">
                                        <input type="text" id="EMR_ASESMEN_DOKTER_btnAbdomenText1" name="EMR_ASESMEN_DOKTER_btnAbdomenText1" class="form-control" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <br>
                              </br>
                              <br>
                              </br>
                              <div class="col-md-12"></div>
                              <center>
                                <div class="row col-md-8">
                                  <div class="col-md-5">
                                    <span><center>Nyeri Tekan</center></span>
                                  </div>
                                  <div class="row col-md-7">
                                    <div col-md-12>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen12" name="EMR_ASESMEN_DOKTER_btnAbdomen12" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen13" name="EMR_ASESMEN_DOKTER_btnAbdomen13" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen14" name="EMR_ASESMEN_DOKTER_btnAbdomen14" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                    </div>
                                    <div col-md-12>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen15" name="EMR_ASESMEN_DOKTER_btnAbdomen15" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen16" name="EMR_ASESMEN_DOKTER_btnAbdomen16" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen17" name="EMR_ASESMEN_DOKTER_btnAbdomen17" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                    </div>
                                    <div col-md-12>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen18" name="EMR_ASESMEN_DOKTER_btnAbdomen18" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen19" name="EMR_ASESMEN_DOKTER_btnAbdomen19" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen20" name="EMR_ASESMEN_DOKTER_btnAbdomen20" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </center>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="collapse" id="EMR_ASESMEN_DOKTER_fisik_6">
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_6A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_PeFi_6_CK" name="EMR_ASESMEN_DOKTER_PeFi_6_CK" value="Ekstremitas" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_PeFi_6_CK">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pemeriksaan Fisik Ekstremitas </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_6B">
                        <div class="col-md-12">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                              <span><b>Ekstremitas</b></span>
                            </div>
                            <div class="portlet-body row">
                              <table class="col-md-4">
                                <tr>
                                  <td colspan="2" class="col-md-12"><span><center>Akral Hangat</center></span></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas1" name="EMR_ASESMEN_DOKTER_btnEkstremitas1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas2" name="EMR_ASESMEN_DOKTER_btnEkstremitas2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas3" name="EMR_ASESMEN_DOKTER_btnEkstremitas3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas4" name="EMR_ASESMEN_DOKTER_btnEkstremitas4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                              </table>
                              <table class="col-md-4">
                                <tr>
                                  <td colspan="2" class="col-md-12"><span><center>Oedema</center></span></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas9" name="EMR_ASESMEN_DOKTER_btnEkstremitas9" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas10" name="EMR_ASESMEN_DOKTER_btnEkstremitas10" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas11" name="EMR_ASESMEN_DOKTER_btnEkstremitas11" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas12" name="EMR_ASESMEN_DOKTER_btnEkstremitas12" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                </tr>
                              </table>
                              <div class="col-md-4">
                                <span>CRT :</span>
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_CRT1" name="EMR_ASESMEN_DOKTER_CRT" class="md-radiobtn" value="< 2 detik" checked="true">
                                    <label for="EMR_ASESMEN_DOKTER_CRT1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> < 2 detik </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_CRT2" name="EMR_ASESMEN_DOKTER_CRT" class="md-radiobtn" value="> 2 detik">
                                    <label for="EMR_ASESMEN_DOKTER_CRT2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> > 2 detik </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="collapse" id="EMR_ASESMEN_DOKTER_fisik_7">
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_7A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_PeFi_7_CK" name="EMR_ASESMEN_DOKTER_PeFi_7_CK" value="Neurologis" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_PeFi_7_CK">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pemeriksaan Fisik Neurologis </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_PeFi_7B">
                        <div class="col-md-12">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                              <span><b>Neurologis</b></span>
                            </div>
                            <div class="portlet-body row">
                              <table class="col-md-4">
                                <tr>
                                  <td colspan="2" class="col-md-12"><span><center>Motorik</center></span></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6">
                                    <select class="bs-select form-control" id="EMR_ASESMEN_DOKTER_Neu_Motorik1" name="EMR_ASESMEN_DOKTER_Neu_Motorik1">
                                      <option value='5' selected>5</option>
                                      <option value='4'>4</option>
                                      <option value='3'>3</option>
                                      <option value='2'>2</option>
                                      <option value='1'>1</option>
                                      <option value='0'>0</option>
                                    </select>
                                  </td>
                                  <td class="col-md-6">
                                    <select class="bs-select form-control" id="EMR_ASESMEN_DOKTER_Neu_Motorik2" name="EMR_ASESMEN_DOKTER_Neu_Motorik2">
                                      <option value='5' selected>5</option>
                                      <option value='4'>4</option>
                                      <option value='3'>3</option>
                                      <option value='2'>2</option>
                                      <option value='1'>1</option>
                                      <option value='0'>0</option>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="col-md-6">
                                    <select class="bs-select form-control" id="EMR_ASESMEN_DOKTER_Neu_Motorik3" name="EMR_ASESMEN_DOKTER_Neu_Motorik3">
                                      <option value='5' selected>5</option>
                                      <option value='4'>4</option>
                                      <option value='3'>3</option>
                                      <option value='2'>2</option>
                                      <option value='1'>1</option>
                                      <option value='0'>0</option>
                                    </select>
                                  </td>
                                  <td class="col-md-6">
                                    <select class="bs-select form-control" id="EMR_ASESMEN_DOKTER_Neu_Motorik4" name="EMR_ASESMEN_DOKTER_Neu_Motorik4">
                                      <option value='5' selected>5</option>
                                      <option value='4'>4</option>
                                      <option value='3'>3</option>
                                      <option value='2'>2</option>
                                      <option value='1'>1</option>
                                      <option value='0'>0</option>
                                    </select>
                                  </td>
                                </tr>
                              </table>
                              <div class="col-md-12">
                                  <span>Sensorik :</span>
                              </div>
                              <div class="col-md-12">
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_Sensorik1" name="EMR_ASESMEN_DOKTER_Sensorik" class="md-radiobtn" value="Normal" checked="true">
                                    <label for="EMR_ASESMEN_DOKTER_Sensorik1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Normal </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_Sensorik2" name="EMR_ASESMEN_DOKTER_Sensorik" class="md-radiobtn" value="Parestesia">
                                    <label for="EMR_ASESMEN_DOKTER_Sensorik2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Parestesia </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_Sensorik3" name="EMR_ASESMEN_DOKTER_Sensorik" class="md-radiobtn" value="Hiperestesia">
                                    <label for="EMR_ASESMEN_DOKTER_Sensorik3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Hiperestesia </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_Sensorik4" name="EMR_ASESMEN_DOKTER_Sensorik" class="md-radiobtn" value="Hipoestesia">
                                    <label for="EMR_ASESMEN_DOKTER_Sensorik4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Hipoestesia </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_Sensorik5" name="EMR_ASESMEN_DOKTER_Sensorik" class="md-radiobtn" value="Anastesia">
                                    <label for="EMR_ASESMEN_DOKTER_Sensorik5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Anastesia</label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_Sensorik6" name="EMR_ASESMEN_DOKTER_Sensorik" class="md-radiobtn" value="Lain - lain">
                                    <label for="EMR_ASESMEN_DOKTER_Sensorik6">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Lain - lain </label>
                                  </div>
                                  <input type="text" class="form-control collapse" id="EMR_ASESMEN_DOKTER_Sensorik7" name="EMR_ASESMEN_DOKTER_Sensorik7">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <span> Lain - lain </span></br>
                                <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_Neu_Lain" name="EMR_ASESMEN_DOKTER_Neu_Lain">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <center class="col-md-12">
                      <div class="btn-group btn-group-circle btn-group-sm btn-group-solid" style="width:50%">
                        <button type="button" id="EMR_ASESMEN_DOKTER_fisikhalBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                        <button type="button" id="EMR_ASESMEN_DOKTER_fisikhalNext" class="btn yellow" style="width:50%">Lanjutkan >></button>
                      </div>
                    <br>
                    </br>
                    </center>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Halaman3">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                          <div class="caption">
                            <span class="caption-subject font-dark bold">Status Lokalis</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLBedah" name="EMR_ASESMEN_DOKTER_SLBedah" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_SLBedah">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Bedah </label>
                                  </div>
                                </div>
                              </div>
                              <div class="row collapse" id="EMR_ASESMEN_DOKTER_SLBedah1">
                                <div class="col-md-12">
                                  <center>
                                    <!--a class="btn bg-green-jungle bg-font-green-jungle" id="EMR_ASESMEN_DOKTER_btnLokalisTubuh"><center><b><i class="fa fa-plus"></i> Status Lokalis Bedah</b></center></a-->
                                  </center>
                                </div>
                              </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTulang" name="EMR_ASESMEN_DOKTER_SLTulang" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_SLTulang">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Orthopedi </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLTulang1">
                                <div class="col-md-12">
                                  <center>
                                    <!--a class="btn bg-green-jungle bg-font-green-jungle" id="EMR_ASESMEN_DOKTER_btnLokalisTulang"><center><b><i class="fa fa-plus"></i> Status Lokalis Orthopedi</b></center></a-->
                                  </center>
                                </div>
                              </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLRec" name="EMR_ASESMEN_DOKTER_SLRec" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_SLRec">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Rectum </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLRec2">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="portlet light bordered">
                                        <div class="portlet-body">
                                          <div class="tab-content">
                                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <div class="col-md-12">
                                                <span>Tonus Sphincter Ani</span>
                                                <div class="form-group">
                                                  <div class="input-group">
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-3 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLRectumA1" name="EMR_ASESMEN_DOKTER_SLRectumA1" value="Normal" class="md-check" checked>
                                                        <label for="EMR_ASESMEN_DOKTER_SLRectumA1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Normal </label>
                                                      </div>
                                                      <div class="col-md-3 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLRectumA2" name="EMR_ASESMEN_DOKTER_SLRectumA2" value="Meningkat" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLRectumA2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Meningkat </label>
                                                      </div>
                                                      <div class="col-md-3 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLRectumA3" name="EMR_ASESMEN_DOKTER_SLRectumA3" value="Menurun" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLRectumA3">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Menurun </label>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <span>Teraba Massa</span>
                                                <div class="form-group">
                                                  <div class="input-group">
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLRectumB1" name="EMR_ASESMEN_DOKTER_SLRectumB1" value="Tidak" class="md-check" checked>
                                                        <label for="EMR_ASESMEN_DOKTER_SLRectumB1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Tidak </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLRectumB2" name="EMR_ASESMEN_DOKTER_SLRectumB2" value="Ya" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLRectumB2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ya </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLRectumB3div">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_SLRectumB3" name="EMR_ASESMEN_DOKTER_SLRectumB3" value="" class="form-control">
                                                        <input type="hidden" id="EMR_ASESMEN_DOKTER_SLRectumB3status" name="EMR_ASESMEN_DOKTER_SLRectumB3status" value="Tidak" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <span>Nyeri</span>
                                                <div class="form-group">
                                                  <div class="input-group">
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLRectumC1" name="EMR_ASESMEN_DOKTER_SLRectumC1" value="Tidak" class="md-check" checked>
                                                        <label for="EMR_ASESMEN_DOKTER_SLRectumC1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Tidak </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLRectumC2" name="EMR_ASESMEN_DOKTER_SLRectumC2" value="Ya" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLRectumC2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ya </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLRectumC3div">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_SLRectumC3" name="EMR_ASESMEN_DOKTER_SLRectumC3" value="" class="form-control">
                                                        <input type="hidden" id="EMR_ASESMEN_DOKTER_SLRectumC3status" name="EMR_ASESMEN_DOKTER_SLRectumC3status" value="Tidak" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <span>Kosong</span>
                                                <div class="form-group">
                                                  <div class="input-group">
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLRectumD1" name="EMR_ASESMEN_DOKTER_SLRectumD1" value="Ya" class="md-check" checked>
                                                        <label for="EMR_ASESMEN_DOKTER_SLRectumD1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ya </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLRectumD2" name="EMR_ASESMEN_DOKTER_SLRectumD2" value="Tidak/Isi" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLRectumD2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Tidak/Isi </label>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <span>Lain-Lain</span>
                                                <input type="text" id="EMR_ASESMEN_DOKTER_SLRectumE" name="EMR_ASESMEN_DOKTER_SLRectumE" value="" class="form-control" placeholder="Lain lain">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTHT" name="EMR_ASESMEN_DOKTER_SLTHT" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_SLTHT">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis THT </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLTHT2">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="portlet light bordered">
                                        <div class="portlet-title tabbable-line">
                                          <div class="caption">
                                            <span class="caption-subject font-dark bold">Telinga</span>
                                          </div>
                                        </div>
                                        <div class="portlet-body">
                                          <div class="tab-content">
                                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <div class="col-md-6 portlet light bordered">
                                                <div class="portlet-title tabbable-line">
                                                  <div class="caption">
                                                    <span class="caption-subject font-dark bold">Telinga Kanan</span>
                                                  </div>
                                                </div>
                                                <div class="portlet-body">
                                                  <div class="tab-content">
                                                    <div class="col-md-12">
                                                      <span>Saluran</span>
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKananA1" name="EMR_ASESMEN_DOKTER_SLTelingaKananA1" value="Normal" class="md-check" checked>
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKananA1">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Normal </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKananA2" name="EMR_ASESMEN_DOKTER_SLTelingaKananA2" value="Tertutup Serumen" class="md-check">
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKananA2">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Tertutup Serumen </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKananA3" name="EMR_ASESMEN_DOKTER_SLTelingaKananA3" value="Terdapat Cairan" class="md-check">
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKananA3">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Terdapat Cairan </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKananA4" name="EMR_ASESMEN_DOKTER_SLTelingaKananA4" value="Lainnya" class="md-check">
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKananA4">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Lainnya </label>
                                                            </div>
                                                            <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLTelingaKananA5div">
                                                              <input type="text" id="EMR_ASESMEN_DOKTER_SLTelingaKananA5" name="EMR_ASESMEN_DOKTER_SLTelingaKananA5" value="" class="form-control" placeholder="Lain lain">
                                                              <input type="hidden" id="EMR_ASESMEN_DOKTER_SLTelingaKananA5status" name="EMR_ASESMEN_DOKTER_SLTelingaKananA5status" value="Tidak" class="form-control">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <span>Membran Timpani</span>
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKananB1" name="EMR_ASESMEN_DOKTER_SLTelingaKananB1" value="Intak" class="md-check" checked>
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKananB1">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Intak </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKananB2" name="EMR_ASESMEN_DOKTER_SLTelingaKananB2" value="Tidak Intak" class="md-check">
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKananB2">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Tidak Intak </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKananB3" name="EMR_ASESMEN_DOKTER_SLTelingaKananB3" value="Lainnya" class="md-check">
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKananB3">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Lainnya </label>
                                                            </div>
                                                            <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLTelingaKananB4div">
                                                              <input type="text" id="EMR_ASESMEN_DOKTER_SLTelingaKananB4" name="EMR_ASESMEN_DOKTER_SLTelingaKananB4" value="" class="form-control" placeholder="Lain lain">
                                                              <input type="hidden" id="EMR_ASESMEN_DOKTER_SLTelingaKananB4status" name="EMR_ASESMEN_DOKTER_SLTelingaKananB4status" value="Tidak" class="form-control">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6 portlet light bordered">
                                                <div class="portlet-title tabbable-line">
                                                  <div class="caption">
                                                    <span class="caption-subject font-dark bold">Telinga Kiri</span>
                                                  </div>
                                                </div>
                                                <div class="portlet-body">
                                                  <div class="tab-content">
                                                    <div class="col-md-12">
                                                      <span>Saluran</span>
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKiriA1" name="EMR_ASESMEN_DOKTER_SLTelingaKiriA1" value="Normal" class="md-check" checked>
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKiriA1">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Normal </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKiriA2" name="EMR_ASESMEN_DOKTER_SLTelingaKiriA2" value="Tertutup Serumen" class="md-check">
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKiriA2">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Tertutup Serumen </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKiriA3" name="EMR_ASESMEN_DOKTER_SLTelingaKiriA3" value="Terdapat Cairan" class="md-check">
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKiriA3">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Terdapat Cairan </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKiriA4" name="EMR_ASESMEN_DOKTER_SLTelingaKiriA4" value="Lainnya" class="md-check">
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKiriA4">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Lainnya </label>
                                                            </div>
                                                            <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLTelingaKiriA5div">
                                                              <input type="text" id="EMR_ASESMEN_DOKTER_SLTelingaKiriA5" name="EMR_ASESMEN_DOKTER_SLTelingaKiriA5" value="" class="form-control" placeholder="Lain lain">
                                                              <input type="hidden" id="EMR_ASESMEN_DOKTER_SLTelingaKiriA5status" name="EMR_ASESMEN_DOKTER_SLTelingaKiriA5status" value="Tidak" class="form-control">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <span>Membran Timpani</span>
                                                      <div class="form-group">
                                                        <div class="input-group">
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKiriB1" name="EMR_ASESMEN_DOKTER_SLTelingaKiriB1" value="Intak" class="md-check" checked>
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKiriB1">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Intak </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKiriB2" name="EMR_ASESMEN_DOKTER_SLTelingaKiriB2" value="Tidak Intak" class="md-check">
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKiriB2">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Tidak Intak </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTelingaKiriB3" name="EMR_ASESMEN_DOKTER_SLTelingaKiriB3" value="Lainnya" class="md-check">
                                                              <label for="EMR_ASESMEN_DOKTER_SLTelingaKiriB3">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Lainnya </label>
                                                            </div>
                                                            <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLTelingaKiriB4div">
                                                              <input type="text" id="EMR_ASESMEN_DOKTER_SLTelingaKiriB4" name="EMR_ASESMEN_DOKTER_SLTelingaKiriB4" value="" class="form-control" placeholder="Lain lain">
                                                              <input type="hidden" id="EMR_ASESMEN_DOKTER_SLTelingaKiriB4status" name="EMR_ASESMEN_DOKTER_SLTelingaKiriB4status" value="Tidak" class="form-control">
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
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="portlet light bordered">
                                        <div class="portlet-title tabbable-line">
                                          <div class="caption">
                                            <span class="caption-subject font-dark bold">Hidung</span>
                                          </div>
                                        </div>
                                        <div class="portlet-body">
                                          <div class="tab-content">
                                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <div class="col-md-6">
                                                <span>Nose Septum</span>
                                                <div class="form-group">
                                                  <div class="input-group">
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLHidungA1" name="EMR_ASESMEN_DOKTER_SLHidungA1" value="Ditengah" class="md-check" checked>
                                                        <label for="EMR_ASESMEN_DOKTER_SLHidungA1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ditengah </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLHidungA2" name="EMR_ASESMEN_DOKTER_SLHidungA2" value="Deviasi" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLHidungA2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Deviasi </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLHidungA3" name="EMR_ASESMEN_DOKTER_SLHidungA3" value="Lainnya" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLHidungA3">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Lainnya </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLHidungA4div">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_SLHidungA4" name="EMR_ASESMEN_DOKTER_SLHidungA4" value="" class="form-control" placeholder="Lain lain">
                                                        <input type="hidden" id="EMR_ASESMEN_DOKTER_SLHidungA4status" name="EMR_ASESMEN_DOKTER_SLHidungA4status" value="Tidak" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <span>Nose Konka</span>
                                                <div class="form-group">
                                                  <div class="input-group">
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLHidungB1" name="EMR_ASESMEN_DOKTER_SLHidungB1" value="Normal" class="md-check" checked>
                                                        <label for="EMR_ASESMEN_DOKTER_SLHidungB1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Normal </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLHidungB2" name="EMR_ASESMEN_DOKTER_SLHidungB2" value="Membesar" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLHidungB2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Membesar </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLHidungB3" name="EMR_ASESMEN_DOKTER_SLHidung3" value="Hiperemi" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLHidungB3">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Hiperemi </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLHidungB4" name="EMR_ASESMEN_DOKTER_SLHidungB4" value="Lainnya" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLHidungB4">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Lainnya </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLHidungB5div">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_SLHidungB5" name="EMR_ASESMEN_DOKTER_SLHidungB5" value="" class="form-control" placeholder="Lain lain">
                                                        <input type="hidden" id="EMR_ASESMEN_DOKTER_SLHidungB5status" name="EMR_ASESMEN_DOKTER_SLHidungB5status" value="Tidak" class="form-control">
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
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="portlet light bordered">
                                        <div class="portlet-title tabbable-line">
                                          <div class="caption">
                                            <span class="caption-subject font-dark bold">Tenggorokan</span>
                                          </div>
                                        </div>
                                        <div class="portlet-body">
                                          <div class="tab-content">
                                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <div class="col-md-6">
                                                <span>Pharyn/Faring</span>
                                                <div class="form-group">
                                                  <div class="input-group">
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTenggorokanA1" name="EMR_ASESMEN_DOKTER_SLTenggorokanA1" value="Normal" class="md-check" checked>
                                                        <label for="EMR_ASESMEN_DOKTER_SLTenggorokanA1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Normal </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTenggorokanA2" name="EMR_ASESMEN_DOKTER_SLTenggorokanA2" value="Hiperemi" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLTenggorokanA2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Hiperemi </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTenggorokanA3" name="EMR_ASESMEN_DOKTER_SLTenggorokanA3" value="Lainnya" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLTenggorokanA3">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Lainnya </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLTenggorokanA4div">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_SLTenggorokanA4" name="EMR_ASESMEN_DOKTER_SLTenggorokanA4" value="" class="form-control" placeholder="Lain lain">
                                                        <input type="hidden" id="EMR_ASESMEN_DOKTER_SLTenggorokanA4status" name="EMR_ASESMEN_DOKTER_SLTenggorokanA4status" value="Tidak" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <span>Tonsil/Amandel</span>
                                                <div class="form-group">
                                                  <div class="input-group">
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTenggorokanB1" name="EMR_ASESMEN_DOKTER_SLTenggorokanB1" value="Normal" class="md-check" checked>
                                                        <label for="EMR_ASESMEN_DOKTER_SLTenggorokanB1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Normal </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTenggorokanB2" name="EMR_ASESMEN_DOKTER_SLTenggorokanB2" value="Hiperemi" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLTenggorokanB2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Hiperemi </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTenggorokanB3" name="EMR_ASESMEN_DOKTER_SLTenggorokan3" value="Eksudat" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLTenggorokanB3">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Eksudat </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLTenggorokanB4" name="EMR_ASESMEN_DOKTER_SLTenggorokanB4" value="Membesar" class="md-check">
                                                        <label for="EMR_ASESMEN_DOKTER_SLTenggorokanB4">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Membesar </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLTenggorokanB5div">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_SLTenggorokanB5" name="EMR_ASESMEN_DOKTER_SLTenggorokanB5" value="" class="form-control">
                                                        <input type="hidden" id="EMR_ASESMEN_DOKTER_SLTenggorokanB5status" name="EMR_ASESMEN_DOKTER_SLTenggorokanB5status" value="Tidak" class="form-control">
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
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLMata" name="EMR_ASESMEN_DOKTER_SLMata" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_SLMata">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Mata </label>
                                  </div>
                                </div>
                              </div>
                                <div id="EMR_ASESMEN_DOKTER_SLMata2" class="col-md-12 collapse">
                                  <div class="col-md-12 portlet light bordered">
                                    <div class="portlet-body">
                                      <div class="row tab-content">
                                        <div class="col-md-12">
                                          <span class="col-md-4"><center><b>OD</b></center></span>
                                          <span class="col-md-4"><center><b>Pemeriksaan</b></center></span>
                                          <span class="col-md-4"><center><b>OS</b></center></span>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_AVOD" name="EMR_ASESMEN_DOKTER_AVOD" value="" class="form-control" placeholder="Masukan AV">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Visus</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_AVOS" name="EMR_ASESMEN_DOKTER_AVOS" value="" class="form-control" placeholder="Masukan AV">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_GerakMataOD" name="EMR_ASESMEN_DOKTER_GerakMataOD" value="Gerakan bebas ke semua arah" class="form-control" placeholder="Masukan gerakan">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Gerakan bola mata</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_GerakMataOS" name="EMR_ASESMEN_DOKTER_GerakMataOS" value="Gerakan bebas ke semua arah" class="form-control" placeholder="Masukan gerakan">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_PosisiMataOD" name="EMR_ASESMEN_DOKTER_PosisiMataOD" value="Normal" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Posisi</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_PosisiMataOS" name="EMR_ASESMEN_DOKTER_PosisiMataOS" value="Normal" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_PalpebraMataOD" name="EMR_ASESMEN_DOKTER_PalpebraMataOD" value="Normal" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Palpebra</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_PalpebraMataOS" name="EMR_ASESMEN_DOKTER_PalpebraMataOS" value="Normal" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-5 btn-group btn-group-solid">
                                            <button type="button" id="EMR_ASESMEN_DOKTER_KonjungtivaMataSilOD" name="EMR_ASESMEN_DOKTER_KonjungtivaMataSilOD" class="btn yellow" style="width:40%" value="inj silier -"><b> inj silier - </b></button>
                                            <button type="button" class="btn white" style="width:20%" disabled="true"></button>
                                            <button type="button" id="EMR_ASESMEN_DOKTER_KonjungtivaMataCojOD" name="EMR_ASESMEN_DOKTER_KonjungtivaMataCojOD" class="btn yellow" style="width:40%" value="inj coj -"><b> inj coj - </b></button>
                                          </div>
                                          <span class="col-md-2"><center><b>Konjungtiva</b></center></span>
                                          <div class="col-md-5 btn-group btn-group-solid">
                                            <button type="button" id="EMR_ASESMEN_DOKTER_KonjungtivaMataCojOS" name="EMR_ASESMEN_DOKTER_KonjungtivaMataCojOS" class="btn yellow" style="width:40%" value="inj coj -"><b> inj coj - </b></button>
                                            <button type="button" class="btn white" style="width:20%" disabled="true"></button>
                                            <button type="button" id="EMR_ASESMEN_DOKTER_KonjungtivaMataSilOS" name="EMR_ASESMEN_DOKTER_KonjungtivaMataSilOS" class="btn yellow" style="width:40%" value="inj silier -"><b> inj silier - </b></button>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_KorneaMataOD" name="EMR_ASESMEN_DOKTER_KorneaMataOD" value="Jernih" class="form-control" placeholder="">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Korena kanan</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Kornea</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_KorneaMataOS" name="EMR_ASESMEN_DOKTER_KorneaMataOS" value="Jernih" class="form-control" placeholder="">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Kornea Kiri</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_BMDMataOD" name="EMR_ASESMEN_DOKTER_BMDMataOD" value="Dalam" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>BMD</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_BMDMataOS" name="EMR_ASESMEN_DOKTER_BMDMataOS" value="Dalam" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_IrisMataOD" name="EMR_ASESMEN_DOKTER_IrisMataOD" value="Normal" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Iris</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_IrisMataOS" name="EMR_ASESMEN_DOKTER_IrisMataOS" value="Normal" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-2"><span> Kanan </span></div>
                                          <div class="col-md-2">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_pupilKanan2" name="EMR_ASESMEN_DOKTER_pupilKanan2" value="3" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                                <i style="font-size:12px"><b>mm</b></i>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4"><span><center><b> Pupil </b></center></span></div>
                                          <div class="col-md-2">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_pupilKiri2" name="EMR_ASESMEN_DOKTER_pupilKiri2" value="3" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                                <i style="font-size:12px"><b>mm</b></i>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-2"><span> Kiri </span></div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_AWAL_BIDAN_DOKTER_PupilMataOD" name="EMR_ASESMEN_AWAL_BIDAN_DOKTER_PupilMataOD" value="" class="form-control" placeholder="Keterangan pupil kanan">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Keterangan pupil kanan</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4" id="EMR_ASESMEN_DOKTER_pupilstat2"><b><center>Isokor</center></b></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_AWAL_BIDAN_DOKTER_PupilMataOS" name="EMR_ASESMEN_AWAL_BIDAN_DOKTER_PupilMataOS" value="" class="form-control" placeholder="Keterangan pupil kiri">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Keterangan pupil kiri</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_LensaMataOD" name="EMR_ASESMEN_DOKTER_LensaMataOD" value="Jernih" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Lensa</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_LensaMataOS" name="EMR_ASESMEN_DOKTER_LensaMataOS" value="Jernih" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <button type="button" id="EMR_ASESMEN_DOKTER_VitreusMataOD" name="EMR_ASESMEN_DOKTER_VitreusMataOD" class="btn green" style="width:100%" value="Refleks fundus +"><b> Refleks fundus + </b></button>
                                          </div>
                                          <span class="col-md-4"><center><b>Vitreus</br>Funduskopi</b></center></span>
                                          <div class="col-md-4">
                                            <button type="button" id="EMR_ASESMEN_DOKTER_VitreusMataOS" name="EMR_ASESMEN_DOKTER_VitreusMataOS" class="btn green" style="width:100%" value="Refleks fundus +"><b> Refleks fundus + </b></button>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <button type="button" id="EMR_ASESMEN_DOKTER_TIOMataOD" name="EMR_ASESMEN_DOKTER_TIOMataOD" class="btn green" style="width:100%" value="Normal"><b> Normal </b></button>
                                          </div>
                                          <span class="col-md-4"><center><b>TIO</b></center></span>
                                          <div class="col-md-4">
                                            <button type="button" id="EMR_ASESMEN_DOKTER_TIOMataOS" name="EMR_ASESMEN_DOKTER_TIOMataOS" class="btn green" style="width:100%" value="Normal"><b> Normal </b></button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLNeurologis" name="EMR_ASESMEN_DOKTER_SLNeurologis" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_SLNeurologis">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Pemeriksaan Neurologis </label>
                                  </div>
                                </div>
                              </div>
                                <div class="row collapse" id="EMR_ASESMEN_DOKTER_SLNeurologis1">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_SLNeurologis2" name="EMR_ASESMEN_DOKTER_SLNeurologis2" class="form-control">
                                                <label for="form_control"> Pemeriksaan Neurologis</label>
                                                <span class="help-block">Masukkan Pemeriksaan Neurologis</span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLJiwa" name="EMR_ASESMEN_DOKTER_SLJiwa" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_SLJiwa">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Pemeriksaan Jiwa </label>
                                  </div>
                                </div>
                              </div>
                                <div class="row collapse" id="EMR_ASESMEN_DOKTER_SLJiwa1">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_SLJiwa2" name="EMR_ASESMEN_DOKTER_SLJiwa2" class="form-control">
                                                <label for="form_control">Pemeriksaan Jiwa</label>
                                                <span class="help-block">Masukkan Pemeriksaan Jiwa</span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLKulit" name="EMR_ASESMEN_DOKTER_SLKulit" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_SLKulit">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Kulit </label>
                                  </div>
                                </div>
                              </div>
                                <div class="row collapse" id="EMR_ASESMEN_DOKTER_SLKulit1">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_SLKulit2" name="EMR_ASESMEN_DOKTER_SLKulit2" class="form-control">
                                                <label for="form_control"> Status Lokalis Kulit</label>
                                                <span class="help-block">Masukkan Status Lokalis Kulit</span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLObsgin" name="EMR_ASESMEN_DOKTER_SLObsgin" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_SLObsgin">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Obsgin </label>
                                  </div>
                                </div>
                              </div>
                                <div class="row collapse" id="EMR_ASESMEN_DOKTER_SLObsgin1">
                                  <div class="col-md-12">
                                    <div class="portlet light bordered">
                                      <div class="portlet-body">
                                        <div class="tab-content">
                                          <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-12 md-checkbox">
                                                <div class="row">
                                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLObstetric" name="EMR_ASESMEN_DOKTER_SLObstetric" value="" class="md-check">
                                                  <label for="EMR_ASESMEN_DOKTER_SLObstetric">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Status Lokalis Obstetric </label>
                                                </div>
                                              </div>
                                              <input type="hidden" id="EMR_ASESMEN_DOKTER_SLObstetricStatus" name="EMR_ASESMEN_DOKTER_SLObstetricStatus" value="Tidak" class="form-control">
                                            </div>
                                              <div class="row collapse" id="EMR_ASESMEN_DOKTER_SLObstetric2">
                                                  <div class="col-md-12">
                                                    <div class="portlet light bordered">
                                                      <div class="portlet-body">
                                                        <div class="tab-content">
                                                          <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricInspeksi" name="EMR_ASESMEN_DOKTER_SLObstetricInspeksi" value="" class="form-control">
                                                                  <label for="form_control_1">Inspeksi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12"><center><b>Palpasi</b></center></label>
                                                            <div class="col-md-3">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetrictfu" name="EMR_ASESMEN_DOKTER_SLObstetrictfu" value="" class="form-control">
                                                                  <label for="form_control_1">TFU</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                  <i style="font-size:12px"><b>Cm</b></i>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetriclp" name="EMR_ASESMEN_DOKTER_SLObstetriclp" value="" class="form-control">
                                                                  <label for="form_control_1">LP</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetrichis" name="EMR_ASESMEN_DOKTER_SLObstetrichis" value="" class="form-control">
                                                                  <label for="form_control_1">HIS</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                  <i style="font-size:12px"><b>x/m</b></i>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <label for="form_control_1">Kekuatan</label>
                                                              <select class="bs-select form-control" id="EMR_ASESMEN_DOKTER_SLObstetricKekuatan" name="EMR_ASESMEN_DOKTER_SLObstetricKekuatan">
                                                                <option value='Kuat'>Kuat</option>
                                                                <option value='Sedang' selected>Sedang</option>
                                                                <option value='Lemah'>Lemah</option>
                                                              </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetrictbbj" name="EMR_ASESMEN_DOKTER_SLObstetrictbbj" value="" class="form-control">
                                                                  <label for="form_control_1">TBBJ</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                  <i style="font-size:12px"><b>gram</b></i>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricleopoid1" name="EMR_ASESMEN_DOKTER_SLObstetricleopoid1" value="" class="form-control">
                                                                  <label for="form_control_1">Leopoid 1</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricleopoid2" name="EMR_ASESMEN_DOKTER_SLObstetricleopoid2" value="" class="form-control">
                                                                  <label for="form_control_1">Leopoid 2</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricleopoid3" name="EMR_ASESMEN_DOKTER_SLObstetricleopoid3" value="" class="form-control">
                                                                  <label for="form_control_1">Leopoid 3</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <label>Leopoid 4</label>
                                                              <div class="md-radio-inline">
                                                                <div class="md-radio">
                                                                  <input type="radio" id="EMR_ASESMEN_DOKTER_SLObstetricleopoid4kon" name="EMR_ASESMEN_DOKTER_SLObstetricleopoid4" checked="true" class="md-radiobtn" value="">
                                                                  <label for="EMR_ASESMEN_DOKTER_SLObstetricleopoid4kon">
                                                                  <span></span>
                                                                  <span class="check"></span>
                                                                  <span class="box"></span> Konvergen </label>
                                                                </div>
                                                                <div class="md-radio">
                                                                  <input type="radio" id="EMR_ASESMEN_DOKTER_SLObstetricleopoid4dev" name="EMR_ASESMEN_DOKTER_SLObstetricleopoid4" class="md-radiobtn" value="">
                                                                  <label for="EMR_ASESMEN_DOKTER_SLObstetricleopoid4dev">
                                                                  <span></span>
                                                                  <span class="check"></span>
                                                                  <span class="box"></span> Devergen </label>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12" id="EMR_ASESMEN_DOKTER_SLObstetricleopoid4kon2">
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricleopoid4konKanan" name="EMR_ASESMEN_DOKTER_SLObstetricleopoid4konKanan" value="" class="form-control">
                                                                    <label for="form_control_1">Konvergen Kanan</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricleopoid4konKiri" name="EMR_ASESMEN_DOKTER_SLObstetricleopoid4konKiri" value="" class="form-control">
                                                                    <label for="form_control_1">Konvergen Kiri</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SLObstetricleopoid4dev2">
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricleopoid4devKanan" name="EMR_ASESMEN_DOKTER_SLObstetricleopoid4devKanan" value="" class="form-control">
                                                                    <label for="form_control_1">Devergen Kanan</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricleopoid4devKiri" name="EMR_ASESMEN_DOKTER_SLObstetricleopoid4devKiri" value="" class="form-control">
                                                                    <label for="form_control_1">Devergen Kiri</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12"><center><b>VT</b></center></label>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricpembukaan" name="EMR_ASESMEN_DOKTER_SLObstetricpembukaan" value="" class="form-control">
                                                                  <label for="form_control_1">Pembukaan</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricpenipisan" name="EMR_ASESMEN_DOKTER_SLObstetricpenipisan" value="" class="form-control">
                                                                  <label for="form_control_1">Penipisan</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                  <i style="font-size:12px"><b>%</b></i>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Selaput Ketuban : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLObstetricbtnKetuban" name="EMR_ASESMEN_DOKTER_SLObstetricbtnKetuban" class="btn green col-md-12" value="+"><b> + </b></button>
                                                            </div>
                                                            <div class="col-md-6 collapse" id="EMR_ASESMEN_DOKTER_SLObstetricKetubantxt2">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricKetubantxt" name="EMR_ASESMEN_DOKTER_SLObstetricKetubantxt" value="" class="form-control">
                                                                  <label for="form_control_1">Selaput Ketuban</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricrabahodge" name="EMR_ASESMEN_DOKTER_SLObstetricrabahodge" value="" class="form-control">
                                                                  <label for="form_control_1">Teraba kepala setinggi hodge</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12"><center><b>Auskultasi</b></center></label>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricDJJ" name="EMR_ASESMEN_DOKTER_SLObstetricDJJ" value="" class="form-control">
                                                                  <label for="form_control_1">DJJ</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                  <i style="font-size:12px"><b>x/m</b></i>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLObstetricLain2" name="EMR_ASESMEN_DOKTER_SLObstetricLain2" value="" class="form-control">
                                                                  <label for="form_control_1">Lain-Lain</label>
                                                                  <span class="help-block">Masukkan Lain-Lain</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-12 md-checkbox">
                                                <div class="row">
                                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_SLGinekologis" name="EMR_ASESMEN_DOKTER_SLGinekologis" value="" class="md-check">
                                                  <label for="EMR_ASESMEN_DOKTER_SLGinekologis">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Status Lokalis Ginekologis </label>
                                                </div>
                                              </div>
                                              <input type="hidden" id="EMR_ASESMEN_DOKTER_SLGinekologisStatus" name="EMR_ASESMEN_DOKTER_SLGinekologisStatus" value="Tidak" class="form-control">
                                            </div>
                                              <div class="row collapse" id="EMR_ASESMEN_DOKTER_SLGinekologis2">
                                                  <div class="col-md-12">
                                                    <div class="portlet light bordered">
                                                      <div class="portlet-body">
                                                        <div class="tab-content">
                                                          <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                            <label class="col-md-12">Pemeriksaan Abdomen</label>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisInspeksi" name="EMR_ASESMEN_DOKTER_SLGinekologisInspeksi" value="" class="form-control">
                                                                  <label for="form_control_1">Inspeksi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12">Palpasi</label>
                                                            <div class="col-md-6">
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnSupel" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnSupel" class="btn green col-md-12" value="Supel"><b> Supel </b></button>
                                                            </div>
                                                            <div class="col-md-12">
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Nyeri Tekan : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnNyeTek" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnNyeTek" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Benjolan : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnBenjolan" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnBenjolan" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Defans muscular : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnDefmus" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnDefmus" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisPalpasiTxt" name="EMR_ASESMEN_DOKTER_SLGinekologisPalpasiTxt" value="" class="form-control">
                                                                  <label for="form_control_1">lain - lain</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisPerkusiTxt" name="EMR_ASESMEN_DOKTER_SLGinekologisPerkusiTxt" value="" class="form-control">
                                                                  <label for="form_control_1">Perkusi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisAuskultasiTxt" name="EMR_ASESMEN_DOKTER_SLGinekologisAuskultasiTxt" value="" class="form-control">
                                                                  <label for="form_control_1">Auskultasi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12"><center><b>Pemeriksaan Pelvik</b></center></label>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisPelvikTxt" name="EMR_ASESMEN_DOKTER_SLGinekologisPelvikTxt" value="" class="form-control">
                                                                  <label for="form_control_1">Inspeksi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12">Inspekuio</label>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisDindingvagTxt" name="EMR_ASESMEN_DOKTER_SLGinekologisDindingvagTxt" value="Normal" class="form-control">
                                                                  <label for="form_control_1">Dinding Vagina</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Nyeri : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnNyeriInspek" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnNyeriInspek" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-12">
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Massa : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnMassa" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnMassa" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6 collapse" id="EMR_ASESMEN_DOKTER_SLGinekologisMassatxt2">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisMassatxt" name="EMR_ASESMEN_DOKTER_SLGinekologisMassatxt" value="" class="form-control">
                                                                  <label for="form_control_1">Massa</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisPorUkTxt" name="EMR_ASESMEN_DOKTER_SLGinekologisPorUkTxt" value="Normal" class="form-control">
                                                                  <label for="form_control_1">Porsio Ukuran</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Fluksus : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnFluksus" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnFluksus" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Fluor : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnFluor" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnFluor" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Erosi : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnErosi" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnErosi" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6 collapse" id="EMR_ASESMEN_DOKTER_SLGinekologisErositxt2">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisErositxt" name="EMR_ASESMEN_DOKTER_SLGinekologisErositxt" value="" class="form-control">
                                                                  <label for="form_control_1">Erosi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisOUEtxt" name="EMR_ASESMEN_DOKTER_SLGinekologisOUEtxt" value="" class="form-control">
                                                                  <label for="form_control_1">OUE</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisInspektxt" name="EMR_ASESMEN_DOKTER_SLGinekologisInspektxt" value="" class="form-control">
                                                                  <label for="form_control_1">Lain - lain</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12"><center><b>VT/Bimanual palpasi</b></center></label>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Uterus : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnUterus" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnUterus" class="btn green col-md-12" value="Antefleksi"><b> Antefleksi </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisBentukVTtxt" name="EMR_ASESMEN_DOKTER_SLGinekologisBentukVTtxt" value="Normal" class="form-control">
                                                                  <label for="form_control_1">Bentuk</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Nyeri : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnNyeriVT" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnNyeriVT" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisUkurantxt" name="EMR_ASESMEN_DOKTER_SLGinekologisUkurantxt" value="Sebesar telur ayam" class="form-control">
                                                                  <label for="form_control_1">Ukuran</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Masa Adnexa Kanan : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnAdnexaKanan" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnAdnexaKanan" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6 collapse" id="EMR_ASESMEN_DOKTER_SLGinekologisAdnexaKanantxt2">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisAdnexaKanantxt" name="EMR_ASESMEN_DOKTER_SLGinekologisAdnexaKanantxt" value="" class="form-control">
                                                                  <label for="form_control_1">Adnexa Kanan</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Masa Adnexa Kiri : </span></br>
                                                              <button type="button" id="EMR_ASESMEN_DOKTER_SLGinekologisbtnAdnexaKiri" name="EMR_ASESMEN_DOKTER_SLGinekologisbtnAdnexaKiri" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6 collapse" id="EMR_ASESMEN_DOKTER_SLGinekologisAdnexaKiritxt2">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisAdnexaKiritxt" name="EMR_ASESMEN_DOKTER_SLGinekologisAdnexaKiritxt" value="" class="form-control">
                                                                  <label for="form_control_1">Adnexa Kiri</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisKayumDougtxt" name="EMR_ASESMEN_DOKTER_SLGinekologisKayumDougtxt" value="Dalam Batas Normal" class="form-control">
                                                                  <label for="form_control_1">Kayum Douglasi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SLGinekologisVTtxt" name="EMR_ASESMEN_DOKTER_SLGinekologisVTtxt" value="" class="form-control">
                                                                  <label for="form_control_1">Lain - lain</label>
                                                                  <span class="help-block">Masukkan Data</span>
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
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Halaman4">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-12">
                                  <div class="form-group form-md-line-input form-md-floating-label has-success">
                                      <textarea class="form-control" id="EMR_ASESMEN_DOKTER_Diagnosis" name="EMR_ASESMEN_DOKTER_Diagnosis"></textarea>
                                      <label for="form_control_1">Diagnosis</label>
                                      <span class="help-block">Masukkan Diagnosis</span>
                                  </div>
                                  <div class="form-group form-md-line-input form-md-floating-label has-success">
                                      <textarea class="form-control" id="EMR_ASESMEN_DOKTER_DiagnosisBanding" name="EMR_ASESMEN_DOKTER_DiagnosisBanding"></textarea>
                                      <label for="form_control_1">Diagnosis Banding</label>
                                      <span class="help-block">Masukkan Diagnosis Banding</span>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Halaman5">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Obat" name="EMR_ASESMEN_DOKTER_Obat" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Obat">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Obat </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Obat2">
                                  <div class="row">
                                    <a class="btn btn-outline blue" href="#EMR_ASESMEN_DOKTER_ObatModal" data-toggle="modal"> Obat </a>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                                <div id="EMR_ASESMEN_DOKTER_ObatModal" class="modal" data-width="100%" style="width:90%;">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                        <button disable type="button" class="btn white" style="height:55px; width:30%">
                                          <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                          <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                                        </button>
                                        <button disable type="button" class="btn white" style="height:55px; width:70%">
                                          <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                          <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                        </button>
                                      </div>
                                    </div>
                                    <div class="modal-header bg-blue bg-font-blue col-md-4">
                                      <h4 class="modal-title"><center><b>Obat Pasien</b></center></h4>
                                    </div>
                                    <div class="col-md-4 bg-blue">
                                      <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                        <a type="button" id="EMR_ASESMEN_DOKTER_ObatbtnObatSatuan" class="btn disabled white" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Satuan</b></a>
                                        <a type="button" id="EMR_ASESMEN_DOKTER_ObatbtnObatRacik" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Racik</b></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-body">
                                    <input type="hidden" id="EMR_ASESMEN_DOKTER_ObatstatObat" value="Satuan">
                                    <div class="row" id="EMR_ASESMEN_DOKTER_ObatformObatSatuan">
                                      <div class="col-md-4">
                                        <div class="portlet light bordered">
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
                                                      <input type="text" name="EMR_ASESMEN_DOKTER_Obatobatsatuan[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>
                                                      <input type="hidden" name="EMR_ASESMEN_DOKTER_Obatidobatsatuan[]" class="form-control project"/>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                      <label class="control-label" style="font-size:14px">Jumlah Obat</label>
                                                      <input type="text" id="EMR_ASESMEN_DOKTER_ObatSatuanJumlah" name="EMR_ASESMEN_DOKTER_ObatSatuanJumlah[]" placeholder="Jumlah" class="form-control"/>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                  <div class="col-md-12">
                                                    <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <div class="col-md-3">
                                                      <input type="text" id="EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1" name="EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai1[]" class="form-control"/>
                                                    </div>
                                                    <div class="col-md-1">
                                                      <p class="form-control-static"> dd </p>
                                                    </div>
                                                    <div class="col-md-3">
                                                      <input type="text" id="EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2" name="EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai2[]" class="form-control"/>
                                                    </div>
                                                    <div class="col-md-5">
                                                      <select class="form-control" id="EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3" name="EMR_ASESMEN_DOKTER_ObatSatuanAturanPakai3[]">
                                                            <option value="Tetes">Tetes</option>
                                                            <option value="Oles">Oles</option>
                                                            <option selected="selected" value="Minum">Minum</option>
                                                            <option value="Vaginal Suppositoria">Vaginal Suppositoria</option>
                                                            <option value="Rectal Suppositoria">Rectal Suppositoria</option>
                                                        </select>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                  <div class="col-md-12">
                                                    <div class="col-md-6">
                                                      <select class="form-control" id="EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1" name="EMR_ASESMEN_DOKTER_ObatSatuanKetPakai1[]">
                                                            <option value="a.c.">a.c.</option>
                                                            <option value="p.c.">p.c.</option>
                                                            <option value="d.c.">d.c.</option>
                                                            <option value="ad.lib.">ad.lib.</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <select class="form-control" id="EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2" name="EMR_ASESMEN_DOKTER_ObatSatuanKetPakai2[]">
                                                            <option value="p.r.n.">p.r.n.</option>
                                                            <option value="Sampai Habis">Sampai Habis</option>
                                                        </select>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                  <div class="col-md-12">
                                                      <input type="text" id="EMR_ASESMEN_DOKTER_ObatSatuanLain" name="EMR_ASESMEN_DOKTER_ObatSatuanLain[]" class="form-control" placeholder="Lain-lain"/>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="EMR_ASESMEN_DOKTER_Obatdiv1Satuan">
                                      </div>
                                      <div class="col-md-4" id="EMR_ASESMEN_DOKTER_Obatdiv_buttonSatuan">
                                        <center>
                                          <a class="btn green-jungle col-md-12" name="EMR_ASESMEN_DOKTER_ObattambahSatuan" value="Tambah Data" id="EMR_ASESMEN_DOKTER_ObattambahSatuan" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                                        </center>
                                      </div>
                                    </div>
                                    <div class="collapse" id="EMR_ASESMEN_DOKTER_ObatformObatRacik">
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
                                                    <div class="form-group">
                                                      <div data-repeater-item class="mt-repeater-item">
                                                        <div class="row mt-repeater-row">
                                                          <div class="col-md-12">
                                                            <label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>
                                                            <input type="text" name="EMR_ASESMEN_DOKTER_ObatobatsatuanRacik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                                            <input type="hidden" name="EMR_ASESMEN_DOKTER_ObatidobatsatuanRacik[]" value="" class="form-control project_racik"/>
                                                            <input type="hidden" value="RACIK_0001" id="EMR_ASESMEN_DOKTER_ObatidRacik" name="EMR_ASESMEN_DOKTER_ObatidRacik[]" class="form-control" />
                                                          </div>
                                                        </div>
                                                        </br>
                                                        <div class="row mt-repeater-row">
                                                          <div class="col-md-4">
                                                            <label class="control-label" style="font-size:14px">Jumlah</label>
                                                            <input type="text" id="EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan" name="EMR_ASESMEN_DOKTER_ObatRacikJumlahBahan[]" placeholder="Jumlah" class="form-control"/>
                                                          </div>
                                                          <div class="col-md-6">
                                                            <label class="control-label" style="font-size:14px">Satuan</label>
                                                            <select class="form-control" id="EMR_ASESMEN_DOKTER_ObatRacikSatuan" name="EMR_ASESMEN_DOKTER_ObatRacikSatuan[]">
                                                                  <option value="Gram">Gram</option>
                                                                  <option selected="selected" value="Mg">Mg</option>
                                                                  <option value="Tab/Kap/Cap">Tab/Kap/Cap</option>
                                                                  <option value="Tube">Tube</option>
                                                                  <option value="Botol">Botol</option>
                                                              </select>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div id="EMR_ASESMEN_DOKTER_ObatdivracikBahan1"></div>
                                                    <div id="EMR_ASESMEN_DOKTER_Obatdiv_buttonracikBahan1">
                                                      <a class="btn blue EMR_ASESMEN_DOKTER_ObattambahRacikBahan-click col-md-12" name="EMR_ASESMEN_DOKTER_ObattambahRacikBahan" value="Tambah Data" data-todo='{"number":"1"}'><i class="fa fa-plus"></i> Tambah Bahan</a>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row">
                                                    <div class="col-md-12">
                                                      <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Detail Obat</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-8">
                                                          <select class="form-control" id="EMR_ASESMEN_DOKTER_ObatRacikAturanBahan" name="EMR_ASESMEN_DOKTER_ObatRacikAturanBahan[]">
                                                                <option selected="selected" value="m.f.da.in caps.dtd">m.f.da.in caps.dtd</option>
                                                                <option value="m.f.l.a.pulv.dtd">m.f.l.a.pulv.dtd</option>
                                                                <option value="m.f.da.in caps">m.f.da.in caps</option>
                                                                <option value="m.f.l.a.pulv">m.f.l.a.pulv</option>
                                                                <option value="m.f.krim">m.f.krim</option>
                                                                <option value="m.f.da.in.bottle">m.f.da.in.bottle</option>
                                                            </select>
                                                          </div>
                                                        <div class="col-md-4">
                                                          <input type="text" id="EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik" name="EMR_ASESMEN_DOKTER_ObatRacikJumlahRacik[]" placeholder="Jumlah" class="form-control"/>
                                                        </div>
                                                      </br>
                                                      <div class="col-md-8">
                                                          <input type="hidden" value="RACIK_0001" id="EMR_ASESMEN_DOKTER_ObatidRacik_2" name="EMR_ASESMEN_DOKTER_ObatidRacik_2[]" class="form-control" />
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                    <div class="col-md-12">
                                                      <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Aturan Pakai</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="col-md-3">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1" name="EMR_ASESMEN_DOKTER_ObatRacikAturanPakai1[]" class="form-control" />
                                                      </div>
                                                      <div class="col-md-1">
                                                        <p class="form-control-static"> dd </p>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2" name="EMR_ASESMEN_DOKTER_ObatRacikAturanPakai2[]" class="form-control" />
                                                      </div>
                                                      <div class="col-md-5">
                                                        <select class="form-control" id="EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3" name="EMR_ASESMEN_DOKTER_ObatRacikAturanPakai3[]" >
                                                            <option value="Tetes">Tetes</option>
                                                            <option value="Oles">Oles</option>
                                                            <option selected="selected" value="Minum">Minum</option>
                                                            <option value="Vaginal Suppositoria">Vaginal Suppositoria</option>
                                                            <option value="Rectal Suppositoria">Rectal Suppositoria</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                    <div class="col-md-12">
                                                      <div class="col-md-6">
                                                        <select class="form-control" id="EMR_ASESMEN_DOKTER_ObatRacikKetPakai1" name="EMR_ASESMEN_DOKTER_ObatRacikKetPakai1[]" >
                                                            <option value="a.c.">a.c.</option>
                                                            <option value="p.c.">p.c.</option>
                                                            <option value="d.c.">d.c.</option>
                                                            <option value="ad.lib.">ad.lib.</option>
                                                        </select>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <select class="form-control" id="EMR_ASESMEN_DOKTER_ObatRacikKetPakai2" name="EMR_ASESMEN_DOKTER_ObatRacikKetPakai2[]" >
                                                            <option value="p.r.n.">p.r.n.</option>
                                                            <option value="Sampai Habis">Sampai Habis</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                    <div class="col-md-12">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_ObatRacikLain" name="EMR_ASESMEN_DOKTER_ObatRacikLain[]" class="form-control" placeholder="Lain-lain"/>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div id="EMR_ASESMEN_DOKTER_Obatdivracikobat"></div>
                                        <div class="col-md-4" id="EMR_ASESMEN_DOKTER_Obatdiv_buttonracikobat">
                                          <center>
                                            <a class="btn green-jungle col-md-12" name="EMR_ASESMEN_DOKTER_Obattambahracikobat" value="Tambah Data" id="EMR_ASESMEN_DOKTER_Obattambahracikobat" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                                          </center>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" id="" data-dismiss="modal" class="btn blue">Simpan</button>
                                  </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Radiologi" name="EMR_ASESMEN_DOKTER_Radiologi" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Radiologi">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Radiologi </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Radiologi2">
                                  <div class="row">
                                    <a class="btn btn-outline blue" href="#EMR_ASESMEN_DOKTER_RadiologiModal" data-toggle="modal"> Radiologi </a>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                                <div id="EMR_ASESMEN_DOKTER_RadiologiModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                    <div class="modal-header">
                                      <div class="col-md-12">
                                        <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                          <button disable type="button" class="btn white" style="height:55px; width:30%">
                                            <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                            <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                                          </button>
                                          <button disable type="button" class="btn white" style="height:55px; width:40%">
                                            <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                            <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                          </button>
                                          <button disable type="button" class="btn white" style="height:55px; width:30%">
                                            <span style="font-size:20px"><b>Pilih Radiologi</b></span>
                                          </button>
                                        </div>
                                      </div>
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
                                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_radiologi_checkbox" name="EMR_ASESMEN_DOKTER_radiologi_checkbox[]" value="<?php echo $row->KODE_DT_RADIO;?>">
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
                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_radiologi_lain" name="EMR_ASESMEN_DOKTER_radiologi_lain" value="DTR_0000">
                                        Lain-Lain
                                        <span></span>
                                        </label>
                                        <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_radiologi_lain1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_ASESMEN_DOKTER_radiologi_lain2" name="EMR_ASESMEN_DOKTER_radiologi_lain2" class="form-control">
                                                    <label for="form_control">Radiologi Lain</label>
                                                    <span class="help-block">Masukkan Radiologi</span>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    <div class="col-md-4">
                                      <label class="mt-checkbox mt-checkbox-outline">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_Gigi_Satuan" name="EMR_ASESMEN_DOKTER_Gigi_Satuan" value="DTR_G000">
                                      Gigi Satuan
                                      <span></span>
                                      </label>
                                      <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_Gigi_Satuan1">
                                          <div class="form-group form-md-line-input">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_ASESMEN_DOKTER_Gigi_Satuan2" name="EMR_ASESMEN_DOKTER_Gigi_Satuan2" class="form-control">
                                                  <label for="form_control">Gigi Satuan</label>
                                                  <span class="help-block">Masukkan Gigi Satuan</span>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer" style="display:block; text-align: left;">
                                        <p>
                                            CATATAN</br>
                                            *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dilampiri hasil Laboratorium Ureum, Creatinin</br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet lunak 1 hari dan urus-urus</br>
                                            **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa total 8-12 jam sebelum pemeriksaan</br>
                                            ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet lunak 2 hari dan urus-urus</br>
                                            ****&nbsp;&nbsp;&nbsp;&nbsp;Dilakukan pemeriksaan 8-12 jam setelah minum Barium Sulfat </br>
                                            *****&nbsp;&nbsp;&nbsp;Dilakukan pemeriksaan 10-13 hari dari mens pertama</br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tidak berhubungan suami istri sebelum dilakukan pemeriksaan</br>
                                        </p>
                                        <button type="button" class="btn btn-default" id="EMR_ASESMEN_DOKTER_reset_radio" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                    </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Laborat" name="EMR_ASESMEN_DOKTER_Laborat" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Laborat">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Laboratorium </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Laborat2">
                                  <div class="row">
                                    <a class="btn btn-outline blue" href="#EMR_ASESMEN_DOKTER_LaboratModal" data-toggle="modal"> Laboratorium </a>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                                <div id="EMR_ASESMEN_DOKTER_LaboratModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                  <div class="modal-header">
                                    <div class="col-md-12">
                                      <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                        <button disable type="button" class="btn white" style="height:55px; width:30%">
                                          <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                          <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                                        </button>
                                        <button disable type="button" class="btn white" style="height:55px; width:40%">
                                          <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                          <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                        </button>
                                        <button disable type="button" class="btn white" style="height:55px; width:30%">
                                          <span style="font-size:20px"><b>Pilih Laboratorium</b></span>
                                        </button>
                                      </div>
                                    </div>
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
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_laboratorium_checkbox" name="EMR_ASESMEN_DOKTER_laboratorium_checkbox[]" value="<?php echo $row->KODE_DT_LABORATORIUM;?>">
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
                                          <input type="checkbox" id="EMR_ASESMEN_DOKTER_laboratorium_lain" name="EMR_ASESMEN_DOKTER_laboratorium_lain" value="DTL_0000">
                                          Lain-Lain
                                          <span></span>
                                          </label>
                                          <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_laboratorium_lain1">
                                              <div class="form-group form-md-line-input">
                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                      <input type="text" id="EMR_ASESMEN_DOKTER_laboratorium_lain2" name="EMR_ASESMEN_DOKTER_laboratorium_lain2" class="form-control">
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
                                        <button type="button" class="btn btn-default" id="EMR_ASESMEN_DOKTER_reset_laboratorium" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                    </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_EkgDll" name="EMR_ASESMEN_DOKTER_EkgDll" value="" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_EkgDll">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tambah Data EKG Dan Lainnya </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_EkgDll2">
                                  <div class="row">
                                    <a class="btn btn-outline blue" href="#EMR_ASESMEN_DOKTER_EkgDll2Modal" data-toggle="modal"> EKG Dan Lainnya </a>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                                <div id="EMR_ASESMEN_DOKTER_EkgDll2Modal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                  <div class="modal-header">
                                    <div class="col-md-12">
                                      <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                        <button disable type="button" class="btn white" style="height:55px; width:30%">
                                          <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                          <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                                        </button>
                                        <button disable type="button" class="btn white" style="height:55px; width:40%">
                                          <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                          <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                        </button>
                                        <button disable type="button" class="btn white" style="height:55px; width:30%">
                                          <span style="font-size:20px"><b>Pilih EKG Dan Lainnya</b></span>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <?php
                                          foreach($dataCheckUp as $row)
                                          {
                                            ?>
                                                <div class="col-md-4">
                                                  <label class="mt-checkbox mt-checkbox-outline">
                                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_checkup_checkbox" name="EMR_ASESMEN_DOKTER_checkup_checkbox[]" value="<?php echo $row->KODE_DT_CHECKUP;?>">
                                                  <?php
                                                    echo $row->NM_DT_CHECKUP;
                                                  ?>
                                                  <span></span>
                                                  </label>
                                                </div>
                                            <?php
                                          }
                                          ?>

                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <label class="text-success bold"><u>CHECK UP LAIN</u></label>
                                          </br>
                                          <div class="col-md-4">
                                            <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" id="EMR_ASESMEN_DOKTER_Checkup_lain" name="EMR_ASESMEN_DOKTER_Checkup_lain" value="DTM_0000">
                                            Lain-Lain
                                            <span></span>
                                            </label>
                                            <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_Checkup_lain1">
                                                <div class="form-group form-md-line-input">
                                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_Checkup_lain2" name="EMR_ASESMEN_DOKTER_Checkup_lain2" class="form-control">
                                                        <label for="form_control">Check Up Lain</label>
                                                        <span class="help-block">Masukkan Check Up</span>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer" style="display:block; text-align: left;">
                                      <button type="button" class="btn btn-default" id="EMR_ASESMEN_DOKTER_reset_EKG" data-dismiss="modal">Batal</button>
                                      <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                  </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Rujukan" name="EMR_ASESMEN_DOKTER_Rujukan" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Rujukan">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Rujukan </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Rujukan2">
                                <div class="row">
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
                                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_rahligizi" name="EMR_ASESMEN_DOKTER_rahligizi" value="Ahli Gizi" >
                                                  Ahli Gizi
                                                  <span></span>
                                                  </label>
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="mt-checkbox mt-checkbox-outline">
                                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_rrehabilitasi" name="EMR_ASESMEN_DOKTER_rrehabilitasi" value="Rehabilitasi Medik" >
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
                                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_rklinik" name="EMR_ASESMEN_DOKTER_rklinik" value="Klinik Spesialis" >
                                                  Klinik Spesialis
                                                  <span></span>
                                                  </label>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_rklinik_1">
                                                      <div class="form-group form-md-line-input">
                                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                              <input type="text" id="EMR_ASESMEN_DOKTER_rklinik_2" name="EMR_ASESMEN_DOKTER_rklinik_2" class="form-control">
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
                                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_rlain" name="EMR_ASESMEN_DOKTER_rlain" value="lain" >
                                                  Lain - Lain
                                                  <span></span>
                                                  </label>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_rlain_1">
                                                      <div class="form-group form-md-line-input">
                                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                              <input type="text" id="EMR_ASESMEN_DOKTER_rlain_2" name="EMR_ASESMEN_DOKTER_rlain_2" class="form-control">
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
                              </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Edukasi" name="EMR_ASESMEN_DOKTER_Edukasi" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Edukasi">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Edukasi </label>
                                  </div>
                                </div>
                              </div>
                              <div class="row collapse" id="EMR_ASESMEN_DOKTER_edukasi_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <div class="form-group form-md-line-input">
                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <input type="text" id="EMR_ASESMEN_DOKTER_edukasi_2" name="EMR_ASESMEN_DOKTER_edukasi_2" class="form-control">
                                              <label for="form_control">Edukasi</label>
                                              <span class="help-block">Masukkan Edukasi</span>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Prognosis" name="EMR_ASESMEN_DOKTER_Prognosis" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Prognosis">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Prognosis </label>
                                  </div>
                                </div>
                              </div>
                              <div class="row collapse" id="EMR_ASESMEN_DOKTER_Prognosis_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_prognosis1" name="EMR_ASESMEN_DOKTER_prognosis" class="md-radiobtn" value="Bonam" checked>
                                        <label for="EMR_ASESMEN_DOKTER_prognosis2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Bonam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_prognosis2" name="EMR_ASESMEN_DOKTER_prognosis" class="md-radiobtn" value="Malam">
                                        <label for="EMR_ASESMEN_DOKTER_prognosis2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Malam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_prognosis3" name="EMR_ASESMEN_DOKTER_prognosis" class="md-radiobtn" value="Dubia Ad Bonam">
                                        <label for="EMR_ASESMEN_DOKTER_prognosis3">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Dubia Ad Bonam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_prognosis4" name="prognosis" class="md-radiobtn" value="Dubia Ad Malam">
                                        <label for="EMR_ASESMEN_DOKTER_prognosis4">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Dubia Ad Malam </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_KontrolK" name="EMR_ASESMEN_DOKTER_KontrolK" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_KontrolK">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Kontrol Kembali </label>
                                  </div>
                                </div>
                              </div>
                              <div class="row collapse" id="EMR_ASESMEN_DOKTER_KontrolK_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                          <input name="EMR_ASESMEN_DOKTER_KontrolK_2" id="EMR_ASESMEN_DOKTER_KontrolK_2" type="text" class="form-control" readonly>
                                          <span class="input-group-btn">
                                              <button class="btn default" type="button">
                                                  <i class="fa fa-calendar"></i>
                                              </button>
                                          </span>
                                      </div>
                                  </div>
                                    <span class="help-block">Pilih Tanggal Kontrol Kembali</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                    <button type="button" id="EMR_ASESMEN_DOKTER_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                    <button type="button" id="EMR_ASESMEN_DOKTER_HalamanNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_ASESMEN_AWAL_HalamanDokter2">
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="col-md-12">

                                <div class="form-group form-md-line-input form-md-floating-label has-success">
                                    <textarea class="form-control" id="EMR_ASESMEN_DOKTER_Update_Ket" name="EMR_ASESMEN_DOKTER_Update_Ket"></textarea>
                                    <label for="form_control_1">Keterangan</label>
                                    <span class="help-block">Masukkan Keterangan</span>
                                </div>
                                <div class="form-group form-md-line-input form-md-floating-label has-success">
                                    <textarea class="form-control" id="EMR_ASESMEN_DOKTER_Update_Diagnosis" name="EMR_ASESMEN_DOKTER_Update_Diagnosis"></textarea>
                                    <label for="form_control_1">Diagnosis</label>
                                    <span class="help-block">Masukkan Diagnosis</span>
                                </div>
                                <div class="form-group form-md-line-input form-md-floating-label has-success">
                                    <textarea class="form-control" id="EMR_ASESMEN_DOKTER_Update_DiagnosisBanding" name="EMR_ASESMEN_DOKTER_Update_DiagnosisBanding"></textarea>
                                    <label for="form_control_1">Diagnosis Banding</label>
                                    <span class="help-block">Masukkan Diagnosis Banding</span>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_Obat" name="EMR_ASESMEN_DOKTER_Update_Obat" value="" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_Update_Obat">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tambah Data Obat </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Update_Obat2">
                                    <div class="row">
                                      <a class="btn btn-outline blue" href="#EMR_ASESMEN_DOKTER_Update_ObatModal" data-toggle="modal"> Obat </a>
                                      <br>
                                      <br>
                                    </div>
                                  </div>
                                  <div id="EMR_ASESMEN_DOKTER_Update_ObatModal" class="modal" data-width="100%" style="width:90%;">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                          <button disable type="button" class="btn white" style="height:55px; width:30%">
                                            <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                            <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                                          </button>
                                          <button disable type="button" class="btn white" style="height:55px; width:70%">
                                            <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                            <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                          </button>
                                        </div>
                                      </div>
                                      <div class="modal-header bg-blue bg-font-blue col-md-4">
                                        <h4 class="modal-title"><center><b>Obat Pasien</b></center></h4>
                                      </div>
                                      <div class="col-md-4 bg-blue">
                                        <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                          <a type="button" id="EMR_ASESMEN_DOKTER_Update_ObatbtnObatSatuan" class="btn disabled white" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Satuan</b></a>
                                          <a type="button" id="EMR_ASESMEN_DOKTER_Update_ObatbtnObatRacik" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Racik</b></a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-body">
                                      <input type="hidden" id="EMR_ASESMEN_DOKTER_Update_ObatstatObat" value="Satuan">
                                      <div class="row" id="EMR_ASESMEN_DOKTER_Update_ObatformObatSatuan">
                                        <div class="col-md-4">
                                          <div class="portlet light bordered">
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
                                                        <input type="text" name="EMR_ASESMEN_DOKTER_Update_Obatobatsatuan[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>
                                                        <input type="hidden" name="EMR_ASESMEN_DOKTER_Update_Obatidobatsatuan[]" class="form-control project"/>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                      <div class="form-group">
                                                        <label class="control-label" style="font-size:14px">Jumlah Obat</label>
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_Update_ObatSatuanJumlah" name="EMR_ASESMEN_DOKTER_Update_ObatSatuanJumlah[]" placeholder="Jumlah" class="form-control"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                    <div class="col-md-12">
                                                      <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="col-md-3">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_Update_ObatSatuanAturanPakai1" name="EMR_ASESMEN_DOKTER_Update_ObatSatuanAturanPakai1[]" class="form-control"/>
                                                      </div>
                                                      <div class="col-md-1">
                                                        <p class="form-control-static"> dd </p>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_Update_ObatSatuanAturanPakai2" name="EMR_ASESMEN_DOKTER_Update_ObatSatuanAturanPakai2[]" class="form-control"/>
                                                      </div>
                                                      <div class="col-md-5">
                                                        <select class="form-control" id="EMR_ASESMEN_DOKTER_Update_ObatSatuanAturanPakai3" name="EMR_ASESMEN_DOKTER_Update_ObatSatuanAturanPakai3[]">
                                                              <option value="Tetes">Tetes</option>
                                                              <option value="Oles">Oles</option>
                                                              <option selected="selected" value="Minum">Minum</option>
                                                              <option value="Vaginal Suppositoria">Vaginal Suppositoria</option>
                                                              <option value="Rectal Suppositoria">Rectal Suppositoria</option>
                                                          </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                    <div class="col-md-12">
                                                      <div class="col-md-6">
                                                        <select class="form-control" id="EMR_ASESMEN_DOKTER_Update_ObatSatuanKetPakai1" name="EMR_ASESMEN_DOKTER_Update_ObatSatuanKetPakai1[]">
                                                              <option value="a.c.">a.c.</option>
                                                              <option value="p.c.">p.c.</option>
                                                              <option value="d.c.">d.c.</option>
                                                              <option value="ad.lib.">ad.lib.</option>
                                                          </select>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <select class="form-control" id="EMR_ASESMEN_DOKTER_Update_ObatSatuanKetPakai2" name="EMR_ASESMEN_DOKTER_Update_ObatSatuanKetPakai2[]">
                                                              <option value="p.r.n.">p.r.n.</option>
                                                              <option value="Sampai Habis">Sampai Habis</option>
                                                          </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                    <div class="col-md-12">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_Update_ObatSatuanLain" name="EMR_ASESMEN_DOKTER_Update_ObatSatuanLain[]" class="form-control" placeholder="Lain-lain"/>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div id="EMR_ASESMEN_DOKTER_Update_Obatdiv1Satuan">
                                        </div>
                                        <div class="col-md-4" id="EMR_ASESMEN_DOKTER_Update_Obatdiv_buttonSatuan">
                                          <center>
                                            <a class="btn green-jungle col-md-12" name="EMR_ASESMEN_DOKTER_Update_ObattambahSatuan" value="Tambah Data" id="EMR_ASESMEN_DOKTER_Update_ObattambahSatuan" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                                          </center>
                                        </div>
                                      </div>
                                      <div class="collapse" id="EMR_ASESMEN_DOKTER_Update_ObatformObatRacik">
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
                                                      <div class="form-group">
                                                        <div data-repeater-item class="mt-repeater-item">
                                                          <div class="row mt-repeater-row">
                                                            <div class="col-md-12">
                                                              <label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>
                                                              <input type="text" name="EMR_ASESMEN_DOKTER_Update_ObatobatsatuanRacik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                                              <input type="hidden" name="EMR_ASESMEN_DOKTER_Update_ObatidobatsatuanRacik[]" value="" class="form-control project_racik"/>
                                                              <input type="hidden" value="RACIK_0001" id="EMR_ASESMEN_DOKTER_Update_ObatidRacik" name="EMR_ASESMEN_DOKTER_Update_ObatidRacik[]" class="form-control" />
                                                            </div>
                                                          </div>
                                                          </br>
                                                          <div class="row mt-repeater-row">
                                                            <div class="col-md-4">
                                                              <label class="control-label" style="font-size:14px">Jumlah</label>
                                                              <input type="text" id="EMR_ASESMEN_DOKTER_Update_ObatRacikJumlahBahan" name="EMR_ASESMEN_DOKTER_Update_ObatRacikJumlahBahan[]" placeholder="Jumlah" class="form-control"/>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <label class="control-label" style="font-size:14px">Satuan</label>
                                                              <select class="form-control" id="EMR_ASESMEN_DOKTER_Update_ObatRacikSatuan" name="EMR_ASESMEN_DOKTER_Update_ObatRacikSatuan[]">
                                                                    <option value="Gram">Gram</option>
                                                                    <option selected="selected" value="Mg">Mg</option>
                                                                    <option value="Tab/Kap/Cap">Tab/Kap/Cap</option>
                                                                    <option value="Tube">Tube</option>
                                                                    <option value="Botol">Botol</option>
                                                                </select>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div id="EMR_ASESMEN_DOKTER_Update_ObatdivracikBahan1"></div>
                                                      <div id="EMR_ASESMEN_DOKTER_Update_Obatdiv_buttonracikBahan1">
                                                        <a class="btn blue EMR_ASESMEN_DOKTER_Update_ObattambahRacikBahan-click col-md-12" name="EMR_ASESMEN_DOKTER_Update_ObattambahRacikBahan" value="Tambah Data" data-todo='{"number":"1"}'><i class="fa fa-plus"></i> Tambah Bahan</a>
                                                      </div>
                                                    </div>
                                                    <div class="row mt-repeater-row">
                                                      <div class="col-md-12">
                                                        <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Detail Obat</label>
                                                      </div>
                                                      <div class="col-md-12">
                                                          <div class="col-md-8">
                                                            <select class="form-control" id="EMR_ASESMEN_DOKTER_Update_ObatRacikAturanBahan" name="EMR_ASESMEN_DOKTER_Update_ObatRacikAturanBahan[]">
                                                                  <option selected="selected" value="m.f.da.in caps.dtd">m.f.da.in caps.dtd</option>
                                                                  <option value="m.f.l.a.pulv.dtd">m.f.l.a.pulv.dtd</option>
                                                                  <option value="m.f.da.in caps">m.f.da.in caps</option>
                                                                  <option value="m.f.l.a.pulv">m.f.l.a.pulv</option>
                                                                  <option value="m.f.krim">m.f.krim</option>
                                                                  <option value="m.f.da.in.bottle">m.f.da.in.bottle</option>
                                                              </select>
                                                            </div>
                                                          <div class="col-md-4">
                                                            <input type="text" id="EMR_ASESMEN_DOKTER_Update_ObatRacikJumlahRacik" name="EMR_ASESMEN_DOKTER_Update_ObatRacikJumlahRacik[]" placeholder="Jumlah" class="form-control"/>
                                                          </div>
                                                        </br>
                                                        <div class="col-md-8">
                                                            <input type="hidden" value="RACIK_0001" id="EMR_ASESMEN_DOKTER_Update_ObatidRacik_2" name="EMR_ASESMEN_DOKTER_Update_ObatidRacik_2[]" class="form-control" />
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                      <div class="col-md-12">
                                                        <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Aturan Pakai</label>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="col-md-3">
                                                          <input type="text" id="EMR_ASESMEN_DOKTER_Update_ObatRacikAturanPakai1" name="EMR_ASESMEN_DOKTER_Update_ObatRacikAturanPakai1[]" class="form-control" />
                                                        </div>
                                                        <div class="col-md-1">
                                                          <p class="form-control-static"> dd </p>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <input type="text" id="EMR_ASESMEN_DOKTER_Update_ObatRacikAturanPakai2" name="EMR_ASESMEN_DOKTER_Update_ObatRacikAturanPakai2[]" class="form-control" />
                                                        </div>
                                                        <div class="col-md-5">
                                                          <select class="form-control" id="EMR_ASESMEN_DOKTER_Update_ObatRacikAturanPakai3" name="EMR_ASESMEN_DOKTER_Update_ObatRacikAturanPakai3[]" >
                                                              <option value="Tetes">Tetes</option>
                                                              <option value="Oles">Oles</option>
                                                              <option selected="selected" value="Minum">Minum</option>
                                                              <option value="Vaginal Suppositoria">Vaginal Suppositoria</option>
                                                              <option value="Rectal Suppositoria">Rectal Suppositoria</option>
                                                          </select>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                      <div class="col-md-12">
                                                        <div class="col-md-6">
                                                          <select class="form-control" id="EMR_ASESMEN_DOKTER_Update_ObatRacikKetPakai1" name="EMR_ASESMEN_DOKTER_Update_ObatRacikKetPakai1[]" >
                                                              <option value="a.c.">a.c.</option>
                                                              <option value="p.c.">p.c.</option>
                                                              <option value="d.c.">d.c.</option>
                                                              <option value="ad.lib.">ad.lib.</option>
                                                          </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <select class="form-control" id="EMR_ASESMEN_DOKTER_Update_ObatRacikKetPakai2" name="EMR_ASESMEN_DOKTER_Update_ObatRacikKetPakai2[]" >
                                                              <option value="p.r.n.">p.r.n.</option>
                                                              <option value="Sampai Habis">Sampai Habis</option>
                                                          </select>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                      <div class="col-md-12">
                                                          <input type="text" id="EMR_ASESMEN_DOKTER_Update_ObatRacikLain" name="EMR_ASESMEN_DOKTER_Update_ObatRacikLain[]" class="form-control" placeholder="Lain-lain"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div id="EMR_ASESMEN_DOKTER_Update_Obatdivracikobat"></div>
                                          <div class="col-md-4" id="EMR_ASESMEN_DOKTER_Update_Obatdiv_buttonracikobat">
                                            <center>
                                              <a class="btn green-jungle col-md-12" name="EMR_ASESMEN_DOKTER_Update_Obattambahracikobat" value="Tambah Data" id="EMR_ASESMEN_DOKTER_Update_Obattambahracikobat" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                                            </center>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" id="" data-dismiss="modal" class="btn blue">Simpan</button>
                                    </div>
                                  </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_Radiologi" name="EMR_ASESMEN_DOKTER_Update_Radiologi" value="" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_Update_Radiologi">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tambah Data Radiologi </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Update_Radiologi2">
                                    <div class="row">
                                      <a class="btn btn-outline blue" href="#EMR_ASESMEN_DOKTER_Update_RadiologiModal" data-toggle="modal"> Radiologi </a>
                                      <br>
                                      <br>
                                    </div>
                                  </div>
                                  <div id="EMR_ASESMEN_DOKTER_Update_RadiologiModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                      <div class="modal-header">
                                        <div class="col-md-12">
                                          <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                            <button disable type="button" class="btn white" style="height:55px; width:30%">
                                              <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                              <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                                            </button>
                                            <button disable type="button" class="btn white" style="height:55px; width:40%">
                                              <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                              <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                            </button>
                                            <button disable type="button" class="btn white" style="height:55px; width:30%">
                                              <span style="font-size:20px"><b>Pilih Radiologi</b></span>
                                            </button>
                                          </div>
                                        </div>
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
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_radiologi_checkbox" name="EMR_ASESMEN_DOKTER_Update_radiologi_checkbox[]" value="<?php echo $row->KODE_DT_RADIO;?>">
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
                                          <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_radiologi_lain" name="EMR_ASESMEN_DOKTER_Update_radiologi_lain" value="DTR_0000">
                                          Lain-Lain
                                          <span></span>
                                          </label>
                                          <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_Update_radiologi_lain1">
                                              <div class="form-group form-md-line-input">
                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                      <input type="text" id="EMR_ASESMEN_DOKTER_Update_radiologi_lain2" name="EMR_ASESMEN_DOKTER_Update_radiologi_lain2" class="form-control">
                                                      <label for="form_control">Radiologi Lain</label>
                                                      <span class="help-block">Masukkan Radiologi</span>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                      <div class="col-md-4">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_Gigi_Satuan" name="EMR_ASESMEN_DOKTER_Update_Gigi_Satuan" value="DTR_G000">
                                        Gigi Satuan
                                        <span></span>
                                        </label>
                                        <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_Update_Gigi_Satuan1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_ASESMEN_DOKTER_Update_Gigi_Satuan2" name="EMR_ASESMEN_DOKTER_Update_Gigi_Satuan2" class="form-control">
                                                    <label for="form_control">Gigi Satuan</label>
                                                    <span class="help-block">Masukkan Gigi Satuan</span>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      </div>
                                      </div>
                                      <div class="modal-footer" style="display:block; text-align: left;">
                                          <p>
                                              CATATAN</br>
                                              *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dilampiri hasil Laboratorium Ureum, Creatinin</br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet lunak 1 hari dan urus-urus</br>
                                              **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa total 8-12 jam sebelum pemeriksaan</br>
                                              ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet lunak 2 hari dan urus-urus</br>
                                              ****&nbsp;&nbsp;&nbsp;&nbsp;Dilakukan pemeriksaan 8-12 jam setelah minum Barium Sulfat </br>
                                              *****&nbsp;&nbsp;&nbsp;Dilakukan pemeriksaan 10-13 hari dari mens pertama</br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tidak berhubungan suami istri sebelum dilakukan pemeriksaan</br>
                                          </p>
                                          <button type="button" class="btn btn-default" id="EMR_ASESMEN_DOKTER_Update_reset_radio" data-dismiss="modal">Batal</button>
                                          <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                      </div>
                                  </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_Laborat" name="EMR_ASESMEN_DOKTER_Update_Laborat" value="" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_Update_Laborat">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tambah Data Laboratorium </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Update_Laborat2">
                                    <div class="row">
                                      <a class="btn btn-outline blue" href="#EMR_ASESMEN_DOKTER_Update_LaboratModal" data-toggle="modal"> Laboratorium </a>
                                      <br>
                                      <br>
                                    </div>
                                  </div>
                                  <div id="EMR_ASESMEN_DOKTER_Update_LaboratModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                    <div class="modal-header">
                                      <div class="col-md-12">
                                        <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                          <button disable type="button" class="btn white" style="height:55px; width:30%">
                                            <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                            <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                                          </button>
                                          <button disable type="button" class="btn white" style="height:55px; width:40%">
                                            <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                            <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                          </button>
                                          <button disable type="button" class="btn white" style="height:55px; width:30%">
                                            <span style="font-size:20px"><b>Pilih Laboratorium</b></span>
                                          </button>
                                        </div>
                                      </div>
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
                                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_laboratorium_checkbox" name="EMR_ASESMEN_DOKTER_Update_laboratorium_checkbox[]" value="<?php echo $row->KODE_DT_LABORATORIUM;?>">
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
                                            <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_laboratorium_lain" name="EMR_ASESMEN_DOKTER_Update_laboratorium_lain" value="DTL_0000">
                                            Lain-Lain
                                            <span></span>
                                            </label>
                                            <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_Update_laboratorium_lain1">
                                                <div class="form-group form-md-line-input">
                                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                        <input type="text" id="EMR_ASESMEN_DOKTER_Update_laboratorium_lain2" name="EMR_ASESMEN_DOKTER_Update_laboratorium_lain2" class="form-control">
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
                                          <button type="button" class="btn btn-default" id="EMR_ASESMEN_DOKTER_Update_reset_laboratorium" data-dismiss="modal">Batal</button>
                                          <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                      </div>
                                  </div>
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-12 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_EkgDll" name="EMR_ASESMEN_DOKTER_Update_EkgDll" value="" class="md-check">
                                        <label for="EMR_ASESMEN_DOKTER_Update_EkgDll">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tambah Data EKG Dan Lainnya </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Update_EkgDll2">
                                    <div class="row">
                                      <a class="btn btn-outline blue" href="#EMR_ASESMEN_DOKTER_Update_EkgDll2Modal" data-toggle="modal"> EKG Dan Lainnya </a>
                                      <br>
                                      <br>
                                    </div>
                                  </div>
                                  <div id="EMR_ASESMEN_DOKTER_Update_EkgDll2Modal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                    <div class="modal-header">
                                      <div class="col-md-12">
                                        <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                          <button disable type="button" class="btn white" style="height:55px; width:30%">
                                            <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                            <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                                          </button>
                                          <button disable type="button" class="btn white" style="height:55px; width:40%">
                                            <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                            <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                          </button>
                                          <button disable type="button" class="btn white" style="height:55px; width:30%">
                                            <span style="font-size:20px"><b>Pilih EKG Dan Lainnya</b></span>
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <?php
                                            foreach($dataCheckUp as $row)
                                            {
                                              ?>
                                                  <div class="col-md-4">
                                                    <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_checkup_checkbox" name="EMR_ASESMEN_DOKTER_Update_checkup_checkbox[]" value="<?php echo $row->KODE_DT_CHECKUP;?>">
                                                    <?php
                                                      echo $row->NM_DT_CHECKUP;
                                                    ?>
                                                    <span></span>
                                                    </label>
                                                  </div>
                                              <?php
                                            }
                                            ?>

                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <label class="text-success bold"><u>CHECK UP LAIN</u></label>
                                            </br>
                                            <div class="col-md-4">
                                              <label class="mt-checkbox mt-checkbox-outline">
                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_Checkup_lain" name="EMR_ASESMEN_DOKTER_Update_Checkup_lain" value="DTM_0000">
                                              Lain-Lain
                                              <span></span>
                                              </label>
                                              <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_Update_Checkup_lain1">
                                                  <div class="form-group form-md-line-input">
                                                      <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                          <input type="text" id="EMR_ASESMEN_DOKTER_Update_Checkup_lain2" name="EMR_ASESMEN_DOKTER_Update_Checkup_lain2" class="form-control">
                                                          <label for="form_control">Check Up Lain</label>
                                                          <span class="help-block">Masukkan Check Up</span>
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer" style="display:block; text-align: left;">
                                        <button type="button" class="btn btn-default" id="EMR_ASESMEN_DOKTER_Update_reset_EKG" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                    </div>
                                  </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_Rujukan" name="EMR_ASESMEN_DOKTER_Update_Rujukan" value="" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_Update_Rujukan">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tambah Data Rujukan </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Update_Rujukan2">
                                  <div class="row">
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
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_rahligizi" name="EMR_ASESMEN_DOKTER_Update_rahligizi" value="Ahli Gizi" >
                                                    Ahli Gizi
                                                    <span></span>
                                                    </label>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_rrehabilitasi" name="EMR_ASESMEN_DOKTER_Update_rrehabilitasi" value="Rehabilitasi Medik" >
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
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_rklinik" name="EMR_ASESMEN_DOKTER_Update_rklinik" value="Klinik Spesialis" >
                                                    Klinik Spesialis
                                                    <span></span>
                                                    </label>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_Update_rklinik_1">
                                                        <div class="form-group form-md-line-input">
                                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                                <input type="text" id="EMR_ASESMEN_DOKTER_Update_rklinik_2" name="EMR_ASESMEN_DOKTER_Update_rklinik_2" class="form-control">
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
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_rlain" name="EMR_ASESMEN_DOKTER_Update_rlain" value="lain" >
                                                    Lain - Lain
                                                    <span></span>
                                                    </label>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="form-group collapse" id="EMR_ASESMEN_DOKTER_Update_rlain_1">
                                                        <div class="form-group form-md-line-input">
                                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                <input type="text" id="EMR_ASESMEN_DOKTER_Update_rlain_2" name="EMR_ASESMEN_DOKTER_Update_rlain_2" class="form-control">
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
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_Edukasi" name="EMR_ASESMEN_DOKTER_Update_Edukasi" value="" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_Update_Edukasi">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Edukasi </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="row collapse" id="EMR_ASESMEN_DOKTER_Update_edukasi_1">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASESMEN_DOKTER_Update_edukasi_2" name="EMR_ASESMEN_DOKTER_Update_edukasi_2" class="form-control">
                                                <label for="form_control">Edukasi</label>
                                                <span class="help-block">Masukkan Edukasi</span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_Prognosis" name="EMR_ASESMEN_DOKTER_Update_Prognosis" value="" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_Update_Prognosis">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Prognosis </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="row collapse" id="EMR_ASESMEN_DOKTER_Update_Prognosis_1">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_DOKTER_Update_prognosis1" name="EMR_ASESMEN_DOKTER_Update_prognosis" class="md-radiobtn" value="Bonam" checked>
                                          <label for="EMR_ASESMEN_DOKTER_Update_prognosis2">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Bonam </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_DOKTER_Update_prognosis2" name="EMR_ASESMEN_DOKTER_Update_prognosis" class="md-radiobtn" value="Malam">
                                          <label for="EMR_ASESMEN_DOKTER_Update_prognosis2">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Malam </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_DOKTER_Update_prognosis3" name="EMR_ASESMEN_DOKTER_Update_prognosis" class="md-radiobtn" value="Dubia Ad Bonam">
                                          <label for="EMR_ASESMEN_DOKTER_Update_prognosis3">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Dubia Ad Bonam </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_DOKTER_Update_prognosis4" name="prognosis" class="md-radiobtn" value="Dubia Ad Malam">
                                          <label for="EMR_ASESMEN_DOKTER_Update_prognosis4">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Dubia Ad Malam </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASESMEN_DOKTER_Update_KontrolK" name="EMR_ASESMEN_DOKTER_Update_KontrolK" value="" class="md-check">
                                      <label for="EMR_ASESMEN_DOKTER_Update_KontrolK">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Kontrol Kembali </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="row collapse" id="EMR_ASESMEN_DOKTER_Update_KontrolK_1">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                            <input name="EMR_ASESMEN_DOKTER_Update_KontrolK_2" id="EMR_ASESMEN_DOKTER_Update_KontrolK_2" type="text" class="form-control" readonly>
                                            <span class="input-group-btn">
                                                <button class="btn default" type="button">
                                                    <i class="fa fa-calendar"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                      <span class="help-block">Pilih Tanggal Kontrol Kembali</span>
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
        </div>
      </div>

      <!--LOKALIS GAMBAR BADAN START-->
      <div id="AsesmenModalStatusLokalis" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="100%" style="width:50%">
        <div class="row">
          <div class="col-md-4">
            <div class="btn-group btn-group btn-group-justified" style="width:100%">
              <button disable type="button" class="btn white" style="height:55px; width:30%">
                <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                <span style="font-size:14px" name><b><?php echo $norm?></b></span>
              </button>
              <button disable type="button" class="btn white" style="height:55px; width:70%">
                <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
              </button>
            </div>
          </div>
          <div class="modal-header bg-blue bg-font-blue col-md-4">
            <h4 class="modal-title"><center><b>Status Lokalis</b></center></h4>
          </div>
          <div class="col-md-4 bg-blue" style="height:56px;">
            <button class="btn blue col-md-12 collapse" id="EMR_ASESMEN_DOKTER_BtnKembaliFrmLokalis2" style="height:100%; width:100%"><i class="fa fa-arrow-left"></i> Kembali </button></br></br>
          </div>
        </div>
        <div class="modal-body">
          <input type="hidden" id="EMR_ASESMEN_DOKTER_statLokalis" value="pilih">
          <input type="hidden" id="EMR_ASESMEN_DOKTER_statLokalis2" value="">
          <div class="row">
            <!--<div id="EMR_ASESMEN_DOKTER_FrmLokalis0">
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
                <center>
                  <table border="0" id="" align="center" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="height:180px"></td>
                    </tr>
                    <tr>
                      <td style="width:230px; height:100px">
                        <button type="button" class="btn blue" id="EMR_ASESMEN_DOKTER_btnLokalisTubuh" style="width:100%; height:40px; background-color:">Lokalis Bedah</button>
                        </br>
                        </br>
                        <button type="button" class="btn blue" id="EMR_ASESMEN_DOKTER_btnLokalisTulang" style="width:100%; height:40px; background-color:">Lokalis Orthopedi</button>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:180px"></td>
                    </tr>
                        </table>
                </center>
              </div>
              <div class="col-md-4">
              </div>
            </div>-->
            <div id="EMR_ASESMEN_DOKTER_FrmLokalis1">
              <div class="col-md-4">
                <div id="EMR_ASESMEN_DOKTER_FrmMouseoverTubuh">
                  <div class="portlet light bg-inverse">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="icon-puzzle font-red-flamingo"></i>
                        <span class="caption-subject bold font-red-flamingo uppercase"> Pilih Bagian Tubuh </span>
                      </div>
                      <div class="tools">
                        <a href="" class="collapse" data-original-title="" title=""> </a>
                      </div>
                    </div>
                    <div class="portlet-body" style="display: block;">
                      <h4>Pilih bagian tubuh terlebih dahulu untuk dapat mengisi keluhan Status Lokalis</h4>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverKepala">
                  <div class="portlet light bg-inverse">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="icon-puzzle font-red-flamingo"></i>
                        <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Kepala </span>
                      </div>
                      <div class="tools">
                        <a href="" class="collapse" data-original-title="" title=""> </a>
                      </div>
                    </div>
                    <div class="portlet-body" style="display: block;">
                      <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Kepala</h4></br>
                      <center><img src="<?php echo base_url().'assets/pages/img/tubuh/Kepala Depan.png'?>" style="width:180px"></center>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverKepala2">
                  <div class="portlet light bg-inverse">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="icon-puzzle font-red-flamingo"></i>
                        <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Kepala </span>
                      </div>
                      <div class="tools">
                        <a href="" class="collapse" data-original-title="" title=""> </a>
                      </div>
                    </div>
                    <div class="portlet-body" style="display: block;">
                      <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Kepala</h4></br>
                      <center><img src="<?php echo base_url().'assets/pages/img/tulang/Teng_Depan.png'?>" style="width:180px"></center>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverBadan">
                  <div class="portlet light bg-inverse">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="icon-puzzle font-red-flamingo"></i>
                        <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Badan </span>
                      </div>
                      <div class="tools">
                        <a href="" class="collapse" data-original-title="" title=""> </a>
                      </div>
                    </div>
                    <div class="portlet-body" style="display: block;">
                      <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Badan</h4></br>
                      <center><img src="<?php echo base_url().'assets/pages/img/tubuh/Badan Depan.png'?>" style="width:180px"></center>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverBadan2">
                  <div class="portlet light bg-inverse">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="icon-puzzle font-red-flamingo"></i>
                        <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Badan </span>
                      </div>
                      <div class="tools">
                        <a href="" class="collapse" data-original-title="" title=""> </a>
                      </div>
                    </div>
                    <div class="portlet-body" style="display: block;">
                      <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Badan</h4></br>
                      <center><img src="<?php echo base_url().'assets/pages/img/tulang/Badan Depan.png'?>" style="width:180px"></center>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverTangan">
                  <div class="portlet light bg-inverse">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="icon-puzzle font-red-flamingo"></i>
                        <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Tangan </span>
                      </div>
                      <div class="tools">
                        <a href="" class="collapse" data-original-title="" title=""> </a>
                      </div>
                    </div>
                    <div class="portlet-body" style="display: block;">
                      <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Tangan</h4></br>
                      <center><img src="<?php echo base_url().'assets/pages/img/tubuh/Tangan Depan.png'?>" style="width:180px"></center>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverTangan2">
                  <div class="portlet light bg-inverse">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="icon-puzzle font-red-flamingo"></i>
                        <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Tangan </span>
                      </div>
                      <div class="tools">
                        <a href="" class="collapse" data-original-title="" title=""> </a>
                      </div>
                    </div>
                    <div class="portlet-body" style="display: block;">
                      <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Tangan</h4></br>
                      <center><img src="<?php echo base_url().'assets/pages/img/tulang/Tangan Depan.png'?>" style="width:180px"></center>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverKaki">
                  <div class="portlet light bg-inverse">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="icon-puzzle font-red-flamingo"></i>
                        <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Kaki </span>
                      </div>
                      <div class="tools">
                        <a href="" class="collapse" data-original-title="" title=""> </a>
                      </div>
                    </div>
                    <div class="portlet-body" style="display: block;">
                      <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Kaki</h4></br>
                      <center><img src="<?php echo base_url().'assets/pages/img/tubuh/Kaki Depan.png'?>" style="width:180px"></center>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverKaki2">
                  <div class="portlet light bg-inverse">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="icon-puzzle font-red-flamingo"></i>
                        <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Kaki </span>
                      </div>
                      <div class="tools">
                        <a href="" class="collapse" data-original-title="" title=""> </a>
                      </div>
                    </div>
                    <div class="portlet-body" style="display: block;">
                      <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Kaki</h4></br>
                      <center><img src="<?php echo base_url().'assets/pages/img/tulang/Kaki Depan.png'?>" style="width:180px"></center>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <center>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisBedah" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Tubuh Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:70px"></td>
                      <td style="width:20px;"></td>
                      <td colspan="2" style="width:60px; height:80px">
                        <a type="button" border="0" class="btn white" id="EMR_ASESMEN_DOKTER_btnKepala" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKepalaMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKepalaMOut(this)"></a>
                      </td>
                      <td style="width:20px;"></td>
                      <td style="width:70px"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnTangan1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnTanganMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnTanganMOut(this)"></td>
                      <td colspan="4" style="height:180px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnBadan" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnBadanMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnBadanMOut(this)"></button></td>
                      <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnTangan2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnTanganMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnTanganMOut(this)"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnKaki1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKakiMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKakiMOut(this)"></button></td>
                      <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnKaki2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKakiMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKakiMOut(this)"></button></td>
                    </tr>
                    <tr>
                      <td style="height:200px"></td>
                      <td style="height:200px"></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisOrthopedi" align="center" background="<?php echo base_url().'assets/pages/img/tulang/Tulang_Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:70px"></td>
                      <td style="width:20px;"></td>
                      <td colspan="2" style="width:60px; height:80px">
                        <a type="button" border="0" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnKepala" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKepalaMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKepalaMOut(this)"></a>
                      </td>
                      <td style="width:20px;"></td>
                      <td style="width:70px"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnTangan1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnTanganMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnTanganMOut(this)"></td>
                      <td colspan="4" style="height:180px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnBadan" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnBadanMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnBadanMOut(this)"></button></td>
                      <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnTangan2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnTanganMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnTanganMOut(this)"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnKaki1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKakiMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKakiMOut(this)"></button></td>
                      <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnKaki2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKakiMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKakiMOut(this)"></button></td>
                    </tr>
                    <tr>
                      <td style="height:200px"></td>
                      <td style="height:200px"></td>
                    </tr>
                  </table>
                </center>
              </div>
              <div class="col-md-4">
              </div>
            </div>
            <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmLokalis2">
              <div class="col-md-4">

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKepalaDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKepalaBelakang"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanBadanDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanBadanBelakang"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderTanganDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanTanganDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanTanganDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderTanganBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanTanganBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanTanganBelakang"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKakiDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKakiBelakang"></div>
              </div>
              <div class="col-md-4">
                <center>
                  <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                      <a href="javascript:;" class="btn grey" id="EMR_ASESMEN_DOKTER_btnGeserKanan" style="height:100%"> << Geser >> </a>
                  </div>
                </center>
                <center>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisKepalaDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kepala Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:60px"></td>
                      <td style="width:60px;"></td>
                      <td colspan="2" style="width:60px; height:40px"></td>
                      <td style="width:60px;"></td>
                      <td style="width:60px"></td>
                    </tr>
                    <tr>
                      <td style="height:160px">
                        <a type="button" border="0" class="btn white" title=" Temporalis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraTemporalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                      <td colspan="4" style="height:160px">
                        <a type="button" border="0" class="btn white" title="Frontalis" id="EMR_ASESMEN_DOKTER_btnLokalisFrontalis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td style="height:160px">
                        <a type="button" border="0" class="btn white" title=" Temporalis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraTemporalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="height:120px">
                        <a type="button" border="0" class="btn white" title=" Zygomatical Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraZygomatical" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Orbitalis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraOrbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                      <td rowspan="2" colspan="2" style="height:120px">
                        <a type="button" border="0" class="btn white" title="Nasalis" id="EMR_ASESMEN_DOKTER_btnLokalisNasalis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Orbitalis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraOrbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                      <td rowspan="2" style="height:120px">
                        <a type="button" border="0" class="btn white" title=" Zygomatical Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraZygomatical" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Infraorbitalis Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraInfraorbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Infraorbitalis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraInfraorbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td rowspan="2" style="height:120px">
                        <a type="button" border="0" class="btn white" title=" Buccalis Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraBuccalis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td colspan="2" style="height:50px">
                        <a type="button" border="0" class="btn white" title="Oralis" id="EMR_ASESMEN_DOKTER_btnLokalisOralis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td rowspan="2" style="height:120px">
                        <a type="button" border="0" class="btn white" title=" Buccalis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraBuccalis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Mentalis" id="EMR_ASESMEN_DOKTER_btnLokalisMentalis" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKepalaMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKepalaMOut(this)"></a>
                      </td>
                      <td></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisKepalaBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kepala Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="2" style="width:330px; height:40px"></td>
                    </tr>
                    <tr>
                      <td style="height:120px">
                        <a type="button" border="0" class="btn white" title="Parietalis" id="EMR_ASESMEN_DOKTER_btnLokalisParietalis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:140px">
                        <a type="button" border="0" class="btn white" title="Occipitalis" id="EMR_ASESMEN_DOKTER_btnLokalisOccipitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:120px">
                        <a type="button" border="0" class="btn white" title="Cervicalis Pasterior" id="EMR_ASESMEN_DOKTER_btnLokalisCervicalisPasterior" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisBadanDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Badan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:30px;"></td>
                      <td style="width:10px;"></td>
                      <td style="width:10px;"></td>
                      <td style="width:20px; height:40px"></td>
                      <td style="width:10px;"></td>
                      <td style="width:10px;"></td>
                      <td style="width:20px;"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td style="height:45px">
                        <a type="button" border="0" class="btn white" title=" Cervicalis Lateralis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraCervicalisLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:45px">
                        <a type="button" border="0" class="btn white" title=" Sternocleidomastoidea Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraSternocleidomastoidea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:45px">
                        <a type="button" border="0" class="btn white" title="Cervicalis Anterior" id="EMR_ASESMEN_DOKTER_btnLokalisCervicalisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:45px">
                        <a type="button" border="0" class="btn white" title=" Sternocleidomastoidea Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraSternocleidomastoidea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:45px">
                        <a type="button" border="0" class="btn white" title=" Cervicalis Lateralis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCervicalisLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Trigonum Clavipectorale Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraTrigonumClavipectorale" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="2" colspan="2" style="height:80px">
                        <a type="button" border="0" class="btn white" title=" Pectoralis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraPectoralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="3" style="height:100px">
                        <a type="button" border="0" class="btn white" title="Presternalis" id="EMR_ASESMEN_DOKTER_btnLokalisPresternalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="2" colspan="2" style="height:80px">
                        <a type="button" border="0" class="btn white" title=" Pectoralis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraPectoralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Trigonum Clavipectorale Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraTrigonumClavipectorale" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Axillaris Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraAxillaris" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Axillaris Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraAxillaris" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td style="height:20px">
                        <a type="button" border="0" class="btn white" title=" Mammaria Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraMammaria" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                      <td></td>
                      <td style="height:20px">
                        <a type="button" border="0" class="btn white" title=" Mammaria Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraMammaria" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="3" style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Inframammaria Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraInframammaria" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                      <td colspan="3" style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Inframammaria Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraInframammaria" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Hypochondriaca Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraHypochondriaca" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Epigastrica" id="EMR_ASESMEN_DOKTER_btnLokalisEpigastrica" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Hypochondriaca Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraHypochondriaca" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Lateralis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:60px">
                        <a type="button" border="0" class="btn white" title="Umbilicalis" id="EMR_ASESMEN_DOKTER_btnLokalisUmbilicalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Lateralis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Inguinalis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraInguinalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Pubica" id="EMR_ASESMEN_DOKTER_btnLokalisPubica" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Inguinalis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraInguinalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td colspan="3" style="height:80px">
                        <a type="button" border="0" class="btn white" title="Urogenitalis" id="EMR_ASESMEN_DOKTER_btnLokalisUrogenitalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisBadanBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Badan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:80px;"></td>
                      <td style="width:20px; height:100px"></td>
                      <td style="width:80px;"></td>
                    </tr>
                    <tr>
                      <td style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Scapularis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraScapularis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="3" style="width:20px; height:210px">
                        <a type="button" border="0" class="btn white" title="Verterbralis" id="EMR_ASESMEN_DOKTER_btnLokalisVerterbralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Scapularis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraScapularis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Infrascapularis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraInfrascapularis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Infrascapularis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraInfrascapularis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Lumbaris Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraLumbaris" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Lumbaris Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraLumbaris" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="height:140px">
                        <a type="button" border="0" class="btn white" title=" Glutealis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraGlutealis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:70px">
                        <a type="button" border="0" class="btn white" title="Sacralis" id="EMR_ASESMEN_DOKTER_btnLokalisSacralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="2" style="height:140px">
                        <a type="button" border="0" class="btn white" title=" Glutealis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraGlutealis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:70px">
                        <a type="button" border="0" class="btn white" title="Analis" id="EMR_ASESMEN_DOKTER_btnLokalisAnalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisTanganDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Tangan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="2" style="width:120px; height:120px">
                        <a type="button" border="0" class="btn white" title=" Deltoidea Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraDeltoidea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:130px; height:120px"></td>
                      <td colspan="2" style="width:120px;  height:120px">
                        <a type="button" border="0" class="btn white" title=" Deltoidea Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraDeltoidea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Brachialis Anterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraBrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="3" style="width:20px; height:210px"></td>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Brachialis Anterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraBrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Cubitalis Anterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraCubitalisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Cubitalis Anterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCubitalisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:50px;height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraAntebrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraAntebrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraAntebrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:50px;height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraAntebrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Dormus Manus Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraDormusManus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:50px"></td>
                      <td colspan="2" style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Dormus Manus Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraDormusManus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisTanganBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Tangan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="2" style="width:120px; height:120px">
                        <a type="button" border="0" class="btn white" title=" Deltoidea Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraDeltoidea2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:130px; height:120px"></td>
                      <td colspan="2" style="width:120px;  height:120px">
                        <a type="button" border="0" class="btn white" title=" Deltoidea Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraDeltoidea2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Brachialis Posterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraBrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="3" style="width:20px; height:210px"></td>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Brachialis Posterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraBrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Cubitalis Posterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraCubitalisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Cubitalis Posterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCubitalisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:50px;height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraAntebrachialisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraAntebrachialisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraAntebrachialisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:50px;height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraAntebrachialisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Palma Manus Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraPalmaManus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:50px"></td>
                      <td colspan="2" style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Palma Manus Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraPalmaManus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisKakiDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kaki Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="4" style="width:160px; height:40px"></td>
                    </tr>
                    <tr>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraFemoralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Trigonum Femorale Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraTrigonumfemorale" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Trigonum Femorale Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraTrigonumfemorale" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraFemoralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraFemoralisAnterior1" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraFemoralisAnterior1" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Genus Anterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraGenusAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Genus Anterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraGenusAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:60px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Anterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraCruralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:20px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Posterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraCruralisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:20px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Posterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCruralisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:60px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Anterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCruralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:80px">
                        <a type="button" border="0" class="btn white" title="Dorsum Pedis Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraDorsumPedis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:80px">
                        <a type="button" border="0" class="btn white" title="Dorsum Pedis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraDorsumPedis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisKakiBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kaki Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="4" style="width:160px; height:100px"></td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title="Femoralis Pasterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraFemoralisPasterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title="Femoralis Pasterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraFemoralisPasterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Genus Posterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraGenusPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Genus Posterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraGenusPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Sura Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraSura" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Sura Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraSura" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:40px; height:110px">
                        <a type="button" border="0" class="btn white" title="Cruralis Anterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraCruralisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:110px">
                        <a type="button" border="0" class="btn white" title="Cruralis Posterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraCruralisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:110px">
                        <a type="button" border="0" class="btn white" title="Cruralis Posterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCruralisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:110px">
                        <a type="button" border="0" class="btn white" title="Cruralis Anterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCruralisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:60px; height:50px">
                        <a type="button" border="0" class="btn white" title="Dorsum Pedis Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraDorsumPedis2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:20px; height:50px">
                        <a type="button" border="0" class="btn white" title="Calcanea Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraCalcanea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:20px; height:50px">
                        <a type="button" border="0" class="btn white" title="Calcanea Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCalcanea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:60px; height:50px">
                        <a type="button" border="0" class="btn white" title="Dorsum Pedis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraDorsumPedis2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:10px">
                        <a type="button" border="0" class="btn white" title="Dorsum Planta Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraPlantaPedis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:10px">
                        <a type="button" border="0" class="btn white" title="Dorsum Planta Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraPlantaPedis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                </center>
              </div>
              <div class="col-md-4 row">
                <center><h4><span><b>Bagian Lokalis : </b></span>
                <span id="EMR_ASESMEN_DOKTER_GstsFrmLokalis2"></span></h4></center>
                <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: 0em; border-style: inset; border-width: 1px; height:1px; width:100%">
                <center><h4><span> Lokasi : </span><span id="EMR_ASESMEN_DOKTER_LokasiLokalis"></span></h4></center></br>
                <div class="col-md-6">
                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                      <input type="text" id="EMR_ASESMEN_DOKTER_SLBedahInspeksi" name="EMR_ASESMEN_DOKTER_SLBedahInspeksi" value="" class="form-control">
                      <label for="form_control_1">Inspeksi</label>
                      <span class="help-block">Masukkan Inspeksi</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                      <input type="text" id="EMR_ASESMEN_DOKTER_SLBedahPalpasi" name="EMR_ASESMEN_DOKTER_SLBedahPalpasi" value="" class="form-control">
                      <label for="form_control_1">Palpasi</label>
                      <span class="help-block">Masukkan Palpasi</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                      <input type="text" id="EMR_ASESMEN_DOKTER_SLBedahPerkusi" name="EMR_ASESMEN_DOKTER_SLBedahPerkusi" value="" class="form-control">
                      <label for="form_control_1">Perkusi</label>
                      <span class="help-block">Masukkan Perkusi</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                      <input type="text" id="EMR_ASESMEN_DOKTER_SLBedahAuskultasi" name="EMR_ASESMEN_DOKTER_SLBedahAuskultasi" value="" class="form-control">
                      <label for="form_control_1">Auskultasi</label>
                      <span class="help-block">Masukkan Auskultasi</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <center>
                    <a class="btn green-jungle col-md-12" name="insertKeluhan" value="Tambah Data" id="insertKeluhan"> <i class="fa fa-plus"></i> <b>Tampung Temuan</b></a>
                  </center>
                </div>
              </div>
            </div>
            <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmLokalis3">
              <div class="col-md-4">

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderKepalaDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanKepalaDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanKepalaDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderKepalaBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanKepalaBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanKepalaBelakang"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderBadanDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanBadanDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanBadanDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderCervicalVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanCervicalVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanCervicalVerterbral"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderThoracicVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanThoracicVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanThoracicVerterbral"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderLumbarVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanLumbarVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanLumbarVerterbral"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderBadanBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanBadanBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanBadanBelakang"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderTanganDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanTanganDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanTanganDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderTanganBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanTanganBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanTanganBelakang"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderKakiDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanKakiDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanKakiDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanKakiBelakang"></div>

              </div>
              <div class="col-md-4">
                <center>
                  <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                      <a href="javascript:;" class="btn grey" id="EMR_ASESMEN_DOKTER_Orto_btnGeserKanan" style="height:100%"> << Geser >> </a>
                  </div>
                </center>
                <center>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisKepalaDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Teng_Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:60px"></td>
                      <td style="width:60px;"></td>
                      <td colspan="2" style="width:60px; height:40px"></td>
                      <td style="width:60px;"></td>
                      <td style="width:60px"></td>
                    </tr>
                    <tr>
                      <td style="height:120px"></td>
                      <td colspan="4" style="height:120px">
                        <a type="button" border="0" class="btn white" title="Frontal" id="EMR_ASESMEN_DOKTER_btnLokalisFrontal" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td style="height:120px"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="height:120px"><a type="button" border="0" class="btn white" title="Zygomatic" id="EMR_ASESMEN_DOKTER_btnLokalisZygomatic1" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td style="height:60px"><a type="button" border="0" class="btn white" title="Sphenoid" id="EMR_ASESMEN_DOKTER_btnLokalisSphenoid1" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td colspan="2" style="height:60px"><a type="button" border="0" class="btn white" title="Nasal" id="EMR_ASESMEN_DOKTER_btnLokalisNasal" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td style="height:60px"><a type="button" border="0" class="btn white" title="Sphenoid" id="EMR_ASESMEN_DOKTER_btnLokalisSphenoid2" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td rowspan="2" style="height:120px"><a type="button" border="0" class="btn white" title="Zygomatic" id="EMR_ASESMEN_DOKTER_btnLokalisZygomatic2" style="width:100%; height:100%; background-color: Transparent"></a></td>
                    </tr>
                    <tr>
                      <td style="height:60px"><a type="button" border="0" class="btn white" title="Maxilla" id="EMR_ASESMEN_DOKTER_btnLokalisMaxilla1" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td colspan="2" style="height:60px"><a type="button" border="0" class="btn white" title="Ethmoid" id="EMR_ASESMEN_DOKTER_btnLokalisEthmoid" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td style="height:60px"><a type="button" border="0" class="btn white" title="Maxilla" id="EMR_ASESMEN_DOKTER_btnLokalisMaxilla2" style="width:100%; height:100%; background-color: Transparent"></a></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="4" style="height:40px"><a type="button" border="0" class="btn white" title="Maxilla" id="EMR_ASESMEN_DOKTER_btnLokalisMaxilla3" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="4" style="height:40px"></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="4" style="height:60px"><a type="button" border="0" class="btn white" title="Mandible" id="EMR_ASESMEN_DOKTER_btnLokalisMandible" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisKepalaBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Kepala Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="2" style="width:330px; height:40px"></td>
                    </tr>
                    <tr>
                      <td style="height:140px">
                        <a type="button" border="0" class="btn white" title="Parietal" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraParietal" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td style="height:140px">
                        <a type="button" border="0" class="btn white" title="Parietal" id="EMR_ASESMEN_DOKTER_btnLokalisDextraParietal" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:140px">
                        <a type="button" border="0" class="btn white" title="Occipital" id="EMR_ASESMEN_DOKTER_btnLokalisOccipital" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:120px"></td>
                      <td style="height:120px"></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisBadanDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Badan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="3" style="width:80px;"></td>
                      <td style="width:40px; height:80px">
                        <a type="button" border="0" class="btn white" title="Verterbral column" id="EMR_ASESMEN_DOKTER_btnLokalisVerterbral1" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="width:80px;"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" colspan="3">
                        <a type="button" border="0" class="btn white" title=" Ribs " id="EMR_ASESMEN_DOKTER_btnLokalisRibs1" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title=" Sternum " id="EMR_ASESMEN_DOKTER_btnLokalisSternum" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="2" colspan="3">
                        <a type="button" border="0" class="btn white" title=" Ribs " id="EMR_ASESMEN_DOKTER_btnLokalisRibs2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title="Verterbral column" id="EMR_ASESMEN_DOKTER_btnLokalisVerterbral2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3" style="height:80px"></td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Verterbral column" id="EMR_ASESMEN_DOKTER_btnLokalisVerterbral3" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:80px"></td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Illium Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisIlliumDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Sacrum" id="EMR_ASESMEN_DOKTER_btnLokalisSacrum" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Illium Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisIlliumSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <a type="button" border="0" class="btn white" title="Pubis Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisPubisDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:30px"></td>
                      <td>
                        <a type="button" border="0" class="btn white" title="Pubis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisPubisSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <a type="button" border="0" class="btn white" title="Ischium Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraIschium" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:30px"></td>
                      <td>
                        <a type="button" border="0" class="btn white" title="Ischium Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraIschium" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisCervicalVerterbral" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Cervical Verterbral.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:200px; height:90px">
                        <a type="button" border="0" class="btn white" title=" Atlas C1 " id="EMR_ASESMEN_DOKTER_btnLokalisAtlasC1" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:50px">
                        <a type="button" border="0" class="btn white" title="Axis C2" id="EMR_ASESMEN_DOKTER_btnLokalisAxisC2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:50px">
                        <a type="button" border="0" class="btn white" title="Third Cervical Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisThirdCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:50px">
                        <a type="button" border="0" class="btn white" title="Fourth Cervical Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFourthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:50px">
                        <a type="button" border="0" class="btn white" title="Fifth Cervical Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFifthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title="Sixth Cervical Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSixthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title="Seventh Cervical Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSeventhCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisThoracicVerterbral" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Thoracic Verterbral.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:200px; height:55px">
                        <a type="button" border="0" class="btn white" title=" First Thoracic Verterbral " id="EMR_ASESMEN_DOKTER_btnLokalisFirstThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Second Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSecondThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Third Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisThirdThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Fourth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFourthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Fifth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFifthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Sixth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSixthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Seventh Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSeventhThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Eight Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisEightThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Ninth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisNinthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:45px">
                        <a type="button" border="0" class="btn white" title="Tenth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisTenthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:50px">
                        <a type="button" border="0" class="btn white" title="Eleventh Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisEleventhThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:75px">
                        <a type="button" border="0" class="btn white" title="Twelfth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisTwelfthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisLumbarVerterbral" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Lumbar Verterbral.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:200px; height:120px">
                        <a type="button" border="0" class="btn white" title=" First Lumbar Verterbral " id="EMR_ASESMEN_DOKTER_btnLokalisFirstLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Second Lumbar Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSecondLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Third Lumbar Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisThirdLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title="Fourth Lumbar Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFourthLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Fifth Lumbar Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFifthLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisRusuk" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Rusuk.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Second Ribs Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisSecondRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Third Ribs Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisThirdRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Fourth Ribs Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisFourthRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Fifth Ribs Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisFifthRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisBadanBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Badan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:80px;"></td>
                      <td style="width:20px; height:100px"></td>
                      <td style="width:80px;"></td>
                    </tr>
                    <tr>
                      <td style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Scapularis Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="3" style="width:20px; height:210px">
                        <a type="button" border="0" class="btn white" title="Verterbralis" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Scapularis Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Infrascapularis Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Infrascapularis Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Lumbaris Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Lumbaris Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="height:140px">
                        <a type="button" border="0" class="btn white" title=" Glutealis Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:70px">
                        <a type="button" border="0" class="btn white" title="Sacralis" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="2" style="height:140px">
                        <a type="button" border="0" class="btn white" title=" Glutealis Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:70px">
                        <a type="button" border="0" class="btn white" title="Analis" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisTanganDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Tangan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="4" style="width:200px; height:40px"></td>
                      <td colspan="4" style="width:200px; height:40px"></td>
                    </tr>
                    <tr>
                      <td colspan="3"></td>
                      <td style="width:60px; height:40px">
                        <a type="button" border="0" class="btn white" title=" Clavicle Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraClavicle" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:60px; height:40px">
                        <a type="button" border="0" class="btn white" title=" Clavicle Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraClavicle" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3"></td>
                    </tr>
                    <tr>
                      <td style="width:70px;"></td>
                      <td rowspan="2" colspan="2" style="width:60px; height:120px">
                        <a type="button" border="0" class="btn white" title=" Humerus Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraHumerus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:60px; height:60px">
                        <a type="button" border="0" class="btn white" title=" Scapula Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraScapula" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:60px; height:60px">
                        <a type="button" border="0" class="btn white" title=" Scapula Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraScapula" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="2" colspan="2" style="width:60px; height:120px">
                        <a type="button" border="0" class="btn white" title=" Humerus Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraHumerus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:80px;"></td>
                    </tr>
                    <tr>
                      <td style=""></td>
                      <td style=""></td>
                      <td style=""></td>
                      <td style=""></td>
                    </tr>
                    <tr>
                      <td style="height:110px">
                        <a type="button" border="0" class="btn white" title=" Radius Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraRadius" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:30px; height:110px">
                        <a type="button" border="0" class="btn white" title=" Ulna Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraUlna" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="width:30px; height:110px">
                        <a type="button" border="0" class="btn white" title=" Ulna Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraUlna" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:110px">
                        <a type="button" border="0" class="btn white" title=" Radius Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraRadius" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:60px; height:60px">
                        <a type="button" border="0" class="btn white" title=" Carpus Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraCarpus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3"></td>
                      <td colspan="3"></td>
                      <td style="width:60px; height:60px">
                        <a type="button" border="0" class="btn white" title=" Carpus Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCarpus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisTanganBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Tangan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="height:40px"colspan="5"></td>
                    </tr>
                    <tr>
                      <td colspan="2" style="width:120px; height:120px">
                        <a type="button" border="0" class="btn white" title=" Deltoidea Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:30px; height:120px"></td>
                      <td style="width:30px; height:120px"></td>
                      <td colspan="2" style="width:120px;  height:120px">
                        <a type="button" border="0" class="btn white" title=" Deltoidea Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Brachialis Anterior Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="3" style="width:20px; height:210px"></td>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Brachialis Anterior Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Cubitalis Anterior Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Cubitalis Anterior Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td
                    </tr>
                    <tr>
                      <td style="width:50px;height:100px">
                        <a type="button" border="0" class="btn white" title=" AntebrachialisPosterior Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title=" AntebrachialisAnterior Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title=" AntebrachialisAnterior Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:50px;height:100px">
                        <a type="button" border="0" class="btn white" title=" AntebrachialisPosterior Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:100px">
                        <a type="button" border="0" class="btn white" title=" DormusManus Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:50px"></td>
                      <td colspan="2" style="height:100px">
                        <a type="button" border="0" class="btn white" title=" DormusManus Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisKakiDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Kaki Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="4" style="width:160px; height:40px"></td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:190px">
                        <a type="button" border="0" class="btn white" title="Femur Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraFemur" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:190px">
                        <a type="button" border="0" class="btn white" title="Femur Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraFemur" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Patelia Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraPatelia" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Patelia Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraPatelia" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:40px; height:130px">
                        <a type="button" border="0" class="btn white" title="Fibula Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraFibula" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:130px">
                        <a type="button" border="0" class="btn white" title="Tibia Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraTibia" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:130px">
                        <a type="button" border="0" class="btn white" title="Tibia Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraTibia" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:130px">
                        <a type="button" border="0" class="btn white" title="Fibula Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraFibula" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:20px">
                        <a type="button" border="0" class="btn white" title="Talus Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraTalus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:20px">
                        <a type="button" border="0" class="btn white" title="Talus Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraTalus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:60px">
                        <a type="button" border="0" class="btn white" title="" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:60px">
                        <a type="button" border="0" class="btn white" title="" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisKakiBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Kaki Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="4" style="width:160px; height:40px"></td>
                    </tr>
                    <tr>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Trigonum Femorale Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Trigonum Femorale Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Genus Anterior Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Genus Anterior Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:60px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Anterior Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:20px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Posterior Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:20px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Posterior Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:60px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Anterior Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:80px">
                        <a type="button" border="0" class="btn white" title="Dorsum Pedis Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:80px">
                        <a type="button" border="0" class="btn white" title="Dorsum Pedis Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                </center>
              </div>
              <div class="col-md-4 row">
                <center><h4><span><b>Bagian Lokalis : </b></span>
                <span id="EMR_ASESMEN_DOKTER_Orto_GstsFrmLokalis2"></span></h4></center>
                <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: 0em; border-style: inset; border-width: 1px; height:1px; width:100%">
                <center><h4><span> Lokasi : </span><span id="EMR_ASESMEN_DOKTER_Orto_LokasiLokalis"></span></h4></center>
                <span class="col-md-12"><b><center>Look</center></b></span>
                <div class="col-md-6">
                  <span class="control-label">Vulnus : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnVulnus" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Swelling : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnSwelling" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Hematom : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnHematom" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Lain - lain : </span></br>
                  <input type="text" id="EMR_ASESMEN_DOKTER_btnLookLain" class="form-control" value="" style="width:100%">
                </div>
                <span class="col-md-12"><b><center>Feel</center></b></span>
                <div class="col-md-4">
                  <span class="control-label">Nyeri Tekan : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnNyeritekan" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                </div>
                <div class="col-md-4">
                  <span class="control-label">Krepitasi : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnKrepitasi" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                </div>
                <div class="col-md-4">
                  <span class="control-label">Hiperetesi : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnHiperetesi" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Perubahan Suhu : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnPerubahanSuhu" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Lain - lain : </span></br>
                  <input type="text" id="EMR_ASESMEN_DOKTER_btnFeelLain" class="form-control" style="width:100%" value="">
                </div>
                <span class="col-md-12"><b><center>Move</center></b></span>
                <div class="col-md-2">
                  <span class="control-label">ROM</span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnROM" class="btn green" style="width:100%" value="+"><b> + </b></button>
                </div>
                <div class="col-md-4">
                  <span class="control-label">Move : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnMove" class="btn green" style="width:100%" value="Bebas"><b> Bebas </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Lain - lain : </span></br>
                  <input type="text" id="EMR_ASESMEN_DOKTER_MoveLain" class="form-control" style="width:100%" value="">
                </div>

                <div class="col-md-12">
                  <center>
                    </br>
                    <a class="btn green-jungle col-md-12" name="insertKeluhanOrto" value="Tambah Data" id="insertKeluhanOrto"> <i class="fa fa-plus"></i> <b>Tampung Temuan</b></a>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <center>
            <div class="btn-group btn-group btn-group-justified" style="width:50%">
              <!--button class="btn red" data-toggle="modal" href="#modalBatalLokalis" style="width:50%">Batal</button-->
              <button class="btn blue" id="EMR_ASESMEN_DOKTER_btnSimpanModalLokalis" style="width:100%">Simpan</button>
            </div>
          </center>
        </div>
      </div>
      <div id="modalBatalLokalis" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title"><center>Peringatan !!</center></h4>
          </div>
          <div class="modal-body">
            <center>
              Data keluhan lokalis yang anda isi tidak akan tersimpan apabila anda membatalkannya.</br><h4><b>Batalkan Lokalis??</b></h4>
            </center>
          </div>
          <div class="modal-footer">
            <center>
              <div class="btn-group btn-group btn-group-justified" style="width:50%">
                <a type="button" id="EMR_ASESMEN_DOKTER_btnBatalModalLokalis" class="btn red" data-dismiss="modal" style="width:50%">Ya</a>
                <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tidak</a>
              </div>
            </center>
          </div>
        </div>
      </div>
      <div id="modalKosongLokalis" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title"><center>Peringatan, ada data belum ditampung !!</center></h4>
          </div>
          <div class="modal-body">
            <center>
              Anda belum menampung data keluhan pasien yang telah anda pilih, apabila anda klik ya, maka data keluhan yang belum ditampung akan dihapus.</br><h4><b>Hapus data yang belum ditampung??</b></h4>
            </center>
          </div>
          <div class="modal-footer">
            <center>
              <div class="btn-group btn-group btn-group-justified" style="width:50%">
                  <a type="button" id="EMR_ASESMEN_DOKTER_btnBatalModalLokalis2" class="btn red" data-dismiss="modal" style="width:50%">Ya</a>
                  <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tidak</a>
              </div>
            </center>
          </div>
        </div>
      </div>
      <div id="modalKosongKeluhandanLokalis" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
      <!--LOKALIS GAMBAR BADAN END-->

      <input type="hidden" id="EMR_ASESMEN_AWAL_Norm" name="EMR_ASESMEN_AWAL_Norm" value="<?php echo $norm; ?>">
      <input type="hidden" id="EMR_ASESMEN_AWAL_Noreg" name="EMR_ASESMEN_AWAL_Noreg" value="<?php echo $noreg; ?>">
      <input type="hidden" id="EMR_ASESMEN_AWAL_kodeunit" name="EMR_ASESMEN_AWAL_kodeunit" value="<?php echo $KodeUnit; ?>">
      <input type="hidden" id="EMR_ASESMEN_AWAL_nmcust" name="EMR_ASESMEN_AWAL_nmcust" value="<?php echo $nmcust; ?>">

      <div class="col-md-4">
        <!-- BEGIN TAB PORTLET-->
        <div class="portlet light portlet-fit bordered">
          <div class="row portlet-body">
            <div class="col-sm-12">
              <input type="hidden" id="EMR_ASESMEN_AWAL_STATUSHALAMAN" value="perawat">
              <div class="row" id="EMR_ASESMEN_AWAL_stepPerawat">
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
              <div class="row collapse" id="EMR_ASESMEN_AWAL_stepDokter">
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
        </div>
        <!--start user perawat-->
        <div id="EMR_ASESMEN_AWAL_FrmRPerawat">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <input type="hidden" id="EMR_ASESMEN_AWAL_statver" name="EMR_ASESMEN_AWAL_statver" value="Perawat1">
            <div class="row portlet-body" id="EMR_ASESMEN_AWAL_verPerPerawat">
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
              <div class="col-sm-12">
                <div class="btn-group btn-group btn-group-justified">
                  <a id="EMR_ASESMEN_AWAL_btnChangePerPerawat" class="btn red"> Klik disini apabila anda bukan <?php echo $level; ?> <?php echo $username; ?></a>
                </div>
              </div>
            </div>
            <div class="row portlet-body collapse" id="EMR_ASESMEN_AWAL_verPerPerawat2">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda akan mengambil alih tanggung jawab proses pengisian data, kelengkapan pengisian data akan mempengaruhi penilaian anda</p>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_ASESMEN_AWAL_userPerPerawat" name="EMR_ASESMEN_AWAL_userPerPerawat" class="form-control">
                    <label for="form_control_1">Masukkan Username</label>
                    <span class="help-block">Masukkan Username</span>
                  </div>
                </div>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                  <input type="password" id="EMR_ASESMEN_AWAL_passPerPerawat" name="EMR_ASESMEN_AWAL_passPerPerawat" class="form-control">
                  <label for="form_control_1">Masukkan Password</label>
                  <span class="help-block">Masukkan Password</span>
                </div>
              </div>
              </div>
              <div class="col-sm-12">
                <div class="btn-group btn-group btn-group-justified">
                  <a id="EMR_ASESMEN_AWAL_btnChangePerPerawat2" class="btn red"> Klik disini apabila anda <?php echo $level; ?> <?php echo $username; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="modalAlertCounter_perawat" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><center>Peringatan !!</center></h4>
            </div>
            <div class="modal-body">
              <center>
                Apakah Anda Yakin Isian Sudah Benar?
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                    <a type="button" class="btn red" data-dismiss="modal" style="width:50%">Tidak</a>
                    <a type="button" id="EMR_ASESMEN_AWAL_btnselanjutnyaPerawat2" class="btn blue" data-dismiss="modal" style="width:50%">Ya</a>
                </div>
              </center>
            </div>
          </div>
        </div>
        <!--end user perawat-->
        <div class="collapse" id="EMR_ASESMEN_AWAL_FrmRDokter">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <div class="row portlet-body">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data Rekam Medis berikut, masukkan password dokter <b><?php echo $namadokter; ?></b> di bawah ini terlebih dahulu sebagai proses verifikasi pengisi data.</p>
                <!--<div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_ASESMEN_AWAL_userPerDokter" name="EMR_ASESMEN_AWAL_userPerDokter" class="form-control">
                    <label for="form_control_1">Masukkan Username Dokter</label>
                    <span class="help-block">Masukkan Username Dokter</span>
                  </div>
                </div>-->
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                  <input type="password" id="EMR_ASESMEN_AWAL_passPerDokter" name="EMR_ASESMEN_AWAL_passPerDokter" class="form-control">
                  <label for="form_control_1">Masukkan Password Dokter</label>
                  <span class="help-block">Masukkan Password Dokter</span>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_ASESMEN_AWAL_FrmRDokter2">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <div class="row portlet-body">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data Rekam Medis berikut, masukkan password dokter <b><?php echo $namadokter; ?></b> di bawah ini terlebih dahulu sebagai proses verifikasi pengisi data.</p>
                <!--<div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_ASESMEN_AWAL_userPerDokter" name="EMR_ASESMEN_AWAL_userPerDokter" class="form-control">
                    <label for="form_control_1">Masukkan Username Dokter</label>
                    <span class="help-block">Masukkan Username Dokter</span>
                  </div>
                </div>-->
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                  <input type="password" id="EMR_ASESMEN_AWAL_passPerDokter2" name="EMR_ASESMEN_AWAL_passPerDokter2" class="form-control">
                  <label for="form_control_1">Masukkan Password Dokter</label>
                  <span class="help-block">Masukkan Password Dokter</span>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portlet light portlet-fit bordered">
          <div class="portlet-body">
            <div class="row">
              <div id="alert-msg-EMR_ASESMEN_AWAL_Perawat"></div>
              <div id="EMR_ASESMEN_PERAWAT_btnCommand" class="">
                <div class="btn-group btn-group btn-group-justified">
                  <button type="button" class="btn white" id="EMR_ASESMEN_AWAL_btnselanjutnyaPerawat" name="EMR_ASESMEN_AWAL_btnselanjutnyaPerawat" style="width:100%" disabled="true">Selanjutnya</button>
                  <button class="btn bg-green-jungle bg-font-green-jungle" id="EMR_ASESMEN_DOKTER_btnLokalisTulang" style="width:100%"><center><b><i class="fa fa-plus"></i> Status Lokalis Orthopedi</b></center></button>
                  <button class="btn bg-green-jungle bg-font-green-jungle" id="EMR_ASESMEN_DOKTER_btnLokalisTubuh" style="width:100%"><center><b><i class="fa fa-plus"></i> Status Lokalis Orthopedi</b></center></button>
                </div>
              </div>
              <div id="EMR_ASESMEN_DOKTER_btnCommand" class="collapse">
                <div class="btn-group btn-group btn-group-justified">

                  <input type="hidden" id="EMR_ASESMEN_AWAL_userPerPerawatHalDok" name="EMR_ASESMEN_AWAL_userPerPerawatHalDok" value="">
                  <input type="hidden" id="EMR_ASESMEN_DOKTER_id_pemeriksaan" name="EMR_ASESMEN_DOKTER_id_pemeriksaan" value="">
                    <!--<button type="button" class="btn white" id="EMR_ASESMEN_AWAL_btnsimpan" name="EMR_ASESMEN_AWAL_btnsimpan" style="width:100%" disabled="true">Simpan</button>-->
                    <button type="button" class="btn green" id="EMR_ASESMEN_AWAL_btnsimpan" name="EMR_ASESMEN_AWAL_btnsimpan" style="width:100%">Simpan</button>
                </div>
              </div>
              <div id="EMR_ASESMEN_DOKTER_btnCommand2" class="collapse">
                <div class="btn-group btn-group btn-group-justified">
                    <input type="hidden" id="EMR_ASESMEN_DOKTER_id_pemeriksaan_update" name="EMR_ASESMEN_DOKTER_id_pemeriksaan_update" value="">
                    <button type="button" class="btn green" id="EMR_ASESMEN_AWAL_btnsimpan_update" name="EMR_ASESMEN_AWAL_btnsimpan_update" style="width:100%">Simpan</button>
                </div>
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
                Apakah Anda Yakin Isian Sudah Benar?
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <div id="alert-msg-EMR_ASESMEN_AWAL_Dokter"></div>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                    <a type="button" class="btn red" data-dismiss="modal" style="width:50%">Tidak</a>
                    <a type="button" id="EMR_ASESMEN_AWAL_btnsimpan2" class="btn blue" data-dismiss="modal" style="width:50%">Ya</a>
                </div>
              </center>
            </div>
          </div>
        </div>
        <div id="modalAlertCounter_dokter2" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><center>Peringatan !!</center></h4>
            </div>
            <div class="modal-body">
              <center>
                Apakah Pasien Akan Kembali?
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <div id="alert-msg-EMR_ASESMEN_AWAL_Dokter2"></div>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                    <a type="button" id="EMR_ASESMEN_AWAL_btnsimpan4" onclick="EMR_ASESMEN_AWAL_Simpan_Data(this)" class="btn red" style="width:50%">Tidak</a>
                    <a type="button" id="EMR_ASESMEN_AWAL_btnsimpan3" onclick="EMR_ASESMEN_AWAL_Simpan_Data(this)" class="btn blue" style="width:50%">Ya</a>
                </div>
              </center>
            </div>
          </div>
        </div>
        <div id="modalAlertCounter_dokter_update" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><center>Peringatan !!</center></h4>
            </div>
            <div class="modal-body">
              <center>
                Apakah Anda Yakin Isian Sudah Benar?
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <div id="alert-msg-EMR_ASESMEN_AWAL_Dokter"></div>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                    <a type="button" class="btn red" data-dismiss="modal" style="width:50%">Tidak</a>
                    <a type="button" id="EMR_ASESMEN_AWAL_btnsimpan_update2" class="btn blue" style="width:50%">Ya</a>
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
