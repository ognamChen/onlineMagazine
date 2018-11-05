<?php wp_footer();?>
<div class="m-t-30"></div>
<footer class="footer">
	<div class="footer__top og-border-1">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<ul id="footer-top-menu" class="menu">
						<li class="menu-item menu-item-type-post_type menu-item-object-page">
							<a href="https://clab.org.tw/privacy-policy/">隱私權與資訊安全宣告</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page">
							<a href="https://clab.org.tw/sitemap/">網站地圖</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<ul class="footer__top__menu">
						<li>
							<a href="https://www.instagram.com/taiwancontemporaryculturelab/">
								<i class="fab fa-instagram"></i>
								<span class="text-hide">instagram</span>
							</a>
						</li>
						<li>
							<a href="https://www.facebook.com/TCCLAB.ORG/">
								<i class="fab fa-facebook-f"></i>
								<span class="text-hide">facebook</span>
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UCYmx4THY_3SYro_bJmrAA0g/featured?disable_polymer=1">
								<i class="fab fa-youtube"></i>
								<span class="text-hide">youtube</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__base">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="footer__title">
						<p>臺灣當代文化實驗場<br> Taiwan Contemporary Culture Lab</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="footer__address">
						<span>10655臺北市大安區建國南路一段177號</span>
						<span>+886 2 87735087</span>
						<span>+886 2 87735035</span>
					</div>
					<div class="row">
						<div class="col-sm-10">
							<div class="footer__signup">
								<span>訂閱電子報</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="row">
						<div class="col">
							<ul id="footer-bottom-menu" class="menu">
								<?php
								$menu_locations = get_nav_menu_locations();
								$menu_items = wp_get_nav_menu_items($menu_locations['footerNav']);
								foreach ($menu_items as $menu_item) {
									$permalink = $menu_item->url;
									$title = $menu_item->title;
									?>
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="<?php echo $permalink ?>">
										<?php echo $title ?>
									</a>
								</li>
								<?php }?>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-12"></div>
						<div class="col-12">
							<p class="footer__logo-title">指導單位</p>
							<div class="row">
								<div class="col-md-3 col-6 offset-3 offset-md-0">
									<a class="footer__advisor-wrapper" href="https://www.moc.gov.tw/" target="_blank" rel="nofollow"> <img width="1024" height="253"
									src="https://clab.org.tw/wp-content/uploads/2018/07/advisor-logo-1024x253.png" class="attachment-large size-large" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col footer__copy-right-wrapper">
									<p class="footer__copy-right">© 2018 財團法人臺灣生活美學基金會. All Rights Reserved.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</body>

</html>