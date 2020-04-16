<?php
/*
 * Template Name: Project
 *
 */

get_header(); ?>
	<span id="previous">previous exhibition</span>
	
	<div class="site">
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
	</div>


<?php get_footer(); ?>
