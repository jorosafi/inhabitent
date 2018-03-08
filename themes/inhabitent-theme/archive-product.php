<?php
/**
 * The template for displaying the product archive page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"> Shop Stuff</h1>

				<div class="shop-stuff">
					<?php
					$terms = get_terms(array(
						'taxonomy'=>'product_type',
						'hide_empty'=>0,
						)
					);

					if (!empty ($terms)) : ?>

					<div class="product-type-blocks">
						<?php foreach ($terms as $term) : ?>
						<div class="product-type-block-wrapper">
							
							<p>
								<a href="<?php echo get_term_link($term); ?>" class="btn"><?php echo $term->name; ?></a>
							</p>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div><!-- Shop Stuff  -->


			</header><!-- .page-header -->

			<div class="product-list">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<a href="<?php echo get_permalink(); ?>" rel="bookmark">
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>

						<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->
					</a>

					<div class="entry-content">
						<h2 class="entry-title"> <?php echo the_title(); ?> </h2>

						<!-- this inserts price into the apge using the CFS plugin -->
						<h3 class="product-price"><?php echo CFS () -> get('price'); ?></h3>



					</div><!-- .entry-content -->

				</article><!-- #post-## -->

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
		
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
