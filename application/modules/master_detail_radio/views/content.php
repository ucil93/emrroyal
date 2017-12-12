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
                        <span class="caption-subject bold uppercase"> DATA RADIOLOGI</span>
                      </div>
                  </div>
                  <div class="portlet-body">
                      <div class="table-container">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <div class="btn-group pull-right">
                                  <a data-target="#tambah_dt_radio" data-toggle="modal" class="btn blue"><i class="fa fa-plus"></i> Tambah Data </a>
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
                                    <th> Template Hasil </th>
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
                                            <td><?php echo $dt->KODE_DT_RADIO; ?></td>
                                            <td><?php echo $dt->NM_GR_RADIO; ?></td>
                                            <td><?php echo $dt->NM_DT_RADIO; ?></td>
                                            <td><?php echo $dt->TEMPLATE_HASIL_RADIO; ?></td>
                                            <td><?php echo $dt->STATUS_DT_RADIO; ?></td>
                                            <td><a type="button" class="fa fa-edit" onclick="editDataDtRadio('<?php echo $dt->KODE_DT_RADIO ?>')"></a>&nbsp;&nbsp;&nbsp;<a type="button" class="fa fa-trash" onclick="hapusDataDtRadio('<?php echo $dt->KODE_DT_RADIO ?>')"></a></td>
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
<div id="tambah_dt_radio" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambah Data Radiologi</h4>
      </div>
      <div class="modal-body">
        <div class="form-group form-md-line-input has-success">
            <select class="form-control" name="dataTableGrRadioValue" id="dataTableGrRadioValue">
              <option value="" disabled selected>--Pilih--</option>
              <?php
              foreach($dataTableGrRadio as $row)
              {
                  echo '<option value="'.$row->KODE_GR_RADIO.'">'.$row->NM_GR_RADIO.'</option>';
              }
              ?>
            </select>
          <div class="form-control-focus"> </div>
          <span class="help-block">Pilih Group Radiologi</span>
        </div>
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <input type="text" id="kodedtradio" name="kodedtradio" value="" class="form-control">
            <label for="form_control_1">Kode Radiologi</label>
            <span class="help-block">Masukkan Kode Radiologi</span>
        </div>
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <input type="text" id="namadtradio" name="namadtradio" value="" class="form-control">
            <label for="form_control_1">Nama Radiologi</label>
            <span class="help-block">Masukkan Nama Radiologi</span>
        </div>
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <textarea class="form-control" id="templatehasilradio" name="templatehasilradio" rows="3"></textarea>
            <label for="form_control_1">Template Hasil Radiologi</label>
            <span class="help-block">Masukkan Template Hasil Radiologi</span>
        </div>


          <div id="alert-msg-tambahdtradio"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="tambahdtradio" name="tambahdtradio">Simpan</button>
      </div>
  </div>
</div>

<!-- Modal Edit Data -->
<div id="edit_dt_radio" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Edit Data Radiologi</h4>
      </div>
      <div class="modal-body">
        <div class="form-group form-md-line-input has-success">
            <select class="form-control" name="dataTableGrRadioEdit" id="dataTableGrRadioEdit">
              <option value="" disabled selected>--Pilih--</option>
              <?php
              foreach($dataTableGrRadio as $row)
              {
                  echo '<option value="'.$row->KODE_GR_RADIO.'">'.$row->NM_GR_RADIO.'</option>';
              }
              ?>
            </select>
          <div class="form-control-focus"> </div>
          <span class="help-block">Pilih Group Radiologi</span>
        </div>
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <input type="text" id="namadtradioedit" name="namadtradioedit" value="" class="form-control">
            <span class="help-block">Masukkan Nama Radiologi</span>
        </div>
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <textarea class="form-control" id="templatehasilradioedit" name="templatehasilradioedit" rows="3"></textarea>
            <span class="help-block">Masukkan Template Hasil Radiologi</span>
        </div>
        <div class="form-group form-md-line-input has-success">
          <select class="form-control" name="statusdtradioedit" id="statusdtradioedit">
              <option value="" disabled selected>--Pilih--</option>
              <option value="AKTIF">AKTIF</option>
              <option value="TIDAK AKTIF">TIDAK AKTIF</option>
          </select>
          <div class="form-control-focus"> </div>
          <span class="help-block">Pilih Status Radiologi</span>
        </div>
        <br/>
        <input type="hidden" id="kodedtradioedit" name="kodedtradioedit" value="" class="form-control">

        <div id="alert-msg-editdtradio"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="editdtradio" name="editdtradio">Simpan</button>
      </div>
  </div>
</div>

<!-- Modal Hapus Data -->
<div id="hapus_dt_radio" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Hapus Data Radiologi</h4>
      </div>
      <div class="modal-body">

        <h5>Apakah Anda Yakin Ingin Menghapus Nama Radiologi : <label id="namadtradiohapus"></label> ?</h5>

        <input type="hidden" id="kodedtradiohapus" name="kodedtradiohapus" value="" class="form-control">

        <div id="alert-msg-hapusdtradio"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn green" id="hapusdtradio" name="hapusdtradio">Ya</button>
      </div>
  </div>
</div>
