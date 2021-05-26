<?php
/**
 * Template Name: Альбоми галереї
 */
?>
<?php get_header(); ?>

    




<div class="gallery_titel"><?php the_field( 'gallery_titel' ); ?></div>

<div class="gallery_album">
    <?php the_field( 'gallery_album' ); ?>
</div>

<?php get_footer(); ?>

