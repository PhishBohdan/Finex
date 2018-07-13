<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

</div><!-- #main -->
</section><!-- section -->

<div class="footer-callout">
	<?php shapely_footer_callout(); ?>
</div>

<footer id="colophon" class="site-footer footer " role="contentinfo">
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="address-item">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/land_mark.png">
                        <div>
                            <p>Schwalbenweg 6 85661</p>
                            <p>Forstinning, Bavaria, Germany</p>
                        </div>
                    </div>
                    <div class="address-item">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/phone.png">
                        <div class="pad-15">
                            <p>+49 8121 9898 549</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/wh_logo_finex.png"></a>
                    </div>
                    <p class="text-center copyright">
                        © 2018 - FINEX. All right reserved.
                    </p>

                </div>
                <div class="col-md-4">
                    <div class="ques-marks">
                        <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ques_mark.png"></a>
                        <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ques_mark.png"></a>
                        <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ques_mark.png"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

	<a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>
</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
