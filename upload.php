<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Upload with Ajax</title>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>
<body>
  <h2>Upload Image</h2>
  <form id="image-upload-form">
    <label for="image">Select Image:</label>
    <input type="file" id="image" name="image" accept="image/*" required>
    <button type="submit">Upload</button>
  </form>
  <div id="image-preview"></div>

  <script>
    $(document).ready(function() {
      $('#image-upload-form').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
      });
        const formData = new FormData(this);

        $.ajax({
          url: 'upload_image.php', // Replace with your server-side script URL
          method: 'POST',
          data: formData,
          contentType: false, // Set to avoid processing data
          processData: false, // Don't process form data automatically
          xhr: function() {
            const xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener('progress', function(evt) {
              if (evt.lengthComputable) {
                const percentComplete = evt.loaded / evt.total * 100;
                console.log('Upload progress: ' + percentComplete + '%');
                // You can update a progress bar here
              }
            });
            return xhr;
          },
          success: function(response) {
            if (response === 'success') {
              // Get uploaded image URL from server-side script
              const imageUrl = 'uploads/' + $('#image').val().split('\\').pop(); // Extract filename
              $('#image-preview').html(`<img src="${imageUrl}" alt="Uploaded Image">`);
            } else {
              alert('Error uploading image!');
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error:', textStatus, errorThrown);
          }
        });
     
    });
  </script>
</body>
</html>
