<footer class="new_footer_area bg_color border-top">
    <div class="new_footer_top px-3">
        <div class="container-fluid px-lg-5" style="padding-left:0px;padding-right:0px;z-index: 999;position: relative;">
            <div class="row">
                <div class="col-lg-2 col-md-6" style="padding-left: 0px;">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Solutions</h3>
                        <?php
                        dynamic_sidebar('footer1');
                        ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6" style="padding:0px">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">IT Consulting & Staffing</h3>
                        <?php
                        dynamic_sidebar('footer2');
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-0">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Software Products</h3>
                        <?php
                        dynamic_sidebar('footer3');
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-0">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Quick Links</h3>
                        <?php
                        dynamic_sidebar('footer4');
                        ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 p-0">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Contact Info</h3>
                        <?php
                        dynamic_sidebar('footer5');
                        ?>
                        <div class="f_social_icon">
                            <div class="footer-widget-area-inner footer-social-inner">
                                <?php do_action('kadence_footer_social'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-sm-12">
                    <p class="mb-0 f_400">© Korvage Inc.. 2024 All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>