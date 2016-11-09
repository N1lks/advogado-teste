<?php /*
Template Name: Modelo Socios
*/
?>

<?php get_header(); ?>
 <header class="header-container" style="margin-bottom:50px">
    <div class="container" style="padding-left:0">
        <h2 class="text-left">Sócios</h2>
    </div>
</header>

<div class="row container">
    <div class="row col-lg-8 col-lg-offset-2">

<!--<?php query_posts(array('category_name'  => 'Socios')); ?>-->
<!--<?php if (have_posts()) : while (have_posts()) : the_post(); ?>-->

<?php
/*
	First we set how we'll want to sort the user list.
	* ID - User ID number.
	* user_login - User Login name.
	* user_nicename - User Nice name ( nice version of login name ).
	* user_email - User Email Address.
	* user_url - User Website URL.
	* user_registered - User Registration date.
*/

$sort= "user_registered";

//the default avatar to display in case gravatar is not available for a user
$default = "http://download.seaicons.com/icons/artdesigner/webtoys/48/User-black-icon.png";

//the size of the gravatar , here 96px
$size = 96;

//Build the custom database query to fetch all user IDs
$all_users_id = $wpdb->get_col( $wpdb->prepare(
	"SELECT $wpdb->users.ID FROM $wpdb->users ORDER BY %s ASC"
	, $sort ));


//we got all the IDs, now loop through them to get individual IDs
foreach ( $all_users_id as $i_users_id ) :

// get user info by calling get_userdata() on each id
$user = get_userdata( $i_users_id );

//GETTING INFO FROM EACH USERS
//get the user's email ID
$email = $user->user_email;

//build the gravatar URL
$grav_url = "http://www.gravatar.com/avatar.php?
gravatar_id=".md5( strtolower($email) ).
"&default=".urlencode($default).
"&size=".$size;

//get the user's full name
$user_fullname=$user->first_name . ' ' . $user->last_name;

//get the user's URI
$user_url=$user->user_url;

//get the user's nickname
$user_nickname=$user->nickname;

//get the user's description ( the biographical info field, )
$user_profile=$user->description;

?>
<!-- Now here you can display each users info using the variables defined above -->
    <div class="col-md-6">
            <div class="card">
                <div class="card-block">
                    <div class="card-title vertical-align col-centered">
                        <div class="col-md-4 col-sm-12">
                            <img src="<?php  $grav_url; ?>" class="img-circle img-responsive header-text" />
                        </div>
                        <div class="card-text col-md-8 col-sm-12 headehr-text">
                            <h4 class="center">
                                <?php  $user_fullname; ?><br />
                                <small><?php echo $user->last_name; ?></small>
                            </h4>
                        </div>

                    </div>
                    <div class="card-text col-sm-12">
                        <p class="top-text">
                           <?php echo $user->description; ?>
                        </p>
                        <a href="" class="card-link">VER MAIS</a>
                    </div>
                </div>
            </div>
        </div>
        
<!-- end the users loop. -->
<?php endforeach; ?>

        <!--<div class="col-md-6">
            <div class="card">
                <div class="card-block">
                    <div class="card-title vertical-align col-centered">
                        <div class="col-md-4 col-sm-12">
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                            <img src="<?php echo $url ?>" class="img-circle img-responsive header-text" />
                        </div>
                        <div class="card-text col-md-8 col-sm-12 headehr-text">
                            <h4 class="center">
                                <?php the_title(); ?><br />
                                <small>especialização</small>
                            </h4>
                        </div>

                    </div>
                    <div class="card-text col-sm-12">
                        <p class="top-text">
                            <?php the_content(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="card-link">VER MAIS</a>
                    </div>
                </div>
            </div>
        </div>-->

<!--<?php endwhile; endif; ?>-->

    </div>
</div>

<?php get_footer(); ?>
