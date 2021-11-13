<?php

?>

<footer class="footer">
	<div class="fixed fixed_none">
		<div class="window" style="background-image:url('<?php the_field('pop_up_image'); ?>)";>
			<div class="window_image"></div>
			<div class="window_text">
				<p class="first_line_window"><?php the_field('pop_up_title'); ?></p>
				<p class="text_16"><?php the_field('pop_up_description'); ?></p>
			</div>
			<button class="close"></button>
		</div>
	</div>

	<div class="container footer_container">
		<div class="logo" href="#">
			<?php the_custom_logo(); ?>
		</div>
		<div class="contacts">
			<div class="email_wraper">
				<p class="email_p text_16"><?php the_field('email_block_headling'); ?></p>
				<a class="email_link text_16" target="_blank" rel="noopener noreferrer" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
			</div>
			<div class="address_wraper">
				<p class="address_p text_16"><?php the_field('address_block_headling'); ?></p>
				<p class="address text_16"><?php the_field('address'); ?></p>
			</div>
		</div>
		<div class="social_menu social_menu_footer">
			<a class="link_social_menu instagram" style="background-image:url('<?php the_field('instagram_image'); ?>)" target="_blank" rel="noopener noreferrer" 
			   href="<?php the_field('instagram'); ?>"></a>
			<a class="link_social_menu twitter" style="background-image:url('<?php the_field('twitter_image'); ?>)" target="_blank" rel="noopener noreferrer" 
			   href="<?php the_field('twitter'); ?>"></a>
			<a class="link_social_menu facebook" style="background-image:url('<?php the_field('facebook_image'); ?>)" target="_blank" rel="noopener noreferrer" 
			   href="<?php the_field('facebook'); ?>"></a>
		</div>
		<p class="copywrite text_16"> &copy; <?php the_field('copywrite'); ?></p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
