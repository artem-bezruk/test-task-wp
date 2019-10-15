<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', __('Theme Options'))
    ->add_fields(array(
        Field::make('separator', 'header_separator', __('Header options')),
        Field::make( 'image', 'site_logotype', __( 'Site Logo' ) )
            ->set_width(33),
        Field::make( 'text', 'site_name', __( 'Site Name' ) )
            ->set_width(33),
        Field::make( 'text', 'phone', __( 'Phone' ) )
            ->set_width(33)
    ));

//Container::make( 'theme_options', __( 'Header options' ) )
//    ->set_page_parent( $optionsContainer )
//	->add_fields( array(
//        Field::make( 'image', 'site_logo', __( 'Site Logo' ) )
//            ->set_width(50),
//	    Field::make( 'image', 'site_name', __( 'Site Name' ) )
//			->set_width(50)
//	) );
//
//Container::make( 'theme_options', __( 'Footer options' ) )
//    ->set_page_parent( $optionsContainer )
//  ->add_fields( array(
////    Field::make( 'text', $storeName.'_footer_address_heading', __( 'Заголовок колонки адреса:' ) )
////      ->set_width(50)
//  ) );
