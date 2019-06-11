<div class="header-spacer"></div>
<header class="header header--stuck">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-6 col-md-2">
				<a href="https://clab.org.tw" class="header__logo">
					<img width="512" height="146" src="https://clab.org.tw/wp-content/uploads/2018/08/clab-logo.png" class="attachment-large size-large" alt="">
				</a>
			</div>
			<div class="col-xs-12 col-md-10 header__menu-wrapper d-none d-sm-block">
				<div id="navbar-content" class="navbar-collapse main-menu-container pull-right">
					<ul id="menu-main-menu" class="menu">
					<?php 
						$menu_locations = get_nav_menu_locations();
						$menu_items = wp_get_nav_menu_items($menu_locations['indexNav']);
						foreach ($menu_items as $menu_item) {
							$permalink = $menu_item->url;
							$title = $menu_item->title;
						?>
						<li id="" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo $permalink ?>"><?php echo $title ?></a></li>
						<?php } ?>
						<li id="" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_home_url(); ?>">線上誌</a></li>
					</ul>
				</div>
			</div>
			<!-- <div class="col-6 col-md-2 text-right d-none d-sm-block">
				<ul class="language-menu">
					<li class="active"><a href="https://clab.org.tw">繁中</a></li>
					<li class=" "><a href="https://clab.org.tw/en/">EN</a></li>
				</ul>
			</div> -->
		</div>
	</div>
	<!-- <div class="header__mobile-menu-wrapper d-sm-none">
		<ul id="menu-%e6%89%8b%e6%a9%9f%e9%81%b8%e5%96%ae" class="header__mobile-menu">
			<li id="menu-item-652" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-652"><a href="https://clab.org.tw/about/">關於</a></li>
			<li id="menu-item-659" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-659"><a href="https://clab.org.tw/latest-news/">最新消息</a></li>
			<li id="menu-item-662" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-662"><a href="https://clab.org.tw/events/">活動</a></li>
			<li id="menu-item-660" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-660"><a href="https://clab.org.tw/projects/">計畫</a></li>
			<li id="menu-item-658" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-658"><a href="https://clab.org.tw/videos-and-audios/">影音</a></li>
		</ul>
		<ul class="language-menu">
		</ul>
	</div> -->
</header>
