
  <div class="page-info-section set-bg">
    <div class="container">
      <div class="site-breadcrumb">
        <a href="#">Home</a>
        <span>Courses</span>
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


  <!-- course section -->
  <section class="course-section spad pb-0">
    <div class="course-warp">
      <ul class="course-filter controls">
        <li class="control active" data-filter="all">All</li>

         <?php 
                //get the terms
                $terms = get_terms('type',array('hide_empty'=>false));
                
                //loop through the terms and make a link for each term
                foreach($terms as $term){
                  echo '<li class="control" data-filter=".'.$term->slug.'">'.$term->name.'</li>';
                }

            ?>

      </ul>                                       
      <div class="row course-items-area">

        <?php

            $args = array('post_type' => 'project');
            $query = new WP_Query($args);

            while($query->have_posts()){

              $query->the_post();

              get_template_part('content','project');

            }
          ?>
        <!-- course -->
       
        
      </div>

    </div>
  </section>
  <!-- course section end -->






