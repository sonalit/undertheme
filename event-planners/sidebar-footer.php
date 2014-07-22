<?php
/* The footer sidebar
 *This new page as added in coordination with the addition of a widgetized footer
 */
//if there are no widgets currently set in sidebar 2, the return function runs and the file terminates//
if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>
<!--divider with the id supplementary set to wrap around another divider with id footer-widgets, which calls the dynamic sidebar
with the id sidebar-2, which was created in functions.php
If a widget is added to the footer, this code is what will display-->
<div id="supplementary">
	<div id="footer-widgets" class="footer-widgets widget-area clear" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #footer-sidebar -->
</div><!-- #supplementary -->
                