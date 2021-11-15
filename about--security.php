<?php 
    /* Template Name: About Security */ 
?>
<?php get_header(); ?>
<section class="hero hero__header--cover bottom long">
    <div class="container">
        <div class="row hero__row">
            <div class="col-sm-6 hero__contentWrapper">
                <h2 class="fade-up appear">
                    <?php printf( _e('Investment and security', 'trade'))?>
                </h2>
                <p class="fw-600 mb-30 fade-up appear delay-1">
                <?php printf( _e(' We constantly consider the needs of our customers.
                    25,000 clients, 23 countries. These are not just numbers, they are the guarantor of the quality and
                    reliability of our work. We follow all the rules and care about the safety of our customers. Protection
                    of investments and deposits is our main task. We create a secure trading environment and monitor the
                    reliability of our words and actions. Caring and protecting are our goals.', 'trade'))?>
                </p>
                <div class="buttons--row row fade-up appear delay-2">
                    <div class="col-sm-auto button--wrapper">
                        <a href="#" class="button button-primary ">
                            <?php printf( _e('Start trading', 'trade'))?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 hero__image__wrapper" >
                <img class="hero__image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/security/Component 6.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="about security short">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 about__card__itemWrapper fade-right appear ">
                <div class="about__card__item  ">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('Funds protection', 'trade'))?>
                        </h4>
                        <p>
                          <?php printf( _e("Clients' deposits are completely isolated from operating funds in the company, and are located in top-tier banks of the European Union. We do not use clients' funds for our own activities and consider this approach unprofessional, and this is contrary to the values of our company.", 'trade'))?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 about__card__itemWrapper fade-left appear delay-1 ">
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('Safety and reliability', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e("Continuous control and audit of the broker's activities allows us to guarantee the stability of the withdrawal of all funds for traders. The international broker TRS Markets falls under the jurisdiction of the United Kingdom, in the activity section OT UK SIC CODE 66110, namely Financial Markets Management, Securities Exchange Management, Administration of Exchange or Commodity Options, Exchange Activity, as well as Futures on commodity contracts. It has the right to accept both residents and non-residents of the United Kingdom.", 'trade'))?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 about__card__itemWrapper fade-right appear delay-2">
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('Encryption technique', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e("This guarantees a completely secure connection during communication with our customers and employees, and also protects customers during deposit and withdrawal of funds and keeps confidential information. Data transmission is also secured and encrypted to avoid data theft and unauthorized access by third parties. And the user authentication and server authentication policy ensures that data is sent to the correct client server.", 'trade'))?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 about__card__itemWrapper fade-left appear delay-3">
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('Deposit protection', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e("Currently, the UK has a unified deposit and deposit insurance system for both residents and non-residents of the country, covering commercial, investment banks and financial institutions. Amounts of up to £ 2,000 are insured for 100% of the deposit amount, for 90% up to £ 33,000, for 75% up to £ 100,000 (or the equivalent of converting to the currency in which you have deposit).
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