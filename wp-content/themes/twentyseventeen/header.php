<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

session_start();
//var_dump($_SESSION['video_id']);

if(time() - $_SESSION['time_video_id'] > 10){
    $_SESSION['time_video_id'] = time();
    $_SESSION['video_id'] = (int)$_SESSION['video_id'] + 1;
}

//var_dump($_SESSION['video_id']);

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
          rel="stylesheet">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php wp_head(); ?>

    <script>
        console.log(<?=$_SESSION['video_id']?>, <?=time() - $_SESSION['time_video_id']?>, <?=(int)$_SESSION['video_id']  % 2 + 1?>);
    </script>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'twentyseventeen'); ?></a>
    <header id="masthead" class="site-header" role="banner">
        <div class="content-wrapper">
            <?php if (has_nav_menu('top')) : ?>
                <div class="navigation-top desktop-wrapper">
                    <div class="wrap">
                        <a href="/">
                            <img class="logo-img" src="/resource/Images and video/logo_BioScience.svg" alt="">
                        </a>
                        <div class="wrap-menu-social-menu wp-clearfix">
                            <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
                            <?php
                            if (is_active_sidebar('social-icons')) : ?>
                                <div class="widget-column menu-social-icons">
                                    <?php dynamic_sidebar('social-icons'); ?>
                                </div><!-- .widget-column menu-social-icons -->

                            <?php endif ?>

                        </div><!-- .wrap-menu-social-menu -->
                    </div><!-- .wrap -->
                </div><!-- .navigation-top -->

                <div class="mobile-menu-wrapper">
                    <div class="navigation-top">
                        <div class="wrap">
                                <div class="burger_trigger">
                                    <a href="/">
                                        <img class="logo-img" src="/resource/Images and video/logo_BioScience.svg" alt="">
                                    </a>
                                    <img class="open_burger_trigger"
                                         src="/wp-content/themes/twentyseventeen/assets/images/menu-button.png" alt="">
                                </div>
                            <div class="menu-wrapper">
                                <img class="close_burger_trigger"
                                     src="/wp-content/themes/twentyseventeen/assets/images/close.svg" alt="">

                                <div class="wrap-menu-social-menu wp-clearfix">
                                    <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
                                    <?php
                                    if (is_active_sidebar('social-icons')) : ?>
                                        <div class="widget-column menu-social-icons">
                                            <?php dynamic_sidebar('social-icons'); ?>
                                        </div><!-- .widget-column menu-social-icons -->

                                    <?php endif ?>
                                </div><!-- .wrap-menu-social-menu -->

                            </div>
                        </div><!-- .wrap -->
                    </div><!-- .navigation-top -->
                </div>
            <?php endif; ?>
        </div>
    </header>


    <?php
    if (in_array($post->ID, [13, 10])) {
        include('template-parts/header/video-header.php');
    } else {
        include('template-parts/header/header.php');
    }

    /*
     * If a regular post or page, and not the front page, show the featured image.
     * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
     */
    if ((is_single() || (is_page() && !twentyseventeen_is_frontpage())) && has_post_thumbnail(get_queried_object_id())) :
        echo '<div class="single-featured-image-header">';
        echo get_the_post_thumbnail(get_queried_object_id(), 'twentyseventeen-featured-image');
        echo '</div><!-- .single-featured-image-header -->';
    endif;
    ?>