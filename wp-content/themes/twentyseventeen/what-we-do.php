<?php /* Template Name: What we do */

get_header(); ?>

<?

$args = array(
    'numberposts' => 10,
    'post_type' => 'what_we_do',
    'meta_key' => 'order',
    'orderby' => 'meta_value',
    'order' => 'ASC'
);

$weDos = get_posts($args); ?>
    <div id="first-section">
        <? foreach ($weDos as $weDo): ?>

            <section class="<?= strtolower($weDo->post_title) ?>-section text-center section-with-background"
                     style="background-image: url(<?= get_field('background', $weDo->ID)['url'] ?>);">
                <div class="content-wrapper">
                    <h2 class="title-description-what-we-do"><?= $weDo->post_title ?></h2>
                    <div class="description"><?= $weDo->post_content ?></div>
                    <br>

                    <?
                    include('content-innovation.php') ?>
                    <div class="open-innovation-wrapper">
                        <div class="innovation <?= strtolower($weDo->post_title) ?>">
                            <span>Innovation</span>
                        </div>
                        <div class="what-we-do-img">
                            <img class="more-workshop" src="<?= get_field('icon', $weDo->ID)['url'] ?>" alt="">
                        </div>
                        <div class="open-innovation-block">
                            <img src="/resource/Images and video/btn_plus.svg" alt="">
                        </div>
                    </div>
                </div>

            </section>
        <?endforeach; ?>
    </div>
<?php get_footer();

