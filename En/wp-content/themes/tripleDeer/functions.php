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
    wp_enqueue_style( 'ognam_style', get_template_directory_uri() . "/assets/css/ognam.css");
    wp_enqueue_style('main_style', get_stylesheet_uri());
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

//  加入文章後台的"格式"  post-format
add_theme_support('post-formats', array(
    // 'aside',
    'image',
    // 'video',
    // 'quote',
    // 'link',
    // 'gallery',
    // 'audio',
));

// 加入文章後台的"文章類型"  post-type
// register custom post type 'my_custom_post_type' with 'supports' parameter
add_action('init', 'create_my_post_type');
function create_my_post_type()
{
    // add_post_type_support( $post_type, $supports )
    register_post_type('product',
        array(
            'labels' => array('name' => __('產品')),
            'public' => true,
            'supports' => array('title', 'editor', 'post-formats', 'thumbnail'),
        )
    );

    register_post_type('video',
        array(
            'labels' => array('name' => __('影片')),
            'public' => true,
            // custom-fileds 增加自訂欄位，如 youtube key-value
            'supports' => array('title', 'editor', 'post-formats', 'thumbnail', 'custom-fields'),
        )
    );

    register_post_type('news',
        array(
            'labels' => array('name' => __('新聞')),
            'public' => true,
            'supports' => array('title', 'editor', 'post-formats', 'thumbnail'),
        )
    );

    register_post_type('importantPost',
        array(
            'labels' => array('name' => __('置頂')),
            'public' => true,
            'supports' => array('title', 'editor', 'post-formats', 'thumbnail'),
        )
    );
}

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
// // 更改 nav ul 樣式的方式
// // https://stackoverflow.com/questions/14464505/how-to-add-class-in-li-using-wp-nav-menu-in-wordpress
// add_filter('nav_menu_css_class', 'ognam_menu_item_classes', 1, 3);
// function ognam_menu_item_classes($classes, $item, $args) {
//     if($args->menu == 'indexNav') {
//     //   $classes[] = 'nav-item';
//       $classes = array('nav-item');
//     }
//     return $classes;
//   }

//   add_filter( 'nav_menu_link_attributes', 'ognam_menu_item_link_classes', 1, 3 );
// function ognam_menu_item_link_classes( $atts, $item, $args ) {
//     $class = 'nav-link'; // or something based on $item
//     $atts['class'] = $class;
//     return $atts;
//   }
