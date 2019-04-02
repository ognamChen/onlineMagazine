<?php
/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support('title-tag');
/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support('post-thumbnails');
add_image_size('og-full', 2000, 1200, true);
// add_image_size('twentyseventeen-thumbnail-avatar', 100, 100, true);

// Set the default content width.
$GLOBALS['content_width'] = 525;

// add Bootstrap framework and jQuery
add_action('wp_enqueue_scripts', 'add_styles');
function add_styles()
{
    // wp_enqueue_style('cLab_style', get_template_directory_uri() . "/assets/css/cLab.css");
    wp_enqueue_style('jquery_ui_css', get_template_directory_uri() . "/assets/jquery/jquery-ui.min.css");
    wp_enqueue_style('bootstrap_min_4', get_template_directory_uri() . "/assets/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style('fontawsome5', get_template_directory_uri() . '/assets/fontawesome/webfonts/all.css');
    wp_enqueue_style('ognam_style', get_template_directory_uri() . "/assets/css/ognam.css");
    wp_enqueue_style('owlCarousel2', get_template_directory_uri() . "/assets/owlCarousel2/css/owl.carousel.min.css");
    wp_enqueue_style('owlCarousel2_theme', get_template_directory_uri() . "/assets/owlCarousel2/css/owl.theme.default.min.css");
    wp_enqueue_style('fancybox', get_template_directory_uri() . "/assets/fancybox/jquery.fancybox.min.css");
    wp_enqueue_style('main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'update_jquery_version');
function update_jquery_version()
{
    wp_enqueue_script('jquery3', get_template_directory_uri() . "/assets/jquery/jquery-3.3.0.min.js", array(), '', true);
    wp_enqueue_script('jquery_ui_js', get_template_directory_uri() . "/assets/jquery/jquery-ui.min.js", array(), '', true);
    wp_enqueue_script('popper_min', get_template_directory_uri() . "/assets/popper/popper-1.12.9.min.js", array(), '', true);
    wp_enqueue_script('bootstrap_min', get_template_directory_uri() . "/assets/bootstrap/js/bootstrap.min.js", array(), '', true);
    wp_enqueue_script('matchHeight', get_template_directory_uri() . "/assets/jquery.matchHeight.js", array(), '', true);
    wp_enqueue_script('owlCarousel2_js', get_template_directory_uri() . "/assets/owlCarousel2/js/owl.carousel.min.js", array(), '', true);
    // wp_enqueue_script('owlCarousel_play_js', get_template_directory_uri() . "/assets/owlCarousel2/js/owl.autoplay.js", array(), '', true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . "/assets/fancybox/jquery.fancybox.min.js");
    wp_enqueue_script('ognam_js', get_template_directory_uri() . "/assets/js/ognam.js", array(), '', true);
}

/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
 */

/**
 * menu -> nav
 */
// 先讓 theme support 選單，讓後台可以新增
add_theme_support('menus');
// 註冊 menu 名稱
add_action('init', 'register_theme_menus');
function register_theme_menus()
{
    register_nav_menus(array(
        'indexNav' => __('nav'),
        'footerNav' => __('footer'),
        'footerAbout' => __('footer2')
    ));
}

function my_post_queries($query)
{
    // do not alter the query on wp-admin pages and only alter it if it's the main query
    if (!is_admin() && $query->is_main_query()) {

        // alter the query for the home and category pages
        if (is_tag()) {
            $query->set('posts_per_page', 5);
        }

        if (is_search()) {
            $query->set('posts_per_page', 5);
        }
    }
}
add_action('pre_get_posts', 'my_post_queries');

function wpbeginner_numeric_posts_nav()
{

    if (is_singular()) {
        return;
    }

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1) {
        return;
    }

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1) {
        $links[] = $paged;
    }

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link()) {
        printf('<li class="pagLink1">%s</li>' . "\n", get_previous_posts_link());
    }

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : ' ';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links)) {
            echo '<li>…</li>';
        }

    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<li>…</li>' . "\n";
        }

        $class = $paged == $max ? ' class=""' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link()) {
        printf('<li class="pagLink2">%s</li>' . "\n", get_next_posts_link());
    }

    echo '</ul></div>' . "\n";

}

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentyseventeen_content_image_sizes_attr($sizes, $size)
{
    $width = $size[0];

    if (740 <= $width) {
        $sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
    }

    if (is_active_sidebar('sidebar-1') || is_archive() || is_search() || is_home() || is_page()) {
        if (!(is_page() && 'one-column' === get_theme_mod('page_options')) && 767 <= $width) {
            $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
        }
    }

    return $sizes;
}
add_filter('wp_calculate_image_sizes', 'twentyseventeen_content_image_sizes_attr', 10, 2);
/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function twentyseventeen_post_thumbnail_sizes_attr($attr, $attachment, $size)
{
    if (is_archive() || is_search() || is_home()) {
        $attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
    } else {
        $attr['sizes'] = '100vw';
    }

    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'twentyseventeen_post_thumbnail_sizes_attr', 10, 3);

function featured_image_before_content($content)
{
    if (is_singular('post') && has_post_thumbnail()) {
        $thumbnail = get_the_post_thumbnail('og-full');

        $content = $thumbnail . $content;

    }

    return $content;
}
add_filter('the_content', 'featured_image_before_content');

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */

function ognam_content_image_sizes_attr($sizes, $size)
{
    $width = $size[0];

    if (740 <= $width) {
        $sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
    }

    if (is_active_sidebar('sidebar-1') || is_archive() || is_search() || is_home() || is_page()) {
        if (!(is_page() && 'one-column' === get_theme_mod('page_options')) && 767 <= $width) {
            $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
        }
    }
    return $sizes;
}
add_filter('wp_calculate_image_sizes', 'ognam_content_image_sizes_attr', 10, 2);

// get YOAST SEO primary category
function get_post_primary_category($post_id, $term = 'category', $return_all_categories = false)
{
    $return = array();

    if (class_exists('WPSEO_Primary_Term')) {
        // Show Primary category by Yoast if it is enabled & set
        $wpseo_primary_term = new WPSEO_Primary_Term($term, $post_id);
        $primary_term = get_term($wpseo_primary_term->get_primary_term());

        if (!is_wp_error($primary_term)) {
            $return['primary_category'] = $primary_term;
        }
    }

    if (empty($return['primary_category']) || $return_all_categories) {
        $categories_list = get_the_terms($post_id, $term);

        if (empty($return['primary_category']) && !empty($categories_list)) {
            $return['primary_category'] = $categories_list[0]; //get the first category
        }
        if ($return_all_categories) {
            $return['all_categories'] = array();

            if (!empty($categories_list)) {
                foreach ($categories_list as &$category) {
                    $return['all_categories'][] = $category->term_id;
                }
            }
        }
    }

    return $return;
}

function add_custum_fontfamily($initArray){
 
    // 中文字型
    $initArray['font_formats'] = "微軟正黑體=微軟正黑體,Microsoft JhengHei;新細明體=PMingLiU,新細明體;標楷體=標楷體,DFKai-SB,BiauKai;黑體=黑體,SimHei,Heiti TC;";
 
    // 英文字型
    $initArray['font_formats'] .= "Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=v erdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats;";
 
    return $initArray;
}
add_filter('tiny_mce_before_init', 'add_custum_fontfamily');
if ( ! function_exists( 'wpex_mce_text_sizes' ) ) {
    function wpex_mce_text_sizes( $initArray ){
        $initArray['fontsize_formats'] = "9px 10px 12px 13px 14px 16px 18px 21px 24px 28px 32px 36px";
        return $initArray;
    }
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes' );