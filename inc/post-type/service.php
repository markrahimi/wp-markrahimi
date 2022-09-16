<?php


/*Custom Post type start*/
function cw_post_type_service() {
$supports = array(
'title', //  title
'editor', // post content
'thumbnail', // featured images
'custom-fields',
);
$labels = array(
'name' => _x('خدمات', 'plural'),
'menu_name' => _x('خدمات', 'admin menu'),
'name_admin_bar' => _x('خدمات', 'admin bar'),
'add_new' => _x('افزودن خدمات', 'افزودن خدمات'),
'add_new_item' => __('اضافه کردن خدمات جدید'),
'new_item' => __('افزودن خدمات'),
'edit_item' => __('ویرایش خدمات'),
'view_item' => __('نمایش خدمات'),
'all_items' => __('همه خدمات '),
'search_items' => __('جستجو در خدمات '),
'not_found' => __('خدماتی یافت نشد'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'service'),
'has_archive' => false,
'hierarchical' => false,
'menu_icon' => 'dashicons-image-filter',
'taxonomies' => array('post_tag' ),
);
register_post_type('service', $args);
}
add_action('init', 'cw_post_type_service');
/*Custom Post type end*/