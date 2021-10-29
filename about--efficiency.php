<?php 
    /* Template Name: About Efficiency */ 
?>
<?php get_header(); ?>
<section class="hero hero__header--cover"
    style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero5.png);">
    <div class="container">

        <div class="col-md-6 hero__contentWrapper">
            <h2>
                <?php printf( _e('Efficiency', 'trade'))?>
            </h2>
            <p class="fw-600 mb-30">
<?php printf( _e('                It is important for us to maintain our authority in the Forex and cryptocurrency markets, which is why
                we regularly share our performance results in numbers and statistics. Our goal is not only to maintain
                high standards, but also to increase the level and experience in trading for our clients and employees,
                as well as to ensure complete transparency and reliability. The statistics below reveal the kind of
                unprecedented trading conditions and an example of interaction with clients.', 'trade'))?>
            </p>
            <div class="buttons--row row">
                <div class="col-sm-auto button--wrapper">
                    <a href="#" class="button button-primary ">
                        <?php printf( _e('Sign Up', 'trade'))?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="efficiency">
    <div class="container">
        <div class="row">
            <div class="col-md-4 efficiency__title">
                <p class="fw-600 fz-30"><?php printf( _e('Quality of work with clients', 'trade'))?></p>
            </div>
            <div class="col-md-8 efficiency__text">
                <p><?php printf( _e('In line with CompanyNames commitment to transparency, these statistics have been verified against
                    3000 international standards.', 'trade'))?></p>
            </div>
            <div class="col-md-6 efficiency__item">
                <div class="efficiency__numbers">
                    <h2>86%</h2>
                    <h4><?php printf( _e('Processed orders', 'trade'))?></h4>
                </div>

                <p><?php printf( _e('More than 86% of orders processed within 5 minutes', 'trade'))?></p>
            </div>
            <div class="col-md-6 efficiency__item">
                <div class="efficiency__numbers">
                    <h2>90%</h2>
                    <h4><?php printf( _e('Positive reviews', 'trade'))?></h4>
                </div>
                <p><?php printf( _e('More than 90% positive feedback from our clients', 'trade'))?></p>
            </div>
        </div>
    </div>
</section>
<section class="about efficiency">
    <div class="container">
        <h3>
            <?php printf( _e('Important facts and figures about CompanyName', 'trade'))?>
        </h3>
        <div class="row">
            <div class="col-lg-6 about__card__itemWrapper">
                <div class="about__card__item  ">
                    <div class="about__card__itemContent">
                        <h4>
                           <?php printf( _e(' Withdrawing funds and depositing with a convenient method', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e('Clients deposits are completely isolated from operating funds in the company, and are
                            located in top-tier banks of the European Union. We do not use clients funds for our
                            own activities and consider this approach unprofessional, and this is contrary to the
                            values of our company.', 'trade'))?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about__card__itemWrapper">
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('Customer support in 16 languages', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e('Continuous control and audit of the brokers activities allows us to guarantee the
                            stability of the withdrawal of all funds for traders. The international broker TRS
                            Markets falls under the jurisdiction of the United Kingdom, in the activity section
                            OT UK SIC CODE 66110, namely Financial Markets Management, Securities Exchange
                            Management, Administration of Exchange or Commodity Options, Exchange Activity, as
                            well as Futures on commodity contracts. It has the right to accept both residents
                            and non-residents of the United Kingdom.', 'trade'))?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo get_template_part('template-parts/blocks/cta') ?>


<?php get_footer(); ?>