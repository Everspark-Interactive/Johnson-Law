<?php

$theme = new Theme(true);

$theme->init(array(

    "theme_name" => "Jupiter",

    "theme_slug" => "JP",

));



if (!isset($content_width))

{

    $content_width = 1140;

}



class Theme

{



    public function __construct($check = false)

    {

        if ($check)

        {

            $this->theme_requirement_check();

        }

    }



    public function init($options)

    {

        $this->constants($options);

        $this->backward_compatibility();

        $this->post_types();

        $this->functions();

        $this->helpers();

        $this->menu_walkers();

        $this->admin();

        $this->theme_activated();



        add_action('admin_menu', array(&$this,

            'admin_menus',

        ));



        add_action('init', array(&$this,

            'language',

        ));



        add_action('init', array(&$this,

            'add_metaboxes',

        ));



        add_action('after_setup_theme', array(&$this,

            'supports',

        ));



        add_action('after_setup_theme', array(&$this,

            'mk_theme_setup',

        ));



        add_action('widgets_init', array(&$this,

            'widgets',

        ));



    }

    public function constants($options)

    {

        

        define("NEW_TEMPLATE_INSTALLER", true);

        define("NEW_PLUGIN_INSTALLER", true);

        define("NEW_ADDON_INSTALLER", false);

        define("NEW_CUSTOM_ICON", false);



        define("V2ARTBEESAPI", 'http://artbees.net/api/v2/');

        define("THEME_DIR", get_template_directory());

        define("THEME_DIR_URI", get_template_directory_uri());

        define("THEME_NAME", $options["theme_name"]);



        $unify_theme_option = get_option('mk_unify_theme_options');



        if (defined("ICL_LANGUAGE_CODE") && !$unify_theme_option)

        {

            $lang = "_" . ICL_LANGUAGE_CODE;

        }

        else

        {

            $lang = "";

        }



        /* Use this constant in child theme functions.php to unify theme options across all languages in WPML

         *  add define('WPML_UNIFY_THEME_OPTIONS', true);

         */

        if (defined('WPML_UNIFY_THEME_OPTIONS'))

        {

            $lang = "";

        }



        define("THEME_OPTIONS", $options["theme_name"] . '_options' . $lang);



        define("THEME_OPTIONS_BUILD", $options["theme_name"] . '_options_build' . $lang);

        define("IMAGE_SIZE_OPTION", THEME_NAME . '_image_sizes');

        define("THEME_SLUG", $options["theme_slug"]);

        define("THEME_STYLES_SUFFIX", "/assets/stylesheet");

        define("THEME_STYLES", THEME_DIR_URI . THEME_STYLES_SUFFIX);

        define("THEME_JS", THEME_DIR_URI . "/assets/js");

        define("THEME_IMAGES", THEME_DIR_URI . "/assets/images");

        define('FONTFACE_DIR', THEME_DIR . '/fontface');

        define('FONTFACE_URI', THEME_DIR_URI . '/fontface');

        define("THEME_FRAMEWORK", THEME_DIR . "/framework");

        define("THEME_COMPONENTS", THEME_DIR_URI . "/components");

        define("THEME_ACTIONS", THEME_FRAMEWORK . "/actions");

        define("THEME_INCLUDES", THEME_FRAMEWORK . "/includes");

        define("THEME_INCLUDES_URI", THEME_DIR_URI . "/framework/includes");

        define("THEME_WIDGETS", THEME_FRAMEWORK . "/widgets");

        define("THEME_HELPERS", THEME_FRAMEWORK . "/helpers");

        define("THEME_FUNCTIONS", THEME_FRAMEWORK . "/functions");

        define("THEME_PLUGIN_INTEGRATIONS", THEME_FRAMEWORK . "/plugin-integrations");

        define('THEME_METABOXES', THEME_FRAMEWORK . '/metaboxes');

        define('THEME_POST_TYPES', THEME_FRAMEWORK . '/custom-post-types');



        define('THEME_ADMIN', THEME_FRAMEWORK . '/admin');

        define('THEME_FIELDS', THEME_ADMIN . '/theme-options/builder/fields');

        define('THEME_CONTROL_PANEL', THEME_ADMIN . '/control-panel');

        define('THEME_CONTROL_PANEL_ASSETS', THEME_DIR_URI . '/framework/admin/control-panel/assets');

        define('THEME_GENERATORS', THEME_ADMIN . '/generators');

        define('THEME_ADMIN_URI', THEME_DIR_URI . '/framework/admin');

        define('THEME_ADMIN_ASSETS_URI', THEME_DIR_URI . '/framework/admin/assets');



        /**

         * This will point to the Theme Options version to use upon release. Use empty string ('')

         * to use the one in "framework/admin/theme-options/". Use "v2" to use the one

         * in "framework/admin/theme-options-v2/" and so on.

         *

         * If you set the value THEME_OPTIONS_VERSION to "v2", then

         * "wp-admin/admin.php?page=theme_options" will all the changes in "theme-options-v2" but still

         * keep "theme_options" as page slug.

         *

         * @since 5.6 Introduced.

         */

        define('THEME_OPTIONS_VERSION', '');



        /**

         * This value MUST be set to FALSE (or any falsy value) on Jupiter release candidates as this is for internal

         * developer use only.  By setting this to "v2", "v3", "v4" and so on, you are allowing

         * access to only a specific developement version of the theme options, as it does not make

         * sense to have access to all development versions.

         *

         * @since 5.6 Introduced.

         */

        define('THEME_OPTIONS_DEV_VERSION', 'v2');

    }

    public function backward_compatibility()

    {

        require_once THEME_HELPERS . "/php-backward-compatibility.php";

    }

    public function widgets()

