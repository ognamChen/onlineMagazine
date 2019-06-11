<?php
$args = array(
    'range' => 'last30days',
    'stats_comments' => 1,
    'limit'     => 5,
);
?>
<section id="editorChoiceTag">
    <div class="og-box og-background-1">
        <div class="og-category">
            <p class="tag text-muted"><i class="text-danger fas fa-fire"></i> 本月熱門文章<div class="og-under-green-1"></div></p>
        </div> 
        <div class="og-body">
        <?php
        if (function_exists('wpp_get_mostpopular'))
            wpp_get_mostpopular($args);
        ?>
        </div>
    </div>
</section>