<?php
/**
 * Template Name: Home
 * Template Post Type: page
 */
get_header();
?>

<!-- Featured Products Section -->
<div class="featured-products">
    <h2>Featured Products</h2>
    <?php echo do_shortcode('[featured_products limit="4" columns="4"]'); ?>
</div>

<!-- Recent Blog Posts Section -->
<div class="recent-posts">
    <h2>Recent Posts</h2>
    <?php
    $args = array(
        'posts_per_page' => 3, // Number of posts to display
        'post_status' => 'publish'
    );
    $recent_posts = new WP_Query($args);
    if ($recent_posts->have_posts()) {
        while ($recent_posts->have_posts()) {
            $recent_posts->the_post();
            ?>
            <div class="post">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo '<p>No recent posts available.</p>';
    }
    ?>
    <?php
    get_footer();
    ?>