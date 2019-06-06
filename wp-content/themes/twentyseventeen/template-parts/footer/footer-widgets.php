<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="row section-footer">
    <div class="col col-sm-12 navigation-top">
        <?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
            <a  class="scroll-to" data-scroll-to="body"><img  class="slider-arrow arrow-top" src="<?=get_template_directory_uri()?>/assets/images/arrow-up.svg" alt=""><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
        <?php endif; ?>
    </div>
    <div class="col col-md-6 first-section-footer">
        <div class="copyright">&copy;2019 Bioscience Communcations | A Daniel J. Edelman Company</div>
        <div class="widget-column footer-widget-2"> <?php dynamic_sidebar('sidebar-2'); ?> </div>
    </div>
    <div class="col col-md-6 second-section-footer">
        <div class="navigation-bottom">
            <div class="wrap">
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
    </div>
</div>

