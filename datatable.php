<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table  Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">	
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href= "./media/css/styles.css" type="text/css" media="screen" /> 
</head>
<body>
<div  class="contaner">
  <div class="text-rigth"> 
    <button type="button" class="btn btn-primary btn-outline-light fw-bold"  data-bs-toggle="modal" 
      data-bs-target="#modal_data">
      <i class="bi bi-plus-circle"></i> Registrer
    </button>
  </div> 

  <h2>Registered Users</h2>
  <table id="data" class="table table-striped w-100">
    <thead>
      <tr>
          <th>Name</th>
          <th>Last Name</th>
          <th>Tel</th>
          <th>Email</th>
          <th>OP</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
          <th>Name</th>
        <th>Last Name</th>
        <th>Tel</th>
        <th>Email</th>
        <th>OP</th>
    </tr>
      </tfoot>
     <tbody>      
    </tbody>
  </table>
  </div>  

  <!-- Modal New and edit-->
<div class="modal fade" id="modal_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <h2>Registration Form</h2>
        <form id="registration-form" class="form">
          @csrf 
          <div class="row">
          <div class="col">
              <label for="name">ID:</label>
              <input type="text" id="id" name="id" class="form-control w50" required>
          </div>  
          <div class="col">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control w50" required>
          </div>
          <div class="col">
            <label for="name">Last Name:</label>
            <input type="text" id="lastName" name="lastName" class="form-control w50" required>
          </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="col">
              <label for="tel">Tel:</label>
              <input type="tel" id="tel" name="tel" class="form-control" required>        
            </div>
          
          </div>
          <hr/>
          <div class="row">
            <div class="col text-center">
              <button  class="btn btn-primary btn-outline-light fw-bold" id="updateData">
              <i class="bi bi-pencil-fill" title="Edit" name="edt"></i> Register
              </button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="send_data">
                <i class="bi bi-x-square"></i></i> Close
              </button> 
            </div>
          </div>      
        </form>
          
      </div>    
    </div>
  </div>
</div>


<!-- Modal Are you Segure?-->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="idAlert">Alert</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are you sure to delete the datas?
      </div>
      <div class="modal-footer">
        <form action="">
          @csrf
          <input type="hidden" name="id" id="id" value="0">
          <button type="button" class="btn btn-danger btn-outline-light">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>  
         </form>      
      </div>
    </div>
  </div>
</div>

<!-- Librería jQuery requerida por los plugins de JavaScript -->  
  	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    
    <!-- Data Tables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script> 
    <script src="./media/js/table.js"></script>
    <script>
      

    </script>
</body>
</html>