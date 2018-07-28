<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) : ?>
          <div class="comments__wrapper">
            <?php comments_template() ?>
          </div>
        <?php endif;


				the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( '<', 'twentyseventeen' ) . '</span> <span class="nav-title">' . '%title</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span>' . '<span class="nav-title">%title</span>' . '<span aria-hidden="true" class="nav-subtitle">' . __( '>', 'twentyseventeen' )
        ) );

			endwhile; // End of the loop.
			?>



<?php get_footer();
