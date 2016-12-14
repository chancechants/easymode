<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EasyMode
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="post-details">
				<span class="fa fa-user"></span>
				<?php the_author(); ?>
				<span class="fa fa-clock-o"></span>
				<time><?php the_date(); ?></time>
				<span class="fa fa-folder-open-o"></span>
				<?php the_category(', '); ?>
				<?php if ( has_tag() ) { ?>
					<span class="fa fa-tags"></span><?php the_tags(' ', ', ', ''); ?>
				<?php } ?>
				<div class="post-comments-badge">
					<a href="<?php comments_link(); ?>"><span class="fa fa-comments"></span> <?php comments_number(0,1,'%'); ?></a>
				</div>
				<?php edit_post_link(' Edit','<i class="fa fa-pencil"></i>',''); ?>
			</div>		
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if (has_post_thumbnail() ) { ?>
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php } ?>
	<div class="post-body">
		<p><?php the_content(); ?><a href="post.html"></a></p>
	</div>

</article><!-- #post-## -->
