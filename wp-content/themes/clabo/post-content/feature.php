<!-- feature-content 專題 -->
<section id="feature">
<?php
$category_slug = 'feature';
// get category not in
$category_not_in_slug = 'point';
$category_not_in_id = get_category_by_slug( $category_not_in_slug )->term_id;
// get post args
$args = array(
    'numberposts' => 2,
    'category_name' => $category_slug,
    'category__not_in' => $category_not_in_id,
    'orderby' => 'date',
);
$posts = get_posts($args);
// get primary category
$post_categories = get_post_primary_category($posts[0]->ID, 'category');
$primary_category = $post_categories['primary_category'];
$primary_category_content = $primary_category ->description;
// get primary description img
$regex = '/src="([^"]*)"/';
preg_match_all( $regex, $primary_category_content, $matches );
$matches = array_reverse($matches);
// primary category img url;
$primary_category_content_img = $matches[0][0];
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="feature_main">
                    <div class="feature_main_img">
                        <img src="<?php echo $primary_category_content_img; ?>" alt="">
                    </div>
                    <div class="feature_main_title">
                        <?php echo $primary_category->name; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <?php 
            foreach ($posts as $post) {
                $image = get_the_post_thumbnail_url($post);
                $permalink = get_permalink($post);
                $time = get_post_time('Y-m-d', true, $post, false);
                $category_id = ($primary_category)->term_id;
                $category_name = $primary_category->name;
                $category_url = get_category_link($primary_category);
                // post meta
                $postMeta = get_post_meta($post->ID, 'description', true);
                $excerpt = wp_trim_words(get_the_excerpt($post), 40, '...');
                ?>
                <!-- PHP repeat start  -->
                <div class="point_img">
                    <img class="img-fluid" src="<?php echo $image ?>" alt="" srcset="">
                </div>
                <div class="point_description">
                    <a href="<?php echo $permalink ?>">
                        <div class="point_title">
                            <span><?php echo $category_name ?></span>
                            / <?php echo $post->post_title ?>
                        </div>
                        <!-- <div class="point_excerpt">
                            <?php echo $excerpt; ?>
                        </div> -->
                    </a>
                </div>
                <?php }?>
                <!-- PHP repeat end  -->
            </div>
        </div>
    </div>
</section>