  <?php 
    $query = new WP_Query( array( 'pagename' => 'footer-text' ) );
  ?>
  <?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?> 

  	<div class="row call-to-action">
  		<div class="col-sm-8 col-sm-push-2 col-lg-6 col-lg-push-3">
  			<h2><?php the_field('footer_heading'); ?></h2>
  			<p><?php the_field('call_to_action_text'); ?></p>
			<p><a type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#contactForm"><?php the_field('call_to_action_button'); ?></a></p>
		</div>
	</div> 

  <?php endwhile; endif; wp_reset_postdata(); ?>

    <footer class="footer">
	  	<div class="container">
	  		<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
	  	</div>
    </footer>

   <?php wp_footer(); ?>

<!-- A Bootstrap pop-up modal form — optional but useful in many designs  -->
    <div class="modal fade" tabindex="-1" role="dialog" id="contactForm">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<!-- <div class="modal-header">
	    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    		<h4 class="modal-title"></h4>
	    	</div> -->
		    <div class="modal-body">
		      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<!-- Edit the snippet below with the appropriate form number -->
				<?php 
					if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
				?>
		    </div>
		   	<div class="modal-footer">
		    	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		    </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

  </body>
</html>