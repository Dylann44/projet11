<?php
// Hook pour ajouter des scripts et styles
add_action('wp_enqueue_scripts', 'montheme_enqueue_styles');

function montheme_enqueue_styles() {
    // Enregistrement et chargement de la feuille de style
    wp_enqueue_style('montheme-style', get_stylesheet_uri());
}
