<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pictura_Creative
 */

get_header();

$blogPageId = get_option( 'page_for_posts' );

if ( get_field( "show_page_info", $blogPageId ) == 1 ) {
  ?>
<section class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="text-<?php echo get_field("alignment",$blogPageId) ?>">
          <?php if(get_field("subtitle",$blogPageId)){?>
          <h4><?php echo get_field("subtitle",$blogPageId);?></h4>
          <?php }?>
          <h1 class="heading"><?php echo get_the_title($blogPageId);?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
}
?>
<section class="blog-list">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-lg-9 col-sm-12">
        <?php
        if ( have_posts() ):
          while ( have_posts() ):
            the_post();

        get_template_part( 'template-parts/blog/blog', 'listpage' );

        endwhile;
        endif;
        ?>
        
			
        
      </div>
      <div class="col-md-3 col-lg-3 col-sm-12">
        <div class="sidebar blogSidebar">
          <?php dynamic_sidebar("blog-sidebar"); ?>
        </div>
      </div>
		<div class="col-sm-12">
		<nav class="pagination">
				<?php pagination_bar(); ?>
				</nav>
							<?php /*?>		
			<span class="older">
          <?php next_posts_link('<img src="'.get_template_directory_uri().'/images/boldleft.svg" > Previous') ?>
          </span> 
			<div class="pageOf">
				<?php $paged = get_query_var( 'paged', 1 );?>
				Page  <?php if($paged ){ echo $paged; } else { echo "1" ;}?> of
			<?php global $wp_query;
					echo $wp_query->max_num_pages; ?>
			</div>
			<span class="newer">
          <?php previous_posts_link('Next <img src="'.get_template_directory_uri().'/images/boldright.svg" > ') ?>
          </span><?php */?>
		
        <!-- .pagination --> 
		</div>
    </div>
  </div>
</section>
<?php
get_footer();
