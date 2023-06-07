jQuery(function($) {
    // Navi
    var $menu = $('.header_menu');
    var $slideNav = $('.header_links');
    $menu.on('click', function() {
        if ($menu.hasClass('is-active') == false) {
            $slideNav.addClass('is-active');
            $menu.addClass('is-active');
        } else {
            $slideNav.find('.header_nav').hide();
            $slideNav.removeClass('is-active');
            $menu.removeClass('is-active');
            setTimeout(function() {
                $slideNav.find('.header_nav').show();
            }, 1000);
        }
    });

    // PageTop
    $('.js-pagetop').on('click', function(){
        $("html, body").animate({
            scrollTop: 0
        }, 500);
    });
});
