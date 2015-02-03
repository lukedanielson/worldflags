<!doctype html>
<html lang="en" ng-app="worldflags">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $siteMetaTitle }}</title>
    <meta name="description" content="{{ $siteMetaDescription }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ URL::to('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ URL::to('assets/img/icons/apple/apple-touch-icon.png') }}">

    <link href="http://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('/assets/css/main.css') }}" type="text/css">

    @include('partials.sections.scripts.header-scripts-main')

    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    <![endif]-->

</head>
<body class="{{ ( isset($bodyClasses) ) ? implode(' ', $bodyClasses) : '' }}">
    <div id="bg-main" class="site-bg-item"></div><!-- end #bg-main -->
    <div id="bg-overlay" class="site-bg-item"></div><!-- end #bg-overlay -->
    <?php // ('partials.sections.header.header-main');?>

<div class="container-fluid container-main" role="document">

    <div class="site-header-main">
        <h2 class="header-main"><a title="Flags of The World" href="{{ URL::to('/') }}">
            <span class="logo-stack fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-globe fa-stack-2x"></i>
                <i class="fa fa-flag logo-flag1 fa-stack-1x"></i>
                <i class="fa fa-flag logo-flag2 fa-stack-1x"></i>
                <i class="fa fa-flag logo-flag3 fa-stack-1x"></i>
            </span>Flags of the World</a>
        </h2>
    </div><!-- end .site-header-main -->

    @yield('content')

</div><!-- end .container -->

<?php // ('partials.sections.footer.footer-main');?>

@include('partials.sections.scripts.footer-scripts-main')
</body>
</html>