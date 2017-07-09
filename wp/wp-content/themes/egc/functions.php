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
    wp_enqueue_style('slick-css','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css',[],'','all');

    wp_enqueue_style('jquery-fullpage',get_template_directory_uri().'/css/jquery.fullpage.css',[],'','all');
    wp_enqueue_style('verticalslider' ,get_template_directory_uri().'/css/verticalslider.css',[],'','all');
    wp_enqueue_style('index-style'    ,get_template_directory_uri().'/css/index3-style.css',[],'','all');
    wp_enqueue_style('media-query'    ,get_template_directory_uri().'/css/media-query.css',[],'','all');


    wp_enqueue_script('my-jquery','https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',[],'',true);
    wp_enqueue_script('particles_js','https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js',[],'',true);
    wp_enqueue_script('slick','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js',[],'3.2.0',true);
    wp_enqueue_script('materialize_js','https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js',[],'3.2.0',true);
    wp_enqueue_script('typed_js',get_template_directory_uri().'/js/typed.min.js',[],'',true);

    wp_enqueue_script('scrollflow_js',get_template_directory_uri().'/js/scrollflow.js',[],'',true);
    wp_enqueue_script('fullPage_js',get_template_directory_uri().'/js/jquery.fullPage.min.js',[],'',true);

    wp_enqueue_script('modernizr_js',get_template_directory_uri().'/js/modernizr.custom.79639.js',[],'',true);
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

function egc_my_pll_get_post_types($types) {
    return array_merge($types, array('packages' => 'packages'));
}
add_filter('pll_get_post_types', 'egc_my_pll_get_post_types');
//
pll_register_string('egc','egc_slogan','egc');
//pll_register_string('egc','about_title','egc');
//pll_register_string('egc','about_content','egc',true);
pll_register_string('egc','contact_us_title','egc');
pll_register_string('egc','phones','egc');
pll_register_string('egc','address','egc');
pll_register_string('egc','email','egc');
pll_register_string('egc','fax','egc');
pll_register_string('egc','month','egc');
pll_register_string('egc','download_speed','egc');
pll_register_string('egc','more_details','egc');
pll_register_string('egc','payment','egc');
pll_register_string('egc','tags','egc');
pll_register_string('egc','categories','egc');
pll_register_string('egc','pricing','egc');
pll_register_string('egc','planes','egc');


function egc_pre_get_packages( $query ) {

    // do not modify queries in the admin
    if( is_admin() ) {

        return $query;

    }


    // only modify queries for 'event' post type
//    if( isset($query->query_vars['post_type']) &&
//        $query->query_vars['post_type'] == 'packages' ) {

        $query->set('orderby', 'meta_value_num');
        $query->set('meta_key', 'speed');
        $query->set('order', 'ASC');

//    }


    // return
    return $query;

}

add_action('pre_get_posts', 'egc_pre_get_packages');