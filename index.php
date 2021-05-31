<?php get_header(); ?>


<main>

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

        <div class="about_us_block">
            <h3 class="block_title">
                             <?php the_field('about_us_title') ?>
</h3>
            <div class="about_us_text_foto">
                <div class="about_us_text">
                    <?php the_field('about_us_text') ?>
                </div>
                <img src="<?php the_field('about_foto') ?>">
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