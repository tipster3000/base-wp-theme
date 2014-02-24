<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Oyova Blank Theme
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<<aside id="search" class="widget widget_search">
				You should throw some widgets into the Default Sidebar
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
