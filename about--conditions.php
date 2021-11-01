<?php 
    /* Template Name: About Conditions */ 
?>
<?php get_header(); ?>
<section class="hero hero__header--cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero5.png);">
<div class="container">
            <div class="col-md-6 hero__contentWrapper">
                <h2>
<?php printf( _e('Favorable trading conditions for traders', 'trade'))?>
                </h2>
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
    <section class="card">
        <div class="container">
            <div class="row card__row">
                <div class="col-md-6 card__item">
                    <div class="card__itemInner">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/trade-execution-1024x576 1.png" alt="" class="card__itemImage">
                        <div class="card__itemContent">
                            <h3>
                               <?php printf( _e('Floating shoulder', 'trade'))?>
                            </h3>
                            <p><?php printf( _e('Due to the fact that we have implemented a floating leverage system, the leverage reaches 1: 1000, which means that our traders can increase their purchasing power by as much as 1000 times. High leverage opens up opportunities for traders that they couldnt even think of; the ability to invest a small percentage of funds and, nevertheless, trade in large volumes. But we must bear in mind that there is a possibility that the leverage can bring small losses.', 'trade'))?>
                               
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 card__item">
                    <div class="card__itemInner">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/forex-signals 1.png" alt="" class="card__itemImage">
                        <div class="card__itemContent">
                            <h3>
                            <?php printf( _e('Tight spreads', 'trade'))?>
                            </h3>
                            <p>
                                <?php printf( _e('Tight spreads are a key prerequisite when choosing a Forex broker. The initial trading cost depends on how low or high the spreads are offered, so the fact that we provide you with tight spreads and even spreads starting from 0.1 pips gives you an edge from the start.', 'trade'))?>
                            </p>
                            <p>
                                <?php printf( _e('* Depending on the type of account and market conditions', 'trade'))?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 card__item">
                    <div class="card__itemInner">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Trading 1.png" alt="" class="card__itemImage">
                        <div class="card__itemContent">
                            <h3><?php printf( _e('Fast execution', 'trade'))?>
            
                            </h3>
                            <p><?php printf( _e('Your transactions are immediately executed on CompanyName, ensuring that you are getting the best prices and no delays can interfere with your trading activities.', 'trade'))?>
            
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 card__item">
                    <div class="card__itemInner">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/6-11-2020-5-13-50-pm 1.png" alt="" class="card__itemImage">
                        <div class="card__itemContent">
                            <h3><?php printf( _e('No dealing desk (NDD)', 'trade'))?>
                                
                            </h3>
                            <p>
                                <?php printf( _e('NDD technology allows us to work with multiple liquidity providers to provide you with the best prices. With this technology, we offer deep interbank liquidity and give you direct access to rates that can be executed instantly*.', 'trade'))?>
                            </p>
                            <p>
                                <?php printf( _e('* Depending on the type of account and market conditions.', 'trade'))?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 card__item">
                    <div class="card__itemInner">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/8a4c64ef2b_50164634_cours-trading 1.png" alt="" class="card__itemImage">
                        <div class="card__itemContent">
                            <h3><?php printf( _e('Automated trading', 'trade'))?>
                            </h3>
                            <p><?php printf( _e('Algorithmic trading is an innovative breakthrough. With automated trading, a trader develops a strategy or implements a ready-made one and then applies it with an automated trading system. This system automatically starts trading for you according to the strategy that you have already implemented, making your trading activities automatic. The biggest advantage of this system is that traders dont have to worry about missing out on an opportunity if they are distracted for a while. Profits can be achieved even when you are sleeping or not at home, because you have incorporated your trading algorithm into this system. It is important to keep in mind that, as with traditional trading, losses can also occur with automated trading.', 'trade'))?>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo get_template_part('template-parts/blocks/cta') ?>
<?php get_footer(); ?>