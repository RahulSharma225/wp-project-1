<?php
/**
 * Template Name: Shop
 * Template Post Type: page
 */
get_header();
?>
<section>
    <?php
    do_action("woocommerce_before_shop_loop");
    echo do_shortcode('[products limit="6"]');
    do_action("woocommerce_after_shop_loop");
    ?>
</section>
<?php
get_footer(); ?>