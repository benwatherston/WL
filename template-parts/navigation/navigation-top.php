<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Wandering_Liverpool
 * @since 1.0
 * @version 1.2
 */

?>
<nav>
  <span class="navigation__close">x</span>
	<?php wp_nav_menu( array(
    'theme_location' => 'top',
    'container' => false
	) ); ?>
</nav>
