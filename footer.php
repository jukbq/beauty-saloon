<footer class="footer">
    <div class="footer_block">
        <div class="contact">
            <ul>
                <li class="contact_heading">
                    <p class="footer_titel"><i class="fas fa-mobile-alt"></i>Телефонии</p>
                    <ul class="contact_list">
                        <li>
                            <a
                                href="tel:<?php echo get_theme_mod('phone_1'); ?>"><?php echo get_theme_mod('phone_1'); ?></a>
                        </li>
                        <li>
                            <a
                                href="tel:<?php echo get_theme_mod('phone_1'); ?>"><?php echo get_theme_mod('phone_2'); ?></a>
                        </li>
                        <li>
                            <a
                                href="tel:<?php echo get_theme_mod('phone_1'); ?>"><?php echo get_theme_mod('phone_3'); ?></a>
                        </li>
                    </ul>
                </li>
                <li class="contact_heading">
                    <p class="footer_titel"><i class="fas fa-at"></i>Електронна скринька </p>

                    <ul class="contact_list">
                        <li>
                            <a href="mailto:<?php echo get_theme_mod('email'); ?>">
                                <?php echo get_theme_mod('email'); ?></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="contact">
            <ul>
                <li class="contact_heading">
                    <p class="footer_titel"><i class="fas fa-home"></i>Наша адреса</p>
                    <ul class="contact_list">
                        <li>
                            <p><?php echo get_theme_mod('adress'); ?></p>
                        </li>
                    </ul>
                </li>
                <li class="contact_heading">
                    <p class="footer_titel"><i class="far fa-clock"></i>Працюємо</p>
                    <ul class="contact_list">
                        <li>
                            <p>Пн-Сб <?php echo get_theme_mod('clock_1'); ?></p>
                            <p>Неділя<?php echo get_theme_mod('clock_2'); ?></p>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>


        <!----------------Social network-------------------->
        <section class="social_networks_footer">

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
        <div class="google_map">
            <?php echo do_shortcode('[wpgmza id="1"]')?>
        </div>
    </div>


</footer>
<?php wp_footer(); ?>

</body>

</html>