<?php get_header();?>

<?php 
// the query
$the_query = new WP_Query(array(
'category_name' => 'news',
'posts_per_page' => 3,
));
?>

<?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

    <?php if ( $the_query->current_post % 2 == 0 ) : ?>

        <section>
            <div class="container d-flex">
                <div class="row d-flex">
                    <div class="col-lg-7 content align-self-center text-center-sm"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php the_excerpt(); ?></p></div>
                    <div class="col-lg-5 picture"><?php the_post_thumbnail();?></div>
                </div>
            </div>
        </section>

        <?php else : ?>

        <section class="dark">
            <div class="container d-flex">
                <div class="row d-flex flex-row-reverse">
                    <div class="col-lg-7 content align-self-center text-center-sm"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php the_excerpt(); ?></p></div>
                    <div class="col-lg-5 picture"><?php the_post_thumbnail();?></div>
                </div>
            </div>
        </section>

    <?php endif; ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php else : ?>
    <p>No posts to display</p>

<?php endif; ?>

    
<?php get_footer();?>