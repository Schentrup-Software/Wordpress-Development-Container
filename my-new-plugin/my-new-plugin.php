<?php
/**
* Plugin Name: My New Plugin
* Plugin URI: https://www.dreamhost.com/blog/how-to-create-your-first-wordpress-plugin/
* Description: Copied from the above blog as an example
* Version: 1.0
* Author: Ellice
* Author URI: https://www.dreamhost.com/blog/author/ellice/
**/

function dh_modify_read_more_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';

}

add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );
