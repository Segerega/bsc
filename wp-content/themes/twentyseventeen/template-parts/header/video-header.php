<script>

    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            videoId: "<?=get_field('video_'. (((int)$_SESSION['video_id']  % 2 + 1)), $post->ID)?>",
            playerVars: {
                mute: 1,
                autoplay: 1,
                loop: 1,
                controls: 0,
                showinfo: 0,
                autohide: 0,
                enablejsapi: 1,
                modestbranding: 1,
                playlist: "<?=get_field('video_'. (((int)$_SESSION['video_id'] % 2 + 1)), $post->ID)?>",
                vq: 'hd1080'
            },
            allowfullscreen: 1,
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerStateChange(el) {
        if(el.data === 1) {
            console.log('loaded 11');
            jQuery('body').addClass('video-loaded');
        }
    }
</script>
<div class="video-wrapper d-flex align-items-center">
    <div class="video VideoPane-video" id="player"></div>
    <div class="video-overlay" style="background-image: url('<?=get_field('video_'. (((int)$_SESSION['video_id']  % 2 + 1)).  "_image", $post->ID)?>')"></div>
    <div class="title-wrapper text-center">
        <h2 class="animation-words title"
            style="background-image: url('/wp-content/themes/twentyseventeen/assets/images/gradient_new.jpg');"
        >
            <?=$post->video_title?>
        </h2>
        <div class="title-description">
            <?=$post->video_subtitle?>
        </div>
    </div>

    <a class='scroll-to scroll-to-first-section' data-scroll-to="#first-section">
        <img class='arrow-down-img' src="/wp-content/themes/twentyseventeen/assets/images/btn_arrow_down.svg" alt="">
    </a>

<!--    <iframe width="853" height="480"-->
<!--            src="https://www.youtube.com/embed/bM2uWzmVHoE?v=bM2uWzmVHoE?autoplay=1&loop=1&mute=1&playlist=bM2uWzmVHoE&color=#ffffff"-->
<!--            frameborder="0"-->
<!--            allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen>-->
<!---->
<!--    </iframe>-->


<!--        <video class="video VideoPane-video"-->
<!--               poster="--><?//=get_field('video_'. (((int)$_SESSION['video_id'] ) % 2 + 1).  "_image", $post->ID)?><!--"-->
<!--               loop="loop" muted="muted" autoplay="autoplay" playsinline="playsinline"-->
<!--               src="--><?//=get_field('video_'. (((int)$_SESSION['video_id'] ) % 2 + 1), $post->ID)?><!--"-->
<!--        >-->
<!--        </video>-->

</div>
