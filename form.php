
<!DOCTYPE html>
<html lang="es">

<head>
    <title>{{$site[0]->title ?? "Servicios Informaticos"}}</title>
    <!-- Define Charset -->
    <meta charset="utf-8">
    <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="{{$site[0]->descripcion ?? "Desarrollo de sistemas  y Servicios Informaticos"}}"/>
  <meta name="author" content="Ariel Marcelo Diaz">
  <meta name='keywords' content="{{$site[0]->tag ?? "sistemas, software, programas, servicios"}}"/>
  <link rel='shortcut icon' type='image/x-icon' href="media/img/icono.ico" />



<!-- Bootstrap CSS -->  	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">	


<!-- fontawesome -->
<link href="./media/fontawesome/css/fontawesome.css" rel="stylesheet">
<link href="./media/fontawesome/css/brands.css" rel="stylesheet">
<link href="./media/fontawesome/css/solid.css" rel="stylesheet">
   

</head>
<body>
<h2>Formulario de contacto</h2>
			<form action="{{route('form')}}"  name="form" id="form" class="form-inline" role="form"
    method= "POST"  > 
        <input type="text" class="form-control" placeholder=""  
            aria-describedby="Nombre" id="nombre" name="nombre" required
            value="" />

        <input type="text" class="form-control" placeholder=""  
        aria-describedby="Apellido" id="apellido" name="apellido" required
        value="" />

        <input type="email" class="form-control" placeholder=""  
        aria-describedby="Email" id="email" name="email" required
        value="" />
        
        <button type="submit" class="btn btn-primary  mb-3 p-2 col ">
          Enviar Consulta
        </button>
    </form>


    <h2>Registration Form</h2>
  <form id="registration-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Register</button>
  </form>
  <h2>Registered Users</h2>
  <table id="user-table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>

    <script>
$(document).ready(function() {
      // Initialize DataTable with options for selection and deletion (replace with your server-side logic)
      const table = $('#user-table').DataTable({
        columns: [
          { data: 'nombre' },
          { data: 'email' },
          {
            data: null,
            className: 'actions',
            render: function (data, type, row) {
              return `<button data-user-id="${row.id}">Delete</button>`;
            }
          }
        ],
        select: true
      });

      // Handle form submission with Ajax
      $('#registration-form').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        const name = $('#nombre').val();
        const email = $('#email').val();

        // Send Ajax request to save data
        $.ajax({
          url: "somesite.php", // Replace with your server-side script URL
          method: 'POST',
          data: { name, email },
          success: function(response) {
            if (response === 'success') {
              // Clear form fields and update table data
              $('#registration-form').trigger('reset');
              fetchUsers(); // Function to fetch updated user data
            } else {
              alert('Error saving user data!');
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error:', textStatus, errorThrown);
          }
        });
      });

      // Function to fetch and display user data
      function fetchUsers() {
        $.ajax({
          url: 'get_users.php', // Replace with your server-side script URL
          method: 'GET',
          success: function(data) {
            // Parse data (assuming it's JSON format)
            const users = JSON.parse(data);

            // Clear table body and add new user rows
            table.clear().draw(); // Clear using DataTable method
            table.rows.add(users).draw(); // Add data using DataTable method

            // Handle delete button clicks (replace with your server-side logic)
            table.on('click', '.actions button', function() {
              const userId = $(this).data('user-id');
              deleteUser(userId); // Function to delete user
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>