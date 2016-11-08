<?php /*
Template Name: Modelo Index
*/
?>

<?php get_header(); ?>

<header class="header-container" style="margin-bottom:50px">
    <div class="container" style="padding-left:0">
        <h2 class="text-left"><?php single_cat_title(); ?></h2>
    </div>
</header>

<div class="row container">
    <div class="col-md-2 text-left">
        <div class="hidden-sm hidden-xs">
            <p class=""><strong>COMPARTILHE:</strong></p>
            <ul class="list-inline top-text text-left ">
                <li>
                    <a href="~/#"><i class="fa fa-fw fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="~/#"><i class="fa fa-fw fa-linkedin-square"></i></a>
                </li>
            </ul>
        </div>
        <div class="visible-xs-inline visible-sm-inline" style="width:90%">
            <ul class="list-inline top-text">
                <li>
                    <p class=""><strong>COMPARTILHE:</strong></p>
                </li>
                <li>
                    <a href="~/#"><i class="fa fa-fw fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="~/#"><i class="fa fa-fw fa-linkedin-square"></i></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-md-8 panel">
        <div class="card central">

<?php /* query_posts(array('category_name'  => 'Noticias')); */ ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
            <div class="card-text">
                <h4 class="card-title header-text text-ml" style="margin-bottom:0;">
                    <?php the_title(); ?><br /><small class="text-muted"><?php the_date(); ?></small>
                </h4>
                <div class="card-text">
                    <?php the_content(); ?>
                </div>
                <div class="row row-centered left">
                    <div class="navbar-left" style="margin-top:30px">
                        <a class="btn btn-default text-ml btn-ml" href="~/Home/Artigos"><i class="fa fa-long-arrow-left text-ml"></i> VOLTAR</a>
                    </div>
                </div>
            </div>
            
<?php endwhile; endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
