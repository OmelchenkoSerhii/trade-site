<section class="cta short">
        <div class="row cta__row">
            <div class="col-7 cta__imageWrapper cta__imageWrapper__main">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta--back.png" alt="" class="cta__image desktop">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mobile_cta_background.png" alt="" class="cta__image mobile">
            </div>
            <div class="col-5 cta__contentWrapper">
                <h3 class="fade-up appear">
                    <?php if(is_front_page()){
                        printf( _e('Join the global Forex broker', 'trade'));
                    }
                    else{
                        printf( _e('Start trading the markets cryptocurrencies and Forex with us right now!', 'trade'));
                    } ?>
                </h3>
                <div class="buttons--row row fade-up appear delay-1">
                    <div class="col-sm-auto button--wrapper">
                        <a href="#" class="button button-primary ">
                            <?php printf( _e('Sign Up', 'trade'))?>
                        </a>
                    </div>
                    <div class="col-sm-auto button--wrapper">
                        <a href="#" class="button button-secondary ">
                            <?php printf( _e('Go to personal account', 'trade'))?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>