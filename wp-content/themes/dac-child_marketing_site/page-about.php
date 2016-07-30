<?php get_header(); ?>

  <?php 
    $the_query = new WP_Query( array(  'pagename' => 'about' ) );
  ?>
  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
  <?php 
  $hero_image = get_field('hero_image');
  ?>

  <div class="jumbotron inner-page" style="background: url('<?php echo $hero_image['url']; ?>') no-repeat center center"></div>

  <div id="main-content" class="container main-content about-page">

    <div class="row about-intro">
      <div class="col-xs-10 col-xs-push-1 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3">
        <h1><?php the_field('about_intro_heading'); ?></h1>
        <p class="lead"><?php the_field('about_intro_text'); ?></p>
      </div>
    </div> 

    <!-- Timeline, adapted from http://bootsnipp.com/snippets/featured/zigzag-timeline-layout -->
    <div class="container timeline-container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="text-center"><?php the_field('timeline_heading');?></h3>
          <p class="timeline-intro"><?php the_field('timeline_intro_text');?></p>
          <ul class="timeline">
            <?php get_template_part('content', 'timeline'); ?>
          </ul>
        </div>
      </div>
    </div> <!-- / timeline -->

  </div> <!-- /main-content -->

  <?php endwhile; endif; wp_reset_postdata(); ?>

 <?php get_footer(); ?>