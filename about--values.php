<?php 
    /* Template Name: About Values */ 
?>
<?php get_header(); ?>
<section class="hero hero__header--cover bottom" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Без\ имени-1\ 1.png);">
<div class="container">
            <div class="col-md-6 hero__contentWrapper">
                <h2>
                Company values

                </h2>
                <p class="fw-600 mb-30">
                CompanyName was first launched in 2010 and was created to provide the best trading conditions and trading tools for forex and cryptocurrency traders.
                </p>
                <div class="buttons--row row">
                    <div class="col-sm-auto button--wrapper">
                        <a href="#" class="button button-primary ">
                        Start trading
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
                    <h3 class="mb-40">Why do professional traders trust us?</h3>
                    <p>
                        Our mission is to effectively evaluate the time of our traders in the fast growing, flexible<br>
                        financial markets and use this time with the help of knowledge to the maximum benefit. Invest<br>
                        wisely. Our passion is to get the most out of our investment and improve our results every time.<br>
                        <br>
                        We are constantly working on the quality of Company and working with experienced teams of<br>
                        traders from around the world. As a result of constant work on itself, Company has become a fast<br>
                        growing company and a global trademark, which it is to this day.<br>
                        <br>
                    </p>
                </div>
            </div>
            <div class="advantages__imageWrapper col-lg-5">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Business_with_ESA_pillars 1.png" alt="" class="advantages__image">
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <h3 class="mb-40">Start your trading journey now</h3>
            <div class="row features__itemRow">
                <div class="col-md-3 col-sm-4 features__item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/features-3/1.png" alt="">
                    <h6> Reliability</h6>
                    <p>
                        We value trust and we know that the best traders trust us. To do this, we do our best to maintain this level of trust and constantly improve with them.
                    </p>
                </div>
                <div class="col-md-3 col-sm-4  features__item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/features-3/2.png" alt="">
                    <h6>
                        Fidelity
                    </h6>
                    <p>  
                    We are loyal and committed to our employees and customers. It is important for us to maintain human relations and monitor the quality of the company's work, constantly maintaining an environment for growth.
                    </p>
                </div>
                <div class="col-md-3  col-sm-4  features__item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/features-3/3.png" alt="">
                    <h6>
                        Respect
                    </h6>
                    <p>
                        We respect our clients and employees, because they chose us and started the right way. Respect manifests itself both at the interpersonal level and at the organizational level.
                    </p>
                </div>
                <div class="col-md-3  col-sm-4  features__item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/features-3/4.png" alt="">
                    <h6>
                        Development
                    </h6>
                    <p>
                        We create an environment for growth and development for each employee of the client. We are working on improvements and believe that we are doing it for a reason.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php echo get_template_part('template-parts/blocks/cta') ?>

    
<?php get_footer(); ?>