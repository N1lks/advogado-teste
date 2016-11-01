<?php get_header(); ?>

<div id="content" class="body-content" style="background-color:#f2f2f2">
    <!-- Header -->
    <!-- <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="~/images/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Start Bootstrap</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
            </header>-->
    <!-- inicio Carousel de imagens topo -->

    <div style="margin-bottom:10px" class="carousel-top"
        data-flickity='{"pageDots": true, "wrapAround": true, "imagesLoaded": true}'>
        <div class="carousel-cell-top">
            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/content/images/Goiania_by-night.jpg" alt="image 1" />
        </div>
        <div class="carousel-cell-top">
            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/content/images/goiania-vaca-brava.jpg" alt="image 2" />
        </div>
    </div>
    <!-- fim Carousel de imagens topo -->
    <!-- notícias -->
    <?php query_posts('posts_per_page=2'); ?>  
    <div class="row row-centered container" style="margin-bottom:40px">
        <h3 class="text-center"><strong>Últimas notícias</strong></h3>
        <div style="margin-top:40px">
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-5 col-centered">
                <span class="top-text"><?php the_date(); ?></span>
                <h4 class="text-ml">
                    <strong><?php the_title(); ?></strong>
                </h4><p><?php the_content(); ?></p>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        </div>
    </div>
    <div class="text-center" style="padding:20px">
        <a class="btn btn-primary btn-lg" href="~/#">MAIS NOTÍCIAS</a>
    </div>
    <!-- /noticias -->

    <!-- Quem somos-->
    <div class="row row-centered " style="background-color:#F8F8F8">
        <div class="col-lg-7 col-xs-12">
            <img src="<?php bloginfo('template_url'); ?>/Content/images/quem-somos.png" class="img-responsive"/>
        </div>
        <div class="col-lg-5 col-xs-10 col-centered">
            <h4>Quem somos</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a class="btn btn-primary">CONTINUAR LENDO</a>
    </div>
</div>
<hr>
</div>
<?php get_footer(); ?>