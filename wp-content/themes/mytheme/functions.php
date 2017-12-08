<?php
function wpdocs_theme_name_scripts() {
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
// wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900',false );
wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Work+Sans:100,200,300,400,500,600,700,800,900',false );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
//add external js file here, can i have both same file name but outside js folder//
// function my_scripts() {
//     wp_enqueue_script( 'my-sweet-script', get_bloginfo('template_directory') . '/script.js', array('jquery') );
// }
// add_action('template_redirect', 'my_scripts');
	//add menu to system
	function register_resources(){
		register_nav_menu('mastnav','Main Menu');
		// register_nav_menu('menu-list','Main Menu');
		//register about
			// 		$arg = array(
		// 	'labels' => array(
			// 		'name'=> 'Abouts',
			// 		'singular_name' => 'About',
			// 		'menu_name' => 'Abouts'
		// 	),
		// 	'public' => true,
		// 	'show_in_nav_menues' => true,
	// );
	//register_post_type('about',$arg);
		//register about-images-parallax
			// 		$arg = array(
		// 	'labels' => array(
			// 		'name'=> 'Aboutsimage',
			// 		'singular_name' => 'Aboutimage',
			// 		'menu_name' => 'Aboutsimage'
		// 	),
		// 	'public' => true,
		// 	'show_in_nav_menues' => true,
	// );
	//register_post_type('aboutimage',$arg);

	//register aboutslider
			$arg = array(
		'labels' => array(
			'name'=> 'Aboutsliders',
			'singular_name' => 'Aboutslider',
			'menu_name' => 'Aboutsliders'
		),
		'public' => true,
		'show_in_nav_menues' => true,
	);
	register_post_type('aboutslider',$arg);


//register webproject
			$arg = array(
		'labels' => array(
			'name'=> 'Web Projects',
			'singular_name' => 'Web Project',
			'menu_name' => 'Web Projects'
		),
		'public' => true,
		'show_in_nav_menues' => true,
	);
	register_post_type('webproject',$arg);


	//register work
			$arg = array(
		'labels' => array(
			'name'=> 'Works',
			'singular_name' => 'Work',
			'menu_name' => 'Works'
		),
		'public' => true,
		'show_in_nav_menues' => true,
	);
		//register_post_type('work',$arg);


//register website
			// 		$arg = array(
		// 	'labels' => array(
			// 		'name'=> 'Websites',
			// 		'singular_name' => 'Website',
			// 		'menu_name' => 'Websites'
		// 	),
		// 	'public' => true,
		// 	'show_in_nav_menues' => true,
	// );
		// register_post_type('website',$arg);


//register ux
			// 		$arg = array(
		// 	'labels' => array(
			// 		'name'=> 'Uxs',
			// 		'singular_name' => 'Ux',
			// 		'menu_name' => 'Uxs'
		// 	),
		// 	'public' => true,
		// 	'show_in_nav_menues' => true,
	// );
		// register_post_type('ux',$arg);


//register graphic
			// 		$arg = array(
		// 	'labels' => array(
			// 		'name'=> 'Graphics',
			// 		'singular_name' => 'Graphic',
			// 		'menu_name' => 'Graphics'
		// 	),
		// 	'public' => true,
		// 	'show_in_nav_menues' => true,
	// );
		// register_post_type('graphic',$arg);

	
	//register thanks
			$arg = array(
		'labels' => array(
			'name'=> 'Thanks',
			'singular_name' => 'Thank',
			'menu_name' => 'Thanks'
		),
		'public' => true,
		'show_in_nav_menues' => true,
	);
		register_post_type('thank',$arg);


	//register contact
			$arg = array(
		'labels' => array(
			'name'=> 'Contacts',
			'singular_name' => 'Contact',
			'menu_name' => 'Contacts'
		),
		'public' => true,
		'show_in_nav_menues' => true,
	);
	register_post_type('contact',$arg);


	
		//register homeproject
			$arg = array(
		'labels' => array(
			'name'=> 'Homeportfolios',
			'singular_name' => 'Homeportfolio',
			'menu_name' => 'Homeportfolios'
		),
		'public' => true,
		'show_in_nav_menues' => true,
	);
	register_post_type('homeportfolio',$arg);


	//taxonomy
			$args = array(
		'label'=>'Types',
		'hierarchical'=> true,
		'rewrite'=> array('slug'=>'type'),
	);
	register_taxonomy( 'type', 'homeportfolio', $args );
	
	}
	add_action('init','register_resources');
	//add class to menu li
	function add_menu_li_class($classes,$item,$args){
		$classes[] = 'nav-item';
		return $classes;
	}
	add_filter('nav_menu_css_class','add_menu_li_class',10,4);
	//add class to menu anchor
	function add_menu_anchor_class($attrs,$item,$args){
		
		$attrs['class'] = 'nav-link';
		return $attrs;
	}
	add_filter('nav_menu_link_attributes','add_menu_anchor_class',10,4);
?>