<?php 
  $the_query = new WP_Query( array(  'post_type' => 'testimonials' ) );
?>
<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 

  <?php 
  $args = array(
    'orderby' => 'rand',
    'posts_per_page' => 1,
    'post_type' => 'testimonials'
    );
  $posts = get_posts( $args ); 
  foreach($posts as $post) { 
  ?>

  <div class="row testimonials">
    <div class="col-sm-10 col-sm-push-1 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3">
      <blockquote>
        <?php the_field('testimonial_text'); ?>
        <p class="citation"><?php the_field('testimonial_citation'); ?><br/><span><?php the_field('testimonial_citation_secondary'); ?></span></p>
      </blockquote>
    </div>
  </div> 

  <?php break 2; }; ?>

<?php endwhile; endif; wp_reset_postdata(); ?>