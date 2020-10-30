<?php
/*
 * Template Name: Project
 *
 */

get_header(); ?>
	<span id="previous">previous exhibitions</span>
	<div class="site project transition-fade" id="swup">
		<p><?php echo get_field('project_exhibition_title'); ?></p>

		<div class="project__gallery">

			<?php
				$images = get_field('project_exhibition_gallery');
				$size	= 'gallery';

				if ( $images ): ?>

				<?php foreach( $images as $image_id ): ?>
					<?php echo wp_get_attachment_image( $image_id, $size, array( 'class' => 'lazyload' ) ); ?>
				<?php endforeach; ?>



			<?php endif; ?>

		</div>

        <div class="container__project__video">
            <div class="project__video">
                <?php the_field( 'video_of_the_exhibition' ); ?>
            </div>
        </div>
	</div>

	<div class="exhibitions">
		<span id="close">close</span>

		<div class="exhibitions__list">
			<?php
				/*
				 * wp query for the custom post type : exhibition
				 * https://www.wpbeginner.com/wp-tutorials/how-to-display-all-your-wordpress-posts-on-one-page/ */
			$exhibition = new WP_Query(array('post_type'=>'exhibition', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
			<?php if ( $exhibition->have_posts() ) : ?>
				<?php while ( $exhibition->have_posts() ) : $exhibition->the_post(); ?>

						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>


	</div>


<?php get_footer(); ?>
