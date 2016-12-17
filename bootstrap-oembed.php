<?php
/*
	Plugin Name: Bootstrap oEmbed
	Description: Modifies oEmbed filter to style to Bootstrap.
	Author: Zahid Mahmood
	Version: 1.0
	Author URI: http://www.zahidmahmood.co.uk
*/

function bo_youtube_oembed($html) {
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html); // strip width and/or height from attrs
    return '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>'; // wrap bootstrap 3 div
}
add_filter('embed_oembed_html', 'bo_youtube_oembed', 10, 1);