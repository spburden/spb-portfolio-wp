<?php
    $args = array(
        'post_type' => 'section'
    );
    // The Query
    $the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php the_content(); ?>
 <?php endwhile; endif; wp_reset_postdata(); ?>