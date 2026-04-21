<?php

// Custom Post Type
add_action('init', function () {
    register_post_type('news', [
        'label' => 'News',
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor']
    ]);
});