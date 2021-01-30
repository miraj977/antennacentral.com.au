<header id="masthead" class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-6 align-self-center logoWrap ">
                <div class="site-branding"> <a href="<?php echo site_url(); ?>" class="logo main_logo">
                        <?php if (get_field("banner") || is_front_page() || is_home() || is_404()) {?>
                        <img src="<?php echo get_field("logo", "option") ?>" />
                        <?php } else if (is_single() || is_search() || (!get_field("banner"))) {?>
                        <img src="<?php echo get_field("sticky_logo", "option") ?>" />
                        <?php } else {?>
                        <img src="<?php echo get_field("logo", "option") ?>" />
                        <?php }?>
                    </a>
                    <a href="<?php echo site_url(); ?>" class="logo sticky_logo" target=""> <img
                            src="<?php echo get_field("sticky_logo", "option") ?>" /> </a>
                </div>
                <nav id="site-navigation" class="main-navigation"
                    style="width:100%;justify-content:flex-start !important;">
                    <ul>
                        <li class="listTextfirst" id="desktop-header-review"><span class="listTextfirst">Mon-Fri,
                                8am-5pm.&nbsp;&nbsp;&nbsp;<span>Rated
                                    on Google <img
                                        src="<?php echo site_url() . '/wp-content/uploads/2020/09/5-Stars-White.png'; ?>"></span></span>
                        </li>
                    </ul>
                </nav>

                <!-- .site-branding -->
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-6 align-self-center">
                <nav id="site-navigation" class="main-navigation header-review" style="width:100%;">
                    <ul>
                        <li class="listTextfirst"><span class="listTextfirst">Mon-Fri, 8am-5pm.&nbsp;&nbsp;&nbsp;Rated
                                on Google <img
                                    src="<?php echo site_url() . '/wp-content/uploads/2020/09/5-Stars-White.png'; ?>"></span>
                        </li>
                    </ul>
                </nav>
                <nav id="site-navigation" class="main-navigation">
                    <ul>

                        <li class="listBtn btnTransparent header-right-menu" id="header-right-menu">
                            <?php
wp_nav_menu(array(
    'menu' => 'main-menu'));?>
                        </li>
                        <li class=" listBtn"><a href="#openPopup" class="btn btn-medium btn-white-bg-blue book-top">Book
                                Now</a>
                        </li>
                    </ul>
                    <ul class="mobileUL">
                        <li class="listBtn btnTransparent"></li>
                        <li class="listBtn"><a href="#openPopup" class="btn btn-medium btn-white-bg-blue ">Book
                                now</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<?php echo get_template_part('template-parts/header/inner', 'page-banner'); ?>
