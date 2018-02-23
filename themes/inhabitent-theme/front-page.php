<?php
/**
 * The front page for the theme.
 *
 * @package Inhabitent-Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="home-hero">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo/inhabitent-logo-full.svg" alt="">
			</div>

			<div class="shop-stuff">
				<h2>Shop Stuff</h2>
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
						<img src="<?php echo get_template_directory_uri().'/images/'.$term->slug;?>.svg" alt="<?php echo $term->name;?>"/>
						<p><?php echo $term->description; ?></p>
						<p>
							<a href="<?php echo get_term_link($term); ?>" class="btn"><?php echo $term->name; ?> Stuff</a>
						</p>
					</div>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div><!-- Shop Stuff  -->

			<div class="inhabitent-journal">
				<?php
				// The Query
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 3
				);
				$journal = get_posts( $args );

				// The Loop
				if ( ! empty ($journal) ) :?>

					<h2>Inhabitent journal</h2>
					<ul>
						<?php foreach ($journal as $post) : setup_postdata ($post); ?>
							<li>
								<?php if (has_post_thumbnail()) : ?>
									<div class="thumbnail-wrapper">
										<?php the_post_thumbnail ('large'); ?>
									</div>
								<?php endif; ?>
								<div class="entry-meta">
									<div><?php red_starter_posted_on(); ?> / <span><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span></div>
								
									<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

									<button><a class="black-btn" href="<?php the_permalink(); ?>">Read Entry</a></button>
								</div>

							</li>
						<?php endforeach;
						wp_reset_postdata(); ?>
					</ul>
				<?php endif?>
			</div> <!-- Inhabitent Journal -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>