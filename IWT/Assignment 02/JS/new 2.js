document.getElementById('signup-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the form from submitting the traditional way

    // Collect form data
    const formData = new FormData(this);

    // Send the data using fetch (AJAX request)
    fetch('signup.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message); // Success message
            // Optionally redirect or reset the form
            document.getElementById('signup-form').reset();
        } else {
            alert('Error: ' + data.message); // Error message
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
