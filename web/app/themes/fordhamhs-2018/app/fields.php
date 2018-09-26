<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Define custom fields
 * Docs: https://carbonfields.net/docs/
 */
add_action( 'carbon_fields_register_fields', function () {
    // All Pages
    Container::make( 'post_meta', 'Content' )
        ->where( 'post_id', '=', '39' )
        ->add_fields( array(
            Field::make( 'text', 'intro', 'Intro' ),
            Field::make( 'textarea', 'audition', 'Audition' ),
        ));
        Container::make( 'post_meta', 'Quote' )
        ->where( 'post_id', '=', '39' )
        ->add_fields( array(
            Field::make( 'textarea', 'quote', 'Quote' ),
            Field::make( 'text', 'author', 'Author' ),
            Field::make( 'text', 'title', 'Title' ),
        ));
    // General Theme options
    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
        ->add_fields( array(
            Field::make( 'rich_text', 'crb_footer_copyright', 'Copyright' ),
            Field::make( 'rich_text', 'crb_footer_col1', 'Column 1' ),
            Field::make( 'rich_text', 'crb_footer_col2', 'Column 2' ),
        ) );

});

/**
 * Boot Carbon Fields
 */
add_action( 'after_setup_theme', function () {
    \Carbon_Fields\Carbon_Fields::boot();
});
?>