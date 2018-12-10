    <!-- Features -->
    <div class="container features">
      
      <div class="page-header-title">
        <h2 class="heading-title text-center">Staff</h2>
      </div>

      <div class="features-wrap">
        <div class="row">

        	<?php 

          	// The Query
          	$args = array('post_type'=>'staff');
      			$the_query = new WP_Query( $args );

      			// The Loop
      			while ( $the_query->have_posts() ) {
      				$the_query->the_post();
      				get_template_part('content','staff');
      			}
      		
      			/* Restore original Post Data */
      			wp_reset_postdata();
			

          	?>
          

        </div>
      </div>

    </div>