<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $page->siteName }}</title>

    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body class="layout--{{ $page->getFilename() }}">

    @include('_partials.skip-links')

    <div class="sidebar-toggle-wrapper">
        <button class="toggle navicon-button larr" type="button">
        <span class="toggle-inner">
          <span class="sidebar-toggle-label visually-hidden">Menu'</span>
          <span class="navicon"></span>
        </span>
        </button>
    </div>

    <div id="sidebar" class="sidebar">
        <div class="inner">
            @include('_partials.navigation')
            @include('_partials.contact-list')
        </div>
    </div>

    <div class="canvas">
        <div class="wrapper">
            @include('_partials.masthead')
            <div class="initial-content">
                @yield('body')
            </div>
        </div>
    </div>

    @include('_partials.footer')

    <script src="{{ mix('js/main.js', 'assets/build') }}" type="text/javascript"></script>
</body>
</html>