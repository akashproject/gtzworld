<!-- Newsletter Start -->

<section class="section bg-thm-color-two-gradient z-1 newsletter_form_sec">
    <img src="<?php echo get_template_directory_uri(); ?>/images/elements/element_1.png" class="element_1" alt="Element">
    <img src="<?php echo get_template_directory_uri(); ?>/images/elements/element_2.png" class="element_2" alt="Element">

    <div class="container relative z-1">
        <div class="arrows to_right slideRight">
            <div class="arrow"></div>
            <div class="arrow"></div>
            <div class="arrow"></div>
            <div class="arrow"></div>
            <div class="arrow"></div>
        </div>

        <div class="arrows to_up slideTop">
            <div class="arrow"></div>
            <div class="arrow"></div>
            <div class="arrow"></div>
            <div class="arrow"></div>
            <div class="arrow"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="section-title mx-width-100">
                    <p class="subtitle">
                        <i class="fal fa-book"></i>
                        Our Newsletters
                    </p>
                    <h3 class="title">Join our newsletters to get every single update.</h3>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="newsletter_form">
                    <?php echo do_shortcode('[contact-form-7 id="184" title="News Letter"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter End -->