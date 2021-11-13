<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php the_field('meta_description'); ?>"/>
        <meta name="keywords" content="<?php the_field('meta_keywords'); ?>"/>
        <meta name="robots" content="<?php the_field('meta_robots'); ?>">
        <link rel="canonical" href="<?php echo get_home_url()?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#72c1e1">
        <meta name="theme-color" content="#ffffff">
        <?php 
            wp_head();
        ?>
    </head>
    <body>
        <header class="header">
            <div class="logo_mobile_header">
                <?php the_custom_logo(); ?>
            </div>
            <div class="burger_menu_wraper">
                <input type="checkbox" id="checkbox" class="burger_checkbox" />
                <label for="checkbox" class="burger_button"></label>
                <div class="burger_menu">
                    <div class="mobile_logo" href="#">
                        <?php the_custom_logo(); ?>
                    </div>
                    <nav class="navigation">
                        <a href="#philosophy" class="burger_menu_link text_18"><?php the_field('philosophy_title'); ?></a>
                        <a href="#about_us" class="burger_menu_link text_18"><?php the_field('about_us_title'); ?></a>
                        <a href="#showcase" class="burger_menu_link text_18"><?php the_field('showcase_title'); ?></a>
                    </nav>
					<div class="social_menu social_menu_burger">
						<a class="link_social_menu instagram" style="background-image:url('<?php the_field('instagram_image'); ?>)" target="_blank" rel="noopener noreferrer" 
						   href="<?php the_field('instagram'); ?>"></a>
						<a class="link_social_menu twitter" style="background-image:url('<?php the_field('twitter_image'); ?>)" target="_blank" rel="noopener noreferrer" 
						   href="<?php the_field('twitter'); ?>"></a>
						<a class="link_social_menu facebook" style="background-image:url('<?php the_field('facebook_image'); ?>)" target="_blank" rel="noopener noreferrer" 
						   href="<?php the_field('facebook'); ?>"></a>
					</div>
                </div>
            </div>
        </header>