<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="content-wrapper">
    <div class="wrap">

        <?php get_template_part('template-parts/footer/footer', 'widgets'); ?>
    </div><!-- .wrap -->
    </div>
</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

<!--<div class="site-overlay">-->
<!--    <img src="/wp-content/themes/twentyseventeen/assets/images/loader.svg" alt="loading" class="loading">-->
<!--</div>-->

</body>

</html>
