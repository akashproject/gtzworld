@extends('layouts.main')
    @section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $contentMain->name }}</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">{{ $contentMain->name }}</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
        
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection