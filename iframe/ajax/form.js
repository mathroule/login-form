// form.js
$(document).ready(function () {

    // process the form
    $('#submit').click(function (event) {

        $('#result').empty();
        $('.form-group').removeClass('has-error'); // remove the error class
        $('.help-block').remove(); // remove the error text

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'username': $('input[name=username]').val(),
            'password': $('input[name=password]').val()
        };

        // process the form
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: 'process.php', // the url where we want to POST
            data: formData, // our data object
            dataType: 'json', // what type of data do we expect back from the server
            encode: true
        })
        // using the done promise callback
            .done(function (data) {
                // here we will handle errors and validation messages
                if (!data.success) {
                    // handle errors for username ---------------
                    if (data.errors.username) {
                        $('#username-group').addClass('has-error'); // add the error class to show red input
                        $('#username-group').append('<div class="help-block">' + data.errors.username + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for password ---------------
                    if (data.errors.password) {
                        $('#password-group').addClass('has-error'); // add the error class to show red input
                        $('#password-group').append('<div class="help-block">' + data.errors.password + '</div>'); // add the actual error message under our input
                    }
                } else {
                    $('#result').append('<div class="alert alert-success"><h2>Input</h2><p>Username: ' + data.data.username + '<br/>Password: ' + data.data.password + '</p></div>');
                }
            })

            // using the fail promise callback
            .fail(function (data) {
                $('#result').append('<div class="alert alert-danger"><h2>Error while processing request: ' + data + '</h2></div>');
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});
