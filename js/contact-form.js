

(function ($, window, document, undefined) {
    'use strict';

    var $form = $('#contact-form');

    $form.submit(function (e) {
        if (checkcontactform()) {
            // get the form data
            var formData = {
                'name': $('input[name="form-name"]').val(),
                'email': $('input[name="form-email"]').val(),
                'subject': $('input[name="form-subject"]').val(),
                'message': $('textarea[name="form-message"]').val(),
                'gtoken': $('#g-recaptcha-response').val()
            };

            // process the form
            $.ajax({
                type: 'POST',
                url: 'contact-form.php',
                data: formData,
                dataType: 'json',
                encode: true
            }).done(function (data) {
                // handle errors
                if (!data.success) {
                    if (data.errors.name) {

                        callwarn(1, data.errors.name);
                        return false;
                    }

                    if (data.errors.email) {

                        callwarn(1, data.errors.email);
                        return false;
                    }

                    if (data.errors.subject) {

                        callwarn(1, data.errors.subject);
                        return false;
                    }

                    if (data.errors.message) {

                        callwarn(1, data.errors.message);
                        return false;
                    }
                    if (data.errors.captcha) {

                        callwarn(1, data.errors.captcha);
                        return false;
                    }
                } else {
                    // display success message
                    $form.html('<div class="alert alert-success">' + data.message + '</div>');
                }
            }).fail(function (data) {
                // for debug
                console.log(data)
            });
            $form.html('<div class="alert alert-success">Submitting .......</div>');
        }
        e.preventDefault();
    });

    var $callform = $('#callform');

    $callform.submit(function (e) {
        if (chechcallform()) {
            // get the form data
            var formData1 = {
                'cc': $('input[name="country-code"]').val(),
                'number': $('input[name="mobile-number"]').val(),
                'skey': $('#g-recaptcha-response').val()
            };

            // process the form
            $.ajax({
                type: 'POST',
                url: 'maketoken.php',
                data: formData1,
                dataType: 'json',
                encode: true
            }).done(function (data) {
                // handle errors
                if (!data.success) {
                    callwarn(2, "something went wrong, try to reload the page..")
                } else {
                    // display success message
                    $callform.html('<div class="alert alert-success">Token Generated Successfully If You are Not Redirected ,  <a href="' + data.rURL + '">Click here to Redirect</a></div>');
                    window.open(data.rURL);
                }
            }).fail(function (data) {
                // for debug
                console.log(data)
            });
        }
        e.preventDefault();

    }
    );




}(jQuery, window, document));