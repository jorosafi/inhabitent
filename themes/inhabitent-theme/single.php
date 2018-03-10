<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="social-share">
				<a class="black-btn" href="<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i> <p>Like</p></a>
				<a class="black-btn" href="<?php the_permalink(); ?>"><i class="fab fa-twitter"></i> <p>Tweet</p> </a>
				<a class="black-btn" href="<?php the_permalink(); ?>"><i class="fab fa-pinterest"></i> <p>Pin</p> </a>
			</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				
			?>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
