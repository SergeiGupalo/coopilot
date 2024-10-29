<footer class="footer">
        <div class="footer__title">
            <h2><?php the_field('title_footer'); ?></h2>
        </div>
        <div class="footer__content">
            <div class="content__left">
                <div class="content__mail">
                    <input type="email" placeholder="Enter email addres" class="footer__email">
                    <button class="footer__btn">Contact me</button>
                </div>
                <div class="content__checkbox">
                    <input type="checkbox" id="newsletter" name="newsletter">
                    <label for="newsletter">Would you like to receive our Newsletter with offers and upcoming
                        services?</label>
                </div>
                <div class="footer__bottom">
                    <a href="#">Terms of Service</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
            <div class="content__right">
                <div class="social__intro">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/twitter.svg" alt="twiter"></a>
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/instagram.svg" alt="instagram"></a>
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/email.svg" alt="email"></a>
                </div>
                <div class="footer__menu">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">WORK</a></li>
                        <li><a href="#">BENEFITS</a></li>
                        <li><a href="#">HOW WE DO IT</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">SERVICES</a></li>
                        <li><a href="#">PLANS</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <div class="footer__logo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/footer-logo.svg" alt="logo">
                    </div>
                    <div class="footer__logo-mobile">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-2.svg" alt="">
                    </div>
                </div>
            </div>
    </footer>
    <?php wp_footer(); ?>
</body>

<!-- <script src="./js/jquery.fancybox.min.js"></script>
<script src="./js/jquery.formstyler.min.js"></script>
<script src="./js/slick.min.js"></script>
<script src="./main.js"></script> -->

</html>