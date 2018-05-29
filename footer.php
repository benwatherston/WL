<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

</main>
		<footer class="footer">
      <div class="footer__social">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'social',
            'menu_class'     => 'social-links-menu',
            'container'      => false,
            'depth'          => 1,
            'link_before'    => '<span class="screen-reader-text">',
            'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
          ) );
        ?>
      </div>
      <div class="footer__info">

        <div class="footer__copyright">
          <p>&copy; Copyright Wandering Liverpool <?php echo date('Y'); ?></p>
        </div>
        <div class="footer__ben">
          <p>Website Developed by <a target="_blank" href="https://benwatherston.co.uk">Ben Watherston</a></p>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

    <div class="overlay"></div>


</body>
</html>
