$(document).ready(function(){

  if(document.getElementById('EMR_pr_RAWIN_MENUMU1').value == "DONE")
  {
    document.getElementById('EMR_pr_RAWIN_P1_Halaman').classList.add('collapse');
    if(document.getElementById('EMR_pr_RAWIN_MENUMU2').value == "DONE")
    {
      document.getElementById('EMR_pr_RAWIN_P2_Halaman').classList.add('collapse');
      if(document.getElementById('EMR_pr_RAWIN_MENUMU3').value == "DONE")
      {
        document.getElementById('EMR_pr_RAWIN_P3_Halaman').classList.add('collapse');
        if(document.getElementById('EMR_pr_RAWIN_MENUMU4').value == "DONE")
        {
          document.getElementById('EMR_pr_RAWIN_P4_Halaman').classList.add('collapse');
          if(document.getElementById('EMR_pr_RAWIN_MENUMU5').value == "DONE")
          {
            document.getElementById('EMR_pr_RAWIN_P5_Halaman').classList.add('collapse');
            if(document.getElementById('EMR_pr_RAWIN_MENUMU6').value == "DONE")
            {
              document.getElementById('EMR_pr_RAWIN_P6_Halaman').classList.add('collapse');
            }
            else
            {
              document.getElementById('EMR_pr_RAWIN_P6_Halaman').classList.remove('collapse');
              document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P6';
              document.getElementById('EMR_pr_RAWIN_P6_btnmenu').classList.remove('green');
              document.getElementById('EMR_pr_RAWIN_P6_btnmenu').classList.add('white');
            }
          }
          else
          {
            document.getElementById('EMR_pr_RAWIN_P5_Halaman').classList.remove('collapse');
            document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P5';
            document.getElementById('EMR_pr_RAWIN_P5_btnmenu').classList.remove('green');
            document.getElementById('EMR_pr_RAWIN_P5_btnmenu').classList.add('white');
          }
        }
        else
        {
          document.getElementById('EMR_pr_RAWIN_P4_Halaman').classList.remove('collapse');
          document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P4';
          document.getElementById('EMR_pr_RAWIN_P4_btnmenu').classList.remove('green');
          document.getElementById('EMR_pr_RAWIN_P4_btnmenu').classList.add('white');
        }
      }
      else
      {
        document.getElementById('EMR_pr_RAWIN_P3_Halaman').classList.remove('collapse');
        document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P3';
        document.getElementById('EMR_pr_RAWIN_P3_btnmenu').classList.remove('green');
        document.getElementById('EMR_pr_RAWIN_P3_btnmenu').classList.add('white');
      }
    }
    else
    {
      document.getElementById('EMR_pr_RAWIN_P2_Halaman').classList.remove('collapse');
      document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P2';
      document.getElementById('EMR_pr_RAWIN_P2_btnmenu').classList.remove('green');
      document.getElementById('EMR_pr_RAWIN_P2_btnmenu').classList.add('white');
    }
  }
  else
  {
    document.getElementById('EMR_pr_RAWIN_P1_Halaman').classList.remove('collapse');
    document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P1';
    document.getElementById('EMR_pr_RAWIN_P1_btnmenu').classList.remove('green');
    document.getElementById('EMR_pr_RAWIN_P1_btnmenu').classList.add('white');
  }
})
//==============================================================================
//================================ START MENU 1 ================================


$('#EMR_pr_RAWIN_P1_btnmenu').click(function() {
  document.getElementById('EMR_pr_RAWIN_P1_btnmenu').disabled = true;
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P1';
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('white');
});

//================================= END MENU 1 =================================
//==============================================================================
//================================ START MENU 2 ================================


$('#EMR_pr_RAWIN_P2_btnmenu').click(function() {
  document.getElementById('EMR_pr_RAWIN_P2_btnmenu').disabled = true;
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P2';
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('white');
});

//================================= END MENU 2 =================================
//==============================================================================
//================================ START MENU 3 ================================

$('#EMR_pr_RAWIN_P3_btnmenu').click(function() {
  document.getElementById('EMR_pr_RAWIN_P3_btnmenu').disabled = true;
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P3';
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('white');
});

//================================= END MENU 3 =================================
//==============================================================================
//================================ START MENU 4 ================================

$('#EMR_pr_RAWIN_P4_btnmenu').click(function() {
  document.getElementById('EMR_pr_RAWIN_P4_btnmenu').disabled = true;
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P4';
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('white');
});

//================================= END MENU 4 =================================
//==============================================================================
//================================ START MENU 5 ================================

$('#EMR_pr_RAWIN_P5_btnmenu').click(function() {
  document.getElementById('EMR_pr_RAWIN_P5_btnmenu').disabled = true;
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P5';
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('white');
});

//================================= END MENU 5 =================================
//==============================================================================
//================================ START MENU 6 ================================

$('#EMR_pr_RAWIN_P6_btnmenu').click(function() {
  document.getElementById('EMR_pr_RAWIN_P6_btnmenu').disabled = true;
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.add('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('white');
  document.getElementById('EMR_pr_RAWIN_statverHal').value = 'P6';
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_Halaman').classList.remove('collapse');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.remove('green');
  document.getElementById('EMR_pr_RAWIN_'+document.getElementById('EMR_pr_RAWIN_statverHal').value+'_btnmenu').classList.add('white');
});

//================================= END MENU 6 =================================
