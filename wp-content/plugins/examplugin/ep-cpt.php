<?php

function dwwp_register_post_type() {
    //Skapar en custom post type
    //Lägga till etiketter

    //gör två variablar för namnet. En i singular och en i plural för dynamikens skull.
    $singular = 'Box';
    $plural = 'Boxes';


    //behöver en array som säger vad som ska vara aktivt eller inte
    //labels är också en array så jag gör en till array som är sparad i $labels

    $labels = [
        'name'                  => $plural,
        'singular_name'         => $singular,
        'add_name'              => 'Add New',
        'add_new_item'          => 'Add New ' . $singular,
        'edit_item'             => 'Edit ' . $singular,
        'new_item'              => 'New  ' . $singular,
        'view_item'             => 'View  ' . $singular,
        'view_items'            => 'View ' . $plural,
        'search_items'          => 'Search ' . $plural,
        'not_found'             => 'No ' . $plural . ' found',
        'not_found_in_trash'    => 'No ' . $plural . ' found in Trash',
    ];

    $args = [
        'labels'                => $labels,
        'public'                => true, //how easily should users interact with this custom post type
        'publicly_queryable'    => true, //if u want this to be part of the wordpress loop
        'exclude_from_search'   => false,
        'show_in_nav_menus'     => true,
        'show_ui'               => true, //gjorde ett fel vilket var att sätta true som string haha
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-archive',
        'can_export'            => true,
        'delete_with_user'      => false,
        'hierarchical'          => false,
        'has_archive'           => true,
        'query_var'             => true,
        'capability_type'       => 'post',
        'map_meta_cap'          => true,
        //capabilities => array(),
        'rewrite'               => array(
            'slug'              => 'boxes',
            'with_front'        => true,
            'pages'             => true,
            'feeds'             => false,
        ),
        'supports'              => array (
            //det som visas i add new blabla
            'title',
            /*'editor',
            'author',
            'custom-fields',
            'thumbnail',*/
        )

    ];

    //detta registrerar post typen. box är namnet och $args är arrayerna för etiketterna.
    register_post_type( 'box', $args );

}

add_action('init', 'dwwp_register_post_type');