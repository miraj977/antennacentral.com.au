<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pictura_Creative
 */

if (get_field('show_client_logo_section') == 1) {
    $clientLogos = get_field('choose_style_client_logo_style', "option");
    echo get_template_part('template-parts/clientLogos/clientLogos', $clientLogos);
}

$cta_layout = get_field('call_to_action', "option");
//   echo get_template_part( 'template-parts/call-to-action/cta', $cta_layout );

?>

</div><!-- #content -->

<?php $footer = get_field("footer_style", "option");?>
<?php echo get_template_part('template-parts/footer/footer', $footer); ?>
<div class="upArrow"></div>
</div><!-- #page -->
<script>
var themeUrl = '<?php echo get_template_directory_uri() ?>';
</script>
<?php wp_footer();?>

</body>

</html>
