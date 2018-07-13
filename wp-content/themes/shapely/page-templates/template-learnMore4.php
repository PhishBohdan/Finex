<?php
/**
 * Template Name: LearnMore4 Page
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
            <h1 class="main-title bold text-center">Modules to enhance third party digital
                banking applications</h1>
            <div class="row">
                <div class="col-md-7 finex-prg">
                    <p>The FINEX EXCELLENCE solution has a flexible integration layer enabling
                        seamless integration to third party digital banking systems. FINEX provides
                        range of ready-to-go modules and capabilities that can be seamlessly
                        integrated to third-party banking solutions to enhance certain capabilities.</p>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="learn-item">
                        <p class="learn-item-title">Online Customer Onboarding
                        </p>
                        <div class="learn-item-body">
                            <p>Seamless digital customer origination and
                                account opening process, that enables banks
                                to capture leads online and convert them to
                                customers in a fully digitized origination</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <p class="learn-item-title">Social Media Referrals
                        </p>
                        <div class="learn-item-body">
                            <p>Grow customer base via invitations and
                                referral campaigns that can be distributed on
                                a range of channels, including Social Media.</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <p class="learn-item-title">Personal Financial
                            Management (PFM)
                        </p>
                        <div class="learn-item-body">
                            <p>Easy-to-use budgeting and financial
                                planning tools for financial insight.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <img class="ques" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/3rd_phone.png">
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="ques" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bar_phone.png">
                </div>
                <div class="col-md-6">
                    <div class="learn-item">
                        <p class="learn-item-title">Loyalty
                        </p>
                        <div class="learn-item-body">
                            <p>A retail digital solution, which provides a range of
                                reward and loyalty services. It helps turn
                                consumer data into new revenue sources, by
                                delivering accurate and personalized
                                recommendations</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <p class="learn-item-title">Psychometric Profiling
                        </p>
                        <div class="learn-item-body">
                            <p>Enables financial institutions to accurately predict their
                                customersʼ personality traits via their digital banking
                                footprint. It also provides tools for personalized
                                marketing, customer communication, and digital banking
                                experience − all tailored based on each customerʼs</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="learn-item">
                        <p class="learn-item-title">Digital Campaign Management
                        </p>
                        <div class="learn-item-body">
                            <p>Delivering omni-channel marketing campaigns with
                                sophisticated segmentation. Distribute campaigns to online
                                banking, native mobile banking apps, social media
                                channels, and third party applications.</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <p class="learn-item-title">Microfinance
                        </p>
                        <div class="learn-item-body">
                            <p>A digital solution that enables financial
                                institutions to provide personal and
                                business microfinancing via agents,
                                including online loan origination.</p>
                        </div>
                    </div>
                    <div class="learn-item">
                        <p class="learn-item-title">Mobile Token
                        </p>
                        <div class="learn-item-body">
                            <p>A smartphone soft token providing a cost
                                effective, multi-factor authentication
                                solution, supporting biometrics, Bluetooth
                                and NFC tags, and location based</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <img class="ques" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/point_phone.png">
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