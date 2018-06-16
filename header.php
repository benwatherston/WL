<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Wandering_Liverpool
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ffa288">
  <meta name="msapplication-TileColor" content="#ffa288">
  <meta name="theme-color" content="#ffa288">
  <?php wp_head(); ?>
</head>

<body>
	<header class="header">

    <div class="logo">
      <a href="/">Wandering Liverpool</a>
    </div>

    <span class="navigation__open">|||</span>
    <span class="navigation__close">x</span>

    <?php if ( has_nav_menu( 'top' ) ) : ?>
    <div class="main__navigation">
      <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
    </div>
    <?php endif; ?>

	</header>

	<?php
	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
  if ( ( is_single() || ( is_page() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
    if(twentyseventeen_is_frontpage()){
      echo  '<div class="hero hero__homepage">';
    } else {
      echo  '<div class="hero">';
    }
      echo  '<div class="hero__image">';
		    echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		  echo '</div>';
		echo '</div>';
	endif;

	?>

	<main>
