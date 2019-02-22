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

<?php if (is_category("feature")): ?>
<?php 
    $this_category = get_category($cat);
    $child_ids = get_term_children($this_category->term_id, $this_category->taxonomy);
?>
<main>
    <div class="container">
        <div class="child_cat_list">
        <?php foreach ($child_ids as $child_id) {
            $category_url = get_category_link($child_id);
            $category_name = get_cat_name($child_id);
            $category_description = category_description($child_id);
            ?>
            <div class="child_cat_item" onclick="javascript:location.href='<?php echo $category_url; ?>'">
                <div class="row">
                    <div class="col-md-8">
                        <div class="child_cat_item_title">
                            <?php echo $category_name; ?>
                        </div>
                        <div class="child_cat_item_content">
                            <?php echo $category_description; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="child_cat_item_img JQ"></div>
                    </div>
                </div>    
            </div>
        <?php }?>
        </div>
    </div>
</main>
<?php else: ?>
<main>
    <div class="container">
        <div class="category_page">
            <div class="row" style="">
                <?php if (category_description($category_id) == ""): ?>
                    <div class="col-md-12">
                        <div class="category_page_title">
                            <?php single_tag_title();?> |
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-md-12">
                        <div class="category_page_title">
                            <?php single_tag_title();?> |
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="category_page_img JQ"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="category_page_content">
                            <?php echo category_description($category_id); ?>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>
        <div class="category_page_list">
            <div class="row">
                <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post();
                    get_template_part('post/archive-content', get_post_format());
                endwhile;?>
                <?php else:
                    // get_template_part( 'template-parts/post/content', 'none' );
                endif;?>
            </div>
        </div>
        <div class="category_pagination">
            <?php wpbeginner_numeric_posts_nav();?>
        </div>
    </div>
</main>
<?php endif;?>


<?php get_footer();
