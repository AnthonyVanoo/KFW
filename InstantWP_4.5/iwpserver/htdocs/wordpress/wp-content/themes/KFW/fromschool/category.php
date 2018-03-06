<?php get_header();?>

<div class="container-fluid mt-2 mb-2">
    <div class="row">
        <div class="col-lg-8">

            <?php 

            if ( have_posts() ) : while ( have_posts() ) : the_post();

            ?>

            <h1><?php the_title(); ?> </h1>
            <p><?php the_content(); ?></p>

            <?php endwhile; else: ?>

                No posts for you!
            <?php endif; ?>
        </div>
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer();?>