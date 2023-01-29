// Get the input element
var input = document.getElementById('picture');
// Get the image element
var img = document.querySelector('.preview-img');

// Listen for changes to the input element
input.addEventListener('change', function() {
  // Get the selected file
  var file = input.files[0];
  // Create a new file reader
  var reader = new FileReader();
  // Listen for the file reader to load
  reader.addEventListener('load', function() {
    // Set the src of the image element to the data URL of the file
    img.src = reader.result;
  });
  // Read the file as a data URL
  reader.readAsDataURL(file);
});