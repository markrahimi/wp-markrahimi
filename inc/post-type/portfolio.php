<?php


/*Custom Post type start*/
function cw_post_type_portfolio() {
$supports = array(
'title', //  title
'editor', // post content
'thumbnail', // featured images
'comments',
);
$labels = array(
'name' => _x('نمونه کار ها', 'plural'),
'menu_name' => _x('نمونه کار ها', 'admin menu'),
'name_admin_bar' => _x('نمونه کار ها', 'admin bar'),
'add_new' => _x('افزودن نمونه کار', 'افزودن نمونه کار'),
'add_new_item' => __('اضافه کردن نمونه کار جدید'),
'new_item' => __('افزودن نمونه کار'),
'edit_item' => __('ویرایش نمونه کار'),
'view_item' => __('نمایش نمونه کار'),
'all_items' => __('همه نمونه کار ها'),
'search_items' => __('جستجو در نمونه کار ها'),
'not_found' => __('نمونه کاری یافت نشد'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'portfolio'),
'has_archive' => false,
'hierarchical' => false,
'taxonomies'          => array( 'portfolio_cat', 'post_tag' ),
'menu_icon' => 'dashicons-portfolio',
);
register_post_type('portfolio', $args);
}
add_action('init', 'cw_post_type_portfolio');
/*Custom Post type end*/