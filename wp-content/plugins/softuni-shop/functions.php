<?php

/**
 * This funtion update the shop post meta for the views count
 */
function softuni_update_shop_views_count( $shop_id ) {
    if( empty( $shop_id ) ) {
        return;
    }


    $view_count = get_post_meta( $shop_id, 'views_count', true );
    if( !empty( $view_count ) ) {
       $view_count = $view_count + 1;
    } else {
        $view_count = 1;
    }
    update_post_meta( $shop_id, 'views_count', $view_count );
}