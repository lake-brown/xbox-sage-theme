<?php

require_once __DIR__ . '/app/setup.php';

function theme_assets() {
    wp_enqueue_style('main', get_template_directory_uri() . '/resources/styles/app.css');
}
add_action('wp_enqueue_scripts', 'theme_assets');