<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    @include('feed::links')

    <link async rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Johan le Roux</title>
</head>

<body class="font-sans bg-blue-lightest pb-12 border-t-2 border-blue">
    <header class="bg-white mb-8 shadow">
        <div class="container mx-auto flex  py-3 w-full nav">
            <a href="{{ url('/') }}" class="flex ml-4 py-3 md:py-4 no-underline leading-loose tracking-wide text-base text-grey-darkest hover:text-blue hover:underline">
                @include('svg.logo', ['class' => 'flex-inline -my-4 fill-current'])
                &nbsp;ohan le Roux
            </a>
            <div class="flex flex-grow justify-end">
                <a class="px-2 md:px-3 py-4 no-underline font-normal leading-loose text-sm sm:text-base text-grey-darkest hover:text-blue" href="{{ url('/') }}">About</a>
                <a class="px-2 md:px-3 py-4 no-underline font-normal leading-loose text-sm sm:text-base text-grey-darkest hover:text-blue" href="{{ url('/projects') }}">Projects</a>
            </div>
        </div>
    </header>

    <div id="app" class="container px-2 mx-auto flex flex-wrap">
        @yield('content')
    </div>

    <footer class="bg-white mt-8 shadow">
        <div class="w-full mx-auto p-3">
            <p class="flex-1 text-sm py-4 text-grey-dark tracking-wide uppercase text-right">© Johan le Roux, {{ now()->year }}</p>
        </div>
    </footer>
</body>

</html>