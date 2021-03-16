<?php
/**
 * Return menu on home page
 */

function load_menu_on_home_page($name) {
    $menu_name = $name;

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    
        $menu_items = wp_get_nav_menu_items($menu->term_id);
    
        $menu_list = '<ul class="intro__nav">';
    
        foreach ( (array) $menu_items as $key => $menu_item ) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= '<li class="intro__nav-item"><a class="intro__nav-link" href="' . $url . '">' . $title . '</a></li>';
        }
        $menu_list .= '</ul>';
    } else {
        $menu_list = '';
    }

    return $menu_list;
}