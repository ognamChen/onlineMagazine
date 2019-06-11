<?php 
$id = get_the_ID(); 
$postContent = get_the_content();
$postwithbreaks = wpautop($postContent, true);
// $excerpt = wp_trim_words( get_the_content(), 120, '...');
$excerpt = get_the_excerpt($id);
?>
<div class="col-md-4">
    <div class="posts posts_mh">
        <a href="<?php the_permalink(); ?>">
            <div class="posts_img">
                <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="" srcset="">
            </div>
            <div class="posts_description">
                <div class="posts_title">
                    <?php the_title(); ?>
                </div>
                <div class="posts_excerpt">
                    <?php echo $excerpt; ?>
                </div>
            </div>
        </a>
    </div>
</div>