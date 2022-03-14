<?php
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __('Theme options', 'crb') )
->add_fields([
	Field::make( 'image', 'logo_img', 'Logo Image' )
        ->set_width(25),
	Field::make( 'text', 'site_name', 'Site Name' )
        ->set_width(50),
        Field::make( 'header_scripts', 'google_tag_manager', 'Google Tag Manager' )
        ->set_width(50),
        Field::make( 'header_scripts', 'google_analytics', 'Google Analytics' )
        ->set_width(50),
]);