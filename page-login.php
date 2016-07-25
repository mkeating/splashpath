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
	
<?php wp_login_form( $args ); ?>

	
</section><!-- #post-## -->
<?php
//get_sidebar();
get_footer();