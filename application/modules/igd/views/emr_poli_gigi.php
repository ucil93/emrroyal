
 <div class="panel bg-grey-steel bg-font-grey-steel">
     <div class="panel-heading collapsed bg-grey-steel bg-font-grey-steel" data-toggle="collapse" href="#collapseOne" data-parent="#accordion" >
         <h4 class="panel-title">
             <span aria-expanded="false" style="align:center"><center><b> Struktur Gigi <span id="txtStruktur">Susu</span></b>

             </center></span>
         </h4>
     </div>
     <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
         <div class="panel-body">

         <center>
             <button type="button" class="btn btn-info" data-toggle="collapse" data-toggle="tooltip" title="Klik untuk merubah struktur gigi" data-target="#demo1,#demo2,#demo3,#demo4" id="btnStruktur" onclick="StrukturGigi()" style="position:block; margin-top:-1em; margin-bottom:1em;">Ganti Struktur Gigi</button>
         </center>

             <div style="margin-bottom:2em">
             <table align="center">
                 <tr>
                     <td></td>
                     <td></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruAtas2" style="width:40px" data-toggle="modal" href="#ModalGigiKananBaruAtas2">II</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruAtas1" style="width:40px" data-toggle="modal" href="#ModalGigiKananBaruAtas1">I</button></td>
                     <td width="6px" style="border-right:1px solid #333"></td>
                     <td width="6px"></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruAtas1" style="width:40px" data-toggle="modal" href="#ModalGigiKiriBaruAtas1">I</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruAtas2" style="width:40px" data-toggle="modal" href="#ModalGigiKiriBaruAtas2">II</button></td>
                     <td></td>
                     <td></td>
                 </tr>
                 <tr>
                     <td></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruAtas4" style="width:40px; float:right;" data-toggle="modal" href="#ModalGigiKananBaruAtas4">IV</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruAtas3" style="width:40px" data-toggle="modal" href="#ModalGigiKananBaruAtas3">III</button></td>
                     <td></td>
                     <td style="border-right:1px solid #333"></td>
                     <td></td>
                     <td></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruAtas3" style="width:40px" data-toggle="modal" href="#ModalGigiKiriBaruAtas3">III</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruAtas4" style="width:40px" data-toggle="modal" href="#ModalGigiKiriBaruAtas4">IV</button></td>
                     <td></td>
                 </tr>
                 <tr>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruAtas6" style="width:40px; float:right; visibility:hidden;" data-toggle="modal" href="#ModalGigiKananBaruAtas6">6</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruAtas5" style="width:40px; float:right;" data-toggle="modal" href="#ModalGigiKananBaruAtas5">V</button></td>
                     <td colspan="6" align="center">Rahang Atas</td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruAtas5" style="width:40px" data-toggle="modal" href="#ModalGigiKiriBaruAtas5">V</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruAtas6" style="width:40px; visibility:hidden;" data-toggle="modal" href="#ModalGigiKiriBaruAtas6">6</button></td>
                 </tr>
                 <tr class="collapse" id="demo1">
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruAtas7" style="width:40px; visibility:hidden;" data-toggle="modal" href="#ModalGigiKananBaruAtas7">7</button></td>
                     <td colspan="4" style="border-right:1px solid #333"></td>
                     <td colspan="4"></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruAtas7" style="width:40px; visibility:hidden;" data-toggle="modal" href="#ModalGigiKiriBaruAtas7">7</button></td>
                 </tr>
                 <tr class="collapse" id="demo2">
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruAtas8" style="width:40px; visibility:hidden;" data-toggle="modal" href="#ModalGigiKananBaruAtas8">8</button></td>
                     <td colspan="4" style="border-right:1px solid #333"></td>
                     <td colspan="4"></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruAtas8" style="width:40px; visibility:hidden;" data-toggle="modal" href="#ModalGigiKiriBaruAtas8">8</button></td>
                 </tr>
             </table>
             <hr color="black" style="display: block; margin-top: 1em; margin-bottom: 1em; margin-left: auto; margin-right: auto; border-width: 1px; height:1px; width:60%">
             <table align="center">
                 <tr class="collapse" id="demo3">
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruBawah8" style="width:40px; visibility:hidden;" data-toggle="modal" href="#ModalGigiKananBaruBawah8">8</button></td>
                     <td colspan="4" style="border-right:1px solid #333"></td>
                     <td colspan="4"></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruBawah8" style="width:40px; visibility:hidden;" data-toggle="modal" href="#ModalGigiKiriBaruBawah8">8</button></td>
                 </tr>
                 <tr class="collapse" id="demo4">
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruBawah7" style="width:40px; visibility:hidden;" data-toggle="modal" href="#ModalGigiKananBaruBawah7">7</button></td>
                     <td colspan="4" style="border-right:1px solid #333"></td>
                     <td colspan="4"></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruBawah7" style="width:40px; visibility:hidden;" data-toggle="modal" href="#ModalGigiKiriBaruBawah7">7</button></td>
                 </tr>
                 <tr>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruBawah6" style="width:40px; float:right; visibility:hidden;" data-toggle="modal" href="#ModalGigiKananBaruBawah6">6</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruBawah5" style="width:40px; float:right;" data-toggle="modal" href="#ModalGigiKananBaruBawah5">V</button></td>
                     <td colspan="6" align="center">Rahang Bawah</td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruBawah5" style="width:40px" data-toggle="modal" href="#ModalGigiKiriBaruBawah5">V</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruBawah6" style="width:40px; visibility:hidden;" data-toggle="modal" href="#ModalGigiKiriBaruBawah6">6</button></td>
                 </tr>
                 <tr>
                     <td></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruBawah4" style="width:40px; float:right;" data-toggle="modal" href="#ModalGigiKananBaruBawah4">IV</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruBawah3" style="width:40px" data-toggle="modal" href="#ModalGigiKananBaruBawah3">III</button></td>
                     <td></td>
                     <td style="border-right:1px solid #333"></td>
                     <td></td>
                     <td></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruBawah3" style="width:40px" data-toggle="modal" href="#ModalGigiKiriBaruBawah3">III</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruBawah4" style="width:40px" data-toggle="modal" href="#ModalGigiKiriBaruBawah4">IV</button></td>
                     <td></td>
                 </tr>
                 <tr>
                     <td></td>
                     <td></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruBawah2" style="width:40px" data-toggle="modal" href="#ModalGigiKananBaruBawah2">II</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKananBaruBawah1" style="width:40px" data-toggle="modal" href="#ModalGigiKananBaruBawah1">I</button></td>
                     <td width="6px" style="border-right:1px solid #333"></td>
                     <td width="6px"></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruBawah1" style="width:40px" data-toggle="modal" href="#ModalGigiKiriBaruBawah1">I</button></td>
                     <td><button type="button" class="btn btn-default" id="btnGigiKiriBaruBawah2" style="width:40px" data-toggle="modal" href="#ModalGigiKiriBaruBawah2">II</button></td>
                     <td></td>
                     <td></td>
                 </tr>
             </table>
             </div>
         </div>
     </div>
 </div>

