//phone
$(document).ready(function(){

    $( ".feedback" ).submit(function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        var name = $('.name').val();
        var message_language = $('.choose-language').val();
        var contacts = $('.contacts').val();
        var theme = $('.theme').val();
        var text = $('.message').val();
        console.log(name);
        console.log(contacts);
        console.log(theme);
        console.log(text);
        console.log(message_language);

        if(name == '' || contacts =='' || theme == '' || text == ''){
            var msg = (message_language == 'ru') ? 'Заполните все поля' : 'All fields must be filled';
            alert(msg);
            return false;
        }
        $.ajax({
            url: '/site/feedback',
            type: 'GET',
            async : false,
            data: {
                name: name,
                contacts: contacts,
                theme: theme,
                text: text,
                reCaptcha : $('#g-recaptcha-response').val()
            },
            success: function (response) {
                if($('#g-recaptcha-response').val()) {
                    var msg = (message_language == 'ru') ? 'Ваша заявка принята.' : 'Your application is submitted.';
                    alert(msg);
                    $('.pop').magnificPopup('close');
                    $('.name').val('');
                    $('.contacts').val('');
                    $('.theme').val('');
                    $('.message').val('');
                    $('#g-recaptcha-response').val('');
                    $('#submit_captcha').hide();
                    $( ".close-button" ).trigger("click");
                }
            }
        });
        return false;
    });

});