<?php

//slider
/*****создание типа записи "Слайдер" ***********************/
// Slider
function create_slider() {
    register_post_type('slider', array(
        'labels' => array(
            'name'            =>  'Слайдер',
            'singular_name'   =>  'Слайдер',
            'add_new'         =>  'Добавить слайд',
            'add_new_item'    =>  'Добавить слайд',
            'edit'            =>  'Редактировать слайд',
            'edit_item'       =>  'Редактировать слайд',
            'new_item'        =>  'Новый слайд',
            'all_items'       =>  'Все слайды',
            'view'            =>  'Посмотреть',
            'view_item'       =>  'Посмотреть слайд',
            'search_items'    =>  'Искать слайды',
            'not_found'       =>  'Не найдено',
            ),
        'public' => true, // show in admin panel?
        'menu_position' => 5,
        'supports' => array( 'title'), // добавить 'editor', 'custom-fields', при использовании стандартных возможностей WP
        'taxonomies' => array( '' ),
        'has_archive' => true,
        'capability_type' => 'post',
        'menu_icon'   => 'dashicons-admin-site',
        'rewrite' => array('slug' => 'slider'),
        ));
}
add_action( 'init', 'create_slider' );

?>