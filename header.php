<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('description'); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Roboto+Slab:wght@100&display=swap"
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

         <div></div>

            <nav class="wrap_menu" >

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

    </header>