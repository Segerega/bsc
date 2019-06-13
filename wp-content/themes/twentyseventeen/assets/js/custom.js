(function($) {
    $(document).ready(function(){

        $('.scroll-to').click(function () {
            var $this = $(this),
                $scrollToElement = $($this.data('scroll-to'));
            $('body, html').animate({
                scrollTop: $scrollToElement.offset().top - 50
            }, 500);
        });

        menuFixed();
        $(window).scroll(function () {
            menuFixed();
        })

        $(".open-innovation-wrapper").click(function () {
            $(this).closest("section").find('.innovation-block').slideDown("slow");
            $(this).closest("section").find('.open-innovation-wrapper').slideUp("slow");
            $(this).closest("section").addClass('opened');
        });

        $(".close-icon").click(function () {
            $(this).closest("section").find('.innovation-block ').slideUp("slow");
            $(this).closest("section").find('.open-innovation-wrapper').slideDown("slow");
            $(this).closest("section").removeClass('opened');

        });

        $(window).load(function () {
            $('body').addClass('site-loaded');
        });
    });

    function menuFixed(){
        var t = $(window).scrollTop();
        t >= 100 ? $("#masthead").addClass("fixed") : $("#masthead").removeClass("fixed")
    }

})( jQuery );