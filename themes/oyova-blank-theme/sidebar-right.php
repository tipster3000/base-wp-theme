<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Oyova Blank Theme
 */
?>
	<div id="secondary" class="widget-area left_sidebar" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-right' ) ) : ?>
			<aside id="search" class="widget widget_search">
				You should throw some widgets into the Right Sidebar.
			</aside>
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
