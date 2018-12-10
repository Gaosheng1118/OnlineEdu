<?php get_header(); ?>

<div class="container">
	<?php 
		$term = get_queried_object();
		echo '<h1>'.$term->name.'</h1>';
		echo '<div>'.get_field('long_description', $term).'</div>';

	?>

	<div class="row">
	<?php 

	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			get_template_part('content','feature');
			//
		} // end while
	} // end if
	?>
	</div>


</div>

<?php get_footer(); ?>










