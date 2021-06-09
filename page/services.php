<?php
/**
 * Template Name: Services
 */
?>
<?php get_header(); ?>




<section class="service_page">
    <div class="service_head">
        <h1 class="big_tite">
            <?php the_field( 'service_titel' ); ?>
        </h1>

        <div class="service_description">
            <?php the_field( 'service_description' ); ?>
        </div>
    </div>
    <div class="service_page_main">
        <div class="service_body">
            <?php
            $featured_posts = get_field('service_body');
            if ($featured_posts) :
             ?>
            <ul class="service_page_elenebt">
                <?php foreach ($featured_posts as $post) :
                        setup_postdata($post); 
                        ?>
                <li class="service_page_box">
                    <div class="service_page_fotoblock">
                        <div class="foto">
                            <img src="<?php the_field('foto_1');?>">
                        </div>
                        <div class="foto">
                            <img src="<?php the_field('foto_2');?>">
                        </div>
                        <div class="foto">
                            <img src="<?php the_field('foto_3');?>">
                        </div>
                    </div>
                    <div class="service_page_textblock">
                        <div class="block_title">
                            <?php the_field( 'service_page_block_title' ); ?>
                        </div>
                        <p>
                            <?php the_field( 'service_page_block_description' ); ?>
                        </p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

    </div>

</section>

<?php get_footer(); ?>