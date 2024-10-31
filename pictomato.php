<?PHP

/**
 * @package Pictomato
 * @author Baptiste Servais
 * @version 1.0
 */
/*
Plugin Name: Pictomato
Plugin URI: http://www.pictomato.com
Description: Ce plugin pour Wordpress permet d'afficher les avatars Pictomato des membres dans les commentaires d'un billet.
Author: Baptiste Servais
Version: 1.0
Author URI: http://www.pictomato.com

Copyright 2009  Baptiste Servais  (email : baptiste@ateliertelescopique.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/


function pictomato()
  {
	return "Pictomato";
  }

function pictomato_avatar( $size="60" , $class="pictomato_avatar" )
  {
	global $comment;

	$email	= $comment->comment_author_email;
	$img 		= "<img src='http://www.pictomato.com/ext/avatar/".md5( $email )."/".$size."' class='avatar photo ".$class."' alt='' />";

	echo $img;
  }

?>
