<?php 
	global $active;
 ?>		
			<div class="carousel-item <?php echo $active; ?>">
              <img src="<?php the_field('image'); ?>" alt="">
              <div class="carousel-caption">
                <h3 class="slide-title animated fadeInDown"><?php the_title(); ?></h3>

                <div><?php the_content(); ?></div>
                <a href="<?php the_field('link'); ?>" class="btn btn-lg btn-default-filled animated fadeInUp">Download Now</a>
              </div>
            </div>