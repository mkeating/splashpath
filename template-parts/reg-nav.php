<?php
/**
 * Template part for displaying sticky navigation for front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nhs3_s
 */

?>

<nav class="navbar navbar-custom " role="navigation"> 
		<!-- Brand and toggle get grouped for better mobile display --> 
		  <div class="navbar-header"> 
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
		      <span class="sr-only">Toggle navigation</span> 
		      <span class="icon-bar"></span> 
		      <span class="icon-bar"></span> 
		      <span class="icon-bar"></span> 
		    </button> 
		    <a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="<?php echo get_theme_mod( 'site_logo' ); ?>" class="brand-logo"/> </a>
		  </div> 
		  <!-- Collect the nav links, forms, and other content for toggling --> 
		  <div class="collapse navbar-collapse navbar-ex1-collapse"> 
		    <?php /* Primary navigation */
				wp_nav_menu( array(
				  'menu' 			=> 'main-nav',
				  'depth' 			=> 3,
				  'container'		=> false,
				  'container_class'	=> 'collapse navbar-collapse navbar-ex1-collapse',
				  'menu_class' 		=> 'nav navbar-nav pull-right',
				  //Process nav menu using our custom nav walker
				  'walker' 		=> new wp_bootstrap_navwalker())
				);
				?>
		  </div>
		</nav>
