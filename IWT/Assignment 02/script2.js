function redirectToUpdateForm(id){
    window.location.href = "update2.php?id=" + id;
}

document.getElementByid("signup-form").addEventListener("submit", function(event) {

    document.getElementByid("name-error").textContent = "";
    document.getElementByid("email-error").textContent = "";
    document.getElementByid("password-error").textContent = "";
    document.getElementByid("terms-error").textContent = "";

    const name = document.getElementByid("first-name").value;
    const email = document.getElementByid("email").value;
    const password = document.getElementByid("password").value;
    const terms = document.getElementByid("terms").checked;

    let formIsValid = true;

    if (name.length < 3) {
        document.getElementByid("name-error").textContent = "Username must be at least 3 characters long.";
        formIsValid = false;
    }

    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
        document.getElementByid("email-error").textContent = "Please enter a valid email address.";
        formIsValid = false;
    }

    if (password.length < 6) {
        document.getElementByid("password-error").textContent = "Password must be at least 6 characters long.";
        formIsValid = false;
    }

    if (!terms) {
        document.getElementByid("terms-error").textContent = "You must agree to the terms and conditions.";
        formIsValid = false;
    }

    if (!formIsValid) {
        event.preventDefault();
    }
});
