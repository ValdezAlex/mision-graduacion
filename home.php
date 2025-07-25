<?php
/**
 * The template for displaying the blog.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alt_Custom_Theme
 */

get_header();
?>

<h1 class="page-title"><?php single_post_title(); ?></h1>

<section id="posts">
<?php

while ( have_posts() ) {
	the_post();

	alt_custom_theme_print_post();

}

the_posts_navigation();

?>
</section>

<?php

get_sidebar();
get_footer();
