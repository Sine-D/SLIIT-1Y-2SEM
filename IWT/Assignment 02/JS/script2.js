document.getElementById('bookingForm').addEventListener('submit', function(e) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const date = document.getElementById('date').value;

    if (name === '' || email === '' || date === '') {
        alert('Please fill all fields');
        e.preventDefault();  // Prevent form submission if validation fails
    }
});