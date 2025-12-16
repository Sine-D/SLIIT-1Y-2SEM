function validForm() {
    console.log("Validating form...");

    // Get form elements
    const name = document.forms["custom_form"]["name"];
    const engineNumber = document.forms["custom_form"]["num"];
    const email = document.forms["custom_form"]["email"];
    const vehicle = document.forms["custom_form"]["vehicle"];
    const message = document.forms["custom_form"]["message"];

    // Get error elements
    const nameError = name.nextElementSibling;
    const engineNumberError = engineNumber.nextElementSibling;
    const emailError = email.nextElementSibling;
    const vehicleError = vehicle.nextElementSibling;
    const messageError = message.nextElementSibling;

    // Clear previous error messages
    nameError.style.display = "none";
    engineNumberError.style.display = "none";
    emailError.style.display = "none";
    vehicleError.style.display = "none";
    messageError.style.display = "none";

    // Validation flags
    let valid = true;

    // Validate name
    if (name.value.trim() === "") {
        nameError.style.display = "block";
        valid = false;
    }

    // Validate engine number
    if (engineNumber.value.trim() === "") {
        engineNumberError.style.display = "block";
        valid = false;
    }

    // Validate email
    if (email.value.trim() === "") {
        emailError.style.display = "block";
        valid = false;
    } else {
        // Simple email pattern validation
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email.value.trim())) {
            emailError.textContent = "Please enter a valid email address.";
            emailError.style.display = "block";
            valid = false;
        }
    }

    // Validate vehicle name
    if (vehicle.value.trim() === "") {
        vehicleError.style.display = "block";
        valid = false;
    }

    // Validate message
    if (message.value.trim() === "") {
        messageError.style.display = "block";
        valid = false;
    }

    console.log("Validation complete. Valid: " + valid);
    // Return false if form is invalid
    return valid;
}
