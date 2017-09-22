<!-- BEGIN CONTENT coba-->
<!-- BEGIN CONTENT coba Kedua-->
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
                        <div class="form-group">
                            <button name="tampil_data_js" id="tampil_data_js" value="Tampil Data" class="btn btn-primary" > test </button>
                        </div>
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
                                  <button name="tampil_data" id="tampil_data" value="Tampil Data" class="btn btn-primary" > Refresh Data </button>
                              </div>
                          </div>
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <a class="btn bg-green-jungle bg-font-green-jungle" style="width:100%" id="IGD_noname"><center><b><i class="fa fa-plus"></i> Pasien Tanpa Registrasi</b></center></a>
                            </div>
                          </div>
                          <?php echo form_close(); ?>
                        </div>
                        <b>Anda Memilih Unit Layanan : IGD, Pada Tanggal <?php echo $tanggl1; ?></b>
                        <br/>
                        <br/>
                          <table class="table table-striped table-bordered table-hover order-column table-igd_reg" id="sample_3">
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
