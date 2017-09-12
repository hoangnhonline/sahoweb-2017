<?php
add_action('init', 'create_nv_post_type');
function create_nv_post_type() {
    register_post_type('nv', array(
        'labels' => array(
            'name' => __('Nhân viên'),
            'singular_name' => __('Nhân viên'),
            'add_new' => __('Thêm mới'),
            'add_new_item' => __('Thêm mới'),
            'edit' => __('Sửa'),
            'edit_item' => __('Sửa'),
            'new_item' => __('Mới'),
            'view' => __('Xem'),
            'view_item' => __('Xem'),
            'search_items' => __('Tìm kiếm'),
            'not_found' => __('Không có bài nào được tìm thấy'),
            'not_found_in_trash' => __('Không có bài nào đươc tìm thấy')
        ),
        'public' => true,
        'show_ui' => true,
        'publicy_queryable' => true,
        'exclude_from_search' => false,
        'menu_position' => 22,
        //'menu_icon' => get_stylesheet_directory_uri() . '/images/gallery.png',
        'hierarchical' => false,
        'query_var' => true,
        'supports' => array(
            'title', 'editor', 'comments', 'author', 'excerpt', 'thumbnail',
            'custom-fields'
        ),
        'rewrite' => array('slug' => 'nhan-vien', 'with_front' => false),
        //'taxonomies' =>  array('post_tag', 'category'),
        'can_export' => true,
        //'register_meta_box_cb'  =>  'call_to_function_do_something',
        'description' => __('Mô tả.')
            )
    );
}
;?>
