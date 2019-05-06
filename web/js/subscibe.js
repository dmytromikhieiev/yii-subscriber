$(document).ready(function() {
    $("#subscribe-form").on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        var resultInput = form.find('.result');
        resultInput.html('');

        var email = $("#email").val();

        var href = form.attr('action');
        $.post(href, {email: email}, function(res){
            resultInput.text(res.message).css({color:'black'});
        }, 'json').fail(function(res) {
            var message = res.responseText.split(':')[1];
            resultInput.text(message).css({color:'red'});
        }, 'json');
    });
});
