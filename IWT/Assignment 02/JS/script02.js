document.getElementById("inquiryForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form from submitting the traditional way

    // Collect form data
    const formData = new FormData(this);

    // Send the data to the server via AJAX
    fetch('submit_inquiry.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("responseMessage").innerText = data; // Display server response
        document.getElementById("inquiryForm").reset(); // Reset form
    })
    .catch(error => console.error('Error:', error));
});