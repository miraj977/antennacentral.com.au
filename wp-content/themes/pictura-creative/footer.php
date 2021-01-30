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

//$cta_layout = get_field('call_to_action', "option");
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

<script type='text/javascript' src='https://antennacentral.com.au/wp-admin/load-scripts.php?c=0&amp;load%5Bchunk_0%5D=jquery-core&amp;ver=5.5.1'></script>
<!-- <script type='text/javascript' src='https://code.jquery.com/jquery-3.4.1.min.js'></script> -->


<script src='https://antennacentral.com.au/wp-content/plugins/formidable/js/frm.min.js?ver=4.07.01' id='formidable-js'></script>
<script defer="defer" async="async" src='https://www.google.com/recaptcha/api.js?onload=frmRecaptcha&#038;render=explicit&#038;ver=3' id='recaptcha-api-js'></script>

</body>

</html>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179019912-1"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-179019912-1');
</script>
<?php wp_footer();?>

</body>

</html>
