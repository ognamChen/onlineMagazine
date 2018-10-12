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
add_image_size('twentyseventeen-featured-image', 2000, 1200, true);
add_image_size('twentyseventeen-thumbnail-avatar', 100, 100, true);

// add Bootstrap framework and jQuery
add_action('wp_enqueue_scripts', 'add_styles');
function add_styles()
{
    wp_enqueue_style('ognam_style', get_template_directory_uri() . "/assets/css/ognam.css");
    wp_enqueue_style('main_style', get_stylesheet_uri());
    wp_enqueue_style('cLab_style', get_template_directory_uri() . "/assets/css/cLab.css");
    wp_enqueue_style('bootstrap_min_4', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    wp_enqueue_style('fontawsome5', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
}

add_action('wp_enqueue_scripts', 'update_jquery_version');
function update_jquery_version()
{
    wp_enqueue_script('jquery3', "https://code.jquery.com/jquery-3.3.0.min.js", array(), '', true);
    wp_enqueue_script('popper_min', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", array('jquery3'), '', true);
    wp_enqueue_script('bootstrap_min', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array('popper_min', 'jquery3'), '', true);
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