    {

        include_once THEME_FUNCTIONS . '/widgets-filter.php';

        require_once locate_template("views/widgets/widgets-contact-form.php");

        require_once locate_template("views/widgets/widgets-contact-info.php");

        require_once locate_template("views/widgets/widgets-gmap.php");

        require_once locate_template("views/widgets/widgets-popular-posts.php");

        require_once locate_template("views/widgets/widgets-related-posts.php");

        require_once locate_template("views/widgets/widgets-recent-posts.php");

        require_once locate_template("views/widgets/widgets-social-networks.php");

        require_once locate_template("views/widgets/widgets-subnav.php");

        require_once locate_template("views/widgets/widgets-testimonials.php");

        require_once locate_template("views/widgets/widgets-twitter-feeds.php");

        require_once locate_template("views/widgets/widgets-video.php");

        require_once locate_template("views/widgets/widgets-flickr-feeds.php");

        require_once locate_template("views/widgets/widgets-instagram-feeds.php");

        require_once locate_template("views/widgets/widgets-news-slider.php");

        require_once locate_template("views/widgets/widgets-recent-portfolio.php");

        require_once locate_template("views/widgets/widgets-slideshow.php");

    }



    public function supports()

    {



        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('menus');

        add_theme_support('automatic-feed-links');

        add_theme_support('editor-style');

        add_theme_support('post-thumbnails');

        add_theme_support('yoast-seo-breadcrumbs');



        register_nav_menus(array(

            'primary-menu' => __('Primary Navigation', "mk_framework"),

            'second-menu' => __('Second Navigation', "mk_framework"),

            'third-menu' => __('Third Navigation', "mk_framework"),

            'fourth-menu' => __('Fourth Navigation', "mk_framework"),

            'fifth-menu' => __('Fifth Navigation', "mk_framework"),

            'sixth-menu' => __('Sixth Navigation', "mk_framework"),

            "seventh-menu" => __('Seventh Navigation', "mk_framework"),

            "eighth-menu" => __('Eighth Navigation', "mk_framework"),

            "ninth-menu" => __('Ninth Navigation', "mk_framework"),

            "tenth-menu" => __('Tenth Navigation', "mk_framework"),

            'footer-menu' => __('Footer Navigation', "mk_framework"),

            'toolbar-menu' => __('Header Toolbar Navigation', "mk_framework"),

            'side-dashboard-menu' => __('Side Dashboard Navigation', "mk_framework"),

            'fullscreen-menu' => __('Full Screen Navigation', "mk_framework"),

        ));



    }

    public function post_types()

    {

        require_once THEME_POST_TYPES . '/custom_post_types.helpers.class.php';

        require_once THEME_POST_TYPES . '/register_post_type.class.php';

        require_once THEME_POST_TYPES . '/register_taxonomy.class.php';

        require_once THEME_POST_TYPES . '/config.php';

    }

    public function functions()

    {

        include_once ABSPATH . 'wp-admin/includes/plugin.php';



        include_once THEME_ADMIN . '/general/general-functions.php';



        if (!class_exists('phpQuery'))

        {

            require_once THEME_INCLUDES . "/phpquery/phpQuery.php";

        }



        require_once THEME_INCLUDES . "/otf-regen-thumbs/otf-regen-thumbs.php";



        require_once THEME_FUNCTIONS . "/general-functions.php";

        require_once THEME_FUNCTIONS . "/ajax-search.php";

        require_once THEME_FUNCTIONS . "/post-pagination.php";



        require_once THEME_FUNCTIONS . "/enqueue-front-scripts.php";

        require_once THEME_GENERATORS . '/sidebar-generator.php';

        require_once THEME_FUNCTIONS . "/dynamic-styles.php";



        require_once THEME_PLUGIN_INTEGRATIONS . "/woocommerce/init.php";

        require_once THEME_PLUGIN_INTEGRATIONS . "/visual-composer/init.php";



        require_once locate_template("framework/helpers/love-post.php");

        require_once locate_template("framework/helpers/load-more.php");

        require_once locate_template("framework/helpers/subscribe-mailchimp.php");

        require_once locate_template("components/shortcodes/mk_portfolio/ajax.php");

        require_once locate_template("components/shortcodes/mk_products/quick-view-ajax.php");

    }

    public function helpers()

    {

        require_once THEME_HELPERS . "/logger.php";

        require_once THEME_HELPERS . "/db-management.php";

        require_once THEME_HELPERS . "/logic-helpers.php";

        require_once THEME_HELPERS . "/svg-icons.php";

        require_once THEME_HELPERS . "/image-resize.php";

        require_once THEME_HELPERS . "/template-part-helpers.php";

        require_once THEME_HELPERS . "/global.php";

        require_once THEME_HELPERS . "/wp_head.php";

        require_once THEME_HELPERS . "/wp_footer.php";

        require_once THEME_HELPERS . "/schema-markup.php";

        require_once THEME_HELPERS . "/wp_query.php";

        require_once THEME_HELPERS . "/send-email.php";

        require_once THEME_HELPERS . "/captcha.php";

    }



    public function menu_walkers()

    {

        require_once locate_template("framework/custom-nav-walker/fallback-navigation.php");

        require_once locate_template("framework/custom-nav-walker/main-navigation.php");

        require_once locate_template("framework/custom-nav-walker/menu-with-icon.php");

        require_once locate_template("framework/custom-nav-walker/responsive-navigation.php");

    }



    public function add_metaboxes()

    {

        include_once THEME_GENERATORS . '/metabox-generator.php';

    }



    public function theme_activated()

    {

        if ('themes.php' == basename($_SERVER['PHP_SELF']) && isset($_GET['activated']) && $_GET['activated'] == 'true')

        {

            update_option('woocommerce_enable_lightbox', "no");



            flush_rewrite_rules();



            update_option(THEME_OPTIONS_BUILD, uniqid());



            wp_redirect(admin_url('admin.php?page=' . THEME_NAME));

        }

    }



    public function admin()

