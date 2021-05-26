<?php
/**
 * Template Name: gallery
 */
?>
<?php get_header(); ?>

    




<div class="gallery_titel"><?php the_field( 'gallery_titel' ); ?></div>

<div class="gallery_album">
  <?php
     echo do_shortcode('[foogallery-album id="421"]');
           ?>
</div>
   
   

<?php get_footer(); ?>

