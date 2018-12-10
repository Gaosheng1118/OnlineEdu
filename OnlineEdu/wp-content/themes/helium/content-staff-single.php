
	<div class="page-header-title">
		<h1 class="heading-title text-center"><?php the_title(); ?></h1>
	</div>
	<div class="row">
		<div class="col-3">
			<img src="<?php the_field('photo')?>" alt="">
		</div>
		<div class="col-9">
			<div><?php the_content(); ?></div>
			<div><?php the_field('position'); ?></div>

		</div>
	</div>

	<div class="page-header-title">
		<h1 class="heading-title text-center">Projects</h1>
	</div>

	<div class="row">
		
		<?php 

		$projectIds = get_field('projects', false, false);
		$arg = array(
			'post_type'      	=> 'project',
			'post__in'			=> $projectIds,
	
		
		);
		$the_query = new WP_Query($arg);

		// The Loop
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			get_template_part('content','staff-project');
		}
	
		/* Restore original Post Data */
		wp_reset_postdata();
			
		?>
	</div>











