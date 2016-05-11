<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nhs3_s
 */

?>

<section id="<?php echo $post->post_name;?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>-->

	<div class="landing-content">
		<?php
			the_content();	
			
		?>

		<script type="text/javascript">

			jQuery(function($) {
				var ID = <?php echo json_encode($post->post_name);?> ;
				var background = <?php echo json_encode(get_post_meta($post->ID, "_background", true));?> ;

				$("#"+ID).css('background-color', background); 
				
			});

			

		</script>
		
	</div><!-- .entry-content -->

	
</section><!-- #post-## -->
