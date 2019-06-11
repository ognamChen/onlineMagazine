<!-- 若要調用 wordpress 未提供的檔案模板，如 banner.php，則使用 get_template_part，否則使用 requre('banner.php') -->
<!-- get_template_part 的參考根目錄為 自己的 theme -->
<!-- https://codex.wordpress.org/zh-cn:%E8%B0%83%E7%94%A8%E6%A8%A1%E6%9D%BF%E9%83%A8%E5%88%86/get_template_part -->
<?php get_template_part( 'banner'); ?>
<!-- 相當於使用下方php -->
<?php require('banner.php') ?>

<?php 
// 秀出目前路徑(全域變數)
__DIR__
?>