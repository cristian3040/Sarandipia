<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package shop-isle
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php if(is_page('10')){ ?> 
  		<?php dynamic_sidebar( 'sidebar' ); ?>
	<?php } ?>
</div><!-- #secondary -->
