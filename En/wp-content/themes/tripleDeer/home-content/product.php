<section id="products">
    <div class="container">
        <div class="row">
        <?php
            $args = array(
                'numberposts' => 8,
                'post_type' => 'product',
                'orderby' => 'date',
            );
            $products = get_posts($args);
            foreach ($products as $product) {
                $image = get_the_post_thumbnail_url($product);
                $permalink = get_permalink($product);
                $time = get_post_time('F j, Y', true, $product, false);
                ?>
            <div class="col-6 col-md-3">
                <div class="card_product">
                    <a class="link" href="<?php echo $permalink ?>">
                        <?php if ($image) { ?>
                            <div class="image">
                                <img class="img-fluid" alt="Responsive image" src="<?php echo $image ?>">
                            </div>
                            <div class="image_text">
                                <p class="p-t-20"><strong><?php echo $product->post_title ?></strong></p>
                                <p style="font-size:12px;"><?php echo $time ?></p>
                            </div>
                        <?php } else { ?>
                        <div class="title">
                            <p class="p-t-20"><strong><?php echo $product->post_title ?></strong></p>
                            <p style="font-size:12px;"><?php echo $time ?></p>
                        </div>
                        <?php }?>
                    </a>
                </div>
                <!-- card end -->
            </div>
            <!-- col-12 col-md-6 end -->
            <?php } ?>
        </div>
        <!-- row end -->
    </div>
</section>