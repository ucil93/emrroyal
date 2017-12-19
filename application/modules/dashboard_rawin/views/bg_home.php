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
                        <span class="caption-subject bold uppercase"> DATA PASIEN RAWAT INAP</span>
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
                          <?php echo form_close(); ?>
                        </div>
                        <b>Anda Memilih Unit Layanan : Rawat Inap, Pada Tanggal <?php echo $tanggl1; ?></b>
                        <br/>
                        <br/>
                          <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                            <thead class="btn-success">
                                <tr>
                                  <th> No Registrasi </th>
                                  <th> Norm </th>
                                  <th> Nama </th>
                                  <!--<th> Status Data </th>-->
                                  <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                foreach($dataTable as $dt)
                                {
                                  ?>
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
                                      <!--<td class="bg-white bg-font-white"><center>Belum Pemeriksaan</center></td>-->
                                      <td><a href="<?php echo base_url(); ?>emr_rawin/pasien/<?=trim($dt->noreg);?>" target="_blank" class="btn green btn-xs active" style="width:100%"><i class="fa fa-edit"> Pilih</i></a></td>
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
