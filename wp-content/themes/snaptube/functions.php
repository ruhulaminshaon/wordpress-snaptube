<?php
function spantube_theme_video(){
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('logo-thumb',153,100);


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	add_theme_support( 'automatic-feed-links' );
	
	//menu section
	register_nav_menus( array(
		'left_menu' => 'Left Main Menu',
		'footer_menu' => 'Footer Right Menu',

	) );

	//register_post_type_Followeds
	$labels = array(
		'name'               => _x( 'Followeds', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Followed', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Followeds', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Followed', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'followed', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Followed', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Followed', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Followed', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Followed', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Followeds', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Followeds', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Followeds:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No followeds found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No followeds found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'followed' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor')
	);

	register_post_type( 'followed', $args );
	//register_post_type_logo
	$labels = array(
		'name'               => _x( 'Logos', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Logo', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Logos', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Logo', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'logo', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Logo', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Logo', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Logo', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Logo', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Logos', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Logos', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Logos:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No logos found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No logos found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'logo' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','thumbnail')
	);

	register_post_type( 'logo', $args );



	/*
	video section register post type
	*/
		$labels = array(
			'name'               => _x( 'vedios', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'vedio', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'vedios', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'vedio', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New', 'vedio', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New vedio', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New vedio', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit vedio', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View vedio', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All vedios', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search vedios', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent vedios:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No vedios found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No vedios found in Trash.', 'your-plugin-textdomain' )
		);

		$args = array(
			'labels'             => $labels,
	        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'vedio' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail',  'comments','custom-fields' ),
			'taxonomies'		=>array('category','post_tag')
		);

		register_post_type( 'vedio', $args );
	


} 
add_action( 'init', 'spantube_theme_video' );


/*
====================================
	style and script section
====================================
*/
function spantube_video_enqueue_style() {
	//style
	wp_enqueue_style( 'snaptube-font-awesome',  get_template_directory_uri() .'/css/font-awesome.css'); 
	wp_enqueue_style( 'snaptube-fancybox',  get_template_directory_uri() .'/css/fancybox.css'); 
	wp_enqueue_style( 'snaptube-slick',  get_template_directory_uri() .'/css/slick.css'); 
	wp_enqueue_style( 'snaptube-style',  get_template_directory_uri() .'/css/style.css'); 
	wp_enqueue_style( 'mystyle',  get_template_directory_uri() .'/style.css'); 
	//jquery
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'jquery-min',get_template_directory_uri().'/jquery.min.js',array('jquery'),null,false);
	wp_enqueue_script( 'jquery-fancybox',get_template_directory_uri().'/js/fancybox.js',array('jquery'),null,false);
	wp_enqueue_script( 'jquery-slick',get_template_directory_uri().'/js/slick.js',array('jquery'),null,false);
	wp_enqueue_script( 'jquery-js',get_template_directory_uri().'/js/js.js',array('jquery'),null,false);
}
add_action( 'wp_enqueue_scripts', 'spantube_video_enqueue_style' );


?>