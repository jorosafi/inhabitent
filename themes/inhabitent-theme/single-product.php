<?php
/**
 * The template for displaying all single product posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>

      </header><!-- .entry-header -->

      <div class="entry-content">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <h3 class="product-price"><?php echo CFS () -> get('price'); ?></h3>
        <?php the_content(); ?>
        <?php
          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
            'after'  => '</div>',
          ) );
        ?>

        <div class="social-share">
          <a class="black-btn" href="<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i>Like</a>
				  <a class="black-btn" href="<?php the_permalink(); ?>"><i class="fab fa-twitter"></i>Tweet</a>
				  <a class="black-btn" href="<?php the_permalink(); ?>"><i class="fab fa-pinterest"></i>Pin</a>
			  </div>  
      </div><!-- .entry-content -->

      <footer class="entry-footer">
        <?php inhabitent_entry_footer(); ?>
      </footer><!-- .entry-footer -->
    </article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
