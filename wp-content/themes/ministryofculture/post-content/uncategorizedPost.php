
<section id="uncategorizedPost">
    <?php
    $category_slug = 'uncategorized';
    $args = array(
    'numberposts' => 1,
    'category_name' => $category_slug,
    'orderby' => 'date',
    );
    $products = get_posts($args);
    foreach ($products as $product) {
        $image = get_the_post_thumbnail_url($product);
        $permalink = get_permalink($product);
        $time = get_post_time('Y-m-d', true, $product, false);
        $category_id = get_category_by_slug( $category_slug )->term_id;
        $category_url = get_category_link($category_id);
        $postMeta = get_post_meta($product->ID, 'description', true);
        $excerpt = wp_trim_words( get_the_excerpt($product), 45, '...');
    ?>
    <div class="card mh-item">
        <a href="<?php echo $permalink ?>">
            <div class="og-breadth">
                <img class="card-img-top" src="<?php echo $image ?>" alt="">
            </div>
        </a>    
        <div class="card-body">
            <!-- <a href="<?php echo $category_url ?>">
                <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-bookmark"></i> <?php echo $category_name; ?></h6>
            </a> -->
            <a href="<?php echo $permalink ?>">
                <h5 class="card-title"><?php echo $product->post_title ?></h5>
                <p class="card-text"><?php echo $excerpt; ?></p>
            </a>
        </div>
    </div>
    <!-- <div class="og-box og-background-1">
        <a href="<?php echo $category_url ?>">
            <img class="img-fluid p-b-10" src="<?php echo $image ?>" alt="" srcset="">
            <div class="og-body">
                <p class="title"><?php echo $product->post_title ?></p>
                <p class="meta"><?php echo $excerpt ?></p>
            </div>
        </a>
    </div> -->
    <?php }?>
    <!-- end repeat -->
</section>

