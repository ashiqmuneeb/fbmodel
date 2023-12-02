$(document).ready(function () {
    $('form[name="signupForm"]').submit(function (event) {
      
        event.preventDefault();

        
        var fname = $('#text1').val();
        var lname = $('#text2').val();
        var email = $('#number').val();
        var password = $('#password').val();

       
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

        
        $('form[name="signupForm"]').unbind('submit').submit();
    });
});


$(document).ready(function() {
    
    var $daySelect = $('select[name="day"]');
    for (var i = 1; i <= 31; i++) {
        $daySelect.append('<option value="' + i + '">' + i + '</option>');
    }

    
    var months = [
        'January', 'February', 'March', 'April',
        'May', 'June', 'July', 'August',
        'September', 'October', 'November', 'December'
    ];
    var $monthSelect = $('select[name="month"]');
    for (var j = 0; j < months.length; j++) {
        $monthSelect.append('<option value="' + (j + 1) + '">' + months[j] + '</option>');
    }

    
    var currentYear = new Date().getFullYear();
    var $yearSelect = $('select[name="year"]');
    for (var k = currentYear; k >= 1900; k--) {
        $yearSelect.append('<option value="' + k + '">' + k + '</option>');
    }
});

