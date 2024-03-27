<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('res/libs/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('res/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('http://localhost/cake/homefixing/resources/css/app.css') }}">
    
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    @include('auth.header')
    <main id="adminmain">
        <div class="admin-wrapper">
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('res/js/main.js') }}"></script>
    @yield('js-custom')
</body>
