<?php

/**
 * This fixes the blank link when we ask to reset user password
 * 
 */
function remove_angle_brackets_around_url($string) {
    return preg_replace('/<(' . preg_quote(network_site_url(), '/') . '[^>]*)>/', '\1', $string);
}
// Apply the remove_angle_brackets_around_url() function on the "retrieve password" message:
add_filter('retrieve_password_message', 'remove_angle_brackets_around_url', 99, 1);

?>