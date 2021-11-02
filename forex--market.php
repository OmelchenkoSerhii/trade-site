<?php 
    /* Template Name:  Forex Market */ 
?>
<?php get_header()?>
<section class="hero hero__header--cover"
    style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about--xonditions.png);">
    <div class="container">
        <div class="col-md-6 hero__contentWrapper">
            <h2 class="fade-up appear">
                <?php printf( _e('Market forecast from specialists', 'trade'))?>
            </h2>
            <p class="fw-600 mb-30 fade-up appear delay-1">
               <?php printf( _e(' Always be one step ahead of the market', 'trade'))?>
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
<section class="advantages">
    <div class="row advantages__row">
        <div class="advantages__contentWrapper col-lg-7">
            <div class="advantages__contentInner container">
                <h3 class="mb-40 fade-right appear"><?php printf( _e('Smart investment management', 'trade'))?></h3>
                <p class="advantages__content fade-right appear delay-1">
        <?php printf( _e('            In order to more deeply analyze the market, get the opportunity to work with professional
                    CompanyName traders and get the highest quality fundamental and technical analysis, as well as
                    implement the best solutions and ideas on time and get the maximum profit.', 'trade'))?>
                </p>
            </div>
        </div>
        <div class="advantages__imageWrapper col-lg-5">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swing-trading-blog-1 1.png" alt="" class="advantages__image fade-in appear">
        </div>
    </div>
</section>
<?php echo get_template_part('template-parts/blocks/cta') ?>


<?php get_footer()?>