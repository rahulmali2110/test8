<?php
/**
* Template Name: Contact
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

    <div class="under-header pb-10">
        <div class="container">
            <div class="text-header text-center">
                <h1 class="mb-0">Contact Us</h1>
            </div>
            <div class="col--8 col--lg-12 mx-auto">
                <div class="contact-container">
                    <div class="contact-form">
                        <h2 class="text-blue">Send us your inquiry & we will reach out to you soon.</h2>
                        <form action="#">
                            <div class="form-group form-group--floating">
                                <input type="text" class="form-control" id="c_name" placeholder="Name">
                                <label for="c_name">Name<span>*</span></label>
                            </div>
                            <div class="form-group form-group--floating">
                                <input type="text" class="form-control" id="c_organization" placeholder="Organization">
                                <label for="c_organization">Organization<span>*</span></label>
                            </div>
                            <div class="form-group form-group--floating">
                                <input type="text" class="form-control" id="c_email" placeholder="Company Email">
                                <label for="c_email">Company Email<span>*</span></label>
                            </div>
                            <div class="form-group form-group--floating">
                                <input type="text" class="form-control" id="c_phone" placeholder="Phone Number">
                                <label for="c_phone">Phone Number<span>*</span></label>
                            </div>
                            <div class="form-group form-group--floating">
                                <textarea name="message" id="c_message" cols="30" rows="5" class="form-control"
                                    placeholder="Message"></textarea>
                                <label for="c_message">Message<span>*</span></label>
                            </div>
                            <input type="submit" value="Submit" class="btn btn--green" style="min-width: 180px;">
                        </form>
                    </div>
                    <div class="contact-address">
                        <?php if( get_field('india_heading', 'option') ){ ?>
                        <span class="contact-title"><?php the_field('india_heading', 'option'); ?></span>
                        <?php } ?>
                        <?php if( get_field('address_1', 'option') ){ ?>
                        <p><?php the_field('address_1', 'option'); ?>
                        </p>
                        <?php } ?>
                        <p>
                            <?php if( get_field('in_contact_1', 'option') ){ ?>
                            <a href="tel:<?php the_field('in_contact_1', 'option'); ?>"><?php the_field('in_contact_1', 'option'); ?></a><br>
                            <?php } ?>
                            <?php if( get_field('in_contact_2', 'option') ){ ?>
                            <a href="tel:<?php the_field('in_contact_2', 'option'); ?>"><?php the_field('in_contact_2', 'option'); ?></a><br>
                            <?php } ?>
                            <?php if( get_field('in_contact_3', 'option') ){ ?>
                            <a href="tel:<?php the_field('in_contact_3', 'option'); ?>"><?php the_field('in_contact_3', 'option'); ?></a>
                            <?php } ?>
                        </p>
                        <hr class="divider">
                        <?php if( get_field('singapore_heading', 'option') ){ ?>
                        <span class="contact-title"><?php the_field('singapore_heading', 'option'); ?></span>
                        <?php } ?>
                        <?php if( get_field('address_2', 'option') ){ ?>
                        <p><?php the_field('address_2', 'option'); ?></p>
                        <?php } ?>
                        <?php if( get_field('sg_contact_1', 'option') ){ ?>
                        <p><a href="tel:+65 68714242"><?php the_field('sg_contact_1', 'option'); ?></a></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();