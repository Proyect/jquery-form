 // Handle form submission with Ajax
 $('#form').submit(function(event) {
    event.preventDefault(); // Prevent default form submission

    const name = $('#nombre').val();
    const lastName = $("#apellido").val();
    const email = $('#email').val();

    // Send Ajax request to save data
    $.ajax({
      url: "sendData.php", // Replace with your server-side script URL
      method: 'POST',
      data: { name, lastName, email },
      success: function(response) {
        console.log("Data Send");
        if (response === 'success') {
          // Clear form fields and update table data
          $('#registration-form').trigger('reset');
          fetchUsers(); // Function to fetch updated user data
        } else {
          alert('Error saving user data!');
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.error('Error detect:', textStatus, errorThrown);
      }
    });
  });