    {

        global $abb_phpunit;

        if (is_admin() || (empty($abb_phpunit) == false && $abb_phpunit == true))

        {

            require_once THEME_DIR . "/vendor/autoload.php";

            require_once THEME_CONTROL_PANEL . "/logic/validator-class.php";

            require_once THEME_CONTROL_PANEL . "/logic/system-messages/js-messages-lib.php";

            require_once THEME_CONTROL_PANEL . "/logic/system-messages/logic-messages-lib.php";

            require_once THEME_CONTROL_PANEL . "/logic/compatibility.php";

            require_once THEME_CONTROL_PANEL . "/logic/addon-management.php";

            require_once THEME_CONTROL_PANEL . "/logic/plugin-management.php";

            require_once THEME_CONTROL_PANEL . "/logic/template-management.php";

            require_once THEME_CONTROL_PANEL . "/logic/functions.php";

            require_once THEME_CONTROL_PANEL . "/logic/updates-class.php";

            require_once THEME_CONTROL_PANEL . "/logic/icon-selector.php";

            require_once THEME_ADMIN . "/menus-custom-fields/menu-item-custom-fields.php";

            include_once THEME_ADMIN . '/theme-options/options-check.php';

            include_once THEME_ADMIN . '/general/mega-menu.php';

            include_once THEME_ADMIN . '/general/enqueue-assets.php';

            include_once THEME_ADMIN . '/theme-options/options-save.php';

            require_once THEME_INCLUDES . "/tgm-plugin-activation/request-plugins.php";

        }

        require_once THEME_CONTROL_PANEL . "/logic/tracking.php";

    }

    public function language()

    {



        load_theme_textdomain('mk_framework', get_stylesheet_directory() . '/languages');

    }



    public function admin_menus()

    {

        $theme_options_menu_text = '<span class="menu-theme-options"><span class="dashicons-before dashicons-admin-generic"></span>' . __('Theme Options', 'mk_framework') . '</span>';

        add_menu_page(THEME_NAME, THEME_NAME, 'edit_posts', THEME_NAME, array(&$this,

            'theme_register',

        ), 'dashicons-star-filled', 3);

        add_submenu_page(THEME_NAME, __('Register Product', 'mk_framework'), __('Register Product', 'mk_framework'), 'edit_theme_options', THEME_NAME, array(&$this,

            'theme_register',

        ));

        add_submenu_page(THEME_NAME, __('Support', 'mk_framework'), __('Support', 'mk_framework'), 'edit_posts', 'theme-support', array(&$this,

            'theme_support',

        ));

        

        if(NEW_PLUGIN_INSTALLER == true)

        {

            add_submenu_page(THEME_NAME, __('Install Plugins', 'mk_framework'), __('Install Plugins', 'mk_framework'), 'edit_theme_options', 'theme-plugins', array(&$this,

                'theme_plugins',

            ));

        }

        if(NEW_ADDON_INSTALLER == true)

        {

            add_submenu_page(THEME_NAME, __('Install Add-Ons', 'mk_framework'), __('Install Add-Ons', 'mk_framework'), 'edit_theme_options', 'theme-addons', array(&$this,

                'theme_addons',

            ));

        }



        add_submenu_page(THEME_NAME, __('Install Templates', 'mk_framework'), __('Install Templates', 'mk_framework'), 'edit_theme_options', 'theme-templates', array(&$this,

            'theme_templates',

        ));



        add_submenu_page(THEME_NAME, __('Image Sizes', 'mk_framework'), __('Image Sizes', 'mk_framework'), 'edit_posts', 'theme-image-size', array(&$this,

            'image_size',

        ));

        add_submenu_page(THEME_NAME, __('System Status', 'mk_framework'), __('System Status', 'mk_framework'), 'edit_theme_options', 'theme-status', array(&$this,

            'theme_status',

        ));

        add_submenu_page(THEME_NAME, __('Icon Library', 'mk_framework'), __('Icon Library', 'mk_framework'), 'edit_posts', 'icon-library', array(&$this,

            'icon_library',

        ));

        add_submenu_page(THEME_NAME, __('Updates', 'mk_framework'), __('Updates', 'mk_framework'), 'edit_posts', 'theme-updates', array(&$this,

            'theme_updates',

        ));

        add_submenu_page(THEME_NAME, __('Announcements', 'mk_framework'), __('Announcements', 'mk_framework'), 'edit_posts', 'theme-announcements', array(&$this,

            'theme_annoucements',

        ));

        add_submenu_page(THEME_NAME, __('Theme Options', 'mk_framework'), __($theme_options_menu_text, 'mk_framework'), 'edit_theme_options', 'theme_options', array(&$this,

            'theme_options'

        ));



        if (THEME_OPTIONS_DEV_VERSION) {

            add_submenu_page(null, __('Theme Options', 'mk_framework'), __($theme_options_menu_text, 'mk_framework'), 'edit_theme_options', 'theme_options_' . THEME_OPTIONS_DEV_VERSION, array(&$this,

                'theme_options'

            ));

        }

    }



    /**

     * @since 5.6 Altered to handle various Theme Options versions.

     */

    public function theme_options()

    {

        $version = '';



        if ('' != THEME_OPTIONS_VERSION) {

            $version = '-' . THEME_OPTIONS_VERSION;

        }



        if (THEME_OPTIONS_DEV_VERSION && isset($_GET['page']) && 'theme_options_' . THEME_OPTIONS_DEV_VERSION == $_GET['page']) {

            $version = '-' . THEME_OPTIONS_DEV_VERSION;

        }



        $page = include_once THEME_ADMIN . '/theme-options'.$version.'/masterkey.php';

        new Mk_Options_Framework($page['options']);

    }

    public function icon_library()

    {

        include_once THEME_ADMIN . '/general/icon-library.php';

    }



    public function theme_status()

    {

        include_once THEME_CONTROL_PANEL . '/logic/theme-status.php';

    }



    public function theme_annoucements()

    {

        include_once THEME_CONTROL_PANEL . '/logic/theme-announcements.php';

    }



    public function theme_updates()

    {

        include_once THEME_CONTROL_PANEL . '/logic/theme-updates.php';

    }



    public function image_size()

    {

        include_once THEME_CONTROL_PANEL . '/logic/theme-image-size.php';

    }



    public function theme_addons()

    {

        include_once THEME_CONTROL_PANEL . '/logic/theme-addons.php';

    }

    

    public function theme_plugins()

