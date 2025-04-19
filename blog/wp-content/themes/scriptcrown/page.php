<?php get_header(); ?>


<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>  

                <h4><?php the_title(); ?></h4>

                <?php the_content(); ?>

                <?php endwhile; else: ?>

                <h1><?php _e('Not Found')?></h1>

                <p><?php _e('Sorry,no posts matched your criteria.'); ?></p>

                <?php endif; ?>
            </div>       
        </div>       
    </div>       
</section>       


<?php get_footer(); ?>