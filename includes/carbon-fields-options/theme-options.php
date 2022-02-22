<?php
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __('Theme options', 'crb') )
->add_fields([
	Field::make( 'text', 'book_btn_url', 'Book Button Link' )
        ->set_width(50),
	Field::make( 'text', 'book_btn_text', 'Book Button Text' )
        ->set_width(50),
	Field::make( 'text', 'contact_btn_url', 'Contact Button Link' )
        ->set_width(50),
	Field::make( 'text', 'contact_btn_text', 'Contact Button Text' )
        ->set_width(50),
	Field::make( 'text', 'become_url', 'Become Link' )
        ->set_width(50),
	Field::make( 'text', 'become_text', 'Become Text' )
        ->help_text( 'Use <u>&lt;span&gt;around text&lt;/span&gt;</u> to make light color for text' )
        ->set_width(50),
	Field::make( 'image', 'logo_img', 'Logo Image' )
        ->set_width(25),
	Field::make( 'text', 'site_name', 'Site Name' )
        ->set_width(50),
	Field::make( 'image', 'dev_logo', 'Dev Logo in footer' )
        ->set_width(25),
]);