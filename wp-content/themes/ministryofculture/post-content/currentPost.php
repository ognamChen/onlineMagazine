<section id="currentPost">
    <div id="carouselExampleIndicators" class="carousel slide og-carousel fix-height h420" data-ride="carousel">
        <div class="d-none d-sm-block">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
        </div>

        <div class="carousel-inner">
        <?php
            $args = array(
                'numberposts' => 1,
                'orderby' => 'date',
            );
            $products = get_posts($args);
            foreach ($products as $product) {
                $image = get_the_post_thumbnail_url($product);
                $permalink = get_permalink($product);
                $time = get_post_time('Y-m-d', true, $product, false);
                $postMeta = get_post_meta($product->ID, 'description', true);
                $excerpt = wp_trim_words( get_the_excerpt($product), 40, '...');

                ?>
                <div class="carousel-item">
                    <a href="<?php echo $permalink ?>">
                        <img class="img-fluid p-10" src="<?php echo $image ?>">
                        <div class="og-body">
                            <h2 class=""><?php echo $product->post_title ?></h2>
                            <!-- <p class="meta p-b-10"><?php echo $excerpt; ?></p> -->
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
