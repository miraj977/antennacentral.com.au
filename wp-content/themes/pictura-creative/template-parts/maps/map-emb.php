<section class="map-section"><?php
if (get_sub_field('section_title')) {
    echo "<h1>" . get_sub_field('section_title') . "</h1>";
}
if (get_sub_field('content')) {
    echo "<p style='padding-bottom: 30px;'>" . get_sub_field('content') . "</p>";
}

if (get_sub_field('map_embed')) {
    echo get_sub_field('map_embed');
}
?><br><br><br>
    <div class="benefits-bottom-text" style="text-align:center;">
        <?php 
$link = get_sub_field('link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
    </div>
</section>
