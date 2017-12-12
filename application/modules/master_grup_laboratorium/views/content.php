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
                        <span class="caption-subject bold uppercase"> DATA GROUP LABORATORIUM</span>
                      </div>
                  </div>
                  <div class="portlet-body">
                      <div class="table-container">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <div class="btn-group pull-right">
                                  <a data-target="#tambah_gr_labo" data-toggle="modal" class="btn blue"><i class="fa fa-plus"></i> Tambah Data </a>
                                </div>
                              </div>
                            </div>
                        </div>
                        <br/>
                          <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                            <thead class="btn-success">
                                <tr>
                                    <th> Kode </th>
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
                                            <td><?php echo $dt->KODE_GR_LABORATORIUM; ?></td>
                                            <td><?php echo $dt->NM_GR_LABORATORIUM; ?></td>
                                            <td><?php echo $dt->STATUS_GR_LABORAT; ?></td>
                                            <td><a type="button" class="fa fa-edit" onclick="editDataLabo('<?php echo $dt->KODE_GR_LABORATORIUM ?>')"></a>&nbsp;&nbsp;&nbsp;<a type="button" class="fa fa-trash" onclick="hapusDataLabo('<?php echo $dt->KODE_GR_LABORATORIUM ?>')"></a></td>
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
<div id="tambah_gr_labo" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambah Data Group Laboratorium</h4>
      </div>
      <div class="modal-body">
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <input type="text" id="namagrlb" name="namagrlb" value="" class="form-control">
            <label for="form_control_1">Nama Group Laboratorium</label>
            <span class="help-block">Masukkan Nama Group Laboratorium</span>
        </div>

          <div id="alert-msg-tambahgrlb"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="tambahgrlb" name="tambahgrlb">Simpan</button>
      </div>
  </div>
</div>

<!-- Modal Edit Data -->
<div id="edit_gr_labo" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Edit Data Group Laboratorium</h4>
      </div>
      <div class="modal-body">
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <input type="text" id="namagrlbedit" name="namagrlbedit" value="" class="form-control">
            <span class="help-block">Masukkan Nama Group Laboratorium</span>
        </div>
        <div class="form-group form-md-line-input has-success">
          <select class="form-control" name="statusgrlbedit" id="statusgrlbedit">
              <option value="" disabled selected>--Pilih--</option>
              <option value="AKTIF">AKTIF</option>
              <option value="TIDAK AKTIF">TIDAK AKTIF</option>
          </select>
          <div class="form-control-focus"> </div>
          <span class="help-block">Pilih Status Group Laboratorium</span>
        </div>
        <br/>
        <input type="hidden" id="kodegrlbedit" name="kodegrlbedit" value="" class="form-control">

        <div id="alert-msg-editgrlb"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="editgrlb" name="editgrlb">Simpan</button>
      </div>
  </div>
</div>

<!-- Modal Hapus Data -->
<div id="hapus_gr_labo" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Hapus Data Group Laboratorium</h4>
      </div>
      <div class="modal-body">

        <h5>Apakah Anda Yakin Ingin Menghapus Group Laboratorium : <label id="namagrlbhapus"></label> ?</h5>

        <input type="hidden" id="kodegrlbhapus" name="kodegrlbhapus" value="" class="form-control">

        <div id="alert-msg-hapusgrlb"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="hapusgrlb" name="hapusgrlb">Ya</button>
      </div>
  </div>
</div>
