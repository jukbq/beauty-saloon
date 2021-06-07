<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('description'); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Play:wght@400;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<?php wp_head(); ?>


<body>


    <!-----------------wraper----------------->
    <header id="header" class="header">

        <div class="wraper">
            <?php the_custom_logo( 0 ); ?>
            <nav class="wrap_menu">
                <div class="menu_icon">
                    <div class="burger-line"></div>
                    <div class="burger-line"></div>
                    <div class="burger-line"></div>
                </div>
                <?php 
                if( has_nav_menu( 'header_menu' ) ){
                wp_nav_menu([
                    'theme_location' => 'header_menu',
                    'container_class' => 'head_menu',
                    'menu_id' => 'menu_1',
                    'menu_class' => 'ul_menu',
                
                    ]);
                }
                ?>
            </nav>



        </div>


        <!----------------Social network-------------------->
        <section class="social_networks">

            <a class="fb" href="<?php echo get_theme_mod('facebook'); ?>" target="_blank">
                <div class="sn_box facebook">
                    <p class="open_sn_bpx"><?php echo get_theme_mod('facebook'); ?></p>
                    <i class="fab fa-facebook-f"></i>
                </div>
            </a>
            <a class="insta" href="<?php echo get_theme_mod('instagrann'); ?>" target="_blank">
                <div class="sn_box instagrann">
                    <p class="open_sn_bpx"><?php echo get_theme_mod('instagrann'); ?></p>
                    <i class="fab fa-instagram"></i>
                </div>
            </a>
            <a class="mas" href="https://www.messenger.com/t/<?php echo get_theme_mod('messenger'); ?>" target="_blank">
                <div class="sn_box messenger">
                    <p class="open_sn_bpx"><?php echo get_theme_mod('messenger'); ?></p>
                    <i class="fab fa-facebook-messenger"></i>
                </div>
            </a>
            <a class="vib" href="viber://chat?number=+<?php echo get_theme_mod('viber'); ?>">
                <div class="sn_box viber">
                    <p class="open_sn_bpx"><?php echo get_theme_mod('viber'); ?></p>
                    <i class="fab fa-viber"></i>
                </div>
            </a>

            <a class="tel_g" href="tg://resolve?domain=<?php echo get_theme_mod('telegram'); ?>">
                <div class="sn_box telegram">
                    <p class="open_sn_bpx"><?php echo get_theme_mod('telegram'); ?></p>
                    <i class="fab fa-telegram-plane"></i>
                </div>
            </a>
            <a lass="wa" href="whatsapp://send?phone=+<?php echo get_theme_mod('whatsapp') ?>">
                <div class="sn_box whatsapp">
                    <p class="open_sn_bpx"><?php echo get_theme_mod('whatsapp') ?></p>
                    <i class="fab fa-whatsapp"></i>
                </div>
            </a>
            <a class="yt" href="<?php echo get_theme_mod('youtube') ?>" target=" _blank">
                <div class="sn_box youtube">
                    <p class="open_sn_bpx"><?php echo get_theme_mod('youtube') ?></p>
                    <i class="fab fa-youtube"></i>
                </div>
            </a>
        </section>
    </header>