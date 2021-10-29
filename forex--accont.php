<?php 
    /* Template Name: Forex Account */ 
?>
<?php get_header()?>
<section class="hero hero__header--cover"
    style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Без\ имени-1\ 2.png);">
    <div class="container">
        <div class="col-md-6 hero__contentWrapper">
            <h2>
                CompanyName account types<?php printf( _e('', 'trade'))?>
            </h2>
            <p class="fw-600 mb-30"><?php printf( _e('', 'trade'))?>
                Each CompanyName account has its own purpose, which comes from the needs of the client, each is suitable
                for a different type of trading, and each opens up many opportunities in the Forex and cryptocurrency
                markets. It does not matter whether you are an experienced trader or not, a large or small investor,
                everyone can open an account, because the list of real accounts that we offer is the road to the world
                of financial independence.
            </p>
            <div class="buttons--row row">
                <div class="col-sm-auto button--wrapper">
                    <a href="#" class="button button-primary ">
                        Sign Up<?php printf( _e('', 'trade'))?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="account--slider">
    <div class="container slider">
        <div class="prev">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.625 24C15.0727 24 14.625 24.4477 14.625 25C14.625 25.5523 15.0727 26 15.625 26V24ZM34.5613 25.7071C34.9518 25.3166 34.9518 24.6834 34.5613 24.2929L28.1973 17.9289C27.8068 17.5384 27.1736 17.5384 26.7831 17.9289C26.3926 18.3195 26.3926 18.9526 26.7831 19.3431L32.44 25L26.7831 30.6569C26.3926 31.0474 26.3926 31.6805 26.7831 32.0711C27.1736 32.4616 27.8068 32.4616 28.1973 32.0711L34.5613 25.7071ZM15.625 26H33.8542V24H15.625V26Z"
                    fill="white" />
                <circle cx="25" cy="25" r="24" stroke="#006CDF" stroke-width="2" />
            </svg>
        </div>
        <div class="next">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M34.375 26C34.9273 26 35.375 25.5523 35.375 25C35.375 24.4477 34.9273 24 34.375 24L34.375 26ZM15.4387 24.2929C15.0482 24.6834 15.0482 25.3166 15.4387 25.7071L21.8027 32.0711C22.1932 32.4616 22.8264 32.4616 23.2169 32.0711C23.6074 31.6805 23.6074 31.0474 23.2169 30.6569L17.56 25L23.2169 19.3431C23.6074 18.9526 23.6074 18.3195 23.2169 17.9289C22.8264 17.5384 22.1932 17.5384 21.8027 17.9289L15.4387 24.2929ZM34.375 24L16.1458 24L16.1458 26L34.375 26L34.375 24Z"
                    fill="white" />
                <circle cx="25" cy="25" r="24" transform="rotate(180 25 25)" stroke="#006CDF" stroke-width="2" />
            </svg>
        </div>
        <div class="prev__mobile">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.7417 15.6424C20.294 15.6424 20.7417 15.1947 20.7417 14.6424C20.7417 14.0901 20.294 13.6424 19.7417 13.6424L19.7417 15.6424ZM8.56551 13.9353C8.17499 14.3258 8.17499 14.959 8.56551 15.3495L14.9295 21.7135C15.32 22.104 15.9532 22.104 16.3437 21.7135C16.7342 21.3229 16.7342 20.6898 16.3437 20.2992L10.6868 14.6424L16.3437 8.98554C16.7342 8.59502 16.7342 7.96185 16.3437 7.57133C15.9532 7.1808 15.32 7.1808 14.9295 7.57133L8.56551 13.9353ZM19.7417 13.6424L9.27262 13.6424L9.27262 15.6424L19.7417 15.6424L19.7417 13.6424Z" fill="white"/>
                <circle cx="14.3577" cy="14.6424" r="13.3576" transform="rotate(180 14.3577 14.6424)" stroke="#006CDF" stroke-width="2"/>
            </svg>
        </div>
        <div class="next__mobile">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.97412 13.3576C8.42184 13.3576 7.97412 13.8053 7.97412 14.3576C7.97412 14.9099 8.42184 15.3576 8.97412 15.3576V13.3576ZM20.1503 15.0647C20.5408 14.6742 20.5408 14.041 20.1503 13.6505L13.7863 7.28654C13.3958 6.89601 12.7627 6.89601 12.3721 7.28654C11.9816 7.67706 11.9816 8.31023 12.3721 8.70075L18.029 14.3576L12.3721 20.0145C11.9816 20.405 11.9816 21.0381 12.3721 21.4287C12.7627 21.8192 13.3958 21.8192 13.7863 21.4287L20.1503 15.0647ZM8.97412 15.3576H19.4432V13.3576H8.97412V15.3576Z" fill="white"/>
                <circle cx="14.3576" cy="14.3576" r="13.3576" stroke="#006CDF" stroke-width="2"/>
            </svg>
        </div>
        <div class="slider__wrapper">
            <div class="slider__itemWrapper">
                <div class="slider__itemInner">
                    <div class="slider__itemContent"></div>
                    <h3>
                        <?php printf( _e('Standard', 'trade'))?>
                    </h3>
                    <h5>
                        <?php printf( _e('Deposit amount:
                        from $1,000 to $10,000', 'trade'))?>
                    </h5>
                    <p>
                        Bonus: 30%<br><?php printf( _e('', 'trade'))?>
                        Wireless trading: 1<br><?php printf( _e('', 'trade'))?>
                        Designated Senior Broker: ✓<br><?php printf( _e('', 'trade'))?>
                        Daily Market Reviews: ✓<br><?php printf( _e('', 'trade'))?>
                        Alerts– Emails & Text message: x<br><?php printf( _e('', 'trade'))?>
                        Web tour & Introduction to website: ✓<br><?php printf( _e('', 'trade'))?>
                        E-book education & Training: <br><?php printf( _e('', 'trade'))?>
                        Additional strategies: x<br><?php printf( _e('', 'trade'))?>
                        Management of risks: x<br><?php printf( _e('', 'trade'))?>
                        Withdrawals: Standard<br><?php printf( _e('', 'trade'))?>
                        Personal unification system*: x<br><?php printf( _e('', 'trade'))?>
                    </p>
                </div>
                <a class=" button button-primary button-slider" href=""><?php printf( _e('Get started today', 'trade'))?></a>
            </div>
            <div class="slider__itemWrapper">
                <div class="slider__itemInner">
                    <div class="slider__itemContent"></div>
                    <h3>
                        <?php printf( _e('Premium', 'trade'))?>
                    </h3>
                    <h5>
                        <?php printf( _e('Deposit amount:
                        from $10,000 to $25,000', 'trade'))?>
                    </h5>
                    <p>
                        Bonus: 35%<br><?php printf( _e('', 'trade'))?>
                        Wireless trading: 5<br><?php printf( _e('', 'trade'))?>
                        Designated Senior Broker: ✓<br><?php printf( _e('', 'trade'))?>
                        Daily Market Reviews: ✓<br><?php printf( _e('', 'trade'))?>
                        Alerts– Emails & Text message: x<br><?php printf( _e('', 'trade'))?>
                        Web tour & Introduction to website: ✓<br><?php printf( _e('', 'trade'))?>
                        E-book education & Training: ✓<br><?php printf( _e('', 'trade'))?>
                        Additional strategies: x<br><?php printf( _e('', 'trade'))?>
                        Management of risks: x<br><?php printf( _e('', 'trade'))?>
                        Withdrawals: Accelerated<br><?php printf( _e('', 'trade'))?>
                        Personal unification system*: x<br><?php printf( _e('', 'trade'))?>
                    </p>
                </div>
                <a class="button button-primary button-slider" href=""><?php printf( _e('Get started today', 'trade'))?></a>
            </div>
            <div class="slider__itemWrapper">
                <div class="slider__itemInner">
                    <div class="slider__itemContent"></div>
                    <h3>
                        <?php printf( _e('Ultra', 'trade'))?>
                    </h3>
                    <h5>
                        <?php printf( _e('Deposit amount:
                        from $25,000 to $100,000', 'trade'))?>
                    </h5>
                    <p>
                        Bonus: 70%<br><?php printf( _e('', 'trade'))?>
                        Wireless trading: 7<br><?php printf( _e('', 'trade'))?>
                        Designated Senior Broker: ✓<br><?php printf( _e('', 'trade'))?>
                        Daily Market Reviews: ✓<br><?php printf( _e('', 'trade'))?>
                        Alerts– Emails & Text message: ✓<br><?php printf( _e('', 'trade'))?>
                        Web tour & Introduction to website: ✓<br><?php printf( _e('', 'trade'))?>
                        E-book education & Training: ✓<br><?php printf( _e('', 'trade'))?>
                        Additional strategies: ✓<br><?php printf( _e('', 'trade'))?>
                        Management of risks: x<br><?php printf( _e('', 'trade'))?>
                        Withdrawals: Accelerated<br><?php printf( _e('', 'trade'))?>
                        Personal unification system*: x<br><?php printf( _e('', 'trade'))?>
                    </p>
                </div>
                <a class="button-primary button button-slider" href=""><?php printf( _e('Get started today', 'trade'))?></a>
            </div>
            <div class="slider__itemWrapper">
                <div class="slider__itemInner">
                    <div class="slider__itemContent"></div>
                    <h3>
                        <?php printf( _e('Trial', 'trade'))?>
                    </h3>
                    <h5>
                        <?php printf( _e('Deposit amount:
                        from $150 to $1,000', 'trade'))?>
                    </h5>
                    <p>
                        Bonus: 10%<br><?php printf( _e('', 'trade'))?>
                        Wireless trading: –<br><?php printf( _e('', 'trade'))?>
                        Designated Senior Broker: x<br><?php printf( _e('', 'trade'))?>
                        Daily Market Reviews: x<br><?php printf( _e('', 'trade'))?>
                        Alerts– Emails & Text message: x<br><?php printf( _e('', 'trade'))?>
                        Web tour & Introduction to website: x<br><?php printf( _e('', 'trade'))?>
                        E-book education & Training: ✓<br><?php printf( _e('', 'trade'))?>
                        Additional strategies: x<br><?php printf( _e('', 'trade'))?>
                        Management of risks: x<br><?php printf( _e('', 'trade'))?>
                        Withdrawals: Standard<br><?php printf( _e('', 'trade'))?>
                        Personal unification system*: x<br><?php printf( _e('', 'trade'))?>
                    </p>
                </div>
                <a class="button button-primary button-slider" href=""><?php printf( _e('Get started today', 'trade'))?></a>
            </div>
            <div class="slider__itemWrapper">
                <div class="slider__itemInner">
                    <div class="slider__itemContent"></div>
                    <h3>
                        <?php printf( _e('Platinum', 'trade'))?>
                    </h3>
                    <h5>
                        <?php printf( _e('Deposit amount:
                        from $100,000 to $250,000', 'trade'))?>
                    </h5>
                    <p>
                        Bonus: 85%<br><?php printf( _e('', 'trade'))?>
                        Wireless trading: 10<br><?php printf( _e('', 'trade'))?>
                        Designated Senior Broker: ✓<br><?php printf( _e('', 'trade'))?>
                        Daily Market Reviews: ✓<br><?php printf( _e('', 'trade'))?>
                        Alerts– Emails & Text message: ✓<br><?php printf( _e('', 'trade'))?>
                        Web tour & Introduction to website: ✓<br><?php printf( _e('', 'trade'))?>
                        E-book education & Training: ✓<br><?php printf( _e('', 'trade'))?>
                        Additional strategies: ✓<br><?php printf( _e('', 'trade'))?>
                        Management of risks: ✓<br><?php printf( _e('', 'trade'))?>
                        Withdrawals: Accelerated<br><?php printf( _e('', 'trade'))?>
                        Personal unification system*: x<br><?php printf( _e('', 'trade'))?>
                    </p>
                </div>
                <a class="button button-primary button-slider" href=""><?php printf( _e('Get started today', 'trade'))?></a>
            </div>
            <div class="slider__itemWrapper">
                <div class="slider__itemInner">
                    <div class="slider__itemContent"></div>
                    <h3>
                        <?php printf( _e('VIP', 'trade'))?>
                    </h3>
                    <h5>
                        <?php printf( _e('Deposit amount:
                        more than $250,000', 'trade'))?>
                    </h5>
                    <p>
                        Bonus: 100%<br><?php printf( _e('', 'trade'))?>
                        Wireless trading: 20<br><?php printf( _e('', 'trade'))?>
                        Designated Senior Broker: ✓<br><?php printf( _e('', 'trade'))?>
                        Daily Market Reviews: ✓<br><?php printf( _e('', 'trade'))?>
                        Alerts– Emails & Text message: ✓<br><?php printf( _e('', 'trade'))?>
                        Web tour & Introduction to website: ✓<br><?php printf( _e('', 'trade'))?>
                        E-book education & Training: ✓<br><?php printf( _e('', 'trade'))?>
                        Additional strategies: ✓<br><?php printf( _e('', 'trade'))?>
                        Management of risks: ✓<br><?php printf( _e('', 'trade'))?>
                        Withdrawals: On the same day<br><?php printf( _e('', 'trade'))?>
                        Personal unification system*: ✓<br><?php printf( _e('', 'trade'))?>
                    </p>
                </div>
                <a class="button button-primary button-slider" href=""><?php printf( _e('Get started today', 'trade'))?></a>
            </div>
        </div>
    </div>
    </div>
</section>
<script>

</script>
<?php echo get_template_part('template-parts/blocks/cta') ?>


<?php get_footer();?>