<div class="page-container">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
      <!-- BEGIN SIDEBAR MENU -->
      <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
      <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
      <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
      <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
      <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
      <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
      <div class="page-sidebar-menu page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 0px;">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler-wrapper hidden">
          <div class="sidebar-toggler">
            <span></span>
          </div>
        </div>
        <div class="nav-item">
          <div class="nav-link nav-toggle">
            <div class="nav-link nav-toggle dashboard-stat2" style="position:relative; display: block; margin-bottom: 0em; margin-top: -0.5em; overflow-x: hidden;">
              <div class="display" >
                <div class="icon number" style="position:absolute; top:120px; right:10px">
                  <i class="icon-user"></i>
                </div>
                <span style="font-size:10px; color:#BFBFBF"><b>Status Alergi Obat Pasien :</b></span><br>
                <?php
                $alergiobat = '';
                if($alergiobat != "")
                {
                  ?>
                  <div class="bg-red bg-font-red" style="margin-bottom: -1.5em;">
                    <div style="text-align:center">
                      <span style="font-size:12px"><b>
                        <a class="bg-font-red" data-toggle="modal" href="#ModalLihatAlergi"> Memiliki Alergi Obat </a>
                      </b></span><br>
                      <div id="ModalLihatAlergi" class="modal fade modalInput" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="btn-group btn-group btn-group-justified">
                              <div class="col-md-6">
                                <button disable type="button" class="btn white">
                                  <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                  <span style="font-size:14px"><b><?php echo $norm?></b></span>
                                </button>
                              </div>
                              <div class="col-md-6">
                                <button disable type="button" class="btn white">
                                  <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                  <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="modal-header bg-blue bg-font-blue col-md-6">
                            <h4 class="modal-title"><center><b>Daftar Alergi Obat Pasien</b></center></h4>
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-12">
                              <span style="font-size:14px;"><?php echo $alergiobat ?></span><br>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn blue">Tutup</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <?php
                  //echo "Pasien Memiliki Alergi Obat";
                }
                else
                {
                  ?>
                  <div class="bg-white bg-font-black" style="margin-bottom: -1.5em;">
                    <div style="text-align:center">
                      <span style="font-size:12px"><b>
                        Tidak Memiliki Alergi Obat
                      </b></span><br>
                    </div>
                  </div>
                  <?php
                  //echo "Pasien Tidak Memiliki Alergi Obat";
                }
                ?>
                <br>
                <hr color="yellow" style="display: block; margin-top: 0.2em; margin-bottom: 0em; margin-left: auto; margin-right: auto; border-style: inset; border-width: 1px; height:1px; width:100%">
                <span style="font-size:10px; color:#BFBFBF"><b>Tanggal Kontrol Pasien :</b></span><br>
                <span style="font-size:12px"><b>Tidak Ada</b></span><br>
                <!--
                <?php
                if($alergiobat != "")
                {
                  ?>
                  <div class="bg-red bg-font-red" style="margin-bottom: -1.5em;">
                    <div style="text-align:center">
                      <span style="font-size:12px"><b>
                        Tidak Memiliki Alergi Obat
                      </b></span><br>
                    </div>
                  </div>
                  <?php
                }
                else
                {
                  ?>
                  <div class="bg-white bg-font-black" style="margin-bottom: -1.5em;">
                    <div style="text-align:center">
                      <span style="font-size:12px"><b>
                        Tidak Memiliki Alergi Obat
                      </b></span><br>
                    </div>
                  </div>
                  <?php
                }
                ?>-->
                <br>
                <hr color="yellow" style="display: block; margin-top: -1em; margin-bottom: 0.2em; margin-left: auto; margin-right: auto; border-style: inset; border-width: 1px; height:1px; width:100%">
                <span style="font-size:10px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                <span style="font-size:18px"><b><?php echo $norm?></b></span>
                <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: 0.2em; margin-left: auto; margin-right: auto; border-style: inset; border-width: 1px; height:1px; width:100%">
                <!--<span style="font-size:10px; color:#BFBFBF"><b>Nomor RM :</b></span><br>
                <span style="font-size:15px"><b><?php echo $norm?></b></span><br>-->
                <span style="font-size:10px; color:#BFBFBF"><b>Nomor Registrasi :</b></span><br>
                <span style="font-size:12px"><b><?php echo $noreg?></b></span><br>
                <span style="font-size:10px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                <span style="font-size:12px"><b><?php echo $nama?></b></span><br>
                <span style="font-size:10px; color:#BFBFBF"><b>Tempat, Tanggal Lahir Pasien :</b></span><br>
                <span style="font-size:12px"><b><?php echo $Tlahir,$Tgllahir?></b></span><br>
                <span style="font-size:10px; color:#BFBFBF"><b>Usia Pasien :</b></span><br>
                <span style="font-size:12px"><b><?php echo $Utahun?> Tahun, <?php echo $Ubulan?> Bulan</b></span><br>
                <span style="font-size:10px; color:#BFBFBF"><b>Jenis Kelamin Pasien :</b></span><br>
                <span style="font-size:12px"><b><?php echo $jk?></b></span><br>
                <span style="font-size:10px; color:#BFBFBF"><b>Alamat Pasien :</b></span><br>
                <span style="font-size:12px"><b><?php echo $alamat?></b></span><br>
                <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: -1.3em; margin-left: auto; margin-right: auto; border-style: inset; border-width: 1px; height:1px; width:100%">
              </div>
              <span style="font-size:10px; color:#BFBFBF"><b>Customer :</b></span><br>
              <div class="bg-blue bg-font-blue" style="margin-bottom: -1.5em;">
                <div style="text-align:center">
                  <span style="font-size:12px"><b>Jenis Pasien</b></span><br>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-link nav-toggle">
            <div class="nav-link nav-toggle bg-blue-dark" style="position:relative; display: block; margin-bottom: 0em; margin-top: 0em; overflow-x: hidden;">
              <div class="display" >
                <div style="text-align:center">
                  <button type="button" class="btn blue-dark mt-ladda-btn ladda-button" data-style="zoom-in" data-toggle="modal" href="#ModalLihatRM">
                  <i class="fa fa-history"></i> <b>Lihat Rekam Medis</b>
                  </button><br>
                </div>

                <div id="ModalLihatRM" class="modal fade" tabindex="-1" data-backdrop="static" data-width="80%" data-keyboard="false" style="width:90%">
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
                      <h4 class="modal-title"><center><b>Rekam Medis Pasien</b></center></h4>
                    </div>
                    <div class="col-md-4 bg-blue">
                      <div class="btn-group btn-group btn-group-justified" style="width:100%">
                        <a type="button" id="btnAsesmenSidebarEMR" class="btn disabled white" style="height:55px; width:33%; font-size:12px"><b>Histori </br> Asesmen Awal</b></a>
                        <a type="button" id="btnRajalSidebarEMR" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Lihat Histori </br> Asesmen Ulang</b></a>
                        <a type="button" id="btnLabrSidebarEMR" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Lihat Histori </br> Lab Dan Radiologi</b></a>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" id="statsSidebarEMR" value="asesmen">
                  <div class="modal-body" id="AsesmenSidebarEMR">
                    <br>
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                      <thead class="btn-success">
                        <tr>
                          <th><center> Tanggal </center></th>
                          <th><center> Klinik </center></th>
                          <th><center> Diagnosis </center></th>
                          <th><center> Nama Dokter </center></th>
                          <th><center> Nama Perawat </center></th>
                          <th><center> Aksi </center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach($dataTable as $dm)
                          {
                            ?>
                            <tr class="odd gradeX">
                              <td width="10%"><center><?php echo $dm->TANGGAL_PERIKSA; ?></center></td>
                              <td width="15%"><center>(<?php echo $dm->KODEUNIT; ?>) <?php echo $dm->NAMAUNIT; ?></center></td>
                              <td width="30%"><center><?php echo $dm->DIAGNOSIS; ?></center></td>
                              <td width="20%"><center>(<?php echo $dm->KODEDOKTER; ?>) <?php echo $dm->NAMA; ?></center></td>
                              <td width="15%"><center><?php echo $dm->PENANGGUNG_JAWAB_PERAWAT; ?></center></td>
                              <td width="10%">
                                <center>
                                  <a class="btn btn-sm green" data-toggle="modal" data-target="#modalDetilAsesmenEMR"
                                  SEMR-tanggal = "<?php echo $dm->TANGGAL_PERIKSA ?>"
                                  SEMR-jam = "<?php echo $dm->JAM_PERIKSA ?>"
                                  SEMR-hambatankomunikasi = "<?php echo $dm->HAMBATAN_KOMUNIKASI ?>"
                                  SEMR-sistolik = "<?php echo $dm->SISTOLIK ?>"
                                  SEMR-diastolik = "<?php echo $dm->DIASTOLIK ?>"
                                  SEMR-nadi1 = "<?php echo $dm->NADI_1 ?>"
                                  SEMR-nadi2 = "<?php echo $dm->NADI_2 ?>"
                                  SEMR-suhutubuh = "<?php echo $dm->SUHU_TUBUH ?>"
                                  SEMR-respiratory1 = "<?php echo $dm->RESPIRATORY_1 ?>"
                                  SEMR-respiratory2 = "<?php echo $dm->RESPIRATORY_2 ?>"
                                  SEMR-beratbadan = "<?php echo $dm->BERAT_BADAN ?>"
                                  SEMR-tinggibadan = "<?php echo $dm->TINGGI_BADAN ?>"
                                  SEMR-bmi = "<?php echo $dm->NILAI_BMI ?>"
                                  SEMR-kategoribmi = "<?php echo $dm->KATEGORI_BMI ?>"
                                  SEMR-lingkarkepala = "<?php echo $dm->LINGKAR_KEPALA ?>"
                                  SEMR-ResikoJatuh = "<?php echo $dm->RESIKO_JATUH ?>"
                                  SEMR-ketResikoJatuh = "<?php echo $dm->KET_RESIKO_JATUH ?>"
                                  SEMR-hasilResikoJatuh = "<?php echo $dm->HASIL_RESIKO_JATUH ?>"
                                  SEMR-tindakResikoJatuh = "<?php echo $dm->TINDAKAN_RESIKO_JATUH ?>"
                                  SEMR-keluhanNyeri = "<?php echo $dm->KELUHAN_NYERI ?>"
                                  SEMR-ketKeluhanNyeri = "<?php echo $dm->KET_KELUHAN_NYERI ?>"
                                  SEMR-skorKeluhanNyeri = "<?php echo $dm->SKOR_KELUHAN_NYERI ?>"
                                  SEMR-skalaKeluhanNyeri = "<?php echo $dm->SKALA_KELUHAN_NYERI ?>"
                                  SEMR-catatan = "<?php echo $dm->CATATAN_PERAWAT ?>"
                                  SEMR-isiPerawat = "<?php echo $dm->USERNAME ?>"
                                  id="detilAsesmenEMR"> Lihat Detil <i class="fa fa-search"></i></a>
                                </center>
                              </td>
                            </tr>
                            <?php
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="modal-body collapse" id="RajalSidebarEMR">
                    <br>
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_9">
                      <thead class="btn-success">
                        <tr>
                          <th><center> Tanggal </center></th>
                          <th><center> Klinik </center></th>
                          <th><center> Diagnosis </center></th>
                          <th><center> Nama Dokter </center></th>
                          <th><center> Nama Perawat </center></th>
                          <th><center> Aksi </center></th>
                          <th><center> Aksi </center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach($dataTable2 as $dn)
                          {
                            ?>
                            <tr class="odd gradeX">
                              <td width="10%"><center><?php echo $dn->TANGGAL_PERIKSA; ?></center></td>
                              <td width="15%"><center>(<?php echo $dn->KODEUNIT; ?>) <?php echo $dn->NAMAUNIT; ?></center></td>
                              <td width="30%"><center><?php echo $dn->DIAGNOSIS; ?></center></td>
                              <td width="20%"><center>(<?php echo $dn->KODEDOKTER; ?>) <?php echo $dn->NAMA; ?></center></td>
                              <td width="15%"><center><?php echo $dn->PENANGGUNG_JAWAB_PERAWAT; ?></center></td>
                              <td width="10%">
                                <center>
                                  <a class="btn btn-sm green" data-toggle="modal" data-target="#modalDetilAsesmenEMR"
                                  SEMR-tanggal = "<?php echo $dn->TANGGAL_PERIKSA ?>"
                                  SEMR-jam = "<?php echo $dn->JAM_PERIKSA ?>"
                                  SEMR-hambatankomunikasi = "<?php echo $dn->HAMBATAN_KOMUNIKASI ?>"
                                  SEMR-sistolik = "<?php echo $dn->SISTOLIK ?>"
                                  SEMR-diastolik = "<?php echo $dn->DIASTOLIK ?>"
                                  SEMR-nadi1 = "<?php echo $dn->NADI_1 ?>"
                                  SEMR-nadi2 = "<?php echo $dn->NADI_2 ?>"
                                  SEMR-suhutubuh = "<?php echo $dn->SUHU_TUBUH ?>"
                                  SEMR-respiratory1 = "<?php echo $dn->RESPIRATORY_1 ?>"
                                  SEMR-respiratory2 = "<?php echo $dn->RESPIRATORY_2 ?>"
                                  SEMR-beratbadan = "<?php echo $dn->BERAT_BADAN ?>"
                                  SEMR-tinggibadan = "<?php echo $dn->TINGGI_BADAN ?>"
                                  SEMR-bmi = "<?php echo $dn->NILAI_BMI ?>"
                                  SEMR-kategoribmi = "<?php echo $dn->KATEGORI_BMI ?>"
                                  SEMR-lingkarkepala = "<?php echo $dn->LINGKAR_KEPALA ?>"
                                  SEMR-ResikoJatuh = "<?php echo $dn->RESIKO_JATUH ?>"
                                  SEMR-ketResikoJatuh = "<?php echo $dn->KET_RESIKO_JATUH ?>"
                                  SEMR-hasilResikoJatuh = "<?php echo $dn->HASIL_RESIKO_JATUH ?>"
                                  SEMR-tindakResikoJatuh = "<?php echo $dn->TINDAKAN_RESIKO_JATUH ?>"
                                  SEMR-keluhanNyeri = "<?php echo $dn->KELUHAN_NYERI ?>"
                                  SEMR-ketKeluhanNyeri = "<?php echo $dn->KET_KELUHAN_NYERI ?>"
                                  SEMR-skorKeluhanNyeri = "<?php echo $dn->SKOR_KELUHAN_NYERI ?>"
                                  SEMR-skalaKeluhanNyeri = "<?php echo $dn->SKALA_KELUHAN_NYERI ?>"
                                  SEMR-catatan = "<?php echo $dn->CATATAN_PERAWAT ?>"
                                  SEMR-isiPerawat = "<?php echo $dn->USERNAME ?>"
                                  id="detilAsesmenEMR"> Lihat Detil <i class="fa fa-search"></i></a>
                                </center>
                              </td>
                            </tr>
                            <?php
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="modal-body collapse" id="LabRadSidebarEMR">
                    <br>
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_10">
                      <thead class="btn-success">
                        <tr>
                          <th><center> Noreg </center></th>
                          <th><center> Tanggal </center></th>
                          <th><center> Diagnosis / Oleh </center></th>
                          <th><center> Item </center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <div class="panel-group accordion scrollable" id="accordion2">
                          <?php
                            $noaccor = 1;
                            $aksilabo = 0;
                            foreach($dataTable3 as $dt)
                            {
                              ?>
                              <tr class="odd gradeX">
                                <td width="10%"><center><?php echo $dt->NOREG; ?></center></td>
                                <td width="15%"><center><?php echo $dt->TANGGAL_PERIKSA; ?></center></td>
                                <td width="25%">- Diagnosis : <center><?php echo $dt->DIAGNOSIS; ?></br></center></hr>- Oleh : <center><?php echo $dt->NAMA; ?></center></td>
                                <td width="50%">
                                  <?php
                                  $adaradio = $this->db->get("EMR_DETAIL_PASIEN_RADIO where ID_PEMERIKSAAN = '$dt->ID_PEMERIKSAAN'")->num_rows();
                                  $adalabo = $this->db->get("EMR_DETAIL_PASIEN_LABO where ID_PEMERIKSAAN = '$dt->ID_PEMERIKSAAN'")->num_rows();
                                  if($adaradio > 0)
                                  {?>
                                  <div class="panel panel-default">
                                    <div class="panel-heading bg-grey-salsa bg-font-grey-salsa">
                                      <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_A<?php echo $noaccor;?>" aria-expanded="false"> RADIOLOGI (Klik untuk melihat) </a>
                                      </h4>
                                    </div>
                                    <div id="collapse_A<?php echo $noaccor;?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                      <div class="panel-body bg-grey-salsa bg-font-grey-salsa">
                                        <center>
                                          <table style="width:100%">
                                            <?php
                                            foreach($dataTable4 as $dg)
                                            {
                                              if($dt->NOREG == $dg->NOREG)
                                              {
                                              ?>
                                              <tr>
                                                <td width="40%" class="bg-grey-salsa bg-font-grey-salsa"><center><?php echo $dg->NM_DT_RADIO; ?></center></td>
                                                <td width="40%" class="bg-grey-salsa bg-font-grey-salsa"><center><?php echo $dg->STATUS_DETAIL_PASIEN_RADIO; ?></center></td>
                                                 <td width="20%" class="bg-grey-salsa bg-font-grey-salsa">
                                                  <center>
                                                    <a class="btn btn-sm green" data-toggle="modal" data-target="#modalDetilAsesmenRadioEMR"
                                                    RadioEMR-noreg = "<?php echo trim($dg->NOREG) ?>"
                                                    RadioEMR-namaradio = "<?php echo $dg->NM_DT_RADIO ?>"
                                                    RadioEMR-koderadio = "<?php echo $dg->KODE_DT_RADIO ?>"
                                                    RadioEMR-tanggal = "<?php echo $dg->TANGGAL_PERIKSA ?>"
                                                    RadioEMR-jam = "<?php echo $dg->JAM_PERIKSA ?>"
                                                    id="detilAsesmenRadioEMR"> Lihat Detil <i class="fa fa-search"></i></a>
                                                  </center>
                                                </td>
                                              </tr>
                                              <?php
                                              }
                                            } ?>
                                          </table>
                                        </center>
                                      </div>
                                    </div>
                                  </div>
                                  <?php
                                  }
                                  $noaccor = $noaccor + 1;
                                  if($adalabo > 0)
                                  {?>
                                  <div class="panel panel-default">
                                    <div class="panel-heading bg-red-pink bg-font-red-pink">
                                      <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_A<?php echo $noaccor;?>" aria-expanded="false"> LABORATORIUM (Klik untuk melihat) </a>
                                      </h4>
                                    </div>
                                    <div id="collapse_A<?php echo $noaccor;?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                      <div class="panel-body bg-red-pink bg-font-red-pink">
                                        <center>
                                          <table style="width:100%">
                                            <?php
                                            foreach($dataTable5 as $dl)
                                            {
                                              $aksilabo = $aksilabo + 1;
                                              if($dt->NOREG == $dl->NOREG)
                                              {
                                              ?>
                                              <tr>
                                                <td width="40%" class="bg-red-pink bg-font-red-pink"><center><?php echo $dl->NM_DT_LABORATORIUM; ?></center></td>
                                                <td width="40%" class="bg-red-pink bg-font-red-pink"><center><?php echo $dl->STATUS_DETAIL_PASIEN_LABO; ?></center></td>
                                                <?php
                                                if($aksilabo == 1){ ?>
                                                <td rowspan="<?php echo $aksilabo; ?>" width="20%" class="bg-red-pink bg-font-red-pink">
                                                  <center>
                                                    <a class="btn btn-sm green" id="" href="<?php echo base_url(); ?>hasillab/<?=trim($dt->NOREG);?>.pdf" target="_blank"> Lihat Detil <i class="fa fa-search"></i></a>
                                                  </center>
                                                </td>
                                                <?php } ?>
                                              </tr>
                                              <?php
                                              }
                                            }
                                            $aksilabo = 0;?>
                                          </table>
                                        </center>
                                      </div>
                                    </div>
                                  </div>
                                  <?php } ?>
                                </td>
                              </tr>
                              <?php $noaccor = $noaccor + 1; ?>
                              <?php
                            }
                          ?>
                        </div>
                      </tbody>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="" data-dismiss="modal" class="btn blue">Tutup</button>
                  </div>
                </div>
                <div id="modalDetilAsesmenEMR" class="modal fade modalInput" tabindex="-1" data-width="80%" data-backdrop="static" data-keyboard="false">
                  <div class="modal-content">
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
                      <div class="modal-header bg-blue bg-font-blue col-md-5">
                        <h4 class="modal-title"><center><b>Rekam Medis Pasien Histori Asesmen Awal</b></center></h4>
                      </div>
                      <div class="col-md-3">
                        <div class="btn-group btn-group btn-group-justified" style="width:100%">
                          <button disable type="button" class="btn white" style="height:55px; width:50%">
                            <span style="font-size:8px; color:#BFBFBF"><b>Tanggal :</b></span><br>
                            <span style="font-size:14px" id="SEMRtanggal"><b></b></span>
                          </button>
                          <button disable type="button" class="btn white" style="height:55px; width:50%">
                            <span style="font-size:8px; color:#BFBFBF"><b>Jam :</b></span><br>
                            <span style="font-size:14px" id="SEMRjam"><b></b></span>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="modal-body">
                      <div class="col-md-12">
                        <div class="portlet light bordered">
                          <div class="portlet-title">
                            <div class="caption font-red-intense">
                              <i cla ss="fa fa-heartbeat font-red-intense"></i>
                              <span class="caption-subject bold uppercase"> Pemeriksaan Perawat</span>
                              <span class="caption-helper">Klik untuk melihat detil ----></span>
                            </div>
                            <div class="tools">
                              <a href="" class="in expand" data-original-title="" title=""> </a>
                            </div>
                          </div>
                          <div class="portlet-body collapse">
                            <div data-toggle="context">
                              <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        Tekanan Darah
                                      </div>
                                      <div class="col-md-3 col-sm-3 col-xs-3">
                                        : <label style="font-weight: bold;" id="SEMRsistolik"><center>0</center></label>
                                      </div>
                                      <div class="col-md-3 col-sm-3 col-xs-3">
                                        / <label style="font-weight: bold;" id="SEMRdiastolik"><center>0</center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b>mmHg</b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Nadi
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRn"><center>0</center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b>x/mnt</b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Suhu Tubuh
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRt"><center>0</center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b>&deg;C</b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Respiratory
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRrr"><center>0</center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b>x/mnt</b></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Berat Badan
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRbb"><center>0</center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b>kg</b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Tinggi Badan
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRtb"><center>0</center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b>cm</b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        BMI
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRbmi"><center>0</center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Resiko Jatuh
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRskornyeri"><center>0</center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b>/10</b></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                      Catatan Perawat
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                      : <label style="font-weight: bold;" id="SEMRcatatan"><center>0</center></label>
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
                          <div class="portlet-title">
                            <div class="caption font-red-intense">
                              <a href="" class="in expand" data-original-title="" title="">
                                <i class="fa fa-heartbeat font-red-intense"></i>
                                <span class="caption-subject bold uppercase"> Pemeriksaan Dokter</span>
                                <span class="caption-helper">Klik untuk melihat detil ----></span>
                              </a>
                            </div>
                          </div>
                          <div class="portlet-body collapse">
                            <div data-toggle="context">
                              <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Keluhan Utama
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRtd"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Riwayat Penyakit Sekarang
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRn"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Riwayat Penyakit Dahulu
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRt"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Riwayat Penyakit Keluarga
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRrr"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Riwayat Sosial
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRbb"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Keadaan Umum
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRtb"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Pemeriksaan Fisik Kepala
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRbmi"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Pemeriksaan Fisik Thorax (Cor)
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRskornyeri"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                      Pemeriksaan Fisik Thorax (Pulmo)
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                      : <label style="font-weight: bold;" id="SEMRcatatan"><center></center></label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
                <div id="modalDetilAsesmenRadioEMR" class="modal fade modalInput" tabindex="-1" data-width="80%" data-backdrop="static" data-keyboard="false">
                  <div class="modal-content">
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
                    <div class="modal-header bg-blue bg-font-blue col-md-8">
                      <h4 class="modal-title"><center><b>Rekam Medis Pasien Histori Asesmen Awal</b></center></h4>
                    </div>
                    <div class="modal-body">
                      <label>Tanggal :</label><label style="font-weight: bold;" id="RadioEMRtanggal"></label>
                      <label>Jam :</label><label style="font-weight: bold;" id="RadioEMRjam"></label></br>
                      <div class="col-md-6">
                        <div class="portlet light bordered">
                          <div class="portlet-title">
                            <div class="caption font-red-intense">
                              <i class="fa fa-heartbeat font-red-intense"></i>
                              <span class="caption-subject bold uppercase"> Hasil Rongten <span id="RadioEMRnamaradio"></span> </span>
                            </div>
                            <div class="tools">
                              <a href="" class="collapse" data-original-title="" title=""> </a>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div data-toggle="context">
                              <img width="100%" id="EMR_SIDEBAR_GambarRadio" src="">
                              <center>
                                <label>Nama File :</label><label style="font-weight: bold;" id="RadioEMRnoreg"></label>
                              </center>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="portlet light bordered">
                          <div class="portlet-title">
                            <div class="caption font-red-intense">
                              <i class="fa fa-heartbeat font-red-intense"></i>
                              <span class="caption-subject bold uppercase"> Keterangan Pemeriksaan </span>
                              <span class="caption-helper"></span>
                            </div>
                            <div class="tools">
                              <a href="" class="collapse" data-original-title="" title=""> </a>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div data-toggle="context">
                              <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Keluhan Utama
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRtd"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Riwayat Penyakit Sekarang
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRn"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Riwayat Penyakit Dahulu
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRt"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Riwayat Penyakit Keluarga
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRrr"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Riwayat Sosial
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRbb"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Keadaan Umum
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRtb"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Pemeriksaan Fisik Kepala
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRbmi"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="col-md-6 col-sm-6 col-xs-6">
                                        Pemeriksaan Fisik Thorax (Cor)
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-4">
                                        : <label style="font-weight: bold;" id="SEMRskornyeri"><center></center></label>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i style="font-size:12px"><b></b></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                      Pemeriksaan Fisik Thorax (Pulmo)
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                      : <label style="font-weight: bold;" id="SEMRcatatan"><center></center></label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <label>BMI :</label><label style="font-weight: bold;" id="SEMRbmi"></label>
                      <label>Lingkar kepala :</label><label style="font-weight: bold;" id="SEMRlingkarkepala"></label>
                      <label>Alat bantu :</label><label style="font-weight: bold;" id="SEMRalatbantu"></label>
                      <label>Prothesis :</label><label style="font-weight: bold;" id="SEMRprothesis"></label>
                      <label>Cacat tubuh:</label><label style="font-weight: bold;" id="SEMRcacattubuh"></label>
                      <label>Skor nyeri :</label><label style="font-weight: bold;" id="SEMRskornyeri"></label>
                      <label>Catatan :</label><label style="font-weight: bold;" id="SEMRcatatan"></label>
                      <label>Penanggung jawab :</label><label style="font-weight: bold;" id="SEMRpenanggungjawab"></label>
                      <center>
                        </br>
                        Data yang baru saja dimasukkan tidak akan tersimmpan apabila anda keluar dari halaman berikut.
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

                <div style="text-align:center">
                  <button id="btnKembaliEMR" name="btnKembaliEMR" class="btn btn-primary mt-ladda-btn ladda-button blue-dark" data-style="zoom-in" data-target="#modalKembaliEMR" data-toggle="modal" data-type="info">
                  <i class="fa fa-arrow-left"></i> <b>Kembali ke dashboard</b>
                  </button><br>
                </div>
                <div id="modalKembaliEMR" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><center><b>Anda yakin ingin kembali ke dashboard?</b></center></h4>
                    </div>
                    <div class="modal-body">
                      <center>
                        <img src="<?php echo base_url().'assets/pages/img/Icon/minion.gif'?>" style="width:50%">
                        </br>
                        Data yang baru saja dimasukkan tidak akan tersimmpan apabila anda keluar dari halaman berikut.
                      </center>
                    </div>
                    <div class="modal-footer">
                      <center>
                        <div class="btn-group btn-group btn-group-justified" style="width:50%">
                            <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tidak</a>
                            <a type="button" class="btn red" href="<?php echo site_url('dashboard_igd') ?>" style="width:50%">Ya (keluar)</a>
                        </div>
                      </center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </br>
          </br>
          </br>
          </br>
          </br>
          <div class="page-sidebar-wrapper hidden-sm hidden-xs" style="position:fixed; bottom:30px; left:0px; text-color:white">
            <div class="bg-red-soft bg-font-red-soft col-sm-12 m-b-xs text-center" style="width:235px; height: 70px">
              <h10>
              <b style="font-size:35px; text-align:center" id="clock"></b><br>
              <?php
              $tanggal= mktime(date("m"),date("d"),date("Y"));
              echo "<b>" .date("d-M-Y", $tanggal)." </b> ";
              ?>
              </h10>
            </div>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU -->
      <!-- END SIDEBAR MENU -->
    </div>

  </div>
