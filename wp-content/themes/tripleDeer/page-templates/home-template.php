<?php
/*
Template Name: Home
 */
?>
<!-- home  -->
<!-- in wordpress: front page > home > index -->
<!-- 需在 setting -> 閱讀設定 -> 首頁顯示：最新的文章 首頁才會顯示 home.php -->
<!-- https://codex.wordpress.org/Function_Reference/get_header -->
<?php get_header();?>
<main>
  <?php
$product_index = get_page_by_title("tripleDeer-index", OBJECT, "page");
$product_info = get_page_by_title("tripleDeer-info", OBJECT, "page");
$info_url = get_permalink( $product_info);
$image_index = get_the_post_thumbnail_url($product_index);
?>
<div class="home">
  <a href="<?php echo $info_url?>">
    <div class="image text-center">
      <img src="<?php the_post_thumbnail_url()?>" class="img-fluid" alt="Responsive image">
    </div>
  </a>
</div>
</main>
<?php get_footer();