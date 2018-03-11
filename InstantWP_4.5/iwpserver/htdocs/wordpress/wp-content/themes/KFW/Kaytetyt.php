<?php /* Template Name: Käytetyt */ ?>
<?php get_header(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 mainContent">
                <?php 
                    // the query
                    $the_query = new WP_Query(array(
                    'category_name' => 'tuotteet',
                    'posts_per_page' => 10,
                    ));
                ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

                    <?php if ( $the_query->current_post % 2 == 0 ) : ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();?>

                    <?php else : ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();?>

                    <?php endif; ?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p>No posts to display</p>

                <?php endif; ?>
            </div><!-- end main content -->
            <div class="col-md-3 col-xl-2" id="sidebar">   
                <?php get_sidebar(); ?>
            </div><!-- end sidebar -->
        </div>
    </div>


<?php get_footer(); ?>