<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 3/24/17
 * Time: 4:43 PM
 */

/**
 *===================================
 * include css&js
 *===================================
 */

function egc_script_enqueue()
{

    wp_enqueue_style('font-awesome'         ,'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css',[],'','all');
    wp_enqueue_style('google-font-Raleway'  ,'https://fonts.googleapis.com/css?family=Raleway',[],'','all');
    wp_enqueue_style('google-material-icons','https://fonts.googleapis.com/icon?family=Material+Icons',[],'','all');
    wp_enqueue_style('materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css',[],'','all');
    wp_enqueue_style('font-Dosis','https://fonts.googleapis.com/css?family=Dosis:200,400,700',[],'','all');

    wp_enqueue_style('jquery-fullpage',get_template_directory_uri().'/css/jquery.fullpage.css',[],'','all');
    wp_enqueue_style('verticalslider' ,get_template_directory_uri().'/css/verticalslider.css',[],'','all');
    wp_enqueue_style('index-style'    ,get_template_directory_uri().'/css/index-style.css',[],'','all');
    wp_enqueue_style('media-query'    ,get_template_directory_uri().'/css/media-query.css',[],'','all');


    wp_enqueue_script('my-jquery','https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',[],'',true);
    wp_enqueue_script('particles_js','https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js',[],'',true);
    wp_enqueue_script('materialize_js','https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js',[],'3.2.0',true);
    wp_enqueue_script('typed_js',get_template_directory_uri().'/js/typed.min.js',[],'',true);
    wp_enqueue_script('fullPage_js',get_template_directory_uri().'/js/jquery.fullPage.min.js',[],'',true);
    wp_enqueue_script('modernizr_js',get_template_directory_uri().'/js/modernizr.custom.79639.js',[],'',true);
    wp_enqueue_script('slider_js',get_template_directory_uri().'/js/slider.js',[],'',true);
    wp_enqueue_script('slider_js',get_template_directory_uri().'/js/slider.js',[],'',true);
    wp_enqueue_script('index_js',get_template_directory_uri().'/js/index.js',[],'',true);

}
add_action('wp_enqueue_scripts',"egc_script_enqueue",1,1);
/**
 *===================================
 * remove admin bar from frontend
 *===================================
 */

add_filter('show_admin_bar', '__return_false');
/**
 *===================================
 * make theme support html5 
 *===================================
 */
add_theme_support('html5',['search-form','quote']);
/**
 *===================================
 * remove WP version
 *===================================
 */
function egc_remove_wp_version(){
    return '';
}
add_filter('the_generator','egc_remove_wp_version');
/**
 *===================================
 * Custom post type
 *===================================
 */
function egc_custom_post_type(){
    $labels=[
        'name'=>'packages',//actual name
        'singular_name'=>'package',//name used inside admin panel
        'all_item'=>'all packages',//
        'add_new'=>'add New package',//btn to add new
        'add_new_item'=>'add package',//
        'edit_item'=>'edit package',
        'view_item'=>'view package',
        'search_item'=>'search',
        'not_found'=>'not found',
        'not_found_in_trash'=>'not found in trash',
        'parent_item_colon'=>'parent',
        ];
    $args = [
		'labels' => $labels,//used in backend
		'public' => true,//publicly accessable
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'revisions',
            'custom-fields'
        ),
		'taxonomies' => array('category','post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => true
	];
	register_post_type('packages',$args);
}

add_action('init','egc_custom_post_type');
/**
 *===================================
 * Custome taxonomi
 *===================================
 */
//function egc_custom_taxonomy()
//{
//    // ***********   internet *****************
//    //*****************************************
//    $internet_labels=[
//      'name'=>'internet',
//      'singular_name'=>'internet',
//
//    ];
//    $internet_args = [
//        'hierarchical' => false,
//		'labels' => $internet_labels,
//		'rewrite' => array( 'slug' => 'internet' )
//	];
//	register_taxonomy('internet', array('internet'), $internet_args);
//    //*****************************************
//    //*****************************************
//
//    // ***********  phone *********************
//    //*****************************************
//    $phone_labels=[
//      'name'=>'phone',
//      'singular_name'=>'phone',
//
//    ];
//    $phone_args = [
//        'hierarchical' => false,
//		'labels' => $phone_labels,
//		'rewrite' => array( 'slug' => 'phone' )
//	];
//	register_taxonomy('phone', array('phone'), $phone_args);
//    //*****************************************
//    //*****************************************
//
//    // ***********  phone&internet *********************
//    //*****************************************
//    $phone_internet_labels=[
//      'name'=>'phone&internet',
//      'singular_name'=>'phone&internet',
//
//    ];
//    $phone_internet_args = [
//        'hierarchical' => false,
//		'labels' => $phone_internet_labels,
//		'rewrite' => array( 'slug' => 'phone-internet' )
//	];
//	register_taxonomy('phone_internet', array('phone_internet'), $phone_internet_args);
//
//}
//add_action( 'init' , 'myTheme_custom_taxonomy' );
