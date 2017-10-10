<!--ini home igd-->
<!--MANEH PULL-->
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
                                        <span class="caption-subject bold uppercase"> DATA PASIEN</span>
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
                                          <?php
                                          if($level == 'KOGIGD')
                                          {
                                            ?>
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
                                                  </center>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <center>
                                                      <?php
                                                        $codez = 'GD-';
                                                        $codez .= date('d');
                                                        $codez .= date('m');
                                                        $codez .= date('Y');
                                                        $kode = $this->db->query("select * from EMR_UTAMA_PERIKSA where ID_PEMERIKSAAN LIKE '%$codez%'")->num_rows();
                                                        $kode = $kode + 1;
                                                    		$code = $codez;
                                                    		$code .= '-';
                                                    		$code .= sprintf("%06s", $kode);
                                                      ?>
                                                      <input type="hidden" id="EMR_IGD_KodeRegxx" value="<?=$codez;?>">
                                                      <input type="hidden" id="EMR_IGD_KodeReg" value="<?=$kode;?>">
                                                      <!--?=$igdnoname = $_POST['IGD_noname_nama']; ?-->
                                                      <div class="btn-group btn-group btn-group-justified" style="width:50%">
                                                          <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Batal</a>
                                                          <!--a href="<?php echo base_url(); ?>igd/pasienUNKNOWN/<?=$_POST['s_amount']?>" target="_blank" class="btn green btn-xs active" style="width:100%"><i class="fa fa-edit"> Lanjutkan</i></a>
                                                          <a href="<?php echo base_url(); ?>igd/pasienUNKNOWN/<?=$code ;?>" class="btn green btn-xs active" style="width:100%" id="btnIGDpasienUNK"><i class="fa fa-edit"> Lanjutkan</i></a-->
                                                          <a href="<?php echo base_url(); ?>igd/pasienUNKNOWN/<?=$code ;?>" target="_blank" class="btn green btn-xs active" style="width:100%" id="btnIGDpasienUNK"><i class="fa fa-edit"> Lanjutkan</i></a>
                                                        </div>
                                                    </center>
                                                  </div>
                                                </div>
                                              </div>
                                            <?php
                                          }
                                          ?>
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
                                                      <?php
                                                      if($level == "KOGIGD")
                                                      {?>
                                                        <td><a href="<?php echo base_url(); ?>igd/pasien/<?=$dt->noreg;?>" target="_blank" class="btn green btn-xs active" style="width:100%"><i class="fa fa-edit"> Pilih</i></a></td>
                                                      <?php }
                                                      else
                                                      {?>
                                                        <td><a class="btn green btn-xs active" style="width:100%" onclick="alert('Pasien masih belum dapat dipilih \n Dokter harus melakukan triase terlebih dahulu');"><i class="fa fa-edit"> Pilih</i></a></td>
                                                      <?php }?>
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
                                                      <?php $cekin2 = $this->db->query("select * from EMR_UTAMA_PERIKSA n, EMR_IGD_TRIASE m where m.ID_PEMERIKSAAN = n.ID_PEMERIKSAAN and n.NORM = '$dt->norm'")->row()->Triase;
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
                                                      <?php }?>
                                                      <td><a href="<?php echo base_url(); ?>igd/pasien/<?=$dt->noreg;?>" target="_blank" class="btn green btn-xs active" style="width:100%"><i class="fa fa-edit"> Pilih</i></a></td>
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
