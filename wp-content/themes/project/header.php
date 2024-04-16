<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo esc_url(home_url("wp-content/themes/custom themes/assets/styles.css")); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="site-branding">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            GreenTech
                        </a></h1>
                    <?php
                }
                $your_theme_description = get_bloginfo('description', 'display');
                if ($your_theme_description || is_customize_preview()):
                    ?>
                    <p class="site-description">
                        <?php echo $your_theme_description; /* WPCS: xss ok. */ ?>
                    </p>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">

                <?php
                wp_nav_menu(
                    array(
                        "menu" => "header",
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

        <div id="content" class="site-content">