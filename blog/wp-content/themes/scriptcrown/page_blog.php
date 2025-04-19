<?php



/*

Template Name: Blogs



*/

?>



<?php



	get_header();



?>

    <!-- Subheader Start -->
    <?php $banner_image = get_field("banner_image"); ?>
    <div class="subheader relative z-1" style="background-image: url(<?php echo ($banner_image['url'])?$banner_image['url']:''; ?>);">

        <div class="container relative z-1">

            <div class="row">

                <div class="col-12">

                    <h1 class="page_title">Read & Learn</h1>

                    <div class="page_breadcrumb">

                        <nav aria-label="breadcrumb">

                            <ol class="breadcrumb">

                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Read & Learn</li>

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

    <!-- Section Start -->

    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-md-80">
                <?php		  
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
                    $args = array(
                        'post_type'     => 'post',
                        'post_status'   => 'publish',
                        'orderby' => 'id', 
                        'order'          => 'DESC',
                        'posts_per_page'=> 2,
                        'paged' => $paged, 
                    );
                    $pending_posts = new WP_Query( $args );
                    if ( $pending_posts->have_posts() ) { ?>
                    <?php
                        while ( $pending_posts->have_posts() ) { $pending_posts->the_post();  $id = get_the_ID(); 
                    ?>  
                        <article class="post post_list style_2">
                            <div class="post_img">
                                <?php if (has_post_thumbnail( $id ) ){ ?>
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ) , array('720','480') ); ?>
                                <img src="<?php echo $image[0]; ?>" alt="Image" >
                                <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog/list/1.jpg" alt="Image" class="">
                                <?php } ?>
                            </div>

                            <div class="post_caption">
                                <ul class="post_meta">
                                    <li>
                                        <i class="fal fa-user"></i>
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" > <?php echo get_the_author(); ?> </a>
                                    </li>
                                    <li>
                                        <i class="fal fa-calendar-alt"></i>
                                        <?php echo get_post_time('d M, Y'); ?>
                                    </li>
                                    <li class="post_share">

                                        <h6>Share: </h6>

                                        <ul class="social">

                                            <li>
                                                <a href="http://www.facebook.com/sharer.php?u=<?php echo the_permalink() ?>" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>

                                            </li>

                                            <li>

                                                <a href="http://twitter.com/share?url=<?php echo the_permalink() ?>" target="_blank">
                                                    <i class="fab fa-twitter"></i>
                                                </a>

                                            </li>

                                            <li>

                                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink() ?>" target="_blank">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>

                                            </li>

                                            <li>

                                                <a href="mailto:?Subject=<?php echo get_the_title(); ?>&Body=<?php echo the_permalink() ?>">

                                                    <i class="fal fa-envelope"></i>

                                                </a>

                                            </li>

                                        </ul>

                                    </li>
                                </ul>
                                <h4 class="post_title">
                                    <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title();?></a>
                                </h4>

                                <p class="post_text">
                                    <?php echo substr(get_the_excerpt(), 0, 150); ?>
                                </p>
                                <a href="<?php echo get_permalink(); ?>" class="thm-btn bg-thm-color-white thm-color-one btn-rectangle">Read More <i class="fal fa-chevron-right ml-2"></i></a>
                            </div>

                        </article>
                    <?php   } //while closed ?>              
                    <?php wp_reset_query(); ?>
                        <!-- Pagination -->
                        <nav aria-label="page navigation custom-pagination">
                            <?php $big = 999999999; // need an unlikely integer
                                echo paginate_links( array(
                                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                'total'        => $pending_posts->max_num_pages,
                                'current'      => max( 1, get_query_var( 'paged' ) ),
                                'format'       => '?paged=%#%',
                                'show_all'     => false,
                                'type'         => 'list',
                                'end_size'     => 2,
                                'mid_size'     => 1,
                                'prev_next'    => true,
                                'prev_text'    => sprintf( '<i class="fal fa-chevron-left"></i> %1$s', __( '', 'scriptcrown' ) ),
                                'next_text'    => sprintf( '%1$s <i class="fal fa-chevron-right"></i>', __( '', 'scriptcrown' ) ),
                                'add_args'     => false,
                                'add_fragment' => '',
                            ) ); ?>         
                        </nav>
                        <!-- Pagination -->
                    <?php } else { ?>                       
                        <div class="alert alert-info alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>Oops !</strong> No Record Found .
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-4">

                    <div class="sidebar style_2">

                        <!-- <div class="sidebar_widget">

                            <form>

                                <div class="input-group search_widget">

                                    <input type="text" name="#" placeholder="Search" class="form-control" autocomplete="off">

                                    <div class="input-group-append ml-0">

                                        <button type="submit" class="thm-btn bg-thm-color-two thm-color-white thm-color-two-shadow btn-rectangle btn-small">

                                            <i class="fal fa-search"></i>

                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div> -->

                        <div class="sidebar_widget">

                            <h5 class="widget_title">Category</h5>                            

                            <ul class="category_widgets">

                                <?php $categories = get_categories();

                                    foreach($categories as $category) { ?>

                                    <li>

                                        <a href="<?php echo get_category_link($category->term_id);?> "> <?php echo $category->name; ?> </a>

                                    </li>

                                <?php } ?>

                            </ul>

                        </div>

                        

                        <!-- <div class="sidebar_widget">

                            <a href="#" class="d-block">

                                <img src="<?php echo get_template_directory_uri(); ?>/images/blog/adv.jpg" alt="adv" class="image-fit">

                            </a>

                        </div> -->

                        <div class="sidebar_widget">

                            <h5 class="widget_title">Popular Tags</h5>  
                            <div class="tags">
                                <?php
                                $tags = get_tags();
                                if ( $tags ) :
                                    foreach ( $tags as $tag ) : ?>
                                        <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
                                    <?php endforeach; ?>
                                <?php endif; ?>   
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Section End -->

    <!-- Cta Start -->

    <!-- <div class="cta_box style_2">

        <div class="container relative z-2">

            <div class="bg-thm-color-two cta_box_inner z-2 mb-negative">

                <img src="<?php echo get_template_directory_uri(); ?>/images/elements/shape.png" alt="shape" class="shape_1 zoom-fade">

                <div class="row justify-content-between align-items-center">

                    <div class="col-lg-6">

                        <div class="text_block">

                            <div class="section-title left-align white">

                                <p class="subtitle">

                                    <i class="fal fa-book"></i>

                                    Our Professionals

                                </p>

                                <h3 class="title">Do You Want to Transform Your Life For Better ?</h3>

                                <a href="contact.html" class="thm-btn bg-thm-color-three thm-color-three-shadow btn-rectangle">Contact Us <i class="fal fa-chevron-right ml-2"></i></a>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-5">

                        <div class="image_box relative z-1">

                            <img src="<?php echo get_template_directory_uri(); ?>/images/elements/square_shape.png" alt="shape" class="shape_2 rotate_elem">

                            <img src="<?php echo get_template_directory_uri(); ?>/images/cta_image.png" alt="img" class="image-fit">

                            <div class="arrows slideRight">

                                <div class="arrow"></div>

                                <div class="arrow"></div>

                                <div class="arrow"></div>

                                <div class="arrow"></div>

                                <div class="arrow"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="arrows to_up slideTop">

                <div class="arrow"></div>

                <div class="arrow"></div>

                <div class="arrow"></div>

                <div class="arrow"></div>

                <div class="arrow"></div>

            </div>

        </div>

    </div> -->

    <!-- Cta End -->





<?php get_footer(); ?>















