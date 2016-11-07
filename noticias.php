<?php /*
Template Name: Modelo Noticias
*/
?>

<?php get_header(); ?>
<header class="header-container" style="margin-bottom:50px">
    <div class="container" style="padding-left:0">
        <h2 class="text-left">Notícias</h2>
    </div>
</header>

<div class="row container">
    <div class="col-md-8 col-md-offset-2 panel">

<?php query_posts(array('category_name'  => 'Noticias',
                        'posts_per_page' => '6')); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="card card-block text-xs-center">
            <h6 class="card-title text-muted"><?php the_date(); ?></h6>
            <h4 class="card-title text-ml"><?php the_title(); ?></h4>
            <p class="card-text"><?php the_content(); ?></p>
        </div>
        <hr class="ml" />
<?php endwhile; endif; ?>
    <!-- PARTE FIXA -->
        <div class="central">
            <div class="navbar-left header-text" style="margin-top:30px">
                <a class="btn btn-default btn-ml" href="~/Home/Artigos"><i class="fa fa-long-arrow-left "></i> NOVOS</a>
            </div>

            <div class="navbar-right header-text" style="margin-top:30px">
                <a class="btn btn-default text-ml btn-ml" href="~/Home/Artigos"><i class="fa fa-long-arrow-right text-ml"></i> ANTIGOS</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
