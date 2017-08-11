<?php
/**
 * Template for displaying spb portfolio custom post type entries
 */
?>
<?php get_header(); ?>

<!-- <section class="row">
    <div class="text-center">
        <div class="" style="margin: 100px;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>

        <?php endwhile; endif; ?>

        </div>
    </div>
</section> -->

<?php get_template_part( 'content', 'sections' ); ?>

<?php get_template_part( 'content', 'spb_portfolio' ); ?>


<?php get_footer(); ?>