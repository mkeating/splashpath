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
				var background_image = <?php echo json_encode(get_post_meta($post->ID, "_background_img", true));?> ;

				console.log(background_image);

				if(!background_image){
					$("#"+ID).css('background-color', background); 
				}
				else{
					$("#"+ID).css('background', 'url('+ background_image + ') no-repeat center center '); 
					$("#"+ID).css('-webkit-background-size', 'cover');
					$("#"+ID).css('-moz-background-size:', 'cover');
					$("#"+ID).css('-o-background-size', 'cover');
					$("#"+ID).css('background-size', 'cover');

				}
					
			});

			

		</script>
		
	</div><!-- .entry-content -->

	
</section><!-- #post-## -->
