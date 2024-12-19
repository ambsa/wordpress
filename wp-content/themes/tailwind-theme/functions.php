<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Menghentikan eksekusi jika file diakses langsung
}
function enqueue_tailwind_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind_styles');

function tema_saya_setup() {
    // Mengaktifkan dukungan title dinamis
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'tema_saya_setup');

function my_custom_styles() {
    // Menambahkan file CSS eksternal
    wp_enqueue_style('custom-css', 'https://example.com/path/to/your/styles.css');
    
    // Menambahkan file CSS lokal (misalnya di dalam tema)
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'my_custom_styles');

function theme_enqueue_scripts() {
    // Mendaftarkan file JS
    wp_enqueue_script(
        'custom-script', // Handle unik untuk script ini
        get_template_directory_uri() . '/assets/js/script.js', // Path ke file JS
        array('jquery'), // Dependency (contoh: jQuery)
        false, // Versi file, false untuk tidak ditentukan
        true // Muat file di footer (true), atau header (false)
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');




