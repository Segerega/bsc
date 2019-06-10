<?php /* Template Name: Privacy Policy */
get_header(); ?>


<div class="content-wrapper">
    <?while ( have_posts() ) : the_post();?>
    <div class="descripton-contact-wrapper">
        <div class="title-frivacy-policy">
            <?the_title()?>
        </div>
        <div class="last-updated">
            <span>
                Last updated <?=get_the_modified_time('F jS, Y');?>
            </span>
        </div>
        <div class="content-description text-left">

            <?= get_the_content() ?>

        </div>
    </div>
    <? endwhile; // End of the loop.?>
</div>

<?php get_footer();
