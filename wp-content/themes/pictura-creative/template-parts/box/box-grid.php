<?php $extraClass = get_sub_field("extra_class");?>
<section id="why-us" class="box-section box-normal <?php echo $extraClass ?>"
    style="background-color:<?php echo get_sub_field('box_background_color'); ?>">
    <?php $box_link_style = get_sub_field('box_link_style');
$box_align = get_sub_field('align_content');
$boxcolor = get_sub_field('box_background_color');
?>
    <div class="container">
        <div class="row">
            <div class="boxWrap">
                <?php if (get_sub_field("title")) {?>
                <div class="col-sm-12">
                    <?php	echo get_template_part('template-parts/title/title', 'style'); ?>
                </div><?php
}
if (get_sub_field("content-text")) {?>
                <div class="col-sm-12">
                    <p class="content-text"><?php	echo get_sub_field('content-text'); ?></p>
                </div><?php
}?>
                <?php $col = get_sub_field('number_of_columns');
$col = 12 / $col;
if (have_rows('box_content')):
    while (have_rows('box_content')): the_row();?>
                <div data-aos="fade-up"
                    class="col-xs-6 col-sm-6 col-md-6 col-lg-<?php echo $col; ?> text-<?php echo $box_align; ?> ">
                    <div class="box" style="background-color:<?php echo $boxcolor; ?>">
                        <!-- IMAGE -->
                        <div class="box-img">
                            <?php $image = get_sub_field('icon');
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        if ($image) {?>
                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                            <?php } else {?>
                            <img src="<?php echo get_template_directory_uri() . '/images/placeholder.jpg'; ?>"
                                alt="placeholder" title="placeholder" />
                            <?php }?>
                        </div>

                        <!-- title -->
                        <div class="box-content ">
                            <?php if (get_sub_field('box_title')) {?>
                            <h4 class="box-title"><?php echo get_sub_Field('box_title'); ?></h4>
                            <?php }?>

                            <?php if (get_sub_field('box_content')) {?>
                            <div class="box-text "><?php echo get_sub_Field('box_content'); ?></div>
                            <?php }?>

                            <?php
        if (get_sub_field('button_size')) {
            $btnSize = 'btn-' . get_sub_field('button_size');
        } else {
            $btnSize = 'btn-small';
        }
        $link = get_sub_field('box_link');
        if ($link) {$link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';?>
                            <div class="content-link"><a class="btn btn-<?php echo $box_link_style . ' ' . $btnSize; ?>"
                                    href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
                                    <?php echo $link_title; ?>
                                </a></div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <?php endwhile;else:endif;?>
                <br>

            </div>
        </div>
    </div>
</section>
