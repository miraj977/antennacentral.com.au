           <section id="services" class="container benefits">
               <h1><?php echo get_sub_field('section_title'); ?></h1>
               <?php echo get_sub_field('section_content'); ?>

               <?php
if (have_rows('image_text_card')):
    $i = 0;
    while (have_rows('image_text_card')): the_row();
        if ($i % 2 == 0) {
            ?>

               <div>
                   <div class="benefits-text">
                       <h2><?php echo get_sub_field('title'); ?>
                       </h2>
                       <p><?php echo get_sub_field('content'); ?>
                       </p>
                   </div>
                   <div class="benefits-img" style="padding:15px;"><img src="<?php echo get_sub_field('image');
            ?>" alt="" width="100%"></div>
               </div>
               <?php } else {?>
               <div>
                   <div class="benefits-img" style="padding:15px;"><img src="<?php echo get_sub_field('image');
            ?>" alt="" width="100%"></div>
                   <div class="benefits-text">
                       <h2><?php echo get_sub_field('title'); ?>
                       </h2>
                       <p><?php echo get_sub_field('content'); ?>
                       </p>
                   </div>
               </div>

               <?php }
        $i++;
    endwhile;endif;?>
               <div class="benefits-bottom-text">
                   <a href="<?php echo get_sub_field("link"); ?>"><?php echo get_sub_field("link_text"); ?>
                   </a>
               </div>
           </section>
