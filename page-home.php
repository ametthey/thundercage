<?php 
/*
 * Template Name: Home
 *
 */

get_header(); ?>

	<div id="swup" class="site transition-fade">

		<p>Thundercage is a cycle of exhibitions in Aubervilliers in the 
		Paris region. Located outside, this “artist-run Nospace” 
		proposes duet exhibitions in the form of duels show.</p>

		<div class="container__next__exhibition">
			<span class="title">next exhibition</span>
			<p><?php the_field('next_exhibition_name'); ?></p>
		</div>

		<div class="container__previous__exhibition">
			<span class="title">previous exhibition</span>

			<?php if( have_rows('previous_exhibition') ): ?>

				<?php while( have_rows('previous_exhibition') ): the_row();
					
					$link = get_sub_field('previous_exhibition_link');
					$name = get_sub_field('previous_exhibition_name');
				 ?>

					 <a href="<?php echo $link; ?>">
						 <p><?php echo $name; ?></p>
					</a>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
