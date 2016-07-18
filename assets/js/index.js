function checkRadio(id)
{
    var replacer = id;

    $('.mktz-replacer-radio').removeClass('checked');
    $('.mktz-radio').removeAttr('checked');


    $('#' + replacer).attr('checked','checked');
    $('.mktz-replacer-radio[aria-id="' + replacer + '"]').addClass('checked');
}
$(function(){

    $('.mktz-radio').each(function(){
        $(this).hide();
        $(this).after('<div class="mktz-replacer-radio" aria-id="' + $(this).attr('id') + '"></div>');
    });

    $('.mktz-replacer-radio').on(
        'click',
        function(){
            checkRadio($(this).attr('aria-id'));
        }
    );
    $('.input-radio-container label').on(
        'click',
        function(){
            checkRadio($(this).attr('for'));
        }
    );
    $('.mktz-replacer-radio[aria-id="pme"]').click();
});