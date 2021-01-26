<?php 
    function plant_theme_support() {
        add_theme_support("title-tag");

    }
    add_action("after_setup_theme", "plant_theme_support");


    add_theme_support( 'menus' );
    function plants_menus(){
        $locations = array(
            'nav-menu' => "Navigation Menu",
        );
        register_nav_menus($locations);
    }
    add_action('init', "plants_menus");

    /** Creating the offers CPT */
	function create_posttype()
	{
	    register_post_type( 'offers',
	    // CPT Options
	        array(
	        	'taxonomies' => array('category'), 
	            'labels' => array(
	                'name' => __( 'Offers' ),
	                'singular_name' => __( 'Offer' )
	            ),
	            'public' => true,
	            'has_archive' => true,
	            'rewrite' => array('slug' => 'offers'),
	            'show_in_rest' => true,
	 
	        )
		);
	}
	// Hooking up our function to theme setup
	add_action( 'init', 'create_posttype' );
    /** Creating the offers CPT */
    

    /** Allowing SVG filetype */
	add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

        global $wp_version;
        if ( $wp_version !== '5.4.2' ) {
           return $data;
        }
  
        $filetype = wp_check_filetype( $filename, $mimes );
  
        return [
            'ext'             => $filetype['ext'],
            'type'            => $filetype['type'],
            'proper_filename' => $data['proper_filename']
        ];
  
      }, 10, 4 );
  
      function cc_mime_types( $mimes ){
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
      }
      add_filter( 'upload_mimes', 'cc_mime_types' );
  
      function fix_svg() {
        echo '<style type="text/css">
              .attachment-266x266, .thumbnail img {
                   width: 100% !important;
                   height: auto !important;
              }
              </style>';
      }
      add_action( 'admin_head', 'fix_svg' );
      // Allowing SVG filetype


    function plants_register_styles() {
        $version = wp_get_theme()->get("Version");
        wp_enqueue_style("plant-style", get_template_directory_uri() . "/style.css", array(), $version, "all");
        wp_enqueue_style("plant-slick-theme-min", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css", array(), "1.8.1", "all");
        wp_enqueue_style("plant-slick-min", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css", array(), "1.8.1", "all");
    }
    add_action("wp_enqueue_scripts", "plants_register_styles");

    function plants_register_scripts() {
        wp_enqueue_script("plant-jquery", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), "3.5.1", true);
        wp_enqueue_script("plant-slick-min-js", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js", array(), "1.8.1", true);
        wp_enqueue_script("plant-script", get_template_directory_uri() . "/assets/js/script.js", array(), "1.0",true);
    }
    add_action("wp_enqueue_scripts", "plants_register_scripts");
?>