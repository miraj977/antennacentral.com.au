<?php $extraClass = get_sub_field("extra_class");?>
<section id="reviews" class="testimonial testimonial_slider <?php echo $extraClass ?>"
    style="background-color:<?php echo get_sub_field("testimonial_background_color") ?> " data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 testimonial-sec">
                <?php if (get_sub_field("title")) {
    echo get_template_part('template-parts/title/title', 'style');

}?>
                <?php echo do_shortcode("[testimonial-slider]"); ?>
            </div>
        </div>
    </div>
    <div class="nav-carousel2">
        <a href="#" class="btn1 flex-prev"><img src="<?php echo get_template_directory_uri() ?>/images/prev.svg" /></a>
        <a href="#" class="btn1 flex-next"><img src="<?php echo get_template_directory_uri() ?>/images/next.svg" /></a>
    </div>
</section>
