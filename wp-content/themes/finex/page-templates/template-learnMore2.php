<?php
/**
 * Template Name: LearnMore2 Page
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
            <h1 class="main-title bold text-center">FINEX Psychometric Profiling</h1>
            <div class="row">
                <div class="col-md-6 finex-prg">
                    <p>FINEX Psychometric Profiling is an analytics and personalization tool
                        that enables financial institutions to achieve a new type of insight into
                        their customers. It helps financial institutions to accurately predict their
                        customersʼ personality traits via their digital banking footprint. It also
                        provides tools for personalized marketing, customer communication,</p>
                </div>
                <div class="col-md-6 finex-prg">
                    <p>and digital banking experience − all tailored based on each customerʼs
                        personality profile.<br><br>
                        FINEX Psychometric Profiling can be seamlessly integrated to thirdparty banking solutions, including online and mobile banking</p>
                </div>

            </div>
        </div>
    </section>
    <section class="learn_more">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <div class="learn2-cont">
                        <h4 class="main-title-3">FINEX Psychometric Profiling can
                            help financial institutions to:</h4>
                        <div class="learn-item">
                            <p class="learn-item-title">Improve marketing ROI
                            </p>
                            <div class="learn-item-body">
                                <p>by tailoring advertisements to
                                    customerʼs personalities,
                                    values and beliefs</p>
                            </div>
                        </div>
                        <div class="learn-item">
                            <p class="learn-item-title">Improve customer
                                segmentation
                            </p>
                            <div class="learn-item-body">
                                <p>by predicting lifestyle choices,
                                    financial and consumer preferences
                                    driven by personality traits</p>
                            </div>
                        </div>
                        <div class="learn-item">
                            <p class="learn-item-title">Increase customer
                                satisfaction
                            </p>
                            <div class="learn-item-body">
                                <p>by tailoring the digital banking user
                                    experience to customerʼs</p>
                            </div>
                        </div>
                        <div class="learn-item">
                            <p class="learn-item-title">Improve credit scoring
                            </p>
                            <div class="learn-item-body">
                                <p>even if no credit or financial
                                    history is available</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="bg-blue-50">
                        <div class="blue-cont">
                            <h4 class="main-title-3">FINEX Psychometric Profiling can
                                help financial institutions to:</h4>
                            <div class="blue-item">
                                <div class="num">
                                    1
                                </div>
                                <div class="learn-item">
                                    <p class="learn-item-title">Data collection
                                    </p>
                                    <div class="learn-item-body blue-learn-body">
                                        <p>FINEXʼs Psychometric Profiling utilizes data from the customerʼs
                                            digital banking footprint for customer profiling, such as:</p>
                                        <ul>
                                            <li>Online and mobile banking behavior patterns</li>
                                            <li>Preferences and settings</li>
                                            <li>And much more</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="blue-item">
                                <div class="num">
                                    2
                                </div>
                                <div class="learn-item">
                                    <p class="learn-item-title">Data analysis and customer profiling
                                    </p>
                                    <div class="learn-item-body blue-learn-body">
                                        <p>The custom-built FINEX analytics engine calculates each customer’s personality traits – such as extroversion, openness to risk-taking, or the tendency to display
                                            self-discipline – by utilizing the customer’s digital banking footprint.</p>
                                        <p>The calculation is done by an algorithm developed with the help of psychologists and data scientists.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="blue-item">
                                <div class="num">
                                    3
                                </div>
                                <div class="learn-item">
                                    <p class="learn-item-title">Personalization
                                    </p>
                                    <div class="learn-item-body blue-learn-body">
                                        <p>The personalization component of FINEX’s Psychometric Profiling helps tailor a range of banking services. The personality profiles are utilized to predict customer
                                            lifestyle choices, financial and consumer preferences, enabling a more accurate customer segmentation and product targeting.</p>
                                        <p>FINEX Psychometric Profiling also helps banks to tailor the digital banking user experience to match the customer’s personality and subconscious preferences, </p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="learn_more">
        <div class="actions learn_actions">
            <div class="actions text-center">
                <a href="#" class="btn btn-white">Request a Live</a>
                <a href="#" class="btn btn-white">Download Brochure</a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>