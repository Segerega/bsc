<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <div id="primary" class="content-area">
    </div><!-- #primary -->
    <section id="first-section" class="first-section section-with-background" style="background-image: url('/wp-content/themes/twentyseventeen/assets/images/what we do-first section.jpg'); background-position: cover">
        <div class="content-wrapper">
            <h2 class="title-description-who-we-are"> We Are Science Storytellers </h2>
            <div class="description">We plan, write, visualize, and engage around your core science narrative-across
                platforms from academic journals and ad boards to exhibit booths and digital media
            </div>
            <br>
            <a href="#" class="btn btn-success">discover</a>
        </div>
    </section>
    <section id="slider-section" class="slider-section text-center">
        <div class="content-wrapper">
            <h2 class="title-description-who-we-are"> Standout Leadership</h2>
            <div class="description">
                Every BioScience account team is a custom blendof content, industry, and executional expertise—amplyseasoned by our leadership below
            </div>
        </div>
    </section>

    <div class="content-wrapper">
        <? include("slick-slider.php"); ?>
    </div>
    <section class="second-section section-with-background" style="background-image: url('/wp-content/themes/twentyseventeen/assets/images/BKG_home02_cells.jpg');">
        <div class="content-wrapper">
            <h2 class="title-description-who-we-are">About Us</h2>
            <h3>A REPUTATION BUILT ON SCIENCE PLUS VISION </h3>
            <div class="description">With principal offices in New York City and London and some 75 staffers,
                BioScience
                Communications has gained solid recognition as a partner to biopharma, medical
                device, and related businesses worldwide. The freedom and flexibility afforded BioScience under the
                umbrella of family-held Daniel J. Edelman, Inc., gives rise
                to unique creative and competitive advantages.
            </div>
            <div class="description">
                Since its founding in 1995, BioScience has adapted to, and thrived under, profound changes in healthcare
                industry regulation, as well as exciting scientific advances
                from genomics to immunotherapy.
                Since its founding in 1995, BioScience has adapted to, and thrived under, profound changes in healthcare
                industry regulation, as well as exciting scientific advances
                from genomics to immunotherapy.
            </div>
            <div class="description">
                In tandem with these changes, BioScience Communications has expanded and adapted its core capabilities,
                from science narrative development to award-winning visualizations, to serve
                evolving industry needs.
            </div>
            <div class="description">
                Clients consistently give us high marks for strategic counsel, creative solutions,
                and flawless execution - all with meticulous attention to compliance. Our remarkable retention rate
                among both senior and up-and-coming personnel reflects an invigorating work environment and the
                continuity
                of service essential to quality work.
            </div>
        </div>
    </section>
<?php get_footer();
