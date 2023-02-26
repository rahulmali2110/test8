<?php
/**
* Template Name: Services
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
                <?php if(get_field('banner_image') ){ ?>
                <img src="<?php the_field('banner_image'); ?>"
                    data-animate="zoom-out" alt="">
                <?php } ?>
                <div class="banner h-100"
                    style="background-image: url(<?php the_field('banner_image'); ?>);"
                    data-animate="zoom-out"></div>
            </div>
        </div>
        <div class="col col--5 col--md-12 bg-green shape shape--right service-hero__content">
            <div class="container-half container-left">
                <h1 data-splitting="lines" data-animate="lines"><?php the_title(); ?></h1>
                <div data-animate="fade-up">
                    <?php the_content(); ?>
                    <a href="#features">
                        <svg width="56" height="56" viewBox="0 0 56 56">
                            <path fill="currentColor"
                                d="M28,56C12.561,56,0,43.439,0,28S12.561,0,28,0s28,12.561,28,28S43.439,56,28,56z M28,1 C13.112,1,1,13.112,1,28s12.112,27,27,27s27-12.112,27-27S42.888,1,28,1z M39.854,22.854l-0.707-0.707L27.672,33.621L16.197,22.146 l-0.707,0.707l12.182,12.182L39.854,22.854z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php if( have_rows('featured_block') ): ?>
    <div id="features" class="section">
        <div class="container">
            <?php if( get_sub_field('featured_heading') ){ ?>
            <h2 class="mb-5"><?php the_sub_field('featured_heading'); ?></h2>
            <?php } ?>
            <div class="row features-row">
                <?php $i=0;  while( have_rows('featured_block') ): the_row();  ?>
                <div class="col col--4 col--md-6 col--sm-12" data-animate="fade-up" data-animate-delay="<?php echo $i; ?>">
                    <div class="features-col">
                        <div class="features-body">
                            <?php if( get_sub_field('image') ){ ?>
                            <div class="features-icon">
                                <span><?php echo wp_get_attachment_image( get_sub_field('image'), 'full'); ?></span>
                            </div>
                            <?php } ?>
                            <?php if( get_sub_field('title') ){ ?>
                            <span class="features-title"><?php the_sub_field('title'); ?></span>
                            <?php } ?>
                            <?php if( get_sub_field('info') ){ ?>
                            <p><?php the_sub_field('info'); ?></p>
                            <?php } ?>
                        </div>
                        <?php if( get_sub_field('list') ){ ?>
                        <div class="features-foot">
                            <hr class="divider">
                            <?php the_sub_field('list'); ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php $i++; endwhile; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="feature section bg-blue">
        <div class="container">
            <div class="row">
                <?php if( get_field('featured_image') ){ ?>
                <div class="col col--6 col--md-12">
                    <div class="feature__hero overflow-hidden">
                        <img src="<?php the_field('featured_image'); ?>"
                            data-animate="zoom-out" alt="">
                    </div>
                </div>
                <?php } ?>
                <div class="col col--6 col--md-12">
                    <div class="feature__content" data-animate="fade-up">
                        <?php if( get_field('featured_sub_heading') ){ ?>
                        <span class="section_title"><?php the_field('featured_sub_heading'); ?></span>
                        <?php } ?>
                        <?php if( get_field('featured_heading') ){ ?>
                        <h2 class="text-green"><?php the_field('featured_heading'); ?></h2>
                        <?php } ?>
                        <?php if( get_field('featured_link') ){ ?>
                        <a href="<?php the_field('featured_link'); ?>" class="btn btn--green btn--hover-white mt-2">Learn more</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $args = array(
            'post_type' => 'impact',
            'posts_per_page' => 9
        );
        ?>
        <?php $the_query = new WP_Query( $args ); ?>
        <?php if ( $the_query->have_posts() ) {   ?>
    <div class="section relative pb-10">
        <div class="container">
            <?php if( get_field('case_sub_heading') ){ ?>
            <span class="section__subtitle" data-animate="fade-up-short"><?php the_field('case_sub_heading'); ?></span>
            <?php } ?>
            <?php if( get_field('case_heading') ){ ?>
            <h2 class="section__title mb-5" data-splitting="lines" data-animate="lines"><?php the_field('case_heading'); ?></h2>
            <?php } ?>
            <div class="relative stack-1" data-animate="fade-up" data-animate-duration="2">
                <div id="case_studies" class="swiper">
                    <div class="swiper-wrapper">
                        <?php while ( $the_query->have_posts() ) {
                    $the_query->the_post();  ?>
                        <div class="swiper-slide">
                            <?php get_template_part( 'template-parts/content', 'impact');  ?>
                        </div>
                        <?php }  ?>
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
    <?php }  ?>
    <?php wp_reset_postdata(); ?>
    <div class="bg-light service-paging">
        <div class="container">
            <a href="<?php the_field('innovation_prev_link'); ?>" class="btn btn--green">
                <span>PROCESS INNOVATION</span>
            </a>
            <a href="<?php the_field('integration_next_link'); ?>" class="btn btn--green">
                <span>FORWARD INTEGRATION</span>
            </a>
        </div>
    </div>

    <?php get_template_part( 'components/getintouch' ); ?>

</main>
<?php get_footer();