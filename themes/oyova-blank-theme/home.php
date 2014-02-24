<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Oyova Blank Theme
 */

get_header(); ?>
	<?php get_sidebar('left'); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'summary' ); ?>

				<?php
					/* Disabling comments for this theme
					 * If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
					*/
				?>

			<?php endwhile; // end of the loop. ?>
			<?php if(function_exists('wp_paginate')) {
				wp_paginate('range=4&anchor=2&nextpage=Next&previouspage=Previous');
			} ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
