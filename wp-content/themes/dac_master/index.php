<?php get_header() ?>

    <div class="container">
      <div class="row">

        <div class="col-sm-12">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

            <div class="page-header">
              <h1><?php the_title(); ?></h1>
            </div>
            
            <?php the_content(); ?>  

          <?php endwhile; else:  ?>

            <div class="page-header">
              <h1>Fallback Page</h1>
            </div>            
            
            <p>Oops! This is a fallback page, which means we missed and need to try again!</p>
            <p>Try <a href="<?php echo site_url(); ?>">starting again.</a></p>

          <?php endif; ?>

        </div>

        <?php // get_sidebar(); ?>

      </div>

  <?php get_footer() ?>