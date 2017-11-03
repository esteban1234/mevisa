$(function() {
    var contador = 1;
    var pull = $('.op-menu');
    menu = $('nav');

    $(pull).on('click', function(e) {
        e.preventDefault();
        if (contador == 1) {
           menu.slideToggle(1000);           
           pull.css({
               top: '180px',
               transitionProperty:'opacity, top',
               transitionDuration: '2s'
           });

            contador = 0;
        } else {
            menu.slideToggle(1000);
             pull.css({
               top: '10px',
               transitionProperty:'opacity, top',
               transitionDuration: '2s'
           });
            contador = 1;
        }
    });
});
