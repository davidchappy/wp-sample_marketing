<?php get_header() ?>

  <!-- Hero Banner -->
  <?php 
    $the_query = new WP_Query( array('pagename' => 'home' ) );
  ?>
  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
  
  <?php 
  $hero_image = get_field('hero_image');
  $feature_1_image = get_field('feature_1_image');
  $feature_2_image = get_field('feature_2_image');
  $feature_3_image = get_field('feature_3_image');
  ?>


  <div class="jumbotron" style="background: url('<?php echo $hero_image; ?>') no-repeat center center">
    <div class="container">
      <h1><?php the_field('hero_title'); ?></h1>
      <p><?php the_field('hero_text'); ?></p>
      <p>
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#contactForm">
          <?php the_field('hero_button_text'); ?>
        </button>
      </p>
    </div>
    <!-- enable the arrow below if content is long -->
  <span id="down-arrow" class="glyphicon glyphicon-chevron-down"></span>
  </div>

  <div id="main-content" class="container main-content">
    <div class="row">
      <div class="col-md-4">
        <img class="img-circle" src="<?php echo $feature_1_image['url']; ?>" alt="<?php echo $feature_1_image['alt']; ?>"/>
        <h2><?php the_field('feature_1_heading'); ?></h2>
        <p><?php the_field('feature_1_text'); ?></p> 
        <p><a class="btn btn-default" href="about" role="button"><?php the_field('feature_1_button'); ?></a></p> 
      </div>
      <div class="col-md-4">
        <img class="img-circle" src="<?php echo $feature_2_image['url']; ?>" alt="<?php echo $feature_2_image['alt']; ?>"/>
        <h2><?php the_field('feature_2_heading'); ?></h2>
        <p><?php the_field('feature_2_text'); ?></p> 
        <p><a class="btn btn-default" href="#" role="button"><?php the_field('feature_2_button'); ?></a></p> 
      </div>
      <div class="col-md-4">
        <img class="img-circle" src="<?php echo $feature_3_image['url']; ?>" alt="<?php echo $feature_3_image['alt']; ?>"/>
        <h2><?php the_field('feature_3_heading'); ?></h2>
        <p><?php the_field('feature_3_text'); ?></p> 
        <p><a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#contactForm"><?php the_field('feature_3_button'); ?></a></p> 
      </div>
    </div>

    <?php get_template_part('content', 'featurettes'); ?>

  </div> <!-- /main-content -->

  <?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer() ?>