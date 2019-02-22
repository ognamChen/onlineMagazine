<?php get_header();?>
<?php get_template_part('nav');?>
<!-- 設定不同文章格式 (format) 產生不同頁面-->
<div class="right_decorate"></div>
<section id="post_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post_content">
                    <div class="post_content_img">
                        <img src="<?php the_post_thumbnail_url()?>" class="img-fluid" alt="Responsive image">
                        <!-- <p><?php echo get_the_post_thumbnail_caption() ?></p> -->
                    </div>
                    <div class="post_content_head">
                        <div class="post_content_title"><?php the_title();?></div>
                        <div class="post_content_info">
                            <?php the_category(' ');?>
                                <!-- <?php if (has_tag()) { ?>
                                    <p><?php the_tags(null, ', ', null);?></p>
                                <?php } ?> -->
                                <!-- <p>發佈時間：<span style="color:#1b1e21"><?php the_time('Y/m/j a g:i');?></span></p> -->
                        </div>
                        <!-- <div class="post_content_excerpt">
                            <?php the_excerpt();?>
                        </div> -->
                    </div>
                    <div class="post_content_main">
                        <p><?php the_content();?></p>
                    </div>
                </div>
            </div>
        </div> <!-- row end -->
    </div> <!-- container end -->
</section>
<?php
if (comments_open() || get_comments_number()):
    comments_template();
endif;
?>
