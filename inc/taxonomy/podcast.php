<?php
function wporg_register_taxonomy_podcast_cat() {
	 $labels = array(
		 'name'              => _x( 'دسته پادکست', 'taxonomy general name' ),
		 'singular_name'     => _x( 'دسته پادکست', 'taxonomy singular name' ),
		 'search_items'      => __( 'جستجو در دسته پادکست' ),
		 'all_items'         => __( 'همه دسته پادکست' ),
		 'parent_item'       => __( 'مادر دسته ' ),
		 'parent_item_colon' => __( 'مادر دسته :' ),
		 'edit_item'         => __( 'ویرایش دسته پادکست' ),
		 'update_item'       => __( 'به روز رسانی دسته پادکست' ),
		 'add_new_item'      => __( 'افزودن دسته پادکست' ),
		 'new_item_name'     => __( 'ساخت دسته پادکست' ),
		 'menu_name'         => __( 'دسته پادکست' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
		 'rewrite'           => [ 'slug' => 'podcast_cat' ],
	 );
	 register_taxonomy( 'podcast_cat', [ 'podcast' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_podcast_cat' );