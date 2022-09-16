<?php


/*Custom Post type start*/
function cw_post_type_podcast() {
$supports = array(
'title', //  title
'editor', // post content
'thumbnail', // featured images
'custom-fields',
'comments',
);
$labels = array(
'name' => _x('پادکست ها', 'plural'),
'menu_name' => _x('پادکست ها', 'admin menu'),
'name_admin_bar' => _x('پادکست ها', 'admin bar'),
'add_new' => _x('افزودن پادکست', 'افزودن پادکست'),
'add_new_item' => __('اضافه کردن پادکست جدید'),
'new_item' => __('افزودن پادکست'),
'edit_item' => __('ویرایش پادکست'),
'view_item' => __('نمایش پادکست'),
'all_items' => __('همه پادکست ها'),
'search_items' => __('جستجو در پادکست ها'),
'not_found' => __('پادکستی یافت نشد'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'podcast'),
'has_archive' => false,
'hierarchical' => false,
'taxonomies'          => array( 'podcast_cat', 'post_tag' ),
'menu_icon' => 'dashicons-format-audio',
);
register_post_type('podcast', $args);
}
add_action('init', 'cw_post_type_podcast');
/*Custom Post type end*/