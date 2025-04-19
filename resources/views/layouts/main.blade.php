<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ isset($contentMain->title)?$contentMain->title:'GTZ India Pvt Ltd | Expert Industrial Chemical Solutions' }}</title>
    <meta name="facebook-domain-verification" content="he9zy5upymc72288m3qpcwda5dygul" />
    <meta name="description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'GTZ India Pvt Ltd offers high-quality chemical solutions for metal finishing, steel mills, coatings, textiles, leather & APIs, serving industries worldwide' }}" />
    <link rel="canonical" href="{{url()->current()}}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="{{ isset($contentMain->title)?$contentMain->title:'' }}">
    <meta name="robots" content="{{ isset($contentMain->robots)?$contentMain->robots:'' }}" />
    <meta name="google-site-verification" content="_Is7-guFC312LQs0E9yYfc90B7NW6Dx--HQZrLtBeLs" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="GTZ India Pvt. Ltd." />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ isset($contentMain->title)?$contentMain->title:'GTZ India Pvt Ltd | Expert Industrial Chemical Solutions' }}" />
    <meta property="og:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'GTZ India Pvt Ltd offers high-quality chemical solutions for metal finishing, steel mills, coatings, textiles, leather & APIs, serving industries worldwide' }}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:image" content="https://www.facebook.com/gtzindiapvtltd" />
    <meta property="og:image:secure_url" content="https://www.facebook.com/gtzindiapvtltd" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@GTZIndiaPvtLtd" />
    <meta name="twitter:title" content="{{ isset($contentMain->title)?$contentMain->title:'GTZ India Pvt Ltd | Expert Industrial Chemical Solutions' }}" />
    <meta name="twitter:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'GTZ India Pvt Ltd offers high-quality chemical solutions for metal finishing, steel mills, coatings, textiles, leather & APIs, serving industries worldwide' }}" />
    <meta name="twitter:creator" content="@GTZIndiaPvtLtd" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="gtz-india-admin" />
    <meta name="twitter:label2" content="Est. reading time" />
    <meta name="twitter:data2" content="1 minute" />

    <!-- Css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{ asset('assets/frontend/img/favicon/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/css/lightbox.min.css" integrity="sha512-xtV3HfYNbQXS/1R1jP53KbFcU9WXiSA1RFKzl5hRlJgdOJm4OxHCWYpskm6lN0xp0XtKGpAfVShpbvlFH3MDAA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ url('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ url('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/frontend/css/responsive.css') }}" rel="stylesheet">
    
    @yield('style')

    @if(isset($contentMain->schema))
    {!! $contentMain->schema !!}
    @else
    {!! get_theme_setting('schema') !!}
    @endif
        
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N9B9VC4K');</script>
        <!-- End Google Tag Manager -->

    <script>

        let popUp = 1

	</script>

</head>



<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9B9VC4K"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    

    <script>

        let globalUrl = "{{ env("APP_URL") }}"

        let isAjaxSubmit = "{{ get_theme_setting('ajax_submit') }}"

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script>

    <script type="text/javascript" src="https://app.cognocart.com/files/deploy/embed_chatbot_47.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js" integrity="sha512-KbRFbjA5bwNan6DvPl1ODUolvTTZ/vckssnFhka5cG80JVa5zSlRPCr055xSgU/q6oMIGhZWLhcbgIC0fyw3RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ url('assets/frontend/lib/wow/wow.min.js') }}"></script>

    <script src="{{ url('assets/frontend/lib/easing/easing.min.js') }}"></script>

    <script src="{{ url('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>

    <script src="{{ url('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script src="{{ url('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ url('assets/frontend/js/main.js') }}"></script>



</body>



</html>