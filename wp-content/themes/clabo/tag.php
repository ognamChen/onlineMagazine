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
<main>
    <div class="container">
        <div class="category_page">
            <div class="row" style="">
                <div class="col-md-12">
                    <div class="category_page_title">
                        〔<?php single_tag_title();?>〕
                    </div>
                </div>
            </div>
        </div>
        <div class="category_page_list">
            <div class="row">
                <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post();
                    get_template_part('post/archive-content', get_post_format());
                endwhile; ?>
            <?php else:
        // get_template_part( 'template-parts/post/content', 'none' );
                endif; ?>
            </div>
        </div>
        <div class="category_pagination">
            <?php wpbeginner_numeric_posts_nav(); ?>
        </div>
    </div>
</main>
<?php get_footer();
