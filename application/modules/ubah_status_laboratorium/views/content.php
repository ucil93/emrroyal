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
                        <span class="caption-subject bold uppercase"> DATA PASIEN LABORATORIUM</span>
                      </div>
                  </div>
                  <div class="portlet-body">
                    <div class="row">
                      <?php echo form_open("ubah_status_laboratorium"); ?>
                      <div class="col-md-3">
                          <div class="form-group">
                              <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" id='tampil_data_awal_laborat'>
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
                              <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" id='tampil_data_akhir_laborat'>
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
                                    /*$tgl = $dt->TGLLAHIR;
                                    $tgl1 = date('d F Y', strtotime($tgl));

                                    $tgl_tam = $dt->TANGGAL_PERIKSA;
                                    $tgl_tampil = date('d/m/Y', strtotime($tgl_tam));

                                    $lahir = date('Y-m-d',strtotime($dt->TGLLAHIR));
                              			$today = date('Y-m-d');
                                    $usia = abs(strtotime($today) - strtotime($lahir));
                              			$years = floor($usia / (365*60*60*24));*/

                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $dt->NOREG; ?></td>
                                        <td><?php echo $dt->NORM; ?></td>
                                        <!--<td><?php echo $dt->NAMA; ?></td>
                                        <td><?php echo $tgl1; ?></td>
                                        <td><?php echo $dt->ALAMATPASIEN; ?></td>-->
                                        <?php
                                          $cek_noreg = $this->db->query("select * FROM EMR_UTAMA_PERIKSA
                                          JOIN EMR_DETAIL_PASIEN_LABO ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN=EMR_DETAIL_PASIEN_LABO.ID_PEMERIKSAAN
                                          WHERE NOREG = '".$dt->NOREG."' AND STATUS_DETAIL_PASIEN_LABO = 'BARU'");

                                          /*$cek_noreg2 = $this->db->query("select * FROM EMR_UTAMA_PERIKSA
                                          JOIN EMR_DETAIL_PASIEN_LABO ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN=EMR_DETAIL_PASIEN_LABO.ID_PEMERIKSAAN
                                          WHERE NOREG = '".$dt->NOREG."' AND STATUS_DETAIL_PASIEN_LABO = 'BELUM APPROVAL'");*/

                                          $cek_noreg3 = $this->db->query("select * FROM EMR_UTAMA_PERIKSA
                                          JOIN EMR_DETAIL_PASIEN_LABO ON EMR_UTAMA_PERIKSA.ID_PEMERIKSAAN=EMR_DETAIL_PASIEN_LABO.ID_PEMERIKSAAN
                                          WHERE NOREG = '".$dt->NOREG."' AND STATUS_DETAIL_PASIEN_LABO = 'PROSES'");

                                          /*if($cek_noreg->num_rows()>0)
                              						{
                                            if (stripos($dt->NMCUST, 'BPJS') === false)
                                            {
                                              ?>
                                                <td>
                                                  <a data-toggle="modal" data-target="#ubah_dt_pasien_labo" data-id="<?php echo $dt->NOREG ?>" data-norm="<?php echo $dt->NORM ?>"
                                                  data-nama="<?php echo $dt->NAMA ?>" data-tgllahir="<?php echo $tgl1 ?>" data-alamat="<?php echo $dt->ALAMATPASIEN ?>"
                                                  data-diagnosis="<?php if(trim($dt->DIAGNOSIS_T) == "") { echo '-'; } else { echo $dt->DIAGNOSIS_T; } ?>" data-diagnosisbanding="<?php if(trim($dt->DIAGNOSIS_BANDING_T) == "") { echo '-'; } else { echo $dt->DIAGNOSIS_BANDING_T; } ?>"
                                                  data-kelamin="<?php echo $dt->KELAMIN ?>" data-usia="<?php echo $years ?>" data-tglperiksa="<?php echo $tgl_tampil ?>"
                                                  data-nik="<?php echo $dt->NIK ?>" data-nmdokter="<?php echo $dt->NAMADOKTER ?>" id="getUser">Lihat Data</a></td>
                                              <?php
                                            }
                                            else
                                            {
                                              ?>
                                                <td>
                                                  <a data-toggle="modal" data-target="#ubah_dt_pasien_labo_bpjs" data-idbpjs="<?php echo $dt->NOREG ?>" data-normbpjs="<?php echo $dt->NORM ?>"
                                                  data-namabpjs="<?php echo $dt->NAMA ?>" data-tgllahirbpjs="<?php echo $tgl1 ?>" data-alamatbpjs="<?php echo $dt->ALAMATPASIEN ?>"
                                                  data-diagnosisbpjs="<?php if(trim($dt->DIAGNOSIS_T) == "") { echo '-'; } else { echo $dt->DIAGNOSIS_T; } ?>" data-diagnosisbandingbpjs="<?php if(trim($dt->DIAGNOSIS_BANDING_T) == "") { echo '-'; } else { echo $dt->DIAGNOSIS_BANDING_T; } ?>"
                                                  data-catatanbpjs="<?php if(trim($dt->CATATAN) == "") { echo 'Tidak Ada'; } else { echo $dt->CATATAN; } ?>" data-pjbpjs="<?php echo $dt->PENANGGUNG_JAWAB_APPROV ?>"
                                                  data-kelaminbpjs="<?php echo $dt->KELAMIN ?>" data-usiabpjs="<?php echo $years ?>" data-tglperiksabpjs="<?php echo $tgl_tampil ?>"
                                                  data-nikbpjs="<?php echo $dt->NIK ?>" data-nmdokterbpjs="<?php echo $dt->NAMADOKTER ?>" id="getUserbpjs">Lihat Data</a></td>
                                              <?php
                                            }
                                          }
                                          else if($cek_noreg2->num_rows()>0)
                                          {
                                            ?>
                                              <td>Belum Approval</td>
                                            <?php
                                          }
                                          else if($cek_noreg3->num_rows()>0)
                                          {
                                            ?>
                                            <td>
                                              <a data-toggle="modal" data-target="#selesai_dt_pasien_labo" data-idselesai="<?php echo $dt->NOREG ?>" data-normselesai="<?php echo $dt->NORM ?>"
                                              data-namaselesai="<?php echo $dt->NAMA ?>" data-tgllahirselesai="<?php echo $tgl1 ?>" data-alamatselesai="<?php echo $dt->ALAMATPASIEN ?>"
                                              data-diagnosisselesai="<?php if(trim($dt->DIAGNOSIS_T) == '') { echo '-'; } else { echo $dt->DIAGNOSIS_T; } ?>" data-diagnosisbandingselesai="<?php if(trim($dt->DIAGNOSIS_BANDING_T) == "") { echo '-'; } else { echo $dt->DIAGNOSIS_BANDING_T; } ?>"
                                              data-kelaminselesai="<?php echo $dt->KELAMIN ?>" data-usiaselesai="<?php echo $years ?>" data-tglperiksaselesai="<?php echo $tgl_tampil ?>"
                                              data-nikselesai="<?php echo $dt->NIK ?>" data-nmdokterselesai="<?php echo $dt->NAMADOKTER ?>" id="getUserSelesai">Selesai</a></td>
                                            <?php
                                          }
                                          else
                                          {
                                            ?>
                                              <td><a type="button" onclick="editDataPasienLabo('<?php echo $dt->NOREG ?>')">Tambah Data</a></td>
                                            <?php
                                          }*/
                                          if($cek_noreg->num_rows()>0)
                              						{
                                            ?>
                                              <td>
                                                <a data-toggle="modal" data-target="#ubah_dt_pasien_labo" data-id="<?php echo $dt->NOREG ?>" data-norm="<?php echo $dt->NORM ?>" id="getUser">Lihat Data</a></td>
                                            <?php
                                          }
                                          else if($cek_noreg3->num_rows()>0)
                                          {
                                            ?>
                                            <td>
                                              <a data-toggle="modal" data-target="#selesai_dt_pasien_labo" data-idselesai="<?php echo $dt->NOREG ?>" data-normselesai="<?php echo $dt->NORM ?>" id="getUserSelesai">Selesai</a></td>
                                            <?php
                                          }
                                          else
                                          {
                                            ?>
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
<!--<div id="edit_dt_pasien_labo" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambah Data Pasien Laboratorium</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="namadtlbedit1" name="namadtlbedit1" value="" class="form-control">
        <input type="hidden" id="namadtlbedit2" name="namadtlbedit2" value="" class="form-control">
        <?php
        $today = date('d M Y');
        ?>
        <span>Pasien dengan,
        <br/>NIK : <label style="font-weight: bold;" id="niklabelpasien"></label>
        <br/>Tanggal : <b><?php echo $today; ?></b>
        <br/>Nomor Registrasi : <label style="font-weight: bold;" id="noreglabelpasien"></label>
        <br/>Nomor RM : <label style="font-weight: bold;" id="normlabelpasien"></label>
        <br/>Nama : <label style="font-weight: bold;" id="namalabelpasien"></label>
        <br/>Tanggal Lahir : <label style="font-weight: bold;" id="tgllahirlabelpasien"></label>
        <br/>Jenis Kelamin : <label style="font-weight: bold;" id="kelaminlabelpasien"></label>
        <br/>Alamat : <label style="font-weight: bold;" id="alamatlabelpasien"></label>, Ingin Melakukan Pemeriksaan :</span>
        <br/>
        <br/>
        <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
          <div id="LABORAT_TemplateDiagnosis"></div>
          <div class="col-md-6" id="LABORAT_TambahDiagnosis">
            <button class="btn green-haze" type="button" name="LABORAT_ButtonTambahDiagnosis" id="LABORAT_ButtonTambahDiagnosis">+ Tambah Diagnosis</button>
          </div>
        </div>-->
        <!--<div class="form-group form-md-line-input form-md-floating-label has-success">
            <textarea class="form-control" name="LABORAT_Diagnosis" id="LABORAT_Diagnosis" rows="3"></textarea>
            <label for="form_control_1">Diagnosis</label>
            <span class="help-block">Masukkan Diagnosis</span>
        </div>-->
        <!--<br/>
        <div class="form-group form-md-line-input form-md-floating-label has-success">
            <textarea class="form-control" name="LABORAT_catatan" id="LABORAT_catatan" rows="3"></textarea>
            <label for="form_control_1">Catatan</label>
            <span class="help-block">Masukkan Catatan</span>
        </div>
        <br/>
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
                      <input type="checkbox" id="laborat_pasien_checkbox" name="laborat_pasien_checkbox[]" value="<?php echo $row->KODE_DT_LABORATORIUM;?>">
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
            <input type="checkbox" id="laboratorium_pasien_lain" name="laboratorium_pasien_lain" value="DTL_0000">
            Lain-Lain
            <span></span>
            </label>
            <div class="form-group collapse" id="laboratorium_pasien_lain1">
                <div class="form-group form-md-line-input">
                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                        <input type="text" id="laboratorium_pasien_lain2" name="laboratorium_pasien_lain2" class="form-control">
                        <label for="form_control">Laboratorium Lain</label>
                        <span class="help-block">Masukkan Laboratorium</span>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div id="alert-msg-tambahpasienlb"></div>
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
        <button type="button" class="btn btn-default" id="batalpasienlb1" name="batalpasienlb1">Batal</button>
        <button type="button" class="btn green" id="tambahpasienlb1" name="tambahpasienlb1">Simpan</button>
      </div>
  </div>
</div>-->


<!-- Modal Edit Data -->
<div id="ubah_dt_pasien_labo" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Data Pasien Laboratorium</h4>
      </div>
      <div class="modal-body">
        <span>Pasien dengan,
        <!--<br/>NIK : <label style="font-weight: bold;" id="niklabel"></label>
        <br/>Tanggal : <label style="font-weight: bold;" id="tglperiksalabel"></label>-->
        <br/>Nomor Registrasi : <label style="font-weight: bold;" id="noreg2"></label>
        <br/>Nomor RM : <label style="font-weight: bold;" id="normlabel"></label>
        <!--<br/>Nama : <label style="font-weight: bold;" id="namalabel"></label>
        <br/>Tanggal Lahir : <label style="font-weight: bold;" id="tgllahirlabel"></label> / Umur : <label style="font-weight: bold;" id="usialabel"></label> Tahun
        <br/>Jenis Kelamin : <label style="font-weight: bold;" id="kelaminlabel"></label>
        <br/>Alamat : <label style="font-weight: bold;" id="alamatlabel"></label>
        <br/>Dokter : <label style="font-weight: bold;" id="nmdokterlabel"></label>
        <br/>Diagnosis : <label style="font-weight: bold;" id="diagnosislabel"></label>
        <br/>Diagnosis Banding : <label style="font-weight: bold;" id="diagnosisbandinglabel"></label>-->, Akan Melakukan Pemeriksaan :</span>
        <br/>
        <input type="hidden" id="noreglaborat" name="noreglaborat" value="" class="form-control">
        <input type="hidden" id="normlaborat" name="normlaborat" value="" class="form-control">
        <br/>
        <div id="result_table"></div>
      </div>
      <div id="alert-msg-ubahpasienlb"></div>
      <div class="modal-footer" style="display:block; text-align: left;">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="ubahpasienlb1" name="ubahpasienlb1">Ok</button>
      </div>
  </div>
</div>

<!-- Modal Edit Data -->
<!--<div id="ubah_dt_pasien_labo_bpjs" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Data Pasien Laboratorium</h4>
      </div>
      <div class="modal-body">
        <span>Pasien BPJS dengan,
        <br/>NIK : <label style="font-weight: bold;" id="niklabelbpjs"></label>
        <br/>Tanggal : <label style="font-weight: bold;" id="tglperiksalabelbpjs"></label>
        <br/>Nomor Registrasi : <label style="font-weight: bold;" id="noreg2bpjs"></label>
        <br/>Nomor RM : <label style="font-weight: bold;" id="normlabelbpjs"></label>
        <br/>Nama : <label style="font-weight: bold;" id="namalabelbpjs"></label>
        <br/>Tanggal Lahir : <label style="font-weight: bold;" id="tgllahirlabelbpjs"></label> / Umur : <label style="font-weight: bold;" id="usialabelbpjs"></label> Tahun
        <br/>Jenis Kelamin : <label style="font-weight: bold;" id="kelaminlabelbpjs"></label>
        <br/>Alamat : <label style="font-weight: bold;" id="alamatlabelbpjs"></label>
        <br/>Dokter : <label style="font-weight: bold;" id="nmdokterlabelbpjs"></label>
        <br/>Diagnosis : <label style="font-weight: bold;" id="diagnosislabelbpjs"></label>
        <br/>Diagnosis Banding : <label style="font-weight: bold;" id="diagnosisbandinglabelbpjs"></label>, Akan Melakukan Pemeriksaan :</span>
        <br/>
        <input type="hidden" id="noreglaboratbpjs" name="noreglaboratbpjs" value="" class="form-control">-->
        <!--<input type="text" id="idperiksa" name="idperiksa" value="" class="form-control">-->
        <!--<input type="hidden" id="normlaboratbpjs" name="normlaboratbpjs" value="" class="form-control">
        <br/>
        <div id="result_tablebpjs"></div>
        <br/>Approval Dilakukan Oleh <label style="font-weight: bold;" id="pjbpjslabel"></label> Dengan Catatan <label style="font-weight: bold;" id="catatanbpjslabel"></label>
      </div>
      <div id="alert-msg-ubahpasienlbbpjs"></div>
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
        </p>-->
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="ubahpasienlb1" name="ubahpasienlb1">Simpan</button>-->
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="ubahpasienlb1bpjs" name="ubahpasienlb1bpjs">Ok</button>
      </div>
  </div>
</div>-->


<!-- Lhiat Edit Data -->
<!--<div id="lihat_hasil_pasien_labo" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Hasil Laboratorium Pasien</h4>
      </div>
      <div class="modal-body">
        <span>Hasil Pemeriksaan Laboratorium Pasien dengan Nomor Registrasi <label style="font-weight: bold;" id="noreg_hasil"></label></span>
        <br/>
        <div class="table-container">
            <table class="table table-bordered" id="sample_4">
              <thead class="btn-success" >
                  <tr>
                      <th> TANGGAL PERIKSA </th>
                      <th> HEMOGLOBIN </th>
                      <th> LEKOSIT </th>
                      <th> LED1 </th>
                      <th> LED2 </th>
                      <th> DIFFCOUNT </th>
                      <th> HEMATROCIT </th>
                      <th> THROMBOSIT </th>
                      <th> ERITHROSIT </th>
                      <th> SGOT </th>
                      <th> SGPT </th>
                      <th> HBSAG </th>
                      <th> HBSAB </th>
                      <th> CHOLESTEROL </th>
                      <th> HDL </th>
                      <th> LDL </th>
                      <th> TRIGLISERIDA </th>
                      <th> UREA </th>
                      <th> ASAM URAT </th>
                      <th> CREATININ </th>
                      <th> PUASA </th>
                      <th> DUAJAMPP </th>
                      <th> ALBUMIN </th>
                      <th> REDUKSI </th>
                      <th> PH </th>
                      <th> SEDERITHROSIT 1 </th>
                      <th> SEDERITHROSIT 2 </th>
                      <th> SEDLEKOSIT 1 </th>
                      <th> SEDLEKOSIT 2 </th>
                      <th> SEDEPITHEL 1 </th>
                      <th> SEDEPITHEL 2 </th>
                      <th> SEDKRISTAL </th>
                      <th> LAIN LAIN </th>
                      <th> AMPHETAMIN </th>
                      <th> OPIUM </th>
                      <th> CHOLINES </th>
                      <th> G6PD </th>
                      <th> KELAINAN </th>
                      <th> UROBILINOGEN </th>
                      <th> BILIRUBIN </th>
                      <th> ALK </th>
                      <th> HIV </th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                    <td> <label style="font-weight: bold;" id="Tgl_Periksa"></label> </th>
                    <td> <label style="font-weight: bold;" id="Hemo_globin"></label> </th>
                    <td> <label style="font-weight: bold;" id="leko_sit"></label> </th>
                    <td> <label style="font-weight: bold;" id="led_1"></label> </th>
                    <td> <label style="font-weight: bold;" id="led_2"></label> </th>
                    <td> <label style="font-weight: bold;" id="Diff_Count"></label> </th>
                    <td> <label style="font-weight: bold;" id="Hema_tocrit"></label> </th>
                    <td> <label style="font-weight: bold;" id="Throm_bosit"></label> </th>
                    <td> <label style="font-weight: bold;" id="Eri_throsit"></label> </th>
                    <td> <label style="font-weight: bold;" id="SG_OT"></label> </th>
                    <td> <label style="font-weight: bold;" id="SG_PT"></label> </th>
                    <td> <label style="font-weight: bold;" id="HBs_AG"></label> </th>
                    <td> <label style="font-weight: bold;" id="HBs_AB"></label> </th>
                    <td> <label style="font-weight: bold;" id="Choles_tereol"></label> </th>
                    <td> <label style="font-weight: bold;" id="H_DL"></label> </th>
                    <td> <label style="font-weight: bold;" id="L_DL"></label> </th>
                    <td> <label style="font-weight: bold;" id="Trigli_serida"></label> </th>
                    <td> <label style="font-weight: bold;" id="U_rea"></label> </th>
                    <td> <label style="font-weight: bold;" id="Asam_Urat"></label> </th>
                    <td> <label style="font-weight: bold;" id="Crea_tinin"></label> </th>
                    <td> <label style="font-weight: bold;" id="Pu_asa"></label> </th>
                    <td> <label style="font-weight: bold;" id="dua_JamPP"></label> </th>
                    <td> <label style="font-weight: bold;" id="Albu_min"></label> </th>
                    <td> <label style="font-weight: bold;" id="Re_duksi"></label> </th>
                    <td> <label style="font-weight: bold;" id="p_H"></label> </th>
                    <td> <label style="font-weight: bold;" id="SedEri_throsit1"></label> </th>
                    <td> <label style="font-weight: bold;" id="SedEri_throsit2"></label> </th>
                    <td> <label style="font-weight: bold;" id="SedLe_kosit1"></label> </th>
                    <td> <label style="font-weight: bold;" id="SedLe_kosit2"></label> </th>
                    <td> <label style="font-weight: bold;" id="SedE_pithel1"></label> </th>
                    <td> <label style="font-weight: bold;" id="SedE_pithel2"></label> </th>
                    <td> <label style="font-weight: bold;" id="Sed_Kristal"></label> </th>
                    <td> <label style="font-weight: bold;" id="Lain_lain"></label> </th>
                    <td> <label style="font-weight: bold;" id="Amphe_tamin"></label> </th>
                    <td> <label style="font-weight: bold;" id="Opi_um"></label> </th>
                    <td> <label style="font-weight: bold;" id="Cho_lines"></label> </th>
                    <td> <label style="font-weight: bold;" id="G6_PD"></label> </th>
                    <td> <label style="font-weight: bold;" id="Ke_lainan"></label> </th>
                    <td> <label style="font-weight: bold;" id="Uro_bilinogen"></label> </th>
                    <td> <label style="font-weight: bold;" id="Bili_rubin"></label> </th>
                    <td> <label style="font-weight: bold;" id="A_lk"></label> </th>
                    <td> <label style="font-weight: bold;" id="H_iv"></label> </th>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer" style="display:block; text-align: left;">
        <button type="button" class="btn green" data-dismiss="modal">Oke</button>
      </div>
  </div>
</div>-->


<!-- modal edit selesai -->
<div id="selesai_dt_pasien_labo" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Data Pasien Laboratorium</h4>
      </div>
      <div class="modal-body">
        <span>Pasien dengan,
        <!--<br/>NIK : <label style="font-weight: bold;" id="niklabelselesai"></label>
        <br/>Tanggal : <label style="font-weight: bold;" id="tglperiksalabelselesai"></label>-->
        <br/>Nomor Registrasi : <label style="font-weight: bold;" id="noreg2selesai"></label>
        <br/>Nomor RM : <label style="font-weight: bold;" id="normlabelselesai"></label>
        <!--<br/>Nama : <label style="font-weight: bold;" id="namalabelselesai"></label>
        <br/>Tanggal Lahir : <label style="font-weight: bold;" id="tgllahirlabelselesai"></label> / Umur : <label style="font-weight: bold;" id="usialabelselesai"></label> Tahun
        <br/>Jenis Kelamin : <label style="font-weight: bold;" id="kelaminlabelselesai"></label>
        <br/>Alamat : <label style="font-weight: bold;" id="alamatlabelselesai"></label>
        <br/>Dokter : <label style="font-weight: bold;" id="nmdokterlabelselesai"></label>
        <br/>Diagnosis : <label style="font-weight: bold;" id="diagnosislabelselesai"></label>
        <br/>Diagnosis Banding : <label style="font-weight: bold;" id="diagnosisbandinglabelselesai"></label>-->, Melakukan Pemeriksaan :</span>
        <br/>
        <input type="hidden" id="noreglaboratselesai" name="noreglaboratselesai" value="" class="form-control">
        <input type="hidden" id="normlaboratselesai" name="normlaboratselesai" value="" class="form-control">
        <br/>
        <div id="result_tableselesai"></div>
        <br/>Apakah Sudah Dilakukan Pemeriksaan?
      </div>
      <div id="alert-msg-ubahpasienlbselesai"></div>
      <div class="modal-footer" style="display:block; text-align: left;">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn green" id="ubahpasienlb1selesai" name="ubahpasienlb1selesai">Ya</button>
      </div>
  </div>
</div>
