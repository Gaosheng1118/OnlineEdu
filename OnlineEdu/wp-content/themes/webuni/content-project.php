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

<div class="mix col-lg-3 col-md-4 col-sm-6 <?php echo $classes;?>">
  <div class="course-item">
    <div class="course-thumb set-bg" data-setbg="<?php the_field('image');?>">
      <div class="price">Price: $3500</div>
    </div>
    <div class="course-info">
      <div class="course-text">
        <h5><?php the_title() ?></h5>
        <p><?php the_content() ?></p>
        <div class="students">120 Students</div>
      </div>
    </div>
  </div>
</div>
