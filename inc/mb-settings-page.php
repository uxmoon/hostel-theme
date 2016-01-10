<?php
add_filter( 'mb_settings_pages', 'prefix_settings_pages' );
function prefix_settings_pages( $settings_pages )
{
    $settings_pages[] = array(
        'id'            => 'my-options',
        'option_name'   => 'my_options',
        'menu_title'    => __( 'Configuración', 'hosteria' ),
        'icon_url'      => 'dashicons-admin-generic',
        'submenu_title' => __( 'General', 'hosteria' ),
    );
    $settings_pages[] = array(
        'id'            => 'my-options-footer',
        'option_name'   => 'my_options',
        'menu_title'    => __( 'Pie de página', 'hosteria' ),
        'parent'        => 'my-options',
    );
    $settings_pages[] = array(
        'id'            => 'my-options-copy',
        'option_name'   => 'my_options',
        'menu_title'    => __( 'Copyright', 'hosteria' ),
        'parent'        => 'my-options',
    );
    return $settings_pages;
}


// Register settings meta boxes and fields
add_filter( 'rwmb_meta_boxes', 'prefix_options_meta_boxes' );
function prefix_options_meta_boxes( $meta_boxes )
{
    $meta_boxes[] = array(
        'id'             => 'general',
        'title'          => __( 'General', 'hosteria' ),
        'settings_pages' => 'my-options',
        'fields'         => array(
            // array (
            //     'name'        => __( 'Logo', 'loslenos' ),
            //     'id'          => 'general_logo',
            //     'type'        => 'file_input',
            // ),
            array (
                'name'        => __( 'Dirección', 'loslenos' ),
                'id'          => 'general_address',
                'type'        => 'text',
                'size'        => 60
            ),
            array (
                'name'        => __( 'Email', 'loslenos' ),
                'id'          => 'general_email',
                'type'        => 'text',
                'size'        => 30
            ),
            array (
                'name'        => __( 'Teléfono', 'loslenos' ),
                'id'          => 'general_phone',
                'type'        => 'text',
                'size'        => 30
            ),
            array (
                'name'        => __( 'Celular', 'loslenos' ),
                'id'          => 'general_cellphone',
                'type'        => 'text',
                'size'        => 30
            ),
            array (
                'name'        => __( 'Facebook URL', 'loslenos' ),
                'id'          => 'general_fb_url',
                'type'        => 'text',
                'size'        => 60
            ),
            array (
                'name'        => __( 'Facebook texto', 'loslenos' ),
                'id'          => 'general_fb_label',
                'type'        => 'text',
                'size'        => 30
            ),
            array (
                'name'        => __( 'Twitter URL', 'loslenos' ),
                'id'          => 'general_tw_url',
                'type'        => 'text',
                'size'        => 60
            ),
            array (
                'name'        => __( 'Twitter texto', 'loslenos' ),
                'id'          => 'general_tw_label',
                'type'        => 'text',
                'size'        => 30
            ),
            array (
                'name'        => __( 'Google+ URL', 'loslenos' ),
                'id'          => 'general_gp_url',
                'type'        => 'text',
                'size'        => 60
            ),
            array (
                'name'        => __( 'Google+ texto', 'loslenos' ),
                'id'          => 'general_gp_label',
                'type'        => 'text',
                'size'        => 30
            ),
        ),
    );
    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'your_prefix_textarea_demo' );
function your_prefix_textarea_demo( $meta_boxes )
{
    $meta_boxes[] = array(
        'id'             => 'copyright',
        'title'          => __( 'General', 'loslenos' ),
        'settings_pages' => 'my-options-copy',
        'fields'         => array(
            array(
                'name'    => __( 'Texto', 'loslenos' ),
                'id'      => "general_copy",
                'type'    => 'wysiwyg',
                'raw'     => false,
                'options' => array(
                    'textarea_rows' => 4,
                    'teeny'         => true,
                    'media_buttons' => false,
                ),
            ),
        ),
    );
    return $meta_boxes;
}


add_filter( 'rwmb_meta_boxes', 'your_prefix_footer_demo' );
function your_prefix_footer_demo( $meta_boxes )
{
    $meta_boxes[] = array(
        'id'             => 'footer',
        'title'          => __( 'Información', 'loslenos' ),
        'settings_pages' => 'my-options-footer',
        'fields'         => array(
            array(
                'name' => __( 'Logo', 'loslenos' ),
                'id'   => 'general_footer_media',
                'type' => 'file_input',
            ),
            array(
                'name'    => __( 'Texto', 'loslenos' ),
                'id'      => "general_footer_text_content",
                'type'    => 'wysiwyg',
                'raw'     => false,
                'options' => array(
                    'textarea_rows' => 4,
                    'teeny'         => true,
                    'media_buttons' => false,
                ),
            ),
        ),
    );
    return $meta_boxes;
}