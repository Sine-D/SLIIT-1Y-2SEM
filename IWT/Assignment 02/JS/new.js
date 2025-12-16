document.querySelectorAll('.see-more').forEach((button, index) => {
    button.addEventListener('click', () => {
        // Send an AJAX request to fetch service details
        fetch('fetchServiceDetails.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'service_id=' + (index + 1)
        })
        .then(response => response.text())
        .then(data => {
            alert(data); // Show the returned data (service details) in an alert or in the DOM
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
