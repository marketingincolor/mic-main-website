<?php
/*
Plugin Name: Sitecore - Plugin for current site
Plugin URI: http://marketingincolor.com
Description: Site specific code changes for current site
Version: 1.0
Author: Marketing In Color
Author URI: http://marketingincolor.com
License: GPL2
*/

/*  Copyright 2015 Marketing In Color (email : developer@marketingincolor.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Creates Portfolio Custom Post Type for MIC site
function portfolio_post_type() {
	$args = array(
			'label' => 'Portfolio',
			'taxonomies' => array( 'category', 'post_tag' ),
			'capability_type' => 'post',
			'hierarchical' => false,
			'public' => true,
			'show_ui' => true,
			'rewrite' => array('slug' => 'portfolio'),
			'publicly_queryable' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'excerpt',
					'author',
					'thumbnail',
					'comments',
					'trackbacks',
					'revisions',
					'custom-fields',
					'page-attributes',
					'post-formats',)
	);
	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_post_type' );

// Creates Case Study Custom Post Type for MIC site
function case_study_post_type() {
	$args = array(
			'label' => 'Case Study',
			'public' => true,
			'show_ui' => true,
			'capability_type' => 'post',
			'taxonomies' => array( 'category', 'post_tag' ),
			'hierarchical' => false,
			'rewrite' => array('slug' => 'case-study'),
			'publicly_queryable' => true,
			'menu_icon' => 'dashicons-awards',
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'excerpt',
					'author',
					'thumbnail',
					'comments',
					'trackbacks',
					'revisions',
					'custom-fields',
					'page-attributes',
					'post-formats',)
	);
	register_post_type( 'case-study', $args );
}
add_action( 'init', 'case_study_post_type' );