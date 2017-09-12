
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
            <center><span id="EMR_ASESMEN_AWAL_judulHalaman" class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">ASESMEN AWAL KEPERAWATAN PASIEN IGD</span></center>
          </div>
        </div>
        <div class="portlet light bordered" id="EMR_ASESMEN_AWAL_HalamanTriase">
          <div class="caption font-red-sunglo">
            <center>
              <span id="EMR_ASESMEN_AWAL_judulHalaman" class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">TRIASE : </span>

              <button class="btn bg-red bg-font-red" id="EMR_IGD_btnMerah" style="width:50%"><center><b> Merah </b></center></button></br>
              <button class="btn bg-yellow-lemon bg-font-yellow-lemon" id="EMR_IGD_btnKuning" style="width:50%"><center><b> Kuning </b></center></button></br>
              <button class="btn bg-green-jungle bg-font-green-jungle" id="EMR_IGD_btnHijau" style="width:50%"><center><b> Hijau </b></center></button></br>
              <button class="btn bg-dark bg-font-dark" id="EMR_IGD_btnHitam" style="width:50%"><center><b> Hitam </b></center></button>
            </center>
          </div>
        </div>
        <div class="collapse" id="EMR_ASESMEN_AWAL_HalamanPerawat">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman1" class="btn white col-md-7">1. Catatan Waktu</button>
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
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="col-md-4">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASESMEN_PERAWAT_TDSistolik" name="EMR_ASESMEN_PERAWAT_TDSistolik" value="" class="form-control">
                                    <label for="form_control_1">Pasien Datang</label>
                                    <span class="help-block">Masukkan Waktu Datang</span>
                                    <i style="font-size:12px"><b>WIB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASESMEN_PERAWAT_TDDiastolik" name="EMR_ASESMEN_PERAWAT_TDDiastolik" value="" class="form-control">
                                    <label for="form_control_1">Mulai Tindakan</label>
                                    <span class="help-block">Masukkan Waktu Mulai Tindakan</span>
                                    <i style="font-size:12px"><b>WIB</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASESMEN_PERAWAT_TDDiastolik" name="EMR_ASESMEN_PERAWAT_TDDiastolik" value="" class="form-control">
                                    <label for="form_control_1">Selesai Tindakan</label>
                                    <span class="help-block">Masukkan Waktu Selesai Tindakan</span>
                                    <i style="font-size:12px"><b>WIB</b></i>
                                  </div>
                                </div>
                              </div>
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
                            <span class="caption-subject font-dark bold">Tanda Vital Kuantitas</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
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
                              <div class="col-md-12">
                                <span class="control-label">Kesadaran : </span>
                                <input type="text" id="EMR_ASESMEN_DOKTER_Kesadaran" name="EMR_ASESMEN_DOKTER_Kesadaran" value="Compos mentis" class="form-control" disabled>
                              </div>
                              <br>
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
                              <div class="col-md-12 portlet light bordered">
                                <table class="col-md-6">
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
                                </table>
                                <table class="col-md-6">
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
                            <span class="caption-subject font-dark bold">Tanda Vital Kualitas</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-6 md-radio">
                                <input type="radio" id="EMR_ASESMEN_PERAWAT_Kualit1" name="EMR_ASESMEN_PERAWAT_Kualit" class="md-radiobtn" value="Tidak Seimbang/Sempoyongan">
                                <label for="EMR_ASESMEN_PERAWAT_Kualit1">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Compos mentis </label>
                            </div>
                            <div class="col-md-6 md-radio">
                                <input type="radio" id="EMR_ASESMEN_PERAWAT_Kualit2" name="EMR_ASESMEN_PERAWAT_Kualit" class="md-radiobtn" value="Jalan Dengan Menggunakan Alat Bantu. ">
                                <label for="EMR_ASESMEN_PERAWAT_Kualit2">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Somnolen </label>
                            </div>
                            <div class="col-md-6 md-radio">
                                <input type="radio" id="EMR_ASESMEN_PERAWAT_Kualit3" name="EMR_ASESMEN_PERAWAT_Kualit" class="md-radiobtn" value="Tidak Seimbang/Sempoyongan">
                                <label for="EMR_ASESMEN_PERAWAT_Kualit3">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Stupor </label>
                            </div>
                            <div class="col-md-6 md-radio">
                                <input type="radio" id="EMR_ASESMEN_PERAWAT_Kualit4" name="EMR_ASESMEN_PERAWAT_Kualit" class="md-radiobtn" value="Jalan Dengan Menggunakan Alat Bantu. ">
                                <label for="EMR_ASESMEN_PERAWAT_Kualit4">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Koma </label>
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
                                <div class="col-md-12" id="EMR_ASESMEN_PERAWAT_FungHamil">
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
                                <button type="button" id="EMR_ASESMEN_PERAWAT_SN1Next" class="btn blue" style="width:50%">Lanjutkan >></button>
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
                          $alergiobat = '';
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
                    <div class="col-md-12 portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <h5>Rencana / Intervensi Keperawatan</h5>
                          <div class="col-md-12">
                            Jam : <input type="text" id="EMR_ASESMEN_PERAWAT_3Jam" name="EMR_ASESMEN_PERAWAT_3Jam[]" value="" class="form-control">
                            Rencana : <input type="text" id="EMR_ASESMEN_PERAWAT_3Rencana" name="EMR_ASESMEN_PERAWAT_3Rencana[]" value="" class="form-control">
                          </div>
                          <center><button type="button" id="EMR_ASESMEN_PERAWAT_SN1Back" class="btn green" style="width:50%">Tambah Data</button></center>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <h5>Implementasi</h5>
                          <div class="col-md-12">
                            Jam : <input type="text" id="EMR_ASESMEN_PERAWAT_3Jam" name="EMR_ASESMEN_PERAWAT_3Jam[]" value="" class="form-control">
                            Tindakan : <input type="text" id="EMR_ASESMEN_PERAWAT_3Rencana" name="EMR_ASESMEN_PERAWAT_3Rencana[]" value="" class="form-control">
                          </div>
                          <center><button type="button" id="EMR_ASESMEN_PERAWAT_SN1Back" class="btn green" style="width:50%">Tambah Data</button></center>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <h5>Evaluasi</h5>
                          <div class="col-md-12">
                            Jam : <input type="text" id="EMR_ASESMEN_PERAWAT_3Jam" name="EMR_ASESMEN_PERAWAT_3Jam[]" value="" class="form-control">
                            Evaluasi : <input type="text" id="EMR_ASESMEN_PERAWAT_3Rencana" name="EMR_ASESMEN_PERAWAT_3Rencana[]" value="" class="form-control">
                          </div>
                          <center><button type="button" id="EMR_ASESMEN_PERAWAT_SN1Back" class="btn green" style="width:50%">Tambah Data</button></center>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                      <button type="button" id="EMR_ASESMEN_PERAWAT_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                      <button type="button" id="EMR_ASESMEN_PERAWAT_HalamanNext" class="btn blue" style="width:50%">Lanjutkan >></button>
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
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data Rekam Medis berikut, masukkan password dokter <b></b> di bawah ini terlebih dahulu sebagai proses verifikasi pengisi data.</p>
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
                  <!--button class="btn bg-green-jungle bg-font-green-jungle" id="EMR_ASESMEN_DOKTER_btnLokalisTulang" style="width:100%"><center><b><i class="fa fa-plus"></i> Status Lokalis Orthopedi</b></center></button>
                  <button class="btn bg-green-jungle bg-font-green-jungle" id="EMR_ASESMEN_DOKTER_btnLokalisTubuh" style="width:100%"><center><b><i class="fa fa-plus"></i> Status Lokalis Orthopedi</b></center></button-->
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
      <!--input type="hidden" id="EMR_ASESMEN_AWAL_kodeunit" name="EMR_ASESMEN_AWAL_kodeunit" value="<?php echo $KodeUnit; ?>">
      <input type="hidden" id="EMR_ASESMEN_AWAL_nmcust" name="EMR_ASESMEN_AWAL_nmcust" value="<?php echo $nmcust; ?>"-->


    </div>
  </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
