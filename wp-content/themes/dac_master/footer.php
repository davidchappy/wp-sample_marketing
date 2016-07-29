     <hr> <!-- Standard stylistic element — will be changed in certain child themes -->

      <footer>
        <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
      </footer>
    </div> <!-- /container -->

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