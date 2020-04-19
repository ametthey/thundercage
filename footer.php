	<footer>
		<div class="footer_links">
		<a href="<?php echo get_field('adresse_mail_link', 'option'); ?>" target="_blank"><?php echo get_field('adresse_mail', 'option'); ?></a>
			<a href="<?php echo get_field('adresse_link', 'option'); ?>" target="_blank"><?php echo get_field('adresse', 'option'); ?></a>
		</div>
		<p class="signature">website by <a href="mailto:albin@perimetre.studio">Albin Metthey</a></p>
		<img src="<?php echo get_field('logo', 'option'); ?>" >
			
	</footer>

	<?php wp_footer(); ?>


	</body>
</html>
