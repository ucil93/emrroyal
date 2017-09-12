<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="background-color:#BFBFBF;">
        <div class="row">
            <div class="col-md-7">
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
                            <form role="form">
                                <div class="form-body">
                                    <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="tekanandarah" name="tekanandarah" value="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3">
                                                    <label for="form_control_1">Tekanan Darah</label>
                                                    <span class="help-block">Masukkan Tekanan Darah</span>
                                                    <i style="font-size:12px"><b>mmHG</b></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="respiratory" name="respiratory" value="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3">
                                                    <label for="form_control_1">Respiratory</label>
                                                    <span class="help-block">Masukkan Respiratory</span>
                                                    <i style="font-size:12px"><b>x/min</b></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="beratbadan" name="beratbadan" value="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3">
                                                    <label for="form_control_1">Berat Badan</label>
                                                    <span class="help-block">Masukkan Berat Badan</span>
                                                    <i style="font-size:12px"><b>Kg</b></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="nadi" name="nadi" value="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3">
                                                    <label for="form_control_1">Nadi</label>
                                                    <span class="help-block">Masukkan Nadi</span>
                                                    <i style="font-size:12px"><b>x/min</b></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="suhutubuh" name="suhutubuh" value="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3">
                                                    <label for="form_control_1">Suhu</label>
                                                    <span class="help-block">Masukkan Suhu Tubuh</span>
                                                    <i style="font-size:12px"><b>&deg;C</b></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                                                    <input type="text" id="tinggibadan" name="tinggibadan" value="" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3">
                                                    <label for="form_control_1">Tinggi Badan</label>
                                                    <span class="help-block">Masukkan Tinggi Badan</span>
                                                    <i style="font-size:12px"><b>Cm</b></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
