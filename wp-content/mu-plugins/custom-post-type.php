<?php
function universityCustomPosts()
{

    register_post_type('event', array(
        "rewrite" => array("slug" => "events"),
        "capability_type" => "event",
        "map_meta_cap" => true,
        "supports" => array("title", "editor", "excerpt"),
        "has_archive" => true,
        "public" => true,
        "show_in_rest" => true,
        "labels" => array(
            "name" => "Events",
            "singular_name" => "Event",
            'add_new' => "Add New Event",
            'add_new_item' => "Add New Event",
            "edit_item" => "Edit Event",
            "all_items" => "All Events"


        ),
        "menu_icon" => "dashicons-calendar"
    ));
    register_post_type('program', array(
        "rewrite" => array("slug" => "programs"),
        "supports" => array("title"),
        "has_archive" => true,
        "public" => true,
        "show_in_rest" => true,
        "labels" => array(
            "name" => "Programs",
            "singular_name" => "Program",
            'add_new' => "Add New Program",
            'add_new_item' => "Add New Program",
            "edit_item" => "Edit Program",
            "all_items" => "All Programs"


        ),
        "menu_icon" => "dashicons-awards"
    ));
    register_post_type('professor', array(
        "supports" => array("title", "editor", "thumbnail"),
        "public" => true,
        "show_in_rest" => true,
        "labels" => array(
            "name" => "Professors",
            "singular_name" => "Professor",
            'add_new' => "Add New Professor",
            'add_new_item' => "Add New Professor",
            "edit_item" => "Edit Professor",
            "all_items" => "All Professors"


        ),
        "menu_icon" => "dashicons-welcome-learn-more"
    ));
    register_post_type('campus', array(
        "rewrite" => array("slug" => "campuses"),
        "capability_type" => "event",
        "map_meta_cap" => true,
        "supports" => array("title", "editor", "excerpt"),
        "has_archive" => true,
        "public" => true,
        "show_in_rest" => true,
        "labels" => array(
            "name" => "Campuses",
            "singular_name" => "Campus",
            'add_new' => "Add New Campus",
            'add_new_item' => "Add New Campus",
            "edit_item" => "Edit Campus",
            "all_items" => "All Campuses"


        ),
        "menu_icon" => "dashicons-location-alt"
    ));

    register_post_type('note', array(
        "capability_type" => "note",
        "map_meta_cap" => true,
        "supports" => array("title", "editor"),
        "public" => false,
        "show_in_rest" => true,
        "show_ui" => true,
        "labels" => array(
            "name" => "Notes",
            "singular_name" => "Note",
            'add_new' => "Add New Note",
            'add_new_item' => "Add New Note",
            "edit_item" => "Edit Note",
            "all_items" => "All Notes"


        ),
        "menu_icon" => "dashicons-welcome-write-blog"
    ));
    register_post_type('like', array(
        "supports" => array("title"),
        "public" => false,
        "show_ui" => true,
        "labels" => array(
            "name" => "Likes",
            "singular_name" => "Like",
            'add_new' => "Add New Like",
            'add_new_item' => "Add New Like",
            "edit_item" => "Edit Like",
            "all_items" => "All Likes"


        ),
        "menu_icon" => "dashicons-heart"
    ));
}

add_action("init", "universityCustomPosts");
