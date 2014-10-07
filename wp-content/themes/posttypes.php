<?php

// Add new post type for projects
add_action('init', 'projects_init');
function projects_init() {
  $project_labels = array(
    'name' => _x('Projects', 'post type general name'),
    'singular_name' => _x('Project', 'post type general name'),
    'all_items' => __('All Projects'),
    'add_new' => _x('Add new project', 'projects'),
    'edit_item' => __('Edit project'),
    'new_item' => __('New project'),
    'view_item' => __('View project'),
    'not_found' => __('No projects found'),
    'not_found_in_trash' => __('No projects found in trash'),
    'parent_item_colon' => ''
    );

  $args = array(
    'labels' => $project_labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
    );
  register_post_type('projects',$args);
}

?>