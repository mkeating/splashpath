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
		<div class="menu-buffer"> </div>
				

				
		<div class="row-fluid content-row">
			<h1> <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> </h1>
				<?php
					the_content();	
				?>

		</div>
		
				
			<script type="text/javascript">

				jQuery(function($) {
					var ID = <?php echo json_encode($post->post_name);?> ;
					var background = <?php echo json_encode(get_post_meta($post->ID, "_background", true));?> ;
					var background_image = <?php echo json_encode(get_post_meta($post->ID, "_background_img", true));?> ;
					/*var background_image_wide = <?php echo json_encode(get_post_meta($post->ID, "_background_img_wide", true));?> ;
					var background_image_portrait = <?php echo json_encode(get_post_meta($post->ID, "_background_img_portrait", true));?> ;

					console.log("testing bg wide:" + background_image_wide);*/


					if(background){
						$("#"+ID).css('background-color', background); 
					}
					if(background_image){
						$("#"+ID).css('background', 'url('+ background_image + ') no-repeat center center '); 
						$("#"+ID).css('-webkit-background-size', 'cover');
						$("#"+ID).css('-moz-background-size:', 'cover');
						$("#"+ID).css('-o-background-size', 'cover');
						$("#"+ID).css('background-size', 'cover');
					}
					/*
					if (background_image_wide && background_image_portrait) {
						$("#"+ID).css('background', 'url('+ background_image_portrait + ') no-repeat center center '); 
						$("#"+ID).css('-webkit-background-size', 'cover');
						$("#"+ID).css('-moz-background-size:', 'cover');
						$("#"+ID).css('-o-background-size', 'cover');
						$("#"+ID).css('background-size', 'cover');
					}*/

					var next_target = <?php echo json_encode(get_post_meta($post->ID, "_nxt_btn_target", true));?> ;
					var next_text = <?php echo json_encode(get_post_meta($post->ID, "_nxt_btn_text", true));?> ;



					//if next_target, add the next button
					if(next_target != '') {

						$("#<?php echo $post->post_name?> > .landing-content").append("<div class='row-fluid button-row text-center'></div>");

						$( "#<?php echo $post->post_name?> > .landing-content > .button-row" )
							.append( "<button id='<?php echo $post->post_name.'-btn';?>' class='btn btn-default landing-section-btn' >" + next_text + "</button>" );
							console.log('next text:' + next_text);

					}
						
						$("#<?php echo $post->post_name.'-btn';?>").click(function(){
							
							jQuery( "html, body" ).animate({scrollTop: $("#"+next_target).offset().top  }, 800);
							return false; 
							});	
				});

			</script>
			
				<script type="text/javascript">


				</script>
		
	</div><!-- .entry-content -->

	
</section><!-- #post-## -->
