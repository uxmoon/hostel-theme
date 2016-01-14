<?php
add_filter( 'rwmb_meta_boxes', 'loslenos_register_meta_boxes' );

function loslenos_register_meta_boxes( $meta_boxes )
{
    $prefix = 'loslenos_';
    // Homepage - 1st meta box
    $meta_boxes[] = array(
        'id'         => 'personal',
        'title'      => 'Pagina Principal',
        'post_types' => 'page',
        'context'    => 'normal',
        'priority'   => 'high',

        'include' => array(
            'relation' => 'OR',
            'slug'     => 'hosteria-los-lenos',
            'template' => 'home.php'
        ),

        'fields' => array(
            array(
                'id'               => 'image_advanced',
                'name'             => __( 'Slider', 'loslenos' ),
                'type'             => 'image_advanced',
                'force_delete'     => false,
                'max_file_uploads' => 5,
            ),
        )
    );

    // Homepage - 2nd meta box
    $meta_boxes[] = array(
        'title'      => 'Secciones principales',
        'post_types' => 'page',

        'include' => array(
            'relation' => 'OR',
            'slug'     => 'hosteria-los-lenos',
            'template' => 'home.php'
        ),

        'fields'     => array(
            array(
                'name'        => __( 'Titulo 1', 'loslenos' ),
                'id'          => 'text',
                'type'        => 'text',
                'size'        => 30
            ),
            array(
                'id'               => 'first_featured_media',
                'name'             => __( 'Foto 1', 'loslenos' ),
                'type'             => 'image_advanced',
                'force_delete'     => true,
                'max_file_uploads' => 1,
            ),
            array(
                'name'        => __( 'Titulo 2', 'loslenos' ),
                'id'          => 'text',
                'type'        => 'text',
                'size'        => 30
            ),
            array(
                'id'               => 'second_featured_media',
                'name'             => __( 'Foto 2', 'loslenos' ),
                'type'             => 'image_advanced',
                'force_delete'     => true,
                'max_file_uploads' => 1,
            ),
            array(
                'name'        => __( 'Titulo 3', 'loslenos' ),
                'id'          => 'text',
                'type'        => 'text',
                'size'        => 30
            ),
            array(
                'id'               => 'third_featured_media',
                'name'             => __( 'Foto 3', 'loslenos' ),
                'type'             => 'image_advanced',
                'force_delete'     => true,
                'max_file_uploads' => 1,
            ),
            array(
                'name'        => __( 'Texto descriptivo', 'loslenos' ),
                'id'          => 'featured_text',
                'type'    => 'wysiwyg',
                'raw'     => false,
                'options' => array(
                    'textarea_rows' => 5,
                    'teeny'         => true,
                    'media_buttons' => false,
                ),
            ),
        )
    );

    // Homepage - 3rd meta box
    $meta_boxes[] = array(
        'title'      => 'Elija hacer turismo tranquilo',
        'post_types' => 'page',

        'include' => array(
            'relation' => 'OR',
            'slug'     => 'hosteria-los-lenos',
            'template' => 'home.php'
        ),

        'fields'     => array(
            // array(
            //     'name'        => __( 'Titulo', 'loslenos' ),
            //     'id'          => 'text',
            //     'type'        => 'text',
            //     'size'        => 30
            // ),
            array(
                'name'        => __( 'Texto descriptivo', 'loslenos' ),
                'id'          => 'home_tourism_text',
                'type'    => 'wysiwyg',
                'raw'     => false,
                'options' => array(
                    'textarea_rows' => 5,
                    'teeny'         => true,
                    'media_buttons' => false,
                ),
            ),
        )
    );

    // Rates - meta box
    $meta_boxes[] = array(
        'title'      => 'Tarifas',
        'post_types' => 'page',

        'include' => array(
            'relation' => 'OR',
            'slug'     => 'tarifas',
            'template' => array( 'rates.php' ),
        ),

        'fields'     => array(
            array(
                'name'        => __( 'Habitación Doble precio', 'loslenos' ),
                'id'          => 'rates_double_room_rate',
                'type'        => 'text',
                'size'        => 20
            ),
            array(
                'name'        => __( 'Habitación Triple precio', 'loslenos' ),
                'id'          => 'rates_triple_room_rate',
                'type'        => 'text',
                'size'        => 20
            ),
            array(
                'name'        => __( 'Habitación Cuádruple precio', 'loslenos' ),
                'id'          => 'rates_quadruple_room_rate',
                'type'        => 'text',
                'size'        => 20
            ),
            // DIVIDER
            array(
                'type' => 'divider',
                'id'   => 'fake_divider_id', // Not used, but needed
            ),
            array(
                'name'        => __( 'Horario Check-in', 'loslenos' ),
                'id'          => 'rates_checkin_hour',
                'type'        => 'text',
                'size'        => 30
            ),
            array(
                'name'        => __( 'Horario Check-out', 'loslenos' ),
                'id'          => 'rates_checkout_hour',
                'type'        => 'text',
                'size'        => 30
            ),
            array(
                'name'        => __( 'Late Checkout', 'loslenos' ),
                'id'          => 'rates_late_checkout',
                'type'        => 'textarea',
                'rows'        => 5,
                'cols'        => 5,
            ),
            array(
                'name'        => __( 'Restricciones', 'loslenos' ),
                'id'          => 'rates_restrictions',
                'type'    => 'wysiwyg',
                'raw'     => false,
                'options' => array(
                    'textarea_rows' => 5,
                    'teeny'         => true,
                    'media_buttons' => false,
                ),
            ),
        )
    );

    // Services - meta box
    $meta_boxes[] = array(
        'title'      => 'Servicios',
        'post_types' => 'page',

        'include' => array(
            'relation' => 'OR',
            'slug'     => 'servicios',
            'template' => array( 'services.php' ),
        ),

        'fields'     => array(
            array(
                'name'    => __( 'Texto Actividades adicionales', 'loslenos' ),
                'id'      => 'services_tourism_other',
                'type'    => 'wysiwyg',
                'raw'     => false,
                'options' => array(
                    'textarea_rows' => 5,
                    'teeny'         => true,
                    'media_buttons' => false,
                ),
            ),
            // DIVIDER
            array(
                'type' => 'divider',
                'id'   => 'fake_divider_id', // Not used, but needed
            ),
            array(
                'name'             => __( 'Foto', 'loslenos' ),
                'id'               => 'services_tourism_media',
                'type'             => 'image_advanced',
                'force_delete'     => true,
                'max_file_uploads' => 1,
            ),
            array(
                'name'    => __( 'Texto Turismo Tranquilo', 'loslenos' ),
                'id'      => 'services_tourism_text',
                'type'    => 'wysiwyg',
                'raw'     => false,
                'options' => array(
                    'textarea_rows' => 5,
                    'teeny'         => true,
                    'media_buttons' => false,
                ),
            ),
            // DIVIDER
            array(
                'type' => 'divider',
                'id'   => 'fake_divider_id', // Not used, but needed
            ),
            array(
                'name'    => __( 'Texto 10 pilares', 'loslenos' ),
                'id'      => 'services_pilars_text',
                'type'    => 'wysiwyg',
                'raw'     => false,
                'options' => array(
                    'textarea_rows' => 5,
                    'teeny'         => true,
                    'media_buttons' => false,
                ),
            ),
        )
    );

    // Location - meta box
    $meta_boxes[] = array(
        'title'      => 'Ubicación',
        'post_types' => 'page',

        'include' => array(
            'relation' => 'OR',
            'slug'     => 'ubicacion',
            'template' => 'location.php',
        ),

        'fields'     => array(
            array(
                'id'   => 'location_address',
                'name' => __( 'Dirección', 'loslenos' ),
                'type' => 'text',
                // 'std'  => __( 'Hanoi, Vietnam', 'loslenos' ),
            ),
            array(
                'id'            => 'location_map',
                'name'          => __( 'Ubicación en el mapa', 'loslenos' ),
                'type'          => 'map',
                // Default location: 'latitude,longitude[,zoom]' (zoom is optional)
                'std'           => '-32.675655,-64.993824[,15]',
                // Name of text field where address is entered. Can be list of text fields, separated by commas (for ex. city, state)
                'address_field' => 'location_address',
            ),
            array(
                'name'        => __( 'Texto Mapa', 'loslenos' ),
                'id'          => 'location_map_text',
                'type'    => 'wysiwyg',
                'raw'     => false,
                'options' => array(
                    'textarea_rows' => 5,
                    'teeny'         => true,
                    'media_buttons' => false,
                ),
            ),
            // DIVIDER
            array(
                'type' => 'divider',
                'id'   => 'fake_divider_id', // Not used, but needed
            ),
            array(
                'name'             => __( 'Foto', 'loslenos' ),
                'id'               => 'location_drive_directions_media',
                'type'             => 'image_advanced',
                'force_delete'     => true,
                'max_file_uploads' => 1,
            ),
            array(
                'name'    => __( 'Instrucciones', 'loslenos' ),
                'id'      => "location_drive_directions_text",
                'type'    => 'wysiwyg',
                'raw'     => false,
                'options' => array(
                    'textarea_rows' => 15,
                    'teeny'         => true,
                    'media_buttons' => false,
                ),
            ),
        )
    );

    // Photos meta box
    $meta_boxes[] = array(
        'title'      => 'Fotos',
        'post_types' => 'fotos',

        'fields' => array(
            array(
                'name'             => __( 'Cargar fotos', 'rwmb' ),
                'id'               => "{$prefix}imgadv",
                'type'             => 'image_advanced',
                'max_file_uploads' => 60,
            )
        )
    );
    return $meta_boxes;
}


/**
 * Manual check for including meta box
 * You can check ANY conditions here
 *
 * @param $meta_box
 *
 * @return bool
 */
function manual_include( $meta_box )
{
    if ( $meta_box['title'] == 'Include Meta Box' )
        return true;
    return false;
}