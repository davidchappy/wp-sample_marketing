<?php 

  $args = array( 
    'post_type' => 'timeline',
  );
  $query = new WP_Query( $args );
?>

<?php $post_counter = 0; ?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

<?php $post_counter++; ?>

<?php $image = get_field('timeline_item_image'); ?>
  
  <li <?php if( $query->current_post % 2 !== 0 ) : ?>class="timeline-inverted"<?php endif; ?>>
    <div class="timeline-image">
      <img class="img-circle img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
    <div class="timeline-panel">
      <div class="timeline-heading">
        <h4><?php the_field('timeline_item_date'); ?></h4>
        <h4 class="subheading"><?php the_field('timeline_item_subtitle'); ?></h4>
      </div>
      <div class="timeline-body">
        <p class="text-muted">
          <?php the_field('timeline_item_text'); ?>
        </p>
      </div>
    </div>
    <?php $current_post_number = $query->post_count; ?>
    <?php if( $post_counter < $current_post_number ) : ?> 
      <div class="line"></div>
    <?php else : ?>
    <?php endif; ?>
  </li>

<?php endwhile; endif; wp_reset_postdata(); ?>