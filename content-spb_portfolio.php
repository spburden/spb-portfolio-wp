<div class="section container-fluid pageThree" id="pageThree">
    <div class="center">
      <h2 class="strong">Portfolio</h2>
    </div>
    <hr>
    <div class="center">
      <select class="">
        <option value="all">
          All
        </option>
        <option value="php">
          PHP
        </option>
        <option value="js">
          JavaScript
        </option>
        <option value="drupal">
          Drupal
        </option>
      </select>
    </div><br>
<?php
    $args = array(
        'post_type' => 'spb_portfolio'
    );
    // The Query
    $the_query = new WP_Query( $args );
?>
<div class='row'>
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
   
        <div class='col-sm-6 col-md-4 porto <?php the_field('primary_language'); ?>'>
            <?php if ( get_field('url_of_site') ): ?>
            <a href='<?php the_field('url_of_site'); ?>' target='_blank'>
            <?php endif; ?>
               <!-- <img src="<?php the_field('screenshot'); ?>" class="img-responsive thumbnail center-block screenshot" alt="" /> -->
               <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive thumbnail center-block screenshot']); ?>
               <?php if ( get_field('url_of_site') ): ?>
            </a>
            <?php endif; ?>
             <?php if ( get_field('github_url') ): ?>
                <a class="btn btn-default" href='<?php the_field('github_url'); ?>' target="_blank"><i  class="fa fa-github fa-2x"></i></a> 
            <?php endif; ?>
            <?php if ( get_field('url_of_site') ): ?>
            <a class='btn btn-default' href='<?php the_field('url_of_site'); ?>' target='_blank'><i class='fa fa-globe fa-2x'></i></a>
             <?php endif; ?>
        </div>
    
     <?php endwhile; endif; wp_reset_postdata(); ?>
</div>
</div>