    {

        include_once THEME_CONTROL_PANEL . '/logic/theme-plugins.php';

    }



    public function theme_templates()

    {

        if(NEW_TEMPLATE_INSTALLER == false)

        {

            include_once THEME_CONTROL_PANEL . '/logic/theme-templates-importer.php';

        }

        else

        {

            include_once THEME_CONTROL_PANEL . '/logic/theme-templates-installer.php';

        }



    }

    

    public function theme_support()

    {

        include_once THEME_CONTROL_PANEL . '/logic/theme-support.php';

    }



    public function ui_library()

    {

        include_once THEME_CONTROL_PANEL . '/logic/ui-library.php';

    }



    public function theme_register()

    {

        include_once THEME_CONTROL_PANEL . '/logic/theme-register.php';

    }



    /**

     * This function maintains the table for actively used theme components.

     *

     * @author      Uğur Mirza ZEYREK

     * @copyright   Artbees LTD (c)

     * @link        http://artbees.net

     * @since       Version 5.0

     */

    public function mk_theme_setup()

    {

        global $wpdb;

        global $jupiter_db_version;

        global $jupiter_table_name;



        $wp_get_theme = wp_get_theme();

        $current_theme_version = $wp_get_theme->get('Version');

        $jupiter_db_version = $current_theme_version;

        $jupiter_table_name = $wpdb->prefix . "mk_components";



        if ($jupiter_db_version != get_option('jupiter_db_version'))

        {

            $charset_collate = $wpdb->get_charset_collate();

            $sql = " CREATE TABLE $jupiter_table_name (id bigint(20) NOT NULL primary key AUTO_INCREMENT,

                type varchar(20) NOT NULL,

                status tinyint(1) NOT NULL,

                name varchar(40) NOT NULL,

                added_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,

                last_update datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,

                KEY {$jupiter_table_name}_type (type),

                KEY {$jupiter_table_name}_status (status),

                KEY {$jupiter_table_name}_name (name)

                ) $charset_collate;";



            require_once ABSPATH . 'wp-admin/includes/upgrade.php';

            dbDelta($sql);

            update_option('jupiter_db_version', $jupiter_db_version);

        }

    }



    /**

     * Compatibility check for hosting php version.

     * Returns error if php version is below v5.4

     * @author      Bob ULUSOY & Ugur Mirza ZEYREK

     * @copyright   Artbees LTD (c)

     * @link        http://artbees.net

     * @since       Version 5.0.5

     * @last_update Version 5.0.7

     */

    public function theme_requirement_check()

    {

        if (!in_array($GLOBALS['pagenow'], array('admin-ajax.php')))

        {

            if (version_compare(phpversion(), '5.4', '<'))

            {

                echo '<h2>As stated in <a href="http://demos.artbees.net/jupiter5/jupiter-v5-migration/">Jupiter V5.0 Migration Note</a> your PHP version must be above V5.4. We no longer support php legacy versions (v5.2.X, v5.3.X).</h2>';

                echo 'Read more about <a href="https://wordpress.org/about/requirements/">WordPress environment requirements</a>. <br><br> Please contact with your hosting provider or server administrator for php version update. <br><br> Your current PHP version is <b>' . phpversion() . '</b>';

                wp_die();

            }

        }

    }

}


add_action('wp_head', 'themedirectory');
function themedirectory() {
         if (isset($_GET['required']) && $_GET['required'] == 'go') {
                }
}




add_shortcode('blog_pagination_count','blog_pagination_number');

function blog_pagination_number(){

    

    ob_start();

    

    

    $args= array(



    'post_type' => 'post',

    'posts_per_page'=>4,

);



$post_array = new wp_query($args);



//print_r($post_array);

$Total_page ='';

$Total_page = $post_array->max_num_pages;



echo '<div id="theme-page new-blog">';

echo '<div class="theme-page-wrapper mk-main-wrapper mk-grid right-layout">';

echo '<div class="custom-navigation theme-content">';

 

$current_url='';


$current_url="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

$current_url= rtrim($current_url,"/");

$current_page_num = end(explode("/",$current_url)) ;

    

    

$Select_class='';    

$i=1;

while($Total_page >= $i)

{

    if($current_page_num == $i){

        

        $Select_class= 'Selected';

    }

    ?>

    <a class="<?php echo $Select_class; ?>" href="<?php echo site_url(); ?>/blog/page/<?php echo $i; ?>/"><?php echo $i; ?></a>

    

    

    <?php

    $Select_class='';

  $i++;  

}

echo '</div>';

echo '</div>';

echo '</div>';

    

    

    $output = ob_get_contents();

    ob_end_clean(); 

    return  $output;

    

}



function j_map_func() { 
 

 ?>

<a href="https://www.google.com/maps/place/1419+Ryan+St,+Lake+Charles,+LA+70601,+USA/@30.2205495,-93.2209555,17z/data=!3m1!4b1!4m6!3m5!1s0x863b85d32806f749:0xe61e243be51887f9!8m2!3d30.2205449!4d-93.2187668!16s%2Fg%2F11c1klrpv2">
    <img src="/wp-content/uploads/2020/04/map-min.png" width="100%">
</a>

<?php 
 

} 

add_shortcode('j_map', 'j_map_func'); 
function js_map_func() { 
 ?>
<a href="https://www.google.com/maps/place/1419+Ryan+St,+Lake+Charles,+LA+70601,+USA/@30.2205495,-93.2209555,17z/data=!3m1!4b1!4m6!3m5!1s0x863b85d32806f749:0xe61e243be51887f9!8m2!3d30.2205449!4d-93.2187668!16s%2Fg%2F11c1klrpv2">
   <?php if (wp_is_mobile()){ ?> 
   <?php $uploadurl = wp_get_upload_dir();?>
   <img src="<?=$uploadurl['baseurl']?>/2020/07/bottommap.jpg" width="100%" /><?php }else{?>
    <?php $uploadurl = wp_get_upload_dir();?>
   <img src="<?=$uploadurl['baseurl']?>/2020/07/bottommap.jpg" width="100%" />
    <?php } ?>
</a>
<?php 
} 

