<div class="video-wrapper d-flex align-items-center">
    <div class="title-wrapper text-center">
        <h2 class="animation-words title"
            style="background-image: url('/wp-content/themes/twentyseventeen/assets/images/gradient.jpg');"
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
               poster="<?= get_template_directory_uri() ?>/assets/video/BKG_wwa_molecule.png"
               loop="loop" muted="muted" autoplay="autoplay" playsinline="playsinline"
               src="<?= get_template_directory_uri() ?>/assets/video/BKG_wwa_molecule.mp4"
        >
        </video>
    <? endif ?>

    <? if ($post->post_name === 'what-we-do'): ?>
        <video class="video VideoPane-video"
               poster="<?= get_template_directory_uri() ?>/assets/video/BKG_wwd_cell_move.png"
               loop="loop" muted="muted" autoplay="autoplay" playsinline="playsinline"
               src="<?= get_template_directory_uri() ?>/assets/video/BKG_wwd_cell_move.mp4"
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