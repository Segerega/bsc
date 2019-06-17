<div class="video-wrapper d-flex align-items-center">
    <div class="title-wrapper text-center">
        <h2 class="animation-words title"
            style="background-image: url('/wp-content/themes/twentyseventeen/assets/images/gradient_new.jpg');"
        >
            <?=$post->video_title?>
        </h2>
        <div class="title-description">
            <?=$post->video_subtitle?>
        </div>

        <a class='scroll-to scroll-to-first-section' data-scroll-to="#first-section">
            <img class='arrow-down-img' src="/wp-content/themes/twentyseventeen/assets/images/btn_arrow_down.svg" alt="">
        </a>

    </div>
    <div class="video-overlay"></div>

        <video class="video VideoPane-video"
               poster="<?=get_field('video_'. (((int)$_SESSION['video_id'] ) % 2 + 1).  "_image", $post->ID)?>"
               loop="loop" muted="muted" autoplay="autoplay" playsinline="playsinline"
               src="<?=get_field('video_'. (((int)$_SESSION['video_id'] ) % 2 + 1), $post->ID)?>"
        >
        </video>
</div>