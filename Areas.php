<?php /*
Template Name: Modelo Areas
*/
?>

<?php get_header(); ?>

<header class="header-container" style="margin-bottom:50px">
    <div class="container"  style="padding-left:0">
        <h2 class="text-left">Áreas de atuação</h2>
    </div>
</header>

<div class="row container">
    <div class="col-md-8 col-md-offset-2">


<?php 
    $meta = get_user_meta(get_the_author_meta( 'ID' ),'theme_fuse_extends_user_options',TRUE);
                    
    foreach( $meta as $key => $item )
    {
        if ( $key == 'facebook' || $key == 'twitter' || $key == 'in' || $key == 'atividade') $tfuse_meta[$key] = $item;
    }
?>
<?php query_posts(array('category_name'  => 'Areas')); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title text-ml">
                        <i class="fa fa-briefcase text-ml" aria-hidden="true"></i> Trabalhista
                    </h4>
                    <div class="card-text">
                        <span class="top-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </span>
                    </div>
                    <hr class="text-ml" />
                    <p class="card-text">
                        <h5><?php the_author_meta('first_name')?>&nbsp;<?php the_author_meta('last_name'); ?> <!-- GABIARRA HUEHUE--></h5>
                        <h6 class="top-text"><?php $meta ?></h6>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="card-link">VER MAIS</a>
                </div>
            </div>
        </div>
<?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
