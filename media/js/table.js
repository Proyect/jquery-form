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
                        '<td>' + item.id + '</td>' +
                        '</tr>';
            console.log(row);
            $('tbody').append(row);         
                
          });
          $('#data').DataTable();
        });
        
      })
});