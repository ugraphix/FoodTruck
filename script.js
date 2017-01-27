/**
 * Created by Ekogoca on 01/26/2017.
 */
$(document).ready(function () {
    var count = 0;
    // $(document).on('change', '.item', function () {
    //     ShowToppings(this);
    // });

    $('#addItem').click( function () {
        count++;
        var el = $(".singleItem")[0];
        $(el).clone().find("input").val("").end().appendTo("#food");
    });

    // function ShowToppings(el) {
    //     if(el.value == 'pizza') {
    //         $('.pizzaToppings').removeClass('hide');
    //     }else  {
    //         $('.pizzaToppings').removeClass('hide').addClass('hide');
    //     }
    //
    //     if(el.value == 'drink') {
    //         $('.drinks').removeClass('hide');
    //     }else  {
    //         $('.drinks').removeClass('hide').addClass('hide');
    //     }
    //
    //     if(el.value == 'iceCream') {
    //         $('.iceCream').removeClass('hide');
    //     }else  {
    //         $('.iceCream').removeClass('hide').addClass('hide');
    //     }
    //
    // };
});