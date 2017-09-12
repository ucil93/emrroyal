
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content" style="background-color:#BFBFBF;">
    <input type="hidden" id="EMR_ASESMEN_AWAL_NamaDokter" name="EMR_ASESMEN_AWAL_NamaDokter" value="<?php echo $namadokter; ?>" class="form-control">
    <input type="hidden" id="EMR_ASESMEN_AWAL_KodeDokter" name="EMR_ASESMEN_AWAL_KodeDokter" value="<?php echo $kodedokter; ?>" class="form-control">
    <div class="row">
      <div class="col-md-8">
        <div class="portlet light bordered">
          <div class="caption font-red-sunglo">
            <center><span id="EMR_ASWAL_BDN_judulHalaman" class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">PENGKAJIAN KEBIDANAN AWAL KEPERAWATAN PASIEN RAWAT JALAN</span></center>
          </div>
        </div>
        <div id="EMR_ASWAL_BDN_HalamanPerawat">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_ASWAL_BDN_PR_btnHalaman1" class="btn white col-md-5">1. Tanda Vital dan Nutrisi</button>
              <button type="button" id="EMR_ASWAL_BDN_PR_btnHalaman2" class="btn green col-md-1">2</button>
              <button type="button" id="EMR_ASWAL_BDN_PR_btnHalaman3" class="btn green col-md-1">3</button>
              <button type="button" id="EMR_ASWAL_BDN_PR_btnHalaman4" class="btn green col-md-1">4</button>
              <button type="button" id="EMR_ASWAL_BDN_PR_btnHalaman5" class="btn green col-md-1">5</button>
              <button type="button" id="EMR_ASWAL_BDN_PR_btnHalaman6" class="btn green col-md-1">6</button>
              <button type="button" id="EMR_ASWAL_BDN_PR_btnHalaman7" class="btn green col-md-1">7</button>
              <button type="button" id="EMR_ASWAL_BDN_PR_btnHalaman8" class="btn green col-md-1">8</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_ASWAL_BDN_PR_Halaman1">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
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
                                          <input type="text" id="EMR_ASWAL_BDN_PR_TDSistolik" name="EMR_ASWAL_BDN_PR_TDSistolik" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                          <label for="form_control_1">Sistolik</label>
                                          <span class="help-block">Masukkan Sistolik</span>
                                          <i style="font-size:12px"><b>mmHg&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</b></i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASWAL_BDN_PR_TDDiastolik" name="EMR_ASWAL_BDN_PR_TDDiastolik" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
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
                                          <input type="text" id="EMR_ASWAL_BDN_PR_nadi" name="EMR_ASWAL_BDN_PR_nadi" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                          <label for="form_control_1">N</label>
                                          <span class="help-block">Masukkan N</span>
                                          <i style="font-size:12px"><b>x/mnt</b></i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="md-radio-inline">
                                          <div class="md-radio">
                                              <input type="radio" id="EMR_ASWAL_BDN_PR_NadiCH_reguler" name="EMR_ASWAL_BDN_PR_NadiCH" class="md-radiobtn" value="NadiReguler">
                                              <label for="EMR_ASWAL_BDN_PR_NadiCH_reguler">
                                                  <span class="inc"></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Reguler </label>
                                          </div>
                                          <div class="md-radio">
                                              <input type="radio" id="EMR_ASWAL_BDN_PR_NadiCH_irreguler" name="EMR_ASWAL_BDN_PR_NadiCH" class="md-radiobtn" value="NadiIrreguler">
                                              <label for="EMR_ASWAL_BDN_PR_NadiCH_irreguler">
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
                                          <input type="text" id="EMR_ASWAL_BDN_PR_suhutubuh" name="EMR_ASWAL_BDN_PR_suhutubuh" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
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
                                          <input type="text" id="EMR_ASWAL_BDN_PR_respiratory" name="EMR_ASWAL_BDN_PR_respiratory" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                          <label for="form_control_1">Rr</label>
                                          <span class="help-block">Masukkan Rr</span>
                                          <i style="font-size:12px"><b>x/mnt</b></i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="md-radio-inline">
                                          <div class="md-radio">
                                              <input type="radio" id="EMR_ASWAL_BDN_PR_RespiratoryCH_teratur" name="EMR_ASWAL_BDN_PR_RespiratoryCH" class="md-radiobtn" value="RespiratoryTeratur">
                                              <label for="EMR_ASWAL_BDN_PR_RespiratoryCH_teratur">
                                                  <span class="inc"></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Teratur </label>
                                          </div>
                                          <div class="md-radio">
                                              <input type="radio" id="EMR_ASWAL_BDN_PR_RespiratoryCH_titeratur" name="EMR_ASWAL_BDN_PR_RespiratoryCH" class="md-radiobtn" value="RespiratoryTiTeratur">
                                              <label for="EMR_ASWAL_BDN_PR_RespiratoryCH_titeratur">
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
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASWAL_BDN_PR_beratbadan" name="EMR_ASWAL_BDN_PR_beratbadan" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">BB</label>
                                    <span class="help-block">Masukkan BB</span>
                                    <i style="font-size:12px"><b>Kg</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASWAL_BDN_PR_tinggibadan" name="EMR_ASWAL_BDN_PR_tinggibadan" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                    <label for="form_control_1">TB</label>
                                    <span class="help-block">Masukkan TB</span>
                                    <i style="font-size:12px"><b>cm</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <span>Nilai BMI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><b><span id="EMR_ASWAL_BDN_PR_Nilai_BMI">0 Kg/m<sup>2</sup></span></b></br>
                                    <span>Kategori BMI : </span><b><span id="EMR_ASWAL_BDN_PR_Kategori_BMI"></span></b>
                                  </div>
                                </div>
                              </div>
                              <input type="hidden" id="EMR_ASWAL_BDN_PR_umur_Lingkar" name="EMR_ASWAL_BDN_PR_umur_Lingkar" value="<?php echo $Utahun ?>">
                              <?php
                              if($Utahun < 1)
                              {
                                ?>
                                <div class="col-md-6">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="EMR_ASWAL_BDN_PR_lingkarkepala" name="EMR_ASWAL_BDN_PR_lingkarkepala" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
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
                  <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_Halaman2">
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
                                        <input type="radio" id="EMR_ASWAL_BDN_PR_FungA2" name="EMR_ASWAL_BDN_PR_FungA" class="md-radiobtn" value="Cara2">
                                        <label for="EMR_ASWAL_BDN_PR_FungA2">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Tidak seimbang / sempoyongan </label>
                                    </div>
                                    <div class="col-md-12 md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_PR_FungA3" name="EMR_ASWAL_BDN_PR_FungA" class="md-radiobtn" value="Cara3">
                                        <label for="EMR_ASWAL_BDN_PR_FungA3">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Jalan dengan menggunakan alat bantu </label>
                                    </div>
                                    <input type="text" id="EMR_ASWAL_BDN_PR_alatbantu" name="EMR_ASWAL_BDN_PR_alatbantu" value="" class="form-control collapse" maxlength="30" placeholder="Alat bantu yang digunakan pasien">
                                    <input type="hidden" id="EMR_ASWAL_BDN_PR_alatbantustatus" name="EMR_ASWAL_BDN_PR_alatbantustatus" value="Tidak" class="form-control">
                                    <div class="col-md-12 md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_PR_FungA1" name="EMR_ASWAL_BDN_PR_FungA" class="md-radiobtn" value="Cara1">
                                        <label for="EMR_ASWAL_BDN_PR_FungA1">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Normal </label>
                                    </div>
                                </div>
                                b. Apakah pasien menopang saat akan duduk?
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_FungBYA" name="EMR_ASWAL_BDN_PR_FungB" class="md-radiobtn" value="MenopangYa">
                                    <label for="EMR_ASWAL_BDN_PR_FungBYA">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_FungBTD" name="EMR_ASWAL_BDN_PR_FungB" class="md-radiobtn" value="MenopangTd">
                                    <label for="EMR_ASWAL_BDN_PR_FungBTD">
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
                              <span id="EMR_ASWAL_BDN_PR_FungHasil"><b> Tidak berisiko </b></span>
                            </div>
                            <div class="col-md-12">
                              Tindakan pencegahan risiko jatuh yg perlu dilakukan :
                              <span id="EMR_ASWAL_BDN_PR_FungTindakan"><b> Tidak ada tindakan </b></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_Halaman3">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <span>Apakah Pasien Memiliki Keluhan Nyeri?</span>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="md-radio-inline">
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASWAL_BDN_PR_SN1Ada" name="EMR_ASWAL_BDN_PR_adaNyeri" class="md-radiobtn" value="NyeriY">
                                <label for="EMR_ASWAL_BDN_PR_SN1Ada">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Ya </label>
                              </div>
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASWAL_BDN_PR_SN1Takda" name="EMR_ASWAL_BDN_PR_adaNyeri" class="md-radiobtn" value="NyeriTD">
                                <label for="EMR_ASWAL_BDN_PR_SN1Takda">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Tidak </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" id="EMR_ASWAL_BDN_PR_SN_statadaNyeri" value="Tidak">
                      <div class="col-md-12 portlet light bordered collapse" id="EMR_ASWAL_BDN_PR_SN1Takda2">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <input type="hidden" id="EMR_ASWAL_BDN_PR_nyeri_ada_focus" name="EMR_ASWAL_BDN_PR_nyeri_ada_focus" value="">
                            <input type="hidden" id="EMR_ASWAL_BDN_PR_umur_skala" name="EMR_ASWAL_BDN_PR_umur_skala" value="<?php echo $Utahun ?>">
                            <?php
                            if($Utahun < 1)
                            {?>
                              <div class="col-md-12" id="EMR_ASWAL_BDN_PR_SN1_1">
                                a. Facial Expression (ekspresi wajah)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSA1" name="EMR_ASWAL_BDN_PR_SN_NIPSA" value="NIPSA1" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (wajah tenang, ekspresi netral) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSA2" name="EMR_ASWAL_BDN_PR_SN_NIPSA" value="NIPSA2" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Grimace (otot wajah tegang, alis berkerut, dagu dan rahang tegang) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN1_2">
                                b. Cry (menangis)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSB1" name="EMR_ASWAL_BDN_PR_SN_NIPSB" value="NIPSB1" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> No cry (tenang, tidak menangis) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSB2" name="EMR_ASWAL_BDN_PR_SN_NIPSB" value="NIPSB2" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Whimper (merengek ringan, kadang-kadang) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSB3" name="EMR_ASWAL_BDN_PR_SN_NIPSB" value="NIPSB3" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSB3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>Vigorour crying (berteriak kencang, menarik, melengking terus-terusan)</label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN1_3">
                                c. Breathing Patterns (pola pernafasan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSC1" name="EMR_ASWAL_BDN_PR_SN_NIPSC" value="NIPSC1" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSC1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (Pola pernafasan bayi normal) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSC2" name="EMR_ASWAL_BDN_PR_SN_NIPSC" value="NIPSC2" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSC2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Change in breathing (tidak teratur, lebih cepat dari biasanya, tersedak, nafas tertahan) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN1_4">
                                d. Arms(lengan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSD1" name="EMR_ASWAL_BDN_PR_SN_NIPSD" value="NIPSD1" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSD1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSD2" name="EMR_ASWAL_BDN_PR_SN_NIPSD" value="NIPSD2" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSD2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (gerakan tangan acak sesekali) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSD3" name="EMR_ASWAL_BDN_PR_SN_NIPSD" value="NIPSD3" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSD3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Flexed (Tegang, lengan lurus, kaku dan atau fleksi) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSD4" name="EMR_ASWAL_BDN_PR_SN_NIPSD" value="NIPSD4" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSD4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Extended (Tegang, lengan lurus, kaku dan atau ekstensi) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN1_5">
                                e. Legs(kaki)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSE1" name="EMR_ASWAL_BDN_PR_SN_NIPSE" value="NIPSE1" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSE1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSE2" name="EMR_ASWAL_BDN_PR_SN_NIPSE" value="NIPSE2" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSE2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (gerakan kaki acak sesekali) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSE3" name="EMR_ASWAL_BDN_PR_SN_NIPSE" value="NIPSE3" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSE3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Flexed (Tegang, kaki lurus, kaku dan atau fleksi) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSE4" name="EMR_ASWAL_BDN_PR_SN_NIPSE" value="NIPSE4" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSE4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Extended (Tegang, kaki lurus, kaku dan atau ekstensi) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN1_6">
                                f. State of Arousal (kesadaran)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSF1" name="EMR_ASWAL_BDN_PR_SN_NIPSF" value="NIPSF1" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSF1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sleeping (tenang, tidur damai) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSF2" name="EMR_ASWAL_BDN_PR_SN_NIPSF" value="NIPSF2" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSF2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Awake (Tenang, tidak tidur/Bangun, gerakan kaki acak yang terjaga) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_NIPSF3" name="EMR_ASWAL_BDN_PR_SN_NIPSF" value="NIPSF3" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_NIPSF3">
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
                              <div class="col-md-12" id="EMR_ASWAL_BDN_PR_SN2_1">
                                a. Face Expression (ekspresi wajah)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCA1" name="EMR_ASWAL_BDN_PR_SN_FLACCA" value="FLACCA1" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak ada ekspresi tertentu atau seyum, kontak mata </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCA2" name="EMR_ASWAL_BDN_PR_SN_FLACCA" value="FLACCA2" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Kadang meringis atau mengerutkan kening, menarik diri, tidak tertarik, wajah terlihat cemas, alis diturunkan, maka sebagian tertutup, pipi terangkat, mulut mengerut </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCA3" name="EMR_ASWAL_BDN_PR_SN_FLACCA" value="FLACCA3" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCA3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sering cemberut, konstan, rahangter katup. Dagu bergetar, kerutan yang dalam di dahi, mata tertutup, mulut terbuka, garis yang dalam di sekitar hidung/bibir </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN2_2">
                                b. Leg (Kaki)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCB1" name="EMR_ASWAL_BDN_PR_SN_FLACCB" value="FLACCB1" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Posisi normal atau santai </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCB2" name="EMR_ASWAL_BDN_PR_SN_FLACCB" value="FLACCB2" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak nyaman, gelisah, tegang, tonus meningkat, kaku/flexi/ekstensi anggota badan intermitten </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCB3" name="EMR_ASWAL_BDN_PR_SN_FLACCB" value="FLACCB3" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCB3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Menendang atau kaki disusun, hipertonis fleksi/ekstensi anggota badan secara berlebihan </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN2_3">
                                c. Activity (Aktivitas)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCC1" name="EMR_ASWAL_BDN_PR_SN_FLACCC" value="FLACCC1" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCC1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Berbaring dengan tenang, posisi normal, bergerak dengan bebas dan mudah </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCC2" name="EMR_ASWAL_BDN_PR_SN_FLACCC" value="FLACCC2" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCC2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Menggeliat, menggeser maju mundur, tegang, ragu-ragu untuk bergerak, menjaga tekanan pada bagian tubuh </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCC3" name="EMR_ASWAL_BDN_PR_SN_FLACCC" value="FLACCC3" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCC3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Melengkung, kaku atau menyentak, posisi tetap, goyang gerakan kepala dari sisi ke sisi, menggosok bagian tubuh </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN2_4">
                                d. Cry (Menangis)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCD1" name="EMR_ASWAL_BDN_PR_SN_FLACCD" value="FLACCD1" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCD1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Tidak ada teriakan/erangan (terjaga/tertidur) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCD2" name="EMR_ASWAL_BDN_PR_SN_FLACCD" value="FLACCD2" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCD2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Erangan/rengekan, sesekali menangis, sesekali mengeluh </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCD3" name="EMR_ASWAL_BDN_PR_SN_FLACCD" value="FLACCD3" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCD3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Terus menerus menangis, menjerit, isak tangis, mengeram-ngeram, sering mengeluh </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN2_5">
                                e. Consolalability (respon terhadap himbauan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCE1" name="EMR_ASWAL_BDN_PR_SN_FLACCE" value="FLACCE1" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCE1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Tenang, santai, tidak perlu di hibur </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCE2" name="EMR_ASWAL_BDN_PR_SN_FLACCE" value="FLACCE2" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCE2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Perlu keyakinan dengan sesekali menyentuh, sekali-kali memeluk atau berbicara. Perhatian mudah beralih </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_SN_FLACCE3" name="EMR_ASWAL_BDN_PR_SN_FLACCE" value="FLACCE3" class="md-check">
                                    <label for="EMR_ASWAL_BDN_PR_SN_FLACCE3">
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
                              <div class="col-md-12" id="EMR_ASWAL_BDN_PR_SN3_1" >
                                <span>Apa yang membuat nyeri bertambah parah?</span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnBertambahParah1" name="EMR_ASWAL_BDN_PR_CbtnBertambahParah1" value="Tidak ada penyebab khusus" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnBertambahParah1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak ada penyebab khusus </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnBertambahParah2" name="EMR_ASWAL_BDN_PR_CbtnBertambahParah2" value="Berubah Posisi" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnBertambahParah2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Berubah posisi  </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_ASWAL_BDN_PR_textBertambahParah" name="EMR_ASWAL_BDN_PR_textBertambahParah" value="" class="form-control collapse" maxlength="30" placeholder="Lain lain">
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
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnBerkurang1" name="EMR_ASWAL_BDN_PR_CbtnBerkurang1" value="Kompres hangat/dingin" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnBerkurang1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Kompres hangat/dingin </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnBerkurang2" name="EMR_ASWAL_BDN_PR_CbtnBerkurang2" value="Istirahat" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnBerkurang2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Istirahat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnBerkurang3" name="EMR_ASWAL_BDN_PR_CbtnBerkurang3" value="Minum obat" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnBerkurang3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Minum obat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnBerkurang4" name="EMR_ASWAL_BDN_PR_CbtnBerkurang4" value="Berubah posisi" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnBerkurang4">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Berubah posisi </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnBerkurang5" name="EMR_ASWAL_BDN_PR_CbtnBerkurang5" value="Tidak ada" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnBerkurang5">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak ada </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_ASWAL_BDN_PR_textBertambahParah2" name="EMR_ASWAL_BDN_PR_textBertambahParah2" value="" class="form-control collapse" maxlength="30" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN3_2">
                                <span>Gambaran rasa nyeri?</span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnGambaran1" name="EMR_ASWAL_BDN_PR_CbtnGambaran1" value="Seperti ditimpa benda berat" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnGambaran1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti ditimpa benda berat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnGambaran2" name="EMR_ASWAL_BDN_PR_CbtnGambaran2" value="Seperti Ditarik" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnGambaran2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Ditarik </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnGambaran3" name="EMR_ASWAL_BDN_PR_CbtnGambaran3" value="Seperti Ditusuk" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnGambaran3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Ditusuk</label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnGambaran4" name="EMR_ASWAL_BDN_PR_CbtnGambaran4" value="Seperti Dipukul" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnGambaran4">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Dipukul </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnGambaran5" name="EMR_ASWAL_BDN_PR_CbtnGambaran5" value="Seperti Dibakar" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnGambaran5">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Dibakar </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnGambaran6" name="EMR_ASWAL_BDN_PR_CbtnGambaran6" value="Seperti Berdenyut" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnGambaran6">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Berdenyut </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnGambaran7" name="EMR_ASWAL_BDN_PR_CbtnGambaran7" value="Seperti Kram" class="md-check">
                                        <label for="EMR_ASWAL_BDN_PR_CbtnGambaran7">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Kram </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_ASWAL_BDN_PR_textGambaran" name="EMR_ASWAL_BDN_PR_textGambaran" value="" class="form-control collapse" maxlength="30" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN3_3">
                                <span>Lokasi nyeri?</span>
                                <br>
                                <br>
                                <input type="text" id="EMR_ASWAL_BDN_PR_SNMenjalar1" name="EMR_ASWAL_BDN_PR_SNMenjalar1" value="" class="form-control" maxlength="30" placeholder="Lokasi nyeri">
                                <br>
                                <span>Apakah menjalar?</span>
                                <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_MenjalarY" name="EMR_ASWAL_BDN_PR_Menjalar" class="md-radiobtn" value="MenjalarY">
                                    <label for="EMR_ASWAL_BDN_PR_MenjalarY">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Ya </label>
                                </div>
                                <input type="text" id="EMR_ASWAL_BDN_PR_SNMenjalar2" name="EMR_ASWAL_BDN_PR_SNMenjalar2" value="" class="form-control collapse" maxlength="30" placeholder="Lokasi menjalar">
                                <input type="hidden" id="EMR_ASWAL_BDN_PR_SNMenjalar2status" name="EMR_ASWAL_BDN_PR_SNMenjalar2status" value="Tidak" class="form-control">
                                <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_MenjalarTD" name="EMR_ASWAL_BDN_PR_Menjalar" class="md-radiobtn" value="MenjalarTD">
                                    <label for="EMR_ASWAL_BDN_PR_MenjalarTD">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak </label>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN3_4">
                                <span>Skala nyeri:</span>
                                <br>
                                <br>
                                <div class="row">
                                  <div class="btn-group btn-group-solid" style="width:100%">
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3A_1" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot001.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3A_2" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot002.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3A_3" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot003.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3A_4" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot004.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3A_5" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot005.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3A_6" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot006.png'?>" style="height:50px"> </a>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="btn-group btn-group-solid" style="width:100%">
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3B_0" class="btn white" style="height:40px; width:80px;"><div style="color: black;">0</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3B_1" class="btn white" style="height:40px;"><div style="color: black;">1</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3B_2" class="btn white" style="height:40px; width:60px;"><div style="color: black;">2</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3B_3" class="btn white" style="height:40px;"><div style="color: black;">3</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3B_4" class="btn white" style="height:40px; width:60px;"><div style="color: black;">4</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3B_5" class="btn white" style="height:40px;"><div style="color: black;">5</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3B_6" class="btn white" style="height:40px; width:60px;"><div style="color: black;">6</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3B_7" class="btn white" style="height:40px;"><div style="color: black;">7</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3B_8" class="btn white" style="height:40px; width:60px;"><div style="color: black;">8</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3B_9" class="btn white" style="height:40px;"><div style="color: black;">9</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASWAL_BDN_PR_btnSN3B_10" class="btn white" style="height:40px; width:60px;"><div style="color: black;">10</div></a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_SN3_5">
                                <span> Seberapa sering anda mengalami nyeri? </span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnSNsetiapinsan1" name="EMR_ASWAL_BDN_PR_RbtnSNsetiapinsan" class="md-radiobtn" value="SetiapA1">
                                        <label for="EMR_ASWAL_BDN_PR_RbtnSNsetiapinsan1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Hilang timbul</label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnSNsetiapinsan2" name="EMR_ASWAL_BDN_PR_RbtnSNsetiapinsan" class="md-radiobtn" value="SetiapA2">
                                        <label for="EMR_ASWAL_BDN_PR_RbtnSNsetiapinsan2">
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
                                          <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnSNsetiap1" name="EMR_ASWAL_BDN_PR_RbtnSNsetiap" class="md-radiobtn" value="SetiapB1">
                                          <label for="EMR_ASWAL_BDN_PR_RbtnSNsetiap1">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> 1-2 Jam</label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnSNsetiap2" name="EMR_ASWAL_BDN_PR_RbtnSNsetiap" class="md-radiobtn" value="SetiapB2">
                                          <label for="EMR_ASWAL_BDN_PR_RbtnSNsetiap2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> < 4 Jam</label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnSNsetiap3" name="EMR_ASWAL_BDN_PR_RbtnSNsetiap" class="md-radiobtn" value="SetiapB3">
                                          <label for="EMR_ASWAL_BDN_PR_RbtnSNsetiap3">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> > 4 Jam</label>
                                        </div>
                                        <input type="text" id="EMR_ASWAL_BDN_PR_SNlamawaktu" name="EMR_ASWAL_BDN_PR_SNlamawaktu" value="" class="form-control" maxlength="30" placeholder="Lain lain">
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
                                          <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnSNselama1" name="EMR_ASWAL_BDN_PR_RbtnSNselama" class="md-radiobtn" value="SetiapC1">
                                          <label for="EMR_ASWAL_BDN_PR_RbtnSNselama1">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> < 30 menit </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnSNselama2" name="EMR_ASWAL_BDN_PR_RbtnSNselama" class="md-radiobtn" value="SetiapC2">
                                          <label for="EMR_ASWAL_BDN_PR_RbtnSNselama2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> > 30 menit </label>
                                        </div>
                                        <input type="text" id="EMR_ASWAL_BDN_PR_SNlamawaktu2" name="EMR_ASWAL_BDN_PR_SNlamawaktu2" value="" class="form-control" maxlength="30" placeholder="Lain lain">
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
                                <button type="button" id="EMR_ASWAL_BDN_PR_SN1Back" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                                <button type="button" id="EMR_ASWAL_BDN_PR_SN1Next" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
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

                              <span id="EMR_ASWAL_BDN_PR_SkorNyeri"><b> 0</b></span>
                            </div>
                            <div class="col-md-9">
                              Skala Nyeri :

                              <span id="EMR_ASWAL_BDN_PR_SkalaNyeri"><b>
                                <?php
                                if($Utahun < 1)
                                { ?>
                                  Nyeri ringan sampai tida  k nyeri
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
                  <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_Halaman4">
                    <div class="col-md-6 portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_namapasien" name="EMR_ASWAL_BDN_PR_namapasien" value="<?php echo $nama?>" class="form-control">
                                <label for="form_control_1">Nama Pasien</label>
                                <span class="help-block">Masukkan Nama</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_umur" name="EMR_ASWAL_BDN_PR_umur" value="<?php echo $Utahun?>Tahun, &nbsp; <?php echo $Ubulan?> Bulan" class="form-control">
                                <label for="form_control_1">Umur Pasien</label>
                                <span class="help-block">Masukkan Umur</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_alamat" name="EMR_ASWAL_BDN_PR_alamat" value="<?php echo $alamat?>" class="form-control">
                                <label for="form_control_1">Alamat Pasien</label>
                                <span class="help-block">Masukkan Alamat</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label for="form_control_1">Bahasa</label>
                            <select class="bs-select form-control">
                              <option value='Indonesia' selected>Indonesia</option>
                              <option value='Inggris'>Inggris</option>
                              <option value='Mandarin'>Mandarin</option>
                              <option value='Madura'>Madura</option>
                              <option value='Jawa'>Jawa</option>
                            </select>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_sukubangsa" name="EMR_ASWAL_BDN_PR_sukubangsa" value="Indonesia" class="form-control">
                                <label for="form_control_1">Suku/Bangsa</label>
                                <span class="help-block">Masukkan Suku/bangsa</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 md-radio-inline">
                            <div class="md-radio">
                              <input type="radio" id="EMR_ASWAL_BDN_PR_StatKawin1" name="EMR_ASWAL_BDN_PR_StatKawin" class="md-radiobtn" value="">
                              <label for="EMR_ASWAL_BDN_PR_StatKawin1">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span> Kawin</label>
                            </div>
                            <div class="md-radio">
                              <input type="radio" id="EMR_ASWAL_BDN_PR_StatKawin2" name="EMR_ASWAL_BDN_PR_StatKawin" class="md-radiobtn" value="">
                              <label for="EMR_ASWAL_BDN_PR_StatKawin2">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span> Belum Kawin </label>
                            </div>
                          </div>
                          <input type="hidden" id="EMR_ASWAL_BDN_PR_StatKawinTxt2" value="no">
                          <div id="EMR_ASWAL_BDN_PR_StatKawinTxt" class="collapse col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_kawin" name="EMR_ASWAL_BDN_PR_kawin" value="" class="form-control">
                                <label for="form_control_1">Kawin berapa kali</label>
                                <span class="help-block">Masukkan Jumlah kawin</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_lamanikah" name="EMR_ASWAL_BDN_PR_lamanikah" value="" class="form-control">
                                <label for="form_control_1">Lama menikah</label>
                                <span class="help-block">Masukkan lama nikah</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label for="form_control_1">Pendidikan</label>
                            <select class="bs-select form-control">
                              <option value='SD'>SD</option>
                              <option value='SMP'>SMP</option>
                              <option value='SMA'>SMA</option>
                              <option value='D3'>D3</option>
                              <option value='S1'>S1</option>
                              <option value='S2'>S2</option>
                              <option value='S3'>S3</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_namasuami" name="EMR_ASWAL_BDN_PR_namasuami" value="" class="form-control">
                                <label for="form_control_1">Nama Suami</label>
                                <span class="help-block">Masukkan Nama</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_umursuami" name="EMR_ASWAL_BDN_PR_umursuami" value="" class="form-control">
                                <label for="form_control_1">Umur Suami</label>
                                <span class="help-block">Masukkan Umur</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_alamatsuami" name="EMR_ASWAL_BDN_PR_alamatsuami" value="<?php echo $alamat?>" class="form-control">
                                <label for="form_control_1">Alamat Suami</label>
                                <span class="help-block">Masukkan Alamat</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label for="form_control_1">Bahasa Suami</label>
                            <select class="bs-select form-control">
                              <option value='Indonesia' selected>Indonesia</option>
                              <option value='Inggris'>Inggris</option>
                              <option value='Mandarin'>Mandarin</option>
                              <option value='Madura'>Madura</option>
                              <option value='Jawa'>Jawa</option>
                            </select>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_sukubangsasuami" name="EMR_ASWAL_BDN_PR_sukubangsasuami" value="Indonesia" class="form-control">
                                <label for="form_control_1">Suku/Bangsa suami</label>
                                <span class="help-block">Masukkan Suku/bangsa</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 md-radio-inline">
                            <div class="md-radio">
                              <input type="radio" id="EMR_ASWAL_BDN_PR_StatKawinS1" name="EMR_ASWAL_BDN_PR_StatKawinS" class="md-radiobtn" value="">
                              <label for="EMR_ASWAL_BDN_PR_StatKawinS1">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span> Kawin</label>
                            </div>
                            <div class="md-radio">
                              <input type="radio" id="EMR_ASWAL_BDN_PR_StatKawinS2" name="EMR_ASWAL_BDN_PR_StatKawinS" class="md-radiobtn" value="">
                              <label for="EMR_ASWAL_BDN_PR_StatKawinS2">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span> Belum Kawin </label>
                            </div>
                          </div>
                          <input type="hidden" id="EMR_ASWAL_BDN_PR_StatKawinTxt2S" value="no">
                          <div id="EMR_ASWAL_BDN_PR_StatKawinTxtS" class="collapse col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_kawinS" name="EMR_ASWAL_BDN_PR_kawinS" value="" class="form-control">
                                <label for="form_control_1">Kawin berapa kali</label>
                                <span class="help-block">Masukkan Jumlah kawin</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_lamanikahsuami" name="EMR_ASWAL_BDN_PR_lamanikahsuami" value="" class="form-control">
                                <label for="form_control_1">Lama menikah</label>
                                <span class="help-block">Masukkan lama nikah</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label for="form_control_1">Pendidikan</label>
                            <select class="bs-select form-control">
                              <option value='SD'>SD</option>
                              <option value='SMP'>SMP</option>
                              <option value='SMA'>SMA</option>
                              <option value='D3'>D3</option>
                              <option value='S1'>S1</option>
                              <option value='S2'>S2</option>
                              <option value='S3'>S3</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_Halaman5">
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
                                  <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnAlergiOYA" name="EMR_ASWAL_BDN_PR_RbtnAlergiO" class="md-radiobtn" value="AlergiYa">
                                  <label for="EMR_ASWAL_BDN_PR_RbtnAlergiOYA">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Ya </label>
                                </div>
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnAlergiOTIDAK" name="EMR_ASWAL_BDN_PR_RbtnAlergiO" class="md-radiobtn" value="AlergiTD">
                                  <label for="EMR_ASWAL_BDN_PR_RbtnAlergiOTIDAK">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Tidak </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          </center>
                          <div id="EMR_ASWAL_BDN_PR_InputAlergiObat" class="form-group collapse">
                          </br>
                            <label for="form_control_1">Masukkan Alergi</label>
                            <textarea class="form-control" id="alergiobat_asesmen_awal" name="alergiobat_asesmen_awal"></textarea>
                            <input type="hidden" id="alergiobatstatus" value="Tidak" class="form-control">
                            <input type="hidden" id="EMR_ASWAL_BDN_PR_alergi" name="EMR_ASWAL_BDN_PR_alergi" value="<?php echo $alergiobat ?>">
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
                  <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_Halaman6">
                    <div class="col-md-6 portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_menarche" name="EMR_ASWAL_BDN_PR_menarche" value="" class="form-control">
                                <label for="form_control_1">Menarche / tahun</label>
                                <span class="help-block">Masukkan Data</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_siklus" name="EMR_ASWAL_BDN_PR_siklus" value="" class="form-control">
                                <label for="form_control_1">Siklus / hari</label>
                                <span class="help-block">Masukkan Data</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_banyak" name="EMR_ASWAL_BDN_PR_banyak" value="" class="form-control">
                                <label for="form_control_1">Banyaknya</label>
                                <span class="help-block">Masukkan Data</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <span>Dismenorrhoe</span>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnDismenorrhoe1" name="EMR_ASWAL_BDN_PR_RbtnDismenorrhoe" class="md-radiobtn" value="HambatanYa">
                                    <label for="EMR_ASWAL_BDN_PR_RbtnDismenorrhoe1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnDismenorrhoe2" name="EMR_ASWAL_BDN_PR_RbtnDismenorrhoe" class="md-radiobtn" value="HambatanTidak">
                                    <label for="EMR_ASWAL_BDN_PR_RbtnDismenorrhoe2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <span>HPHT</span>
                            <div class="form-group">
                              <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                <input name="EMR_ASWAL_BDN_PR_tglHPHT" id="EMR_ASWAL_BDN_PR_tglHPHT" type="text" class="form-control" readonly>
                                <span class="input-group-btn">
                                  <button class="btn default" type="button">
                                    <i class="fa fa-calendar"></i>
                                  </button>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_ANC" name="EMR_ASWAL_BDN_PR_ANC" value="" class="form-control">
                                <label for="form_control_1">ANC Dimana</label>
                                <span class="help-block">Masukkan Data</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="col-md-12">
                            <span>Teratur</span>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnTeratur1" name="EMR_ASWAL_BDN_PR_RbtnTeratur" class="md-radiobtn" value="HambatanYa">
                                    <label for="EMR_ASWAL_BDN_PR_RbtnTeratur1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_PR_RbtnTeratur2" name="EMR_ASWAL_BDN_PR_RbtnTeratur" class="md-radiobtn" value="HambatanTidak">
                                    <label for="EMR_ASWAL_BDN_PR_RbtnTeratur2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_lama" name="EMR_ASWAL_BDN_PR_lama" value="" class="form-control">
                                <label for="form_control_1">Lamanya</label>
                                <span class="help-block">Masukkan Data</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label for="form_control_1">Sifat Darah</label>
                            <select class="bs-select form-control">
                              <option value='Encer'>Encer</option>
                              <option value='Bergumpal'>Bergumpal</option>
                            </select>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_HPL" name="EMR_ASWAL_BDN_PR_HPL" value="" class="form-control">
                                <label for="form_control_1">HPL</label>
                                <span class="help-block">Masukkan Data</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_Brapakali" name="EMR_ASWAL_BDN_PR_brapakali" value="" class="form-control">
                                <label for="form_control_1">Brapa kali ANC</label>
                                <span class="help-block">Masukkan Data</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label for="form_control_1">Status emosional</label>
                            <select class="bs-select form-control">
                              <option value='Senang'>Senang</option>
                              <option value='Cemas'>Cemas</option>
                              <option value='Sedih'>Sedih</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_Halaman7">
                    <div class="col-md-12 panel-group accordion" id="accordion3">

                      <div id="EMR_ASWAL_BDN_AppendHasilBidanTambahAnak"></div>
                      <div id="EMR_ASWAL_BDN_AppendBidanTambahAnak"></div>

                    </div>
                    <div class="col-md-6 portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="col-md-12">
                            <span><b>Anak ke - <span id="nomeranak">1</span></b></span>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_RKsuamike" name="EMR_ASWAL_BDN_PR_RKsuamike" value="" class="form-control">
                                <label for="form_control_1">Suami ke</label>
                                <span class="help-block">Masukkan Data</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_RKjenisBBL" name="EMR_ASWAL_BDN_PR_RKjenisBBL" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                <label for="form_control_1">BBL</label>
                                <span class="help-block">Masukkan Data</span>
                                <i style="font-size:12px"><b>gram</b></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_RKjenisPB" name="EMR_ASWAL_BDN_PR_RKjenisPB" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                <label for="form_control_1">PB</label>
                                <span class="help-block">Masukkan Data</span>
                                <i style="font-size:12px"><b>cm</b></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_RKhidupusiaT" name="EMR_ASWAL_BDN_PR_RKhidupusiaT" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                <label for="form_control_1">Tahun</label>
                                <span class="help-block">Masukkan Tahun</span>
                                <i style="font-size:12px"><b>th</b></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_RKhidupusiaB" name="EMR_ASWAL_BDN_PR_RKhidupusiaB" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="2">
                                <label for="form_control_1">Bulan</label>
                                <span class="help-block">Masukkan Bulan</span>
                                <i style="font-size:12px"><b>bln</b></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASWAL_BDN_PR_RKhidupusiaH" name="EMR_ASWAL_BDN_PR_RKhidupusiaH" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="2">
                                <label for="form_control_1">Hari</label>
                                <span class="help-block">Masukkan Hari</span>
                                <i style="font-size:12px"><b>hr</b></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label for="form_control_1">Mati sebabnya</label>
                            <select class="bs-select form-control" id="EMR_ASWAL_BDN_PR_SebabMati">
                              <option value='' selected></option>
                              <option value='IUFD'>IUFD</option>
                              <option value='Sakit'>Sakit</option>
                              <option value='Kecelakaan'>Kecelakaan</option>
                              <option value='Lahir Cacat'>Lahir Cacat</option>
                            </select>
                          </div>
                          <div class="col-md-12">
                            <label for="form_control_1">Cara Lahir</label>
                            <select class="bs-select form-control" id="EMR_ASWAL_BDN_PR_CaraLahir">
                              <option value='Spontan' selected>Spontan</option>
                              <option value='Vacum'>Vacum</option>
                              <option value='SC'>SC</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="col-md-12">
                            <div class="md-radio">
                              <input type="radio" id="EMR_ASWAL_BDN_PR_RbtPrematur" name="EMR_ASWAL_BDN_PR_Riwkeh" class="md-radiobtn" value="">
                              <label for="EMR_ASWAL_BDN_PR_RbtPrematur">
                              <span class="inc"></span>
                              <span class="check"></span>
                              <span class="box"></span>
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASWAL_BDN_PR_RKprematur" name="EMR_ASWAL_BDN_PR_RKprematur" value="" class="form-control">
                                    <label for="form_control_1">Prematur</label>
                                    <span class="help-block">Masukkan Data</span>
                                  </div>
                                </div>
                              </label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="md-radio">
                              <input type="radio" id="EMR_ASWAL_BDN_PR_RbtImmatur" name="EMR_ASWAL_BDN_PR_Riwkeh" class="md-radiobtn" value="">
                              <label for="EMR_ASWAL_BDN_PR_RbtImmatur">
                              <span class="inc"></span>
                              <span class="check"></span>
                              <span class="box"></span>
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASWAL_BDN_PR_RKimmatur" name="EMR_ASWAL_BDN_PR_RKimmatur" value="" class="form-control">
                                    <label for="form_control_1">Immatur</label>
                                    <span class="help-block">Masukkan Data</span>
                                  </div>
                                </div>
                              </label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="md-radio">
                              <input type="radio" id="EMR_ASWAL_BDN_PR_RbtAbortus" name="EMR_ASWAL_BDN_PR_Riwkeh" class="md-radiobtn" value="">
                              <label for="EMR_ASWAL_BDN_PR_RbtAbortus">
                              <span class="inc"></span>
                              <span class="check"></span>
                              <span class="box"></span>
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASWAL_BDN_PR_RKabortus" name="EMR_ASWAL_BDN_PR_RKabortus" value="" class="form-control">
                                    <label for="form_control_1">Abortus</label>
                                    <span class="help-block">Masukkan Data</span>
                                  </div>
                                </div>
                              </label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label for="form_control_1">Nifas/Lactasi : </label>
                            <div class="md-radio">
                              <input type="radio" id="EMR_ASWAL_BDN_PR_RbtNifasYa" name="EMR_ASWAL_BDN_PR_RbtNifas" class="md-radiobtn" value="" checked="true">
                              <label for="EMR_ASWAL_BDN_PR_RbtNifasYa">
                              <span class="inc"></span>
                              <span class="check"></span>
                              <span class="box"></span> Normal </label>
                            </div>
                            <div class="md-radio">
                              <input type="radio" id="EMR_ASWAL_BDN_PR_RbtNifasTidak" name="EMR_ASWAL_BDN_PR_RbtNifas" class="md-radiobtn" value="">
                              <label for="EMR_ASWAL_BDN_PR_RbtNifasTidak">
                              <span class="inc"></span>
                              <span class="check"></span>
                              <span class="box"></span> Tidak normal
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASWAL_BDN_PR_TxtNifasTidak" name="EMR_ASWAL_BDN_PR_TxtNifasTidak" value="" class="form-control">
                                    <label for="form_control_1"></label>
                                    <span class="help-block">Masukkan Data</span>
                                  </div>
                                </div>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group btn-group-solid" style="width:100%">
                      <center>
                        <button type="button" id="EMR_ASWAL_BDN_PR_BtnInsertanak" class="btn bg-green-jungle bg-font-green-jungle" style="width:50%">Tampung data anak</button>
                      </br>
                      </center>
                    </br>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PR_Halaman8">
                    <div class="col-md-12 portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="col-md-3">
                            Skor Resiko :

                            <span id="EMR_ASWAL_BDN_PR_SkorResiko"><b> 2</b></span>
                          </div>
                          <div class="col-md-9">
                            Skala Resiko :

                            <span id="EMR_ASWAL_BDN_PR_SkalaResiko"><b>Kehamilan resiko rendah, persalinan dilakukan di bidan/polindes</b></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko1" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko1" value="" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko1">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Terlalu muda, hamil < 16th </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko2" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko2" value="" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko2">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Terlalu lambat hamil, kawin > 3th </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko3" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko3" value="" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko3">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Terlalu cepat hamil lagi ( < 2th ) </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko4" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko4" value="" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko4">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Terlalu lambat hamil lagi ( > 10th ) </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko5" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko5" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko5">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Terlalu banyak anak 4 atau lebih </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko6" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko6" value="Berubah Posisi" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko6">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Terlalu tua, umur > 35th </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko7" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko7" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko7">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Terlalu pendek, < 145cm </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko8" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko8" value="Berubah Posisi" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko8">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Pernah gagal kehamilan </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko9" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko9" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko9">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Pernah melahirkan dengan tarikan/vaccum </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko10" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko10" value="Berubah Posisi" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko10">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Pernah melahirkan dengan plasenta manual </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko11" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko11" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko11">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> pernah melahirkan dengan diberi infus </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko12" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko12" value="Berubah Posisi" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko12">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Pernah operasi sesar </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko13" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko1" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko13">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Memiliki penyakit Kurang darah </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko14" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko14" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko14">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Memiliki penyakit Malaria </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko15" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko15" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko15">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Memiliki penyakit TBC Paru </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko16" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko16" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko16">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Memiliki penyakit Payah Jantung </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko17" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko17" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko17">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Memiliki penyakit Kencing manis </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko18" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko18" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko18">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Memiliki penyakit menular seksual </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko19" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko19" value="Berubah Posisi" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko19">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Bengkak pada muka/tungkal dan hipertensi </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko20" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko20" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko20">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Hamil kembar 2 atau lebih </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko21" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko21" value="Berubah Posisi" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko21">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Hamil kembar air (Hydramnion) </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko22" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko22" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko22">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Bayi mati dalam kandungan </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko23" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko23" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko23">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Kehamilan lebih bulan </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko24" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko24" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko24">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Letak sungsang </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko25" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko25" value="Berubah Posisi" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko25">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Letak lintang </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko26" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko26" value="Tidak ada penyebab khusus" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko26">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Perdarahan dalam kehamilan </label>
                          </div>
                          <div class="col-md-6 md-checkbox">
                            <input type="checkbox" id="EMR_ASWAL_BDN_PR_CbtnMasalahresiko27" name="EMR_ASWAL_BDN_PR_CbtnMasalahresiko27" value="Berubah Posisi" class="md-check">
                            <label for="EMR_ASWAL_BDN_PR_CbtnMasalahresiko27">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Preeklampsia berat / kejang-kejang </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                      <button type="button" id="EMR_ASWAL_BDN_PR_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                      <button type="button" id="EMR_ASWAL_BDN_PR_HalamanNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse" id="EMR_ASWAL_BDN_HalamanDokter">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_ASWAL_BDN_btnHalaman1" class="btn white col-md-8">1. Anamnesa</button>
              <button type="button" id="EMR_ASWAL_BDN_btnHalaman2" class="btn green col-md-1">2</button>
              <button type="button" id="EMR_ASWAL_BDN_btnHalaman3" class="btn green col-md-1">3</button>
              <button type="button" id="EMR_ASWAL_BDN_btnHalaman4" class="btn green col-md-1">4</button>
              <button type="button" id="EMR_ASWAL_BDN_btnHalaman5" class="btn green col-md-1">5</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_ASWAL_BDN_Halaman1">
                    <div id="EMR_ASWAL_BDN_anamnesa_1">
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
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Keluhanutama2" name="" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Keluhanutama2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Diare </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Keluhanutama1" name="" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Keluhanutama1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Panas/demam </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Keluhanutama3" name="" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Keluhanutama3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Muntah</label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Keluhanutama4" name="" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Keluhanutama4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Pilek </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Keluhanutama5" name="" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Keluhanutama5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sakit Kepala </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Keluhanutama6" name="" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Keluhanutama6">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Batuk </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Keluhanutama7" name="" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Keluhanutama7">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Pusing berputar </label>
                                  </div>
                                  <div class="col-md-12">
                                    <span class="control-label">Lain lain : </span>
                                    <input type="text" class="form-control" id="EMR_ASWAL_BDN_Keluhanutama8" name="" value="" placeholder="Lain lain">
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
                              <textarea class="form-control" id="EMR_ASWAL_BDN_RiwayatPenyakitSekarang" name="catatan" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                              <label for="form_control_1">Riwayat penyakit pasien</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="EMR_ASWAL_BDN_anamnesa_2" class="collapse">
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
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA1" name="" value="DM" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> DM </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA2" name="" value="HT" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> HT </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA3" name="" value="Stroke" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Stroke</label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA4" name="" value="Jantung" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Jantung </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA5" name="" value="Ginjal" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ginjal </label>
                                  </div>
                                  <div class="col-md-12">
                                    <span class="control-label">Lain lain : </span>
                                    <input type="text" class="form-control" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA6" name="" value="" placeholder="Lain lain">
                                  </div>
                                </div>
                                <br>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA7" name="" value="Tidak ada" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluA7">
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
                            <span><b>Riwayat Penyakit Keluarga</b></span>
                          </div>
                          <div class="portlet-body">
                            <center>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB1" name="" value="DM" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> DM </label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB2" name="" value="HT" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> HT </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB3" name="" value="Stroke" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Stroke</label>
                                  </div>
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB4" name="" value="Jantung" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Jantung </label>
                                  </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-5 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB5" name="" value="Ginjal" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ginjal </label>
                                  </div>
                                  <div class="col-md-12">
                                    <span class="control-label">Lain lain : </span>
                                    <input type="text" class="form-control" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB6" name="" value="" placeholder="Lain lain">
                                  </div>
                                </div>
                                <br>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB7" name="" value="Tidak ada" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatPenyakitDahuluB7">
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
                    <div id="EMR_ASWAL_BDN_anamnesa_3" class="collapse">
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
                            <div id="EMR_ASWAL_BDN_InputalergiObat2" class="collapse">
                              </br>
                              <label for="form_control_1">Alergi Tambahan:</label>
                              <!--<input type="text" id="alergiobat2" name="alergiobat2" value="" class="form-control">-->
                              <textarea class="form-control" id="alergiobat2" name="alergiobat2"></textarea>
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
                                  <input type="radio" id="EMR_ASWAL_BDN_RbtnAlergiOYA" name="EMR_ASWAL_BDN_RbtnAlergiO" class="md-radiobtn">
                                  <label for="EMR_ASWAL_BDN_RbtnAlergiOYA">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> YA </label>
                                </div>
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASWAL_BDN_RbtnAlergiOTIDAK" name="EMR_ASWAL_BDN_RbtnAlergiO" class="md-radiobtn">
                                  <label for="EMR_ASWAL_BDN_RbtnAlergiOTIDAK">
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
                    <div id="EMR_ASWAL_BDN_anamnesa_4" class="collapse">
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
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatSosial1" name="" value="Merokok" class="md-check" checked>
                                    <label for="EMR_ASWAL_BDN_RiwayatSosial1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak ada </label>
                                  </div>
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatSosial2" name="" value="Merokok" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatSosial2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Merokok </label>
                                  </div>
                                  <div class="col-md-12 md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_RiwayatSosial3" name="" value="Alkohol" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatSosial3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Alkohol </label>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <span class="control-label">Lain lain : </span>
                                  <input type="text" id="EMR_ASWAL_BDN_RiwayatSosial4" value="" class="form-control" placeholder="Lain lain">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="EMR_ASWAL_BDN_anamnesa_5" class="collapse">
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
                                        <input type="radio" id="EMR_ASWAL_BDN_RiwayatTumbuh1Ya" name="EMR_ASWAL_BDN_RiwayatTumbuh1" class="md-radiobtn">
                                        <label for="EMR_ASWAL_BDN_RiwayatTumbuh1Ya">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Baik </label>
                                      </div>
                                      <div class="col-md-6 md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_RiwayatTumbuh1Lain" name="EMR_ASWAL_BDN_RiwayatTumbuh1" class="md-radiobtn">
                                        <label for="EMR_ASWAL_BDN_RiwayatTumbuh1Lain">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Lainnya </label>
                                      </div>
                                      <div id="EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya2" class="col-md-6 collapse">
                                        <input type="text" id="EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya" value="" class="form-control" placeholder="Lain lain">
                                        <input type="hidden" id="EMR_ASWAL_BDN_RiwayatTumbuh1Lainnya3" value="collapse" class="form-control" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </br>
                                <span>Imunisais pasien?</span>
                                <div class="row md-radio-inline">
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_RiwayatTumbuh1" name="EMR_ASWAL_BDN_RiwayatTumbuh" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatTumbuh1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Imunisasi Lengkap </label>
                                  </div>
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_RiwayatTumbuh2" name="EMR_ASWAL_BDN_RiwayatTumbuh" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatTumbuh2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Imunisasi tidak lengkap </label>
                                  </div>
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_RiwayatTumbuh3" name="EMR_ASWAL_BDN_RiwayatTumbuh" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_RiwayatTumbuh3">
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
                        <button type="button" id="EMR_ASWAL_BDN_subhalBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                        <button type="button" id="EMR_ASWAL_BDN_subhalNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                      </div>
                    </br>
                    </br>
                    </center>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_Halaman2">
                    <div class="" id="EMR_ASWAL_BDN_fisik_1">
                      <div class="col-md-5">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body row">
                            <div class="col-md-12">
                              <span class="control-label">Keadaan Umum : </span>
                              <div class="md-radio-inline">
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASWAL_BDN_KeadaanUmum1" name="EMR_ASWAL_BDN_KeadaanUmum" class="md-radiobtn" value="NadiReguler" checked>
                                  <label for="EMR_ASWAL_BDN_KeadaanUmum1">
                                  <span class="inc"></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Baik </label>
                                </div>
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASWAL_BDN_KeadaanUmum2" name="EMR_ASWAL_BDN_KeadaanUmum" class="md-radiobtn" value="NadiIrreguler">
                                  <label for="EMR_ASWAL_BDN_KeadaanUmum2">
                                  <span class="inc"></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Cukup </label>
                                </div>
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASWAL_BDN_KeadaanUmum3" name="EMR_ASWAL_BDN_KeadaanUmum" class="md-radiobtn" value="NadiIrreguler">
                                  <label for="EMR_ASWAL_BDN_KeadaanUmum3">
                                  <span class="inc"></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Lemah </label>
                                </div>
                              </div>
                              <!--<input type="text" id="EMR_ASWAL_BDN_KeadaanUmum" value="" class="form-control" placeholder="Keadaan Umum">-->
                            </div>
                            <div class="col-md-12">
                              <span class="control-label">Kesadaran : </span>
                              <input type="text" id="EMR_ASWAL_BDN_Kesadaran" value="Compos mentis" class="form-control" placeholder="Kesadaaran" disabled>
                            </div>
                            <br>
                            <div class="col-md-12">
                              <span class="control-label">GCS : </span>
                            </div>
                            <div class="col-md-4">
                              <span class="control-label">E : </span>
                              <input type="text" id="EMR_ASWAL_BDN_GCSe" value="4" class="form-control" placeholder="E">
                            </div>
                            <div class="col-md-4">
                              <span class="control-label">V : </span>
                              <input type="text" id="EMR_ASWAL_BDN_GCSv" value="5" class="form-control" placeholder="V">
                            </div>
                            <div class="col-md-4">
                              <span class="control-label">M : </span>
                              <input type="text" id="EMR_ASWAL_BDN_GCSm" value="6" class="form-control" placeholder="M">
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
                                    <input type="text" id="TDSistolik2" name="TDSistolik2" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="form_control_1">Diastolik</label>
                                    <i style="font-size:12px"><b>mmHg</b></i>
                                    <input type="text" id="TDDiastolik2" name="TDDiastolik2" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="form_control_1">Suhu tubuh</label>
                                    <i style="font-size:12px"><b>&deg;C</b></i>
                                    <input type="text" id="suhutubuh2" name="suhutubuh2" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                  </div>
                                </div>
                                <hr>
                                <div class="tab-content">
                                  <div class="col-md-6">
                                    <label for="form_control_1">N</label>
                                    <i style="font-size:12px"><b>x/mnt</b></i>
                                    <input type="text" id="nadi2" name="nadi2" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="NadiCH_reguler2" name="NadiCH2" class="md-radiobtn" value="NadiReguler">
                                        <label for="NadiCH_reguler2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Reguler </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="NadiCH_irreguler2" name="NadiCH2" class="md-radiobtn" value="NadiIrreguler">
                                        <label for="NadiCH_irreguler2">
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
                                    <input type="text" id="respiratory2" name="respiratory2" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="RespiratoryCH_teratur2" name="RespiratoryCH2" class="md-radiobtn" value="RespiratoryTeratur">
                                        <label for="RespiratoryCH_teratur2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Teratur </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="RespiratoryCH_titeratur2" name="RespiratoryCH2" class="md-radiobtn" value="RespiratoryTiTeratur">
                                        <label for="RespiratoryCH_titeratur2">
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
                                    <input type="text" id="beratbadan2" name="beratbadan2" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                  </div>
                                  <div class="col-md-3">
                                    <label for="form_control_1">TB</label>
                                    <i style="font-size:12px"><b>Cm</b></i>
                                    <input type="text" id="tinggibadan2" name="tinggibadan2" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                  </div>
                                  <div class="col-md-6">
                                    <span>Nilai BMI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><b><span id="Nilai_BMI_dokter">0</span></b></br>
                                    <span>Kategori BMI : </span><b><span id="Kategori_BMI_dokter"></span></b>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <input type="hidden" id="EMR_ASWAL_BDN_KodeUnit_SP" name="EMR_ASWAL_BDN_KodeUnit_SP" value="<?php echo $KodeUnit2 ?>" class="form-control">

                    <div class="collapse" id="EMR_ASWAL_BDN_fisik_2">
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_2A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASWAL_BDN_PeFi_2_CK" name="EMR_ASWAL_BDN_PeFi_2_CK" value="" class="md-check">
                                      <label for="EMR_ASWAL_BDN_PeFi_2_CK">
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
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_2B">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Kepala/Leher</span>
                            </div>
                          </div>
                          <!--<div class="portlet-title">
                            <span><b>Kepala/Leher</b></span>
                          </div>-->
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <table class="col-md-6">
                                  <tr>
                                    <td class="col-md-3"><span>Anemis</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASWAL_BDN_btnAnemis" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Ikterus</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASWAL_BDN_btnIkterus" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Cyanosis</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASWAL_BDN_btnCyanosis" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Dipsneo</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASWAL_BDN_btnDipsneo" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <?php
                                  if($Utahun < 1.5)
                                  { ?>
                                  <tr>
                                    <td class="col-md-3"><span>UUK</span></td>
                                    <td colspan="2" class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnUUK" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>UUB</span></td>
                                    <td colspan="2" class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnUUB" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
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
                                    <td class="col-md-3"><span>Pupil </span><span id="pupilstat">Isokor</span></td>
                                    <td class="col-md-3">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASWAL_BDN_pupilKanan" name="EMR_ASWAL_BDN_pupilKanan" value="3" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                          <label for="form_control_1"></label>
                                          <span class="help-block">Masukkan nilai</span>
                                          <i style="font-size:12px"><b>mm</b></i>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="col-md-3">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASWAL_BDN_pupilKiri" name="EMR_ASWAL_BDN_pupilKiri" value="3" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                          <label for="form_control_1"></label>
                                          <span class="help-block">Masukkan nilai</span>
                                          <i style="font-size:12px"><b>mm</b></i>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Cahaya</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASWAL_BDN_btnCahayaKanan" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    <td class="col-md-3"><button type="button" id="EMR_ASWAL_BDN_btnCahayaKiri" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Lain - lain</span></td>
                                    <td colspan="2" class="col-md-6">
                                      <input type="text" class="form-control" id="EMR_ASWAL_BDN_KepalaLeher" name="" value="" placeholder="Lain lain">
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

                    <div class="collapse" id="EMR_ASWAL_BDN_fisik_3">
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_3A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASWAL_BDN_PeFi_3_CK" name="EMR_ASWAL_BDN_PeFi_3_CK" value="" class="md-check">
                                      <label for="EMR_ASWAL_BDN_PeFi_3_CK">
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
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_3B">
                        <div class="col-md-12">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                              <span><b>Thorax ( Cor )</b></span>
                            </div>
                            <div class="portlet-body">
                              <center>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_ASWAL_BDN_Cor1" name="coresplitranger" value="" class="md-check" checked="true">
                                      <label for="EMR_ASWAL_BDN_Cor1">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> S1, S2, Tunggal</label>
                                    </div>
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <div class="row">
                                          <input type="checkbox" id="EMR_ASWAL_BDN_Cor2" name="EMR_ASWAL_BDN_Cor2" value="" class="md-check">
                                          <label for="EMR_ASWAL_BDN_Cor2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Split S1 </label>
                                        </div>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <div class="row">
                                          <input type="checkbox" id="EMR_ASWAL_BDN_Cor3" name="EMR_ASWAL_BDN_Cor3" value="" class="md-check">
                                          <label for="EMR_ASWAL_BDN_Cor3">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Split S2 </label>
                                        </div>
                                      </div>
                                    </div>

                                    <!--<div class="col-md-5 md-radio">
                                      <input type="radio" id="EMR_ASWAL_BDN_Cor2" name="coresplitranger" value="" class="md-check">
                                      <label for="EMR_ASWAL_BDN_Cor2">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Split S1 </label>
                                    </div>
                                    <div class="col-md-5 md-radio">
                                      <input type="radio" id="EMR_ASWAL_BDN_Cor3" name="coresplitranger" value="" class="md-check">
                                      <label for="EMR_ASWAL_BDN_Cor3">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Split S2</label>
                                    </div>-->
                                  </div>
                                  <!--<input type="hidden" id="statcorranger" value="hidden">-->
                                  <div id="coresplitshow" class="row md-radio-inline">
                                    <div class="col-md-5 md-radio">
                                      <input type="radio" id="EMR_ASWAL_BDN_Cor4" name="coresplitgundam" value="" class="md-check">
                                      <label for="EMR_ASWAL_BDN_Cor4">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Irregular </label>
                                    </div>
                                    <div class="col-md-5 md-radio">
                                      <input type="radio" id="EMR_ASWAL_BDN_Cor5" name="coresplitgundam" value="" class="md-check" checked="true">
                                      <label for="EMR_ASWAL_BDN_Cor5">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Regular </label>
                                    </div>
                                  </div>
                                </div>
                                <button type="button" id="EMR_ASWAL_BDN_btnMurmur" class="btn yellow col-md-5" value="-"><b> Murmur - </b></button>
                                <input type="text" id="EMR_ASWAL_BDN_btnMurmurText" value="EMR_ASWAL_BDN_btnMurmurText" class="form-control collapse">
                                <button type="button" id="EMR_ASWAL_BDN_btnGallop" class="btn yellow col-md-5" value="-"><b> Gallop - </b></button>
                              </div>
                              </center>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="collapse" id="EMR_ASWAL_BDN_fisik_4">
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_4A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASWAL_BDN_PeFi_4_CK" name="EMR_ASWAL_BDN_PeFi_4_CK" value="" class="md-check">
                                      <label for="EMR_ASWAL_BDN_PeFi_4_CK">
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
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_4B">
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
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnVesikuler1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnVesikuler2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnVesikuler3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnVesikuler4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnVesikuler5" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnVesikuler6" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  </tr>
                                </table>
                              </div>
                              <div class="col-md-4">
                                <span>Rhonki</span></br>
                                <table>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnRhonki1" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnRhonki2" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnRhonki3" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnRhonki4" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnRhonki5" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnRhonki6" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                </table>
                              </div>
                              <div class="col-md-4">
                                <span>Wheezing</span></br>
                                <table>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnWheezing1" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnWheezing2" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnWheezing3" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnWheezing4" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnWheezing5" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnWheezing6" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                </table>
                              </div>
                              </br>
                              <div class="col-md-6">
                                <span class="control-label">Retraksi Intercostal : </span></br>
                                <button type="button" id="EMR_ASWAL_BDN_btnretraksiKanan" class="btn yellow col-md-6" value="Kanan -"><b>Kanan - </b></button>
                                <button type="button" id="EMR_ASWAL_BDN_btnretraksiKiri" class="btn yellow col-md-6" value="Kiri -"><b>Kiri - </b></button>
                              </div>
                              <div class="col-md-6">
                                <span class="control-label">Lain - lain : </span>
                                <input type="text" id="" value="" class="form-control" placeholder="Lain lain">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="collapse" id="EMR_ASWAL_BDN_fisik_5">
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_5A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASWAL_BDN_PeFi_5_CK" name="EMR_ASWAL_BDN_PeFi_5_CK" value="" class="md-check">
                                      <label for="EMR_ASWAL_BDN_PeFi_5_CK">
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
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_5B">
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
                                      <input type="radio" id="EMR_ASWAL_BDN_btnAbdomen1A" name="EMR_ASWAL_BDN_btnAbdomen1" class="md-radiobtn" value="" checked="true">
                                      <label for="EMR_ASWAL_BDN_btnAbdomen1A">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Normal </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASWAL_BDN_btnAbdomen1B" name="EMR_ASWAL_BDN_btnAbdomen1" class="md-radiobtn" value="">
                                      <label for="EMR_ASWAL_BDN_btnAbdomen1B">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Meningkat </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASWAL_BDN_btnAbdomen1C" name="EMR_ASWAL_BDN_btnAbdomen1" class="md-radiobtn" value="">
                                      <label for="EMR_ASWAL_BDN_btnAbdomen1C">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Menurun </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASWAL_BDN_btnAbdomen1D" name="EMR_ASWAL_BDN_btnAbdomen1" class="md-radiobtn" value="Tidak">
                                      <label for="EMR_ASWAL_BDN_btnAbdomen1D">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Lain - lain </label>
                                    </div>
                                    <input type="text" id="EMR_ASWAL_BDN_btnAbdomen1E" name="EMR_ASWAL_BDN_btnAbdomen1E" class="form-control collapse" placeholder="Lain lain">
                                  </div>
                                </div>
                              </div>
                              <div class="row col-md-6">
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Meteorimus</center></span>
                                  </div>
                                  <div class="col-md-5">
                                    <button type="button" id="EMR_ASWAL_BDN_btnAbdomen2" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Flat</center></span>
                                  </div>
                                  <div class="col-md-5">
                                    <button type="button" id="EMR_ASWAL_BDN_btnAbdomen3" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Soeple</center></span>
                                  </div>
                                  <div class="col-md-5">
                                    <button type="button" id="EMR_ASWAL_BDN_btnAbdomen4" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Defans</center></span>
                                  </div>
                                  <div class="col-md-5">
                                    <button type="button" id="EMR_ASWAL_BDN_btnAbdomen5" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Distensi</center></span>
                                  </div>
                                  <div class="col-md-5">
                                    <button type="button" id="EMR_ASWAL_BDN_btnAbdomen6" class="btn yellow col-md-12" value="-"><b> - </b></button>
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
                                        <input type="radio" id="EMR_ASWAL_BDN_btnAbdomen7A" name="EMR_ASWAL_BDN_btnAbdomen7Radio" class="md-radiobtn" value="" checked="true">
                                        <label for="EMR_ASWAL_BDN_btnAbdomen7A">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak Teraba </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_btnAbdomen7B" Bame="EMR_ASWAL_BDN_btnAbdomen7Radio" class="md-radiobtn" value="">
                                        <label for="EMR_ASWAL_BDN_btnAbdomen7B">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Teraba </label>
                                      </div>
                                      <input type="text" id="EMR_ASWAL_BDN_btnAbdomen7C" name="EMR_ASWAL_BDN_btnAbdomen7C" class="form-control collapse">
                                      <input type="hidden" id="EMR_ASWAL_BDN_btnAbdomen7Cstatus" name="EMR_ASWAL_BDN_btnAbdomen7Cstatus" class="form-control" value="Tidak">
                                    </div>
                                    <!--<button type="button" id="EMR_ASWAL_BDN_btnAbdomen7" class="btn yellow col-md-12" value="-"><b> - </b></button>-->
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-5">
                                    <span><center>Lien</center></span>
                                  </div>
                                  <div class="col-md-7">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_btnAbdomen8A" name="EMR_ASWAL_BDN_btnAbdomen8Radio" class="md-radiobtn" value="" checked="true">
                                        <label for="EMR_ASWAL_BDN_btnAbdomen8A">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak Teraba </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_btnAbdomen8B" Bame="EMR_ASWAL_BDN_btnAbdomen8Radio" class="md-radiobtn" value="">
                                        <label for="EMR_ASWAL_BDN_btnAbdomen8B">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Teraba </label>
                                      </div>
                                      <input type="text" id="EMR_ASWAL_BDN_btnAbdomen8C" name="EMR_ASWAL_BDN_btnAbdomen8C" class="form-control collapse">
                                      <input type="hidden" id="EMR_ASWAL_BDN_btnAbdomen8Cstatus" name="EMR_ASWAL_BDN_btnAbdomen8Cstatus" class="form-control" value="Tidak">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="md-checkbox">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_AbdomenLainChb" name="EMR_ASESMEN_PERAWAT_RbtnHambatan" class="md-radiobtn" value="HambatanYa">
                                    <label for="EMR_ASWAL_BDN_AbdomenLainChb">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Lain - lain </label>
                                  </div>
                                </div>
                                <div id="EMR_ASWAL_BDN_AbdomenLain" class="collapse">
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Shifting dullness</center></span>
                                    </div>
                                    <div class="col-md-5">
                                      <button type="button" id="EMR_ASWAL_BDN_btnAbdomen9" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Nyeri Tekan Mc burney</center></span>
                                    </div>
                                    <div class="col-md-5">
                                      <button type="button" id="EMR_ASWAL_BDN_btnAbdomen10" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Murphy Sign</center></span>
                                    </div>
                                    <div class="col-md-5">
                                      <button type="button" id="EMR_ASWAL_BDN_btnAbdomen11" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="col-md-5">
                                        <span><center>Lain - lain</center></span>
                                      </div>
                                      <div class="col-md-7">
                                        <input type="text" id="EMR_ASWAL_BDN_btnAbdomenText1" name="EMR_ASWAL_BDN_btnAbdomenText1" class="form-control" placeholder="Lain lain">
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
                                        <button type="button" id="EMR_ASWAL_BDN_btnAbdomen12" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASWAL_BDN_btnAbdomen13" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASWAL_BDN_btnAbdomen14" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                    </div>
                                    <div col-md-12>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASWAL_BDN_btnAbdomen15" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASWAL_BDN_btnAbdomen16" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASWAL_BDN_btnAbdomen17" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                    </div>
                                    <div col-md-12>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASWAL_BDN_btnAbdomen18" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASWAL_BDN_btnAbdomen19" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                      </div>
                                      <div class="col-md-4">
                                        <button type="button" id="EMR_ASWAL_BDN_btnAbdomen20" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
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
                    <div class="collapse" id="EMR_ASWAL_BDN_fisik_6">
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_6A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASWAL_BDN_PeFi_6_CK" name="EMR_ASWAL_BDN_PeFi_6_CK" value="" class="md-check">
                                      <label for="EMR_ASWAL_BDN_PeFi_6_CK">
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
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_6B">
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
                                  <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnEkstremitas1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnEkstremitas2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnEkstremitas3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnEkstremitas4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                </tr>
                              </table>
                              <table class="col-md-4">
                                <tr>
                                  <td colspan="2" class="col-md-12"><span><center>Oedema</center></span></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnEkstremitas9" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnEkstremitas10" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                </tr>
                                <tr>
                                  <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnEkstremitas11" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  <td class="col-md-6"><button type="button" id="EMR_ASWAL_BDN_btnEkstremitas12" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                </tr>
                              </table>
                              <div class="col-md-4">
                                <span>CRT :</span>
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_CRT1" name="EMR_ASWAL_BDN_CRT" class="md-radiobtn" value="" checked="true">
                                    <label for="EMR_ASWAL_BDN_CRT1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> < 2 detik </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_CRT2" name="EMR_ASWAL_BDN_CRT" class="md-radiobtn" value="">
                                    <label for="EMR_ASWAL_BDN_CRT2">
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
                    <div class="collapse" id="EMR_ASWAL_BDN_fisik_7">
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_7A">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASWAL_BDN_PeFi_7_CK" name="EMR_ASWAL_BDN_PeFi_7_CK" value="" class="md-check">
                                      <label for="EMR_ASWAL_BDN_PeFi_7_CK">
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
                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_PeFi_7B">
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
                              <div class="col-md-12">
                                  <span>Sensorik :</span>
                              </div>
                              <div class="col-md-12">
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_Sensorik1" name="EMR_ASWAL_BDN_Sensorik" class="md-radiobtn" value="" checked="true">
                                    <label for="EMR_ASWAL_BDN_Sensorik1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Normal</label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_Sensorik2" name="EMR_ASWAL_BDN_Sensorik" class="md-radiobtn" value="">
                                    <label for="EMR_ASWAL_BDN_Sensorik2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Parestesia </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_Sensorik3" name="EMR_ASWAL_BDN_Sensorik" class="md-radiobtn" value="">
                                    <label for="EMR_ASWAL_BDN_Sensorik3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Hiperestesia </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_Sensorik4" name="EMR_ASWAL_BDN_Sensorik" class="md-radiobtn" value="">
                                    <label for="EMR_ASWAL_BDN_Sensorik4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Hipoestesia </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_Sensorik5" name="EMR_ASWAL_BDN_Sensorik" class="md-radiobtn" value="">
                                    <label for="EMR_ASWAL_BDN_Sensorik5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Anastesia</label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_ASWAL_BDN_Sensorik6" name="EMR_ASWAL_BDN_Sensorik" class="md-radiobtn" value="Tidak">
                                    <label for="EMR_ASWAL_BDN_Sensorik6">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Lain - lain </label>
                                  </div>
                                  <input type="text" class="form-control collapse" id="EMR_ASWAL_BDN_Sensorik7">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <span> Lain - lain </span></br>
                                <input type="text" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <center class="col-md-12">
                      <div class="btn-group btn-group-circle btn-group-sm btn-group-solid" style="width:50%">
                        <button type="button" id="EMR_ASWAL_BDN_fisikhalBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                        <button type="button" id="EMR_ASWAL_BDN_fisikhalNext" class="btn yellow" style="width:50%">Lanjutkan >></button>
                      </div>
                    <br>
                    </br>
                    </center>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_Halaman3">
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
                              <div class="col-md-12">
                                <center>
                                  <a class="btn bg-green-jungle bg-font-green-jungle" data-toggle="modal" href="#AsesmenModalStatusLokalis"><center><b><i class="fa fa-plus"></i>Regio</b></center></a>
                                </center>
                              </div>
                              <!--<div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_SLBedah" name="EMR_ASWAL_BDN_SLBedah" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_SLBedah">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Bedah </label>
                                  </div>
                                </div>
                              </div>
                                <div class="row collapse" id="EMR_ASWAL_BDN_SLBedah1">

                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASWAL_BDN_SLBedahRegio2" name="EMR_ASWAL_BDN_SLBedahRegio2" class="form-control">
                                                <label for="form_control"> Regio </label>
                                                <span class="help-block">Masukkan Regio</span>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASWAL_BDN_SLBedahInspeksi" name="EMR_ASWAL_BDN_SLBedahInspeksi" class="form-control">
                                                <label for="form_control"> Inspeksi </label>
                                                <span class="help-block">Masukkan Inspeksi</span>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASWAL_BDN_SLBedahPalpasi" name="EMR_ASWAL_BDN_SLBedahPalpasi" class="form-control">
                                                <label for="form_control"> Palpasi </label>
                                                <span class="help-block">Masukkan Palpasi</span>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASWAL_BDN_SLBedahPerkusi" name="EMR_ASWAL_BDN_SLBedahPerkusi" class="form-control">
                                                <label for="form_control"> Perkusi </label>
                                                <span class="help-block">Masukkan Perkusi</span>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASWAL_BDN_SLBedahAuskultasi" name="EMR_ASWAL_BDN_SLBedahAuskultasi" class="form-control">
                                                <label for="form_control"> Auskultasi </label>
                                                <span class="help-block">Masukkan Auskultasi</span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>-->
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_SLRec" name="EMR_ASWAL_BDN_SLRec" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_SLRec">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Rectum </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLRec2">
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
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLRectumA1" name="EMR_ASWAL_BDN_SLRectumA1" value="" class="md-check" checked>
                                                        <label for="EMR_ASWAL_BDN_SLRectumA1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Normal </label>
                                                      </div>
                                                      <div class="col-md-3 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLRectumA2" name="EMR_ASWAL_BDN_SLRectumA2" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLRectumA2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Meningkat </label>
                                                      </div>
                                                      <div class="col-md-3 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLRectumA3" name="EMR_ASWAL_BDN_SLRectumA3" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLRectumA3">
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
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLRectumB1" name="EMR_ASWAL_BDN_SLRectumB1" value="" class="md-check" checked>
                                                        <label for="EMR_ASWAL_BDN_SLRectumB1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Tidak </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLRectumB2" name="EMR_ASWAL_BDN_SLRectumB2" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLRectumB2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ya </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLRectumB3div">
                                                        <input type="text" id="EMR_ASWAL_BDN_SLRectumB3" name="EMR_ASWAL_BDN_SLRectumB3" value="" class="form-control">
                                                        <input type="hidden" id="EMR_ASWAL_BDN_SLRectumB3status" name="EMR_ASWAL_BDN_SLRectumB3status" value="Tidak" class="form-control">
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
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLRectumC1" name="EMR_ASWAL_BDN_SLRectumC1" value="" class="md-check" checked>
                                                        <label for="EMR_ASWAL_BDN_SLRectumC1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Tidak </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLRectumC2" name="EMR_ASWAL_BDN_SLRectumC2" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLRectumC2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ya </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLRectumC3div">
                                                        <input type="text" id="EMR_ASWAL_BDN_SLRectumC3" name="EMR_ASWAL_BDN_SLRectumC3" value="" class="form-control">
                                                        <input type="hidden" id="EMR_ASWAL_BDN_SLRectumC3status" name="EMR_ASWAL_BDN_SLRectumC3status" value="Tidak" class="form-control">
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
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLRectumD1" name="EMR_ASWAL_BDN_SLRectumD1" value="" class="md-check" checked>
                                                        <label for="EMR_ASWAL_BDN_SLRectumD1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ya </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLRectumD2" name="EMR_ASWAL_BDN_SLRectumD2" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLRectumD2">
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
                                                <input type="text" id="EMR_ASWAL_BDN_SLRectumE" name="EMR_ASWAL_BDN_SLRectumE" value="" class="form-control" maxlength="30" placeholder="Lain lain">
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
                                    <input type="checkbox" id="EMR_ASWAL_BDN_SLTHT" name="EMR_ASWAL_BDN_SLTHT" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_SLTHT">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis THT </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLTHT2">
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
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKananA1" name="EMR_ASWAL_BDN_SLTelingaKananA1" value="" class="md-check" checked>
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKananA1">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Normal </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKananA2" name="EMR_ASWAL_BDN_SLTelingaKananA2" value="" class="md-check">
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKananA2">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Tertutup Serumen </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKananA3" name="EMR_ASWAL_BDN_SLTelingaKananA3" value="" class="md-check">
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKananA3">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Terdapat Cairan </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKananA4" name="EMR_ASWAL_BDN_SLTelingaKananA4" value="" class="md-check">
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKananA4">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Lainnya </label>
                                                            </div>
                                                            <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLTelingaKananA5div">
                                                              <input type="text" id="EMR_ASWAL_BDN_SLTelingaKananA5" name="EMR_ASWAL_BDN_SLTelingaKananA5" value="" class="form-control" maxlength="30" placeholder="Lain lain">
                                                              <input type="hidden" id="EMR_ASWAL_BDN_SLTelingaKananA5status" name="EMR_ASWAL_BDN_SLTelingaKananA5status" value="Tidak" class="form-control">
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
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKananB1" name="EMR_ASWAL_BDN_SLTelingaKananB1" value="" class="md-check" checked>
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKananB1">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Intak </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKananB2" name="EMR_ASWAL_BDN_SLTelingaKananB2" value="" class="md-check">
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKananB2">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Tidak Intak </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKananB3" name="EMR_ASWAL_BDN_SLTelingaKananB3" value="" class="md-check">
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKananB3">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Lainnya </label>
                                                            </div>
                                                            <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLTelingaKananB4div">
                                                              <input type="text" id="EMR_ASWAL_BDN_SLTelingaKananB4" name="EMR_ASWAL_BDN_SLTelingaKananB4" value="" class="form-control" maxlength="30" placeholder="Lain lain">
                                                              <input type="hidden" id="EMR_ASWAL_BDN_SLTelingaKananB4status" name="EMR_ASWAL_BDN_SLTelingaKananB4status" value="Tidak" class="form-control">
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
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKiriA1" name="EMR_ASWAL_BDN_SLTelingaKiriA1" value="" class="md-check" checked>
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKiriA1">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Normal </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKiriA2" name="EMR_ASWAL_BDN_SLTelingaKiriA2" value="" class="md-check">
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKiriA2">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Tertutup Serumen </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKiriA3" name="EMR_ASWAL_BDN_SLTelingaKiriA3" value="" class="md-check">
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKiriA3">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Terdapat Cairan </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKiriA4" name="EMR_ASWAL_BDN_SLTelingaKiriA4" value="" class="md-check">
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKiriA4">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Lainnya </label>
                                                            </div>
                                                            <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLTelingaKiriA5div">
                                                              <input type="text" id="EMR_ASWAL_BDN_SLTelingaKiriA5" name="EMR_ASWAL_BDN_SLTelingaKiriA5" value="" class="form-control" maxlength="30" placeholder="Lain lain">
                                                              <input type="hidden" id="EMR_ASWAL_BDN_SLTelingaKiriA5status" name="EMR_ASWAL_BDN_SLTelingaKiriA5status" value="Tidak" class="form-control">
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
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKiriB1" name="EMR_ASWAL_BDN_SLTelingaKiriB1" value="" class="md-check" checked>
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKiriB1">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Intak </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKiriB2" name="EMR_ASWAL_BDN_SLTelingaKiriB2" value="" class="md-check">
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKiriB2">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Tidak Intak </label>
                                                            </div>
                                                          </div>
                                                          <div class="row md-checkbox-inline">
                                                            <div class="col-md-12 md-checkbox">
                                                              <input type="checkbox" id="EMR_ASWAL_BDN_SLTelingaKiriB3" name="EMR_ASWAL_BDN_SLTelingaKiriB3" value="" class="md-check">
                                                              <label for="EMR_ASWAL_BDN_SLTelingaKiriB3">
                                                              <span></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> Lainnya </label>
                                                            </div>
                                                            <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLTelingaKiriB4div">
                                                              <input type="text" id="EMR_ASWAL_BDN_SLTelingaKiriB4" name="EMR_ASWAL_BDN_SLTelingaKiriB4" value="" class="form-control" maxlength="30" placeholder="Lain lain">
                                                              <input type="hidden" id="EMR_ASWAL_BDN_SLTelingaKiriB4status" name="EMR_ASWAL_BDN_SLTelingaKiriB4status" value="Tidak" class="form-control">
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
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLHidungA1" name="EMR_ASWAL_BDN_SLHidungA1" value="" class="md-check" checked>
                                                        <label for="EMR_ASWAL_BDN_SLHidungA1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ditengah </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLHidungA2" name="EMR_ASWAL_BDN_SLHidungA2" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLHidungA2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Deviasi </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLHidungA3" name="EMR_ASWAL_BDN_SLHidungA3" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLHidungA3">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Lainnya </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLHidungA4div">
                                                        <input type="text" id="EMR_ASWAL_BDN_SLHidungA4" name="EMR_ASWAL_BDN_SLHidungA4" value="" class="form-control" maxlength="30" placeholder="Lain lain">
                                                        <input type="hidden" id="EMR_ASWAL_BDN_SLHidungA4status" name="EMR_ASWAL_BDN_SLHidungA4status" value="Tidak" class="form-control">
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
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLHidungB1" name="EMR_ASWAL_BDN_SLHidungB1" value="" class="md-check" checked>
                                                        <label for="EMR_ASWAL_BDN_SLHidungB1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Normal </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLHidungB2" name="EMR_ASWAL_BDN_SLHidungB2" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLHidungB2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Membesar </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLHidungB3" name="EMR_ASWAL_BDN_SLHidung3" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLHidungB3">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Hiperemi </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLHidungB4" name="EMR_ASWAL_BDN_SLHidungB4" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLHidungB4">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Lainnya </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLHidungB5div">
                                                        <input type="text" id="EMR_ASWAL_BDN_SLHidungB5" name="EMR_ASWAL_BDN_SLHidungB5" value="" class="form-control" maxlength="30" placeholder="Lain lain">
                                                        <input type="hidden" id="EMR_ASWAL_BDN_SLHidungB5status" name="EMR_ASWAL_BDN_SLHidungB5status" value="Tidak" class="form-control">
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
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLTenggorokanA1" name="EMR_ASWAL_BDN_SLTenggorokanA1" value="" class="md-check" checked>
                                                        <label for="EMR_ASWAL_BDN_SLTenggorokanA1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Normal </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLTenggorokanA2" name="EMR_ASWAL_BDN_SLTenggorokanA2" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLTenggorokanA2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Hiperemi </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLTenggorokanA3" name="EMR_ASWAL_BDN_SLTenggorokanA3" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLTenggorokanA3">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Lainnya </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLTenggorokanA4div">
                                                        <input type="text" id="EMR_ASWAL_BDN_SLTenggorokanA4" name="EMR_ASWAL_BDN_SLTenggorokanA4" value="" class="form-control" maxlength="30" placeholder="Lain lain">
                                                        <input type="hidden" id="EMR_ASWAL_BDN_SLTenggorokanA4status" name="EMR_ASWAL_BDN_SLTenggorokanA4status" value="Tidak" class="form-control">
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
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLTenggorokanB1" name="EMR_ASWAL_BDN_SLTenggorokanB1" value="" class="md-check" checked>
                                                        <label for="EMR_ASWAL_BDN_SLTenggorokanB1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Normal </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLTenggorokanB2" name="EMR_ASWAL_BDN_SLTenggorokanB2" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLTenggorokanB2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Hiperemi </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLTenggorokanB3" name="EMR_ASWAL_BDN_SLTenggorokan3" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLTenggorokanB3">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Eksudat </label>
                                                      </div>
                                                    </div>
                                                    <div class="row md-checkbox-inline">
                                                      <div class="col-md-12 md-checkbox">
                                                        <input type="checkbox" id="EMR_ASWAL_BDN_SLTenggorokanB4" name="EMR_ASWAL_BDN_SLTenggorokanB4" value="" class="md-check">
                                                        <label for="EMR_ASWAL_BDN_SLTenggorokanB4">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Membesar </label>
                                                      </div>
                                                      <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLTenggorokanB5div">
                                                        <input type="text" id="EMR_ASWAL_BDN_SLTenggorokanB5" name="EMR_ASWAL_BDN_SLTenggorokanB5" value="" class="form-control" maxlength="30">
                                                        <input type="hidden" id="EMR_ASWAL_BDN_SLTenggorokanB5status" name="EMR_ASWAL_BDN_SLTenggorokanB5status" value="Tidak" class="form-control">
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
                                    <input type="checkbox" id="EMR_ASWAL_BDN_SLMata" name="EMR_ASWAL_BDN_SLMata" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_SLMata">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Mata </label>
                                  </div>
                                </div>
                              </div>
                                <div id="EMR_ASWAL_BDN_SLMata2" class="col-md-12 collapse">
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
                                                <input type="text" id="EMR_ASWAL_BDN_AVOD" name="EMR_ASWAL_BDN_AVOD" value="" class="form-control" placeholder="Masukan AV">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Visus</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASWAL_BDN_AVOS" name="EMR_ASWAL_BDN_AVOS" value="" class="form-control" placeholder="Masukan AV">
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
                                                <input type="text" id="EMR_ASWAL_BDN_GerakMataOD" name="EMR_ASWAL_BDN_GerakMataOD" value="Gerakan bebas ke semua arah" class="form-control" placeholder="Masukan gerakan">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Gerakan bola mata</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASWAL_BDN_GerakMataOS" name="EMR_ASWAL_BDN_GerakMataOS" value="Gerakan bebas ke semua arah" class="form-control" placeholder="Masukan gerakan">
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
                                                <input type="text" id="EMR_ASWAL_BDN_PosisiMataOD" name="EMR_ASWAL_BDN_PosisiMataOD" value="Orthophoria" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Posisi</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASWAL_BDN_PosisiMataOS" name="EMR_ASWAL_BDN_PosisiMataOS" value="Orthophoria" class="form-control">
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
                                                <input type="text" id="EMR_ASWAL_BDN_PalpebraMataOD" name="EMR_ASWAL_BDN_PalpebraMataOD" value="Normal" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Palpebra</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASWAL_BDN_PalpebraMataOS" name="EMR_ASWAL_BDN_PalpebraMataOS" value="Normal" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-5 btn-group btn-group-solid">
                                            <button type="button" id="EMR_ASWAL_BDN_KonjungtivaMataSilOD" class="btn yellow" style="width:40%" value="inj silier -"><b> inj silier - </b></button>
                                            <button type="button" class="btn white" style="width:20%" disabled="true"></button>
                                            <button type="button" id="EMR_ASWAL_BDN_KonjungtivaMataCojOD" class="btn yellow" style="width:40%" value="inj coj -"><b> inj coj - </b></button>
                                          </div>
                                          <span class="col-md-2"><center><b>Konjungtiva</b></center></span>
                                          <div class="col-md-5 btn-group btn-group-solid">
                                            <button type="button" id="EMR_ASWAL_BDN_KonjungtivaMataCojOS" class="btn yellow" style="width:40%" value="inj coj -"><b> inj coj - </b></button>
                                            <button type="button" class="btn white" style="width:20%" disabled="true"></button>
                                            <button type="button" id="EMR_ASWAL_BDN_KonjungtivaMataSilOS" class="btn yellow" style="width:40%" value="inj silier -"><b> inj silier - </b></button>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASWAL_BDN_KorneaMataOD" name="EMR_ASWAL_BDN_KorneaMataOD" value="Jernih" class="form-control" placeholder="">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Korena kanan</span>
                                              </div>
                                            </div>
                                          </div>
                                          <!--<div class="col-md-5 btn-group btn-group-solid">
                                            <button type="button" id="EMR_ASWAL_BDN_KorneaMataOD" class="btn green" style="width:100%" value="Jernih"><b> Jernih </b></button>
                                          </div>-->
                                          <span class="col-md-4"><center><b>Kornea</b></center></span>
                                          <!--<div class="col-md-5 btn-group btn-group-solid">
                                            <button type="button" id="EMR_ASWAL_BDN_KorneaMataOS" class="btn green" style="width:100%" value="Jernih"><b> Jernih </b></button>
                                          </div>-->
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASWAL_BDN_KorneaMataOS" name="EMR_ASWAL_BDN_KorneaMataOS" value="Jernih" class="form-control" placeholder="">
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
                                                <input type="text" id="EMR_ASWAL_BDN_BMDMataOD" name="EMR_ASWAL_BDN_BMDMataOD" value="Dalam" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>BMD</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASWAL_BDN_BMDMataOS" name="EMR_ASWAL_BDN_BMDMataOS" value="Dalam" class="form-control">
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
                                                <input type="text" id="EMR_ASWAL_BDN_IrisMataOD" name="EMR_ASWAL_BDN_IrisMataOD" value="Normal" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Iris</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASWAL_BDN_IrisMataOS" name="EMR_ASWAL_BDN_IrisMataOS" value="Normal" class="form-control">
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
                                                <input type="text" id="EMR_ASWAL_BDN_pupilKanan2" name="EMR_ASWAL_BDN_pupilKanan2" value="3" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
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
                                                <input type="text" id="EMR_ASWAL_BDN_pupilKiri2" name="EMR_ASWAL_BDN_pupilKiri2" value="3" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
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
                                          <span class="col-md-4" id="pupilstat2"><b><center>Isokor</center></b></span>
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
                                                <input type="text" id="EMR_ASWAL_BDN_LensaMataOD" name="EMR_ASWAL_BDN_LensaMataOD" value="Jernih" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                          <span class="col-md-4"><center><b>Lensa</b></center></span>
                                          <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASWAL_BDN_LensaMataOS" name="EMR_ASWAL_BDN_LensaMataOS" value="Jernih" class="form-control">
                                                <label for="form_control_1"></label>
                                                <span class="help-block">Masukkan nilai</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <button type="button" id="EMR_ASWAL_BDN_VitreusMataOD" class="btn green" style="width:100%" value="Refleks fundus +"><b> Refleks fundus + </b></button>
                                          </div>
                                          <span class="col-md-4"><center><b>Vitreus</br>Funduskopi</b></center></span>
                                          <div class="col-md-4">
                                            <button type="button" id="EMR_ASWAL_BDN_VitreusMataOS" class="btn green" style="width:100%" value="Refleks fundus +"><b> Refleks fundus + </b></button>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="col-md-4">
                                            <button type="button" id="EMR_ASWAL_BDN_TIOMataOD" class="btn green" style="width:100%" value="Normal"><b> Normal </b></button>
                                          </div>
                                          <span class="col-md-4"><center><b>TIO</b></center></span>
                                          <div class="col-md-4">
                                            <button type="button" id="EMR_ASWAL_BDN_TIOMataOS" class="btn green" style="width:100%" value="Normal"><b> Normal </b></button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <!--<div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_SLTulang" name="EMR_ASWAL_BDN_SLTulang" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_SLTulang">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Orthopedi </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLTulang1">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="portlet light bordered">
                                        <div class="portlet-body">
                                          <div class="tab-content">
                                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <div class="col-md-12 portlet light bordered">
                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_ASWAL_BDN_SLBedahRegio" name="EMR_ASWAL_BDN_SLBedahRegio" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                                    <label for="form_control_1">Regio</label>
                                                    <span class="help-block">Masukkan regio</span>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6 portlet light bordered">
                                                <div class="portlet-title tabbable-line">
                                                  <div class="caption">
                                                    <span class="caption-subject font-dark bold">Look</span>
                                                  </div>
                                                </div>
                                                <div class="portlet-body">
                                                  <div class="tab-content">
                                                    <div class="col-md-6">
                                                      <span class="control-label">Vulnus : </span></br>
                                                      <button type="button" id="EMR_ASWAL_BDN_btnVulnus" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <span class="control-label">Swelling : </span></br>
                                                      <button type="button" id="EMR_ASWAL_BDN_btnSwelling" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <span class="control-label">Hematom : </span></br>
                                                      <button type="button" id="EMR_ASWAL_BDN_btnHematom" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <span class="control-label">Lain - lain : </span></br>
                                                      <input type="text" id="EMR_ASWAL_BDN_btnLookLain" class="form-control" value="" style="width:100%">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6 portlet light bordered">
                                                <div class="portlet-title tabbable-line">
                                                  <div class="caption">
                                                    <span class="caption-subject font-dark bold">Feel</span>
                                                  </div>
                                                </div>
                                                <div class="portlet-body">
                                                  <div class="tab-content">
                                                    <div class="col-md-6">
                                                      <span class="control-label">Nyeri Tekan : </span></br>
                                                      <button type="button" id="EMR_ASWAL_BDN_btnNyeritekan" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <span class="control-label">Perubahan Suhu : </span></br>
                                                      <button type="button" id="EMR_ASWAL_BDN_btnPerubahanSuhu" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <span class="control-label">Krepitasi : </span></br>
                                                      <button type="button" id="EMR_ASWAL_BDN_btnKrepitasi" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <span class="control-label">Hiperetesi : </span></br>
                                                      <button type="button" id="EMR_ASWAL_BDN_btnHiperetesi" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <span class="control-label">Lain - lain : </span></br>
                                                      <input type="text" id="EMR_ASWAL_BDN_btnFeelLain" class="form-control" style="width:100%" value="">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6 portlet light bordered">
                                                <div class="portlet-title tabbable-line">
                                                  <div class="caption">
                                                    <span class="caption-subject font-dark bold">Move</span>
                                                  </div>
                                                </div>
                                                <div class="portlet-body">
                                                  <div class="tab-content">
                                                    <div class="col-md-6">
                                                      <span class="control-label">ROM : </span></br>
                                                      <button type="button" id="EMR_ASWAL_BDN_btnROM" class="btn green" style="width:100%" value="+"><b> + </b></button>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <span class="control-label">Lain - lain : </span></br>
                                                      <input type="text" id="EMR_ASWAL_BDN_MoveLain" class="form-control" style="width:100%" value="">
                                                    </div>
                                                    <div class="col-md-12">
                                                      <button type="button" id="EMR_ASWAL_BDN_btnMove" class="btn green" style="width:100%" value="Bebas"><b> Bebas </b></button>
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
                                </div>-->
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_SLNeurologis" name="EMR_ASWAL_BDN_SLNeurologis" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_SLNeurologis">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Pemeriksaan Neurologis </label>
                                  </div>
                                </div>
                              </div>
                                <div class="row collapse" id="EMR_ASWAL_BDN_SLNeurologis1">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASWAL_BDN_SLNeurologis2" name="EMR_ASWAL_BDN_SLNeurologis2" class="form-control">
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
                                    <input type="checkbox" id="EMR_ASWAL_BDN_SLJiwa" name="EMR_ASWAL_BDN_SLJiwa" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_SLJiwa">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Pemeriksaan Jiwa </label>
                                  </div>
                                </div>
                              </div>
                                <div class="row collapse" id="EMR_ASWAL_BDN_SLJiwa1">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASWAL_BDN_SLJiwa2" name="EMR_ASWAL_BDN_SLJiwa2" class="form-control">
                                                <label for="form_control">Pemeriksaan Jiwa</label>
                                                <span class="help-block">Masukkan Pemeriksaan Jiwa</span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              <!--<div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_SLKandungan" name="EMR_ASWAL_BDN_SLKandungan" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_SLKandungan">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Kandungan/Kebidanan </label>
                                  </div>
                                </div>
                              </div>
                                <div class="row collapse" id="EMR_ASWAL_BDN_SLKandungan1">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASWAL_BDN_SLKandungan2" name="EMR_ASWAL_BDN_SLKandungan2" class="form-control">
                                                <label for="form_control">Status Lokalis Kandungan</label>
                                                <span class="help-block">Masukkan Kandungan</span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>-->
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_SLKulit" name="EMR_ASWAL_BDN_SLKulit" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_SLKulit">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Kulit </label>
                                  </div>
                                </div>
                              </div>
                                <div class="row collapse" id="EMR_ASWAL_BDN_SLKulit1">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <input type="text" id="EMR_ASWAL_BDN_SLKulit2" name="EMR_ASWAL_BDN_SLKulit2" class="form-control">
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
                                    <input type="checkbox" id="EMR_ASWAL_BDN_SLObsgin" name="EMR_ASWAL_BDN_SLObsgin" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_SLObsgin">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Status Lokalis Obsgin </label>
                                  </div>
                                </div>
                              </div>
                                <div class="row collapse" id="EMR_ASWAL_BDN_SLObsgin1">
                                  <div class="col-md-12">
                                    <div class="portlet light bordered">
                                      <div class="portlet-body">
                                        <div class="tab-content">
                                          <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-12 md-checkbox">
                                                <div class="row">
                                                  <input type="checkbox" id="EMR_ASWAL_BDN_SLObstetric" name="EMR_ASWAL_BDN_SLObstetric" value="" class="md-check">
                                                  <label for="EMR_ASWAL_BDN_SLObstetric">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Status Lokalis Obstetric </label>
                                                </div>
                                              </div>
                                              <input type="hidden" id="EMR_ASWAL_BDN_SLObstetricStatus" name="EMR_ASWAL_BDN_SLObstetricStatus" value="Tidak" class="form-control">
                                            </div>
                                              <div class="row collapse" id="EMR_ASWAL_BDN_SLObstetric2">
                                                  <div class="col-md-12">
                                                    <div class="portlet light bordered">
                                                      <div class="portlet-body">
                                                        <div class="tab-content">
                                                          <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetricInspeksi" name="EMR_ASWAL_BDN_SLObstetricInspeksi" value="" class="form-control">
                                                                  <label for="form_control_1">Inspeksi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12"><center><b>Palpasi</b></center></label>
                                                            <div class="col-md-3">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetrictfu" name="EMR_ASWAL_BDN_SLObstetrictfu" value="" class="form-control">
                                                                  <label for="form_control_1">TFU</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                  <i style="font-size:12px"><b>Cm</b></i>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetriclp" name="EMR_ASWAL_BDN_SLObstetriclp" value="" class="form-control">
                                                                  <label for="form_control_1">LP</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetrichis" name="EMR_ASWAL_BDN_SLObstetrichis" value="" class="form-control">
                                                                  <label for="form_control_1">HIS</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                  <i style="font-size:12px"><b>x/m</b></i>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <label for="form_control_1">Kekuatan</label>
                                                              <select class="bs-select form-control"id="EMR_ASWAL_BDN_SLObstetricKekuatan" name="EMR_ASWAL_BDN_SLObstetricKekuatan">
                                                                <option value='Kuat'>Kuat</option>
                                                                <option value='Sedang' selected>Sedang</option>
                                                                <option value='Lemah'>Lemah</option>
                                                              </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetrictbbj" name="EMR_ASWAL_BDN_SLObstetrictbbj" value="" class="form-control">
                                                                  <label for="form_control_1">TBBJ</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                  <i style="font-size:12px"><b>gram</b></i>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetricleopoid1" name="EMR_ASWAL_BDN_SLObstetricleopoid1" value="" class="form-control">
                                                                  <label for="form_control_1">Leopoid 1</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetricleopoid2" name="EMR_ASWAL_BDN_SLObstetricleopoid2" value="" class="form-control">
                                                                  <label for="form_control_1">Leopoid 2</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetricleopoid3" name="EMR_ASWAL_BDN_SLObstetricleopoid3" value="" class="form-control">
                                                                  <label for="form_control_1">Leopoid 3</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <label>Leopoid 4</label>
                                                              <div class="md-radio-inline">
                                                                <div class="md-radio">
                                                                  <input type="radio" id="EMR_ASWAL_BDN_SLObstetricleopoid4kon" name="EMR_ASWAL_BDN_SLObstetricleopoid4" checked="true" class="md-radiobtn" value="">
                                                                  <label for="EMR_ASWAL_BDN_SLObstetricleopoid4kon">
                                                                  <span></span>
                                                                  <span class="check"></span>
                                                                  <span class="box"></span> Konvergen </label>
                                                                </div>
                                                                <div class="md-radio">
                                                                  <input type="radio" id="EMR_ASWAL_BDN_SLObstetricleopoid4dev" name="EMR_ASWAL_BDN_SLObstetricleopoid4" class="md-radiobtn" value="">
                                                                  <label for="EMR_ASWAL_BDN_SLObstetricleopoid4dev">
                                                                  <span></span>
                                                                  <span class="check"></span>
                                                                  <span class="box"></span> Devergen </label>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12" id="EMR_ASWAL_BDN_SLObstetricleopoid4kon2">
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_ASWAL_BDN_SLObstetricleopoid4konKanan" name="EMR_ASWAL_BDN_SLObstetricleopoid4konKanan" value="" class="form-control">
                                                                    <label for="form_control_1">Konvergen Kanan</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_ASWAL_BDN_SLObstetricleopoid4konKiri" name="EMR_ASWAL_BDN_SLObstetricleopoid4konKiri" value="" class="form-control">
                                                                    <label for="form_control_1">Konvergen Kiri</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_SLObstetricleopoid4dev2">
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_ASWAL_BDN_SLObstetricleopoid4devKanan" name="EMR_ASWAL_BDN_SLObstetricleopoid4devKanan" value="" class="form-control">
                                                                    <label for="form_control_1">Devergen Kanan</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_ASWAL_BDN_SLObstetricleopoid4devKiri" name="EMR_ASWAL_BDN_SLObstetricleopoid4devKiri" value="" class="form-control">
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
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetricpembukaan" name="EMR_ASWAL_BDN_SLObstetricpembukaan" value="" class="form-control">
                                                                  <label for="form_control_1">Pembukaan</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetricpenipisan" name="EMR_ASWAL_BDN_SLObstetricpenipisan" value="" class="form-control">
                                                                  <label for="form_control_1">Penipisan</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                  <i style="font-size:12px"><b>%</b></i>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Selaput Ketuban : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLObstetricbtnKetuban" class="btn green col-md-12" value="+"><b> + </b></button>
                                                            </div>
                                                            <div class="col-md-6 collapse" id="EMR_ASWAL_BDN_SLObstetricKetubantxt2">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetricKetubantxt" name="EMR_ASWAL_BDN_SLObstetricKetubantxt" value="" class="form-control">
                                                                  <label for="form_control_1">Selaput Ketuban</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetricrabahodge" name="EMR_ASWAL_BDN_SLObstetricrabahodge" value="" class="form-control">
                                                                  <label for="form_control_1">Teraba kepala setinggi hodge</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12"><center><b>Auskultasi</b></center></label>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetricDJJ" name="EMR_ASWAL_BDN_SLObstetricDJJ" value="" class="form-control">
                                                                  <label for="form_control_1">DJJ</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                  <i style="font-size:12px"><b>x/m</b></i>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLObstetricLain2" name="EMR_ASWAL_BDN_SLObstetricLain2" value="" class="form-control">
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
                                                  <input type="checkbox" id="EMR_ASWAL_BDN_SLGinekologis" name="EMR_ASWAL_BDN_SLGinekologis" value="" class="md-check">
                                                  <label for="EMR_ASWAL_BDN_SLGinekologis">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Status Lokalis Ginekologis </label>
                                                </div>
                                              </div>
                                              <input type="hidden" id="EMR_ASWAL_BDN_SLGinekologisStatus" name="EMR_ASWAL_BDN_SLGinekologisStatus" value="Tidak" class="form-control">
                                            </div>
                                              <div class="row collapse" id="EMR_ASWAL_BDN_SLGinekologis2">
                                                  <div class="col-md-12">
                                                    <div class="portlet light bordered">
                                                      <div class="portlet-body">
                                                        <div class="tab-content">
                                                          <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                            <label class="col-md-12">Pemeriksaan Abdomen</label>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisInspeksi" name="EMR_ASWAL_BDN_SLGinekologisInspeksi" value="" class="form-control">
                                                                  <label for="form_control_1">Inspeksi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12">Palpasi</label>
                                                            <div class="col-md-6">
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnSupel" class="btn green col-md-12" value="Supel"><b> Supel </b></button>
                                                            </div>
                                                            <div class="col-md-12">
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Nyeri Tekan : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnNyeTek" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Benjolan : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnBenjolan" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Defans muscular : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnDefmus" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisPalpasiTxt" name="EMR_ASWAL_BDN_SLGinekologisPalpasiTxt" value="" class="form-control">
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
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisPerkusiTxt" name="EMR_ASWAL_BDN_SLGinekologisPerkusiTxt" value="" class="form-control">
                                                                  <label for="form_control_1">Perkusi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisAuskultasiTxt" name="EMR_ASWAL_BDN_SLGinekologisAuskultasiTxt" value="" class="form-control">
                                                                  <label for="form_control_1">Auskultasi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12"><center><b>Pemeriksaan Pelvik</b></center></label>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisPelvikTxt" name="EMR_ASWAL_BDN_SLGinekologisPelvikTxt" value="" class="form-control">
                                                                  <label for="form_control_1">Inspeksi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12">Inspekuio</label>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisDindingvagTxt" name="EMR_ASWAL_BDN_SLGinekologisDindingvagTxt" value="Normal" class="form-control">
                                                                  <label for="form_control_1">Dinding Vagina</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Nyeri : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnNyeriInspek" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-12">
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Massa : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnMassa" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6 collapse" id="EMR_ASWAL_BDN_SLGinekologisMassatxt2">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisMassatxt" name="EMR_ASWAL_BDN_SLGinekologisMassatxt" value="" class="form-control">
                                                                  <label for="form_control_1">Massa</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisPorUkTxt" name="EMR_ASWAL_BDN_SLGinekologisPorUkTxt" value="Normal" class="form-control">
                                                                  <label for="form_control_1">Porsio Ukuran</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Fluksus : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnFluksus" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Fluor : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnFluor" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Erosi : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnErosi" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6 collapse" id="EMR_ASWAL_BDN_SLGinekologisErositxt2">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisErositxt" name="EMR_ASWAL_BDN_SLGinekologisErositxt" value="" class="form-control">
                                                                  <label for="form_control_1">Erosi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisOUEtxt" name="EMR_ASWAL_BDN_SLGinekologisOUEtxt" value="" class="form-control">
                                                                  <label for="form_control_1">OUE</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisInspektxt" name="EMR_ASWAL_BDN_SLGinekologisInspektxt" value="" class="form-control">
                                                                  <label for="form_control_1">Lain - lain</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <label class="col-md-12"><center><b>VT/Bimanual palpasi</b></center></label>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Uterus : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnUterus" class="btn green col-md-12" value="Antefleksi"><b> Antefleksi </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisBentukVTtxt" name="EMR_ASWAL_BDN_SLGinekologisBentukVTtxt" value="Normal" class="form-control">
                                                                  <label for="form_control_1">Bentuk</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Nyeri : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnNyeriVT" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisUkurantxt" name="EMR_ASWAL_BDN_SLGinekologisUkurantxt" value="Sebesar telur ayam" class="form-control">
                                                                  <label for="form_control_1">Ukuran</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Masa Adnexa Kanan : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKanan" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6 collapse" id="EMR_ASWAL_BDN_SLGinekologisAdnexaKanantxt2">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisAdnexaKanantxt" name="EMR_ASWAL_BDN_SLGinekologisAdnexaKanantxt" value="" class="form-control">
                                                                  <label for="form_control_1">Adnexa Kanan</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <span class="control-label">Masa Adnexa Kiri : </span></br>
                                                              <button type="button" id="EMR_ASWAL_BDN_SLGinekologisbtnAdnexaKiri" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                            </div>
                                                            <div class="col-md-6 collapse" id="EMR_ASWAL_BDN_SLGinekologisAdnexaKiritxt2">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisAdnexaKiritxt" name="EMR_ASWAL_BDN_SLGinekologisAdnexaKiritxt" value="" class="form-control">
                                                                  <label for="form_control_1">Adnexa Kiri</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisKayumDougtxt" name="EMR_ASWAL_BDN_SLGinekologisKayumDougtxt" value="Dalam Batas Normal" class="form-control">
                                                                  <label for="form_control_1">Kayum Douglasi</label>
                                                                  <span class="help-block">Masukkan Data</span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_ASWAL_BDN_SLGinekologisVTtxt" name="EMR_ASWAL_BDN_SLGinekologisVTtxt" value="" class="form-control">
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
                  <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_Halaman4">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-12">
                                  <div class="form-group form-md-line-input form-md-floating-label has-success">
                                      <!--<textbox class="form-control" name="EMR_ASWAL_BDN_Diagnosis" id="EMR_ASWAL_BDN_Diagnosis"></textarea>-->
                                      <textarea class="form-control" id="EMR_ASWAL_BDN_Diagnosis" name="EMR_ASWAL_BDN_Diagnosis"></textarea>
                                      <label for="form_control_1">Diagnosis</label>
                                      <span class="help-block">Masukkan Diagnosis</span>
                                  </div>
                                  <div class="form-group form-md-line-input form-md-floating-label has-success">
                                      <!--<textbox class="form-control" name="EMR_ASWAL_BDN_DiagnosisBanding" id="EMR_ASWAL_BDN_DiagnosisBanding"></textarea>-->
                                      <textarea class="form-control" id="EMR_ASWAL_BDN_DiagnosisBanding" name="EMR_ASWAL_BDN_DiagnosisBanding"></textarea>
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
                  <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_Halaman5">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Obat" name="EMR_ASWAL_BDN_Obat" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Obat">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Obat </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_Obat2">
                                  <div class="row">
                                    <a class="btn btn-outline blue" href="#EMR_ASWAL_BDN_ObatModal" data-toggle="modal"> Obat </a>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                                <div id="EMR_ASWAL_BDN_ObatModal" class="modal" data-width="100%" style="width:90%;">
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
                                        <a type="button" id="EMR_ASWAL_BDN_ObatbtnObatSatuan" class="btn disabled white" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Satuan</b></a>
                                        <a type="button" id="EMR_ASWAL_BDN_ObatbtnObatRacik" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Racik</b></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-body">
                                    <input type="hidden" id="EMR_ASWAL_BDN_ObatstatObat" value="Satuan">
                                    <div class="row" id="EMR_ASWAL_BDN_ObatformObatSatuan">
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
                                                      <input type="text" name="EMR_ASWAL_BDN_Obatobatsatuan[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>
                                                      <input type="hidden" name="EMR_ASWAL_BDN_Obatidobatsatuan[]" class="form-control project"/>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                      <label class="control-label" style="font-size:14px">Jumlah Obat</label>
                                                      <input type="text" id="EMR_ASWAL_BDN_ObatSatuanJumlah" name="EMR_ASWAL_BDN_ObatSatuanJumlah[]" placeholder="Jumlah" class="form-control"/>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                  <div class="col-md-12">
                                                    <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <div class="col-md-3">
                                                      <input type="text" id="EMR_ASWAL_BDN_ObatSatuanAturanPakai1" name="EMR_ASWAL_BDN_ObatSatuanAturanPakai1[]" class="form-control"/>
                                                    </div>
                                                    <div class="col-md-1">
                                                      <p class="form-control-static"> dd </p>
                                                    </div>
                                                    <div class="col-md-3">
                                                      <input type="text" id="EMR_ASWAL_BDN_ObatSatuanAturanPakai2" name="EMR_ASWAL_BDN_ObatSatuanAturanPakai2[]" class="form-control"/>
                                                    </div>
                                                    <div class="col-md-5">
                                                      <select class="form-control" id="EMR_ASWAL_BDN_ObatSatuanAturanPakai3" name="EMR_ASWAL_BDN_ObatSatuanAturanPakai3[]">
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
                                                      <select class="form-control" id="EMR_ASWAL_BDN_ObatSatuanKetPakai1" name="EMR_ASWAL_BDN_ObatSatuanKetPakai1[]">
                                                            <option value="a.c.">a.c.</option>
                                                            <option value="p.c.">p.c.</option>
                                                            <option value="d.c.">d.c.</option>
                                                            <option value="ad.lib.">ad.lib.</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <select class="form-control" id="EMR_ASWAL_BDN_ObatSatuanKetPakai2" name="EMR_ASWAL_BDN_ObatSatuanKetPakai2[]">
                                                            <option value="p.r.n.">p.r.n.</option>
                                                            <option value="Sampai Habis">Sampai Habis</option>
                                                        </select>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                  <div class="col-md-12">
                                                      <input type="text" id="EMR_ASWAL_BDN_ObatSatuanLain" name="EMR_ASWAL_BDN_ObatSatuanLain[]" class="form-control" placeholder="Lain-lain"/>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="EMR_ASWAL_BDN_Obatdiv1Satuan">
                                      </div>
                                      <div class="col-md-4" id="EMR_ASWAL_BDN_Obatdiv_buttonSatuan">
                                        <center>
                                          <a class="btn green-jungle col-md-12" name="EMR_ASWAL_BDN_ObattambahSatuan" value="Tambah Data" id="EMR_ASWAL_BDN_ObattambahSatuan" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                                        </center>
                                      </div>
                                    </div>
                                    <div class="collapse" id="EMR_ASWAL_BDN_ObatformObatRacik">
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
                                                            <input type="text" name="EMR_ASWAL_BDN_ObatobatsatuanRacik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                                            <input type="hidden" name="EMR_ASWAL_BDN_ObatidobatsatuanRacik[]" value="" class="form-control project_racik"/>
                                                            <input type="hidden" value="RACIK_0001" id="EMR_ASWAL_BDN_ObatidRacik" name="EMR_ASWAL_BDN_ObatidRacik[]" class="form-control" />
                                                          </div>
                                                        </div>
                                                        </br>
                                                        <div class="row mt-repeater-row">
                                                          <div class="col-md-4">
                                                            <label class="control-label" style="font-size:14px">Jumlah</label>
                                                            <input type="text" id="EMR_ASWAL_BDN_ObatRacikJumlahBahan" name="EMR_ASWAL_BDN_ObatRacikJumlahBahan[]" placeholder="Jumlah" class="form-control"/>
                                                          </div>
                                                          <div class="col-md-6">
                                                            <label class="control-label" style="font-size:14px">Satuan</label>
                                                            <select class="form-control" id="EMR_ASWAL_BDN_ObatRacikSatuan" name="EMR_ASWAL_BDN_ObatRacikSatuan[]">
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
                                                    <div id="EMR_ASWAL_BDN_ObatdivracikBahan1"></div>
                                                    <div id="EMR_ASWAL_BDN_Obatdiv_buttonracikBahan1">
                                                      <a class="btn blue EMR_ASWAL_BDN_ObattambahRacikBahan-click col-md-12" name="EMR_ASWAL_BDN_ObattambahRacikBahan" value="Tambah Data" data-todo='{"number":"1"}'><i class="fa fa-plus"></i> Tambah Bahan</a>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row">
                                                    <div class="col-md-12">
                                                      <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Detail Obat</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-8">
                                                          <select class="form-control" id="EMR_ASWAL_BDN_ObatRacikAturanBahan" name="EMR_ASWAL_BDN_ObatRacikAturanBahan[]">
                                                                <option selected="selected" value="m.f.da.in caps.dtd">m.f.da.in caps.dtd</option>
                                                                <option value="m.f.l.a.pulv.dtd">m.f.l.a.pulv.dtd</option>
                                                                <option value="m.f.da.in caps">m.f.da.in caps</option>
                                                                <option value="m.f.l.a.pulv">m.f.l.a.pulv</option>
                                                                <option value="m.f.krim">m.f.krim</option>
                                                                <option value="m.f.da.in.bottle">m.f.da.in.bottle</option>
                                                            </select>
                                                          </div>
                                                        <div class="col-md-4">
                                                          <input type="text" id="EMR_ASWAL_BDN_ObatRacikJumlahRacik" name="EMR_ASWAL_BDN_ObatRacikJumlahRacik[]" placeholder="Jumlah" class="form-control"/>
                                                        </div>
                                                      </br>
                                                      <div class="col-md-8">
                                                          <input type="hidden" value="RACIK_0001" id="EMR_ASWAL_BDN_ObatidRacik_2" name="EMR_ASWAL_BDN_ObatidRacik_2[]" class="form-control" />
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                    <div class="col-md-12">
                                                      <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Aturan Pakai</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="col-md-3">
                                                        <input type="text" id="EMR_ASWAL_BDN_ObatRacikAturanPakai1" name="EMR_ASWAL_BDN_ObatRacikAturanPakai1[]" class="form-control" />
                                                      </div>
                                                      <div class="col-md-1">
                                                        <p class="form-control-static"> dd </p>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <input type="text" id="EMR_ASWAL_BDN_ObatRacikAturanPakai2" name="EMR_ASWAL_BDN_ObatRacikAturanPakai2[]" class="form-control" />
                                                      </div>
                                                      <div class="col-md-5">
                                                        <select class="form-control" id="EMR_ASWAL_BDN_ObatRacikAturanPakai3" name="EMR_ASWAL_BDN_ObatRacikAturanPakai3[]" >
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
                                                        <select class="form-control" id="EMR_ASWAL_BDN_ObatRacikKetPakai1" name="EMR_ASWAL_BDN_ObatRacikKetPakai1[]" >
                                                            <option value="a.c.">a.c.</option>
                                                            <option value="p.c.">p.c.</option>
                                                            <option value="d.c.">d.c.</option>
                                                            <option value="ad.lib.">ad.lib.</option>
                                                        </select>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <select class="form-control" id="EMR_ASWAL_BDN_ObatRacikKetPakai2" name="EMR_ASWAL_BDN_ObatRacikKetPakai2[]" >
                                                            <option value="p.r.n.">p.r.n.</option>
                                                            <option value="Sampai Habis">Sampai Habis</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                    <div class="col-md-12">
                                                        <input type="text" id="EMR_ASWAL_BDN_ObatRacikLain" name="EMR_ASWAL_BDN_ObatRacikLain[]" class="form-control" placeholder="Lain-lain"/>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div id="EMR_ASWAL_BDN_Obatdivracikobat"></div>
                                        <div class="col-md-4" id="EMR_ASWAL_BDN_Obatdiv_buttonracikobat">
                                          <center>
                                            <a class="btn green-jungle col-md-12" name="EMR_ASWAL_BDN_Obattambahracikobat" value="Tambah Data" id="EMR_ASWAL_BDN_Obattambahracikobat" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
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
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Radiologi" name="EMR_ASWAL_BDN_Radiologi" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Radiologi">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Radiologi </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_Radiologi2">
                                  <div class="row">
                                    <a class="btn btn-outline blue" href="#EMR_ASWAL_BDN_RadiologiModal" data-toggle="modal"> Radiologi </a>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                                <div id="EMR_ASWAL_BDN_RadiologiModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
                                                  <input type="checkbox" id="EMR_ASWAL_BDN_radiologi_checkbox" name="EMR_ASWAL_BDN_radiologi_checkbox[]" value="<?php echo $row->KODE_DT_RADIO;?>">
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
                                        <input type="checkbox" id="EMR_ASWAL_BDN_radiologi_lain" name="EMR_ASWAL_BDN_radiologi_lain" value="DTR_0000">
                                        Lain-Lain
                                        <span></span>
                                        </label>
                                        <div class="form-group collapse" id="EMR_ASWAL_BDN_radiologi_lain1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_ASWAL_BDN_radiologi_lain2" name="EMR_ASWAL_BDN_radiologi_lain2" class="form-control">
                                                    <label for="form_control">Radiologi Lain</label>
                                                    <span class="help-block">Masukkan Radiologi</span>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    <div class="col-md-4">
                                      <label class="mt-checkbox mt-checkbox-outline">
                                      <input type="checkbox" id="EMR_ASWAL_BDN_Gigi_Satuan" name="EMR_ASWAL_BDN_Gigi_Satuan" value="DTR_G000">
                                      Gigi Satuan
                                      <span></span>
                                      </label>
                                      <div class="form-group collapse" id="EMR_ASWAL_BDN_Gigi_Satuan1">
                                          <div class="form-group form-md-line-input">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_ASWAL_BDN_Gigi_Satuan2" name="EMR_ASWAL_BDN_Gigi_Satuan2" class="form-control">
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
                                        <button type="button" class="btn btn-default" id="EMR_ASWAL_BDN_reset_radio" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                    </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Laborat" name="EMR_ASWAL_BDN_Laborat" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Laborat">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Laboratorium </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_Laborat2">
                                  <div class="row">
                                    <a class="btn btn-outline blue" href="#EMR_ASWAL_BDN_LaboratModal" data-toggle="modal"> Laboratorium </a>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                                <div id="EMR_ASWAL_BDN_LaboratModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
                                                  <input type="checkbox" id="EMR_ASWAL_BDN_laboratorium_checkbox" name="EMR_ASWAL_BDN_laboratorium_checkbox[]" value="<?php echo $row->KODE_DT_LABORATORIUM;?>">
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
                                        <input type="checkbox" id="EMR_ASWAL_BDN_laboratorium_lain" name="EMR_ASWAL_BDN_laboratorium_lain" value="DTL_0000">
                                        Lain-Lain
                                        <span></span>
                                        </label>
                                        <div class="form-group collapse" id="EMR_ASWAL_BDN_laboratorium_lain1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_ASWAL_BDN_laboratorium_lain2" name="EMR_ASWAL_BDN_laboratorium_lain2" class="form-control">
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
                                        <button type="button" class="btn btn-default" id="EMR_ASWAL_BDN_reset_laboratorium" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                    </div>
                                </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_ASWAL_BDN_EkgDll" name="EMR_ASWAL_BDN_EkgDll" value="" class="md-check">
                                      <label for="EMR_ASWAL_BDN_EkgDll">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tambah Data EKG Dan Lainnya </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_EkgDll2">
                                  <div class="row">
                                    <a class="btn btn-outline blue" href="#EMR_ASWAL_BDN_EkgDll2Modal" data-toggle="modal"> EKG Dan Lainnya </a>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                                <div id="EMR_ASWAL_BDN_EkgDll2Modal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
                                        <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.25em;">
                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="mt-checkbox mt-checkbox-outline">
                                              <input type="checkbox" id="EMR_ASWAL_BDN_EkgInput" name="EMR_ASWAL_BDN_EkgInput" value="" >
                                              EKG
                                              <span></span>
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="mt-checkbox mt-checkbox-outline">
                                              <input type="checkbox" id="EMR_ASWAL_BDN_Audiometri" name="EMR_ASWAL_BDN_Audiometri" value="" >
                                              Audiometri
                                              <span></span>
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.25em;">
                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="mt-checkbox mt-checkbox-outline">
                                              <input type="checkbox" id="EMR_ASWAL_BDN_Spirometri" name="EMR_ASWAL_BDN_Spirometri" value="" >
                                              Spirometri
                                              <span></span>
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="mt-checkbox mt-checkbox-outline">
                                              <input type="checkbox" id="EMR_ASWAL_BDN_Spirometri" name="EMR_ASWAL_BDN_Spirometri" value="" >
                                              Spirometri
                                              <span></span>
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="mt-checkbox mt-checkbox-outline">
                                              <input type="checkbox" id="EMR_ASWAL_BDN_EKGlain" name="EMR_ASWAL_BDN_EKGlain" value="lain" >
                                              Lain - Lain
                                              <span></span>
                                              </label>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group collapse" id="EMR_ASWAL_BDN_EKGlain_1">
                                                  <div class="form-group form-md-line-input">
                                                      <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                          <input type="text" id="EMR_ASWAL_BDN_EKGlain_2" name="EMR_ASWAL_BDN_EKGlain_2" class="form-control">
                                                          <label for="form_control">Lain - Lain</label>
                                                          <span class="help-block">Masukkan Lain - Lain</span>
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer" style="display:block; text-align: left;">
                                      <button type="button" class="btn btn-default" id="EMR_ASWAL_BDN_reset_EKG" data-dismiss="modal">Batal</button>
                                      <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                  </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Rujukan" name="EMR_ASWAL_BDN_Rujukan" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Rujukan">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Rujukan </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASWAL_BDN_Rujukan2">
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
                                                  <input type="checkbox" id="EMR_ASWAL_BDN_rahligizi" name="EMR_ASWAL_BDN_rahligizi" value="Ahli Gizi" >
                                                  Ahli Gizi
                                                  <span></span>
                                                  </label>
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="mt-checkbox mt-checkbox-outline">
                                                  <input type="checkbox" id="EMR_ASWAL_BDN_rrehabilitasi" name="EMR_ASWAL_BDN_rrehabilitasi" value="Rehabilitasi Medik" >
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
                                                  <input type="checkbox" id="EMR_ASWAL_BDN_rklinik" name="EMR_ASWAL_BDN_rklinik" value="Klinik Spesialis" >
                                                  Klinik Spesialis
                                                  <span></span>
                                                  </label>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group collapse" id="EMR_ASWAL_BDN_rklinik_1">
                                                      <div class="form-group form-md-line-input">
                                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                              <input type="text" id="EMR_ASWAL_BDN_rklinik_2" name="EMR_ASWAL_BDN_rklinik_2" class="form-control">
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
                                                  <input type="checkbox" id="EMR_ASWAL_BDN_rlain" name="EMR_ASWAL_BDN_rlain" value="lain" >
                                                  Lain - Lain
                                                  <span></span>
                                                  </label>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group collapse" id="EMR_ASWAL_BDN_rlain_1">
                                                      <div class="form-group form-md-line-input">
                                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                              <input type="text" id="EMR_ASWAL_BDN_rlain_2" name="EMR_ASWAL_BDN_rlain_2" class="form-control">
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
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Edukasi" name="EMR_ASWAL_BDN_Edukasi" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Edukasi">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Edukasi </label>
                                  </div>
                                </div>
                              </div>
                              <div class="row collapse" id="EMR_ASWAL_BDN_edukasi_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <div class="form-group form-md-line-input">
                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <input type="text" id="EMR_ASWAL_BDN_edukasi_2" name="EMR_ASWAL_BDN_edukasi_2" class="form-control">
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
                                    <input type="checkbox" id="EMR_ASWAL_BDN_Prognosis" name="EMR_ASWAL_BDN_Prognosis" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_Prognosis">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Prognosis </label>
                                  </div>
                                </div>
                              </div>
                              <div class="row collapse" id="EMR_ASWAL_BDN_Prognosis_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_prognosis1" name="EMR_ASWAL_BDN_prognosis" class="md-radiobtn" value="NadiReguler" checked>
                                        <label for="EMR_ASWAL_BDN_prognosis2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Bonam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_prognosis2" name="EMR_ASWAL_BDN_prognosis" class="md-radiobtn" value="NadiIrreguler">
                                        <label for="EMR_ASWAL_BDN_prognosis2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Malam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_prognosis3" name="EMR_ASWAL_BDN_prognosis" class="md-radiobtn" value="NadiIrreguler">
                                        <label for="EMR_ASWAL_BDN_prognosis3">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Dubia Ad Bonam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASWAL_BDN_prognosis4" name="prognosis" class="md-radiobtn" value="NadiIrreguler">
                                        <label for="EMR_ASWAL_BDN_prognosis4">
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
                                    <input type="checkbox" id="EMR_ASWAL_BDN_KontrolK" name="EMR_ASWAL_BDN_KontrolK" value="" class="md-check">
                                    <label for="EMR_ASWAL_BDN_KontrolK">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Kontrol Kembali </label>
                                  </div>
                                </div>
                              </div>
                              <div class="row collapse" id="EMR_ASWAL_BDN_KontrolK_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                          <input name="EMR_ASWAL_BDN_KontrolK_2" id="EMR_ASWAL_BDN_KontrolK_2" type="text" class="form-control" readonly>
                                          <span class="input-group-btn">
                                              <button class="btn default" type="button">
                                                  <i class="fa fa-calendar"></i>
                                              </button>
                                          </span>
                                      </div>
                                  </div>
                                    <!--<input type="text" id="EMR_ASWAL_BDN_KontrolK_2" name="EMR_ASWAL_BDN_KontrolK_2" class="form-control">
                                    <label for="form_control">Kontrol Kembali</label>-->
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
                    <button type="button" id="EMR_ASWAL_BDN_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                    <button type="button" id="EMR_ASWAL_BDN_HalamanNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
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
              <input type="hidden" id="EMR_ASWAL_BDN_STATUSHALAMAN" value="perawat">
              <div class="row" id="EMR_ASWAL_BDN_stepPerawat">
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
              <div class="row collapse" id="EMR_ASWAL_BDN_stepDokter">
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
        <div id="EMR_ASWAL_BDN_FrmRPerawat">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <input type="hidden" id="EMR_ASWAL_BDN_statver" name="EMR_ASWAL_BDN_statver" value="Perawat1">
            <div class="row portlet-body" id="EMR_ASWAL_BDN_verPerPerawat">
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
                  <a id="EMR_ASWAL_BDN_btnChangePerPerawat" class="btn red"> Klik disini apabila anda bukan <?php echo $level; ?> <?php echo $username; ?></a>
                </div>
              </div>
            </div>
            <div class="row portlet-body collapse" id="EMR_ASWAL_BDN_verPerPerawat2">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda akan mengambil alih tanggung jawab proses pengisian data, kelengkapan pengisian data akan mempengaruhi penilaian anda</p>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_ASWAL_BDN_userPerPerawat" name="EMR_ASWAL_BDN_userPerPerawat" class="form-control">
                    <label for="form_control_1">Masukkan Username</label>
                    <span class="help-block">Masukkan Username</span>
                  </div>
                </div>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                  <input type="password" id="EMR_ASWAL_BDN_passPerPerawat" name="EMR_ASWAL_BDN_passPerPerawat" class="form-control">
                  <label for="form_control_1">Masukkan Password</label>
                  <span class="help-block">Masukkan Password</span>
                </div>
              </div>
              </div>
              <div class="col-sm-12">
                <div class="btn-group btn-group btn-group-justified">
                  <a id="EMR_ASWAL_BDN_btnChangePerPerawat2" class="btn red"> Klik disini apabila anda <?php echo $level; ?> <?php echo $username; ?></a>
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
                    <a type="button" id="EMR_ASWAL_BDN_btnselanjutnyaPerawat2" class="btn blue" data-dismiss="modal" style="width:50%">Ya</a>
                </div>
              </center>
            </div>
          </div>
        </div>
        <!--end user perawat-->
        <div class="collapse" id="EMR_ASWAL_BDN_FrmRDokter">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <div class="row portlet-body">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data Rekam Medis berikut, masukkan password dokter <b><?php echo $namadokter; ?></b> di bawah ini terlebih dahulu sebagai proses verifikasi pengisi data.</p>
                <!--<div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_ASWAL_BDN_userPerDokter" name="EMR_ASWAL_BDN_userPerDokter" class="form-control">
                    <label for="form_control_1">Masukkan Username Dokter</label>
                    <span class="help-block">Masukkan Username Dokter</span>
                  </div>
                </div>-->
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                  <input type="password" id="EMR_ASWAL_BDN_passPerDokter" name="EMR_ASWAL_BDN_passPerDokter" class="form-control">
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
              <div id="alert-msg-EMR_ASWAL_BDN_PR"></div>
              <div id="EMR_ASWAL_BDN_PR_btnCommand" class="">
                <div class="btn-group btn-group btn-group-justified">
                    <button type="button" class="btn white" id="EMR_ASWAL_BDN_btnselanjutnyaPerawat" name="EMR_ASWAL_BDN_btnselanjutnyaPerawat" style="width:100%">Selanjutnya</button>
                </div>
              </div>
              <div id="EMR_ASWAL_BDN_DR_btnCommand" class="collapse">
                <div class="btn-group btn-group btn-group-justified">
                  <input type="hidden" id="EMR_ASWAL_BDN_userPerPerawatHalDok" name="EMR_ASWAL_BDN_userPerPerawatHalDok" value="">
                    <button type="button" class="btn green" id="EMR_ASWAL_BDN_btnsimpan" name="EMR_ASWAL_BDN_btnsimpan" style="width:100%">Simpan</button>
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
