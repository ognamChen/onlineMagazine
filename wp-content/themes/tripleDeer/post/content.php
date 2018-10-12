<?php get_header();?>
<?php get_template_part('nav');?>
<!-- 設定不同文章格式 (format) 產生不同頁面-->
<section id="post_content">
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                <div class="card_post m-10">
                    <!-- <div class="image text-center">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="Responsive image">
                    </div> -->
                    <div class="title text-center">
                        <p><strong><?php the_title();?></strong></p>
                    </div>
                    <div class="content text-center">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>  
        </div> <!-- row end -->
    </div> <!-- container end -->
</section>
<?php
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
?>