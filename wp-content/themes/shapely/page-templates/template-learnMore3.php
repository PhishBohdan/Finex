<?php
/**
 * Template Name: LearnMore3 Page
 *
 * Displays the Home page with Parallax effects.
 *
 */
?>

<?php get_header();  ?>
    <section id="learn_first_section">
        <div class="container">
            <div class="go_home">
                <a href="<?php echo home_url()?>" class="btn btn-white"><img class="ques" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ques.png"> Go</a>
            </div>
            <h1 class="main-title bold text-center">FINEX Excellence Mobile Token</h1>
            <div class="row">
                <div class="col-md-6 finex-prg">
                    <p>The FINEX EXCELLENCE Mobile Token is a ready-to-go smartphone
                        soft token solution offering a secure, convenient tool for users,
                        accessible on their mobile phones. It is based on certified, open
                        security algorithms, providing a high level of security thanks to the
                        tamper-proof design and enhanced security algorithms. The FINEX</p>
                </div>
                <div class="col-md-6 finex-prg">
                    <p>EXCELLENCE Mobile Token can be used in a wide range of industries,
                        such as Banking, Telecommunications, Healthcare, the Public sector
                        etc.<br><br>
                        The FINEX Excellence Mobile Token is a cost effective, multi-factor</p>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h3 class="learn-title-1">Functionality snapshot</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="learn-item">
                        <div class="learn-item-body">
                            <p>Seamless activation process</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <div class="learn-item-body">
                            <p>Auto-login and QR login enabling the
                                user to securely login to online banking
                                by only one click, without entering any
                                login ID or password</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <div class="learn-item-body">
                            <p>Challenge response password
                                generation via manual or QR code
                                data entry</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <div class="learn-item-body">
                            <p>One-time password generation</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <div class="learn-item-body">
                            <p>Push notifications for instant message
                                delivery</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <div class="learn-item-body">
                            <p>Administration console with a wide
                                range of settings and reports</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <img class="ques" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/silver_learn_phone.png">
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <h3 class="learn-title-1">A portfolio of advanced capabilities, providing flexibility and tailored services:</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="">
                        <img class="ques" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/iwatch2.png">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="learn-item">
                        <div class="learn-item-body">
                            <p>Authentication via biometrics,
                                Bluetooth, and NFC tags</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <div class="learn-item-body">
                            <p>Location based security features</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <div class="learn-item-body">
                            <p>Smartwatch support</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="actions learn_actions">
            <div class="actions text-center">
                <a href="#" class="btn btn-white">Request a Live</a>
                <a href="#" class="btn btn-white">Download Brochure</a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>