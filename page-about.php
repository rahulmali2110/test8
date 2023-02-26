<?php
/**
* Template Name: About
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
    <?php if( have_rows('our_legacy') ): ?>
    <?php $even = false;  while( have_rows('our_legacy') ): the_row();  ?>
    <div class="row no-gutter <?php if ($even) { echo " "; } else { echo "flex-reverse"; } $even = !$even; ?>">
        <div class="col col--6 col--md-12">
            <div class="overflow-hidden h-100">
                <div class="banner about-hero h-100"
                    style="background-image: url(<?php the_sub_field('banner'); ?>);"
                    data-animate="zoom-out" data-offset="300"></div>
            </div>
        </div>
        <div class="col col--6 col--md-12">
            <div class="section v-center pb-10 h-100 <?php
                    if($i % 2 == 0){
                         echo "bg-green";
                     }else{
                          echo "";
                     }
                 ?>">
                <div class="container-half <?php
                        if($i % 2 == 0){
                             echo "container-left";
                         }else{
                              echo "ml-8";
                         }
                     ?>">
                    <?php if(get_sub_field('sub_title') ){ ?>
                    <span class="section__subtitle" data-animate="fade-up-short"><?php the_sub_field('sub_title'); ?></span>
                    <?php } ?>
                    <?php if(get_sub_field('heading') ){ ?>
                    <h2 class="section__title" data-splitting="lines" data-animate="lines"><?php the_sub_field('heading'); ?></h2>
                    <?php } ?>
                    <div data-animate="fade-up">
                        <?php if(get_sub_field('description') ){ ?>
                        <p><?php the_sub_field('description'); ?></p>
                        <?php } ?>
                        <?php if(get_sub_field('download_btn_text') ){ ?>
                        <a href="javascript:void(0);" role="button" class="btn btn--blue btn--hover-white"
                            data-modal="#download_brochure"><?php the_sub_field('download_btn_text'); ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $i++; endwhile; ?>
    <?php endif; ?>
    <?php if( have_rows('over_executed') ): ?>
    <div class="section bg-blue relative overflow-hidden we-are">
        <?php if(get_field('who_banner') ){ ?>
        <img src="<?php the_field('who_banner'); ?>"
            class="we-are__pattern" alt="">
        <?php } ?>
        <div class="container relative">
            <div class="row">
                <div class="col col--6 col--md-12">
                    <div class="we-are__left relative">
                        <div data-animate="fade-right" data-animate-duration="2">
                            <?php if(get_field('sub_title_weare') ){ ?>
                            <span class="section__subtitle"><?php the_field('sub_title_weare'); ?></span>
                            <?php } ?>
                            <?php if(get_field('who_we_heading') ){ ?>
                            <h2><?php the_field('who_we_heading'); ?></h2>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col col--6 col--md-12">
                    <div class="we-are__right relative" data-animate="fade-left" data-animate-duration="2">
                        <?php if(get_field('over_executed_heading') ){ ?>
                        <span class="we-are__title mb-5"><?php the_field('over_executed_heading'); ?></span>
                        <?php } ?>
                        <div id="we_are" class="swiper">
                            <div class="swiper-wrapper">
                                <?php while( have_rows('over_executed') ): the_row();  ?>
                                <div class="swiper-slide">
                                    <div class="exe">
                                        <?php if( get_sub_field('count') ){ ?>
                                        <span class="exe__title"><?php the_sub_field('count'); ?></span>
                                        <?php } ?>
                                        <?php if( get_sub_field('info') ){ ?>
                                        <span class="exe__text"><?php the_sub_field('info'); ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div id="we_are_pagination"
                            class="swiper-pagination swiper-pagination-outline swiper-pagination-green mt-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if( have_rows('services_block') ): ?>
    <div class="section pb-10 bg-light">
        <div class="container">
            <div class="row mb-3">
                <div class="col col--5 col--md-12">
                    <?php if( get_field('our_sub_title') ){ ?>
                    <span class="section__subtitle" data-animate="fade-up-short"><?php the_field('our_sub_title'); ?></span>
                    <?php } ?>
                    <?php if( get_field('our_heading') ){ ?>
                    <h2 class="section__title" data-splitting="lines" data-animate-delay="1" data-animate="lines"><?php the_field('our_heading'); ?></h2>
                    <?php } ?>
                </div>
            </div>
            <div class="row row--sm gap">
                <?php $i=0; while( have_rows('services_block') ): the_row();  ?>
                <div class="col col--3 col--md-6" data-animate="fade-up" data-animate-delay="<?php echo $i; ?>">
                    <div class="card card--hover card--service">
                        <?php if( get_sub_field('image') ){ ?>
                        <div class="card__image">
                            <?php echo wp_get_attachment_image( get_sub_field('image'), 'full'); ?>
                        </div>
                        <?php } ?>
                        <?php if( get_sub_field('title') ){ ?>
                        <div class="card__body">
                            <span class="card__title fs-32"><?php the_sub_field('title'); ?></span>
                        </div>
                        <?php } ?>
                        <?php if( get_sub_field('link') ){ ?>
                        <div class="card__foot">
                            <a href="<?php the_sub_field('link'); ?>" class="btn btn--link">Learn more</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php $i++; endwhile; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row no-gutter bg-green">
        <div class="col col--6 col--md-12">
            <div class="overflow-hidden h-100 object-fit">
                <img src="<?php the_field('open_banner'); ?>"
                    data-animate="zoom-out" alt="">
            </div>
        </div>
        <div class="col col--6 col--md-12 about-innovation">
            <div class="container-half ml-8" data-animate="fade-up">
                <?php if( get_field('open_sub_title') ){ ?>
                <span class="section__subtitle"><?php the_field('open_sub_title'); ?></span>
                <?php } ?>
                <?php if( get_field('open_heading') ){ ?>
                <h2><?php the_field('open_heading'); ?></h2>
                <?php } ?>
                <?php the_content(); ?>
                <a href="<?php the_field('learn_more_link'); ?>" class="btn btn--blue btn--hover-white">
                    <div class="btn__wrap">
                        <span>Learn more</span>
                        <svg width="13.199" height="13.201" viewBox="0 0 13.199 13.201">
                            <path fill="currentColor"
                                d="M11.996,6.559c-0.025-0.331-0.313-0.579-0.643-0.554 c-0.238,0.018-0.442,0.174-0.521,0.398c-0.029,0.094-0.041,0.193-0.037,0.291c0,1.538-0.008,3.073,0.006,4.61 c0.026,0.361-0.246,0.674-0.606,0.699c-0.028,0.002-0.056,0.003-0.084,0.001c-2.739-0.009-5.48-0.005-8.22-0.005 c-0.334,0.045-0.641-0.189-0.686-0.523c-0.007-0.053-0.007-0.105,0-0.158c0-1.354,0-2.707,0-4.062c0-1.405,0-2.811,0-4.217 C1.189,2.793,1.327,2.564,1.55,2.46c0.108-0.046,0.225-0.065,0.342-0.056h4.635c0.185,0.013,0.367-0.053,0.5-0.182 c0.169-0.172,0.219-0.428,0.127-0.65C7.06,1.338,6.828,1.189,6.576,1.202c-1.579,0-3.158,0-4.736,0C0.846,1.18,0.022,1.967,0,2.961 c0,0.022,0,0.045,0,0.067c0,2.783,0,5.566,0,8.348c-0.008,0.999,0.795,1.814,1.793,1.822c0.017,0,0.034,0,0.052,0 c1.382,0,2.764,0,4.145,0h4.117c0.141,0.003,0.281-0.009,0.419-0.034c0.86-0.158,1.481-0.911,1.474-1.785c0-1.578,0-3.158,0-4.737 c0-0.028,0-0.056,0-0.084 M12.525,0h-1.714C10.226,0,9.64,0,9.055,0C8.72-0.026,8.429,0.225,8.404,0.559 C8.388,0.754,8.468,0.944,8.619,1.07c0.412,0.409,0.818,0.824,1.234,1.229c0.082,0.08,0.085,0.118,0,0.2 c-1.404,1.4-2.804,2.8-4.2,4.2C5.609,6.741,5.568,6.786,5.53,6.833C5.336,7.081,5.37,7.437,5.607,7.644 c0.247,0.221,0.626,0.2,0.847-0.047C6.461,7.59,6.467,7.583,6.473,7.575c1.407-1.408,2.815-2.816,4.221-4.226 c0.093-0.094,0.136-0.082,0.222,0c0.399,0.409,0.808,0.808,1.209,1.215c0.211,0.261,0.595,0.301,0.855,0.09 c0.16-0.129,0.244-0.331,0.223-0.535c0-1.153,0-2.305,0-3.457c0.03-0.337-0.219-0.634-0.555-0.664 C12.607-0.005,12.566-0.004,12.525,0" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
<?php get_footer();