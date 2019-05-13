<!-- post-content 焦點 -->
<section id="point">
<?php
$category_slug = 'point';
$args = array(
    'numberposts' => 1,
    'category_name' => $category_slug,
    'orderby' => 'date',
);
// $category_id = get_category_by_slug($category_slug)->term_id;
// $category_url = get_category_link($category_id);
$posts = get_posts($args);
// get primary category
$post_categories = get_post_primary_category($posts[0]->ID, 'category');
$primary_category = $post_categories['primary_category'];
$primary_category_content = $primary_category->description;
$category_id = ($primary_category)->term_id;
$category_name = get_category_by_slug($category_slug)->name;
// $category_name = $primary_category->name;
$category_url = get_category_link($category_id);
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
    <div class="container">
        <div class="point">
            <div class="row">
                <div class="col-md-12">
                    <div class="point_img">
                        <a href="<?php echo $permalink ?>">
                            <img class="img-fluid" src="<?php echo $image ?>" alt="" srcset="">   
                            <div class="point_description">
                                <div class="point_title">
                                    <span><?php echo $category_name ?> | </span>
                                    <?php echo $post->post_title ?>
                                </div>
                                <div class="point_excerpt">
                                    <?php echo $excerpt; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-md-7">
                    <div class="point_img point_mh">
                        <a href="<?php echo $permalink ?>">
                            <img class="img-fluid" src="<?php echo $image ?>" alt="" srcset="">
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <?php }?>
    <!-- PHP repeat end  -->
</section>