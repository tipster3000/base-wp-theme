<?php
/**
 * @package Oyova Blank Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php echo get_permalink() ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>

		<div class="entry-meta">
			<?php oyova_blank_theme_posted_on($display_category = true); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'oyova-blank-theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