<!-- Mulai Modals Gigi -->

 <!-- Modals Gigi Kiri Baru Atas 1-->
 <div id="ModalGigiKiriBaruAtas1" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">

     <div class="form-group modal-header bg-blue-sharp">
       <div class="row md-modal-header">
         <div class="form-group" id="susu_header_kiri_baru_atas_1">
           <div class="modal-header bg-green col-md-4">
             <table align="center" border="0">
                 <tr>
                     <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">I</span></td>
                 </tr>
             </table>
           </div>
           <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
             <h4 class="modal-title"><center>Gigi Kiri Atas I</center></h4>
           </div>
         </div>
         <div class="form-group collapse" id="permanen_header_kiri_baru_atas_1">
           <div class="modal-header bg-green col-md-4">
             <table align="center" border="0">
                 <tr>
                     <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">1</span></td>
                 </tr>
             </table>
           </div>
           <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
             <h4 class="modal-title"><center>Gigi Kiri Atas 1</center></h4>
           </div>
         </div>
       </div>
     </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRA1" checked name="radio_GRA1" class="md-radiobtn">
                         <label for="C1_GRA1">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRA1" name="radio_GRA1" class="md-radiobtn">
                         <label for="C2_GRA1">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>
         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kiri_baru_atas_1">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA1_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GRA1_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA1_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GRA1_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA1_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRA1_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA1_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRA1_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA1_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRA1_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA1_P6" class="md-check">
                       <label for="GRA1_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
                </div>
              </div>
              <div class="form-group collapse" id="permanen_body_kiri_baru_atas_1">
                <div class="row md-checkbox-inline">
                    <div class="col-md-5 md-checkbox">
                        <input type="checkbox" id="GRA1_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                        <label for="GRA1_P1_P">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Pulpitis </label>
                    </div>
                    <div class="col-md-5 md-checkbox">
                        <input type="checkbox" id="GRA1_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                        <label for="GRA1_P2_P">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Periodontitis </label>
                    </div>
                </div>
                <div class="row md-checkbox-inline">
                    <div class="col-md-5 md-checkbox">
                        <input type="checkbox" id="GRA1_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                        <label for="GRA1_P3_P">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Gingivitis </label>
                    </div>
                    <div class="col-md-5 md-checkbox">
                        <input type="checkbox" id="GRA1_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                        <label for="GRA1_P4_P">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Impacted Teeth </label>
                    </div>
                </div>
                <div class="row md-checkbox-inline">
                    <div class="col-md-5 md-checkbox">
                        <input type="checkbox" id="GRA1_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                        <label for="GRA1_P5_P">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Abses </label>
                    </div>
                    <div class="col-md-5 md-checkbox">
                        <input type="checkbox" id="GRA1_P6_P" class="md-check">
                        <label for="GRA1_P6_P">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Lain - lain </label>
                    </div>
                 </div>
               </div>
         </div>
         <div class="form-group collapse" id="Col_GRA1">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRA1_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRA1" onclick="javascript: BatalKiriAtas1();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRA1" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Atas 2-->
 <div id="ModalGigiKiriBaruAtas2" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kiri_baru_atas_2">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">II</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Atas II</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kiri_baru_atas_2">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">2</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Atas 2</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRA2" checked name="radio_GRA2" class="md-radiobtn">
                         <label for="C1_GRA2">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRA2" name="radio_GRA2" class="md-radiobtn">
                         <label for="C2_GRA2">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>
         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kiri_baru_atas_2">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GRA2_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GRA2_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRA2_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRA2_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRA2_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P6" class="md-check">
                       <label for="GRA2_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kiri_baru_atas_2">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRA2_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRA2_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GRA2_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GRA2_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRA2_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA2_P6_P" class="md-check">
                       <label for="GRA2_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRA2">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRA2_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRA2" onclick="javascript: BatalKiriAtas2();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRA2" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Atas 3-->
 <div id="ModalGigiKiriBaruAtas3" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kiri_baru_atas_3">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">III</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Atas III</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kiri_baru_atas_3">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">3</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Atas 3</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRA3" checked name="radio_GRA3" class="md-radiobtn">
                         <label for="C1_GRA3">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRA3" name="radio_GRA3" class="md-radiobtn">
                         <label for="C2_GRA3">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>
         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kiri_baru_atas_3">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA3_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GRA3_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA3_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GRA3_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA3_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRA3_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA3_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRA3_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA3_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRA3_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA3_P6" class="md-check">
                       <label for="GRA3_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
           </div>
           <div class="form-group collapse" id="permanen_body_kiri_baru_atas_3">
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA3_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GRA3_P1_P">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA3_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GRA3_P2_P">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA3_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GRA3_P3_P">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA3_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                     <label for="GRA3_P4_P">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA3_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GRA3_P5_P">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA3_P6_P" class="md-check">
                     <label for="GRA3_P6_P">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
           </div>
         </div>

         <div class="form-group collapse" id="Col_GRA3">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRA3_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRA3" onclick="javascript: BatalKiriAtas3();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRA3" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Atas 4-->
 <div id="ModalGigiKiriBaruAtas4" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kiri_baru_atas_4">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">IV</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Atas IV</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kiri_baru_atas_4">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">4</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Atas 4</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRA4" checked name="radio_GRA4" class="md-radiobtn">
                         <label for="C1_GRA4">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRA4" name="radio_GRA4" class="md-radiobtn">
                         <label for="C2_GRA4">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
              <div class="form-group" id="susu_body_kiri_baru_atas_4">
                 <div class="row md-checkbox-inline">
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                         <label for="GRA4_P1">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Persistensi </label>
                     </div>
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                         <label for="GRA4_P2">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Erupsi Teeth </label>
                     </div>
                 </div>
                 <div class="row md-checkbox-inline">
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                         <label for="GRA4_P3">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Pulpitis </label>
                     </div>
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                         <label for="GRA4_P4">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Periodontitis </label>
                     </div>
                 </div>
                 <div class="row md-checkbox-inline">
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P5" name="checkboxes1[]" value="Abses" class="md-check">
                         <label for="GRA4_P5">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Abses </label>
                     </div>
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P6" class="md-check">
                         <label for="GRA4_P6">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Lain - lain </label>
                     </div>
                 </div>
              </div>
              <div class="form-group collapse" id="permanen_body_kiri_baru_atas_4">
                 <div class="row md-checkbox-inline">
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                         <label for="GRA4_P1_P">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Pulpitis </label>
                     </div>
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                         <label for="GRA4_P2_P">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Periodontitis </label>
                     </div>
                 </div>
                 <div class="row md-checkbox-inline">
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                         <label for="GRA4_P3_P">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gingivitis </label>
                     </div>
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                         <label for="GRA4_P4_P">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Impacted Teeth </label>
                     </div>
                 </div>
                 <div class="row md-checkbox-inline">
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                         <label for="GRA4_P5_P">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Abses </label>
                     </div>
                     <div class="col-md-5 md-checkbox">
                         <input type="checkbox" id="GRA4_P6_P" class="md-check">
                         <label for="GRA4_P6_P">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Lain - lain </label>
                     </div>
                 </div>
              </div>
         </div>

         <div class="form-group collapse" id="Col_GRA4">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRA4_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRA4" onclick="javascript: BatalKiriAtas4();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRA4" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Atas 5-->
 <div id="ModalGigiKiriBaruAtas5" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kiri_baru_atas_5">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">V</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Atas V</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kiri_baru_atas_5">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">5</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Atas 5</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRA5" checked name="radio_GRA5" class="md-radiobtn">
                         <label for="C1_GRA5">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRA5" name="radio_GRA5" class="md-radiobtn">
                         <label for="C2_GRA5">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>
         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kiri_baru_atas_5">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GRA5_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GRA5_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRA5_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRA5_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRA5_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P6" class="md-check">
                       <label for="GRA5_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kiri_baru_atas_5">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRA5_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRA5_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GRA5_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GRA5_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRA5_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRA5_P6_P" class="md-check">
                       <label for="GRA5_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRA5">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRA5_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRA5" onclick="javascript: BatalKiriAtas5();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRA5" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Atas 6-->
 <div id="ModalGigiKiriBaruAtas6" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">6</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Atas 6</center></h4>
         </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRA6" checked name="radio_GRA6" class="md-radiobtn">
                         <label for="C1_GRA6">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRA6" name="radio_GRA6" class="md-radiobtn">
                         <label for="C2_GRA6">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA6_P1" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GRA6_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA6_P2" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GRA6_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA6_P3" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GRA6_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA6_P4" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                     <label for="GRA6_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA6_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GRA6_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA6_P6" class="md-check">
                     <label for="GRA6_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRA6">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRA6_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRA6" onclick="javascript: BatalKiriAtas6();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRA6" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Atas 7-->
 <div id="ModalGigiKiriBaruAtas7" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">7</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Atas 7</center></h4>
         </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRA7" checked name="radio_GRA7" class="md-radiobtn">
                         <label for="C1_GRA7">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRA7" name="radio_GRA7" class="md-radiobtn">
                         <label for="C2_GRA7">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA7_P1" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GRA7_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA7_P2" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GRA7_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA7_P3" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GRA7_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA7_P4" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                     <label for="GRA7_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA7_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GRA7_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA7_P6" class="md-check">
                     <label for="GRA7_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRA7">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRA7_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRA7" onclick="javascript: BatalKiriAtas7();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRA7" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Atas 8-->
 <div id="ModalGigiKiriBaruAtas8" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">8</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Atas 8</center></h4>
         </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRA8" checked name="radio_GRA8" class="md-radiobtn">
                         <label for="C1_GRA8">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRA8" name="radio_GRA8" class="md-radiobtn">
                         <label for="C2_GRA8">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA8_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                     <label for="GRA8_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Persistensi </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA8_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                     <label for="GRA8_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Erupsi Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA8_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GRA8_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA8_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GRA8_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA8_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GRA8_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRA8_P6" class="md-check">
                     <label for="GRA8_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRA8">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRA8_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRA8" onclick="javascript: BatalKiriAtas8();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRA8" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Bawah 1-->
 <div id="ModalGigiKiriBaruBawah1" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kiri_baru_bawah_1">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">II</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah II</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kiri_baru_bawah_1">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">1</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah 1</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRB1" checked name="radio_GRB1" class="md-radiobtn">
                         <label for="C1_GRB1">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRB1" name="radio_GRB1" class="md-radiobtn">
                         <label for="C2_GRB1">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kiri_baru_bawah_1">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GRB1_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GRB1_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRB1_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRB1_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRB1_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P6" class="md-check">
                       <label for="GRB1_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kiri_baru_bawah_1">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRB1_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRB1_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GRB1_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GRB1_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRB1_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB1_P6_P" class="md-check">
                       <label for="GRB1_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRB1">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRB1_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRB1" onclick="javascript: BatalKiriBawah1();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRB1" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Bawah 2-->
 <div id="ModalGigiKiriBaruBawah2" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kiri_baru_bawah_2">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">II</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah II</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kiri_baru_bawah_2">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">2</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah 2</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRB2" checked name="radio_GRB2" class="md-radiobtn">
                         <label for="C1_GRB2">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRB2" name="radio_GRB2" class="md-radiobtn">
                         <label for="C2_GRB2">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kiri_baru_bawah_2">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GRB2_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GRB2_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRB2_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRB2_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRB2_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P6" class="md-check">
                       <label for="GRB2_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kiri_baru_bawah_2">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRB2_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRB2_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GRB2_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GRB2_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRB2_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB2_P6_P" class="md-check">
                       <label for="GRB2_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRB2">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRB2_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRB2" onclick="javascript: BatalKiriBawah2();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRB2" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Bawah 3-->
 <div id="ModalGigiKiriBaruBawah3" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kiri_baru_bawah_3">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">III</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah III</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kiri_baru_bawah_3">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">3</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah 3</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRB3" checked name="radio_GRB3" class="md-radiobtn">
                         <label for="C1_GRB3">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRB3" name="radio_GRB3" class="md-radiobtn">
                         <label for="C2_GRB3">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kiri_baru_bawah_3">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GRB3_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GRB3_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRB3_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRB3_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRB3_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P6" class="md-check">
                       <label for="GRB3_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kiri_baru_bawah_3">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRB3_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRB3_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GRB3_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GRB3_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRB3_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB3_P6_P" class="md-check">
                       <label for="GRB3_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRB3">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRB3_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRB3" onclick="javascript: BatalKiriBawah3();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRB3" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Bawah 4-->
 <div id="ModalGigiKiriBaruBawah4" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kiri_baru_bawah_4">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">IV</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah IV</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kiri_baru_bawah_4">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">4</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah 4</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRB4" checked name="radio_GRB4" class="md-radiobtn">
                         <label for="C1_GRB4">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRB4" name="radio_GRB4" class="md-radiobtn">
                         <label for="C2_GRB4">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kiri_baru_bawah_4">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GRB4_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GRB4_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRB4_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRB4_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRB4_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P6" class="md-check">
                       <label for="GRB4_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kiri_baru_bawah_4">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRB4_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRB4_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GRB4_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GRB4_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRB4_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB4_P6_P" class="md-check">
                       <label for="GRB4_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRB4">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRB4_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRB4" onclick="javascript: BatalKiriBawah4();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRB4" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Bawah 5-->
 <div id="ModalGigiKiriBaruBawah5" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kiri_baru_bawah_5">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">V</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah V</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kiri_baru_bawah_5">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">5</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah 5</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRB5" checked name="radio_GRB5" class="md-radiobtn">
                         <label for="C1_GRB5">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRB5" name="radio_GRB5" class="md-radiobtn">
                         <label for="C2_GRB5">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kiri_baru_bawah_5">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GRB5_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GRB5_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRB5_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRB5_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRB5_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P6" class="md-check">
                       <label for="GRB5_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kiri_baru_bawah_5">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GRB5_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GRB5_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GRB5_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GRB5_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GRB5_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GRB5_P6_P" class="md-check">
                       <label for="GRB5_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRB5">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRB5_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRB5" onclick="javascript: BatalKiriBawah5();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRB5" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Bawah 6-->
 <div id="ModalGigiKiriBaruBawah6" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">6</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah 6</center></h4>
         </div>
       </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRB6" checked name="radio_GRB6" class="md-radiobtn">
                         <label for="C1_GRB6">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRB6" name="radio_GRB6" class="md-radiobtn">
                         <label for="C2_GRB6">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB6_P1" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GRB6_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB6_P2" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GRB6_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB6_P3" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GRB6_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB6_P4" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                     <label for="GRB6_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB6_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GRB6_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB6_P6" class="md-check">
                     <label for="GRB6_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRB6">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRB6_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRB6" onclick="javascript: BatalKiriBawah6();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRB6" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Bawah 7-->
 <div id="ModalGigiKiriBaruBawah7" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">7</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah 7</center></h4>
         </div>
       </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRB7" checked name="radio_GRB7" class="md-radiobtn">
                         <label for="C1_GRB7">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRB7" name="radio_GRB7" class="md-radiobtn">
                         <label for="C2_GRB7">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB7_P1" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GRB7_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB7_P2" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GRB7_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB7_P3" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GRB7_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB7_P4" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                     <label for="GRB7_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB7_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GRB7_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB7_P6" class="md-check">
                     <label for="GRB7_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRB7">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRB7_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRB7" onclick="javascript: BatalKiriBawah7();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRB7" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kiri Baru Bawah 8-->
 <div id="ModalGigiKiriBaruBawah8" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-left:2px solid #333;" ><span style="font-size:20px">8</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kiri Bawah 8</center></h4>
         </div>
       </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GRB8" checked name="radio_GRB8" class="md-radiobtn">
                         <label for="C1_GRB8">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GRB8" name="radio_GRB8" class="md-radiobtn">
                         <label for="C2_GRB8">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB8_P1" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GRB8_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB8_P2" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GRB8_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB8_P3" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GRB8_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB8_P4" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                     <label for="GRB8_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB8_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GRB8_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GRB8_P6" class="md-check">
                     <label for="GRB8_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GRB8">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GRB8_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GRB8" onclick="javascript: BatalKiriBawah8();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GRB8" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Bawah 1-->
 <div id="ModalGigiKananBaruBawah1" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kanan_baru_bawah_1">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">I</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah I</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kanan_baru_bawah_1">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">1</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah 1</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLB1" checked name="radio_GLB1" class="md-radiobtn">
                         <label for="C1_GLB1">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLB1" name="radio_GLB1" class="md-radiobtn">
                         <label for="C2_GLB1">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kanan_baru_bawah_1">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GLB1_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GLB1_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLB1_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLB1_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLB1_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P6" class="md-check">
                       <label for="GLB1_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kanan_baru_bawah_1">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLB1_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLB1_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GLB1_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GLB1_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLB1_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB1_P6_P" class="md-check">
                       <label for="GLB1_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLB1">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLB1_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLB1" onclick="javascript: BatalKananBawah1();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLB1" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Bawah 2-->
 <div id="ModalGigiKananBaruBawah2" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kanan_baru_bawah_2">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">II</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah II</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kanan_baru_bawah_2">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">2</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah 2</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLB2" checked name="radio_GLB2" class="md-radiobtn">
                         <label for="C1_GLB2">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLB2" name="radio_GLB2" class="md-radiobtn">
                         <label for="C2_GLB2">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kanan_baru_bawah_2">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GLB2_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GLB2_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLB2_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLB2_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLB2_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P6" class="md-check">
                       <label for="GLB2_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kanan_baru_bawah_2">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLB2_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLB2_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GLB2_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GLB2_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLB2_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB2_P6_P" class="md-check">
                       <label for="GLB2_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLB2">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLB2_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLB2" onclick="javascript: BatalKananBawah2();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLB2" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Bawah 3-->
 <div id="ModalGigiKananBaruBawah3" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kanan_baru_bawah_3">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">III</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah III</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kanan_baru_bawah_3">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">3</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah 3</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLB3" checked name="radio_GLB3" class="md-radiobtn">
                         <label for="C1_GLB3">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLB3" name="radio_GLB3" class="md-radiobtn">
                         <label for="C2_GLB3">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kanan_baru_bawah_3">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GLB3_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GLB3_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLB3_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLB3_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLB3_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P6" class="md-check">
                       <label for="GLB3_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kanan_baru_bawah_3">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLB3_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLB3_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GLB3_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GLB3_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLB3_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB3_P6_P" class="md-check">
                       <label for="GLB3_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLB3">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLB3_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLB3" onclick="javascript: BatalKananBawah3();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLB3" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Bawah 4-->
 <div id="ModalGigiKananBaruBawah4" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kanan_baru_bawah_4">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">IV</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah IV</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kanan_baru_bawah_4">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">4</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah 4</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLB4" checked name="radio_GLB4" class="md-radiobtn">
                         <label for="C1_GLB4">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLB4" name="radio_GLB4" class="md-radiobtn">
                         <label for="C2_GLB4">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kanan_baru_bawah_4">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GLB4_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GLB4_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLB4_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLB4_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLB4_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P6" class="md-check">
                       <label for="GLB4_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kanan_baru_bawah_4">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLB4_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLB4_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GLB4_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GLB4_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLB4_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB4_P6_P" class="md-check">
                       <label for="GLB4_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLB4">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLB4_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLB4" onclick="javascript: BatalKananBawah4();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLB4" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Bawah 5-->
 <div id="ModalGigiKananBaruBawah5" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kanan_baru_bawah_5">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">V</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah V</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kanan_baru_bawah_5">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">5</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah 5</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLB5" checked name="radio_GLB5" class="md-radiobtn">
                         <label for="C1_GLB5">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLB5" name="radio_GLB5" class="md-radiobtn">
                         <label for="C2_GLB5">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kanan_baru_bawah_5">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GLB5_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GLB5_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLB5_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLB5_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLB5_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P6" class="md-check">
                       <label for="GLB5_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kanan_baru_bawah_5">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLB5_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLB5_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GLB5_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GLB5_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLB5_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLB5_P6_P" class="md-check">
                       <label for="GLB5_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLB5">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLB5_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLB5" onclick="javascript: BatalKananBawah5();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLB5" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Bawah 6-->
 <div id="ModalGigiKananBaruBawah6" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">6</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah 6</center></h4>
         </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLB6" checked name="radio_GLB6" class="md-radiobtn">
                         <label for="C1_GLB6">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLB6" name="radio_GLB6" class="md-radiobtn">
                         <label for="C2_GLB6">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB6_P1" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GLB6_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB6_P2" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GLB6_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB6_P3" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GLB6_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB6_P4" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                     <label for="GLB6_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB6_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GLB6_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB6_P6" class="md-check">
                     <label for="GLB6_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLB6">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLB6_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLB6" onclick="javascript: BatalKananBawah6();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLB6" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Bawah 7-->
 <div id="ModalGigiKananBaruBawah7" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">7</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah 7</center></h4>
         </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLB7" checked name="radio_GLB7" class="md-radiobtn">
                         <label for="C1_GLB7">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLB7" name="radio_GLB7" class="md-radiobtn">
                         <label for="C2_GLB7">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB7_P1" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GLB7_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB7_P2" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GLB7_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB7_P3" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GLB7_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB7_P4" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                     <label for="GLB7_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB7_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GLB7_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB7_P6" class="md-check">
                     <label for="GLB7_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLB7">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLB7_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLB7" onclick="javascript: BatalKananBawah7();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLB7" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Bawah 8-->
 <div id="ModalGigiKananBaruBawah8" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-top:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">8</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Bawah 8</center></h4>
         </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLB8" checked name="radio_GLB8" class="md-radiobtn">
                         <label for="C1_GLB8">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLB8" name="radio_GLB8" class="md-radiobtn">
                         <label for="C2_GLB8">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB8_P1" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GLB8_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB8_P2" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GLB8_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB8_P3" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GLB8_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB8_P4" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                     <label for="GLB8_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB8_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GLB8_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLB8_P6" class="md-check">
                     <label for="GLB8_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLB8">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLB8_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLB8" onclick="javascript: BatalKananBawah8();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLB8" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Atas 1-->
 <div id="ModalGigiKananBaruAtas1" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kanan_baru_atas_1">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">I</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas I</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kanan_baru_atas_1">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">1</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas 1</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLA1" checked name="radio_GLA1" class="md-radiobtn">
                         <label for="C1_GLA1">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLA1" name="radio_GLA1" class="md-radiobtn">
                         <label for="C2_GLA1">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kanan_baru_atas_1">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GLA1_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GLA1_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLA1_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLA1_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLA1_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P6" class="md-check">
                       <label for="GLA1_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kanan_baru_atas_1">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLA1_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLA1_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GLA1_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GLA1_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLA1_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA1_P6_P" class="md-check">
                       <label for="GLA1_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLA1">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLA1_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLA1" onclick="javascript: BatalKananAtas1();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLA1" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Atas 2-->
 <div id="ModalGigiKananBaruAtas2" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kanan_baru_atas_2">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">II</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas II</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kanan_baru_atas_2">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">2</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas 2</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLA2" checked name="radio_GLA2" class="md-radiobtn">
                         <label for="C1_GLA2">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLA2" name="radio_GLA2" class="md-radiobtn">
                         <label for="C2_GLA2">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kanan_baru_atas_2">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GLA2_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GLA2_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLA2_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLA2_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLA2_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P6" class="md-check">
                       <label for="GLA2_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kanan_baru_atas_2">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLA2_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLA2_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GLA2_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GLA2_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLA2_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA2_P6_P" class="md-check">
                       <label for="GLA2_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLA2">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLA2_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLA2" onclick="javascript: BatalKananAtas2();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLA2" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Atas 3-->
 <div id="ModalGigiKananBaruAtas3" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kanan_baru_atas_3">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">III</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas III</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kanan_baru_atas_3">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">3</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas 3</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLA3" checked name="radio_GLA3" class="md-radiobtn">
                         <label for="C1_GLA3">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLA3" name="radio_GLA3" class="md-radiobtn">
                         <label for="C2_GLA3">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kanan_baru_atas_3">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GLA3_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GLA3_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLA3_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLA3_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLA3_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P6" class="md-check">
                       <label for="GLA3_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kanan_baru_atas_3">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLA3_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLA3_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GLA3_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GLA3_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLA3_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA3_P6_P" class="md-check">
                       <label for="GLA3_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLA3">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLA3_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLA3" onclick="javascript: BatalKananAtas3();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLA3" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Atas 4-->
 <div id="ModalGigiKananBaruAtas4" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kanan_baru_atas_4">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">IV</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas IV</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kanan_baru_atas_4">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">4</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas 4</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLA4" checked name="radio_GLA4" class="md-radiobtn">
                         <label for="C1_GLA4">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLA4" name="radio_GLA4" class="md-radiobtn">
                         <label for="C2_GLA4">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kanan_baru_atas_4">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GLA4_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GLA4_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLA4_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLA4_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLA4_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P6" class="md-check">
                       <label for="GLA4_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kanan_baru_atas_4">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLA4_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLA4_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GLA4_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GLA4_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLA4_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA4_P6_P" class="md-check">
                       <label for="GLA4_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLA4">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLA4_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLA4" onclick="javascript: BatalKananAtas4();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLA4" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Atas 5-->
 <div id="ModalGigiKananBaruAtas5" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
       <div class="form-group" id="susu_header_kanan_baru_atas_5">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">V</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas V</center></h4>
         </div>
       </div>
       <div class="form-group collapse" id="permanen_header_kanan_baru_atas_5">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">5</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas 5</center></h4>
         </div>
       </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLA5" checked name="radio_GLA5" class="md-radiobtn">
                         <label for="C1_GLA5">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLA5" name="radio_GLA5" class="md-radiobtn">
                         <label for="C2_GLA5">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="form-group" id="susu_body_kanan_baru_atas_5">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P1" name="checkboxes1[]" value="Persistensi" class="md-check">
                       <label for="GLA5_P1">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Persistensi </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P2" name="checkboxes1[]" value="Erupsi Teeth" class="md-check">
                       <label for="GLA5_P2">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Erupsi Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P3" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLA5_P3">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P4" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLA5_P4">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P5" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLA5_P5">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P6" class="md-check">
                       <label for="GLA5_P6">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
             <div class="form-group collapse" id="permanen_body_kanan_baru_atas_5">
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P1_P" name="checkboxes1[]" value="Pulpitis" class="md-check">
                       <label for="GLA5_P1_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Pulpitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P2_P" name="checkboxes1[]" value="Periodontitis" class="md-check">
                       <label for="GLA5_P2_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Periodontitis </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P3_P" name="checkboxes1[]" value="Gingivitis" class="md-check">
                       <label for="GLA5_P3_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Gingivitis </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P4_P" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                       <label for="GLA5_P4_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Impacted Teeth </label>
                   </div>
               </div>
               <div class="row md-checkbox-inline">
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P5_P" name="checkboxes1[]" value="Abses" class="md-check">
                       <label for="GLA5_P5_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Abses </label>
                   </div>
                   <div class="col-md-5 md-checkbox">
                       <input type="checkbox" id="GLA5_P6_P" class="md-check">
                       <label for="GLA5_P6_P">
                           <span></span>
                           <span class="check"></span>
                           <span class="box"></span> Lain - lain </label>
                   </div>
               </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLA5">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLA5_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLA5" onclick="javascript: BatalKananAtas5();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLA5" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Atas 6-->
 <div id="ModalGigiKananBaruAtas6" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">6</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas 6</center></h4>
         </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLA6" checked name="radio_GLA6" class="md-radiobtn">
                         <label for="C1_GLA6">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLA6" name="radio_GLA6" class="md-radiobtn">
                         <label for="C2_GLA6">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA6_P1" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GLA6_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA6_P2" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GLA6_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA6_P3" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GLA6_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA6_P4" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                     <label for="GLA6_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA6_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GLA6_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA6_P6" class="md-check">
                     <label for="GLA6_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLA6">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLA6_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLA6" onclick="javascript: BatalKananAtas6();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLA6" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Atas 7-->
 <div id="ModalGigiKananBaruAtas7" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">7</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas 7</center></h4>
         </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLA7" checked name="radio_GLA7" class="md-radiobtn">
                         <label for="C1_GLA7">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLA7" name="radio_GLA7" class="md-radiobtn">
                         <label for="C2_GLA7">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA7_P1" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GLA7_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA7_P2" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GLA7_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA7_P3" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GLA7_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA7_P4" name="checkboxes1[]" value="Impacted teeth" class="md-check">
                     <label for="GLA7_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA7_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GLA7_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA7_P6" class="md-check">
                     <label for="GLA7_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLA7">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLA7_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLA7" onclick="javascript: BatalKananAtas7();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLA7" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

 <!-- Modals Gigi Kanan Baru Atas 8-->
 <div id="ModalGigiKananBaruAtas8" class="modal fade" tabindex="-1" data-backdrop="static" data-width="25%" data-keyboard="false" style="width:50%">
   <div class="form-group modal-header bg-blue-sharp">
     <div class="row md-modal-header">
         <div class="modal-header bg-green col-md-4">
           <table align="center" border="0">
               <tr>
                   <td align="center" style="width:35px; height:35px; border-bottom:2px solid #333; border-right:2px solid #333;" ><span style="font-size:20px">8</span></td>
               </tr>
           </table>
         </div>
         <div class="modal-header bg-blue-sharp bg-font-blue-sharp col-md-8">
           <h4 class="modal-title"><center>Gigi Kanan Atas 8</center></h4>
         </div>
     </div>
   </div>
     <div class="modal-body">
         <center>
         <div class="form-group">
             <div class="input-group">
                 <div class="md-radio-inline">
                     <div class="md-radio">
                         <input type="radio" id="C1_GLA8" checked name="radio_GLA8" class="md-radiobtn">
                         <label for="C1_GLA8">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Ada </label>
                     </div>
                     <div class="md-radio">
                         <input type="radio" id="C2_GLA8" name="radio_GLA8" class="md-radiobtn">
                         <label for="C2_GLA8">
                             <span></span>
                             <span class="check"></span>
                             <span class="box"></span> Gigi Tidak Ada </label>
                     </div>
                 </div>
             </div>
         </div>
         </center>

         <div class="form-group form-md-checkboxes">
             <label>Penyakit Gigi</label>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA8_P1" name="checkboxes1[]" value="Pulpitis" class="md-check">
                     <label for="GLA8_P1">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Pulpitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA8_P2" name="checkboxes1[]" value="Periodontitis" class="md-check">
                     <label for="GLA8_P2">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Periodontitis </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA8_P3" name="checkboxes1[]" value="Gingivitis" class="md-check">
                     <label for="GLA8_P3">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Gingivitis </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA8_P4" name="checkboxes1[]" value="Impacted Teeth" class="md-check">
                     <label for="GLA8_P4">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Impacted Teeth </label>
                 </div>
             </div>
             <div class="row md-checkbox-inline">
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA8_P5" name="checkboxes1[]" value="Abses" class="md-check">
                     <label for="GLA8_P5">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Abses </label>
                 </div>
                 <div class="col-md-5 md-checkbox">
                     <input type="checkbox" id="GLA8_P6" class="md-check">
                     <label for="GLA8_P6">
                         <span></span>
                         <span class="check"></span>
                         <span class="box"></span> Lain - lain </label>
                 </div>
             </div>
         </div>

         <div class="form-group collapse" id="Col_GLA8">
             <div class="form-group form-md-line-input has-success form-md-floating-label">
                 <div class="input-icon right" style="display: block; margin-top: 0em; margin-bottom: -1em;">
                     <input type="text" id="GLA8_P7" class="form-control">
                     <label for="form_control">Keluhan Lain</label>
                     <span class="help-block">Masukkan Penyakit</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-secondary-outline" id="Rbtn_GLA8" onclick="javascript: BatalKananAtas8();" data-dismiss="modal">Batal</button>
         <button type="button" id="Obtn_GLA8" data-dismiss="modal" class="btn green">Oke</button>
     </div>
 </div>

<!-- Selesai Modals Gigi -->
