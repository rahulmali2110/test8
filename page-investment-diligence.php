<?php
/**
* Template Name: Investment Diligence
* Template Post Type: page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package archidiaries
 */

get_header();
?>
<main id="primary" class="site-main">

    <div class="row no-gutter flex-reverse service-hero">
        <div class="col col--7 col--md-12">
            <div class="overflow-hidden h-100 object-fit">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/services/investment.jpg"
                    data-animate="zoom-out" alt="">
                <div class="banner h-100"
                    style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/services/investment.jpg);"
                    data-animate="zoom-out"></div>
            </div>
        </div>
        <div class="col col--5 col--md-12 bg-green shape shape--right service-hero__content">
            <div class="container-half container-left">
                <h1 data-splitting="lines" data-animate="lines">Investment Diligence</h1>
                <div data-animate="fade-up">
                    <p>Understanding the risks and opportunities of mineral assets at different stages of the project
                        lifecycle requires in-depth geotechnical expertise and financial analysis. Our holistic
                        evaluation and tailored guidance help mining companies make crucial decisions at every step of
                        the operation.</p>
                    <a href="#features" class="text-white">
                        <svg width="56" height="56" viewBox="0 0 56 56">
                            <path fill="currentColor"
                                d="M28,56C12.561,56,0,43.439,0,28S12.561,0,28,0s28,12.561,28,28S43.439,56,28,56z M28,1 C13.112,1,1,13.112,1,28s12.112,27,27,27s27-12.112,27-27S42.888,1,28,1z M39.854,22.854l-0.707-0.707L27.672,33.621L16.197,22.146 l-0.707,0.707l12.182,12.182L39.854,22.854z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="section">
        <div class="container">
            <h2 class="mb-5">Featured Capabilities</h2>
            <div class="row features-row">
                <div class="col col--4 col--md-6 col--sm-12" data-animate="fade-up">
                    <div class="features-col">
                        <div class="features-body">
                            <div class="features-icon">
                                <span><img
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/svg/investment/1.svg"
                                        alt=""></span>
                            </div>
                            <span class="features-title">MINERAL ASSET VALUATION</span>
                            <p>Strategic investments are key to scale up volumes from diverse mineral assets and
                                multiple commodities. Our expert evaluation highlights the risks and opportunities of
                                every potential resource to help investors arrive at an informed decision.</p>
                        </div>
                        <div class="features-foot">
                            <hr class="divider">
                            <ul class="features-list">
                                <li>Analysis of resource potential, geotechnics & environment</li>
                                <li>Assessment of commodity demand-supply & price dynamics</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col--4 col--md-6 col--sm-12" data-animate="fade-up" data-animate-delay="1">
                    <div class="features-col">
                        <div class="features-body">
                            <div class="features-icon">
                                <span><img
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/svg/investment/2.svg"
                                        alt=""></span>
                            </div>
                            <span class="features-title">INNOVATIVE TECHNOLOGIES</span>
                            <p>Our extensive network offers investors access to select innovative early-stage tech
                                investment opportunities in the natural resources sector.</p>
                        </div>
                        <div class="features-foot">
                            <hr class="divider">
                            <ul class="features-list">
                                <li>Exclusive access to emerging technologies</li>
                                <li>Product market fit analysis</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="feature section bg-blue">
        <div class="container">
            <div class="row">
                <div class="col col--6 col--md-12">
                    <div class="feature__hero overflow-hidden">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/feature.jpg"
                            data-animate="zoom-out" alt="">
                    </div>
                </div>
                <div class="col col--6 col--md-12">
                    <div class="feature__content" data-animate="fade-up">
                        <span class="section__subtitle">FEATURED INSIGHTS</span>
                        <h2 class="text-green">Increasing productivity in heavy industry processing plants with advanced
                            analytics.</h2>
                        <a href="insights.html" class="btn btn--green btn--hover-white mt-2">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section relative pb-10">
        <div class="container">
            <span class="section__subtitle" data-animate="fade-up-short">CASE STUDIES</span>
            <h2 class="section__title mb-5" data-splitting="lines" data-animate="lines">Client Impact</h2>
            <div class="relative stack-1" data-animate="fade-up" data-animate-duration="2">
                <div id="case_studies" class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card card--case">
                                <div class="card__image">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/case-studies/case-1.jpg"
                                        alt="">
                                </div>
                                <div class="card__body shape shape--top">
                                    <span class="card__subtitle">MINING</span>
                                    <span class="card__title">Our approach to solve complex geological model for BNK
                                        group</span>
                                </div>
                                <div class="card__foot">
                                    <a href="#" class="btn btn--link">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card--case">
                                <div class="card__image">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/case-studies/case-2.jpg"
                                        alt="">
                                </div>
                                <div class="card__body shape shape--top">
                                    <span class="card__subtitle">FORWARD INTEGRATION</span>
                                    <span class="card__title">Mining risk assessment at Gare Palma, Odisha</span>
                                </div>
                                <div class="card__foot">
                                    <a href="#" class="btn btn--link">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card--case">
                                <div class="card__image">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/case-studies/case-3.jpg"
                                        alt="">
                                </div>
                                <div class="card__body shape shape--top">
                                    <span class="card__subtitle">FORWARD INTEGRATION</span>
                                    <span class="card__title">Increasing SALCO’s environmental sustainability by
                                        35%</span>
                                </div>
                                <div class="card__foot">
                                    <a href="#" class="btn btn--link">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card--case">
                                <div class="card__image">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/case-studies/case-1.jpg"
                                        alt="">
                                </div>
                                <div class="card__body shape shape--top">
                                    <span class="card__subtitle">MINING</span>
                                    <span class="card__title">Our approach to solve complex geological model for BNK
                                        group</span>
                                </div>
                                <div class="card__foot">
                                    <a href="#" class="btn btn--link">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card--case">
                                <div class="card__image">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/case-studies/case-2.jpg"
                                        alt="">
                                </div>
                                <div class="card__body shape shape--top">
                                    <span class="card__subtitle">FORWARD INTEGRATION</span>
                                    <span class="card__title">Mining risk assessment at Gare Palma, Odisha</span>
                                </div>
                                <div class="card__foot">
                                    <a href="#" class="btn btn--link">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card--case">
                                <div class="card__image">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero/case-studies/case-3.jpg"
                                        alt="">
                                </div>
                                <div class="card__body shape shape--top">
                                    <span class="card__subtitle">FORWARD INTEGRATION</span>
                                    <span class="card__title">Increasing SALCO’s environmental sustainability by
                                        35%</span>
                                </div>
                                <div class="card__foot">
                                    <a href="#" class="btn btn--link">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="case_studies_prev" class="swiper-button-prev swiper-circle-button">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/svg/circle-angle-left.svg"
                        alt="">
                </div>
                <div id="case_studies_next" class="swiper-button-next swiper-circle-button">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/svg/circle-angle-right.svg"
                        alt="">
                </div>
            </div>
            <div id="case_studies_pagination" data-animate="fade-up" data-animate-duration="2"
                class="swiper-pagination swiper-pagination-outline swiper-pagination-blue mt-3"></div>
        </div>
    </div>

    <div class="bg-light service-paging">
        <div class="container">
            <a href="intelligence.html" class="btn btn--green">
                <span>FORWARD INTEGRATION</span>
            </a>
            <a href="innovation.html" class="btn btn--green">
                <span>PROCESS INNOVATION</span>
            </a>
        </div>
    </div>

    <?php get_template_part( 'components/getintouch' ); ?>

</main>
<?php get_footer();