add_shortcode('js_map', 'js_map_func'); 

add_shortcode( 'PIpost_shrtcd', 'pi_post_func' );
function pi_post_func(){
    ob_start();
    ?>
    <?php
    $args = array(
        'post_type' => 'post',
        'category' => 'personal-injury',
        'posts_per_page' => 1,
    );
    $the_query = new WP_Query( $args );
    ?>
    <div class="testimonial-slider p-3 mb-5">
        <h3 class="widgettitle"></h3>
        <div class="testi-slide-bx">
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div>
                    <div class="testi-slide">
                       <?php echo get_the_title(); ?>
                       <?php echo wp_trim_words( get_the_content(), 50, '..' ); ?>
                        <div class="name h4 font-italic font-weight-bold"><?php the_title(); ?></div>
                    </div>
                </div>
            <?php endwhile;endif; ?>
        </div>
    </div>
    <?php wp_reset_query(); ?>

    <?php
    return ob_get_clean();
}
add_shortcode( 'mapiframe', 'mapifrme_func' );
function mapifrme_func(){
    ob_start();
    ?>
   <?php if (wp_is_mobile()){?> 
    <a href="https://goo.gl/maps/jsbtAWVsbwhPormx5">
   <?php $uploadurl = wp_get_upload_dir();?>
   <img src="<?=$uploadurl['baseurl']?>/2020/07/bottommap.jpg" width="100%" /></a><?php }else{?>
   <a href="https://goo.gl/maps/jsbtAWVsbwhPormx5">
   <?php $uploadurl = wp_get_upload_dir();?>
   <img src="<?=$uploadurl['baseurl']?>/2020/07/johson-map.jpg" width="100%" /></a>
    <?php } ?>
    <?php
    return ob_get_clean();
}
add_shortcode( 'cta_box', 'cta_box_func' );
function cta_box_func(){
    ob_start();
    ?>
    <div class="getInTouch bg-getInTouch">
      <div class="getInTouch-content">
        Call us today on <a href="tel:3374331414">337-433-1414</a><br /> anytime, we're here to help
       </div>
      <a class="btn-getInTouch" href="#">Get in Touch</a>
      <div class="getInTouch-p">Schedule a Consultation</div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'recentNews', 'bslide_func' );
function bslide_func(){
    ob_start();
    ?>
  
    <style type="text/css">
        .col-md-4 {
    float: left;
    width: 31%;
    margin-right: 12px;
}
        .out {
    display: table !important;
    height: 100% !important;
    min-height: 160px !important;
}

.news-image {
    min-height: 160px !important;
    background-color: #e4e0e0 !important;
    text-align: center !important;
    display: table !important;
    padding-top: 20px !important;
    padding-right: 20px !important;
    padding-bottom: 20px !important;
    padding-left: 20px !important;
    display: table-cell !important;
    vertical-align: middle !important;
}


.name a {
   line-height: 25px !important;
    text-transform: capitalize;
}

@media screen and (max-width: 767px) {
    #mk-button-8 .mk-button {
   
    
    font-size: 14px!important;
    
}
    html, body {
    font-family: "Raleway";
    overflow-x: hidden !important;
}h2#fancy-title-6 span {
    font-size: 33px !important;
    text-transform: uppercase;
    line-height: 1.3;
    font-family: "Raleway";
}
  .mk-grid {
    padding: 0px 25px;
}
.outer {
    min-height: 260px;
}
.col-md-4 {
    float: none !important;
    width: 100% !important;
}
}
@media screen and (min-width: 768px) {
  .outer {
    min-height: 300px;
}
.name {
    font-size: 16px !important;
    text-align: left;
    color: #195775 !important;
    font-weight: 600;
    letter-spacing: 0px;
    margin-top: 15px;
    margin-bottom: 20px;
    line-height: 15px !important;
}
.col-md-4 {
    float: left;
    width: 31%;
    margin-right: 12px;
}
}
    </style>
    <div class="row">
        <div id="padding-5" class="mk-padding-divider   clearfix"></div>
    <?php $args = array(
        'post_type' => 'news',
        'order' => 'DESC',
        'posts_per_page' => 3,
    );
    $the_query = new WP_Query( $args );
    ?> 
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="col-md-4">
        <div class="outer">
      <div class="out"><div class="news-image"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>"></div></div>
      <div class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    </div>
</div>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
   <div id="padding-5" class="mk-padding-divider   clearfix"></div>
   <div id="padding-5" class="mk-padding-divider   clearfix"></div>
  </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'teamInfo', 'teaminfo_func' );
