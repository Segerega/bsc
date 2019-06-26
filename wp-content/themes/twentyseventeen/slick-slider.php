<?

$args = array(
    'numberposts' => 20,
    'post_type' => 'person',
    'hide' => false,
    'meta_key' => 'order',
    'orderby' => 'meta_value_num',
    'order' => 'asc',
);

$persons = get_posts($args);
?>
<div class="slider-wrapper">
    <section class="person-slider slider">
        <? foreach ($persons as $person): ?>
            <div class="slider-item person-order-id-<?= $person->ID ?>"
                 data-person-id="<?= $person->ID ?>"
                 data-order-id="<?= get_field('order', $person->ID) ?>">
                <div class="slider-item-wrapper ">
                    <div class="slider-item-content clearfix">
                        <div class="person-image"

                            <?
                            $image_id = get_post_thumbnail_id($person->ID);
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                            $image_title = get_the_title($image_id);
                            ?>

                             alt="<?= $image_alt ? $image_alt : $image_title ?>"
                             style="background-image: url('<?php echo get_the_post_thumbnail_url($person->ID) ?>')">
                            <div class="person-image-second"
                                 style="background-image: url('<?php echo get_field('person_second_image', $person->ID)['url'] ?>')"
                                 alt="<?= get_field('person_second_image', $person->ID)['title'] ? get_field('person_second_image', $person->ID)['alt'] : get_field('person_second_image', $person->ID)['title'] ?>"
                            >
                            </div>
                            <div class="person-image-second-overlay"></div>
                            <div class="person-image-third"
                                 alt="<?= get_field('person_second_image', $person->ID)['title'] ? get_field('person_second_image', $person->ID)['alt'] : get_field('person_second_image', $person->ID)['title'] ?>"
                                 style="background-image: url('<?php echo get_field('person_third_image', $person->ID)['url'] ?>')">
                            </div>
                        </div>

                        <div class="text-slider-wrapper">
                            <div class="text-slider-block">

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
                        </div>
                    </div>
                    <div class="slider-item-footer">
                        <div class="title-bottom">
                            <div class="person-name">
                                <?= $person->post_title ?>
                            </div>
                            <div class="person-title">
                                <?= get_field('short_job_title', $person->ID) ?>
                            </div>
                        </div>
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

            function slideToShow() {

                if ($(window).width() > 992 && !slider.is('.person-preview')) {
                    return 6;
                }

                if ($(window).width() > 768 && !slider.is('.person-preview')) {
                    return 3;
                }

                if ($(window).width() > 470 && !slider.is('.person-preview')) {
                    return 2;
                }
                return 1;
            }

            slider.slick({
                vertical: false,
                // dots: true,
                // variableWidth: true,
                slidesToScroll: 1,
                slidesToShow: slideToShow(),
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

                if ($(e.target).is(".close-icon")) {
                    return;
                }

                var $this = $(this),

                    slide = $(this);


                setTimeout(function () {
                    slider.addClass('person-preview');
                    slider.slick("slickSetOption", "slidesToShow", 1, false);
                    slider.slick('setPosition');
                    slider.slick("slickGoTo", slide.data('slick-index'));
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

                setTimeout(function () {
                    slider.removeClass('person-preview');
                    slider.slick("slickSetOption", "slidesToShow", slideToShow(), false);
                    slider.slick('setPosition');
                }, 500);
            });
            $(window).resize(function () {
                setTimeout(function () {
                    slider.slick("slickSetOption", "slidesToShow", slideToShow(), false);
                }, 500);
            })
        });


    })(jQuery)

</script>