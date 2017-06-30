<?php
/*
  Plugin Name: EGC Plugin
  Description: a plugin to implement egc business needs
  Version: 1.0
  Author: Marina wagih
  Author URI: https://github.com/MarinaWagih
  */

/**
 *===================================
 * Custom post type
 *===================================
 */
function egc_custom_post_type(){
    $labels=[
        'name'=>'plans',//actual name
        'singular_name'=>'plan',//name used inside admin panel
        'all_item'=>'all plans',//
        'add_new'=>'add New plan',//btn to add new
        'add_new_item'=>'add plan',//
        'edit_item'=>'edit plan',
        'view_item'=>'view plan',
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
        'menu_icon' => "dashicons-networking",
        'exclude_from_search' => false,
        'has_archive' => true
    ];
    register_post_type('packages',$args);
}

add_action('init','egc_custom_post_type');
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

        <input type="number" name="price_before" value="<?= @$custom["price_before"][0] ?>" class="width99" step="0.01" min="0" />
    </p>

    <p>
        <label>Price after sale:</label><br />

        <input type="number" name="price_after" value="<?= @$custom["price_after"][0] ?>" class="width99" step="0.01" min="0" />
    </p>
    <p>
        <label>speed :</label><br />

        <input type="number" name="speed" value="<?= @$custom["speed"][0] ?>" class="width99" step="0.01" min="0" />
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


function egc_show_cpt_archives( $query ) {
    if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
        $query->set( 'post_type', array(
            'packages'
        ));
        return $query;
    }
}
add_filter( 'pre_get_posts', 'egc_show_cpt_archives' );