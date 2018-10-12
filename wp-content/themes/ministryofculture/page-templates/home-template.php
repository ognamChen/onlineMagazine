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
			<div class="col-md-8 p-r-0 p-l-0">
				<?php get_template_part('post-content/currentPost');?>
			</div>
			<div class="col-md-4 og-border-1 m-l--1" style="height:420px;">
				<div class="m-t-30 visible-sm"></div>
				<?php echo get_search_form(); ?>
				<?php get_template_part('post-content/uncategorizedPost');?>
			</div>
		</div>
		<div class="row m-t--1">
			<div class="col-md-4 og-border-1">
				<?php get_template_part('post-content/culturalTag');?>
			</div>
			<div class="col-md-8 og-border-1 m-l--1">
				<?php get_template_part('post-content/culturalEcosystemPost');?>
			</div> 
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12 og-border-1 m-t--1" style="height:450px;">
						<?php get_template_part('post-content/culturalResearchPost');?>
					</div>
				</div>
				<div class="row m-t--1">
					<div class="col-md-6 og-border-1" >
						<?php get_template_part('post-content/editorChoiceTag');?>
					</div>
					<div class="col-md-6 og-border-1">
						<?php get_template_part('post-content/baseHistoryPost');?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 og-border-1 m-t--1" style="height:460px;">
						<?php get_template_part('post-content/culturalResearchPost');?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12 og-border-1 m-t--1 m-l--1" style="height:380px;">
						<?php get_template_part('post-content/internationalObservationPost');?>
					</div>
					<div class="col-md-12 og-border-1 m-t--1 m-l--1">
						<?php get_template_part('post-content/mostpopularPost');?>
					</div>
					<div class="col-md-12 og-border-1 m-t--1 m-l--1" style="height:390px;">
						<?php get_template_part('post-content/echoPost');?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</main>
<?php get_footer();