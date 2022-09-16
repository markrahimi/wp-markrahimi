<?php
function wporg_register_taxonomy_portfolio_cat() {
	 $labels = array(
		 'name'              => _x( 'دسته نمونه کار', 'taxonomy general name' ),
		 'singular_name'     => _x( 'دسته  نمونه کار', 'taxonomy singular name' ),
		 'search_items'      => __( 'جستجو در دسته  نمونه کار' ),
		 'all_items'         => __( 'همه دسته  نمونه کار' ),
		 'parent_item'       => __( 'مادر دسته ' ),
		 'parent_item_colon' => __( 'مادر دسته :' ),
		 'edit_item'         => __( 'ویرایش دسته  نمونه کار' ),
		 'update_item'       => __( 'به روز رسانی دسته  نمونه کار' ),
		 'add_new_item'      => __( 'افزودن دسته  نمونه کار' ),
		 'new_item_name'     => __( 'ساخت دسته  نمونه کار' ),
		 'menu_name'         => __( 'دسته  نمونه کار' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
		 'rewrite'           => [ 'slug' => 'portfolio_cat' ],
	 );
	 register_taxonomy( 'portfolio_cat', [ 'portfolio' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_portfolio_cat' );