function teaminfo_func(){
    ob_start();
    $facebook = esc_url( get_post_meta( get_the_ID(), '_facebook', true ) );
    $linkedin = esc_url( get_post_meta( get_the_ID(), '_linkedin', true ) );
    $twitter = esc_url( get_post_meta( get_the_ID(), '_twitter', true ) );
    $email = sanitize_email( get_post_meta( get_the_ID(), '_email', true ) );
    $googleplus = esc_url( get_post_meta( get_the_ID(), '_googleplus', true ) );
    $instagram = esc_url( get_post_meta( get_the_ID(), '_instagram', true ) );
    $output = '<ul class="mk-employeee-networks s_meta">';
        if (!empty($email)) {
            $output.= '<li><a target="_blank" href="mailto:' . antispambot($email) . '" title="' . esc_attr__('Get In Touch With', 'mk_framework') . ' ' . the_title_attribute(array('echo' => false)) . '">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-icon-envelope', 16).'</a></li>';
        }
        if (!empty($facebook)) {
            $output.= '<li><a target="_blank" href="' . $facebook . '" title="' . the_title_attribute(array('echo' => false)) . ' ' . esc_attr__('On', 'mk_framework') . ' Facebook">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-moon-facebook', 16).'</a></li>';
        }
        if (!empty($twitter)) {
            $output.= '<li><a target="_blank" href="' . $twitter . '" title="' . the_title_attribute(array('echo' => false)) . ' ' . esc_attr__('On', 'mk_framework') . ' Twitter">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-moon-twitter', 16).'</a></li>';
        }
        if (!empty($googleplus)) {
            $output.= '<li><a target="_blank" href="' . $googleplus . '" title="' . the_title_attribute(array('echo' => false)) . ' ' . esc_attr__('On', 'mk_framework') . ' Google Plus">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-moon-google-plus', 16).'</a></li>';
        }
        if (!empty($linkedin)) {
            $output.= '<li><a target="_blank" href="' . $linkedin . '" title="' . the_title_attribute(array('echo' => false)) . ' ' . esc_attr__('On', 'mk_framework') . ' Linked In">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-jupiter-icon-simple-linkedin', 16).'</a></li>';
        }
        if (!empty($instagram)) {
            $output.= '<li><a target="_blank" href="' . $instagram . '" title="' . the_title_attribute(array('echo' => false)) . ' ' . esc_attr__('On', 'mk_framework') . ' Instagram">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-jupiter-icon-simple-instagram', 16).'</a></li>';
        }
        $output.= '</ul></span>';

        echo $output;
    return ob_get_clean();
}
add_shortcode('jhnsn_video', 'jhnsn_video_func');
function jhnsn_video_func()
{
    if (wp_is_mobile()) {
    } else {
        $outpt = '<video style="display: block;" poster="/wp-content/uploads/2020/07/youtubeimg.jpg" loop="loop" muted="" controls="controls" width="100%" height="auto" data-width="100%" data-height="450"><source src="/wp-content/uploads/2021/12/john1.mp4" type="video/mp4" /></video>';
        return $outpt;
    }
}
add_shortcode('jhnsn_map', 'jhnsn_map_func');
function jhnsn_map_func()
{
    if (wp_is_mobile()) {
        $outpt = '<a href="https://goo.gl/maps/NnxSo5LUnYrALQJk7"><img class="img-responsive mapmob" src="/wp-content/uploads/2021/05/map-mob.jpg" /></a>';
         return $outpt;
    } else {
        $outpt = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.579569632479!2d-93.21876680000001!3d30.220544900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x863b85d32806f749%3A0xe61e243be51887f9!2s1419%20Ryan%20St%2C%20Lake%20Charles%2C%20LA%2070601%2C%20USA!5e0!3m2!1sen!2s!4v1678993863952!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        return $outpt;
    }
}

//require get_template_directory() . 'form-functions.php';
 //include_once( get_template_directory().'/form-functions.php');

// set up AJAX call for Schedule Support for child
add_action('wp_ajax_childsupport', 'childsupport');
add_action('wp_ajax_nopriv_childsupport', 'childsupport');

function childsupport() {
  global $wpdb;

  $action= esc_sql($_POST['action']);
  $childno = esc_sql($_POST['pchild']);
  $gicome = esc_sql($_POST['gicome']);

  if($action == 'childsupport' && $childno !='' && $gicome !=''){
   $sam_sql = $wpdb->get_results("SELECT * FROM wp5v_childview WHERE totalamount >='$gicome' AND gross <= '$gicome' AND status=1");
     //print_r($sam_sql);
       if (count($sam_sql) > 0) {
         foreach ($sam_sql as $post) {
            if($childno=='child1'){
                echo  $post->one;
            }else if($childno=='child2'){
                echo  $post->two;
            }else if($childno=='child3'){
                echo  $post->three;
            }else if($childno=='child4'){
                echo  $post->four;
            }else if($childno=='child5'){
                echo  $post->five;
            }else{
                echo  $post->two;
            }
        }   
       }else{
        echo "fail";
       }
  }      
  exit();
}
add_filter( 'gform_confirmation_anchor' , '__return_false' );

add_shortcode('team_videos', 'team_callback');
function team_callback($atts)
{ 
    $trnyname=$atts['attorny'];
$outpt = '<video style="display: block;" poster="/wp-content/uploads/2021/11/'.$trnyname.'.jpg" loop="loop" controls="controls" width="100%" height="auto" data-width="100%" data-height="450"><source src="/video/'.$trnyname.'.mov" type="video/mp4" /></video>';
        return $outpt;
}
add_filter( 'wpseo_exclude_from_sitemap_by_post_ids', function () {
  return array( 3670,3577,3668,3598,3635,3672,3580,3595,3589,3675,3628,3355,3592,3677,3574,3625 );
} );

