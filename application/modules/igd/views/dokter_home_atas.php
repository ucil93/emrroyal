<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="background-color:#BFBFBF;">
        <div class="row">
            <div class="col-md-7">
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
                                <span class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">Electronic Medical Record </span>
                            </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-body">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                      <textarea id="anamnesa" name="anamnesa" value="" class="form-control" rows="3"></textarea>
                                      <label for="form_control_1">Anamnesa</label>
                                      <span class="help-block">Masukkan Anamnesa Pasien</span>
                                  </div>
                                  <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                      <input type="text" id="keluhanutama" name="keluhanutama" value="" class="form-control">
                                      <label for="form_control_1">Keluhan Utama</label>
                                      <span class="help-block">Masukkan Keluhan Utama Pasien</span>
                                  </div>
                                  <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                      <input type="text" id="riwayatsekarang" name="riwayatsekarang" value="" class="form-control">
                                      <label for="form_control_1">Riwayat Penyakit Sekarang</label>
                                      <span class="help-block">Masukkan Riwayat Penyakit Sekarang</span>
                                  </div>
                                  <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                      <input type="text" id="riwayatdahulu" name="riwayatdahulu" value="" class="form-control">
                                      <label for="form_control_1">Riwayat Penyakit Dahulu</label>
                                      <span class="help-block">Masukkan Riwayat Penyakit Dahulu</span>
                                  </div>
                                  <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                      <input type="text" id="riwayatkeluarga" name="riwayatkeluarga" value="" class="form-control">
                                      <label for="form_control_1">Riwayat Penyakit Dalam Keluarga</label>
                                      <span class="help-block">Masukkan Riwayat Penyakit Dalam Keluarga</span>
                                  </div>
                                  <div class="portlet light bordered">
                                      <div class="portlet-title tabbable-line">
                                          <div class="caption">
                                              <span class="caption-subject font-dark bold">Pemeriksaan Fisik</span>
                                          </div>
                                      </div>
                                      <div class="portlet-body">
                                          <div class="tab-content">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                                <input type="text" id="PFkepala" name="PFkepala" value="" class="form-control">
                                                <label for="form_control_1">Kepala / Leher </label>
                                                <span class="help-block">Masukkan Pemeriksaan Fisik Kepala / Leher </span>
                                            </div>
                                            <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                                <input type="text" id="PFthorax" name="PFthorax" value="" class="form-control">
                                                <label for="form_control_1">Thorax </label>
                                                <span class="help-block">Masukkan Pemeriksaan Fisik Thorax </span>
                                            </div>
                                            <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                                <input type="text" id="PFabdomen" name="PFabdomen" value="" class="form-control">
                                                <label for="form_control_1">Abdomen </label>
                                                <span class="help-block">Masukkan Pemeriksaan Fisik Abdomen </span>
                                            </div>
                                            <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                                <input type="text" id="PFextermitas" name="PFextermitas" value="" class="form-control">
                                                <label for="form_control_1">Extermitas </label>
                                                <span class="help-block">Masukkan Pemeriksaan Fisik Extermitas </span>
                                            </div>
                                            <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                                <input type="text" id="PFgenetalia" name="PFgenetalia" value="" class="form-control">
                                                <label for="form_control_1">Genetalia Externa </label>
                                                <span class="help-block">Masukkan Pemeriksaan Fisik Genetalia Externa </span>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                      <textarea id="statuslokalis" name="statuslokalis" value="" class="form-control" rows="3"></textarea>
                                      <label for="form_control_1">Status Lokalis</label>
                                      <span class="help-block">Masukkan Status Lokalis Pasien</span>
                                  </div>
                                  <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                      <textarea id="pemeriksaanpenunjang" name="pemeriksaanpenunjang" value="" class="form-control" rows="3"></textarea>
                                      <label for="form_control_1">Pemeriksaan Penunjang</label>
                                      <span class="help-block">Masukkan Pemeriksaan Penunjang Pasien</span>
                                  </div>
                                  <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                      <label for="form_control_1">Diagnosis</label>
                                      <input type="text" id="diagnosis" name="diagnosis" value="" class="form-control">
                                  </div>
                                  <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                          <label for="form_control_1">Rencana</label>
                                          <a class="btn btn-outline blue" href="#radiologi" data-toggle="modal"> Radiologi </a>
                                          <div id="radiologi" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
                                                          <label class="text-success bold"><u><?php echo $row->GR_RADIO;?> </u></label></br>
                                                          <?php
                                                          $get = $this->db->query("select * FROM EMR_DT_RADIOLOGI WHERE KODE_GR_RADIO = '".$row->KODE_GR_RADIO."' order by KODE_DT_RADIO ASC");

                                                          foreach($get->result() as $row)
                                                          {
                                                              ?>
                                                              <div class="col-md-4">
                                                                <label class="mt-checkbox mt-checkbox-outline">
                                                                <input type="checkbox" id="radiologi_checkbox" name="radiologi_checkbox[]" value="" >
                                                                <?php
                                                                  echo $row->DT_RADIO;
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
                                                    <div class="col-md-4">
                                                      <label class="mt-checkbox mt-checkbox-outline">
                                                      <input type="checkbox" id="radiologi_lain" name="radiologi_checkbox[]" value="" >
                                                      Lain-Lain
                                                      <span></span>
                                                      </label>
                                                      <div class="form-group collapse" id="radiologi_lain_1">
                                                          <div class="form-group form-md-line-input">
                                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="radiologi_lain_2" class="form-control">
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
                                                  <button type="button" class="btn btn-default" id="reset_radio" data-dismiss="modal">Batal</button>
                                                  <button type="button" class="btn green" id="simpan_radio" data-dismiss="modal" >Oke</button>
                                              </div>
                                          </div>
                                          <a class="btn btn-outline blue" href="#laboratorium" data-toggle="modal"> Laboratorium </a>
                                          <div id="laboratorium" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
                                                          <label class="text-success bold"><u><?php echo $row->EMR_GR_LABORATORIUM;?> </u></label></br>
                                                          <?php
                                                          $get = $this->db->query("select * FROM EMR_DT_LABORATORIUM WHERE KODE_GR_LABORATORIUM = '".$row->KODE_GR_LABORATORIUM."' order by KODE_GR_LABORATORIUM ASC");

                                                          foreach($get->result() as $row)
                                                          {
                                                            ?>
                                                            <div class="col-md-4">
                                                              <label class="mt-checkbox mt-checkbox-outline">
                                                              <input type="checkbox" id="laboratorium_checkbox" name="laboratorium_checkbox[]" value="" >
                                                              <?php
                                                                echo $row->EMR_DT_LABORATORIUM;
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
                                                    <div class="col-md-4">
                                                      <label class="mt-checkbox mt-checkbox-outline">
                                                      <input type="checkbox" id="laboratorium_lain" name="laboratorium_checkbox[]" value="" >
                                                      Lain-Lain
                                                      <span></span>
                                                      </label>
                                                      <div class="form-group collapse" id="laboratorium_lain_1">
                                                          <div class="form-group form-md-line-input">
                                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="laboratorium_lain_2" class="form-control">
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
                                                  <button type="button" class="btn btn-default" id="reset_laboratorium" data-dismiss="modal">Batal</button>
                                                  <button type="button" class="btn green" id="simpan_laboratoriu" data-dismiss="modal" >Oke</button>
                                              </div>
                                          </div>
                                  </div>
                                  <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.25em;">
                                      <label for="form_control_1">Dirujuk Ke :</label>
                                  </div>
                                  <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.25em;">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" id="rahligizi" name="rahligizi" value="" >
                                        Ahli Gizi
                                        <span></span>
                                        </label>
                                      </div>
                                      <div class="col-md-4">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" id="rrehabilitasi" name="rrehabilitasi" value="" >
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
                                        <input type="checkbox" id="rklinik" name="rklinik" value="" >
                                        Klinik Spesialis
                                        <span></span>
                                        </label>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group collapse" id="rklinik_text1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="rklinik_text2" class="form-control">
                                                    <label for="form_control">Klinik Spesialis</label>
                                                    <span class="help-block">Masukkan Rujukan Klinik Spesialis</span>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" id="rlain" name="rlain" value="" >
                                        Lain - Lain
                                        <span></span>
                                        </label>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group collapse" id="rlain_text1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="rlain_text2" class="form-control">
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
