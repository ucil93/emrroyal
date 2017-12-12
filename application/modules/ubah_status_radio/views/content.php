<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="background-color:#BFBFBF;">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="row">
            <div class="col-md-12">
              <div class="portlet light portlet-fit portlet-datatable bordered">
                  <div class="portlet-title">
                      <div class="caption">
                        <i class="fa fa-user-md"></i>
                        <span class="caption-subject bold uppercase"> DATA PASIEN RADIOLOGI</span>
                      </div>
                  </div>
                  <div class="portlet-body">
                    <div class="row">
                      <?php echo form_open("ubah_status_radio"); ?>
                      <div class="col-md-3">
                          <div class="form-group">
                              <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" id="tampil_awal_radio">
                                  <input name="tgl_tampil_data" id="tgl_tampil_data" type="text" class="form-control" readonly>
                                  <span class="input-group-btn">
                                      <button class="btn default" type="button">
                                          <i class="fa fa-calendar"></i>
                                      </button>
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" id="tampil_akhir_radio">
                                  <input name="tgl_tampil_data2" id="tgl_tampil_data2" type="text" class="form-control" readonly>
                                  <span class="input-group-btn">
                                      <button class="btn default" type="button">
                                          <i class="fa fa-calendar"></i>
                                      </button>
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group">
                              <button name="refresh_data" id="refresh_data" class="btn btn-primary mt-ladda-btn ladda-button" data-style="expand-right"> Refresh Data </button>
                          </div>
                      </div>
                      <?php echo form_close(); ?>
                    </div>
                      <div class="table-container">
                          <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                            <thead class="btn-success">
                                <tr>
                                    <th style="width:75px"> NOREG </th>
                                    <th style="width:25px"> NORM </th>
                                    <!--<th style="width:150px"> NAMA </th>
                                    <th style="width:25px"> TANGGAL LAHIR </th>
                                    <th style="width:200px"> ALAMAT </th>-->
                                    <th style="width:100px"> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  foreach($dataTable as $dt)
                                  {
                                    /*$tgl = $dt->tgllahir;
                                    $tgl1 = date('d F Y', strtotime($tgl));

                                    //$tgl_tam = $dt->TANGGAL_PERIKSA;
                                    //$tgl_tampil = date('d/m/Y', strtotime($tgl_tam));

                                    $lahir = date('Y-m-d',strtotime($dt->tgllahir));
                              			$today = date('Y-m-d');
                                    $usia = abs(strtotime($today) - strtotime($lahir));
                              			$years = floor($usia / (365*60*60*24));*/

                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $dt->NOREG; ?></td>
                                        <td><?php echo $dt->NORM; ?></td>
                                        <!--<?php
                                        if($dt->kdseks == 'P')
                                        {
                                          ?>
                                          <td><button class="btn pink"><i class="fa fa-venus"></i></button> <?php echo $dt->nama; ?></td>
                                          <?php
                                        }
                                        elseif($dt->kdseks == 'L')
                                        {
                                          ?>
                                          <td><button class="btn green"><i class="fa fa-mars"></i></button><?php echo $dt->nama; ?></td>
                                          <?php
                                        }
                                        ?>
                                        <td><?php echo $tgl1; ?></td>
                                        <td><?php echo $dt->jalan; ?></td>-->
                                        <?php
                                          //$cek_noreg = $this->db->query("select * FROM EMR_DETAIL_PASIEN_RADIO WHERE NOREG = '".$dt->NOREG."' AND STATUS_DETAIL_PASIEN_RADIO = 'BARU'");
                                          $cek_noreg = $this->db->query("select * FROM EMR_UTAMA_PERIKSA
                                          JOIN EMR_DETAIL_PASIEN_RADIO ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN=EMR_DETAIL_PASIEN_RADIO.ID_PEMERIKSAAN
                                          WHERE NOREG = '".$dt->NOREG."' AND STATUS_DETAIL_PASIEN_RADIO = 'BARU'");

                                          $cek_noreg3 = $this->db->query("select * FROM EMR_UTAMA_PERIKSA
                                          JOIN EMR_DETAIL_PASIEN_RADIO ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN=EMR_DETAIL_PASIEN_RADIO.ID_PEMERIKSAAN
                                          WHERE NOREG = '".$dt->NOREG."' AND STATUS_DETAIL_PASIEN_RADIO = 'PROSES'");

                                          /*$cek_noreg4 = $this->db->query("select * FROM EMR_UTAMA_PERIKSA
                                          JOIN EMR_DETAIL_PASIEN_RADIO ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN=EMR_DETAIL_PASIEN_RADIO.ID_PEMERIKSAAN
                                          WHERE NOREG = '".$dt->noreg."' AND STATUS_DETAIL_PASIEN_RADIO = 'SELESAI'");*/

                                          /*if($cek_noreg->num_rows()>0)
                              						{
                                            ?>
                                            <td>
                                              <a data-toggle="modal" data-target="#ubah_dt_pasien_radio" data-id="<?php echo $dt->noreg ?>" data-norm="<?php echo $dt->norm ?>"
                                              data-nama="<?php echo $dt->nama ?>" data-tgllahir="<?php echo $tgl1 ?>" data-alamat="<?php echo $dt->jalan ?>"
                                              data-kelamin="<?php echo $dt->kdseks ?>" data-usia="<?php echo $years ?>"
                                              id="getPasienRadio">Lihat Data</a></td>
                                            <?php
                                          }
                                          else if($cek_noreg3->num_rows()>0)
                                          {
                                            ?>
                                              <td>
                                                <a data-toggle="modal" data-target="#selesai_dt_pasien_radio" data-idselesai="<?php echo $dt->noreg ?>" data-normselesai="<?php echo $dt->norm ?>"
                                                data-namaselesai="<?php echo $dt->nama ?>" data-tgllahirselesai="<?php echo $tgl1 ?>" data-alamatselesai="<?php echo $dt->jalan ?>"
                                                data-kelaminselesai="<?php echo $dt->kdseks ?>" data-usiaselesai="<?php echo $years ?>"
                                                id="getPasienRadioSelesai">Selesai</a></td>
                                            <?php
                                          }
                                          else
                                          {
                                            ?>
                                              <!--<td><a type="button" onclick="TambahDataPasienRadio('<?php echo $dt->noreg ?>')">Tambah Data</a></td>-->
                                              <td></td>
                                            <?php
                                          }*/

                                          if($cek_noreg->num_rows()>0)
                              						{
                                            ?>
                                            <td>
                                              <a data-toggle="modal" data-target="#ubah_dt_pasien_radio" data-id="<?php echo $dt->NOREG ?>" data-norm="<?php echo $dt->NORM ?>"
                                              id="getPasienRadio">Lihat Data</a></td>
                                            <?php
                                          }
                                          else if($cek_noreg3->num_rows()>0)
                                          {
                                            ?>
                                              <td>
                                                <a data-toggle="modal" data-target="#selesai_dt_pasien_radio" data-idselesai="<?php echo $dt->NOREG ?>" data-normselesai="<?php echo $dt->NORM ?>"
                                                id="getPasienRadioSelesai">Selesai</a></td>
                                            <?php
                                          }
                                          else
                                          {
                                            ?>
                                              <!--<td><a type="button" onclick="TambahDataPasienRadio('<?php echo $dt->noreg ?>')">Tambah Data</a></td>-->
                                              <td></td>
                                            <?php
                                          }
                                        ?>
                                    </tr>
                                    <?php
                                  }
                                ?>
                            </tbody>
                          </table>
                      </div>
                  </div>
              </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->


<!-- Modal Edit Data -->
<!--<div id="tambah_dt_pasien_radio" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambah Data Pasien Radiologi</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="tambahRadioNoreg" name="tambahRadioNoreg" value="" class="form-control">
        <input type="hidden" id="tambahRadioNorm" name="tambahRadioNorm" value="" class="form-control">
        <?php
        $today = date('d M Y');
        ?>
        <span>Pasien dengan,
        <br/>Tanggal : <b><?php echo $today; ?></b>
        <br/>Nomor Registrasi : <label style="font-weight: bold;" id="tambahRadioNoregLabel"></label>
        <br/>Nomor RM : <label style="font-weight: bold;" id="tambahRadioNormLabel"></label>
        <br/>Nama : <label style="font-weight: bold;" id="tambahRadioNamaLabel"></label>
        <br/>Tanggal Lahir : <label style="font-weight: bold;" id="tambahRadioTglLahirLabel"></label>
        <br/>Jenis Kelamin : <label style="font-weight: bold;" id="tambahRadioKelaminLabel"></label>
        <br/>Alamat : <label style="font-weight: bold;" id="tambahRadioAlamatLabel"></label>, Ingin Melakukan Pemeriksaan :</span>
        <br/>
        <div class="form-group form-md-line-input form-md-floating-label has-success">
            <textarea class="form-control" name="RADIO_catatan" id="RADIO_catatan" rows="3"></textarea>
            <label for="form_control_1">Catatan</label>
            <span class="help-block">Masukkan Catatan</span>
        </div>
        <br/>
        <div class="form-group">
          <?php
          foreach($dataRadiologi as $row)
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
                      <input type="checkbox" id="radio_pasien_checkbox" name="radio_pasien_checkbox[]" value="<?php echo $row->KODE_DT_RADIO;?>">
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
            <input type="checkbox" id="radiologi_pasien_lain" name="radiologi_pasien_lain" value="DTR_0000">
            Lain-Lain
            <span></span>
            </label>
            <div class="form-group collapse" id="radiologi_pasien_lain1">
                <div class="form-group form-md-line-input">
                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                        <input type="text" id="radiologi_pasien_lain2" name="radiologi_pasien_lain2" class="form-control">
                        <label for="form_control">Radiologi Lain</label>
                        <span class="help-block">Masukkan Radiologi</span>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <label class="mt-checkbox mt-checkbox-outline">
            <input type="checkbox" id="EMR_RADIO_Gigi_Satuan" name="EMR_RADIO_Gigi_Satuan" value="DTR_G000">
            Gigi Satuan
            <span></span>
            </label>
            <div class="form-group collapse" id="EMR_RADIO_Gigi_Satuan1">
                <div class="form-group form-md-line-input">
                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                        <input type="text" id="EMR_RADIO_Gigi_Satuan2" name="EMR_RADIO_Gigi_Satuan2" class="form-control">
                        <label for="form_control">Gigi Satuan</label>
                        <span class="help-block">Masukkan Gigi Satuan</span>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div id="alert-msg-tambahpasienradio"></div>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="tambahpasienradio1" name="tambahpasienradio1">Simpan</button>
      </div>
  </div>
</div>-->


<!-- Modal Edit Data -->
<div id="ubah_dt_pasien_radio" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Data Pasien Radiologi</h4>
      </div>
      <div class="modal-body">
        <span>Pasien dengan,
        <!--<br/>NIK : <label style="font-weight: bold;" id="niklabel"></label>
        <br/>Tanggal : <label style="font-weight: bold;" id="tglperiksalabel"></label>-->
        <br/>Nomor Registrasi : <label style="font-weight: bold;" id="noregRadio2"></label>
        <br/>Nomor RM : <label style="font-weight: bold;" id="normlabel"></label>
        <!--<br/>Nama : <label style="font-weight: bold;" id="namalabel"></label>
        <br/>Tanggal Lahir : <label style="font-weight: bold;" id="tgllahirlabel"></label>  / Umur : <label style="font-weight: bold;" id="usialabel"></label> Tahun
        <br/>Jenis Kelamin : <label style="font-weight: bold;" id="kelaminlabel"></label>
        <br/>Alamat : <label style="font-weight: bold;" id="alamatlabel"></label>
        <br/>Dokter : <label style="font-weight: bold;" id="nmdokterlabel"></label>
        <br/>Diagnosis : <label style="font-weight: bold;" id="diagnosislabel"></label>
        <br/>Diagnosis Banding : <label style="font-weight: bold;" id="diagnosisbandinglabel"></label>-->, Akan Melakukan Pemeriksaan :</span>
        <br/>
        <input type="hidden" id="noregRadio" name="noregRadio" value="" class="form-control">
        <input type="hidden" id="normRadio" name="normRadio" value="" class="form-control">
        <br/>
        <div id="result_table_radio"></div>
      </div>
      <div id="alert-msg-ubahpasienradio"></div>
      <div class="modal-footer" style="display:block; text-align: left;">
        <p>
            CATATAN :</br>
            *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Puasa 4 - 6 jam sebelum pemeriksaan (diijinkan minum air putih)</br>
            **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Minum 3 - 4 gelas air, 30 menit sebelum pemeriksaan untuk kehamilan trimester I, dan jangan buang air kecil dahulu</br>
            ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Minum 3 - 4 gelas air, 30 menit sebelum pemeriksaan dan jangan buang air kecil dahulu</br>
        </p>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="ubahpasienradio1" name="ubahpasienradio1">Ok</button>
      </div>
  </div>
</div>

<!-- Modal Edit Data -->
<!--<div id="ubah_dt_pasien_radio_bpjs" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Data Pasien Radiologi</h4>
      </div>
      <div class="modal-body">
        <span>Pasien BPJS dengan,
        <br/>NIK : <label style="font-weight: bold;" id="niklabelbpjs"></label>
        <br/>Tanggal : <label style="font-weight: bold;" id="tglperiksalabelbpjs"></label>
        <br/>Nomor Registrasi : <label style="font-weight: bold;" id="noregRadio2bpjs"></label>
        <br/>Nomor RM : <label style="font-weight: bold;" id="normlabelbpjs"></label>
        <br/>Nama : <label style="font-weight: bold;" id="namalabelbpjs"></label>
        <br/>Tanggal Lahir : <label style="font-weight: bold;" id="tgllahirlabelbpjs"></label>  / Umur : <label style="font-weight: bold;" id="usialabelbpjs"></label> Tahun
        <br/>Jenis Kelamin : <label style="font-weight: bold;" id="kelaminlabelbpjs"></label>
        <br/>Alamat : <label style="font-weight: bold;" id="alamatlabelbpjs"></label>
        <br/>Dokter : <label style="font-weight: bold;" id="nmdokterlabelbpjs"></label>
        <br/>Diagnosis : <label style="font-weight: bold;" id="diagnosislabelbpjs"></label>
        <br/>Diagnosis Banding : <label style="font-weight: bold;" id="diagnosisbandinglabelbpjs"></label>, Akan Melakukan Pemeriksaan :</span>
        <br/>
        <input type="hidden" id="noregRadiobpjs" name="noregRadiobpjs" value="" class="form-control">
        <input type="hidden" id="normRadiobpjs" name="normRadiobpjs" value="" class="form-control">
        <br/>
        <div id="result_table_radiobpjs"></div>
        <br/>Approval Dilakukan Oleh <label style="font-weight: bold;" id="pjbpjslabel"></label> Dengan Catatan <label style="font-weight: bold;" id="catatanbpjslabel"></label>
      </div>
      <div id="alert-msg-ubahpasienradiobpjs"></div>
      <div class="modal-footer" style="display:block; text-align: left;">
        <p>
            CATATAN :</br>
            *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Puasa 4 - 6 jam sebelum pemeriksaan (diijinkan minum air putih)</br>
            **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Minum 3 - 4 gelas air, 30 menit sebelum pemeriksaan untuk kehamilan trimester I, dan jangan buang air kecil dahulu</br>
            ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Minum 3 - 4 gelas air, 30 menit sebelum pemeriksaan dan jangan buang air kecil dahulu</br>
        </p>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="ubahpasienradio1bpjs" name="ubahpasienradio1bpjs">Ok</button>
      </div>
  </div>
</div>-->

<!-- Modal Edit Data Selesai -->
<div id="selesai_dt_pasien_radio" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Data Pasien Radiologi</h4>
      </div>
      <div class="modal-body">
        <span>Pasien dengan,
        <!--<br/>NIK : <label style="font-weight: bold;" id="niklabelselesai"></label>
        <br/>Tanggal : <label style="font-weight: bold;" id="tglperiksalabelselesai"></label>-->
        <br/>Nomor Registrasi : <label style="font-weight: bold;" id="noregRadio2selesai"></label>
        <br/>Nomor RM : <label style="font-weight: bold;" id="normlabelselesai"></label>
        <!--<br/>Nama : <label style="font-weight: bold;" id="namalabelselesai"></label>
        <br/>Tanggal Lahir : <label style="font-weight: bold;" id="tgllahirlabelselesai"></label>  / Umur : <label style="font-weight: bold;" id="usialabelselesai"></label> Tahun
        <br/>Jenis Kelamin : <label style="font-weight: bold;" id="kelaminlabelselesai"></label>
        <br/>Alamat : <label style="font-weight: bold;" id="alamatlabelselesai"></label>
        <br/>Dokter : <label style="font-weight: bold;" id="nmdokterlabelselesai"></label>
        <br/>Diagnosis : <label style="font-weight: bold;" id="diagnosislabelselesai"></label>
        <br/>Diagnosis Banding : <label style="font-weight: bold;" id="diagnosisbandinglabelselesai"></label>-->, Melakukan Pemeriksaan :</span>
        <br/>
        <input type="hidden" id="noregRadioselesai" name="noregRadioselesai" value="" class="form-control">
        <input type="hidden" id="normRadioselesai" name="normRadioselesai" value="" class="form-control">
        <br/>
        <div id="result_table_radioselesai"></div>
        <br/>Apakah Sudah Dilakukan Pemeriksaan?
      </div>
      <div id="alert-msg-ubahpasienradioselesai"></div>
      <div class="modal-footer" style="display:block; text-align: left;">
        <p>
            CATATAN :</br>
            *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Puasa 4 - 6 jam sebelum pemeriksaan (diijinkan minum air putih)</br>
            **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Minum 3 - 4 gelas air, 30 menit sebelum pemeriksaan untuk kehamilan trimester I, dan jangan buang air kecil dahulu</br>
            ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Minum 3 - 4 gelas air, 30 menit sebelum pemeriksaan dan jangan buang air kecil dahulu</br>
        </p>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn green" id="ubahpasienradio1selesai" name="ubahpasienradio1selesai">Ya</button>
      </div>
  </div>
</div>
