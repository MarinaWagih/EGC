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
/**
 *
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
**/

/**
 * Add package custom fields
 */
function egc_add_package_meta_boxes() {
    add_meta_box("package_extra_data",
        "package Details",
        "egc_add_package_details_meta_box",
        "packages", "normal", "low");
}
function egc_add_package_details_meta_box()
{
    global $post;
    $custom = get_post_custom( $post->ID );

    ?>
        <style>.width99 {width:99%;}</style>
        <p>
            <label>Price before sale:</label><br />

            <input type="number" name="price_before" value="<?= @$custom["price_before"][0] ?>" class="width99" />
        </p>

        <p>
            <label>Price after sale:</label><br />

            <input type="number" name="price_after" value="<?= @$custom["price_after"][0] ?>" class="width99" />
        </p>
        <p>
            <label>speed :</label><br />

            <input type="number" name="speed" value="<?= @$custom["speed"][0] ?>" class="width99" />
        </p>
    <?php
}
/**
 * Save custom field data when creating/updating posts
 */
function egc_save_package_custom_fields(){
    global $post;

    if ( $post )
    {
        update_post_meta($post->ID, "price_before", @$_POST["price_before"]);
        update_post_meta($post->ID, "price_after", @$_POST["price_after"]);
        update_post_meta($post->ID, "speed", @$_POST["speed"]);
    }
//    var_dump(get_post_meta($post->ID),@$_POST);die();
}
add_action( 'admin_init', 'egc_add_package_meta_boxes' );
add_action( 'save_post', 'egc_save_package_custom_fields' );
load_theme_textdomain( 'egc', TEMPLATEPATH.'/lang' );

/**
 * Option page
 */

function egc_theme_settings_page(){
    ?>
    <div class="wrap">
        <h1>EGC Data</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("theme-data");
            submit_button();
            ?>
        </form>
    </div>
<?php
}

function add_theme_menu_item()
{
    add_menu_page("EGC data",
                  "EGC data",
                  "manage_options",
                  "theme-data",
                  "egc_theme_settings_page",
                  null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function egc_display_slogan_element()
{
?>
        <input type="text"
               name="egc_slogan"
               id="egc_slogan"
               style="    width: 100%;height: 35px;"
               value="<?php echo get_option('egc_slogan'); ?>" />
<?php
}
function egc_display_about_title_element()
{
?>
        <input type="text"
               name="about_title"
               id="about_title"
               style="    width: 100%;height: 35px;"
               value="<?php echo get_option('about_title'); ?>" />

<?php
}
function egc_display_about_content_element()
{
    ?>
    <textarea
           name="about_content"
           id="about_content"
           style="width: 100%;"
           rows="10"
        ><?php echo get_option('about_content'); ?></textarea>

<?php
}
function egc_display_phones_element()
{
    ?>
    <input type="text"
           name="phones"
           id="phones"
           style="    width: 100%;height: 35px;"
           value="<?php echo get_option('phones'); ?>" />

<?php
}

function egc_display_address_element()
{
    ?>
    <input type="text"
           name="address"
           id="address"
           style="    width: 100%;height: 35px;"
           value="<?php echo get_option('address'); ?>" />

<?php
}

function egc_display_email_element()
{
    ?>
    <input type="email"
           name="email"
           id="email"
           style="    width: 100%;height: 35px;"
           value="<?php echo get_option('email'); ?>" />

<?php
}

function egc_display_fax_element()
{
    ?>
    <input type="text"
           name="fax"
           id="fax"
           style="    width: 100%;height: 35px;"
           value="<?php echo get_option('fax'); ?>" />

<?php
}

function egc_display_theme_panel_fields()
{
    add_settings_section("section", "", null, "theme-data");

    add_settings_field("egc_slogan", "egc slogan in home page",
        "egc_display_slogan_element", "theme-data", "section");
    register_setting("section", "egc_slogan");

    add_settings_field("about_title", "About us section title",
        "egc_display_about_title_element", "theme-data", "section");
    register_setting("section", "about_title");

    add_settings_field("about_content", "About us section content",
        "egc_display_about_content_element", "theme-data", "section");
    register_setting("section", "about_content");

    add_settings_field("phones", 'phones separated by " , " ',
        "egc_display_phones_element", "theme-data", "section");
    register_setting("section", "phones");

    add_settings_field("address", 'address',
        "egc_display_address_element", "theme-data", "section");
    register_setting("section", "address");

    add_settings_field("email", 'email',
        "egc_display_email_element", "theme-data", "section");
    register_setting("section", "email");

    add_settings_field("fax", 'fax separated by " , " ',
        "egc_display_fax_element", "theme-data", "section");
    register_setting("section", "fax");

}

add_action("admin_init", "egc_display_theme_panel_fields");

