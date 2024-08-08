
  function Load(url="json.php"){
    console.log("Load DataTable");
    $.getJSON(url, function(data) {
      $.each(data, function(index, item) {
        const row = '<tr>' +
                      '<td>' + item.first_name+ '</td>' +
                      '<td>' + item.last_name + '</td>' +
                      '<td>' + item.Phone + '</td>' +
                      '<td>' + item.Email+ '</td>' +
                      '<td>  <i  class="bi bi-pencil-square text-primary" Title="Edit" name="edt" data-id= ' + item.id + 
                              ' data-first-name ="'+item.first_name+'"  data-last-name ="'+item.last_name+'" data-phone ="'+item.Phone+'" data-email ="'+item.Email+'"  onclick="FormEdit(this)"></i> - <i class="bi bi-x-square text-danger" title="Delete" name="del" data-id ="'+item.id+'" onclick="FormDelete()"></i> </td>' +
                      '</tr>';
          //console.log(row);
          $('tbody').append(row);         
              
        });
        $('#data').DataTable();
      }); console.log("Done");
  };

    $(document).ready(function(){         
        const url = 'json.php';   
        $("#modal_data").modal('hide');
        Load(url);
      });

  function FormEdit(){
    console.log("Show Edit Form");
    //Edit   
    $('[name="edt"]').on('click', function(){
      let item = $(this).data();
      console.log(item);
      $("#modal_data #id").val(item.id);      
      $("#modal_data #name").val(item.firstName); 
      $("#modal_data #email").val(item.email);       
      $("#modal_data #lastName").val(item.last_name);
          
    }); 
     
     $("#modal_data").modal('show');   
  };    
  
      $(document).ready(function(){        
       // FormEdit();    
      });
      
  function  FormDelete(params) {
    console.log("Show delete form");
        //delete
        $("[name='del']").on("click",function(){
          console.log("Delete");
          $("#modalDelete").modal("show");
        });
  };
      $(document).ready(function () {
        FormDelete();
      });   

        
     

