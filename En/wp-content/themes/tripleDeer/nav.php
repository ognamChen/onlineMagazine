<header>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <div class="icon_nav">
          <ul class="nav justify-content-end">
          <?php 
              $menu_locations = get_nav_menu_locations();
              $menu_items = wp_get_nav_menu_items($menu_locations['indexNav']);
              foreach ($menu_items as $menu_item) {
                $permalink = $menu_item->url;
                $title = $menu_item->title;
              ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $permalink ?>" target="_blank"><?php echo $title ?></a>
            </li>
              <?php } ?>
          </ul>
        </div>
      </div> 
      <div class="col-md-6 col-12">
        <a href="<?php echo get_home_url(); ?>">
          <div class="header_image m-t-30">
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/img/TripleDeerLogo2.png" ;?>" alt="">
          </div>
        </a>
      </div>
    </div> <!-- row end -->
  </div> <!-- container end -->
</header>
