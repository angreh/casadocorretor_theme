function checkRadio(id)
{
    var replacer = id;

    $('.mktz-replacer-radio').removeClass('checked');
    $('.mktz-radio').removeAttr('checked');


    $('#' + replacer).attr('checked','checked');
    $('.mktz-replacer-radio[aria-id="' + replacer + '"]').addClass('checked');
}
$(function(){

    $('#menu-mobile .open').on(
        'click',
        function()
        {
            $('#menu-mobile .wrapper').slideDown();
        }
    );

    $('#menu-mobile .close').on(
        'click',
        function()
        {
            $('#menu-mobile .wrapper').slideUp();
        }
    );

    $('[data-remodal-id=modal-ask]').remodal({hashTracking:false});
    $('[data-remodal-id=modal-form]').remodal({hashTracking:false});

    $('#estado').on(
        'change',
        function(){
            getEstados();
        }
    );

    $('#lead-gen').submit(function(){
        var $phone = $('#phone');
        var fullPhone = $phone.val();
        var ddd = fullPhone.slice(1,3);
        var phone = fullPhone.slice(4);

        $('#dddTel').val(ddd);
        $phone.val(phone);
        //return false;
    });

    bannerMasks();
    //applyHomeValitador();
});


var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
        var matches, substringRegex;

        // an array that will be populated with substring matches
        matches = [];

        // regex used to determine if a string contains the substring `q`
        substrRegex = new RegExp(q, 'i');

        // iterate through the pool of strings and for any string that
        // contains the substring `q`, add it to the `matches` array
        $.each(strs, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
        });

        cb(matches);
    };
};
var cidades;

function getEstados()
{
    var uf = $('#estado').val();
    $("#cidade").slideDown();
    $.ajax({
        url: 'wp-content/themes/mktz_CDCorretor/mktz/functions/ajax.php',
        data: 'uf=' + uf,
        method: 'post',
        success: function(data)
        {
            cidades = JSON.parse(data);

            $('#cidade').autocomplete({
                lookup: cidades,
                lookupLimit: 6
            });
        }
    });
}

function bannerMasks()
{
    $('#phone').mask(SPMaskBehavior, spOptions);
}

var SPMaskBehavior = function (val)
    {
        return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options)
        {
            field.mask
            (
                SPMaskBehavior.apply
                (
                    {},
                    arguments
                ),
                options
            );
        }
    };

function applyHomeValitador()
{
    jQuery.validator.addMethod(
        "phoneVal",
        function (value, element){
            var test = value.replace(/[^0-9]+/g, '');
            if( test.length == 10 || test.length == 11 )
            {
                return true;
            } else {
                return false;
            }
        }, "Por favor insira um número válido"
    );
    $('#lead-gen').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                phoneVal: true
            }
        },
        messages: {
            name: {
                required: "Por favor insira seu nome",
                minlength: "Por favor insira um valor válido"
            },
            email: {
                required: "Este campo é obrigatório",
                email: "Por favor insira um email válido"
            },
            telephone: {
                required: "Este campo é obrigatório"
            }

        }
    });
    //alert('opa!!!');
}