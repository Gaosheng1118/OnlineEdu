<?php 



  $terms = get_the_terms(get_the_ID(),'type');

  $classes = ''; 
  foreach($terms as $term){
    $classes .= $term->slug .' ';
  }


  $arg = array(
    'post_type' => 'staff',
    'meta_query' => array(
      array(
      'key' => 'projects', // name of custom field
      'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
      'compare' => 'LIKE'
      )
    )
  );
  $staffs = get_posts($arg);



?>

<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix <?php echo $classes;?>">
            <div class="portfolio-item">
              <div class="portfolio-img">
                <img src="<?php the_field('image');?>" alt="" />
              </div>
              <div class="portfoli-content">
                <div class="sup-desc-wrap">
                  <div class="sup-desc-inner">
                    <div class="sup-link">
                      <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                      <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="sup-meta-wrap">
                      <a class="sup-title" href="#">
                        <h4><?php the_title() ?></h4>
                      </a>
                      <div class="sup-description"><?php the_content() ?></div>
                      <div class="sup-description">Worked on by: 
                      <?php 
                        foreach($staffs as $staff){
                          echo '<a href="'.get_permalink($staff->ID).'">'.$staff->post_title.'<a> . ';
                        }
                      ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>