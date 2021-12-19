<?php

function theme_add_theme_support() {
    add_theme_support( 'post-formats', array( 'image', 'aside', 'gallery', 'link' ) );
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'theme_add_theme_support' );