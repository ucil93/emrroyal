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
                        <span class="caption-subject bold uppercase"> DATA GROUP RADIOLOGI</span>
                      </div>
                  </div>
                  <div class="portlet-body">
                      <div class="table-container">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <div class="btn-group pull-right">
                                  <a data-target="#tambah_gr_radio" data-toggle="modal" class="btn blue"><i class="fa fa-plus"></i> Tambah Data </a>
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
                                            <td><?php echo $dt->KODE_GR_RADIO; ?></td>
                                            <td><?php echo $dt->NM_GR_RADIO; ?></td>
                                            <td><?php echo $dt->STATUS_GR_RADIO; ?></td>
                                            <td><a type="button" class="fa fa-edit" onclick="editDataRadio('<?php echo $dt->KODE_GR_RADIO ?>')"></a>&nbsp;&nbsp;&nbsp;<a type="button" class="fa fa-trash" onclick="hapusDataRadio('<?php echo $dt->KODE_GR_RADIO ?>')"></a></td>
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
<div id="tambah_gr_radio" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambah Data Group Radiologi</h4>
      </div>
      <div class="modal-body">
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <input type="text" id="namagrradio" name="namagrradio" value="" class="form-control">
            <label for="form_control_1">Nama Group Radiologi</label>
            <span class="help-block">Masukkan Nama Group Radiologi</span>
        </div>

          <div id="alert-msg-tambahgrradio"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="tambahgrradio" name="tambahgrradio">Simpan</button>
      </div>
  </div>
</div>

<!-- Modal Edit Data -->
<div id="edit_gr_radio" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Edit Data Group Radiologi</h4>
      </div>
      <div class="modal-body">
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <input type="text" id="namagrradioedit" name="namagrradioedit" value="" class="form-control">
            <span class="help-block">Masukkan Nama Group Radiologi</span>
        </div>
        <div class="form-group form-md-line-input has-success">
          <select class="form-control" name="statusgrradioedit" id="statusgrradioedit">
              <option value="" disabled selected>--Pilih--</option>
              <option value="AKTIF">AKTIF</option>
              <option value="TIDAK AKTIF">TIDAK AKTIF</option>
          </select>
          <div class="form-control-focus"> </div>
          <span class="help-block">Pilih Status Group Radiologi</span>
        </div>
        <br/>
        <input type="hidden" id="kodegrradioedit" name="kodegrradioedit" value="" class="form-control">

        <div id="alert-msg-editgrradio"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="editgrradio" name="editgrradio">Simpan</button>
      </div>
  </div>
</div>

<!-- Modal Hapus Data -->
<div id="hapus_gr_radio" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Hapus Data Group Radiologi</h4>
      </div>
      <div class="modal-body">

        <h5>Apakah Anda Yakin Ingin Menghapus Group Radiologi : <label id="namagrradiohapus"></label> ?</h5>

        <input type="hidden" id="kodegrradiohapus" name="kodegrradiohapus" value="" class="form-control">

        <div id="alert-msg-hapusgrradio"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="hapusgrradio" name="hapusgrradio">Ya</button>
      </div>
  </div>
</div>
