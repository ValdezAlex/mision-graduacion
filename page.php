<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alt_Custom_Theme
 */

get_header();


/* 
* Display page default title
*/
/* the_title( '<h1 class="entry-title">', '</h1>' ); */

the_content();

get_footer();
