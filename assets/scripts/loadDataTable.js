$(function () 
{
    appendComboBoxAccountCategory();
});

function appendComboBoxAccountCategory()
{
    $('#dataTablePoli').find('option').remove().end(); 
    $.getJSON("dashboard/getDataAllPoli",  function(result) 
    {
        $.map(result, function(item) 
        {
            $("#dataTablePoli").append(  $('<option>').val(item.KODEUNIT).text(item.NAMAUNIT) );   
        })
    });
}