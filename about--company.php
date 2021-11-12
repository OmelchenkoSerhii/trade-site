<?php 
    /* Template Name: About Company */ 
?>
<?php get_header(); ?>
<section class="hero hero__header--cover short">
    <div class="container">
        <div class="row hero__row">
            <div class="col-md-6 hero__contentWrapper">
                <h2 class="fade-up appear">
                    <?php printf( _e('Forex authority in the cryptocurrency market', 'trade'))?>
                </h2>
                <p class="fw-600 mb-30 fade-up appear delay-1">
                    <?php printf( _e('CompanyName was first launched in 2010 and was created to provide the best trading conditions and
                        trading tools for forex and cryptocurrency traders.', 'trade'))?>
                </p>
                <div class="buttons--row row fade-up appear delay-2">
                    <div class="col-sm-auto button--wrapper">
                        <a href="#" class="button button-primary ">
                            <?php printf( _e('Sign Up', 'trade'))?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero__image__wrapper">
                <img class="hero__image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-company/ac-hero.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="card short">
    <div class="container">
        <div class="row card__row">
            <div class="col-sm-6 card__image__wrapper">
                <img class="card__image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-company/mobil-gtc.png" alt="">
            </div>
            <div class="col-sm-6">
                <div class="card__item fade-right appear">
                    <div class="card__itemInner">
                        <div class="card__itemContent">
                            <h3>
                                <?php printf( _e('CompanyName history', 'trade'))?>
                            </h3>
                            <p>
                                <?php printf( _e(' CompanyName was first launched in 2010 and was created to provide the best trading
                                    conditions and trading tools for forex and cryptocurrency traders.
                                    We are constantly working on the quality of CompanyName and working with experienced
                                    teams of traders from around the world. As a result of constant work on itself,
                                    CompanyName has become a fast growing company and a global trademark, which it is to
                                    this day.', 'trade'))?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card__item fade-left appear">
                    <div class="card__itemInner">
                        <div class="card__itemContent">
                            <h3>
                                <?php printf( _e('Company vision', 'trade'))?>
                            </h3>
                            <p>
                                <?php printf( _e('Time is the most expensive resource. And knowledge is strength and possibilities.
                                    Our mission is to effectively evaluate the time of our traders in the fast growing,
                                    flexible financial markets and use this time with the help of knowledge to the maximum
                                    benefit. Invest wisely. Our passion is to get the most out of our investment and improve
                                    our results every time.', 'trade'))?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo get_template_part('template-parts/blocks/advantages') ?>
<section class="about short">
    <div class="container">
        <h2>
            <?php printf( _e('Important facts and figures about CompanyName', 'trade'))?>
        </h2>
        <div class="row">
            <div class="col-md-6 about__card__itemWrapper fade-right appear">
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('We take care of our clients and do everything for comfortable deposit and withdrawal of funds', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e('Our brand credits more than 750 thousand registered accounts and more than 45 payment methods.', 'trade'))?>
                        </p>
                    </div>
                </div>
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('We are some of the best copy trading software in the business and we are constantly expanding', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e('Trading accounts became available with ECN Zero and ECN, as well as over 1800 strategy managers.', 'trade'))?>
                        </p>
                    </div>
                </div>
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('We make sure that your trading opportunities in the market are constantly expanding', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e('Company offers Cryptocurrency CFDs that are traded against the US dollar with Bitcoin, Litecoin and Ethereum.', 'trade'))?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 about__card__itemWrapper fade-left appear">
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('We devote a lot of time to the development of trading and invest in the learning culture by creating and distributing a huge amount of educational materials', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e('Our training center continues its expansion with over 100 webinars, new e-books, short videos on the Forex and Bitcoin markets, and educational articles.', 'trade'))?>
                        </p>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-company/3-phones.png"
                        alt="" class="about__card__itemImage">
                </div>
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('We want to help traders develop and implement their skills and strategies through innovative solutions', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e('Unique trading tools developed by Mr. Thalassinos - Company Trading Signals and Company Pivot Points Strategy - integrate popular indicators into a user-friendly interface.', 'trade'))?>
                        </p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</section>
<?php echo get_template_part('template-parts/blocks/cta') ?>
<section class="features short">
    <div class="container">
        <h3 class="mb-40 fade-down appear"><?php printf( _e('Your benefits with CompanyName', 'trade'))?></h3>
        <div class="row features__itemRow">
            <div class="col-md-4 col-sm-4 features__item fade-up appear delay-1 ">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/features2/1.png" alt="">
                <p>
                    <?php printf( _e('We have a customized solution for both retail and corporate clients', 'trade'))?>

                </p>
            </div>
            <div class="col-md-4 col-sm-4  features__item fade-up appear delay-1">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/features2/2.png" alt="">
                <p>
                    <?php printf( _e('We use the most innovative technologies, everything for your convenience. Also, no matter what type of trading you work with, you get an ideal trading account that is completely convenient and meets all your needs', 'trade'))?>
                </p>
            </div>
            <div class="col-md-4 col-sm-4  features__item fade-up appear delay-1" >
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/features2/3.png" alt="">
                <p>
                <?php printf( _e(' Thanks to the wide range of Company trading tools, you can choose and trade the market you want - we
                    offer 60+ currency pairs, CFDs, Spot metals and indices and 180+ CFDs', 'trade'))?>
                   
                </p>
            </div>
            <div class="col-md-4  col-sm-4  features__item fade-up appear delay-2 ">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/features2/4.png" alt="">
                <p><?php printf( _e('With our training center, you can constantly develop yourself as a trader and get the full store of
                    knowledge that is required for trading', 'trade'))?>
                </p>
            </div>
            <div class="col-md-8  col-sm-4  features__item fade-up appear delay-2">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/features2/5.png" alt="">
                <p><?php printf( _e('We have different investment programs such as Invest and PAMM that are suitable for traders with
                    different levels of immersion and experience in the trading process, and the Company Partners
                    program offers additional partnerships for vectors and affiliates', 'trade'))?>
                    
                </p>
            </div>
        </div>
    </div>
</section>
<section class="advantages advantages__reverse long">
        <div class=" container">
                <h3 class="mb-40 fade-left appear "><?php printf( _e('Why CompanyName is trusted by experienced traders?', 'trade'))?></h3>
                <div class="row advantages__itemRow">
                    <div class="col-md-4 col-sm-12  advantages__item about__advantages__item fade-left appear delay-1 ">
                        <div class="advanrages__itemInner">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-company/chart_2.svg"
                            alt="">
                            <div class="advantages__itemContent">
                            <h6><?php printf( _e('Company values and vision', 'trade'))?></h6>
                                <p><?php printf( _e('We care about our clients and help maximize your income.', 'trade'))?>
                        </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12  advantages__item about__advantages__item fade-left appear delay-2">
                    <div class="advanrages__itemInner">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-company/shield_1.svg"
                            alt="">
                            <div class="advantages__itemContent">
                        <h6><?php printf( _e('Championship', 'trade'))?></h6>
                        <p><?php printf( _e('Our management team has over 30 years of experience in trading, which repeatedly confirms
                            its reliability, competence and leadership.', 'trade'))?>
                        </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-12 advantages__item about__advantages__item fade-left appear delay-3">
                    <div class="advanrages__itemInner">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-company/spread_1.svg"
                            alt="">
                           
                            <div class="advantages__itemContent">
                                <h6> <?php printf( _e('Growth', 'trade'))?></h6>
                        <p><?php printf( _e('We care about our employees and do everything to ensure that they grow and develop together
                            with our company..', 'trade'))?></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

</section>
<?php get_footer(); ?>