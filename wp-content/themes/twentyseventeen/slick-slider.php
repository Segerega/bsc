<?

$args = array(
    'numberposts' => 10,
    'post_type' => 'person',
    'meta_key' => 'order',
    'orderby' => 'meta_value',
    'order' => 'ASC'
);

$persons = get_posts($args);
?>
<div class="slider-wrapper">
    <section class="person-slider slider">
        <? foreach ($persons as $person): ?>
            <div class="slider-item person-order-id-<?= $person->ID ?>"
                 data-person-id="<?= $person->ID ?>">
                <div class="slider-item-wrapper clearfix">
                    <div class="person-image"
                         style="background-image: url('<?php echo get_the_post_thumbnail_url($person->ID) ?>')">
                        <!--                        <img src="-->
                        <?php //echo get_the_post_thumbnail_url($person->ID) ?><!--" alt="">-->
                        <div class="person-image-second"
                             style="background-image: url('<?php echo get_field('person_second_image', $person->ID)['url'] ?>')">
                            <!--                        <img src="-->
                            <?php //echo get_the_post_thumbnail_url($person->ID) ?><!--" alt="">-->
                        </div>
                        <div class="person-image-second-overlay"></div>
                        <div class="person-image-third"
                             style="background-image: url('<?php echo get_field('person_third_image', $person->ID)['url'] ?>')">
                            <!--                        <img src="-->
                            <?php //echo get_the_post_thumbnail_url($person->ID) ?><!--" alt="">-->
                        </div>
                    </div>

                    <div class="text-slider-wrapper">
                        <h3 class="person-name">
                            <?= $person->post_title ?>
                        </h3>
                        <h4 class="person-title">
                            <?= get_field('job_title', $person->ID) ?>
                        </h4>
                        <?= $person->post_content ?>
                        <img src="<?= get_template_directory_uri() ?>/assets/images/close.svg " alt=""
                             class="close-icon">
                    </div>
                    <div class="title-bottom">
                        <h3 class="person-name">
                            <?= $person->post_title ?>
                        </h3>
                        <h4 class="person-title">
                            <?= get_field('job_title', $person->ID) ?>
                        </h4>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </section>
</div>

<script type="text/javascript">

    (function ($) {
        $(document).on('ready', function () {
            var slider = $(".person-slider");
            slider.slick({
                vertical: false,
                // dots: true,
                // variableWidth: true,
                slidesToScroll: 1,
                slidesToShow: 6,
                // centerPadding: '60px',
                lazyLoad: 'ondemand',
                infinite: false,
                // centerMode: true,
                nextArrow: "<img class=\"slider-arrow arrow-right\" src=\"<?= get_template_directory_uri() ?>/assets/images/arrow-right.svg\"\n" +
                "     alt=\"\">",
                prevArrow: "<img class=\"slider-arrow arrow-left\" src=\"<?= get_template_directory_uri() ?>/assets/images/arrow-left.svg\"\n" +
                "     alt=\"\">",
            })

            $('.slick-slide').click(function (e) {

                if($(e.target).is(".close-icon")){
                    return;
                }

                var $this = $(this),

                    slide = $(this);

                slider.slick("slickGoTo", slide.data('slick-index'));
                slider.slick('setPosition');

                slider.addClass('person-preview');
                setTimeout(function () {
                    slider.slick("slickSetOption", "slidesToShow", 1, false);
                    slider.slick('setPosition');
                }, 500);
                // slider.slick('slickFilter', function() {
                //
                //     console.log($(this));
                //
                // return $(this).find('.person-order-id-' + personId).length;
                // });

            });

            $('.close-icon').click(function () {

                slider.removeClass('person-preview');
                setTimeout(function () {
                    slider.slick("slickSetOption", "slidesToShow", 6, false);
                    slider.slick('setPosition');
                }, 500);
            });
        });


    })(jQuery)

</script>