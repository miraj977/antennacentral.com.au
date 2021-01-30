<?php
add_shortcode('hero-slider-fullScreen', 'shortcode_hero_slider');
function shortcode_hero_slider()
{
    ob_start();
    $nav = get_field('navigation', 'option');
    $class = '';
    if ($nav == 1) {
        $class .= 'navTrue ';
    } else {
        $class .= 'navFalse ';
    }
    $pagi = get_field('pagination', 'option');
    if ($pagi == 1) {
        $class .= 'pageTrue ';
    } else {
        $class .= 'pageFalse ';
    }
    $scroll = get_field('scroll_bottom_icon', 'option');

    ?>
<div class="heroWrap <?php echo $class; ?> ">


    <div class="hero-content">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12">
                    <div class="heroimg">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/09/Antenna-Central-Logo-Blue-Copy.svg
">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 heroimg" style="position:absolute;top:75%;">

                    <img src="<?php echo site_url(); ?>/
wp-content/uploads/2020/09/@2xBitmap.png
" alt="" height="345" width="509" />
                </div>
            </div>
        </div>
    </div>
							<?php
if (basename(get_permalink()) == "terrigal" || basename(get_permalink()) == "erina" || basename(get_permalink()) == "wamberal" || basename(get_permalink()) == "avoca") {
    $phone = "02 4385 6985";
}
if (basename(get_permalink()) == "gosford" || basename(get_permalink()) == "matcham" || basename(get_permalink()) == "holgate" || basename(get_permalink()) == "point-frederick" || basename(get_permalink()) == "point-clare") {
    $phone = "02 4324 8585";
}
if (basename(get_permalink()) == "woy-woy" || basename(get_permalink()) == "kincumber" || basename(get_permalink()) == "killcare" || basename(get_permalink()) == "brooklyn" || basename(get_permalink()) == "mooney-mooney" || basename(get_permalink()) == "copacabana" || basename(get_permalink()) == "mcMasters-beach" || basename(get_permalink()) == "umina" || basename(get_permalink()) == "ettalong" || basename(get_permalink()) == "saratoga") {
    $phone = "02 4342 7575";
}
if (basename(get_permalink()) == "wyong" || basename(get_permalink()) == "tuggerah" || basename(get_permalink()) == "berkeley-vale" || basename(get_permalink()) == "wyongah" || basename(get_permalink()) == "woongarrah" || basename(get_permalink()) == "hamlyn-terrace" || basename(get_permalink()) == "cooranbong" || basename(get_permalink()) == "wyee") {
    $phone = "02 4353 5815";
}
if (basename(get_permalink()) == "the-entrance" || basename(get_permalink()) == "bateau-bay" || basename(get_permalink()) == "forresters-beach" || basename(get_permalink()) == "toowoon-bay" || basename(get_permalink()) == "tumbi-umbi") {
    $phone = "02 4333 4803";
}
if (basename(get_permalink()) == "toukley" || basename(get_permalink()) == "gorokan" || basename(get_permalink()) == "budgewoi") {
    $phone = "02 4396 8688";
}
if (is_front_page()) {
    $phone = "0414 298 704";
}
?>
							<?php if (is_front_page()) {?>
							<div class="hero-bottom-textbtn">
							    <p>
							        Central
							        Coast<br>Antenna Specialists</p>
							    <a href="tel: <?php echo $phone; ?>">Call: <?php echo $phone; ?></a>
							</div>
							<?php } else {?>
							<div class="hero-bottom-textbtn">

							    <p>
							        <?php
$title = basename(get_permalink());
    $suburb = explode("-", $title);
    foreach ($suburb as $sub) {
        echo ucfirst($sub) . " ";
    }
    ?><br>Antenna Specialists</p>
							    <a href="tel: <?php echo $phone; ?>">Call: <?php echo $phone; ?></a>
							</div>
							<?php }?>
							<?php if ($scroll == 1) {?>
							<div id="scrollBottom">
							    <a href="#content"><img src="<?php echo site_url(); ?>/wp-content/uploads/2020/09/Mouse-Icon-2X.png
"></a>
							</div>
							<?php }?>
							</div>
							<?php
$myvariable = ob_get_clean();
return $myvariable;


}

