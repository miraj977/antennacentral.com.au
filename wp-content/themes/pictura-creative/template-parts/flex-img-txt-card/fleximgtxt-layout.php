           <section id="services" class=" benefits">
               <h1><?php echo get_sub_field('section_title'); ?></h1>
               <?php echo get_sub_field('section_content'); ?>

               <?php
if (have_rows('image_text_card')):
    $i = 0;
    while (have_rows('image_text_card')): the_row();
        if ($i % 2 == 0) {
            ?>

               <div class="">
                   <div class="benefits-text">
                       <h2><?php echo get_sub_field('title'); ?>
                       </h2>
                       <?php echo get_sub_field('content'); ?>

                   </div>
                   <div class="benefits-img"><img src="<?php echo get_sub_field('image');
            ?>" alt="" width="100%"></div>
               </div>
               <?php } else {?>
               <div class="">
                   <div class="benefits-img"><img src="<?php echo get_sub_field('image');
            ?>" alt="" width="100%"></div>
                   <div class="benefits-text">
                       <h2><?php echo get_sub_field('title'); ?>
                       </h2>
                       <?php echo get_sub_field('content'); ?>

                   </div>
               </div>

               <?php }
        $i++;
    endwhile;endif;?>
               <div class="benefits-bottom-text">
				   <?php $link= get_sub_field("link");
                   if ($link) {$link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';?>
                   <a 
                            href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
                            <?php echo $link_title; ?>
                        </a>
                    <?php }?>
               </div>
           </section>
