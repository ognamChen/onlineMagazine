<!-- search 結果 --><?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php get_template_part('nav');?>
<div class="container-fluid">
    <div class="row og-border-1">
        <div class="offset-md-2 col-md-8">
            <div class="og-category">
				<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php else : ?>
			<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
                <?php echo get_search_form(); ?>
				<?php endif; ?>
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
    
</div>
<?php get_footer();
