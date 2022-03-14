<?php

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// =========== HOME PAGE ===========

Container::make( 'post_meta', __( 'Hero section' ) )
->show_on_page(5)       // page_id
->add_fields([
    Field::make( 'text', 'section_title', 'Section Title' ),
]);