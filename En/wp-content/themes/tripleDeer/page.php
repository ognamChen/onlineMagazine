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
  <!-- section importantPost -->
  <div class="m-t-30"></div>
  <?php get_template_part('home-content/importantPost');?>
  <!-- section news -->
  <?php get_template_part('home-content/news');?>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center" style="margin-top:60px;">
      <iframe style="border: 0; width: 50%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=981739267/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://tripledeer.bandcamp.com/album/urban-shepherd">Urban Shepherd by Triple Deer</a></iframe>      </div>
    </div>
  </div>
  <!-- section product -->
  <?php get_template_part('home-content/product');?>
  <!-- section video -->
  <!-- <?php get_template_part('home-content/video');?> -->
  <!-- serach -->
  <section id="search">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php echo get_search_form() ?>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer();