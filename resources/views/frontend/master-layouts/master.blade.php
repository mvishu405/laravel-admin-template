<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    {{--Share Tags--}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="@yield('og_url')"/>
    <meta property="og:title" content="@yield('og_title')"/>
    <meta property="og:description" content="@yield('og_description')"/>
    <meta property="og:image" content="@yield('og_image')"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description" content="@yield('twitter_description')"/>
    <meta name="twitter:title" content="@yield('twitter_title')"/>
    <meta name="twitter:site" content="@yield('twitter_site')"/>
    <meta name="twitter:image" content="@yield('twitter_image')"/>
    {{--End Share Tags--}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dist/img/favicon.ico') }}"/>
    <link rel="stylesheet" href="{{ asset('dist/css/app.min.css') }}"/>
    @stack('styles')
</head>

<body>
    @include('frontend.includes.header')
    @yield('content')
    @include('frontend.includes.footer')
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
