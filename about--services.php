<?php 
    /* Template Name: About Services */ 
?>
<?php get_header(); ?>
<section class="hero hero__header--cover long"
    style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero2-min.png);">
    <div class="container">
        <div class="col-md-6 hero__contentWrapper">
            <h2 class="fade-up appear">
                <?php printf( _e('Our services', 'trade'))?>
            </h2>
            <p class="fw-600 mb-30 fade-up appear delay-1"><?php printf( _e('We do our best to meet the needs of our clients. We are interested in successful cooperation and do our
                best to recognize the individual needs of each client and work with them in the best way. We strive to
                do everything so that there are no problems on your way. And if suddenly they appeared, so that the
                elimination would occur as quickly and efficiently as possible. We work for results.', 'trade'))?>

            </p>
            <div class="buttons--row row fade-up appear delay-2">
                <div class="col-sm-auto button--wrapper">
                    <a href="#" class="button button-primary ">
                        <?php printf( _e('Start trading', 'trade'))?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about short ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 about__card__itemWrapper fade-right appear">
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('Withdrawing funds and depositing with a convenient method', 'trade'))?>
                        </h4>
                        <p><?php printf( _e('                         We consider convenience as the main criterion when it comes to withdrawals and deposits.
                            Everyone feels comfortable when they have a choice and when this process is as clear and
                            easy as possible. Therefore, we are constantly adding different withdrawal methods to make
                            it quick and easy. But the most important thing is comfortable for our clients.', 'trade'))?>
   
                        </p>
                    </div>
                </div>
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('Easy account opening process', 'trade'))?>
                        </h4>
                        <p><?php printf( _e('As well as withdrawing funds, the process of opening an account should also be as fast and
                            easy as possible. And we took care of that too. The process of opening a training account
                            with TRS Markets is as simple as possible and includes several registration steps. And as
                            soon as you provide us with the necessary information and confirm the documents, your
                            application will begin to be processed, and most likely will be processed on the same day.
                            This is a very quick and extremely simple procedure.', 'trade'))?>

                        </p>
                    </div>
                </div>
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4><?php printf( _e('Different trading platforms', 'trade'))?>
                            
                        </h4>
                        <p><?php printf( _e('                            We use innovative technologies and solutions to improve your trading experience, no matter
                            what methods of work you use and which platform you choose, because we provide a huge
                            selection of devices and platforms where you will find the most convenient one to work with.
                            We also have our own Web Trader platform, which was developed for our clients and meets the
                            most popular needs. It provides access to different markets through your browser, such as
                            forex and cryptocurrency markets. But the main advantage is that traders do not need to
                            worry and spend a lot of time on trades, as the platform continues to function even when you
                            are fast asleep and all the best opportunities will be yours, regardless of the time of day
                            and your employment.', 'trade'))?>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 about__card__itemWrapper big fade-left appear">
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4><?php printf( _e('Customer support in 16 languages', 'trade'))?>
                            
                        </h4>
                        <p><?php printf( _e('   As an international company, we strive to keep in touch with customers around the world. The
                            absence of language barriers allows us to effectively respond to your needs. It is important
                            for us that you feel comfortable speaking your native language. Our ability to communicate
                            in multiple languages makes problem solving easier, which means your needs are met quickly
                            and efficiently.', 'trade'))?>
                         
                            </p>
                            <p><?php printf( _e('               Our company, being an international company, strives to keep in touch with clients all over
                            the world. Removing language barriers helps to maintain a sense of comfort for each client,
                            and we quickly navigate the needs of each. Also, multilingualism helps to quickly solve
                            problems if they arise.', 'trade'))?>
             
                        </p>
                    </div>
                </div>
                <div class="about__card__item">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('Trade and technical assistance', 'trade'))?>
                        </h4>
                        <p><?php printf( _e('                            At our company, we provide unparalleled trading support to help our clients improve their
                            trader experience. We help you analyze your trading mistakes to improve your strategy and
                            avoid such mistakes in the future. In addition, our team ensures that any problem you
                            encounter will be explained and dealt with promptly.', 'trade'))?>

                            </p>
                            <p><?php printf( _e('                            We provide ongoing sales and technical support. This helps to avoid many mistakes, and also
                            to work on improving the work strategy in the future. We also guarantee that our team will
                            quickly and efficiently handle any problem that has arisen and make a high-quality analysis
                            to avoid this again.', 'trade'))?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo get_template_part('template-parts/blocks/cta') ?>


<?php get_footer(); ?>