add_shortcode('testimonial-slider', 'shortcode_testimonial_slider');
function shortcode_testimonial_slider()
{
    ob_start();

    $query = new WP_Query(array(
        'post_type' => 'testimonial',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
    ));
    if ($query->have_posts()) {
        ?>
<div class="flexslider testimonialSlider ">
    <ul class="slides">
        <?php while ($query->have_posts()): $query->the_post();?>
        <li>
            <div class="testimonial-content">
                <?php $content = get_the_content();
            $content = strip_tags($content)?>
                <h5 class="demiBold"><?php echo $content ?></h5>
                <!-- <p class="bold"><?php the_title();?></p> -->
                <img class="m-auto " src="<?php echo site_url() ?>/wp-content/uploads/2020/09/Group-24@2x.png">
                <a target="_blank" href="https://www.google.com/search?client=firefox-b-d&q=Antenna%20Central&sxsrf=ALeKk03KShxtH9wIzJn7LWJvEIdk_z4pVw:1600442018463&npsic=0&rflfq=1&rlha=0&rllag=-33414334,151301946,11489&tbm=lcl&rldimm=14500111677319825554&lqi=Cg9hbnRlbm5hIGNlbnRyYWxaIgoPYW50ZW5uYSBjZW50cmFsIg9hbnRlbm5hIGNlbnRyYWw&phdesc=oW9Wckla-KY&ved=2ahUKEwjNw_mP__LrAhXt4nMBHVOtBGgQvS4wAnoECAwQQA&rldoc=1&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:1&rlst=f#rlfi=hd:;si:14500111677319825554,l,Cg9hbnRlbm5hIGNlbnRyYWxaIgoPYW50ZW5uYSBjZW50cmFsIg9hbnRlbm5hIGNlbnRyYWw,y,oW9Wckla-KY;mv:[[-33.2131203,151.5322195],[-34.0237833,151.04904589999998]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:1" class="testimonial-review">Read more 5
                    star reviews on Google</a>
            </div>
        </li>
        <?php
endwhile;
        wp_reset_postdata();
        wp_reset_query();
        ?>
    </ul>

</div>
<?php
$myvariable = ob_get_clean();
        return $myvariable;
    }
}

