<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nhs3_s
 */

get_header(); 
get_template_part( 'template-parts/reg-nav', get_post_format() );?>



<section id="<?php echo $post->post_name;?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>-->

	<?php
$args = array(
    'redirect' => home_url().'/profile', 
    'id_username' => 'user',
    'id_password' => 'pass',
   ) 
;?>
<div class="content-row">
  <div class="registration-box">

   <form action="../profile">
      <label for="inputUsername">Username:</label>
      <br>
      <input type="text" class="form-control" id="inputUsername" placeholder="Enter Username">
      <br>
      <label for="inputPassword">Password:</label>
      <br>
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      <br>
   <div class="row-fluid text-center">
        <button type="submit" class="btn" id="reg-submit-btn"> LOGIN </button>
  </div>

  </form>
  <!--<?php wp_login_form( $args ); ?>-->
  </div>
</div>



	
</section><!-- #post-## -->
<?php
//get_sidebar();
get_footer();