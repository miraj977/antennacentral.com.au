<section class="cta cta_style1" style="background: <?php echo get_field('cta_background_color',"option");?>">
    <div class="container">
        <div class="row">
            <div class=" col-md-7 col-sm-12 ctaContentWrap align-self-center">
                <div class="cta_text" >
                    <?php echo get_field('call_to_action_content',"option");
                   ?>

                </div>
                <div class="content-link " style="width: 100%;margin-top:50px"><a class="btn btn-lightblue-border  btn-medium" href="#openPopup" target="<?php echo $link_target; ?>">
                        Book Now $0 Call Out
                    </a>
                    <a class="btn m-l btn-white-border btn-medium" href="tel:<?php echo get_field("phone","option")?>" target="<?php echo $link_target; ?>">
                        Call Now <?php echo get_field("phone","option")?>
                    </a>
                </div>

            </div>
            <div class="col-md-5 col-sm-12 ctaImageWrap">
                <?php
                    $image = get_field("cta_image","option");
                    $url = $image['url'];
                    $title = $image['title'];
                    $alt = $image['alt'];
                    ?>
                    <img class="ctaImage" src="<?php echo $url;?>" alt="<?php echo $alt;?>"/>


            </div>

        </div></div>
</section>