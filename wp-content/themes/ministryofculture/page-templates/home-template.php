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
	<div class="container">
		<div class="row">
			<div class="col-md-8 mh-item">
				<!-- 最新文章 -->
				<?php get_template_part('post-content/currentPost');?>
			</div>
			<div class="col-md-4 mh-item">
				<div class="og-border-1">
					<!-- 不分類 -->
					<?php get_template_part('post-content/uncategorizedPost');?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 p-r-5 p-l-5">
				<div class="row">
					<div class="col-md-12 p-r-5 p-l-5">
						<div class="og-border-1">
							<?php get_template_part('post-content/culturalExperimenterPost');?>
						</div>
					</div>
					<div class="col-md-6 p-r-5 p-l-5">
						<div class="og-border-1">
							<?php get_template_part('post-content/culturalEcosystemPost');?>
						</div>
					</div>
					<div class="col-md-6 p-r-5 p-l-5">
						<div class="og-border-1">
							<?php get_template_part('post-content/culturalResearchPost');?>
						</div>
					</div>
					<div class="col-md-4 p-r-5 p-l-5">
						<div class="og-border-1">
							<?php get_template_part('post-content/baseHistoryPost');?>
						</div>
					</div>
					<div class="col-md-4 p-r-5 p-l-5">
						<div class="og-border-1">
							<?php get_template_part('post-content/internationalObservationPost');?>
						</div>
					</div>
					<div class="col-md-4 p-r-5 p-l-5">
						<div class="og-border-1">
							<?php get_template_part('post-content/echoPost');?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 p-r-5 p-l-5">
				<?php get_sidebar(); ?>
			</div>
		</div>
		
	</div>
</main>
<?php get_footer();