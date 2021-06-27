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
        <div class="body_img_left top">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/top-left.png" alt="">
        </div>
        <div class="body_img_right bottom">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/bottom-right.png" alt="">
        </div>

        <div class="about_us_block">
            <h3 class="block_title au_title">
                <?php the_field('about_us_title') ?>
            </h3>
            <div class="about_us_text_foto">
                <div class="about_us_text">
                    <?php the_field('about_us_text') ?>
                </div>
               <div class="about_foto">
                    <img src="<?php the_field('about_foto') ?>">
                </div>
            </div>
        </div>

    </section>
    <!---------------services---------------->

    <section id="services" class="services">
        <div class="body_img_left bottom">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/top-left.png" alt="">
        </div>
        <div class="body_img_right top">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/bottom-right.png" alt="">
        </div>
        <h3 class="block_title">
            <?php the_field('service_title') ?>
        </h3>

        <div class="service_block">
            <?php
            $featured_posts = get_field('service_block');
            if ($featured_posts) :
             ?>
            <ul class="service_elenebt">
                <?php foreach ($featured_posts as $post) :
                        setup_postdata($post); 
                        ?>
                <li class="service_box">
                    <a href="<?php the_field('serv_page')?>">
                        <div class="icon">
                            <div class="icon_service">
                                <img src="<?php the_field('icon_service_img');?>">
                            </div>
                            <div class="frame_icon"></div>
                        </div>
                        <div class="block_title">
                            <?php the_field('service_name'); ?>
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

    <!--------------------------foto_galery------------------------>

    <section id="foto_galery" class="foto_galery">

        <div class="body_img_left top">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/top-left.png" alt="">
        </div>
        <div class="body_img_right bottom">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/bottom-right.png" alt="">
        </div>

        <h3 class="block_title">
            <?php the_field('foto_galery_title') ?>
        </h3>
        <div class="gallery_block">
            <?php
            $featured_posts = get_field('gallery_block');
            if ($featured_posts) :
             ?>
            <ul class="gallery_elenebt">
                <?php foreach ($featured_posts as $post) :
                        setup_postdata($post); 
                        ?>
                <li class="gallery_box">
                    <a href="<?php the_field('gallery_page')?>">
                        <div class="icon">
                            <div class="icon_gallery">
                                <img src="<?php the_field('icon_gallery_img');?>">
                            </div>
                            <div class="frame_icon"></div>
                        </div>
                        <div class="block_title">
                            <?php the_field('gallery_name'); ?>
                        </div>

                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php
                wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
        </div>

        </div>


    </section>

    <!-----------------------brands--------------------->
    <section class="brends">
        <div class="body_img_right top">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/bottom-right.png" alt="">
        </div>
        <?php echo do_shortcode('[slick_logo_carousel id="480"]'); ?>
    </section>



</main>

<?php get_footer(); ?>