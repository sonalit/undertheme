<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Event Planners
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <!-- the function below calls the file sidebar-footer.php and if there are widgets in the footer sidebar that was added, the code in that file will display-->
	<?php get_sidebar('footer');?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'event-planners' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'event-planners' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'event-planners' ), 'Event Planners', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
