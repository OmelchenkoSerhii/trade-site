<?php 
    /* Template Name:  Forex Regulation */ 
?>
<?php get_header();?>
    <section class="hero hero__header--cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ hero-7.png);">
        <div class="container">
            <div class="col-md-6 hero__contentWrapper">
                <h2>
                Legal regulation and transparency
                </h2>
                <p class="fw-600 mb-30">
                HONESTY, RELIABILITY, MODERNITY, DEVELOPMENT
In this section you can find information about our privacy policy, a list of our agreements on the conclusion of client accounts, a risk notice in PDF format.
                </p>
                <div class="buttons--row row">
                    <div class="col-sm-auto button--wrapper">
                        <a href="#" class="button button-primary ">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <h3>
                Important facts and figures about CompanyName
            </h3>
            <div class="row">
                <div class="col-lg-6 about__card__itemWrapper">
                    <div class="about__card__item  ">
                        <div class="about__card__itemContent">
                            <h4>
                                Withdrawing funds and depositing with a convenient method
                            </h4>
                            <p>
                                Clients' deposits are completely isolated from operating funds in the company, and are
                                located in top-tier banks of the European Union. We do not use clients' funds for our
                                own activities and consider this approach unprofessional, and this is contrary to the
                                values of our company.
                            </p>
                            <a class="button button-secondary" href="">Open</a>
                        </div>
                    </div>
                    <div class="about__card__item">
                        <div class="about__card__itemContent">
                            <h4>
                                Easy account opening process
                            </h4>
                            <p>
                                This guarantees a completely secure connection during communication with our customers
                                and employees, and also protects customers during deposit and withdrawal of funds and
                                keeps confidential information. Data transmission is also secured and encrypted to avoid
                                data theft and unauthorized access by third parties. And the user authentication and
                                server authentication policy ensures that data is sent to the correct client server.
                            </p>
                            <a class=" button button-secondary" href="">Open</a>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6 about__card__itemWrapper regulation">
                        <div class="about__card__item">
                            <div class="about__card__itemContent">
                                <h4>
                                    Customer support in 16 languages
                                </h4>
                                <p>
                                    Continuous control and audit of the broker's activities allows us to guarantee the
                                    stability of the withdrawal of all funds for traders. The international broker TRS
                                    Markets falls under the jurisdiction of the United Kingdom, in the activity section
                                    OT UK SIC CODE 66110, namely Financial Markets Management, Securities Exchange
                                    Management, Administration of Exchange or Commodity Options, Exchange Activity, as
                                    well as Futures on commodity contracts. It has the right to accept both residents
                                    and non-residents of the United Kingdom.
                                </p>
                                <a class="button button-secondary" href="">Open</a>
                            </div>
                    </div>
                </div>
            </div>
    </section>
    <?php echo get_template_part('template-parts/blocks/cta') ?>
<?php get_footer()?>