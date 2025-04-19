<?php get_header(); ?>

<!-- Header Start -->
<section id="breadcrumb" class="inner-banner relative-position backgroud-style" style="background-image: url(https://gtz.scriptcrown.com/assets/frontend/img/inner-banners.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="inner-banner-breadcrumb">
						<span class="breadcrumbElement"> 
							<a href="https://www.icajobguarantee.com"> Home </a> 
						</span>
						<span class="breadcrumbElement"> 
							 <i class="fas fa-chevron-right"> </i>
						</span> 
						<span class="breadcrumbElement"> 
                            Blogs
						 </span>
					</div>
					<div class="inner-banner-content">
						<div class="inner-banner-title">
							<h1>Blogs</h1>
						</div>
						<div class="inner-banner-description">
                            <p>Blogs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Header End -->
    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-12">
                    <div class="row g-4 ">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-item rounded">
                                <div class="blog-img">
                                    <?php if (has_post_thumbnail( $post->ID ) ){ ?>
                                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                                        <img src="<?php echo $image[0]; ?>"  />
                                    <?php } ?>
                                </div>
                                <div class="blog-centent p-2">
                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> <?php echo get_the_date(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="text-muted">
                                            <span class="fa fa-comments text-primary mx-2"></span><?php echo gt_get_post_view(); ?>
                                        </a>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="h4">
                                        <?php the_title(); ?>
                                    </a>
                                    <div class="my-4">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                        <h1><?php _e('Not Found')?></h1>
                        <p><?php _e('Sorry,no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Blog End -->

            
<?php get_footer(); ?>