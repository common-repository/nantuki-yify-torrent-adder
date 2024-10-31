<?php
/*
Plugin Name: Nantuki YiFy Torrent Adder
Plugin URI: http://wordpress.org
Description: This plugin helps to add movie information (from IMDB) in wordpress post using shortcode [yts id="ytsmovieid"].
Version: 1.0
Author: Nazmul Alam
Author URI: https://facebook.com/nazmul.alam756
Released under the GNU General Public License (GPL)
http://www.gnu.org/licenses/gpl.txt
*/

include ("getid.php") ;
include ("getimdb.php");
include ("yifyset.php");
function nantuki_yts($ni){
extract(shortcode_atts( array(
		'id' => null,
	), $ni ));
	if(empty($id))
	{
	return '<b>No ID passed<b>';
	}
	get_id($id);
	}

add_shortcode('yts','nantuki_yts');


?>
