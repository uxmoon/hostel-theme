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
        'id'          => 'first_featured_title',
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
        'name'        => __( 'Vínculo', 'loslenos' ),
        'id'          => "first_featured_page",
        'type'        => 'post',
        'post_type'   => 'page',
        'field_type'  => 'select',
        'placeholder' => __( 'Seleccionar página', 'loslenos' ),
        'query_args'  => array(
          'post_status'    => 'publish',
          'posts_per_page' => - 1,
        ),
      ),
      array(
        'name'        => __( 'Titulo 2', 'loslenos' ),
        'id'          => 'second_featured_title',
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
        'name'        => __( 'Vínculo', 'loslenos' ),
        'id'          => "second_featured_page",
        'type'        => 'post',
        'post_type'   => 'page',
        'field_type'  => 'select',
        'placeholder' => __( 'Seleccionar página', 'loslenos' ),
        'query_args'  => array(
          'post_status'    => 'publish',
          'posts_per_page' => - 1,
        ),
      ),
      array(
        'name'        => __( 'Titulo 3', 'loslenos' ),
        'id'          => 'third_featured_title',
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
        'name'        => __( 'Vínculo', 'loslenos' ),
        'id'          => "third_featured_page",
        'type'        => 'post',
        'post_type'   => 'page',
        'field_type'  => 'select',
        'placeholder' => __( 'Seleccionar página', 'loslenos' ),
        'query_args'  => array(
          'post_status'    => 'publish',
          'posts_per_page' => - 1,
        ),
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
      array(
        'id'               => 'home_featured_bg_image',
        'name'             => __( 'Imagen de fondo', 'loslenos' ),
        'type'             => 'image_advanced',
        'force_delete'     => true,
        'max_file_uploads' => 1,
        )
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
      array(
        'name'    => __( 'Texto', 'loslenos' ),
        'id'      => 'home_tourism_text',
        'type'    => 'wysiwyg',
        'raw'     => false,
        'options' => array(
          'textarea_rows' => 5,
          'teeny'         => true,
          'media_buttons' => false,
          )
        )
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
      array(
        'type' => 'divider',
        'id'   => 'fake_divider_id', // Not used, but needed
      ),
      array(
        'name'    => __( 'Texto 10 pilares. 1 a 5.', 'loslenos' ),
        'id'      => 'services_pilars_text',
        'type'    => 'wysiwyg',
        'raw'     => false,
        'options' => array(
          'textarea_rows' => 5,
          'teeny'         => true,
          'media_buttons' => false,
          ),
        ),
      array(
        'name'    => __( 'Texto 10 pilares. 6 a 10.', 'loslenos' ),
        'id'      => 'services_pilars_text_2',
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
      'ID'       => 10
    ),

    'fields'     => array(
      array(
        'id'   => 'location_address',
        'name' => __( 'Dirección', 'loslenos' ),
        'type' => 'text',
      ),
      array(
        'id'            => 'location_map',
        'name'          => __( 'Ubicación en el mapa', 'loslenos' ),
        'type'          => 'map',
        'std'           => '-32.675655,-64.993824[,15]',
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
      array(
        'type' => 'divider',
        'id'   => 'fake_divider_id',
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

  // Location Tourism - meta box
  $meta_boxes[] = array(
    'title'      => 'Ubicación',
    'post_types' => 'page',

    'include' => array(
      'relation' => 'OR',
      'ID'       => 30
    ),

    'fields' => array(
      array(
        'id'   => 'location_address',
        'name' => __( 'Dirección', 'loslenos' ),
        'type' => 'text',
      ),
      array(
        'id'            => 'location_map_tourism',
        'name'          => __( 'Ubicación en el mapa', 'loslenos' ),
        'type'          => 'map',
        'std'           => '-32.675655,-64.993824[,15]',
        'address_field' => 'location_address',
        )
      )
    );

  // Photos meta box
  $meta_boxes[] = array(
    'title'      => 'Fotos',
    'post_types' => 'fotos',

    'fields' => array(
      array(
        'id'               => 'photo_gallery',
        'name'             => __( 'Cargar fotos', 'loslenos' ),
        'type'             => 'image_advanced',
        'max_file_uploads' => 20
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
