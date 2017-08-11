<?php get_header(); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
            <p><?php the_content(); ?></p>

        <?php endwhile; else : ?>

        	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

        <?php endif; ?>>
<?php get_footer(); ?>
</body>
</html>
