<?php
    add_action('wp_enqueue_scripts', 'load_scripts');

    function load_scripts() {
        wp_enqueue_style('style', get_template_directory_uri() . '/styles/style.css', '1.0.0', true);

        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js');
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'script', get_template_directory_uri() . '/scripts/script.js', array('jquery'), '1.0.0', true);
    }

    function load_images($name) {
        echo get_template_directory_uri() . '/assets/' . $name;
    }
?>