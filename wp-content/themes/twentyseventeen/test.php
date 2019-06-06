<?php /* Template Name: Test */
get_header(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <!---->
            <!--		--><?php //// Show the selected frontpage content.
            //		if ( have_posts() ) :
            //			while ( have_posts() ) : the_post();
            //				get_template_part( 'template-parts/page/content', 'front-page' );
            //			endwhile;
            //		else :
            //			get_template_part( 'template-parts/post/content', 'none' );
            //		endif; ?>
            <!---->
            <!--		--><?php
            //		// Get each of our panels and show the post data.
            //		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.
            //
            //			/**
            //			 * Filter number of front page sections in Twenty Seventeen.
            //			 *
            //			 * @since Twenty Seventeen 1.0
            //			 *
            //			 * @param int $num_sections Number of front page sections.
            //			 */
            //			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
            //			global $twentyseventeencounter;
            //
            //			// Create a setting and control for each of the sections available in the theme.
            //			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
            //				$twentyseventeencounter = $i;
            //				twentyseventeen_front_page_section( null, $i );
            //			}
            //
            //	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>


        </main><!-- #main -->
    </div><!-- #primary -->
    <section id="first-section" class="first-section section-with-background" style="background-image: url('/wp-content/themes/twentyseventeen/assets/images/what we do-first section.jpg'); background-position: cover">
        <div class="content-wrapper">
            <h2> We Are Science Storytellers </h2>
            <div class="description">We plan, write, visualize, and engage around your core science narrative-across
                platforms from academic journals and ad boards to exhibit booths and digital media
            </div>
            <a href="#" class="btn btn-success">discover</a>
        </div>
    </section>
    <section id="slider-section" class="slider-section text-center">
        <div class="content-wrapper">
            <h2> Standout Leadership</h2>
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
            <h1>About us</h1>
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
