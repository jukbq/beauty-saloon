<?php
/**
 * Template Name: Services
 */
?>
<?php get_header(); ?>

<section class="service_page">
    <div class="service_head" style="background-image: url(<?php echo get_field('service_page_head_img'); ?>);">
<div class="img-overlay"></div>
        <h1 class="big_titel">
            <?php the_field( 'service_titel' ); ?>
        </h1>
       
    </div>
    <div class="service_page_main">
         <div class="service_description">
            <?php the_field( 'service_description' ); ?>
        </div>
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
                        <img src="<?php the_field('foto_1');?>">
                    </div>
                    <div class="service_page_textblock">
                        <div class="service_page_block_title">
                            <?php the_field( 'service_page_block_title' ); ?>
                        </div>
                        <div class="service_page_block_text">
                            <?php the_field( 'service_page_block_description' ); ?>
                        </div> 
                   <!--      <a class="more_button" href="">Більше</a> -->
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