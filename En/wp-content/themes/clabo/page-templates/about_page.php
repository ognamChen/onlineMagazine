<?php
/*
Template Name: About
 */
?>
<!-- about  -->
<!-- in wordpress: front page > home > index -->
<!-- 需在 setting -> 閱讀設定 -> 首頁顯示：最新的文章 首頁才會顯示 home.php -->
<!-- https://codex.wordpress.org/Function_Reference/get_header -->
<?php get_header();?>
<?php get_template_part('nav');?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="post_content_main about">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>

</main>
<?php get_footer();