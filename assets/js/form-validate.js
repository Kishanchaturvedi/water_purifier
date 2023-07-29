function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var number = document.getElementById("number").value;
    var massage = document.getElementById("massage").value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var numPattern = /^\d{10}$/;
    var namePattern = /^[A-Za-z ]+$/;


    // Validate Name
    if (name.trim() === "") {
        document.getElementById("nameError").innerHTML = 'Please fill in the name.';
        return false;
    } else if (!namePattern.test(name)) {
        document.getElementById("nameError").innerHTML = 'Name must contain only letters.';
        return false;
    } else {
        document.getElementById("nameError").innerHTML = '';

    }

    //Validate Email
    if (email.trim() === '') {
        document.getElementById('emailError').innerHTML = 'Please fill in the email';
        return false;
    } else if (!emailPattern.test(email)) {
        document.getElementById('emailError').innerHTML = 'Please enter correct email';
        return false;
    } else {
        document.getElementById('emailError').innerHTML = '';
    }

    // validation number 
    if (number == '') {
        document.getElementById('numError').innerHTML = 'Please fill in the number';
        return false;
    } else if (!numPattern.test(number)) {
        document.getElementById('numError').innerHTML = 'Please enter valid number';
        return false;
    } else {
        document.getElementById('numError').innerHTML = '';

    }
    //validation message   
    if (massage.trim() === '') {
        document.getElementById('msgError').innerHTML = 'Please fill in the massage';
        return false;
    } else {
        document.getElementById('msgError').innerHTML = '';

    }

    return true;
}