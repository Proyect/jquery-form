<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table  Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">	
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href= "./media/css/styles.css" type="text/css" media="screen" /> 
</head>
<body>
<div  class="contaner">
  
<button type="button" class="btn btn-primary btn-outline-light fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
<i class="bi-alarm"></i>
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

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese los datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <h2>Registration Form</h2>
  <form id="registration-form" class="form">
    <div class="row">
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
    <div class="row">
       <div class="col text-cente">
        <button  class="btn btn-primary btn-outline-light fw-bold" id="updateData">
          Register
        </button>
      </div>
    </div>      
  </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x"></i> Close</button>        
      </div>
    </div>
  </div>
</div>


<!-- Librería jQuery requerida por los plugins de JavaScript -->  
  	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./media/js/table.js"></script>
    
    <!-- Data Tables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
    <script>
      

    </script>
</body>
</html>