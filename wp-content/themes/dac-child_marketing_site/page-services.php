<?php get_header(); ?>

  <?php 
    $the_query = new WP_Query( array(  'pagename' => 'services' ) );
  ?>
  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
  <?php 
  $hero_image = get_field('services_banner_image');
  ?>

  <div class="jumbotron inner-page services-page" style="background: url('<?php echo $hero_image['url']; ?>') no-repeat center center"></div>

  <div id="main-content" class="container main-content services-page">

    <div class="row services-intro">
      <div class="col-xs-10 col-xs-push-1 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3">
        <h1><?php the_field('services_intro_heading'); ?></h1>
        <p class="lead"><?php the_field('services_intro_text'); ?></p>
      </div>
    </div> 

    <?php get_template_part('content', 'services'); ?>

    <?php get_template_part('content', 'testimonials'); ?>

  <?php endwhile; endif; wp_reset_postdata(); ?>

  </div> <!-- /main-content -->

 <?php get_footer(); ?>