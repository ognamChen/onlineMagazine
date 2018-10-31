<?php get_header();?>
<?php get_template_part('nav');?>
<!-- 設定不同文章格式 (format) 產生不同頁面-->
<section id="post_content">
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="offset-md-10 col-md-2">
                <?php echo get_search_form(); ?>
            </div>
        </div>
    </div> -->
    <div class="m-t-30"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 og-border-1">
                <div class="og-post">
                    <img src="<?php the_post_thumbnail_url()?>" class="img-fluid" alt="Responsive image">
                    <p style="color:red;"><?php echo get_the_post_thumbnail_caption() ?></p>
                    <div class="title m-b-30">
                        <h1><strong><?php the_title();?></strong></h1>
                        <div class="info">
                            <ul class="list-inline">
                                <li class="list-inline-item"><p>分類：<?php the_category(' ');?></p></li>
                                <?php if (has_tag()) { ?>
                                    <li class="list-inline-item"><p><?php the_tags(null, ', ', null);?></p></li>
                                <?php } ?>
                                <li class="list-inline-item"><p>發佈時間：<span style="color:#1b1e21"><?php the_time('Y/m/j a g:i');?></span></p></li>
                            </ul>
                        </div>
                        <div class="m-l-30 p-l-30 m-r-30 p-r-30">
                            <?php the_excerpt();?>
                        </div>
                    </div>
                    <div class="meta">
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