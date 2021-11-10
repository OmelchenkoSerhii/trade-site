<?php 
    /* Template Name: About Efficiency */ 
?>
<?php get_header(); ?>
<section class="hero hero__header--cover long"
    style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/efficiency/metatrader.png);">
    <div class="container">
        <div class="col-md-6 hero__contentWrapper">
            <h2 class="fade-up appear">
                <?php printf( _e('Efficiency', 'trade'))?>
            </h2>
            <p class="fw-600 mb-30 fade-up appear delay-1">
            <?php printf( _e('It is important for us to maintain our authority in the Forex and cryptocurrency markets, which is why
                we regularly share our performance results in numbers and statistics. Our goal is not only to maintain
                high standards, but also to increase the level and experience in trading for our clients and employees,
                as well as to ensure complete transparency and reliability. The statistics below reveal the kind of
                unprecedented trading conditions and an example of interaction with clients.', 'trade'))?>
            </p>
            <div class="buttons--row row fade-up appear delay-2">
                <div class="col-sm-auto button--wrapper">
                    <a href="#" class="button button-primary ">
                        <?php printf( _e('Sign Up', 'trade'))?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="efficiency short ">
    <div class="container">
        <div class="row">
            <div class="col-md-4 efficiency__title fade-right appear">
                <p class="fw-600"><?php printf( _e('Quality of work with clients', 'trade'))?></p>
            </div>
            <div class="col-md-8 efficiency__text fade-left appear ">
                <p><?php printf( _e('In line with CompanyNames commitment to transparency, these statistics have been verified against
                    3000 international standards.', 'trade'))?></p>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-6 card__image__wrapper">
                <img class="card__image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-company/mobil-gtc.png" alt="">
            </div>
                <div class="col-lg-6">
                    <div class="efficiency__item fade-right appear delay-1">
                        <div class="efficiency__numbers">
                            <h2>86%</h2>
                            <h4><?php printf( _e('Processed orders', 'trade'))?></h4>
                        </div>

                        <p><?php printf( _e('More than 86% of orders processed within 5 minutes', 'trade'))?></p>
                    </div>

                <div class="efficiency__item fade-left appear delay-1">

                    <div class="efficiency__numbers">
                        <h2>90%</h2>
                        <h4><?php printf( _e('Positive reviews', 'trade'))?></h4>
                    </div>
                    <p><?php printf( _e('More than 90% positive feedback from our clients', 'trade'))?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about efficiency short ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 about__card__itemWrapper fade-up appear delay-2">
                <div class="about__card__item  ">
                    <div class="about__card__itemContent">
                        <h4>
                           <?php printf( _e('Order execution speed', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e('We have been awarded several times for the speed of order execution, because this is one of the indicators that guarantees the comfort of your trading. We know that speed is often critical to maximize your profits. Therefore, we execute trades at the speed of light and never slower.', 'trade'))?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 about__card__itemWrapper fade-up appear delay-2">
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('Quotas', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e("Companys' rich pool of liquidity, which is available through top tier banks and financial institutions, allows you to fill your orders even when the markets are highly volatile.
", 'trade'))?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo get_template_part('template-parts/blocks/cta') ?>


<?php get_footer(); ?>