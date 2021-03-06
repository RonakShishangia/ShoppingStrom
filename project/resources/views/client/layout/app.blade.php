<!DOCTYPE html>
<html>

    <!-- Mirrored from p.w3layouts.com/demos_new/template_demo/20-06-2017/elite_shoppy-demo_Free/143933984/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Mar 2018 04:20:09 GMT -->
    <head>
        <title>@yield('title')</title>
        <!--/tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
                function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--//tags -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"> 
        <link href="{{ asset('css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css'/>
        <!-- //for bootstrap working -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

        <!-- custom css -->
     
    </head>
    <body>
        <!-- header -->
        @include('client.includes.header')
        
        <!-- content -->
        @yield('content')

        <!-- Footer -->
        @include('client.includes.footer')
    </body>
<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/20-06-2017/elite_shoppy-demo_Free/143933984/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Mar 2018 04:20:45 GMT -->
</html>