<?php



/*

Template Name: About Us



*/

?>



<?php



	get_header();



?>

    <!-- Subheader Start -->

    <div class="subheader relative z-1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/about-banner.png);">

        <div class="container relative z-1">

            <div class="row">

                <div class="col-12">

                    <h1 class="page_title">About Us</h1>

                    <div class="page_breadcrumb">

                        <nav aria-label="breadcrumb">

                            <ol class="breadcrumb">

                                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">About Us</li>

                            </ol>

                        </nav>

                    </div>

                </div>

            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/images/elements/element_19.png" alt="element" class="element_1 slideRightTwo">

            <img src="<?php echo get_template_directory_uri(); ?>/images/elements/element_10.png" alt="element" class="element_2 zoom-fade">

            <img src="<?php echo get_template_directory_uri(); ?>/images/elements/element_20.png" alt="element" class="element_3 rotate_elem">

            <img src="<?php echo get_template_directory_uri(); ?>/images/elements/element_21.png" alt="element" class="element_4 rotate_elem">

        </div>

    </div>

    <!-- Subheader End -->

    <!-- About Start -->

    <section class="section about_inner">
        <div class="container">
            <div class="row ">
                <div class="col-lg-5">
                    <div class="image_box shadow_1 mb-md-80">
                        <?php $about_image = get_field("about_image"); ?>
                        <?php if($about_image) { ?> 
                            <img src="<?php echo $about_image['url']; ?>" alt="img" class="image-fit">
                        <?php } else { ?> 
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about/about.jpg" alt="img" class="image-fit">
                        <?php } ?>   
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="section-title left-align">
                        <p class="subtitle">
                            <i class="fal fa-book"></i>
                            About Us
                        </p>
                        <h3 class="title"><?php echo get_field("about_title"); ?></h3>
                        <?php the_field("about_description"); ?>
                    </div>

                    <ul class="about_list row">
                        <?php
                            while ( have_rows('about_list') ) : the_row();
                        ?>
                            <li class="col-md-6">
                                <div class="icon">
                                    <?php $list_icon = get_sub_field("list_icon"); ?>
                                    <?php if($list_icon) { ?> 
                                        <img src="<?php echo $list_icon['url']; ?>" alt="img" class="image-fit">
                                    <?php } else { ?> 
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_5.png" alt="img" class="image-fit">
                                    <?php } ?>                                   
                                </div>
                                <div class="text">
                                    <h6 class="mb-2"><?php echo get_sub_field("list_title"); ?></h6>
                                    <p class="mb-0"><?php echo get_sub_field("list_description"); ?></p>
                                </div>

                            </li>
                        <?php endwhile; ?>   
                    </ul>
                    <?php $about_button = get_field("about_button"); ?>
                    <div class="text-center">
                        <a href="#about_video" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle">
                            <?php echo $about_button['title']; ?>
                            <i class="fal fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About End -->

     <!-- Counter Box Start -->

    <div class="section-padding pt-0">
        <div class="container">
            <div class="row">
                <?php
                    while ( have_rows('stats') ) : the_row();
                ?>
                <!-- Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter_box">
                        <div class="icon">
                            <?php $stat_image = get_sub_field("stat_image"); ?>
                            <?php if($stat_image) { ?> 
                                <img src="<?php echo $stat_image['url']; ?>" alt="img" class="image-fit">
                            <?php } else { ?> 
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_6.png" alt="icon" class="image-fit">
                            <?php } ?>  
                        </div>
                        <div class="text">
                            <div class="counter">
                                <b data-from="0" data-to="<?php echo get_sub_field("count"); ?>">0</b>
                            </div>
                            <p class="mb-0"><?php echo get_sub_field("title"); ?></p>
                        </div>
                    </div>
                </div>  
                <!-- Box -->
                <?php endwhile; ?>  
                <!-- Box -->
            </div>

        </div>

    </div>

    <!-- Counter Box End -->

    <!-- About Us Start -->

    <section class="section section-bg about_bg about style_2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg/bg_1.png);">

        <div class="container">

            <div class="row justify-content-between flex-row-reverse">

                <div class="col-lg-6">

                    <div class="image_boxes style_2 relative z-1 h-100"  id="about_video">


                        <div class="video_warp style_2 relative z-1 big_img">

                            <img src="<?php echo get_template_directory_uri(); ?>/images/about/who-we-are-thumbnail.png" alt="img">

                            <a href="https://www.youtube.com/watch?v=6rYaBEggzqk" class="popup-youtube transform-center justify-content-center d-flex">

                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/youtube.png" alt="icon">

                            </a>

                        </div>

                        <!-- elements -->

                       

                        <img src="<?php echo get_template_directory_uri(); ?>/images/elements/element_23.png" class="element_2 rotate_elem" alt="Element">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/elements/element_24.png" class="element_3 rotate_elem" alt="Element">

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 mb-md-80">

                    <div class="section-title left-align">

                        <p class="subtitle">

                            <i class="fal fa-book"></i>

                            Who We Are

                        </p>

                        <h3 class="title"><?php echo get_field("who_we_are_title"); ?> </h3>

                        <?php echo get_field("who_we_are_description"); ?>

                    </div>

                    <ul class="about_list style_2 mb-xl-30">

                        <?php the_field("who_we_are_list"); ?>

                    </ul>
                    <?php $who_we_are_button = get_field("who_we_are_button"); ?>
                    <a href="#lead-generate-popup" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle open-popup-link">
                        <?php echo $who_we_are_button['title']; ?>
                        <i class="fal fa-chevron-right ml-2"></i>
                    </a>
                    
                </div>

            </div>

        </div>

    </section>

    <!-- About Us End -->

    <!-- Testimonials Start -->

    <section class="section section-bg relative z-1 bg-thm-color-one" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg/bg_4.png);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="section-title left-align white">

                        <p class="subtitle mb-4">

                            <i class="fal fa-book"></i>

                            Our Testimonials

                        </p>

                        <h3 class="title mb-0">What’s Our Students Say <br> About Us</h3>

                    </div>

                </div>

            </div>

            <div class="testimonial_slider style_2 row">
                <?php					
                    $testimonials_args = array(
                        'post_type' => 'testimonials',
                        'posts_per_page'=> -1,
                        'order'          => 'ASC',
                        'fields'         => 'ids'
                    );
                    $testimonials_posts = new WP_Query( $testimonials_args );
                    if ( $testimonials_posts->have_posts() ) {
                        while ( $testimonials_posts->have_posts() ) { $testimonials_posts->the_post();  $id = get_the_ID(); 
                        ?>   
                <!-- Testimonial Item -->

                <div class="slide-item col-12">
                    <div class="testimonial_item style_dark">
                        <div class="author">
                            <div class="image bg-thm-color-two">
                                <?php if (has_post_thumbnail( $id ) ){ ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ) , "thumb" ); ?>
                                    <img src="<?php echo $image[0]; ?>" alt="Image"class="image-fit" >
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/author/1.jpg" alt="Image" class="image-fit" >
                                <?php } ?>
                            </div>
                            <div class="text">
                                <h6 class="mb-0"><?php echo get_the_title(); ?></h6>
                                <p class="mb-0 font-weight-bold thm-color-two">Course : <?php echo get_field("designation"); ?></p>
                            </div>
                        </div>
                        <p class="comment">
                            <?php echo get_the_content(); ?>
                        </p>

                        <div class="ratings">
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Item -->
                <?php   } //while closed ?>
                <?php wp_reset_query();
                    }
                ?>
            </div>

        </div>

    </section>

    <!-- Testimonials End -->

    <?php require get_template_directory() . '/newslatter-box.php'; ?>

<?php get_footer(); ?>















