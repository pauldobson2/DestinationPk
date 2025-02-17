<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WW7XLSJBC9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WW7XLSJBC9');
</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Destination Pakistan' }}">
    <meta property="og:description" content="{{ $description ?? 'Destination Pakistan' }}">
    <meta property="og:image" content="{{ $image ?? asset('assets/images/Logo.svg') }}" alt="Destination Pakistan Logo" title="Destination Pakistan Logo">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Destination Pakistan' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Destination Pakistan' }}">
    <meta name="twitter:image" content="{{ $image ?? asset('assets/images/Logo.svg') }}" alt="Destination Pakistan Logo" title="Destination Pakistan Logo">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Destination Pakistan' }}</title>

    <link href="{{ asset('assets/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/fontawesome/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/simple-line-icons/css/simple-line-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/flaticon/css/flaticon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/slick.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icon/icon-connect.css') }}" rel="stylesheet">
</head>
