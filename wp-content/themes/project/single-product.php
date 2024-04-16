<?php
get_header();

?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

    <?php
    // Start of the loop.
    while (have_posts()):
        the_post();


        // Product meta information like categories and tags.
        woocommerce_template_single_meta();

        // Product description and details.
        woocommerce_output_product_data_tabs();

    endwhile; // end of the loop.
    ?>

    <?php
    get_footer();
