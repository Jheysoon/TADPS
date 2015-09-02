$(document).ready(function(){
    $('#login_form').submit(function(e){
        var $btn    = $('#btnSubmit').button('loading');
        $username   = $('input[name=username1]');
        $password   = $('input[name=password1]');
        $close      = $('#close');
        $username.attr('disabled','');
        $password.attr('disabled','');
        $close.attr('disabled','');
        $.post('/login', {username:$username.val(), password:$password.val()}, function(data){
            if(data != 'success')
            {
                $('#error_message').html(data);
                $username.removeAttr('disabled').focus();
                $password.removeAttr('disabled');
                $close.removeAttr('disabled');
                $btn.button('reset');
            }
            else {
                location.href = '/';
            }
        });
        e.preventDefault();
    });
    $('#myModal, #reg').on('show.bs.modal', function(){
        $('input[name=password1]').val('');
        $('#error_message').html('');
        $('input[name=username1]').val('');

        $('input[name=password], input[name=username], input[name=fname], input[name=lname], input[name=mname], input[name=contact], input[name=email], input[name=con_pass]').val('');
    });
    $('#register_form').submit(function(e){
        var $btn1 = $('#reg_button').button('loading');
        $.post('/register', $(this).serialize(), function(data){
            if(data != 'Successfully registered')
            {
                $('#register_error').html(data);
                $btn1.button('reset');
            }
            else
            {
                // empty all the values in textbox
                $('input[name=password], input[name=username], input[name=fname], input[name=lname], input[name=mname], input[name=contact], input[name=email], input[name=con_pass]').val('');
                $('input[name=fname]').focus();
                $('#register_error').html('<div class="alert alert-success text-center">Successfully Registered</div>');
            }
        });
        e.preventDefault();
    });
});
