<?php $extraClass = get_sub_field("extra_class");?>
<section id="about" class="grid-stretched  <?php echo $extraClass ?>" style="background-color: <?php
while (have_rows('full_width_grid')): the_row();
    echo get_sub_field('background_color');
endwhile;?>">
    <div class="row-stretched container" data-aos="fade-up">

        <?php $grid_link_style = get_sub_field('link_style');
if (get_sub_field('button_size')) {
    $btnSize = 'btn-' . get_sub_field('button_size');
} else {
    $btnSize = 'btn-small';
}
$text_style = get_sub_field("align_content_in_box");?>
        <?php $i = 1;while (have_rows('full_width_grid')): the_row();?>

        <div class="strecth-row" style="background: <?php echo get_sub_field('background_color'); ?>">

            <div class="col-md-6 col-sm-12 full-text text-center">
                <div class="stretched-content stretched-right" data-aos="fade-up">
                    <?php if (get_sub_field('content')) {?>
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/09/Antenna-Central-6470-Copy.jpg
																	">
                    <?php }?>


                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-text full-text text-<?php echo $text_style; ?> mobile-text-full">
                <div class="img-text-block" data-aos="fade-up">
                    <?php if (get_sub_field('title')) {?>
                    <h1 class="stretched-title-heading"><?php echo get_sub_Field('title'); ?></h1>
                    <?php }?>

                    <?php if (get_sub_field('content')) {?>
                    <div class="stretched-text "><?php echo get_sub_Field('content'); ?></div>
                    <?php }?>

                </div>
            </div>

        </div>

        <?php
    $i++;endwhile;?>
    </div>
</section>
