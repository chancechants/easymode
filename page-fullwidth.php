<?php
/* Template Name: Full-width Template */
    get_header();
?>
	<!-- CONTACT PARALLAX -->
	<section class="featurette2" data-name="featurette2" data-type="background" data-speed="4">
		<h1 class="page-title"><?php the_title();?></h1>
	</section>

<!-- MAIN CONTENT -->
<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <section class="main-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>