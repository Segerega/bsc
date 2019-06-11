<div class="video-wrapper d-flex align-items-center">
    <div class="title-wrapper text-center">
        <h2 class="animation-words title"
            style="background-image: url('/wp-content/themes/twentyseventeen/assets/images/gradient_new.jpg');"
        >
            <? if (is_front_page()): ?>
            The art of scientific engagement
        <? endif ?>

        <? if ($post->post_name === 'what-we-do'): ?>
            Your needs<br>shape our solutions
        <? endif ?>
        </h2>
        <div class="title-description">

            <?if(is_front_page()):?>
            Science deeply understood and clearly conveyed to cultivate the relationships central to your success
            <?endif?>

            <? if ($post->post_name === 'what-we-do'): ?>
            From prelaunch to relaunch, your evolving priorities determine
            the talents we assemble to ensure exceptional results
            <?endif?>
        </div>

        <a class='scroll-to scroll-to-first-section' data-scroll-to="#first-section">
            <img class='arrow-down-img' src="/resource/Images and video/btn_arrow_down.svg" alt="">
        </a>

    </div>
    <div class="video-overlay"></div>
    <!--    <video class="video VideoPane-video"-->
    <!--           src="https://bnetcmsus-a.akamaihd.net/cms/template_resource/2TQDJNTY9EOP1548167681790.mp4"-->
    <!--           data-src="https://bnetcmsus-a.akamaihd.net/cms/template_resource/2TQDJNTY9EOP1548167681790.mp4"-->
    <!--           loop="loop" muted="muted" autoplay="autoplay" playsinline="playsinline"></video>-->

    <? if (is_front_page()): ?>
        <video class="video VideoPane-video"
               poster="<?= get_template_directory_uri() ?>/assets/video/BKG_wwa_molecule.jpg"
               loop="loop" muted="muted" autoplay="autoplay" playsinline="playsinline"
               src="<?= get_template_directory_uri() ?>/assets/video/BKG_home_moleculer.mp4"
        >
        </video>
    <? endif ?>

    <? if ($post->post_name === 'what-we-do'): ?>
<!--        <iframe class="video VideoPane-video"-->
<!--                src="http://www.youtube.com/embed/y2jJ4r0KQgU?autoplay=1&loop=1&mute=1&playlist=y2jJ4r0KQgU&color=#ffffff"-->
<!--                allowfullscreen="0"-->
<!--                width="100%"-->
<!--                height="100%"-->
<!--                frameborder="0"></iframe>-->
<!--        <iframe class="ytplayer-player" style="width: 1901px; height: 1070px; left: 0px; top: -92.5px;" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="1901" height="1070" src="https://www.youtube.com/embed/y2jJ4r0KQgU?iv_load_policy=3&modestbranding=1&autoplay=1&controls=0&showinfo=0&wmode=opaque&branding=0&autohide=0&loop=1&rel=0&vq=large&enablejsapi=1&origin=&widgetid=1"></iframe>-->
        <video class="video VideoPane-video"
               poster="<?= get_template_directory_uri() ?>/assets/video/BKG_wwd_cell_move.jpg"
               loop="loop" muted="muted" autoplay="autoplay" playsinline="playsinline"
               src="<?= get_template_directory_uri() ?>/assets/video/BKG_wwd_cel_ move.mp4"
        >
        </video>
    <? endif ?>

</div>
<script>
    jQuery(document).ready(function () {

        jQuery(window).scroll(function () {
            var video = jQuery('video'),
                videoTopCoordinate = video.offset().top,
                videoHeight = video.height(),
                videoBottomCoordinate = videoTopCoordinate + videoHeight,
                currentScrollY = jQuery(window).scrollTop();
            // console.log(currentScrollY > videoTopCoordinate , currentScrollY > videoBottomCoordinate)

            if (currentScrollY > videoTopCoordinate && currentScrollY < videoBottomCoordinate) {
                if (currentScrollY > videoTopCoordinate + videoHeight / 2) {
                    setTimeout(function () {
                        // jQuery(' html').animate({scrollTop: jQuery('video').height() + jQuery('video').offset().top}, 500)
                    }, 5000);

                } else {

                }
            }
        });
    });
</script>