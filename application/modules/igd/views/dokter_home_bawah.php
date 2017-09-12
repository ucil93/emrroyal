<div class="col-md-5">
    <!-- BEGIN TAB PORTLET-->
    <div class="portlet box red">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>Alergi Obat</div>
            <div class="tools">
                <a href="javascript:;" class="expand" data-original-title="" title=""> </a>
                </div>
        </div>
        <div class="collapse portlet-body tabs-below">
            <div class="tab-content">
                <div class="tab-pane active in" id="tab_4_1">
                    <?php
                    if($alergiobat != "")
                    {
                        echo "Pasien Mempunyai Alergi Obat : ".$alergiobat."";
                    }
                    else
                    {
                        echo "Pasien Tidak Mempunyai Alergi Obat";
                    }
                    ?>
                </div>
                <div class="tab-pane fade" id="tab_4_2">
                    <div class="form-group">
                        <label for="form_control_1">Masukkan Alergi</label>
                        <input type="text" id="alergiobat" name="alergiobat" value="" class="form-control">
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="#tab_4_1" data-toggle="tab" aria-expanded="true"> Daftar Alergi </a>
                </li>
                <li class="">
                    <a href="#tab_4_2" data-toggle="tab" aria-expanded="false"> Input Baru </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>Obat Pasien</div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="tabbable-custom nav-justified">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#tab_1_1_1" data-toggle="tab">Obat Satuan</a>
                    </li>
                    <li>
                        <a href="#tab_1_1_2" data-toggle="tab">Obat Racik</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1_1_1">
                        <div class="portlet-body">
                            <div class="form-group mt-repeater">
                                <div data-repeater-list="group-c" style="display:block; margin-bottom: -0.5em;">
                                    <div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-0.5em">
                                        <div class="row mt-repeater-row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label" style="font-size:14px">Obat ke-1</label>
                                                    <input type="text" name="obatsatuan[]" value="" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                                    <select id="aturanpakaisatuan2" name="aturanpakaisatuan2[]" class="form-control" data-size="2">
                                                        <option value="" disabled selected>Aturan</option>
                                                        <option value="Sebelum Makan">a.c</option>
                                                        <option value="Saat Makan">d.c</option>
                                                        <option value="Sesudah Makan">p.c</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-repeater-row" >
                                            <div class="col-md-3">
                                                <input type="text" id="jumlahsatuan" name="jumlahsatuan[]" placeholder="Jumlah" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" id="aturanpakaisatuan" name="aturanpakaisatuan[]" placeholder="Signa" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-repeater-list="group-c" id="div1">
                                </div>
                                <div id="div_button">
                                    <a class="btn blue" name="tambah" value="Tambah Data" id="tambah"><i class="fa fa-plus"></i> Tambah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_1_1_2">
                        <div class="portlet-body">
                            <div class="form-group mt-repeater">
                                <div data-repeater-list="group-c">
                                    <div data-repeater-item class="mt-repeater-item">
                                        <div class="portlet box grey">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Obat Racikan ke-1 </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="form-group mt-repeater">
                                                    <div data-repeater-list="group-c">
                                                        <div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-0.5em;">
                                                            <div class="row mt-repeater-row" style="display:block; margin-bottom:-0.5em;">
                                                                <div class="col-md-8">
                                                                    <div class="form-group">
                                                                        <label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>
                                                                        <input type="text" name="obatsatuanracik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label" style="font-size:14px">Jumlah</label>
                                                                        <input type="text" id="jumlahracik" name="jumlahracik[]" placeholder="0" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-repeater-list="group-c" id="divracik1">
                                                    </div>
                                                    <div id="div_buttonracik1">
                                                        <a class="btn blue tambahracik-click" name="tambahracik" value="Tambah Data" data-todo='{"number":"1"}'><i class="fa fa-plus"></i> Tambah Bahan</a>
                                                    </div>
                                                    <div class="form-group">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                                        <select id="aturanpakairacik2" name="aturanpakairacik2[]" class="form-control" data-size="4">
                                                            <option value="" disabled selected>Aturan</option>
                                                            <option value="Sebelum Makan">a.c</option>
                                                            <option value="Saat Makan">d.c</option>
                                                            <option value="Sesudah Makan">p.c</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" id="jumlahracik2" name="jumlahracik2[]" placeholder="Jumlah" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" id="aturanpakairacik" name="aturanpakairacik[]" placeholder="Signa" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-repeater-list="group-c" id="divracikobat">
                                        </div>
                                        <div id="div_buttonracikobat">
                                            <a class="btn blue" name="tambahracikobat" value="Tambah Data" id="tambahracikobat"><i class="fa fa-plus"></i> Tambah Obat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portlet light portlet-fit bordered">
        <div class="portlet-title">
            <div class="caption">
              <label class="mt-checkbox mt-checkbox-outline">
              <input type="checkbox" id="suratsakit" name="suratsakit" value="" >Surat Sakit
              <span></span>
              </label>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
              <div class="btn-group btn-group btn-group-justified">
                  <a class="btn blue"> Simpan Data </a>
                  <a class="btn red"> Batal </a>
              </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
