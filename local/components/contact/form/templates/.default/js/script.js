console.log('sri[t');

function checkForm(form)
{
    var input    = $(form + ' [data-form="required"]');
    var check    = false;
    var errors   = [];

    input.each(function(i, elem)
    {
        if (!$(this).val())
        {
            $(this).addClass('error');
            errors.push($(this));
        }
    });

    setTimeout(function(){
        input.removeClass('error');
    }, 3000);


    if (errors.length == 0){
        check = true;
    }


    return check;
};

function ajaxForm(form_data, action, type)
{
    console.log(form_data, action, type);
    $.ajax({
        type: type,
        url: action,
        /*dataType: 'TEXT',*/
        data: form_data,

        success: function(response){
            console.log(response);
            // Действия при успехе
            $(':input', '[data-form="form"]')
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .removeAttr('checked')
                .removeAttr('selected')
                .removeClass('checked');
        },

        error: function(xhr, status, error) {
            console.log('err');
            console.log(status);
            console.log(error);
        }

    });
};

var callback_btn = $('#callform [data-form="submit"]');

console.log(callback_btn);
callback_btn.on('click', function()
{

    if (checkForm('#callform'))
    {
        var form      = $(this).closest('[data-form="form"]');
        var form_data = form.serialize();
        var action    = form.attr('action');
        var type      = form.attr('method');

        ajaxForm(form_data, action, type);
    }


    return false;
});