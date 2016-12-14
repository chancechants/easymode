<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package EasyMode
 */

get_header(); ?>

	<!-- SEARCH PARALLAX -->
	<section class="featurette2" data-name="featurette2" data-type="background" data-speed="4">
		<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'easymode' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</section>

	<div class="container">
		<div class="row" id="primary">
			<main id="content" class="col-sm-8">
				
				<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						* Run the loop for the search to output the results.
						* If you want to overload this in a child theme then include a file
						* called content-search.php and that will be used instead.
						*/
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</main><!-- #main -->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
		</div><!-- #primary -->
	</div>

<?php

get_footer();
