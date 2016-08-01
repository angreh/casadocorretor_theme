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

});