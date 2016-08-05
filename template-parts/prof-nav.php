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
		    <a class="navbar-brand" style="display:inline;" href="<?php bloginfo('url')?>"><img src="<?php echo get_theme_mod( 'site_logo' ); ?>" class="brand-logo"/> </a>
		  </div> 
		  <!-- Collect the nav links, forms, and other content for toggling --> 
		  <div class="collapse navbar-collapse navbar-ex1-collapse"> 
			   <ul class="nav navbar-nav pull-right" id="menu-main-nav">
			   	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home"><a href="<?php bloginfo('url')?>/contact">Contact</a></li>
			   	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home"><a href="<?php bloginfo('url')?>">Logout</a></li>
			
			   </ul>
		  </div>
</nav>
