<footer style="background-color: <?php echo get_field("footer_background_color", "option"); ?>">
    <?php if (get_field('footer_topbar', 'option') == 1) {?>
    <div class="footer-top">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 footer" style="text-align:center;">
                    <p id="footer-title"><?php echo get_field('footer_title', 'option'); ?></p>

                    <?php echo ' <div id="footer-content">' . get_field("footer_content", "option") . '</div>'; ?>

                </div><br><br>
                <div class="col-md-6 col-sm-12 col-xs-12 footer-booking" data-aos="fade-up">
                    <!-- <h6>The  Company</h6> -->
                    <a class="text-white footer-telephone" style="margin-bottom: 16px"
                        href="tel:<?php echo get_field("phone", "option"); ?>">Main:
                        <?php echo get_field("phone", "option"); ?></a>


                    <div class="f_address">
                        <p>Servicing all Central Coast Suburbs.</p>
                        <p>8am-8pm, 7 days a week</p>
                    </div><br>
                    <a href="#openPopup" class=" btn footer-book listBtn btn btn-medium btn-white-bg-blue"
                        style="line-height:0px !important;">Book Now</a>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-up">
                    <!-- <h6>Servicing the Eastern Suburbs including</h6> -->
                    <table class="suburbName">
                        <?php while (have_rows('suburb_list', "option")): the_row();?>
                        <tbody class="tab-body">
                            <tr class="tab-row">
                                <div style="inline-block">
                                    <td class="span-suburb"><?php echo get_sub_field('name'); ?></td>
                                    <td class="span-telephone"><a style="display:inline;"
                                            href="tel:<?php echo get_sub_field('telephone'); ?>"><?php echo get_sub_field('telephone'); ?>
                                        </a></td>
                                </div>
                            </tr>
                        </tbody>
                        <?php endwhile;?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-xs-12 align-self-center footer-left-img" data-aos="fade-up">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_field('footer_logo', 'option'); ?>" />
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-xs-12 footer-right-img" style="text-align:right;" data-aos="fade-up">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_field('footer_logo_copy', 'option'); ?>" />
                </a>
            </div>
        </div>
    </div>
    <?php if (get_field('copyright', 'option') == 1) {?>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <p><?php echo get_field("copy_right_text", "option") ?></p>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="policy_thanks"><?php echo get_field("copy_right_links", "option"); ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</footer>
