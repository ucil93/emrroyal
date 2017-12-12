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
                <div class="bg-white bg-font-black" style="margin-bottom: -1.5em;">
                  <div style="text-align:center">
                    <span style="font-size:12px"><b>
                      Tidak Memiliki Alergi Obat
                    </b></span><br>
                  </div>
                </div>
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
                <span style="font-size:10px; color:#BFBFBF"><b>Tahun Lahir Pasien :</b></span><br>
                <span style="font-size:12px"><b><?php echo $ttl?></b></span><br>
                <span style="font-size:10px; color:#BFBFBF"><b>Usia Pasien :</b></span><br>
                <span style="font-size:12px"><b><?php echo abs(date('Y')-$ttl)?> Tahun</b></span><br>
                <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: -1.3em; margin-left: auto; margin-right: auto; border-style: inset; border-width: 1px; height:1px; width:100%">
              </div>
              <span style="font-size:10px; color:#BFBFBF"><b>Customer :</b></span><br>
              <div class="bg-blue bg-font-blue" style="margin-bottom: -1.5em;">
                <div style="text-align:center">
                  <span style="font-size:12px"><b>Pasien umum</b></span><br>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-link nav-toggle">
            <div class="nav-link nav-toggle bg-blue-dark" style="position:relative; display: block; margin-bottom: 0em; margin-top: 0em; overflow-x: hidden;">
              <div class="display" >
                <div style="text-align:center">
                  <button type="button" class="btn blue-dark mt-ladda-btn ladda-button" data-style="zoom-in" data-toggle="modal" href="#ModalKaitkanPasien">
                  <i class="fa fa-history"></i> <b>Kaitkan ke data pasien</b>
                  </button><br>
                </div>
                <div id="ModalKaitkanPasien" class="modal fade" tabindex="-1" data-backdrop="static" data-width="80%" data-keyboard="false" style="width:90%">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="btn-group btn-group btn-group-justified" style="width:100%">
                        <button disable type="button" class="btn white" style="height:55px; width:30%">
                          <span style="font-size:8px; color:#BFBFBF"><b>ID PEMERIKSAAN :</b></span><br>
                          <span style="font-size:14px" name><b><?php echo $ID_PEMERIKSAAN?></b></span>
                        </button>
                        <button disable type="button" class="btn white" style="height:55px; width:70%">
                          <span style="font-size:8px; color:#BFBFBF"><b>Nama Alias Pasien :</b></span><br>
                          <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                        </button>
                      </div>
                    </div>
                    <div class="modal-header bg-blue bg-font-blue col-md-4">
                      <h4 class="modal-title"><center><b>Rekam Medis Pasien</b></center></h4>
                    </div>
                    <div class="col-md-4 bg-blue">
                      <div class="btn-group btn-group btn-group-justified" style="width:100%">

                      </div>
                    </div>
                  </div>
                  <div class="modal-body">
                    <br>
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                      <thead class="btn-success">
                        <tr>
                          <th> No Registrasi </th>
                          <th> Norm </th>
                          <th> NIK </th>
                          <th> Nama </th>
                          <th> Customer </th>
                          <th> Status Data </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach($dataTableKait as $dt)
                          {
                            $ada = $this->db->get("EMR_UTAMA_PERIKSA where NORM = '$dt->NORM'")->num_rows();
                              if($ada == 0)
                              {?>
                                <tr class="odd gradeX">
                                  <td><?php echo $dt->NOREG; ?></td>
                                  <td><?php echo $dt->NORM; ?></td>
                                  <td><?php echo $dt->NIK; ?></td>
                                  <td><?php echo $dt->NAMA; ?></td>
                                  <td><?php echo $dt->NMCUST; ?></td>
                                  <td class="bg-white bg-font-white"><center>Belum Pemeriksaan</center></td>
                                  <!--td><?php echo $dt->NAMAUNIT; ?></td>-->
                                  <?php
                                  if($level == "DOKTER IGD")
                                  {?>
                                    <td><input type="text" class="collapse ktDT_noreg" value="<?=$dt->NOREG;?>"><input type="text" class="collapse ktDT_norm" value="<?=$dt->NORM;?>">
                                      <button name="EMR_IGD_KaitData" class="btn green btn-xs EMR_IGD_KaitData" style="width:100%"><i class="fa fa-edit"> Pilih</i></button></td>
                                  <?php }
                                  else
                                  {?>
                                    <td><a class="btn green btn-xs active" style="width:100%" onclick="alert('Pasien masih tidak dapat dipilih \n Dokter yang memiliki hak melakukan Pengkaitan data pasien');"><i class="fa fa-edit"> Pilih</i></a></td>
                                  <?php }?>
                                </tr>
                              <?php
                              }
                              else
                              {?>
                                <tr class="odd gradeX">
                                  <td><?php echo $dt->NOREG; ?></td>
                                  <td><?php echo $dt->NORM; ?></td>
                                  <td><?php echo $dt->NIK; ?></td>
                                  <td><?php echo $dt->NAMA; ?></td>
                                  <td><?php echo $dt->NMCUST; ?></td>
                                  <?php $cekin = $this->db->query("select * from EMR_UTAMA_PERIKSA n, EMR_IGD_TRIASE m where m.ID_PEMERIKSAAN = n.ID_PEMERIKSAAN and n.NORM = '$dt->NORM'")->num_rows();
                                  if($cekin > 0)
                                  {
                                    $cekin2 = $this->db->query("select * from EMR_UTAMA_PERIKSA n, EMR_IGD_TRIASE m where m.ID_PEMERIKSAAN = n.ID_PEMERIKSAAN and n.NORM = '$dt->NORM'")->row()->Triase;
                                    if($cekin2 == 'Hijau'){?>
                                    <td class="bg-green-jungle bg-font-green-jungle"><center>Triase Hijau</center></td>
                                    <?php }
                                    elseif($cekin2 == 'Kuning'){?>
                                    <td class="bg-yellow-crusta bg-font-yellow-crusta"><center>Triase Kuning</center></td>
                                    <?php }
                                    elseif($cekin2 == 'Merah'){?>
                                    <td class="bg-red bg-font-red"><center>Triase Merah</center></td>
                                    <?php }
                                    elseif($cekin2 == 'Hitam'){?>
                                    <td class="bg-grey-gallery bg-font-yellow-casablanca"><center>Triase Hitam</center></td>
                                    <?php }
                                  }
                                  else
                                  {?>
                                  <td class="bg-white bg-font-white"><center>Belum Pemeriksaan</center></td>
                                  <?php }?>
                                  <td><a onclick="alert('Pasien tidak dapat dipilih \n Pasien sudah memiliki data pemeriksaan tersendiri');" target="_blank" class="btn green btn-xs active" style="width:100%"><i class="fa fa-edit"> Pilih</i></a></td>
                                </tr>
                              <?php
                              }
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="" data-dismiss="modal" class="btn blue">Tutup</button>
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
                            <a type="button" class="btn red" href="<?php echo site_url('dashboard') ?>" style="width:50%">Ya (keluar)</a>
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
