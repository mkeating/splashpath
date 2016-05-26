<?php
/**
 * Template part for displaying sticky navigation for front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nhs3_s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer site-footer-sticky" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nhs3_s' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'nhs3_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'nhs3_s' ), 'nhs3_s', '<a href="http://underscores.me/" rel="designer">Michael Keating</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>


</html>

