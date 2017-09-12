
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                                        <input type="text" id="keluhanutama" name="keluhanutama" value="" class="form-control">
                                                        <label for="form_control_1">Keluhan Utama</label>
                                                        <span class="help-block">Masukkan Keluhan Utama Pasien</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                                        <textarea id="anamnesis" name="anamnesis" value="" class="form-control" rows="3"></textarea>
                                                        <label for="form_control_1">Anamnesis</label>
                                                        <span class="help-block">Masukkan Anamnesis Pasien</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                                        <textarea id="pemeriksaanfisik" name="pemeriksaanfisik" value="" class="form-control" rows="3"></textarea>
                                                        <label for="form_control_1">Pemeriksaan Fisik</label>
                                                        <span class="help-block">Masukkan Pemeriksaan Fisik Pasien</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                                        <textarea id="hasilpenunjang" name="hasilpenunjang" value="" class="form-control" rows="3"></textarea>
                                                        <label for="form_control_1">Hasil Penunjang</label>
                                                        <span class="help-block">Masukkan Hasil Penunjang Pasien</span>
                                                    </div>
                                                    <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                                        <label for="form_control_1">Diagnosis</label>
                                                        <input type="text" id="diagnosis" name="diagnosis" value="" class="form-control">
                                                    </div>
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                                        <input type="text" id="diagnosisbanding" name="diagnosisbanding" value="" class="form-control">
                                                        <label for="form_control_1">Diagnosis Banding</label>
                                                        <span class="help-block">Masukkan Diagnosis Banding Pasien</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 2.5em;">
                                                        <input type="text" id="deskripsitindakan" name="deskripsitindakan" value="" class="form-control">
                                                        <label for="form_control_1">Deskripsi Tindakan</label>
                                                        <span class="help-block">Masukkan Deskripsi Tindakan Pasien</span>
                                                    </div>
                                                    <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                            <label for="form_control_1">Saran pemeriksaan</label>
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

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <!-- BEGIN TAB PORTLET-->
                                <div class="portlet box red">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Alergi Obat</div>
                                        <div class="tools">
                                            <a href="javascript:;" class="expand" data-original-title="" title=""> </a>
                                            </div>
                                    </div>
                                    <div class="collapse portlet-body tabs-below">
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
                                                            <div data-repeater-list="group-c" style="display:block; margin-bottom: -0.5em;">
                                                                <div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-0.5em">
                                                                    <div class="row mt-repeater-row">
                                                                        <div class="col-md-8">
                                                                            <div class="form-group">
                                                                                <label class="control-label" style="font-size:14px">Obat ke-1</label>
                                                                                <input type="text" name="obatsatuan[]" value="" class="form-control obatsatuan" placeholder="ketik nama obat"/>
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
                                                            </div>
                                                            <div data-repeater-list="group-c" id="div1">
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
                                                            <div data-repeater-list="group-c">
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
                                                                                <div data-repeater-list="group-c">
                                                                                    <div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-0.5em;">
                                                                                        <div class="row mt-repeater-row" style="display:block; margin-bottom:-0.5em;">
                                                                                            <div class="col-md-8">
                                                                                                <div class="form-group">
                                                                                                    <label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>
                                                                                                    <input type="text" name="obatsatuanracik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>
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
                                                                                </div>
                                                                                <div data-repeater-list="group-c" id="divracik1">
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
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-repeater-list="group-c" id="divracikobat">
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
                                </div>
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                          <label class="mt-checkbox mt-checkbox-outline">
                                          <input type="checkbox" id="suratsakit" name="suratsakit" value="" >Surat Sakit
                                          <span></span>
                                          </label>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="row">
                                          <div class="btn-group btn-group btn-group-justified">
                                              <a class="btn blue"> Simpan Data </a>
                                              <a class="btn red"> Batal </a>
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
