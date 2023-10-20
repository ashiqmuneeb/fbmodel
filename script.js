$(document).ready(function () {
    $('form[name="signupForm"]').submit(function (event) {
        // Prevent the form from submitting
        event.preventDefault();

        // Get the input values
        var fname = $('#text1').val();
        var lname = $('#text2').val();
        var email = $('#number').val();
        var password = $('#password').val();

        // Validate the inputs (add your own validation logic here)
        if (fname === '') {
            alert('First name is required.');
            return;
        }
        if (lname === '') {
            alert('Last name is required.');
            return;
        }
        if (email === '') {
            alert('Email or mobile number is required.');
            return;
        }
        if (password === '') {
            alert('Password is required.');
            return;
        }

        // If all validation passes, you can submit the form to the server
        $('form[name="signupForm"]').unbind('submit').submit();
    });
});
