
<section id="importantPost">
    <div class="container">
        <div class="row">
                <!-- start repeat -->
            <?php
$args = array(
    'numberposts' => 3,
    'post_type' => 'importantPost',
    'orderby' => 'date',
);
$logo = wp_get_attachment_image(14, array('50', '50'));
$products = get_posts($args);
foreach ($products as $product) {
    $image = get_the_post_thumbnail_url($product);
    $permalink = get_permalink($product);
    $time = get_post_time('F j, Y', true, $product, false);
    $postContent = $product->post_content;
    $postwithbreaks = wpautop($postContent, true);
    ?>
            <div class="col-lg-4">
                <div class="card_folder p-20">
                    <div class="folder_title">
                        <p>Triple Deer</p>
                    </div>
                    <div class="folder_box">
                        <div class="row">
                            <div class="col-3">
                                <div class="icon">
                                    <?php echo $logo; ?>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="time">
                                    <p class="m-b-10"><?php echo $time; ?></p>
                                </div>
                                <div class="title">
                                    <p class=""><strong>
                                        <?php echo $product->post_title ?></strong>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12" id="jq_readmore">
                                <div style="text-align : right; padding-right:10px;">:
                                    <a onclick="jq_readmore(this);">read more</a>
                                :</div>
                            </div>
                            <div class="col-12">
                                <div id="jq_card_content" class="jq_card_content">
                                    <?php echo $postwithbreaks ?>
                                    <div style="text-align : right; padding-right:10px;">:
                                    <a onclick="jq_close(this);">close</a>
                                :</div>
                                </div>

                            </div>
                            <div class="col-12">
                                
                            </div>
                        </div>
                        <a href="<?php echo $permalink ?>">
                            <?php if ($image) {?>
                                <div class="image">
                                    <img class="img-fluid" alt="Responsive image" src="<?php echo $image ?>">
                                </div>
                            <?php }?>
                        </a>
                    </div>
                </div>
            </div>
            <?php }?>
            <!-- end repeat -->
        </div>
    </div>
</section>

