<?php
/**
 * Template Name: gallery-page
 */
?>
<?php get_header(); ?>


<h1 class="gallery_name"> <?php the_field('gallery_name') ?></h1>
<h1><?php the_field('name_gallery_page') ?></h1>

<div class="gallery_ask">
<?php the_field('gallery_ask') ?>
</div>