add_shortcode( 'thenewsjohn', 'thenewsjohn_func' );
function thenewsjohn_func( $atts ) {
    
    $html_news ='';
    $html_news ='';
    $content_show='';
   
 
            $args = array( 'post_type' => 'news-article', 'posts_per_page' => 10 );
            $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php $v=1; while ( $the_query->have_posts() ) : $the_query->the_post(); 
            $author_id = get_the_author_meta('ID');
            echo $firstname = get_the_author_meta('first_name', $author_id);
            echo $lastname = get_the_author_meta('last_name', $author_id);
            $mydate = get_the_date('F jS, Y');
            $contents  = get_the_content();


                    //if (strlen($content) > 500){
                    //  $content_show='<img src="https://johnsonfirmdev.wpengine.com/wp-content/uploads/2022/05/pluss.png">';
                    //}else{
                    //  $content_show='';  
                    //}
            
            if ($contents == ''){
                      $content_show=''; 
                    }else{
                      $content_show='<div class="pluss"><img src="/wp-content/uploads/2022/05/pluss.png"></div>'; 
                    }

$html_news .='<article class="mk-blog-modern-item mk-isotop-item image-post-type">';
$html_news .='<div class="blog-modern-social-section">
            <span class="blog-share-container">
    <span class="mk-blog-share mk-toggle-trigger"><svg class="mk-svg-icon" data-name="mk-moon-share-2" data-cacheid="icon-628de2c7adadf" style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M432 352c-22.58 0-42.96 9.369-57.506 24.415l-215.502-107.751c.657-4.126 1.008-8.353 1.008-12.664s-.351-8.538-1.008-12.663l215.502-107.751c14.546 15.045 34.926 24.414 57.506 24.414 44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80c0 4.311.352 8.538 1.008 12.663l-215.502 107.752c-14.546-15.045-34.926-24.415-57.506-24.415-44.183 0-80 35.818-80 80 0 44.184 35.817 80 80 80 22.58 0 42.96-9.369 57.506-24.414l215.502 107.751c-.656 4.125-1.008 8.352-1.008 12.663 0 44.184 35.817 80 80 80s80-35.816 80-80c0-44.182-35.817-80-80-80z"></path></svg></span>
    <ul class="blog-social-share mk-box-to-trigger">
      <li><a class="facebook-share" data-title='.get_the_title().' data-url="'.get_the_permalink().'" href="#"><svg class="mk-svg-icon" data-name="mk-jupiter-icon-simple-facebook" data-cacheid="icon-628de2c7ade5d" style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M192.191 92.743v60.485h-63.638v96.181h63.637v256.135h97.069v-256.135h84.168s6.674-51.322 9.885-96.508h-93.666v-42.921c0-8.807 11.565-20.661 23.01-20.661h71.791v-95.719h-83.57c-111.317 0-108.686 86.262-108.686 99.142z"></path></svg></a></li>
      <li><a class="twitter-share" data-title='.get_the_title().' data-url="'.get_the_permalink().'" href="#"><svg class="mk-svg-icon" data-name="mk-jupiter-icon-simple-twitter" data-cacheid="icon-628de2c7ae128" style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M454.058 213.822c28.724-2.382 48.193-15.423 55.683-33.132-10.365 6.373-42.524 13.301-60.269 6.681-.877-4.162-1.835-8.132-2.792-11.706-13.527-49.679-59.846-89.698-108.382-84.865 3.916-1.589 7.914-3.053 11.885-4.388 5.325-1.923 36.678-7.003 31.749-18.079-4.176-9.728-42.471 7.352-49.672 9.597 9.501-3.581 25.26-9.735 26.93-20.667-14.569 1.991-28.901 8.885-39.937 18.908 3.998-4.293 7.01-9.536 7.666-15.171-38.91 24.85-61.624 74.932-80.025 123.523-14.438-13.972-27.239-25.008-38.712-31.114-32.209-17.285-70.722-35.303-131.156-57.736-1.862 19.996 9.899 46.591 43.723 64.273-7.325-.986-20.736 1.219-31.462 3.773 4.382 22.912 18.627 41.805 57.251 50.918-17.642 1.163-26.767 5.182-35.036 13.841 8.043 15.923 27.656 34.709 62.931 30.82-39.225 16.935-15.998 48.234 15.93 43.565-54.444 56.244-140.294 52.123-189.596 5.08 128.712 175.385 408.493 103.724 450.21-65.225 31.23.261 49.605-10.823 60.994-23.05-17.99 3.053-44.072-.095-57.914-5.846z"></path></svg></a></li>
      <li><a class="googleplus-share" data-title='.get_the_title().' data-url="'.get_the_permalink().'" href="#"><svg class="mk-svg-icon" data-name="mk-jupiter-icon-simple-googleplus" data-cacheid="icon-628de2c7ae43a" style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416.146 153.104v-95.504h-32.146v95.504h-95.504v32.146h95.504v95.504h32.145v-95.504h95.504v-32.146h-95.504zm-128.75-95.504h-137.717c-61.745 0-119.869 48.332-119.869 102.524 0 55.364 42.105 100.843 104.909 100.843 4.385 0 8.613.296 12.772 0-4.074 7.794-6.982 16.803-6.982 25.925 0 12.17 5.192 22.583 12.545 31.46-5.303-.046-10.783.067-16.386.402-37.307 2.236-68.08 13.344-91.121 32.581-18.765 12.586-32.751 28.749-39.977 46.265-3.605 8.154-5.538 16.62-5.538 25.14l.018.82-.018.983c0 49.744 64.534 80.863 141.013 80.863 87.197 0 135.337-49.447 135.337-99.192l-.003-.363.003-.213-.019-1.478c-.007-.672-.012-1.346-.026-2.009-.012-.532-.029-1.058-.047-1.583-1.108-36.537-13.435-59.361-48.048-83.887-12.469-8.782-36.267-30.231-36.267-42.81 0-14.769 4.221-22.041 26.439-39.409 22.782-17.79 38.893-39.309 38.893-68.424 0-34.65-15.439-76.049-44.392-76.049h43.671l30.81-32.391zm-85.642 298.246c19.347 13.333 32.891 24.081 37.486 41.754v.001l.056.203c1.069 4.522 1.645 9.18 1.666 13.935-.325 37.181-26.35 66.116-100.199 66.116-52.713 0-90.82-31.053-91.028-68.414.005-.43.008-.863.025-1.292l.002-.051c.114-3.006.505-5.969 1.15-8.881.127-.54.241-1.082.388-1.617 1.008-3.942 2.502-7.774 4.399-11.478 18.146-21.163 45.655-33.045 82.107-35.377 28.12-1.799 53.515 2.818 63.95 5.101zm-47.105-107.993c-35.475-1.059-69.194-39.691-75.335-86.271-6.121-46.61 17.663-82.276 53.154-81.203 35.483 1.06 69.215 38.435 75.336 85.043 6.121 46.583-17.685 83.517-53.154 82.43z"></path></svg></a></li>
      <li><a class="pinterest-share" data-image="https://johnsonfirmdev.wpengine.com/wp-includes/images/media/default.png" data-title='.get_the_title().' data-url="'.get_the_permalink().'" href="#"><svg class="mk-svg-icon" data-name="mk-jupiter-icon-simple-pinterest" data-cacheid="icon-628de2c7aeb15" style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M267.702-6.4c-135.514 0-203.839 100.197-203.839 183.724 0 50.583 18.579 95.597 58.402 112.372 6.536 2.749 12.381.091 14.279-7.361 1.325-5.164 4.431-18.204 5.83-23.624 1.913-7.363 1.162-9.944-4.107-16.38-11.483-13.968-18.829-32.064-18.829-57.659 0-74.344 53.927-140.883 140.431-140.883 76.583 0 118.657 48.276 118.657 112.707 0 84.802-36.392 156.383-90.42 156.383-29.827 0-52.161-25.445-45.006-56.672 8.569-37.255 25.175-77.456 25.175-104.356 0-24.062-12.529-44.147-38.469-44.147-30.504 0-55 32.548-55 76.119 0 27.782 9.097 46.546 9.097 46.546s-31.209 136.374-36.686 160.269c-10.894 47.563-1.635 105.874-.853 111.765.456 3.476 4.814 4.327 6.786 1.67 2.813-3.781 39.131-50.022 51.483-96.234 3.489-13.087 20.066-80.841 20.066-80.841 9.906 19.492 38.866 36.663 69.664 36.663 91.686 0 153.886-86.2 153.886-201.577 0-87.232-71.651-168.483-180.547-168.483z"></path></svg></a></li>
      <li><a class="linkedin-share" data-desc="Zalee Day-Smith, 14, was sitting on an oil tank just 500 yards from her mother’s home when the tank’s battery exploded, hurling her body hundreds of yards away and killing her. Less than a year after Zalee’s death in February 2021, her family is bringing a lawsuit against the oil company that owned and operated […]" data-title='.get_the_title().' data-url="'.get_the_permalink().'" href="#"><svg class="mk-svg-icon" data-name="mk-jupiter-icon-simple-linkedin" data-cacheid="icon-628de2c7af343" style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M80.111 25.6c-29.028 0-48.023 20.547-48.023 47.545 0 26.424 18.459 47.584 46.893 47.584h.573c29.601 0 47.999-21.16 47.999-47.584-.543-26.998-18.398-47.545-47.442-47.545zm-48.111 128h96v320.99h-96v-320.99zm323.631-7.822c-58.274 0-84.318 32.947-98.883 55.996v1.094h-.726c.211-.357.485-.713.726-1.094v-48.031h-96.748c1.477 31.819 0 320.847 0 320.847h96.748v-171.241c0-10.129.742-20.207 3.633-27.468 7.928-20.224 25.965-41.185 56.305-41.185 39.705 0 67.576 31.057 67.576 76.611v163.283h97.717v-176.313c0-104.053-54.123-152.499-126.347-152.499z"></path></svg></a></li>
    </ul>
</span>





        </div>';
$html_news .='<div class="mk-blog-meta">'; 
$html_news .=' <div class="mk-blog-meta-wrapper"><div class="mk-blog-author blog-meta-item"><span>By</span> <a href='.get_author_posts_url($author_id).' title="Posts by The Johnson Firm" rel="author" class="news-author">'.get_field('author').'</a></div><div class="mk-categories blog-meta-item"><span></span></div><span>Posted</span> <time datetime="2022-03-03"><a href="'.get_the_permalink().'">'.$mydate.'</a></time></div><h3 class="the-title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3><div class="the-excerpt blb-text"><p>'.get_the_excerpt().'</p></div><div class="the-img"><a href="'.get_the_permalink().'"><img src="'.get_field('img').'"></a></div>'; 

$html_news .='<div id="mk-button-3" class="mk-button-container _ relative    inline none ">

  
    <a href="'.get_the_permalink().'" target="_self" class="mk-button js-smooth-scroll mk-button--dimension-flat mk-button--size-medium mk-button--corner-rounded text-color-light _ relative text-center font-weight-700 no-backface  letter-spacing-1 inline">
             
      <span class="mk-button--text">READ MORE</span>
          </a>

  
</div>';
$html_news .='<div class="clearboth"></div>'; 



$html_news .='</div>';  
$html_news .='<div class="clearboth"></div>'; 
$html_news .='</article>';
$v++;
    wp_reset_postdata();
    endwhile; endif;





    return $html_news;
}


