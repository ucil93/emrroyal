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
                        <span class="caption-subject bold uppercase"> DATA PASIEN REKAM MEDIK </span>
                      </div>
                  </div>
                  <div class="portlet-body">
                    <div class="row">
                      <button type="button" class="btn green" onclick="cetak()">Print</button>
                      <br/>
                      <br/>
                      <div id="printing_table1">
                        <div id="content">

                          <table border="0">
                             <thead>
                               <tr>
                                 <td style="width:60%"><center>
                                   <table style="border-bottom-style:double;">
                                       <tr>
                                         <td style="width:700px;" rowspan="5"><center> <img src="<?php echo base_url().'assets/pages/img/logo/rspgyani.png'; ?>" height="100" width="160" /> </center></td>
                                         <td style="width:300px; text-align: center; font-size: 24px;"> Rumah Sakit Royal Surabaya </td>
                                       </tr>
                                       <tr>
                                           <td style="width:300px; text-align: center; font-size: 10px;"> Jl. Rungkut Industri I / I Surabaya </td>
                                       </tr>
                                       <tr>
                                           <td style="width:3000px; text-align: center; font-size: 10px;"><b>Emergency call</b> : 031-8484111 </center></td>
                                       </tr>
                                       <tr>
                                           <td style="width:3000px; text-align: center; font-size: 10px;"><b>Call center</b> : 031-8476111 </center></td>
                                       </tr>
                                       <tr>
                                           <td style="width:3000px; text-align: center; font-size: 10px;"><b>e-mail</b> : inf0@rsroyalsurabaya.com </td>
                                       </tr>
                                   </table>
                                 </center></td>
                                 <td style="width:10%"></td>
                                 <td style="width:30%"><center>
                                   <table border="0">
                                       <tr>
                                         <td style="width:300px; text-align: right"><b> RM 12a.<div id="pageFooter"></div> </b></td>
                                       </tr>
                                   </table>
                                   <table style="border:2px solid black;">
                                       <tr>
                                         <td style="width:300px; padding: 10px;"> Nama : <?php echo $nama; ?> (<?php echo $jk; ?>) </td>
                                       </tr>
                                       <tr>
                                           <td style="width:300px; padding: 10px;"> Tgl. Lahir : <?php echo $Tgllahir; ?> </td>
                                       </tr>
                                       <tr>
                                           <td style="width:300px; padding: 10px;"> No. RM : <?php echo $norm; ?> </td>
                                       </tr>
                                   </table>
                                 </center></td>
                               </tr>
                             </thead>
                             <tbody>
                               <tr>
                                 <td colspan="3">
                                  </br>
                                    <table border="0" style="width:100%">
                                      <tr>
                                        <td style="padding: 5px;"> <b>ASESMEN AWAL INSTALASI GAWAT DARURAT ( IGD ) </b></td>
                                      </tr>
                                    </table>
                                    <table border="1" style="width:100%">
                                      <tr>
                                        <td colspan="2" style="padding: 5px;"> <b>ASESMEN KEPERAWATAN</b> (diisi oleh perawat)</td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 5px; width:70%">
                                          Tanggal : <?php echo $tglpemeriksaan; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jam : <?php echo $jampemeriksaan; ?>
                                          </br> Klinik : <?php echo $namaunit; ?>
                                        </td>
                                        <td style="padding: 5px; width:30%">
                                          <b>ALERGI OBAT</b> : <?php if ($alergiobat == '')
                                          {
                                            echo "Tidak";
                                          }
                                          else
                                          {
                                            echo "Ya";
                                            ?>
                                            </br>
                                            <?php echo $alergiobat;
                                          }
                                          ?>
                                        </td>
                                      </tr>
                                    </table>
                                    <table border="1" style="width:100%">
                                      <tr>
                                        <td style="text-align: center; font-weight:bold; width:50%">
                                          Tanda Vital
                                        </td>
                                        <td style="text-align: center; font-weight:bold; width:50%">
                                          Nutrisi
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 5px">
                                          TD : <?php echo $sistolik; ?>/<?php echo $diastolik; ?> mmHg</br>
                                          N : <?php echo $nadi_1; ?> x/mnt (<?php echo $nadi_2; ?>)</br>
                                          t : <?php echo $suhu_tubuh; ?> &deg;C</br>
                                          Rr : <?php echo $respiratory_1; ?> x/mnt (<?php echo $respiratory_2; ?>)</br>
                                        </td>
                                        <td style="padding: 5px">
                                          BB : <?php echo $berat_badan; ?> Kg</br>
                                          TB : <?php echo $tinggi_badan; ?> cm</br>
                                          BMI : <?php echo $nilai_bmi; ?> Kg/m (<?php echo $kategori_bmi; ?>)</br>
                                          Lingkar Kepala : <?php echo $lingkarkepala1; ?> cm ( khusus bayi )</br>
                                        </td>
                                      </tr>
                                    </table>
                                    <table border="1" style="width:100%">
                                      <tr>
                                        <td style="text-align: center; font-weight:bold; width:30%">
                                          Hambatan Komunikasi
                                        </td>
                                        <td style="text-align: center; font-weight:bold; width:70%">
                                          Asesmen Resiko Jatuh
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 5px; width:30%">
                                          <?php echo $hambatan_komunikasi; ?>
                                        </td>
                                        <td style="padding: 5px; width:70%">
                                          <table border="0" style="width:100%">
                                            <tr>
                                              <td rowspan="2" style="padding: 3px; width:70%">
                                                <b>Pengkajian</b></br>
                                                <?php echo $ket_resiko_jatuh; ?>
                                              </td>
                                              <td style="padding: 3px; width:30%">
                                                <b>Hasil</b></br>
                                                <?php echo $hasil_resiko_jatuh; ?>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="padding: 3px; width:30%">
                                                <b>Tindakan</b></br>
                                                <?php echo $tindakan_resiko_jatuh; ?>
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>
                                    </table>
                                    <table border="1" style="width:100%">
                                      <tr>
                                        <td colspan="2" style="text-align: center; font-weight:bold;"> ASESMEN NYERI </td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" style="padding: 5px;">
                                          <table border="0" style="width:100%">
                                            <tr>
                                              <td style="padding: 3px; width:30%">
                                                <b><?php echo $keluhan_nyeri; ?></b></br>
                                                Skor Nyeri : <?php echo $skor_keluhan_nyeri; ?></br>
                                                Skala Nyeri : <?php echo $skala_keluhan_nyeri; ?></br>
                                              </td>
                                              <td style="padding: 3px; width:70%">
                                                <?php echo $ket_keluhan_nyeri; ?>
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="text-align: center; font-weight:bold; width:50%">
                                          Catatan Perawat
                                        </td>
                                        <td style="text-align: center; font-weight:bold; width:50%">
                                          Penanggung Jawab Perawat
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 5px;">
                                          <?php echo $catatan_perawat; ?>
                                        </td>
                                        <td style="padding: 5px;">
                                          <b><?php echo $penanggung_jawab_perawat; ?></b>
                                        </td>
                                      </tr>
                                    </table>
                                 </td>
                               </tr>
                               <tr>
                                 <td colspan="3">
                                   <table border="0" style="width:100%">
                                     <tr>
                                       <td style="padding: 5px;"></b></td>
                                     </tr>
                                   </table>
                                   <table border="1" style="width:100%">
                                     <tr>
                                       <td colspan="2" style="padding: 5px;"> <b>ASESMEN MEDIS</b> (diisi oleh dokter)</td>
                                     </tr>
                                     <tr>
                                       <td colspan="2" style="padding: 5px;"> <b>ANAMNESA</b></td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px; width:20%">
                                         Keluhan Utama
                                       </td>
                                       <td style="padding: 5px; width:80%">
                                         : <?php echo $keluhan_utama; ?>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px;">
                                         Riwayat Penyakit Sekarang
                                       </td>
                                       <td style="padding: 5px;">
                                         : <?php echo $riwayat_penyakit_sekarang; ?>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px;">
                                         Riwayat Penyakit Dahulu
                                       </td>
                                       <td style="padding: 5px;">
                                         : <?php echo $riwayat_penyakit_dahulu; ?>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px;">
                                         Riwayat Penyakit Keluarga
                                       </td>
                                       <td style="padding: 5px;">
                                         : <?php echo $riwayat_penyakit_keluarga; ?>
                                       </td>
                                     </tr>
                                     <!--<tr>
                                       <td style="padding: 5px;">
                                         Riwayat Sosial
                                       </td>
                                       <td style="padding: 5px;">
                                         : <?php echo $riwayat_sosial; ?>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px;">
                                         Riwayat Tumbuh Kembang
                                       </td>
                                       <td style="padding: 5px;">
                                         : <?php echo $riwayat_tumbuh_kembang; ?>
                                       </td>
                                     </tr>-->
                                   </table>
                                 </td>
                               </tr>
                               <tr>
                                 <td colspan="3">
                                   <table border="0" style="width:100%">
                                     <tr>
                                       <td style="padding: 5px;"></b></td>
                                     </tr>
                                   </table>
                                   <table border="1" style="width:100%">
                                     <tr>
                                       <td colspan="2" style="padding: 5px;"> <b>PEMERIKSAAN FISIK</b></td>
                                     </tr>
                                     <!--<tr>
                                       <td colspan="2" style="padding: 5px;">
                                         Keadaan Umum : <?php echo $keadaan_umum; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         Kesadaran Umum : <?php echo $kesadaran_umum; ?></br>
                                         GCS : E <?php echo $gcs_e; ?> ;V <?php echo $gcs_v; ?> ;M <?php echo $gcs_m; ?>
                                       </td>
                                     </tr>-->
                                     <tr>
                                       <td style="padding: 5px; width:20%">
                                         Kepala / leher
                                       </td>
                                       <td style="padding: 5px; width:80%">
                                         <?php echo $pf_kepala; ?>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px;">
                                         Thorax
                                       </td>
                                       <td style="padding: 5px;">
                                         <?php echo $pf_thorax; ?>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px;">
                                         Abdomen
                                       </td>
                                       <td style="padding: 5px;">
                                         <?php echo $pf_abdomen; ?>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px;">
                                         Extermitas
                                       </td>
                                       <td style="padding: 5px;">
                                         <?php echo $pf_ekstremitas; ?>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px;">
                                         Neurologis
                                       </td>
                                       <td style="padding: 5px;">
                                         <?php echo $pf_neurologis; ?>
                                       </td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px;">
                                         Status Lokalis
                                       </td>
                                       <td style="padding: 5px;">
                                         <!--<?php echo $sl_rectum; ?>
                                         <?php echo $sl_tht; ?>
                                         <?php echo $sl_mata; ?>
                                         <?php echo $sl_neurologis; ?>
                                         <?php echo $sl_jiwa; ?>
                                         <?php echo $sl_kulit; ?>
                                         <?php echo $sl_obsgin; ?>-->
                                       </td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px;">
                                         Diagnosis
                                       </td>
                                       <td style="padding: 5px;">
                                         <!--: <?php echo $diagnosis; ?>-->
                                       </td>
                                     </tr>
                                     <tr>
                                       <td style="padding: 5px;">
                                         Diagnosis Banding
                                       </td>
                                       <td style="padding: 5px;">
                                         <!--: <?php echo $diagnosis_banding; ?>-->
                                       </td>
                                     </tr>
                                   </table>
                                 </td>
                               </tr>
                             </tbody>
                            </table>
                        </div>
                      </div>
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

