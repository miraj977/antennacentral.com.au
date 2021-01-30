<section class="map-section"><?php
if (get_sub_field('title')) {
    echo "<h1>" . get_sub_field('title') . "</h1>";
}
if (get_sub_field('content')) {
    echo "<p style='padding-bottom: 30px;'>" . get_sub_field('content') . "</p>";
}

if (get_sub_field('map_embed')) {
    echo get_sub_field('map_embed');
}
?>
    <div class="benefits-bottom-text" style="text-align:center;">
        <a href="<?php echo get_sub_field("link"); ?>"><?php echo get_sub_field("link_text"); ?>
        </a>
    </div>
</section>
