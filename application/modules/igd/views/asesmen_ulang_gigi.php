<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content" style="background-color:#BFBFBF;">
    <input type="hidden" id="EMR_ASESMEN_AWAL_NamaDokter" name="EMR_ASESMEN_AWAL_NamaDokter" value="<?php echo $namadokter; ?>" class="form-control">
    <input type="hidden" id="EMR_ASESMEN_AWAL_KodeDokter" name="EMR_ASESMEN_AWAL_KodeDokter" value="<?php echo $kodedokter; ?>" class="form-control">
    <div class="row">
      <div class="col-md-9">
        <div class="portlet light bordered">
          <div class="caption font-red-sunglo">
            <center><span id="EMR_ASESMEN_ULANGPERAWATGIGI_judulHalaman" class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">ASESMEN AWAL KEPERAWATAN PASIEN RAWAT JALAN</span></center>
          </div>
        </div>
        <div id="EMR_ASESMEN_ULANGPERAWATGIGI_HalamanPerawat">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnHalaman1" class="btn white col-md-9">1. Tanda Vital</button>
              <button type="button" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnHalaman2" class="btn green col-md-1">2</button>
              <button type="button" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnHalaman3" class="btn green col-md-1">3</button>
              <button type="button" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnHalaman4" class="btn green col-md-1">4</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_ASESMEN_ULANGPERAWATGIGI_Halaman1">
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
                              <div class="col-md-12 portlet light bordered">
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
                                          <input type="text" id="EMR_ASESMEN_ULANGPERAWATGIGI_TDSistolik" name="EMR_ASESMEN_ULANGPERAWATGIGI_TDSistolik" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                          <label for="form_control_1">Sistolik</label>
                                          <span class="help-block">Masukkan Sistolik</span>
                                          <i style="font-size:12px"><b>mmHg&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</b></i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASESMEN_ULANGPERAWATGIGI_TDDiastolik" name="EMR_ASESMEN_ULANGPERAWATGIGI_TDDiastolik" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                          <label for="form_control_1">Diastolik</label>
                                          <span class="help-block">Masukkan Diastolik</span>
                                          <i style="font-size:12px"><b>mmHg</b></i>
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
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_Halaman2">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <span>Apakah Pasien Memiliki Keluhan Nyeri?</span>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="md-radio-inline">
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN1Ada" name="EMR_ASESMEN_ULANGPERAWATGIGI_adaNyeri" class="md-radiobtn" value="NyeriY">
                                <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN1Ada">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Ya </label>
                              </div>
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN1Takda" name="EMR_ASESMEN_ULANGPERAWATGIGI_adaNyeri" class="md-radiobtn" value="NyeriTD">
                                <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN1Takda">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Tidak </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_statadaNyeri" value="Tidak">
                      <div class="col-md-12 portlet light bordered collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN1Takda2">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <!--<input type="hidden" id="ujia" value="50">-->
                            <input type="hidden" id="EMR_ASESMEN_ULANGPERAWATGIGI_nyeri_ada_focus" name="EMR_ASESMEN_ULANGPERAWATGIGI_nyeri_ada_focus" value="">
                            <input type="hidden" id="EMR_ASESMEN_ULANGPERAWATGIGI_umur_skala" name="EMR_ASESMEN_ULANGPERAWATGIGI_umur_skala" value="<?php echo $Utahun ?>">
                            <?php
                            if($Utahun < 1)
                            {?>
                              <div class="col-md-12" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN1_1">
                                a. Facial Expression (ekspresi wajah)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSA1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSA" value="NIPSA1" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (wajah tenang, ekspresi netral) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSA2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSA" value="NIPSA2" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Grimace (otot wajah tegang, alis berkerut, dagu dan rahang tegang) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN1_2">
                                b. Cry (menangis)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSB1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSB" value="NIPSB1" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> No cry (tenang, tidak menangis) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSB2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSB" value="NIPSB2" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Whimper (merengek ringan, kadang-kadang) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSB3" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSB" value="NIPSB3" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSB3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>Vigorour crying (berteriak kencang, menarik, melengking terus-terusan)</label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN1_3">
                                c. Breathing Patterns (pola pernafasan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSC1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSC" value="NIPSC1" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSC1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (Pola pernafasan bayi normal) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSC2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSC" value="NIPSC2" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSC2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Change in breathing (tidak teratur, lebih cepat dari biasanya, tersedak, nafas tertahan) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN1_4">
                                d. Arms(lengan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD" value="NIPSD1" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD" value="NIPSD2" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (gerakan tangan acak sesekali) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD3" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD" value="NIPSD3" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Flexed (Tegang, lengan lurus, kaku dan atau fleksi) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD4" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD" value="NIPSD4" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSD4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Extended (Tegang, lengan lurus, kaku dan atau ekstensi) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN1_5">
                                e. Legs(kaki)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EEMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE" value="NIPSE1" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE" value="NIPSE2" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (gerakan kaki acak sesekali) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE3" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE" value="NIPSE3" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Flexed (Tegang, kaki lurus, kaku dan atau fleksi) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE4" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE" value="NIPSE4" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSE4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Extended (Tegang, kaki lurus, kaku dan atau ekstensi) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN1_6">
                                f. State of Arousal (kesadaran)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSF1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSF" value="NIPSF1" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSF1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sleeping (tenang, tidur damai) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSF2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSF" value="NIPSF2" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSF2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Awake (Tenang, tidak tidur/Bangun, gerakan kaki acak yang terjaga) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSF3" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSF" value="NIPSF3" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_NIPSF3">
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
                              <div class="col-md-12" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN2_1">
                                a. Face Expression (ekspresi wajah)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCA1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCA" value="FLACCA1" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak ada ekspresi tertentu atau seyum, kontak mata </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCA2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCA" value="FLACCA2" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Kadang meringis atau mengerutkan kening, menarik diri, tidak tertarik, wajah terlihat cemas, alis diturunkan, maka sebagian tertutup, pipi terangkat, mulut mengerut </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCA3" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCA" value="FLACCA3" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCA3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sering cemberut, konstan, rahangter katup. Dagu bergetar, kerutan yang dalam di dahi, mata tertutup, mulut terbuka, garis yang dalam di sekitar hidung/bibir </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN2_2">
                                b. Leg (Kaki)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCB1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCB" value="FLACCB1" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Posisi normal atau santai </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCB2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCB" value="FLACCB2" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak nyaman, gelisah, tegang, tonus meningkat, kaku/flexi/ekstensi anggota badan intermitten </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCB3" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCB" value="FLACCB3" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCB3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Menendang atau kaki disusun, hipertonis fleksi/ekstensi anggota badan secara berlebihan </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN2_3">
                                c. Activity (Aktivitas)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCC1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCC" value="FLACCC1" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCC1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Berbaring dengan tenang, posisi normal, bergerak dengan bebas dan mudah </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCC2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCC" value="FLACCC2" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCC2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Menggeliat, menggeser maju mundur, tegang, ragu-ragu untuk bergerak, menjaga tekanan pada bagian tubuh </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCC3" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCC" value="FLACCC3" class="md-check">
                                    <label for="EEMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCC3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Melengkung, kaku atau menyentak, posisi tetap, goyang gerakan kepala dari sisi ke sisi, menggosok bagian tubuh </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN2_4">
                                d. Cry (Menangis)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCD1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCD" value="FLACCD1" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCD1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Tidak ada teriakan/erangan (terjaga/tertidur) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCD2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCD" value="FLACCD2" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCD2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Erangan/rengekan, sesekali menangis, sesekali mengeluh </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCD3" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCD" value="FLACCD3" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCD3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Terus menerus menangis, menjerit, isak tangis, mengeram-ngeram, sering mengeluh </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN2_5">
                                e. Consolalability (respon terhadap himbauan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCE1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCE" value="FLACCE1" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCE1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Tenang, santai, tidak perlu di hibur </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCE2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCE" value="FLACCE2" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCE2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Perlu keyakinan dengan sesekali menyentuh, sekali-kali memeluk atau berbicara. Perhatian mudah beralih </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCE3" name="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCE" value="FLACCE3" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_SN_FLACCE3">
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
                              <div class="col-md-12" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN3_1" >
                                <span>Apa yang membuat nyeri bertambah parah?</span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBertambahParah1" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBertambahParah1" value="Tidak ada penyebab khusus" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBertambahParah1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak ada penyebab khusus </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBertambahParah2" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBertambahParah2" value="Berubah Posisi" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBertambahParah2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Berubah Posisi  </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_ASESMEN_ULANGPERAWATGIGI_textBertambahParah" name="EMR_ASESMEN_ULANGPERAWATGIGI_textBertambahParah" value="" class="form-control collapse" maxlength="30" placeholder="Lain lain">
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
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang1" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang1" value="Kompres hangat/dingin" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Kompres hangat/dingin </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang2" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang2" value="Istirahat" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Istirahat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang3" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang3" value="Minum obat" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Minum obat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang4" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang4" value="Berubah posisi" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang4">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Berubah posisi </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang5" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang5" value="Tidak ada" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnBerkurang5">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak ada </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_ASESMEN_ULANGPERAWATGIGI_textBertambahParah2" name="EMR_ASESMEN_ULANGPERAWATGIGI_textBertambahParah2" value="" class="form-control collapse" maxlength="30" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN3_2">
                                <span>Gambaran rasa nyeri?</span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran1" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran1" value="Seperti ditimpa benda berat" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti ditimpa benda berat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran2" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran2" value="Seperti Ditarik" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Ditarik </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran3" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran3" value="Seperti Ditusuk" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Ditusuk</label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran4" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran4" value="Seperti Dipukul" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran4">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Dipukul </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran5" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran5" value="Seperti Dibakar" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran5">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Dibakar </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran6" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran6" value="Seperti Berdenyut" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran6">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Berdenyut </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran7" name="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran7" value="Seperti Kram" class="md-check">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_CbtnGambaran7">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Kram </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_ASESMEN_ULANGPERAWATGIGI_textGambaran" name="EMR_ASESMEN_ULANGPERAWATGIGI_textGambaran" value="" class="form-control collapse" maxlength="30" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN3_3">
                                <span>Lokasi nyeri?</span>
                                <br>
                                <br>
                                <input type="text" id="EMR_ASESMEN_ULANGPERAWATGIGI_SNMenjalar1" name="EMR_ASESMEN_ULANGPERAWATGIGI_SNMenjalar1" value="" class="form-control" maxlength="30" placeholder="Lokasi nyeri">
                                <br>
                                <span>Apakah menjalar?</span>
                                <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_MenjalarY" name="EMR_ASESMEN_ULANGPERAWATGIGI_Menjalar" class="md-radiobtn" value="MenjalarY">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_MenjalarY">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Ya </label>
                                </div>
                                <input type="text" id="EMR_ASESMEN_ULANGPERAWATGIGI_SNMenjalar2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SNMenjalar2" value="" class="form-control collapse" maxlength="30" placeholder="Lokasi menjalar">
                                <input type="hidden" id="EMR_ASESMEN_ULANGPERAWATGIGI_SNMenjalar2status" name="EMR_ASESMEN_ULANGPERAWATGIGI_SNMenjalar2status" value="Tidak" class="form-control">
                                <div class="md-radio">
                                    <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_MenjalarTD" name="EMR_ASESMEN_ULANGPERAWATGIGI_Menjalar" class="md-radiobtn" value="MenjalarTD">
                                    <label for="EMR_ASESMEN_ULANGPERAWATGIGI_MenjalarTD">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak </label>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN3_4">
                                <span>Skala nyeri:</span>
                                <br>
                                <br>
                                <div class="row">
                                  <div class="btn-group btn-group-solid" style="width:100%">
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3A_1" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot001.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3A_2" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot002.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3A_3" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot003.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3A_4" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot004.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3A_5" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot005.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3A_6" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot006.png'?>" style="height:50px"> </a>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="btn-group btn-group-solid" style="width:100%">
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3B_0" class="btn white" style="height:40px; width:80px;"><div style="color: black;">0</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3B_1" class="btn white" style="height:40px;"><div style="color: black;">1</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3B_2" class="btn white" style="height:40px; width:60px;"><div style="color: black;">2</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3B_3" class="btn white" style="height:40px;"><div style="color: black;">3</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3B_4" class="btn white" style="height:40px; width:60px;"><div style="color: black;">4</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3B_5" class="btn white" style="height:40px;"><div style="color: black;">5</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3B_6" class="btn white" style="height:40px; width:60px;"><div style="color: black;">6</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3B_7" class="btn white" style="height:40px;"><div style="color: black;">7</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3B_8" class="btn white" style="height:40px; width:60px;"><div style="color: black;">8</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3B_9" class="btn white" style="height:40px;"><div style="color: black;">9</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnSN3B_10" class="btn white" style="height:40px; width:60px;"><div style="color: black;">10</div></a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN3_5">
                                <span> Seberapa sering anda mengalami nyeri? </span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiapinsan1" name="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiapinsan" class="md-radiobtn" value="SetiapA1">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiapinsan1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Hilang timbul</label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiapinsan2" name="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiapinsan" class="md-radiobtn" value="SetiapA2">
                                        <label for="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiapinsan2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Nyeri terus menerus</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                                <div class="collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_setiapselamaapa">
                                  <input type="hidden" id="EMR_ASESMEN_ULANGPERAWATGIGI_ststsetiapselamaapa" value="tidak">
                                  <span>Setiap berapa lama timbul nyeri?</span>
                                  <center>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiap1" name="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiap" class="md-radiobtn" value="SetiapB1">
                                          <label for="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiap1">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> 1-2 Jam</label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiap2" name="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiap" class="md-radiobtn" value="SetiapB2">
                                          <label for="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiap2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> < 4 Jam</label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiap3" name="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiap" class="md-radiobtn" value="SetiapB3">
                                          <label for="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNsetiap3">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> > 4 Jam</label>
                                        </div>
                                        <input type="text" id="EMR_ASESMEN_ULANGPERAWATGIGI_SNlamawaktu" name="EMR_ASESMEN_ULANGPERAWATGIGI_SNlamawaktu" value="" class="form-control" maxlength="30" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                  </center>
                                </div>
                                <div class="collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_setiapselamaapa2">
                                  <input type="hidden" id="EMR_ASESMEN_ULANGPERAWATGIGI_ststsetiapselamaapa2" value="tidak">
                                  <span>Berapa lamanya waktu serangan?</span>
                                  <center>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNselama1" name="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNselama" class="md-radiobtn" value="SetiapC1">
                                          <label for="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNselama1">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> < 30 menit </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNselama2" name="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNselama" class="md-radiobtn" value="SetiapC2">
                                          <label for="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnSNselama2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> > 30 menit </label>
                                        </div>
                                        <input type="text" id="EMR_ASESMEN_ULANGPERAWATGIGI_SNlamawaktu2" name="EMR_ASESMEN_ULANGPERAWATGIGI_SNlamawaktu2" value="" class="form-control" maxlength="30" placeholder="Lain lain">
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
                                <button type="button" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN1Back" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                                <button type="button" id="EMR_ASESMEN_ULANGPERAWATGIGI_SN1Next" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
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

                              <span id="EMR_ASESMEN_ULANGPERAWATGIGI_SkorNyeri"><b> 0</b></span>
                            </div>
                            <div class="col-md-9">
                              Skala Nyeri :

                              <span id="EMR_ASESMEN_ULANGPERAWATGIGI_SkalaNyeri"><b>
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
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_Halaman3">
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
                                  <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnAlergiOYA" name="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnAlergiO" class="md-radiobtn" value="AlergiYa">
                                  <label for="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnAlergiOYA">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Ya </label>
                                </div>
                                <div class="md-radio">
                                  <input type="radio" id="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnAlergiOTIDAK" name="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnAlergiO" class="md-radiobtn" value="AlergiTD">
                                  <label for="EMR_ASESMEN_ULANGPERAWATGIGI_RbtnAlergiOTIDAK">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Tidak </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          </center>
                          <div id="EMR_ASESMEN_ULANGPERAWATGIGI_InputAlergiObat" class="form-group collapse">
                          </br>
                            <label for="form_control_1">Masukkan Alergi</label>
                            <textarea class="form-control" id="EMR_ASESMEN_ULANGPERAWATGIGI_alergiobat" name="EMR_ASESMEN_ULANGPERAWATGIGI_alergiobat"></textarea>
                            <input type="hidden" id="EMR_ASESMEN_ULANGPERAWATGIGI_alergiobatstatus" value="Tidak" class="form-control">
                            <input type="hidden" id="EMR_ASESMEN_ULANGPERAWATGIGI_alergi" name="EMR_ASESMEN_ULANGPERAWATGIGI_alergi" value="<?php echo $alergiobat ?>">
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
                            <textarea class="form-control" id="EMR_ASESMEN_ULANGPERAWATGIGI_catatan" name="EMR_ASESMEN_ULANGPERAWATGIGI_catatan" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                            <label for="form_control_1">Catatan Perawat</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_Halaman4">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-title tabbable-line">
                          <div class="caption">
                            <span class="caption-subject font-dark bold">Tanda Vital</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-12">
                              <span>TD : </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilSistolik"></span><span>/</span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilDiastolik"></span><span> mmHg</span><br>
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
                              <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilNyeri"></span><br>
                              <div class="collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilNyeri_tampilan">
                              <?php
                                if($Utahun < 1)
                                {?>
                                    <span>a. Facial Expression (ekspresi wajah)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilNIPSA"></span><br>
                                    <span>b. Cry (menangis)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilNIPSB"></span><br>
                                    <span>c. Breathing Patterns (pola pernafasan)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilNIPSC"></span><br>
                                    <span>d. Arms(lengan)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilNIPSD"></span><br>
                                    <span>e. Legs(kaki)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilNIPSE"></span><br>
                                    <span>f. State of Arousal (kesadaran)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilNIPSF"></span><br>
                                <?php
                                }
                                else if($Utahun < 4)
                                {?>
                                    <span>a. Face Expression (ekspresi wajah)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilFLACCA"></span><br>
                                    <span>b. Leg (Kaki)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilFLACCB"></span><br>
                                    <span>c. Activity (Aktivitas)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilFLACCC"></span><br>
                                    <span>d. Cry (Menangis)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilFLACCD"></span><br>
                                    <span>e. Consolalability (respon terhadap himbauan)? <br><b>Jawaban:</b> </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilFLACCE"></span><br>
                                <?php
                                }
                                else
                                {?>
                                    <span>Apa yang membuat nyeri bertambah parah? <br><b>Jawaban:</b> </span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilTambahParah1"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilTambahParah2"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilTambahParah3"></span><br>
                                    <span>Apa yang membuat nyeri berkurang? <br><b>Jawaban:</b> </span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilBerkurang1"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilBerkurang2"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilBerkurang3"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilBerkurang4"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilBerkurang5"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilBerkurang6"></span><br>
                                    <span>Gambaran rasa nyeri? <br><b>Jawaban:</b> </span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilGambaran1"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilGambaran2"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilGambaran3"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilGambaran4"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilGambaran5"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilGambaran6"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilGambaran7"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilGambaran8"></span><br>
                                    <span>Lokasi nyeri? <br><b>Jawaban:</b> </span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilLokasiNyeri1"></span>
                                    <span>, dan </span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilLokasiNyeri2"></span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilLokasiNyeri3"></span><br>
                                    <span>Seberapa sering anda mengalami nyeri? <br><b>Jawaban:</b> </span>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilLamaNyeri1"></span><br>
                                    <div class="collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_NyeriAkhir">
                                      <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Setiap berapa lama timbul nyeri? <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Jawaban:</b> </span>
                                      <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilLamaNyeri2"></span><br>
                                      <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berapa lamanya waktu serangan? <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Jawaban:</b> </span>
                                      <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilLamaNyeri3"></span><br>
                                    </div>
                                <?php
                                }
                                ?>
                                <br><span><b>Hasil Dari Keluhan Nyeri Pasien</b></span><br>
                                <span>Skor Nyeri :</span>
                                <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilSkorNyeri"></span><br>
                                <span>Skala Nyeri :</span>
                                  <?php
                                  if($Utahun < 1)
                                  {
                                    ?>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilSkalaNyeri"></span>
                                    <?php
                                  }
                                  else if($Utahun < 4)
                                  {
                                    ?>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilSkalaNyeri"></span>
                                    <?php
                                  }
                                  else
                                  {
                                    ?>
                                    <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilSkalaNyeri"></span>
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
                              <span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilAlergi"></span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilAlergi2"></span><br>
                              <span>Catatan Lain Untuk Pasien : </span><span id="EMR_ASESMEN_ULANGPERAWATGIGI_HasilCatatan"></span><br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--<div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_Halaman5">
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_Halaman6">
                  </div>-->
                  <div class="col-md-12">
                    <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                      <button type="button" id="EMR_ASESMEN_ULANGPERAWATGIGI_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                      <button type="button" id="EMR_ASESMEN_ULANGPERAWATGIGI_HalamanNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_HalamanDokter">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnHalaman1" class="btn white col-md-9">1. Anamnesa</button>
              <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnHalaman2" class="btn green col-md-1">2</button>
              <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnHalaman3" class="btn green col-md-1">3</button>
              <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnHalaman4" class="btn green col-md-1">4</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_ASESMEN_ULANGDOKTERGIGI_Halaman1">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-12">
                                  <div class="form-group form-md-line-input form-md-floating-label has-success">
                                      <textarea class="form-control" name="EMR_ASESMEN_ULANGDOKTERGIGI_Keluhan" id="EMR_ASESMEN_ULANGDOKTERGIGI_Keluhan" rows="3"></textarea>
                                      <label for="form_control_1">Keluhan Utama</label>
                                      <span class="help-block">Masukkan Keluhan Utama</span>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_Halaman2">
                    <div class="col-md-12">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                            <div class="col-md-12 portlet light bordered">
                              <div class="portlet-title tabbable-line">
                                <div class="caption">
                                  <span class="caption-subject font-dark bold">Tanda Vital</span>
                                </div>
                              </div>
                              <div class="portlet-body">
                                <div class="tab-content">
                                  <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                    <div class="col-md-12 portlet light bordered">
                                      <div class="portlet-body">
                                        <div class="tab-content">
                                          <div class="col-md-6">
                                            <!--<div class="form-group form-md-line-input has-success form-md-floating-label">-->
                                                <div class="form-group form-md-line-input">
                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_TDSistolik" name="EMR_ASESMEN_ULANGDOKTERGIGI_TDSistolik" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                                    <label for="form_control_1">Sistolik</label>
                                                    <span class="help-block">Masukkan Sistolik</span>
                                                    <i style="font-size:12px"><b>mmHg&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</b></i>
                                                  </div>
                                                <!--<input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_TDSistolik" name="EMR_ASESMEN_ULANGDOKTERGIGI_TDSistolik" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                                <label for="form_control_1">Sistolik</label>
                                                <span class="help-block">Masukkan Sistolik</span>
                                                <i style="font-size:12px"><b>mmHg&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</b></i>-->
                                              </div>
                                            <!--</div>-->
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_TDDiastolik" name="EMR_ASESMEN_ULANGDOKTERGIGI_TDDiastolik" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                                <label for="form_control_1">Diastolik</label>
                                                <span class="help-block">Masukkan Diastolik</span>
                                                <i style="font-size:12px"><b>mmHg</b></i>
                                              </div>
                                            <!--<div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_TDDiastolik" name="EMR_ASESMEN_ULANGDOKTERGIGI_TDDiastolik" value="" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                                <label for="form_control_1">Diastolik</label>
                                                <span class="help-block">Masukkan Diastolik</span>
                                                <i style="font-size:12px"><b>mmHg</b></i>
                                              </div>-->
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
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="col-md-12 portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                  <div class="caption">
                                    <span class="caption-subject font-dark bold">Ekstra Oral</span>
                                  </div>
                                </div>
                                <div class="portlet-body">
                                  <div class="tab-content">
                                    <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                      <div class="col-md-12">
                                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                                            <textarea class="form-control" name="EMR_ASESMEN_ULANGDOKTERGIGI_EksOral" id="EMR_ASESMEN_ULANGDOKTERGIGI_EksOral" rows="3"></textarea>
                                            <label for="form_control_1">Ekstra Oral</label>
                                            <span class="help-block">Masukkan Ekstra Oral</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="col-md-12 portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                  <div class="caption">
                                    <span class="caption-subject font-dark bold">Intra Oral</span>
                                  </div>
                                </div>
                                <div class="portlet-body">
                                  <div class="tab-content">
                                    <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                      <div class="col-md-12 portlet light bordered">
                                        <div class="portlet-title tabbable-line">
                                          <div class="caption">
                                            <span class="caption-subject font-dark bold">Intra Oral</span>
                                          </div>
                                        </div>
                                        <div class="portlet-body">
                                          <div class="tab-content">
                                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <div class="col-md-12">

                                                 <div class="panel bg-grey-steel bg-font-grey-steel">
                                                     <div class="panel-heading collapsed bg-grey-steel bg-font-grey-steel" data-toggle="collapse" href="#collapseOne" data-parent="#accordion" >
                                                         <h4 class="panel-title">
                                                             <a style="align:center"><center><b> Struktur Gigi <span id="EMR_ASESMEN_ULANGDOKTERGIGI_txtStruktur">Susu</span></b>

                                                             </center></a>
                                                         </h4>
                                                     </div>
                                                     <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                         <div class="panel-body">
                                                             <div style="margin-bottom:2em">
                                                             <table align="center">
                                                                 <tr>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruAtas8" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas8">8</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruAtas7" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas7">7</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruAtas6" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas6">6</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruAtas5" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas5">V</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruAtas4" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas4">IV</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruAtas3" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas3">III</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruAtas2" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas2">II</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruAtas1" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas1">I</button></td>
                                                                   <td width="6px" style="border-right:1px solid #333"></td>
                                                                   <td width="6px"></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruAtas1" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas1">I</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruAtas2" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas2">II</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruAtas3" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas3">III</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruAtas4" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas4">IV</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruAtas5" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas5">V</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruAtas6" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas6">6</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruAtas7" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas7">7</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruAtas8" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas8">8</button></td>
                                                                 </tr>
                                                                 <tr>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td colspan="6" align="center">Rahang Atas</td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                 </tr>
                                                                 <tr>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                 </tr>
                                                                 <tr>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                   <td width="6px" style="border-top:1px solid #333"></td>
                                                                 </tr>
                                                                 <tr>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                 </tr>
                                                                 <tr>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td colspan="6" align="center">Rahang Bawah</td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                   <td height="3px"></td>
                                                                 </tr>
                                                                 <tr>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruBawah8" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah8">8</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruBawah7" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah7">7</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruBawah6" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah6">6</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruBawah5" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah5">V</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruBawah4" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah4">IV</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruBawah3" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah3">III</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruBawah2" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah2">II</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKananBaruBawah1" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah1">I</button></td>
                                                                   <td width="6px" style="border-right:1px solid #333"></td>
                                                                   <td width="6px"></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruBawah1" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah1">I</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruBawah2" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah2">II</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruBawah3" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah3">III</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruBawah4" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah4">IV</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruBawah5" style="width:40px" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah5">V</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruBawah6" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah6">6</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruBawah7" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah7">7</button></td>
                                                                   <td><button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnGigiKiriBaruBawah8" style="width:40px; visibility:hidden;" data-toggle="modal" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah8">8</button></td>
                                                                 </tr>
                                                             </table>
                                                             </div>
                                                              </br>
                                                             <left>
                                                                 <button type="button" class="btn btn-info" data-toggle="collapse" data-toggle="tooltip" title="Klik untuk merubah struktur gigi" data-target="#demo1,#demo2,#demo3,#demo4" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnStruktur" onclick="StrukturGigi()" style="position:block; margin-top:-1em; margin-bottom:1em;">Ganti Struktur Gigi</button>
                                                             </left>
                                                         </div>
                                                     </div>
                                                 </div>

                                                <!-- Mulai Modals Gigi -->

                                                 <!-- Modals Gigi Kiri Baru Atas 1-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas1" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">

                                                     <div class="form-group modal-header bg-blue-sharp">
                                                       <div class="row md-modal-header">
                                                         <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kiri_baru_atas_1">
                                                           <div class="modal-header bg-green col-md-4">
                                                             <table align="center" border="0">
                                                                 <tr>
                                                                     <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">I</span></td>
                                                                 </tr>
                                                             </table>
                                                           </div>
                                                           <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                             <h4 class="modal-title"><center>Gigi Kiri Atas I</center></h4>
                                                           </div>
                                                         </div>
                                                         <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kiri_baru_atas_1">
                                                           <div class="modal-header bg-green col-md-4">
                                                             <table align="center" border="0">
                                                                 <tr>
                                                                     <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">1</span></td>
                                                                 </tr>
                                                             </table>
                                                           </div>
                                                           <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                             <h4 class="modal-title"><center>Gigi Kiri Atas 1</center></h4>
                                                           </div>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA1" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA1" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA1" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA1" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>
                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kiri_baru_atas_1">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA1_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA1_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRA1" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriAtas1();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRA1" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Atas 2-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas2" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kiri_baru_atas_2">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">II</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Atas II</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kiri_baru_atas_2">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">2</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Atas 2</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA2" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA2" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA2" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA2" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>
                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kiri_baru_atas_2">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA2_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA2_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRA2" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriAtas2();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRA2" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Atas 3-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas3" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kiri_baru_atas_3">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">III</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Atas III</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kiri_baru_atas_3">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">3</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Atas 3</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA3" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA3" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA3" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA3" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>
                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kiri_baru_atas_3">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA3_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA3_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                          </div>
                                                      </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRA3" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriAtas3();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRA3" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                  </div>

                                                 <!-- Modals Gigi Kiri Baru Atas 4-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas4" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kiri_baru_atas_4">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">IV</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Atas IV</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kiri_baru_atas_4">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">4</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Atas 4</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA4" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA4" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA4" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA4" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                              <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kiri_baru_atas_4">
                                                                 <div class="col-md-12">
                                                                   <div class="col-md-6">
                                                                     <div class="md-radio-inline">
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4" class="md-radiobtn" value="Belum Erupsi">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P1">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Belum Erupsi </label>
                                                                         </div>
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4" class="md-radiobtn" value="Erupsi Sebagian">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P2">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Erupsi Sebagian </label>
                                                                         </div>
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4" class="md-radiobtn" value="Anomali Bentuk">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P3">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Anomali Bentuk </label>
                                                                         </div>
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4" class="md-radiobtn" value="Karies">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4_P4">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Karies </label>
                                                                         </div>
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4" class="md-radiobtn" value="Non Vital">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P5">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Non Vital </label>
                                                                         </div>
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4" class="md-radiobtn" value="Tambalan Logam">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4_P8">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Tambalan Logam </label>
                                                                         </div>
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4" class="md-radiobtn" value="Tambalan Non Logam">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4_P9">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Tambalan Non Logam </label>
                                                                         </div>
                                                                     </div>
                                                                   </div>
                                                                   <div class="col-md-6">
                                                                     <div class="md-radio-inline">
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4" class="md-radiobtn" value="Mahkota Logam">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4_P10">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Mahkota Logam </label>
                                                                         </div>
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4" class="md-radiobtn" value="Mahkota Non Logam">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA4_P11">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Mahkota Non Logam </label>
                                                                         </div>
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4" class="md-radiobtn" value="Sisa Akar">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P12">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Sisa Akar </label>
                                                                         </div>
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4" class="md-radiobtn" value="Gigi Hilang">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P13">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Gigi Hilang </label>
                                                                         </div>
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4" class="md-radiobtn" value="Jembatan">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P14">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Jembatan </label>
                                                                         </div>
                                                                         <div class="md-radio">
                                                                             <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                             <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA4_P15">
                                                                                 <span></span>
                                                                                 <span class="check"></span>
                                                                                 <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                         </div>
                                                                     </div>
                                                                   </div>
                                                                 </div>
                                                              </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRA4" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriAtas4();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRA4" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Atas 5-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas5" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kiri_baru_atas_5">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">V</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Atas V</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kiri_baru_atas_5">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">5</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Atas 5</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA5" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA5" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA5" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA5" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>
                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kiri_baru_atas_5">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA5_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA5_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRA5" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriAtas5();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRA5" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Atas 6-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas6" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">6</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Atas 6</center></h4>
                                                         </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA6" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA6" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA6">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA6" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA6" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA6">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>
                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA6_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA6_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRA6" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriAtas6();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRA6" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Atas 7-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas7" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">7</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Atas 7</center></h4>
                                                         </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA7" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA7" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA7">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA7" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA7" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA7">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA7_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA7_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRA7" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriAtas7();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRA7" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Atas 8-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruAtas8" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">8</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Atas 8</center></h4>
                                                         </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA8" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA8" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRA8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA8" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRA8" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRA8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRA8_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRA8_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRA8" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriAtas8();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRA8" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Bawah 1-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah1" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kiri_baru_bawah_1">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">II</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah I</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kiri_baru_bawah_1">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">1</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah 1</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB1" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB1" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB1" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB1" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kiri_baru_bawah_1">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB1_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB1_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRB1" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriBawah1();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRB1" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Bawah 2-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah2" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kiri_baru_bawah_2">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">II</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah II</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kiri_baru_bawah_2">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">2</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah 2</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB2" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB2" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB2" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB2" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kiri_baru_bawah_2">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB2_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB2_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRB2" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriBawah2();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRB2" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Bawah 3-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah3" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kiri_baru_bawah_3">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">III</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah III</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kiri_baru_bawah_3">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">3</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah 3</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB3" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB3" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB3" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB3" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kiri_baru_bawah_3">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB3_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB3_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRB3" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriBawah3();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRB3" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Bawah 4-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah4" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kiri_baru_bawah_4">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">IV</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah IV</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kiri_baru_bawah_4">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">4</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah 4</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB4" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB4" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB4" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB4" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kiri_baru_bawah_4">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB4_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB4_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRB4" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriBawah4();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRB4" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Bawah 5-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah5" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kiri_baru_bawah_5">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">V</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah V</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kiri_baru_bawah_5">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">5</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah 5</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB5" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB5" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB5" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB5" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kiri_baru_bawah_5">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB5_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB5_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRB5" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriBawah5();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRB5" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Bawah 6-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah6" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">6</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah 6</center></h4>
                                                         </div>
                                                       </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB6" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB6" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB6">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB6" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB6" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB6">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB6_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB6_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRB6" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriBawah6();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRB6" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Bawah 7-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah7" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">7</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah 7</center></h4>
                                                         </div>
                                                       </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB7" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB7" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB7">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB7" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB7" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB7">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB7_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB7_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRB7" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriBawah7();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRB7" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kiri Baru Bawah 8-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKiriBaruBawah8" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">8</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kiri Bawah 8</center></h4>
                                                         </div>
                                                       </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB8" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB8" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GRB8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB8" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GRB8" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GRB8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GRB8_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GRB8_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GRB8" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKiriBawah8();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GRB8" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Bawah 1-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah1" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kanan_baru_bawah_1">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">I</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah I</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kanan_baru_bawah_1">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">1</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah 1</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB1" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB1" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB1" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB1" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kanan_baru_bawah_1">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB1_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB1_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLB1" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananBawah1();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLB1" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Bawah 2-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah2" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kanan_baru_bawah_2">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">II</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah II</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kanan_baru_bawah_2">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">2</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah 2</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB2" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB2" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB2" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB2" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kanan_baru_bawah_2">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB2_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB2_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLB2" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananBawah2();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLB2" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Bawah 3-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah3" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kanan_baru_bawah_3">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">III</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah III</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kanan_baru_bawah_3">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">3</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah 3</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB3" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB3" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB3" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB3" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kanan_baru_bawah_3">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB3_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB3_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLB3" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananBawah3();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLB3" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Bawah 4-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah4" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kanan_baru_bawah_4">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">IV</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah IV</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kanan_baru_bawah_4">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">4</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah 4</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB4" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB4" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB4" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB4" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kanan_baru_bawah_4">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB4_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB4_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLB4" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananBawah4();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLB4" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Bawah 5-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah5" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kanan_baru_bawah_5">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">V</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah V</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kanan_baru_bawah_5">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">5</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah 5</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB5" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB5" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB5" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB5" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kanan_baru_bawah_5">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB5_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB5_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLB5" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananBawah5();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLB5" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Bawah 6-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah6" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">6</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah 6</center></h4>
                                                         </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB6" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB6" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB6">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB6" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB6" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB6">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB6_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB6_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLB6" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananBawah6();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLB6" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Bawah 7-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah7" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">7</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah 7</center></h4>
                                                         </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB7" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB7" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB7">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB7" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB7" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB7">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB7_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB7_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLB7" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananBawah7();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLB7" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Bawah 8-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruBawah8" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">8</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Bawah 8</center></h4>
                                                         </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB8" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB8" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLB8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB8" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLB8" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLB8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLB8_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLB8_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLB8" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananBawah8();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLB8" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Atas 1-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas1" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kanan_baru_atas_1">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">I</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas I</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kanan_baru_atas_1">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">1</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas 1</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA1" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA1" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA1" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA1" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kanan_baru_atas_1">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA1_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA1_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLA1" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananAtas1();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLA1" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Atas 2-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas2" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kanan_baru_atas_2">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">II</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas II</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kanan_baru_atas_2">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">2</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas 2</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA2" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA2" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA2" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA2" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kanan_baru_atas_2">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA2_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA2_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLA2" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananAtas2();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLA2" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Atas 3-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas3" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kanan_baru_atas_3">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">III</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas III</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kanan_baru_atas_3">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">3</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas 3</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA3" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA3" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA3" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA3" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kanan_baru_atas_3">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA3_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA3_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLA3" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananAtas3();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLA3" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Atas 4-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas4" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kanan_baru_atas_4">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">IV</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas IV</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kanan_baru_atas_4">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">4</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas 4</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA4" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA4" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA4" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA4" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kanan_baru_atas_4">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA4_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA4_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLA4" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananAtas4();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLA4" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Atas 5-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas5" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                       <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_header_kanan_baru_atas_5">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">V</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas V</center></h4>
                                                         </div>
                                                       </div>
                                                       <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_permanen_header_kanan_baru_atas_5">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">5</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas 5</center></h4>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA5" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA5" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA5" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA5" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="form-group" id="EMR_ASESMEN_ULANGDOKTERGIGI_susu_body_kanan_baru_atas_5">
                                                               <div class="col-md-12">
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5" class="md-radiobtn" value="Belum Erupsi">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P1">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Belum Erupsi </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5" class="md-radiobtn" value="Erupsi Sebagian">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P2">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Erupsi Sebagian </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5" class="md-radiobtn" value="Anomali Bentuk">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P3">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Anomali Bentuk </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5" class="md-radiobtn" value="Karies">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5_P4">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Karies </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5" class="md-radiobtn" value="Non Vital">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P5">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Non Vital </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5" class="md-radiobtn" value="Tambalan Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5_P8">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5" class="md-radiobtn" value="Tambalan Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5_P9">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Tambalan Non Logam </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                   <div class="md-radio-inline">
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5" class="md-radiobtn" value="Mahkota Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5_P10">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5" class="md-radiobtn" value="Mahkota Non Logam">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA5_P11">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Mahkota Non Logam </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5" class="md-radiobtn" value="Sisa Akar">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P12">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Sisa Akar </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5" class="md-radiobtn" value="Gigi Hilang">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P13">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Hilang </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5" class="md-radiobtn" value="Jembatan">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P14">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Jembatan </label>
                                                                       </div>
                                                                       <div class="md-radio">
                                                                           <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                           <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA5_P15">
                                                                               <span></span>
                                                                               <span class="check"></span>
                                                                               <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                       </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLA5" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananAtas5();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLA5" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Atas 6-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas6" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">6</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas 6</center></h4>
                                                         </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA6" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA6" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA6">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA6" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA6" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA6">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA6_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA6_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLA6" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananAtas6();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLA6" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Atas 7-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas7" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">7</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas 7</center></h4>
                                                         </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA7" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA7" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA7">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA7" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA7" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA7">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA7_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA7_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLA7" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananAtas7();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLA7" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                 <!-- Modals Gigi Kanan Baru Atas 8-->
                                                 <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ModalGigiKananBaruAtas8" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
                                                   <div class="form-group modal-header bg-blue-sharp">
                                                     <div class="row md-modal-header">
                                                         <div class="modal-header bg-green col-md-4">
                                                           <table align="center" border="0">
                                                               <tr>
                                                                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">8</span></td>
                                                               </tr>
                                                           </table>
                                                         </div>
                                                         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
                                                           <h4 class="modal-title"><center>Gigi Kanan Atas 8</center></h4>
                                                         </div>
                                                     </div>
                                                   </div>
                                                     <div class="modal-body">
                                                         <center>
                                                         <div class="form-group">
                                                             <div class="input-group">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA8" checked name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA8" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C1_GLA8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Ada </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA8" name="EMR_ASESMEN_ULANGDOKTERGIGI_radio_GLA8" class="md-radiobtn">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_C2_GLA8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tidak Ada </label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         </center>

                                                         <div class="form-group form-md-checkboxes">
                                                             <label>Penyakit Gigi</label>
                                                             <div class="col-md-12">
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P1" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8" class="md-radiobtn" value="Belum Erupsi">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P1">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Belum Erupsi </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P2" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8" class="md-radiobtn" value="Erupsi Sebagian">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P2">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Erupsi Sebagian </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P3" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8" class="md-radiobtn" value="Anomali Bentuk">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P3">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Anomali Bentuk </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8_P4" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8" class="md-radiobtn" value="Karies">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8_P4">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Karies </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P5" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8" class="md-radiobtn" value="Non Vital">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P5">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Non Vital </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8_P8" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8" class="md-radiobtn" value="Tambalan Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8_P8">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8_P9" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8" class="md-radiobtn" value="Tambalan Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8_P9">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Tambalan Non Logam </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                 <div class="md-radio-inline">
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8_P10" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8" class="md-radiobtn" value="Mahkota Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8_P10">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8_P11" name="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8" class="md-radiobtn" value="Mahkota Non Logam">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_WR_GLA8_P11">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Mahkota Non Logam </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P12" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8" class="md-radiobtn" value="Sisa Akar">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P12">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Sisa Akar </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P13" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8" class="md-radiobtn" value="Gigi Hilang">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P13">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Hilang </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P14" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8" class="md-radiobtn" value="Jembatan">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P14">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Jembatan </label>
                                                                     </div>
                                                                     <div class="md-radio">
                                                                         <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P15" name="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8" class="md-radiobtn" value="Gigi Tiruan Lepas">
                                                                         <label for="EMR_ASESMEN_ULANGDOKTERGIGI_SL_GLA8_P15">
                                                                             <span></span>
                                                                             <span class="check"></span>
                                                                             <span class="box"></span> Gigi Tiruan Lepas </label>
                                                                     </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button class="btn btn-secondary-outline" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rbtn_GLA8" onclick="javascript: EMR_ASESMEN_ULANGDOKTERGIGI_BatalKananAtas8();" data-dismiss="modal">Batal</button>
                                                         <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obtn_GLA8" data-dismiss="modal" class="btn green">Oke</button>
                                                     </div>
                                                 </div>

                                                <!-- Selesai Modals Gigi -->

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
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_Halaman3">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-12">
                                <div class="form-group form-md-line-input form-md-floating-label has-success">
                                    <textarea class="form-control" name="EMR_ASESMEN_ULANGDOKTERGIGI_Diagnosis" id="EMR_ASESMEN_ULANGDOKTERGIGI_Diagnosis" rows="3"></textarea>
                                    <label for="form_control_1">Diagnosis</label>
                                    <span class="help-block">Masukkan Diagnosis</span>
                                </div>
                                <div class="form-group form-md-line-input form-md-floating-label has-success">
                                    <textarea class="form-control" name="EMR_ASESMEN_ULANGDOKTERGIGI_DiagnosisBanding" id="EMR_ASESMEN_ULANGDOKTERGIGI_DiagnosisBanding" rows="3"></textarea>
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
                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_Halaman4">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obat" name="EMR_ASESMEN_ULANGDOKTERGIGI_Obat" value="" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGDOKTERGIGI_Obat">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Obat </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obat2">
                                  <div class="row">
                                    <a class="btn btn-outline blue" href="#EMR_ASESMEN_ULANGDOKTERGIGI_ObatModal" data-toggle="modal"> Obat </a>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                                <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatModal" class="modal" data-width="100%" style="width:90%;">
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
                                        <a type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatbtnObatSatuan" class="btn disabled white" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Satuan</b></a>
                                        <a type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatbtnObatRacik" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Racik</b></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-body">
                                    <input type="hidden" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatstatObat" value="Satuan">
                                    <div class="row" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatformObatSatuan">
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
                                                      <input type="text" name="EMR_ASESMEN_ULANGDOKTERGIGI_Obatobatsatuan[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>
                                                      <input type="hidden" name="EMR_ASESMEN_ULANGDOKTERGIGI_Obatidobatsatuan[]" class="form-control project"/>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                      <label class="control-label" style="font-size:14px">Jumlah Obat</label>
                                                      <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanJumlah" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanJumlah[]" placeholder="Jumlah" class="form-control"/>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                  <div class="col-md-12">
                                                    <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <div class="col-md-3">
                                                      <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanAturanPakai1" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanAturanPakai1[]" class="form-control"/>
                                                    </div>
                                                    <div class="col-md-1">
                                                      <p class="form-control-static"> dd </p>
                                                    </div>
                                                    <div class="col-md-3">
                                                      <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanAturanPakai2" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanAturanPakai2[]" class="form-control"/>
                                                    </div>
                                                    <div class="col-md-5">
                                                      <select class="form-control" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanAturanPakai3" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanAturanPakai3[]">
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
                                                      <select class="form-control" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanKetPakai1" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanKetPakai1[]">
                                                            <option value="a.c.">a.c.</option>
                                                            <option value="p.c.">p.c.</option>
                                                            <option value="d.c.">d.c.</option>
                                                            <option value="ad.lib.">ad.lib.</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <select class="form-control" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanKetPakai2" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanKetPakai2[]">
                                                            <option value="p.r.n.">p.r.n.</option>
                                                            <option value="Sampai Habis">Sampai Habis</option>
                                                        </select>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                  <div class="col-md-12">
                                                      <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanLain" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatSatuanLain[]" class="form-control" placeholder="Lain-lain"/>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="EMR_ASESMEN_ULANGDOKTERGIGI_Obatdiv1Satuan">
                                      </div>
                                      <div class="col-md-4" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obatdiv_buttonSatuan">
                                        <center>
                                          <a class="btn green-jungle col-md-12" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObattambahSatuan" value="Tambah Data" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObattambahSatuan" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                                        </center>
                                      </div>
                                    </div>
                                    <div class="collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatformObatRacik">
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
                                                            <input type="text" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatobatsatuanRacik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                                            <input type="hidden" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatidobatsatuanRacik[]" value="" class="form-control project_racik"/>
                                                            <input type="hidden" value="RACIK_0001" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatidRacik" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatidRacik[]" class="form-control" />
                                                          </div>
                                                        </div>
                                                        </br>
                                                        <div class="row mt-repeater-row">
                                                          <div class="col-md-4">
                                                            <label class="control-label" style="font-size:14px">Jumlah</label>
                                                            <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikJumlahBahan" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikJumlahBahan[]" placeholder="Jumlah" class="form-control"/>
                                                          </div>
                                                          <div class="col-md-6">
                                                            <label class="control-label" style="font-size:14px">Satuan</label>
                                                            <select class="form-control" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikSatuan" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikSatuan[]">
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
                                                    <div id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatdivracikBahan1"></div>
                                                    <div id="EMR_ASESMEN_ULANGDOKTERGIGI_Obatdiv_buttonracikBahan1">
                                                      <a class="btn blue EMR_ASESMEN_ULANGDOKTERGIGI_ObattambahRacikBahan-click col-md-12" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObattambahRacikBahan" value="Tambah Data" data-todo='{"number":"1"}'><i class="fa fa-plus"></i> Tambah Bahan</a>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row">
                                                    <div class="col-md-12">
                                                      <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Detail Obat</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-8">
                                                          <select class="form-control" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikAturanBahan" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikAturanBahan[]">
                                                                <option selected="selected" value="m.f.da.in caps.dtd">m.f.da.in caps.dtd</option>
                                                                <option value="m.f.l.a.pulv.dtd">m.f.l.a.pulv.dtd</option>
                                                                <option value="m.f.da.in caps">m.f.da.in caps</option>
                                                                <option value="m.f.l.a.pulv">m.f.l.a.pulv</option>
                                                                <option value="m.f.krim">m.f.krim</option>
                                                                <option value="m.f.da.in.bottle">m.f.da.in.bottle</option>
                                                            </select>
                                                          </div>
                                                        <div class="col-md-4">
                                                          <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikJumlahRacik" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikJumlahRacik[]" placeholder="Jumlah" class="form-control"/>
                                                        </div>
                                                      </br>
                                                      <div class="col-md-8">
                                                          <input type="hidden" value="RACIK_0001" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatidRacik_2" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatidRacik_2[]" class="form-control" />
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                    <div class="col-md-12">
                                                      <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Aturan Pakai</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="col-md-3">
                                                        <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikAturanPakai1" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikAturanPakai1[]" class="form-control" />
                                                      </div>
                                                      <div class="col-md-1">
                                                        <p class="form-control-static"> dd </p>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikAturanPakai2" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikAturanPakai2[]" class="form-control" />
                                                      </div>
                                                      <div class="col-md-5">
                                                        <select class="form-control" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikAturanPakai3" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikAturanPakai3[]" >
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
                                                        <select class="form-control" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikKetPakai1" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikKetPakai1[]" >
                                                            <option value="a.c.">a.c.</option>
                                                            <option value="p.c.">p.c.</option>
                                                            <option value="d.c.">d.c.</option>
                                                            <option value="ad.lib.">ad.lib.</option>
                                                        </select>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <select class="form-control" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikKetPakai2" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikKetPakai2[]" >
                                                            <option value="p.r.n.">p.r.n.</option>
                                                            <option value="Sampai Habis">Sampai Habis</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                                    <div class="col-md-12">
                                                        <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikLain" name="EMR_ASESMEN_ULANGDOKTERGIGI_ObatRacikLain[]" class="form-control" placeholder="Lain-lain"/>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div id="EMR_ASESMEN_ULANGDOKTERGIGI_Obatdivracikobat"></div>
                                        <div class="col-md-4" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obatdiv_buttonracikobat">
                                          <center>
                                            <a class="btn green-jungle col-md-12" name="EMR_ASESMEN_ULANGDOKTERGIGI_Obattambahracikobat" value="Tambah Data" id="EMR_ASESMEN_ULANGDOKTERGIGI_Obattambahracikobat" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
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
                                    <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_Radiologi" name="EMR_ASESMEN_ULANGDOKTERGIGI_Radiologi" value="" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGDOKTERGIGI_Radiologi">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Radiologi </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_Radiologi2">
                                  <div class="row">
                                    <a class="btn btn-outline blue" href="#EMR_ASESMEN_ULANGDOKTERGIGI_RadiologiModal" data-toggle="modal"> Radiologi </a>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                                <div id="EMR_ASESMEN_ULANGDOKTERGIGI_RadiologiModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
                                                  <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_radiologi_checkbox" name="EMR_ASESMEN_ULANGDOKTERGIGI_radiologi_checkbox[]" value="<?php echo $row->KODE_DT_RADIO;?>">
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
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_radiologi_lain" name="EMR_ASESMEN_ULANGDOKTERGIGI_radiologi_lain" value="DTR_0000">
                                        Lain-Lain
                                        <span></span>
                                        </label>
                                        <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_radiologi_lain1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_radiologi_lain2" name="EMR_ASESMEN_ULANGDOKTERGIGI_radiologi_lain2" class="form-control">
                                                    <label for="form_control">Radiologi Lain</label>
                                                    <span class="help-block">Masukkan Radiologi</span>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_Gigi_Satuan" name="EMR_ASESMEN_ULANGDOKTERGIGI_Gigi_Satuan" value="DTR_G000">
                                        Gigi Satuan
                                        <span></span>
                                        </label>
                                        <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_Gigi_Satuan1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_Gigi_Satuan2" name="EMR_ASESMEN_ULANGDOKTERGIGI_Gigi_Satuan2" class="form-control">
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
                                        <button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_reset_radio" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                    </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_Laborat" name="EMR_ASESMEN_ULANGDOKTERGIGI_Laborat" value="" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGDOKTERGIGI_Laborat">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Laboratorium </label>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_Laborat2">
                                  <div class="row">
                                    <a class="btn btn-outline blue" href="#EMR_ASESMEN_ULANGDOKTERGIGI_LaboratModal" data-toggle="modal"> Laboratorium </a>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                                <div id="EMR_ASESMEN_ULANGDOKTERGIGI_LaboratModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
                                                  <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_laboratorium_checkbox" name="EMR_ASESMEN_ULANGDOKTERGIGI_laboratorium_checkbox[]" value="<?php echo $row->KODE_DT_LABORATORIUM;?>">
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
                                        <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_laboratorium_lain" name="EMR_ASESMEN_ULANGDOKTERGIGI_laboratorium_lain" value="DTL_0000">
                                        Lain-Lain
                                        <span></span>
                                        </label>
                                        <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_laboratorium_lain1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_laboratorium_lain2" name="EMR_ASESMEN_ULANGDOKTERGIGI_laboratorium_lain2" class="form-control">
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
                                        <button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANGDOKTERGIGI_reset_laboratorium" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                    </div>
                                </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <div class="row">
                                    <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rujukan" name="EMR_ASESMEN_ULANGDOKTERGIGI_Rujukan" value="" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGDOKTERGIGI_Rujukan">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tambah Data Rujukan </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_Rujukan2">
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
                                            <!--<div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.25em;">
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <label class="mt-checkbox mt-checkbox-outline">
                                                  <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_rahligizi" name="EMR_ASESMEN_ULANGDOKTERGIGI_rahligizi" value="Ahli Gizi" >
                                                  Ahli Gizi
                                                  <span></span>
                                                  </label>
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="mt-checkbox mt-checkbox-outline">
                                                  <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_rrehabilitasi" name="EMR_ASESMEN_ULANGDOKTERGIGI_rrehabilitasi" value="Rehabilitasi Medik" >
                                                  Rehabilitasi Medik
                                                  <span></span>
                                                  </label>
                                                </div>
                                              </div>
                                            </div>-->
                                            <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.5em;">
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <label class="mt-checkbox mt-checkbox-outline">
                                                  <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_rklinik" name="EMR_ASESMEN_ULANGDOKTERGIGI_rklinik" value="Klinik Spesialis" >
                                                  Klinik Spesialis
                                                  <span></span>
                                                  </label>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_rklinik_1">
                                                      <div class="form-group form-md-line-input">
                                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                              <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_rklinik_2" name="EMR_ASESMEN_ULANGDOKTERGIGI_rklinik_2" class="form-control">
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
                                                  <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_rlain" name="EMR_ASESMEN_ULANGDOKTERGIGI_rlain" value="lain" >
                                                  Lain - Lain
                                                  <span></span>
                                                  </label>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_rlain_1">
                                                      <div class="form-group form-md-line-input">
                                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                              <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_rlain_2" name="EMR_ASESMEN_ULANGDOKTERGIGI_rlain_2" class="form-control">
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
                                    <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_Edukasi" name="EMR_ASESMEN_ULANGDOKTERGIGI_Edukasi" value="" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGDOKTERGIGI_Edukasi">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Edukasi </label>
                                  </div>
                                </div>
                              </div>
                              <div class="row collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_edukasi_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <div class="form-group form-md-line-input">
                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_edukasi_2" name="EMR_ASESMEN_ULANGDOKTERGIGI_edukasi_2" class="form-control">
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
                                    <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_Prognosis" name="EMR_ASESMEN_ULANGDOKTERGIGI_Prognosis" value="" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGDOKTERGIGI_Prognosis">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Prognosis </label>
                                  </div>
                                </div>
                              </div>
                              <div class="row collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_Prognosis_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_prognosis1" name="EMR_ASESMEN_ULANGDOKTERGIGI_prognosis" class="md-radiobtn" value="NadiReguler" checked>
                                        <label for="EMR_ASESMEN_ULANGDOKTERGIGI_prognosis2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Bonam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_prognosis2" name="EMR_ASESMEN_ULANGDOKTERGIGI_prognosis" class="md-radiobtn" value="NadiIrreguler">
                                        <label for="EMR_ASESMEN_ULANGDOKTERGIGI_prognosis2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Malam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_prognosis3" name="EMR_ASESMEN_ULANGDOKTERGIGI_prognosis" class="md-radiobtn" value="NadiIrreguler">
                                        <label for="EMR_ASESMEN_ULANGDOKTERGIGI_prognosis3">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Dubia Ad Bonam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_ASESMEN_ULANGDOKTERGIGI_prognosis4" name="prognosis" class="md-radiobtn" value="NadiIrreguler">
                                        <label for="EMR_ASESMEN_ULANGDOKTERGIGI_prognosis4">
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
                                    <input type="checkbox" id="EMR_ASESMEN_ULANGDOKTERGIGI_KontrolK" name="EMR_ASESMEN_ULANGDOKTERGIGI_KontrolK" value="" class="md-check">
                                    <label for="EMR_ASESMEN_ULANGDOKTERGIGI_KontrolK">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Kontrol Kembali </label>
                                  </div>
                                </div>
                              </div>
                              <div class="row collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_KontrolK_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                          <input name="EMR_ASESMEN_ULANGDOKTERGIGI_KontrolK_2" id="EMR_ASESMEN_ULANGDOKTERGIGI_KontrolK_2" type="text" class="form-control" readonly>
                                          <span class="input-group-btn">
                                              <button class="btn default" type="button">
                                                  <i class="fa fa-calendar"></i>
                                              </button>
                                          </span>
                                      </div>
                                  </div>
                                    <!--<input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_KontrolK_2" name="EMR_ASESMEN_ULANGDOKTERGIGI_KontrolK_2" class="form-control">
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
                    <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                    <button type="button" id="EMR_ASESMEN_ULANGDOKTERGIGI_HalamanNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <!-- BEGIN TAB PORTLET-->
        <div class="portlet light portlet-fit bordered">
          <div class="row portlet-body">
            <div class="col-sm-12">
              <input type="hidden" id="EMR_ASESMEN_ULANGPERAWATGIGI_STATUSHALAMAN" value="perawat">
              <div class="row" id="EMR_ASESMEN_ULANGPERAWATGIGI_stepPerawat">
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
              <div class="row collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_stepDokter">
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
        <div id="EMR_ASESMEN_ULANGPERAWATGIGI_FrmRPerawat">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <input type="hidden" id="EMR_ASESMEN_ULANGPERAWATGIGI_statver" name="EMR_ASESMEN_ULANGPERAWATGIGI_statver" value="Perawat1">
            <div class="row portlet-body" id="EMR_ASESMEN_ULANGPERAWATGIGI_verPerPerawat">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data berikut, masukkan password anda terlebih dahulu sebagai proses verifikasi penginput data</p>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="password" id="EMR_ASESMEN_ULANGPERAWATGIGI_VerPassAsesmen" name="EMR_ASESMEN_ULANGPERAWATGIGI_VerPassAsesmen" class="form-control">
                    <label for="form_control_1">Masukkan Password</label>
                    <span class="help-block">Masukkan password</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="btn-group btn-group btn-group-justified">
                  <a id="EMR_ASESMEN_ULANGPERAWATGIGI_btnChangePerPerawat" class="btn red"> Klik disini apabila anda bukan <?php echo $level; ?> <?php echo $username; ?></a>
                </div>
              </div>
            </div>
            <div class="row portlet-body collapse" id="EMR_ASESMEN_ULANGPERAWATGIGI_verPerPerawat2">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda akan mengambil alih tanggung jawab proses pengisian data, kelengkapan pengisian data akan mempengaruhi penilaian anda</p>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_ASESMEN_ULANGPERAWATGIGI_userPerPerawat" name="EMR_ASESMEN_ULANGPERAWATGIGI_userPerPerawat" class="form-control">
                    <label for="form_control_1">Masukkan Username</label>
                    <span class="help-block">Masukkan Username</span>
                  </div>
                </div>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                  <input type="password" id="EMR_ASESMEN_ULANGPERAWATGIGI_passPerPerawat" name="EMR_ASESMEN_ULANGPERAWATGIGI_passPerPerawat" class="form-control">
                  <label for="form_control_1">Masukkan Password</label>
                  <span class="help-block">Masukkan Password</span>
                </div>
              </div>
              </div>
              <div class="col-sm-12">
                <div class="btn-group btn-group btn-group-justified">
                  <a id="EMR_ASESMEN_ULANGPERAWATGIGI_btnChangePerPerawat2" class="btn red"> Klik disini apabila anda <?php echo $level; ?> <?php echo $username; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="modalAlertCounter_perawat_gigi" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
                    <a type="button" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnselanjutnyaPerawat2" class="btn blue" data-dismiss="modal" style="width:50%">Ya</a>
                </div>
              </center>
            </div>
          </div>
        </div>
        <!--end user perawat-->
        <div class="collapse" id="EMR_ASESMEN_ULANGDOKTERGIGI_FrmRDokter">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <div class="row portlet-body">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data Rekam Medis berikut, masukkan password dokter <b><?php echo $namadokter; ?></b> di bawah ini terlebih dahulu sebagai proses verifikasi pengisi data.</p>
                <!--<div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_ASESMEN_ULANGDOKTERGIGI_userPerDokter" name="EMR_ASESMEN_ULANGDOKTERGIGI_userPerDokter" class="form-control">
                    <label for="form_control_1">Masukkan Username Dokter</label>
                    <span class="help-block">Masukkan Username Dokter</span>
                  </div>
                </div>-->
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                  <input type="password" id="EMR_ASESMEN_ULANGDOKTERGIGI_passPerDokter" name="EMR_ASESMEN_ULANGDOKTERGIGI_passPerDokter" class="form-control">
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
              <div id="alert-msg-EMR_ASESMEN_ULANGPERAWATGIGI"></div>
              <div id="EMR_ASESMEN_ULANGPERAWATGIGI_btnCommand" class="">
                <div class="btn-group btn-group btn-group-justified">
                    <button type="button" class="btn white" id="EMR_ASESMEN_ULANGPERAWATGIGI_btnselanjutnyaPerawat" name="EMR_ASESMEN_AWAL_btnselanjutnyaPerawat" style="width:100%" disabled="true">Selanjutnya</button>
                </div>
              </div>
              <div id="EMR_ASESMEN_ULANGDOKTERGIGI_btnCommand" class="collapse">
                <div class="btn-group btn-group btn-group-justified">
                  <input type="hidden" id="EMR_ASESMEN_ULANGPERAWATGIGI_userPerPerawatHalDok" name="EMR_ASESMEN_ULANGPERAWATGIGI_userPerPerawatHalDok" value="">
                    <button type="button" class="btn green" id="EMR_ASESMEN_ULANGDOKTERGIGI_btnsimpan" name="EMR_ASESMEN_ULANGDOKTERGIGI_btnsimpan" style="width:100%">Simpan</button>
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
