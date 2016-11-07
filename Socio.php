<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-md-6">
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
        </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
