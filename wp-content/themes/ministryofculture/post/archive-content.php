<?php 
$id = get_the_ID(); 
$postContent = get_the_content();
$postwithbreaks = wpautop($postContent, true);
$excerpt = wp_trim_words( get_the_content(), 120, '...');

?>
<div class="offset-md-2 col-md-8 col-sm-12 m-t-10 og-border-1">
    <div class="og-box og-background-1">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="og-body">
                    <a class="" href="<?php the_permalink(); ?>">
                        <p class="title"><strong><?php the_title(); ?></strong></p>
                        <!-- <p class="meta"><?php echo get_post_meta($id, 'description', true); ?></p> -->
                        <p class="meta"><?php echo $excerpt; ?></p>
                        <p class="readmore">閱讀更多</p>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6 col-sm-12">
                <a href="<?php the_permalink(); ?>">
                    <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="" srcset="">
                </a>
            </div>
        </div>
    </div>
</div>