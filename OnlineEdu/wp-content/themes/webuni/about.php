 <div class="page-info-section set-bg">
    <div class="container">
      <div class="site-breadcrumb">
        <a href="#">Home</a>
        <span>About us</span>
      </div>
    </div>
  </div>

  <!-- search section -->
  <section class="search-section ss-other-page">
    <div class="container">
      <div class="search-warp">
        <div class="section-title text-white">
          <h2><span>Search your course</span></h2>
        </div>
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <!-- search form -->
            <form class="course-search-form">
              <input type="text" placeholder="Course">
              <input type="text" class="last-m" placeholder="Category">
              <button class="site-btn btn-dark">Search Couse</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- search section end -->



  <!-- Page -->
  <section class="contact-page spad pb-0">
      <?php 

            // The Query
            $args = array('post_type'=>'about','orderby'=>'menu_order');
            $the_query = new WP_Query( $args );

            // The Loop
            while ( $the_query->have_posts() ) {
              $the_query->the_post();
              get_template_part('content','about');
            }
          
            /* Restore original Post Data */
            wp_reset_postdata();
      

            ?>
  </section>
  <!-- Page end -->


  <!-- banner section -->
  <section class="banner-section spad">
    <div class="container">
      <div class="section-title mb-0 pb-2">
        <h2>Join Our Community Now!</h2>
        <p>Make Your Move with New Zealand’s leader in online and distance learning.</p>
      </div>
      <div class="text-center pt-5">
        <a href="#" class="site-btn">Register Now</a>
      </div>
    </div>
  </section>
  <!-- banner section end -->