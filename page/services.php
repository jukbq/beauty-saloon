<?php
/**
 * Template Name: Services
 */
?>
<?php get_header(); ?>




<div class="name_service">
    <p class="name_servicetext">
        <?php the_field( 'name_servicetext' ); ?>
    </p>



    <div class="description_service">
        <div class="description_service_title">
            <?php the_field( 'description_service_title' ); ?>
        </div>
        <div class="description_text">
            <?php the_field( 'description_service_text' ); ?>
        </div>
    </div>
</div>

<!--------------------services---------------------->
<div class="service_block">
    <div class="service">
        <?php
                        $featured_posts = get_field('service');
                        if( $featured_posts ): ?>
        <ul class="description_ul">
            <?php foreach( $featured_posts as $post ): 

                        setup_postdata($post); ?>
            <li class="description_li">
                <div class="description_block">
                    <h1 class="service_title"><?php the_field( 'service_title' ); ?></h1>
                    <img class="service_img" src="<?php the_field( 'service_img' ); ?>">
                    <div class="description">
                        <?php the_field( 'description' ); ?>
                    </div>
                    <div class="social">
                        <?php echo do_shortcode('[Sassy_Social_Share]');?>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php 
                            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>

<div class="service_box_v2l">
    <div class="foto_block_left">
        <div class="sbf fbl_1">Foto 1</div>
        <div class="sbf fbl_2">Foto 2</div>
        <div class="sbf fbl_3">Foto 3</div>
    </div>
    <div class="text_block_left">
        <h1 class="service_title">НАЗВА ПОСЛУГИ ТУТ</h1>
        <div class="text_box_left">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Hic ducimus voluptatum veritatis aperiam unde fugiat laborum
                ad, soluta sit suscipit eaque. Laudantium quas temporibus
                provident asperiores eligendi quia tempore quidem, assumenda
                optio. Blanditiis recusandae asperiores tenetur cumque veritatis
                inventore sed dolore quos laborum optio odio, modi, ducimus
                exercitationem, aut adipisci.</p>
        </div>
          <div class="social">
                        <?php echo do_shortcode('[Sassy_Social_Share]');?>
                    </div>
    </div>

</div>
<div class="service_box_v2l">
    <div class="foto_block_left">
        <div class="sbf fbl_1">Foto 1</div>
        <div class="sbf fbl_2">Foto 2</div>
        <div class="sbf fbl_3">Foto 3</div>
    </div>
    <div class="text_block_left">
        <h1 class="service_title">НАЗВА ПОСЛУГИ ТУТ</h1>
        <div class="text_box_left">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Hic ducimus voluptatum veritatis aperiam unde fugiat laborum
                ad, soluta sit suscipit eaque. Laudantium quas temporibus
                provident asperiores eligendi quia tempore quidem, assumenda
                optio. Blanditiis recusandae asperiores tenetur cumque veritatis
                inventore sed dolore quos laborum optio odio, modi, ducimus
                exercitationem, aut adipisci.</p>
        </div>
       
          <div class="social">
                        <?php echo do_shortcode('[Sassy_Social_Share]');?>
                    </div>
    </div>

</div>

<?php get_footer(); ?>