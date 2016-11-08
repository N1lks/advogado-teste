<?php /*
Template Name: Modelo Artigos
*/
?>


<?php get_header(); ?>

<header class="header-container" style="margin-bottom:50px">
    <div class="container" style="padding-left:0">
        <h2 class="text-left">Artigos</h2>
    </div>
</header>

<div class="row container">
    <div class="col-md-8 col-md-offset-2 panel">
        
    <?php query_posts(array('category_name'  => 'Artigos',
                            'posts_per_page' => '6')); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="card card-block text-xs-center">
            <h6 class="card-title text-muted">01/01/2016</h6>
            <h4 class="card-title text-ml">Lorem ipsum dolor</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur eget arcu non aliquet. Sed in eros laoreet.</p>
        </div>
        <hr class="ml" />
    <?php endwhile; endif; ?>

        <div class="central">
            <div class="navbar-left header-text" style="margin-top:30px">
                <a class="btn btn-default btn-ml" href="<?php next_post_link('NOVOS'); ?>"><i class="fa fa-long-arrow-left "></i> </a>
            </div>

            <div class="navbar-right header-text" style="margin-top:30px">
                <a class="btn btn-default text-ml btn-ml" href="<?php previous_posts_link('ANTIGOS'); ?>"><i class="fa fa-long-arrow-right text-ml"></i> ANTIGOS</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>