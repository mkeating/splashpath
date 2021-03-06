<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nhs3_s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container-fluid main-container">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

		$args = array(
			'post_type' => 'landing_section',
			'orderby' 	=> 'order',
			'order'		=> 'ASC'
			);

		$landing_sections = new WP_Query($args);

		if( $landing_sections->have_posts() ){

			?>
			<script type="text/javascript">
			
				   jQuery(document).ready(function($){
					   $(window).bind('scroll', function(e) {

					   		//console.log(e);

						   //nav sticks to bottom at home, then top on scroll down
						   var navHeight = $( window ).height() - 70;
								 if ($(window).scrollTop() > navHeight) {

									 $('nav').addClass('navbar-fixed-top');
									 $(".navbar-brand").css('display', 'inline');
									 $('nav').removeClass('sticky-header-nav');
								 }
								 else {
									 
									 $('nav').addClass('sticky-header-nav');
									 $('nav').removeClass('navbar-fixed-top');

								 }

							//update hash on scroll

							$('section').each(function(){
								
								if( 
									$(this).offset().top < window.pageYOffset + 10  
									&& $(this).offset().top + $(this).height() > window.pageYOffset + 10 ){
										//this supports older browsers but causes an annoying jump on scroll up
										//window.location.hash = $(this).attr('id');
										window.history.replaceState(null, '#' + $(this).attr('id'), '#' + $(this).attr('id'));
								}
							});
							//remove hash and hide logo when at the top of the page
							if($(window).scrollTop() == 0){
								window.history.replaceState({}, document.title, ".");
								
								$(".navbar-brand").css('display', 'none');
							}						
						});
					});

			</script>
			<?php

			$count = 0;
			while( $landing_sections->have_posts() ){
					$landing_sections->the_post();
				?>
				<div class="row-fluid">
				
					<?php

					if($count == 0) {
					
					}

						get_template_part( 'template-parts/content-landing', get_post_format() );
					?>
				</div>

				<?php
				$count++;
			}
		}


			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			//the_posts_navigation();

		else :

			//get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</div> <!-- .container-fluid -->
		</main><!-- #main -->
	
	</div><!-- #primary -->
<!--<div class="push"></div>-->
<?php
#get_sidebar();
get_footer(); 
//get_template_part( 'template-parts/sticky-footer', get_post_format() );

