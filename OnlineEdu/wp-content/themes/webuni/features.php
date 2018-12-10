<!-- categories section -->
  <section class="categories-section spad">
    <div class="container">
      <div class="section-title">
        <h2>Our Course Categories</h2>
        <p>We offer a range of qualifications and courses to study by distance and online learning – from certificates and diplomas, to degrees and graduate diplomas.Use the search, browse the subject list below or use the filter to search your area of interest.</p>
      </div>
      <div class="row">
        <?php 

            // The Query
            $args = array('post_type'=>'feature','orderby'=>'menu_order');
            $the_query = new WP_Query( $args );

            // The Loop
            while ( $the_query->have_posts() ) {
              $the_query->the_post();
              get_template_part('content','feature');
            }
          
            /* Restore original Post Data */
            wp_reset_postdata();
      

            ?>
      </div>
    </div>
  </section>
  <!-- categories section end -->