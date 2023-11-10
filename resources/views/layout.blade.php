<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('metatitle')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="@yield('metatitle')">
    <meta name="keywords" content="@yield('metakeyword')">
    <meta name="description" content="@yield('metadescription')">
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/gif">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/reset.css')}}">
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="js">
    <div id="preloader"></div>
    <!-- start header area -->
    @include('components.header')
        
    @yield('content')

    @include('components.footer')

     <!-- Optional JavaScript -->
     <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.js')}}"></script>
    <script src="{{asset('assets/js/menumaker.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/slider.js')}}"></script>
    <script src="{{asset('assets/js/calculator.js')}}"></script>
    <script src="{{asset('assets/js/active.js')}}"></script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50){  
                $('.second-header').addClass("sticky");
            }
            else{
                $('.second-header').removeClass("sticky");
            }
        });	
    </script>
   

</body>
</html>