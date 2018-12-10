
  <section class="hero-section set-bg">
    <div class="container">
      
      <?php 

            // The Query
            $args = array('post_type'=>'slide');
            $the_query = new WP_Query( $args );

            // The Loop
            while ( $the_query->have_posts() ) {
              $the_query->the_post();
              get_template_part('content','slide');
            }
          
            /* Restore original Post Data */
            wp_reset_postdata();
      

      ?>      
    </div>
  </section>
  <!-- Hero section end -->