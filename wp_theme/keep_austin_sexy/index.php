<?php
get_header();
?>

<main class="main">
    <section class="banner_wraper container">
        <div class="banner_img" style="background-image:url('<?php the_field('banner_img'); ?>');">
        </div>
        <div class="banner_text_block">
            <h1 class="banner_title text_24"><?php the_field('banner_title'); ?> <span class="banner_title_second_part text_20"><?php the_field('banner_title_second_part'); ?></span></h1>
            <p class="banner_text text_16"><?php the_field('banner_text'); ?></p>
            <div class="banner_contact_form">
                <?php echo do_shortcode('[contact-form-7 id="8" title="Subscription form (banner)"]') ?>
            </div>
        </div>
    </section>
    <section class="philosophy container" id="philosophy">
        <h2 class="philosophy_title"><?php the_field('philosophy_title'); ?></h2>
        <div class="philosophy_content">
            <div class="parent_img philosophy_content_img">
                <img src="<?php the_field('philosophy_content_img'); ?>" width="375" height="197" alt="<?php the_field('philosophy_title'); ?>">
            </div>
            <div class="philosophy_post philosophy_post_odd">
                <div class="philosophy_post_text philosophy_post_text_odd">
                    <h3><?php the_field('philosophy_title_1'); ?></h3>
                    <p class="text_16"><?php the_field('philosophy_description_1'); ?></p>
                </div>
                <div class="philosophy_img philosophy_img_odd">
                    <img src="<?php the_field('philosophy_post_image_1'); ?>" width="335" height="246" alt="<?php the_field('philosophy_title_1'); ?>">
                </div>
            </div>
            <div class="philosophy_post philosophy_post_even">
                <div class="philosophy_post_text philosophy_post_text_even">
                    <h3><?php the_field('philosophy_title_2'); ?></h3>
                    <p class="text_16"><?php the_field('philosophy_description_2'); ?></p>
                </div>
                <div class="philosophy_img philosophy_img_even">
                    <img src="<?php the_field('philosophy_post_image_2'); ?>" width="335" height="246" alt="<?php the_field('philosophy_title_2'); ?>">
                </div>
            </div>
        </div>
    </section>
    <section class="contact_form_middle_wraper contact_form_wraper">
        <div class="contact_form_middle_img" style="background-image:url('<?php the_field('contact_form_middle_image'); ?>');"></div>
        <div class="empty"></div>
        <div class="absolute">
            <div class="contact_form_middle_wraper_text contact_form_wraper_text">
                <h2 class="contact_form_middle_wraper_text_title contact_form_wraper_text_title"><?php the_field('contact_form_middle_title'); ?></h2>
                <p class="contact_form_middle_wraper_text_desc text_16"><?php the_field('contact_form_middle_desc'); ?></p>
                <div class="contact_form contact_form_middle_form">
                    <?php echo do_shortcode('[contact-form-7 id="109" title="Subscription form (middle)"]') ?>
                </div>
            </div>
        </div>
    </section>
    <section class="about_us container" id="about_us">
        <h2 class="about_us_title"><?php the_field('about_us_title'); ?></h2>
        <div class="about_us_post_wraper">
            <div class="about_us_post about_us_post_odd">
                <div class="about_us_text_block">
                    <h3 class="about_us_text_title"><?php the_field('about_us_title_1'); ?></h3>
                    <p class="about_us_desc text_16"><?php the_field('about_us_decription_1'); ?></p>           
                </div>
                <div class="about_us_post_img parent_img">
                    <img src="<?php the_field('about_us_image_1'); ?>" width="335" height="246" alt="<?php the_field('about_us_title_1'); ?>">                        
                </div>
            </div>
            <div class="about_us_post about_us_post_even">
                <div class="about_us_text_block about_us_text_block_even">
                    <h3 class="about_us_text_title"><?php the_field('about_us_title_2'); ?></h3>
                    <p class="about_us_desc text_16"><?php the_field('about_us_decription_2'); ?></p>           
                </div>
                <div class="about_us_post_img about_us_post_img_even parent_img">
                    <img src="<?php the_field('about_us_image_2'); ?>" width="335" height="246" alt="<?php the_field('about_us_title_2'); ?>">                        
                </div>
            </div>
        </div>
    </section>
    <section class="showcase container" id="showcase">
        <h2 class="showcase_title"><?php the_field('showcase_title'); ?></h2>
        <div class="showcase_post">
            <div class="showcase_post_text">
                <h3 class="showcase_post_text_title"><?php the_field('showcase_post_title'); ?></h3>
                <p class="showcase_post_text_descr text_16"><?php the_field('showcase_post_descr'); ?></p>
            </div>
        </div>
        <div class="owl-carousel">
            <div class="slide_1 carousel__slide">
                <img src="<?php the_field('showcase_image_1'); ?>" width="335" height="658" alt="popular_gallery_1"/>
            </div>
            <div class="slide_2 carousel__slide">
                <img src="<?php the_field('showcase_image_2'); ?>" width="335" height="658" alt="popular_gallery_2"/>
            </div>
            <div class="slide_3 carousel__slide">
                <img src="<?php the_field('showcase_image_3'); ?>" width="335" height="658" alt="popular_gallery_3"/>
            </div>
            <div class="slide_4 carousel__slide">
                <img src="<?php the_field('showcase_image_4'); ?>" width="335" height="658" alt="popular_gallery_4"/>
            </div>
        </div>
        <div class="showcase_post_2">
            <div class="left_block_showcase">
                <div class="showcase_post_desktop">
                    <h3 class="showcase_post_text_title"><?php the_field('showcase_post_title'); ?></h3>
                    <p class="showcase_post_text_descr text_16"><?php the_field('showcase_post_descr'); ?> </p>
                </div>
                <div class="slide_1">
                    <img src="<?php the_field('showcase_image_1'); ?>" alt="popular_gallery_1"/>
                </div>
                <div class="slide_2">
                    <img src="<?php the_field('showcase_image_2'); ?>" alt="popular_gallery_2"/>
                </div>
            </div>
            <div class="right_block_showcase">
                <div class="slide_3">
                    <img src="<?php the_field('showcase_image_3'); ?>" alt="popular_gallery_3"/>
                </div>
                <div class="slide_4">
                    <img src="<?php the_field('showcase_image_4'); ?>" alt="popular_gallery_4"/>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_form_bottom_wraper contact_form_wraper">
        <div class="contact_form_bottom_img" style="background-image:url('<?php the_field('contact_form_bottom_image'); ?>');"></div>
        <div class=""></div>
        <div class="absolute">
            <div class="contact_form_bottom_wraper_text contact_form_wraper_text">
                <h2 class="contact_form_bottom_wraper_text_title contact_form_wraper_text_title"><?php the_field('contact_form_bottom_title'); ?></h2>
                <p class="contact_form_bottom_wraper_text_desc text_16"><?php the_field('contact_form_bottom_desc'); ?></p>
                <div class="contact_form" action="#">
                    <?php echo do_shortcode('[contact-form-7 id="115" title="Subscription form (bottom)"]') ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
