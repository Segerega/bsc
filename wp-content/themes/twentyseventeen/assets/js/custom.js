(function($) {
    $(document).ready(function(){
        console.log(33333);

        $('.scroll-to').click(function () {
            var $this = $(this),
                $scrollToElement = $($this.data('scroll-to'));
            $('body, html').animate({
                scrollTop: $scrollToElement.offset().top
            }, 500);
        });

    });

})( jQuery );