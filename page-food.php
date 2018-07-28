<?php
/**
 * Template Name: Food
 */

get_header(); ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<div class="page__overview">
  <?php the_content(); ?>
</div>

<div class="panel__wrap">



<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';

$args = array(
	'post_type' => 'post',
  'post_status' => 'publish',
  'paged' => $paged,
	'category_name' => 'Food',
	'posts_per_page' => 9,
);




// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {

    

    while ( $query->have_posts() ) {
        $query->the_post();
        ?>
        <a href="<?php echo get_permalink( $post->ID ); ?>" class="panel__item">
        <div class="panel__img--wrap">
          <?php echo get_the_post_thumbnail( $post->ID, 'medium', array( 'class' => 'panel__img' ) ); ?>
        </div>
        <div class="panel__content--wrap"><div class="panel__content"><?php the_title(); ?></div></div>
      </a>

<?php
    }
    ?>

    </div>
  <?php
    previous_posts_link( '«' );

    next_posts_link( '»', $query->max_num_pages );

} else {
    // no posts found
    echo '<h1 class="page-title screen-reader-text">No Posts Found</h1>';
}

// Restore original Post Data
wp_reset_postdata();

?>



<?php get_footer();




