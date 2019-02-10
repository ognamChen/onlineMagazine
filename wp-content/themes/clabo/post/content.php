<?php get_header();?>
<?php get_template_part('nav');?>
<!-- 設定不同文章格式 (format) 產生不同頁面-->
<section id="post_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post_content">
                    <div class="post_content_img">
                        <img src="<?php the_post_thumbnail_url()?>" class="img-fluid" alt="Responsive image">
                        <p><?php echo get_the_post_thumbnail_caption() ?></p>
                    </div>
                    <div class="post_content_head">
                        <div class="post_content_title"><?php the_title();?></div>
                        <div class="post_content_info">
                            <ul class="list-inline">
                                <li class="list-inline-item"><p>〔分類〕<?php the_category(' ');?></p></li>
                                <?php if (has_tag()) { ?>
                                    <li class="list-inline-item"><p><?php the_tags(null, ', ', null);?></p></li>
                                <?php } ?>
                                <!-- <li class="list-inline-item"><p>發佈時間：<span style="color:#1b1e21"><?php the_time('Y/m/j a g:i');?></span></p></li> -->
                            </ul>
                        </div>
                        <div class="post_content_excerpt">
                            <?php the_excerpt();?>
                        </div>
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
