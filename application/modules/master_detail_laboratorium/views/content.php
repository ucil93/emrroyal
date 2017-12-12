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
                        <span class="caption-subject bold uppercase"> DATA LABORATORIUM</span>
                      </div>
                  </div>
                  <div class="portlet-body">
                      <div class="table-container">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <div class="btn-group pull-right">
                                  <a data-target="#tambah_dt_labo" data-toggle="modal" class="btn blue"><i class="fa fa-plus"></i> Tambah Data </a>
                                </div>
                              </div>
                            </div>
                        </div>
                        <br/>
                          <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                            <thead class="btn-success">
                                <tr>
                                    <th> Kode </th>
                                    <th> Group </th>
                                    <th> Nama </th>
                                    <th> Status </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                      foreach($dataTable as $dt)
                                      {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $dt->KODE_DT_LABORATORIUM; ?></td>
                                            <td><?php echo $dt->NM_GR_LABORATORIUM; ?></td>
                                            <td><?php echo $dt->NM_DT_LABORATORIUM; ?></td>
                                            <td><?php echo $dt->STATUS_DT_LABORAT; ?></td>
                                            <td><a type="button" class="fa fa-edit" onclick="editDataDtLabo('<?php echo $dt->KODE_DT_LABORATORIUM ?>')"></a>&nbsp;&nbsp;&nbsp;<a type="button" class="fa fa-trash" onclick="hapusDataDtLabo('<?php echo $dt->KODE_DT_LABORATORIUM ?>')"></a></td>
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

<!-- Modal Tambah Data -->
<div id="tambah_dt_labo" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambah Data Laboratorium</h4>
      </div>
      <div class="modal-body">
        <div class="form-group form-md-line-input has-success">
            <select class="form-control" name="dataTableGr" id="dataTableGr">
              <option value="" disabled selected>--Pilih--</option>
              <?php
              foreach($dataTableGr as $row)
              {
                  echo '<option value="'.$row->KODE_GR_LABORATORIUM.'">'.$row->NM_GR_LABORATORIUM.'</option>';
              }
              ?>
            </select>
          <div class="form-control-focus"> </div>
          <span class="help-block">Pilih Group Laboratorium</span>
        </div>
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <input type="text" id="kodedtlb" name="kodedtlb" value="" class="form-control">
            <label for="form_control_1">Kode Laboratorium</label>
            <span class="help-block">Masukkan Kode Laboratorium</span>
        </div>
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <input type="text" id="namadtlb" name="namadtlb" value="" class="form-control">
            <label for="form_control_1">Nama Laboratorium</label>
            <span class="help-block">Masukkan Nama Laboratorium</span>
        </div>


          <div id="alert-msg-tambahdtlb"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="tambahdtlb" name="tambahdtlb">Simpan</button>
      </div>
  </div>
</div>

<!-- Modal Edit Data -->
<div id="edit_dt_labo" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Edit Data Laboratorium</h4>
      </div>
      <div class="modal-body">
        <div class="form-group form-md-line-input has-success">
            <select class="form-control" name="dataTableGrEdit" id="dataTableGrEdit">
              <option value="" disabled selected>--Pilih--</option>
              <?php
              foreach($dataTableGr as $row)
              {
                  echo '<option value="'.$row->KODE_GR_LABORATORIUM.'">'.$row->NM_GR_LABORATORIUM.'</option>';
              }
              ?>
            </select>
          <div class="form-control-focus"> </div>
          <span class="help-block">Pilih Group Laboratorium</span>
        </div>
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <input type="text" id="namadtlbedit" name="namadtlbedit" value="" class="form-control">
            <span class="help-block">Masukkan Nama Laboratorium</span>
        </div>
        <div class="form-group form-md-line-input has-success">
          <select class="form-control" name="statusdtlbedit" id="statusdtlbedit">
              <option value="" disabled selected>--Pilih--</option>
              <option value="AKTIF">AKTIF</option>
              <option value="TIDAK AKTIF">TIDAK AKTIF</option>
          </select>
          <div class="form-control-focus"> </div>
          <span class="help-block">Pilih Status Laboratorium</span>
        </div>
        <br/>
        <input type="hidden" id="kodedtlbedit" name="kodedtlbedit" value="" class="form-control">

        <div id="alert-msg-editdtlb"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="editdtlb" name="editdtlb">Simpan</button>
      </div>
  </div>
</div>

<!-- Modal Hapus Data -->
<div id="hapus_dt_labo" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Hapus Data Laboratorium</h4>
      </div>
      <div class="modal-body">

        <h5>Apakah Anda Yakin Ingin Menghapus Nama Laboratorium : <label id="namadtlbhapus"></label> ?</h5>

        <input type="hidden" id="kodedtlbhapus" name="kodedtlbhapus" value="" class="form-control">

        <div id="alert-msg-hapusdtlb"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="hapusdtlb" name="hapusdtlb">Ya</button>
      </div>
  </div>
</div>
