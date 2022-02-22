<?php

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// =========== HOME PAGE ===========

Container::make( 'post_meta', __( 'Hero section' ) )
->show_on_page(5)
->add_fields([
    Field::make( 'text', 'section_title', 'Section Title' ),
    Field::make( 'text', 'section_sub_title', 'Section Sub Title' )
    ->help_text( 'Use <u>&lt;br&gt;</u> to break the text. Use <u>&lt;span&gt;around text&lt;/span&gt;</u> to make light color for text' ),
    Field::make('complex', 'hero_list', 'Cards')
    ->set_max(3)
	->add_fields([
        Field::make( 'image', 'icon', 'Icon' )
            ->set_width(12),
        Field::make( 'text', 'ico_label', 'Icon Label' )
            ->set_width(13),
        Field::make( 'text', 'test_name', 'Test Name' )
            ->set_width(40),
        Field::make( 'text', 'timing', 'Timing' )
            ->set_width(30),
        Field::make('complex', 'card_options', '-- Card Option --')
        ->add_fields([
            Field::make( 'text', 'single_option', 'Card Option' ),
        ])
    ])
    ->help_text( 'Please, add 3 cards.' ),
]);

Container::make( 'post_meta', __( 'Car section' ) )
->show_on_page(5)
->add_fields([
    Field::make( 'text', 'car_section_title', 'Section Title' )
    ->help_text( 'Use <u>&lt;br&gt;</u> to break the text. Use <u>&lt;span&gt;around text&lt;/span&gt;</u> to make light color for text' ),
    Field::make('complex', 'steps_list', '-- Steps --')
    ->set_max(3)
	->add_fields([
        Field::make( 'text', 'step_name', 'Step Name' ),
        Field::make( 'text', 'step_desc', 'Step description' ),
    ])
    ->help_text( 'Please, add <b>3</b> steps.' ),
]);

Container::make( 'post_meta', __( 'Location section' ) )
->show_on_page(5)
->add_fields([
    Field::make( 'text', 'loc_section_title', 'Section Title' )
    ->help_text( 'Use <u>&lt;br&gt;</u> to break the text. Use <u>&lt;span&gt;around text&lt;/span&gt;</u> to make light color for text' ),
    Field::make('complex', 'locations_list', '-- Locations --')
	->add_fields([
        Field::make( 'text', 'loc_name', 'Location Name' ),
    ])
    ->help_text( 'Please, add the locations all you need.' ),
]);

Container::make( 'post_meta', __( 'Healthy section' ) )
->show_on_page(5)
->add_fields([
    Field::make( 'text', 'healthy_section_title', 'Section Title' )
    ->help_text( 'Use <u>&lt;br&gt;</u> to break the text. Use <u>&lt;span&gt;around text&lt;/span&gt;</u> to make light color for text' ),
]);

Container::make( 'post_meta', __( 'FAQ section' ) )
->show_on_page(5)
->add_fields([
    Field::make( 'text', 'faq_section_title', 'Section Title' )
    ->help_text( 'Use <u>&lt;br&gt;</u> to break the text. Use <u>&lt;span&gt;around text&lt;/span&gt;</u> to make light color for text' ),
    Field::make('complex', 'faq_list', '-- Frequently asked questions --')
	->add_fields([
        Field::make( 'text', 'question', 'Question' )
            ->set_width(30),
        Field::make( 'rich_text', 'answer', 'Answer' )
            ->set_width(70),
    ])
    ->help_text( 'Please, add the questions & answers all you need.' ),
]);