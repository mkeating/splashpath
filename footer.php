<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nhs3_s
 */

?>

	</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="row-fluid">
				<div class="site-info col-lg-4 col-med-4 col-sm-4 col-xs-12">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nhs3_s' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'nhs3_s' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'nhs3_s' ), 'nhs3_s', '<a href="http://underscores.me/" rel="designer">Michael Keating</a>' ); ?>
				</div><!-- .site-info -->

				<div class="col-lg-4 col-med-4 col-sm-4 col-xs-12">
						hi whats up
				</div>

				<div class="col-lg-4 col-med-4 col-sm-4 col-xs-12">
						hi whats up two
				</div>

			</div>
		</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>


</html>
