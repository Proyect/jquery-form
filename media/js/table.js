$(document).ready(function() {
    $(document).ready(function(){         
        const url = 'json.php'; 
        $.getJSON(url, function(data) {
        $.each(data, function(index, item) {
          const row = '<tr>' +
                        '<td>' + item.first_name+ '</td>' +
                        '<td>' + item.last_name + '</td>' +
                        '<td>' + item.Phone + '</td>' +
                        '<td>' + item.Email+ '</td>' +
                        '<td>  <img src="./media/img/pencil.svg" Title="Edit" name="edt">' 
                        + item.id + ' <i class="bi bi-x-square" name="Del"></i> </td>' +
                        '</tr>';
            console.log(row);
            $('tbody').append(row);         
                
          });
          $('#data').DataTable();
        });
        
      })
});

$("#edit")