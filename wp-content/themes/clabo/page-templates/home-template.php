<?php
/*
Template Name: Page
 */
?>
<!-- home  -->
<!-- in wordpress: front page > home > index -->
<!-- 需在 setting -> 閱讀設定 -> 首頁顯示：最新的文章 首頁才會顯示 home.php -->
<!-- https://codex.wordpress.org/Function_Reference/get_header -->
<?php get_header();?>
<?php get_template_part('nav');?>
<main>
	<div class="container-fluid">
		<!-- 焦點文章 -->
		<?php get_template_part('post-content/point');?>
		<!-- 熱門文章 -->
		<?php get_template_part('post-content/feature');?>
	</div>
</main>
<?php get_footer();