<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('res/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('res/libs/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('res/libs/OwlCarousel2/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('res/libs/OwlCarousel2/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('res/css/style.css')}}">
    
    <link rel="stylesheet" href="{{ asset('http://localhost/cake/homefixing/resources/css/app.css') }}">
</head>
<body>
    <x-header />
    <main>
        <x-banner.type1 />
        {{$slot}}
        <x-mobile-app />
    </main>
    <x-footer />

    <script src="{{asset('res/libs/jquery/jquery.min.js')}}" referrerpolicy="no-referrer"></script>
    <script src="{{asset('res/popperjs/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('res/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('res/libs/OwlCarousel2/owl.carousel.min.js')}}" referrerpolicy="no-referrer"></script>
    <script src="{{asset('res/js/main.js')}}"></script>
</body>