<section class="clientLogos clientLogos_grid alignCenter" style="background-color:<?php echo get_field("client_logos_background_color")?> "  data-aos="fade-up">
<div class="container">
	<div class="row">
		<?php if(get_sub_field("title")){ ?>
		<div class="col-sm-12">
            <?php echo get_template_part ( 'template-parts/title/title', 'style' );
            ?>
            </div>
            <?php
		 } ?>
		<div class="col-sm-12 text-center">
			<?php	echo get_field('client_logo_text');?>
		</div>
		<?php
        while( have_rows('logos') ): the_row();
        $image = get_sub_field('image');

        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];?>
		<div data-aos="fade-up" class="col-sm-6 col-xs-12 col-md-3 align-self-center">
			<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
		</div>
		<?php endwhile; ?>
	</div>
	</div>
</section>