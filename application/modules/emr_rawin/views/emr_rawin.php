
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content" style="background-color:#BFBFBF;">
    <div class="row">
      <div class="col-md-9">
        <div class="portlet light bordered">
          <div class="caption font-red-sunglo">
            <center><span class="caption-subject bold uppercase" style="display: block; margin-top: 0em; margin-bottom: 0em;">PEMERIKSAAN RAWAT INAP</span></center>
          </div>
        </div>

        <input type="hidden" class="form-control" id="EMR_pr_RAWIN_MENUMU1" value="<?php echo $menu_rawin_1; ?>">
        <input type="hidden" class="form-control" id="EMR_pr_RAWIN_MENUMU2" value="<?php echo $menu_rawin_2; ?>">
        <input type="hidden" class="form-control" id="EMR_pr_RAWIN_MENUMU3" value="<?php echo $menu_rawin_3; ?>">
        <input type="hidden" class="form-control" id="EMR_pr_RAWIN_MENUMU4" value="<?php echo $menu_rawin_4; ?>">
        <input type="hidden" class="form-control" id="EMR_pr_RAWIN_MENUMU5" value="<?php echo $menu_rawin_5; ?>">
        <input type="hidden" class="form-control" id="EMR_pr_RAWIN_MENUMU6" value="<?php echo $menu_rawin_6; ?>">
        <input type="hidden" class="form-control" id="EMR_pr_RAWIN_NORM" value="<?=$norm;?>">
        <input type="hidden" class="form-control" id="EMR_pr_RAWIN_NOREG" value="<?=$noreg;?>">
        <input type="hidden" class="form-control" id="EMR_pr_RAWIN_Umur" value="<?=$Utahun;?>">
        <input type="hidden" class="form-control" id="EMR_pr_RAWIN_ID_pemeriksaan" value="<?=$id_pemeriksaan_awal;?>">

        <div class="" id="EMR_pr_RAWIN_P1_Halaman">
          <div class="portlet light bordered form-body">
            <div class="row">
              <div class="col-md-12">
                <div class="portlet light portlet-fit bordered">
                  <div class="portlet-title">
                    <span><b>Halaman 1</b></span>
                  </div>
                  <div class="portlet-body">
                    Halaman 1
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_pr_RAWIN_P2_Halaman">
          <div class="portlet light bordered form-body">
            <div class="row">
              <div class="col-md-12">
                <div class="portlet light portlet-fit bordered">
                  <div class="portlet-title">
                    <span><b>Halaman 2</b></span>
                  </div>
                  <div class="portlet-body">
                    Halaman 2
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_pr_RAWIN_P3_Halaman">
          <div class="portlet light bordered form-body">
            <div class="row">
              <div class="col-md-12">
                <div class="portlet light portlet-fit bordered">
                  <div class="portlet-title">
                    <span><b>Halaman 3</b></span>
                  </div>
                  <div class="portlet-body">
                    Halaman 3
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_pr_RAWIN_P4_Halaman">
          <div class="portlet light bordered form-body">
            <div class="row">
              <div class="col-md-12">
                <div class="portlet light portlet-fit bordered">
                  <div class="portlet-title">
                    <span><b>Halaman 4</b></span>
                  </div>
                  <div class="portlet-body">
                    Halaman 4
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_pr_RAWIN_P5_Halaman">
          <div class="portlet light bordered form-body">
            <div class="row">
              <div class="col-md-12">
                <div class="portlet light portlet-fit bordered">
                  <div class="portlet-title">
                    <span><b>Halaman 5</b></span>
                  </div>
                  <div class="portlet-body">
                    Halaman 5
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="EMR_pr_RAWIN_P6_Halaman">
          <div class="portlet light bordered form-body">
            <div class="row">
              <div class="col-md-12">
                <div class="portlet light portlet-fit bordered">
                  <div class="portlet-title">
                    <span><b>Halaman 6</b></span>
                  </div>
                  <div class="portlet-body">
                    Halaman 6
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-3">
        <!-- BEGIN TAB PORTLET-->

        <div id="EMR_pr_RAWIN_subMenu">
          <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
              <span><b>Sub Menu :</b></span>
            </div>
            <input type="hidden" id="EMR_pr_RAWIN_statverHal" name="EMR_pr_RAWIN_statverHal" value="P1">
            <div class="row portlet-body" id="">
              <?php
              if($menu_rawin_1 != "DONE")
              {
                ?>
                  <a type="button" class="btn white col-md-12" id="EMR_pr_RAWIN_P1_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> SUBJEKTIF</a><br/><br/>
                <?php
              }
              else
              {
                ?>
                  <a type="button" class="btn grey col-md-12" id="EMR_pr_RAWIN_P1_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> SUBJEKTIF</a><br/><br/>
                <?php
              }
              if($menu_rawin_2 != "DONE")
              {
                ?>
                  <a type="button" class="btn green col-md-12" id="EMR_pr_RAWIN_P2_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> OBJEKTIF</a><br/><br/>
                <?php
              }
              else
              {
                ?>
                  <a type="button" class="btn grey col-md-12" id="EMR_pr_RAWIN_P2_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> OBJEKTIF</a><br/><br/>
                <?php
              }
              if($menu_rawin_3 != "DONE")
              {
                ?>
                  <a type="button" class="btn green col-md-12" id="EMR_pr_RAWIN_P3_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> ASSESMENT</a><br/><br/>
                <?php
              }
              else
              {
                ?>
                  <a type="button" class="btn grey col-md-12" id="EMR_pr_RAWIN_P3_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> ASSESMENT</a><br/><br/>
                <?php
              }
              if($menu_rawin_4 != "DONE")
              {
                ?>
                  <a type="button" class="btn green col-md-12" id="EMR_pr_RAWIN_P4_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> PLANNING</a><br/><br/>
                <?php
              }
              else
              {
                ?>
                  <a type="button" class="btn grey col-md-12" id="EMR_pr_RAWIN_P4_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> PLANNING</a><br/><br/>
                <?php
              }
              if($menu_rawin_5 != "DONE")
              {
                ?>
                  <a type="button" class="btn green col-md-12" id="EMR_pr_RAWIN_P5_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i> TAMBAHAN</a><br/><br/>
                <?php
              }
              else
              {
                ?>
                  <a type="button" class="btn grey col-md-12" id="EMR_pr_RAWIN_P5_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i> TAMBAHAN</a><br/><br/>
                <?php
              }
              if($menu_rawin_6 != "DONE")
              {
                ?>
                  <a type="button" class="btn green col-md-12" id="EMR_pr_RAWIN_P6_btnmenu" style="width:100%"><i class="fa fa-pencil-square-o pull-left"></i>TAMBAHAN</a>
                <?php
              }
              else
              {
                ?>
                  <a type="button" class="btn grey col-md-12" id="EMR_pr_RAWIN_P6_btnmenuX" style="width:100%"><i class="fa fa-search pull-left"></i>TAMBAHAN</a>
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
</div>
