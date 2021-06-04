<?php
/**
 * Template Name: gallery
 */
?>
<?php get_header(); ?>

    


<div class="gallery_page">

<div class="big_titel"><?php the_field( 'gallery_titel' ); ?></div>

                <?php
echo do_shortcode('[foogallery-album id="144"]');
?>

   
   </div>

<?php get_footer(); ?>

