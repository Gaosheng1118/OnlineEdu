<?php 
/* Template Name: Two columns */ 
?>
<?php get_header(); ?>


<div class="container">

	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			get_template_part('content','index-two-columns');
			//
		} // end while
	} // end if
	?>



</div>

<?php get_footer(); ?>










