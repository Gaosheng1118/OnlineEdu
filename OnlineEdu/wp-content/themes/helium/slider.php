 <!-- light slider -->
    <div id="light-slider" class="carousel slide">
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        
          <div class="carousel-inner" role="listbox">

          <?php 

          	// The Query
          	$args = array('post_type'=>'slide');
			$the_query = new WP_Query( $args );

			// The Loop
			global $active;

			$active = 'active';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				get_template_part('content','slide');
				$active = '';
			}
		
			/* Restore original Post Data */
			wp_reset_postdata();
			

          ?>

            
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>