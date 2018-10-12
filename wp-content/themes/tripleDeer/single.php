<!-- Post 文章 -->
<?php get_header();
while (have_posts()): the_post();
    ?>
	<main>
	    <?php get_template_part('post/content', get_post_format()); ?>
    </main>
    <!-- <?php
    the_post_navigation( array(
        'prev_text' => '上篇',
        'next_text' => '下篇',
    ));
    ?> -->
<?php endwhile;
get_footer();