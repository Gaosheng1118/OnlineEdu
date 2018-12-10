<?php get_header(); ?>

<div class="container">
	<p>Here are matches</p>
	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			
			the_post(); 
			//
			get_template_part('content','search');
			//
		} // end while
	} // end if
	?>



</div>

<?php get_footer(); ?>










