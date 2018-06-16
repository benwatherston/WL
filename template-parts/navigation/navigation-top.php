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
	<?php wp_nav_menu( array(
    'theme_location' => 'top',
    'container' => false
	) ); ?>
</nav>