add_shortcode('faq', 'shortcode_faq');
function shortcode_faq()
{
    ob_start();

    $query = new WP_Query(array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
    ));
    if ($query->have_posts()) {
        ?>

   
                <ul class="accordion" data-aos="fade-up">
        <?php while ($query->have_posts()): $query->the_post();?>
       
                    <li>
                        <a class="toggle" href="javascript:void(0);"><?php echo the_title(); ?></a>
                        <ul class="inner col-sm-12 col-lg-10 col-md-10"><?php echo get_the_content(); ?></ul>
                    </li>
                    <?php endwhile;
        wp_reset_postdata();
        wp_reset_query();
        ?>
  </ul>
<?php
$myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode('blog-slider', 'shortcode_blog_slider');
function shortcode_blog_slider($atts = array(), $content = null)
{
    ob_start();

    extract(shortcode_atts(array(
        'style' => 'style1',
    ), $atts));

    $query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
    ));
    if ($query->have_posts()) {

        ?>
<div class="flexslider blogSlider">
    <ul class="slides">
        <?php while ($query->have_posts()): $query->the_post();?>
        <li>
            <div class="blog-grid">
                <div class="blog-img">
                    <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else {?>
                    <img src="<?php echo get_template_directory_uri() . '/images/placeholder.jpg'; ?>" alt="placeholder"
                        title="placeholder" />
                    <?php }?>
                </div>
                <div class="blog-content">
                    <h4><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h4>
                    <?php
    $content = get_the_content();
            $content = strip_tags($content);
            echo substr($content, 0, 120) . "...";
            $read_link_style = get_sub_field("read_more_style", $page_id);
            if (get_sub_field('button_size')) {
                $btnSize = 'btn-' . get_sub_field('button_size');
            } else {
                $btnSize = 'btn-small';
            }
            ?>

                    <div class="content-link"><a class="btn btn-<?php echo $read_link_style . ' ' . $btnSize; ?>"
                            href="<?php echo get_permalink(); ?>">Read more </a></div>
                </div>
            </div>
        </li>
        <?php
endwhile;
        wp_reset_postdata();
        wp_reset_query();
        ?>
    </ul>
</div>
<?php
$myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode('project-slider', 'shortcode_project_slider');
function shortcode_project_slider($atts = array(), $content = null)
{
    ob_start();

    extract(shortcode_atts(array(
        'style' => 'style1',
    ), $atts));

    $query = new WP_Query(array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
    ));
    if ($query->have_posts()) {
        ?>
<div class="flexslider projectSlider">
    <ul class="slides">
        <?php while ($query->have_posts()): $query->the_post();?>
        <li>
            <div class="project-grid">
                <div class="project-img">
                    <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else {?>
                    <img src="<?php echo get_template_directory_uri() . '/images/placeholder.jpg'; ?>" alt="placeholder"
                        title="placeholder" />
                    <?php }?>
                </div>
                <div class="project-content">
                    <h4><?php the_title();?></h4>
                    <?php
    $content = get_the_content();
            $content = strip_tags($content);
            echo substr($content, 0, 120) . "...";
            if (get_sub_field('button_size')) {
                $btnSize = 'btn-' . get_sub_field('button_size');
            } else {
                $btnSize = 'btn-small';
            }
            $read_link_style = get_sub_field("read_more_style", $page_id);?>

                    <div class="content-link"><a class="btn btn-<?php echo $read_link_style . ' ' . $btnSize; ?>"
                            href="<?php echo get_permalink(); ?>">Read more </a></div>
                </div>
            </div>
        </li>
        <?php
endwhile;
        wp_reset_postdata();
        wp_reset_query();
        ?>
    </ul>
</div>
<?php
$myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode('all-services', 'shortcode_service');
function shortcode_service()
{
    ?>
<section class="services grid-normal">
    <div class="container">
        <div class="row">
            <?php
$query = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
    ));
    while ($query->have_posts()): $query->the_post();?>
            <div class="col-sm-6 col-xs-12 col-md-4 " data-aos="fade-up">
                <div class="service-grid animate" animate-sequence="">
                    <!-- IMAGE -->
                    <div class="grid-img">
                        <?php the_post_thumbnail();?>
                    </div>

                    <!-- title -->
                    <div class="service-content text-left">

                        <h4 class="grid-title"><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h4>
                        <div class="gridText "><?php $content = get_the_content();
        $content = strip_tags($content);
        echo substr($content, 0, 80);?></div>

                        <div class="content-link">
                            <a class="btn-style1" href="<?php echo get_the_permalink(); ?>">
                                Read more
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <?php endwhile;
    wp_reset_postdata();
    wp_reset_query();?>
        </div>
    </div>
</section>
<?php
$myvariable = ob_get_clean();
    return $myvariable;
}

add_shortcode('related-services', 'shortcode_related_service');
function shortcode_related_service()
{
    global $post;
    ?>
<section class="services grid-normal">

    <div class="container">
        <div class="row">
            <?php
$query = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => 3,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
        'post__not_in' => array($post->ID),
    ));
    while ($query->have_posts()): $query->the_post();?>
            <div data-aos="fade-up" class="col-sm-12 col-md-4 ">
                <div class="service-grid">
                    <!-- IMAGE -->
                    <div class="grid-img">
                        <?php the_post_thumbnail();?>
                    </div>

                    <!-- title -->
                    <div class="service-content text-left">

                        <h4 class="grid-title"><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h4>
                        <div class="gridText"><?php $content = get_the_content();
        $content = strip_tags($content);
        echo substr($content, 0, 80);?></div>

                        <div class="content-link">
                            <a class="btn-style1" href="<?php echo get_the_permalink(); ?>">
                                Read more
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <?php endwhile;
    wp_reset_postdata();
    wp_reset_query();?>
        </div>
    </div>
</section>
<?php
$myvariable = ob_get_clean();
    return $myvariable;
}
