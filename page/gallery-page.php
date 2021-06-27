<?php
/**
 * Template Name: gallery-page
 */
?>
<?php get_header(); ?>


<div class="gallery-page">
    <div class="foto_block">

        <div class="big_titel"><?php the_field( 'gallery_page_titel' ); ?></div>

        <a class="back_hone" href="
        <?php bloginfo('url')?>/index.php#foto_galery"><i class="fas fa-chevron-circle-left"> Назад</i></a>

        <div class="gallery">
            <?php
         the_field( 'gallery_shortcode' ); 
         ?></div>
       

    </div>

</div>

<?php get_footer(); ?>