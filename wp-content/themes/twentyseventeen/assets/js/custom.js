(function($) {
    $(document).ready(function(){

        $('.scroll-to').click(function () {
            var $this = $(this),
                $scrollToElement = $($this.data('scroll-to'));
            $('body, html').animate({
                scrollTop: $scrollToElement.offset().top
            }, 500);
        });

        $(window).scroll(function () {
            console.log(33333);

            var t = $(window).scrollTop();
            t >= 100 ? $("#masthead").addClass("fixed") : $("#masthead").removeClass("fixed")
        })

    });

})( jQuery );