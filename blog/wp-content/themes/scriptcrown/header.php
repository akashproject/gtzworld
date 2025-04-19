<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
   
    <!-- Libraries Stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <!-- Css -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="tel:3322429901" class="text-light"><i class="fas fa-phone-alt text-primary me-2"></i>+91 33 2242 9900</a> 
                    <span class="text-light  mx-2">| </span> <a href="tel:3322429901" class="text-light me-4">+91 33 2242 9901 </a>
                    <a href="mailto:connect@gtzworld.com" class="text-light"> <i class="fas fa-envelope text-primary me-2"></i>connect@gtzworld.com</a>
                </div>
            </div>

            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="https://www.facebook.com/gtzindiapvtltd" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/GTZIndiaPvtLtd" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/gtz-pvt-lt" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="https://gtzworld.com" class="navbar-brand p-0">
                <img src="https://gtzworld.com/assets/frontend/img/logo.png" class="img-fluid w-100" alt="Image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <div class="nav-item dropdown">
                        <a href="https://gtzworld.com/products" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" onclick="window.location.href='/products'">Products</a>
                        <div class="dropdown-menu m-0">
                                <a href="https://gtzworld.com/category/metal-finishing-chemicals" class="dropdown-item">Metal Finishing Chemicals</a>
                                <a href="https://www.gtzworld.com/category/steel-mill-chemicals" class="dropdown-item">Steel Mill Chemicals</a>
                                <a href="https://www.gtzworld.com/category/plywood-finishing-chemicals" class="dropdown-item">Plywood / MDF Finishing Chemicals</a>
                                <a href="https://www.gtzworld.com/category/textile-Chemicals" class="dropdown-item">Textile Chemicals</a>
                                <a href="https://www.gtzworld.com/category/leather-chemicals" class="dropdown-item">Leather Chemicals</a>
                                <a href="https://www.gtzworld.com/category/coating -chemicals" class="dropdown-item">Coating Chemicals</a>
                                <a href="https://www.gtzworld.com/category/organic-chemicals" class="dropdown-item">Organic Chemicals</a>
                                <a href="https://www.gtzworld.com/category/api-active-pharmaceutical-ingredients" class="dropdown-item">API (Active Pharmaceutical Ingredients)</a>
                        </div>
                    </div>
                        <a href="https://www.gtzworld.com/about-us" class="nav-item nav-link">About Us</a>
                        <a href="https://www.gtzworld.com/blogs" class="nav-item nav-link">Blogs</a>
                        <a href="https://www.gtzworld.com/gallery" class="nav-item nav-link">Gallery</a>
                        <a href="https://www.gtzworld.com/career" class="nav-item nav-link">Career</a>
                        <a href="https://www.gtzworld.com/contact-us" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="#lead-generate-popup" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0 open-popup-link">Get Quote</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->