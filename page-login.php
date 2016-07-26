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

<div class="registration-box">

 <!--<form>
  <fieldset class="form-group">
    <label for="inputEmail">Email:</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
  
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
  </fieldset>
 <div class="row-fluid text-center">
      <button type="submit" class="btn" id="reg-submit-btn"> SUBMIT </button>
</div>
</form>-->
<?php wp_login_form( $args ); ?>
</div>



	
</section><!-- #post-## -->
<?php
//get_sidebar();
get_footer();