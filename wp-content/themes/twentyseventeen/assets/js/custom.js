(function($) {


    $(document).ready(function(){
        //
        // $(function () {
        //     $('.open_burger_trigger').click(function () {
        //         $('.menu-wrapper').slideToggle(500);
        //     });
        // });
        // $(function () {
        //     $('.close_burger_trigger').click(function () {
        //     });
        // });
        //

        $(document).on('click', '.close_burger_trigger', function () {
            $('.menu-wrapper').removeClass('open');

        });

        $(document).on('click', '.open_burger_trigger', function () {
            $('.menu-wrapper').addClass('open');
        });

        $('.scroll-to').click(function () {
            var $this = $(this),
                $scrollToElement = $($this.data('scroll-to'));
            $('body, html').animate({
                scrollTop: $scrollToElement.offset().top - $('#masthead').height()
            }, 500);
        });

        menuFixed();
        $(window).scroll(function () {
            menuFixed();
        })

        updateVideoSize();
        $(window).resize(function () {
            updateVideoSize();
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

        $('.link-ny').on('click', function () {
            // $('.map-wrapper').toggleClass('open-map open-ny');
        });

        $('.link-london').on('click', function () {
            // $('.map-wrapper').toggleClass('open-map open-london');
        });

        $('.map-wrapper').on('click', function (e) {

            if ($(e.target).is('.map-wrapper')) {
                // $('.map-wrapper').removeClass('open-map open-london open-ny');
            };
        });

        addAboutBlank();
    });

    function updateVideoSize() {
        var $width = $(window).width(),
            $height = $(window).height();
        if ($width / $height > 1.779) {

            $("video.VideoPane-video").width($(window).width() * 1.05)

        } else {

            $("video.VideoPane-video").width($(window).height() * 1.779)
        }

        $('.section-with-background .reference').css({top:-$('#masthead').height()+10})

    }

    function addAboutBlank() {

        $('.menu-item-96, .menu-item-97').each(function(key, item){
            $(item).find('a').attr('target', '_blank');
        });
    }

    function menuFixed(){
        var t = $(window).scrollTop();
        t >= 100 ? $("#masthead").addClass("fixed") : $("#masthead").removeClass("fixed")
    }

})( jQuery );