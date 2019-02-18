<!-- feature-content 專題 -->
<section id="feature">
<?php
$category_slug = 'feature';
// get category not in
$point = 'point';
$point_id = get_category_by_slug($point)->term_id;
// get post args
$args = array(
    'numberposts' => 2,
    'category_name' => $category_slug,
    'category__not_in' => $point_id,
);
$posts = get_posts($args);
// get primary category
$post_categories = get_post_primary_category($posts[0]->ID, 'category');
$primary_category = $post_categories['primary_category'];
$primary_category_content = $primary_category->description;
$category_id = ($primary_category)->term_id;
$category_name = $primary_category->name;
$category_url = get_category_link($category_id);
// get primary description img
$regex = '/src="([^"]*)"/';
preg_match_all($regex, $primary_category_content, $matches);
$matches = array_reverse($matches);
// primary category img url;
$primary_category_content_img = $matches[0][0];
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="feature_mh" style="border-bottom: 1px solid rgba(170, 170, 170, 1);">
                    <div class="feature_category" onclick="javascript:location.href='<?php echo $category_url; ?>'">
                        <div class="feature_category_img JQ"></div>
                        <div class="feature_category_title">
                            〔<?php echo $category_name; ?>〕
                        </div>
                        <div class="feature_category_content">
                            <?php echo category_description( $category_id ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature_mh">
                    <?php
                    foreach ($posts as $post) {
                        $image = get_the_post_thumbnail_url($post);
                        $permalink = get_permalink($post);
                        $time = get_post_time('Y-m-d', true, $post, false);
                        // post meta
                        $postMeta = get_post_meta($post->ID, 'description', true);
                        // $excerpt = wp_trim_words(get_the_excerpt($post), 40, '...');
                        $excerpt = get_the_excerpt($post);
                        ?>
                        <!-- PHP repeat start  -->
                        <div class="feature">
                            <a href="<?php echo $permalink ?>">
                                    <div class="feature_img">
                                        <img class="img-fluid" src="<?php echo $image ?>" alt="" srcset="">
                                    </div>
                                <div class="feature_description">
                                    <div class="feature_title">
                                        <span>〔<?php echo $category_name ?>〕</span>
                                        <?php echo $post->post_title ?>
                                    </div>
                                    <div class="feature_excerpt">
                                        <?php echo $excerpt; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }?>
                    <!-- PHP repeat end  -->
                </div>
            </div>
        </div>
    </div>
</section>