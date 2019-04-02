<!-- posts-content 其餘分類 -->
<section id="posts">
<?php
// get category not in
$point = 'point';
$feature = 'feature';
$clabo = 'clabo-plus';
$point_not_in_id = get_category_by_slug($point)->term_id;
$feature_not_in_id = get_category_by_slug($feature)->term_id;
$clabo_not_in_id = get_category_by_slug($clabo)->term_id;

// get post args
$args = array(
    'numberposts' => 5,
    'category__not_in' => array($point_not_in_id, $feature_not_in_id, $clabo_not_in_id),
    // 'orderby' => 'date',
);
$posts = get_posts($args);
?>
    <div class="container">
        <div class="row">
            <?php
            foreach ($posts as $post) {
                $category = get_the_category($post->ID);
                $category_name = $category[0]->name;
                $image = get_the_post_thumbnail_url($post);
                $permalink = get_permalink($post);
                $time = get_post_time('Y-m-d', true, $post, false);
                // post meta
                $postMeta = get_post_meta($post->ID, 'description', true);
                // $excerpt = wp_trim_words(get_the_excerpt($post), 40, '...');
                $excerpt = get_the_excerpt($post);
                ?>
                <!-- PHP repeat start  -->
                <div class="col-md-4">
                    <div class="posts posts_mh">
                        <a href="<?php echo $permalink ?>">
                            <div class="posts_img">
                                <img class="img-fluid" src="<?php echo $image ?>" alt="" srcset="">
                            </div>
                            <div class="posts_description">
                                <div class="posts_title">
                                    <span><?php echo $category_name ?> | </span>
                                    <?php echo $post->post_title ?>
                                </div>
                                <div class="posts_excerpt">
                                    <?php echo $excerpt; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php }?>
            <!-- PHP repeat end  -->
            <div class="col-md-4">
                <div class="tag_cloud_title">
                    熱門關鍵字
                </div>
                <div class="tag_cloud_content" style="">
                    <?php show_tag_cloud(array( format=>"flat", number=>"30", smallest=>"120", largest=>"200",  color=>"#1b1e21" ));?>
                </div>
            </div>
        </div>
    </div>
</section>