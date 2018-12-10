<?php 
    ob_start();
	//register resources

	function register_resources(){

		//register a menu
		register_nav_menu('main-menu','Main Menu');

		//register a slide
		$arg = array(
			'labels' => array(
				'name'=> 'Slides',
				'singular_name' => 'Slide',
				'menu_name' => 'Slides'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('slide',$arg);


		//register a feature
		$arg = array(
			'labels' => array(
				'name'=> 'Features',
				'singular_name' => 'Feature',
				'menu_name' => 'Features'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('feature',$arg);

		//register a feature
		$arg = array(
			'labels' => array(
				'name'=> 'Projects',
				'singular_name' => 'Project',
				'menu_name' => 'Projects'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('project',$arg);


		$arg = array(
			'label' => 'Type',
			'rewrite' => array( 'slug' => 'type' ),
			'hierarchical' => true,
		);
		register_taxonomy('type','project',$arg);


		//register a feature
		$arg = array(
			'labels' => array(
				'name'=> 'Staff',
				'singular_name' => 'Staff',
				'menu_name' => 'Staff'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('staff',$arg);

	}

	add_action('init','register_resources');

	//menu items hooks

	function add_menu_li_class($classes,$item,$args){
		$classes[] = 'nav-item';
		return $classes;
	}
	add_filter('nav_menu_css_class','add_menu_li_class',10,3);

	function add_menu_anchor_class($attrs,$item,$args){
		$attrs['class'] = 'nav-link';
		return $attrs;
	}
	add_filter('nav_menu_link_attributes','add_menu_anchor_class',10,3);

	//Customiser bits-----------

	function mytheme_customize_register( $wp_customize ) {
   		//All our sections, settings, and controls will be added here

   		$wp_customize->add_section( 'section_colors' , array(
		    'title'      => 'Theme Settings',
		    'priority'   => 30,
		) );

		$wp_customize->add_setting( 'heading_color_setting' , array(
		    'default'   => '#fa8072',
		    'transport' => 'refresh',
		) );


		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_color_control', array(
			'label'      => 'Heading Colors',
			'section'    => 'section_colors',
			'settings'   => 'heading_color_setting',
		) ) );

		//------- the text input

		$wp_customize->add_setting( 'font_setting', array(
		  'capability' => 'edit_theme_options',
		  'default' => 'Lato',
		  // 'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_control( 'font_setting', array(
		  'type' => 'text',
		  'section' => 'section_colors', // Add a default or your own section
		  'label' => 'Theme Fonts',
		  'description' => 'Please specify your font',
		) );

		//----- image upload---

		$wp_customize->add_setting('logo_setting',
	        array(
		    	'transport'			=> 'refresh',
		    	'default' => '',
	        	// 'sanitize_callback' => 'esc_raw_url',
	        )
	    );

		$wp_customize->add_control(
	       	new WP_Customize_Image_Control(
	           	$wp_customize,'logo_setting_control',
	           	array(
	               'label'      => 'Upload a logo',
	               'section'    => 'section_colors',
	               'settings'   => 'logo_setting',
	               // 'context'    => 'your_setting_context' 
	           	)
	       	)
	   	);



	}
	add_action( 'customize_register', 'mytheme_customize_register' );

	function mytheme_customize_css()
	{

	    ?>
	        <style type="text/css">
	            h1.heading-title { 
	            	color: <?php echo get_theme_mod('heading_color_setting', 'salmon');?> !important; 
	            }

	            body,p,div{
	            	font-family: <?php echo get_theme_mod('font_setting', 'Lato');?> !important;
	            }
	        </style>
	    <?php
	}
	add_action( 'wp_head', 'mytheme_customize_css');



	
	
 ?>






