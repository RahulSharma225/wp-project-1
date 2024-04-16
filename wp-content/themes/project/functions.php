<?php

function theme_setup()
{
    register_nav_menus(
        array(
            "header" => "Header Menu",
            "footer" => "Footer Menu",
        )
    );
}
add_action("after_setup_theme", "theme_setup");
