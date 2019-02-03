<!-- post-content 焦點 -->
<section id="point">
<?php
$category_slug = 'point';
$args = array(
    'numberposts' => 1,
    'category_name' => $category_slug,
    'orderby' => 'date',
);
$category_id = get_category_by_slug( $category_slug )->term_id;
$category_url = get_category_link($category_id);
$category_name = get_category_by_slug( $category_slug)->name;
$posts = get_posts($args);
foreach ($posts as $post) {
    $image = get_the_post_thumbnail_url($post);
    $permalink = get_permalink($post);
    $time = get_post_time('Y-m-d', true, $post, false);
    // post meta
    $postMeta = get_post_meta($post->ID, 'description', true);
    $excerpt = wp_trim_words(get_the_excerpt($post), 40, '...');
    ?>
    <!-- PHP repeat start  -->
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="point_description">
                    <a href="<?php echo $permalink ?>">
                        <div class="point_title">
                            <span><?php echo $category_name ?></span>
                            / <?php echo $post->post_title ?>
                        </div>
                        <div class="point_excerpt">
                            <?php echo $excerpt; ?>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="point_img">
                    <img class="img-fluid" src="<?php echo $image ?>" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <!-- PHP repeat end  -->
</section>