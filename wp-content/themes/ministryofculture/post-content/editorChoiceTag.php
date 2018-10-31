<section id="editorChoiceTag">
    <div class="og-box og-color-b1">
        <div class="og-category">
            <p class="tag">編輯推薦<div class="og-under-green-1"></div></p>
        </div>
        <div class="og-body">
        <ul class="wpp-list">
            <?php
            $tag = "editor-choice";
            $args = array(
            'numberposts' => 4,
            'tag' => $tag,
            'orderby' => 'date',
            );
            $products = get_posts($args);
            foreach ($products as $product) {
                $permalink = get_permalink($product);
                $time = get_post_time('Y-m-d', true, $product, false);
                $postMeta = get_post_meta($product->ID, 'description', true);
                $excerpt = wp_trim_words( get_the_excerpt($product), 40, '...');
            ?>
            <li>
                <a class="wpp-post-title" href="<?php echo $permalink ?>">
                    <p class="m-b-0"><?php echo $product->post_title ?></p>
                </a>
            </li>
            <?php }?>
        </ul>
    </div>
    </div>
    <!-- end repeat -->
</section>