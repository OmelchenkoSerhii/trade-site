<section class="cta short">
    <div class="container">
        <div class="row cta__row">
            <div class="col-sm-6">
                <div class="fade-up appear cta__titleWrapper">
                        <?php if(is_front_page()){
                            printf( _e('Join the global Forex broker', 'trade'));
                        }
                        else{
                            printf( _e('Start trading the<br> markets cryptocurrencies and Forex with us right now!', 'trade'));
                        } ?>
                    </div>
            </div>
            <div class="col-sm-6 cta__contentWrapper">
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
    </div>
</section>