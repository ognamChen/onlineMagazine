<!-- claboPlus -->
<section id="claboPlus">
<?php
// // get category not in
// $point = 'point';
// $feature = 'feature';
// $clabo = 'clabo-plus';
// $point_not_in_id = get_category_by_slug($point)->term_id;
// $feature_not_in_id = get_category_by_slug($feature)->term_id;
// $clabo_not_in_id = get_category_by_slug($clabo)->term_id;
$category_slug = 'clabo-plus';

// get post args
$args = array(
    'numberposts' => -1,
    'category_name' => $category_slug,
    'orderby' => 'date',
);
$posts = get_posts($args);
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <?php
                    foreach ($posts as $post) {
                        $category = get_the_category($post->ID);
                        $image = get_the_post_thumbnail_url($post);
                        $permalink = get_permalink($post);
                        $time = get_post_time('Y-m-d', true, $post, false);
                        // post meta
                        $postMeta = get_post_meta($post->ID, 'description', true);
                        // $excerpt = wp_trim_words(get_the_excerpt($post), 40, '...');
                        $excerpt = get_the_excerpt($post);
                        // category
                        $post_categories = get_post_primary_category($post->ID, 'category');
                        $primary_category = $post_categories['primary_category'];
                        $primary_category_content = $primary_category->description;
                        $category_id = ($primary_category)->term_id;
                        $category_name = $primary_category->name;
                        $category_url = get_category_link($category_id);
                        ?>
                        <!-- PHP repeat start  -->
                        <a href="<?php echo "#".$post->ID; ?>" onclick="javascript:showPost(<?php echo $post->ID; ?>);">
                            <div class="claboList posts posts_mh">                                
                                <div class="posts_img">
                                    <img class="img-fluid" src="<?php echo $image ?>" alt="" srcset="">
                                </div>
                                <div class="posts_description">
                                    <div class="posts_title">
                                        <span>〔<?php echo $category_name ?>〕</span>
                                        <?php echo $post->post_title ?>
                                    </div>
                                </div>
                            </div> 
                        </a>
                    <?php }?>
                    <!-- PHP repeat end  -->
                </div>
                <?php 
                foreach ($posts as $post) {
                    $category = get_the_category($post->ID);
                    $image = get_the_post_thumbnail_url($post);
                    $permalink = get_permalink($post);
                    $time = get_post_time('Y-m-d', true, $post, false);
                    // post meta
                    $postMeta = get_post_meta($post->ID, 'description', true);
                    // $excerpt = wp_trim_words(get_the_excerpt($post), 40, '...');
                    $excerpt = get_the_excerpt($post);
                    // category
                    $post_categories = get_post_primary_category($post->ID, 'category');
                    $primary_category = $post_categories['primary_category'];
                    $primary_category_content = $primary_category->description;
                    $category_id = ($primary_category)->term_id;
                    $category_name = $primary_category->name;
                    $category_url = get_category_link($category_id);
                    ?>
                    <!-- PHP repeat start 2 -->
                    <div class="claboItem posts hide" id="<?php echo $post->ID ?>">
                        <a href="<?php echo $permalink ?>">
                            <div class="posts_img">
                                <img class="img-fluid" src="<?php echo $image ?>" alt="" srcset="">
                            </div>
                            <div class="posts_description">
                                <div class="posts_title">
                                    <span>〔<?php echo $category_name ?>〕</span>
                                    <?php echo $post->post_title ?>
                                </div>
                                <div class="posts_excerpt">
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
</section>