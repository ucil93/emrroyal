
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content" style="background-color:#BFBFBF;">
    <div class="row">
      <div class="col-md-8">
        <div class="mt-element-ribbon bg-grey-steel">
          <?php
          if($alergiobat != "")
          {
            echo '<div class="ribbon ribbon-right ribbon-clip ribbon-shadow ribbon-round ribbon-border-dash-hor ribbon-color-danger uppercase"><div class="ribbon-sub ribbon-clip ribbon-right"></div>Pasien Mempunyai Alergi Obat</div>';
          }
          else
          {
            echo '<div class="ribbon ribbon-right ribbon-clip ribbon-shadow ribbon-round ribbon-border-dash-hor ribbon-color-primary uppercase"><div class="ribbon-sub ribbon-clip ribbon-right"></div>Pasien Tidak Mempunyai Alergi Obat</div>';
          }
          ?>
          <div class="portlet light bordered ribbon-content">
            <div class="caption font-red-sunglo">
              <span class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">Electronic Medical Record</span>
            </div>
            <div class="portlet-body form">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="portlet light bordered">
                      <div class="portlet-title tabbable-line">
                        <div class="caption">
                          <span class="caption-subject font-dark bold">Asesmen Medis</span>
                        </div>
                      </div>
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 3.5em;">
                            <textarea id="anamnesa_ases_dok" name="anamnesa_ases_dok" value="" class="form-control" rows="3"></textarea>
                            <label for="form_control_1">Anamnesa</label>
                            <span class="help-block">Masukkan Anamnesa Pasien</span>
                          </div>
                          <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 3.5em;">
                            <input type="text" id="keluhanutama_ases_dok" name="keluhanutama_ases_dok" value="" class="form-control">
                            <label for="form_control_1">Keluhan Utama</label>
                            <span class="help-block">Masukkan Keluhan Utama Pasien</span>
                          </div>
                          <div class="form-group" style="display: block; margin-top: 2em; margin-bottom: 2em;">
                            <button type="button" class="btn btn-primary" data-toggle="modal" href="#EMR_Riwayat_Penyakit" >Lihat Data Riwayat Penyakit Dahulu</button>
                          </div>
                          <!--MODAL RIWAYAT PENYAKIT -->
                          <div id="EMR_Riwayat_Penyakit" class="modal" data-width="100%" style="width:90%;">
                            <!--MODAL RIWAYAT PENYAKIT HEADER-->
                            <div class="row">
                              <div class="col-md-4">
                                <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                  <button disable type="button" class="btn white" style="height:55px; width:30%">
                                    <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                    <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                                  </button>
                                  <button disable type="button" class="btn white" style="height:55px; width:70%">
                                    <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                    <span style="font-size:14px"><b><?php echo $jk,$nama?></b></span><br>
                                  </button>
                                </div>
                              </div>
                              <div class="modal-header bg-blue bg-font-blue col-md-4">
                                <h4 class="modal-title"><center><b>Riwayat Penyakit Pasien</b></center></h4>
                              </div>
                              <div class="col-md-4 bg-blue">
                                <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                  <a type="button" id="EMR_ASESMEN_btnRiwayatDahulu" class="btn disabled white" style="height:55px; width:33%; font-size:12px"><b>Riwayat Penyakit </br> Dahulu</b></a>
                                  <a type="button" id="EMR_ASESMEN_btnRiwayatKeluarga" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Riwayat Penyakit </br> Keluarga</b></a>
                                </div>
                              </div>
                            </div>
                            <!--MODAL RIWAYAT PENYAKIT BODY-->
                            <div class="modal-body bg-grey-steel bg-font-grey-steel">
                              <input type="hidden" id="EMR_ASESMEN_statRiwayat" value="Dahulu">
                              <!--RIWAYAT PENYAKIT DAHULU-->
                              <div class="row" id="EMR_ASESMEN_formRiwayatDahulu">
                                12345
                              </div>
                              <!--RIWAYAT PENYAKIT KELUARGA-->
                              <div class="collapse" id="EMR_ASESMEN_formRiwayatKeluarga">
                                67890
                              </div>
                              <!--MODAL RIWAYAT PENYAKIT FOOTER-->
                              <div class="modal-footer">
                                <button type="button" id="" data-dismiss="modal" class="btn blue">Tutup</button>
                              </div>
                            </div>
                          </div>
                          <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 3.5em;">
                            <input type="text" id="riwayatsekarang_ases_dok" name="riwayatsekarang_ases_dok" value="" class="form-control">
                            <label for="form_control_1">Riwayat Penyakit Sekarang</label>
                            <span class="help-block">Masukkan Riwayat Penyakit Sekarang</span>
                          </div>
                          <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 2em;">
                            <input type="text" id="riwayatkeluarga_ases_dok" name="riwayatkeluarga_ases_dok" value="" class="form-control">
                            <label for="form_control_1">Riwayat Penyakit Dalam Keluarga</label>
                            <span class="help-block">Masukkan Riwayat Penyakit Dalam Keluarga</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="portlet light bordered">
                      <div class="portlet-title tabbable-line">
                        <div class="caption">
                          <span class="caption-subject font-dark bold">Pemeriksaan Fisik</span>
                        </div>
                      </div>
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 3.5em;">
                            <input type="text" id="PFkepala_ases_dok" name="PFkepala_ases_dok" value="" class="form-control">
                            <label for="form_control_1">Kepala / Leher </label>
                            <span class="help-block">Masukkan Pemeriksaan Fisik Kepala / Leher </span>
                          </div>
                          <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 3.5em;">
                            <input type="text" id="PFthorax_ases_dok" name="PFthorax_ases_dok" value="" class="form-control">
                            <label for="form_control_1">Thorax </label>
                            <span class="help-block">Masukkan Pemeriksaan Fisik Thorax </span>
                          </div>
                          <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 3.5em;">
                            <input type="text" id="PFabdomen_ases_dok" name="PFabdomen_ases_dok" value="" class="form-control">
                            <label for="form_control_1">Abdomen </label>
                            <span class="help-block">Masukkan Pemeriksaan Fisik Abdomen </span>
                          </div>
                          <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 3.5em;">
                            <input type="text" id="PFextermitas_ases_dok" name="PFextermitas_ases_dok" value="" class="form-control">
                            <label for="form_control_1">Extermitas </label>
                            <span class="help-block">Masukkan Pemeriksaan Fisik Extermitas </span>
                          </div>
                          <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 2em;">
                            <input type="text" id="PFgenetalia_ases_dok" name="PFgenetalia_ases_dok" value="" class="form-control">
                            <label for="form_control_1">Genetalia Externa </label>
                            <span class="help-block">Masukkan Pemeriksaan Fisik Genetalia Externa </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <h4>Status Lokalis :</h4>
                    <!--
                    <div class="col-md-7 collapse" id="EMR_ASESMEN_DOKTER_ShowLokalis">
                      <div class="portlet light bg-inverse">
                        <div class="portlet-title">
                          <div class="caption">
                            <i class="icon-puzzle font-red-flamingo"></i>
                            <span class="caption-subject bold font-red-flamingo uppercase"> Bagian </span><span class="caption-subject bold font-red-flamingo uppercase" id="EMR_ASESMEN_DOKTER_ShowLokalisHeader"> Kepala </span>
                          </div>
                          <div class="tools">
                            <a href="" class="collapse" data-original-title="" title=""> </a>
                          </div>
                        </div>
                        <div class="portlet-body row" style="display: block;">
                          <div class="col-md-6">
                            <center><img id="EMR_ASESMEN_DOKTER_ShowLokalisGambar" src="<?php echo base_url().'assets/pages/img/tubuh/Kepala Depan.png'?>" style="width:100px"></center>
                          </div>
                          <div class="col-md-6">
                            <span id="EMR_ASESMEN_DOKTER_ShowLokalisKeluhan"></span>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div class="col-md-5">
                      <center>
                        <a id="EMR_ASESMEN_DOKTER_btnLokalis" class="btn bg-green-jungle bg-font-green-jungle" data-toggle="modal" href="#AsesmenModalStatusLokalis"><center><font size=6.5><b>Status Lokalis</b></font></center></a>
                        </br>
                        </br>
                      </center>
                    </div>
                  </div>
                  <!-- Modals Lokalis -->
                  <div id="AsesmenModalStatusLokalis" class="modal" data-width="100%" style="width:50%">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="btn-group btn-group btn-group-justified" style="width:100%">
                          <button disable type="button" class="btn white" style="height:55px; width:30%">
                            <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                            <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                          </button>
                          <button disable type="button" class="btn white" style="height:55px; width:70%">
                            <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                            <span style="font-size:14px"><b><?php echo $jk,$nama?></b></span><br>
                          </button>
                        </div>
                      </div>
                      <div class="modal-header bg-blue bg-font-blue col-md-4">
                        <h4 class="modal-title"><center><b>Status Lokalis</b></center></h4>
                      </div>
                      <div class="col-md-4 bg-blue" style="height:56px;">
                        <button class="btn blue col-md-12 collapse" id="EMR_ASESMEN_DOKTER_BtnKembaliFrmLokalis2" style="height:100%; width:100%"><i class="fa fa-arrow-left"></i> Kembali </button></br></br>
                      </div>
                    </div>
                    <div class="modal-body">
                      <input type="hidden" id="EMR_ASESMEN_DOKTER_statLokalis" value="Utuh">
                      <div class="row">
                        <div id="EMR_ASESMEN_DOKTER_FrmLokalis1">
                          <div class="col-md-4">
                            <div id="EMR_ASESMEN_DOKTER_FrmMouseoverTubuh">
                              <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                  <div class="caption">
                                    <i class="icon-puzzle font-red-flamingo"></i>
                                    <span class="caption-subject bold font-red-flamingo uppercase"> Pilih Bagian Tubuh </span>
                                  </div>
                                  <div class="tools">
                                    <a href="" class="collapse" data-original-title="" title=""> </a>
                                  </div>
                                </div>
                                <div class="portlet-body" style="display: block;">
                                  <h4>Pilih bagian tubuh terlebih dahulu untuk dapat mengisi keluhan Status Lokalis</h4>
                                </div>
                              </div>
                            </div>
                            <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverKepala">
                              <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                  <div class="caption">
                                    <i class="icon-puzzle font-red-flamingo"></i>
                                    <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Kepala </span>
                                  </div>
                                  <div class="tools">
                                    <a href="" class="collapse" data-original-title="" title=""> </a>
                                  </div>
                                </div>
                                <div class="portlet-body" style="display: block;">
                                  <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Kepala</h4></br>
                                  <center><img src="<?php echo base_url().'assets/pages/img/tubuh/Kepala Depan.png'?>" style="width:180px"></center>
                                </div>
                              </div>
                            </div>
                            <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverBadan">
                              <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                  <div class="caption">
                                    <i class="icon-puzzle font-red-flamingo"></i>
                                    <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Badan </span>
                                  </div>
                                  <div class="tools">
                                    <a href="" class="collapse" data-original-title="" title=""> </a>
                                  </div>
                                </div>
                                <div class="portlet-body" style="display: block;">
                                  <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Badan</h4></br>
                                  <center><img src="<?php echo base_url().'assets/pages/img/tubuh/Badan Depan.png'?>" style="width:180px"></center>
                                </div>
                              </div>
                            </div>
                            <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverTangan">
                              <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                  <div class="caption">
                                    <i class="icon-puzzle font-red-flamingo"></i>
                                    <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Tangan </span>
                                  </div>
                                  <div class="tools">
                                    <a href="" class="collapse" data-original-title="" title=""> </a>
                                  </div>
                                </div>
                                <div class="portlet-body" style="display: block;">
                                  <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Tangan</h4></br>
                                  <center><img src="<?php echo base_url().'assets/pages/img/tubuh/Tangan Depan.png'?>" style="width:180px"></center>
                                </div>
                              </div>
                            </div>
                            <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverKaki">
                              <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                  <div class="caption">
                                    <i class="icon-puzzle font-red-flamingo"></i>
                                    <span class="caption-subject bold font-red-flamingo uppercase"> Tubuh Bagian Kaki </span>
                                  </div>
                                  <div class="tools">
                                    <a href="" class="collapse" data-original-title="" title=""> </a>
                                  </div>
                                </div>
                                <div class="portlet-body" style="display: block;">
                                  <h4>Klik Apabila anda ingin mengisi keluhan Status Lokalis bagian Kaki</h4></br>
                                  <center><img src="<?php echo base_url().'assets/pages/img/tubuh/Kaki Depan.png'?>" style="width:180px"></center>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <center>
                              <table border="0" id="EMR_ASESMEN_DOKTER_tblLokalis" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Tubuh Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                                <tr>
                                  <td style="width:70px"></td>
                                  <td style="width:20px;"></td>
                                  <td colspan="2" style="width:60px; height:80px">
                                    <a type="button" border="0" class="btn white" id="EMR_ASESMEN_DOKTER_btnKepala" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKepalaMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKepalaMOut(this)"></a>
                                  </td>
                                  <td style="width:20px;"></td>
                                  <td style="width:70px"></td>
                                </tr>
                                <tr>
                                <tr>
                                  <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnTangan" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnTanganMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnTanganMOut(this)"></td>
                                  <td colspan="4" style="height:180px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnBadan" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnBadanMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnBadanMOut(this)"></button></td>
                                  <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnTangan" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnTanganMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnTanganMOut(this)"></td>
                                </tr>
                                <tr>
                                  <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnKaki" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKakiMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKakiMOut(this)"></button></td>
                                  <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnKaki" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKakiMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKakiMOut(this)"></button></td>
                                </tr>
                                <tr>
                                  <td style="height:200px"></td>
                                  <td style="height:200px"></td>
                                </tr>
                              </table>
                            </center>
                          </div>
                          <div class="col-md-4">
                          </div>
                        </div>
                        <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmLokalis2">
                          <div class="col-md-4">

                            <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaDepan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaDepan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKepalaDepan"></div>

                            <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaBelakang"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaBelakang"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKepalaBelakang"></div>

                            <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaKanan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKanan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKepalaKanan"></div>

                            <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderKepalaKiri"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanKepalaKiri"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKepalaKiri"></div>

                            <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanDepan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanDepan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanBadanDepan"></div>

                            <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanBelakang"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanBelakang"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanBadanBelakang"></div>

                            <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanKanan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanKanan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanBadanKanan"></div>

                            <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanKiri"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanKiri"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanBadanKiri"></div>

                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanTanganDepan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanTanganBelakang"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanTanganKanan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanTanganKiri"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKakiDepan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKakiBelakang"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKakiKanan"></div>
                            <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKakiKiri"></div>
                          </div>
                          <div class="col-md-4">
                            <center>
                              <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                                  <a href="javascript:;" class="btn grey" id="EMR_ASESMEN_DOKTER_btnGeserKiri" style="height:100%"> << Left </a>
                                  <a href="javascript:;" class="btn grey" id="EMR_ASESMEN_DOKTER_btnGeserKanan" style="height:100%"> Right >> </a>
                              </div>
                            </center>
                            <center>
                              <img id="EMR_ASESMEN_DOKTER_GFrmLokalis2" src="<?php echo base_url().'assets/pages/img/tubuh/Kepala Depan.png'?>">
                            </center>
                          </div>
                          <div class="col-md-4 row">
                            <center><h4><span><b>Bagian Lokalis : </b></span>
                            <span id="EMR_ASESMEN_DOKTER_GstsFrmLokalis2"></span></h4></center>
                            <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: 0em; border-style: inset; border-width: 1px; height:1px; width:100%">
                            <div class="col-md-5 form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASESMEN_DOKTER_KeluhanLokalis" class="form-control">
                                <label for="form_control">Keluhan</label>
                                <span class="help-block">Pasien mengalami .......</span>
                              </div>
                            </div>
                            <div class="col-md-7 form-group form-md-line-input has-success form-md-floating-label">
                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                <input type="text" id="EMR_ASESMEN_DOKTER_LokasiLokalis" class="form-control">
                                <label for="form_control">Lokasi</label>
                                <span class="help-block">Lokasi trauma</span>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <center>
                                <a class="btn green-jungle col-md-12" name="insertKeluhan" value="Tambah Data" id="insertKeluhan"> <i class="fa fa-plus"></i> <b>Tampung Keluhan</b></a>
                              </center>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <center>
                        <div class="btn-group btn-group btn-group-justified" style="width:50%">
                          <button class="btn red" data-toggle="modal" href="#modalBatalLokalis" style="width:50%">Batal</button>
                          <button class="btn blue" id="EMR_ASESMEN_DOKTER_btnSimpanModalLokalis" style="width:50%">Simpan</button>
                        </div>
                      </center>
                    </div>
                  </div>
                  <div id="modalBatalLokalis" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title"><center>Peringatan !!</center></h4>
                      </div>
                      <div class="modal-body">
                        <center>
                          Data keluhan lokalis yang anda isi tidak akan tersimpan apabila anda membatalkannya.</br><h4><b>Batalkan Lokalis??</b></h4>
                        </center>
                      </div>
                      <div class="modal-footer">
                        <center>
                          <div class="btn-group btn-group btn-group-justified" style="width:50%">
                            <a type="button" id="EMR_ASESMEN_DOKTER_btnBatalModalLokalis" class="btn red" data-dismiss="modal" style="width:50%">Ya</a>
                            <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tidak</a>
                          </div>
                        </center>
                      </div>
                    </div>
                  </div>
                  <div id="modalKosongLokalis" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title"><center>Peringatan !!</center></h4>
                      </div>
                      <div class="modal-body">
                        <center>
                          Anda belum mengisi data keluhan pasien, coba klik salah satu bagian tubuh pada gambar apabila anda belum menemukan kolom keluhan.</br><h4><b>Batalkan Lokalis??</b></h4>
                        </center>
                      </div>
                      <div class="modal-footer">
                        <center>
                          <div class="btn-group btn-group btn-group-justified" style="width:50%">
                              <a type="button" id="EMR_ASESMEN_DOKTER_btnBatalModalLokalis2" class="btn red" data-dismiss="modal" style="width:50%">Ya</a>
                              <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tidak</a>
                          </div>
                        </center>
                      </div>
                    </div>
                  </div>
                  <div id="modalKosongKeluhandanLokalis" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title"><center>Peringatan !!</center></h4>
                      </div>
                      <div class="modal-body">
                        <center>
                          Anda belum mengisi data keluhan pasien, anda perlu mengisi kolom keluhan dan lokasi untuk dapat ditampung.
                        </center>
                      </div>
                      <div class="modal-footer">
                        <center>
                          <div class="btn-group btn-group btn-group-justified" style="width:50%">
                              <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tutup</a>
                          </div>
                        </center>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 3.5em;">
                            <textarea class="form-control" id="diagnosis_ases_dok" name="diagnosis_ases_dok" rows="5" style="height: 70px;"></textarea>
                            <label for="form_control_1">Diagnosis</label>
                            <span class="help-block">Masukkan Diagnosis</span>
                          </div>
                          <div class="form-group form-md-line-input has-success form-md-floating-label" style="display: block; margin-top: 0em; margin-bottom: 2em;">
                            <textarea class="form-control" id="rencana_ases_dok" name="rencana_ases_dok" rows="5" style="height: 70px;"></textarea>
                            <label for="form_control_1">Rencana (edukasi, diagnostik, terapi, rujukan)</label>
                            <span class="help-block">Masukkan Rencana (edukasi, diagnostik, terapi, rujukan)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="portlet light bordered">
                      <div class="portlet-title tabbable-line">
                        <div class="caption">
                          <span class="caption-subject font-dark bold">Pemeriksaan Penunjang</span>
                        </div>
                      </div>
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                            <a class="btn btn-outline blue" href="#radiologi_ases_dok" data-toggle="modal"> Radiologi </a>
                            <div id="radiologi_ases_dok" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                <div class="modal-header">
                                  <h4 class="modal-title">Pilih Radiologi</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                  <?php
                                  foreach($dataRadio as $row)
                                  {
                                    ?>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <label class="text-success bold"><u><?php echo $row->NM_GR_RADIO;?> </u></label></br>
                                        <?php
                                        $get = $this->db->query("select * FROM EMR_DT_RADIOLOGI WHERE KODE_GR_RADIO = '".$row->KODE_GR_RADIO."' AND STATUS_DT_RADIO='AKTIF' order by KODE_DT_RADIO ASC");

                                        foreach($get->result() as $row)
                                        {
                                            ?>
                                            <div class="col-md-4">
                                              <label class="mt-checkbox mt-checkbox-outline">
                                              <input type="checkbox" id="radiologi_checkbox_ases_dok" name="radiologi_checkbox_ases_dok[]" value="<?php echo $row->KODE_DT_RADIO;?>">
                                              <?php
                                                echo $row->NM_DT_RADIO;
                                              ?>
                                              <span></span>
                                              </label>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                      </div>
                                    </div>
                                    <?php
                                  }
                                  ?>
                                  <label class="text-success bold"><u>RADIOLOGI LAIN</u></label>
                                  </br>
                                  <div class="col-md-4">
                                    <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" id="radiologi_lain_ases_dok" name="radiologi_lain_ases_dok" value="DTR_0000">
                                    Lain-Lain
                                    <span></span>
                                    </label>
                                    <div class="form-group collapse" id="radiologi_lain_ases_dok_1">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="radiologi_lain_ases_dok_2" name="radiologi_lain_ases_dok_2" class="form-control">
                                                <label for="form_control">Radiologi Lain</label>
                                                <span class="help-block">Masukkan Radiologi</span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                                <div class="modal-footer" style="display:block; text-align: left;">
                                    <p>
                                        CATATAN</br>
                                        *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa semalam, makan terakhir max jam 22.00,jam 07.00 pagi periksa</br>
                                        *)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hubungi Laboratorium dulu karena ada syarat-syarat khusus</br>
                                        **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa 8-12 jam, makan terakhir max jam 19.00, jam 07.00 pagi periksa</br>
                                        ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa 8-12 jam, makan terakhir max jam 21.00, jam 07.00 pagi periksa</br>
                                        ****&nbsp;&nbsp;&nbsp;&nbsp;Darah diambil tepat 2 jam sesudah makan</br>
                                        *****&nbsp;&nbsp;&nbsp;Urine pertama bangun tidur pagi, dibawa ke lab tidak boleh > 1 jam</br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bila > 1 jam, simpan dalam kulkas (bukan yang freezer)</br></br>
                                        Puasa tidak boleh makan dan tidak boleh minum sesuatu (kecuali air putih boleh)
                                    </p>
                                    <button type="button" class="btn btn-default" id="reset_radio_ases_dok" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                </div>
                            </div>
                            <a class="btn btn-outline blue" href="#laboratorium_ases_dok" data-toggle="modal"> Laboratorium </a>
                            <div id="laboratorium_ases_dok" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Pilih Laboratorium</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                  <?php
                                  foreach($dataLaboratorium as $row)
                                  {
                                    ?>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <label class="text-success bold"><u><?php echo $row->NM_GR_LABORATORIUM;?> </u></label></br>
                                        <?php
                                        $get = $this->db->query("select * FROM EMR_DT_LABORATORIUM WHERE KODE_GR_LABORATORIUM = '".$row->KODE_GR_LABORATORIUM."' AND STATUS_DT_LABORAT='AKTIF' order by KODE_DT_LABORATORIUM ASC");

                                        foreach($get->result() as $row)
                                        {
                                            ?>
                                            <div class="col-md-4">
                                              <label class="mt-checkbox mt-checkbox-outline">
                                              <input type="checkbox" id="laboratorium_checkbox_ases_dok" name="laboratorium_checkbox_ases_dok[]" value="<?php echo $row->KODE_DT_LABORATORIUM;?>">
                                              <?php
                                                echo $row->NM_DT_LABORATORIUM;
                                              ?>
                                              <span></span>
                                              </label>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                      </div>
                                    </div>
                                    <?php
                                  }
                                  ?>
                                  <label class="text-success bold"><u>LABORATORIUM LAIN</u></label>
                                  </br>
                                  <div class="col-md-4">
                                    <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" id="laboratorium_lain_ases_dok" name="laboratorium_lain_ases_dok" value="DTL_0000">
                                    Lain-Lain
                                    <span></span>
                                    </label>
                                    <div class="form-group collapse" id="laboratorium_lain_ases_dok_1">
                                        <div class="form-group form-md-line-input">
                                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="laboratorium_lain_ases_dok_2" name="laboratorium_lain_ases_dok_2" class="form-control">
                                                <label for="form_control">Laboratorium Lain</label>
                                                <span class="help-block">Masukkan Laboratorium</span>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                                <div class="modal-footer" style="display:block; text-align: left;">
                                    <p>
                                        CATATAN</br>
                                        *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa semalam, makan terakhir max jam 22.00,jam 07.00 pagi periksa</br>
                                        *)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hubungi Laboratorium dulu karena ada syarat-syarat khusus</br>
                                        **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa 8-12 jam, makan terakhir max jam 19.00, jam 07.00 pagi periksa</br>
                                        ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa 8-12 jam, makan terakhir max jam 21.00, jam 07.00 pagi periksa</br>
                                        ****&nbsp;&nbsp;&nbsp;&nbsp;Darah diambil tepat 2 jam sesudah makan</br>
                                        *****&nbsp;&nbsp;&nbsp;Urine pertama bangun tidur pagi, dibawa ke lab tidak boleh > 1 jam</br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bila > 1 jam, simpan dalam kulkas (bukan yang freezer)</br></br>
                                        Puasa tidak boleh makan dan tidak boleh minum sesuatu (kecuali air putih boleh)
                                    </p>
                                    <button type="button" class="btn btn-default" id="reset_laboratorium_ases_dok" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="portlet light bordered">
                      <div class="portlet-title tabbable-line">
                        <div class="caption">
                          <span class="caption-subject font-dark bold">Dirujuk Ke :</span>
                        </div>
                      </div>
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                            <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.25em;">
                              <div class="row">
                                <div class="col-md-4">
                                  <label class="mt-checkbox mt-checkbox-outline">
                                  <input type="checkbox" id="rahligizi_ases_dok" name="rahligizi_ases_dok" value="Ahli Gizi" >
                                  Ahli Gizi
                                  <span></span>
                                  </label>
                                </div>
                                <div class="col-md-4">
                                  <label class="mt-checkbox mt-checkbox-outline">
                                  <input type="checkbox" id="rrehabilitasi_ases_dok" name="rrehabilitasi_ases_dok" value="Rehabilitasi Medik" >
                                  Rehabilitasi Medik
                                  <span></span>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.5em;">
                              <div class="row">
                                <div class="col-md-4">
                                  <label class="mt-checkbox mt-checkbox-outline">
                                  <input type="checkbox" id="rklinik_ases_dok" name="rklinik_ases_dok" value="Klinik Spesialis" >
                                  Klinik Spesialis
                                  <span></span>
                                  </label>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group collapse" id="rklinik_ases_dok_1">
                                      <div class="form-group form-md-line-input">
                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <input type="text" id="rklinik_ases_dok_2" name="rklinik_ases_dok_2" class="form-control">
                                              <label for="form_control">Klinik Spesialis</label>
                                              <span class="help-block">Masukkan Rujukan Klinik Spesialis</span>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                              <div class="row">
                                <div class="col-md-4">
                                  <label class="mt-checkbox mt-checkbox-outline">
                                  <input type="checkbox" id="rlain_ases_dok" name="rlain_ases_dok" value="lain" >
                                  Lain - Lain
                                  <span></span>
                                  </label>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group collapse" id="rlain_ases_dok_1">
                                      <div class="form-group form-md-line-input">
                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                              <input type="text" id="rlain_ases_dok_2" name="rlain_ases_dok_2" class="form-control">
                                              <label for="form_control">Lain - Lain</label>
                                              <span class="help-block">Masukkan Rujukan Lain - Lain</span>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <!-- BEGIN TAB PORTLET-->
        <div class="portlet box red">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-gift"></i>Alergi Obat
            </div>
            <div class="tools">
              <a href="javascript:;" class="expand" data-original-title="" title=""> </a>
            </div>
          </div>
          <div class="portlet-body tabs-below">
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
                    <textarea class="form-control" id="alergiobat_ases_dok" name="alergiobat_ases_dok"></textarea>
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
        <!--OBAT PASIEN-->
        <div class="portlet box bg-green-jungle bg-font-green-jungle">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-gift"></i>Obat Pasien
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse" data-original-title="" title=""></a>
            </div>
          </div>
          <center>
            <a class="btn bg-green-jungle bg-font-green-jungle" value="Tambah Data" data-toggle="modal" href="#EMRmodalObat_ases_dok" style="height:80px;"><center><font size=6.5><b><i class="fa fa-plus"></i> Masukkan Obat</b></font></center></a>
          </center>
          <!--MODAL OBAT-->
          <div id="EMRmodalObat_ases_dok" class="modal" data-width="100%" style="width:90%;">
            <!--MODAL OBAT HEADER-->
            <div class="row">
              <div class="col-md-4">
                <div class="btn-group btn-group btn-group-justified" style="width:100%">
                  <button disable type="button" class="btn white" style="height:55px; width:30%">
                    <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                    <span style="font-size:14px" name><b><?php echo $norm?></b></span>
                  </button>
                  <button disable type="button" class="btn white" style="height:55px; width:70%">
                    <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                    <span style="font-size:14px"><b><?php echo $jk,$nama?></b></span><br>
                  </button>
                </div>
              </div>
              <div class="modal-header bg-blue bg-font-blue col-md-4">
                <h4 class="modal-title"><center><b>Obat Pasien</b></center></h4>
              </div>
              <div class="col-md-4 bg-blue">
                <div class="btn-group btn-group btn-group-justified" style="width:100%">
                  <a type="button" id="EMR_ASESMEN_btnObatSatuan" class="btn disabled white" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Satuan</b></a>
                  <a type="button" id="EMR_ASESMEN_btnObatRacik" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Racik</b></a>
                </div>
              </div>
            </div>
            <!--MODAL OBAT BODY-->
            <div class="modal-body bg-grey-steel bg-font-grey-steel">
              <input type="hidden" id="EMR_ASESMEN_statObat" value="Satuan">
              <!--OBAT SATUAN-->
              <div class="row" id="EMR_ASESMEN_formObatSatuan">
                <div class="col-md-4">
                  <div class="portlet light bordered">
                    <div class="portlet-title row">
                      <div class="caption font-red-sunglo col-md-8 col-sm-8 col-xs-8">
                          <i class="fa fa-gift font-red-sunglo"></i>
                          <span class="caption-subject bold uppercase">Obat Ke - 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                      </div>
                      <div class="tools col-md-1 col-sm-1 col-xs-1">
                        &nbsp;&nbsp;
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                      </div>
                    </div>
                    <div class="portlet-body">
                        <div data-repeater-item class="mt-repeater-item" style="display:block; margin-top:-0.5em; margin-bottom: 1em;">
                          <div class="row mt-repeater-row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label class="control-label" style="font-size:14px">Nama Obat</label>
                                <input type="text" name="obatsatuan_ases_dok[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>
                                <input type="hidden" name="idobatsatuan_ases_dok[]" class="form-control project"/>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label" style="font-size:14px">Jumlah Obat</label>
                                <input type="text" id="jumlahsatuan_ases_dok" name="jumlahsatuan_ases_dok[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-repeater-row" style="position:relative; display: block; margin-bottom: -1em;">
                            <div class="col-md-4">
                              <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                              <input type="text" id="aturanPakai_ases_dok_1" name="aturanPakai_ases_dok_1[]" placeholder="Aturan Pakai" class="form-control"/>
                            </div>
                            <div class="col-md-4">
                              <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;</label>
                              <input type="text" id="aturanPakai_ases_dok_2" name="aturanPakai_ases_dok_2[]" placeholder="Aturan Pakai" class="form-control"/>
                            </div>
                            <div class="col-md-4">
                              <label class="control-label" style="font-size:14px">Ket.</label>
                              <input type="text" id="keterangan_ases_dok" name="keterangan_ases_dok[]" placeholder="Ket" class="form-control" />
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div id="div1Satuan_ases_dok">
                </div>
                <div class="col-md-4" id="div_buttonSatuan_ases_dok">
                  <center>
                    <a class="btn green-jungle col-md-12" name="tambahSatuan_ases_dok" value="Tambah Data" id="tambahSatuan_ases_dok" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                  </center>
                </div>
              </div>
              <!--OBAT RACIK-->
              <div class="collapse" id="EMR_ASESMEN_formObatRacik">
                <div class="form-group mt-repeater row">
                  <div class="col-md-4">
                    <div class="portlet light">
                      <div class="portlet-title">
                        <div class="caption">
                          <i class="icon-puzzle font-grey-gallery"></i><span class="caption-subject bold font-grey-gallery uppercase"> Obat Racikan ke-1 </span>
                        </div>
                        <div class="tools">
                          <a href="" class="collapse" data-original-title="" title=""> </a>
                        </div>
                      </div>
                      <div class="portlet-body">
                        <div class="form-group mt-repeater">
                          <div class="row">
                            <div class="col-md-12">
                              <div data-repeater-item class="mt-repeater-item">
                                <div class="row mt-repeater-row">
                                  <div class="col-md-8">
                                    <label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>
                                    <input type="text" name="obatsatuanRacik_ases_dok[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                    <input type="hidden" name="idobatsatuanRacik_ases_dok[]" value="" class="form-control project_racik"/>
                                    <input type="hidden" value="RACIK_0001" id="idRacik_ases_dok" name="idRacik_ases_dok[]" class="form-control" />
                                  </div>
                                  <div class="col-md-4">
                                    <label class="control-label" style="font-size:14px">Jumlah</label>
                                    <input type="text" id="jumlahRacik_ases_dok" name="jumlahRacik_ases_dok[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>
                                  </div>
                                </div>
                              </div>
                              <div id="divracikBahan_ases_dok1"></div>
                              <div id="div_buttonracikBahan_ases_dok1">
                                <a class="btn blue tambahRacikBahan_ases_dok-click col-md-12" name="tambahRacikBahan_ases_dok" value="Tambah Data" data-todo='{"number":"1"}'><i class="fa fa-plus"></i> Tambah Bahan</a>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <label class="control-label" style="font-size:14px">Detail Obat</label>
                              <div class="row">
                                <div class="col-md-4">
                                  <input type="text" id="jumlahRacik_ases_dok_2" name="jumlahRacik_ases_dok_2[]" placeholder="Jumlah" class="form-control" onkeypress="return hanyaAngka(event)"/>
                                </div>
                                <div class="col-md-8">
                                  <input type="text" id="aturanpakaiRacik_ases_dok" name="aturanpakaiRacik_ases_dok[]" placeholder="Aturan Pakai" class="form-control" />
                                </div>
                              </div>
                              <br>
                              <div class="row">
                                <div class="col-md-4">
                                  <input type="text" id="aturanpakaiRacik_ases_dok_2" name="aturanpakaiRacik_ases_dok_2[]" placeholder="Aturan Pakai" class="form-control" />
                                </div>
                                <div class="col-md-8">
                                  <input type="text" id="keteranganRacik_ases_dok" name="keteranganRacik_ases_dok[]" placeholder="Keterangan" class="form-control" />
                                </div>
                              </div>
                              <div class="col-md-8">
                                  <input type="hidden" value="RACIK_0001" id="idRacik_ases_dok_2" name="idRacik_ases_dok_2[]" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="divracikobat_ases_dok"></div>
                  <div class="col-md-4" id="div_buttonracikobat_ases_dok">
                    <center>
                      <a class="btn green-jungle col-md-12" name="tambahracikobat_ases_dok" value="Tambah Data" id="tambahracikobat_ases_dok" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                    </center>
                  </div>
                </div>
              </div>
              <!--MODAL OBAT FOOTER-->
              <div class="modal-footer">
                <button type="button" id="" data-dismiss="modal" class="btn blue">Tutup</button>
              </div>
            </div>
          </div>
        </div>
        <div class="portlet light portlet-fit bordered">
          <div class="portlet-title">
            <span><b>Penanggung jawab pengisi data :</b></span>
          </div>
          <div class="row portlet-body">
            <div class="col-sm-12">
              <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data berikut, masukkan password anda terlebih dahulu sebagai proses verifikasi penginput data</p>
              <div class="form-group form-md-line-input has-success form-md-floating-label">
                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                  <input type="password" id="VerPassAsesmen_dok" name="VerPassAsesmen_dok" class="form-control">
                  <label for="form_control_1">Masukkan Password</label>
                  <span class="help-block">Masukkan password</span>
                </div>
              </div>
            </div>
            <input type="hidden" id="norm_ases_dok" name="norm_ases_dok" value="<?php echo $norm; ?>">
            <input type="hidden" id="EMR_ases_dok_Noreg" name="EMR_ases_dok_Noreg" value="<?php echo $noreg; ?>">
            <input type="hidden" id="EMR_ases_dok_Unit" name="EMR_ases_dok_Unit" value="<?php echo $namaunit; ?>">
            <input type="hidden" id="kodeunit_ases_dok" name="kodeunit_ases_dok" value="<?php echo $KodeUnit; ?>">
            <!--<input type="hidden" id="id_asesmen_ases_dok" name="id_asesmen_ases_dok" value="<?php echo $id_asesmen; ?>">-->
            <input type="hidden" id="tanggungjawab" name="tanggungjawab" value="<?php echo $username; ?>">
            <div class="btn-group btn-group btn-group-justified" id="btnbukan">
              <a href="<?php echo site_url('login/logout') ?>" class="btn red"> Saya bukan <?php echo $username; ?></a>
            </div>
          </div>
        </div>
        <div class="portlet light portlet-fit bordered">
          <div class="portlet-body">
            <div class="portlet-title">
                <div class="caption">
                  <label class="mt-checkbox mt-checkbox-outline">
                  <input type="checkbox" id="suratsakit_ases_dok" name="suratsakit_ases_dok" value="Surat Sakit"><b>Surat Sakit</b>
                  <span></span>
                  </label>
                </div>
            </div>
            <div class="row">
              <div id="alert-msg-AsesDoksimpan"></div>
              <div class="btn-group btn-group btn-group-justified">
                  <!--<button type="button" class="btn blue" style="width:50%" id="btnsimpanasesmen" name="btnsimpanasesmen">Simpan</button>
                  <button type="button" class="btn red" style="width:50%">Batal</button>
                  <button type="button" class="btn btn-default" style="width:50%">Batal</button>-->
                  <button type="button" class="btn green" id="btnsimpanasesmen_dok" name="btnsimpanasesmen_dok" style="width:100%">Simpan</button>
              </div>
            </div>
          </div>
        </div>
        <div id="verPass_ases_dok" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title"><center>Simpan data berhasil</center></h4>
              </div>
              <div class="modal-body">
                <center>
                  <img src="<?php echo base_url().'assets/pages/img/Icon/thanks.gif'?>" style="width:50%">
                  </br>
                  Terimakasih atas kerjasama anda, aplikasi akan otomatis kembali ke halaman depan
                </center>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
