<?php $extraClass = get_sub_field("extra_class");?>
<section class="blogs blog_grid <?php echo $extraClass?>" style="background-color:<?php echo get_sub_field("blog_background_color")?> ">
<div class="container">
	<div class="row">
		<?php if(get_sub_field("title")){ ?>
		<div class="col-sm-12"  data-aos="fade-up">
			<?php	echo get_template_part( 'template-parts/title/title', 'style' );?>
		</div><?php	
		 } ?>
		<?php  $query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'date',
    'post_status' => 'publish'
  ) );
  if ( $query->have_posts() ) {
	while ( $query->have_posts() ) : $query->the_post();  ?>
	<div class="col-sm-12 mb-40 col-md-4"  data-aos="fade-up">
		<div class="blog-grid">
	<div class="blog-img">
		<?php 	if ( has_post_thumbnail() ) {
		the_post_thumbnail();
		 } else {?>
		<img src="<?php echo get_template_directory_uri().'/images/placeholder.jpg';?>" alt="placeholder" title="placeholder" />
		<?php } ?>	
		</div>
      <div class="blog-content">		 
		  <h4><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h4>
         <?php 
	  $content = get_the_content();
	  $content = strip_tags($content);
	  echo substr($content, 0, 120);
		 $read_link_style = get_sub_field("read_more_style"); 
		  if(get_sub_field( 'button_size' ))
		{
			$btnSize = 'btn-'.get_sub_field( 'button_size' );
		}
		else
		{
			$btnSize ='btn-small';
		}
		  ?>  
		 
			<div class="content-link"><a class="btn btn-<?php echo $read_link_style.' '. $btnSize;?>" href="<?php echo get_permalink(); ?>" >Read more			</a></div>
      </div>
	</div></div>
		<?php
    endwhile; }    wp_reset_postdata(); wp_reset_query();
    ?>
	</div>
	</div>
</section>
