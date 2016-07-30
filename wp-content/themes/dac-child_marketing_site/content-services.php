<?php 

  $args = array( 
    'post_type' => 'service-items',
  );
  $query = new WP_Query( $args );

?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

<?php $image = get_field('service_item_image'); ?>

<?php if( $query->current_post % 2 == 0 ) : ?>

  <div class="row service-item even">
    <div class="container">
      <div class="service-image-container col-lg-6">
        <img class="service-image img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>">
      </div>
      <div class="col-lg-6">
        <h2 class="service-heading"><?php the_field('service_item_title'); ?><br/><h4 class="text-muted"><?php the_field('service_item_subtitle'); ?></h4></h2>
        <p class="lead"><?php the_field('service_item_text'); ?></p>
      </div>
    </div>
  </div>

<?php else : ?>

  <div class="row service-item odd">
    <div class="container">
      <div class="service-image-container col-lg-6 col-lg-push-6">
        <img class="service-image img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>">
      </div>
      <div class="col-lg-6 col-lg-pull-6">
        <h2 class="service-heading"><?php the_field('service_item_title'); ?><br/><h4 class="text-muted"><?php the_field('service_item_subtitle'); ?></h4></h2>
        <p class="lead"><?php the_field('service_item_text'); ?></p>
      </div>
    </div>
  </div>

<?php endif; ?>

<?php endwhile; endif; wp_reset_postdata(); ?>
     