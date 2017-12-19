
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <?php
  if($norm == 'UNKNOWN')
  {
    $cekidpemeriksaan = $ID_PEMERIKSAAN;
    $Utahun = $this->db->query("select * from EMR_IGD_MRX where ID_PEMERIKSAAN = '$ID_PEMERIKSAAN'")->row()->TTL_ALIAS;
  }
  else
  {
    $cekidpemeriksaan = $this->db->get("EMR_UTAMA_PERIKSA where NOREG ='$noreg'")->row()->ID_PEMERIKSAAN;
  }?>
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content" style="background-color:#BFBFBF;">
    <!--<input type="text" class="form-control collapse"  id="EMR_dr_IGD_NamaDokter" name="EMR_IGD_NamaDokter" value="<?php echo $namadokter; ?>" class="form-control">
    <input type="text" class="form-control collapse"  id="EMR_dr_IGD_KodeDokter" name="EMR_IGD_KodeDokter" value="<?php echo $kodedokter; ?>" class="form-control">-->
    <div class="row">
      <div class="col-md-9">
        <div class="portlet light bordered">
          <div class="caption font-red-sunglo">
            <center><span id="EMR_dr_IGD_judulHalaman" class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">ASESMEN KEDOKTERAN PASIEN IGD</span></center>
          </div>
        </div>
        <?php

        $data = $this->db->query("select * from EMR_IGD_TRIASE where ID_PEMERIKSAAN = '$cekidpemeriksaan'")->num_rows();

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
          <input type="hidden" class="form-control" id="EMR_dr_IGD_ID2" name="EMR_dr_IGD_ID2" value="<?=$cekin->Triase;?>">
          <input type="hidden" class="form-control" id="EMR_dr_IGD_MENUMU1" name="EMR_dr_IGD_MENUMU1" value="<?=$cekinMenu->MenuD_1;?>">
          <input type="hidden" class="form-control" id="EMR_dr_IGD_MENUMU2" name="EMR_dr_IGD_MENUMU2" value="<?=$cekinMenu->MenuD_2;?>">
          <input type="hidden" class="form-control" id="EMR_dr_IGD_MENUMU3" name="EMR_dr_IGD_MENUMU3" value="<?=$cekinMenu->MenuD_3;?>">
          <input type="hidden" class="form-control" id="EMR_dr_IGD_MENUMU4" name="EMR_dr_IGD_MENUMU4" value="<?=$cekinMenu->MenuD_4;?>">
          <input type="hidden" class="form-control" id="EMR_dr_IGD_MENUMU5" name="EMR_dr_IGD_MENUMU5" value="<?=$cekinMenu->MenuD_5;?>">
          <input type="hidden" class="form-control" id="EMR_dr_IGD_MENUMU6" name="EMR_dr_IGD_MENUMU6" value="<?=$cekinMenu->MenuD_6;?>">
          <input type="hidden" class="form-control" id="EMR_dr_IGD_ID" name="EMR_dr_IGD_ID" value="<?=$data;?>">
          <?php
        }
        else
        {?>
          <input type="hidden" class="form-control"  id="EMR_dr_IGD_ID" name="EMR_dr_IGD_ID" value="<?=$data;?>">
        <?php
        }
        ?>
        <script type="text/javascript">
        $(document).ready(function(){
          if(document.getElementById('EMR_dr_IGD_ID').value == 0)
          {
            $('#modalIGDtriase').modal('show');
          }

          if(document.getElementById('EMR_dr_IGD_MENUMU1').value == "DONE")
          {
            document.getElementById('EMR_dr_IGD_P1_Halaman').classList.add('collapse');
            if(document.getElementById('EMR_dr_IGD_MENUMU2').value == "DONE")
            {
              document.getElementById('EMR_dr_IGD_P2_Halaman').classList.add('collapse');
              if(document.getElementById('EMR_dr_IGD_MENUMU3').value == "DONE")
              {
                document.getElementById('EMR_dr_IGD_P3_Halaman').classList.add('collapse');
                if(document.getElementById('EMR_dr_IGD_MENUMU4').value == "DONE")
                {
                  document.getElementById('EMR_dr_IGD_P4_Halaman').classList.add('collapse');
                  if(document.getElementById('EMR_dr_IGD_MENUMU5').value == "DONE")
                  {
                    document.getElementById('EMR_dr_IGD_P5_Halaman').classList.add('collapse');
                    if(document.getElementById('EMR_dr_IGD_MENUMU6').value == "DONE")
                    {
                      document.getElementById('EMR_dr_IGD_P6_Halaman').classList.add('collapse');
                    }
                    else
                    {
                      document.getElementById('EMR_dr_IGD_P6_Halaman').classList.remove('collapse');
                      document.getElementById('EMR_dr_IGD_statverHal').value = 'P6';
                      document.getElementById('EMR_dr_IGD_P6_btnmenu').classList.remove('green');
                      document.getElementById('EMR_dr_IGD_P6_btnmenu').classList.add('white');
                    }
                  }
                  else
                  {
                    document.getElementById('EMR_dr_IGD_P5_Halaman').classList.remove('collapse');
                    document.getElementById('EMR_dr_IGD_statverHal').value = 'P5';
                    document.getElementById('EMR_dr_IGD_P5_btnmenu').classList.remove('green');
                    document.getElementById('EMR_dr_IGD_P5_btnmenu').classList.add('white');
                  }
                }
                else
                {
                  document.getElementById('EMR_dr_IGD_P4_Halaman').classList.remove('collapse');
                  document.getElementById('EMR_dr_IGD_statverHal').value = 'P4';
                  document.getElementById('EMR_dr_IGD_P4_btnmenu').classList.remove('green');
                  document.getElementById('EMR_dr_IGD_P4_btnmenu').classList.add('white');
                }
              }
              else
              {
                document.getElementById('EMR_dr_IGD_P3_Halaman').classList.remove('collapse');
                document.getElementById('EMR_dr_IGD_statverHal').value = 'P3';
                document.getElementById('EMR_dr_IGD_P3_btnmenu').classList.remove('green');
                document.getElementById('EMR_dr_IGD_P3_btnmenu').classList.add('white');
              }
            }
            else
            {
              document.getElementById('EMR_dr_IGD_P2_Halaman').classList.remove('collapse');
              document.getElementById('EMR_dr_IGD_statverHal').value = 'P2';
              document.getElementById('EMR_dr_IGD_P2_btnmenu').classList.remove('green');
              document.getElementById('EMR_dr_IGD_P2_btnmenu').classList.add('white');
            }
          }
          else
          {
            document.getElementById('EMR_dr_IGD_P1_Halaman').classList.remove('collapse');
            document.getElementById('EMR_dr_IGD_statverHal').value = 'P1';
            document.getElementById('EMR_dr_IGD_P1_btnmenu').classList.remove('green');
            document.getElementById('EMR_dr_IGD_P1_btnmenu').classList.add('white');
          }

          if(document.getElementById('EMR_dr_IGD_ID2').value == "Hijau")
          {
            $('#EMR_dr_IGD_P0_btntriase').html('Triase Hijau');
            $('#EMR_dr_IGD_P0_btntriase').toggleClass('white');
            $('#EMR_dr_IGD_P0_btntriase').toggleClass('bg-green-jungle bg-font-green-jungle');
          }
          if(document.getElementById('EMR_dr_IGD_ID2').value == "Kuning")
          {
            $('#EMR_dr_IGD_P0_btntriase').html('Triase Kuning');
            $('#EMR_dr_IGD_P0_btntriase').toggleClass('white');
            $('#EMR_dr_IGD_P0_btntriase').toggleClass('bg-yellow-crusta bg-font-yellow-crusta');
          }
          if(document.getElementById('EMR_dr_IGD_ID2').value == "Merah")
          {
            $('#EMR_dr_IGD_P0_btntriase').html('Triase Merah');
            $('#EMR_dr_IGD_P0_btntriase').toggleClass('white');
            $('#EMR_dr_IGD_P0_btntriase').toggleClass('bg-red bg-font-red');
          }
          if(document.getElementById('EMR_dr_IGD_ID2').value == "Hitam")
          {
            $('#EMR_dr_IGD_P0_btntriase').html('Triase Hitam');
            $('#EMR_dr_IGD_P0_btntriase').toggleClass('white');
            $('#EMR_dr_IGD_P0_btntriase').toggleClass('bg-grey-gallery bg-font-yellow-casablanca');
          }
        })
        </script>
        <input type="hidden" class="form-control" id="EMR_dr_IGD_NORM" name="EMR_dr_IGD_NORM" value="<?=$norm;?>">
        <input type="hidden" class="form-control" id="EMR_dr_IGD_NOREG" name="EMR_dr_IGD_NOREG" value="<?=$noreg;?>">
        <input type="hidden" class="form-control" id="EMR_dr_IGD_NORM_2" name="EMR_dr_IGD_NORM_2" value="<?=trim($norm);?>">
        <input type="hidden" class="form-control" id="EMR_dr_IGD_NOREG_2" name="EMR_dr_IGD_NOREG_2" value="<?=trim($noreg);?>">
        <input type="hidden" class="form-control" id="EMR_dr_IGD_Umur" name="EMR_dr_IGD_Umur" value="<?=$Utahun;?>">
        <input type="hidden" class="form-control" id="EMR_dr_IGD_idper" name="EMR_dr_IGD_idper" value="<?=$cekidpemeriksaan;?>">

        <!--<input type="hidden" id="EMR_dr_IGD_NORM_2" name="EMR_dr_IGD_NORM_2" value="<?php echo $norm?>">
        <input type="hidden" id="EMR_dr_IGD_NOREG_2" name="EMR_dr_IGD_NOREG_2" value="<?php echo $noreg?>">
        <input type="hidden" id="EMR_dr_IGD_NOREG_Tampung_2" name="EMR_dr_IGD_NOREG_Tampung_2" value="<?php echo $noreg2?>">-->
        <div class="collapse" id="EMR_dr_IGD_P1_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_dr_IGD_P1_btnHalaman1" class="btn white col-md-9">1. Keluhan utama</button>
              <button type="button" id="EMR_dr_IGD_P1_btnHalaman2" class="btn green col-md-1">2</button>
              <button type="button" id="EMR_dr_IGD_P1_btnHalaman3" class="btn green col-md-1">3</button>
              <button type="button" id="EMR_dr_IGD_P1_btnHalaman4" class="btn green col-md-1">4</button>
              <!--<button type="button" id="EMR_dr_IGD_P1_btnHalaman4" class="btn green col-md-1">5</button>-->
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="" id="EMR_dr_IGD_P1_Halaman1">
                    <div class="col-md-6">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                          <span><b>Keluhan Utama</b></span>
                        </div>
                        <div class="portlet-body">
                          <!--<center>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="row md-checkbox-inline">
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_dr_IGD_P1_Keluhanutama1" name="EMR_dr_IGD_P1_Keluhanutama1" value="Nyeri" class="md-check">
                                  <label for="EMR_dr_IGD_P1_Keluhanutama1">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Nyeri </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_dr_IGD_P1_Keluhanutama2" name="EMR_dr_IGD_P1_Keluhanutama2" value="Mual" class="md-check">
                                  <label for="EMR_dr_IGD_P1_Keluhanutama2">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Mual </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_dr_IGD_P1_Keluhanutama3" name="EMR_dr_IGD_P1_Keluhanutama3" value="Muntah" class="md-check">
                                  <label for="EMR_dr_IGD_P1_Keluhanutama3">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Muntah</label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_dr_IGD_P1_Keluhanutama4" name="EMR_dr_IGD_P1_Keluhanutama4" value="Sesak nafas" class="md-check">
                                  <label for="EMR_dr_IGD_P1_Keluhanutama4">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Sesak nafas </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_dr_IGD_P1_Keluhanutama5" name="EMR_dr_IGD_P1_Keluhanutama5" value="Diare" class="md-check">
                                  <label for="EMR_dr_IGD_P1_Keluhanutama5">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Diare </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_dr_IGD_P1_Keluhanutama6" name="EMR_dr_IGD_P1_Keluhanutama6" value="Pingsan" class="md-check">
                                  <label for="EMR_dr_IGD_P1_Keluhanutama6">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Pingsan </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_dr_IGD_P1_Keluhanutama9" name="EMR_dr_IGD_P1_Keluhanutama9" value="Luka " class="md-check">
                                  <label for="EMR_dr_IGD_P1_Keluhanutama9">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Luka </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_dr_IGD_P1_Keluhanutama7" name="EMR_dr_IGD_P1_Keluhanutama7" value="Pusing " class="md-check">
                                  <label for="EMR_dr_IGD_P1_Keluhanutama7">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Pusing </label>
                                </div>
                                <div class="col-md-12">
                                  <span class="control-label">Lain lain : </span>
                                  <input type="text" class="form-control" id="EMR_dr_IGD_P1_Keluhanutama8" name="EMR_dr_IGD_P1_Keluhanutama8" value="" placeholder="Lain lain">
                                </div>
                              </div>
                            </div>
                          </div>
                        </center>-->
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <textarea class="form-control" id="EMR_dr_IGD_P1_KeluhanUtama" name="EMR_dr_IGD_P1_KeluhanUtama" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                            <label for="form_control_1">Keluhan Utama</label>
                          </div>
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
                            <textarea class="form-control" id="EMR_dr_IGD_P1_RiwayatPenyakitSekarang" name="EMR_dr_IGD_P1_RiwayatPenyakitSekarang" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                            <label for="form_control_1">Riwayat Penyakit Sekarang</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="collapse" id="EMR_dr_IGD_P1_Halaman2">
                    <div class="col-md-6">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-body row">
                          <div class="col-md-6">
                            <br>
                            <span>Kualitas Kesadaran : </span>
                            <select class="bs-select form-control" name="EMR_dr_IGD_P1_Kesadaran" id="EMR_dr_IGD_P1_Kesadaran" data-live-search="true" data-size="8">
                              <option value='' disabled></option>
                              <option value='Comma'>Comma</option>
                              <option value='Soporo comma'>Soporo comma</option>
                              <option value='Delirium'>Delirium</option>
                              <option value='Somnolen'>Somnolen</option>
                              <option value='Apatis'>Apatis</option>
                              <option value='Compos Mentis'>Compos Mentis</option>
                              <option value='Tidak Dapat Di Identifikasi'>Tidak dapat di identifikasi</option>
                            </select>
                          </div>
                          <div class="col-md-6">
                            <br>
                            <span class="control-label">SpO2 % : </span>
                            <input type="text" id="EMR_dr_IGD_P1_SpO2" name="EMR_dr_IGD_P1_SpO2" class="form-control">
                          </div>
                          <div class="col-md-12">
                            <br>
                            <span class="control-label">Kuantitas Kesadaran : </span>
                          </div>
                          <div class="col-md-4">
                            <span class="control-label">E : </span>
                            <input type="text" id="EMR_dr_IGD_P1_GCSe" name="EMR_dr_IGD_P1_GCSe" value="4" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <span class="control-label">V : </span>
                            <input type="text" id="EMR_dr_IGD_P1_GCSv" name="EMR_dr_IGD_P1_GCSv" value="5" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <span class="control-label">M : </span>
                            <input type="text" id="EMR_dr_IGD_P1_GCSm" name="EMR_dr_IGD_P1_GCSm" value="6" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                    $data_TTV_dok1 = $this->db->query("select * from EMR_HASIL_TAMBAHAN_DOKTER where ID_PEMERIKSAAN ='$cekidpemeriksaan'")->num_rows();
                    if($data_TTV_dok1 == 0)
                    {
                      $D1_ttv_1 = '';
                      $D1_ttv_2 = '';
                      $D1_ttv_3 = '';
                      $D1_ttv_4 = '';
                      $D1_ttv_5 = '';
                      $D1_ttv_6 = '';
                      $D1_ttv_7 = '';
                      $D1_ttv_8 = '';
                      $D1_ttv_9 = '';
                    }
                    else
                    {
                      $data_TTV_dok2 = $this->db->query("select * from EMR_HASIL_PERIKSA_UMUM where ID_PEMERIKSAAN ='$cekidpemeriksaan'");
                      $D1_ttv_1 = $data_TTV_dok2->row()->SISTOLIK;
                      $D1_ttv_2 = $data_TTV_dok2->row()->DIASTOLIK;
                      $D1_ttv_3 = $data_TTV_dok2->row()->SUHU_TUBUH;
                      $D1_ttv_4 = $data_TTV_dok2->row()->NADI_1;
                      if( $data_TTV_dok2->row()->NADI_2 == "Reguler")
                      {
                        $D1_ttv_5 = 'checked';
                        $D1_ttv_6 = '';
                      }
                      else
                      {
                        $D1_ttv_5 = '';
                        $D1_ttv_6 = 'checked';
                      }
                      $D1_ttv_7 = $data_TTV_dok2->row()->RESPIRATORY_1;
                      if( $data_TTV_dok2->row()->RESPIRATORY_2 == "Teratur")
                      {
                        $D1_ttv_8 = 'checked';
                        $D1_ttv_9 = '';
                      }
                      else
                      {
                        $D1_ttv_8 = '';
                        $D1_ttv_9 = 'checked';
                      }
                    }
                    ?>
                    <div class="col-md-6">
                      <div class="portlet light bordered">
                        <div class="portlet-body">
                          <div class="tab-content">
                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                              <div class="tab-content">
                                <div class="col-md-4">
                                  <label for="form_control_1">Sistolik&nbsp;</label>
                                  <i style="font-size:12px"><b>mmHg</b></i>
                                  <input type="text" id="EMR_dr_IGD_P1_TDSistolik" name="EMR_dr_IGD_P1_TDSistolik" value="<?=$D1_ttv_1;?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                  <label for="form_control_1">Diastolik</label>
                                  <i style="font-size:12px"><b>mmHg</b></i>
                                  <input type="text" id="EMR_dr_IGD_P1_TDDiastolik" name="EMR_dr_IGD_P1_TDDiastolik" value="<?=$D1_ttv_2;?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                  <label for="form_control_1">Suhu tubuh</label>
                                  <i style="font-size:12px"><b>&deg;C</b></i>
                                  <input type="text" id="EMR_dr_IGD_P1_suhutubuh" name="EMR_dr_IGD_P1_suhutubuh" value="<?=$D1_ttv_3;?>" class="form-control">
                                </div>
                              </div>
                              <hr>
                              <div class="tab-content">
                                <div class="col-md-6">
                                  <br>
                                  <label for="form_control_1">N</label>
                                  <i style="font-size:12px"><b>x/mnt</b></i>
                                  <input type="text" id="EMR_dr_IGD_P1_nadi" name="EMR_dr_IGD_P1_nadi" value="<?=$D1_ttv_4;?>" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <br>
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_NadiCH_reguler" name="EMR_dr_IGD_P1_NadiCH" class="md-radiobtn" value="Reguler" <?=$D1_ttv_5;?>>
                                      <label for="EMR_dr_IGD_P1_NadiCH_reguler">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Reguler </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_NadiCH_irreguler" name="EMR_dr_IGD_P1_NadiCH" class="md-radiobtn" value="Irreguler" <?=$D1_ttv_6;?>>
                                      <label for="EMR_dr_IGD_P1_NadiCH_irreguler">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Irreguler </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12"></div>
                              <div class="tab-content">
                                <div class="col-md-6">
                                  <br>
                                  <label for="form_control_1">Rr</label>
                                  <i style="font-size:12px"><b>x/mnt</b></i>
                                  <input type="text" id="EMR_dr_IGD_P1_respiratory" name="EMR_dr_IGD_P1_respiratory" value="<?=$D1_ttv_7;?>" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <br>
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_RespiratoryCH_teratur" name="EMR_dr_IGD_P1_RespiratoryCH" class="md-radiobtn" value="Teratur" <?=$D1_ttv_8;?>>
                                      <label for="EMR_dr_IGD_P1_RespiratoryCH_teratur">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Teratur </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_RespiratoryCH_titeratur" name="EMR_dr_IGD_P1_RespiratoryCH" class="md-radiobtn" value="Tidak Teratur" <?=$D1_ttv_9;?>>
                                      <label for="EMR_dr_IGD_P1_RespiratoryCH_titeratur">
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
                                    <input type="text" id="EMR_dr_IGD_P1_lingkarkepala" name="EMR_dr_IGD_P1_lingkarkepala" value="<?=$D1_ttv_14;?>" class="form-control">
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
                    <table class="col-md-12">
                      <tr>
                        <td class="col-md-3"></td>
                        <td class="col-md-3"><span><center>Kanan</center></span></td>
                        <td class="col-md-3"><span><center>Kiri</center></span></td>
                      </tr>
                      <tr>
                        <td class="col-md-3"><span>Pupil </span><span id="EMR_dr_IGD_P1_TTVpupilstat">Isokor</span></td>
                        <td class="col-md-3">
                          <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                              <input type="text" id="EMR_dr_IGD_P1_TTVpupilKanan" name="EMR_dr_IGD_P1_TTVpupilKanan" value="3" class="form-control" >
                              <label for="form_control_1"></label>
                              <span class="help-block">Masukkan nilai</span>
                              <i style="font-size:12px"><b>mm</b></i>
                            </div>
                          </div>
                        </td>
                        <td class="col-md-3">
                          <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                              <input type="text" id="EMR_dr_IGD_P1_TTVpupilKiri" name="EMR_dr_IGD_P1_TTVpupilKiri" value="3" class="form-control" >
                              <label for="form_control_1"></label>
                              <span class="help-block">Masukkan nilai</span>
                              <i style="font-size:12px"><b>mm</b></i>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-md-3"><span>Cahaya</span></td>
                        <td class="col-md-3"><button type="button" id="EMR_dr_IGD_P1_TTVbtnCahayaKanan" name="EMR_dr_IGD_P1_TTVbtnCahayaKanan" class="btn green col-md-12" value="+"><b> + </b></button></td>
                        <td class="col-md-3"><button type="button" id="EMR_dr_IGD_P1_TTVbtnCahayaKiri" name="EMR_dr_IGD_P1_TTVbtnCahayaKiri" class="btn green col-md-12" value="+"><b> + </b></button></td>
                      </tr>
                      <tr>
                        <td class="col-md-3"><span>Lain - lain</span></td>
                        <td colspan="2" class="col-md-6">
                          <input type="text" class="form-control" id="EMR_dr_IGD_P1_TTVlain2" name="EMR_dr_IGD_P1_TTVlain2" value="" placeholder="Lain lain">
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="collapse" id="EMR_dr_IGD_P1_Halaman3">
                    <div class="col-md-12">
                      <div class="row md-checkbox-inline">
                        <div class="col-md-12 md-checkbox">
                          <div class="row">
                            <input type="checkbox" id="EMR_dr_IGD_P1_PeFi_2_CK" name="EMR_dr_IGD_P1_PeFi_2_CK" value="PFKepala" class="md-check">
                            <label for="EMR_dr_IGD_P1_PeFi_2_CK">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Pemeriksaan Fisik Kepala </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_PeFi_2B">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Kepala/Leher</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <table class="col-md-6">
                                  <tr>
                                    <td class="col-md-3"><span>Anemis</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_dr_IGD_P1_btnAnemis" name="EMR_dr_IGD_P1_btnAnemis" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Ikterus</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_dr_IGD_P1_btnIkterus" name="EMR_dr_IGD_P1_btnIkterus" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Cyanosis</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_dr_IGD_P1_btnCyanosis" name="EMR_dr_IGD_P1_btnCyanosis" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Dipsneo</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_dr_IGD_P1_btnDipsneo" name="EMR_dr_IGD_P1_btnDipsneo" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-3"></td>
                                  </tr>
                                  <?php
                                  if($Utahun < 1.5)
                                  { ?>
                                  <tr>
                                    <td class="col-md-3"><span>UUK</span></td>
                                    <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnUUK" name="EMR_dr_IGD_P1_btnUUK" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>UUB</span></td>
                                    <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnUUB" name="EMR_dr_IGD_P1_btnUUB" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <?php } ?>
                                </table>
                                <table class="col-md-6">
                                  <tr>
                                    <td class="col-md-3"></td>
                                    <td class="col-md-3"><span><center>Kanan</center></span></td>
                                    <td class="col-md-3"><span><center>Kiri</center></span></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Pupil </span><span id="EMR_dr_IGD_P1_pupilstat">Isokor</span></td>
                                    <td class="col-md-3">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_dr_IGD_P1_pupilKanan" name="EMR_dr_IGD_P1_pupilKanan" value="3" class="form-control" >
                                          <label for="form_control_1"></label>
                                          <span class="help-block">Masukkan nilai</span>
                                          <i style="font-size:12px"><b>mm</b></i>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="col-md-3">
                                      <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_dr_IGD_P1_pupilKiri" name="EMR_dr_IGD_P1_pupilKiri" value="3" class="form-control" >
                                          <label for="form_control_1"></label>
                                          <span class="help-block">Masukkan nilai</span>
                                          <i style="font-size:12px"><b>mm</b></i>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Cahaya</span></td>
                                    <td class="col-md-3"><button type="button" id="EMR_dr_IGD_P1_btnCahayaKanan" name="EMR_dr_IGD_P1_btnCahayaKanan" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    <td class="col-md-3"><button type="button" id="EMR_dr_IGD_P1_btnCahayaKiri" name="EMR_dr_IGD_P1_btnCahayaKiri" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-3"><span>Lain - lain</span></td>
                                    <td colspan="2" class="col-md-6">
                                      <input type="text" class="form-control" id="EMR_dr_IGD_P1_KepalaLeher" name="EMR_dr_IGD_P1_KepalaLeher" value="" placeholder="Lain lain">
                                    </td>
                                  </tr>
                                </table>
                                </br>
                                </br>
                                </br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row md-checkbox-inline">
                        <div class="col-md-12 md-checkbox">
                          <div class="row">
                            <input type="checkbox" id="EMR_dr_IGD_P1_PeFi_3_CK" name="EMR_dr_IGD_P1_PeFi_3_CK" value="PFThorax" class="md-check">
                            <label for="EMR_dr_IGD_P1_PeFi_3_CK">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Pemeriksaan Fisik Thorax </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_PeFi_3B">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Thorax ( Cor )</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <input type="hidden" id="EMR_dr_IGD_P1_CorStatus" name="EMR_dr_IGD_P1_CorStatus" value="Tidak" class="form-control">
                                <div class="row md-radio-inline">
                                  <div class="col-md-12 md-radio">
                                    <input type="radio" id="EMR_dr_IGD_P1_Cor1" name="EMR_dr_IGD_P1_CorSplit1" value="S1, S2, Tunggal" class="md-check" checked="true">
                                    <label for="EMR_dr_IGD_P1_Cor1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> S1, S2, Tunggal</label>
                                  </div>
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-5 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_dr_IGD_P1_Cor2" name="EMR_dr_IGD_P1_Cor2" value="Split S1" class="md-check">
                                        <label for="EMR_dr_IGD_P1_Cor2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Split S1 </label>
                                      </div>
                                    </div>
                                    <div class="col-md-5 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_dr_IGD_P1_Cor3" name="EMR_dr_IGD_P1_Cor3" value="Split S2" class="md-check">
                                        <label for="EMR_dr_IGD_P1_Cor3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Split S2 </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="coresplitshow" class="row md-radio-inline">
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_dr_IGD_P1_Cor4" name="EMR_dr_IGD_P1_CorReg" value="Irregular" class="md-check">
                                    <label for="EMR_dr_IGD_P1_Cor4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Irregular </label>
                                  </div>
                                  <div class="col-md-5 md-radio">
                                    <input type="radio" id="EMR_dr_IGD_P1_Cor5" name="EMR_dr_IGD_P1_CorReg" value="Regular" class="md-check" checked="true">
                                    <label for="EMR_dr_IGD_P1_Cor5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Regular </label>
                                  </div>
                                </div>
                                <button type="button" id="EMR_dr_IGD_P1_btnMurmur" name="EMR_dr_IGD_P1_btnMurmur" class="btn yellow col-md-5" value="-"><b> Murmur - </b></button>
                                <input type="text" id="EMR_dr_IGD_P1_btnMurmurText" name="EMR_dr_IGD_P1_btnMurmurText" value="" class="form-control collapse">
                                <button type="button" id="EMR_dr_IGD_P1_btnGallop" name="EMR_dr_IGD_P1_btnGallop" class="btn yellow col-md-5" value="-"><b> Gallop - </b></button>
                              </div>
                            </div>
                          </div>
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Thorax ( Pulmo )</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-4">
                                  <span>Vesikuler</span></br>
                                  <table>
                                    <tr>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnVesikuler1" name="EMR_dr_IGD_P1_btnVesikuler1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnVesikuler2" name="EMR_dr_IGD_P1_btnVesikuler2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    </tr>
                                    <tr>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnVesikuler3" name="EMR_dr_IGD_P1_btnVesikuler3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnVesikuler4" name="EMR_dr_IGD_P1_btnVesikuler4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    </tr>
                                    <tr>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnVesikuler5" name="EMR_dr_IGD_P1_btnVesikuler5" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnVesikuler6" name="EMR_dr_IGD_P1_btnVesikuler6" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    </tr>
                                  </table>
                                </div>
                                <div class="col-md-4">
                                  <span>Rhonki</span></br>
                                  <table>
                                    <tr>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnRhonki1" name="EMR_dr_IGD_P1_btnRhonki1" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnRhonki2" name="EMR_dr_IGD_P1_btnRhonki2" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    </tr>
                                    <tr>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnRhonki3" name="EMR_dr_IGD_P1_btnRhonki3" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnRhonki4" name="EMR_dr_IGD_P1_btnRhonki4" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    </tr>
                                    <tr>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnRhonki5" name="EMR_dr_IGD_P1_btnRhonki5" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnRhonki6" name="EMR_dr_IGD_P1_btnRhonki6" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    </tr>
                                  </table>
                                </div>
                                <div class="col-md-4">
                                  <span>Wheezing</span></br>
                                  <table>
                                    <tr>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnWheezing1" name="EMR_dr_IGD_P1_btnWheezing1" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnWheezing2" name="EMR_dr_IGD_P1_btnWheezing2" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    </tr>
                                    <tr>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnWheezing3" name="EMR_dr_IGD_P1_btnWheezing3" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnWheezing4" name="EMR_dr_IGD_P1_btnWheezing4" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    </tr>
                                    <tr>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnWheezing5" name="EMR_dr_IGD_P1_btnWheezing5" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                      <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnWheezing6" name="EMR_dr_IGD_P1_btnWheezing6" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    </tr>
                                  </table>
                                </div>
                                </br>
                                <div class="col-md-6">
                                  <span class="control-label">Retraksi Intercostal : </span></br>
                                  <button type="button" id="EMR_dr_IGD_P1_btnretraksiKanan" name="EMR_dr_IGD_P1_btnretraksiKanan" class="btn yellow col-md-6" value="-"><b>Kanan - </b></button>
                                  <button type="button" id="EMR_dr_IGD_P1_btnretraksiKiri" name="EMR_dr_IGD_P1_btnretraksiKiri" class="btn yellow col-md-6" value="-"><b>Kiri - </b></button>
                                </div>
                                <div class="col-md-6">
                                  <span class="control-label">Lain - lain : </span>
                                  <input type="text" id="EMR_dr_IGD_P1_ThoraxCorLain" name="EMR_dr_IGD_P1_ThoraxCorLain" value="" class="form-control" placeholder="Lain lain">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row md-checkbox-inline">
                        <div class="col-md-12 md-checkbox">
                          <div class="row">
                            <input type="checkbox" id="EMR_dr_IGD_P1_PeFi_5_CK" name="EMR_dr_IGD_P1_PeFi_5_CK" value="PFAbdomen" class="md-check">
                            <label for="EMR_dr_IGD_P1_PeFi_5_CK">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Pemeriksaan Fisik Abdomen </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_PeFi_5B">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Abdomen</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-12">
                                  <div class="col-md-4">
                                    <span>Bising Usus :</span>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_dr_IGD_P1_btnAbdomen1A" name="EMR_dr_IGD_P1_btnAbdomen1" class="md-radiobtn" value="Normal" checked="true">
                                        <label for="EMR_dr_IGD_P1_btnAbdomen1A">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Normal </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_dr_IGD_P1_btnAbdomen1B" name="EMR_dr_IGD_P1_btnAbdomen1" class="md-radiobtn" value="Meningkat">
                                        <label for="EMR_dr_IGD_P1_btnAbdomen1B">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Meningkat </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_dr_IGD_P1_btnAbdomen1C" name="EMR_dr_IGD_P1_btnAbdomen1" class="md-radiobtn" value="Menurun">
                                        <label for="EMR_dr_IGD_P1_btnAbdomen1C">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Menurun </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_dr_IGD_P1_btnAbdomen1D" name="EMR_dr_IGD_P1_btnAbdomen1" class="md-radiobtn" value="Lain-lain">
                                        <label for="EMR_dr_IGD_P1_btnAbdomen1D">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Lain - lain </label>
                                      </div>
                                      <input type="text" id="EMR_dr_IGD_P1_btnAbdomen1E" name="EMR_dr_IGD_P1_btnAbdomen1E" class="form-control collapse" placeholder="Lain lain">
                                      <input type="hidden" id="EMR_dr_IGD_P1_btnAbdomen1Estatus" name="EMR_dr_IGD_P1_btnAbdomen1Estatus" class="form-control" value="Tidak">
                                    </div>
                                  </div>
                                </div>
                                <div class="row col-md-6">
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Meteorimus</center></span>
                                    </div>
                                    <div class="col-md-5">
                                      <button type="button" id="EMR_dr_IGD_P1_btnAbdomen2" name="EMR_dr_IGD_P1_btnAbdomen2" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Flat</center></span>
                                    </div>
                                    <div class="col-md-5">
                                      <button type="button" id="EMR_dr_IGD_P1_btnAbdomen3" name="EMR_dr_IGD_P1_btnAbdomen3" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Soeple</center></span>
                                    </div>
                                    <div class="col-md-5">
                                      <button type="button" id="EMR_dr_IGD_P1_btnAbdomen4" name="EMR_dr_IGD_P1_btnAbdomen4" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Defans</center></span>
                                    </div>
                                    <div class="col-md-5">
                                      <button type="button" id="EMR_dr_IGD_P1_btnAbdomen5" name="EMR_dr_IGD_P1_btnAbdomen5" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Distensi</center></span>
                                    </div>
                                    <div class="col-md-5">
                                      <button type="button" id="EMR_dr_IGD_P1_btnAbdomen6" name="EMR_dr_IGD_P1_btnAbdomen6" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Hepar</center></span>
                                    </div>
                                    <div class="col-md-7">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P1_btnAbdomen7A" name="EMR_dr_IGD_P1_btnAbdomen7Radio" class="md-radiobtn" value="Tidak Teraba" checked="true">
                                          <label for="EMR_dr_IGD_P1_btnAbdomen7A">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Tidak Teraba </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P1_btnAbdomen7B" Bame="EMR_dr_IGD_P1_btnAbdomen7Radio" class="md-radiobtn" value="Teraba">
                                          <label for="EMR_dr_IGD_P1_btnAbdomen7B">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Teraba </label>
                                        </div>
                                        <input type="text" id="EMR_dr_IGD_P1_btnAbdomen7C" name="EMR_dr_IGD_P1_btnAbdomen7C" class="form-control collapse">
                                        <input type="hidden" id="EMR_dr_IGD_P1_btnAbdomen7Cstatus" name="EMR_dr_IGD_P1_btnAbdomen7Cstatus" class="form-control" value="Tidak">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="col-md-5">
                                      <span><center>Lien</center></span>
                                    </div>
                                    <div class="col-md-7">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P1_btnAbdomen8A" name="EMR_dr_IGD_P1_btnAbdomen8Radio" class="md-radiobtn" value="Tidak Teraba" checked="true">
                                          <label for="EMR_dr_IGD_P1_btnAbdomen8A">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Tidak Teraba </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P1_btnAbdomen8B" Bame="EMR_dr_IGD_P1_btnAbdomen8Radio" class="md-radiobtn" value="Teraba">
                                          <label for="EMR_dr_IGD_P1_btnAbdomen8B">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Teraba </label>
                                        </div>
                                        <input type="text" id="EMR_dr_IGD_P1_btnAbdomen8C" name="EMR_dr_IGD_P1_btnAbdomen8C" class="form-control collapse">
                                        <input type="hidden" id="EMR_dr_IGD_P1_btnAbdomen8Cstatus" name="EMR_dr_IGD_P1_btnAbdomen8Cstatus" class="form-control" value="Tidak">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="md-checkbox">
                                      <input type="checkbox" id="EMR_dr_IGD_P1_AbdomenLainChb" name="EMR_dr_IGD_P1_AbdomenLainChb" class="md-radiobtn" value="Abdomen Lain">
                                      <label for="EMR_dr_IGD_P1_AbdomenLainChb">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Lain - lain </label>
                                    </div>
                                  </div>
                                  <div id="EMR_dr_IGD_P1_AbdomenLain" class="collapse">
                                    <div class="col-md-12">
                                      <div class="col-md-5">
                                        <span><center>Shifting dullness</center></span>
                                      </div>
                                      <div class="col-md-5">
                                        <button type="button" id="EMR_dr_IGD_P1_btnAbdomen9" name="EMR_dr_IGD_P1_btnAbdomen9" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="col-md-5">
                                        <span><center>Nyeri Tekan Mc burney</center></span>
                                      </div>
                                      <div class="col-md-5">
                                        <button type="button" id="EMR_dr_IGD_P1_btnAbdomen10" name="EMR_dr_IGD_P1_btnAbdomen10" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="col-md-5">
                                        <span><center>Murphy Sign</center></span>
                                      </div>
                                      <div class="col-md-5">
                                        <button type="button" id="EMR_dr_IGD_P1_btnAbdomen11" name="EMR_dr_IGD_P1_btnAbdomen11" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="col-md-5">
                                          <span><center>Lain - lain</center></span>
                                        </div>
                                        <div class="col-md-7">
                                          <input type="text" id="EMR_dr_IGD_P1_btnAbdomenText1" name="EMR_dr_IGD_P1_btnAbdomenText1" class="form-control" placeholder="Lain lain">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </br>
                                </br>
                                </br>
                                </br>
                                <center>
                                  <div class="row col-md-8">
                                    <div class="col-md-5">
                                      <span><center>Nyeri Tekan</center></span>
                                    </div>
                                    <div class="row col-md-7">
                                      <div col-md-12>
                                        <div class="col-md-4">
                                          <button type="button" id="EMR_dr_IGD_P1_btnAbdomen12" name="EMR_dr_IGD_P1_btnAbdomen12" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                        </div>
                                        <div class="col-md-4">
                                          <button type="button" id="EMR_dr_IGD_P1_btnAbdomen13" name="EMR_dr_IGD_P1_btnAbdomen13" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                        </div>
                                        <div class="col-md-4">
                                          <button type="button" id="EMR_dr_IGD_P1_btnAbdomen14" name="EMR_dr_IGD_P1_btnAbdomen14" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                        </div>
                                      </div>
                                      <div col-md-12>
                                        <div class="col-md-4">
                                          <button type="button" id="EMR_dr_IGD_P1_btnAbdomen15" name="EMR_dr_IGD_P1_btnAbdomen15" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                        </div>
                                        <div class="col-md-4">
                                          <button type="button" id="EMR_dr_IGD_P1_btnAbdomen16" name="EMR_dr_IGD_P1_btnAbdomen16" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                        </div>
                                        <div class="col-md-4">
                                          <button type="button" id="EMR_dr_IGD_P1_btnAbdomen17" name="EMR_dr_IGD_P1_btnAbdomen17" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                        </div>
                                      </div>
                                      <div col-md-12>
                                        <div class="col-md-4">
                                          <button type="button" id="EMR_dr_IGD_P1_btnAbdomen18" name="EMR_dr_IGD_P1_btnAbdomen18" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                        </div>
                                        <div class="col-md-4">
                                          <button type="button" id="EMR_dr_IGD_P1_btnAbdomen19" name="EMR_dr_IGD_P1_btnAbdomen19" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                        </div>
                                        <div class="col-md-4">
                                          <button type="button" id="EMR_dr_IGD_P1_btnAbdomen20" name="EMR_dr_IGD_P1_btnAbdomen20" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </center>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row md-checkbox-inline">
                        <div class="col-md-12 md-checkbox">
                          <div class="row">
                            <input type="checkbox" id="EMR_dr_IGD_P1_PeFi_6_CK" name="EMR_dr_IGD_P1_PeFi_6_CK" value="PFekstremitas" class="md-check">
                            <label for="EMR_dr_IGD_P1_PeFi_6_CK">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Pemeriksaan Fisik Ekstremitas </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_PeFi_6B">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Ekstremitas</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <table class="col-md-4">
                                  <tr>
                                    <td colspan="2" class="col-md-12"><span><center>Akral Hangat</center></span></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnEkstremitas1" name="EMR_dr_IGD_P1_btnEkstremitas1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnEkstremitas2" name="EMR_dr_IGD_P1_btnEkstremitas2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnEkstremitas3" name="EMR_dr_IGD_P1_btnEkstremitas3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnEkstremitas4" name="EMR_dr_IGD_P1_btnEkstremitas4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                  </tr>
                                </table>
                                <table class="col-md-4">
                                  <tr>
                                    <td colspan="2" class="col-md-12"><span><center>Oedema</center></span></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnEkstremitas9" name="EMR_dr_IGD_P1_btnEkstremitas9" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnEkstremitas10" name="EMR_dr_IGD_P1_btnEkstremitas10" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnEkstremitas11" name="EMR_dr_IGD_P1_btnEkstremitas11" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                    <td class="col-md-6"><button type="button" id="EMR_dr_IGD_P1_btnEkstremitas12" name="EMR_dr_IGD_P1_btnEkstremitas12" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                  </tr>
                                </table>
                                <div class="col-md-4">
                                  <span>CRT :</span>
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_CRT1" name="EMR_dr_IGD_P1_CRT" class="md-radiobtn" value="< 2 detik" checked="true">
                                      <label for="EMR_dr_IGD_P1_CRT1">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> < 2 detik </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_CRT2" name="EMR_dr_IGD_P1_CRT" class="md-radiobtn" value="> 2 detik">
                                      <label for="EMR_dr_IGD_P1_CRT2">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> > 2 detik </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  </br>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-3">
                                    <span>Lain - lain</span>
                                  </div>
                                  <div class="col-md-9">
                                    <input type="text" id="EMR_dr_IGD_P1_EkstremitasLainTXT" name="EMR_dr_IGD_P1_EkstremitasLainTXT" class="form-control" placeholder="Lain lain">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row md-checkbox-inline">
                        <div class="col-md-12 md-checkbox">
                          <div class="row">
                            <input type="checkbox" id="EMR_dr_IGD_P1_PeFi_7_CK" name="EMR_dr_IGD_P1_PeFi_7_CK" value="PFneurologis" class="md-check">
                            <label for="EMR_dr_IGD_P1_PeFi_7_CK">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Pemeriksaan Fisik Neurologis </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_PeFi_7B">
                        <div class="portlet light portlet-fit bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Neurologis</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <table class="col-md-4">
                                  <tr>
                                    <td colspan="2" class="col-md-12"><span><center>Motorik</center></span></td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6">
                                      <select class="bs-select form-control" id="EMR_dr_IGD_P1_Neu_Motorik1" name="EMR_dr_IGD_P1_Neu_Motorik1">
                                        <option value='5' selected>5</option>
                                        <option value='4'>4</option>
                                        <option value='3'>3</option>
                                        <option value='2'>2</option>
                                        <option value='1'>1</option>
                                        <option value='0'>0</option>
                                      </select>
                                    </td>
                                    <td class="col-md-6">
                                      <select class="bs-select form-control" id="EMR_dr_IGD_P1_Neu_Motorik2" name="EMR_dr_IGD_P1_Neu_Motorik2">
                                        <option value='5' selected>5</option>
                                        <option value='4'>4</option>
                                        <option value='3'>3</option>
                                        <option value='2'>2</option>
                                        <option value='1'>1</option>
                                        <option value='0'>0</option>
                                      </select>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-6">
                                      <select class="bs-select form-control" id="EMR_dr_IGD_P1_Neu_Motorik3" name="EMR_dr_IGD_P1_Neu_Motorik3">
                                        <option value='5' selected>5</option>
                                        <option value='4'>4</option>
                                        <option value='3'>3</option>
                                        <option value='2'>2</option>
                                        <option value='1'>1</option>
                                        <option value='0'>0</option>
                                      </select>
                                    </td>
                                    <td class="col-md-6">
                                      <select class="bs-select form-control" id="EMR_dr_IGD_P1_Neu_Motorik4" name="EMR_dr_IGD_P1_Neu_Motorik4">
                                        <option value='5' selected>5</option>
                                        <option value='4'>4</option>
                                        <option value='3'>3</option>
                                        <option value='2'>2</option>
                                        <option value='1'>1</option>
                                        <option value='0'>0</option>
                                      </select>
                                    </td>
                                  </tr>
                                </table>
                                <div class="col-md-12">
                                    <span>Sensorik :</span>
                                </div>
                                <div class="col-md-12">
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_Sensorik1" name="EMR_dr_IGD_P1_Sensorik" class="md-radiobtn" value="Normal" checked="true">
                                      <label for="EMR_dr_IGD_P1_Sensorik1">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Normal </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_Sensorik2" name="EMR_dr_IGD_P1_Sensorik" class="md-radiobtn" value="Parestesia">
                                      <label for="EMR_dr_IGD_P1_Sensorik2">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Parestesia </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_Sensorik3" name="EMR_dr_IGD_P1_Sensorik" class="md-radiobtn" value="Hiperestesia">
                                      <label for="EMR_dr_IGD_P1_Sensorik3">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Hiperestesia </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_Sensorik4" name="EMR_dr_IGD_P1_Sensorik" class="md-radiobtn" value="Hipoestesia">
                                      <label for="EMR_dr_IGD_P1_Sensorik4">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Hipoestesia </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_Sensorik5" name="EMR_dr_IGD_P1_Sensorik" class="md-radiobtn" value="Anastesia">
                                      <label for="EMR_dr_IGD_P1_Sensorik5">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Anastesia</label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P1_Sensorik6" name="EMR_dr_IGD_P1_Sensorik" class="md-radiobtn" value="Lain - lain">
                                      <label for="EMR_dr_IGD_P1_Sensorik6">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Lain - lain </label>
                                    </div>
                                    <input type="text" class="form-control collapse" id="EMR_dr_IGD_P1_Sensorik7" name="EMR_dr_IGD_P1_Sensorik7">
                                    <input type="hidden" id="EMR_dr_IGD_P1_Sensorik7status" name="EMR_dr_IGD_P1_Sensorik7status" class="form-control" value="Tidak">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <span> Lain - lain </span></br>
                                  <input type="text" class="form-control" id="EMR_dr_IGD_P1_Neu_Lain" name="EMR_dr_IGD_P1_Neu_Lain">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="collapse" id="EMR_dr_IGD_P1_Halaman4">
                    <div class="col-md-12">
                      <!--<div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                          <span><b>Survei</b></span>
                        </div>
                        <div class="row portlet-body">
                          <div class="col-md-12">
                            <span>Gangguan Perilaku?</span>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_dr_IGD_P1_MentalY" name="EMR_dr_IGD_P1_Mental" class="md-radiobtn" value="Tidak ada gangguan">
                                    <label for="EMR_dr_IGD_P1_MentalY">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Tidak ada gangguan </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_dr_IGD_P1_MentalT" name="EMR_dr_IGD_P1_Mental" class="md-radiobtn" value="Ada gangguan">
                                    <label for="EMR_dr_IGD_P1_MentalT">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ada gangguan </label>
                                  </div>
                                  <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_Mentalshow">
                                    <div class="input-group">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P1_Mental2Y" name="EMR_dr_IGD_P1_Mental2" class="md-radiobtn" value="Tidak membahayakan">
                                          <label for="EMR_dr_IGD_P1_Mental2Y">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Tidak membahayakan </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P1_Mental2T" name="EMR_dr_IGD_P1_Mental2" class="md-radiobtn" value="Membahayakan diri sendiri/orang lain">
                                          <label for="EMR_dr_IGD_P1_Mental2T">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Membahayakan diri sendiri/orang lain </label>
                                        </div></br>
                                        <span>Lakukan pengkajian Restrain</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>-->
                      <div class="col-md-12">
                        <div class="portlet light bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Status Lokalis</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_dr_IGD_P1_SLBedah" name="EMR_dr_IGD_P1_SLBedah" value="SLBedah" class="md-check">
                                      <label for="EMR_dr_IGD_P1_SLBedah">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Status Lokalis Bedah </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="row collapse" id="EMR_dr_IGD_P1_SLBedah1">
                                    <div class="col-md-12">
                                      <center>
                                        <a class="btn bg-green-jungle bg-font-green-jungle" id="EMR_dr_IGD_P1_btnLokalisTubuh"><center><b><i class="fa fa-plus"></i> Status Lokalis Bedah</b></center></a>
                                      </center>
                                    </div>
                                  </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_dr_IGD_P1_SLTulang" name="EMR_dr_IGD_P1_SLTulang" value="SLOrthopedi" class="md-check">
                                      <label for="EMR_dr_IGD_P1_SLTulang">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Status Lokalis Orthopedi </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLTulang1">
                                    <div class="col-md-12">
                                      <center>
                                        <a class="btn bg-green-jungle bg-font-green-jungle" id="EMR_dr_IGD_P1_btnLokalisTulang"><center><b><i class="fa fa-plus"></i> Status Lokalis Orthopedi</b></center></a>
                                      </center>
                                    </div>
                                  </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_dr_IGD_P1_SLRec" name="EMR_dr_IGD_P1_SLRec" value="SLRectum" class="md-check">
                                      <label for="EMR_dr_IGD_P1_SLRec">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Status Lokalis Rectum </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLRec2">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="portlet light bordered">
                                          <div class="portlet-body">
                                            <div class="tab-content">
                                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <div class="col-md-12">
                                                  <span>Tonus Sphincter Ani</span>
                                                  <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-3 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLRectumA1" name="EMR_dr_IGD_P1_SLRectumA1" value="Normal" class="md-check" checked>
                                                          <label for="EMR_dr_IGD_P1_SLRectumA1">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Normal </label>
                                                        </div>
                                                        <div class="col-md-3 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLRectumA2" name="EMR_dr_IGD_P1_SLRectumA2" value="Meningkat" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLRectumA2">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Meningkat </label>
                                                        </div>
                                                        <div class="col-md-3 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLRectumA3" name="EMR_dr_IGD_P1_SLRectumA3" value="Menurun" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLRectumA3">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Menurun </label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <span>Teraba Massa</span>
                                                  <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLRectumB1" name="EMR_dr_IGD_P1_SLRectumB1" value="Tidak" class="md-check" checked>
                                                          <label for="EMR_dr_IGD_P1_SLRectumB1">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Tidak </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLRectumB2" name="EMR_dr_IGD_P1_SLRectumB2" value="Ya" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLRectumB2">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Ya </label>
                                                        </div>
                                                        <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLRectumB3div">
                                                          <input type="text" id="EMR_dr_IGD_P1_SLRectumB3" name="EMR_dr_IGD_P1_SLRectumB3" value="" class="form-control">
                                                          <input type="hidden" id="EMR_dr_IGD_P1_SLRectumB3status" name="EMR_dr_IGD_P1_SLRectumB3status" value="Tidak" class="form-control">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <span>Nyeri</span>
                                                  <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLRectumC1" name="EMR_dr_IGD_P1_SLRectumC1" value="Tidak" class="md-check" checked>
                                                          <label for="EMR_dr_IGD_P1_SLRectumC1">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Tidak </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLRectumC2" name="EMR_dr_IGD_P1_SLRectumC2" value="Ya" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLRectumC2">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Ya </label>
                                                        </div>
                                                        <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLRectumC3div">
                                                          <input type="text" id="EMR_dr_IGD_P1_SLRectumC3" name="EMR_dr_IGD_P1_SLRectumC3" value="" class="form-control">
                                                          <input type="hidden" id="EMR_dr_IGD_P1_SLRectumC3status" name="EMR_dr_IGD_P1_SLRectumC3status" value="Tidak" class="form-control">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <span>Kosong</span>
                                                  <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLRectumD1" name="EMR_dr_IGD_P1_SLRectumD1" value="Ya" class="md-check" checked>
                                                          <label for="EMR_dr_IGD_P1_SLRectumD1">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Ya </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLRectumD2" name="EMR_dr_IGD_P1_SLRectumD2" value="Tidak/Isi" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLRectumD2">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Tidak/Isi </label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <span>Lain-Lain</span>
                                                  <input type="text" id="EMR_dr_IGD_P1_SLRectumE" name="EMR_dr_IGD_P1_SLRectumE" value="" class="form-control" placeholder="Lain lain">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_dr_IGD_P1_SLTHT" name="EMR_dr_IGD_P1_SLTHT" value="SLTHT" class="md-check">
                                      <label for="EMR_dr_IGD_P1_SLTHT">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Status Lokalis THT </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLTHT2">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="portlet light bordered">
                                          <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                              <span class="caption-subject font-dark bold">Telinga</span>
                                            </div>
                                          </div>
                                          <div class="portlet-body">
                                            <div class="tab-content">
                                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <div class="col-md-6 portlet light bordered">
                                                  <div class="portlet-title tabbable-line">
                                                    <div class="caption">
                                                      <span class="caption-subject font-dark bold">Telinga Kanan</span>
                                                    </div>
                                                  </div>
                                                  <div class="portlet-body">
                                                    <div class="tab-content">
                                                      <div class="col-md-12">
                                                        <span>Saluran</span>
                                                        <div class="form-group">
                                                          <div class="input-group">
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKananA1" name="EMR_dr_IGD_P1_SLTelingaKananA1" value="Normal" class="md-check" checked>
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKananA1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Normal </label>
                                                              </div>
                                                            </div>
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKananA2" name="EMR_dr_IGD_P1_SLTelingaKananA2" value="Tertutup Serumen" class="md-check">
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKananA2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Tertutup Serumen </label>
                                                              </div>
                                                            </div>
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKananA3" name="EMR_dr_IGD_P1_SLTelingaKananA3" value="Terdapat Cairan" class="md-check">
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKananA3">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Terdapat Cairan </label>
                                                              </div>
                                                            </div>
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKananA4" name="EMR_dr_IGD_P1_SLTelingaKananA4" value="Lainnya" class="md-check">
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKananA4">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Lainnya </label>
                                                              </div>
                                                              <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLTelingaKananA5div">
                                                                <input type="text" id="EMR_dr_IGD_P1_SLTelingaKananA5" name="EMR_dr_IGD_P1_SLTelingaKananA5" value="" class="form-control" placeholder="Lain lain">
                                                                <input type="hidden" id="EMR_dr_IGD_P1_SLTelingaKananA5status" name="EMR_dr_IGD_P1_SLTelingaKananA5status" value="Tidak" class="form-control">
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <span>Membran Timpani</span>
                                                        <div class="form-group">
                                                          <div class="input-group">
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKananB1" name="EMR_dr_IGD_P1_SLTelingaKananB1" value="Intak" class="md-check" checked>
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKananB1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Intak </label>
                                                              </div>
                                                            </div>
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKananB2" name="EMR_dr_IGD_P1_SLTelingaKananB2" value="Tidak Intak" class="md-check">
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKananB2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Tidak Intak </label>
                                                              </div>
                                                            </div>
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKananB3" name="EMR_dr_IGD_P1_SLTelingaKananB3" value="Lainnya" class="md-check">
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKananB3">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Lainnya </label>
                                                              </div>
                                                              <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLTelingaKananB4div">
                                                                <input type="text" id="EMR_dr_IGD_P1_SLTelingaKananB4" name="EMR_dr_IGD_P1_SLTelingaKananB4" value="" class="form-control" placeholder="Lain lain">
                                                                <input type="hidden" id="EMR_dr_IGD_P1_SLTelingaKananB4status" name="EMR_dr_IGD_P1_SLTelingaKananB4status" value="Tidak" class="form-control">
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6 portlet light bordered">
                                                  <div class="portlet-title tabbable-line">
                                                    <div class="caption">
                                                      <span class="caption-subject font-dark bold">Telinga Kiri</span>
                                                    </div>
                                                  </div>
                                                  <div class="portlet-body">
                                                    <div class="tab-content">
                                                      <div class="col-md-12">
                                                        <span>Saluran</span>
                                                        <div class="form-group">
                                                          <div class="input-group">
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKiriA1" name="EMR_dr_IGD_P1_SLTelingaKiriA1" value="Normal" class="md-check" checked>
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKiriA1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Normal </label>
                                                              </div>
                                                            </div>
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKiriA2" name="EMR_dr_IGD_P1_SLTelingaKiriA2" value="Tertutup Serumen" class="md-check">
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKiriA2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Tertutup Serumen </label>
                                                              </div>
                                                            </div>
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKiriA3" name="EMR_dr_IGD_P1_SLTelingaKiriA3" value="Terdapat Cairan" class="md-check">
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKiriA3">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Terdapat Cairan </label>
                                                              </div>
                                                            </div>
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKiriA4" name="EMR_dr_IGD_P1_SLTelingaKiriA4" value="Lainnya" class="md-check">
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKiriA4">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Lainnya </label>
                                                              </div>
                                                              <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLTelingaKiriA5div">
                                                                <input type="text" id="EMR_dr_IGD_P1_SLTelingaKiriA5" name="EMR_dr_IGD_P1_SLTelingaKiriA5" value="" class="form-control" placeholder="Lain lain">
                                                                <input type="hidden" id="EMR_dr_IGD_P1_SLTelingaKiriA5status" name="EMR_dr_IGD_P1_SLTelingaKiriA5status" value="Tidak" class="form-control">
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <span>Membran Timpani</span>
                                                        <div class="form-group">
                                                          <div class="input-group">
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKiriB1" name="EMR_dr_IGD_P1_SLTelingaKiriB1" value="Intak" class="md-check" checked>
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKiriB1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Intak </label>
                                                              </div>
                                                            </div>
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKiriB2" name="EMR_dr_IGD_P1_SLTelingaKiriB2" value="Tidak Intak" class="md-check">
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKiriB2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Tidak Intak </label>
                                                              </div>
                                                            </div>
                                                            <div class="row md-checkbox-inline">
                                                              <div class="col-md-12 md-checkbox">
                                                                <input type="checkbox" id="EMR_dr_IGD_P1_SLTelingaKiriB3" name="EMR_dr_IGD_P1_SLTelingaKiriB3" value="Lainnya" class="md-check">
                                                                <label for="EMR_dr_IGD_P1_SLTelingaKiriB3">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Lainnya </label>
                                                              </div>
                                                              <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLTelingaKiriB4div">
                                                                <input type="text" id="EMR_dr_IGD_P1_SLTelingaKiriB4" name="EMR_dr_IGD_P1_SLTelingaKiriB4" value="" class="form-control" placeholder="Lain lain">
                                                                <input type="hidden" id="EMR_dr_IGD_P1_SLTelingaKiriB4status" name="EMR_dr_IGD_P1_SLTelingaKiriB4status" value="Tidak" class="form-control">
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
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="portlet light bordered">
                                          <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                              <span class="caption-subject font-dark bold">Hidung</span>
                                            </div>
                                          </div>
                                          <div class="portlet-body">
                                            <div class="tab-content">
                                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <div class="col-md-6">
                                                  <span>Nose Septum</span>
                                                  <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLHidungA1" name="EMR_dr_IGD_P1_SLHidungA1" value="Ditengah" class="md-check" checked>
                                                          <label for="EMR_dr_IGD_P1_SLHidungA1">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Ditengah </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLHidungA2" name="EMR_dr_IGD_P1_SLHidungA2" value="Deviasi" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLHidungA2">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Deviasi </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLHidungA3" name="EMR_dr_IGD_P1_SLHidungA3" value="Lainnya" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLHidungA3">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Lainnya </label>
                                                        </div>
                                                        <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLHidungA4div">
                                                          <input type="text" id="EMR_dr_IGD_P1_SLHidungA4" name="EMR_dr_IGD_P1_SLHidungA4" value="" class="form-control" placeholder="Lain lain">
                                                          <input type="hidden" id="EMR_dr_IGD_P1_SLHidungA4status" name="EMR_dr_IGD_P1_SLHidungA4status" value="Tidak" class="form-control">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <span>Nose Konka</span>
                                                  <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLHidungB1" name="EMR_dr_IGD_P1_SLHidungB1" value="Normal" class="md-check" checked>
                                                          <label for="EMR_dr_IGD_P1_SLHidungB1">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Normal </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLHidungB2" name="EMR_dr_IGD_P1_SLHidungB2" value="Membesar" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLHidungB2">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Membesar </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLHidungB3" name="EMR_dr_IGD_P1_SLHidungB3" value="Hiperemi" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLHidungB3">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Hiperemi </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLHidungB4" name="EMR_dr_IGD_P1_SLHidungB4" value="Lainnya" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLHidungB4">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Lainnya </label>
                                                        </div>
                                                        <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLHidungB5div">
                                                          <input type="text" id="EMR_dr_IGD_P1_SLHidungB5" name="EMR_dr_IGD_P1_SLHidungB5" value="" class="form-control" placeholder="Lain lain">
                                                          <input type="hidden" id="EMR_dr_IGD_P1_SLHidungB5status" name="EMR_dr_IGD_P1_SLHidungB5status" value="Tidak" class="form-control">
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
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="portlet light bordered">
                                          <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                              <span class="caption-subject font-dark bold">Tenggorokan</span>
                                            </div>
                                          </div>
                                          <div class="portlet-body">
                                            <div class="tab-content">
                                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <div class="col-md-6">
                                                  <span>Pharyn/Faring</span>
                                                  <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLTenggorokanA1" name="EMR_dr_IGD_P1_SLTenggorokanA1" value="Normal" class="md-check" checked>
                                                          <label for="EMR_dr_IGD_P1_SLTenggorokanA1">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Normal </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLTenggorokanA2" name="EMR_dr_IGD_P1_SLTenggorokanA2" value="Hiperemi" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLTenggorokanA2">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Hiperemi </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLTenggorokanA3" name="EMR_dr_IGD_P1_SLTenggorokanA3" value="Lainnya" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLTenggorokanA3">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Lainnya </label>
                                                        </div>
                                                        <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLTenggorokanA4div">
                                                          <input type="text" id="EMR_dr_IGD_P1_SLTenggorokanA4" name="EMR_dr_IGD_P1_SLTenggorokanA4" value="" class="form-control" placeholder="Lain lain">
                                                          <input type="hidden" id="EMR_dr_IGD_P1_SLTenggorokanA4status" name="EMR_dr_IGD_P1_SLTenggorokanA4status" value="Tidak" class="form-control">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <span>Tonsil/Amandel</span>
                                                  <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLTenggorokanB1" name="EMR_dr_IGD_P1_SLTenggorokanB1" value="Normal" class="md-check" checked>
                                                          <label for="EMR_dr_IGD_P1_SLTenggorokanB1">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Normal </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLTenggorokanB2" name="EMR_dr_IGD_P1_SLTenggorokanB2" value="Hiperemi" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLTenggorokanB2">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Hiperemi </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLTenggorokanB3" name="EMR_dr_IGD_P1_SLTenggorokanB3" value="Eksudat" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLTenggorokanB3">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Eksudat </label>
                                                        </div>
                                                      </div>
                                                      <div class="row md-checkbox-inline">
                                                        <div class="col-md-12 md-checkbox">
                                                          <input type="checkbox" id="EMR_dr_IGD_P1_SLTenggorokanB4" name="EMR_dr_IGD_P1_SLTenggorokanB4" value="Membesar" class="md-check">
                                                          <label for="EMR_dr_IGD_P1_SLTenggorokanB4">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> Membesar </label>
                                                        </div>
                                                        <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLTenggorokanB5div">
                                                          <input type="text" id="EMR_dr_IGD_P1_SLTenggorokanB5" name="EMR_dr_IGD_P1_SLTenggorokanB5" value="" class="form-control">
                                                          <input type="hidden" id="EMR_dr_IGD_P1_SLTenggorokanB5status" name="EMR_dr_IGD_P1_SLTenggorokanB5status" value="Tidak" class="form-control">
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
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_dr_IGD_P1_SLMata" name="EMR_dr_IGD_P1_SLMata" value="SLMata" class="md-check">
                                      <label for="EMR_dr_IGD_P1_SLMata">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Status Lokalis Mata </label>
                                    </div>
                                  </div>
                                </div>
                                  <div id="EMR_dr_IGD_P1_SLMata2" class="col-md-12 collapse">
                                    <div class="col-md-12 portlet light bordered">
                                      <div class="portlet-body">
                                        <div class="row tab-content">
                                          <div class="col-md-12">
                                            <span class="col-md-4"><center><b>OD</b></center></span>
                                            <span class="col-md-4"><center><b>Pemeriksaan</b></center></span>
                                            <span class="col-md-4"><center><b>OS</b></center></span>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_AVOD" name="EMR_dr_IGD_P1_AVOD" value="" class="form-control" placeholder="Masukan AV">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                            <span class="col-md-4"><center><b>Visus</b></center></span>
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_AVOS" name="EMR_dr_IGD_P1_AVOS" value="" class="form-control" placeholder="Masukan AV">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_GerakMataOD" name="EMR_dr_IGD_P1_GerakMataOD" value="Gerakan bebas ke semua arah" class="form-control" placeholder="Masukan gerakan">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                            <span class="col-md-4"><center><b>Gerakan bola mata</b></center></span>
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_GerakMataOS" name="EMR_dr_IGD_P1_GerakMataOS" value="Gerakan bebas ke semua arah" class="form-control" placeholder="Masukan gerakan">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_PosisiMataOD" name="EMR_dr_IGD_P1_PosisiMataOD" value="Normal" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                            <span class="col-md-4"><center><b>Posisi</b></center></span>
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_PosisiMataOS" name="EMR_dr_IGD_P1_PosisiMataOS" value="Normal" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_PalpebraMataOD" name="EMR_dr_IGD_P1_PalpebraMataOD" value="Normal" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                            <span class="col-md-4"><center><b>Palpebra</b></center></span>
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_PalpebraMataOS" name="EMR_dr_IGD_P1_PalpebraMataOS" value="Normal" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-5 btn-group btn-group-solid">
                                              <button type="button" id="EMR_dr_IGD_P1_KonjungtivaMataSilOD" name="EMR_dr_IGD_P1_KonjungtivaMataSilOD" class="btn yellow" style="width:40%" value="inj silier -"><b> inj silier - </b></button>
                                              <button type="button" class="btn white" style="width:20%" disabled="true"></button>
                                              <button type="button" id="EMR_dr_IGD_P1_KonjungtivaMataCojOD" name="EMR_dr_IGD_P1_KonjungtivaMataCojOD" class="btn yellow" style="width:40%" value="inj coj -"><b> inj coj - </b></button>
                                            </div>
                                            <span class="col-md-2"><center><b>Konjungtiva</b></center></span>
                                            <div class="col-md-5 btn-group btn-group-solid">
                                              <button type="button" id="EMR_dr_IGD_P1_KonjungtivaMataCojOS" name="EMR_dr_IGD_P1_KonjungtivaMataCojOS" class="btn yellow" style="width:40%" value="inj coj -"><b> inj coj - </b></button>
                                              <button type="button" class="btn white" style="width:20%" disabled="true"></button>
                                              <button type="button" id="EMR_dr_IGD_P1_KonjungtivaMataSilOS" name="EMR_dr_IGD_P1_KonjungtivaMataSilOS" class="btn yellow" style="width:40%" value="inj silier -"><b> inj silier - </b></button>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_KorneaMataOD" name="EMR_dr_IGD_P1_KorneaMataOD" value="Jernih" class="form-control" placeholder="">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Korena kanan</span>
                                                </div>
                                              </div>
                                            </div>
                                            <span class="col-md-4"><center><b>Kornea</b></center></span>
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_KorneaMataOS" name="EMR_dr_IGD_P1_KorneaMataOS" value="Jernih" class="form-control" placeholder="">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Kornea Kiri</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_BMDMataOD" name="EMR_dr_IGD_P1_BMDMataOD" value="Dalam" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                            <span class="col-md-4"><center><b>BMD</b></center></span>
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_BMDMataOS" name="EMR_dr_IGD_P1_BMDMataOS" value="Dalam" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_IrisMataOD" name="EMR_dr_IGD_P1_IrisMataOD" value="Normal" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                            <span class="col-md-4"><center><b>Iris</b></center></span>
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_IrisMataOS" name="EMR_dr_IGD_P1_IrisMataOS" value="Normal" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-2"><span> Kanan </span></div>
                                            <div class="col-md-2">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_pupilKanan2" name="EMR_dr_IGD_P1_pupilKanan2" value="3" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                  <i style="font-size:12px"><b>mm</b></i>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-4"><span><center><b> Pupil </b></center></span></div>
                                            <div class="col-md-2">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_pupilKiri2" name="EMR_dr_IGD_P1_pupilKiri2" value="3" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                  <i style="font-size:12px"><b>mm</b></i>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-2"><span> Kiri </span></div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_PupilMataOD" name="EMR_dr_IGD_P1_PupilMataOD" value="" class="form-control" placeholder="Keterangan pupil kanan">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Keterangan pupil kanan</span>
                                                </div>
                                              </div>
                                            </div>
                                            <span class="col-md-4" id="EMR_dr_IGD_P1_pupilstat2"><b><center>Isokor</center></b></span>
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_PupilMataOS" name="EMR_dr_IGD_P1_PupilMataOS" value="" class="form-control" placeholder="Keterangan pupil kiri">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Keterangan pupil kiri</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_LensaMataOD" name="EMR_dr_IGD_P1_LensaMataOD" value="Jernih" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                            <span class="col-md-4"><center><b>Lensa</b></center></span>
                                            <div class="col-md-4">
                                              <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_LensaMataOS" name="EMR_dr_IGD_P1_LensaMataOS" value="Jernih" class="form-control">
                                                  <label for="form_control_1"></label>
                                                  <span class="help-block">Masukkan nilai</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <button type="button" id="EMR_dr_IGD_P1_VitreusMataOD" name="EMR_dr_IGD_P1_VitreusMataOD" class="btn green" style="width:100%" value="Tidak Dilakukan Pemeriksaan"><b> Tidak Dilakukan</br>Pemeriksaan </b></button>
                                            </div>
                                            <span class="col-md-4"><center><b>Vitreus</br>Funduskopi</b></center></span>
                                            <div class="col-md-4">
                                              <button type="button" id="EMR_dr_IGD_P1_VitreusMataOS" name="EMR_dr_IGD_P1_VitreusMataOS" class="btn green" style="width:100%" value="Tidak Dilakukan Pemeriksaan"><b> Tidak Dilakukan</br>Pemeriksaan </b></button>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <button type="button" id="EMR_dr_IGD_P1_TIOMataOD" name="EMR_dr_IGD_P1_TIOMataOD" class="btn green" style="width:100%" value="Tidak Dilakukan Pemeriksaan"><b> Tidak Dilakukan</br>Pemeriksaan </b></button>
                                            </div>
                                            <span class="col-md-4"><center><b>TIO</b></center></span>
                                            <div class="col-md-4">
                                              <button type="button" id="EMR_dr_IGD_P1_TIOMataOS" name="EMR_dr_IGD_P1_TIOMataOS" class="btn green" style="width:100%" value="Tidak Dilakukan Pemeriksaan"><b> Tidak Dilakukan</br>Pemeriksaan </b></button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_dr_IGD_P1_SLNeurologis" name="EMR_dr_IGD_P1_SLNeurologis" value="SLNeurologis" class="md-check">
                                      <label for="EMR_dr_IGD_P1_SLNeurologis">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pemeriksaan Neurologis </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="row collapse" id="EMR_dr_IGD_P1_SLNeurologis1">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <div class="form-group form-md-line-input">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_SLNeurologis2" name="EMR_dr_IGD_P1_SLNeurologis2" class="form-control">
                                                  <label for="form_control"> Pemeriksaan Neurologis</label>
                                                  <span class="help-block">Masukkan Pemeriksaan Neurologis</span>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_dr_IGD_P1_SLJiwa" name="EMR_dr_IGD_P1_SLJiwa" value="SLJiwa" class="md-check">
                                      <label for="EMR_dr_IGD_P1_SLJiwa">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pemeriksaan Jiwa </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="row collapse" id="EMR_dr_IGD_P1_SLJiwa1">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <div class="form-group form-md-line-input">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_SLJiwa2" name="EMR_dr_IGD_P1_SLJiwa2" class="form-control">
                                                  <label for="form_control">Pemeriksaan Jiwa</label>
                                                  <span class="help-block">Masukkan Pemeriksaan Jiwa</span>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_dr_IGD_P1_SLKulit" name="EMR_dr_IGD_P1_SLKulit" value="SLKulit" class="md-check">
                                      <label for="EMR_dr_IGD_P1_SLKulit">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Status Lokalis Kulit </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="row collapse" id="EMR_dr_IGD_P1_SLKulit1">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <div class="form-group form-md-line-input">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                  <input type="text" id="EMR_dr_IGD_P1_SLKulit2" name="EMR_dr_IGD_P1_SLKulit2" class="form-control">
                                                  <label for="form_control"> Status Lokalis Kulit</label>
                                                  <span class="help-block">Masukkan Status Lokalis Kulit</span>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                <div class="row md-checkbox-inline">
                                  <div class="col-md-12 md-checkbox">
                                    <div class="row">
                                      <input type="checkbox" id="EMR_dr_IGD_P1_SLObsgin" name="EMR_dr_IGD_P1_SLObsgin" value="SLObsgin" class="md-check">
                                      <label for="EMR_dr_IGD_P1_SLObsgin">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Status Lokalis Obsgin </label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="row collapse" id="EMR_dr_IGD_P1_SLObsgin1">
                                    <div class="col-md-12">
                                      <div class="portlet light bordered">
                                        <div class="portlet-body">
                                          <div class="tab-content">
                                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <div class="row md-checkbox-inline">
                                                <div class="col-md-12 md-checkbox">
                                                  <div class="row">
                                                    <input type="checkbox" id="EMR_dr_IGD_P1_SLObstetric" name="EMR_dr_IGD_P1_SLObstetric" value="SLObstetric" class="md-check">
                                                    <label for="EMR_dr_IGD_P1_SLObstetric">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Status Lokalis Obstetric </label>
                                                  </div>
                                                </div>
                                                <input type="hidden" id="EMR_dr_IGD_P1_SLObstetricStatus" name="EMR_dr_IGD_P1_SLObstetricStatus" value="Tidak" class="form-control">
                                              </div>
                                                <div class="row collapse" id="EMR_dr_IGD_P1_SLObstetric2">
                                                    <div class="col-md-12">
                                                      <div class="portlet light bordered">
                                                        <div class="portlet-body">
                                                          <div class="tab-content">
                                                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                              <div class="col-md-12">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetricInspeksi" name="EMR_dr_IGD_P1_SLObstetricInspeksi" value="" class="form-control">
                                                                    <label for="form_control_1">Inspeksi</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <label class="col-md-12"><center><b>Palpasi</b></center></label>
                                                              <div class="col-md-3">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetrictfu" name="EMR_dr_IGD_P1_SLObstetrictfu" value="" class="form-control">
                                                                    <label for="form_control_1">TFU</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                    <i style="font-size:12px"><b>Cm</b></i>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-3">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetriclp" name="EMR_dr_IGD_P1_SLObstetriclp" value="" class="form-control">
                                                                    <label for="form_control_1">LP</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-3">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetrichis" name="EMR_dr_IGD_P1_SLObstetrichis" value="" class="form-control">
                                                                    <label for="form_control_1">HIS</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                    <i style="font-size:12px"><b>x/m</b></i>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-3">
                                                                <label for="form_control_1">Kekuatan</label>
                                                                <select class="bs-select form-control" id="EMR_dr_IGD_P1_SLObstetricKekuatan" name="EMR_dr_IGD_P1_SLObstetricKekuatan">
                                                                  <option value='Kuat'>Kuat</option>
                                                                  <option value='Sedang' selected>Sedang</option>
                                                                  <option value='Lemah'>Lemah</option>
                                                                </select>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetrictbbj" name="EMR_dr_IGD_P1_SLObstetrictbbj" value="" class="form-control">
                                                                    <label for="form_control_1">TBBJ</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                    <i style="font-size:12px"><b>gram</b></i>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetricleopoid1" name="EMR_dr_IGD_P1_SLObstetricleopoid1" value="" class="form-control">
                                                                    <label for="form_control_1">Leopoid 1</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetricleopoid2" name="EMR_dr_IGD_P1_SLObstetricleopoid2" value="" class="form-control">
                                                                    <label for="form_control_1">Leopoid 2</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetricleopoid3" name="EMR_dr_IGD_P1_SLObstetricleopoid3" value="" class="form-control">
                                                                    <label for="form_control_1">Leopoid 3</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                                <label>Leopoid 4</label>
                                                                <div class="md-radio-inline">
                                                                  <div class="md-radio">
                                                                    <input type="radio" id="EMR_dr_IGD_P1_SLObstetricleopoid4kon" name="EMR_dr_IGD_P1_SLObstetricleopoid4" class="md-radiobtn" value="Konvergen">
                                                                    <label for="EMR_dr_IGD_P1_SLObstetricleopoid4kon">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Konvergen </label>
                                                                  </div>
                                                                  <div class="md-radio">
                                                                    <input type="radio" id="EMR_dr_IGD_P1_SLObstetricleopoid4dev" name="EMR_dr_IGD_P1_SLObstetricleopoid4" class="md-radiobtn" value="Devergen">
                                                                    <label for="EMR_dr_IGD_P1_SLObstetricleopoid4dev">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Devergen </label>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <input type="hidden" class="form-control" id="EMR_dr_IGD_P1_SLObstetricleopoid4konStatus" name="EMR_dr_IGD_P1_SLObstetricleopoid4konStatus" value="Tidak">
                                                              <input type="hidden" class="form-control" id="EMR_dr_IGD_P1_SLObstetricleopoid4devStatus" name="EMR_dr_IGD_P1_SLObstetricleopoid4devStatus" value="Tidak">
                                                              <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLObstetricleopoid4kon2">
                                                                <div class="col-md-6">
                                                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                      <input type="text" id="EMR_dr_IGD_P1_SLObstetricleopoid4konKanan" name="EMR_dr_IGD_P1_SLObstetricleopoid4konKanan" value="" class="form-control">
                                                                      <label for="form_control_1">Konvergen Kanan</label>
                                                                      <span class="help-block">Masukkan Data</span>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                      <input type="text" id="EMR_dr_IGD_P1_SLObstetricleopoid4konKiri" name="EMR_dr_IGD_P1_SLObstetricleopoid4konKiri" value="" class="form-control">
                                                                      <label for="form_control_1">Konvergen Kiri</label>
                                                                      <span class="help-block">Masukkan Data</span>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12 collapse" id="EMR_dr_IGD_P1_SLObstetricleopoid4dev2">
                                                                <div class="col-md-6">
                                                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                      <input type="text" id="EMR_dr_IGD_P1_SLObstetricleopoid4devKanan" name="EMR_dr_IGD_P1_SLObstetricleopoid4devKanan" value="" class="form-control">
                                                                      <label for="form_control_1">Devergen Kanan</label>
                                                                      <span class="help-block">Masukkan Data</span>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                      <input type="text" id="EMR_dr_IGD_P1_SLObstetricleopoid4devKiri" name="EMR_dr_IGD_P1_SLObstetricleopoid4devKiri" value="" class="form-control">
                                                                      <label for="form_control_1">Devergen Kiri</label>
                                                                      <span class="help-block">Masukkan Data</span>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <label class="col-md-12"><center><b>VT</b></center></label>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetricpembukaan" name="EMR_dr_IGD_P1_SLObstetricpembukaan" value="" class="form-control">
                                                                    <label for="form_control_1">Pembukaan</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetricpenipisan" name="EMR_dr_IGD_P1_SLObstetricpenipisan" value="" class="form-control">
                                                                    <label for="form_control_1">Penipisan</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                    <i style="font-size:12px"><b>%</b></i>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Selaput Ketuban : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLObstetricbtnKetuban" name="EMR_dr_IGD_P1_SLObstetricbtnKetuban" class="btn green col-md-12" value="+"><b> + </b></button>
                                                              </div>
                                                              <div class="col-md-6 collapse" id="EMR_dr_IGD_P1_SLObstetricKetubantxt2">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetricKetubantxt" name="EMR_dr_IGD_P1_SLObstetricKetubantxt" value="" class="form-control">
                                                                    <label for="form_control_1">Selaput Ketuban</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetricrabahodge" name="EMR_dr_IGD_P1_SLObstetricrabahodge" value="" class="form-control">
                                                                    <label for="form_control_1">Teraba kepala setinggi hodge</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <label class="col-md-12"><center><b>Auskultasi</b></center></label>
                                                              <div class="col-md-12">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetricDJJ" name="EMR_dr_IGD_P1_SLObstetricDJJ" value="" class="form-control">
                                                                    <label for="form_control_1">DJJ</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                    <i style="font-size:12px"><b>x/m</b></i>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLObstetricLain2" name="EMR_dr_IGD_P1_SLObstetricLain2" value="" class="form-control">
                                                                    <label for="form_control_1">Lain-Lain</label>
                                                                    <span class="help-block">Masukkan Lain-Lain</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                              <div class="row md-checkbox-inline">
                                                <div class="col-md-12 md-checkbox">
                                                  <div class="row">
                                                    <input type="checkbox" id="EMR_dr_IGD_P1_SLGinekologis" name="EMR_dr_IGD_P1_SLGinekologis" value="SLGinekologis" class="md-check">
                                                    <label for="EMR_dr_IGD_P1_SLGinekologis">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Status Lokalis Ginekologis </label>
                                                  </div>
                                                </div>
                                                <input type="hidden" id="EMR_dr_IGD_P1_SLGinekologisStatus" name="EMR_dr_IGD_P1_SLGinekologisStatus" value="Tidak" class="form-control">
                                              </div>
                                                <div class="row collapse" id="EMR_dr_IGD_P1_SLGinekologis2">
                                                    <div class="col-md-12">
                                                      <div class="portlet light bordered">
                                                        <div class="portlet-body">
                                                          <div class="tab-content">
                                                            <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                              <label class="col-md-12">Pemeriksaan Abdomen</label>
                                                              <div class="col-md-12">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisInspeksi" name="EMR_dr_IGD_P1_SLGinekologisInspeksi" value="" class="form-control">
                                                                    <label for="form_control_1">Inspeksi</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <label class="col-md-12">Palpasi</label>
                                                              <div class="col-md-6">
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnSupel" name="EMR_dr_IGD_P1_SLGinekologisbtnSupel" class="btn green col-md-12" value="Supel"><b> Supel </b></button>
                                                              </div>
                                                              <div class="col-md-12">
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Nyeri Tekan : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnNyeTek" name="EMR_dr_IGD_P1_SLGinekologisbtnNyeTek" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Benjolan : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnBenjolan" name="EMR_dr_IGD_P1_SLGinekologisbtnBenjolan" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Defans muscular : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnDefmus" name="EMR_dr_IGD_P1_SLGinekologisbtnDefmus" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisPalpasiTxt" name="EMR_dr_IGD_P1_SLGinekologisPalpasiTxt" value="" class="form-control">
                                                                    <label for="form_control_1">lain - lain</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisPerkusiTxt" name="EMR_dr_IGD_P1_SLGinekologisPerkusiTxt" value="" class="form-control">
                                                                    <label for="form_control_1">Perkusi</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisAuskultasiTxt" name="EMR_dr_IGD_P1_SLGinekologisAuskultasiTxt" value="" class="form-control">
                                                                    <label for="form_control_1">Auskultasi</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <label class="col-md-12"><center><b>Pemeriksaan Pelvik</b></center></label>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisPelvikTxt" name="EMR_dr_IGD_P1_SLGinekologisPelvikTxt" value="" class="form-control">
                                                                    <label for="form_control_1">Inspeksi</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <label class="col-md-12">Inspekuio</label>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisDindingvagTxt" name="EMR_dr_IGD_P1_SLGinekologisDindingvagTxt" value="Normal" class="form-control">
                                                                    <label for="form_control_1">Dinding Vagina</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Nyeri : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek" name="EMR_dr_IGD_P1_SLGinekologisbtnNyeriInspek" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                              </div>
                                                              <div class="col-md-12">
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Massa : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnMassa" name="EMR_dr_IGD_P1_SLGinekologisbtnMassa" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                              </div>
                                                              <div class="col-md-6 collapse" id="EMR_dr_IGD_P1_SLGinekologisMassatxt2">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisMassatxt" name="EMR_dr_IGD_P1_SLGinekologisMassatxt" value="" class="form-control">
                                                                    <label for="form_control_1">Massa</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisPorUkTxt" name="EMR_dr_IGD_P1_SLGinekologisPorUkTxt" value="Normal" class="form-control">
                                                                    <label for="form_control_1">Porsio Ukuran</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Fluksus : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnFluksus" name="EMR_dr_IGD_P1_SLGinekologisbtnFluksus" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Fluor : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnFluor" name="EMR_dr_IGD_P1_SLGinekologisbtnFluor" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Erosi : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnErosi" name="EMR_dr_IGD_P1_SLGinekologisbtnErosi" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                              </div>
                                                              <div class="col-md-6 collapse" id="EMR_dr_IGD_P1_SLGinekologisErositxt2">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisErositxt" name="EMR_dr_IGD_P1_SLGinekologisErositxt" value="" class="form-control">
                                                                    <label for="form_control_1">Erosi</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisOUEtxt" name="EMR_dr_IGD_P1_SLGinekologisOUEtxt" value="" class="form-control">
                                                                    <label for="form_control_1">OUE</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisInspektxt" name="EMR_dr_IGD_P1_SLGinekologisInspektxt" value="" class="form-control">
                                                                    <label for="form_control_1">Lain - lain</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <label class="col-md-12"><center><b>VT/Bimanual palpasi</b></center></label>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Uterus : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnUterus" name="EMR_dr_IGD_P1_SLGinekologisbtnUterus" class="btn green col-md-12" value="Antefleksi"><b> Antefleksi </b></button>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisBentukVTtxt" name="EMR_dr_IGD_P1_SLGinekologisBentukVTtxt" value="Normal" class="form-control">
                                                                    <label for="form_control_1">Bentuk</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Nyeri : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT" name="EMR_dr_IGD_P1_SLGinekologisbtnNyeriVT" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisUkurantxt" name="EMR_dr_IGD_P1_SLGinekologisUkurantxt" value="Sebesar telur ayam" class="form-control">
                                                                    <label for="form_control_1">Ukuran</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Masa Adnexa Kanan : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan" name="EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKanan" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                              </div>
                                                              <div class="col-md-6 collapse" id="EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt2">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt" name="EMR_dr_IGD_P1_SLGinekologisAdnexaKanantxt" value="" class="form-control">
                                                                    <label for="form_control_1">Adnexa Kanan</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <span class="control-label">Masa Adnexa Kiri : </span></br>
                                                                <button type="button" id="EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri" name="EMR_dr_IGD_P1_SLGinekologisbtnAdnexaKiri" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                              </div>
                                                              <div class="col-md-6 collapse" id="EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt2">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt" name="EMR_dr_IGD_P1_SLGinekologisAdnexaKiritxt" value="" class="form-control">
                                                                    <label for="form_control_1">Adnexa Kiri</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisKayumDougtxt" name="EMR_dr_IGD_P1_SLGinekologisKayumDougtxt" value="Dalam Batas Normal" class="form-control">
                                                                    <label for="form_control_1">Kayum Douglasi</label>
                                                                    <span class="help-block">Masukkan Data</span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                    <input type="text" id="EMR_dr_IGD_P1_SLGinekologisVTtxt" name="EMR_dr_IGD_P1_SLGinekologisVTtxt" value="" class="form-control">
                                                                    <label for="form_control_1">Lain - lain</label>
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
                      <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P1_btnsimpan" style="width:100%">SIMPAN</a><br/><br/>
                    </div>
                  </div>
                  <!--<div class="collapse" id="EMR_dr_IGD_P1_Halaman5">
                    <div class="col-md-6">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                          <span><b>Riwayat Sosial</b></span>
                        </div>
                        <div class="portlet-body">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <input type="checkbox" id="EMR_dr_IGD_P1_RiwayatSosial1" name="EMR_dr_IGD_P1_RiwayatSosial1" value="Tidak ada" class="md-check" checked>
                                  <label for="EMR_dr_IGD_P1_RiwayatSosial1">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Tidak ada </label>
                                </div>
                                <div class="col-md-12 md-checkbox">
                                  <input type="checkbox" id="EMR_dr_IGD_P1_RiwayatSosial2" name="EMR_dr_IGD_P1_RiwayatSosial2" value="Merokok" class="md-check">
                                  <label for="EMR_dr_IGD_P1_RiwayatSosial2">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Merokok </label>
                                </div>
                                <div class="col-md-12 md-checkbox">
                                  <input type="checkbox" id="EMR_dr_IGD_P1_RiwayatSosial3" name="EMR_dr_IGD_P1_RiwayatSosial3" value="Alkohol" class="md-check">
                                  <label for="EMR_dr_IGD_P1_RiwayatSosial3">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Alkohol </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <span class="control-label">Lain lain : </span>
                                <input type="text" id="EMR_dr_IGD_P1_RiwayatSosial4" name="EMR_dr_IGD_P1_RiwayatSosial4" class="form-control" placeholder="Lain lain">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                          <span><b>Riwayat Penggunaan Obat</b></span>
                        </div>
                        <div class="portlet-body">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <textarea class="form-control" id="EMR_dr_IGD_P1_RiwayatPenggunaanObat" name="EMR_dr_IGD_P1_RiwayatPenggunaanObat" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                            <label for="form_control_1">Riwayat Penggunaan Obat</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P1_btnsimpan" style="width:100%">SIMPAN</a><br/><br/>
                  </div>-->
                  <div class="col-md-12"><br>
                    <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                      <button type="button" id="EMR_dr_IGD_P1_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                      <button type="button" id="EMR_dr_IGD_P1_HalamanNext" class="btn green" style="width:50%">Lanjutkan >></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_dr_IGD_P2_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn white col-md-12">Information (Penunjang)</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                            <?php
                            $cekD2 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Kerja'")->num_rows();
                            $getD2 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Kerja'");
                            ?>
                            <div class="row md-checkbox-inline">
                              <div class="col-md-12 md-checkbox">
                                <div class="row">
                                  <input type="checkbox" id="EMR_dr_IGD_P2_Radiologi" name="EMR_dr_IGD_P2_Radiologi" value="Radio" class="md-check">
                                  <label for="EMR_dr_IGD_P2_Radiologi">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Tambah Data Radiologi </label>
                                </div>
                              </div>
                            </div>
                              <div class="col-md-12 collapse" id="EMR_dr_IGD_P2_Radiologi2">
                                <div class="row">
                                  <a class="btn btn-outline blue" href="#EMR_dr_IGD_P2_RadiologiModal" data-toggle="modal"> Radiologi </a>
                                  <br>
                                  <br>
                                </div>
                              </div>
                              <!--<?php
                              if($cekD2 == 0)
                              {
                                ?>
                                <div id="EMR_dr_IGD_P2_RadiologiModal" class="modal fade modalInput" tabindex="-1" data-backdrop="static" data-width="40%" data-keyboard="false" style="width:40%">
                                  <div class="modal-content">
                                    <div class="modal-header bg-blue bg-font-blue">
                                        <h4 class="blue modal-title"><center><b></b></center></h4>
                                    </div>
                                    <div class="modal-body">
                                      <h4> Anda Belum Mengisi Diagnosis Kerja, Silahkan Isi Diagnosis Kerja Terlebih Dahulu!!! </H4>
                                    </div>
                                    <div class="modal-footer">
                                      <center>
                                        <div class="btn-group btn-group btn-group-justified" style="width:50%">
                                          <a type="button" class="btn blue" data-dismiss="modal" style="width:100%">OK</a>
                                        </div>
                                      </center>
                                    </div>
                                  </div>
                                </div>
                                <?php
                              }
                              else
                              {
                                ?>
                                <div id="EMR_dr_IGD_P2_RadiologiModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                    <div class="modal-header">
                                      <div class="col-md-12">
                                        <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                          <button disable type="button" class="btn white" style="height:55px; width:30%">
                                            <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                            <span style="font-size:14px"><b><?php echo $norm?></b></span>
                                          </button>
                                          <button disable type="button" class="btn white" style="height:55px; width:40%">
                                            <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                            <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                          </button>
                                          <button disable type="button" class="btn white" style="height:55px; width:30%">
                                            <span style="font-size:20px"><b>Pilih Radiologi</b></span>
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form-group">
                                        <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                          <div class="col-md-12">
                                            Diagnosis Kerja : </br>
                                            <?php for($lineD2_= 0 ; $lineD2_ < $cekD2 ; $lineD2_++)
                                            {
                                              echo $lineD2_+1 ?>. <?php echo $getD2->row($lineD2_)->DESKRIPSI_DIAGNOSIS; ?></br>
                                            <?php
                                            }
                                            ?>
                                            </br>
                                          </div>
                                        </div>
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
                                                    <input type="checkbox" id="EMR_dr_IGD_P2_radiologi_checkbox" name="EMR_dr_IGD_P2_radiologi_checkbox[]" value="<?php echo $row->KODE_DT_RADIO;?>">
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
                                          <input type="checkbox" id="EMR_dr_IGD_P2_radiologi_lain" name="EMR_dr_IGD_P2_radiologi_lain" value="DTR_0000">
                                          Lain-Lain
                                          <span></span>
                                          </label>
                                          <div class="form-group collapse" id="EMR_dr_IGD_P2_radiologi_lain1">
                                              <div class="form-group form-md-line-input">
                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                      <input type="text" id="EMR_dr_IGD_P2_radiologi_lain2" name="EMR_dr_IGD_P2_radiologi_lain2" class="form-control">
                                                      <label for="form_control">Radiologi Lain</label>
                                                      <span class="help-block">Masukkan Radiologi</span>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="mt-checkbox mt-checkbox-outline">
                                          <input type="checkbox" id="EMR_dr_IGD_P2_Gigi_Satuan" name="EMR_dr_IGD_P2_Gigi_Satuan" value="DTR_G000">
                                          Gigi Satuan
                                          <span></span>
                                          </label>
                                          <div class="form-group collapse" id="EMR_dr_IGD_P2_Gigi_Satuan1">
                                              <div class="form-group form-md-line-input">
                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                      <input type="text" id="EMR_dr_IGD_P2_Gigi_Satuan2" name="EMR_dr_IGD_P2_Gigi_Satuan2" class="form-control">
                                                      <label for="form_control">Gigi Satuan</label>
                                                      <span class="help-block">Masukkan Gigi Satuan</span>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer" style="display:block; text-align: left;">
                                        <p>
                                            CATATAN :</br>
                                            *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Puasa 4 - 6 jam sebelum pemeriksaan (diijinkan minum air putih)</br>
                                            **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Minum 3 - 4 gelas air, 30 menit sebelum pemeriksaan untuk kehamilan trimester I, dan jangan buang air kecil dahulu</br>
                                            ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Minum 3 - 4 gelas air, 30 menit sebelum pemeriksaan dan jangan buang air kecil dahulu</br>
                                        </p>
                                        <div id="alert-msg-EMR_dr_IGD_P2_isianRadiologi"></div>
                                        <button type="button" class="btn btn-default" id="EMR_dr_IGD_P2_reset_radio" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn green" id="EMR_dr_IGD_P2_ok_radio" >Oke</button>
                                    </div>
                                </div>
                                <?php
                              }
                              ?>-->
                              <div id="EMR_dr_IGD_P2_RadiologiModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                  <div class="modal-header">
                                    <div class="col-md-12">
                                      <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                        <button disable type="button" class="btn white" style="height:55px; width:30%">
                                          <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                          <span style="font-size:14px"><b><?php echo $norm?></b></span>
                                        </button>
                                        <button disable type="button" class="btn white" style="height:55px; width:40%">
                                          <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                          <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                        </button>
                                        <button disable type="button" class="btn white" style="height:55px; width:30%">
                                          <span style="font-size:20px"><b>Pilih Radiologi</b></span>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                        <div class="col-md-12">
                                          Diagnosis Kerja : </br>
                                          <?php for($lineD2_= 0 ; $lineD2_ < $cekD2 ; $lineD2_++)
                                          {
                                            echo $lineD2_+1 ?>. <?php echo $getD2->row($lineD2_)->DESKRIPSI_DIAGNOSIS; ?></br>
                                          <?php
                                          }
                                          ?>
                                          </br>
                                        </div>
                                      </div>
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
                                                  <input type="checkbox" id="EMR_dr_IGD_P2_radiologi_checkbox" name="EMR_dr_IGD_P2_radiologi_checkbox[]" value="<?php echo $row->KODE_DT_RADIO;?>">
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
                                        <input type="checkbox" id="EMR_dr_IGD_P2_radiologi_lain" name="EMR_dr_IGD_P2_radiologi_lain" value="DTR_0000">
                                        Lain-Lain
                                        <span></span>
                                        </label>
                                        <div class="form-group collapse" id="EMR_dr_IGD_P2_radiologi_lain1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_dr_IGD_P2_radiologi_lain2" name="EMR_dr_IGD_P2_radiologi_lain2" class="form-control">
                                                    <label for="form_control">Radiologi Lain</label>
                                                    <span class="help-block">Masukkan Radiologi</span>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" id="EMR_dr_IGD_P2_Gigi_Satuan" name="EMR_dr_IGD_P2_Gigi_Satuan" value="DTR_G000">
                                        Gigi Satuan
                                        <span></span>
                                        </label>
                                        <div class="form-group collapse" id="EMR_dr_IGD_P2_Gigi_Satuan1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_dr_IGD_P2_Gigi_Satuan2" name="EMR_dr_IGD_P2_Gigi_Satuan2" class="form-control">
                                                    <label for="form_control">Gigi Satuan</label>
                                                    <span class="help-block">Masukkan Gigi Satuan</span>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer" style="display:block; text-align: left;">
                                      <p>
                                          CATATAN :</br>
                                          *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Puasa 4 - 6 jam sebelum pemeriksaan (diijinkan minum air putih)</br>
                                          **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Minum 3 - 4 gelas air, 30 menit sebelum pemeriksaan untuk kehamilan trimester I, dan jangan buang air kecil dahulu</br>
                                          ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Minum 3 - 4 gelas air, 30 menit sebelum pemeriksaan dan jangan buang air kecil dahulu</br>
                                      </p>
                                      <div id="alert-msg-EMR_dr_IGD_P2_isianRadiologi"></div>
                                      <button type="button" class="btn btn-default" id="EMR_dr_IGD_P2_reset_radio" data-dismiss="modal">Batal</button>
                                      <button type="button" class="btn green" id="EMR_dr_IGD_P2_ok_radio" >Oke</button>
                                  </div>
                              </div>
                            <div class="row md-checkbox-inline">
                              <div class="col-md-12 md-checkbox">
                                <div class="row">
                                  <input type="checkbox" id="EMR_dr_IGD_P2_Laborat" name="EMR_dr_IGD_P2_Laborat" value="Laborat" class="md-check">
                                  <label for="EMR_dr_IGD_P2_Laborat">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Tambah Data Laboratorium </label>
                                </div>
                              </div>
                            </div>
                              <div class="col-md-12 collapse" id="EMR_dr_IGD_P2_Laborat2">
                                <div class="row">
                                  <a class="btn btn-outline blue" href="#EMR_dr_IGD_P2_LaboratModal" data-toggle="modal"> Laboratorium </a>
                                  <br>
                                  <br>
                                </div>
                              </div>
                              <!--<?php
                              if($cekD2 == 0)
                              {
                                ?>
                                <div id="EMR_dr_IGD_P2_LaboratModal" class="modal fade modalInput" tabindex="-1" data-backdrop="static" data-width="40%" data-keyboard="false" style="width:40%">
                                  <div class="modal-content">
                                    <div class="modal-header bg-blue bg-font-blue">
                                        <h4 class="blue modal-title"><center><b></b></center></h4>
                                    </div>
                                    <div class="modal-body">
                                      <h4> Anda Belum Mengisi Diagnosis Kerja, Silahkan Isi Diagnosis Kerja Terlebih Dahulu!!! </H4>
                                    </div>
                                    <div class="modal-footer">
                                      <center>
                                        <div class="btn-group btn-group btn-group-justified" style="width:50%">
                                          <a type="button" class="btn blue" data-dismiss="modal" style="width:100%">OK</a>
                                        </div>
                                      </center>
                                    </div>
                                  </div>
                                </div>
                                <?php
                              }
                              else
                              {
                                ?>
                                <div id="EMR_dr_IGD_P2_LaboratModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                  <div class="modal-header">
                                    <div class="col-md-12">
                                      <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                        <button disable type="button" class="btn white" style="height:55px; width:30%">
                                          <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                          <span style="font-size:14px"><b><?php echo $norm?></b></span>
                                        </button>
                                        <button disable type="button" class="btn white" style="height:55px; width:40%">
                                          <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                          <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                        </button>
                                        <button disable type="button" class="btn white" style="height:55px; width:30%">
                                          <span style="font-size:20px"><b>Pilih Laboratorium</b></span>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                    <div class="modal-body">
                                      <div class="form-group">
                                        <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                          <div class="col-md-12">
                                            Diagnosis Kerja : </br>
                                            <?php for($lineD2_= 0 ; $lineD2_ < $cekD2 ; $lineD2_++)
                                            {
                                              echo $lineD2_+1 ?>. <?php echo $getD2->row($lineD2_)->DESKRIPSI_DIAGNOSIS; ?></br>
                                            <?php
                                            }
                                            ?>
                                            </br>
                                          </div>
                                        </div>
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
                                                    <input type="checkbox" id="EMR_dr_IGD_P2_laboratorium_checkbox" name="EMR_dr_IGD_P2_laboratorium_checkbox[]" value="<?php echo $row->KODE_DT_LABORATORIUM;?>">
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
                                          <input type="checkbox" id="EMR_dr_IGD_P2_laboratorium_lain" name="EMR_dr_IGD_P2_laboratorium_lain" value="DTL_0000">
                                          Lain-Lain
                                          <span></span>
                                          </label>
                                          <div class="form-group collapse" id="EMR_dr_IGD_P2_laboratorium_lain1">
                                              <div class="form-group form-md-line-input">
                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                      <input type="text" id="EMR_dr_IGD_P2_laboratorium_lain2" name="EMR_dr_IGD_P2_laboratorium_lain2" class="form-control">
                                                      <label for="form_control">Laboratorium Lain</label>
                                                      <span class="help-block">Masukkan Laboratorium</span>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer" style="display:block; text-align: left;">
                                        <div id="alert-msg-EMR_dr_IGD_P2_isianLaborat"></div>
                                        <button type="button" class="btn btn-default" id="EMR_dr_IGD_P2_reset_laboratorium" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn green" id="EMR_dr_IGD_P2_ok_laboratorium" >Oke</button>
                                    </div>
                                </div>
                                <?php
                              }
                              ?>-->
                              <div id="EMR_dr_IGD_P2_LaboratModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                <div class="modal-header">
                                  <div class="col-md-12">
                                    <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                      <button disable type="button" class="btn white" style="height:55px; width:30%">
                                        <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                        <span style="font-size:14px"><b><?php echo $norm?></b></span>
                                      </button>
                                      <button disable type="button" class="btn white" style="height:55px; width:40%">
                                        <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                        <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                      </button>
                                      <button disable type="button" class="btn white" style="height:55px; width:30%">
                                        <span style="font-size:20px"><b>Pilih Laboratorium</b></span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                        <div class="col-md-12">
                                          Diagnosis Kerja : </br>
                                          <?php for($lineD2_= 0 ; $lineD2_ < $cekD2 ; $lineD2_++)
                                          {
                                            echo $lineD2_+1 ?>. <?php echo $getD2->row($lineD2_)->DESKRIPSI_DIAGNOSIS; ?></br>
                                          <?php
                                          }
                                          ?>
                                          </br>
                                        </div>
                                      </div>
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
                                                  <input type="checkbox" id="EMR_dr_IGD_P2_laboratorium_checkbox" name="EMR_dr_IGD_P2_laboratorium_checkbox[]" value="<?php echo $row->KODE_DT_LABORATORIUM;?>">
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
                                        <input type="checkbox" id="EMR_dr_IGD_P2_laboratorium_lain" name="EMR_dr_IGD_P2_laboratorium_lain" value="DTL_0000">
                                        Lain-Lain
                                        <span></span>
                                        </label>
                                        <div class="form-group collapse" id="EMR_dr_IGD_P2_laboratorium_lain1">
                                            <div class="form-group form-md-line-input">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="EMR_dr_IGD_P2_laboratorium_lain2" name="EMR_dr_IGD_P2_laboratorium_lain2" class="form-control">
                                                    <label for="form_control">Laboratorium Lain</label>
                                                    <span class="help-block">Masukkan Laboratorium</span>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer" style="display:block; text-align: left;">
                                      <div id="alert-msg-EMR_dr_IGD_P2_isianLaborat"></div>
                                      <button type="button" class="btn btn-default" id="EMR_dr_IGD_P2_reset_laboratorium" data-dismiss="modal">Batal</button>
                                      <button type="button" class="btn green" id="EMR_dr_IGD_P2_ok_laboratorium" >Oke</button>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--<a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P2_btnsimpan" style="width:100%">SIMPAN</a><br/><br/>-->
                </div>
                <!--<div id="alert-msg-EMR_dr_IGD_P2_belumpilih"></div>-->
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_dr_IGD_P3_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn white col-md-12">Diagnosis</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                        <div class="portlet light bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Diagnosis Kerja</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <?php
                              $cekD1 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Kerja'")->num_rows();
                              $getD1 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Kerja'");
                              if($cekD1 != 0)
                              {
                                ?>
                                <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                  <div class="col-md-12">
                                    Diagnosis Kerja yang sudah tersimpan : </br>
                                    <?php for($lineD1_= 0 ; $lineD1_ < $cekD1 ; $lineD1_++)
                                    {
                                      echo $lineD1_+1 ?>. <?php echo $getD1->row($lineD1_)->DESKRIPSI_DIAGNOSIS; ?></br>
                                    <?php
                                    }
                                    ?>
                                    </br>
                                  </div>
                                </div>
                                <?php
                              }
                              ?>
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div id="EMR_dr_IGD_P3_TemplateDiagnosisKerja"></div>
                                <div class="col-md-1" id="EMR_dr_IGD_P3_TambahDiagnosisKerja"></div>
                                <button class="btn green-haze" type="button" name="EMR_dr_IGD_P3_ButtonTambahDiagnosisKerja" id="EMR_dr_IGD_P3_ButtonTambahDiagnosisKerja">+ Tambah Diagnosis Kerja</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="portlet light bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Diagnosis Utama</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <?php
                              $cekD4 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Utama'")->num_rows();
                              $getD4 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Utama'");
                              if($cekD4 != 0){?>
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-12">
                                  Diagnosis Utama yang sudah tersimpan : </br>
                                  <?php for($lineD4_= 0 ; $lineD4_ < $cekD4 ; $lineD4_++)
                                  {
                                    echo $lineD4_+1 ?>. <?php echo $getD4->row($lineD4_)->DESKRIPSI_DIAGNOSIS; ?></br>
                                  <?php }?></br>
                                </div>
                              </div>
                              <?php }
                              else{ ?>
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-12">
                                  <div class="form-group form-md-line-input form-md-floating-label">
                                    <input type="text" class="form-control TampilanDiagnosis" name="EMR_dr_IGD_P3_DiagnosisUtama" id="EMR_dr_IGD_P3_DiagnosisUtama">
                                    <input type="hidden" name="EMR_dr_IGD_P3_SimpanIdDiagnosisUtama" id="EMR_dr_IGD_P3_SimpanIdDiagnosisUtama" class="form-control id_diagnosis"/>
                                    <input type="hidden" name="EMR_dr_IGD_P3_SimpanNamaDiagnosisUtama" id="EMR_dr_IGD_P3_SimpanNamaDiagnosisUtama" class="form-control nama_diagnosis"/>
                                    <label for="form_control_1">Diagnosis Utama</label>
                                    <span class="help-block">Masukkan Diagnosis Utama</span>
                                  </div>
                                </div>
                              </div>
                            <?php } ?>
                              <!--<div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-12">
                                  <div class="form-group form-md-line-input form-md-floating-label">
                                    <input type="text" class="form-control TampilanDiagnosis" name="EMR_dr_IGD_P3_DiagnosisUtama" id="EMR_dr_IGD_P3_DiagnosisUtama">
                                    <input type="text" name="EMR_dr_IGD_P3_SimpanIdDiagnosisUtama" id="EMR_dr_IGD_P3_SimpanIdDiagnosisUtama" class="form-control id_diagnosis"/>
                                    <input type="text" name="EMR_dr_IGD_P3_SimpanNamaDiagnosisUtama" id="EMR_dr_IGD_P3_SimpanNamaDiagnosisUtama" class="form-control nama_diagnosis"/>
                                    <label for="form_control_1">Diagnosis Utama</label>
                                    <span class="help-block">Masukkan Diagnosis Utama</span>
                                  </div>
                                </div>
                              </div>-->
                            </div>
                          </div>
                        </div>
                        <div class="portlet light bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Diagnosis Komplikasi</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <?php
                              $cekD2 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Komplikasi'")->num_rows();
                              $getD2 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Komplikasi'");
                              if($cekD2 != 0){?>
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-12">
                                  Diagnosis Komplikasi yang sudah tersimpan : </br>
                                  <?php for($lineD2_= 0 ; $lineD2_ < $cekD2 ; $lineD2_++)
                                  {
                                    echo $lineD2_+1 ?>. <?php echo $getD2->row($lineD2_)->DESKRIPSI_DIAGNOSIS; ?></br>
                                  <?php }?></br>
                                </div>
                              </div>
                              <?php } ?>
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div id="EMR_dr_IGD_P3_TemplateDiagnosisKomplikasi"></div>
                                <div class="col-md-1" id="EMR_dr_IGD_P3_TambahDiagnosisKomplikasi"></div>
                                <button class="btn green-haze" type="button" name="EMR_dr_IGD_P3_ButtonTambahDiagnosisKomplikasi" id="EMR_dr_IGD_P3_ButtonTambahDiagnosisKomplikasi">+ Tambah Diagnosis Komplikasi</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="portlet light bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Diagnosis Sekunder</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <?php
                              $cekD3 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Sekunder'")->num_rows();
                              $getD3 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Sekunder'");
                              if($cekD3 != 0){?>
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div class="col-md-12">
                                  Diagnosis Sekunder yang sudah tersimpan : </br>
                                  <?php for($lineD3_= 0 ; $lineD3_ < $cekD3 ; $lineD3_++)
                                  {
                                    echo $lineD3_+1 ?>. <?php echo $getD3->row($lineD3_)->DESKRIPSI_DIAGNOSIS; ?></br>
                                  <?php }?></br>
                                </div>
                              </div>
                              <?php } ?>
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div id="EMR_dr_IGD_P3_TemplateDiagnosisSekunder"></div>
                                <div class="col-md-1" id="EMR_dr_IGD_P3_TambahDiagnosisSekunder"></div>
                                <button class="btn green-haze" type="button" name="EMR_dr_IGD_P3_ButtonTambahDiagnosisSekunder" id="EMR_dr_IGD_P3_ButtonTambahDiagnosisSekunder">+ Tambah Diagnosis Sekunder</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--<div class="portlet light bordered">
                          <div class="portlet-title tabbable-line">
                            <div class="caption">
                              <span class="caption-subject font-dark bold">Diagnosis Banding</span>
                            </div>
                          </div>
                          <div class="portlet-body">
                            <div class="tab-content">
                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <div id="EMR_dr_IGD_P3_TemplateDiagnosisBanding"></div>
                                <div class="col-md-1" id="EMR_dr_IGD_P3_TambahDiagnosisBanding"></div>
                                <button class="btn green-haze" type="button" name="EMR_dr_IGD_P3_ButtonTambahDiagnosisBanding" id="EMR_dr_IGD_P3_ButtonTambahDiagnosisBanding">+ Tambah Diagnosis Banding</button>
                              </div>
                            </div>
                          </div>
                        </div>-->
                      </div>
                    </div>
                    <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P3_btnsimpan" style="width:100%">SIMPAN</a><br/><br/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_dr_IGD_P4_Halaman">
          <!--<div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_dr_IGD_P5_btnHalaman1" class="btn white col-md-12">Penatalaksanaan</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light portlet-fit bordered">
                <div class="portlet-body row">
                  <div class="col-md-3">
                    <label>Jam : </label>
                    <input type="text" class="form-control timepicker timepicker-24" style="width:100%" id="xEMR_dr_IGD_P5_JamPl" value="<?=date('H:i');?>">
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Tindakan : </label>
                      <select class="bs-select form-control" name="xEMR_dr_IGD_P5_Tindakan" id="xEMR_dr_IGD_P5_Tindakan" data-live-search="true" data-size="8">
                        <option value='' disabled selected></option>
                        <?php
                        foreach($dataTalak as $df)
                        {?>
                          <option value='<?php echo $df->TINDAKAN ;?>'><?php echo $df->TINDAKAN ;?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Rute : </label>
                      <select class="bs-select form-control" name="xEMR_dr_IGD_P5_rute" id="xEMR_dr_IGD_P5_rute" data-live-search="true" data-size="8">
                        <option value='' disabled selected></option>
                        <?php
                        foreach($dataTalak2 as $dj)
                        {?>
                          <option value='<?php echo $dj->PEMBERIAN ;?>'><?php echo $dj->PEMBERIAN ;?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nama Obat/Infus : </label>
                      <select class="bs-select form-control" name="xEMR_dr_IGD_P5_Obatinfus" id="xEMR_dr_IGD_P5_Obatinfus" data-live-search="true" data-size="8">
                        <option value='' disabled selected></option>
                        <?php
                        foreach($dataTalak3 as $dz)
                        {?>
                          <option value='<?php echo $dz->NAMABARANG ;?>'><?php echo $dz->NAMABARANG ;?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="control-label" style="font-size:14px">Dosis</label>
                      <input type="text" name="xEMR_dr_IGD_P5_Dosis" id="xEMR_dr_IGD_P5_Dosis" class="form-control" placeholder="Ketik Dosis Obat"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <br>
                    <a class="btn green" id="EMR_dr_IGD_P5_btnsimpanxx" style="width:100%"><i class="fa fa-plus pull-left"></i> SIMPAN</a><br/><br/>
                  </div>
                  <input type="text" name="xEMR_dr_IGD_P5_Oleh" id="xEMR_dr_IGD_P5_Oleh" class="form-control collapse" value="<?=$username;?>"/>
                  <input type="text" name="xEMR_dr_IGD_P5_ket" id="xEMR_dr_IGD_P5_ket" class="form-control collapse" value="Belum dilaksanakan"/>
                  <input type="text" class="collapse" id="xEMR_dr_IGD_P5_idper" value="<?=$cekidpemeriksaan;?>">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn white col-md-12"> View Penatalaksanaan Pasien : <?=$nama;?></button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="portlet-body row">
                  <div class="col-md-12">
                    <table class="table table-striped table-bordered table-advance table-hover">
                      <thead>
                        <tr>
                          <th class="col-md-1">
                            <i class="fa fa-clock-o"></i> Jam </th>
                          <th class="colmd-3">
                            <i class="fa fa-heartbeat"></i> Nama Obat/infus </th>
                          <th class="col-md-2">
                            <i class="fa fa-stethoscope"></i> Dosis </th>
                          <th class="col-md-3">
                            <i class="fa fa-eyedropper"></i> Rute </th>
                          <th class="col-md-3">
                            Tindakan </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $cekisiOb = $this->db->query("select * from EMR_IGD_PENATALAKSANAAN where ID_PEMERIKSAAN ='$cekidpemeriksaan'")->num_rows();
                        if($cekisiOb == 0)
                        {?>
                          <tr>
                            <td colspan="5"><center>Data Belum ada</center></td>
                          </tr>
                        <?php
                        }
                        else
                        {
                          $lineOb = $this->db->get("EMR_IGD_PENATALAKSANAAN where ID_PEMERIKSAAN = '$cekidpemeriksaan'")->num_rows();
                          $showOb = $this->db->get("EMR_IGD_PENATALAKSANAAN where ID_PEMERIKSAAN = '$cekidpemeriksaan' order by JAM desc");
                          for($showOb_ = 0; $showOb_ < $lineOb; $showOb_++)
                          {?>
                            <tr>
                              <td><?php echo $showOb->row($showOb_)->JAM;?></td>
                              <td><?php echo $showOb->row($showOb_)->NAMA_OBAT;?></td>
                              <td><?php echo $showOb->row($showOb_)->DOSIS;?></td>
                              <td><?php echo $showOb->row($showOb_)->RUTE;?></td>
                              <td><?php echo $showOb->row($showOb_)->TINDAKAN;?></td>
                            </tr>
                          <?php
                          }
                        }?>
                        <input type="text" class="form-control collapse" id="EMR_dr_IGD_InputcekisiOb" value="<?=$cekisiOb +1;?>">
                        <input type="text" class="form-control collapse" id="EMR_dr_IGD_observasiOb">
                        <input type="text" class="form-control collapse" id="EMR_dr_IGD_olehOb" value="<?=$username;?>">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_dr_IGD_P4_btnHalaman1" class="btn white col-md-12">Recomendation</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="portlet light bordered">
                      <div class="portlet-body">
                        <div class="tab-content">
                          <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                            <div class="row md-checkbox-inline">
                              <div class="col-md-12 md-checkbox">
                                <div class="row">
                                  <input type="checkbox" id="EMR_dr_IGD_P4_Obat" name="EMR_dr_IGD_P4_Obat" value="" class="md-check">
                                  <label for="EMR_dr_IGD_P4_Obat">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Tambah Data Obat </label>
                                </div>
                              </div>
                            </div>
                              <div class="col-md-12 collapse" id="EMR_dr_IGD_P4_Obat2">
                                <div class="row">
                                  <a class="btn btn-outline blue" href="#EMR_dr_IGD_P4_ObatModal" data-toggle="modal"> Obat </a>
                                  <br>
                                  <br>
                                </div>
                              </div>
                              <div id="EMR_dr_IGD_P4_ObatModal" class="modal" data-width="100%" style="width:90%;">
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                      <button disable type="button" class="btn white" style="height:55px; width:30%">
                                        <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                        <span style="font-size:14px"><b><?php echo $norm?></b></span>
                                      </button>
                                      <button disable type="button" class="btn white" style="height:55px; width:70%">
                                        <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                        <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                      </button>
                                    </div>
                                  </div>
                                  <div class="modal-header bg-blue bg-font-blue col-md-4">
                                    <h4 class="modal-title"><center><b>Obat Pasien</b></center></h4>
                                  </div>
                                  <div class="col-md-4 bg-blue">
                                    <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                      <a type="button" id="EMR_dr_IGD_P4_ObatbtnObatSatuan" class="btn disabled white" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Satuan</b></a>
                                      <a type="button" id="EMR_dr_IGD_P4_ObatbtnObatRacik" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Racik</b></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-body">
                                  <input type="hidden" id="EMR_dr_IGD_P4_ObatstatObat" value="Satuan">
                                  <div class="row" id="EMR_dr_IGD_P4_ObatformObatSatuan">
                                    <div id="EMR_dr_IGD_P4_Obatdiv1Satuan">
                                    </div>
                                    <div class="col-md-4" id="EMR_dr_IGD_P4_Obatdiv_buttonSatuan">
                                      <center>
                                        <a class="btn green-jungle col-md-12" name="EMR_dr_IGD_P4_ObattambahSatuan" value="Tambah Data" id="EMR_dr_IGD_P4_ObattambahSatuan" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                                      </center>
                                    </div>
                                  </div>
                                  <div class="collapse" id="EMR_dr_IGD_P4_ObatformObatRacik">
                                    <div class="form-group mt-repeater row">
                                      <div id="EMR_dr_IGD_P4_Obatdivracikobat"></div>
                                      <div class="col-md-4" id="EMR_dr_IGD_P4_Obatdiv_buttonracikobat">
                                        <center>
                                          <a class="btn green-jungle col-md-12" name="EMR_dr_IGD_P4_Obattambahracikobat" value="Tambah Data" id="EMR_dr_IGD_P4_Obattambahracikobat" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                                        </center>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" id="" data-dismiss="modal" class="btn blue">Simpan</button>
                                </div>
                              </div>
                            <!--<div class="row md-checkbox-inline">
                              <div class="col-md-12 md-checkbox">
                                <div class="row">
                                  <input type="checkbox" id="EMR_dr_IGD_P4_EkgDll" name="EMR_dr_IGD_P4_EkgDll" value="" class="md-check">
                                  <label for="EMR_dr_IGD_P4_EkgDll">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Tambah Data EKG Dan Lainnya </label>
                                </div>
                              </div>
                            </div>
                              <div class="col-md-12 collapse" id="EMR_dr_IGD_P4_EkgDll2">
                                <div class="row">
                                  <a class="btn btn-outline blue" href="#EMR_dr_IGD_P4_EkgDll2Modal" data-toggle="modal"> EKG Dan Lainnya </a>
                                  <br>
                                  <br>
                                </div>
                              </div>
                              <div id="EMR_dr_IGD_P4_EkgDll2Modal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                <div class="modal-header">
                                  <div class="col-md-12">
                                    <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                      <button disable type="button" class="btn white" style="height:55px; width:30%">
                                        <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                        <span style="font-size:14px"><b><?php echo $norm?></b></span>
                                      </button>
                                      <button disable type="button" class="btn white" style="height:55px; width:40%">
                                        <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                        <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                      </button>
                                      <button disable type="button" class="btn white" style="height:55px; width:30%">
                                        <span style="font-size:20px"><b>Pilih EKG Dan Lainnya</b></span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <?php
                                        foreach($dataCheckUp as $row)
                                        {
                                          ?>
                                              <div class="col-md-4">
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox" id="EMR_dr_IGD_P4_checkup_checkbox" name="EMR_dr_IGD_P4_checkup_checkbox[]" value="<?php echo $row->KODE_DT_CHECKUP;?>">
                                                <?php
                                                  echo $row->NM_DT_CHECKUP;
                                                ?>
                                                <span></span>
                                                </label>
                                              </div>
                                          <?php
                                        }
                                        ?>

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <label class="text-success bold"><u>CHECK UP LAIN</u></label>
                                        </br>
                                        <div class="col-md-4">
                                          <label class="mt-checkbox mt-checkbox-outline">
                                          <input type="checkbox" id="EMR_dr_IGD_P4_Checkup_lain" name="EMR_dr_IGD_P4_Checkup_lain" value="DTM_0000">
                                          Lain-Lain
                                          <span></span>
                                          </label>
                                          <div class="form-group collapse" id="EMR_dr_IGD_P4_Checkup_lain1">
                                              <div class="form-group form-md-line-input">
                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                      <input type="text" id="EMR_dr_IGD_P4_Checkup_lain2" name="EMR_dr_IGD_P4_Checkup_lain2" class="form-control">
                                                      <label for="form_control">Check Up Lain</label>
                                                      <span class="help-block">Masukkan Check Up</span>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer" style="display:block; text-align: left;">
                                  <div id="alert-msg-EMR_dr_IGD_P4_isianEKG"></div>
                                    <button type="button" class="btn btn-default" id="EMR_dr_IGD_P4_reset_EKG" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn green" id="EMR_dr_IGD_P4_ok_EKG">Oke</button>
                                </div>
                              </div>
                            <div class="row md-checkbox-inline">
                              <div class="col-md-12 md-checkbox">
                                <div class="row">
                                  <input type="checkbox" id="EMR_dr_IGD_P4_Rujukan" name="EMR_dr_IGD_P4_Rujukan" value="Rujukan Pasien" class="md-check">
                                  <label for="EMR_dr_IGD_P4_Rujukan">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Tambah Data Rujukan </label>
                                </div>
                              </div>
                            </div>
                              <div class="col-md-12 collapse" id="EMR_dr_IGD_P4_Rujukan2">
                                <div class="row">
                                  <a class="btn btn-outline blue" href="#EMR_dr_IGD_P4_Rujukan2Modal" data-toggle="modal"> Rujukan </a>
                                  <br>
                                  <br>
                                </div>
                              </div>
                              <div id="EMR_dr_IGD_P4_Rujukan2Modal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                                <div class="modal-header">
                                  <div class="col-md-12">
                                    <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                      <button disable type="button" class="btn white" style="height:55px; width:30%">
                                        <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                        <span style="font-size:14px"><b><?php echo $norm?></b></span>
                                      </button>
                                      <button disable type="button" class="btn white" style="height:55px; width:40%">
                                        <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                                        <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                                      </button>
                                      <button disable type="button" class="btn white" style="height:55px; width:30%">
                                        <span style="font-size:20px"><b>Pilih Rujukan</b></span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="portlet light bordered">
                                          <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                              <span class="caption-subject font-dark bold">Dirujuk ke:</span>
                                            </div>
                                          </div>
                                          <div class="portlet-body">
                                            <div class="tab-content">
                                              <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.25em;">
                                                  <div class="row">
                                                    <div class="col-md-4">
                                                      <label class="mt-checkbox mt-checkbox-outline">
                                                      <input type="checkbox" id="EMR_dr_IGD_P4_rahligizi" name="EMR_dr_IGD_P4_rahligizi" value="Ahli Gizi" >
                                                      Ahli Gizi
                                                      <span></span>
                                                      </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                      <label class="mt-checkbox mt-checkbox-outline">
                                                      <input type="checkbox" id="EMR_dr_IGD_P4_rrehabilitasi" name="EMR_dr_IGD_P4_rrehabilitasi" value="Rehabilitasi Medik" >
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
                                                      <input type="checkbox" id="EMR_dr_IGD_P4_rklinik" name="EMR_dr_IGD_P4_rklinik" value="Klinik Spesialis" >
                                                      Klinik Spesialis
                                                      <span></span>
                                                      </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group collapse" id="EMR_dr_IGD_P4_rklinik_1">
                                                          <div class="form-group form-md-line-input">
                                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                                  <input type="text" id="EMR_dr_IGD_P4_rklinik_2" name="EMR_dr_IGD_P4_rklinik_2" class="form-control">
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
                                                      <input type="checkbox" id="EMR_dr_IGD_P4_rlain" name="EMR_dr_IGD_P4_rlain" value="lain" >
                                                      Lain - Lain
                                                      <span></span>
                                                      </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group collapse" id="EMR_dr_IGD_P4_rlain_1">
                                                          <div class="form-group form-md-line-input">
                                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                                  <input type="text" id="EMR_dr_IGD_P4_rlain_2" name="EMR_dr_IGD_P4_rlain_2" class="form-control">
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
                                <div class="modal-footer" style="display:block; text-align: left;">
                                  <div id="alert-msg-EMR_dr_IGD_P4_isianRujuk"></div>
                                    <button type="button" class="btn btn-default" id="EMR_dr_IGD_P4_reset_Rujuk" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn green" id="EMR_dr_IGD_P4_ok_Rujuk">Oke</button>
                                </div>
                              </div>-->
                            <div class="row md-checkbox-inline">
                              <div class="col-md-12 md-checkbox">
                                <div class="row">
                                  <input type="checkbox" id="EMR_dr_IGD_P4_Edukasi" name="EMR_dr_IGD_P4_Edukasi" value="Edukasi" class="md-check">
                                  <label for="EMR_dr_IGD_P4_Edukasi">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Edukasi </label>
                                </div>
                              </div>
                            </div>
                              <div class="row collapse" id="EMR_dr_IGD_P4_edukasi_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <div class="form-group form-md-line-input">
                                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                              <input type="text" id="EMR_dr_IGD_P4_edukasi_2" name="EMR_dr_IGD_P4_edukasi_2" class="form-control">
                                              <label for="form_control">Edukasi</label>
                                              <span class="help-block">Masukkan Edukasi</span>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            <div class="row md-checkbox-inline">
                              <div class="col-md-12 md-checkbox">
                                <div class="row">
                                  <input type="checkbox" id="EMR_dr_IGD_P4_Prognosis" name="EMR_dr_IGD_P4_Prognosis" value="Prognosis" class="md-check">
                                  <label for="EMR_dr_IGD_P4_Prognosis">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Prognosis </label>
                                </div>
                              </div>
                            </div>
                              <div class="row collapse" id="EMR_dr_IGD_P4_Prognosis_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="md-radio-inline">
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_dr_IGD_P4_prognosis1" name="EMR_dr_IGD_P4_prognosis" class="md-radiobtn" value="Bonam" checked>
                                        <label for="EMR_dr_IGD_P4_prognosis1">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Bonam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_dr_IGD_P4_prognosis2" name="EMR_dr_IGD_P4_prognosis" class="md-radiobtn" value="Malam">
                                        <label for="EMR_dr_IGD_P4_prognosis2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Malam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_dr_IGD_P4_prognosis3" name="EMR_dr_IGD_P4_prognosis" class="md-radiobtn" value="Dubia Ad Bonam">
                                        <label for="EMR_dr_IGD_P4_prognosis3">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Dubia Ad Bonam </label>
                                      </div>
                                      <div class="md-radio">
                                        <input type="radio" id="EMR_dr_IGD_P4_prognosis4" name="EMR_dr_IGD_P4_prognosis" class="md-radiobtn" value="Dubia Ad Malam">
                                        <label for="EMR_dr_IGD_P4_prognosis4">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Dubia Ad Malam </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!--<div class="row md-checkbox-inline">
                              <div class="col-md-12 md-checkbox">
                                <div class="row">
                                  <input type="checkbox" id="EMR_dr_IGD_P4_KontrolK" name="EMR_dr_IGD_P4_KontrolK" value="" class="md-check">
                                  <label for="EMR_dr_IGD_P4_KontrolK">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Kontrol Kembali </label>
                                </div>
                              </div>
                            </div>
                              <div class="row collapse" id="EMR_dr_IGD_P4_KontrolK_1">
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                          <input name="EMR_dr_IGD_P4_KontrolK_2" id="EMR_dr_IGD_P4_KontrolK_2" type="text" class="form-control" readonly>
                                          <span class="input-group-btn">
                                              <button class="btn default" type="button">
                                                  <i class="fa fa-calendar"></i>
                                              </button>
                                          </span>
                                      </div>
                                  </div>
                                    <span class="help-block">Pilih Tanggal Kontrol Kembali</span>
                                </div>
                              </div>-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--<a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P4_btnsimpan" style="width:100%">SIMPAN</a><br/><br/>
                  Silahkan Pilih Printer :
                  <?php
                  $getprt = printer_list(PRINTER_ENUM_LOCAL);
                  //$getprt = PRINTER_ENUM_LOCAL;
                  $printers = serialize($getprt);
                  $printers = unserialize($printers);
                  //Menampilkan List Printer
                  echo '<select name="printer" id="printer">';
                  foreach ($printers as $PrintDest)
                      echo "<option value='" . $PrintDest["NAME"] . "'>" . explode(",", $PrintDest["DESCRIPTION"])[1] . "</option>";
                  echo '</select>';
                  ?>
                  <br>-->
                  <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P4_btnsimpan" style="width:100%">SIMPAN</a><br/><br/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_dr_IGD_P5_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn white col-md-12">Resume</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light portlet-fit bordered">
                <div class="portlet-body">
                  <!--<center>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="col-md-6">
                          <div class="col-md-6">
                            <label>Jam : </label>
                            <input type="text" class="form-control timepicker timepicker-24" style="width:100%" id="EMR_dr_IGD_P6_JamOb" value="<?=date('H:i');?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label>Assesment : </label>
                          <select class="bs-select form-control" name="EMR_dr_IGD_P6_A" id="EMR_dr_IGD_P6_A" data-live-search="true" data-size="8">
                            <option value='' disabled selected></option>
                            <option value='Masalah Teratasi'>Masalah Teratasi</option>
                            <option value='Masalah teratasi sebagian'>Masalah teratasi sebagian</option>
                            <option value='Masalah belum teratasi'>Masalah belum teratasi</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <textarea class="form-control" id="EMR_dr_IGD_P6_SubyektifOb" name="EMR_dr_IGD_P6_SubyektifOb" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                            <label for="form_control_1">Subyektif</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <textarea class="form-control" id="EMR_dr_IGD_P6_PlanningOb" name="EMR_dr_IGD_P6_PlanningOb" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
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
                                      <input type="radio" id="EMR_dr_IGD_P6_KeadaanUmum1" name="EMR_dr_IGD_P6_KeadaanUmum" class="md-radiobtn" value="Baik" checked>
                                      <label for="EMR_dr_IGD_P6_KeadaanUmum1">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Baik </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P6_KeadaanUmum2" name="EMR_dr_IGD_P6_KeadaanUmum" class="md-radiobtn" value="Ringan">
                                      <label for="EMR_dr_IGD_P6_KeadaanUmum2">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Ringan </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P6_KeadaanUmum3" name="EMR_dr_IGD_P6_KeadaanUmum" class="md-radiobtn" value="Berat">
                                      <label for="EMR_dr_IGD_P6_KeadaanUmum3">
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
                                  <input type="text" id="EMR_dr_IGD_P6_GCSe" name="EMR_dr_IGD_P6_GCSe" value="4" class="form-control">
                                </div>
                                <div class="col-md-4">
                                  <span class="control-label">V : </span>
                                  <input type="text" id="EMR_dr_IGD_P6_GCSv" name="EMR_dr_IGD_P6_GCSv" value="5" class="form-control">
                                </div>
                                <div class="col-md-4">
                                  <span class="control-label">M : </span>
                                  <input type="text" id="EMR_dr_IGD_P6_GCSm" name="EMR_dr_IGD_P6_GCSm" value="6" class="form-control">
                                </div>
                                <br>
                                <div class="col-md-6">
                                  <span>Kesadaran : </span>
                                  <select class="bs-select form-control" name="EMR_dr_IGD_P6_Kesadaran" id="EMR_dr_IGD_P6_Kesadaran" data-live-search="true" data-size="8">
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
                                  <input type="text" id="EMR_dr_IGD_P6_SpO2" name="EMR_dr_IGD_P6_SpO2" class="form-control">
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
                                        <input type="text" id="EMR_dr_IGD_P6_TDSistolik" name="EMR_dr_IGD_P6_TDSistolik" value="" class="form-control">
                                      </div>
                                      <div class="col-md-4">
                                        <label for="form_control_1">Diastolik</label>
                                        <i style="font-size:12px"><b>mmHg</b></i>
                                        <input type="text" id="EMR_dr_IGD_P6_TDDiastolik" name="EMR_dr_IGD_P6_TDDiastolik" value="" class="form-control">
                                      </div>
                                      <div class="col-md-4">
                                        <label for="form_control_1">Suhu tubuh</label>
                                        <i style="font-size:12px"><b>&deg;C</b></i>
                                        <input type="text" id="EMR_dr_IGD_P6_suhutubuh" name="EMR_dr_IGD_P6_suhutubuh" value="" class="form-control">
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="tab-content">
                                      <div class="col-md-6">
                                        <label for="form_control_1">N</label>
                                        <i style="font-size:12px"><b>x/mnt</b></i>
                                        <input type="text" id="EMR_dr_IGD_P6_nadi" name="EMR_dr_IGD_P6_nadi" value="" class="form-control">
                                      </div>
                                      <div class="col-md-6">
                                        <div class="md-radio-inline">
                                          <div class="md-radio">
                                            <input type="radio" id="EMR_dr_IGD_P6_NadiCH_reguler" name="EMR_dr_IGD_P6_NadiCH" class="md-radiobtn" value="Reguler">
                                            <label for="EMR_dr_IGD_P6_NadiCH_reguler">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Reguler </label>
                                          </div>
                                          <div class="md-radio">
                                            <input type="radio" id="EMR_dr_IGD_P6_NadiCH_irreguler" name="EMR_dr_IGD_P6_NadiCH" class="md-radiobtn" value="Irreguler">
                                            <label for="EMR_dr_IGD_P6_NadiCH_irreguler">
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
                                        <input type="text" id="EMR_dr_IGD_P6_respiratory" name="EMR_dr_IGD_P6_respiratory" value="" class="form-control">
                                      </div>
                                      <div class="col-md-6">
                                        <div class="md-radio-inline">
                                          <div class="md-radio">
                                            <input type="radio" id="EMR_dr_IGD_P6_RespiratoryCH_teratur" name="EMR_dr_IGD_P6_RespiratoryCH" class="md-radiobtn" value="Teratur">
                                            <label for="EMR_dr_IGD_P6_RespiratoryCH_teratur">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Teratur </label>
                                          </div>
                                          <div class="md-radio">
                                            <input type="radio" id="EMR_dr_IGD_P6_RespiratoryCH_titeratur" name="EMR_dr_IGD_P6_RespiratoryCH" class="md-radiobtn" value="Tidak Teratur">
                                            <label for="EMR_dr_IGD_P6_RespiratoryCH_titeratur">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Tidak Teratur </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="portlet light bordered">
                              <div class="portlet-body">
                                <div class="tab-content">
                                  <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                    <div class="tab-content">
                                      <div class="col-md-3">
                                        <label for="form_control_1">BB</label>
                                        <i style="font-size:12px"><b>Kg</b></i>
                                        <input type="text" id="EMR_dr_IGD_P6_beratbadan" name="EMR_dr_IGD_P6_beratbadan" value="" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                        <label for="form_control_1">TB</label>
                                        <i style="font-size:12px"><b>Cm</b></i>
                                        <input type="text" id="EMR_dr_IGD_P6_tinggibadan" name="EMR_dr_IGD_P6_tinggibadan" value="" class="form-control">
                                      </div>
                                      <div class="col-md-6">
                                        <span>Nilai BMI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><b><span id="EMR_dr_IGD_P6_Nilai_BMI"></span></b></br>
                                        <span>Kategori BMI : </span><b><span id="EMR_dr_IGD_P6_Kategori_BMI"></span></b>
                                        <input type="hidden" id="EMR_dr_IGD_P6_Nilai_BMItxtss" name="EMR_dr_IGD_P6_Nilai_BMItxtss" value="" class="form-control">
                                        <input type="hidden" id="EMR_dr_IGD_P6_Kategori_BMItxtss" name="EMR_dr_IGD_P6_Kategori_BMItxtss" value="" class="form-control">
                                      </div>
                                      <?php
                                      if($Utahun < 1)
                                      {
                                        ?>
                                        <div class="col-md-12">
                                          <label for="form_control_1">Lingkar Kepala (Khusus Bayi)</label>
                                          <i style="font-size:12px"><b>Cm</b></i>
                                          <input type="text" id="EMR_dr_IGD_P6_lingkarkepala" name="EMR_dr_IGD_P6_lingkarkepala" value="" class="form-control">
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
                            <a type="button" class="btn green col-md-6" id="EMR_dr_IGD_P6_btnsimpan" style="width:50%">SIMPAN</a><br/><br/>
                          </center>
                        </div>
                      </div>
                    </div>
                  </center>-->
                </div>
              </div>
            </div>
          </div>
          <!--<div class="row">
            <div class="col-md-12">
              <button type="button" class="btn white col-md-12"> View Observasi Pasien : <?=$nama;?></button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light portlet-fit bordered">
                <div class="portlet-body">
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
                      <input type="text" class="form-control collapse" id="EMR_dr_IGD_P6_InputcekisiOb" value="<?=$cekisiOb +1;?>">
                      <input type="text" class="form-control collapse" id="EMR_dr_IGD_P6_observasiOb">
                      <input type="text" class="form-control collapse" id="EMR_dr_IGD_P6_olehOb" value="<?=$level;?> <?=$username;?>">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_dr_IGD_P7_btnHalaman1" class="btn white col-md-12">Pasien Keluar IGD</button>
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
                            <label>Jam : </label>
                            <input type="text" class="form-control timepicker timepicker-24" style="width:100%" id="EMR_dr_IGD_P7_Jam" value="<?=date('H:i');?>">
                        </div>
                        <div class="col-md-6">
                          <label>Airway : </label>
                          <select class="form-control bs-select" name="EMR_dr_IGD_P7_Airway" id="EMR_dr_IGD_P7_Airway" data-live-search="true" data-size="4">
                            <option value='' disabled selected></option>
                            <option value='Bebas'>Bebas</option>
                            <option value='Obstruksi Partial'>Obstruksi Partial</option>
                            <option value='Obstruksi Total'>Obstruksi Total</option>
                          </select>
                        </div>
                        <span class="col-md-12">Objektif :</span>
                        <div class="col-md-6">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-body row">
                              <div class="col-md-12">
                                <span class="control-label">Keadaan Umum : </span>
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_dr_IGD_P7_KeadaanUmum1" name="EMR_dr_IGD_P7_KeadaanUmum" class="md-radiobtn" value="Baik" checked>
                                    <label for="EMR_dr_IGD_P7_KeadaanUmum1">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Baik </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_dr_IGD_P7_KeadaanUmum2" name="EMR_dr_IGD_P7_KeadaanUmum" class="md-radiobtn" value="Ringan">
                                    <label for="EMR_dr_IGD_P7_KeadaanUmum2">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ringan </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_dr_IGD_P7_KeadaanUmum3" name="EMR_dr_IGD_P7_KeadaanUmum" class="md-radiobtn" value="Berat">
                                    <label for="EMR_dr_IGD_P7_KeadaanUmum3">
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
                                <input type="text" id="EMR_dr_IGD_P7_GCSe" name="EMR_dr_IGD_P7_GCSe" value="4" class="form-control">
                              </div>
                              <div class="col-md-4">
                                <span class="control-label">V : </span>
                                <input type="text" id="EMR_dr_IGD_P7_GCSv" name="EMR_dr_IGD_P7_GCSv" value="5" class="form-control">
                              </div>
                              <div class="col-md-4">
                                <span class="control-label">M : </span>
                                <input type="text" id="EMR_dr_IGD_P7_GCSm" name="EMR_dr_IGD_P7_GCSm" value="6" class="form-control">
                              </div>
                              <br>
                              <div class="col-md-6">
                                <span>Kesadaran : </span>
                                <select class="bs-select form-control" name="EMR_dr_IGD_P7_Kesadaran" id="EMR_dr_IGD_P7_Kesadaran" data-live-search="true" data-size="8">
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
                                <input type="text" id="EMR_dr_IGD_P7_SpO2" name="EMR_dr_IGD_P7_SpO2" class="form-control">
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
                                      <input type="text" id="EMR_dr_IGD_P7_TDSistolik" name="EMR_dr_IGD_P7_TDSistolik" value="" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="form_control_1">Diastolik</label>
                                      <i style="font-size:12px"><b>mmHg</b></i>
                                      <input type="text" id="EMR_dr_IGD_P7_TDDiastolik" name="EMR_dr_IGD_P7_TDDiastolik" value="" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="form_control_1">Suhu tubuh</label>
                                      <i style="font-size:12px"><b>&deg;C</b></i>
                                      <input type="text" id="EMR_dr_IGD_P7_suhutubuh" name="EMR_dr_IGD_P7_suhutubuh" value="" class="form-control">
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="tab-content">
                                    <div class="col-md-6">
                                      <label for="form_control_1">N</label>
                                      <i style="font-size:12px"><b>x/mnt</b></i>
                                      <input type="text" id="EMR_dr_IGD_P7_nadi" name="EMR_dr_IGD_P7_nadi" value="" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P7_NadiCH_reguler" name="EMR_dr_IGD_P7_NadiCH" class="md-radiobtn" value="Reguler">
                                          <label for="EMR_dr_IGD_P7_NadiCH_reguler">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Reguler </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P7_NadiCH_irreguler" name="EMR_dr_IGD_P7_NadiCH" class="md-radiobtn" value="Irreguler">
                                          <label for="EMR_dr_IGD_P7_NadiCH_irreguler">
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
                                      <input type="text" id="EMR_dr_IGD_P7_respiratory" name="EMR_dr_IGD_P7_respiratory" value="" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P7_RespiratoryCH_teratur" name="EMR_dr_IGD_P7_RespiratoryCH" class="md-radiobtn" value="Teratur">
                                          <label for="EMR_dr_IGD_P7_RespiratoryCH_teratur">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Teratur </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P7_RespiratoryCH_titeratur" name="EMR_dr_IGD_P7_RespiratoryCH" class="md-radiobtn" value="Tidak Teratur">
                                          <label for="EMR_dr_IGD_P7_RespiratoryCH_titeratur">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Tidak Teratur </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-body row">
                              <div class="col-md-12">
                                <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P7_KetExit1" name="EMR_dr_IGD_P7_KetExit" class="md-radiobtn" value="1">
                                      <label for="EMR_dr_IGD_P7_KetExit1">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pasien masuk rawat inap </label>
                                    </div>
                                  </div>
                                  <div class="collapse" id="EMR_dr_IGD_P7_Rawin1">
                                    <div class="col-md-12">
                                      <span>Di Ruangan :</span>
                                      <input type="text" class="form-control" id="EMR_dr_IGD_P7_Ruangan">
                                    </div>
                                    <div class="col-md-12">
                                      <span>Petugas yang menerima :</span>
                                      <input type="text" class="form-control" id="EMR_dr_IGD_P7_Petugas">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P7_KetExit2" name="EMR_dr_IGD_P7_KetExit" class="md-radiobtn" value="2">
                                      <label for="EMR_dr_IGD_P7_KetExit2">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tindakan Lanjutan di .... </label>
                                    </div>
                                  </div>
                                  <div class="collapse" id="EMR_dr_IGD_P7_Lanjut1">
                                    <div class="col-md-12">
                                      <div class="row md-radio-inline">
                                        <div class="col-md-12 md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P7_LanjutOperasi" name="EMR_dr_IGD_P7_Lanjutxx" class="md-radiobtn" value="Kamar Operasi">
                                          <label for="EMR_dr_IGD_P7_LanjutOperasi">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Kamar Operasi </label>
                                        </div>
                                      </div>
                                      <div class="row md-radio-inline">
                                        <div class="col-md-12 md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P7_LanjutBersalin" name="EMR_dr_IGD_P7_Lanjutxx" class="md-radiobtn" value="Bersalin">
                                          <label for="EMR_dr_IGD_P7_LanjutBersalin">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Bersalin </label>
                                        </div>
                                      </div>
                                      <div class="row md-radio-inline">
                                        <div class="col-md-12 md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P7_LanjutLain2" name="EMR_dr_IGD_P7_Lanjutxx" class="md-radiobtn" value="Kosong">
                                          <label for="EMR_dr_IGD_P7_LanjutLain2">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Lain-lain </label>
                                        </div>
                                        <div class="collapse" id="EMR_dr_IGD_P7_Lanjutlain">
                                          <input type="text" class="form-control" id="EMR_dr_IGD_P7_Lanjutlaintxt">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P7_Rujuk" name="EMR_dr_IGD_P7_KetExit" class="md-radiobtn" value="3">
                                      <label for="EMR_dr_IGD_P7_Rujuk">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Di rujuk ke ..... </label>
                                    </div>
                                  </div>
                                  <div class="collapse" id="EMR_dr_IGD_P7_Rujuk1">
                                    <div class="col-md-12">
                                      <span>Nama Tempat Rujuk :</span>
                                      <input type="text" class="form-control" id="EMR_dr_IGD_P7_Rujuklain">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P7_Pulang" name="EMR_dr_IGD_P7_KetExit" class="md-radiobtn" value="4">
                                      <label for="EMR_dr_IGD_P7_Pulang">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Dipulangkan ..... </label>
                                    </div>
                                  </div>
                                  <div class="collapse" id="EMR_dr_IGD_P7_Pulang1">
                                    <div class="col-md-12">
                                      <span>Pukul :</span>
                                      <input type="text" class="form-control timepicker timepicker-24" style="width:100%" id="EMR_dr_IGD_P7_PulangJam" value="<?=date('H:i');?>">
                                    </div>
                                    <div class="col-md-12">
                                      <div class="row md-radio-inline">
                                        <div class="col-md-12 md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P7_PulangMeninggal" name="EMR_dr_IGD_P7_Pulangxx" class="md-radiobtn" value="Meninggal Pukul">
                                          <label for="EMR_dr_IGD_P7_PulangMeninggal">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Meninggal Pukul </label>
                                        </div>
                                      </div>
                                      <div class="col-md-12 collapse" id="EMR_dr_IGD_P7_PulangMeninggalJam2">
                                        <input type="text" class="form-control timepicker timepicker-24" style="width:100%" id="EMR_dr_IGD_P7_PulangMeninggalJam" value="<?=date('H:i');?>">
                                      </div>
                                      <div class="row md-radio-inline">
                                        <div class="col-md-12 md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P7_PulangDOA" name="EMR_dr_IGD_P7_Pulangxx" class="md-radiobtn" value="DOA">
                                          <label for="EMR_dr_IGD_P7_PulangDOA">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> DOA </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-body row">
                              <div class="col-md-12">
                                <span>Transportasi Pulang :</span>
                                <div class="col-md-12">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P7_TransportasiPribadi" name="EMR_dr_IGD_P7_Transportasi" class="md-radiobtn" value="Kendaraan Pribadi">
                                      <label for="EMR_dr_IGD_P7_TransportasiPribadi">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Kendaraan Pribadi </label>
                                    </div>
                                  </div>
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P7_TransportasiAmbulance" name="EMR_dr_IGD_P7_Transportasi" class="md-radiobtn" value="Ambulance">
                                      <label for="EMR_dr_IGD_P7_TransportasiAmbulance">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Ambulance </label>
                                    </div>
                                  </div>
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P7_Transportasijenazah" name="EMR_dr_IGD_P7_Transportasi" class="md-radiobtn" value="Kendaraan jenazah">
                                      <label for="EMR_dr_IGD_P7_Transportasijenazah">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Kendaraan jenazah </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <span>Pendidikan kesehatan pasien :</span>
                                <div class="col-md-12">
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-12 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_dr_IGD_P7_PendidikanObatTeratur" name="EMR_dr_IGD_P7_PendidikanObatTeratur" value="" class="md-check">
                                        <label for="EMR_dr_IGD_P7_PendidikanObatTeratur">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Makan/minum obat teratur </label>
                                      </div>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_dr_IGD_P7_PendidikanKebersihanLuka" name="EMR_dr_IGD_P7_PendidikanKebersihanLuka" value="" class="md-check">
                                        <label for="EMR_dr_IGD_P7_PendidikanKebersihanLuka">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Jaga kebersihan luka </label>
                                      </div>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_dr_IGD_P7_PendidikanDiet" name="EMR_dr_IGD_P7_PendidikanDiet" value="" class="md-check">
                                        <label for="EMR_dr_IGD_P7_PendidikanDiet">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Diet </label>
                                      </div>
                                      <div class="col-md-12 collapse" id="EMR_dr_IGD_P7_PendidikanDiet1">
                                        <input type="text" class="form-control" id="EMR_dr_IGD_P7_PendidikanDiet2">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <span>Lain - lain :</span>
                                      <input type="text" class="form-control" id="EMR_dr_IGD_P7_PendidikanLain">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <center>
                            <a type="button" class="btn green col-md-6" id="EMR_dr_IGD_P7_btnsimpan" style="width:50%">SIMPAN</a><br/><br/>
                          </center>
                        </div>
                      </div>
                    </div>
                  </center>
                </div>
              </div>
            </div>
          </div>-->
        </div>
        <div class="collapse" id="EMR_dr_IGD_P6_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn white col-md-12">Pasien Keluar IGD</button>
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
                            <label>Jam : </label>
                            <input type="text" class="form-control timepicker timepicker-24" style="width:100%" id="EMR_dr_IGD_P6_Jam" value="<?=date('H:i');?>">
                        </div>
                        <div class="col-md-6">
                          <label>Airway : </label>
                          <select class="form-control bs-select" name="EMR_dr_IGD_P6_Airway" id="EMR_dr_IGD_P6_Airway" data-live-search="true" data-size="4">
                            <option value='' disabled selected></option>
                            <option value='Bebas'>Bebas</option>
                            <option value='Obstruksi Partial'>Obstruksi Partial</option>
                            <option value='Obstruksi Total'>Obstruksi Total</option>
                          </select>
                        </div>
                        <span class="col-md-12">Objektif :</span>
                        <div class="col-md-6">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-body row">
                              <div class="col-md-12">
                                <span class="control-label">Keadaan Umum : </span>
                                <div class="md-radio-inline">
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_dr_IGD_P6_KeadaanUmum1" name="EMR_dr_IGD_P6_KeadaanUmum" class="md-radiobtn" value="Baik" checked>
                                    <label for="EMR_dr_IGD_P6_KeadaanUmum1">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Baik </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_dr_IGD_P6_KeadaanUmum2" name="EMR_dr_IGD_P6_KeadaanUmum" class="md-radiobtn" value="Ringan">
                                    <label for="EMR_dr_IGD_P6_KeadaanUmum2">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Ringan </label>
                                  </div>
                                  <div class="md-radio">
                                    <input type="radio" id="EMR_dr_IGD_P6_KeadaanUmum3" name="EMR_dr_IGD_P6_KeadaanUmum" class="md-radiobtn" value="Berat">
                                    <label for="EMR_dr_IGD_P6_KeadaanUmum3">
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
                                <input type="text" id="EMR_dr_IGD_P6_GCSe" name="EMR_dr_IGD_P6_GCSe" value="4" class="form-control">
                              </div>
                              <div class="col-md-4">
                                <span class="control-label">V : </span>
                                <input type="text" id="EMR_dr_IGD_P6_GCSv" name="EMR_dr_IGD_P6_GCSv" value="5" class="form-control">
                              </div>
                              <div class="col-md-4">
                                <span class="control-label">M : </span>
                                <input type="text" id="EMR_dr_IGD_P6_GCSm" name="EMR_dr_IGD_P6_GCSm" value="6" class="form-control">
                              </div>
                              <br>
                              <div class="col-md-6">
                                <span>Kesadaran : </span>
                                <select class="bs-select form-control" name="EMR_dr_IGD_P6_Kesadaran" id="EMR_dr_IGD_P6_Kesadaran" data-live-search="true" data-size="8">
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
                                <input type="text" id="EMR_dr_IGD_P6_SpO2" name="EMR_dr_IGD_P6_SpO2" class="form-control">
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
                                      <input type="text" id="EMR_dr_IGD_P6_TDSistolik" name="EMR_dr_IGD_P6_TDSistolik" value="" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="form_control_1">Diastolik</label>
                                      <i style="font-size:12px"><b>mmHg</b></i>
                                      <input type="text" id="EMR_dr_IGD_P6_TDDiastolik" name="EMR_dr_IGD_P6_TDDiastolik" value="" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="form_control_1">Suhu tubuh</label>
                                      <i style="font-size:12px"><b>&deg;C</b></i>
                                      <input type="text" id="EMR_dr_IGD_P6_suhutubuh" name="EMR_dr_IGD_P6_suhutubuh" value="" class="form-control">
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="tab-content">
                                    <div class="col-md-6">
                                      <label for="form_control_1">N</label>
                                      <i style="font-size:12px"><b>x/mnt</b></i>
                                      <input type="text" id="EMR_dr_IGD_P6_nadi" name="EMR_dr_IGD_P6_nadi" value="" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P6_NadiCH_reguler" name="EMR_dr_IGD_P6_NadiCH" class="md-radiobtn" value="Reguler">
                                          <label for="EMR_dr_IGD_P6_NadiCH_reguler">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Reguler </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P6_NadiCH_irreguler" name="EMR_dr_IGD_P6_NadiCH" class="md-radiobtn" value="Irreguler">
                                          <label for="EMR_dr_IGD_P6_NadiCH_irreguler">
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
                                      <input type="text" id="EMR_dr_IGD_P6_respiratory" name="EMR_dr_IGD_P6_respiratory" value="" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                      <div class="md-radio-inline">
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P6_RespiratoryCH_teratur" name="EMR_dr_IGD_P6_RespiratoryCH" class="md-radiobtn" value="Teratur">
                                          <label for="EMR_dr_IGD_P6_RespiratoryCH_teratur">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Teratur </label>
                                        </div>
                                        <div class="md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P6_RespiratoryCH_titeratur" name="EMR_dr_IGD_P6_RespiratoryCH" class="md-radiobtn" value="Tidak Teratur">
                                          <label for="EMR_dr_IGD_P6_RespiratoryCH_titeratur">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Tidak Teratur </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-body row">
                              <div class="col-md-12">
                                <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P6_KetExit1" name="EMR_dr_IGD_P6_KetExit" class="md-radiobtn" value="1">
                                      <label for="EMR_dr_IGD_P6_KetExit1">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pasien masuk rawat inap </label>
                                    </div>
                                  </div>
                                  <div class="collapse" id="EMR_dr_IGD_P6_Rawin1">
                                    <div class="col-md-12">
                                      <span>Di Ruangan :</span>
                                      <input type="text" class="form-control" id="EMR_dr_IGD_P6_Ruangan">
                                    </div>
                                    <div class="col-md-12">
                                      <span>Petugas yang menerima :</span>
                                      <input type="text" class="form-control" id="EMR_dr_IGD_P6_Petugas">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P6_KetExit2" name="EMR_dr_IGD_P6_KetExit" class="md-radiobtn" value="2">
                                      <label for="EMR_dr_IGD_P6_KetExit2">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tindakan Lanjutan di .... </label>
                                    </div>
                                  </div>
                                  <div class="collapse" id="EMR_dr_IGD_P6_Lanjut1">
                                    <div class="col-md-12">
                                      <div class="row md-radio-inline">
                                        <div class="col-md-12 md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P6_LanjutOperasi" name="EMR_dr_IGD_P6_Lanjutxx" class="md-radiobtn" value="Kamar Operasi">
                                          <label for="EMR_dr_IGD_P6_LanjutOperasi">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Kamar Operasi </label>
                                        </div>
                                      </div>
                                      <div class="row md-radio-inline">
                                        <div class="col-md-12 md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P6_LanjutBersalin" name="EMR_dr_IGD_P6_Lanjutxx" class="md-radiobtn" value="Bersalin">
                                          <label for="EMR_dr_IGD_P6_LanjutBersalin">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Bersalin </label>
                                        </div>
                                      </div>
                                      <div class="row md-radio-inline">
                                        <div class="col-md-12 md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P6_LanjutLain2" name="EMR_dr_IGD_P6_Lanjutxx" class="md-radiobtn" value="Kosong">
                                          <label for="EMR_dr_IGD_P6_LanjutLain2">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Lain-lain </label>
                                        </div>
                                        <div class="collapse" id="EMR_dr_IGD_P6_Lanjutlain">
                                          <input type="text" class="form-control" id="EMR_dr_IGD_P6_Lanjutlaintxt">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P6_Rujuk" name="EMR_dr_IGD_P6_KetExit" class="md-radiobtn" value="3">
                                      <label for="EMR_dr_IGD_P6_Rujuk">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Di rujuk ke ..... </label>
                                    </div>
                                  </div>
                                  <div class="collapse" id="EMR_dr_IGD_P6_Rujuk1">
                                    <div class="col-md-12">
                                      <span>Nama Tempat Rujuk :</span>
                                      <input type="text" class="form-control" id="EMR_dr_IGD_P6_Rujuklain">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P6_Pulang" name="EMR_dr_IGD_P6_KetExit" class="md-radiobtn" value="4">
                                      <label for="EMR_dr_IGD_P6_Pulang">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Dipulangkan ..... </label>
                                    </div>
                                  </div>
                                  <div class="collapse" id="EMR_dr_IGD_P6_Pulang1">
                                    <div class="col-md-12">
                                      <span>Pukul :</span>
                                      <input type="text" class="form-control timepicker timepicker-24" style="width:100%" id="EMR_dr_IGD_P6_PulangJam" value="<?=date('H:i');?>">
                                    </div>
                                    <div class="col-md-12">
                                      <div class="row md-radio-inline">
                                        <div class="col-md-12 md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P6_PulangMeninggal" name="EMR_dr_IGD_P6_Pulangxx" class="md-radiobtn" value="Meninggal Pukul">
                                          <label for="EMR_dr_IGD_P6_PulangMeninggal">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> Meninggal Pukul </label>
                                        </div>
                                      </div>
                                      <div class="col-md-12 collapse" id="EMR_dr_IGD_P6_PulangMeninggalJam2">
                                        <input type="text" class="form-control timepicker timepicker-24" style="width:100%" id="EMR_dr_IGD_P6_PulangMeninggalJam" value="<?=date('H:i');?>">
                                      </div>
                                      <div class="row md-radio-inline">
                                        <div class="col-md-12 md-radio">
                                          <input type="radio" id="EMR_dr_IGD_P6_PulangDOA" name="EMR_dr_IGD_P6_Pulangxx" class="md-radiobtn" value="DOA">
                                          <label for="EMR_dr_IGD_P6_PulangDOA">
                                          <span class="inc"></span>
                                          <span class="check"></span>
                                          <span class="box"></span> DOA </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="portlet light portlet-fit bordered">
                            <div class="portlet-body row">
                              <div class="col-md-12">
                                <span>Transportasi Pulang :</span>
                                <div class="col-md-12">
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P6_TransportasiPribadi" name="EMR_dr_IGD_P6_Transportasi" class="md-radiobtn" value="Kendaraan Pribadi">
                                      <label for="EMR_dr_IGD_P6_TransportasiPribadi">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Kendaraan Pribadi </label>
                                    </div>
                                  </div>
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P6_TransportasiAmbulance" name="EMR_dr_IGD_P6_Transportasi" class="md-radiobtn" value="Ambulance">
                                      <label for="EMR_dr_IGD_P6_TransportasiAmbulance">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Ambulance </label>
                                    </div>
                                  </div>
                                  <div class="row md-radio-inline">
                                    <div class="col-md-12 md-radio">
                                      <input type="radio" id="EMR_dr_IGD_P6_Transportasijenazah" name="EMR_dr_IGD_P6_Transportasi" class="md-radiobtn" value="Kendaraan jenazah">
                                      <label for="EMR_dr_IGD_P6_Transportasijenazah">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Kendaraan jenazah </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <span>Pendidikan kesehatan pasien :</span>
                                <div class="col-md-12">
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-12 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_dr_IGD_P6_PendidikanObatTeratur" name="EMR_dr_IGD_P6_PendidikanObatTeratur" value="" class="md-check">
                                        <label for="EMR_dr_IGD_P6_PendidikanObatTeratur">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Makan/minum obat teratur </label>
                                      </div>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_dr_IGD_P6_PendidikanKebersihanLuka" name="EMR_dr_IGD_P6_PendidikanKebersihanLuka" value="" class="md-check">
                                        <label for="EMR_dr_IGD_P6_PendidikanKebersihanLuka">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Jaga kebersihan luka </label>
                                      </div>
                                    </div>
                                    <div class="col-md-12 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_dr_IGD_P6_PendidikanDiet" name="EMR_dr_IGD_P6_PendidikanDiet" value="" class="md-check">
                                        <label for="EMR_dr_IGD_P6_PendidikanDiet">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Diet </label>
                                      </div>
                                      <div class="col-md-12 collapse" id="EMR_dr_IGD_P6_PendidikanDiet1">
                                        <input type="text" class="form-control" id="EMR_dr_IGD_P6_PendidikanDiet2">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <span>Lain - lain :</span>
                                      <input type="text" class="form-control" id="EMR_dr_IGD_P6_PendidikanLain">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <center>
                            <a type="button" class="btn green col-md-6" id="EMR_dr_IGD_P6_btnsimpan" style="width:50%">SIMPAN</a><br/><br/>
                          </center>
                        </div>
                      </div>
                    </div>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="collapse" id="EMR_dr_IGD_P7_Halaman">

        </div>-->
      </div>

      <div class="col-md-3">
        <!-- BEGIN TAB PORTLET-->
        <div class="portlet light portlet-fit bordered">
          <div class="row portlet-body">
            <div class="col-sm-12">
              <input type="hidden" id="EMR_dr_IGD_STATUSHALAMAN" value="perawat">

              <div class="row" id="EMR_dr_IGD_stepDokter">
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
        </div>

        <div id="EMR_dr_IGD_FrmRPerawat">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Sub Menu IGD Dokter :</b></span>
            </div>
            <input type="text" class="form-control collapse" id="EMR_dr_IGD_statverHal" name="EMR_dr_IGD_statverHal" value="P1">
            <div class="row portlet-body" id="">
              <div>
                <a type="button" class="btn white col-md-12" id="EMR_dr_IGD_P0_btntriase" style="width:100%">Triase</a><br/><br/>
              </div>
              <?php
              if($cekinMenu->MenuD_1 != "DONE")
              {?>
                <a type="button" class="btn white col-md-12" id="EMR_dr_IGD_P1_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Information</a><br/><br/>
              <?php }
              else { ?>
                <a type="button" class="btn grey col-md-12" id="EMR_dr_IGD_P1_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> Information</a><br/><br/>
              <?php }
              if($cekinMenu->MenuD_2 != "DONE")
              {
                $cekD2 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Kerja'")->num_rows();
                $getD2 = $this->db->query("select * from EMR_DETAIL_DIAGNOSIS where ID_PEMERIKSAAN = '$cekidpemeriksaan' and STATUS2_DIAGNOSIS = 'Diagnosis Kerja'");

                if($cekD2 == 0)
                {
                    ?>
                    <!--<a class="btn green col-md-12" href="EMR_dr_IGD_P2_btnmenuHarus" data-toggle="modal" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Information (Penunjang)</a><br/><br/>-->
                    <a class="btn green col-md-12" href="#EMR_dr_IGD_P2_btnmenuHarus" data-toggle="modal" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Information (Penunjang) </a><br/><br/>
                    <div id="EMR_dr_IGD_P2_btnmenuHarus" class="modal fade modalInput" tabindex="-1" data-backdrop="static" data-width="40%" data-keyboard="false" style="width:40%">
                      <div class="modal-content">
                        <div class="modal-header bg-red bg-font-red">
                            <h4 class="modal-title"><center><b>PERINGATAN</b></center></h4>
                        </div>
                        <div class="modal-body">
                          <h4> Anda Belum Mengisi Diagnosis Kerja, Silahkan Isi Diagnosis Kerja Terlebih Dahulu!!! </H4>
                        </div>
                        <div class="modal-footer">
                          <center>
                            <div class="btn-group btn-group btn-group-justified" style="width:50%">
                              <a type="button" class="btn red" data-dismiss="modal" style="width:100%">OK</a>
                            </div>
                          </center>
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                  else
                  {
                    ?>
                      <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P2_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Information (Penunjang)</a><br/><br/>
                    <?php
                  }
              }
              else { ?>
                <a type="button" class="btn grey col-md-12" id="EMR_dr_IGD_P2_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> Information (Penunjang)</a><br/><br/>
              <?php }
              if($cekinMenu->MenuD_3 != "DONE")
              {?>
                <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P3_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Assesment </a><br/><br/>
              <?php }
              else { ?>
                <a type="button" class="btn grey col-md-12" id="EMR_dr_IGD_P3_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> Assesment </a><br/><br/>
              <?php }
              if($cekinMenu->MenuD_4 != "DONE")
              {?>
                <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P4_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Recomendation</a><br/><br/>
              <?php }
              else { ?>
                <a type="button" class="btn grey col-md-12" id="EMR_dr_IGD_P4_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> Recomendation</a><br/><br/>
              <?php }
              if($cekinMenu->MenuD_5 != "DONE")
              {?>
                <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P5_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Resume</a><br/><br/>
              <?php }
              else { ?>
                <a type="button" class="btn grey col-md-12" id="EMR_dr_IGD_P5_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> Resume</a><br/><br/>
              <?php }
              if($noreg != 'UNKNOWN')
              { ?>
                <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P6_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Pasien Keluar IGD</a>
            <?php } ?>
            </div>
          </div>
        </div>

        <!--<div id="modalIGDtriase" class="modal fade modalInput" tabindex="-1" data-backdrop="static" data-width="40%" data-keyboard="false" style="width:40%">
          <div class="modal-content">
            <div class="modal-header bg-blue bg-font-blue">
                <h4 class="blue modal-title"><center><b>Triase Pasien</b></center></h4>
            </div>
            <div class="modal-body">
              <center>
                <div class="col-md-12">
                  <div class="btn-group btn-group btn-group-justified" style="width:100%">
                    <a type="button" class="btn white" style="width:20%" id="EMR_dr_IGD_btnTriaseCirculation"><b>Circulation</b></a>
                    <a type="button" class="btn blue" style="width:20%" id="EMR_dr_IGD_btnTriaseAirway"><b>Airway</b></a>
                    <a type="button" class="btn blue" style="width:20%" id="EMR_dr_IGD_btnTriaseBreathing"><b>Breathing</b></a>
                    <a type="button" class="btn blue" style="width:20%" id="EMR_dr_IGD_btnTriaseDisability"><b>Disability</b></a>
                    <a type="button" class="btn blue" style="width:20%" id="EMR_dr_IGD_btnTriaseHasil"><b>Hasil</b></a>
                  </div>
                </div>
                <input type="text" class="form-control collapse" id="EMR_dr_IGD_statTriase3">
                <input type="text" class="form-control collapse" id="EMR_dr_IGD_statTriase2" value="white">
                <input type="text" class="form-control collapse" id="EMR_dr_IGD_statTriase" value="Circulation">
                <div class="col-md-12">
                  <div class="portlet light bordered">
                    <div class="portlet-title tabbable-line">
                      <center>
                        <div class="caption">
                          <div class="" id="EMR_dr_IGD_TriaseQuestionCirculation">
                            <center>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_CirculationStabil" name="EMR_dr_IGD_Circulation" class="md-radiobtn" value="Circulation Stabil">
                                  <label for="EMR_dr_IGD_CirculationStabil">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Stabil </label>
                              </div>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_CirculationPreshock" name="EMR_dr_IGD_Circulation" class="md-radiobtn" value="Circulation Preshock">
                                  <label for="EMR_dr_IGD_CirculationPreshock">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Preshock </label>
                              </div>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_CirculationShock" name="EMR_dr_IGD_Circulation" class="md-radiobtn" value="Circulation Shock">
                                  <label for="EMR_dr_IGD_CirculationShock">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Shock </label>
                              </div>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_CirculationTidakada" name="EMR_dr_IGD_Circulation" class="md-radiobtn" value="Circulation Tidak ada">
                                  <label for="EMR_dr_IGD_CirculationTidakada">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tidak ada Nadi </label>
                              </div>
                            </center>
                          </div>
                          <div class="collapse" id="EMR_dr_IGD_TriaseQuestionAirway">
                            <center>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_AirwayBebas" name="EMR_dr_IGD_Airway" class="md-radiobtn" value="Airway Bebas">
                                  <label for="EMR_dr_IGD_AirwayBebas">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Bebas </label>
                              </div>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_AirwayObstruksiPartial" name="EMR_dr_IGD_Airway" class="md-radiobtn" value="Airway Obstruksi Partial">
                                  <label for="EMR_dr_IGD_AirwayObstruksiPartial">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Obstruksi Partial </label>
                              </div>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_AirwayObstruksiTotal" name="EMR_dr_IGD_Airway" class="md-radiobtn" value="Airway Obstruksi Total">
                                  <label for="EMR_dr_IGD_AirwayObstruksiTotal">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Obstruksi Total </label>
                              </div>
                            </center>
                          </div>
                          <div class="collapse" id="EMR_dr_IGD_TriaseQuestionBreathing">
                            <center>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_BreathingNormal" name="EMR_dr_IGD_Breathing" class="md-radiobtn" value="Breathing Normal">
                                  <label for="EMR_dr_IGD_BreathingNormal">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Normal </label>
                              </div>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_BreathingDistress" name="EMR_dr_IGD_Breathing" class="md-radiobtn" value="Breathing Distress Nafas">
                                  <label for="EMR_dr_IGD_BreathingDistress">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Distress Nafas </label>
                              </div>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_BreathingTidakAda" name="EMR_dr_IGD_Breathing" class="md-radiobtn" value="Breathing Tidak ada Nafas">
                                  <label for="EMR_dr_IGD_BreathingTidakAda">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Tidak ada Nafas </label>
                              </div>
                            </center>
                          </div>
                          <div class="collapse" id="EMR_dr_IGD_TriaseQuestionDisability">
                            <center>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_DisabilityAlert" name="EMR_dr_IGD_Disability" class="md-radiobtn" value="Disability Alert">
                                  <label for="EMR_dr_IGD_DisabilityAlert">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Alert </label>
                              </div>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_DisabilityVerbal" name="EMR_dr_IGD_Disability" class="md-radiobtn" value="Disability Verbal">
                                  <label for="EMR_dr_IGD_DisabilityVerbal">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Verbal </label>
                              </div>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_DisabilityPain" name="EMR_dr_IGD_Disability" class="md-radiobtn" value="Disability Pain">
                                  <label for="EMR_dr_IGD_DisabilityPain">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pain </label>
                              </div>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_DisabilityUnresponsive" name="EMR_dr_IGD_Disability" class="md-radiobtn" value="Disability Unresponsive">
                                  <label for="EMR_dr_IGD_DisabilityUnresponsive">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Unresponsive </label>
                              </div>
                              <div class="col-md-6 md-radio">
                                  <input type="radio" id="EMR_dr_IGD_DisabilityPupilMidriasisTotal" name="EMR_dr_IGD_Disability" class="md-radiobtn" value="Disability Pupil Midriasis Total">
                                  <label for="EMR_dr_IGD_DisabilityPupilMidriasisTotal">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Pupil Midriasis Total </label>
                              </div>
                            </center>
                          </div>
                          <div class="collapse" id="EMR_dr_IGD_TriaseQuestionHasil">
                            <span class="" id="EMR_dr_IGD_PernyataanKurangTriase"></span>
                            <center>
                              <a class="btn white col-md-12" name="EMR_dr_IGD_btnTriaseHasilQuestion" value="Belum ada" id="EMR_dr_IGD_btnTriaseHasilQuestion" style="height:90px"> <h1> <b> Triase : <span id="EMR_dr_IGD_HasilTriase"> Belum ada </span></b></h1></a>
                            </center>
                          </div>
                        </div>
                      </center>
                    </div>
                  </div>
                </div>
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                    <a class="btn green active" style="width:100%" id="EMR_dr_IGD_btnSimpanTriase"><i class="fa fa-edit"> Simpan</i></a>
                </div>
              </center>
            </div>
          </div>
        </div>-->

        <div id="modalIGDtriase" class="modal fade modalInput" tabindex="-1" data-backdrop="static" data-width="40%" data-keyboard="false" style="width:40%">
          <div class="modal-content">
            <div class="modal-header bg-blue bg-font-blue">
                <h4 class="blue modal-title"><center><b>Triase Pasien</b></center></h4>
            </div>
            <div class="modal-body">
              <center>
                <div class="col-md-12">
                  <div class="btn-group btn-group btn-group-justified" style="width:100%; height:100px">
                    <a type="button" class="btn bg-green-jungle bg-font-green-jungle" style="width:50%" id="EMR_dr_IGD_btnTriaseHijau"><b>Hijau</b></a>
                    <a type="button" class="btn bg-yellow-crusta bg-font-yellow-crusta" style="width:50%" id="EMR_dr_IGD_btnTriaseKuning"><b>Kuning</b></a>
                  </div>
                  <div class="btn-group btn-group btn-group-justified" style="width:100%; height:100px">
                    <a type="button" class="btn bg-red bg-font-red" style="width:50%" id="EMR_dr_IGD_btnTriaseMerah"><b>Merah</b></a>
                    <a type="button" class="btn bg-grey-gallery bg-font-yellow-casablanca" style="width:50%" id="EMR_dr_IGD_btnTriaseHitam"><b>Hitam</b></a>
                  </div>
                </div>
                <input type="text" class="form-control collapse" id="EMR_dr_IGD_statTriase2" value="white">
                <div class="col-md-12">
                  <div class="portlet light bordered">
                    <div class="portlet-title tabbable-line">
                      <center>
                        <div class="caption">
                          <center>
                            <a class="btn white col-md-12" name="EMR_dr_IGD_btnTriaseHasilQuestion" value="Belum ada" id="EMR_dr_IGD_btnTriaseHasilQuestion" style="height:90px"> <h1> <b> Triase : <span id="EMR_dr_IGD_HasilTriase"> Belum ada </span></b></h1></a>
                          </center>
                        </div>
                      </center>
                    </div>
                  </div>
                </div>
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                    <a class="btn green active" style="width:100%" id="EMR_dr_IGD_btnSimpanTriase"><i class="fa fa-edit"> Simpan</i></a>
                </div>
              </center>
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

        <div id="modalLompatMenuIGDKosong" class="modal fade modalInput" tabindex="-1" data-backdrop="static" data-width="40%" data-keyboard="false" style="width:40%">
          <div class="modal-content">
            <div class="modal-header bg-blue bg-font-blue">
                <h4 class="blue modal-title"><center><b>Data Berhasil Disimpan</b></center></h4>
            </div>
            <div class="modal-body">
              <h4> Data Kosong </H4>
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

        <div id="ModalView_dr_IGD" class="modal fade modalInput" tabindex="-1" data-backdrop="static" data-keyboard="false">
          <div class="row">
            <div class="col-md-6">
              <div class="btn-group btn-group btn-group-justified">
                <div class="col-md-6">
                  <button disable type="button" class="btn white">
                    <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                    <span style="font-size:14px"><b><?php echo $norm?></b></span>
                  </button>
                </div>
                <div class="col-md-6">
                  <button disable type="button" class="btn white">
                    <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
                    <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
                  </button>
                </div>
              </div>
            </div>
            <div class="modal-header bg-blue bg-font-blue col-md-6">
              <div class="" id="EMR_dr_IGD_mvH_Triase">
                <h4 class="modal-title"><center><b>View Triase Pasien</b></center></h4>
              </div>
            </div>
          </div>
          <input type="text" class="form-control collapse" id="EMR_dr_IGD_statMV" value="Triase">
          <div class="modal-body">
            <div class="row">
              <div class="" id="EMR_dr_IGD_mvB_Triase">
                <?php
                $JMV_Triase = $this->db->query("select * from EMR_IGD_TRIASE where ID_PEMERIKSAAN = '$cekidpemeriksaan'")->num_rows();
                $HMV_Triase = $this->db->query("select * from EMR_IGD_TRIASE where ID_PEMERIKSAAN = '$cekidpemeriksaan'")->row();
                if($JMV_Triase == 1)
                {?>
                  <div class="col-md-12">
                    <div class="portlet light portlet-fit bordered">
                      <div class="portlet-title">
                        <h4>Detil Triase <b><?php echo $HMV_Triase->Triase;?></b> Pasien : </h4>
                      </div>
                      <div class="row portlet-body">
                        <center>
                          <span><?php echo $HMV_Triase->CIRCULATION;?></span><br>
                          <span><?php echo $HMV_Triase->AIRWAY;?></span><br>
                          <span><?php echo $HMV_Triase->BREATHING;?></span><br>
                          <span><?php echo $HMV_Triase->DISABILITY;?></span><br>
                        </center>
                      </div>
                    </div>
                  </div>
                <?php
                }?>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn blue">Tutup</button>
          </div>
        </div>
        <!--end user perawat-->

      </div>

    </div>
  </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->


<!--LOKALIS GAMBAR BADAN START-->
<div id="EMR_dr_IGD_P1_AsesmenModalStatusLokalis" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="100%" style="width:50%">
  <div class="row">
    <div class="col-md-4">
      <div class="btn-group btn-group btn-group-justified" style="width:100%">
        <button disable type="button" class="btn white" style="height:55px; width:30%">
          <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
          <span style="font-size:14px"><b><?php echo $norm?></b></span>
        </button>
        <button disable type="button" class="btn white" style="height:55px; width:70%">
          <span style="font-size:8px; color:#BFBFBF"><b>Nama Pasien :</b></span><br>
          <span style="font-size:14px"><b><?php echo $nama?></b></span><br>
        </button>
      </div>
    </div>
    <div class="modal-header bg-blue bg-font-blue col-md-4">
      <h4 class="modal-title"><center><b>Status Lokalis</b></center></h4>
    </div>
    <div class="col-md-4 bg-blue" style="height:56px;">
      <button class="btn blue col-md-12 collapse" id="EMR_dr_IGD_P1_BtnKembaliFrmLokalis2" style="height:100%; width:100%"><i class="fa fa-arrow-left"></i> Kembali </button></br></br>
    </div>
  </div>
  <div class="modal-body">
    <input type="hidden" id="EMR_dr_IGD_P1_statLokalis" value="pilih">
    <input type="hidden" id="EMR_dr_IGD_P1_statLokalis2" value="">
    <div class="row">
      <!--<div id="EMR_dr_IGD_P1_FrmLokalis0">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <center>
            <table border="0" id="" align="center" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="height:180px"></td>
              </tr>
              <tr>
                <td style="width:230px; height:100px">
                  <button type="button" class="btn blue" id="EMR_dr_IGD_P1_btnLokalisTubuh" style="width:100%; height:40px; background-color:">Lokalis Bedah</button>
                  </br>
                  </br>
                  <button type="button" class="btn blue" id="EMR_dr_IGD_P1_btnLokalisTulang" style="width:100%; height:40px; background-color:">Lokalis Orthopedi</button>
                </td>
              </tr>
              <tr>
                <td style="height:180px"></td>
              </tr>
                  </table>
          </center>
        </div>
        <div class="col-md-4">
        </div>
      </div>-->
      <div id="EMR_dr_IGD_P1_FrmLokalis1">
        <div class="col-md-4">
          <div id="EMR_dr_IGD_P1_FrmMouseoverTubuh">
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
          <div class="collapse" id="EMR_dr_IGD_P1_FrmMouseoverKepala">
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
          <div class="collapse" id="EMR_dr_IGD_P1_FrmMouseoverKepala2">
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
                <center><img src="<?php echo base_url().'assets/pages/img/tulang/Teng_Depan.png'?>" style="width:180px"></center>
              </div>
            </div>
          </div>
          <div class="collapse" id="EMR_dr_IGD_P1_FrmMouseoverBadan">
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
          <div class="collapse" id="EMR_dr_IGD_P1_FrmMouseoverBadan2">
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
                <center><img src="<?php echo base_url().'assets/pages/img/tulang/Badan Depan.png'?>" style="width:180px"></center>
              </div>
            </div>
          </div>
          <div class="collapse" id="EMR_dr_IGD_P1_FrmMouseoverTangan">
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
          <div class="collapse" id="EMR_dr_IGD_P1_FrmMouseoverTangan2">
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
                <center><img src="<?php echo base_url().'assets/pages/img/tulang/Tangan Depan.png'?>" style="width:180px"></center>
              </div>
            </div>
          </div>
          <div class="collapse" id="EMR_dr_IGD_P1_FrmMouseoverKaki">
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
          <div class="collapse" id="EMR_dr_IGD_P1_FrmMouseoverKaki2">
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
                <center><img src="<?php echo base_url().'assets/pages/img/tulang/Kaki Depan.png'?>" style="width:180px"></center>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <center>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_tblLokalisBedah" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Tubuh Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="width:70px"></td>
                <td style="width:20px;"></td>
                <td colspan="2" style="width:60px; height:80px">
                  <a type="button" border="0" class="btn white" id="EMR_dr_IGD_P1_btnKepala" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnKepalaMOver(this)" onmouseout="EMR_dr_IGD_P1_btnKepalaMOut(this)"></a>
                </td>
                <td style="width:20px;"></td>
                <td style="width:70px"></td>
              </tr>
              <tr>
                <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_dr_IGD_P1_btnTangan1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnTanganMOver(this)" onmouseout="EMR_dr_IGD_P1_btnTanganMOut(this)"></td>
                <td colspan="4" style="height:180px"><button type="button" class="btn white" id="EMR_dr_IGD_P1_btnBadan" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnBadanMOver(this)" onmouseout="EMR_dr_IGD_P1_btnBadanMOut(this)"></button></td>
                <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_dr_IGD_P1_btnTangan2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnTanganMOver(this)" onmouseout="EMR_dr_IGD_P1_btnTanganMOut(this)"></td>
              </tr>
              <tr>
                <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_dr_IGD_P1_btnKaki1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnKakiMOver(this)" onmouseout="EMR_dr_IGD_P1_btnKakiMOut(this)"></button></td>
                <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_dr_IGD_P1_btnKaki2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnKakiMOver(this)" onmouseout="EMR_dr_IGD_P1_btnKakiMOut(this)"></button></td>
              </tr>
              <tr>
                <td style="height:200px"></td>
                <td style="height:200px"></td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisOrthopedi" align="center" background="<?php echo base_url().'assets/pages/img/tulang/Tulang_Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="width:70px"></td>
                <td style="width:20px;"></td>
                <td colspan="2" style="width:60px; height:80px">
                  <a type="button" border="0" class="btn white" id="EMR_dr_IGD_P1_Orto_btnKepala" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnKepalaMOver(this)" onmouseout="EMR_dr_IGD_P1_btnKepalaMOut(this)"></a>
                </td>
                <td style="width:20px;"></td>
                <td style="width:70px"></td>
              </tr>
              <tr>
                <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_dr_IGD_P1_Orto_btnTangan1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnTanganMOver(this)" onmouseout="EMR_dr_IGD_P1_btnTanganMOut(this)"></td>
                <td colspan="4" style="height:180px"><button type="button" class="btn white" id="EMR_dr_IGD_P1_Orto_btnBadan" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnBadanMOver(this)" onmouseout="EMR_dr_IGD_P1_btnBadanMOut(this)"></button></td>
                <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_dr_IGD_P1_Orto_btnTangan2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnTanganMOver(this)" onmouseout="EMR_dr_IGD_P1_btnTanganMOut(this)"></td>
              </tr>
              <tr>
                <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_dr_IGD_P1_Orto_btnKaki1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnKakiMOver(this)" onmouseout="EMR_dr_IGD_P1_btnKakiMOut(this)"></button></td>
                <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_dr_IGD_P1_Orto_btnKaki2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnKakiMOver(this)" onmouseout="EMR_dr_IGD_P1_btnKakiMOut(this)"></button></td>
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
      <div class="collapse" id="EMR_dr_IGD_P1_FrmLokalis2">
        <div class="col-md-4">

          <div id="EMR_dr_IGD_P1_AppendHasilHeaderKepalaDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendHasilKeluhanKepalaDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendKeluhanKepalaDepan"></div>

          <div id="EMR_dr_IGD_P1_AppendHasilHeaderKepalaBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendHasilKeluhanKepalaBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendKeluhanKepalaBelakang"></div>

          <div id="EMR_dr_IGD_P1_AppendHasilHeaderBadanDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendHasilKeluhanBadanDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendKeluhanBadanDepan"></div>

          <div id="EMR_dr_IGD_P1_AppendHasilHeaderBadanBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendHasilKeluhanBadanBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendKeluhanBadanBelakang"></div>

          <div id="EMR_dr_IGD_P1_AppendHasilHeaderTanganDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendHasilKeluhanTanganDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendKeluhanTanganDepan"></div>

          <div id="EMR_dr_IGD_P1_AppendHasilHeaderTanganBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendHasilKeluhanTanganBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendKeluhanTanganBelakang"></div>

          <div id="EMR_dr_IGD_P1_AppendHasilHeaderKakiBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendHasilKeluhanKakiBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendKeluhanKakiDepan"></div>

          <div id="EMR_dr_IGD_P1_AppendHasilHeaderKakiBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendHasilKeluhanKakiBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendKeluhanKakiBelakang"></div>
        </div>
        <div class="col-md-4">
          <center>
            <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                <a href="javascript:;" class="btn grey" id="EMR_dr_IGD_P1_btnGeserKanan" style="height:100%"> << Geser >> </a>
            </div>
          </center>
          <center>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_tblLokalisKepalaDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kepala Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="width:60px"></td>
                <td style="width:60px;"></td>
                <td colspan="2" style="width:60px; height:40px"></td>
                <td style="width:60px;"></td>
                <td style="width:60px"></td>
              </tr>
              <tr>
                <td style="height:160px">
                  <a type="button" border="0" class="btn white" title=" Temporalis Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraTemporalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                </td>
                <td colspan="4" style="height:160px">
                  <a type="button" border="0" class="btn white" title="Frontalis" id="EMR_dr_IGD_P1_btnLokalisFrontalis" style="width:100%; height:100%; background-color: Transparent"></a>
                </td>
                <td style="height:160px">
                  <a type="button" border="0" class="btn white" title=" Temporalis Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraTemporalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                </td>
              </tr>
              <tr>
                <td rowspan="2" style="height:120px">
                  <a type="button" border="0" class="btn white" title=" Zygomatical Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraZygomatical" style="width:100%; height:100%; background-color: Transparent"></a>
                </td>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Orbitalis Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraOrbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                </td>
                <td rowspan="2" colspan="2" style="height:120px">
                  <a type="button" border="0" class="btn white" title="Nasalis" id="EMR_dr_IGD_P1_btnLokalisNasalis" style="width:100%; height:100%; background-color: Transparent"></a>
                </td>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Orbitalis Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraOrbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                </td>
                <td rowspan="2" style="height:120px">
                  <a type="button" border="0" class="btn white" title=" Zygomatical Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraZygomatical" style="width:100%; height:100%; background-color: Transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Infraorbitalis Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraInfraorbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                </td>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Infraorbitalis Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraInfraorbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                </td>
              </tr>
              <tr>
                <td></td>
                <td rowspan="2" style="height:120px">
                  <a type="button" border="0" class="btn white" title=" Buccalis Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraBuccalis" style="width:100%; height:100%; background-color: Transparent"></a>
                </td>
                <td colspan="2" style="height:50px">
                  <a type="button" border="0" class="btn white" title="Oralis" id="EMR_dr_IGD_P1_btnLokalisOralis" style="width:100%; height:100%; background-color: Transparent"></a>
                </td>
                <td rowspan="2" style="height:120px">
                  <a type="button" border="0" class="btn white" title=" Buccalis Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraBuccalis" style="width:100%; height:100%; background-color: Transparent"></a>
                </td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td colspan="2" style="height:70px">
                  <a type="button" border="0" class="btn white" title="Mentalis" id="EMR_dr_IGD_P1_btnLokalisMentalis" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_dr_IGD_P1_btnKepalaMOver(this)" onmouseout="EMR_dr_IGD_P1_btnKepalaMOut(this)"></a>
                </td>
                <td></td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_tblLokalisKepalaBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kepala Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td colspan="2" style="width:330px; height:40px"></td>
              </tr>
              <tr>
                <td style="height:120px">
                  <a type="button" border="0" class="btn white" title="Parietalis" id="EMR_dr_IGD_P1_btnLokalisParietalis" style="width:100%; height:100%; background-color: Transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:140px">
                  <a type="button" border="0" class="btn white" title="Occipitalis" id="EMR_dr_IGD_P1_btnLokalisOccipitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                </td>
              </tr>
              <tr>
                <td style="height:120px">
                  <a type="button" border="0" class="btn white" title="Cervicalis Pasterior" id="EMR_dr_IGD_P1_btnLokalisCervicalisPasterior" style="width:100%; height:100%; background-color: Transparent"> </a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_tblLokalisBadanDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Badan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="width:30px;"></td>
                <td style="width:10px;"></td>
                <td style="width:10px;"></td>
                <td style="width:20px; height:40px"></td>
                <td style="width:10px;"></td>
                <td style="width:10px;"></td>
                <td style="width:20px;"></td>
              </tr>
              <tr>
                <td></td>
                <td style="height:45px">
                  <a type="button" border="0" class="btn white" title=" Cervicalis Lateralis Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraCervicalisLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:45px">
                  <a type="button" border="0" class="btn white" title=" Sternocleidomastoidea Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraSternocleidomastoidea" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:45px">
                  <a type="button" border="0" class="btn white" title="Cervicalis Anterior" id="EMR_dr_IGD_P1_btnLokalisCervicalisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:45px">
                  <a type="button" border="0" class="btn white" title=" Sternocleidomastoidea Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraSternocleidomastoidea" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:45px">
                  <a type="button" border="0" class="btn white" title=" Cervicalis Lateralis Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraCervicalisLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td></td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Trigonum Clavipectorale Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraTrigonumClavipectorale" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="2" colspan="2" style="height:80px">
                  <a type="button" border="0" class="btn white" title=" Pectoralis Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraPectoralis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="3" style="height:100px">
                  <a type="button" border="0" class="btn white" title="Presternalis" id="EMR_dr_IGD_P1_btnLokalisPresternalis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="2" colspan="2" style="height:80px">
                  <a type="button" border="0" class="btn white" title=" Pectoralis Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraPectoralis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Trigonum Clavipectorale Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraTrigonumClavipectorale" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Axillaris Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraAxillaris" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Axillaris Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraAxillaris" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td></td>
                <td style="height:20px">
                  <a type="button" border="0" class="btn white" title=" Mammaria Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraMammaria" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td></td>
                <td></td>
                <td style="height:20px">
                  <a type="button" border="0" class="btn white" title=" Mammaria Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraMammaria" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3" style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Inframammaria Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraInframammaria" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td></td>
                <td colspan="3" style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Inframammaria Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraInframammaria" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Hypochondriaca Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraHypochondriaca" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="3" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Epigastrica" id="EMR_dr_IGD_P1_btnLokalisEpigastrica" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Hypochondriaca Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraHypochondriaca" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Lateralis Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="3" style="height:60px">
                  <a type="button" border="0" class="btn white" title="Umbilicalis" id="EMR_dr_IGD_P1_btnLokalisUmbilicalis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Lateralis Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Inguinalis Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraInguinalis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="3" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Pubica" id="EMR_dr_IGD_P1_btnLokalisPubica" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Inguinalis Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraInguinalis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td colspan="3" style="height:80px">
                  <a type="button" border="0" class="btn white" title="Urogenitalis" id="EMR_dr_IGD_P1_btnLokalisUrogenitalis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td></td>
                <td></td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_tblLokalisBadanBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Badan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="width:80px;"></td>
                <td style="width:20px; height:100px"></td>
                <td style="width:80px;"></td>
              </tr>
              <tr>
                <td style="height:90px">
                  <a type="button" border="0" class="btn white" title=" Scapularis Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraScapularis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="3" style="width:20px; height:210px">
                  <a type="button" border="0" class="btn white" title="Verterbralis" id="EMR_dr_IGD_P1_btnLokalisVerterbralis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:90px">
                  <a type="button" border="0" class="btn white" title=" Scapularis Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraScapularis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Infrascapularis Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraInfrascapularis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Infrascapularis Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraInfrascapularis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Lumbaris Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraLumbaris" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Lumbaris Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraLumbaris" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td rowspan="2" style="height:140px">
                  <a type="button" border="0" class="btn white" title=" Glutealis Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraGlutealis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:70px">
                  <a type="button" border="0" class="btn white" title="Sacralis" id="EMR_dr_IGD_P1_btnLokalisSacralis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="2" style="height:140px">
                  <a type="button" border="0" class="btn white" title=" Glutealis Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraGlutealis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:70px">
                  <a type="button" border="0" class="btn white" title="Analis" id="EMR_dr_IGD_P1_btnLokalisAnalis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_tblLokalisTanganDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Tangan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td colspan="2" style="width:120px; height:120px">
                  <a type="button" border="0" class="btn white" title=" Deltoidea Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraDeltoidea" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:130px; height:120px"></td>
                <td colspan="2" style="width:120px;  height:120px">
                  <a type="button" border="0" class="btn white" title=" Deltoidea Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraDeltoidea" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:90px">
                  <a type="button" border="0" class="btn white" title=" Brachialis Anterior Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraBrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="3" style="width:20px; height:210px"></td>
                <td colspan="2" style="height:90px">
                  <a type="button" border="0" class="btn white" title=" Brachialis Anterior Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraBrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Cubitalis Anterior Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraCubitalisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Cubitalis Anterior Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraCubitalisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="width:50px;height:100px">
                  <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraAntebrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:100px">
                  <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraAntebrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:100px">
                  <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraAntebrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:50px;height:100px">
                  <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraAntebrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:100px">
                  <a type="button" border="0" class="btn white" title=" Dormus Manus Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraDormusManus" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:50px"></td>
                <td colspan="2" style="height:100px">
                  <a type="button" border="0" class="btn white" title=" Dormus Manus Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraDormusManus" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_tblLokalisTanganBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Tangan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td colspan="2" style="width:120px; height:120px">
                  <a type="button" border="0" class="btn white" title=" Deltoidea Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraDeltoidea2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:130px; height:120px"></td>
                <td colspan="2" style="width:120px;  height:120px">
                  <a type="button" border="0" class="btn white" title=" Deltoidea Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraDeltoidea2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:90px">
                  <a type="button" border="0" class="btn white" title=" Brachialis Posterior Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraBrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="3" style="width:20px; height:210px"></td>
                <td colspan="2" style="height:90px">
                  <a type="button" border="0" class="btn white" title=" Brachialis Posterior Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraBrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Cubitalis Posterior Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraCubitalisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Cubitalis Posterior Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraCubitalisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="width:50px;height:100px">
                  <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraAntebrachialisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:100px">
                  <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraAntebrachialisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:100px">
                  <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraAntebrachialisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:50px;height:100px">
                  <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraAntebrachialisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:100px">
                  <a type="button" border="0" class="btn white" title=" Palma Manus Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraPalmaManus" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:50px"></td>
                <td colspan="2" style="height:100px">
                  <a type="button" border="0" class="btn white" title=" Palma Manus Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraPalmaManus" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_tblLokalisKakiDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kaki Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td colspan="4" style="width:160px; height:40px"></td>
              </tr>
              <tr>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Femoralis Anterior Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraFemoralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Trigonum Femorale Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraTrigonumfemorale" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Trigonum Femorale Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraTrigonumfemorale" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Femoralis Anterior Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraFemoralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:70px">
                  <a type="button" border="0" class="btn white" title="Femoralis Anterior Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraFemoralisAnterior1" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:70px">
                  <a type="button" border="0" class="btn white" title="Femoralis Anterior Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraFemoralisAnterior1" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Genus Anterior Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraGenusAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Genus Anterior Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraGenusAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="width:60px; height:130px">
                  <a type="button" border="0" class="btn white" title="Cruralis Anterior Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraCruralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:20px; height:130px">
                  <a type="button" border="0" class="btn white" title="Cruralis Posterior Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraCruralisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:20px; height:130px">
                  <a type="button" border="0" class="btn white" title="Cruralis Posterior Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraCruralisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:60px; height:130px">
                  <a type="button" border="0" class="btn white" title="Cruralis Anterior Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraCruralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:80px">
                  <a type="button" border="0" class="btn white" title="Dorsum Pedis Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraDorsumPedis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:80px">
                  <a type="button" border="0" class="btn white" title="Dorsum Pedis Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraDorsumPedis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_tblLokalisKakiBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kaki Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td colspan="4" style="width:160px; height:100px"></td>
              </tr>
              <tr>
                <td colspan="2" style="height:90px">
                  <a type="button" border="0" class="btn white" title="Femoralis Pasterior Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraFemoralisPasterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:90px">
                  <a type="button" border="0" class="btn white" title="Femoralis Pasterior Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraFemoralisPasterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Genus Posterior Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraGenusPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Genus Posterior Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraGenusPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Sura Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraSura" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Sura Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraSura" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="width:40px; height:110px">
                  <a type="button" border="0" class="btn white" title="Cruralis Anterior Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraCruralisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:40px; height:110px">
                  <a type="button" border="0" class="btn white" title="Cruralis Posterior Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraCruralisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:40px; height:110px">
                  <a type="button" border="0" class="btn white" title="Cruralis Posterior Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraCruralisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:40px; height:110px">
                  <a type="button" border="0" class="btn white" title="Cruralis Anterior Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraCruralisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="width:60px; height:50px">
                  <a type="button" border="0" class="btn white" title="Dorsum Pedis Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraDorsumPedis2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:20px; height:50px">
                  <a type="button" border="0" class="btn white" title="Calcanea Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraCalcanea" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:20px; height:50px">
                  <a type="button" border="0" class="btn white" title="Calcanea Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraCalcanea" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:60px; height:50px">
                  <a type="button" border="0" class="btn white" title="Dorsum Pedis Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraDorsumPedis2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:10px">
                  <a type="button" border="0" class="btn white" title="Dorsum Planta Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraPlantaPedis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:10px">
                  <a type="button" border="0" class="btn white" title="Dorsum Planta Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraPlantaPedis" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
          </center>
        </div>
        <div class="col-md-4 row">
          <center><h4><span><b>Bagian Lokalis : </b></span>
          <span id="EMR_dr_IGD_P1_GstsFrmLokalis2"></span></h4></center>
          <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: 0em; border-style: inset; border-width: 1px; height:1px; width:100%">
          <center><h4><span> Lokasi : </span><span id="EMR_dr_IGD_P1_LokasiLokalis"></span></h4></center></br>
          <div class="col-md-6">
            <div class="form-group form-md-line-input has-success form-md-floating-label">
              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                <input type="text" id="EMR_dr_IGD_P1_SLBedahInspeksi" name="EMR_dr_IGD_P1_SLBedahInspeksi" value="" class="form-control">
                <label for="form_control_1">Inspeksi</label>
                <span class="help-block">Masukkan Inspeksi</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-md-line-input has-success form-md-floating-label">
              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                <input type="text" id="EMR_dr_IGD_P1_SLBedahPalpasi" name="EMR_dr_IGD_P1_SLBedahPalpasi" value="" class="form-control">
                <label for="form_control_1">Palpasi</label>
                <span class="help-block">Masukkan Palpasi</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-md-line-input has-success form-md-floating-label">
              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                <input type="text" id="EMR_dr_IGD_P1_SLBedahPerkusi" name="EMR_dr_IGD_P1_SLBedahPerkusi" value="" class="form-control">
                <label for="form_control_1">Perkusi</label>
                <span class="help-block">Masukkan Perkusi</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-md-line-input has-success form-md-floating-label">
              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                <input type="text" id="EMR_dr_IGD_P1_SLBedahAuskultasi" name="EMR_dr_IGD_P1_SLBedahAuskultasi" value="" class="form-control">
                <label for="form_control_1">Auskultasi</label>
                <span class="help-block">Masukkan Auskultasi</span>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <center>
              <a class="btn green-jungle col-md-12" name="EMR_dr_IGD_P1_insertKeluhan" value="Tambah Data" id="EMR_dr_IGD_P1_insertKeluhan"> <i class="fa fa-plus"></i> <b>Tampung Temuan</b></a>
            </center>
          </div>
        </div>
      </div>
      <div class="collapse" id="EMR_dr_IGD_P1_FrmLokalis3">
        <div class="col-md-4">

          <div id="EMR_dr_IGD_P1_AppendOrtoHasilHeaderKepalaDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoKeluhanKepalaDepan"></div>

          <div id="EMR_dr_IGD_P1_AppendOrtoHasilHeaderKepalaBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKepalaBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoKeluhanKepalaBelakang"></div>

          <div id="EMR_dr_IGD_P1_AppendOrtoHasilHeaderBadanDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoKeluhanBadanDepan"></div>

          <div id="EMR_dr_IGD_P1_AppendOrtoHasilHeaderCervicalVerterbral"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoHasilKeluhanCervicalVerterbral"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoKeluhanCervicalVerterbral"></div>

          <div id="EMR_dr_IGD_P1_AppendOrtoHasilHeaderThoracicVerterbral"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoHasilKeluhanThoracicVerterbral"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoKeluhanThoracicVerterbral"></div>

          <div id="EMR_dr_IGD_P1_AppendOrtoHasilHeaderLumbarVerterbral"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoHasilKeluhanLumbarVerterbral"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoKeluhanLumbarVerterbral"></div>

          <div id="EMR_dr_IGD_P1_AppendOrtoHasilHeaderBadanBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoHasilKeluhanBadanBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoKeluhanBadanBelakang"></div>

          <div id="EMR_dr_IGD_P1_AppendOrtoHasilHeaderTanganDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoKeluhanTanganDepan"></div>

          <div id="EMR_dr_IGD_P1_AppendOrtoHasilHeaderTanganBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoHasilKeluhanTanganBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoKeluhanTanganBelakang"></div>

          <div id="EMR_dr_IGD_P1_AppendOrtoHasilHeaderKakiDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKakiDepan"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoKeluhanKakiDepan"></div>

          <div id="EMR_dr_IGD_P1_AppendOrtoHasilHeaderKakiBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoHasilKeluhanKakiBelakang"></div>
          <div id="EMR_dr_IGD_P1_AppendOrtoKeluhanKakiBelakang"></div>

        </div>
        <div class="col-md-4">
          <center>
            <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                <a href="javascript:;" class="btn grey" id="EMR_dr_IGD_P1_Orto_btnGeserKanan" style="height:100%"> << Geser >> </a>
            </div>
          </center>
          <center>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisKepalaDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Teng_Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="width:60px"></td>
                <td style="width:60px;"></td>
                <td colspan="2" style="width:60px; height:40px"></td>
                <td style="width:60px;"></td>
                <td style="width:60px"></td>
              </tr>
              <tr>
                <td style="height:120px"></td>
                <td colspan="4" style="height:120px">
                  <a type="button" border="0" class="btn white" title="Frontal" id="EMR_dr_IGD_P1_btnLokalisFrontal" style="width:100%; height:100%; background-color: Transparent"></a>
                </td>
                <td style="height:120px"></td>
              </tr>
              <tr>
                <td rowspan="2" style="height:120px"><a type="button" border="0" class="btn white" title="Zygomatic" id="EMR_dr_IGD_P1_btnLokalisZygomatic1" style="width:100%; height:100%; background-color: Transparent"></a></td>
                <td style="height:60px"><a type="button" border="0" class="btn white" title="Sphenoid" id="EMR_dr_IGD_P1_btnLokalisSphenoid1" style="width:100%; height:100%; background-color: Transparent"></a></td>
                <td colspan="2" style="height:60px"><a type="button" border="0" class="btn white" title="Nasal" id="EMR_dr_IGD_P1_btnLokalisNasal" style="width:100%; height:100%; background-color: Transparent"></a></td>
                <td style="height:60px"><a type="button" border="0" class="btn white" title="Sphenoid" id="EMR_dr_IGD_P1_btnLokalisSphenoid2" style="width:100%; height:100%; background-color: Transparent"></a></td>
                <td rowspan="2" style="height:120px"><a type="button" border="0" class="btn white" title="Zygomatic" id="EMR_dr_IGD_P1_btnLokalisZygomatic2" style="width:100%; height:100%; background-color: Transparent"></a></td>
              </tr>
              <tr>
                <td style="height:60px"><a type="button" border="0" class="btn white" title="Maxilla" id="EMR_dr_IGD_P1_btnLokalisMaxilla1" style="width:100%; height:100%; background-color: Transparent"></a></td>
                <td colspan="2" style="height:60px"><a type="button" border="0" class="btn white" title="Ethmoid" id="EMR_dr_IGD_P1_btnLokalisEthmoid" style="width:100%; height:100%; background-color: Transparent"></a></td>
                <td style="height:60px"><a type="button" border="0" class="btn white" title="Maxilla" id="EMR_dr_IGD_P1_btnLokalisMaxilla2" style="width:100%; height:100%; background-color: Transparent"></a></td>
              </tr>
              <tr>
                <td></td>
                <td colspan="4" style="height:40px"><a type="button" border="0" class="btn white" title="Maxilla" id="EMR_dr_IGD_P1_btnLokalisMaxilla3" style="width:100%; height:100%; background-color: Transparent"></a></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td colspan="4" style="height:40px"></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td colspan="4" style="height:60px"><a type="button" border="0" class="btn white" title="Mandible" id="EMR_dr_IGD_P1_btnLokalisMandible" style="width:100%; height:100%; background-color: Transparent"></a></td>
                <td></td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisKepalaBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Kepala Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td colspan="2" style="width:330px; height:40px"></td>
              </tr>
              <tr>
                <td style="height:140px">
                  <a type="button" border="0" class="btn white" title="Parietal" id="EMR_dr_IGD_P1_btnLokalisSinistraParietal" style="width:100%; height:100%; background-color: Transparent"></a>
                </td>
                <td style="height:140px">
                  <a type="button" border="0" class="btn white" title="Parietal" id="EMR_dr_IGD_P1_btnLokalisDextraParietal" style="width:100%; height:100%; background-color: Transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:140px">
                  <a type="button" border="0" class="btn white" title="Occipital" id="EMR_dr_IGD_P1_btnLokalisOccipital" style="width:100%; height:100%; background-color: Transparent"> </a>
                </td>
              </tr>
              <tr>
                <td style="height:120px"></td>
                <td style="height:120px"></td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisBadanDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Badan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td colspan="3" style="width:80px;"></td>
                <td style="width:40px; height:80px">
                  <a type="button" border="0" class="btn white" title="Verterbral column" id="EMR_dr_IGD_P1_btnLokalisVerterbral1" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="3" style="width:80px;"></td>
              </tr>
              <tr>
                <td rowspan="2" colspan="3">
                  <a type="button" border="0" class="btn white" title=" Ribs " id="EMR_dr_IGD_P1_btnLokalisRibs1" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title=" Sternum " id="EMR_dr_IGD_P1_btnLokalisSternum" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="2" colspan="3">
                  <a type="button" border="0" class="btn white" title=" Ribs " id="EMR_dr_IGD_P1_btnLokalisRibs2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:100px">
                  <a type="button" border="0" class="btn white" title="Verterbral column" id="EMR_dr_IGD_P1_btnLokalisVerterbral2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="3" style="height:80px"></td>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Verterbral column" id="EMR_dr_IGD_P1_btnLokalisVerterbral3" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="3" style="height:80px"></td>
              </tr>
              <tr>
                <td colspan="2" style="height:70px">
                  <a type="button" border="0" class="btn white" title="Illium Dextra" id="EMR_dr_IGD_P1_btnLokalisIlliumDextra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="3" style="height:70px">
                  <a type="button" border="0" class="btn white" title="Sacrum" id="EMR_dr_IGD_P1_btnLokalisSacrum" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:70px">
                  <a type="button" border="0" class="btn white" title="Illium Sinistra" id="EMR_dr_IGD_P1_btnLokalisIlliumSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <a type="button" border="0" class="btn white" title="Pubis Dextra" id="EMR_dr_IGD_P1_btnLokalisPubisDextra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="3" style="height:30px"></td>
                <td>
                  <a type="button" border="0" class="btn white" title="Pubis Sinistra" id="EMR_dr_IGD_P1_btnLokalisPubisSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <a type="button" border="0" class="btn white" title="Ischium Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraIschium" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="3" style="height:30px"></td>
                <td>
                  <a type="button" border="0" class="btn white" title="Ischium Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraIschium" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td></td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisCervicalVerterbral" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Cervical Verterbral.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="width:200px; height:90px">
                  <a type="button" border="0" class="btn white" title=" Atlas C1 " id="EMR_dr_IGD_P1_btnLokalisAtlasC1" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:50px">
                  <a type="button" border="0" class="btn white" title="Axis C2" id="EMR_dr_IGD_P1_btnLokalisAxisC2" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:50px">
                  <a type="button" border="0" class="btn white" title="Third Cervical Verterbral" id="EMR_dr_IGD_P1_btnLokalisThirdCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:50px">
                  <a type="button" border="0" class="btn white" title="Fourth Cervical Verterbral" id="EMR_dr_IGD_P1_btnLokalisFourthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:50px">
                  <a type="button" border="0" class="btn white" title="Fifth Cervical Verterbral" id="EMR_dr_IGD_P1_btnLokalisFifthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title="Sixth Cervical Verterbral" id="EMR_dr_IGD_P1_btnLokalisSixthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title="Seventh Cervical Verterbral" id="EMR_dr_IGD_P1_btnLokalisSeventhCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisThoracicVerterbral" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Thoracic Verterbral.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="width:200px; height:55px">
                  <a type="button" border="0" class="btn white" title=" First Thoracic Verterbral " id="EMR_dr_IGD_P1_btnLokalisFirstThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Second Thoracic Verterbral" id="EMR_dr_IGD_P1_btnLokalisSecondThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Third Thoracic Verterbral" id="EMR_dr_IGD_P1_btnLokalisThirdThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Fourth Thoracic Verterbral" id="EMR_dr_IGD_P1_btnLokalisFourthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Fifth Thoracic Verterbral" id="EMR_dr_IGD_P1_btnLokalisFifthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Sixth Thoracic Verterbral" id="EMR_dr_IGD_P1_btnLokalisSixthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Seventh Thoracic Verterbral" id="EMR_dr_IGD_P1_btnLokalisSeventhThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Eight Thoracic Verterbral" id="EMR_dr_IGD_P1_btnLokalisEightThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Ninth Thoracic Verterbral" id="EMR_dr_IGD_P1_btnLokalisNinthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:45px">
                  <a type="button" border="0" class="btn white" title="Tenth Thoracic Verterbral" id="EMR_dr_IGD_P1_btnLokalisTenthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:50px">
                  <a type="button" border="0" class="btn white" title="Eleventh Thoracic Verterbral" id="EMR_dr_IGD_P1_btnLokalisEleventhThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:75px">
                  <a type="button" border="0" class="btn white" title="Twelfth Thoracic Verterbral" id="EMR_dr_IGD_P1_btnLokalisTwelfthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisLumbarVerterbral" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Lumbar Verterbral.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="width:200px; height:120px">
                  <a type="button" border="0" class="btn white" title=" First Lumbar Verterbral " id="EMR_dr_IGD_P1_btnLokalisFirstLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Second Lumbar Verterbral" id="EMR_dr_IGD_P1_btnLokalisSecondLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Third Lumbar Verterbral" id="EMR_dr_IGD_P1_btnLokalisThirdLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:100px">
                  <a type="button" border="0" class="btn white" title="Fourth Lumbar Verterbral" id="EMR_dr_IGD_P1_btnLokalisFourthLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Fifth Lumbar Verterbral" id="EMR_dr_IGD_P1_btnLokalisFifthLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisRusuk" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Rusuk.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="width:100px; height:40px">
                  <a type="button" border="0" class="btn white" title=" First Ribs Dextra " id="EMR_dr_IGD_P1_btnLokalisFirstRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:100px; height:40px">
                  <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_dr_IGD_P1_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Second Ribs Dextra" id="EMR_dr_IGD_P1_btnLokalisSecondRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:100px; height:40px">
                  <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_dr_IGD_P1_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Third Ribs Dextra" id="EMR_dr_IGD_P1_btnLokalisThirdRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:100px; height:40px">
                  <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_dr_IGD_P1_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Fourth Ribs Dextra" id="EMR_dr_IGD_P1_btnLokalisFourthRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:100px; height:40px">
                  <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_dr_IGD_P1_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:40px">
                  <a type="button" border="0" class="btn white" title="Fifth Ribs Dextra" id="EMR_dr_IGD_P1_btnLokalisFifthRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:100px; height:40px">
                  <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_dr_IGD_P1_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisBadanBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Badan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="width:80px;"></td>
                <td style="width:20px; height:100px"></td>
                <td style="width:80px;"></td>
              </tr>
              <tr>
                <td style="height:90px">
                  <a type="button" border="0" class="btn white" title=" Scapularis Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="3" style="width:20px; height:210px">
                  <a type="button" border="0" class="btn white" title="Verterbralis" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:90px">
                  <a type="button" border="0" class="btn white" title=" Scapularis Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Infrascapularis Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Infrascapularis Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Lumbaris Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:60px">
                  <a type="button" border="0" class="btn white" title=" Lumbaris Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td rowspan="2" style="height:140px">
                  <a type="button" border="0" class="btn white" title=" Glutealis Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:70px">
                  <a type="button" border="0" class="btn white" title="Sacralis" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="2" style="height:140px">
                  <a type="button" border="0" class="btn white" title=" Glutealis Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="height:70px">
                  <a type="button" border="0" class="btn white" title="Analis" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisTanganDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Tangan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td colspan="4" style="width:200px; height:40px"></td>
                <td colspan="4" style="width:200px; height:40px"></td>
              </tr>
              <tr>
                <td colspan="3"></td>
                <td style="width:60px; height:40px">
                  <a type="button" border="0" class="btn white" title=" Clavicle Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraClavicle" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:60px; height:40px">
                  <a type="button" border="0" class="btn white" title=" Clavicle Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraClavicle" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td style="width:70px;"></td>
                <td rowspan="2" colspan="2" style="width:60px; height:120px">
                  <a type="button" border="0" class="btn white" title=" Humerus Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraHumerus" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:60px; height:60px">
                  <a type="button" border="0" class="btn white" title=" Scapula Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraScapula" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:60px; height:60px">
                  <a type="button" border="0" class="btn white" title=" Scapula Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraScapula" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="2" colspan="2" style="width:60px; height:120px">
                  <a type="button" border="0" class="btn white" title=" Humerus Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraHumerus" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:80px;"></td>
              </tr>
              <tr>
                <td style=""></td>
                <td style=""></td>
                <td style=""></td>
                <td style=""></td>
              </tr>
              <tr>
                <td style="height:110px">
                  <a type="button" border="0" class="btn white" title=" Radius Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraRadius" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:30px; height:110px">
                  <a type="button" border="0" class="btn white" title=" Ulna Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraUlna" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="width:30px; height:110px">
                  <a type="button" border="0" class="btn white" title=" Ulna Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraUlna" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:110px">
                  <a type="button" border="0" class="btn white" title=" Radius Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraRadius" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="width:60px; height:60px">
                  <a type="button" border="0" class="btn white" title=" Carpus Dextra " id="EMR_dr_IGD_P1_btnLokalisDextraCarpus" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="3"></td>
                <td colspan="3"></td>
                <td style="width:60px; height:60px">
                  <a type="button" border="0" class="btn white" title=" Carpus Sinistra " id="EMR_dr_IGD_P1_btnLokalisSinistraCarpus" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisTanganBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Tangan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td style="height:40px"colspan="5"></td>
              </tr>
              <tr>
                <td colspan="2" style="width:120px; height:120px">
                  <a type="button" border="0" class="btn white" title=" Deltoidea Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:30px; height:120px"></td>
                <td style="width:30px; height:120px"></td>
                <td colspan="2" style="width:120px;  height:120px">
                  <a type="button" border="0" class="btn white" title=" Deltoidea Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:90px">
                  <a type="button" border="0" class="btn white" title=" Brachialis Anterior Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td rowspan="3" style="width:20px; height:210px"></td>
                <td colspan="2" style="height:90px">
                  <a type="button" border="0" class="btn white" title=" Brachialis Anterior Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Cubitalis Anterior Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title=" Cubitalis Anterior Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td
              </tr>
              <tr>
                <td style="width:50px;height:100px">
                  <a type="button" border="0" class="btn white" title=" AntebrachialisPosterior Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:100px">
                  <a type="button" border="0" class="btn white" title=" AntebrachialisAnterior Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:100px">
                  <a type="button" border="0" class="btn white" title=" AntebrachialisAnterior Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:50px;height:100px">
                  <a type="button" border="0" class="btn white" title=" AntebrachialisPosterior Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:100px">
                  <a type="button" border="0" class="btn white" title=" DormusManus Dextra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:50px"></td>
                <td colspan="2" style="height:100px">
                  <a type="button" border="0" class="btn white" title=" DormusManus Sinistra " id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisKakiDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Kaki Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td colspan="4" style="width:160px; height:40px"></td>
              </tr>
              <tr>
                <td colspan="2" style="height:190px">
                  <a type="button" border="0" class="btn white" title="Femur Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraFemur" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:190px">
                  <a type="button" border="0" class="btn white" title="Femur Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraFemur" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Patelia Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraPatelia" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Patelia Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraPatelia" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="width:40px; height:130px">
                  <a type="button" border="0" class="btn white" title="Fibula Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraFibula" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:40px; height:130px">
                  <a type="button" border="0" class="btn white" title="Tibia Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraTibia" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:40px; height:130px">
                  <a type="button" border="0" class="btn white" title="Tibia Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraTibia" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:40px; height:130px">
                  <a type="button" border="0" class="btn white" title="Fibula Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraFibula" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:20px">
                  <a type="button" border="0" class="btn white" title="Talus Dextra" id="EMR_dr_IGD_P1_btnLokalisDextraTalus" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:20px">
                  <a type="button" border="0" class="btn white" title="Talus Sinistra" id="EMR_dr_IGD_P1_btnLokalisSinistraTalus" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:60px">
                  <a type="button" border="0" class="btn white" title="" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:60px">
                  <a type="button" border="0" class="btn white" title="" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
            <table class="collapse" border="0" id="EMR_dr_IGD_P1_Orto_tblLokalisKakiBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Kaki Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
              <tr>
                <td colspan="4" style="width:160px; height:40px"></td>
              </tr>
              <tr>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Femoralis Anterior Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Trigonum Femorale Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Trigonum Femorale Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="height:80px">
                  <a type="button" border="0" class="btn white" title="Femoralis Anterior Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:70px">
                  <a type="button" border="0" class="btn white" title="Femoralis Anterior Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:70px">
                  <a type="button" border="0" class="btn white" title="Femoralis Anterior Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Genus Anterior Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:40px">
                  <a type="button" border="0" class="btn white" title="Genus Anterior Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td style="width:60px; height:130px">
                  <a type="button" border="0" class="btn white" title="Cruralis Anterior Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:20px; height:130px">
                  <a type="button" border="0" class="btn white" title="Cruralis Posterior Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:20px; height:130px">
                  <a type="button" border="0" class="btn white" title="Cruralis Posterior Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td style="width:60px; height:130px">
                  <a type="button" border="0" class="btn white" title="Cruralis Anterior Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="height:80px">
                  <a type="button" border="0" class="btn white" title="Dorsum Pedis Dextra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
                <td colspan="2" style="height:80px">
                  <a type="button" border="0" class="btn white" title="Dorsum Pedis Sinistra" id="" style="width:100%; height:100%; background-color: transparent"></a>
                </td>
              </tr>
            </table>
          </center>
        </div>
        <div class="col-md-4 row">
          <center><h4><span><b>Bagian Lokalis : </b></span>
          <span id="EMR_dr_IGD_P1_Orto_GstsFrmLokalis2"></span></h4></center>
          <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: 0em; border-style: inset; border-width: 1px; height:1px; width:100%">
          <center><h4><span> Lokasi : </span><span id="EMR_dr_IGD_P1_Orto_LokasiLokalis"></span></h4></center>
          <span class="col-md-12"><b><center>Look</center></b></span>
          <div class="col-md-6">
            <span class="control-label">Vulnus : </span></br>
            <button type="button" id="EMR_dr_IGD_P1_btnVulnus" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
          </div>
          <div class="col-md-6">
            <span class="control-label">Swelling : </span></br>
            <button type="button" id="EMR_dr_IGD_P1_btnSwelling" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
          </div>
          <div class="col-md-6">
            <span class="control-label">Hematom : </span></br>
            <button type="button" id="EMR_dr_IGD_P1_btnHematom" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
          </div>
          <div class="col-md-6">
            <span class="control-label">Lain - lain : </span></br>
            <input type="text" id="EMR_dr_IGD_P1_btnLookLain" class="form-control" value="" style="width:100%">
          </div>
          <span class="col-md-12"><b><center>Feel</center></b></span>
          <div class="col-md-4">
            <span class="control-label">Nyeri Tekan : </span></br>
            <button type="button" id="EMR_dr_IGD_P1_btnNyeritekan" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
          </div>
          <div class="col-md-4">
            <span class="control-label">Krepitasi : </span></br>
            <button type="button" id="EMR_dr_IGD_P1_btnKrepitasi" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
          </div>
          <div class="col-md-4">
            <span class="control-label">Hiperetesi : </span></br>
            <button type="button" id="EMR_dr_IGD_P1_btnHiperetesi" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
          </div>
          <div class="col-md-6">
            <span class="control-label">Perubahan Suhu : </span></br>
            <button type="button" id="EMR_dr_IGD_P1_btnPerubahanSuhu" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
          </div>
          <div class="col-md-6">
            <span class="control-label">Lain - lain : </span></br>
            <input type="text" id="EMR_dr_IGD_P1_btnFeelLain" class="form-control" style="width:100%" value="">
          </div>
          <span class="col-md-12"><b><center>Move</center></b></span>
          <div class="col-md-2">
            <span class="control-label">ROM</span></br>
            <button type="button" id="EMR_dr_IGD_P1_btnROM" class="btn green" style="width:100%" value="+"><b> + </b></button>
          </div>
          <div class="col-md-4">
            <span class="control-label">Move : </span></br>
            <button type="button" id="EMR_dr_IGD_P1_btnMove" class="btn green" style="width:100%" value="Bebas"><b> Bebas </b></button>
          </div>
          <div class="col-md-6">
            <span class="control-label">Lain - lain : </span></br>
            <input type="text" id="EMR_dr_IGD_P1_MoveLain" class="form-control" style="width:100%" value="">
          </div>

          <div class="col-md-12">
            <center>
              </br>
              <a class="btn green-jungle col-md-12" name="EMR_dr_IGD_P1_insertKeluhanOrto" value="Tambah Data" id="EMR_dr_IGD_P1_insertKeluhanOrto"> <i class="fa fa-plus"></i> <b>Tampung Temuan</b></a>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <center>
      <div class="btn-group btn-group btn-group-justified" style="width:50%">
        <!--button class="btn red" data-toggle="modal" href="#EMR_dr_IGD_P1_modalBatalLokalis" style="width:50%">Batal</button-->
        <button class="btn blue" id="EMR_dr_IGD_P1_btnSimpanModalLokalis" style="width:100%">Simpan</button>
      </div>
    </center>
  </div>
</div>
<div id="EMR_dr_IGD_P1_modalBatalLokalis" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
          <a type="button" id="EMR_dr_IGD_P1_btnBatalModalLokalis" class="btn red" data-dismiss="modal" style="width:50%">Ya</a>
          <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tidak</a>
        </div>
      </center>
    </div>
  </div>
</div>
<div id="EMR_dr_IGD_P1_modalKosongLokalis" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title"><center>Peringatan, ada data belum ditampung !!</center></h4>
    </div>
    <div class="modal-body">
      <center>
        Anda belum menampung data keluhan pasien yang telah anda pilih, apabila anda klik ya, maka data keluhan yang belum ditampung akan dihapus.</br><h4><b>Hapus data yang belum ditampung??</b></h4>
      </center>
    </div>
    <div class="modal-footer">
      <center>
        <div class="btn-group btn-group btn-group-justified" style="width:50%">
            <a type="button" id="EMR_dr_IGD_P1_btnBatalModalLokalis2" class="btn red" data-dismiss="modal" style="width:50%">Ya</a>
            <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Tidak</a>
        </div>
      </center>
    </div>
  </div>
</div>
<div id="EMR_dr_IGD_P1_modalKosongKeluhandanLokalis" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
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
<!--LOKALIS GAMBAR BADAN END-->
