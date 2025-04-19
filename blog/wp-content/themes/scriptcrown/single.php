<?php get_header(); ?>
<?php gt_set_post_view(); ?>
	<!-- Start of Blog single content
		============================================= -->
    <?php 
        $category = get_the_category();
        $term_id = $category[0]->term_id;
        
    ?>
    <section class="header-devider">

    </section>
		
    <section id="blog-detail" class="blog-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="blog-details-content">
                        <div class="my-3" >
                            <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
                        </div>
                        <div class="post-content-details">
                            <div class="blog-detail-thumbnile mb35">
                                <?php if (has_post_thumbnail( $id ) ){ ?>
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ) , array('720','480') ); ?>
                                <?php $alt = get_post_meta ( get_post_thumbnail_id( $id ), '_wp_attachment_image_alt', true ); ?>
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt; ?>" >
                                <?php } else { ?>
                                    <img src="https://ica.scriptcrown.com/assets/img/blog/bd-1.jpg" alt="">
                                <?php } ?>
                            </div>
                            <h1><?php echo get_the_title(); ?></h1>
                            <div class="date-meta text-uppercase">
                                <a href=""><i class="fas fa-calendar-alt"></i>  <?php echo get_post_time('d M, Y'); ?> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=""><i class="fas fa-eye"></i> <?php echo gt_get_post_view(); ?> </a>
                                <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
                            </div>
                            <div class="blog-description mt-5">
                                <?php the_content(); ?>
                                <div class="disclaimer">
                                    <strong>Disclaimer:</strong> The content posted in this weblog is intended for general information purposes only and does not include any professional accounting, tax, legal or financial advice. We strive to provide accurate and up-to-date information based on laws, regulations, and best practices which may vary by jurisdiction, industry, and individual circumstances.
                                </div>
                            </div>
                        </div>
                        
                        <div style="clear: both; margin-bottom: 15px;">
                            
                        </div>
                        <div class="next-prev-post">
                            <?php
                                $next_post = get_previous_post(); 
                                global $post; 
                                    $post = get_post( $next_post->ID, OBJECT );
                                    setup_postdata( $post );
                            ?>
                            <div class="next-post-item float-left">
                                <a href="<?php echo the_permalink(); ?>"><i class="fas fa-arrow-circle-left"></i>Previous Post</a>
                            </div>
                            <?php wp_reset_postdata(); ?>
                            <?php
                                $next_post = get_next_post(); 
                                global $post; 
                                $post = get_post( $next_post->ID, OBJECT );
                                setup_postdata( $post );
                            ?>
                            <div class="next-post-item float-right">
                                <a href="<?php echo the_permalink(); ?>">Next Post<i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                        <div style="clear: both; margin-bottom: 15px;">
                            
                        </div>
                    <?php 
                    // If comments are open or we have at least one comment, load up the comment template.
                    // if ( comments_open() || get_comments_number() ) :
                    //     comments_template();
                    // endif;
                    ?>
                </div>

                <div class="col-md-3">
                    <div class="side-bar">
                        <!-- <div class="side-bar-search">
                            <form action="#" method="get">
                                <input type="text" class="" placeholder="Search" name="s" >
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div> -->

                        <div class="side-bar-widget">
                            <h2 class="widget-title text-capitalize">Blog <span>Categories</span></h2>
                            <div class="post-categori ul-li-block">
                                <ul>
                                <?php $categories = get_categories(); 
                                    foreach($categories as $category) { ?>
                                    <li class="cat-item"><a href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name; ?></a></li>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="side-bar-widget">
                            <h2 class="widget-title text-capitalize">Popular <span>Topics</span></h2>
                            <?php
                                $args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => $term_id );
                                foreach ( get_posts( $args ) as $post ) : setup_postdata( $post ); ?>								
                            <div class="latest-news-posts">
                                <div class="latest-news-thumbnile relative-position">
                                    <a class="blog-thumnile" href="<?php echo get_permalink(); ?>">
                                        <?php if (has_post_thumbnail( $id ) ){ ?>
                                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ) , "thumb" ); ?>
                                            <img src="<?php echo $image[0]; ?>" alt="Image" >
                                        <?php } else { ?>
                                            <img src="https://via.placeholder.com/300x200" alt="Image" class="">
                                        <?php } ?>
                                    </a>
                                    <div class="hover-search">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="date-meta">
                                    <i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?>
                                </div>
                                <h3 class="latest-title bold-font"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                            </div>
                            <?php endforeach; ?>
                            
                            <div class="view-all-btn bold-font">
                                <a href="/blog">View All Blogs <i class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div> -->

                        <!-- <div class="side-bar-widget">
                            <h2 class="widget-title text-capitalize">Popular <span>Tags</span></h2>
                            <div class="tag-clouds ul-li">
                                <ul>
                                <?php
                                $tags = get_tags();
                                if ( $tags ) :
                                    foreach ( $tags as $tag ) : ?>
                                    <li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>  
                                    
                                </ul>
                            </div>
                        </div> -->
                        <div class="side-bar-widget">
                            <?php echo dynamic_sidebar('custom_widget_area'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- End of Blog single content
		============================================= -->

<?php get_footer(); ?>