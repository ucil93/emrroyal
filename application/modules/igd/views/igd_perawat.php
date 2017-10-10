
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <?php
  if($norm == 'UNKNOWN')
  {?>
    <input type="text" id="EMR_pr_IGD_IDPEMERIKSAAN" value="<?=$ID_PEMERIKSAAN;?>">
    <?php
    $Utahun = $this->db->query("select * from EMR_IGD_MRX where ID_PEMERIKSAAN = '$ID_PEMERIKSAAN'")->row()->TTL_ALIAS;
  }?>
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content" style="background-color:#BFBFBF;">
    <input type="hidden" id="EMR_pr_IGD_NamaDokter" name="EMR_pr_IGD_NamaDokter" value="<?=$namadokter; ?>" class="form-control">
    <input type="hidden" id="EMR_pr_IGD_KodeDokter" name="EMR_pr_IGD_KodeDokter" value="<?=$kodedokter; ?>" class="form-control">
    <div class="row">
      <div class="col-md-9">
        <div class="portlet light bordered">
          <div class="caption font-red-sunglo">
            <center><span id="EMR_pr_IGD_judulHalaman" class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">ASESMEN KEPERAWATAN PASIEN IGD</span></center>
          </div>
        </div>
        <?php
        if($noreg != 'UNKNOWN')
        {
          $that = 'GD-';
          $data = $this->db->query("select * from EMR_UTAMA_PERIKSA where ID_PEMERIKSAAN LIKE '%$that%' AND NOREG = '$noreg'")->num_rows();
        }
        else
        {
          $data = $this->db->query("select * from EMR_IGD_TRIASE where ID_PEMERIKSAAN = '$ID_PEMERIKSAAN'")->num_rows();
        }
        if($data > 0)
        {
          if($noreg != 'UNKNOWN')
          {
            $cekin = $this->db->query("select * from EMR_UTAMA_PERIKSA n, EMR_IGD_TRIASE m where m.ID_PEMERIKSAAN = n.ID_PEMERIKSAAN and n.NOREG = '$noreg'")->row();
            $cekinMenu = $this->db->query("select * from EMR_UTAMA_PERIKSA n, EMR_IGD_MENU m where m.ID_PEMERIKSAAN = n.ID_PEMERIKSAAN and n.NOREG = '$noreg'")->row();
          }
          else
          {
            $cekin = $this->db->query("select * from EMR_IGD_TRIASE where ID_PEMERIKSAAN = '$ID_PEMERIKSAAN'")->row();
            $cekinMenu = $this->db->query("select * from EMR_IGD_MENU where ID_PEMERIKSAAN = '$ID_PEMERIKSAAN'")->row();
          }
          ?>
          <input type="hidden" id="EMR_pr_IGD_ID2" value="<?=$cekin->Triase;?>">
          <input type="hidden" id="EMR_pr_IGD_MENUMU1" value="<?=$cekinMenu->Menu_1;?>">
          <input type="hidden" id="EMR_pr_IGD_MENUMU2" value="<?=$cekinMenu->Menu_2;?>">
          <input type="hidden" id="EMR_pr_IGD_MENUMU3" value="<?=$cekinMenu->Menu_3;?>">
          <input type="hidden" id="EMR_pr_IGD_MENUMU4" value="<?=$cekinMenu->Menu_4;?>">
          <input type="hidden" id="EMR_pr_IGD_MENUMU5" value="<?=$cekinMenu->Menu_5;?>">
          <input type="hidden" id="EMR_pr_IGD_MENUMU6" value="<?=$cekinMenu->Menu_6;?>">
          <input type="hidden" id="EMR_pr_IGD_ID" value="<?=$data;?>">
          <?php
        }
        else
        {?>
          <input type="hidden" id="EMR_pr_IGD_ID" value="<?=$data;?>">
        <?php
        }
        ?>
        <script type="text/javascript">
        $(document).ready(function(){

          if(document.getElementById('EMR_pr_IGD_MENUMU1').value == "DONE")
          {
            document.getElementById('EMR_pr_IGD_P1_Halaman').classList.add('collapse');
            document.getElementById('EMR_pr_IGD_P1_divBtnMenu').classList.add('collapse');
            document.getElementById('EMR_pr_IGD_P1_divBtnMenuX').classList.remove('collapse');
            if(document.getElementById('EMR_pr_IGD_MENUMU2').value == "DONE")
            {
              document.getElementById('EMR_pr_IGD_P2_Halaman').classList.add('collapse');
              document.getElementById('EMR_pr_IGD_P2_divBtnMenu').classList.add('collapse');
              document.getElementById('EMR_pr_IGD_P2_divBtnMenuX').classList.remove('collapse');
              if(document.getElementById('EMR_pr_IGD_MENUMU3').value == "DONE")
              {
                document.getElementById('EMR_pr_IGD_P3_Halaman').classList.add('collapse');
                document.getElementById('EMR_pr_IGD_P3_divBtnMenu').classList.add('collapse');
                document.getElementById('EMR_pr_IGD_P3_divBtnMenuX').classList.remove('collapse');
                if(document.getElementById('EMR_pr_IGD_MENUMU4').value == "DONE")
                {
                  document.getElementById('EMR_pr_IGD_P4_Halaman').classList.add('collapse');
                  document.getElementById('EMR_pr_IGD_P4_divBtnMenu').classList.add('collapse');
                  document.getElementById('EMR_pr_IGD_P4_divBtnMenuX').classList.remove('collapse');
                  if(document.getElementById('EMR_pr_IGD_MENUMU5').value == "DONE")
                  {
                    document.getElementById('EMR_pr_IGD_P5_Halaman').classList.add('collapse');
                    document.getElementById('EMR_pr_IGD_P5_divBtnMenu').classList.add('collapse');
                    document.getElementById('EMR_pr_IGD_P5_divBtnMenuX').classList.remove('collapse');
                    if(document.getElementById('EMR_pr_IGD_MENUMU6').value == "DONE")
                    {
                      document.getElementById('EMR_pr_IGD_P6_Halaman').classList.add('collapse');
                      document.getElementById('EMR_pr_IGD_P6_divBtnMenu').classList.add('collapse');
                      document.getElementById('EMR_pr_IGD_P6_divBtnMenuX').classList.remove('collapse');
                    }
                    else
                    {
                      document.getElementById('EMR_pr_IGD_P6_Halaman').classList.remove('collapse');
                      document.getElementById('EMR_pr_IGD_P6_divBtnMenuX').classList.add('collapse');
                      document.getElementById('EMR_pr_IGD_P6_divBtnMenu').classList.remove('collapse');
                      document.getElementById('EMR_pr_IGD_statverHal').value = 'P6';
                      document.getElementById('EMR_pr_IGD_P6_btnmenu').classList.remove('green');
                      document.getElementById('EMR_pr_IGD_P6_btnmenu').classList.add('white');
                    }
                  }
                  else
                  {
                    document.getElementById('EMR_pr_IGD_P5_Halaman').classList.remove('collapse');
                    document.getElementById('EMR_pr_IGD_P5_divBtnMenuX').classList.add('collapse');
                    document.getElementById('EMR_pr_IGD_P5_divBtnMenu').classList.remove('collapse');
                    document.getElementById('EMR_pr_IGD_statverHal').value = 'P5';
                    document.getElementById('EMR_pr_IGD_P5_btnmenu').classList.remove('green');
                    document.getElementById('EMR_pr_IGD_P5_btnmenu').classList.add('white');
                  }
                }
                else
                {
                  document.getElementById('EMR_pr_IGD_P4_Halaman').classList.remove('collapse');
                  document.getElementById('EMR_pr_IGD_P4_divBtnMenuX').classList.add('collapse');
                  document.getElementById('EMR_pr_IGD_P4_divBtnMenu').classList.remove('collapse');
                  document.getElementById('EMR_pr_IGD_statverHal').value = 'P4';
                  document.getElementById('EMR_pr_IGD_P4_btnmenu').classList.remove('green');
                  document.getElementById('EMR_pr_IGD_P4_btnmenu').classList.add('white');
                }
              }
              else
              {
                document.getElementById('EMR_pr_IGD_P3_Halaman').classList.remove('collapse');
                document.getElementById('EMR_pr_IGD_P3_divBtnMenuX').classList.add('collapse');
                document.getElementById('EMR_pr_IGD_P3_divBtnMenu').classList.remove('collapse');
                document.getElementById('EMR_pr_IGD_statverHal').value = 'P3';
                document.getElementById('EMR_pr_IGD_P3_btnmenu').classList.remove('green');
                document.getElementById('EMR_pr_IGD_P3_btnmenu').classList.add('white');
              }
            }
            else
            {
              document.getElementById('EMR_pr_IGD_P2_Halaman').classList.remove('collapse');
              document.getElementById('EMR_pr_IGD_P2_divBtnMenuX').classList.add('collapse');
              document.getElementById('EMR_pr_IGD_P2_divBtnMenu').classList.remove('collapse');
              document.getElementById('EMR_pr_IGD_statverHal').value = 'P2';
              document.getElementById('EMR_pr_IGD_P2_btnmenu').classList.remove('green');
              document.getElementById('EMR_pr_IGD_P2_btnmenu').classList.add('white');
            }
          }
          else
          {
            document.getElementById('EMR_pr_IGD_P1_Halaman').classList.remove('collapse');
            document.getElementById('EMR_pr_IGD_P1_divBtnMenuX').classList.add('collapse');
            document.getElementById('EMR_pr_IGD_P1_divBtnMenu').classList.remove('collapse');
            document.getElementById('EMR_pr_IGD_statverHal').value = 'P1';
            document.getElementById('EMR_pr_IGD_P1_btnmenu').classList.remove('green');
            document.getElementById('EMR_pr_IGD_P1_btnmenu').classList.add('white');
          }

          if(document.getElementById('EMR_pr_IGD_ID2').value == "Hijau")
          {
            $('#EMR_pr_IGD_P0_btntriase').html('Triase Hijau');
            $('#EMR_pr_IGD_P0_btntriase').toggleClass('white');
            $('#EMR_pr_IGD_P0_btntriase').toggleClass('bg-green-jungle bg-font-green-jungle');
          }
          if(document.getElementById('EMR_pr_IGD_ID2').value == "Kuning")
          {
            $('#EMR_pr_IGD_P0_btntriase').html('Triase Kuning');
            $('#EMR_pr_IGD_P0_btntriase').toggleClass('white');
            $('#EMR_pr_IGD_P0_btntriase').toggleClass('bg-yellow-crusta bg-font-yellow-crusta');
          }
          if(document.getElementById('EMR_pr_IGD_ID2').value == "Merah")
          {
            $('#EMR_pr_IGD_P0_btntriase').html('Triase Merah');
            $('#EMR_pr_IGD_P0_btntriase').toggleClass('white');
            $('#EMR_pr_IGD_P0_btntriase').toggleClass('bg-red bg-font-red');
          }
          if(document.getElementById('EMR_pr_IGD_ID2').value == "Hitam")
          {
            $('#EMR_pr_IGD_P0_btntriase').html('Triase Hitam');
            $('#EMR_pr_IGD_P0_btntriase').toggleClass('white');
            $('#EMR_pr_IGD_P0_btntriase').toggleClass('bg-grey-gallery bg-font-yellow-casablanca');
          }
        })
        </script>
        <input type="hidden" id="EMR_pr_IGD_NORM" value="<?=$norm;?>">
        <input type="hidden" id="EMR_pr_IGD_NOREG" value="<?=$noreg;?>">

        <div class="collapse" id="EMR_pr_IGD_P1_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_pr_IGD_P1_btnHalaman1" class="btn white col-md-12">TTV</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-body row">
                          <div class="col-md-12">
                            <span class="control-label">Kualitas : </span>
                            <div class="portlet-body">
                              <div class="tab-content">
                                <div class="col-md-6 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_Kualit1" name="EMR_ASESMEN_PERAWAT_Kualit" class="md-radiobtn" value="Tidak Seimbang/Sempoyongan">
                                    <label for="EMR_ASESMEN_PERAWAT_Kualit1">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Compos mentis </label>
                                </div>
                                <div class="col-md-6 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_Kualit2" name="EMR_ASESMEN_PERAWAT_Kualit" class="md-radiobtn" value="Somnolen">
                                    <label for="EMR_ASESMEN_PERAWAT_Kualit2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Somnolen </label>
                                </div>
                                <div class="col-md-6 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_Kualit3" name="EMR_ASESMEN_PERAWAT_Kualit" class="md-radiobtn" value="Stupor">
                                    <label for="EMR_ASESMEN_PERAWAT_Kualit3">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Stupor </label>
                                </div>
                                <div class="col-md-6 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_Kualit4" name="EMR_ASESMEN_PERAWAT_Kualit" class="md-radiobtn" value="Koma">
                                    <label for="EMR_ASESMEN_PERAWAT_Kualit4">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Koma </label>
                                </div>
                                <div class="col-md-6 md-radio">
                                    <input type="radio" id="EMR_ASESMEN_PERAWAT_Kualit5" name="EMR_ASESMEN_PERAWAT_Kualit" class="md-radiobtn" value="Tidak dapat dievaluasi">
                                    <label for="EMR_ASESMEN_PERAWAT_Kualit4">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak dapat dievaluasi </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="col-md-12">
                            <span class="control-label">Kuantitas : </span>
                          </div>
                          <div class="col-md-4">
                            <span class="control-label">E : </span>
                            <input type="text" id="EMR_pr_IGD_GCSe" name="EMR_pr_IGD_GCSe" value="4" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <span class="control-label">V : </span>
                            <input type="text" id="EMR_pr_IGD_GCSv" name="EMR_pr_IGD_GCSv" value="5" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <span class="control-label">M : </span>
                            <input type="text" id="EMR_pr_IGD_GCSm" name="EMR_pr_IGD_GCSm" value="6" class="form-control">
                          </div>
                          <br>
                          <div class="col-md-12">
                            <select class="bs-select form-control" name="EMR_pr_IGD_Kesadaran" id="EMR_pr_IGD_Kesadaran" data-live-search="true" data-size="8">
                              <option value='' disabled selected></option>
                              <option value='Comma'>Comma</option>
                              <option value='Soporo comma'>Soporo comma</option>
                              <option value='Delirium'>Delirium</option>
                              <option value='Somnolen'>Somnolen</option>
                              <option value='Apatis'>Apatis</option>
                              <option value='Compos Mentis'>Compos Mentis</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="tab-content">
                                <div class="col-md-4">
                                  <label for="form_control_1">Sistolik&nbsp;</label>
                                  <i style="font-size:12px"><b>mmHg</b></i>
                                  <input type="text" id="EMR_pr_IGD_TDSistolik" name="EMR_pr_IGD_TDSistolik" value="" class="form-control">
                                </div>
                                <div class="col-md-4">
                                  <label for="form_control_1">Diastolik</label>
                                  <i style="font-size:12px"><b>mmHg</b></i>
                                  <input type="text" id="EMR_pr_IGD_TDDiastolik" name="EMR_pr_IGD_TDDiastolik" value="" class="form-control">
                                </div>
                                <div class="col-md-4">
                                  <label for="form_control_1">Suhu tubuh</label>
                                  <i style="font-size:12px"><b>&deg;C</b></i>
                                  <input type="text" id="EMR_pr_IGD_suhutubuh" name="EMR_pr_IGD_suhutubuh" value="" class="form-control">
                                </div>
                              </div>
                              <hr>
                              <div class="tab-content">
                                <div class="col-md-6">
                                  <label for="form_control_1">N</label>
                                  <i style="font-size:12px"><b>x/mnt</b></i>
                                  <input type="text" id="EMR_pr_IGD_nadi" name="EMR_pr_IGD_nadi" value="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_NadiCH_reguler" name="EMR_pr_IGD_NadiCH" class="md-radiobtn" value="Reguler">
                                      <label for="EMR_pr_IGD_NadiCH_reguler">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Reguler </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_NadiCH_irreguler" name="EMR_pr_IGD_NadiCH" class="md-radiobtn" value="Irreguler">
                                      <label for="EMR_pr_IGD_NadiCH_irreguler">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Irreguler </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-content">
                                <div class="col-md-6">
                                  <label for="form_control_1">Rr</label>
                                  <i style="font-size:12px"><b>x/mnt</b></i>
                                  <input type="text" id="EMR_pr_IGD_respiratory" name="EMR_pr_IGD_respiratory" value="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_RespiratoryCH_teratur" name="EMR_pr_IGD_RespiratoryCH" class="md-radiobtn" value="Teratur">
                                      <label for="EMR_pr_IGD_RespiratoryCH_teratur">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Teratur </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_RespiratoryCH_titeratur" name="EMR_pr_IGD_RespiratoryCH" class="md-radiobtn" value="Tidak Teratur">
                                      <label for="EMR_pr_IGD_RespiratoryCH_titeratur">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tidak Teratur </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-content">
                                <?php
                                if($Utahun < 1)
                                {
                                  ?>
                                  <div class="col-md-6">
                                    <label for="form_control_1">Lingkar Kepala (Khusus Bayi)</label>
                                    <i style="font-size:12px"><b>Cm</b></i>
                                    <input type="text" id="EMR_pr_IGD_lingkarkepala" name="EMR_pr_IGD_lingkarkepala" value="" class="form-control">
                                  </div>
                                  <?php
                                }
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <table class="col-md-6">
                          <tr>
                            <td class="col-md-3"><span>Pupil </span><span id="EMR_ASESMEN_DOKTER_pupilstat">Isokor</span></td>
                            <td class="col-md-3">
                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                  <input type="text" id="EMR_ASESMEN_DOKTER_pupilKanan" name="EMR_ASESMEN_DOKTER_pupilKanan" value="3" class="form-control" onkeypress="return hanyaAngka(event)">
                                  <label for="form_control_1"></label>
                                  <span class="help-block">Masukkan nilai</span>
                                  <i style="font-size:12px"><b>mm</b></i>
                                </div>
                              </div>
                            </td>
                            <td class="col-md-3">
                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                  <input type="text" id="EMR_ASESMEN_DOKTER_pupilKiri" name="EMR_ASESMEN_DOKTER_pupilKiri" value="3" class="form-control" onkeypress="return hanyaAngka(event)">
                                  <label for="form_control_1"></label>
                                  <span class="help-block">Masukkan nilai</span>
                                  <i style="font-size:12px"><b>mm</b></i>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="col-md-3"><span>Cahaya</span></td>
                            <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnCahayaKanan" name="EMR_ASESMEN_DOKTER_btnCahayaKanan" class="btn green col-md-12" value="+"><b> + </b></button></td>
                            <td class="col-md-3"><button type="button" id="EMR_ASESMEN_DOKTER_btnCahayaKiri" name="EMR_ASESMEN_DOKTER_btnCahayaKiri" class="btn green col-md-12" value="+"><b> + </b></button></td>
                          </tr>
                        </table>
                        <table class="col-md-6">
                          <tr>
                            <td colspan="2" class="col-md-12"><span><center>Akral Hangat</center></span></td>
                          </tr>
                          <tr>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas1" name="EMR_ASESMEN_DOKTER_btnEkstremitas1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas2" name="EMR_ASESMEN_DOKTER_btnEkstremitas2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                          </tr>
                          <tr>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas3" name="EMR_ASESMEN_DOKTER_btnEkstremitas3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas4" name="EMR_ASESMEN_DOKTER_btnEkstremitas4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                          </tr>
                        </table>
                      </div>
                      <div class="col-md-12">
                        <div class="col-md-12 portlet light bordered">
                          <table class="col-md-6">
                          <tr>
                            <td colspan="2" class="col-md-12"><span><center>Akral Merah</center></span></td>
                          </tr>
                          <tr>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas1" name="EMR_ASESMEN_DOKTER_btnEkstremitas1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas2" name="EMR_ASESMEN_DOKTER_btnEkstremitas2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                          </tr>
                          <tr>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas3" name="EMR_ASESMEN_DOKTER_btnEkstremitas3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas4" name="EMR_ASESMEN_DOKTER_btnEkstremitas4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                          </tr>
                        </table>
                          <table class="col-md-6">
                          <tr>
                            <td colspan="2" class="col-md-12"><span><center>Akral Kering</center></span></td>
                          </tr>
                          <tr>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas1" name="EMR_ASESMEN_DOKTER_btnEkstremitas1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas2" name="EMR_ASESMEN_DOKTER_btnEkstremitas2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                          </tr>
                          <tr>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas3" name="EMR_ASESMEN_DOKTER_btnEkstremitas3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                            <td class="col-md-6"><button type="button" id="EMR_ASESMEN_DOKTER_btnEkstremitas4" name="EMR_ASESMEN_DOKTER_btnEkstremitas4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                          </tr>
                        </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a type="button" class="btn green col-md-12" id="EMR_pr_IGD_P1_btnsimpan" style="width:100%">SIMPAN</a><br/><br/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_pr_IGD_P2_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_pr_IGD_btnHalaman1" class="btn white col-md-7">1. Informasi</button>
              <button type="button" id="EMR_pr_IGD_btnHalaman2" class="btn green col-md-1">2</button>
              <button type="button" id="EMR_pr_IGD_btnHalaman3" class="btn green col-md-1">3</button>
              <button type="button" id="EMR_pr_IGD_btnHalaman4" class="btn green col-md-1">4</button>
              <button type="button" id="EMR_pr_IGD_btnHalaman5" class="btn green col-md-1">5</button>
              <button type="button" id="EMR_pr_IGD_btnHalaman6" class="btn green col-md-1">6</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_pr_IGD_Halaman1">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-body">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="md-radio-inline">
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_AnameseAuto" name="EMR_pr_IGD_Anamese" class="md-radiobtn" value="Auto Anamese">
                                      <label for="EMR_pr_IGD_AnameseAuto">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Auto Anamese </label>
                                  </div>
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_AnameseHetero" name="EMR_pr_IGD_Anamese" class="md-radiobtn" value="Hetero Anemese">
                                      <label for="EMR_pr_IGD_AnameseHetero">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Hetero Anamese </label>
                                  </div>
                              </div>
                              <div class="collapse" id="EMR_pr_IGD_isianHetero">
                                <div class="col-md-4">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="EMR_pr_IGD_AnameseNamaHetero" name="EMR_pr_IGD_AnameseNamaHetero" value="" class="form-control">
                                      <label for="form_control_1">Nama</label>
                                      <span class="help-block">Masukkan Nama</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="EMR_pr_IGD_AnameseHubungan" name="EMR_pr_IGD_AnameseHubungan" value="" class="form-control">
                                      <label for="form_control_1">Hubungan</label>
                                      <span class="help-block">Masukkan Hubungan</span>
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
                  <div class="col-md-12 collapse" id="EMR_pr_IGD_Halaman2">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-body">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="col-md-4">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASESMEN_PERAWAT_TDSistolik" name="EMR_ASESMEN_PERAWAT_TDSistolik" value="" class="form-control">
                                    <label for="form_control_1">Pasien Datang</label>
                                    <span class="help-block">Masukkan Waktu Datang</span>
                                    <i style="font-size:12px"><b>WIB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASESMEN_PERAWAT_TDDiastolik" name="EMR_ASESMEN_PERAWAT_TDDiastolik" value="" class="form-control">
                                    <label for="form_control_1">Mulai Tindakan</label>
                                    <span class="help-block">Masukkan Waktu Mulai Tindakan</span>
                                    <i style="font-size:12px"><b>WIB</b></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_ASESMEN_PERAWAT_TDDiastolik" name="EMR_ASESMEN_PERAWAT_TDDiastolik" value="" class="form-control">
                                    <label for="form_control_1">Selesai Tindakan</label>
                                    <span class="help-block">Masukkan Waktu Selesai Tindakan</span>
                                    <i style="font-size:12px"><b>WIB</b></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="portlet light bordered">
                        <div class="md-radio-inline">
                            <div class="md-radio">
                                <input type="radio" id="EMR_pr_IGD_CaraMasukJalanTanpaBantuan" name="EMR_pr_IGD_CaraMasuk" class="md-radiobtn" value="Jalan Tanpa Bantuan">
                                <label for="EMR_pr_IGD_CaraMasukJalanTanpaBantuan">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Jalan Tanpa Bantuan </label>
                            </div>
                            <div class="md-radio">
                                <input type="radio" id="EMR_pr_IGD_CaraMasukKursiRoda" name="EMR_pr_IGD_CaraMasuk" class="md-radiobtn" value="Kursi Roda">
                                <label for="EMR_pr_IGD_CaraMasukKursiRoda">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Kursi Roda </label>
                            </div>
                            <div class="md-radio">
                                <input type="radio" id="EMR_pr_IGD_CaraMasukTempatTidurDorong" name="EMR_pr_IGD_CaraMasuk" class="md-radiobtn" value="Tempat Tidur Dorong">
                                <label for="EMR_pr_IGD_CaraMasukTempatTidurDorong">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tempat Tidur Dorong </label>
                            </div>
                            <div class="md-radio">
                                <input type="radio" id="EMR_pr_IGD_CaraMasukDenganBantuan" name="EMR_pr_IGD_CaraMasuk" class="md-radiobtn" value="">
                                <label for="EMR_pr_IGD_CaraMasukDenganBantuan">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Jalan Dengan Bantuan </label>
                            </div>
                            <div class="collapse" id="EMR_pr_IGD_isianCaraMasuk">
                              <div class="col-md-4">
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                    <input type="text" id="EMR_pr_IGD_caraMasukbantuan" name="EMR_pr_IGD_caraMasukbantuan" value="" class="form-control">
                                    <label for="form_control_1">Cara Masuk</label>
                                    <span class="help-block">Masukkan data</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_pr_IGD_Halaman3">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-body">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="md-radio-inline">
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_RujukanNon" name="EMR_pr_IGD_Rujukan" class="md-radiobtn" value="Non Rujukan">
                                      <label for="EMR_pr_IGD_RujukanNon">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Non Rujukan </label>
                                  </div>
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_RujukanY" name="EMR_pr_IGD_Rujukan" class="md-radiobtn" value="Rujukan">
                                      <label for="EMR_pr_IGD_RujukanY">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Rujukan </label>
                                  </div>
                              </div>
                              <div class="collapse" id="EMR_pr_IGD_isianRujukan">
                                <div class="col-md-4">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="EMR_pr_IGD_RujukanIsi" name="EMR_pr_IGD_RujukanIsi" value="" class="form-control">
                                      <label for="form_control_1">Rujukan dari</label>
                                      <span class="help-block">Masukkan Data</span>
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
                  <div class="col-md-12 collapse" id="EMR_pr_IGD_Halaman4">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-6">
                              <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                  <span><b>Keluhan Utama</b></span>
                                </div>
                                <div class="portlet-body">
                                  <center>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="row md-checkbox-inline">
                                        <div class="col-md-5 md-checkbox">
                                          <input type="checkbox" id="EMR_pr_IGD_Keluhanutama1" name="EMR_pr_IGD_Keluhanutama1" value="Nyeri" class="md-check">
                                          <label for="EMR_pr_IGD_Keluhanutama1">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Nyeri </label>
                                        </div>
                                        <div class="col-md-5 md-checkbox">
                                          <input type="checkbox" id="EMR_pr_IGD_Keluhanutama2" name="EMR_pr_IGD_Keluhanutama2" value="Mual" class="md-check">
                                          <label for="EMR_pr_IGD_Keluhanutama2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Mual </label>
                                        </div>
                                        <div class="col-md-5 md-checkbox">
                                          <input type="checkbox" id="EMR_pr_IGD_Keluhanutama3" name="EMR_pr_IGD_Keluhanutama3" value="Muntah" class="md-check">
                                          <label for="EMR_pr_IGD_Keluhanutama3">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Muntah</label>
                                        </div>
                                        <div class="col-md-5 md-checkbox">
                                          <input type="checkbox" id="EMR_pr_IGD_Keluhanutama4" name="EMR_pr_IGD_Keluhanutama4" value="Sesak nafas" class="md-check">
                                          <label for="EMR_pr_IGD_Keluhanutama4">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Sesak nafas </label>
                                        </div>
                                        <div class="col-md-5 md-checkbox">
                                          <input type="checkbox" id="EMR_pr_IGD_Keluhanutama5" name="EMR_pr_IGD_Keluhanutama5" value="Diare" class="md-check">
                                          <label for="EMR_pr_IGD_Keluhanutama5">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Diare </label>
                                        </div>
                                        <div class="col-md-5 md-checkbox">
                                          <input type="checkbox" id="EMR_pr_IGD_Keluhanutama6" name="EMR_pr_IGD_Keluhanutama6" value="Pingsan" class="md-check">
                                          <label for="EMR_pr_IGD_Keluhanutama6">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Pingsan </label>
                                        </div>
                                        <div class="col-md-5 md-checkbox">
                                          <input type="checkbox" id="EMR_pr_IGD_Keluhanutama9" name="EMR_pr_IGD_Keluhanutama9" value="Luka " class="md-check">
                                          <label for="EMR_pr_IGD_Keluhanutama9">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Luka </label>
                                        </div>
                                        <div class="col-md-5 md-checkbox">
                                          <input type="checkbox" id="EMR_pr_IGD_Keluhanutama7" name="EMR_pr_IGD_Keluhanutama7" value="Pusing " class="md-check">
                                          <label for="EMR_pr_IGD_Keluhanutama7">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Pusing </label>
                                        </div>
                                        <div class="col-md-12">
                                          <span class="control-label">Lain lain : </span>
                                          <input type="text" class="form-control" id="EMR_pr_IGD_Keluhanutama8" name="EMR_pr_IGD_Keluhanutama8" value="" placeholder="Lain lain">
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
                                  <span><b>Riwayat Penyakit Sekarang</b></span>
                                </div>
                                <div class="portlet-body">
                                  <div class="form-group form-md-line-input form-md-floating-label">
                                    <textarea class="form-control" id="EMR_pr_IGD_RiwayatPenyakitSekarang" name="EMR_pr_IGD_RiwayatPenyakitSekarang" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                                    <label for="form_control_1">Riwayat penyakit pasien</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_pr_IGD_Halaman5">
                    <div class="col-md-12">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                          <span><b>Riwayat Pengobatan Sebelumnya</b></span>
                        </div>
                        <div class="portlet-body">
                          <div class="md-radio-inline">
                              <div class="md-radio">
                                  <input type="radio" id="EMR_pr_IGD_PengobatansebelumnyaA" name="EMR_pr_IGD_Pengobatansebelumnya" class="md-radiobtn" value="Auto Anamese">
                                  <label for="EMR_pr_IGD_PengobatansebelumnyaA">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Ada </label>
                              </div>
                              <div class="md-radio">
                                  <input type="radio" id="EMR_pr_IGD_PengobatansebelumnyaT" name="EMR_pr_IGD_Pengobatansebelumnya" class="md-radiobtn" value="Hetero Anemese">
                                  <label for="EMR_pr_IGD_PengobatansebelumnyaT">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tidak </label>
                              </div>
                          </div>
                          <div id="EMR_pr_IGD_RiwayatSebelumnya" class="form-group form-md-line-input form-md-floating-label collapse">
                            <textarea class="form-control" id="EMR_pr_IGD_PengobatanSebelumnya" name="EMR_pr_IGD_PengobatanSebelumnya" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                            <label for="form_control_1">Riwayat Pengobatan Sebelumnya</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_pr_IGD_Halaman6">

                  </div>
                  <div class="col-md-12">
                    <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                      <button type="button" id="EMR_pr_IGD_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                      <button type="button" id="EMR_pr_IGD_HalamanNext" class="btn green" style="width:50%">Lanjutkan >></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_pr_IGD_P3_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_pr_IGD_P3_btnHalaman1" class="btn white col-md-8">1. Pengkajian Nyeri</button>
              <button type="button" id="EMR_pr_IGD_P3_btnHalaman2" class="btn green col-md-1">2</button>
              <button type="button" id="EMR_pr_IGD_P3_btnHalaman3" class="btn green col-md-1">3</button>
              <button type="button" id="EMR_pr_IGD_P3_btnHalaman4" class="btn green col-md-1">4</button>
              <button type="button" id="EMR_pr_IGD_P3_btnHalaman5" class="btn green col-md-1">5</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_pr_IGD_P3_Halaman1">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <span>Apakah Pasien Memiliki Keluhan Nyeri?</span>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="md-radio-inline">
                              <div class="md-radio">
                                <input type="radio" id="EMR_pr_IGD_SN1Ada" name="EMR_pr_IGD_adaNyeri" class="md-radiobtn" value="Ya">
                                <label for="EMR_pr_IGD_SN1Ada">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Ya </label>
                              </div>
                              <div class="md-radio">
                                <input type="radio" id="EMR_pr_IGD_SN1Takda" name="EMR_pr_IGD_adaNyeri" class="md-radiobtn" value="Tidak">
                                <label for="EMR_pr_IGD_SN1Takda">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Tidak </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" id="EMR_pr_IGD_SN_statadaNyeri" name="EMR_pr_IGD_SN_statadaNyeri" value="Tidak">
                      <div class="col-md-12 portlet light bordered collapse" id="EMR_pr_IGD_SN1Takda2">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <input type="hidden" id="EMR_pr_IGD_nyeri_ada_focus" name="EMR_pr_IGD_nyeri_ada_focus" value="">
                            <input type="hidden" id="EMR_pr_IGD_umur_skala" name="EMR_pr_IGD_umur_skala" value="<?php echo $Utahun ?>">
                            <?php
                            if($Utahun < 1)
                            {?>
                              <div class="col-md-12" id="EMR_pr_IGD_SN1_1">
                                a. Facial Expression (ekspresi wajah)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSA1" name="EMR_pr_IGD_SN_NIPSA" value="Relaxed (Wajah Tenang, Ekspresi Netral)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (wajah tenang, ekspresi netral) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSA2" name="EMR_pr_IGD_SN_NIPSA" value="Grimace (Otot Wajah Tegang, Alis Berkerut, Dagu Dan Rahang Tegang)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Grimace (otot wajah tegang, alis berkerut, dagu dan rahang tegang) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN1_2">
                                b. Cry (menangis)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSB1" name="EMR_pr_IGD_SN_NIPSB" value="No Cry (Tenang, Tidak Menangis)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> No cry (tenang, tidak menangis) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSB2" name="EMR_pr_IGD_SN_NIPSB" value="Whimper (Merengek Ringan, Kadang-Kadang)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Whimper (merengek ringan, kadang-kadang) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSB3" name="EMR_pr_IGD_SN_NIPSB" value="Vigorour Crying (Berteriak Kencang, Menarik, Melengking Terus-Terusan)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSB3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>Vigorour crying (berteriak kencang, menarik, melengking terus-terusan)</label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN1_3">
                                c. Breathing Patterns (pola pernafasan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSC1" name="EMR_pr_IGD_SN_NIPSC" value="Relaxed (Pola Pernafasan Bayi Normal)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSC1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (Pola pernafasan bayi normal) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSC2" name="EMR_pr_IGD_SN_NIPSC" value="Change In Breathing (Tidak Teratur, Lebih Cepat Dari Biasanya, Tersedak, Nafas Tertahan)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSC2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Change in breathing (tidak teratur, lebih cepat dari biasanya, tersedak, nafas tertahan) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN1_4">
                                d. Arms(lengan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSD1" name="EMR_pr_IGD_SN_NIPSD" value="Restrained (Tidak Ada Kekakuan Otot)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSD1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSD2" name="EMR_pr_IGD_SN_NIPSD" value="Relaxed (Gerakan Tangan Acak Sesekali)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSD2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (gerakan tangan acak sesekali) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSD3" name="EMR_pr_IGD_SN_NIPSD" value="Flexed (Tegang, Lengan Lurus, Kaku Dan Atau Fleksi)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSD3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Flexed (Tegang, lengan lurus, kaku dan atau fleksi) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSD4" name="EMR_pr_IGD_SN_NIPSD" value="Extended (Tegang, Lengan Lurus, Kaku Dan Atau Ekstensi)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSD4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Extended (Tegang, lengan lurus, kaku dan atau ekstensi) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN1_5">
                                e. Legs(kaki)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSE1" name="EMR_pr_IGD_SN_NIPSE" value="Restrained (Tidak Ada Kekakuan Otot)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSE1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Restrained (tidak ada kekakuan otot) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSE2" name="EMR_pr_IGD_SN_NIPSE" value="Relaxed (Gerakan Tangan Acak Sesekali)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSE2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Relaxed (gerakan kaki acak sesekali) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSE3" name="EMR_pr_IGD_SN_NIPSE" value="Flexed (Tegang, Lengan Lurus, Kaku Dan Atau Fleksi)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSE3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Flexed (Tegang, kaki lurus, kaku dan atau fleksi) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSE4" name="EMR_pr_IGD_SN_NIPSE" value="Extended (Tegang, Lengan Lurus, Kaku Dan Atau Ekstensi)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSE4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Extended (Tegang, kaki lurus, kaku dan atau ekstensi) </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN1_6">
                                f. State of Arousal (kesadaran)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSF1" name="EMR_pr_IGD_SN_NIPSF" value="Sleeping (Tenang, Tidur Damai)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSF1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sleeping (tenang, tidur damai) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSF2" name="EMR_pr_IGD_SN_NIPSF" value="Awake (Tenang, Tidak Tidur/Bangun, Gerakan Kaki Acak Yang Terjaga)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSF2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Awake (Tenang, tidak tidur/Bangun, gerakan kaki acak yang terjaga) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_NIPSF3" name="EMR_pr_IGD_SN_NIPSF" value="Fussy (Rewel, Gelisah Dan Meronta-Ronta)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_NIPSF3">
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
                              <div class="col-md-12" id="EMR_pr_IGD_SN2_1">
                                a. Face Expression (ekspresi wajah)?
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCA1" name="EMR_pr_IGD_SN_FLACCA" value="Tidak Ada Ekspresi Tertentu Atau Senyum, Kontak Mata" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCA1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak ada ekspresi tertentu atau senyum, kontak mata </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCA2" name="EMR_pr_IGD_SN_FLACCA" value="Kadang Meringis Atau Mengerutkan Kening, Menarik Diri, Tidak Tertarik, Wajah Terlihat Cemas, Alis Diturunkan, Maka Sebagian Tertutup, Pipi Terangkat, Mulut Mengerut" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCA2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Kadang meringis atau mengerutkan kening, menarik diri, tidak tertarik, wajah terlihat cemas, alis diturunkan, maka sebagian tertutup, pipi terangkat, mulut mengerut </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCA3" name="EMR_pr_IGD_SN_FLACCA" value="Sering Cemberut, Konstan, Rahangter Katup. Dagu Bergetar, Kerutan Yang Dalam Di Dahi, Mata Tertutup, Mulut Terbuka, Garis Yang Dalam Di Sekitar Hidung/Bibir" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCA3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Sering cemberut, konstan, rahangter katup. Dagu bergetar, kerutan yang dalam di dahi, mata tertutup, mulut terbuka, garis yang dalam di sekitar hidung/bibir </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN2_2">
                                b. Leg (Kaki)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCB1" name="EMR_pr_IGD_SN_FLACCB" value="Posisi Normal Atau Santai" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCB1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Posisi normal atau santai </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCB2" name="EMR_pr_IGD_SN_FLACCB" value="Tidak Nyaman, Gelisah, Tegang, Tonus Meningkat, Kaku/Flexi/Ekstensi Anggota Badan Intermitten" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCB2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak nyaman, gelisah, tegang, tonus meningkat, kaku/flexi/ekstensi anggota badan intermitten </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCB3" name="EMR_pr_IGD_SN_FLACCB" value="Menendang Atau Kaki Disusun, Hipertonis Fleksi/Ekstensi Anggota Badan Secara Berlebihan" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCB3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Menendang atau kaki disusun, hipertonis fleksi/ekstensi anggota badan secara berlebihan </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN2_3">
                                c. Activity (Aktivitas)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCC1" name="EMR_pr_IGD_SN_FLACCC" value="Berbaring Dengan Tenang, Posisi Normal, Bergerak Dengan Bebas Dan Mudah" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCC1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Berbaring dengan tenang, posisi normal, bergerak dengan bebas dan mudah </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCC2" name="EMR_pr_IGD_SN_FLACCC" value="Menggeliat, Menggeser Maju Mundur, Tegang, Ragu-Ragu Untuk Bergerak, Menjaga Tekanan Pada Bagian Tubuh" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCC2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Menggeliat, menggeser maju mundur, tegang, ragu-ragu untuk bergerak, menjaga tekanan pada bagian tubuh </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCC3" name="EMR_pr_IGD_SN_FLACCC" value="Melengkung, Kaku Atau Menyentak, Posisi Tetap, Goyang Gerakan Kepala Dari Sisi Ke Sisi, Menggosok Bagian Tubuh" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCC3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Melengkung, kaku atau menyentak, posisi tetap, goyang gerakan kepala dari sisi ke sisi, menggosok bagian tubuh </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN2_4">
                                d. Cry (Menangis)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCD1" name="EMR_pr_IGD_SN_FLACCD" value="Tidak Ada Teriakan/Erangan (Terjaga/Tertidur)" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCD1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Tidak ada teriakan/erangan (terjaga/tertidur) </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCD2" name="EMR_pr_IGD_SN_FLACCD" value="Erangan/Rengekan, Sesekali Menangis, Sesekali Mengeluh" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCD2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Erangan/rengekan, sesekali menangis, sesekali mengeluh </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCD3" name="EMR_pr_IGD_SN_FLACCD" value="Terus Menerus Menangis, Menjerit, Isak Tangis, Mengeram-Ngeram, Sering Mengeluh" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCD3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Terus menerus menangis, menjerit, isak tangis, mengeram-ngeram, sering mengeluh </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN2_5">
                                e. Consolalability (respon terhadap himbauan)
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCE1" name="EMR_pr_IGD_SN_FLACCE" value="Tenang, Santai, Tidak Perlu Di Hibur" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCE1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Tenang, santai, tidak perlu di hibur </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCE2" name="EMR_pr_IGD_SN_FLACCE" value="Perlu Keyakinan Dengan Sesekali Menyentuh, Sekali-Kali Memeluk Atau Berbicara. Perhatian Mudah Beralih" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCE2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>	Perlu keyakinan dengan sesekali menyentuh, sekali-kali memeluk atau berbicara. Perhatian mudah beralih </label>
                                  </div>
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_pr_IGD_SN_FLACCE3" name="EMR_pr_IGD_SN_FLACCE" value="Sulit Untuk Di Bujuk Atau Di Buat Nyaman" class="md-check">
                                    <label for="EMR_pr_IGD_SN_FLACCE3">
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
                              <div class="col-md-12" id="EMR_pr_IGD_SN3_1">
                                <span>Skala nyeri:</span>
                                <br>
                                <br>
                                <div class="row">
                                  <div class="btn-group btn-group-solid" style="width:100%">
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3A_1" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot001.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3A_2" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot002.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3A_3" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot003.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3A_4" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot004.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3A_5" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot005.png'?>" style="height:50px"> </a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3A_6" style="height:80px;"> <img src="<?php echo base_url().'assets/pages/img/icon/emot006.png'?>" style="height:50px"> </a>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="btn-group btn-group-solid" style="width:100%">
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3B_0" class="btn white" style="height:40px; width:80px;"><div style="color: black;">0</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3B_1" class="btn white" style="height:40px;"><div style="color: black;">1</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3B_2" class="btn white" style="height:40px; width:60px;"><div style="color: black;">2</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3B_3" class="btn white" style="height:40px;"><div style="color: black;">3</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3B_4" class="btn white" style="height:40px; width:60px;"><div style="color: black;">4</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3B_5" class="btn white" style="height:40px;"><div style="color: black;">5</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3B_6" class="btn white" style="height:40px; width:60px;"><div style="color: black;">6</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3B_7" class="btn white" style="height:40px;"><div style="color: black;">7</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3B_8" class="btn white" style="height:40px; width:60px;"><div style="color: black;">8</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3B_9" class="btn white" style="height:40px;"><div style="color: black;">9</div></a>
                                    <a href="javascript:;" class="btn grey btn-outline" id="EMR_pr_IGD_btnSN3B_10" class="btn white" style="height:40px; width:60px;"><div style="color: black;">10</div></a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN3_2" >
                                <span>Apa yang membuat nyeri bertambah parah?</span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnBertambahParah1" name="EMR_pr_IGD_CbtnBertambahParah1" value="Tidak Ada Penyebab Khusus" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnBertambahParah1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak ada penyebab khusus </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnBertambahParah2" name="EMR_pr_IGD_CbtnBertambahParah2" value="Berubah Posisi" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnBertambahParah2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Berubah posisi  </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_pr_IGD_textBertambahParah" name="EMR_pr_IGD_textBertambahParah" value="" class="form-control collapse" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                                <span>Apa yang membuat nyeri berkurang?</span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnBerkurang1" name="EMR_pr_IGD_CbtnBerkurang1" value="Kompres Hangat/Dingin" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnBerkurang1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Kompres hangat/dingin </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnBerkurang2" name="EMR_pr_IGD_CbtnBerkurang2" value="Istirahat" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnBerkurang2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Istirahat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnBerkurang3" name="EMR_pr_IGD_CbtnBerkurang3" value="Minum Obat" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnBerkurang3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Minum obat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnBerkurang4" name="EMR_pr_IGD_CbtnBerkurang4" value="Berubah Posisi" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnBerkurang4">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Berubah posisi </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnBerkurang5" name="EMR_pr_IGD_CbtnBerkurang5" value="Tidak Ada" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnBerkurang5">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak ada </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_pr_IGD_textBertambahParah2" name="EMR_pr_IGD_textBertambahParah2" value="" class="form-control collapse" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN3_3">
                                <span>Gambaran rasa nyeri?</span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="row md-checkbox-inline">
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnGambaran1" name="EMR_pr_IGD_CbtnGambaran1" value="Seperti Ditimpa Benda Berat" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnGambaran1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti ditimpa benda berat </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnGambaran2" name="EMR_pr_IGD_CbtnGambaran2" value="Seperti Ditarik" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnGambaran2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Ditarik </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnGambaran3" name="EMR_pr_IGD_CbtnGambaran3" value="Seperti Ditusuk" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnGambaran3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Ditusuk</label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnGambaran4" name="EMR_pr_IGD_CbtnGambaran4" value="Seperti Dipukul" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnGambaran4">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Dipukul </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnGambaran5" name="EMR_pr_IGD_CbtnGambaran5" value="Seperti Dibakar" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnGambaran5">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Dibakar </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnGambaran6" name="EMR_pr_IGD_CbtnGambaran6" value="Seperti Berdenyut" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnGambaran6">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Berdenyut </label>
                                      </div>
                                      <div class="col-md-5 md-checkbox">
                                        <input type="checkbox" id="EMR_pr_IGD_CbtnGambaran7" name="EMR_pr_IGD_CbtnGambaran7" value="Seperti Kram" class="md-check">
                                        <label for="EMR_pr_IGD_CbtnGambaran7">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Seperti Kram </label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type="text" id="EMR_pr_IGD_textGambaran" name="EMR_pr_IGD_textGambaran" value="" class="form-control collapse" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN3_4">
                                <span>Lokasi nyeri?</span>
                                <br>
                                <br>
                                <input type="text" id="EMR_pr_IGD_SNMenjalar1" name="EMR_pr_IGD_SNMenjalar1" value="" class="form-control" placeholder="Lokasi nyeri">
                                <br>
                                <span>Apakah menjalar?</span>
                                <div class="md-radio">
                                    <input type="radio" id="EMR_pr_IGD_MenjalarY" name="EMR_pr_IGD_Menjalar" class="md-radiobtn" value="Ya">
                                    <label for="EMR_pr_IGD_MenjalarY">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Ya </label>
                                </div>
                                <input type="text" id="EMR_pr_IGD_SNMenjalar2" name="EMR_pr_IGD_SNMenjalar2" value="" class="form-control collapse" placeholder="Lokasi menjalar">
                                <input type="hidden" id="EMR_pr_IGD_SNMenjalar2status" name="EMR_pr_IGD_SNMenjalar2status" value="Tidak" class="form-control">
                                <div class="md-radio">
                                    <input type="radio" id="EMR_pr_IGD_MenjalarTD" name="EMR_pr_IGD_Menjalar" class="md-radiobtn" value="Tidak">
                                    <label for="EMR_pr_IGD_MenjalarTD">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Tidak </label>
                                </div>
                              </div>
                              <div class="col-md-12 collapse" id="EMR_pr_IGD_SN3_5">
                                <span> Seberapa sering anda mengalami nyeri? </span>
                                <center>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_pr_IGD_RbtnSNsetiapinsan1" name="EMR_pr_IGD_RbtnSNsetiapinsan" class="md-radiobtn" value="Hilang Timbul">
                                        <label for="EMR_pr_IGD_RbtnSNsetiapinsan1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Hilang timbul</label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_pr_IGD_RbtnSNsetiapinsan2" name="EMR_pr_IGD_RbtnSNsetiapinsan" class="md-radiobtn" value="Nyeri Terus Menerus">
                                        <label for="EMR_pr_IGD_RbtnSNsetiapinsan2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Nyeri terus menerus</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </center>
                                <div class="collapse" id="EMR_pr_IGD_setiapselamaapa">
                                  <input type="hidden" id="EMR_pr_IGD_ststsetiapselamaapa" value="tidak">
                                  <span>Setiap berapa lama timbul nyeri?</span>
                                  <center>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_pr_IGD_RbtnSNsetiap1" name="EMR_pr_IGD_RbtnSNsetiap" class="md-radiobtn" value="1-2 Jam">
                                          <label for="EMR_pr_IGD_RbtnSNsetiap1">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> 1-2 Jam</label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_pr_IGD_RbtnSNsetiap2" name="EMR_pr_IGD_RbtnSNsetiap" class="md-radiobtn" value="< 4 Jam">
                                          <label for="EMR_pr_IGD_RbtnSNsetiap2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> < 4 Jam</label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_pr_IGD_RbtnSNsetiap3" name="EMR_pr_IGD_RbtnSNsetiap" class="md-radiobtn" value="> 4 Jam">
                                          <label for="EMR_pr_IGD_RbtnSNsetiap3">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> > 4 Jam</label>
                                        </div>
                                        <input type="text" id="EMR_pr_IGD_SNlamawaktu" name="EMR_pr_IGD_SNlamawaktu" value="" class="form-control" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                  </center>
                                </div>
                                <div class="collapse" id="EMR_pr_IGD_setiapselamaapa2">
                                  <input type="hidden" id="EMR_pr_IGD_ststsetiapselamaapa2" value="tidak">
                                  <span>Berapa lamanya waktu serangan?</span>
                                  <center>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_pr_IGD_RbtnSNselama1" name="EMR_pr_IGD_RbtnSNselama" class="md-radiobtn" value="< 30 Menit">
                                          <label for="EMR_pr_IGD_RbtnSNselama1">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> < 30 menit </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_pr_IGD_RbtnSNselama2" name="EMR_pr_IGD_RbtnSNselama" class="md-radiobtn" value="> 30 Menit">
                                          <label for="EMR_pr_IGD_RbtnSNselama2">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> > 30 menit </label>
                                        </div>
                                        <input type="text" id="EMR_pr_IGD_SNlamawaktu2" name="EMR_pr_IGD_SNlamawaktu2" value="" class="form-control" placeholder="Lain lain">
                                      </div>
                                    </div>
                                  </div>
                                  </center>
                                </div>
                              </div>
                            <?php
                            }
                            ?>
                            <center>
                              <div class="btn-group btn-group-circle btn-group-sm btn-group-solid" style="width:50%">
                                <button type="button" id="EMR_pr_IGD_SN1Back" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                                <button type="button" id="EMR_pr_IGD_SN1Next" class="btn white" style="width:50%" disabled="true">Lanjutkan >></button>
                              </div>
                            </center>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-3">
                              Skor Nyeri :

                              <span id="EMR_pr_IGD_SkorNyeri"><b> 0</b></span>
                              <input type="hidden" id="EMR_pr_IGD_SkorNyeri_text" name="EMR_pr_IGD_SkorNyeri_text" value="" class="form-control">
                            </div>
                            <div class="col-md-9">
                              Skala Nyeri :

                              <span id="EMR_pr_IGD_SkalaNyeri"><b>
                                <?php
                                if($Utahun < 1)
                                { ?>
                                  Nyeri ringan sampai tidak nyeri
                                <?php }
                                else if($Utahun < 4)
                                { ?>
                                  Relaxed dan comfortable (santai dan nyaman)
                                <?php }
                                else
                                {?>
                                  Tidak nyeri
                                <?php
                                }?></b></span>
                                <input type="hidden" id="EMR_pr_IGD_SkalaNyeri_text" name="EMR_pr_IGD_SkalaNyeri_text" value="" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_pr_IGD_P3_Halaman2">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-body">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="md-radio-inline">
                                <span class="box">Aktifitas Sehari-hari : </span>
                                <div class="md-radio">
                                    <input type="radio" id="EMR_pr_IGD_KajiFungsiMandiri" name="EMR_pr_IGD_KajiFungsi" class="md-radiobtn" value="Mandiri">
                                    <label for="EMR_pr_IGD_KajiFungsiMandiri">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Mandiri </label>
                                </div>
                                <div class="md-radio">
                                    <input type="radio" id="EMR_pr_IGD_KajiFungsiDenganBantuan" name="EMR_pr_IGD_KajiFungsi" class="md-radiobtn" value="">
                                    <label for="EMR_pr_IGD_KajiFungsiDenganBantuan">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Dengan Bantuan </label>
                                </div>
                              </div>
                              <div class="collapse" id="EMR_pr_IGD_isianKajiFungsi">
                                <div class="col-md-4">
                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                      <input type="text" id="EMR_pr_IGD_kajiFungsiBantu" name="EMR_pr_IGD_kajiFungsiBantu" value="" class="form-control">
                                      <label for="form_control_1"> Bantuan </label>
                                      <span class="help-block">Masukkan data</span>
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
                  <div class="col-md-12 collapse" id="EMR_pr_IGD_P3_Halaman3">
                    <div class="col-md-12">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="col-md-12">
                                <input class="hidden" id="tindak">
                                a. Bagaimana cara berjalan Pasien?
                                <div class="row md-radio-inline">

                                    <div class="col-md-12 md-radio">
                                        <input type="radio" id="EMR_pr_IGD_FungA2" name="EMR_pr_IGD_FungA" class="md-radiobtn" value="Tidak Seimbang/Sempoyongan">
                                        <label for="EMR_pr_IGD_FungA2">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Tidak seimbang / sempoyongan </label>
                                    </div>
                                    <div class="col-md-12 md-radio">
                                        <input type="radio" id="EMR_pr_IGD_FungA3" name="EMR_pr_IGD_FungA" class="md-radiobtn" value="Jalan Dengan Menggunakan Alat Bantu. ">
                                        <label for="EMR_pr_IGD_FungA3">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Jalan dengan menggunakan alat bantu </label>
                                    </div>
                                    <input type="text" id="EMR_pr_IGD_alatbantu" name="EMR_pr_IGD_alatbantu" value="" class="form-control collapse" placeholder="Alat bantu yang digunakan pasien">
                                    <input type="hidden" id="EMR_pr_IGD_alatbantustatus" name="EMR_pr_IGD_alatbantustatus" value="Tidak" class="form-control">
                                    <div class="col-md-12 md-radio">
                                        <input type="radio" id="EMR_pr_IGD_FungA1" name="EMR_pr_IGD_FungA" class="md-radiobtn" value="Normal" checked>
                                        <label for="EMR_pr_IGD_FungA1">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Normal </label>
                                    </div>
                                </div>
                                b. Apakah pasien menopang saat akan duduk?
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_pr_IGD_FungBYA" name="EMR_pr_IGD_FungB" class="md-radiobtn" value="Ya">
                                    <label for="EMR_pr_IGD_FungBYA">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_pr_IGD_FungBTD" name="EMR_pr_IGD_FungB" class="md-radiobtn" value="Tidak" checked>
                                    <label for="EMR_pr_IGD_FungBTD">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-12">
                              Hasil asesmen risiko jatuh :
                              <span id="EMR_pr_IGD_FungHasil"><b> Tidak berisiko </b></span>
                              <input type="hidden" id="EMR_pr_IGD_FungHasil_text" name="EMR_pr_IGD_FungHasil_text" value="" class="form-control">
                            </div>
                            <div class="col-md-12">
                              Tindakan pencegahan risiko jatuh yg perlu dilakukan :
                              <span id="EMR_pr_IGD_FungTindakan"><b> Tidak ada tindakan </b></span>
                              <input type="hidden" id="EMR_pr_IGD_FungTindakan_text" name="EMR_pr_IGD_FungTindakan_text" value="" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_pr_IGD_P3_Halaman4">
                    <div class="col-md-12">
                      <div class="col-md-12 portlet light bordered">
                        <div class="portlet-body">
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="col-md-12">
                                <span>Apakah pasien menggunakan kursi roda atau membutuhkan bantuan?</span>
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_DekubitasAYa" name="EMR_pr_IGD_DekubitasA" class="md-radiobtn" value="Butuh bantuan atau menggunakan kursi roda">
                                      <label for="EMR_pr_IGD_DekubitasAYa">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_DekubitasATdk" name="EMR_pr_IGD_DekubitasA" class="md-radiobtn" value="Tidak butuh bantuan atau menggunakan kursi roda" checked>
                                      <label for="EMR_pr_IGD_DekubitasATdk">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Tidak </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <span>Apakah ada inkontinensia uri atau alvi?</span>
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_DekubitasBYa" name="EMR_pr_IGD_DekubitasB" class="md-radiobtn" value="Inkontinensia uri atau alvi">
                                      <label for="EMR_pr_IGD_DekubitasBYa">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_DekubitasBTdk" name="EMR_pr_IGD_DekubitasB" class="md-radiobtn" value="Tidak inkontinensia uri atau alvi" checked>
                                      <label for="EMR_pr_IGD_DekubitasBTdk">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Tidak </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <span>Apakah ada riwayat dikubitus atau luka dikubitus?</span>
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_DekubitasCYa" name="EMR_pr_IGD_DekubitasC" class="md-radiobtn" value="Ada riwayat dikubitus atau luka dikubitus">
                                      <label for="EMR_pr_IGD_DekubitasCYa">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_DekubitasCTdk" name="EMR_pr_IGD_DekubitasC" class="md-radiobtn" value="Tidak ada riwayat dikubitus atau luka dikubitus" checked>
                                      <label for="EMR_pr_IGD_DekubitasCTdk">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Tidak </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <span>Apakah pasien di atas usia 60 tahun?</span>
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_DekubitasDYa" name="EMR_pr_IGD_DekubitasD" class="md-radiobtn" value="Pasien di atas usia 60 tahun">
                                      <label for="EMR_pr_IGD_DekubitasDYa">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_DekubitasDTdk" name="EMR_pr_IGD_DekubitasD" class="md-radiobtn" value="Pasien di bawah usia 60 tahun" checked = "True">
                                      <label for="EMR_pr_IGD_DekubitasDTdk">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Tidak </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <span>Apakah ekstremitas dan badan sesuai dengan usia perkembangan?</span>
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_DekubitasEYa" name="EMR_pr_IGD_DekubitasE" class="md-radiobtn" value="Ekstremitas dan badan sesuai dengan usia perkembangan">
                                      <label for="EMR_pr_IGD_DekubitasEYa">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Ya </label>
                                  </div>
                                  <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_DekubitasETdk" name="EMR_pr_IGD_DekubitasE" class="md-radiobtn" value="Ekstremitas dan badan tidak sesuai dengan usia perkembangan" checked>
                                      <label for="EMR_pr_IGD_DekubitasETdk">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Tidak </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 collapse" id="EMR_pr_IGD_P3_Halaman5">
                    <div class="col-md-12">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="col-md-3">
                              <label for="form_control_1">BB</label>
                              <i style="font-size:12px"><b>Kg</b></i>
                              <input type="text" id="EMR_pr_IGD_beratbadan" name="EMR_pr_IGD_beratbadan" value="" class="form-control">
                            </div>
                            <div class="col-md-3">
                              <label for="form_control_1">TB</label>
                              <i style="font-size:12px"><b>Cm</b></i>
                              <input type="text" id="EMR_pr_IGD_tinggibadan" name="EMR_pr_IGD_tinggibadan" value="" class="form-control">
                            </div>
                            <div class="col-md-6">
                              <span>Nilai BMI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><b><span id="EMR_pr_IGD_Nilai_BMI">0</span></b></br>
                              <span>Kategori BMI : </span><b><span id="EMR_pr_IGD_Kategori_BMI"></span></b>
                            </div>
                            <div class="md-radio-inline">
                              <div class="md-radio">
                                  <input type="radio" id="EMR_pr_IGD_GiziBMIMandiri" name="EMR_pr_IGD_GiziBMI" class="md-radiobtn" value="Mandiri">
                                  <label for="EMR_pr_IGD_KajiFungsiMandiri">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Dapat di evaluasi </label>
                              </div>
                              <div class="md-radio">
                                  <input type="radio" id="EMR_pr_IGD_GiziBMIDenganBantuan" name="EMR_pr_IGD_GiziBMI" class="md-radiobtn" value="">
                                  <label for="EMR_pr_IGD_KajiFungsiDenganBantuan">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tidak dapat Dievaluasi </label>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                      <button type="button" id="EMR_pr_IGD_P3_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                      <button type="button" id="EMR_pr_IGD_P3_HalamanNext" class="btn green" style="width:50%">Lanjutkan >></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_pr_IGD_P4_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_pr_IGD_P4_btnHalaman1" class="btn white col-md-12"> Diagnosis dan Tindakan</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_pr_IGD_P4_Halaman1">
                    <div class="col-md-12">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                          <span><b>Input Diagnosis dan Tindakan</b></span>
                        </div>
                        <div class="portlet-body">
                          <center>
                            <div class="input-group">
                                <table border="1" class="col-md-12">
                                  <hr>
                                    <td class="col-md-1"><center><b>JAM</b></center></td>
                                    <td class="col-md-2"><center><b>SISTEM</b></center></td>
                                    <td class="col-md-4"><center><b>Diagnosa Keperawatan</b></center></td>
                                    <td class="col-md-4"><center><b>Tindakan</b></center></td>
                                    <td class="col-md-1"><center><b>Aksi</b></center></td>
                                  </hr>
                                  <tr>
                                    <td style="width:10%"><input type="text" class="form-control timepicker timepicker-24" id="EMR_pr_IGD_JamDT" value="<?=date('H:i');?>"></td>
                                    <td>
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Sistem" id="EMR_pr_IGD_Sistem" data-live-search="true" data-size="4">
                                        <option value='Belum' selected disabled>Pilih Sistem</option>
                                        <option value='Breathing'>Breathing</option>
                                        <option value='Blood'>Blood</option>
                                        <option value='Brain'>Brain</option>
                                        <option value='Bladder'>Bladder</option>
                                        <option value='Bowl'>Bowl</option>
                                        <option value='Bone'>Bone</option>
                                        <option value='Exposure'>Exposure</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_D_Belum">
                                      <select class="bs-select form-control" name="" id="" data-live-search="true" data-size="8">
                                        <option value=''>Sistem belum dipilih</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_D_input" class="collapse">
                                      <input type="text" class="form-control" id="EMR_pr_IGD_Diagnosa_Input" style="width:70%"><a class="btn green" id="EMR_pr_IGD_D_btnChange" style="width:30%"><i class="fa fa-arrow-left"></i></a>
                                    </td>
                                    <td id="EMR_pr_IGD_D_Breathing" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Diagnosa_Breathing" id="EMR_pr_IGD_Diagnosa_Breathing" data-live-search="true" data-size="4">
                                        <option value='' selected disabled>Pilih Diagnosa</option>
                                        <?php
                                        $jmlbarisD_b = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Breathing'")->num_rows();
                                        $D_breathing = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Breathing'");
                                        for($D_ = 0; $D_ < $jmlbarisD_b; $D_++)
                                        {?>
                                          <option value='<?=$D_breathing->row($D_)->DIAGNOSA;?>'><?=$D_breathing->row($D_)->DIAGNOSA;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_D_Blood" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Diagnosa_Blood" id="EMR_pr_IGD_Diagnosa_Blood" data-live-search="true" data-size="4">
                                        <option value='' selected disabled>Pilih Diagnosa</option>
                                        <?php
                                        $jmlbarisD_b = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Blood'")->num_rows();
                                        $D_breathing = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Blood'");
                                        for($D_ = 0; $D_ < $jmlbarisD_b; $D_++)
                                        {?>
                                          <option value='<?=$D_breathing->row($D_)->DIAGNOSA;?>'><?=$D_breathing->row($D_)->DIAGNOSA;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_D_Brain" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Diagnosa_Brain" id="EMR_pr_IGD_Diagnosa_Brain" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Diagnosa</option>
                                        <?php
                                        $jmlbarisD_b = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Brain'")->num_rows();
                                        $D_breathing = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Brain'");
                                        for($D_ = 0; $D_ < $jmlbarisD_b; $D_++)
                                        {?>
                                          <option value='<?=$D_breathing->row($D_)->DIAGNOSA;?>'><?=$D_breathing->row($D_)->DIAGNOSA;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_D_Bladder" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Diagnosa_Bladder" id="EMR_pr_IGD_Diagnosa_Bladder" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Diagnosa</option>
                                        <?php
                                        $jmlbarisD_b = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Bladder'")->num_rows();
                                        $D_breathing = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Bladder'");
                                        for($D_ = 0; $D_ < $jmlbarisD_b; $D_++)
                                        {?>
                                          <option value='<?=$D_breathing->row($D_)->DIAGNOSA;?>'><?=$D_breathing->row($D_)->DIAGNOSA;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_D_Bowl" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Diagnosa_Bowl" id="EMR_pr_IGD_Diagnosa_Bowl" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Diagnosa</option>
                                        <?php
                                        $jmlbarisD_b = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Bowl'")->num_rows();
                                        $D_breathing = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Bowl'");
                                        for($D_ = 0; $D_ < $jmlbarisD_b; $D_++)
                                        {?>
                                          <option value='<?=$D_breathing->row($D_)->DIAGNOSA;?>'><?=$D_breathing->row($D_)->DIAGNOSA;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_D_Bone" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Diagnosa_Bone" id="EMR_pr_IGD_Diagnosa_Bone" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Diagnosa</option>
                                        <?php
                                        $jmlbarisD_b = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Bone'")->num_rows();
                                        $D_breathing = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Bone'");
                                        for($D_ = 0; $D_ < $jmlbarisD_b; $D_++)
                                        {?>
                                          <option value='<?=$D_breathing->row($D_)->DIAGNOSA;?>'><?=$D_breathing->row($D_)->DIAGNOSA;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_D_Exposure" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Diagnosa_Exposure" id="EMR_pr_IGD_Diagnosa_Exposure" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Diagnosa</option>
                                        <?php
                                        $jmlbarisD_b = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Exposure'")->num_rows();
                                        $D_breathing = $this->db->get("EMR_IGD_DIAGNOSA_PERAWAT where SISTEM = 'Exposure'");
                                        for($D_ = 0; $D_ < $jmlbarisD_b; $D_++)
                                        {?>
                                          <option value='<?=$D_breathing->row($D_)->DIAGNOSA;?>'><?=$D_breathing->row($D_)->DIAGNOSA;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_T_Belum">
                                      <select class="bs-select form-control" name="" id="" data-live-search="true" data-size="8">
                                        <option value=''>Sistem belum dipilih</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_T_input" class="collapse">
                                      <input type="text" class="form-control" id="EMR_pr_IGD_Tindakan_Input" style="width:70%"><a class="btn green" id="EMR_pr_IGD_T_btnChange" style="width:30%"><i class="fa fa-arrow-left"></i></a>
                                    </td>
                                    <td id="EMR_pr_IGD_T_Breathing" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Tindakan_Breathing" id="EMR_pr_IGD_Tindakan_Breathing" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Tindakan</option>
                                        <?php
                                        $jmlbarisT_b = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Breathing'")->num_rows();
                                        $T_breathing = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Breathing'");
                                        for($T_ = 0; $T_ < $jmlbarisT_b; $T_++)
                                        {?>
                                          <option value='<?=$T_breathing->row($T_)->TINDAKAN;?>'><?=$T_breathing->row($T_)->TINDAKAN;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_T_Blood" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Tindakan_Blood" id="EMR_pr_IGD_Tindakan_Blood" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Tindakan</option>
                                        <?php
                                        $jmlbarisT_b = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Blood'")->num_rows();
                                        $T_breathing = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Blood'");
                                        for($T_ = 0; $T_ < $jmlbarisT_b; $T_++)
                                        {?>
                                          <option value='<?=$T_breathing->row($T_)->TINDAKAN;?>'><?=$T_breathing->row($T_)->TINDAKAN;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_T_Brain" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Tindakan_Brain" id="EMR_pr_IGD_Tindakan_Brain" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Tindakan</option>
                                        <?php
                                        $jmlbarisT_b = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Brain'")->num_rows();
                                        $T_breathing = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Brain'");
                                        for($T_ = 0; $T_ < $jmlbarisT_b; $T_++)
                                        {?>
                                          <option value='<?=$T_breathing->row($T_)->TINDAKAN;?>'><?=$T_breathing->row($T_)->TINDAKAN;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_T_Bladder" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Tindakan_Bladder" id="EMR_pr_IGD_Tindakan_Bladder" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Tindakan</option>
                                        <?php
                                        $jmlbarisT_b = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Bladder'")->num_rows();
                                        $T_breathing = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Bladder'");
                                        for($T_ = 0; $T_ < $jmlbarisT_b; $T_++)
                                        {?>
                                          <option value='<?=$T_breathing->row($T_)->TINDAKAN;?>'><?=$T_breathing->row($T_)->TINDAKAN;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_T_Bowl" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Tindakan_Bowl" id="EMR_pr_IGD_Tindakan_Bowl" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Tindakan</option>
                                        <?php
                                        $jmlbarisT_b = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Bowl'")->num_rows();
                                        $T_breathing = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Bowl'");
                                        for($T_ = 0; $T_ < $jmlbarisT_b; $T_++)
                                        {?>
                                          <option value='<?=$T_breathing->row($T_)->TINDAKAN;?>'><?=$T_breathing->row($T_)->TINDAKAN;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_T_Bone" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Tindakan_Bone" id="EMR_pr_IGD_Tindakan_Bone" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Tindakan</option>
                                        <?php
                                        $jmlbarisT_b = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Bone'")->num_rows();
                                        $T_breathing = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Bone'");
                                        for($T_ = 0; $T_ < $jmlbarisT_b; $T_++)
                                        {?>
                                          <option value='<?=$T_breathing->row($T_)->TINDAKAN;?>'><?=$T_breathing->row($T_)->TINDAKAN;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td id="EMR_pr_IGD_D_Exposure" class="collapse">
                                      <select class="bs-select form-control" name="EMR_pr_IGD_Tindakan_Exposure" id="EMR_pr_IGD_Tindakan_Exposure" data-live-search="true" data-size="8">
                                        <option value='' selected disabled>Pilih Tindakan</option>
                                        <?php
                                        $jmlbarisT_b = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Exposure'")->num_rows();
                                        $T_breathing = $this->db->get("EMR_IGD_TINDAKAN_PERAWAT where SISTEM = 'Exposure'");
                                        for($T_ = 0; $T_ < $jmlbarisT_b; $T_++)
                                        {?>
                                          <option value='<?=$T_breathing->row($T_)->TINDAKAN;?>'><?=$T_breathing->row($T_)->TINDAKAN;?></option>
                                        <?php }
                                         ?>
                                         <option value='Tambah'>Tambah</option>
                                      </select>
                                    </td>
                                    <td>
                                      <a type="button" class="btn green" style="width:100%" id="EMR_pr_IGD_btnTambahDNT"><i class="fa fa-plus"></i></a>
                                    </td>
                                  </tr>
                                </table>
                            </div>
                          </ceter>
                        </div>
                      </div>
                      <table class="table table-striped table-bordered table-advance table-hover">
                        <thead id="EMR_pr_IGD_DTtableatas">
                          <tr>
                            <th class="col-md-2">
                              <i class="fa fa-clock-o"></i> Jam </th>
                            <th class="colmd-2">
                              <i class="fa fa-heartbeat"></i> Sistem </th>
                            <th class="col-md-4">
                              <i class="fa fa-stethoscope"></i> DIagnosa Keperawatan </th>
                            <th class="col-md-4">
                              <i class="fa fa-eyedropper"></i> Tindakan </th>
                          </tr>
                        </thead>
                        <tbody id="EMR_pr_IGD_DTtableshow">
                          <?php
                          $cekidpemeriksaan = $this->db->get("EMR_UTAMA_PERIKSA where NOREG ='$noreg'")->row()->ID_PEMERIKSAAN;
                          $cekisiDT = $this->db->query("select * from EMR_D_DAN_T_PERAWAT where ID_PEMERIKSAAN ='$cekidpemeriksaan'")->num_rows();
                          if($cekisiDT == 0)
                          {?>

                            <tr id="EMR_pr_IGD_showtabelDT">
                              <td colspan="5"><center>Data Belum ada</center></td>
                            </tr>
                          <?php
                          }
                          else
                          {
                            $lineDT = $this->db->get("EMR_D_DAN_T_PERAWAT where ID_PEMERIKSAAN = '$cekidpemeriksaan'")->num_rows();
                            $showDT = $this->db->get("EMR_D_DAN_T_PERAWAT where ID_PEMERIKSAAN = '$cekidpemeriksaan' order by JAM desc");
                            for($show_ = 0; $show_ < $lineDT; $show_++)
                            {?>
                              <tr>
                                <td><?php echo $showDT->row($show_)->JAM;?></td>
                                <td><?php echo $showDT->row($show_)->SISTEM;?></td>
                                <td><?php echo $showDT->row($show_)->DIAGNOSA;?></td>
                                <td><?php echo $showDT->row($show_)->TINDAKAN;?></td>
                              </tr>
                            <?php
                            }
                          }?>
                          <input type="hidden" id="EMR_pr_IGD_InputcekisiDT" value="<?=$cekisiDT +1;?>">
                          <input type="hidden" id="EMR_pr_IGD_sistemDT">
                          <input type="hidden" id="EMR_pr_IGD_diagnosaDT">
                          <input type="hidden" id="EMR_pr_IGD_tindakanDT">
                          <input type="hidden" id="EMR_pr_IGD_idper" value="<?=$cekidpemeriksaan;?>">
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_pr_IGD_P5_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_pr_IGD_P5_btnHalaman1" class="btn white col-md-10">1. Penatalaksanaan</button>
              <button type="button" id="EMR_pr_IGD_P5_btnHalaman2" class="btn green col-md-2">2</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_pr_IGD_P5_Halaman1">
                    <table class="table table-striped table-bordered table-advance table-hover">
                      <thead>
                        <tr>
                          <th class="col-md-1">NO</th>
                          <th class="col-md-1">
                            <i class="fa fa-clock-o"></i> Jam </th>
                          <th class="colmd-3">
                            <i class="fa fa-heartbeat"></i> Nama Obat/infus </th>
                          <th class="col-md-3">
                            <i class="fa fa-stethoscope"></i> Dosis </th>
                          <th class="col-md-3">
                            <i class="fa fa-eyedropper"></i> Rute </th>
                          <th class="col-md-1">
                            Tindakan </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $cekisiDT = $this->db->query("select * from EMR_D_DAN_T_PERAWAT n, EMR_UTAMA_PERIKSA m where n.ID_PEMERIKSAAN = m.ID_PEMERIKSAAN and m.NOREG = '$noreg'")->num_rows();
                        if($cekisiDT == 0)
                        {?>
                          <tr id="EMR_pr_IGD_showtabelDT" class="">
                            <td colspan="5"><center>Data Belum ada</center></td>
                          </tr>
                        <?php
                        }
                        else
                        {
                          foreach ($dataTableDT as $DnT)
                          {?>
                            <tr>
                              <td><?php echo $DnT->NO;?></td>
                              <td><?php echo $DnT->JAM;?></td>
                              <td><?php echo $DnT->SISTEM;?></td>
                              <td><?php echo $DnT->DIAGOSA;?></td>
                              <td><?php echo $DnT->TINDAKAN;?></td>
                            </tr>
                          <?php
                          }
                        }?>
                      </tbody>
                    </table>

                    <!--div class="col-md-12">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                          <span><b>Penatalaksanaan</b></span>
                        </div>
                        <div class="portlet-body">
                          <center>
                            <div class="tab-content">
                              <div class="col-md-6">
                                <label for="form_control_1">Jam</label>
                                <input type="text" id="EMR_pr_IGD_Jam" name="EMR_pr_IGD_Jam" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                <label for="form_control_1">Nama Obat/infus</label>
                                <input type="text" id="EMR_pr_IGD_ObatInfus" name="EMR_pr_IGD_ObatInfus" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                <label for="form_control_1">Dosis</label>
                                <input type="text" id="EMR_pr_IGD_Dosis" name="EMR_pr_IGD_Dosis" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                <label for="form_control_1">Nama Rute</label>
                                <input type="text" id="EMR_pr_IGD_Rute" name="EMR_pr_IGD_Rute" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                <label for="form_control_1">DiperiksaOleh</label>
                                <input type="text" id="EMR_pr_IGD_DiperiksaOleh" name="EMR_pr_IGD_DiperiksaOleh" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                <label for="form_control_1">DiberikanOleh</label>
                                <input type="text" id="EMR_pr_IGD_DiberikanOleh" name="EMR_pr_IGD_DiberikanOleh" value="" class="form-control">
                              </div>
                            </div>
                          </center><br/><br/>
                        </div>
                      </div>
                      <a type="button" class="btn green col-md-12" id="" style="width:100%">Tambah Data</a><br/><br/><br/><br/>
                    </div>
                  -->
                  </div>
                  <div class="col-md-12 collapse" id="EMR_pr_IGD_P5_Halaman2">
                    <div class="portlet light portlet-fit bordered">
                      <div class="portlet-title">
                        <span><b>Penanggung jawab pengisi data :</b></span>
                      </div>
                      <input type="hidden" id="EMR_pr_IGD_statver" name="EMR_pr_IGD_statver" value="Perawat1">
                      <div class="row portlet-body" id="EMR_pr_IGD_verPerPerawat">
                        <div class="col-sm-12">
                          <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data berikut, masukkan password anda terlebih dahulu sebagai proses verifikasi penginput data</p>
                          <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                              <input type="password" id="VerPassAsesmen" name="VerPassAsesmen" class="form-control">
                              <label for="form_control_1">Masukkan Password</label>
                              <span class="help-block">Masukkan password</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="btn-group btn-group btn-group-justified">
                            <a id="EMR_pr_IGD_btnChangePerPerawat" class="btn red"> Klik disini apabila anda bukan <?php echo $level; ?> <?php echo $username; ?></a>
                          </div>
                        </div>
                      </div>
                      <div class="row portlet-body collapse" id="EMR_pr_IGD_verPerPerawat2">
                        <div class="col-sm-12">
                          <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda akan mengambil alih tanggung jawab proses pengisian data, kelengkapan pengisian data akan mempengaruhi penilaian anda</p>
                          <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                              <input type="text" id="EMR_pr_IGD_userPerPerawat" name="EMR_pr_IGD_userPerPerawat" class="form-control">
                              <label for="form_control_1">Masukkan Username</label>
                              <span class="help-block">Masukkan Username</span>
                            </div>
                          </div>
                          <div class="form-group form-md-line-input has-success form-md-floating-label">
                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                            <input type="password" id="EMR_pr_IGD_passPerPerawat" name="EMR_pr_IGD_passPerPerawat" class="form-control">
                            <label for="form_control_1">Masukkan Password</label>
                            <span class="help-block">Masukkan Password</span>
                          </div>
                        </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="btn-group btn-group btn-group-justified">
                            <a id="EMR_pr_IGD_btnChangePerPerawat2" class="btn red"> Klik disini apabila anda <?php echo $level; ?> <?php echo $username; ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                      <button type="button" id="EMR_pr_IGD_P5_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                      <button type="button" id="EMR_pr_IGD_P5_HalamanNext" class="btn green" style="width:50%">Lanjutkan >></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_pr_IGD_P6_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_pr_IGD_P6_btnHalaman1" class="btn white col-md-12">Observasi</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light portlet-fit bordered">
                <div class="portlet-body">
                  <center>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="col-md-6">
                          <div class="col-md-6">
                            <label>Jam : </label>
                            <input type="text" class="form-control timepicker timepicker-24" style="width:100%" id="EMR_pr_IGD_JamOb" value="<?=date('H:i');?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label>Assesment : </label>
                          <select class="bs-select form-control" name="EMR_pr_IGD_P6_A" id="EMR_pr_IGD_P6_A" data-live-search="true" data-size="8">
                            <option value='' disabled selected></option>
                            <option value='Masalah Teratasi'>Masalah Teratasi</option>
                            <option value='Masalah teratasi sebagian'>Masalah teratasi sebagian</option>
                            <option value='Masalah belum teratasi'>Masalah belum teratasi</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <textarea class="form-control" id="EMR_pr_IGD_SubyektifOb" name="EMR_pr_IGD_SubyektifOb" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                            <label for="form_control_1">Subyektif</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <textarea class="form-control" id="EMR_pr_IGD_PlanningOb" name="EMR_pr_IGD_PlanningOb" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                            <label for="form_control_1">Planning</label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <span class="col-md-12">Objektif :</span>
                          <div class="col-md-6">
                            <div class="portlet light portlet-fit bordered">
                              <div class="portlet-body row">
                                <div class="col-md-12">
                                  <span class="control-label">Keadaan Umum : </span>
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_P6_KeadaanUmum1" name="EMR_pr_IGD_P6_KeadaanUmum" class="md-radiobtn" value="Baik" checked>
                                      <label for="EMR_pr_IGD_P6_KeadaanUmum1">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Baik </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_P6_KeadaanUmum2" name="EMR_pr_IGD_P6_KeadaanUmum" class="md-radiobtn" value="Ringan">
                                      <label for="EMR_pr_IGD_P6_KeadaanUmum2">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Ringan </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_pr_IGD_P6_KeadaanUmum3" name="EMR_pr_IGD_P6_KeadaanUmum" class="md-radiobtn" value="Berat">
                                      <label for="EMR_pr_IGD_P6_KeadaanUmum3">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Berat </label>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                  <span class="control-label">GCS : </span>
                                </div>
                                <div class="col-md-4">
                                  <span class="control-label">E : </span>
                                  <input type="text" id="EMR_pr_IGD_P6_GCSe" name="EMR_pr_IGD_P6_GCSe" value="4" class="form-control">
                                </div>
                                <div class="col-md-4">
                                  <span class="control-label">V : </span>
                                  <input type="text" id="EMR_pr_IGD_P6_GCSv" name="EMR_pr_IGD_P6_GCSv" value="5" class="form-control">
                                </div>
                                <div class="col-md-4">
                                  <span class="control-label">M : </span>
                                  <input type="text" id="EMR_pr_IGD_P6_GCSm" name="EMR_pr_IGD_P6_GCSm" value="6" class="form-control">
                                </div>
                                <br>
                                <div class="col-md-6">
                                  <span>Kesadaran : </span>
                                  <select class="bs-select form-control" name="EMR_pr_IGD_P6_Kesadaran" id="EMR_pr_IGD_P6_Kesadaran" data-live-search="true" data-size="8">
                                    <option value='' disabled selected></option>
                                    <option value='Comma'>Comma</option>
                                    <option value='Soporo comma'>Soporo comma</option>
                                    <option value='Delirium'>Delirium</option>
                                    <option value='Somnolen'>Somnolen</option>
                                    <option value='Apatis'>Apatis</option>
                                    <option value='Compos Mentis'>Compos Mentis</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  <span class="control-label">SpO2 % : </span>
                                  <input type="text" id="EMR_pr_IGD_P6_SpO2" name="EMR_pr_IGD_P6_SpO2" class="form-control">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="portlet light bordered">
                              <div class="portlet-body">
                                <div class="tab-content">
                                  <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                    <div class="tab-content">
                                      <div class="col-md-4">
                                        <label for="form_control_1">Sistolik&nbsp;</label>
                                        <i style="font-size:12px"><b>mmHg</b></i>
                                        <input type="text" id="EMR_pr_IGD_P6_TDSistolik" name="EMR_pr_IGD_P6_TDSistolik" value="" class="form-control">
                                      </div>
                                      <div class="col-md-4">
                                        <label for="form_control_1">Diastolik</label>
                                        <i style="font-size:12px"><b>mmHg</b></i>
                                        <input type="text" id="EMR_pr_IGD_P6_TDDiastolik" name="EMR_pr_IGD_P6_TDDiastolik" value="" class="form-control">
                                      </div>
                                      <div class="col-md-4">
                                        <label for="form_control_1">Suhu tubuh</label>
                                        <i style="font-size:12px"><b>&deg;C</b></i>
                                        <input type="text" id="EMR_pr_IGD_P6_suhutubuh" name="EMR_pr_IGD_P6_suhutubuh" value="" class="form-control">
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="tab-content">
                                      <div class="col-md-6">
                                        <label for="form_control_1">N</label>
                                        <i style="font-size:12px"><b>x/mnt</b></i>
                                        <input type="text" id="EMR_pr_IGD_P6_nadi" name="EMR_pr_IGD_P6_nadi" value="" class="form-control">
                                      </div>
                                      <div class="col-md-6">
                                        <div class="md-radio-inline">
                                          <div class="md-radio">
                                            <input type="radio" id="EMR_pr_IGD_P6_NadiCH_reguler" name="EMR_pr_IGD_P6_NadiCH" class="md-radiobtn" value="Reguler">
                                            <label for="EMR_pr_IGD_P6_NadiCH_reguler">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Reguler </label>
                                          </div>
                                          <div class="md-radio">
                                            <input type="radio" id="EMR_pr_IGD_P6_NadiCH_irreguler" name="EMR_pr_IGD_P6_NadiCH" class="md-radiobtn" value="Irreguler">
                                            <label for="EMR_pr_IGD_P6_NadiCH_irreguler">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Irreguler </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-content">
                                      <div class="col-md-6">
                                        <label for="form_control_1">Rr</label>
                                        <i style="font-size:12px"><b>x/mnt</b></i>
                                        <input type="text" id="EMR_pr_IGD_P6_respiratory" name="EMR_pr_IGD_P6_respiratory" value="" class="form-control">
                                      </div>
                                      <div class="col-md-6">
                                        <div class="md-radio-inline">
                                          <div class="md-radio">
                                            <input type="radio" id="EMR_pr_IGD_P6_RespiratoryCH_teratur" name="EMR_pr_IGD_P6_RespiratoryCH" class="md-radiobtn" value="Teratur">
                                            <label for="EMR_pr_IGD_P6_RespiratoryCH_teratur">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Teratur </label>
                                          </div>
                                          <div class="md-radio">
                                            <input type="radio" id="EMR_pr_IGD_P6_RespiratoryCH_titeratur" name="EMR_pr_IGD_P6_RespiratoryCH" class="md-radiobtn" value="Tidak Teratur">
                                            <label for="EMR_pr_IGD_P6_RespiratoryCH_titeratur">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Tidak Teratur </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-content">
                                      <div class="col-md-3">
                                        <label for="form_control_1">BB</label>
                                        <i style="font-size:12px"><b>Kg</b></i>
                                        <input type="text" id="EMR_pr_IGD_P6_beratbadan" name="EMR_pr_IGD_P6_beratbadan" value="" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                        <label for="form_control_1">TB</label>
                                        <i style="font-size:12px"><b>Cm</b></i>
                                        <input type="text" id="EMR_pr_IGD_P6_tinggibadan" name="EMR_pr_IGD_P6_tinggibadan" value="" class="form-control">
                                      </div>
                                      <div class="col-md-6">
                                        <span>Nilai BMI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><b><span id="EMR_pr_IGD_P6_Nilai_BMI">0</span></b></br>
                                        <span>Kategori BMI : </span><b><span id="EMR_pr_IGD_P6_Kategori_BMI"></span></b>
                                      </div>
                                      <?php
                                      if($Utahun < 1)
                                      {
                                        ?>
                                        <div class="col-md-6">
                                          <label for="form_control_1">Lingkar Kepala (Khusus Bayi)</label>
                                          <i style="font-size:12px"><b>Cm</b></i>
                                          <input type="text" id="EMR_pr_IGD_P6_lingkarkepala" name="EMR_pr_IGD_P6_lingkarkepala" value="" class="form-control">
                                        </div>
                                        <?php
                                      }
                                      ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <center>
                            <a type="button" class="btn green col-md-6" id="EMR_pr_IGD_P6_btnsimpan" style="width:50%">SIMPAN</a><br/><br/>
                          </center>
                        </div>

                        <div class="col-md-12">
                        <hr>
                        </div>
                        <div class="col-md-12">
                          <table class="table table-striped table-bordered table-hover order-column" id="sample_11">
                            <thead>
                              <tr>
                                <th class="col-md-2">
                                  <i class="fa fa-clock-o"></i> Jam </th>
                                  <th class="col-md-8">
                                    <i class="fa fa-heartbeat"></i> Evaluasi </th>
                                    <th class="col-md-2">
                                      <i class="fa fa-frank"></i> Oleh </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $cekisiOb = $this->db->query("select * from EMR_IGD_Observasi where ID_PEMERIKSAAN ='$cekidpemeriksaan'")->num_rows();
                                    if($cekisiOb == 0)
                                    {?>
                                      <tr>
                                        <td colspan="3"><center>Data Belum ada</center></td>
                                      </tr>
                                    <?php
                                    }
                                    else
                                    {
                                      $lineOb = $this->db->get("EMR_IGD_Observasi where ID_PEMERIKSAAN = '$cekidpemeriksaan'")->num_rows();
                                      $showOb = $this->db->get("EMR_IGD_Observasi where ID_PEMERIKSAAN = '$cekidpemeriksaan' order by JAM desc");
                                      for($showOb_ = 0; $showOb_ < $lineOb; $showOb_++)
                                      {?>
                                        <tr>
                                          <td><?php echo $showOb->row($showOb_)->JAM;?></td>
                                          <td><?php echo $showOb->row($showOb_)->OBSERVASI;?></td>
                                          <td><?php echo $showOb->row($showOb_)->OLEH;?></td>
                                        </tr>
                                      <?php
                                      }
                                    }?>
                                    <input type="hidden" id="EMR_pr_IGD_InputcekisiOb" value="<?=$cekisiOb +1;?>">
                                    <input type="hidden" id="EMR_pr_IGD_observasiOb">
                                    <input type="hidden" id="EMR_pr_IGD_olehOb" value="<?=$username;?>">
                                  </tbody>
                                </table>

                              </div>
                      </div>
                    </div>
                  </ceter>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-3">
        <!-- BEGIN TAB PORTLET-->
        <div class="portlet light portlet-fit bordered">
          <div class="row portlet-body">
            <div class="col-sm-12">
              <input type="hidden" id="EMR_pr_IGD_STATUSHALAMAN" value="perawat">
              <div class="row" id="EMR_pr_IGD_stepPerawat">
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
            </div>
          </div>
        </div>

        <div id="EMR_pr_IGD_subMenu">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Sub Menu IGD Perawat :</b></span>
            </div>
            <input type="hidden" id="EMR_pr_IGD_statverHal" name="EMR_pr_IGD_statverHal" value="P1">
            <div class="row portlet-body" id="">
              <div>
                <a type="button" class="btn white col-md-12" id="EMR_pr_IGD_P0_btntriase" style="width:100%" onClick="window.location.reload()">Triase</a><br/><br/>
              </div>
              <div class="" id="EMR_pr_IGD_P1_divBtnMenu">
                <a type="button" class="btn white col-md-12" id="EMR_pr_IGD_P1_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> TTV</a><br/><br/>
              </div>
              <div class="collapse" id="EMR_pr_IGD_P1_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_pr_IGD_P1_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> TTV</a><br/><br/>
              </div>
              <div class="" id="EMR_pr_IGD_P2_divBtnMenu">
                <a type="button" class="btn green col-md-12" id="EMR_pr_IGD_P2_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> PENGKAJIAN DATA</a><br/><br/>
              </div>
              <div class="collapse" id="EMR_pr_IGD_P2_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_pr_IGD_P2_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> PENGKAJIAN DATA</a><br/><br/>
              </div>
              <div class="" id="EMR_pr_IGD_P3_divBtnMenu">
                <a type="button" class="btn green col-md-12" id="EMR_pr_IGD_P3_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> ASESMEN RISIKO</a><br/><br/>
              </div>
              <div class="collapse" id="EMR_pr_IGD_P3_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_pr_IGD_P3_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> ASESMEN RISIKO</a><br/><br/>
              </div>
              <div class="" id="EMR_pr_IGD_P4_divBtnMenu">
                <a type="button" class="btn green col-md-12" id="EMR_pr_IGD_P4_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> DIAGNOSIS DAN TINDKAN</a><br/><br/>
              </div>
              <div class="collapse" id="EMR_pr_IGD_P4_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_pr_IGD_P4_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> DIAGNOSIS DAN TINDKAN</a><br/><br/>
              </div>
              <div class="" id="EMR_pr_IGD_P5_divBtnMenu">
                <a type="button" class="btn green col-md-12" id="EMR_pr_IGD_P5_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> PENATALAKSANAAN</a><br/><br/>
              </div>
              <div class="collapse" id="EMR_pr_IGD_P5_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_pr_IGD_P5_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> PENATALAKSANAAN</a><br/><br/>
              </div>
              <div class="" id="EMR_pr_IGD_P6_divBtnMenu">
                <a type="button" class="btn green col-md-12" id="EMR_pr_IGD_P6_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Observasi</a>
              </div>
              <div class="collapse" id="EMR_pr_IGD_P6_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_pr_IGD_P6_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> Observasi</a>
              </div>
            </div>
          </div>
        </div>

        <div id="modalLompatMenuIGD" class="modal fade modalInput" tabindex="-1" data-backdrop="static" data-width="40%" data-keyboard="false" style="width:40%">
          <div class="modal-content">
            <div class="modal-header bg-blue bg-font-blue">
                <h4 class="blue modal-title"><center><b>Data Berhasil Disimpan</b></center></h4>
            </div>
            <div class="modal-body">
              <h4> Terimakasih Atas Kerjasama Anda </H4>
            </div>
            <div class="modal-footer">
              <center>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                  <a type="button" class="btn blue" data-dismiss="modal" style="width:100%" onClick="window.location.reload()">OK</a>
                </div>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
