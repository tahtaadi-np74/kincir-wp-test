<?php

// create portfolio custom post type
function create_custom_post_type() {
    // label for Custom Post Type
    $labels = array(
        'name'               => _x('Portfolio', 'Post Type General Name', 'text_domain'),
        'singular_name'      => _x('Portfolio', 'Post Type Singular Name', 'text_domain'),
        'menu_name'          => __('Portfolio', 'text_domain'),
        'parent_item_colon'  => __('Parent Portfolio', 'text_domain'),
        'all_items'          => __('All Items', 'text_domain'),
        'view_item'          => __('View Item', 'text_domain'),
        'add_new_item'       => __('Add New Item', 'text_domain'),
        'add_new'            => __('Add New', 'text_domain'),
        'edit_item'          => __('Edit Item', 'text_domain'),
        'update_item'        => __('Update Item', 'text_domain'),
        'search_items'       => __('Search Item', 'text_domain'),
        'not_found'          => __('Not Found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
    );

    // options for custom post type
    $args = array(
        'label'               => __('Portfolio', 'text_domain'),
        'description'         => __('Portfolio news and reviews', 'text_domain'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail'),
        'public'              => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-images-alt2',
        'rewrite'             => array('slug' => 'portfolio'),
        'show_in_rest'        => true,
    );

    // register custom post type
    register_post_type('portfolio', $args);
}

add_action('init', 'create_custom_post_type', 0);

// add shortcode for portfolio
function portfolio_shortcode() {
    $args = array(
        'post_type'      => 'portfolio',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);

    $output = '<div class="portfolio-list">';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<div class="portfolio-item">';
            if (has_post_thumbnail()) {
                $output .= '<div class="portfolio-thumbnail">' . get_the_post_thumbnail(null, 'thumbnail') . '</div>';
            }
            $output .= '<div class="portfolio-content">';
            $output .= '<h2 class="portfolio-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
            $output .= '<div class="portfolio-description">' . get_the_excerpt() . '</div>';
            $output .= '</div>';
            $output .= '</div>';
        }
        wp_reset_postdata();
    } else {
        $output .= '<p>No portfolio items found.</p>';
    }

    $output .= '</div>';

    return $output;
}

add_shortcode('portfolio_shortcode', 'portfolio_shortcode');

// add custom style from style.css
function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');



