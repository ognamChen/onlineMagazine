<?php wp_footer();?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-3 footer_logoText" style="border-right:1px solid black;">
                <div class="footer_img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/assets/img/logo-6.png"; ?>" alt="">
                </div>
                <div class="footer_about">
                <?php
                    $menu_locations = get_nav_menu_locations();
                    $menu_items = wp_get_nav_menu_items($menu_locations['footerAbout']);
                    // var_dump($menu_items);
                    foreach ($menu_items as $menu_item) {
                        $permalink = $menu_item->url;
                        $title = $menu_item->title;
                    ?>
                    <a href="<?php echo $permalink ?>"><?php echo $title ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-md-6 footer_left">
                        <a href="https://clab.org.tw/" target="_blank">
                            <div class="footer_title">
                                臺灣當代文化實驗場
                                <span>Taiwan Contemporary Culture Lab</span>
                            </div>
                        </a>
                        <div class="footer_address">
                            <span>10655臺北市大安區建國南路一段177號</span>
                            <span>+886 2 87735087</span>
                            <span>+886 2 87735035</span>
                        </div>
                    </div>
                    <div class="col-md-6 footer_right">
                        <ul class="footer_menu">
                            <li>
                                <a href="https://www.instagram.com/taiwancontemporaryculturelab/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                    <span class="text-hide">instagram</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/TCCLAB.ORG/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                    <span class="text-hide">facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCYmx4THY_3SYro_bJmrAA0g/featured?disable_polymer=1" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                    <span class="text-hide">youtube</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://clab.org.tw/%E8%81%AF%E7%B5%A1%E6%88%91%E5%80%91/" target="_blank">
                                    <i class="fas fa-envelope"></i>
                                    <span class="text-hide">email</span>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="footer_copyright">
                            &copy; <?php echo "2012-"; echo date("Y"); echo " "; echo "財團法人臺灣生活美學基金會. All Rights Reserved."; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
