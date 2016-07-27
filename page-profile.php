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
    $current_user = wp_get_current_user();
    /**
     * @example Safe usage: $current_user = wp_get_current_user();
     * if ( !($current_user instanceof WP_User) )
     *     return;
     */

    global $wpdb;



    $username = $current_user->user_login;
    $NHSID = $current_user->NHSID;

    //$email = $wpdb->get_var("SELECT user_email FROM wp_users WHERE user_login = 'danielpataki' ");

    //$current_survey = $wpdb->get_results( "SELECT * FROM wp_users");

   /* echo 'Username: ' . $current_user->user_login . '<br />';
    echo 'User email: ' . $current_user->user_email . '<br />';
    echo 'User first name: ' . $current_user->user_firstname . '<br />';
    echo 'User last name: ' . $current_user->user_lastname . '<br />';
    echo 'User display name: ' . $current_user->display_name . '<br />';
    echo 'User ID: ' . $current_user->ID . '<br />';
    echo 'NHS3ID: ' . $current_user->NHSID . '<br />';*/
?>

<h2 class="text-center">Hi <?php echo $username ?>! Your current survey is:</h2>
<a href="" class="survey-link">
    <div class="current-survey-panel"> 
        <div class="current-survey-image">
            <div class="current-survey-content">
                <div class="current-survey-title"> Module 2 </div>
                <div class="current-survey-description"> This survey will ask you about what foods you eat, what vitamins and supplements you take, and what physical activity you engage in</div>
                <div class="current-survey-duration"> 120 questions | 45 minutes </div>
                </div>
        </div>
    </div>
</a>

<h2 class="text-center">Need to update your contact info?</h2>

<a class="btn" href=""> 
    <button class="btn" id="update-btn">Click here!</button>
</a>


<h2 class="text-center">Need to change your password?</h2>
<div class="registration-box update-box">
 <form>
    <label for="newPassord">New Password:</label>
    <input type="password" class="form-control" id="inputPassword" >

    <label for="newPassordConfirm">Confirm New Password:</label>
    <input type="password" class="form-control" id="inputPassword" >
    <br />
 <div class="row-fluid text-center">
      <button type="submit" class="btn" id="reg-submit-btn"> SUBMIT </button>
</div>

</form>

</div>

<div class="row" id="completed-surveys"> 


<h2 class="text-center">Completed Surveys</h2>

        

            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="completed-survey">
                 <div class="glyphicon glyphicon-ok"<div class="completed-title pull-left">  Body Image</div><div class="completed-date pull-right"> Completed: 12/3/13</div>
              </div> 
            </div>
            
            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="completed-survey">
                 <div class="glyphicon glyphicon-ok"<div class="completed-title pull-left">  Stress and Violence</div><div class="completed-date pull-right"> Completed: 12/3/13</div>
              </div> 
            </div>

            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="completed-survey">
                 <div class="glyphicon glyphicon-ok"<div class="completed-title pull-left">  Environment</div><div class="completed-date pull-right"> Completed: 12/3/13</div>
              </div> 
            </div>

            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="completed-survey">
                 <div class="glyphicon glyphicon-ok"<div class="completed-title pull-left">  Contraception</div><div class="completed-date pull-right"> Completed: 12/3/13</div>
              </div> 
            </div>

            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="completed-survey">
                 <div class="glyphicon glyphicon-ok"<div class="completed-title pull-left">  Sexual Health</div><div class="completed-date pull-right"> Completed: 12/3/13</div>
              </div> 
            </div>

            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="completed-survey">
                 <div class="glyphicon glyphicon-ok"<div class="completed-title pull-left">  Infertility</div><div class="completed-date pull-right"> Completed: 12/3/13</div>
              </div> 
            </div>

           
          
          </div>
        </div>


	
</section><!-- #post-## -->
<?php
//get_sidebar();
get_footer();