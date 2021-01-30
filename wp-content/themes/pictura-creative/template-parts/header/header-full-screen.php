<header id="masthead" class="site-header">
    <div class="container header-container">
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
                        <li class="listTextfirst" id="desktop-header-review"><span class="listTextfirst"
                                style="display:flex;width:150%;white-space: nowrap;">Available 7 days a week.&nbsp;&nbsp;&nbsp;<a class="listTextfirst" style="display:flex; padding-left:10px;font-size: 14px;
    line-height: 20px;
    text-align: left;
    color: #ffff;
    font-weight: 400;" href="https://www.google.com/search?client=firefox-b-d&q=Antenna%20Central&sxsrf=ALeKk03KShxtH9wIzJn7LWJvEIdk_z4pVw:1600442018463&npsic=0&rflfq=1&rlha=0&rllag=-33414334,151301946,11489&tbm=lcl&rldimm=14500111677319825554&lqi=Cg9hbnRlbm5hIGNlbnRyYWxaIgoPYW50ZW5uYSBjZW50cmFsIg9hbnRlbm5hIGNlbnRyYWw&phdesc=oW9Wckla-KY&ved=2ahUKEwjNw_mP__LrAhXt4nMBHVOtBGgQvS4wAnoECAwQQA&rldoc=1&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:1&rlst=f#rlfi=hd:;si:14500111677319825554,l,Cg9hbnRlbm5hIGNlbnRyYWxaIgoPYW50ZW5uYSBjZW50cmFsIg9hbnRlbm5hIGNlbnRyYWw,y,oW9Wckla-KY;mv:[[-33.2131203,151.5322195],[-34.0237833,151.04904589999998]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:1" target="_blank">Rated on Google &nbsp;&nbsp;<img style="    align-self: center;"
                                    src="<?php echo site_url() . '/wp-content/uploads/2020/09/5-Stars-White.svg'; ?>"></a></span>
                        </li>
                    </ul>
                </nav>

                <!-- .site-branding -->
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-6 align-self-center call-btn-header">
                <!--  <nav id="site-navigation" class="main-navigation header-review" style="width:100%;">
                    <ul>
                        <li class="listTextfirst"><span class="listTextfirst"
                                style="display:flex;flex-direction:column;">Mon-Fri, 8am-5pm.&nbsp;&nbsp;&nbsp;Rated
                                on Google <img style="    align-self: center;"
                                    src="<?php //echo site_url() . '/wp-content/uploads/2020/09/5-Stars-White.svg'; ?>"></span>
                        </li>
                    </ul>
                </nav>-->
                <nav id="site-navigation" class="main-navigation">
                    <ul>

                        <li class="listBtn btnTransparent header-right-menu" id="header-right-menu">
                            <?php
wp_nav_menu(array(
    'menu' => 'main-menu'));?>
                        </li>
<?php
						if(basename(get_permalink())=="terrigal" ||basename(get_permalink())=="erina" ||basename(get_permalink())=="wamberal" ||basename(get_permalink())=="avoca"){
	$phone="(02) 4385 6985";
}
												if(basename(get_permalink())=="gosford" ||basename(get_permalink())=="matcham" ||basename(get_permalink())=="holgate" ||basename(get_permalink())=="point-frederick" ||basename(get_permalink())=="point-clare"){
	$phone="(02) 4324 8585";
}
												 if(basename(get_permalink())=="woy-woy" ||basename(get_permalink())=="kincumber" ||basename(get_permalink())=="killcare" ||basename(get_permalink())=="brooklyn"||basename(get_permalink())=="mooney-mooney" ||basename(get_permalink())=="copacabana" ||basename(get_permalink())=="mcMasters-beach" ||basename(get_permalink())=="umina"||basename(get_permalink())=="ettalong" ||basename(get_permalink())=="saratoga"){
	$phone="(02) 4342 7575";
												 }
											 if(basename(get_permalink())=="wyong" ||basename(get_permalink())=="tuggerah" ||basename(get_permalink())=="berkeley-vale" ||basename(get_permalink())=="wyongah"||basename(get_permalink())=="woongarrah" ||basename(get_permalink())=="hamlyn-terrace" ||basename(get_permalink())=="cooranbong" ||basename(get_permalink())=="wyee"){
	$phone="(02) 4353 5815";
}
											 if(basename(get_permalink())=="the-entrance" ||basename(get_permalink())=="bateau-bay" ||basename(get_permalink())=="forresters-beach" ||basename(get_permalink())=="toowoon-bay"||basename(get_permalink())=="tumbi-umbi"){
	$phone="(02) 4333 4803";
}
												 if(basename(get_permalink())=="toukley" ||basename(get_permalink())=="gorokan" ||basename(get_permalink())=="budgewoi"){
	$phone="(02) 4396 8688";
}
													if(is_front_page()){
														$phone="0414 298 704";
													}
						?>
                        <li class=" listBtn"><a href="tel:<?php echo $phone;?>" class="btn btn-medium btn-white-bg-blue book-top">Call: <?php echo $phone;?></a>
                        </li>
                    </ul>
                    <ul class="mobileUL">
                        <li class="listBtn btnTransparent"></li>
						<li class="listBtn"><a href="tel:<?php echo $phone;?>" class="btn btn-medium btn-white-bg-blue book-top">Call: <?php echo $phone;?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<?php echo get_template_part('template-parts/header/inner', 'page-banner'); ?>
