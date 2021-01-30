<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pictura_Creative
 */

get_header();
?>
<section class="blog-list">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php
        if ( have_posts() ):
          while ( have_posts() ):
            the_post();
        ?>
        <div class="blog-header" >
          <div class="blog-cat bold" data-aos="fade-up"> 
			  <?php $category = get_the_category();
 				echo $firstCategory = $category[0]->cat_name;?>
			</div>
          <div class="social-share" data-aos="fade-up">
            <ul class="footer_social black_social">
              <li><a href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink();?>" target="_blank" class="facebook">Facebook</a></li>
              <li><a href="https://twitter.com/share?url=<?php echo get_permalink();?>&text=<?php echo get_the_title();?>" target="_blank" class="twitter">Twitter</a></li>
              <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink();?>" target="_blank" class="linkedin">linkedin</a></li>
            </ul>
          </div>
          <h1 class="heading" data-aos="fade-up">
            <?php the_title();?>
          </h1>
          <div class="blogDetail-date" data-aos="fade-up"><?php echo get_the_date();?></div>
        </div>
        <div class="blogDEtail-img" data-aos="fade-up">
          <?php the_post_thumbnail();?>
        </div>
        <div class="blogDetail-content" data-aos="fade-up">
          <?php the_content();?>
        </div>
        <?php
        endwhile;
        endif;
        ?>
      </div>
    
    </div>
  </div>
</section>
<?php
get_template_part( "template-parts/blog/blog", "grid" );
get_footer();
