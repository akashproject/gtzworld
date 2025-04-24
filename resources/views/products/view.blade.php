@extends('layouts.main')
    @section('content')
    <section id="breadcrumb" class="inner-banner relative-position backgroud-style" style="background-image: url({{ url('assets/frontend/category/'.$topParentCategory->slug.'.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-9" style="background-image: linear-gradient(to right, #040404a3, #fcfcfc00);">
                    <div class="inner-banner-breadcrumb">
                        <span class="breadcrumbElement"> 
                            <a href="https://www.gtzworld.com/"> Home </a> 
                        </span>

                        <span class="breadcrumbElement"> 
                            <i class="fas fa-chevron-right"> </i>
                        </span> 
                        <span class="breadcrumbElement"> 
                            {{(isset($contentMain))?$contentMain->name:"All Products" }}
                        </span>
                    </div>
                    <div class="inner-banner-content">

                        <div class="inner-banner-title">
                            <h1>{{(isset($contentMain))?$contentMain->name:"All Products" }}</h1>
                        </div>
                        <div class="inner-banner-description">
                            <!-- {!! (isset($contentMain))?$contentMain->exerpt:"All Products" !!} -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    

                </div>
            </div>
        </div>
    </section>

    <section>
    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container ">
            <div class="row g-5">
                <div class="col-lg-8 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h2 class="display-3 mb-4">Product Description</h2>
                        {!! $contentMain->description !!}
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInLeft" data-wow-delay="0.2s">
                   <div class="widget-panel">
                        <div class="about-img mb-3">
                            <img src="https://dummyimage.com/500x300" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                        </div>
                        <div class="info-widget ps-2" >
                            <div class="text-center">
                                <h5 class="mb-4">Key Highlights</h5>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Quick Facts</th>
                                        <th>Molecular</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Molecular Formula</td>
                                        <td>44,77</td>
                                    </tr>
                                    <tr>
                                        <td>Molecular Weight</td>
                                        <td>44,77</td>
                                    </tr>
                                    <tr>
                                        <td>Css Number </td>
                                        <td>44,77</td>
                                    </tr>
                                    <tr>
                                        <td>ATC Code </td>
                                        <td>44,77</td>
                                    </tr>
                                    <tr>
                                        <td>Self Life </td>
                                        <td>44,77</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="info-widget text-center" >
                            <a href="#lead-generate-popup" class="btn btn-primary text-white py-2 px-4 flex-wrap flex-sm-shrink-0 open-popup-link">Download Brochure</a>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    </section>

    <section class="bg-listing py-3" ><!-- About Start -->
        <div class="container-fluid aboutpy-5">
            <div class="container ">
                <div class="row text-center mb-5">
                    <div class="section-title ">
                        <h3 class=""> Product Highlights</h3>
                    </div>
                </div>            
                <div class="row">
                    <div>
                        <div class="text-left">
                            <ul>
                                <li>
                                    <p><i class="fa fa-check-circle"></i> It is a long established fact that a reader will be distracted by the readable content of a page</p>
                                </li>
                                <li>
                                    <p>
                                    <i class="fa fa-check-circle"></i> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                    <i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </p>
                                </li>
                                <li>
                                    <p>
                                    <i class="fa fa-check-circle"></i> popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                                    </p>
                                </li>
                                <li>
                                    <p>
                                    <i class="fa fa-check-circle"></i> Integrity and strong business ethics are the foundation to the way we conduct our business.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <section class="bg-white py-5">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="display-3 mb-4">Core Values</h2>
            </div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Accordion Item #1
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Accordion Item #2
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Accordion Item #3
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                </div>
        </div>
    </section>
        @endsection
@section('script')
<!-- ============================================================== -->
@endsection