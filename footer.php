<footer class="footer">
    <div class="footer_block">
        <div class="contact">
            <ul>
                <li class="contact_heading">
                    <p class="footer_titel"><i class="fas fa-mobile-alt"></i>Телефонии</p>
                    <ul class="contact_list">
                        <li>
                            <a href="tel:<?php echo get_theme_mod('phone_1'); ?>"><?php echo get_theme_mod('phone_1'); ?></a>
                        </li>
                        <li>
                            <a href="tel:<?php echo get_theme_mod('phone_1'); ?>"><?php echo get_theme_mod('phone_2'); ?></a>
                        </li>
                        <li>
                            <a href="tel:<?php echo get_theme_mod('phone_1'); ?>"><?php echo get_theme_mod('phone_3'); ?></a>
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

        <div class="google_map">
            <?php echo do_shortcode('[wpgmza id="1"]')?>
        </div>
    </div>




</footer>
<?php wp_footer(); ?>

</body>

</html>