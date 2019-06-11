<?php
$args = array(
    'numberposts' => 1,
    'post_type' => 'news',
    'orderby' => 'date',
);
$products = get_posts($args);?>
<?php foreach ($products as $product) {
    $image = get_the_post_thumbnail_url($product);
    $permalink = get_permalink($product);
    $time = get_post_time('F j, Y', true, $product, false);
    $postContent = $product->post_content;
    $postwithbreaks = wpautop($postContent, true);
    ?>

<section id="news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="<?php echo $permalink ?>">
                    <div class="card_news">
                        <?php if ($image) {?>
                            <div class="image">
                                <img class="img-fluid" alt="Responsive image" src="<?php echo $image ?>">
                            </div>
                        <?php }?>
                        <div class="title">
                            <p class=""><strong>
                                <?php echo $product->post_title ?></strong>
                                <!-- <p><?php echo $product->post_date; ?></p> -->
                            </p>
                        </div>
                        <div class="time text-right">
                            <p class="m-b-10"><?php echo $time; ?></p>
                        </div>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>