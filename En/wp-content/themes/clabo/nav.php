<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-8">
                <a href="<?php echo get_home_url(); ?>">
                    <h1 class="header_img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/img/Logo.png"; ?>" alt="">
                    </h1>
                </a>
            </div>
            <div class="col-sm-6 col-4">
                <div class="sideMenuBtn" onclick="openNav()"></div>
                <div class="clearfix"></div>
            </div>
        </div> <!-- row end -->
    </div> <!-- container end -->
</header>
<div id="myNav" class="overlay">
    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <!-- Overlay content -->
    <div class="overlay-content">
    <div class="overlay-search"><?php echo get_search_form(); ?></div>
    <?php
        $menu_locations = get_nav_menu_locations();
        $menu_items = wp_get_nav_menu_items($menu_locations['indexNav']);
        foreach ($menu_items as $menu_item) {
            $permalink = $menu_item->url;
            $title = $menu_item->title;
        ?>
        <a href="<?php echo $permalink ?>"><?php echo $title ?></a>
        <?php } ?>
    </div>
</div>

