<?php 

  $args = array( 
    'post_type' => 'featurettes',
  );
  $query = new WP_Query( $args );

?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

<?php $image = get_field('featurette_image'); ?>

<?php if( $query->current_post % 2 == 0 ) : ?>

  

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="my-tooltip dark-tooltip"><p>These 'featurettes' are optional content highlighting areas, unlimited in number, and will alternate left/right for each new one created.</p><br /><span class="glyphicon glyphicon-remove close-my-tooltip"></span></div>
    <div class="col-lg-5">
      <img class="featurette-image img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>">
    </div>
    <div class="col-lg-7">
      <h2 class="featurette-heading"><?php the_field('featurette_title'); ?> <span class="text-muted"> <?php the_field('featurette_muted_title'); ?></span></h2>
      <p class="lead"><?php the_field('featurette_text'); ?></p>
      <a href="<?php the_field('featurette_link'); ?>" class="btn btn-primary btn-lg"><?php the_field('featurette_button'); ?></a>
    </div>
  </div>

<?php else : ?>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-lg-5 col-lg-push-7">
      <img class="featurette-image img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>">
    </div>
    <div class="col-lg-7 col-lg-pull-5">
      <h2 class="featurette-heading"><?php the_field('featurette_title'); ?> <span class="text-muted"> <?php the_field('featurette_muted_title'); ?></span></h2>
      <p class="lead"><?php the_field('featurette_text'); ?></p>
      <a href="<?php the_field('featurette_link'); ?>" class="btn btn-primary btn-lg"><?php the_field('featurette_button'); ?></a>
    </div>
  </div>

<?php endif; ?>

<?php endwhile; endif; wp_reset_postdata(); ?>
     