<?php 
    /* Template Name: Contact */ 
?>
<?php get_header(); ?>
<section class=" contact">
            <div class="container">
                <h3 class="mb-40 fade-up appear"><?php printf( _e('Start your trading journey now', 'trade'))?></h3>
                <div class="row contact__itemRow">
                    <div class="col-lg-4 col-sm-4  contact__item fade-up appear delay-1">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/contact/1.png" alt="">
                        <p class="contact__itemContent">
                            <?php printf( _e('Phone', 'trade'))?><br>
                                <span>+442038857271</span><br>
                                <span>+74950327381</span><br>
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-4  contact__item fade-up appear delay-2">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/contact/2.png" alt="">
                        <p class="contact__itemContent">
                            <?php printf( _e('Questions by email', 'trade'))?><br><br>
                        <span>clients@trsmarkets.com</span><br>
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-4  contact__item fade-up appear delay-3">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/contact/3.png" alt="">
                        <p class="contact__itemContent">
                            <br><?php printf( _e('Main office', 'trade'))?><br>
                            <span>50 St. Mary Axe, London</span><br>
                            <span>Great Britain, United Kingdom</span><br>
                            <span> Postcode Ec3a 8fr</span><br>
                        </p>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>