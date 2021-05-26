<?php get_header(); ?>
<!----------------Social network-------------------->
<main>
    <section class="social_networks">

        <a class="fb" href="<?php echo get_theme_mod('facebook'); ?>" target="_blank">
            <div class="sn_box facebook">
                <p class="open_sn_bpx"><?php echo get_theme_mod('facebook'); ?></p>
                <i class="fab fa-facebook-f"></i>
            </div>
        </a>
        <a class="insta" href="<?php echo get_theme_mod('instagrann'); ?>" target="_blank">
            <div class="sn_box instagrann">
                <p class="open_sn_bpx"><?php echo get_theme_mod('instagrann'); ?></p>
                <i class="fab fa-instagram"></i>
            </div>
        </a>
        <a class="mas" href="https://www.messenger.com/t/<?php echo get_theme_mod('messenger'); ?>" target="_blank">
            <div class="sn_box messenger">
                <p class="open_sn_bpx"><?php echo get_theme_mod('messenger'); ?></p>
                <i class="fab fa-facebook-messenger"></i>
            </div>
        </a>
        <a class="vib" href="viber://chat?number=+<?php echo get_theme_mod('viber'); ?>">
            <div class="sn_box viber">
                <p class="open_sn_bpx"><?php echo get_theme_mod('viber'); ?></p>
                <i class="fab fa-viber"></i>
            </div>
        </a>

        <a class="tel_g" href="tg://resolve?domain=<?php echo get_theme_mod('telegram'); ?>">
            <div class="sn_box telegram">
                <p class="open_sn_bpx"><?php echo get_theme_mod('telegram'); ?></p>
                <i class="fab fa-telegram-plane"></i>
            </div>
        </a>
        <a lass="wa" href="whatsapp://send?phone=+<?php echo get_theme_mod('whatsapp') ?>">
            <div class="sn_box whatsapp">
                <p class="open_sn_bpx"><?php echo get_theme_mod('whatsapp') ?></p>
                <i class="fab fa-whatsapp"></i>
            </div>
        </a>
        <a class="yt" href="<?php echo get_theme_mod('youtube') ?>" target=" _blank">
            <div class="sn_box youtube">
                <p class="open_sn_bpx"><?php echo get_theme_mod('youtube') ?></p>
                <i class="fab fa-youtube"></i>
            </div>
        </a>
    </section>

    <!----------------Slider-------------------->

    <div class="slider">
        <?php
        echo do_shortcode('[smartslider3 slider="2"]');
        ?>

    </div>
    <!-----------------Welcome block---------------->
    <section class="about_us">
        <div class="top_left_img au_img left_img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/top-left.png" alt="">
        </div>
        <div class="bottom_right_img au_img right_img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/bottom-right.png" alt="">
        </div>

        <div class="abour_us_block">
            <div class="abour_us_heading">
                <?php the_field('abour_us_heading') ?>
            </div>

            <div class="abour_us_text">
                <?php the_field('abour_us_text') ?>
            </div>

            <div class="abour_foto foto">
                <img src="<?php the_field('abour_foto') ?>">
            </div>




        </div>

    </section>
    <!---------------services---------------->

    <section id="services" class="services">

        <div class="bottom_left_img au_img left_img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/bottom-left.png" alt="">
        </div>
        <div class="top_right_img au_img right_img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/top-right.png" alt="">
        </div>

        <div class="conteiner">
            <?php
            $featured_posts = get_field('conteiner');
            if ($featured_posts) : ?>
            <ul class="conteiner">
                <?php foreach ($featured_posts as $post) :

                        setup_postdata($post); ?>
                <li class="service_box opacity">
                    <a href="<?php the_field('serv_page') ?>">
                        <div class="icon">
                            <div class="icon_service">
                                <img src="<?php the_field('icon_service_img'); ?>">
                            </div>
                            <div class="frame_icon"></div>
                        </div>
                        <div class="text_box">

                            <p class="text">
                                <?php the_field('text_box_t1'); ?>
                            </p>
                        </div>

                    </a>

                </li>
                <?php endforeach; ?>
            </ul>
            <?php
                wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </section>

    <!--------------------------info box------------------------->

    <section class="info_box opacity">

        <div class="top_left_img au_img left_img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/top-left.png" alt="">
        </div>
        <a class="gallery_page" href="<?php the_field('gallery_page') ?>">
            <h1 class="gallery_name"> <?php the_field('gallery_name') ?></h1>
        </a>
        <div class="gallery">
            <?php
            echo do_shortcode('[foogallery id="589"]');
            ?>

        </div>


    </section>

    <!-----------------------brands--------------------->
    <section class="brends">
        <?php
        echo do_shortcode('[slick_logo_carousel id="810"]');
        ?>
    </section>


</main>

<?php get_footer(); ?>