<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
	/*	the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		); */
		?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
			
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

	

	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
