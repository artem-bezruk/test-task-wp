<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/*
 * Settings for Main page
 * */
Container::make('post_meta', __('Home Page settings', 'crb'))
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'templates/template-home.php')
    ->add_fields(array(
        Field::make('separator', 'crb_home_separator_intro', __('Slide Options')),
        Field::make('complex', 'crb_home_slider', __(''))
            ->add_fields(array(
                Field::make('image', 'crb_home_slider_image', 'Slide Image')->set_value_type('url')->set_width(25),
                Field::make('textarea', 'crb_home_slider_text', 'Slide description')->set_width(25),
                Field::make('date', 'crb_event_start_date', __('Event Start Date'))
                    ->set_storage_format('j, F Y')->set_width(25),
                Field::make('text', 'crb_home_slider_link', 'Event Link')->set_width(25),
            )),
        Field::make('separator', 'crb_home_separator_about', __('Additional section')),
        Field::make('text', 'crb_home_about_title', 'Section Title')->set_width(100),
        Field::make('textarea', 'crb_home_about_content', 'Section Content')->set_width(100),
    ));
