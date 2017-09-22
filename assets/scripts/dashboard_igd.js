$('#tampil_data_js').on('click', function(){
  init_table_igd_reg();
});

function init_table_igd_reg ()
{
  $('.table-igd_reg').html('');

  var url = 'http://localhost:8080/royal_api/bridging_igd/get_data';
  $.getJSON(url, {tgl: ''},   function(result)
  {
      var no=0;
      var trHTML ='';
      var status = '';
      var button = '';
      trHTML +=
                 '<tr>'
                   + '<th>No Registrasi </th>'
                   + '<th>Form </th>'
                   + '<th>Nama </th>'
                   + '<th>Status Data</th>'
                   + '<th>Aksi</th>'
                 +'</tr>';
      $.map(result, function(item)
      {

        no++;
        button = "<button type='button' class='btn btn-warning btn-sm' ><i class='fa fa-print'></i> Pilih</button></td>";


          trHTML += "<tr><td>" + item.noreg + "</td><td>"
          + item.norm + "</td><td>"
          + item.nama + "</td><td>"
          + status + "</td><td>"
          + button;
      })

      $('.table-igd_reg').append(trHTML);

  });
}
