<?php 
    /* Template Name:  Forex Regulation */ 
?>
<?php get_header();?>
<section class="hero hero__header--cover"
    style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ hero-7.png');">
    <div class="container">
        <div class="col-md-6 hero__contentWrapper">
            <h2 class="fade-up appear ">
               <?php printf( _e(' Legal regulation and transparency', 'trade'))?>
            </h2>
            <p class="fw-600 mb-30 fade-up appear delay-1 ">
<?php printf( _e('                HONESTY, RELIABILITY, MODERNITY, DEVELOPMENT
                In this section you can find information about our privacy policy, a list of our agreements on the
                conclusion of client accounts, a risk notice in PDF format.', 'trade'))?>
            </p>
            <div class="buttons--row row fade-up appear delay-2 ">
                <div class="col-sm-auto button--wrapper">
                    <a href="#" class="button button-primary ">
                        <?php printf( _e('Start Trading', 'trade'))?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 about__card__itemWrapper">
                <div class="about__card__item  ">
                    <div class="about__card__itemContent fade-right appear">
                        <h4>
                            <?php printf( _e('Privacy policy', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e('This policy statement details our privacy and information policy. It contains information about how visitors to our website can use the information from our website and explains how we protect the personal information of our users.', 'trade'))?>
                        </p>
                        <a class="button button-secondary" href=""><?php printf( _e('Open', 'trade'))?></a>
                    </div>
                </div>
                <div class="about__card__item fade-right appear delay-2">
                    <div class="about__card__itemContent">
                        <h4>
                          <?php printf( _e('Client account opening agreements', 'trade'))?>
                        </h4>
                        <p>
<?php printf( _e('On this page you can find and download a complete list of agreements for opening client accounts in PDF format.', 'trade'))?>
                        </p>
                        <a class=" button button-secondary" href=""><?php printf( _e('Open', 'trade'))?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 about__card__itemWrapper regulation">
                <div class="about__card__item fade-left appear delay-1">
                    <div class="about__card__itemContent">
                        <h4>
                            <?php printf( _e('Risk warning', 'trade'))?>
                        </h4>
                        <p>
                            <?php printf( _e('Before starting to invest, it is important to foresee all the risks. The broker provides a written guarantee regarding the possible return on investment and trading in Crypto-Currency and Forex. Profitability depends on many factors, such as market conditions and industry risks, which is almost impossible to predict 100% in advance.', 'trade'))?>
                        </p>
                        <a class="button button-secondary" href=""><?php printf( _e('Open', 'trade'))?></a>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php echo get_template_part('template-parts/blocks/cta') ?>
<?php get_footer()?>