<!-- MODAL OBAT PROSES
<div id="transaksi_pasien_farmasi" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Data Obat Pasien</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idobatutama" name="idobatutama" value="" class="form-control">
        <button type="button" class="btn green" id="btnPrint" name="btnPrint">Print</button>
        <br/>
        <br/>
        <div id="printing_table">
          <br/>
          <center>
          <table style="width:500px">
            <thead class="btn-success">
            </thead>
            <tbody>
              <tr>
                <td style="width:1000px" rowspan="3"><center> <img src="<?php echo base_url().'assets/pages/img/logo/rspgyani.jpg'; ?>" height="75" width="75" /> </center></td>
                <td style="width:300px"><center> Rumah Sakit Petrokimia Gresik </center></td>
              </tr>
              <tr>
                  <td style="width:300px"><center> Jendral A. Yani 69, 61119 </center></td>
              </tr>
              <tr>
                  <td style="width:3000px"><center> Telp. (031) 3978658, 3988877, 3976688. Ext 350 </center></td>
              </tr>
            </tbody>
          </table>
          </center>
          <br/>
          <table class="table table-bordered">
            <thead class="btn-success">
                <tr>
                    <th style="width:50px"><center> Tanggal </center></th>
                    <th style="width:50px"><center> Jam </center></th>
                    <th style="width:50px"><center> Register </center></th>
                    <th style="width:50px"><center> Unit </center></th>
                    <th style="width:50px"><center> Dokter </center></th>
                    <th style="width:50px"><center> Nama Pasien </center></th>
                    <th style="width:50px"><center> Tgl. Lahir </center></th>
                    <th style="width:50px"><center> NIK </center></th>
                    <th style="width:50px"><center> NO RM </center></th>
                    <th style="width:50px"><center> Perusahaan </center></th>
                    <th style="width:50px"><center> Alergi </center></th>
                    <th style="width:50px"><center> Jenis Bayar </center></th>
                </tr>
            </thead>
            <tbody>
              <tr>
                  <td><center><label style="font-weight: bold;" id="tgltampilobatlabel"></label></center></td>
                  <td><center><label style="font-weight: bold;" id="jamtampilobatlabel"></label></center></td>
                  <td><center><label style="font-weight: bold;" id="noregobatlabel"></label></center></td>
                  <td><center><label style="font-weight: bold;" id="namaunitlabel"></label></center></td>
                  <td><center><label style="font-weight: bold;" id="dokterlabel"></label></center></td>
                  <td><center><label style="font-weight: bold;" id="namapasienlabel"></label></br>(<label style="font-weight: bold;" id="kelaminlabel"></label>)</center></td>
                  <td><center><label style="font-weight: bold;" id="tgllahirlabel"></label></br>(<label style="font-weight: bold;" id="usialabel"></label> <b>Tahun</b>)</center></td>
                  <td><center><label style="font-weight: bold;" id="niklabel"></label></center></td>
                  <td><center><label style="font-weight: bold;" id="normlabel"></label></center></td>
                  <td><center><label style="font-weight: bold;" id="nmcustomerlabel"></label></center></td>
                  <td><center><label style="font-weight: bold;" id="alergilabel"></label></center></td>
                  <td><center><label style="font-weight: bold;" id="tagihanlabel"></label></center></td>
              </tr>
            </tbody>
          </table>
          <div id="result_table"></div>
          <table class="table table-bordered">
            <thead class="btn-success">
                <tr>
                    <th style="width:50px"><center> Penerima </center></th>
                    <th style="width:50px"><center> Ambil </center></th>
                    <th style="width:50px"><center> Etiket </center></th>
                    <th style="width:50px"><center> Periksa </center></th>
                    <th style="width:50px"><center> Entry </center></th>
                    <th style="width:50px"><center> Serah / KIE </center></th>
                    <th style="width:100px"><center> Tanda Tangan Penerima Obat (Tagihan) </center></th>
                </tr>
            </thead>
            <tbody>
              <tr>
                  <td><br/><br/><br/></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td colspan="6"><center> E-RESEP HANYA BERLAKU DI RUMAH SAKIT PETROKIMIA GRESIK </center></td>
                  <td><center> <label style="font-weight: bold;" id="namapasienlabel2"> </center></label></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div id="alert-msg-transaksipasienfarmasi"></div>
      <div class="modal-footer" style="display:block; text-align: left;">
        <button type="button" class="btn green" id="ubahstatustransaksi" name="ubahstatustransaksi">Simpan</button>
      </div>
  </div>
</div>-->
