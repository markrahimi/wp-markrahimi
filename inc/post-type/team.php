<?php


/*Custom Post type start*/
function cw_post_type_team() {
$supports = array(
'title', //  title
'thumbnail', // featured images
'custom-fields',
);
$labels = array(
'name' => _x('تیم', 'plural'),
'menu_name' => _x('تیم', 'admin menu'),
'name_admin_bar' => _x('تیم', 'admin bar'),
'add_new' => _x('افزودن عضو تیم', 'افزودن عضو تیم'),
'add_new_item' => __('اضافه کردن عضو تیم جدید'),
'new_item' => __('افزودن عضو تیم'),
'edit_item' => __('ویرایش عضو تیم'),
'view_item' => __('نمایش عضو تیم'),
'all_items' => __('همه اعضا تیم '),
'search_items' => __('جستجو در اعضا تیم'),
'not_found' => __('عضو تیمی یافت نشد'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'team'),
'has_archive' => false,
'hierarchical' => false,
'menu_icon' => 'dashicons-businessman',
);
register_post_type('team', $args);
}
add_action('init', 'cw_post_type_team');
/*Custom Post type end*/