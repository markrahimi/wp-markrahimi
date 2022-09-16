<?php


/*Custom Post type start*/
function cw_post_type_slider() {
$supports = array(
'title', //  title
'thumbnail', // featured images
'custom-fields',
);
$labels = array(
'name' => _x('اسلایدر', 'plural'),
'menu_name' => _x('اسلایدر', 'admin menu'),
'name_admin_bar' => _x('اسلایدر', 'admin bar'),
'add_new' => _x('افزودن اسلاید', 'افزودن اسلاید'),
'add_new_item' => __('اضافه کردن اسلاید جدید'),
'new_item' => __('افزودن اسلاید'),
'edit_item' => __('ویرایش اسلاید'),
'view_item' => __('نمایش اسلاید'),
'all_items' => __('همه اسلاید ها'),
'search_items' => __('جستجو در اسلایدر ها'),
'not_found' => __('اسلایدی یافت نشد'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'slider'),
'has_archive' => false,
'hierarchical' => false,
'menu_icon' => 'dashicons-slides',
);
register_post_type('slider', $args);
}
add_action('init', 'cw_post_type_slider');
/*Custom Post type end*/