
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content" style="background-color:#BFBFBF;">
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
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnHambatanYA" name="EMR_ASESMEN_PERAWAT_RbtnHambatan" class="md-radiobtn" value="HambatanYa">
                                      <label for="EMR_ASESMEN_PERAWAT_RbtnHambatanYA">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Ya </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnHambatanTIDAK" name="EMR_ASESMEN_PERAWAT_RbtnHambatan" class="md-radiobtn" value="HambatanTidak">
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
                              <input type="text" id="hambatanBahasa" name="hambatanBahasa" value="" class="form-control">
                              <input type="hidden" id="hambatanBahasastatus" value="Tidak" class="form-control">
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
                                          <input type="text" id="TDSistolik" name="TDSistolik" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                          <label for="form_control_1">Sistolik</label>
                                          <span class="help-block">Masukkan Sistolik</span>
                                          <i style="font-size:12px"><b>mmHg&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</b></i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="TDDiastolik" name="TDDiastolik" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
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
                                          <input type="text" id="nadi" name="nadi" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                          <label for="form_control_1">N</label>
                                          <span class="help-block">Masukkan N</span>
                                          <i style="font-size:12px"><b>x/mnt</b></i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="md-radio-inline">
                                          <div class="md-radio">
                                              <input type="radio" id="NadiCH_reguler" name="NadiCH" class="md-radiobtn" value="NadiReguler">
                                              <label for="NadiCH_reguler">
                                                  <span class="inc"></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Reguler </label>
                                          </div>
                                          <div class="md-radio">
                                              <input type="radio" id="NadiCH_irreguler" name="NadiCH" class="md-radiobtn" value="NadiIrreguler">
                                              <label for="NadiCH_irreguler">
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
                                          <input type="text" id="suhutubuh" name="suhutubuh" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
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
                                          <input type="text" id="respiratory" name="respiratory" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                          <label for="form_control_1">Rr</label>
                                          <span class="help-block">Masukkan Rr</span>
                                          <i style="font-size:12px"><b>x/mnt</b></i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="md-radio-inline">
                                          <div class="md-radio">
                                              <input type="radio" id="RespiratoryCH_teratur" name="RespiratoryCH" class="md-radiobtn" value="RespiratoryTeratur">
                                              <label for="RespiratoryCH_teratur">
                                                  <span class="inc"></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Teratur </label>
                                          </div>
                                          <div class="md-radio">
                                              <input type="radio" id="RespiratoryCH_titeratur" name="RespiratoryCH" class="md-radiobtn" value="RespiratoryTiTeratur">
                                              <label for="RespiratoryCH_titeratur">
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
                              <div class="col-md-12">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <span>Nilai BMI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><b><span id="Nilai_BMI">0 Kg/m<sup>2</sup></span></b></br>
                                    <span>Kategori BMI : </span><b><span id="Kategori_BMI"></span></b>
                                  </div>
                                </div>
                              </div>
                              <input type="hidden" id="EMR_ASESMEN_PERAWAT_umur_Lingkar" name="EMR_ASESMEN_PERAWAT_umur_Lingkar" value="<?php echo $Utahun ?>">
                              <?php
                              if($Utahun < 1)
                              {
                                ?>
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
                                a. Bagaimana cara berjalan Pasien?
                                <div class="row md-radio-inline">

                                    <div class="col-md-12 md-radio">
                                        <input type="radio" id="EMR_ASESMEN_PERAWAT_FungA2" name="EMR_ASESMEN_PERAWAT_FungA" class="md-radiobtn" value="Cara2">
                                        <label for="EMR_ASESMEN_PERAWAT_FungA2">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Tidak seimbang / sempoyongan </label>
                                    </div>
                                    <div class="col-md-12 md-radio">
                                        <input type="radio" id="EMR_ASESMEN_PERAWAT_FungA3" name="EMR_ASESMEN_PERAWAT_FungA" class="md-radiobtn" value="Cara3">
                                        <label for="EMR_ASESMEN_PERAWAT_FungA3">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Jalan dengan menggunakan alat bantu </label>
                                    </div>
                                    <input type="text" id="alatbantu" name="alatbantu" value="" class="form-control collapse" maxlength="30" placeholder="Alat bantu yang digunakan pasien">
                                    <input type="hidden" id="alatbantustatus" name="alatbantustatus" value="Tidak" class="form-control">
                                    <div class="col-md-12 md-radio">
                                        <input type="radio" id="EMR_ASESMEN_PERAWAT_FungA1" name="EMR_ASESMEN_PERAWAT_FungA" class="md-radiobtn" value="Cara1">
                                        <label for="EMR_ASESMEN_PERAWAT_FungA1">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Normal </label>
                                    </div>
                                </div>
                                b. Apakah pasien menopang saat akan duduk?
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_FungBYA" name="EMR_ASESMEN_PERAWAT_FungB" class="md-radiobtn" value="MenopangYa">
                                    <label for="EMR_ASESMEN_PERAWAT_FungBYA">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_FungBTD" name="EMR_ASESMEN_PERAWAT_FungB" class="md-radiobtn" value="MenopangTd">
                                    <label for="EMR_ASESMEN_PERAWAT_FungBTD">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak </label>
                                  </div>
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
                              Hasil asesmen risiko jatuh :
                              <span id="EMR_ASESMEN_PERAWAT_FungHasil"><b> Tidak berisiko </b></span>
                            </div>
                            <div class="col-md-12">
                              Tindakan pencegahan risiko jatuh yg perlu dilakukan :
                              <span id="EMR_ASESMEN_PERAWAT_FungTindakan"><b> Tidak ada tindakan </b></span>
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
                                <input type="radio" id="EMR_ASESMEN_PERAWAT_SN1Ada" name="EMR_ASESMEN_PERAWAT_adaNyeri" class="md-radiobtn" value="NyeriY">
                                <label for="EMR_ASESMEN_PERAWAT_SN1Ada">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Ya </label>
                              </div>
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_PERAWAT_SN1Takda" name="EMR_ASESMEN_PERAWAT_adaNyeri" class="md-radiobtn" value="NyeriTD">
                                <label for="EMR_ASESMEN_PERAWAT_SN1Takda">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Tidak </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" id="EMR_ASESMEN_PERAWAT_SN_statadaNyeri" value="Tidak">
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
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSA1" name="EMR_ASESMEN_PERAWAT_SN_NIPSA" value="NIPSA1" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (wajah tenang, ekspresi netral) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSA2" name="EMR_ASESMEN_PERAWAT_SN_NIPSA" value="NIPSA2" class="md-check">
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
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSB1" name="EMR_ASESMEN_PERAWAT_SN_NIPSB" value="NIPSB1" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> No cry (tenang, tidak menangis) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSB2" name="EMR_ASESMEN_PERAWAT_SN_NIPSB" value="NIPSB2" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Whimper (merengek ringan, kadang-kadang) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSB3" name="EMR_ASESMEN_PERAWAT_SN_NIPSB" value="NIPSB3" class="md-check">
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
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSC1" name="EMR_ASESMEN_PERAWAT_SN_NIPSC" value="NIPSC1" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSC1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (Pola pernafasan bayi normal) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSC2" name="EMR_ASESMEN_PERAWAT_SN_NIPSC" value="NIPSC2" class="md-check">
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
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSD1" name="EMR_ASESMEN_PERAWAT_SN_NIPSD" value="NIPSD1" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSD1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSD2" name="EMR_ASESMEN_PERAWAT_SN_NIPSD" value="NIPSD2" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSD2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (gerakan tangan acak sesekali) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSD3" name="EMR_ASESMEN_PERAWAT_SN_NIPSD" value="NIPSD3" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSD3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Flexed (Tegang, lengan lurus, kaku dan atau fleksi) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSD4" name="EMR_ASESMEN_PERAWAT_SN_NIPSD" value="NIPSD4" class="md-check">
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
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSE1" name="EMR_ASESMEN_PERAWAT_SN_NIPSE" value="NIPSE1" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSE1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSE2" name="EMR_ASESMEN_PERAWAT_SN_NIPSE" value="NIPSE2" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSE2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (gerakan kaki acak sesekali) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSE3" name="EMR_ASESMEN_PERAWAT_SN_NIPSE" value="NIPSE3" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSE3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Flexed (Tegang, kaki lurus, kaku dan atau fleksi) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSE4" name="EMR_ASESMEN_PERAWAT_SN_NIPSE" value="NIPSE4" class="md-check">
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
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSF1" name="EMR_ASESMEN_PERAWAT_SN_NIPSF" value="NIPSF1" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSF1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sleeping (tenang, tidur damai) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSF2" name="EMR_ASESMEN_PERAWAT_SN_NIPSF" value="NIPSF2" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_NIPSF2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Awake (Tenang, tidak tidur/Bangun, gerakan kaki acak yang terjaga) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_NIPSF3" name="EMR_ASESMEN_PERAWAT_SN_NIPSF" value="NIPSF3" class="md-check">
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
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCA1" name="EMR_ASESMEN_PERAWAT_SN_FLACCA" value="FLACCA1" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak ada ekspresi tertentu atau seyum, kontak mata </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCA2" name="EMR_ASESMEN_PERAWAT_SN_FLACCA" value="FLACCA2" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Kadang meringis atau mengerutkan kening, menarik diri, tidak tertarik, wajah terlihat cemas, alis diturunkan, maka sebagian tertutup, pipi terangkat, mulut mengerut </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCA3" name="EMR_ASESMEN_PERAWAT_SN_FLACCA" value="FLACCA3" class="md-check">
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
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCB1" name="EMR_ASESMEN_PERAWAT_SN_FLACCB" value="FLACCB1" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Posisi normal atau santai </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCB2" name="EMR_ASESMEN_PERAWAT_SN_FLACCB" value="FLACCB2" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak nyaman, gelisah, tegang, tonus meningkat, kaku/flexi/ekstensi anggota badan intermitten </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCB3" name="EMR_ASESMEN_PERAWAT_SN_FLACCB" value="FLACCB3" class="md-check">
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
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCC1" name="EMR_ASESMEN_PERAWAT_SN_FLACCC" value="FLACCC1" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCC1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Berbaring dengan tenang, posisi normal, bergerak dengan bebas dan mudah </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCC2" name="EMR_ASESMEN_PERAWAT_SN_FLACCC" value="FLACCC2" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCC2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Menggeliat, menggeser maju mundur, tegang, ragu-ragu untuk bergerak, menjaga tekanan pada bagian tubuh </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCC3" name="EMR_ASESMEN_PERAWAT_SN_FLACCC" value="FLACCC3" class="md-check">
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
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCD1" name="EMR_ASESMEN_PERAWAT_SN_FLACCD" value="FLACCD1" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCD1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Tidak ada teriakan/erangan (terjaga/tertidur) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCD2" name="EMR_ASESMEN_PERAWAT_SN_FLACCD" value="FLACCD2" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCD2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Erangan/rengekan, sesekali menangis, sesekali mengeluh </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCD3" name="EMR_ASESMEN_PERAWAT_SN_FLACCD" value="FLACCD3" class="md-check">
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
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCE1" name="EMR_ASESMEN_PERAWAT_SN_FLACCE" value="FLACCE1" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCE1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Tenang, santai, tidak perlu di hibur </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCE2" name="EMR_ASESMEN_PERAWAT_SN_FLACCE" value="FLACCE2" class="md-check">
                                    <label for="EMR_ASESMEN_PERAWAT_SN_FLACCE2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Perlu keyakinan dengan sesekali menyentuh, sekali-kali memeluk atau berbicara. Perhatian mudah beralih </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_SN_FLACCE3" name="EMR_ASESMEN_PERAWAT_SN_FLACCE" value="FLACCE3" class="md-check">
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
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambahParah1" name="EMR_ASESMEN_PERAWAT_CbtnBertambahParah1" value="Tidak ada penyebab khusus" class="md-check">
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
                                        <input type="text" id="EMR_ASESMEN_PERAWAT_textBertambahParah" name="EMR_ASESMEN_PERAWAT_textBertambahParah" value="" class="form-control collapse" maxlength="30" placeholder="Lain lain">
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
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang1" name="EMR_ASESMEN_PERAWAT_CbtnBerkurang1" value="Kompres hangat/dingin" class="md-check">
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
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang3" name="EMR_ASESMEN_PERAWAT_CbtnBerkurang3" value="Minum obat" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Minum obat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang4" name="EMR_ASESMEN_PERAWAT_CbtnBerkurang4" value="Berubah posisi" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang4">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Berubah posisi </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang5" name="EMR_ASESMEN_PERAWAT_CbtnBerkurang5" value="Tidak ada" class="md-check">
                                        <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang5">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak ada </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_ASESMEN_PERAWAT_textBertambahParah2" name="EMR_ASESMEN_PERAWAT_textBertambahParah2" value="" class="form-control collapse" maxlength="30" placeholder="Lain lain">
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
                                        <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran1" name="EMR_ASESMEN_PERAWAT_CbtnGambaran1" value="Seperti ditimpa benda berat" class="md-check">
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
                                        <input type="text" id="EMR_ASESMEN_PERAWAT_textGambaran" name="EMR_ASESMEN_PERAWAT_textGambaran" value="" class="form-control collapse" maxlength="30" placeholder="Lain lain">
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
                                <input type="text" id="EMR_ASESMEN_PERAWAT_SNMenjalar1" name="EMR_ASESMEN_PERAWAT_SNMenjalar1" value="" class="form-control" maxlength="30" placeholder="Lokasi nyeri">
                                <br>
                                <span>Apakah menjalar?</span>
                                <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_MenjalarY" name="EMR_ASESMEN_PERAWAT_Menjalar" class="md-radiobtn" value="MenjalarY">
                                    <label for="EMR_ASESMEN_PERAWAT_MenjalarY">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Ya </label>
                                </div>
                                <input type="text" id="EMR_ASESMEN_PERAWAT_SNMenjalar2" name="EMR_ASESMEN_PERAWAT_SNMenjalar2" value="" class="form-control collapse" maxlength="30" placeholder="Lokasi menjalar">
                                <input type="hidden" id="EMR_ASESMEN_PERAWAT_SNMenjalar2status" name="EMR_ASESMEN_PERAWAT_SNMenjalar2status" value="Tidak" class="form-control">
                                <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_MenjalarTD" name="EMR_ASESMEN_PERAWAT_Menjalar" class="md-radiobtn" value="MenjalarTD">
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
                                        <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan1" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan" class="md-radiobtn" value="SetiapA1">
                                        <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Hilang timbul</label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan2" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan" class="md-radiobtn" value="SetiapA2">
                                        <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiapinsan2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Nyeri terus menerus</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                                <div class="collapse" id="setiapselamaapa">
                                  <input type="hidden" id="ststsetiapselamaapa" value="tidak">
                                  <span>Setiap berapa lama timbul nyeri?</span>
                                  <center>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap1" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn" value="SetiapB1">
                                          <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap1">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> 1-2 Jam</label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap2" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn" value="SetiapB2">
                                          <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> < 4 Jam</label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap3" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn" value="SetiapB3">
                                          <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap3">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> > 4 Jam</label>
                                        </div>
                                        <input type="text" id="EMR_ASESMEN_PERAWAT_SNlamawaktu" name="EMR_ASESMEN_PERAWAT_SNlamawaktu" value="" class="form-control" maxlength="30" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                  </center>
                                </div>
                                <div class="collapse" id="setiapselamaapa2">
                                  <input type="hidden" id="ststsetiapselamaapa2" value="tidak">
                                  <span>Berapa lamanya waktu serangan?</span>
                                  <center>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNselama1" name="EMR_ASESMEN_PERAWAT_RbtnSNselama" class="md-radiobtn" value="SetiapC1">
                                          <label for="EMR_ASESMEN_PERAWAT_RbtnSNselama1">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> < 30 menit </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNselama2" name="EMR_ASESMEN_PERAWAT_RbtnSNselama" class="md-radiobtn" value="SetiapC2">
                                          <label for="EMR_ASESMEN_PERAWAT_RbtnSNselama2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> > 30 menit </label>
                                        </div>
                                        <input type="text" id="EMR_ASESMEN_PERAWAT_SNlamawaktu2" name="EMR_ASESMEN_PERAWAT_SNlamawaktu2" value="" class="form-control" maxlength="30" placeholder="Lain lain">
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
                          <!--<?php
                          if($alergiobat != "")
                          {
                            echo "Pasien Mempunyai Alergi Obat : ".$alergiobat."";
                          }
                          else
                          {
                            echo "Pasien Masih Belum Mempunyai Catatan Alergi Obat";
                          }
                          ?>-->
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
                            <textarea class="form-control" id="alergiobat_asesmen_awal" name="alergiobat_asesmen_awal"></textarea>
                            <input type="hidden" id="alergiobatstatus" value="Tidak" class="form-control">
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
                            <textarea class="form-control" id="catatan" name="catatan" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
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
                              <span id="HasilHambatan"></span>
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
                              <span>TD : </span><span id="HasilSistolik"></span><span>/</span><span id="HasilDiastolik"></span><span> mmHg</span><br>
                              <span>N : </span><span id="HasilNadi"></span><span> x/mnt </span><span id="HasilNadi2"></span><br>
                              <span>t : </span><span id="HasilSuhuTubuh"></span><span> &deg;C</span><br>
                              <span>Rr : </span><span id="HasilRespiratory"></span><span> x/mnt </span><span id="HasilRespiratory2"></span><br>
                              <span>BB : </span><span id="HasilBeratBadan"></span><span> Kg </span><br>
                              <span>TB : </span><span id="HasilTinggiBadan"></span><span> cm </span><br>
                              <span>Hasil BMI : </span><span id="HasilNilaiBMI"></span><br>
                              <span>Kategori BMI : </span><span id="HasilKategoriBMI"></span><br>
                              <?php
                              if($Utahun < 1)
                              {
                                ?>
                                <span>Lingkar Kepala : </span><span id="HasilLingkarKepala"></span><span> cm </span>
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
                              <span>Cara Berjalan Pasien : </span><span id="HasilBerjalan"></span><span id="HasilBerjalan2"></span><br>
                              <span>Cara Duduk Pasien : </span><span id="HasilMenopang"></span><br>
                              <span>Hasil Asesmen Risiko Jatuh : </span><span id="HasilEMR_ASESMEN_PERAWAT_FungHasil"></span><br>
                              <span>Tindakan Pencegahan Risiko Jatuh Yang Perlu Dilakukan : </span><span id="HasilEMR_ASESMEN_PERAWAT_FungTindakan"></span>
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
                              <span id="HasilNyeri"></span><br>
                              <div class="collapse" id="HasilNyeri_tampilan">
                              <?php
                                if($Utahun < 1)
                                {?>
                                    <span>a. Facial Expression (ekspresi wajah)? <br><b>Jawaban:</b> </span><span id="HasilNIPSA"></span><br>
                                    <span>b. Cry (menangis)? <br><b>Jawaban:</b> </span><span id="HasilNIPSB"></span><br>
                                    <span>c. Breathing Patterns (pola pernafasan)? <br><b>Jawaban:</b> </span><span id="HasilNIPSC"></span><br>
                                    <span>d. Arms(lengan)? <br><b>Jawaban:</b> </span><span id="HasilNIPSD"></span><br>
                                    <span>e. Legs(kaki)? <br><b>Jawaban:</b> </span><span id="HasilNIPSE"></span><br>
                                    <span>f. State of Arousal (kesadaran)? <br><b>Jawaban:</b> </span><span id="HasilNIPSF"></span><br>
                                <?php
                                }
                                else if($Utahun < 4)
                                {?>
                                    <span>a. Face Expression (ekspresi wajah)? <br><b>Jawaban:</b> </span><span id="HasilFLACCA"></span><br>
                                    <span>b. Leg (Kaki)? <br><b>Jawaban:</b> </span><span id="HasilFLACCB"></span><br>
                                    <span>c. Activity (Aktivitas)? <br><b>Jawaban:</b> </span><span id="HasilFLACCC"></span><br>
                                    <span>d. Cry (Menangis)? <br><b>Jawaban:</b> </span><span id="HasilFLACCD"></span><br>
                                    <span>e. Consolalability (respon terhadap himbauan)? <br><b>Jawaban:</b> </span><span id="HasilFLACCE"></span><br>
                                <?php
                                }
                                else
                                {?>
                                    <span>Apa yang membuat nyeri bertambah parah? <br><b>Jawaban:</b> </span>
                                    <span id="HasilTambahParah1"></span>
                                    <span id="HasilTambahParah2"></span>
                                    <span id="HasilTambahParah3"></span><br>
                                    <span>Apa yang membuat nyeri berkurang? <br><b>Jawaban:</b> </span>
                                    <span id="HasilBerkurang1"></span>
                                    <span id="HasilBerkurang2"></span>
                                    <span id="HasilBerkurang3"></span>
                                    <span id="HasilBerkurang4"></span>
                                    <span id="HasilBerkurang5"></span>
                                    <span id="HasilBerkurang6"></span><br>
                                    <span>Gambaran rasa nyeri? <br><b>Jawaban:</b> </span>
                                    <span id="HasilGambaran1"></span>
                                    <span id="HasilGambaran2"></span>
                                    <span id="HasilGambaran3"></span>
                                    <span id="HasilGambaran4"></span>
                                    <span id="HasilGambaran5"></span>
                                    <span id="HasilGambaran6"></span>
                                    <span id="HasilGambaran7"></span>
                                    <span id="HasilGambaran8"></span><br>
                                    <span>Lokasi nyeri? <br><b>Jawaban:</b> </span>
                                    <span id="HasilLokasiNyeri1"></span>
                                    <span>, dan </span>
                                    <span id="HasilLokasiNyeri2"></span>
                                    <span id="HasilLokasiNyeri3"></span><br>
                                    <span>Seberapa sering anda mengalami nyeri? <br><b>Jawaban:</b> </span>
                                    <span id="HasilLamaNyeri1"></span><br>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Setiap berapa lama timbul nyeri? <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Jawaban:</b> </span>
                                    <span id="HasilLamaNyeri2"></span><br>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berapa lamanya waktu serangan? <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Jawaban:</b> </span>
                                    <span id="HasilLamaNyeri3"></span><br>
                                <?php
                                }
                                ?>
                                <br><span><b>Hasil Dari Keluhan Nyeri Pasien</b></span><br>
                                <span>Skor Nyeri :</span>
                                <span id="HasilSkorNyeri"></span><br>
                                <span>Skala Nyeri :</span>
                                  <?php
                                  if($Utahun < 1)
                                  {
                                    ?>
                                    <span id="HasilSkalaNyeri"></span>
                                    <?php
                                  }
                                  else if($Utahun < 4)
                                  {
                                    ?>
                                    <span id="HasilSkalaNyeri"></span>
                                    <?php
                                  }
                                  else
                                  {
                                    ?>
                                    <span id="HasilSkalaNyeri"></span>
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
                              <span id="HasilAlergi"></span><span id="HasilAlergi2"></span><br>
                              <span>Catatan Lain Untuk Pasien : </span><span id="HasilCatatan"></span><br>
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
              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman1" class="btn white col-md-9">1. Anamnesa</button>
              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman2" class="btn green col-md-1">2</button>
              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman3" class="btn green col-md-1">3</button>
              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman4" class="btn green col-md-1">4</button>
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
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama2" name="" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Diare </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama1" name="" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Panas/demam </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama3" name="" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Muntah</label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama4" name="" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Pilek </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama5" name="" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sakit Kepala </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama6" name="" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama6">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Batuk </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama7" name="" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Keluhanutama7">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Pusing berputar </label>
                                  </div>
                                  <div class="col-md-12">
                                    <span class="control-label">Lain lain : </span>
                                    <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_Keluhanutama8" name="" value="" placeholder="Lain lain">
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
                            <span><b>Riwayat Penyekit Sekarang</b></span>
                          </div>
                          <div class="portlet-body">
                            <div class="form-group form-md-line-input form-md-floating-label">
                              <textarea class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitSekarang" name="catatan" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
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
                            <span><b>Riwayat Penyekit Dahulu</b></span>
                          </div>
                          <div class="portlet-body">
                            <center>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1" name="" value="DM" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> DM </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2" name="" value="HT" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> HT </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3" name="" value="Stroke" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Stroke</label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4" name="" value="Jantung" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Jantung </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5" name="" value="Ginjal" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ginjal </label>
                                  </div>
                                  <div class="col-md-12">
                                    <span class="control-label">Lain lain : </span>
                                    <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA6" name="" value="" placeholder="Lain lain">
                                  </div>
                                </div>
                                <br>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA7" name="" value="Tidak ada" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA7">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> tidak ada </label>
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
                            <span><b>Riwayat Penyekit Keluarga</b></span>
                          </div>
                          <div class="portlet-body">
                            <center>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1" name="" value="DM" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> DM </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2" name="" value="HT" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> HT </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3" name="" value="Stroke" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Stroke</label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4" name="" value="Jantung" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Jantung </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5" name="" value="Ginjal" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ginjal </label>
                                  </div>
                                  <div class="col-md-12">
                                    <span class="control-label">Lain lain : </span>
                                    <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB6" name="" value="" placeholder="Lain lain">
                                  </div>
                                </div>
                                <br>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB7" name="" value="Tidak ada" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB7">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> tidak ada </label>
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
                            <div id="EMR_ASESMEN_DOKTER_InputalergiObat2" class="collapse">
                              </br>
                              <label for="form_control_1">Masukkan Alergi</label>
                              <input type="text" id="alergiobat2" name="alergiobat2" value="" class="form-control">
                              <input type="hidden" id="alergiobatstatus2" value="Tidak" class="form-control">
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
                                  <input type="radio" id="EMR_ASESMEN_DOKTER_RbtnAlergiOYA" name="EMR_ASESMEN_DOKTER_RbtnAlergiO" class="md-radiobtn">
                                  <label for="EMR_ASESMEN_DOKTER_RbtnAlergiOYA">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> YA </label>
                                </div>
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASESMEN_DOKTER_RbtnAlergiOTIDAK" name="EMR_ASESMEN_DOKTER_RbtnAlergiO" class="md-radiobtn">
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
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatSosial1" name="" value="Merokok" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatSosial1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak ada </label>
                                  </div>
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatSosial2" name="" value="Merokok" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatSosial2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Merokok </label>
                                  </div>
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatSosial3" name="" value="Alkohol" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatSosial3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Alkohol </label>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <span class="control-label">Lain lain : </span>
                                  <input type="text" id="EMR_ASESMEN_DOKTER_RiwayatSosial4" value="" class="form-control" placeholder="Lain lain">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="EMR_ASESMEN_DOKTER_anamnesa_5" class="collapse">
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
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Ya" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh1" class="md-radiobtn">
                                        <label for="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Ya">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Baik </label>
                                      </div>
                                      <div class="col-md-6 md-radio">
                                        <input type="radio" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lain" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh1" class="md-radiobtn">
                                        <label for="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lain">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Lainnya </label>
                                      </div>
                                      <div id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lainnya2" class="col-md-6 collapse">
                                        <input type="text" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lainnya" value="" class="form-control" placeholder="Lain lain">
                                        <input type="hidden" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1Lainnya3" value="collapse" class="form-control" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </br>
                                <span>Imunisais pasien?</span>
                                <div class="row md-radio-inline">
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh1" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatTumbuh1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Imunisasi Lengkap </label>
                                  </div>
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh2" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_RiwayatTumbuh2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Imunisasi tidak lengkap </label>
                                  </div>
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_RiwayatTumbuh3" name="EMR_ASESMEN_DOKTER_RiwayatTumbuh" value="" class="md-check">
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
                    </div>
                    <center class="col-md-12">
                      <div class="btn-group btn-group-circle btn-group-sm btn-group-solid" style="width:50%">
                        <button type="button" id="EMR_ASESMEN_DOKTER_subhalBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                        <button type="button" id="EMR_ASESMEN_DOKTER_subhalNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                      </div>
                    <br>
                    </br>
                    </center>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Halaman2">
                    <div class="" id="EMR_ASESMEN_DOKTER_fisik_1">
                      <div class="col-md-12">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body row">
                            <div class="col-md-6">
                              <span class="control-label">Keadaan Umum : </span>
                              <input type="text" id="EMR_ASESMEN_DOKTER_KeadaanUmum" value="" class="form-control" placeholder="Lain lain">
                            </div>
                            <div class="col-md-6">
                              <span class="control-label">Kesadaran : </span>
                              <input type="text" id="EMR_ASESMEN_DOKTER_Kesadaran" value="" class="form-control" placeholder="Lain lain">
                            </div>
                            <br>
                            <div class="col-md-2">
                              <span class="control-label">GCS : </span>
                            </div>
                            <div class="col-md-3">
                              <span class="control-label">E : </span>
                              <input type="text" id="EMR_ASESMEN_DOKTER_GCSe" value="" class="form-control" placeholder="Lain lain">
                            </div>
                            <div class="col-md-3">
                              <span class="control-label">V : </span>
                              <input type="text" id="EMR_ASESMEN_DOKTER_GCSv" value="" class="form-control" placeholder="Lain lain">
                            </div>
                            <div class="col-md-3">
                              <span class="control-label">M : </span>
                              <input type="text" id="EMR_ASESMEN_DOKTER_GCSm" value="" class="form-control" placeholder="Lain lain">
                            </div>
                          </div>
                        </div>
                      </div>
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
                                      <input type="text" id="tekanandarah2" name="tekanandarah" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                      <label for="form_control_1">TD</label>
                                      <span class="help-block">Masukkan TD</span>
                                      <i style="font-size:12px"><b>mmHg</b></i>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="nadi2" name="nadi" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                      <label for="form_control_1">N</label>
                                      <span class="help-block">Masukkan N</span>
                                      <i style="font-size:12px"><b>x/mnt</b></i>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="suhutubuh2" name="suhutubuh" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                      <label for="form_control_1">t</label>
                                      <span class="help-block">Masukkan t</span>
                                      <i style="font-size:12px"><b>&deg;C</b></i>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="respiratory2" name="respiratory2" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
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
                                      <input type="text" id="beratbadan2" name="beratbadan" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                      <label for="form_control_1">BB</label>
                                      <span class="help-block">Masukkan BB</span>
                                      <i style="font-size:12px"><b>Kg</b></i>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="tinggibadan2" name="tinggibadan" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                      <label for="form_control_1">TB</label>
                                      <span class="help-block">Masukkan TB</span>
                                      <i style="font-size:12px"><b>cm</b></i>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <span>Nilai BMI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><b><span id="Nilai_BMI2">0</span></b></br>
                                      <span>Kategori BMI : </span><b><span id="Kategori_BMI2"></span></b>
                                    </div>
                                  </div>
                                </div>
                                <?php
                                if($Utahun < 14)
                                {
                                ?>
                                  <div class="col-md-6">
                                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                                      <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                        <input type="text" id="lingkarkepala2" name="lingkarkepala2" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
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
                    <div class="collapse" id="EMR_ASESMEN_DOKTER_fisik_2">
                      <div class="col-md-12">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Kepala/Leher</b></span>
                          </div>
                          <div class="portlet-body">
                            <table class="col-md-8">
                              <tr>
                                <td class="col-md-6"><span><center>Anemis</center></span></td>
                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnAnemis" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                <td class="col-md-3"></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Ikterus</center></span></td>
                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnIkterus" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                <td class="col-md-3"></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Cyanosis</center></span></td>
                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnCyanosis" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                <td class="col-md-3"></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Dipsneo</center></span></td>
                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnDipsneo" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                <td class="col-md-3"></td>
                              </tr>
                              <?php
                              if($Utahun < 1.5)
                              { ?>
                              <tr>
                                <td class="col-md-6"><span><center>UUK</center></span></td>
                                <td colspan="2" class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnUUK" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>UUB</center></span></td>
                                <td colspan="2" class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnUUB" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <?php } ?>
                              <tr>
                                <td class="col-md-6"></td>
                                <td class="col-md-3"><span><center>Kanan</center></span></td>
                                <td class="col-md-3"><span><center>Kiri</center></span></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><center><span>Pupil </span><span id="pupilstat">Isokor</span></center></td>
                                <td class="col-md-3">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="EMR_ASESMEN_DOKTER_pupilKanan" name="EMR_ASESMEN_DOKTER_pupilKanan" value="3" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                      <label for="form_control_1"></label>
                                      <span class="help-block">Masukkan nilai</span>
                                      <i style="font-size:12px"><b>mm</b></i>
                                    </div>
                                  </div>
                                </td>
                                <td class="col-md-3">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="EMR_ASESMEN_DOKTER_pupilKiri" name="EMR_ASESMEN_DOKTER_pupilKiri" value="3" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                      <label for="form_control_1"></label>
                                      <span class="help-block">Masukkan nilai</span>
                                      <i style="font-size:12px"><b>mm</b></i>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Cahaya</center></span></td>
                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnCahayaKanan" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnCahayaKiri" class="btn green col-md-12" value="+"><b> + </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Lain - lain</center></span></td>
                                <td colspan="2" class="col-md-6">
                                  <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_KepalaLeher" name="" value="" placeholder="Lain lain">
                                </td>
                              </tr>
                            </table>
                            <br>
                            </br>
                          </br>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="collapse" id="EMR_ASESMEN_DOKTER_fisik_3">
                      <div class="col-md-12">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Cor</b></span>
                          </div>
                          <div class="portlet-body">
                            <center>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="row md-radio-inline">
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_Cor1" name="coresplitranger" value="" class="md-check" checked="true">
                                    <label for="EMR_ASESMEN_DOKTER_Cor1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> S1, S2, Tunggal & reguler </label>
                                  </div>
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_Cor2" name="coresplitranger" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Cor2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Split S1 </label>
                                  </div>
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_Cor3" name="coresplitranger" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Cor3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Split S2</label>
                                  </div>
                                </div>
                                <input type="hidden" id="statcorranger" value="hidden">
                                <div id="coresplitshow" class="row md-radio-inline collapse">
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_Cor4" name="coresplitgundam" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Cor4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Irregular </label>
                                  </div>
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_DOKTER_Cor5" name="coresplitgundam" value="" class="md-check">
                                    <label for="EMR_ASESMEN_DOKTER_Cor5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Regular </label>
                                  </div>
                                </div>
                              </div>
                              <button type="button" id="EMR_ASESMEN_DOKTER_btnMurmur" class="btn yellow col-md-5" value="-"><b> Murmur - </b></button>
                              <button type="button" id="EMR_ASESMEN_DOKTER_btnGallop" class="btn yellow col-md-5" value="-"><b> Gallop - </b></button>
                            </div>
                            </center>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="collapse" id="EMR_ASESMEN_DOKTER_fisik_4">
                      <div class="col-md-12">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Pulmo</b></span>
                          </div>
                          <div class="portlet-body row">
                            <div class="col-md-4">
                              <span>Vesikuler</span></br>
                              <table>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler5" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnVesikuler6" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                              </table>
                            </div>
                            <div class="col-md-4">
                              <span>Rhonki</span></br>
                              <table>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki5" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnRhonki6" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                              </table>
                            </div>
                            <div class="col-md-4">
                              <span>Wheezing</span></br>
                              <table>
                                <tr>
                                  <td class="col-md-6"><button type="button" id=" class="col-md-6"" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnWheezing2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnWheezing3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnWheezing4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnWheezing5" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnWheezing6" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                              </table>
                            </div>
                            </br>
                            <div class="col-md-6">
                              <span class="control-label">Retraksi Intercostal : </span>
                              <button type="button" id="EMR_ASESMEN_DOKTER_btnretraksi" class="btn green col-md-12" value="+"><b> + </b></button>
                            </div>
                            <div class="col-md-6">
                              <span class="control-label">Lain - lain : </span>
                              <input type="text" id="" value="" class="form-control" placeholder="Lain lain">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="collapse" id="EMR_ASESMEN_DOKTER_fisik_5">
                      <div class="col-md-12">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Abdomen</b></span>
                          </div>
                          <div class="portlet-body row">
                            <table class="col-md-6">
                              <tr>
                                <td class="col-md-6"><span><center>Bising Usus</center></span></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen1" class="btn yellow col-md-12" value="- N"><b> - N </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Meteorimus</center></span></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen2" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Flat</center></span></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen3" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Soeple</center></span></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen4" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Defans</center></span></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen5" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Distensi</center></span></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen6" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                            </table>
                            <table class="col-md-6">
                              <tr>
                                <td class="col-md-6"><span><center>Hepar</center></span></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen7" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Lien</center></span></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen8" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Shifting dullness</center></span></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen9" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Mc burney</center></span></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen10" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Murphy</center></span></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen11" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><span><center>Nyeri Tekan</center></span></td>
                                <td class="col-md-6">
                                  <table>
                                    <tr>
                                      <td><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen12" class="btn yellow" value="-" style="width:100%"><b> - </b></button></td>
                                      <td><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen13" class="btn yellow" value="-" style="width:100%"><b> - </b></button></td>
                                      <td><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen14" class="btn yellow" value="-" style="width:100%"><b> - </b></button></td>
                                    </tr>
                                    <tr>
                                      <td><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen15" class="btn yellow" value="-" style="width:100%"><b> - </b></button></td>
                                      <td><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen16" class="btn yellow" value="-" style="width:100%"><b> - </b></button></td>
                                      <td><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen17" class="btn yellow" value="-" style="width:100%"><b> - </b></button></td>
                                    </tr>
                                    <tr>
                                      <td><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen18" class="btn yellow" value="-" style="width:100%"><b> - </b></button></td>
                                      <td><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen19" class="btn yellow" value="-" style="width:100%"><b> - </b></button></td>
                                      <td><button type="button" id="EMR_ASESMEN_DOKTER_btnAbdomen20" class="btn yellow" value="-" style="width:100%"><b> - </b></button></td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="collapse" id="EMR_ASESMEN_DOKTER_fisik_6">
                      <div class="col-md-12">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title">
                            <span><b>Ekstremitas</b></span>
                          </div>
                          <div class="portlet-body row">
                            <table class="col-md-4">
                              <tr>
                                <td colspan="2" class="col-md-12"><span><center>AKral Hangat</center></span></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas1" class="btn yellow col-md-12" value="+"><b> + </b></button></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas2" class="btn yellow col-md-12" value="+"><b> + </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas3" class="btn yellow col-md-12" value="+"><b> + </b></button></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas4" class="btn yellow col-md-12" value="+"><b> + </b></button></td>
                              </tr>
                            </table>
                            <table class="col-md-4">
                              <tr>
                                <td colspan="2" class="col-md-12"><span><center>Motorik</center></span></td>
                              </tr>
                              <tr>
                                <td class="col-md-6">
                                  <select class="bs-select form-control">
                                    <option value='5' selected>5</option>
                                    <option value='4'>4</option>
                                    <option value='3'>3</option>
                                    <option value='2'>2</option>
                                    <option value='1'>1</option>
                                    <option value='0'>0</option>
                                  </select>
                                </td>
                                <td class="col-md-6">
                                  <select class="bs-select form-control">
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
                                  <select class="bs-select form-control">
                                    <option value='5' selected>5</option>
                                    <option value='4'>4</option>
                                    <option value='3'>3</option>
                                    <option value='2'>2</option>
                                    <option value='1'>1</option>
                                    <option value='0'>0</option>
                                  </select>
                                </td>
                                <td class="col-md-6">
                                  <select class="bs-select form-control">
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
                            <table class="col-md-4">
                              <tr>
                                <td colspan="2" class="col-md-12"><span><center>Oedema</center></span></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas9" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas10" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                              <tr>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas11" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas12" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                              </tr>
                            </table>
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
                    //tempat lokalis
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Halaman4">
                    <a class="btn bg-green-jungle bg-font-green-jungle" value="Tambah Data" data-toggle="modal" href="#EMRmodalObat_ases_dok" style="height:80px;"><center><font size=6.5><b><i class="fa fa-plus"></i> Masukkan Obat</b></font></center></a>
                    <div id="EMRmodalObat_ases_dok" class="modal" data-width="100%" style="width:90%;">
                      <!--MODAL OBAT HEADER-->
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
                            <a type="button" id="EMR_ASESMEN_btnObatSatuan" class="btn disabled white" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Satuan</b></a>
                            <a type="button" id="EMR_ASESMEN_btnObatRacik" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Racik</b></a>
                          </div>
                        </div>
                      </div>
                      <!--MODAL OBAT BODY-->
                      <div class="modal-body bg-grey-steel bg-font-grey-steel">
                        <input type="hidden" id="EMR_ASESMEN_statObat" value="Satuan">
                        <!--OBAT SATUAN-->
                        <div class="row" id="EMR_ASESMEN_formObatSatuan">
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
                                          <input type="text" name="obatsatuan_ases_dok[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>
                                          <input type="hidden" name="idobatsatuan_ases_dok[]" class="form-control project"/>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label class="control-label" style="font-size:14px">Jumlah Obat</label>
                                          <input type="text" id="jumlahsatuan_ases_dok" name="jumlahsatuan_ases_dok[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row mt-repeater-row" style="position:relative; display: block; margin-bottom: -1em;">
                                      <div class="col-md-4">
                                        <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                        <input type="text" id="aturanPakai_ases_dok_1" name="aturanPakai_ases_dok_1[]" placeholder="Aturan Pakai" class="form-control"/>
                                      </div>
                                      <div class="col-md-4">
                                        <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;</label>
                                        <input type="text" id="aturanPakai_ases_dok_2" name="aturanPakai_ases_dok_2[]" placeholder="Aturan Pakai" class="form-control"/>
                                      </div>
                                      <div class="col-md-4">
                                        <label class="control-label" style="font-size:14px">Ket.</label>
                                        <input type="text" id="keterangan_ases_dok" name="keterangan_ases_dok[]" placeholder="Ket" class="form-control" />
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div id="div1Satuan_ases_dok">
                          </div>
                          <div class="col-md-4" id="div_buttonSatuan_ases_dok">
                            <center>
                              <a class="btn green-jungle col-md-12" name="tambahSatuan_ases_dok" value="Tambah Data" id="tambahSatuan_ases_dok" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                            </center>
                          </div>
                        </div>
                        <!--OBAT RACIK-->
                        <div class="collapse" id="EMR_ASESMEN_formObatRacik">
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
                                              <input type="text" name="obatsatuanRacik_ases_dok[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                              <input type="hidden" name="idobatsatuanRacik_ases_dok[]" value="" class="form-control project_racik"/>
                                              <input type="hidden" value="RACIK_0001" id="idRacik_ases_dok" name="idRacik_ases_dok[]" class="form-control" />
                                            </div>
                                            <div class="col-md-4">
                                              <label class="control-label" style="font-size:14px">Jumlah</label>
                                              <input type="text" id="jumlahRacik_ases_dok" name="jumlahRacik_ases_dok[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>
                                            </div>
                                          </div>
                                        </div>
                                        <div id="divracikBahan_ases_dok1"></div>
                                        <div id="div_buttonracikBahan_ases_dok1">
                                          <a class="btn blue tambahRacikBahan_ases_dok-click col-md-12" name="tambahRacikBahan_ases_dok" value="Tambah Data" data-todo='{"number":"1"}'><i class="fa fa-plus"></i> Tambah Bahan</a>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <label class="control-label" style="font-size:14px">Detail Obat</label>
                                        <div class="row">
                                          <div class="col-md-4">
                                            <input type="text" id="jumlahRacik_ases_dok_2" name="jumlahRacik_ases_dok_2[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>
                                          </div>
                                          <div class="col-md-8">
                                            <input type="text" id="aturanpakaiRacik_ases_dok" name="aturanpakaiRacik_ases_dok[]" placeholder="Aturan Pakai" class="form-control" />
                                          </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-md-4">
                                            <input type="text" id="aturanpakaiRacik_ases_dok_2" name="aturanpakaiRacik_ases_dok_2[]" placeholder="Aturan Pakai" class="form-control" />
                                          </div>
                                          <div class="col-md-8">
                                            <input type="text" id="keteranganRacik_ases_dok" name="keteranganRacik_ases_dok[]" placeholder="Keterangan" class="form-control" />
                                          </div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" value="RACIK_0001" id="idRacik_ases_dok_2" name="idRacik_ases_dok_2[]" class="form-control" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="divracikobat_ases_dok"></div>
                            <div class="col-md-4" id="div_buttonracikobat_ases_dok">
                              <center>
                                <a class="btn green-jungle col-md-12" name="tambahracikobat_ases_dok" value="Tambah Data" id="tambahracikobat_ases_dok" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                              </center>
                            </div>
                          </div>
                        </div>
                        <!--MODAL OBAT FOOTER-->
                        <div class="modal-footer">
                          <button type="button" id="" data-dismiss="modal" class="btn blue">Tutup</button>
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
      </div>

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
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data Rekam Medis berikut, isi username dan password dokter di bawah ini terlebih dahulu sebagai proses verifikasi pengisi data.</p>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_ASESMEN_AWAL_userPerDokter" name="EMR_ASESMEN_AWAL_userPerDokter" class="form-control">
                    <label for="form_control_1">Masukkan Username Dokter</label>
                    <span class="help-block">Masukkan Username Dokter</span>
                  </div>
                </div>
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
        <div class="portlet light portlet-fit bordered">
          <div class="portlet-body">
            <div class="row">
              <div id="alert-msg-EMR_ASESMEN_AWAL_Perawat"></div>
              <div id="EMR_ASESMEN_PERAWAT_btnCommand" class="">
                <div class="btn-group btn-group btn-group-justified">
                    <button type="button" class="btn white" id="EMR_ASESMEN_AWAL_btnselanjutnyaPerawat" name="EMR_ASESMEN_AWAL_btnselanjutnyaPerawat" style="width:100%">Selanjutnya</button>
                </div>
              </div>
              <div id="EMR_ASESMEN_DOKTER_btnCommand" class="collapse">
                <div class="btn-group btn-group btn-group-justified">
                  <input type="hidden" id="EMR_ASESMEN_AWAL_userPerPerawatHalDok" name="EMR_ASESMEN_AWAL_userPerPerawatHalDok" value="">
                    <button type="button" class="btn green" id="EMR_ASESMEN_AWAL_btnsimpan" name="EMR_ASESMEN_AWAL_btnsimpan" style="width:100%">Simpan</button>
                </div>
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