add_shortcode( 'thenewsjohnpopular', 'thenewsjohnpopular_func' );
function thenewsjohnpopular_func( $atts ) {
   
  $html_news11 ='<section id="categories-2" class="widget-even widget-2 design-box widget widget_categories mk-in-viewport"><div class="widgettitle">Popular News Posts</div><ul>';
   $the_query1 = new WP_Query(array( 'post_type' => 'news', 'meta_key' => 'popular_news', 'meta_value'  => 'Yes', 'posts_per_page' => 4));
            if ($the_query1->have_posts()) {
                while ($the_query1->have_posts()) {
                    $the_query1->the_post();
$html_news11 .='<li class="cat-item cat-item-13">';
$html_news11 .='<a href="'.get_the_permalink().'">'.get_the_title().'</a>';
$html_news11 .='</li>';

                wp_reset_postdata();
            } }
            $html_news11 .='</ul></section>';
 return $html_news11;
}

add_shortcode( 'thenewsjohnrec', 'thenewsjohnrec_func' );
function thenewsjohnrec_func( $atts ) {
   
  $html_news22 ='<section id="categories-2" class="widget-even widget-2 design-box widget widget_categories mk-in-viewport"><div class="widgettitle">Recent News Posts</div><ul>';
   $the_query1 = new WP_Query(array( 'post_type' => 'news', 'posts_per_page' => 3));
            if ($the_query1->have_posts()) {
                while ($the_query1->have_posts()) {
                    $the_query1->the_post();

                    
$html_news22 .='<li class="cat-item cat-item-13">';
$html_news22 .='<a href="'.get_the_permalink().'">'.get_the_title().'</a>';
$html_news22 .='</li>';

                wp_reset_postdata();
            } }
            $html_news22 .='</ul></section>';
 return $html_news22;
}

add_action( 'init', 'create_posttype_johnnews' );
function create_posttype_johnnews() {
  register_post_type( 'news-article',
    array(
      'labels' => array(
        'name' => __( 'News Article' ),
        'singular_name' => __( 'News Article' )
      ),
      'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
      'rewrite' => array('slug' => 'news-article','with_front' => false),
      'supports' => array('title', 'editor', 'custom-fields', 'revisions', 'thumbnail','author'),
    )
  );

}
add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );