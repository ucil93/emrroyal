
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content" style="background-color:#BFBFBF;">
    <div class="row">
      <div class="col-md-8">
        <div class="mt-element-ribbon bg-grey-steel">
          <div class="portlet light bordered ribbon-content">
            <div class="caption font-red-sunglo">
              <div class="col-md-5">
                <span class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">Electronic Medical Record</span>
              </div>
              <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="row" id="EMR_ASESMEN_AWAL_stepPerawat">
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <button type="" class="btn red btn-lg mt-ladda-btn ladda-button btn-circle">
                      <span class="ladda-label"><b>1</b></span>
                    </button>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <span><center>Form </br> <b>Perawat</b><center></span>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <button type="" class="btn c-btn-red btn-lg mt-ladda-btn ladda-button btn-circle">
                      <span class="font-default"><b>2</b></span>
                    </button>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <span class="font-default"><center>Form </br> <b>Dokter</b></center></span>
                  </div>
                </div>
                <div class="row collapse" id="EMR_ASESMEN_AWAL_stepDokter">
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <button type="" class="btn c-btn-red btn-lg mt-ladda-btn ladda-button btn-circle">
                      <span class="font-default"><b>1</b></span>
                    </button>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <span class="font-default"><center>Form </br> <b>Perawat</b><center></span>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <button type="" class="btn red btn-lg mt-ladda-btn ladda-button btn-circle">
                      <span class="ladda-label"><b>2</b></span>
                    </button>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <span><center>Form </br> <b>Dokter</b></center></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="portlet-body form">
              <div class="form-body">
                <div class="row">
                  <div id="EMR_ASESMEN_AWAL_FrmLPerawat">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="portlet light bordered">
                          <div class="caption font-red-sunglo">
                            <center><span class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">ASESMEN AWAL KEPERAWATAN PASIEN RAWAT JALAN</span></center>
                          </div>
                        </div>
                        <input type="hidden" id="asd">
                            <!--<div class="btn-group btn-group-solid" style="width:100%">-->
                            <div class="col-md-12">
                              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman1" class="btn white col-md-7">1. Hambatan Komunikasi</button>
                              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman2" class="btn green col-md-1">2</button>
                              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman3" class="btn green col-md-1">3</button>
                              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman4" class="btn green col-md-1">4</button>
                              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman5" class="btn green col-md-1">5</button>
                              <button type="button" id="EMR_ASESMEN_PERAWAT_btnHalaman6" class="btn green col-md-1">6</button>
                            </div>
                        <div class="portlet light bordered form-body">
                          <div class="row">
                            <div class="col-md-12" id="EMR_ASESMEN_PERAWAT_Halaman1">

                            </div>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_Halaman2">

                            </div>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_Halaman3">

                            </div>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_Halaman4">

                            </div>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_Halaman5">

                            </div>
                            <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_Halaman6">

                            </div>
                            <div class="col-md-12">
                              <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                                <button type="button" id="EMR_ASESMEN_PERAWAT_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                                <button type="button" id="EMR_ASESMEN_PERAWAT_HalamanNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                              </div>
                            </div>

                            <!-- Modals Skor Nyeri
                            <div class="col-md-12">
                              <h4>SKOR NYERI :</h4>
                              <div class="col-md-5">
                                <center>
                                  <a id="EMR_ASESMEN_PERAWAT_btnSkorNyeri" class="btn bg-green-jungle bg-font-green-jungle" data-toggle="modal" href="#AsesmenModalSkorNyeri"><center><font size=6.5><b>Skor Nyeri</b></font></center></a>
                                  </br>
                                  <br>
                                </center>
                              </div>
                            </div>-->
                            <div id="AsesmenModalSkorNyeri" class="modal" data-width="100%" style="width:50%">
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                    <button disable typ"PERAWATton" class="btn white" style="height:55px; width:30%">
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
                                  <h4 class="modal-title"><center><b>Skor Nyeri</b></center></h4>
                                </div>
                                <div class="col-md-4 bg-blue" style="height:56px;">

                                </div>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-4">

                                    <div id="EMR_ASESMEN_PERAWAT_AppendHasilHeaderNyeriDepan"></div>
                                    <div id="EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriDepan"></div>
                                    <div id="EMR_ASESMEN_PERAWAT_AppendKeluhanNyeriDepan"></div>

                                    <div id="EMR_ASESMEN_PERAWAT_AppendHasilHeaderNyeriBelakang"></div>
                                    <div id="EMR_ASESMEN_PERAWAT_AppendHasilKeluhanNyeriBelakang"></div>
                                    <div id="EMR_ASESMEN_PERAWAT_AppendKeluhanNyeriBelakang"></div>

                                  </div>
                                  <div class="col-md-4">
                                    <center>
                                      <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                                        <a class="btn grey" id="EMR_ASESMEN_PERAWAT_btnGeserKiri" style="height:100%"> << Left </a>
                                        <a class="btn grey" id="EMR_ASESMEN_PERAWAT_btnGeserKanan" style="height:100%"> Right >> </a>
                                      </div>
                                    </center>
                                    <center>
                                      <img id="EMR_ASESMEN_PERAWAT_GFrmSN" src="<?php echo base_url().'assets/pages/img/tubuh/Tubuh Depan.png'?>">
                                    </center>
                                  </div>
                                  <div class="col-md-4 row">
                                    <input type="hidden" id="EMR_ASESMEN_PERAWAT_JumlahData" value="0">
                                    <center><h4><span><b>Nyeri Bagian : </b></span>
                                    <span id="EMR_ASESMEN_PERAWAT_GstsFrmSN">Tubuh Depan</span></h4></center>
                                    <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: 0em; border-style: inset; border-width: 1px; height:1px; width:100%">
                                    </br>
                                    <div class="col-md-12">
                                      <center>
                                        <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                                          <a class="btn blue disabled" id="EMR_ASESMEN_PERAWAT_btnTanya1" style="height:100%"> 1 </a>
                                          <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya2" style="height:100%"> 2 </a>
                                          <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya3" style="height:100%"> 3 </a>
                                          <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya4" style="height:100%"> 4 </a>
                                          <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya5" style="height:100%"> 5 </a>
                                          <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya6" style="height:100%"> 6 </a>
                                          <a class="btn white" id="EMR_ASESMEN_PERAWAT_btnTanya7" style="height:100%"> 7 </a>
                                        </div>
                                      </center>
                                    </div>
                                    </br>
                                    <div class="col-md-12">
                                    </br>
                                      <center>
                                        <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                                          <a class="btn white disabled" id="EMR_ASESMEN_PERAWAT_btnTanyaBack" style="height:100%"> << Back </a>
                                          <a class="btn blue" id="EMR_ASESMEN_PERAWAT_btnTanyaNext" style="height:100%"> Next >> </a>
                                        </div>
                                      </center>
                                    </br>
                                    </br>
                                    </div>
                                    <div class="col-md-12" id="EMR_ASESMEN_PERAWAT_FrmTanya1">
                                      <span>1. Apakah Nyeri berpindah dari suatu tempat ke tempat lain?</span>
                                      <center>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="md-radio-inline">
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNpindahYA" name="EMR_ASESMEN_PERAWAT_RbtnSNpindah" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_PERAWAT_RbtnSNpindahYA">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> YA </label>
                                            </div>
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNpindahTIDAK" name="EMR_ASESMEN_PERAWAT_RbtnSNpindah" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_PERAWAT_RbtnSNpindahTIDAK">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> TIDAK </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </center>
                                    </div>
                                    <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya2">
                                      <span>2. Sudah berapa lama anda merasakan nyeri?</span>
                                      <center>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="md-radio-inline">
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNakut" name="EMR_ASESMEN_PERAWAT_RbtnSNdurasi" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_PERAWAT_RbtnSNakut">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> AKUT : < 3 bulan </label>
                                            </div>
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNkronik" name="EMR_ASESMEN_PERAWAT_RbtnSNdurasi" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_PERAWAT_RbtnSNkronik">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> KRONIK : > 3 bulan </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </center>
                                    </div>
                                    <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya3">
                                      <span>3. Setiap berapa waktu anda merasakan nyeri?</span>
                                      <center>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="md-radio-inline">
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap1" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap1">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> 1-2 Jam</label>
                                            </div>
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap2" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap2">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> < 4 Jam</label>
                                            </div>
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNsetiap3" name="EMR_ASESMEN_PERAWAT_RbtnSNsetiap" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_PERAWAT_RbtnSNsetiap3">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> > 4 Jam</label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </center>
                                    </div>
                                    <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya4">
                                      <span>4. Gambaran rasa nyeri?</span>
                                      <center>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="row md-checkbox-inline">
                                            <div class="col-md-5 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran1" name="" value="Seperti ditimpa benda berat" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran1">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Seperti ditimpa benda berat </label>
                                            </div>
                                            <div class="col-md-5 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran2" name="" value="Seperti Ditarik" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran2">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Seperti Ditarik </label>
                                            </div>
                                          </div>
                                          <div class="row md-checkbox-inline">
                                            <div class="col-md-5 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran3" name="" value="Seperti Ditusuk" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran3">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Seperti Ditusuk</label>
                                            </div>
                                            <div class="col-md-5 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran4" name="" value="Seperti Dipukul" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran4">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Seperti Dipukul </label>
                                            </div>
                                          </div>
                                          <div class="row md-checkbox-inline">
                                            <div class="col-md-5 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran5" name="" value="Seperti Dibakar" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran5">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Seperti Dibakar </label>
                                            </div>
                                            <div class="col-md-5 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran6" name="" value="Seperti Berdenyut" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran6">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Seperti Berdenyut </label>
                                            </div>
                                          </div>
                                          <div class="row md-checkbox-inline">
                                            <div class="col-md-5 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnGambaran7" name="" value="Seperti Kram" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnGambaran7">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Seperti Kram </label>
                                            </div>
                                            <div class="col-md-5">

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </center>
                                    </div>
                                    <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya5">
                                      <span>5. Berapa lamanya waktu anda merasakan nyeri?</span>
                                      <center>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="md-radio-inline">
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNlama1" name="EMR_ASESMEN_PERAWAT_RbtnSNlama" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_PERAWAT_RbtnSNlama1">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> < 30 menit</label>
                                            </div>
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_PERAWAT_RbtnSNlama2" name="EMR_ASESMEN_PERAWAT_RbtnSNlama" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_PERAWAT_RbtnSNlama2">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> > 30 menit</label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </center>
                                    </div>
                                    <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya6">
                                      <span>6A. Apa yang membuat nyeri berkurang?</span>
                                      <center>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="row md-checkbox-inline">
                                            <div class="col-md-12 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang1" name="" value="Nyeri berkurang dengan kompres dingin" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang1">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Kompres dingin </label>
                                            </div>
                                            <div class="col-md-12 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang2" name="" value="Nyeri berkurang dengan komres hangat" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang2">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Kompres hangat </label>
                                            </div>
                                            <div class="col-md-12 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang3" name="" value="Nyeri berkurang dengan istirahat" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang3">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Istirahat </label>
                                            </div>
                                            <div class="col-md-12 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang4" name="" value="Nyeri berkurang dengan minum obat" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang4">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Minum Obat </label>
                                            </div>
                                            <div class="col-md-12 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBerkurang5" name="" value="Nyeri berkurang dengan berubah posisi" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnBerkurang5">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Berubah posisi </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </center>
                                      <span>6B. Apa yang membuat nyeri bertambah?</span>
                                      <center>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="row md-checkbox-inline">
                                            <div class="col-md-12 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambah1" name="" value="Nyeri bertambah dengan kompres dingin" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnBertambah1">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Kompres dingin </label>
                                            </div>
                                            <div class="col-md-12 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambah2" name="" value="Nyeri bertambah dengan komres hangat" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnBertambah2">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Kompres hangat </label>
                                            </div>
                                            <div class="col-md-12 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambah3" name="" value="Nyeri bertambah dengan istirahat" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnBertambah3">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Istirahat </label>
                                            </div>
                                            <div class="col-md-12 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambah4" name="" value="Nyeri bertambah dengan minum obat" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnBertambah4">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Minum Obat </label>
                                            </div>
                                            <div class="col-md-12 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_PERAWAT_CbtnBertambah5" name="" value="Nyeri bertambah dengan berubah posisi" class="md-check">
                                              <label for="EMR_ASESMEN_PERAWAT_CbtnBertambah5">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Berubah posisi </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </center>
                                    </div>
                                    <div class="col-md-12 form-group form-md-line-input has-success form-md-floating-label collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya7">
                                      <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                        <input type="text" id="EMR_ASESMEN_PERAWAT_LokasiSN" class="form-control">
                                        <label for="form_control">Lokasi</label>
                                        <span class="help-block">Lokasi trauma</span>
                                      </div>
                                    </div>
                                  </br>
                                    <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya8">
                                      <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                        <div class="col-md-8">
                                          <input type="range" id="SkorNyeri" value="0" name="SkorNyeri" min="0" max="10" data-rangeSlider></input>
                                        </br><center><b><h4><span>Skala Nyeri : </span><span id="EMR_ASESMEN_PERAWAT_NilaiSN"> 0 </span></h4></b></center>
                                        </div>
                                        <div class="col-md-4">
                                          <center><img id="Gskor" src="<?php echo base_url().'assets/pages/img/Icon/emot01.png'?>" style="width:90%"></center>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12 collapse" id="EMR_ASESMEN_PERAWAT_FrmTanya9">
                                      <center>
                                        <a class="btn green-jungle col-md-12" name="insertNyeri" value="Tambah Data" id="insertNyeri"> <i class="fa fa-plus"></i> <b>Tampung Keluhan</b></a>
                                      </center>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <center>
                                  <div class="btn-group btn-group btn-group-justified" style="width:50%">
                                    <button class="btn red" data-toggle="modal" href="#modalBatalSN" style="width:50%">Batal</button>
                                    <button class="btn blue" id="EMR_ASESMEN_PERAWAT_btnSimpanModalSN" style="width:50%">Simpan</button>
                                  </div>
                                </center>
                              </div>
                            </div>
                            <div id="modalBatalSN" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><center>Peringatan !!</center></h4>
                                </div>
                                <div class="modal-body">
                                  <center>
                                    Data keluhan Skor Nyeri yang anda isi tidak akan tersimpan apabila anda membatalkannya.</br><h4><b>Batalkan Skor Nyeri??</b></h4>
                                  </center>
                                </div>
                                <div class="modal-footer">
                                  <center>
                                    <div class="btn-group btn-group btn-group-justified" style="width:50%">
                                      <a type="button" id="EMR_ASESMEN_PERAWAT_btnBatalModalSN" class="btn red" data-dismiss="modal" style="width:50%">Ya</a>
                                      <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tidak</a>
                                    </div>
                                  </center>
                                </div>
                              </div>
                            </div>
                            <div id="modalKosongSN" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><center>Peringatan !!</center></h4>
                                </div>
                                <div class="modal-body">
                                  <center>
                                    Anda belum mengisi data keluhan pasien, coba klik salah satu bagian tubuh pada gambar apabila anda belum menemukan kolom keluhan.</br><h4><b>Batalkan Skor Nyeri??</b></h4>
                                  </center>
                                </div>
                                <div class="modal-footer">
                                  <center>
                                    <div class="btn-group btn-group btn-group-justified" style="width:50%">
                                        <a type="button" id="EMR_ASESMEN_PERAWAT_btnBatalModalSN2" class="btn red" data-dismiss="modal" style="width:50%">Ya</a>
                                        <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tidak</a>
                                    </div>
                                  </center>
                                </div>
                              </div>
                            </div>
                            <div id="modalKosongKeluhandanSN" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="collapse" id="EMR_ASESMEN_AWAL_FrmLDokter">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="portlet light bordered">
                          <div class="caption font-red-sunglo">
                            <center><span class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">ASESMEN AWAL DOKTER PASIEN RAWAT JALAN</span></center>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-title">
                          <div class="caption font-red-intense">
                            <i class="fa fa-heartbeat font-red-intense"></i>
                            <span class="caption-subject bold uppercase"> Pemeriksaan </span>
                            <span class="caption-helper">Tanda Vital</span>
                          </div>
                          <div class="tools">
                            <a href="" class="collapse" data-original-title="" title=""> </a>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div data-toggle="context">
                            <div class="row">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-title">
                          <div class="caption font-red-intense">
                            <span class="caption-subject bold uppercase"> Pemeriksaan </span>
                            <span class="caption-helper">Dokter</span>
                          </div>
                        </div>
                        <div class="portlet-body">
                          <div data-toggle="context">

                            <div class="btn-group btn-group-solid" style="width:100%">
                              <button type="button" id="EMR_ASESMEN_DOKTER_btnHalaman1" class="btn white col-md-7">1. Anamnesa</button>
                              <button type="button" id="EMR_ASESMEN_DOKTER_btnHalaman2" class="btn green col-md-1">2</button>
                              <button type="button" id="EMR_ASESMEN_DOKTER_btnHalaman3" class="btn green col-md-1">3</button>
                              <button type="button" id="EMR_ASESMEN_DOKTER_btnHalaman4" class="btn green col-md-1">4</button>
                              <button type="button" id="EMR_ASESMEN_DOKTER_btnHalaman5" class="btn green col-md-1">5</button>
                              <button type="button" id="EMR_ASESMEN_DOKTER_btnHalaman6" class="btn green col-md-1">6</button>
                            </div>
                            <div class="portlet light bordered form-body">
                              <div class="row">
                                <div class="col-md-12" id="EMR_ASESMEN_DOKTER_Halaman1">
                                  <div class="col-md-6">
                                    <div class="portlet light portlet-fit bordered">
                                      <div class="portlet-title">
                                        <span><b>Keluhan Penyakit</b></span>
                                      </div>
                                      <div class="portlet-body">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                          <textarea class="form-control" id="EMR_ASESMEN_DOKTER_KeluhanPenyakit" name="catatan" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                                          <label for="form_control_1">Textarea input</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="portlet light portlet-fit bordered">
                                      <div class="portlet-title">
                                        <span><b>Riwayat Penyekit Sekarang</b></span>
                                      </div>
                                      <div class="portlet-body">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                          <textarea class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitSekarang" name="catatan" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                                          <label for="form_control_1">Textarea input</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="portlet light portlet-fit bordered">
                                      <div class="portlet-title">
                                        <span><b>Riwayat Penyekit Dahulu</b></span>
                                      </div>
                                      <div class="portlet-body">
                                        <center>
                                        <div class="form-group">
                                          <div class="input-group">
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu1" name="" value="DM" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> DM </label>
                                              </div>
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu2" name="" value="HT" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> HT </label>
                                              </div>
                                            </div>
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu3" name="" value="Stroke" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Stroke</label>
                                              </div>
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu4" name="" value="Jantung" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu4">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Jantung </label>
                                              </div>
                                            </div>
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu5" name="" value="Ginjal" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu5">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Ginjal </label>
                                              </div>
                                                <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu6" name="" value="" placeholder="Lain lain">
                                            </div>
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu7" name="" value="Tidak ada" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu7">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> tidak ada </label>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        </center>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="portlet light portlet-fit bordered">
                                      <div class="portlet-title">
                                        <span><b>Riwayat Penyekit Keluarga</b></span>
                                      </div>
                                      <div class="portlet-body">
                                        <center>
                                        <div class="form-group">
                                          <div class="input-group">
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu1" name="" value="DM" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> DM </label>
                                              </div>
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu2" name="" value="HT" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> HT </label>
                                              </div>
                                            </div>
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu3" name="" value="Stroke" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Stroke</label>
                                              </div>
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu4" name="" value="Jantung" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu4">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Jantung </label>
                                              </div>
                                            </div>
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu5" name="" value="Ginjal" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu5">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Ginjal </label>
                                              </div>
                                                <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu6" name="" value="" placeholder="Lain lain">
                                            </div>
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu7" name="" value="Tidak ada" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahulu7">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> tidak ada </label>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        </center>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="portlet light portlet-fit bordered">
                                      <div class="portlet-title">
                                        <span><b>Alergi</b></span>
                                      </div>
                                      <div class="portlet-body">
                                        <?php
                                        if($alergiobat != "")
                                        {
                                          echo "Pasien Mempunyai Alergi : ".$alergiobat."";
                                        }
                                        else
                                        {
                                          echo "Pasien Masih Belum Mempunyai Catatan Alergi";
                                        }
                                        ?>
                                        <div id="EMR_ASESMEN_DOKTER_InputAlergiObat" class="form-group collapse">
                                        </br>
                                          <label for="form_control_1">Masukkan Alergi</label>
                                          <input type="text" id="alergiobat" name="alergiobat" value="" class="form-control">
                                          <input type="hidden" id="alergiobatstatus" value="Tidak" class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <span>Apakah pasien memiliki alergi?</span>
                                      <center>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="md-radio-inline">
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_DOKTER_RbtnAlergiOYA" name="EMR_ASESMEN_DOKTER_RbtnAlergiO" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_DOKTER_RbtnAlergiOYA">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> YA </label>
                                            </div>
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_DOKTER_RbtnAlergiOTIDAK" name="EMR_ASESMEN_DOKTER_RbtnAlergiO" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_DOKTER_RbtnAlergiOTIDAK">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> TIDAK </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </center>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="portlet light portlet-fit bordered">
                                      <div class="portlet-title">
                                        <span><b>Riwayat Sosial</b></span>
                                      </div>
                                      <div class="portlet-body">
                                        <center>
                                        <div class="form-group">
                                          <div class="input-group">
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatSosial1" name="" value="Merokok" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatSosial1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Merokok </label>
                                              </div>
                                              <div class="col-md-5 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatSosial2" name="" value="Alkohol" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_RiwayatSosial2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Alkohol </label>
                                              </div>
                                            </div>
                                            <input type="text" id="" value="" class="form-control" placeholder="Lain lain">
                                          </div>
                                        </div>
                                        </center>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="portlet light portlet-fit bordered">
                                      <div class="portlet-title">
                                        <span><b>Pemeriksaan fisik</b></span>
                                      </div>
                                      <div class="portlet-body">

                                      </div>
                                    </div>
                                  </div>


                                  <center>
                                    <div class="btn-group btn-group-circle btn-group-sm btn-group-solid" style="width:50%">
                                      <button type="button" id="EMR_ASESMEN_DOKTER_AnamnesaBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                                      <button type="button" id="EMR_ASESMEN_DOKTER_AnamnesaNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                                    </div>
                                  </center>
                                </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Halaman2">
                                  <div class="col-md-5 portlet light bordered">
                                    <div class="portlet-body">
                                      <div class="tab-content">
                                        <div class="md-checkbox">
                                          <input type="checkbox" id="EMR_ASESMEN_DOKTER_FungNormal" name="EMR_ASESMEN_DOKTER_FungNormal" value="" class="md-check">
                                          <label for="EMR_ASESMEN_DOKTER_FungNormal">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Pasien tidak memiliki permasalahan fungsional </label>
                                        </div>
                                        <input type="hidden" id="tindak2">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-7 portlet light bordered">
                                    <div class="portlet-body">
                                      <div class="tab-content">
                                        <div class="col-md-12">
                                          Hasil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:

                                          <span id="EMR_ASESMEN_DOKTER_FungHasil"><b> Tidak beresiko</b></span>
                                        </div>
                                        <div class="col-md-12">
                                          Tindakan :

                                          <span id="EMR_ASESMEN_DOKTER_FungTindakan"><b> Tidak ada tindakan</b></span>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="md-checkbox collapse" id="EMR_ASESMEN_DOKTER_FungTindakan2">
                                            <input type="checkbox" id="EMR_ASESMEN_DOKTER_FungTindakanCb" name="EMR_ASESMEN_DOKTER_FungTindakanCb" value="tidak" class="md-check">
                                            <label for="EMR_ASESMEN_DOKTER_FungTindakanCb">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Tindakan sudah dilakukan </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="EMR_ASESMEN_DOKTER_FungAbnormal" class="portlet light bordered col-md-12">
                                    <div class="portlet-body">
                                      <div class="tab-content">
                                        <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                          <div class="col-md-7">
                                            <input class="hidden" id="tindak">
                                            a. Bagaimana cara berjalan Pasien?
                                            <div class="row md-checkbox-inline">
                                              <div class="col-md-12 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_FungA1" name="EMR_ASESMEN_DOKTER_FungA1" value="Tidak seimbang / sempoyongan" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_FungA1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Tidak seimbang / sempoyongan </label>
                                              </div>
                                              <div class="col-md-12 md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_DOKTER_FungA2" name="EMR_ASESMEN_DOKTER_FungA2" value="Jalan dengan menggunakan alat bantu" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_FungA2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Jalan dengan menggunakan alat bantu </label>
                                              </div>
                                            </div>
                                              <input type="text" id="alatbantu" name="alatbantu" value="" class="form-control collapse" maxlength="30" placeholder="Alat bantu yang digunakan pasien">
                                            b. Apakah pasien menopang saat akan duduk?
                                            <div class="md-radio-inline">
                                              <div class="md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_FungBYA" name="EMR_ASESMEN_DOKTER_FungB" class="md-radiobtn">
                                                <label for="EMR_ASESMEN_DOKTER_FungBYA">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> YA </label>
                                              </div>
                                              <div class="md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_FungBTD" name="EMR_ASESMEN_DOKTER_FungB" class="md-radiobtn">
                                                <label for="EMR_ASESMEN_DOKTER_FungBTD">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> TIDAK </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-5">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="prothesis" name="prothesis" value="" class="form-control" maxlength="30">
                                                <label for="form_control_1">Prothesis</label>
                                                <span class="help-block">Masukkan Data</span>
                                                <i style="font-size:12px"><b></b></i>
                                              </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                <input type="text" id="cacattubuh" name="cacattubuh" value="" class="form-control" maxlength="30">
                                                <label for="form_control_1">Cacat tubuh</label>
                                                <span class="help-block">Masukkan Data</span>
                                                <i style="font-size:12px"><b></b></i>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Halaman3">
                                  <div class="col-md-5 portlet light bordered">
                                    <div class="portlet-body">
                                      <div class="tab-content">
                                        <div class="md-checkbox">
                                          <input type="checkbox" id="EMR_ASESMEN_DOKTER_SN1Ada" name="EMR_ASESMEN_DOKTER_SN1Ada" value="" class="md-check">
                                          <label for="EMR_ASESMEN_DOKTER_SN1Ada">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Pasien tidak memiliki permasalahan Nyeri </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-7 portlet light bordered">
                                    <div class="portlet-body">
                                      <div class="tab-content">
                                        <div class="col-md-12">
                                          Skor Nyeri :

                                          <span id="EMR_ASESMEN_DOKTER_SkorNyeri"><b> 0</b></span>
                                        </div>
                                        <div class="col-md-12">
                                          Skala Nyeri :

                                          <span id="EMR_ASESMEN_DOKTER_SkalaNyeri"><b>
                                            <?php
                                            if($Utahun < 1)
                                            { ?>
                                              Nyeri ringan sampai tidak nyeri
                                            <?php }
                                            else if($Utahun < 50)
                                            { ?>
                                              Relaxed dan comfortable (santai dan nyaman)
                                            <?php }
                                            else
                                            {?>
                                              Tidak nyeri
                                            <?php }?></b></span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12 portlet light bordered" id="EMR_ASESMEN_DOKTER_SN1Takda">
                                    <div class="portlet-body">
                                      <div class="tab-content">
                                        <input type="hidden" id="ujia" value="50">
                                        <!--<input type="text" id="ujia" value="<?php $Utahun ?>">-->
                                        <?php
                                        if($Utahun < 1)
                                        {?>
                                          <div class="col-md-12" id="EMR_ASESMEN_DOKTER_SN1_1">
                                            a. Facial Expression (ekspresi wajah)?
                                            <div class="row md-radio-inline">
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSA1" name="EMR_ASESMEN_DOKTER_SN_NIPSA" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSA1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Relaxed (wajah tenang, ekspresi netral) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSA2" name="EMR_ASESMEN_DOKTER_SN_NIPSA" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSA2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Grimace (otot wajah tegang, alis berkerut, dagu dan rahang tegang) </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN1_2">
                                            b. Cry (menangis)?
                                            <div class="row md-radio-inline">
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSB1" name="EMR_ASESMEN_DOKTER_SN_NIPSB" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSB1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> No cry (tenang, tidak menangis) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSB2" name="EMR_ASESMEN_DOKTER_SN_NIPSB" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSB2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Whimper (merengek ringan, kadang-kadang) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSB3" name="EMR_ASESMEN_DOKTER_SN_NIPSB" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSB3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Vigorour crying (berteriak kencang, menarik, melengking terus-terusan)</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN1_3">
                                            c. Breathing Patterns (pola pernafasan)
                                            <div class="row md-radio-inline">
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSC1" name="EMR_ASESMEN_DOKTER_SN_NIPSC" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSC1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Relaxed (Pola pernafasan bayi normal) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSC2" name="EMR_ASESMEN_DOKTER_SN_NIPSC" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSC2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Change in breathing (tidak teratur, lebih cepat dari biasanya, tersedak, nafas tertahan) </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN1_4">
                                            d. Arms(lengan)
                                            <div class="row md-radio-inline">
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSD1" name="EMR_ASESMEN_DOKTER_SN_NIPSD" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSD1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSD2" name="EMR_ASESMEN_DOKTER_SN_NIPSD" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSD2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Relaxed (gerakan tangan acak sesekali) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSD3" name="EMR_ASESMEN_DOKTER_SN_NIPSD" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSD3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Flexed (Tegang, lengan lurus, kaku dan atau fleksi) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSD4" name="EMR_ASESMEN_DOKTER_SN_NIPSD" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSD4">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Extended (Tegang, lengan lurus, kaku dan atau ekstensi) </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN1_5">
                                            e. Legs(kaki)
                                            <div class="row md-radio-inline">
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSE1" name="EMR_ASESMEN_DOKTER_SN_NIPSE" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSE1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSE2" name="EMR_ASESMEN_DOKTER_SN_NIPSE" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSE2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Relaxed (gerakan kaki acak sesekali) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSE3" name="EMR_ASESMEN_DOKTER_SN_NIPSE" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSE3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Flexed (Tegang, kaki lurus, kaku dan atau fleksi) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSE4" name="EMR_ASESMEN_DOKTER_SN_NIPSE" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSE4">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Extended (Tegang, kaki lurus, kaku dan atau ekstensi) </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN1_6">
                                            f. State of Arousal (kesadaran)
                                            <div class="row md-radio-inline">
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSF1" name="EMR_ASESMEN_DOKTER_SN_NIPSF" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSF1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Sleeping (tenang, tidur damai) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSF2" name="EMR_ASESMEN_DOKTER_SN_NIPSF" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSF2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Awake (Tenang, tidak tidur/Bangun, gerakan kaki acak yang terjaga) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_NIPSF3" name="EMR_ASESMEN_DOKTER_SN_NIPSF" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_NIPSF3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Fussy (rewel, gelisah dan meronta-ronta) </label>
                                              </div>
                                            </div>
                                          </div>
                                        <?php
                                        }
                                        else if($Utahun < 4)
                                        {?>
                                          <div class="col-md-12" id="EMR_ASESMEN_DOKTER_SN2_1">
                                            a. Face Expression (ekspresi wajah)?
                                            <div class="row md-radio-inline">
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCA1" name="EMR_ASESMEN_DOKTER_SN_FLACCA" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCA1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Tidak ada ekspresi tertentu atau seyum, kontak mata </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCA2" name="EMR_ASESMEN_DOKTER_SN_FLACCA" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCA2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Kadang meringis atau mengerutkan kening, menarik diri, tidak tertarik, wajah terlihat cemas, alis diturunkan, maka sebagian tertutup, pipi terangkat, mulut mengerut </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCA3" name="EMR_ASESMEN_DOKTER_SN_FLACCA" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCA3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Sering cemberut, konstan, rahangter katup. Dagu bergetar, kerutan yang dalam di dahi, mata tertutup, mulut terbuka, garis yang dalam di sekitar hidung/bibir </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN2_2">
                                            b. Leg (Kaki)
                                            <div class="row md-radio-inline">
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCB1" name="EMR_ASESMEN_DOKTER_SN_FLACCB" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCB1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>	Posisi normal atau santai </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCB2" name="EMR_ASESMEN_DOKTER_SN_FLACCB" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCB2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Tidak nyaman, gelisah, tegang, tonus meningkat, kaku/flexi/ekstensi anggota badan intermitten </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCB3" name="EMR_ASESMEN_DOKTER_SN_FLACCB" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCB3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Menendang atau kaki disusun, hipertonis fleksi/ekstensi anggota badan secara berlebihan </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN2_3">
                                            c. Activity (Aktivitas)
                                            <div class="row md-radio-inline">
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCC1" name="EMR_ASESMEN_DOKTER_SN_FLACCC" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCC1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Berbaring dengan tenang, posisi normal, bergerak dengan bebas dan mudah </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCC2" name="EMR_ASESMEN_DOKTER_SN_FLACCC" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCC2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>	Menggeliat, menggeser maju mundur, tegang, ragu-ragu untuk bergerak, menjaga tekanan pada bagian tubuh </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCC3" name="EMR_ASESMEN_DOKTER_SN_FLACCC" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCC3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>	Melengkung, kaku atau menyentak, posisi tetap, goyang gerakan kepala dari sisi ke sisi, menggosok bagian tubuh </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN2_4">
                                            d. Cry (Menangis)
                                            <div class="row md-radio-inline">
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCD1" name="EMR_ASESMEN_DOKTER_SN_FLACCD" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCD1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>	Tidak ada teriakan/erangan (terjaga/tertidur) </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCD2" name="EMR_ASESMEN_DOKTER_SN_FLACCD" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCD2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>	Erangan/rengekan, sesekali menangis, sesekali mengeluh </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCD3" name="EMR_ASESMEN_DOKTER_SN_FLACCD" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCD3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>	Terus menerus menangis, menjerit, isak tangis, mengeram-ngeram, sering mengeluh </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN2_5">
                                            e. Consolalability (respon terhadap himbauan)
                                            <div class="row md-radio-inline">
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCE1" name="EMR_ASESMEN_DOKTER_SN_FLACCE" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCE1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>	Tenang, santai, tidak perlu di hibur </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCE2" name="EMR_ASESMEN_DOKTER_SN_FLACCE" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCE2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>	Perlu keyakinan dengan sesekali menyentuh, sekali-kali memeluk atau berbicara. Perhatian mudah beralih </label>
                                              </div>
                                              <div class="col-md-12 md-radio">
                                                <input type="radio" id="EMR_ASESMEN_DOKTER_SN_FLACCE3" name="EMR_ASESMEN_DOKTER_SN_FLACCE" value="" class="md-check">
                                                <label for="EMR_ASESMEN_DOKTER_SN_FLACCE3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>	Sulit untuk di bujuk atau di buat nyaman </label>
                                              </div>
                                            </div>
                                          </div>
                                        <?php
                                        }
                                        else
                                        {?>
                                          <div class="col-md-12" id="EMR_ASESMEN_DOKTER_SN3_1">
                                            <span>Apa yang membuat nyeri berkurang?</span>
                                            <center>
                                            <div class="form-group">
                                              <div class="input-group">
                                                <div class="row md-checkbox-inline">
                                                  <div class="col-md-12 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnBerkurang1" name="" value="Nyeri berkurang dengan kompres dingin" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnBerkurang1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Kompres dingin </label>
                                                  </div>
                                                  <div class="col-md-12 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnBerkurang2" name="" value="Nyeri berkurang dengan komres hangat" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnBerkurang2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Kompres hangat </label>
                                                  </div>
                                                  <div class="col-md-12 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnBerkurang3" name="" value="Nyeri berkurang dengan istirahat" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnBerkurang3">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Istirahat </label>
                                                  </div>
                                                  <div class="col-md-12 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnBerkurang4" name="" value="Nyeri berkurang dengan minum obat" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnBerkurang4">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Minum Obat </label>
                                                  </div>
                                                  <div class="col-md-12 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnBerkurang5" name="" value="Nyeri berkurang dengan berubah posisi" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnBerkurang5">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Berubah posisi </label>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </center>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN3_2">
                                            <span>Gambaran rasa nyeri?</span>
                                            <center>
                                            <div class="form-group">
                                              <div class="input-group">
                                                <div class="row md-checkbox-inline">
                                                  <div class="col-md-5 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnGambaran1" name="" value="Seperti ditimpa benda berat" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnGambaran1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Seperti ditimpa benda berat </label>
                                                  </div>
                                                  <div class="col-md-5 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnGambaran2" name="" value="Seperti Ditarik" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnGambaran2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Seperti Ditarik </label>
                                                  </div>
                                                </div>
                                                <div class="row md-checkbox-inline">
                                                  <div class="col-md-5 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnGambaran3" name="" value="Seperti Ditusuk" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnGambaran3">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Seperti Ditusuk</label>
                                                  </div>
                                                  <div class="col-md-5 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnGambaran4" name="" value="Seperti Dipukul" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnGambaran4">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Seperti Dipukul </label>
                                                  </div>
                                                </div>
                                                <div class="row md-checkbox-inline">
                                                  <div class="col-md-5 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnGambaran5" name="" value="Seperti Dibakar" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnGambaran5">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Seperti Dibakar </label>
                                                  </div>
                                                  <div class="col-md-5 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnGambaran6" name="" value="Seperti Berdenyut" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnGambaran6">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Seperti Berdenyut </label>
                                                  </div>
                                                </div>
                                                <div class="row md-checkbox-inline">
                                                  <div class="col-md-5 md-checkbox">
                                                    <input type="checkbox" id="EMR_ASESMEN_DOKTER_CbtnGambaran7" name="" value="Seperti Kram" class="md-check">
                                                    <label for="EMR_ASESMEN_DOKTER_CbtnGambaran7">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Seperti Kram </label>
                                                  </div>
                                                  <div class="col-md-5">
                                                    <input type="text" id="" name="" value="" class="form-control collapse" maxlength="30" placeholder="Lain lain">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </center>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN3_3">
                                            <input type="text" id="" name="" value="" class="form-control" maxlength="30" placeholder="Lokasi nyeri">
                                            <div class="col-md-12 md-checkbox">
                                              <input type="checkbox" id="EMR_ASESMEN_DOKTER_SNMenjalar" name="EMR_ASESMEN_DOKTER_SNMenjalar" value="Jalan dengan menggunakan alat bantu" class="md-check">
                                              <label for="EMR_ASESMEN_DOKTER_SNMenjalar">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Menjalar? (Ya)</label>
                                            </div>
                                            <input type="text" id="EMR_ASESMEN_DOKTER_SNMenjalar2" name="" value="" class="form-control collapse" maxlength="30" placeholder="Lokasi jalar">
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN3_4">
                                            <div class="btn-group btn-group-solid" style="width:100%">
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3A_1" class="btn white col-md-2" style="height:80px;"><img src="<?php echo base_url().'assets/pages/img/icon/emot001.png'?>" style="height:50px"></button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3A_2" class="btn white col-md-2" style="height:80px;"><img src="<?php echo base_url().'assets/pages/img/icon/emot002.png'?>" style="height:50px"></button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3A_3" class="btn white col-md-2" style="height:80px;"><img src="<?php echo base_url().'assets/pages/img/icon/emot003.png'?>" style="height:50px"></button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3A_4" class="btn white col-md-2" style="height:80px;"><img src="<?php echo base_url().'assets/pages/img/icon/emot004.png'?>" style="height:50px"></button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3A_5" class="btn white col-md-2" style="height:80px;"><img src="<?php echo base_url().'assets/pages/img/icon/emot005.png'?>" style="height:50px"></button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3A_6" class="btn white col-md-2" style="height:80px;"><img src="<?php echo base_url().'assets/pages/img/icon/emot006.png'?>" style="height:50px"></button>
                                            </div>
                                            <br>
                                            </br>
                                            <div class="btn-group btn-group-solid" style="width:100%">
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3B_0" class="btn white col-md-1" style="height:40px;">0</button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3B_1" class="btn white col-md-1" style="height:40px;">1</button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3B_2" class="btn white col-md-1" style="height:40px;">2</button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3B_3" class="btn white col-md-1" style="height:40px;">3</button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3B_4" class="btn white col-md-1" style="height:40px;">4</button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3B_5" class="btn white col-md-1" style="height:40px;">5</button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3B_6" class="btn white col-md-1" style="height:40px;">6</button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3B_7" class="btn white col-md-1" style="height:40px;">7</button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3B_8" class="btn white col-md-1" style="height:40px;">8</button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3B_9" class="btn white col-md-1" style="height:40px;">9</button>
                                              <button type="button" id="EMR_ASESMEN_DOKTER_btnSN3B_10" class="btn white col-md-1" style="height:40px;">10</button>
                                            </div>
                                          </div>
                                          <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_SN3_5">
                                            <span>Setiap berapa waktu anda merasakan nyeri?</span>
                                            <center>
                                            <div class="form-group">
                                              <div class="input-group">
                                                <div class="md-radio-inline">
                                                  <div class="md-radio">
                                                    <input type="radio" id="EMR_ASESMEN_DOKTER_RbtnSNsetiap1" name="EMR_ASESMEN_DOKTER_RbtnSNsetiap" class="md-radiobtn">
                                                    <label for="EMR_ASESMEN_DOKTER_RbtnSNsetiap1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> 1-2 Jam</label>
                                                  </div>
                                                  <div class="md-radio">
                                                    <input type="radio" id="EMR_ASESMEN_DOKTER_RbtnSNsetiap2" name="EMR_ASESMEN_DOKTER_RbtnSNsetiap" class="md-radiobtn">
                                                    <label for="EMR_ASESMEN_DOKTER_RbtnSNsetiap2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> < 4 Jam</label>
                                                  </div>
                                                  <div class="md-radio">
                                                    <input type="radio" id="EMR_ASESMEN_DOKTER_RbtnSNsetiap3" name="EMR_ASESMEN_DOKTER_RbtnSNsetiap" class="md-radiobtn">
                                                    <label for="EMR_ASESMEN_DOKTER_RbtnSNsetiap3">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> > 4 Jam</label>
                                                  </div>
                                                  <input type="text" id="EMR_ASESMEN_DOKTER_SNlamawaktu" name="" value="" class="form-control" maxlength="30" placeholder="Lain lain">
                                                </div>
                                              </div>
                                            </div>
                                            </center>
                                          </div>
                                        <?php
                                        }
                                        ?>
                                        <center>
                                          <div class="btn-group btn-group-circle btn-group-sm btn-group-solid" style="width:50%">
                                            <button type="button" id="EMR_ASESMEN_DOKTER_SN1Back" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                                            <button type="button" id="EMR_ASESMEN_DOKTER_SN1Next" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                                          </div>
                                        </center>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Halaman4">
                                  <div class="col-md-6">
                                    <div class="portlet light portlet-fit bordered">
                                      <div class="portlet-title">
                                        <span><b>Alergi Obat</b></span>
                                      </div>
                                      <div class="portlet-body">
                                        <?php
                                        if($alergiobat != "")
                                        {
                                          echo "Pasien Mempunyai Alergi Obat : ".$alergiobat."";
                                        }
                                        else
                                        {
                                          echo "Pasien Masih Belum Mempunyai Catatan Alergi Obat";
                                        }
                                        ?>
                                        <div id="EMR_ASESMEN_DOKTER_InputAlergiObat" class="form-group collapse">
                                        </br>
                                          <label for="form_control_1">Masukkan Alergi</label>
                                          <input type="text" id="alergiobat" name="alergiobat" value="" class="form-control">
                                          <input type="hidden" id="alergiobatstatus" value="Tidak" class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <span>Apakah pasien memiliki alergi obat lain?</span>
                                      <center>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="md-radio-inline">
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_DOKTER_RbtnAlergiOYA" name="EMR_ASESMEN_DOKTER_RbtnAlergiO" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_DOKTER_RbtnAlergiOYA">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> YA </label>
                                            </div>
                                            <div class="md-radio">
                                              <input type="radio" id="EMR_ASESMEN_DOKTER_RbtnAlergiOTIDAK" name="EMR_ASESMEN_DOKTER_RbtnAlergiO" class="md-radiobtn">
                                              <label for="EMR_ASESMEN_DOKTER_RbtnAlergiOTIDAK">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> TIDAK </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </center>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="portlet light portlet-fit bordered">
                                      <div class="portlet-title">
                                        <span><b>Catatan Perawat</b></span>
                                      </div>
                                      <div class="portlet-body">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                          <textarea class="form-control" id="catatan" name="catatan" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                                          <label for="form_control_1">Textarea input</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 collapse" id="EMR_ASESMEN_DOKTER_Halaman5">
                                  <div class="col-md-6">
                                    <div class="portlet light bordered">

                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="portlet light bordered">

                                    </div>
                                  </div>
                                </div>

                                <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                                  <button type="button" id="EMR_ASESMEN_DOKTER_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                                  <button type="button" id="EMR_ASESMEN_DOKTER_HalamanNext" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
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
      <!--Sisi Kanan-->
      <div class="col-md-4">
        <!-- BEGIN TAB PORTLET-->
        <div id="EMR_ASESMEN_AWAL_FrmRPerawat">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <input type="hidden" id="EMR_ASESMEN_AWAL_statver" name="EMR_ASESMEN_AWAL_statver" value="Perawat">
            <div class="row portlet-body" id="EMR_ASESMEN_AWAL_verPerPerawat">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data berikut, masukkan password anda terlebih dahulu sebagai proses verifikasi penginput data, kelengkapan pengisian data akan mempengaruhi penilaian anda</p>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_ASESMEN_AWAL_userPerPerawat" name="EMR_ASESMEN_AWAL_userPerPerawat" class="form-control">
                    <label for="form_control_1">Masukkan Username Perawat</label>
                    <span class="help-block">Masukkan Username Perawat</span>
                  </div>
                </div>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="password" id="EMR_ASESMEN_AWAL_passPerPerawat" name="EMR_ASESMEN_AWAL_passPerPerawat" class="form-control">
                    <label for="form_control_1">Masukkan Password Perawat</label>
                    <span class="help-block">Masukkan Password Perawat</span>
                  </div>
                </div>
              </div>
              <div class="btn-group btn-group btn-group-justified">
                <a id="EMR_ASESMEN_AWAL_btnChangePerPerawat" class="btn red"> Klik disini apabila anda <?php echo $level; ?> <?php echo $username; ?></a>
              </div>
            </div>
            <div class="row portlet-body collapse" id="EMR_ASESMEN_AWAL_verDokPerawat">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Anda akan mengambil alih tanggung jawab proses pengisian data, kelengkapan data berikut akan mempengaruhi penilaian anda.</p>
                <span>Anda Login sebagai <?php echo $level; ?> : <b> <?php echo $username; ?> </b></span>
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="password" id="EMR_ASESMEN_AWAL_passDokPerawat" name="EMR_ASESMEN_AWAL_passDokPerawat" class="form-control">
                    <label for="form_control_1">Masukkan Password</label>
                    <span class="help-block">Masukkan Password</span>
                  </div>
                </div>
              </div>
              <div class="btn-group btn-group btn-group-justified">
                <a id="EMR_ASESMEN_AWAL_btnChangeDokPerawat" class="btn red"> Klik Disini Apabila Anda Perawat</a>
              </div>
            </div>
          </div>
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-body">
              <div class="row">
                <div id="alert-msg-EMR_ASESMEN_AWAL_Perawat"></div>
                <div class="btn-group btn-group btn-group-justified">
                    <!--<button type="button" class="btn btn-default" style="width:50%" data-toggle="modal" href="#EMRmodalObatRajal">Batal</button>-->
                    <button type="button" class="btn green" id="EMR_ASESMEN_AWAL_btnSelanjutnyaPerawat" name="EMR_ASESMEN_AWAL_btnSelanjutnyaPerawat" style="width:100%">Selanjutnya</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse" id="EMR_ASESMEN_AWAL_FrmRDokter">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <div class="row portlet-body">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data Rekam Medis berikut, isi password di bawah ini terlebih dahulu sebagai proses verifikasi pengisi data.</p>
                <span>Anda Login sebagai <?php echo $level; ?> : <b> <?php echo $username; ?> </b></span>
                <div class="form-group form-md-line-input has-success form-md-floating-label" id="EMR_ASESMEN_AWAL_passDokDokter2">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="password" id="EMR_ASESMEN_AWAL_passDokDokter" name="EMR_ASESMEN_AWAL_passDokDokter" class="form-control">
                    <label for="form_control_1">Masukkan Password</label>
                    <span class="help-block">Masukkan Password</span>
                  </div>
                </div>
              </div>
              <input type="hidden" id="EMR_ASESMEN_AWAL_PosisiHalaman" name="EMR_ASESMEN_AWAL_PosisiHalaman" value="Perawat">
            </div>
          </div>
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-body">
              <div class="row">
                <div id="alert-msg-DokterEMR_ASESMEN_AWAL"></div>
                <div class="btn-group btn-group-justified">
                    <button type="button" class="btn btn-default" id="EMR_ASESMEN_AWAL_btnSebelumnyaDokter" style="width:50%">Sebelumnya</button>
                    <button type="button" class="btn green" id="btnsimpanDokterEMR_ASESMEN_AWAL" name="btnsimpanDokterEMR_ASESMEN_AWAL" style="width:50%">Simpan</button>
                </div>
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
