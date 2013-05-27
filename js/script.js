function showMessage(message, type) {
    type = (type == undefined) ? 'success' : type;
    message = (message == undefined) ? 'The form has been submitted successfully' : message;
    $('.message-box').remove();
    $('#test-form').prepend('<div class="message-box ' + type + '">' + message + '</div>');
}

$(document).ready(function() {

    // validate the form
    $('#test-form').validate();

    // AJAX submit the form
    $('#test-form').ajaxForm(function(data) {
        data = $.parseJSON(data);
        showMessage(data.message, data.type);
        document.getElementById('test-form').reset();
    });

    // remove notifications on click
    $('form').on('click', 'div.message-box', function() {
        $(this).fadeOut(300, function() {
            $(this).remove();
        });
    });

});