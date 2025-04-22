@extends('layouts.main')
    @section('content')
        <section id="breadcrumb" class="inner-banner relative-position backgroud-style" style="background-image: url({{ url('assets/frontend/category/'.$contentMain->slug.'.jpg') }});">
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
                                {!! (isset($contentMain))?$contentMain->description:"All Products" !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">What We Do</h4>
                    </div>
                    <h1 class="display-3 mb-4">Cater To {{$contentMain->name}} Industry</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach($childCategories as $category)
                    @if(count(getProducts($category->id)) <=0)
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="{{ getSizedImage($category->featured_image) }}" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content rounded-bottom bg-light pb-4 pt-2 fixed-height">
                                <div class="course-meta pb-4">
                                    <!-- <span class="course-category bold-font"><i class="fa fa-user"></i> 10.8k Sold</span>
                                    <div class="course-rate ul-li">
                                        
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <span class="course-category bold-font"> (1.2k) Ratings </span> -->
                                </div>
                                <div class="service-content-inner text-center pt-5">
                                    <h4 class="mb-3 px-2"> {{ $category->name }}</h4>
                                    
                                    <!-- <p class="mb-4">{!! $category->description !!}</p> -->
                                    <a href="{{ route('view-products',$category->slug) }}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else 
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="mb-4"> <a href="{{ route('course-category',$category->slug) }}" >Category : {{ $category->name }}</a></h2>
                        <div class="product-list-view">
                            <table>
                                <thead>
                                    <tr class="list-head">
                                        <th>NAME</th>												
                                        <th>Form</th>
                                        <th>Unit</th>
                                        <!--<th>Application Dose</th>-->
                                        <th>Shelf life</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(getProducts($category->id) as $product)
                                    <tr>
                                        <td>
                                            <div class="course-list-img-text">
                                                <div class="course-list-text">
                                                    <h3>
                                                        <a href="{{ route('view-product',$product->slug) }}" >{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="course-meta">
                                                        <span class="course-category bold-font"><a href="#">{{ $product->description }}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td> {{ $product->form }} </td>
                                        <td> {{ $product->unit }} </td>
                                        <!--<td> {{ $product->application_dose }} </td>-->
                                        <td> {{ $product->expire }} </td>
                                        <td>
                                            <a href="#lead-generate-popup" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0 open-popup-link">Get Quote</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Products End -->

        

    @endsection
@section('script')
<!-- ============================================================== -->
@endsection