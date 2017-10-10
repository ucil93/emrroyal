
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <?php
  if($norm == 'UNKNOWN')
  {?>
    <input type="hidden" id="EMR_dr_IGD_IDPEMERIKSAAN" value="<?=$ID_PEMERIKSAAN;?>">
    <?php
    $Utahun = $this->db->query("select * from EMR_IGD_MRX where ID_PEMERIKSAAN = '$ID_PEMERIKSAAN'")->row()->TTL_ALIAS;
  }?>
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content" style="background-color:#BFBFBF;">
    <input type="hidden" id="EMR_dr_IGD_NamaDokter" name="EMR_IGD_NamaDokter" value="<?php echo $namadokter; ?>" class="form-control">
    <input type="hidden" id="EMR_dr_IGD_KodeDokter" name="EMR_IGD_KodeDokter" value="<?php echo $kodedokter; ?>" class="form-control">
    <div class="row">
      <div class="col-md-9">
        <div class="portlet light bordered">
          <div class="caption font-red-sunglo">
            <center><span id="EMR_dr_IGD_judulHalaman" class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">ASESMEN KEPERAWATAN PASIEN IGD</span></center>
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
          <input type="hidden" id="EMR_dr_IGD_ID2" value="<?=$cekin->Triase;?>">
          <input type="hidden" id="EMR_dr_IGD_MENUMU1" value="<?=$cekinMenu->MenuD_1;?>">
          <input type="hidden" id="EMR_dr_IGD_MENUMU2" value="<?=$cekinMenu->MenuD_2;?>">
          <input type="hidden" id="EMR_dr_IGD_MENUMU3" value="<?=$cekinMenu->MenuD_3;?>">
          <input type="hidden" id="EMR_dr_IGD_MENUMU4" value="<?=$cekinMenu->MenuD_4;?>">
          <input type="hidden" id="EMR_dr_IGD_MENUMU5" value="<?=$cekinMenu->MenuD_5;?>">
          <input type="hidden" id="EMR_dr_IGD_MENUMU6" value="<?=$cekinMenu->MenuD_6;?>">
          <input type="hidden" id="EMR_dr_IGD_ID" value="<?=$data;?>">
          <?php
        }
        else
        {?>
          <input type="hidden" id="EMR_dr_IGD_ID" value="<?=$data;?>">
        <?php
        }
        ?>
        <script type="text/javascript">
        $(document).ready(function(){

          if(document.getElementById('EMR_dr_IGD_MENUMU1').value == "DONE")
          {
            document.getElementById('EMR_dr_IGD_P1_Halaman').classList.add('collapse');
            document.getElementById('EMR_dr_IGD_P1_divBtnMenu').classList.add('collapse');
            document.getElementById('EMR_dr_IGD_P1_divBtnMenuX').classList.remove('collapse');
            if(document.getElementById('EMR_dr_IGD_MENUMU2').value == "DONE")
            {
              document.getElementById('EMR_dr_IGD_P2_Halaman').classList.add('collapse');
              document.getElementById('EMR_dr_IGD_P2_divBtnMenu').classList.add('collapse');
              document.getElementById('EMR_dr_IGD_P2_divBtnMenuX').classList.remove('collapse');
              if(document.getElementById('EMR_dr_IGD_MENUMU3').value == "DONE")
              {
                document.getElementById('EMR_dr_IGD_P3_Halaman').classList.add('collapse');
                document.getElementById('EMR_dr_IGD_P3_divBtnMenu').classList.add('collapse');
                document.getElementById('EMR_dr_IGD_P3_divBtnMenuX').classList.remove('collapse');
                if(document.getElementById('EMR_dr_IGD_MENUMU4').value == "DONE")
                {
                  document.getElementById('EMR_dr_IGD_P4_Halaman').classList.add('collapse');
                  document.getElementById('EMR_dr_IGD_P4_divBtnMenu').classList.add('collapse');
                  document.getElementById('EMR_dr_IGD_P4_divBtnMenuX').classList.remove('collapse');
                  if(document.getElementById('EMR_dr_IGD_MENUMU5').value == "DONE")
                  {
                    document.getElementById('EMR_dr_IGD_P5_Halaman').classList.add('collapse');
                    document.getElementById('EMR_dr_IGD_P5_divBtnMenu').classList.add('collapse');
                    document.getElementById('EMR_dr_IGD_P5_divBtnMenuX').classList.remove('collapse');
                    if(document.getElementById('EMR_dr_IGD_MENUMU6').value == "DONE")
                    {
                      document.getElementById('EMR_dr_IGD_P6_Halaman').classList.add('collapse');
                      document.getElementById('EMR_dr_IGD_P6_divBtnMenu').classList.add('collapse');
                      document.getElementById('EMR_dr_IGD_P6_divBtnMenuX').classList.remove('collapse');
                    }
                    else
                    {
                      document.getElementById('EMR_dr_IGD_P6_Halaman').classList.remove('collapse');
                      document.getElementById('EMR_dr_IGD_P6_divBtnMenuX').classList.add('collapse');
                      document.getElementById('EMR_dr_IGD_P6_divBtnMenu').classList.remove('collapse');
                      document.getElementById('EMR_dr_IGD_statverHal').value = 'P6';
                      document.getElementById('EMR_dr_IGD_P6_btnmenu').classList.remove('green');
                      document.getElementById('EMR_dr_IGD_P6_btnmenu').classList.add('white');
                    }
                  }
                  else
                  {
                    document.getElementById('EMR_dr_IGD_P5_Halaman').classList.remove('collapse');
                    document.getElementById('EMR_dr_IGD_P5_divBtnMenuX').classList.add('collapse');
                    document.getElementById('EMR_dr_IGD_P5_divBtnMenu').classList.remove('collapse');
                    document.getElementById('EMR_dr_IGD_statverHal').value = 'P5';
                    document.getElementById('EMR_dr_IGD_P5_btnmenu').classList.remove('green');
                    document.getElementById('EMR_dr_IGD_P5_btnmenu').classList.add('white');
                  }
                }
                else
                {
                  document.getElementById('EMR_dr_IGD_P4_Halaman').classList.remove('collapse');
                  document.getElementById('EMR_dr_IGD_P4_divBtnMenuX').classList.add('collapse');
                  document.getElementById('EMR_dr_IGD_P4_divBtnMenu').classList.remove('collapse');
                  document.getElementById('EMR_dr_IGD_statverHal').value = 'P4';
                  document.getElementById('EMR_dr_IGD_P4_btnmenu').classList.remove('green');
                  document.getElementById('EMR_dr_IGD_P4_btnmenu').classList.add('white');
                }
              }
              else
              {
                document.getElementById('EMR_dr_IGD_P3_Halaman').classList.remove('collapse');
                document.getElementById('EMR_dr_IGD_P3_divBtnMenuX').classList.add('collapse');
                document.getElementById('EMR_dr_IGD_P3_divBtnMenu').classList.remove('collapse');
                document.getElementById('EMR_dr_IGD_statverHal').value = 'P3';
                document.getElementById('EMR_dr_IGD_P3_btnmenu').classList.remove('green');
                document.getElementById('EMR_dr_IGD_P3_btnmenu').classList.add('white');
              }
            }
            else
            {
              document.getElementById('EMR_dr_IGD_P2_Halaman').classList.remove('collapse');
              document.getElementById('EMR_dr_IGD_P2_divBtnMenuX').classList.add('collapse');
              document.getElementById('EMR_dr_IGD_P2_divBtnMenu').classList.remove('collapse');
              document.getElementById('EMR_dr_IGD_statverHal').value = 'P2';
              document.getElementById('EMR_dr_IGD_P2_btnmenu').classList.remove('green');
              document.getElementById('EMR_dr_IGD_P2_btnmenu').classList.add('white');
            }
          }
          else
          {
            document.getElementById('EMR_dr_IGD_P1_Halaman').classList.remove('collapse');
            document.getElementById('EMR_dr_IGD_P1_divBtnMenuX').classList.add('collapse');
            document.getElementById('EMR_dr_IGD_P1_divBtnMenu').classList.remove('collapse');
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
        <input type="hidden" id="EMR_dr_IGD_NORM" value="<?=$norm;?>">
        <input type="hidden" id="EMR_dr_IGD_NOREG" value="<?=$noreg;?>">

        <div class="collapse" id="EMR_dr_IGD_P1_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_dr_IGD_P1_btnHalaman1" class="btn white col-md-12">Subjektif</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12">
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
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama1" name="EMR_ASESMEN_DOKTER_Keluhanutama1" value="Nyeri" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_Keluhanutama1">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Nyeri </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama2" name="EMR_ASESMEN_DOKTER_Keluhanutama2" value="Mual" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_Keluhanutama2">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Mual </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama3" name="EMR_ASESMEN_DOKTER_Keluhanutama3" value="Muntah" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_Keluhanutama3">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Muntah</label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama4" name="EMR_ASESMEN_DOKTER_Keluhanutama4" value="Sesak nafas" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_Keluhanutama4">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Sesak nafas </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama5" name="EMR_ASESMEN_DOKTER_Keluhanutama5" value="Diare" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_Keluhanutama5">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Diare </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama6" name="EMR_ASESMEN_DOKTER_Keluhanutama6" value="Pingsan" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_Keluhanutama6">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Pingsan </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama9" name="EMR_ASESMEN_DOKTER_Keluhanutama9" value="Luka " class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_Keluhanutama9">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Luka </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_Keluhanutama7" name="EMR_ASESMEN_DOKTER_Keluhanutama7" value="Pusing " class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_Keluhanutama7">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Pusing </label>
                                </div>
                                <div class="col-md-12">
                                  <span class="control-label">Lain lain : </span>
                                  <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_Keluhanutama8" name="EMR_ASESMEN_DOKTER_Keluhanutama8" value="" placeholder="Lain lain">
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
                            <textarea class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitSekarang" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitSekarang" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                            <label for="form_control_1">Riwayat penyakit pasien</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                    </div>
                    <div class="col-md-6">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                          <span><b>Riwayat Penyakit Dahulu</b></span>
                        </div>
                        <div class="portlet-body">
                          <center>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="row md-checkbox-inline">
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1" value="DM" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA1">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> DM </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2" value="HT" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA2">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> HT </label>
                                </div>
                              </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3" value="Stroke" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA3">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Stroke</label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4" value="Jantung" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA4">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Jantung </label>
                                </div>
                              </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5" value="Ginjal" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA5">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Ginjal </label>
                                </div>
                                <div class="col-md-12">
                                  <span class="control-label">Lain lain : </span>
                                  <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA6" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA6" value="" placeholder="Lain lain">
                                </div>
                              </div>
                              <br>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA7" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA7" value="Tidak ada" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluA7">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Tidak ada </label>
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
                          <span><b>Riwayat Penyakit Keluarga</b></span>
                        </div>
                        <div class="portlet-body">
                          <center>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="row md-checkbox-inline">
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1" value="DM" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB1">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> DM </label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2" value="HT" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB2">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> HT </label>
                                </div>
                              </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3" value="Stroke" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB3">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Stroke</label>
                                </div>
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4" value="Jantung" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB4">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Jantung </label>
                                </div>
                              </div>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-5 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5" value="Ginjal" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB5">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Ginjal </label>
                                </div>
                                <div class="col-md-12">
                                  <span class="control-label">Lain lain : </span>
                                  <input type="text" class="form-control" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB6" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB6" value="" placeholder="Lain lain">
                                </div>
                              </div>
                              <br>
                              <div class="row md-checkbox-inline">
                                <div class="col-md-12 md-checkbox">
                                  <input type="checkbox" id="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB7" name="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB7" value="Tidak ada" class="md-check">
                                  <label for="EMR_ASESMEN_DOKTER_RiwayatPenyakitDahuluB7">
                                  <span></span>
                                  <span class="check"></span>
                                  <span class="box"></span> Tidak ada </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          </center>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P1_btnsimpan" style="width:100%">SIMPAN</a><br/><br/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_dr_IGD_P2_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_dr_IGD_btnHalaman1" class="btn white col-md-12">Objektif</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_ASESMEN_ULANG_DOKTER_Halaman2">
                    <div class="col-md-6">
                      <div class="portlet light portlet-fit bordered">
                        <div class="portlet-body row">
                          <div class="col-md-12">
                            <span class="control-label">Keadaan Umum : </span>
                            <div class="md-radio-inline">
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_DOKTER_KeadaanUmum1" name="EMR_ASESMEN_DOKTER_KeadaanUmum" class="md-radiobtn" value="Baik" checked>
                                <label for="EMR_ASESMEN_DOKTER_KeadaanUmum1">
                                <span class="inc"></span>
                                <span class="check"></span>
                                <span class="box"></span> Baik </label>
                              </div>
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_DOKTER_KeadaanUmum2" name="EMR_ASESMEN_DOKTER_KeadaanUmum" class="md-radiobtn" value="Ringan">
                                <label for="EMR_ASESMEN_DOKTER_KeadaanUmum2">
                                <span class="inc"></span>
                                <span class="check"></span>
                                <span class="box"></span> Ringan </label>
                              </div>
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_DOKTER_KeadaanUmum3" name="EMR_ASESMEN_DOKTER_KeadaanUmum" class="md-radiobtn" value="Berat">
                                <label for="EMR_ASESMEN_DOKTER_KeadaanUmum3">
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
                            <input type="text" id="EMR_ASESMEN_DOKTER_GCSe" name="EMR_ASESMEN_DOKTER_GCSe" value="4" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <span class="control-label">V : </span>
                            <input type="text" id="EMR_ASESMEN_DOKTER_GCSv" name="EMR_ASESMEN_DOKTER_GCSv" value="5" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <span class="control-label">M : </span>
                            <input type="text" id="EMR_ASESMEN_DOKTER_GCSm" name="EMR_ASESMEN_DOKTER_GCSm" value="6" class="form-control">
                          </div>
                          <br>
                          <div class="col-md-12">
                            <span>Kesadaran : </span>
                          </div>
                          <div class="col-md-12">
                            <select class="bs-select form-control" name="EMR_dr_IGD_Kesadaran" id="EMR_dr_IGD_Kesadaran" data-live-search="true" data-size="8">
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
                                  <input type="text" id="EMR_ASESMEN_DOKTER_TDSistolik" name="EMR_ASESMEN_DOKTER_TDSistolik" value="" class="form-control">
                                </div>
                                <div class="col-md-4">
                                  <label for="form_control_1">Diastolik</label>
                                  <i style="font-size:12px"><b>mmHg</b></i>
                                  <input type="text" id="EMR_ASESMEN_DOKTER_TDDiastolik" name="EMR_ASESMEN_DOKTER_TDDiastolik" value="" class="form-control">
                                </div>
                                <div class="col-md-4">
                                  <label for="form_control_1">Suhu tubuh</label>
                                  <i style="font-size:12px"><b>&deg;C</b></i>
                                  <input type="text" id="EMR_ASESMEN_DOKTER_suhutubuh" name="EMR_ASESMEN_DOKTER_suhutubuh" value="" class="form-control">
                                </div>
                              </div>
                              <hr>
                              <div class="tab-content">
                                <div class="col-md-6">
                                  <label for="form_control_1">N</label>
                                  <i style="font-size:12px"><b>x/mnt</b></i>
                                  <input type="text" id="EMR_ASESMEN_DOKTER_nadi" name="EMR_ASESMEN_DOKTER_nadi" value="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_DOKTER_NadiCH_reguler" name="EMR_ASESMEN_DOKTER_NadiCH" class="md-radiobtn" value="Reguler">
                                      <label for="EMR_ASESMEN_DOKTER_NadiCH_reguler">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Reguler </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_DOKTER_NadiCH_irreguler" name="EMR_ASESMEN_DOKTER_NadiCH" class="md-radiobtn" value="Irreguler">
                                      <label for="EMR_ASESMEN_DOKTER_NadiCH_irreguler">
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
                                  <input type="text" id="EMR_ASESMEN_DOKTER_respiratory" name="EMR_ASESMEN_DOKTER_respiratory" value="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <div class="md-radio-inline">
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_DOKTER_RespiratoryCH_teratur" name="EMR_ASESMEN_DOKTER_RespiratoryCH" class="md-radiobtn" value="Teratur">
                                      <label for="EMR_ASESMEN_DOKTER_RespiratoryCH_teratur">
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span> Teratur </label>
                                    </div>
                                    <div class="md-radio">
                                      <input type="radio" id="EMR_ASESMEN_DOKTER_RespiratoryCH_titeratur" name="EMR_ASESMEN_DOKTER_RespiratoryCH" class="md-radiobtn" value="Tidak Teratur">
                                      <label for="EMR_ASESMEN_DOKTER_RespiratoryCH_titeratur">
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
                                  <input type="text" id="EMR_ASESMEN_DOKTER_beratbadan" name="EMR_ASESMEN_DOKTER_beratbadan" value="" class="form-control">
                                </div>
                                <div class="col-md-3">
                                  <label for="form_control_1">TB</label>
                                  <i style="font-size:12px"><b>Cm</b></i>
                                  <input type="text" id="EMR_ASESMEN_DOKTER_tinggibadan" name="EMR_ASESMEN_DOKTER_tinggibadan" value="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                  <span>Nilai BMI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><b><span id="EMR_ASESMEN_DOKTER_Nilai_BMI">0</span></b></br>
                                  <span>Kategori BMI : </span><b><span id="EMR_ASESMEN_DOKTER_Kategori_BMI"></span></b>
                                </div>
                                <?php
                                if($Utahun < 1)
                                {
                                  ?>
                                  <div class="col-md-6">
                                    <label for="form_control_1">Lingkar Kepala (Khusus Bayi)</label>
                                    <i style="font-size:12px"><b>Cm</b></i>
                                    <input type="text" id="EMR_ASESMEN_DOKTER_lingkarkepala" name="EMR_ASESMEN_DOKTER_lingkarkepala" value="" class="form-control">
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
                      <div class="row">
                        <div class="col-md-12">
                          <div class="portlet light bordered">
                            <div class="portlet-body">
                              <div class="tab-content">
                                <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-12 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_kepala" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_kepala" value="" class="md-check">
                                        <label for="EMR_ASESMEN_ULANG_Dokter_SL_PF_kepala">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Kepala </label>
                                      </div>
                                    </div>
                                  </div>
                                  <input type="hidden" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_kepalastatus" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_kepalastatus" value="Tidak" class="form-control">
                                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_kepala2">
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
                                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAnemis" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                                <td class="col-md-3"></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-3"><span>Ikterus</span></td>
                                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnIkterus" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                                <td class="col-md-3"></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-3"><span>Cyanosis</span></td>
                                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnCyanosis" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                                <td class="col-md-3"></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-3"><span>Dipsneo</span></td>
                                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnDipsneo" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                                <td class="col-md-3"></td>
                                              </tr>
                                              <?php
                                              if($Utahun < 1.5)
                                              { ?>
                                              <tr>
                                                <td class="col-md-3"><span>UUK</span></td>
                                                <td colspan="2" class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnUUK" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-3"><span>UUB</span></td>
                                                <td colspan="2" class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnUUB" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
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
                                                <td class="col-md-3"><span>Pupil </span><span id="pupilstat">Isokor</span></td>
                                                <td class="col-md-3">
                                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                      <input type="text" id="EMR_ASESMEN_ULANG_Dokter_pupilKanan" name="EMR_ASESMEN_ULANG_Dokter_pupilKanan" value="3" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                                      <label for="form_control_1"></label>
                                                      <span class="help-block">Masukkan nilai</span>
                                                      <i style="font-size:12px"><b>mm</b></i>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="col-md-3">
                                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                      <input type="text" id="EMR_ASESMEN_ULANG_Dokter_pupilKiri" name="EMR_ASESMEN_ULANG_Dokter_pupilKiri" value="3" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="3">
                                                      <label for="form_control_1"></label>
                                                      <span class="help-block">Masukkan nilai</span>
                                                      <i style="font-size:12px"><b>mm</b></i>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-3"><span>Cahaya</span></td>
                                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnCahayaKanan" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                                <td class="col-md-3"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnCahayaKiri" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-3"><span>Lain - lain</span></td>
                                                <td colspan="2" class="col-md-6">
                                                  <input type="text" class="form-control" id="EMR_ASESMEN_ULANG_Dokter_KepalaLeher" name="" value="" placeholder="Lain lain">
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
                                        <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_thorax" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_thorax" value="" class="md-check">
                                        <label for="EMR_ASESMEN_ULANG_Dokter_SL_PF_thorax">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Thorax (Cor) </label>
                                      </div>
                                    </div>
                                  </div>
                                  <input type="hidden" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_thoraxstatus" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_thoraxstatus" value="Tidak" class="form-control">
                                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_thorax2">
                                    <div class="col-md-12">
                                      <div class="portlet light portlet-fit bordered">
                                        <div class="portlet-title">
                                          <span><b>Thorax ( Cor )</b></span>
                                        </div>
                                        <div class="portlet-body">
                                          <center>
                                          <div class="form-group">
                                            <div class="input-group">
                                              <div class="row md-radio-inline">
                                                <div class="col-md-12 md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_Cor1" name="coresplitranger" value="" class="md-check" checked="true">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_Cor1">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> S1, S2, Tunggal</label>
                                                </div>
                                                <div class="row md-checkbox-inline">
                                                  <div class="col-md-5 md-checkbox">
                                                    <div class="row">
                                                      <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Cor2" name="EMR_ASESMEN_ULANG_Dokter_Cor2" value="" class="md-check">
                                                      <label for="EMR_ASESMEN_ULANG_Dokter_Cor2">
                                                      <span></span>
                                                      <span class="check"></span>
                                                      <span class="box"></span> Split S1 </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-5 md-checkbox">
                                                    <div class="row">
                                                      <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Cor3" name="EMR_ASESMEN_ULANG_Dokter_Cor3" value="" class="md-check">
                                                      <label for="EMR_ASESMEN_ULANG_Dokter_Cor3">
                                                      <span></span>
                                                      <span class="check"></span>
                                                      <span class="box"></span> Split S2 </label>
                                                    </div>
                                                  </div>
                                                </div>

                                                <!--<div class="col-md-5 md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_Cor2" name="coresplitranger" value="" class="md-check">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_Cor2">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Split S1 </label>
                                                </div>
                                                <div class="col-md-5 md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_Cor3" name="coresplitranger" value="" class="md-check">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_Cor3">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Split S2</label>
                                                </div>-->
                                              </div>
                                              <!--<input type="hidden" id="statcorranger" value="hidden">-->
                                              <div id="coresplitshow" class="row md-radio-inline">
                                                <div class="col-md-5 md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_Cor4" name="coresplitgundam" value="" class="md-check">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_Cor4">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Irregular </label>
                                                </div>
                                                <div class="col-md-5 md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_Cor5" name="coresplitgundam" value="" class="md-check" checked="true">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_Cor5">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Regular </label>
                                                </div>
                                              </div>
                                            </div>
                                            <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnMurmur" class="btn yellow col-md-5" value="-"><b> Murmur - </b></button>
                                            <input type="text" id="EMR_ASESMEN_ULANG_Dokter_btnMurmurText" value="EMR_ASESMEN_ULANG_Dokter_btnMurmurText" class="form-control collapse">
                                            <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnGallop" class="btn yellow col-md-5" value="-"><b> Gallop - </b></button>
                                          </div>
                                          </center>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-12 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_thoraxPulmo" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_thoraxPulmo" value="" class="md-check">
                                        <label for="EMR_ASESMEN_ULANG_Dokter_SL_PF_thoraxPulmo">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Thorax (Pulmo) </label>
                                      </div>
                                    </div>
                                  </div>
                                  <input type="hidden" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_thoraxPulmostatus" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_thoraxPulmostatus" value="Tidak" class="form-control">
                                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_thoraxPulmo2">
                                    <div class="col-md-12">
                                      <div class="portlet light portlet-fit bordered">
                                        <div class="portlet-title">
                                          <span><b>Thorax ( Pulmo )</b></span>
                                        </div>
                                        <div class="portlet-body row">
                                          <div class="col-md-4">
                                            <span>Vesikuler</span></br>
                                            <table>
                                              <tr>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnVesikuler1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnVesikuler2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnVesikuler3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnVesikuler4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnVesikuler5" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnVesikuler6" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                              </tr>
                                            </table>
                                          </div>
                                          <div class="col-md-4">
                                            <span>Rhonki</span></br>
                                            <table>
                                              <tr>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnRhonki1" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnRhonki2" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnRhonki3" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnRhonki4" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnRhonki5" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnRhonki6" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                              </tr>
                                            </table>
                                          </div>
                                          <div class="col-md-4">
                                            <span>Wheezing</span></br>
                                            <table>
                                              <tr>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnWheezing1" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnWheezing2" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnWheezing3" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnWheezing4" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnWheezing5" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                                <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnWheezing6" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                              </tr>
                                            </table>
                                          </div>
                                          </br>
                                          <div class="col-md-6">
                                            <span class="control-label">Retraksi Intercostal : </span></br>
                                            <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnretraksiKanan" class="btn yellow col-md-6" value="Kanan -"><b>Kanan - </b></button>
                                            <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnretraksiKiri" class="btn yellow col-md-6" value="Kiri -"><b>Kiri - </b></button>
                                          </div>
                                          <div class="col-md-6">
                                            <span class="control-label">Lain - lain : </span>
                                            <input type="text" id="" value="" class="form-control" placeholder="Lain lain">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-12 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_Abdomen" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_Abdomen" value="" class="md-check">
                                        <label for="EMR_ASESMEN_ULANG_Dokter_SL_PF_Abdomen">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Abdomen </label>
                                      </div>
                                    </div>
                                  </div>
                                  <input type="hidden" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_Abdomenstatus" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_Abdomenstatus" value="Tidak" class="form-control">
                                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_Abdomen2">
                                    <div class="col-md-12">
                                      <div class="portlet light portlet-fit bordered">
                                        <div class="portlet-title">
                                          <span><b>Abdomen</b></span>
                                        </div>
                                        <div class="portlet-body row">
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                              <span>Bising Usus :</span>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="md-radio-inline">
                                                <div class="md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1A" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1" class="md-radiobtn" value="" checked="true">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1A">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Normal </label>
                                                </div>
                                                <div class="md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1B" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1" class="md-radiobtn" value="">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1B">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Meningkat </label>
                                                </div>
                                                <div class="md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1C" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1" class="md-radiobtn" value="">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1C">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Menurun </label>
                                                </div>
                                                <div class="md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1D" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1" class="md-radiobtn" value="Tidak">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1D">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Lain - lain </label>
                                                </div>
                                                <input type="text" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1E" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomen1E" class="form-control collapse" placeholder="Lain lain">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row col-md-6">
                                            <div class="col-md-12">
                                              <div class="col-md-5">
                                                <span><center>Meteorimus</center></span>
                                              </div>
                                              <div class="col-md-5">
                                                <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen2" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="col-md-5">
                                                <span><center>Flat</center></span>
                                              </div>
                                              <div class="col-md-5">
                                                <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen3" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="col-md-5">
                                                <span><center>Soeple</center></span>
                                              </div>
                                              <div class="col-md-5">
                                                <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen4" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="col-md-5">
                                                <span><center>Defans</center></span>
                                              </div>
                                              <div class="col-md-5">
                                                <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen5" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="col-md-5">
                                                <span><center>Distensi</center></span>
                                              </div>
                                              <div class="col-md-5">
                                                <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen6" class="btn yellow col-md-12" value="-"><b> - </b></button>
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
                                                    <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen7A" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomen7Radio" class="md-radiobtn" value="" checked="true">
                                                    <label for="EMR_ASESMEN_ULANG_Dokter_btnAbdomen7A">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Tidak Teraba </label>
                                                  </div>
                                                  <div class="md-radio">
                                                    <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen7B" Bame="EMR_ASESMEN_ULANG_Dokter_btnAbdomen7Radio" class="md-radiobtn" value="">
                                                    <label for="EMR_ASESMEN_ULANG_Dokter_btnAbdomen7B">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Teraba </label>
                                                  </div>
                                                  <input type="text" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen7C" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomen7C" class="form-control collapse">
                                                  <input type="hidden" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen7Cstatus" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomen7Cstatus" class="form-control" value="Tidak">
                                                </div>
                                                <!--<button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen7" class="btn yellow col-md-12" value="-"><b> - </b></button>-->
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="col-md-5">
                                                <span><center>Lien</center></span>
                                              </div>
                                              <div class="col-md-7">
                                                <div class="md-radio-inline">
                                                  <div class="md-radio">
                                                    <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen8A" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomen8Radio" class="md-radiobtn" value="" checked="true">
                                                    <label for="EMR_ASESMEN_ULANG_Dokter_btnAbdomen8A">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Tidak Teraba </label>
                                                  </div>
                                                  <div class="md-radio">
                                                    <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen8B" Bame="EMR_ASESMEN_ULANG_Dokter_btnAbdomen8Radio" class="md-radiobtn" value="">
                                                    <label for="EMR_ASESMEN_ULANG_Dokter_btnAbdomen8B">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Teraba </label>
                                                  </div>
                                                  <input type="text" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen8C" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomen8C" class="form-control collapse">
                                                  <input type="hidden" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen8Cstatus" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomen8Cstatus" class="form-control" value="Tidak">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="md-checkbox">
                                                <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_AbdomenLainChb" name="EMR_ASESMEN_PERAWAT_RbtnHambatan" class="md-radiobtn" value="HambatanYa">
                                                <label for="EMR_ASESMEN_ULANG_Dokter_AbdomenLainChb">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Lain - lain </label>
                                              </div>
                                            </div>
                                            <div id="EMR_ASESMEN_ULANG_Dokter_AbdomenLain" class="collapse">
                                              <div class="col-md-12">
                                                <div class="col-md-5">
                                                  <span><center>Shifting dullness</center></span>
                                                </div>
                                                <div class="col-md-5">
                                                  <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen9" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="col-md-5">
                                                  <span><center>Nyeri Tekan Mc burney</center></span>
                                                </div>
                                                <div class="col-md-5">
                                                  <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen10" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="col-md-5">
                                                  <span><center>Murphy Sign</center></span>
                                                </div>
                                                <div class="col-md-5">
                                                  <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen11" class="btn yellow col-md-12" value="-"><b> - </b></button>
                                                </div>
                                                <div class="col-md-12">
                                                  <div class="col-md-5">
                                                    <span><center>Lain - lain</center></span>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <input type="text" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomenText1" name="EMR_ASESMEN_ULANG_Dokter_btnAbdomenText1" class="form-control" placeholder="Lain lain">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          </br>
                                          <br>
                                          </br>
                                          <div class="col-md-12"></div>
                                          <center>
                                            <div class="row col-md-8">
                                              <div class="col-md-5">
                                                <span><center>Nyeri Tekan</center></span>
                                              </div>
                                              <div class="row col-md-7">
                                                <div col-md-12>
                                                  <div class="col-md-4">
                                                    <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen12" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen13" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen14" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                  </div>
                                                </div>
                                                <div col-md-12>
                                                  <div class="col-md-4">
                                                    <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen15" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen16" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen17" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                  </div>
                                                </div>
                                                <div col-md-12>
                                                  <div class="col-md-4">
                                                    <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen18" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen19" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnAbdomen20" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </center>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row md-checkbox-inline">
                                    <div class="col-md-12 md-checkbox">
                                      <div class="row">
                                        <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_Ekstremitas" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_Ekstremitas" value="" class="md-check">
                                        <label for="EMR_ASESMEN_ULANG_Dokter_SL_PF_Ekstremitas">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Ekstremitas </label>
                                      </div>
                                    </div>
                                  </div>
                                  <input type="hidden" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_Ekstremitasstatus" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_Ekstremitasstatus" value="Tidak" class="form-control">
                                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_Ekstremitas2">
                                    <div class="col-md-12">
                                      <div class="portlet light portlet-fit bordered">
                                        <div class="portlet-title">
                                          <span><b>Ekstremitas</b></span>
                                        </div>
                                        <div class="portlet-body row">
                                          <table class="col-md-4">
                                            <tr>
                                              <td colspan="2" class="col-md-12"><span><center>Akral Hangat</center></span></td>
                                            </tr>
                                            <tr>
                                              <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnEkstremitas1" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                              <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnEkstremitas2" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                            </tr>
                                            <tr>
                                              <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnEkstremitas3" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                              <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnEkstremitas4" class="btn green col-md-12" value="+"><b> + </b></button></td>
                                            </tr>
                                          </table>
                                          <table class="col-md-4">
                                            <tr>
                                              <td colspan="2" class="col-md-12"><span><center>Oedema</center></span></td>
                                            </tr>
                                            <tr>
                                              <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnEkstremitas9" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                              <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnEkstremitas10" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                            </tr>
                                            <tr>
                                              <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnEkstremitas11" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                              <td class="col-md-6"><button type="button" id="EMR_ASESMEN_ULANG_Dokter_btnEkstremitas12" class="btn yellow col-md-12" value="-"><b> - </b></button></td>
                                            </tr>
                                          </table>
                                          <div class="col-md-4">
                                            <span>CRT :</span>
                                            <div class="md-radio-inline">
                                              <div class="md-radio">
                                                <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_CRT1" name="EMR_ASESMEN_ULANG_Dokter_CRT" class="md-radiobtn" value="" checked="true">
                                                <label for="EMR_ASESMEN_ULANG_Dokter_CRT1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> < 2 detik </label>
                                              </div>
                                              <div class="md-radio">
                                                <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_CRT2" name="EMR_ASESMEN_ULANG_Dokter_CRT" class="md-radiobtn" value="">
                                                <label for="EMR_ASESMEN_ULANG_Dokter_CRT2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> > 2 detik </label>
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
                                        <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_Neurologis" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_Neurologis" value="" class="md-check">
                                        <label for="EMR_ASESMEN_ULANG_Dokter_SL_PF_Neurologis">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Neurologis </label>
                                      </div>
                                    </div>
                                  </div>
                                  <input type="hidden" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_Neurologisstatus" name="EMR_ASESMEN_ULANG_Dokter_SL_PF_Neurologisstatus" value="Tidak" class="form-control">
                                  <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANG_Dokter_SL_PF_Neurologis2">
                                      <div class="col-md-12">
                                        <div class="portlet light portlet-fit bordered">
                                          <div class="portlet-title">
                                            <span><b>Neurologis</b></span>
                                          </div>
                                          <div class="portlet-body row">
                                            <table class="col-md-4">
                                              <tr>
                                                <td colspan="2" class="col-md-12"><span><center>Motorik</center></span></td>
                                              </tr>
                                              <tr>
                                                <td class="col-md-6">
                                                  <select class="bs-select form-control">
                                                    <option value='5' selected>5</option>
                                                    <option value='4'>4</option>
                                                    <option value='3'>3</option>
                                                    <option value='2'>2</option>
                                                    <option value='1'>1</option>
                                                    <option value='0'>0</option>
                                                  </select>
                                                </td>
                                                <td class="col-md-6">
                                                  <select class="bs-select form-control">
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
                                                  <select class="bs-select form-control">
                                                    <option value='5' selected>5</option>
                                                    <option value='4'>4</option>
                                                    <option value='3'>3</option>
                                                    <option value='2'>2</option>
                                                    <option value='1'>1</option>
                                                    <option value='0'>0</option>
                                                  </select>
                                                </td>
                                                <td class="col-md-6">
                                                  <select class="bs-select form-control">
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
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_Sensorik1" name="EMR_ASESMEN_ULANG_Dokter_Sensorik" class="md-radiobtn" value="" checked="true">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_Sensorik1">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Normal</label>
                                                </div>
                                                <div class="md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_Sensorik2" name="EMR_ASESMEN_ULANG_Dokter_Sensorik" class="md-radiobtn" value="">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_Sensorik2">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Parestesia </label>
                                                </div>
                                                <div class="md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_Sensorik3" name="EMR_ASESMEN_ULANG_Dokter_Sensorik" class="md-radiobtn" value="">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_Sensorik3">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Hiperestesia </label>
                                                </div>
                                                <div class="md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_Sensorik4" name="EMR_ASESMEN_ULANG_Dokter_Sensorik" class="md-radiobtn" value="">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_Sensorik4">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Hipoestesia </label>
                                                </div>
                                                <div class="md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_Sensorik5" name="EMR_ASESMEN_ULANG_Dokter_Sensorik" class="md-radiobtn" value="">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_Sensorik5">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Anastesia</label>
                                                </div>
                                                <div class="md-radio">
                                                  <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_Sensorik6" name="EMR_ASESMEN_ULANG_Dokter_Sensorik" class="md-radiobtn" value="Tidak">
                                                  <label for="EMR_ASESMEN_ULANG_Dokter_Sensorik6">
                                                  <span></span>
                                                  <span class="check"></span>
                                                  <span class="box"></span> Lain - lain </label>
                                                </div>
                                                <input type="text" class="form-control collapse" id="EMR_ASESMEN_ULANG_Dokter_Sensorik7">
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <span> Lain - lain </span></br>
                                              <input type="text" class="form-control">
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
        <div class="collapse" id="EMR_dr_IGD_P3_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_dr_IGD_P3_btnHalaman1" class="btn white col-md-12">Diagnosis</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered">
                <div class="portlet-body">
                  <div class="tab-content">
                      <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                        <div class="col-md-12">
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <textarea class="form-control" name="EMR_ASESMEN_ULANG_Dokter_Diagnosis" id="EMR_ASESMEN_ULANG_Dokter_Diagnosis" rows="3"></textarea>
                            <label for="form_control_1">Diagnosis</label>
                            <span class="help-block">Masukkan Diagnosis</span>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <textarea class="form-control" name="EMR_ASESMEN_ULANG_Dokter_DiagnosisBanding" id="EMR_ASESMEN_ULANG_Dokter_DiagnosisBanding" rows="3"></textarea>
                            <label for="form_control_1">Diagnosis Banding</label>
                            <span class="help-block">Masukkan Diagnosis Banding</span>
                        </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_dr_IGD_P4_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_dr_IGD_P4_btnHalaman1" class="btn white col-md-12">Planning</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered">
                <div class="portlet-body">
                  <div class="tab-content">
                    <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                      <div class="row md-checkbox-inline">
                        <div class="col-md-12 md-checkbox">
                          <div class="row">
                            <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Obat" name="EMR_ASESMEN_ULANG_Dokter_Obat" value="" class="md-check">
                            <label for="EMR_ASESMEN_ULANG_Dokter_Obat">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Tambah Data Obat </label>
                          </div>
                        </div>
                      </div>
                        <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANG_Dokter_Obat2">
                          <div class="row">
                            <a class="btn btn-outline blue" href="#EMR_ASESMEN_ULANG_Dokter_ObatModal" data-toggle="modal"> Obat </a>
                            <br>
                            <br>
                          </div>
                        </div>
                        <div id="EMR_ASESMEN_ULANG_Dokter_ObatModal" class="modal" data-width="100%" style="width:90%;">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                <button disable type="button" class="btn white" style="height:55px; width:30%">
                                  <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                  <span style="font-size:14px" name><b><?php echo $norm?></b></span>
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
                                <a type="button" id="EMR_ASESMEN_ULANG_Dokter_ObatbtnObatSatuan" class="btn disabled white" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Satuan</b></a>
                                <a type="button" id="EMR_ASESMEN_ULANG_Dokter_ObatbtnObatRacik" class="btn blue" style="height:55px; width:33%; font-size:12px"><b>Obat </br> Racik</b></a>
                              </div>
                            </div>
                          </div>
                          <div class="modal-body">
                            <input type="hidden" id="EMR_ASESMEN_ULANG_Dokter_ObatstatObat" value="Satuan">
                            <div class="row" id="EMR_ASESMEN_ULANG_Dokter_ObatformObatSatuan">
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
                                              <input type="text" name="EMR_ASESMEN_ULANG_Dokter_Obatobatsatuan[]" class="form-control obatsatuan" placeholder="Ketik Nama Obat"/>
                                              <input type="hidden" name="EMR_ASESMEN_ULANG_Dokter_Obatidobatsatuan[]" class="form-control project"/>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label class="control-label" style="font-size:14px">Jumlah Obat</label>
                                              <input type="text" id="EMR_ASESMEN_ULANG_Dokter_ObatSatuanJumlah" name="EMR_ASESMEN_ULANG_Dokter_ObatSatuanJumlah[]" placeholder="Jumlah" class="form-control"/>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                          <div class="col-md-12">
                                            <label class="control-label" style="font-size:14px">Aturan Pakai</label>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="col-md-3">
                                              <input type="text" id="EMR_ASESMEN_ULANG_Dokter_ObatSatuanAturanPakai1" name="EMR_ASESMEN_ULANG_Dokter_ObatSatuanAturanPakai1[]" class="form-control"/>
                                            </div>
                                            <div class="col-md-1">
                                              <p class="form-control-static"> dd </p>
                                            </div>
                                            <div class="col-md-3">
                                              <input type="text" id="EMR_ASESMEN_ULANG_Dokter_ObatSatuanAturanPakai2" name="EMR_ASESMEN_ULANG_Dokter_ObatSatuanAturanPakai2[]" class="form-control"/>
                                            </div>
                                            <div class="col-md-5">
                                              <select class="form-control" id="EMR_ASESMEN_ULANG_Dokter_ObatSatuanAturanPakai3" name="EMR_ASESMEN_ULANG_Dokter_ObatSatuanAturanPakai3[]">
                                                    <option value="Tetes">Tetes</option>
                                                    <option value="Oles">Oles</option>
                                                    <option selected="selected" value="Minum">Minum</option>
                                                    <option value="Vaginal Suppositoria">Vaginal Suppositoria</option>
                                                    <option value="Rectal Suppositoria">Rectal Suppositoria</option>
                                                </select>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                          <div class="col-md-12">
                                            <div class="col-md-6">
                                              <select class="form-control" id="EMR_ASESMEN_ULANG_Dokter_ObatSatuanKetPakai1" name="EMR_ASESMEN_ULANG_Dokter_ObatSatuanKetPakai1[]">
                                                    <option value="a.c.">a.c.</option>
                                                    <option value="p.c.">p.c.</option>
                                                    <option value="d.c.">d.c.</option>
                                                    <option value="ad.lib.">ad.lib.</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                              <select class="form-control" id="EMR_ASESMEN_ULANG_Dokter_ObatSatuanKetPakai2" name="EMR_ASESMEN_ULANG_Dokter_ObatSatuanKetPakai2[]">
                                                    <option value="p.r.n.">p.r.n.</option>
                                                    <option value="Sampai Habis">Sampai Habis</option>
                                                </select>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                          <div class="col-md-12">
                                              <input type="text" id="EMR_ASESMEN_ULANG_Dokter_ObatSatuanLain" name="EMR_ASESMEN_ULANG_Dokter_ObatSatuanLain[]" class="form-control" placeholder="Lain-lain"/>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div id="EMR_ASESMEN_ULANG_Dokter_Obatdiv1Satuan">
                              </div>
                              <div class="col-md-4" id="EMR_ASESMEN_ULANG_Dokter_Obatdiv_buttonSatuan">
                                <center>
                                  <a class="btn green-jungle col-md-12" name="EMR_ASESMEN_ULANG_Dokter_ObattambahSatuan" value="Tambah Data" id="EMR_ASESMEN_ULANG_Dokter_ObattambahSatuan" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                                </center>
                              </div>
                            </div>
                            <div class="collapse" id="EMR_ASESMEN_ULANG_Dokter_ObatformObatRacik">
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
                                            <div class="form-group">
                                              <div data-repeater-item class="mt-repeater-item">
                                                <div class="row mt-repeater-row">
                                                  <div class="col-md-12">
                                                    <label class="control-label" style="font-size:14px">Nama Obat Bahan Racikan</label>
                                                    <input type="text" name="EMR_ASESMEN_ULANG_Dokter_ObatobatsatuanRacik[]" class="form-control obatsatuan" placeholder="ketik nama obat"/>
                                                    <input type="hidden" name="EMR_ASESMEN_ULANG_Dokter_ObatidobatsatuanRacik[]" value="" class="form-control project_racik"/>
                                                    <input type="hidden" value="RACIK_0001" id="EMR_ASESMEN_ULANG_Dokter_ObatidRacik" name="EMR_ASESMEN_ULANG_Dokter_ObatidRacik[]" class="form-control" />
                                                  </div>
                                                </div>
                                                </br>
                                                <div class="row mt-repeater-row">
                                                  <div class="col-md-4">
                                                    <label class="control-label" style="font-size:14px">Jumlah</label>
                                                    <input type="text" id="EMR_ASESMEN_ULANG_Dokter_ObatRacikJumlahBahan" name="EMR_ASESMEN_ULANG_Dokter_ObatRacikJumlahBahan[]" placeholder="Jumlah" class="form-control"/>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <label class="control-label" style="font-size:14px">Satuan</label>
                                                    <select class="form-control" id="EMR_ASESMEN_ULANG_Dokter_ObatRacikSatuan" name="EMR_ASESMEN_ULANG_Dokter_ObatRacikSatuan[]">
                                                          <option value="Gram">Gram</option>
                                                          <option selected="selected" value="Mg">Mg</option>
                                                          <option value="Tab/Kap/Cap">Tab/Kap/Cap</option>
                                                          <option value="Tube">Tube</option>
                                                          <option value="Botol">Botol</option>
                                                      </select>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div id="EMR_ASESMEN_ULANG_Dokter_ObatdivracikBahan1"></div>
                                            <div id="EMR_ASESMEN_ULANG_Dokter_Obatdiv_buttonracikBahan1">
                                              <a class="btn blue EMR_ASESMEN_ULANG_Dokter_ObattambahRacikBahan-click col-md-12" name="EMR_ASESMEN_ULANG_Dokter_ObattambahRacikBahan" value="Tambah Data" data-todo='{"number":"1"}'><i class="fa fa-plus"></i> Tambah Bahan</a>
                                            </div>
                                          </div>
                                          <div class="row mt-repeater-row">
                                            <div class="col-md-12">
                                              <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Detail Obat</label>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-8">
                                                  <select class="form-control" id="EMR_ASESMEN_ULANG_Dokter_ObatRacikAturanBahan" name="EMR_ASESMEN_ULANG_Dokter_ObatRacikAturanBahan[]">
                                                        <option selected="selected" value="m.f.da.in caps.dtd">m.f.da.in caps.dtd</option>
                                                        <option value="m.f.l.a.pulv.dtd">m.f.l.a.pulv.dtd</option>
                                                        <option value="m.f.da.in caps">m.f.da.in caps</option>
                                                        <option value="m.f.l.a.pulv">m.f.l.a.pulv</option>
                                                        <option value="m.f.krim">m.f.krim</option>
                                                        <option value="m.f.da.in.bottle">m.f.da.in.bottle</option>
                                                    </select>
                                                  </div>
                                                <div class="col-md-4">
                                                  <input type="text" id="EMR_ASESMEN_ULANG_Dokter_ObatRacikJumlahRacik" name="EMR_ASESMEN_ULANG_Dokter_ObatRacikJumlahRacik[]" placeholder="Jumlah" class="form-control"/>
                                                </div>
                                              </br>
                                              <div class="col-md-8">
                                                  <input type="hidden" value="RACIK_0001" id="EMR_ASESMEN_ULANG_Dokter_ObatidRacik_2" name="EMR_ASESMEN_ULANG_Dokter_ObatidRacik_2[]" class="form-control" />
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                            <div class="col-md-12">
                                              <label class="control-label" style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;Aturan Pakai</label>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="col-md-3">
                                                <input type="text" id="EMR_ASESMEN_ULANG_Dokter_ObatRacikAturanPakai1" name="EMR_ASESMEN_ULANG_Dokter_ObatRacikAturanPakai1[]" class="form-control" />
                                              </div>
                                              <div class="col-md-1">
                                                <p class="form-control-static"> dd </p>
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" id="EMR_ASESMEN_ULANG_Dokter_ObatRacikAturanPakai2" name="EMR_ASESMEN_ULANG_Dokter_ObatRacikAturanPakai2[]" class="form-control" />
                                              </div>
                                              <div class="col-md-5">
                                                <select class="form-control" id="EMR_ASESMEN_ULANG_Dokter_ObatRacikAturanPakai3" name="EMR_ASESMEN_ULANG_Dokter_ObatRacikAturanPakai3[]" >
                                                    <option value="Tetes">Tetes</option>
                                                    <option value="Oles">Oles</option>
                                                    <option selected="selected" value="Minum">Minum</option>
                                                    <option value="Vaginal Suppositoria">Vaginal Suppositoria</option>
                                                    <option value="Rectal Suppositoria">Rectal Suppositoria</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                            <div class="col-md-12">
                                              <div class="col-md-6">
                                                <select class="form-control" id="EMR_ASESMEN_ULANG_Dokter_ObatRacikKetPakai1" name="EMR_ASESMEN_ULANG_Dokter_ObatRacikKetPakai1[]" >
                                                    <option value="a.c.">a.c.</option>
                                                    <option value="p.c.">p.c.</option>
                                                    <option value="d.c.">d.c.</option>
                                                    <option value="ad.lib.">ad.lib.</option>
                                                </select>
                                              </div>
                                              <div class="col-md-6">
                                                <select class="form-control" id="EMR_ASESMEN_ULANG_Dokter_ObatRacikKetPakai2" name="EMR_ASESMEN_ULANG_Dokter_ObatRacikKetPakai2[]" >
                                                    <option value="p.r.n.">p.r.n.</option>
                                                    <option value="Sampai Habis">Sampai Habis</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row mt-repeater-row" style="display: block; margin-top:-0.5em; margin-bottom: 1em;">
                                            <div class="col-md-12">
                                                <input type="text" id="EMR_ASESMEN_ULANG_Dokter_ObatRacikLain" name="EMR_ASESMEN_ULANG_Dokter_ObatRacikLain[]" class="form-control" placeholder="Lain-lain"/>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="EMR_ASESMEN_ULANG_Dokter_Obatdivracikobat"></div>
                                <div class="col-md-4" id="EMR_ASESMEN_ULANG_Dokter_Obatdiv_buttonracikobat">
                                  <center>
                                    <a class="btn green-jungle col-md-12" name="EMR_ASESMEN_ULANG_Dokter_Obattambahracikobat" value="Tambah Data" id="EMR_ASESMEN_ULANG_Dokter_Obattambahracikobat" style="height:90px"> <h1><i class="fa fa-plus"></i> <b>Tambah Obat</b></h1></a>
                                  </center>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" id="" data-dismiss="modal" class="btn blue">Simpan</button>
                          </div>
                        </div>
                      <div class="row md-checkbox-inline">
                        <div class="col-md-12 md-checkbox">
                          <div class="row">
                            <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Radiologi" name="EMR_ASESMEN_ULANG_Dokter_Radiologi" value="" class="md-check">
                            <label for="EMR_ASESMEN_ULANG_Dokter_Radiologi">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Tambah Data Radiologi </label>
                          </div>
                        </div>
                      </div>
                        <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANG_Dokter_Radiologi2">
                          <div class="row">
                            <a class="btn btn-outline blue" href="#EMR_ASESMEN_ULANG_Dokter_RadiologiModal" data-toggle="modal"> Radiologi </a>
                            <br>
                            <br>
                          </div>
                        </div>
                        <div id="EMR_ASESMEN_ULANG_Dokter_RadiologiModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                            <div class="modal-header">
                              <div class="col-md-12">
                                <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                  <button disable type="button" class="btn white" style="height:55px; width:30%">
                                    <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                    <span style="font-size:14px" name><b><?php echo $norm?></b></span>
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
                                          <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_radiologi_checkbox" name="EMR_ASESMEN_ULANG_Dokter_radiologi_checkbox[]" value="<?php echo $row->KODE_DT_RADIO;?>">
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
                                <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_radiologi_lain" name="EMR_ASESMEN_ULANG_Dokter_radiologi_lain" value="DTR_0000">
                                Lain-Lain
                                <span></span>
                                </label>
                                <div class="form-group collapse" id="EMR_ASESMEN_ULANG_Dokter_radiologi_lain1">
                                    <div class="form-group form-md-line-input">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                            <input type="text" id="EMR_ASESMEN_ULANG_Dokter_radiologi_lain2" name="EMR_ASESMEN_ULANG_Dokter_radiologi_lain2" class="form-control">
                                            <label for="form_control">Radiologi Lain</label>
                                            <span class="help-block">Masukkan Radiologi</span>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            <div class="col-md-4">
                              <label class="mt-checkbox mt-checkbox-outline">
                              <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Gigi_Satuan" name="EMR_ASESMEN_ULANG_Dokter_Gigi_Satuan" value="DTR_G000">
                              Gigi Satuan
                              <span></span>
                              </label>
                              <div class="form-group collapse" id="EMR_ASESMEN_ULANG_Dokter_Gigi_Satuan1">
                                  <div class="form-group form-md-line-input">
                                      <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                          <input type="text" id="EMR_ASESMEN_ULANG_Dokter_Gigi_Satuan2" name="EMR_ASESMEN_ULANG_Dokter_Gigi_Satuan2" class="form-control">
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
                                    CATATAN</br>
                                    *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dilampiri hasil Laboratorium Ureum, Creatinin</br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet lunak 1 hari dan urus-urus</br>
                                    **&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puasa total 8-12 jam sebelum pemeriksaan</br>
                                    ***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet lunak 2 hari dan urus-urus</br>
                                    ****&nbsp;&nbsp;&nbsp;&nbsp;Dilakukan pemeriksaan 8-12 jam setelah minum Barium Sulfat </br>
                                    *****&nbsp;&nbsp;&nbsp;Dilakukan pemeriksaan 10-13 hari dari mens pertama</br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tidak berhubungan suami istri sebelum dilakukan pemeriksaan</br>
                                </p>
                                <button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANG_Dokter_reset_radio" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                            </div>
                        </div>
                      <div class="row md-checkbox-inline">
                        <div class="col-md-12 md-checkbox">
                          <div class="row">
                            <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Laborat" name="EMR_ASESMEN_ULANG_Dokter_Laborat" value="" class="md-check">
                            <label for="EMR_ASESMEN_ULANG_Dokter_Laborat">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Tambah Data Laboratorium </label>
                          </div>
                        </div>
                      </div>
                        <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANG_Dokter_Laborat2">
                          <div class="row">
                            <a class="btn btn-outline blue" href="#EMR_ASESMEN_ULANG_Dokter_LaboratModal" data-toggle="modal"> Laboratorium </a>
                            <br>
                            <br>
                          </div>
                        </div>
                        <div id="EMR_ASESMEN_ULANG_Dokter_LaboratModal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                          <div class="modal-header">
                            <div class="col-md-12">
                              <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                <button disable type="button" class="btn white" style="height:55px; width:30%">
                                  <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                  <span style="font-size:14px" name><b><?php echo $norm?></b></span>
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
                                          <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_laboratorium_checkbox" name="EMR_ASESMEN_ULANG_Dokter_laboratorium_checkbox[]" value="<?php echo $row->KODE_DT_LABORATORIUM;?>">
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
                                <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_laboratorium_lain" name="EMR_ASESMEN_ULANG_Dokter_laboratorium_lain" value="DTL_0000">
                                Lain-Lain
                                <span></span>
                                </label>
                                <div class="form-group collapse" id="EMR_ASESMEN_ULANG_Dokter_laboratorium_lain1">
                                    <div class="form-group form-md-line-input">
                                        <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                            <input type="text" id="EMR_ASESMEN_ULANG_Dokter_laboratorium_lain2" name="EMR_ASESMEN_ULANG_Dokter_laboratorium_lain2" class="form-control">
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
                                <button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANG_Dokter_reset_laboratorium" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                            </div>
                        </div>
                        <div class="row md-checkbox-inline">
                          <div class="col-md-12 md-checkbox">
                            <div class="row">
                              <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_EkgDll" name="EMR_ASESMEN_ULANG_Dokter_EkgDll" value="" class="md-check">
                              <label for="EMR_ASESMEN_ULANG_Dokter_EkgDll">
                              <span></span>
                              <span class="check"></span>
                              <span class="box"></span> Tambah Data EKG Dan Lainnya </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANG_Dokter_EkgDll2">
                          <div class="row">
                            <a class="btn btn-outline blue" href="#EMR_ASESMEN_ULANG_Dokter_EkgDll2Modal" data-toggle="modal"> EKG Dan Lainnya </a>
                            <br>
                            <br>
                          </div>
                        </div>
                        <div id="EMR_ASESMEN_ULANG_Dokter_EkgDll2Modal" class="modal container fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
                          <div class="modal-header">
                            <div class="col-md-12">
                              <div class="btn-group btn-group btn-group-justified" style="width:100%">
                                <button disable type="button" class="btn white" style="height:55px; width:30%">
                                  <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                                  <span style="font-size:14px" name><b><?php echo $norm?></b></span>
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
                                <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.25em;">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label class="mt-checkbox mt-checkbox-outline">
                                      <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_EkgInput" name="EMR_ASESMEN_ULANG_Dokter_EkgInput" value="" >
                                      EKG
                                      <span></span>
                                      </label>
                                    </div>
                                    <div class="col-md-4">
                                      <label class="mt-checkbox mt-checkbox-outline">
                                      <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Audiometri" name="EMR_ASESMEN_ULANG_Dokter_Audiometri" value="" >
                                      Audiometri
                                      <span></span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 0.25em;">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label class="mt-checkbox mt-checkbox-outline">
                                      <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Spirometri" name="EMR_ASESMEN_ULANG_Dokter_Spirometri" value="" >
                                      Spirometri
                                      <span></span>
                                      </label>
                                    </div>
                                    <div class="col-md-4">
                                      <label class="mt-checkbox mt-checkbox-outline">
                                      <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Spirometri" name="EMR_ASESMEN_ULANG_Dokter_Spirometri" value="" >
                                      Spirometri
                                      <span></span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group" style="display: block; margin-top: 0em; margin-bottom: 1.5em;">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label class="mt-checkbox mt-checkbox-outline">
                                      <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_EKGlain" name="EMR_ASESMEN_ULANG_Dokter_EKGlain" value="lain" >
                                      Lain - Lain
                                      <span></span>
                                      </label>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group collapse" id="EMR_ASESMEN_ULANG_Dokter_EKGlain_1">
                                          <div class="form-group form-md-line-input">
                                              <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                  <input type="text" id="EMR_ASESMEN_ULANG_Dokter_EKGlain_2" name="EMR_ASESMEN_ULANG_Dokter_EKGlain_2" class="form-control">
                                                  <label for="form_control">Lain - Lain</label>
                                                  <span class="help-block">Masukkan Lain - Lain</span>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="modal-footer" style="display:block; text-align: left;">
                              <button type="button" class="btn btn-default" id="EMR_ASESMEN_ULANG_Dokter_reset_EKG" data-dismiss="modal">Batal</button>
                              <button type="button" class="btn green" data-dismiss="modal" >Oke</button>
                          </div>
                        </div>
                      <div class="row md-checkbox-inline">
                        <div class="col-md-12 md-checkbox">
                          <div class="row">
                            <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Rujukan" name="EMR_ASESMEN_ULANG_Dokter_Rujukan" value="" class="md-check">
                            <label for="EMR_ASESMEN_ULANG_Dokter_Rujukan">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Tambah Data Rujukan </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 collapse" id="EMR_ASESMEN_ULANG_Dokter_Rujukan2">
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
                                          <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_rahligizi" name="EMR_ASESMEN_ULANG_Dokter_rahligizi" value="Ahli Gizi" >
                                          Ahli Gizi
                                          <span></span>
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="mt-checkbox mt-checkbox-outline">
                                          <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_rrehabilitasi" name="EMR_ASESMEN_ULANG_Dokter_rrehabilitasi" value="Rehabilitasi Medik" >
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
                                          <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_rklinik" name="EMR_ASESMEN_ULANG_Dokter_rklinik" value="Klinik Spesialis" >
                                          Klinik Spesialis
                                          <span></span>
                                          </label>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group collapse" id="EMR_ASESMEN_ULANG_Dokter_rklinik_1">
                                              <div class="form-group form-md-line-input">
                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                                      <input type="text" id="EMR_ASESMEN_ULANG_Dokter_rklinik_2" name="EMR_ASESMEN_ULANG_Dokter_rklinik_2" class="form-control">
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
                                          <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_rlain" name="EMR_ASESMEN_ULANG_Dokter_rlain" value="lain" >
                                          Lain - Lain
                                          <span></span>
                                          </label>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group collapse" id="EMR_ASESMEN_ULANG_Dokter_rlain_1">
                                              <div class="form-group form-md-line-input">
                                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                      <input type="text" id="EMR_ASESMEN_ULANG_Dokter_rlain_2" name="EMR_ASESMEN_ULANG_Dokter_rlain_2" class="form-control">
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
                      <div class="row md-checkbox-inline">
                        <div class="col-md-12 md-checkbox">
                          <div class="row">
                            <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Edukasi" name="EMR_ASESMEN_ULANG_Dokter_Edukasi" value="" class="md-check">
                            <label for="EMR_ASESMEN_ULANG_Dokter_Edukasi">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Edukasi </label>
                          </div>
                        </div>
                      </div>
                      <div class="row collapse" id="EMR_ASESMEN_ULANG_Dokter_edukasi_1">
                        <div class="col-md-12">
                          <div class="form-group">
                              <div class="form-group form-md-line-input">
                                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                      <input type="text" id="EMR_ASESMEN_ULANG_Dokter_edukasi_2" name="EMR_ASESMEN_ULANG_Dokter_edukasi_2" class="form-control">
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
                            <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_Prognosis" name="EMR_ASESMEN_ULANG_Dokter_Prognosis" value="" class="md-check">
                            <label for="EMR_ASESMEN_ULANG_Dokter_Prognosis">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Prognosis </label>
                          </div>
                        </div>
                      </div>
                      <div class="row collapse" id="EMR_ASESMEN_ULANG_Dokter_Prognosis_1">
                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="md-radio-inline">
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_prognosis1" name="EMR_ASESMEN_ULANG_Dokter_prognosis" class="md-radiobtn" value="NadiReguler" checked>
                                <label for="EMR_ASESMEN_ULANG_Dokter_prognosis2">
                                <span class="inc"></span>
                                <span class="check"></span>
                                <span class="box"></span> Bonam </label>
                              </div>
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_prognosis2" name="EMR_ASESMEN_ULANG_Dokter_prognosis" class="md-radiobtn" value="NadiIrreguler">
                                <label for="EMR_ASESMEN_ULANG_Dokter_prognosis2">
                                <span class="inc"></span>
                                <span class="check"></span>
                                <span class="box"></span> Malam </label>
                              </div>
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_prognosis3" name="EMR_ASESMEN_ULANG_Dokter_prognosis" class="md-radiobtn" value="NadiIrreguler">
                                <label for="EMR_ASESMEN_ULANG_Dokter_prognosis3">
                                <span class="inc"></span>
                                <span class="check"></span>
                                <span class="box"></span> Dubia Ad Bonam </label>
                              </div>
                              <div class="md-radio">
                                <input type="radio" id="EMR_ASESMEN_ULANG_Dokter_prognosis4" name="prognosis" class="md-radiobtn" value="NadiIrreguler">
                                <label for="EMR_ASESMEN_ULANG_Dokter_prognosis4">
                                <span class="inc"></span>
                                <span class="check"></span>
                                <span class="box"></span> Dubia Ad Malam </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row md-checkbox-inline">
                        <div class="col-md-12 md-checkbox">
                          <div class="row">
                            <input type="checkbox" id="EMR_ASESMEN_ULANG_Dokter_KontrolK" name="EMR_ASESMEN_ULANG_Dokter_KontrolK" value="" class="md-check">
                            <label for="EMR_ASESMEN_ULANG_Dokter_KontrolK">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Kontrol Kembali </label>
                          </div>
                        </div>
                      </div>
                      <div class="row collapse" id="EMR_ASESMEN_ULANG_Dokter_KontrolK_1">
                        <div class="col-md-12">
                          <div class="form-group">
                              <div  class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd">
                                  <input name="EMR_ASESMEN_ULANG_Dokter_KontrolK_2" id="EMR_ASESMEN_ULANG_Dokter_KontrolK_2" type="text" class="form-control" readonly>
                                  <span class="input-group-btn">
                                      <button class="btn default" type="button">
                                          <i class="fa fa-calendar"></i>
                                      </button>
                                  </span>
                              </div>
                          </div>
                            <!--<input type="text" id="EMR_ASESMEN_ULANG_Dokter_KontrolK_2" name="EMR_ASESMEN_ULANG_Dokter_KontrolK_2" class="form-control">
                            <label for="form_control">Kontrol Kembali</label>-->
                            <span class="help-block">Pilih Tanggal Kontrol Kembali</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_dr_IGD_P5_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_dr_IGD_P5_btnHalaman1" class="btn white col-md-12">Penatalaksanaan</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="portlet light bordered form-body">
                <div class="row">
                  <div class="col-md-12" id="EMR_dr_IGD_P5_Halaman1">
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
                          <tr id="EMR_dr_IGD_showtabelDT" class="">
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
                                <input type="text" id="EMR_dr_IGD_Jam" name="EMR_dr_IGD_Jam" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                <label for="form_control_1">Nama Obat/infus</label>
                                <input type="text" id="EMR_dr_IGD_ObatInfus" name="EMR_dr_IGD_ObatInfus" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                <label for="form_control_1">Dosis</label>
                                <input type="text" id="EMR_dr_IGD_Dosis" name="EMR_dr_IGD_Dosis" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                <label for="form_control_1">Nama Rute</label>
                                <input type="text" id="EMR_dr_IGD_Rute" name="EMR_dr_IGD_Rute" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                <label for="form_control_1">DiperiksaOleh</label>
                                <input type="text" id="EMR_dr_IGD_DiperiksaOleh" name="EMR_dr_IGD_DiperiksaOleh" value="" class="form-control">
                              </div>
                              <div class="col-md-6">
                                <label for="form_control_1">DiberikanOleh</label>
                                <input type="text" id="EMR_dr_IGD_DiberikanOleh" name="EMR_dr_IGD_DiberikanOleh" value="" class="form-control">
                              </div>
                            </div>
                          </center><br/><br/>
                        </div>
                      </div>
                      <a type="button" class="btn green col-md-12" id="" style="width:100%">Tambah Data</a><br/><br/><br/><br/>
                    </div>
                  -->
                  </div>
                  <div class="col-md-12 collapse" id="EMR_dr_IGD_P5_Halaman2">
                    <div class="portlet light portlet-fit bordered">
                      <div class="portlet-title">
                        <span><b>Penanggung jawab pengisi data :</b></span>
                      </div>
                      <input type="hidden" id="EMR_dr_IGD_statver" name="EMR_dr_IGD_statver" value="Perawat1">
                      <div class="row portlet-body" id="EMR_dr_IGD_verPerPerawat">
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
                            <a id="EMR_dr_IGD_btnChangePerPerawat" class="btn red"> Klik disini apabila anda bukan <?php echo $level; ?> <?php echo $username; ?></a>
                          </div>
                        </div>
                      </div>
                      <div class="row portlet-body collapse" id="EMR_dr_IGD_verPerPerawat2">
                        <div class="col-sm-12">
                          <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda akan mengambil alih tanggung jawab proses pengisian data, kelengkapan pengisian data akan mempengaruhi penilaian anda</p>
                          <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                              <input type="text" id="EMR_dr_IGD_userPerPerawat" name="EMR_dr_IGD_userPerPerawat" class="form-control">
                              <label for="form_control_1">Masukkan Username</label>
                              <span class="help-block">Masukkan Username</span>
                            </div>
                          </div>
                          <div class="form-group form-md-line-input has-success form-md-floating-label">
                          <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                            <input type="password" id="EMR_dr_IGD_passPerPerawat" name="EMR_dr_IGD_passPerPerawat" class="form-control">
                            <label for="form_control_1">Masukkan Password</label>
                            <span class="help-block">Masukkan Password</span>
                          </div>
                        </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="btn-group btn-group btn-group-justified">
                            <a id="EMR_dr_IGD_btnChangePerPerawat2" class="btn red"> Klik disini apabila anda <?php echo $level; ?> <?php echo $username; ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="btn-group btn-group-circle btn-group-solid" style="width:100%">
                      <button type="button" id="EMR_dr_IGD_P5_HalamanBack" class="btn white" style="width:50%" disabled="true"><< Kembali</button>
                      <button type="button" id="EMR_dr_IGD_P5_HalamanNext" class="btn green" style="width:50%">Lanjutkan >></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_dr_IGD_P6_Halaman">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="EMR_dr_IGD_P6_btnHalaman1" class="btn white col-md-12">Observasi</button>
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
                            <input type="text" class="form-control timepicker timepicker-24" style="width:100%" id="EMR_dr_IGD_JamOb" value="<?=date('H:i');?>">
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
                            <textarea class="form-control" id="EMR_dr_IGD_SubyektifOb" name="EMR_dr_IGD_SubyektifOb" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
                            <label for="form_control_1">Subyektif</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <textarea class="form-control" id="EMR_dr_IGD_PlanningOb" name="EMR_dr_IGD_PlanningOb" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea>
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
                                        <span>Nilai BMI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><b><span id="EMR_dr_IGD_P6_Nilai_BMI">0</span></b></br>
                                        <span>Kategori BMI : </span><b><span id="EMR_dr_IGD_P6_Kategori_BMI"></span></b>
                                      </div>
                                      <?php
                                      if($Utahun < 1)
                                      {
                                        ?>
                                        <div class="col-md-6">
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
                                    $cekidpemeriksaan = $this->db->get("EMR_UTAMA_PERIKSA where NOREG ='$noreg'")->row()->ID_PEMERIKSAAN;
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
                                    <input type="hidden" id="EMR_dr_IGD_InputcekisiOb" value="<?=$cekisiOb +1;?>">
                                    <input type="hidden" id="EMR_dr_IGD_observasiOb">
                                    <input type="hidden" id="EMR_dr_IGD_olehOb" value="<?=$username;?>">
                                    <input type="hidden" id="EMR_dr_IGD_idper" value="<?=$cekidpemeriksaan;?>">
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
              <span><b>Sub Menu IGD Perawat :</b></span>
            </div>
            <input type="hidden" id="EMR_dr_IGD_statverHal" name="EMR_dr_IGD_statverHal" value="P1">
            <div class="row portlet-body" id="">
              <div>
                <a type="button" class="btn white col-md-12" id="EMR_dr_IGD_P0_btntriase" style="width:100%" onClick="window.location.reload()">Triase</a><br/><br/>
              </div>
              <div class="" id="EMR_dr_IGD_P1_divBtnMenu">
                <a type="button" class="btn white col-md-12" id="EMR_dr_IGD_P1_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Subjektif</a><br/><br/>
              </div>
              <div class="collapse" id="EMR_dr_IGD_P1_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_dr_IGD_P1_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> Subjektif</a><br/><br/>
              </div>
              <div class="" id="EMR_dr_IGD_P2_divBtnMenu">
                <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P2_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Objektif</a><br/><br/>
              </div>
              <div class="collapse" id="EMR_dr_IGD_P2_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_dr_IGD_P2_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> Objektif</a><br/><br/>
              </div>
              <div class="" id="EMR_dr_IGD_P3_divBtnMenu">
                <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P3_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> ASSESMEN </a><br/><br/>
              </div>
              <div class="collapse" id="EMR_dr_IGD_P3_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_dr_IGD_P3_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> ASSESMEN </a><br/><br/>
              </div>
              <div class="" id="EMR_dr_IGD_P4_divBtnMenu">
                <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P4_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Planning</a><br/><br/>
              </div>
              <div class="collapse" id="EMR_dr_IGD_P4_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_dr_IGD_P4_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> Planning</a><br/><br/>
              </div>
              <div class="" id="EMR_dr_IGD_P5_divBtnMenu">
                <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P5_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> PENATALAKSANAAN</a><br/><br/>
              </div>
              <div class="collapse" id="EMR_dr_IGD_P5_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_dr_IGD_P5_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> PENATALAKSANAAN</a><br/><br/>
              </div>
              <div class="" id="EMR_dr_IGD_P6_divBtnMenu">
                <a type="button" class="btn green col-md-12" id="EMR_dr_IGD_P6_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> Observasi</a>
              </div>
              <div class="collapse" id="EMR_dr_IGD_P6_divBtnMenuX">
                <a type="button" class="btn grey col-md-12" id="EMR_dr_IGD_P6_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> Observasi</a>
              </div>
            </div>
          </div>
        </div>


        <div id="modalIGDtriase" class="modal fade modalInput" tabindex="-1" data-backdrop="static" data-width="40%" data-keyboard="false" style="width:40%">
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
                <input type="hidden" id="EMR_dr_IGD_statTriase3">
                <input type="hidden" id="EMR_dr_IGD_statTriase2" value="white">
                <input type="hidden" id="EMR_dr_IGD_statTriase" value="Circulation">
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
                    <a type="button" class="btn blue" data-dismiss="modal" style="width:50%">Batal</a>
                    <a class="btn green btn-xs active" style="width:100%" id="EMR_dr_IGD_btnSimpanTriase"><i class="fa fa-edit"> Simpan</i></a>
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

        <div id="modalAlertCounter_perawat" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><center>Peringatan !!</center></h4>
            </div>
            <div class="modal-body">
              <center>
                Apakah Anda Yakin Isian Sudah Benar?
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                    <a type="button" class="btn red" data-dismiss="modal" style="width:50%">Tidak</a>
                    <a type="button" id="EMR_dr_IGD_btnselanjutnyaPerawat2" class="btn blue" data-dismiss="modal" style="width:50%">Ya</a>
                </div>
              </center>
            </div>
          </div>
        </div>
        <!--end user perawat-->

        <div class="collapse" id="EMR_dr_IGD_FrmRDokter">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <div class="row portlet-body">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data Rekam Medis berikut, masukkan password dokter <b><?php echo $namadokter; ?></b> di bawah ini terlebih dahulu sebagai proses verifikasi pengisi data.</p>
                <!--<div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_dr_IGD_userPerDokter" name="EMR_dr_IGD_userPerDokter" class="form-control">
                    <label for="form_control_1">Masukkan Username Dokter</label>
                    <span class="help-block">Masukkan Username Dokter</span>
                  </div>
                </div>-->
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                  <input type="password" id="EMR_dr_IGD_passPerDokter" name="EMR_dr_IGD_passPerDokter" class="form-control">
                  <label for="form_control_1">Masukkan Password Dokter</label>
                  <span class="help-block">Masukkan Password Dokter</span>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_dr_IGD_FrmRDokter2">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Penanggung jawab pengisi data :</b></span>
            </div>
            <div class="row portlet-body">
              <div class="col-sm-12">
                <p style="display: block; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Untuk dapat menyimpan data Rekam Medis berikut, masukkan password dokter <b></b> di bawah ini terlebih dahulu sebagai proses verifikasi pengisi data.</p>
                <!--<div class="form-group form-md-line-input has-success form-md-floating-label">
                  <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                    <input type="text" id="EMR_dr_IGD_userPerDokter" name="EMR_dr_IGD_userPerDokter" class="form-control">
                    <label for="form_control_1">Masukkan Username Dokter</label>
                    <span class="help-block">Masukkan Username Dokter</span>
                  </div>
                </div>-->
                <div class="form-group form-md-line-input has-success form-md-floating-label">
                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                  <input type="password" id="EMR_dr_IGD_passPerDokter2" name="EMR_dr_IGD_passPerDokter2" class="form-control">
                  <label for="form_control_1">Masukkan Password Dokter</label>
                  <span class="help-block">Masukkan Password Dokter</span>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portlet light portlet-fit bordered">
          <div class="portlet-body">
            <div class="row">
              <div id="alert-msg-EMR_dr_IGD_Perawat"></div>
              <div id="EMR_dr_IGD_btnCommand" class="">
                <div class="btn-group btn-group btn-group-justified">
                  <button type="button" class="btn white" id="EMR_dr_IGD_btnselanjutnyaPerawat" name="EMR_dr_IGD_btnselanjutnyaPerawat" style="width:100%" disabled="true">Selanjutnya</button>
                  <!--button class="btn bg-green-jungle bg-font-green-jungle" id="EMR_ASESMEN_DOKTER_btnLokalisTulang" style="width:100%"><center><b><i class="fa fa-plus"></i> Status Lokalis Orthopedi</b></center></button>
                  <button class="btn bg-green-jungle bg-font-green-jungle" id="EMR_ASESMEN_DOKTER_btnLokalisTubuh" style="width:100%"><center><b><i class="fa fa-plus"></i> Status Lokalis Orthopedi</b></center></button-->
                </div>
              </div>
              <div id="EMR_ASESMEN_DOKTER_btnCommand" class="collapse">
                <div class="btn-group btn-group btn-group-justified">

                  <input type="hidden" id="EMR_dr_IGD_userPerPerawatHalDok" name="EMR_dr_IGD_userPerPerawatHalDok" value="">
                  <input type="hidden" id="EMR_ASESMEN_DOKTER_id_pemeriksaan" name="EMR_ASESMEN_DOKTER_id_pemeriksaan" value="">
                    <!--<button type="button" class="btn white" id="EMR_dr_IGD_btnsimpan" name="EMR_dr_IGD_btnsimpan" style="width:100%" disabled="true">Simpan</button>-->
                    <button type="button" class="btn green" id="EMR_dr_IGD_btnsimpan" name="EMR_dr_IGD_btnsimpan" style="width:100%">Simpan</button>
                </div>
              </div>
              <div id="EMR_ASESMEN_DOKTER_btnCommand2" class="collapse">
                <div class="btn-group btn-group btn-group-justified">
                    <input type="hidden" id="EMR_ASESMEN_DOKTER_id_pemeriksaan_update" name="EMR_ASESMEN_DOKTER_id_pemeriksaan_update" value="">
                    <button type="button" class="btn green" id="EMR_dr_IGD_btnsimpan_update" name="EMR_dr_IGD_btnsimpan_update" style="width:100%">Simpan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="modalAlertCounter_dokter" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><center>Peringatan !!</center></h4>
            </div>
            <div class="modal-body">
              <center>
                Apakah Anda Yakin Isian Sudah Benar?
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <div id="alert-msg-EMR_dr_IGD_Dokter"></div>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                    <a type="button" class="btn red" data-dismiss="modal" style="width:50%">Tidak</a>
                    <a type="button" id="EMR_dr_IGD_btnsimpan2" class="btn blue" data-dismiss="modal" style="width:50%">Ya</a>
                </div>
              </center>
            </div>
          </div>
        </div>
        <div id="modalAlertCounter_dokter2" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><center>Peringatan !!</center></h4>
            </div>
            <div class="modal-body">
              <center>
                Apakah Pasien Akan Kembali?
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <div id="alert-msg-EMR_dr_IGD_Dokter2"></div>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                    <a type="button" id="EMR_dr_IGD_btnsimpan4" onclick="EMR_dr_IGD_Simpan_Data(this)" class="btn red" style="width:50%">Tidak</a>
                    <a type="button" id="EMR_dr_IGD_btnsimpan3" onclick="EMR_dr_IGD_Simpan_Data(this)" class="btn blue" style="width:50%">Ya</a>
                </div>
              </center>
            </div>
          </div>
        </div>
        <div id="modalAlertCounter_dokter_update" class="modal fade modalInput" tabindex="-1"  data-backdrop="static" data-keyboard="false">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><center>Peringatan !!</center></h4>
            </div>
            <div class="modal-body">
              <center>
                Apakah Anda Yakin Isian Sudah Benar?
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <div id="alert-msg-EMR_dr_IGD_Dokter"></div>
                <div class="btn-group btn-group btn-group-justified" style="width:50%">
                    <a type="button" class="btn red" data-dismiss="modal" style="width:50%">Tidak</a>
                    <a type="button" id="EMR_dr_IGD_btnsimpan_update2" class="btn blue" style="width:50%">Ya</a>
                </div>
              </center>
            </div>
          </div>
        </div>
      </div>

      <!--LOKALIS GAMBAR BADAN START-->
      <div id="AsesmenModalStatusLokalis" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="100%" style="width:50%">
        <div class="row">
          <div class="col-md-4">
            <div class="btn-group btn-group btn-group-justified" style="width:100%">
              <button disable type="button" class="btn white" style="height:55px; width:30%">
                <span style="font-size:8px; color:#BFBFBF"><b>Nomer Rekam Medik :</b></span><br>
                <span style="font-size:14px" name><b><?php echo $norm?></b></span>
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
            <button class="btn blue col-md-12 collapse" id="EMR_ASESMEN_DOKTER_BtnKembaliFrmLokalis2" style="height:100%; width:100%"><i class="fa fa-arrow-left"></i> Kembali </button></br></br>
          </div>
        </div>
        <div class="modal-body">
          <input type="hidden" id="EMR_ASESMEN_DOKTER_statLokalis" value="pilih">
          <input type="hidden" id="EMR_ASESMEN_DOKTER_statLokalis2" value="">
          <div class="row">
            <!--<div id="EMR_ASESMEN_DOKTER_FrmLokalis0">
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
                        <button type="button" class="btn blue" id="EMR_ASESMEN_DOKTER_btnLokalisTubuh" style="width:100%; height:40px; background-color:">Lokalis Bedah</button>
                        </br>
                        </br>
                        <button type="button" class="btn blue" id="EMR_ASESMEN_DOKTER_btnLokalisTulang" style="width:100%; height:40px; background-color:">Lokalis Orthopedi</button>
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
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverKepala2">
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
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverBadan2">
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
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverTangan2">
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
                <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmMouseoverKaki2">
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
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisBedah" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Tubuh Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
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
                      <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnTangan1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnTanganMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnTanganMOut(this)"></td>
                      <td colspan="4" style="height:180px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnBadan" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnBadanMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnBadanMOut(this)"></button></td>
                      <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnTangan2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnTanganMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnTanganMOut(this)"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnKaki1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKakiMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKakiMOut(this)"></button></td>
                      <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_btnKaki2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKakiMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKakiMOut(this)"></button></td>
                    </tr>
                    <tr>
                      <td style="height:200px"></td>
                      <td style="height:200px"></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisOrthopedi" align="center" background="<?php echo base_url().'assets/pages/img/tulang/Tulang_Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:70px"></td>
                      <td style="width:20px;"></td>
                      <td colspan="2" style="width:60px; height:80px">
                        <a type="button" border="0" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnKepala" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKepalaMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKepalaMOut(this)"></a>
                      </td>
                      <td style="width:20px;"></td>
                      <td style="width:70px"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnTangan1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnTanganMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnTanganMOut(this)"></td>
                      <td colspan="4" style="height:180px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnBadan" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnBadanMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnBadanMOut(this)"></button></td>
                      <td rowspan="2" style="height:210px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnTangan2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnTanganMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnTanganMOut(this)"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnKaki1" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKakiMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKakiMOut(this)"></button></td>
                      <td rowspan="2" colspan="2" style="height:230px"><button type="button" class="btn white" id="EMR_ASESMEN_DOKTER_Orto_btnKaki2" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKakiMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKakiMOut(this)"></button></td>
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

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanBadanDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderBadanBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanBadanBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanBadanBelakang"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderTanganDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanTanganDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanTanganDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderTanganBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanTanganBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanTanganBelakang"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKakiDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendHasilHeaderKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendHasilKeluhanKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendKeluhanKakiBelakang"></div>
              </div>
              <div class="col-md-4">
                <center>
                  <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                      <a href="javascript:;" class="btn grey" id="EMR_ASESMEN_DOKTER_btnGeserKanan" style="height:100%"> << Geser >> </a>
                  </div>
                </center>
                <center>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisKepalaDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kepala Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:60px"></td>
                      <td style="width:60px;"></td>
                      <td colspan="2" style="width:60px; height:40px"></td>
                      <td style="width:60px;"></td>
                      <td style="width:60px"></td>
                    </tr>
                    <tr>
                      <td style="height:160px">
                        <a type="button" border="0" class="btn white" title=" Temporalis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraTemporalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                      <td colspan="4" style="height:160px">
                        <a type="button" border="0" class="btn white" title="Frontalis" id="EMR_ASESMEN_DOKTER_btnLokalisFrontalis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td style="height:160px">
                        <a type="button" border="0" class="btn white" title=" Temporalis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraTemporalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="height:120px">
                        <a type="button" border="0" class="btn white" title=" Zygomatical Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraZygomatical" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Orbitalis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraOrbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                      <td rowspan="2" colspan="2" style="height:120px">
                        <a type="button" border="0" class="btn white" title="Nasalis" id="EMR_ASESMEN_DOKTER_btnLokalisNasalis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Orbitalis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraOrbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                      <td rowspan="2" style="height:120px">
                        <a type="button" border="0" class="btn white" title=" Zygomatical Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraZygomatical" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Infraorbitalis Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraInfraorbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Infraorbitalis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraInfraorbitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td rowspan="2" style="height:120px">
                        <a type="button" border="0" class="btn white" title=" Buccalis Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraBuccalis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td colspan="2" style="height:50px">
                        <a type="button" border="0" class="btn white" title="Oralis" id="EMR_ASESMEN_DOKTER_btnLokalisOralis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td rowspan="2" style="height:120px">
                        <a type="button" border="0" class="btn white" title=" Buccalis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraBuccalis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Mentalis" id="EMR_ASESMEN_DOKTER_btnLokalisMentalis" style="width:100%; height:100%; background-color: Transparent" onmouseover="EMR_ASESMEN_DOKTER_btnKepalaMOver(this)" onmouseout="EMR_ASESMEN_DOKTER_btnKepalaMOut(this)"></a>
                      </td>
                      <td></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisKepalaBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kepala Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="2" style="width:330px; height:40px"></td>
                    </tr>
                    <tr>
                      <td style="height:120px">
                        <a type="button" border="0" class="btn white" title="Parietalis" id="EMR_ASESMEN_DOKTER_btnLokalisParietalis" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:140px">
                        <a type="button" border="0" class="btn white" title="Occipitalis" id="EMR_ASESMEN_DOKTER_btnLokalisOccipitalis" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:120px">
                        <a type="button" border="0" class="btn white" title="Cervicalis Pasterior" id="EMR_ASESMEN_DOKTER_btnLokalisCervicalisPasterior" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisBadanDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Badan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
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
                        <a type="button" border="0" class="btn white" title=" Cervicalis Lateralis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraCervicalisLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:45px">
                        <a type="button" border="0" class="btn white" title=" Sternocleidomastoidea Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraSternocleidomastoidea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:45px">
                        <a type="button" border="0" class="btn white" title="Cervicalis Anterior" id="EMR_ASESMEN_DOKTER_btnLokalisCervicalisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:45px">
                        <a type="button" border="0" class="btn white" title=" Sternocleidomastoidea Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraSternocleidomastoidea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:45px">
                        <a type="button" border="0" class="btn white" title=" Cervicalis Lateralis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCervicalisLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Trigonum Clavipectorale Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraTrigonumClavipectorale" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="2" colspan="2" style="height:80px">
                        <a type="button" border="0" class="btn white" title=" Pectoralis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraPectoralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="3" style="height:100px">
                        <a type="button" border="0" class="btn white" title="Presternalis" id="EMR_ASESMEN_DOKTER_btnLokalisPresternalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="2" colspan="2" style="height:80px">
                        <a type="button" border="0" class="btn white" title=" Pectoralis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraPectoralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Trigonum Clavipectorale Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraTrigonumClavipectorale" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Axillaris Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraAxillaris" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Axillaris Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraAxillaris" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td style="height:20px">
                        <a type="button" border="0" class="btn white" title=" Mammaria Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraMammaria" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                      <td></td>
                      <td style="height:20px">
                        <a type="button" border="0" class="btn white" title=" Mammaria Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraMammaria" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="3" style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Inframammaria Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraInframammaria" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                      <td colspan="3" style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Inframammaria Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraInframammaria" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Hypochondriaca Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraHypochondriaca" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Epigastrica" id="EMR_ASESMEN_DOKTER_btnLokalisEpigastrica" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Hypochondriaca Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraHypochondriaca" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Lateralis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:60px">
                        <a type="button" border="0" class="btn white" title="Umbilicalis" id="EMR_ASESMEN_DOKTER_btnLokalisUmbilicalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Lateralis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraLateralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Inguinalis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraInguinalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Pubica" id="EMR_ASESMEN_DOKTER_btnLokalisPubica" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Inguinalis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraInguinalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td colspan="3" style="height:80px">
                        <a type="button" border="0" class="btn white" title="Urogenitalis" id="EMR_ASESMEN_DOKTER_btnLokalisUrogenitalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisBadanBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Badan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:80px;"></td>
                      <td style="width:20px; height:100px"></td>
                      <td style="width:80px;"></td>
                    </tr>
                    <tr>
                      <td style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Scapularis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraScapularis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="3" style="width:20px; height:210px">
                        <a type="button" border="0" class="btn white" title="Verterbralis" id="EMR_ASESMEN_DOKTER_btnLokalisVerterbralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Scapularis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraScapularis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Infrascapularis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraInfrascapularis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Infrascapularis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraInfrascapularis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Lumbaris Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraLumbaris" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title=" Lumbaris Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraLumbaris" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="height:140px">
                        <a type="button" border="0" class="btn white" title=" Glutealis Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraGlutealis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:70px">
                        <a type="button" border="0" class="btn white" title="Sacralis" id="EMR_ASESMEN_DOKTER_btnLokalisSacralis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="2" style="height:140px">
                        <a type="button" border="0" class="btn white" title=" Glutealis Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraGlutealis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:70px">
                        <a type="button" border="0" class="btn white" title="Analis" id="EMR_ASESMEN_DOKTER_btnLokalisAnalis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisTanganDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Tangan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="2" style="width:120px; height:120px">
                        <a type="button" border="0" class="btn white" title=" Deltoidea Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraDeltoidea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:130px; height:120px"></td>
                      <td colspan="2" style="width:120px;  height:120px">
                        <a type="button" border="0" class="btn white" title=" Deltoidea Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraDeltoidea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Brachialis Anterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraBrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="3" style="width:20px; height:210px"></td>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Brachialis Anterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraBrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Cubitalis Anterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraCubitalisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Cubitalis Anterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCubitalisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:50px;height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraAntebrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraAntebrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraAntebrachialisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:50px;height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraAntebrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Dormus Manus Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraDormusManus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:50px"></td>
                      <td colspan="2" style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Dormus Manus Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraDormusManus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisTanganBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Tangan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="2" style="width:120px; height:120px">
                        <a type="button" border="0" class="btn white" title=" Deltoidea Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraDeltoidea2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:130px; height:120px"></td>
                      <td colspan="2" style="width:120px;  height:120px">
                        <a type="button" border="0" class="btn white" title=" Deltoidea Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraDeltoidea2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Brachialis Posterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraBrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="3" style="width:20px; height:210px"></td>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title=" Brachialis Posterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraBrachialisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Cubitalis Posterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraCubitalisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title=" Cubitalis Posterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCubitalisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:50px;height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraAntebrachialisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraAntebrachialisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Anterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraAntebrachialisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:50px;height:100px">
                        <a type="button" border="0" class="btn white" title=" Antebrachialis Posterior Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraAntebrachialisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Palma Manus Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraPalmaManus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:50px"></td>
                      <td colspan="2" style="height:100px">
                        <a type="button" border="0" class="btn white" title=" Palma Manus Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraPalmaManus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisKakiDepan" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kaki Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="4" style="width:160px; height:40px"></td>
                    </tr>
                    <tr>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraFemoralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Trigonum Femorale Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraTrigonumfemorale" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Trigonum Femorale Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraTrigonumfemorale" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraFemoralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraFemoralisAnterior1" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Femoralis Anterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraFemoralisAnterior1" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Genus Anterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraGenusAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Genus Anterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraGenusAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:60px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Anterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraCruralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:20px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Posterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraCruralisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:20px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Posterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCruralisPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:60px; height:130px">
                        <a type="button" border="0" class="btn white" title="Cruralis Anterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCruralisAnterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:80px">
                        <a type="button" border="0" class="btn white" title="Dorsum Pedis Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraDorsumPedis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:80px">
                        <a type="button" border="0" class="btn white" title="Dorsum Pedis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraDorsumPedis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_tblLokalisKakiBelakang" align="center" background="<?php echo base_url().'assets/pages/img/tubuh/Kaki Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="4" style="width:160px; height:100px"></td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title="Femoralis Pasterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraFemoralisPasterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:90px">
                        <a type="button" border="0" class="btn white" title="Femoralis Pasterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraFemoralisPasterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Genus Posterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraGenusPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Genus Posterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraGenusPosterior" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Sura Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraSura" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Sura Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraSura" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:40px; height:110px">
                        <a type="button" border="0" class="btn white" title="Cruralis Anterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraCruralisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:110px">
                        <a type="button" border="0" class="btn white" title="Cruralis Posterior Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraCruralisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:110px">
                        <a type="button" border="0" class="btn white" title="Cruralis Posterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCruralisPosterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:110px">
                        <a type="button" border="0" class="btn white" title="Cruralis Anterior Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCruralisAnterior2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:60px; height:50px">
                        <a type="button" border="0" class="btn white" title="Dorsum Pedis Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraDorsumPedis2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:20px; height:50px">
                        <a type="button" border="0" class="btn white" title="Calcanea Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraCalcanea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:20px; height:50px">
                        <a type="button" border="0" class="btn white" title="Calcanea Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCalcanea" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:60px; height:50px">
                        <a type="button" border="0" class="btn white" title="Dorsum Pedis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraDorsumPedis2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:10px">
                        <a type="button" border="0" class="btn white" title="Dorsum Planta Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraPlantaPedis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:10px">
                        <a type="button" border="0" class="btn white" title="Dorsum Planta Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraPlantaPedis" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                </center>
              </div>
              <div class="col-md-4 row">
                <center><h4><span><b>Bagian Lokalis : </b></span>
                <span id="EMR_ASESMEN_DOKTER_GstsFrmLokalis2"></span></h4></center>
                <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: 0em; border-style: inset; border-width: 1px; height:1px; width:100%">
                <center><h4><span> Lokasi : </span><span id="EMR_ASESMEN_DOKTER_LokasiLokalis"></span></h4></center></br>
                <div class="col-md-6">
                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                      <input type="text" id="EMR_ASESMEN_DOKTER_SLBedahInspeksi" name="EMR_ASESMEN_DOKTER_SLBedahInspeksi" value="" class="form-control">
                      <label for="form_control_1">Inspeksi</label>
                      <span class="help-block">Masukkan Inspeksi</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                      <input type="text" id="EMR_ASESMEN_DOKTER_SLBedahPalpasi" name="EMR_ASESMEN_DOKTER_SLBedahPalpasi" value="" class="form-control">
                      <label for="form_control_1">Palpasi</label>
                      <span class="help-block">Masukkan Palpasi</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                      <input type="text" id="EMR_ASESMEN_DOKTER_SLBedahPerkusi" name="EMR_ASESMEN_DOKTER_SLBedahPerkusi" value="" class="form-control">
                      <label for="form_control_1">Perkusi</label>
                      <span class="help-block">Masukkan Perkusi</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                    <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                      <input type="text" id="EMR_ASESMEN_DOKTER_SLBedahAuskultasi" name="EMR_ASESMEN_DOKTER_SLBedahAuskultasi" value="" class="form-control">
                      <label for="form_control_1">Auskultasi</label>
                      <span class="help-block">Masukkan Auskultasi</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <center>
                    <a class="btn green-jungle col-md-12" name="insertKeluhan" value="Tambah Data" id="insertKeluhan"> <i class="fa fa-plus"></i> <b>Tampung Temuan</b></a>
                  </center>
                </div>
              </div>
            </div>
            <div class="collapse" id="EMR_ASESMEN_DOKTER_FrmLokalis3">
              <div class="col-md-4">

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderKepalaDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanKepalaDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanKepalaDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderKepalaBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanKepalaBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanKepalaBelakang"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderBadanDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanBadanDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanBadanDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderCervicalVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanCervicalVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanCervicalVerterbral"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderThoracicVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanThoracicVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanThoracicVerterbral"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderLumbarVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanLumbarVerterbral"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanLumbarVerterbral"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderBadanBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanBadanBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanBadanBelakang"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderTanganDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanTanganDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanTanganDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderTanganBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanTanganBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanTanganBelakang"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderKakiDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanKakiDepan"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanKakiDepan"></div>

                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilHeaderKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoHasilKeluhanKakiBelakang"></div>
                <div id="EMR_ASESMEN_DOKTER_AppendOrtoKeluhanKakiBelakang"></div>

              </div>
              <div class="col-md-4">
                <center>
                  <div class="btn-group btn-group-circle btn-group-sm btn-group-justified" style="display: block; margin-top: -1em; margin-bottom: -1em;">
                      <a href="javascript:;" class="btn grey" id="EMR_ASESMEN_DOKTER_Orto_btnGeserKanan" style="height:100%"> << Geser >> </a>
                  </div>
                </center>
                <center>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisKepalaDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Teng_Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
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
                        <a type="button" border="0" class="btn white" title="Frontal" id="EMR_ASESMEN_DOKTER_btnLokalisFrontal" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td style="height:120px"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="height:120px"><a type="button" border="0" class="btn white" title="Zygomatic" id="EMR_ASESMEN_DOKTER_btnLokalisZygomatic1" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td style="height:60px"><a type="button" border="0" class="btn white" title="Sphenoid" id="EMR_ASESMEN_DOKTER_btnLokalisSphenoid1" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td colspan="2" style="height:60px"><a type="button" border="0" class="btn white" title="Nasal" id="EMR_ASESMEN_DOKTER_btnLokalisNasal" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td style="height:60px"><a type="button" border="0" class="btn white" title="Sphenoid" id="EMR_ASESMEN_DOKTER_btnLokalisSphenoid2" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td rowspan="2" style="height:120px"><a type="button" border="0" class="btn white" title="Zygomatic" id="EMR_ASESMEN_DOKTER_btnLokalisZygomatic2" style="width:100%; height:100%; background-color: Transparent"></a></td>
                    </tr>
                    <tr>
                      <td style="height:60px"><a type="button" border="0" class="btn white" title="Maxilla" id="EMR_ASESMEN_DOKTER_btnLokalisMaxilla1" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td colspan="2" style="height:60px"><a type="button" border="0" class="btn white" title="Ethmoid" id="EMR_ASESMEN_DOKTER_btnLokalisEthmoid" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td style="height:60px"><a type="button" border="0" class="btn white" title="Maxilla" id="EMR_ASESMEN_DOKTER_btnLokalisMaxilla2" style="width:100%; height:100%; background-color: Transparent"></a></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="4" style="height:40px"><a type="button" border="0" class="btn white" title="Maxilla" id="EMR_ASESMEN_DOKTER_btnLokalisMaxilla3" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="4" style="height:40px"></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="4" style="height:60px"><a type="button" border="0" class="btn white" title="Mandible" id="EMR_ASESMEN_DOKTER_btnLokalisMandible" style="width:100%; height:100%; background-color: Transparent"></a></td>
                      <td></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisKepalaBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Kepala Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="2" style="width:330px; height:40px"></td>
                    </tr>
                    <tr>
                      <td style="height:140px">
                        <a type="button" border="0" class="btn white" title="Parietal" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraParietal" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                      <td style="height:140px">
                        <a type="button" border="0" class="btn white" title="Parietal" id="EMR_ASESMEN_DOKTER_btnLokalisDextraParietal" style="width:100%; height:100%; background-color: Transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:140px">
                        <a type="button" border="0" class="btn white" title="Occipital" id="EMR_ASESMEN_DOKTER_btnLokalisOccipital" style="width:100%; height:100%; background-color: Transparent"> </a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:120px"></td>
                      <td style="height:120px"></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisBadanDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Badan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="3" style="width:80px;"></td>
                      <td style="width:40px; height:80px">
                        <a type="button" border="0" class="btn white" title="Verterbral column" id="EMR_ASESMEN_DOKTER_btnLokalisVerterbral1" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="width:80px;"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" colspan="3">
                        <a type="button" border="0" class="btn white" title=" Ribs " id="EMR_ASESMEN_DOKTER_btnLokalisRibs1" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title=" Sternum " id="EMR_ASESMEN_DOKTER_btnLokalisSternum" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="2" colspan="3">
                        <a type="button" border="0" class="btn white" title=" Ribs " id="EMR_ASESMEN_DOKTER_btnLokalisRibs2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title="Verterbral column" id="EMR_ASESMEN_DOKTER_btnLokalisVerterbral2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3" style="height:80px"></td>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Verterbral column" id="EMR_ASESMEN_DOKTER_btnLokalisVerterbral3" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:80px"></td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Illium Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisIlliumDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Sacrum" id="EMR_ASESMEN_DOKTER_btnLokalisSacrum" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:70px">
                        <a type="button" border="0" class="btn white" title="Illium Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisIlliumSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <a type="button" border="0" class="btn white" title="Pubis Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisPubisDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:30px"></td>
                      <td>
                        <a type="button" border="0" class="btn white" title="Pubis Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisPubisSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <a type="button" border="0" class="btn white" title="Ischium Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraIschium" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3" style="height:30px"></td>
                      <td>
                        <a type="button" border="0" class="btn white" title="Ischium Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraIschium" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisCervicalVerterbral" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Cervical Verterbral.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:200px; height:90px">
                        <a type="button" border="0" class="btn white" title=" Atlas C1 " id="EMR_ASESMEN_DOKTER_btnLokalisAtlasC1" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:50px">
                        <a type="button" border="0" class="btn white" title="Axis C2" id="EMR_ASESMEN_DOKTER_btnLokalisAxisC2" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:50px">
                        <a type="button" border="0" class="btn white" title="Third Cervical Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisThirdCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:50px">
                        <a type="button" border="0" class="btn white" title="Fourth Cervical Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFourthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:50px">
                        <a type="button" border="0" class="btn white" title="Fifth Cervical Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFifthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title="Sixth Cervical Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSixthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:60px">
                        <a type="button" border="0" class="btn white" title="Seventh Cervical Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSeventhCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisThoracicVerterbral" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Thoracic Verterbral.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:200px; height:55px">
                        <a type="button" border="0" class="btn white" title=" First Thoracic Verterbral " id="EMR_ASESMEN_DOKTER_btnLokalisFirstThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Second Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSecondThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Third Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisThirdThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Fourth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFourthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Fifth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFifthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Sixth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSixthCervicalVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Seventh Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSeventhThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Eight Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisEightThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Ninth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisNinthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:45px">
                        <a type="button" border="0" class="btn white" title="Tenth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisTenthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:50px">
                        <a type="button" border="0" class="btn white" title="Eleventh Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisEleventhThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:75px">
                        <a type="button" border="0" class="btn white" title="Twelfth Thoracic Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisTwelfthThoracicVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisLumbarVerterbral" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Lumbar Verterbral.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:200px; height:120px">
                        <a type="button" border="0" class="btn white" title=" First Lumbar Verterbral " id="EMR_ASESMEN_DOKTER_btnLokalisFirstLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Second Lumbar Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisSecondLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Third Lumbar Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisThirdLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:100px">
                        <a type="button" border="0" class="btn white" title="Fourth Lumbar Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFourthLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:80px">
                        <a type="button" border="0" class="btn white" title="Fifth Lumbar Verterbral" id="EMR_ASESMEN_DOKTER_btnLokalisFifthLumbarVerterbral" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisRusuk" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Rusuk.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Second Ribs Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisSecondRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Third Ribs Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisThirdRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Fourth Ribs Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisFourthRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:40px">
                        <a type="button" border="0" class="btn white" title="Fifth Ribs Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisFifthRibsDextra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:100px; height:40px">
                        <a type="button" border="0" class="btn white" title=" First Ribs Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisFirstRibsSinistra" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisBadanBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Badan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
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
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisTanganDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Tangan Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="4" style="width:200px; height:40px"></td>
                      <td colspan="4" style="width:200px; height:40px"></td>
                    </tr>
                    <tr>
                      <td colspan="3"></td>
                      <td style="width:60px; height:40px">
                        <a type="button" border="0" class="btn white" title=" Clavicle Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraClavicle" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:60px; height:40px">
                        <a type="button" border="0" class="btn white" title=" Clavicle Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraClavicle" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3"></td>
                    </tr>
                    <tr>
                      <td style="width:70px;"></td>
                      <td rowspan="2" colspan="2" style="width:60px; height:120px">
                        <a type="button" border="0" class="btn white" title=" Humerus Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraHumerus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:60px; height:60px">
                        <a type="button" border="0" class="btn white" title=" Scapula Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraScapula" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:60px; height:60px">
                        <a type="button" border="0" class="btn white" title=" Scapula Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraScapula" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td rowspan="2" colspan="2" style="width:60px; height:120px">
                        <a type="button" border="0" class="btn white" title=" Humerus Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraHumerus" style="width:100%; height:100%; background-color: transparent"></a>
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
                        <a type="button" border="0" class="btn white" title=" Radius Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraRadius" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:30px; height:110px">
                        <a type="button" border="0" class="btn white" title=" Ulna Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraUlna" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="width:30px; height:110px">
                        <a type="button" border="0" class="btn white" title=" Ulna Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraUlna" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="height:110px">
                        <a type="button" border="0" class="btn white" title=" Radius Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraRadius" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:60px; height:60px">
                        <a type="button" border="0" class="btn white" title=" Carpus Dextra " id="EMR_ASESMEN_DOKTER_btnLokalisDextraCarpus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="3"></td>
                      <td colspan="3"></td>
                      <td style="width:60px; height:60px">
                        <a type="button" border="0" class="btn white" title=" Carpus Sinistra " id="EMR_ASESMEN_DOKTER_btnLokalisSinistraCarpus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                  </table>
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisTanganBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Tangan Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
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
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisKakiDepan" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Kaki Depan.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
                    <tr>
                      <td colspan="4" style="width:160px; height:40px"></td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:190px">
                        <a type="button" border="0" class="btn white" title="Femur Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraFemur" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:190px">
                        <a type="button" border="0" class="btn white" title="Femur Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraFemur" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Patelia Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraPatelia" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:40px">
                        <a type="button" border="0" class="btn white" title="Patelia Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraPatelia" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width:40px; height:130px">
                        <a type="button" border="0" class="btn white" title="Fibula Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraFibula" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:130px">
                        <a type="button" border="0" class="btn white" title="Tibia Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraTibia" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:130px">
                        <a type="button" border="0" class="btn white" title="Tibia Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraTibia" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td style="width:40px; height:130px">
                        <a type="button" border="0" class="btn white" title="Fibula Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraFibula" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="height:20px">
                        <a type="button" border="0" class="btn white" title="Talus Dextra" id="EMR_ASESMEN_DOKTER_btnLokalisDextraTalus" style="width:100%; height:100%; background-color: transparent"></a>
                      </td>
                      <td colspan="2" style="height:20px">
                        <a type="button" border="0" class="btn white" title="Talus Sinistra" id="EMR_ASESMEN_DOKTER_btnLokalisSinistraTalus" style="width:100%; height:100%; background-color: transparent"></a>
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
                  <table class="collapse" border="0" id="EMR_ASESMEN_DOKTER_Orto_tblLokalisKakiBelakang" align="center" background="<?php echo base_url().'assets/pages/img/Tulang/Kaki Belakang.png'?>" style="background-repeat:no-repeat; background-attachment: relative; background-position: center top;">
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
                <span id="EMR_ASESMEN_DOKTER_Orto_GstsFrmLokalis2"></span></h4></center>
                <hr color="yellow" style="display: block; margin-top: 0em; margin-bottom: 0em; border-style: inset; border-width: 1px; height:1px; width:100%">
                <center><h4><span> Lokasi : </span><span id="EMR_ASESMEN_DOKTER_Orto_LokasiLokalis"></span></h4></center>
                <span class="col-md-12"><b><center>Look</center></b></span>
                <div class="col-md-6">
                  <span class="control-label">Vulnus : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnVulnus" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Swelling : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnSwelling" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Hematom : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnHematom" class="btn yellow" value="-" style="width:100%"><b> - </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Lain - lain : </span></br>
                  <input type="text" id="EMR_ASESMEN_DOKTER_btnLookLain" class="form-control" value="" style="width:100%">
                </div>
                <span class="col-md-12"><b><center>Feel</center></b></span>
                <div class="col-md-4">
                  <span class="control-label">Nyeri Tekan : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnNyeritekan" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                </div>
                <div class="col-md-4">
                  <span class="control-label">Krepitasi : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnKrepitasi" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                </div>
                <div class="col-md-4">
                  <span class="control-label">Hiperetesi : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnHiperetesi" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Perubahan Suhu : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnPerubahanSuhu" class="btn yellow" style="width:100%" value="-"><b> - </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Lain - lain : </span></br>
                  <input type="text" id="EMR_ASESMEN_DOKTER_btnFeelLain" class="form-control" style="width:100%" value="">
                </div>
                <span class="col-md-12"><b><center>Move</center></b></span>
                <div class="col-md-2">
                  <span class="control-label">ROM</span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnROM" class="btn green" style="width:100%" value="+"><b> + </b></button>
                </div>
                <div class="col-md-4">
                  <span class="control-label">Move : </span></br>
                  <button type="button" id="EMR_ASESMEN_DOKTER_btnMove" class="btn green" style="width:100%" value="Bebas"><b> Bebas </b></button>
                </div>
                <div class="col-md-6">
                  <span class="control-label">Lain - lain : </span></br>
                  <input type="text" id="EMR_ASESMEN_DOKTER_MoveLain" class="form-control" style="width:100%" value="">
                </div>

                <div class="col-md-12">
                  <center>
                    </br>
                    <a class="btn green-jungle col-md-12" name="insertKeluhanOrto" value="Tambah Data" id="insertKeluhanOrto"> <i class="fa fa-plus"></i> <b>Tampung Temuan</b></a>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <center>
            <div class="btn-group btn-group btn-group-justified" style="width:50%">
              <!--button class="btn red" data-toggle="modal" href="#modalBatalLokalis" style="width:50%">Batal</button-->
              <button class="btn blue" id="EMR_ASESMEN_DOKTER_btnSimpanModalLokalis" style="width:100%">Simpan</button>
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
      <!--LOKALIS GAMBAR BADAN END-->

    </div>
  </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
