<?

$args = array(
    'numberposts' => 10,
    'post_type' => 'person',
    'order' => 'DESC'
);

$persons = get_posts($args);
?>

<div class="person-slider">
    <div class="slider-stage-wrapper">
        <? foreach ($persons as $person): ?>
            <div class="slider-item">
                <div class="slider-item-wrapper d-flex">
                    <div class="person-image"
                         style="background-image: url('<?php echo get_the_post_thumbnail_url($person->ID) ?>')">
                        <div class="description-bottom">
                            <h3 class="person-name">
                                <?= $person->post_title ?>
                            </h3>
                            <h4 class="person-title">
                                <?= get_field('job_title', $person->ID) ?>
                            </h4>
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
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>

    <img class="slider-arrow arrow-right" src="<?= get_template_directory_uri() ?>/assets/images/arrow-right.svg"
         alt="">
    <img class="slider-arrow arrow-left" src="<?= get_template_directory_uri() ?>/assets/images/arrow-left.svg"
         alt="">
</div>
<script>

    (function ($) {
        $(document).ready(function () {
            var slider = $('.person-slider');
            var sliderHeight = slider.height();
            var sliderWidth = slider.width();


            slider.css({height: sliderHeight});
            slider.find('.slider-stage-wrapper').css({position: 'absolute'});
            $('.slider-item').click(function () {

                if ($(this).is('.open')) {
                    $(this).css({'width': sliderWidth});
                    $(this).removeClass('open').find('.text-slider-wrapper ').slide('slide');
                } else {
                    $(this).css({'width': ''});
                }
            });
        });

    })(jQuery)
</script>