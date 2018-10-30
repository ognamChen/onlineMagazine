<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage 
 * @since 1.0
 * @version 1.0
 */
?>
<?php get_header();?>
<?php get_template_part('nav');?>
<?php

?>
<div class="container-fluid">
    <div class="row">
        <div class="offset-md-10 col-md-2">
            <?php echo get_search_form(); ?>
        </div>
    </div>
    <div class="m-t-30"></div>
    <div class="row og-border-1">
        <div class="offset-md-2 col-md-10">
            <div class="og-category">
                <h1><?php single_tag_title(); ?><div class="og-under-orange-2"></div></h1>
            </div>
        </div>
    </div>
</div>
<div class="m-t-30"></div>
<div class="container">
    <div class="row">  
    <?php
    if ( have_posts() ) : ?>
        <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'post/archive-content', get_post_format() );
        endwhile; ?>
    <?php     
    else :
        // get_template_part( 'template-parts/post/content', 'none' );
    endif; ?>
    </div>
    <div class="m-t-30"></div>
    <hr>
    <div class="row">
        <div class="offset-md-2 col-md-8 col-sm-12 m-t-30 text-center">
            <?php wpbeginner_numeric_posts_nav(); ?>
        </div>
        <div class="col-md-4 fix-height h380">
            <?php get_template_part('post-content/culturalTag');?>
        </div>
        <div class="col-md-4 fix-height h380">
            <?php get_template_part('post-content/editorChoiceTag');?>
        </div>
        <div class="col-md-4 fix-height h380">
            <?php get_template_part('post-content/mostpopularPost2');?>
        </div>
    </div>
</div>
<?php get_footer();
