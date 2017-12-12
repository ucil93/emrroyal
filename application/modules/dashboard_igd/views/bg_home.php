<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="background-color: #2b3643; min-height: 249px;">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="row">
            <div class="col-md-12">
              <div class="portlet light portlet-fit portlet-datatable bordered">
                  <div class="portlet-title">
                      <div class="caption">
                        <i class="fa fa-user-md"></i>
                        <span class="caption-subject bold uppercase"> DATA PASIEN IGD</span>
                      </div>
                  </div>
                  <div class="portlet-body">
                      <div class="table-container">
                        <div class="row">
                          <?php echo form_open("dashboard_igd"); ?>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                      <input name="tgl_ubah" id="tgl_ubah" type="text" class="form-control" readonly>
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
                                  <button name="tampil_data" id="tampil_data" value="Tampil Data" class="btn btn-primary mt-ladda-btn ladda-button" data-style="expand-right"> Refresh Data </button>
                              </div>
                          </div>
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <a class="btn bg-green-jungle bg-font-green-jungle" data-target="#modalIGDnoname" data-toggle="modal" style="width:100%" id="IGD_noname"><center><b><i class="fa fa-plus"></i> Pasien tanpa identitas</b></center></a>
                            </div>
                          </div>
                          <div id="modalIGDnoname" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                            <div class="modal-content">
                              <div class="modal-header">
                                  <h4 class="modal-title"><center><b>Data Perkiraan Pasien Tanpa Identitas</b></center></h4>
                              </div>
                              <div class="modal-body">
                                <center>
                                <div class="col-md-12">
                                  <span style="width:40%">Nama Alias : </span>
                                  <input style="width:100%" type="text" name="IGD_noname_nama" id="IGD_noname_nama" value="" class="form-control">
                                </div><hr>
                                <div class="col-md-12">
                                  <?php $toyear = date('Y'); ?>
                                  <span style="width:40%">Tahun Lahir Alias : </span>
                                    <div class="form-group">
                                        <select class="bs-select form-control" name="IGD_noname_tahun" id="IGD_noname_tahun" data-live-search="true" data-size="3">
                                          <?php
                                          for($jyear = 0; $jyear <= 150; $jyear++)
                                          {?>
                                            <option value='<?= $toyear - $jyear?>'><center><?= $toyear - $jyear?></center></option>
                                          <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <span style="width:40%">Tanggal Masuk IGD : </span>
                                  <div class="form-group">
                                      <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                          <input name="tgl_masuk_igd" id="tgl_masuk_igd" type="text" class="form-control" readonly value="<?=date('Y-m-d');?>">
                                          <span class="input-group-btn">
                                              <button class="btn default" type="button">
                                                  <i class="fa fa-calendar"></i>
                                              </button>
                                          </span>
                                      </div>
                                  </div>
                                </div>
                              </center>
                              </div>
                              <div class="modal-footer">
                                <center>
                                  <!--?=$igdnoname = $_POST['IGD_noname_nama']; ?-->
                                  <div class="btn-group btn-group btn-group-justified" style="width:50%">
                                      <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Batal</a>
                                      <a class="btn green btn-xs active" style="width:100%" id="btnIGDpasienUNK"><i class="fa fa-edit"> Lanjutkan</i></a>
                                    </div>
                                </center>
                              </div>
                            </div>
                          </div>
                          <?php echo form_close(); ?>
                        </div>
                        <b>Anda Memilih Unit Layanan : IGD, Pada Tanggal <?php echo $tanggl1; ?></b>
                        <br/>
                        <br/>
                          <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                            <thead class="btn-success">
                                <tr>
                                  <th> No Registrasi </th>
                                  <th> Norm </th>
                                  <th> Nama </th>
                                  <th> Status Data </th>
                                  <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              $datax = $this->db->query("select * from EMR_IGD_MRX where status = 'Aktif' and TGL_MASUK = '$tanggl1'")->num_rows();
                              $datax2 = $this->db->query("select * from EMR_IGD_MRX where status = 'Aktif' and TGL_MASUK = '$tanggl1'");
                              for($lineX_= 0 ; $lineX_ < $datax ; $lineX_++)
                              {
                                $datax23 = $datax2->row($lineX_)->ID_PEMERIKSAAN;?>
                                <tr class="odd gradeX">
                                  <td> - </td>
                                  <td> - </td>
                                  <td><?=$datax2->row($lineX_)->NAMA_ALIAS;?></td>
                                  <?php $cekin = $this->db->query("select * from EMR_IGD_TRIASE where ID_PEMERIKSAAN = '$datax23'")->num_rows();
                                  if($cekin > 0)
                                  {
                                    $cekin2 = $this->db->query("select * from EMR_IGD_TRIASE where ID_PEMERIKSAAN = '$datax23'")->row()->Triase;
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
                                  <td><a href="<?php echo base_url(); ?>igd/pasienUNKNOWN/<?=$datax2->row($lineX_)->ID_PEMERIKSAAN;?>" target="_blank" class="btn green btn-xs active" style="width:100%"><i class="fa fa-edit"> Pilih</i></a></td>
                                </tr>
                              <?php }
                                foreach($dataTable as $dt)
                                {
                                  $ada = $this->db->get("EMR_UTAMA_PERIKSA where NORM = '$dt->norm'")->num_rows();
                                  if($ada == 0)
                                  {?>
                                    <tr class="odd gradeX">
                                      <td><?php echo $dt->noreg; ?></td>
                                      <td><?php echo $dt->norm; ?></td>
                                      <?php
                                      if($dt->kdseks == 'P')
                                      { ?>
                                        <td><button class="btn pink"><i class="fa fa-venus"></i></button> <?php echo $dt->nama; ?></td>
                                      <?php }
                                      elseif($dt->kdseks == 'L')
                                      {?>
                                        <td><button class="btn green"><i class="fa fa-mars"></i></button><?php echo $dt->nama; ?></td>
                                      <?php } ?>
                                      <td class="bg-white bg-font-white"><center>Belum Pemeriksaan</center></td>
                                      <td><a href="<?php echo base_url(); ?>igd/pasien/<?=$dt->noreg;?>" target="_blank" class="btn green btn-xs active" style="width:100%"><i class="fa fa-edit"> Pilih</i></a></td>
                                    </tr>
                                  <?php
                                  }
                                  else
                                  {?>
                                    <tr class="odd gradeX">
                                      <td><?php echo $dt->noreg; ?></td>
                                      <td><?php echo $dt->norm; ?></td>
                                      <?php
                                      if($dt->kdseks == 'P')
                                      { ?>
                                        <td><button class="btn pink"><i class="fa fa-venus"></i></button><?php echo $dt->nama; ?></td>
                                      <?php }
                                      elseif($dt->kdseks == 'L')
                                      {?>
                                        <td><button class="btn green"><i class="fa fa-mars"></i></button><?php echo $dt->nama; ?></td>
                                      <?php } ?>
                                      <?php
                                      $cekin = $this->db->query("select * from EMR_UTAMA_PERIKSA n, EMR_IGD_TRIASE m where m.ID_PEMERIKSAAN = n.ID_PEMERIKSAAN and n.NORM = '$dt->norm'")->num_rows();
                                      $cekinidp = $this->db->query("select * from EMR_UTAMA_PERIKSA where NORM = '$dt->norm'")->row()->ID_PEMERIKSAAN;
                                      $cekin0 = $this->db->query("select * from EMR_IGD_TRIASE where ID_PEMERIKSAAN = '$cekinidp'")->num_rows();
                                      $cekin1 = $this->db->query("select * from EMR_IGD_TRIASE where ID_PEMERIKSAAN = '$cekinidp'")->row();
                                      if($cekin > 0)
                                      {
                                        $ada2 = $this->db->get("EMR_IGD_KELUAR where ID_PEMERIKSAAN = '$cekin1->ID_PEMERIKSAAN'")->num_rows();
                                        $cekin2 = $cekin1->Triase;
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
                                      {
                                        $ada2 = 0;?>
                                      <td class="bg-white bg-font-white"><center>Belum Pemeriksaan</center></td>
                                      <?php }
                                      if($ada2 > 0)
                                      {?>
                                        <td><a href="<?php echo base_url(); ?>igd/cetak/<?=$cekin1->ID_PEMERIKSAAN;?>" target="_blank" class="btn yellow-crusta btn-xs active" style="width:100%"><i class="fa fa-edit"> Cetak</i></a></td>
                                      <?php }
                                      else{ ?>
                                        <td><a href="<?php echo base_url(); ?>igd/pasien/<?=$dt->noreg;?>" target="_blank" class="btn green btn-xs active" style="width:100%"><i class="fa fa-edit"> Pilih</i></a></td>
                                      <?php }?>
                                    </tr>
                                  <?php
                                  }
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
