<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Johan le Roux</title>
</head>

<body class="bg-grey-lightest pb-12 border-t-2 border-blue">
    <header class="container mx-auto pb-6">
        <div class="flex border-b-2 border-grey-light py-6 w-full nav">
            <a href="/" class="flex ml-4">
                <svg width="64" height="64" class="flex-inline">
                    <g>
                        <circle fill="white" r="32" cy="32" cx="32"/>
                        <path d="m32,64a32,32 0 1 1 0,-64a32,32 0 0 1 0,64zm0,-2a30,30 0 1 0 0,-60a30,30 0 0 0 0,60z" fill="#A9A598"/>
                    </g>
                    <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'League Gothic', sans-serif" font-size="44" id="svg_5" y="47" x="19.79168" stroke-width="0" stroke="#000" fill="#39362f">J</text>
                </svg>
            </a>
            <div class="flex flex-grow justify-end">
                <a href="{{ url('/') }}" class="px-2 sm:px-4 md:px-6 py-4 no-underline uppercase leading-loose tracking-wide text-sm sm:text-base text-grey-darkest hover:text-grey-dark">Home</a>
                <a href="{{ url('/tips') }}" class="px-2 sm:px-4 md:px-6 py-4 no-underline uppercase leading-loose tracking-wide text-sm sm:text-base text-grey-darkest hover:text-grey-dark">Tips / Tricks</a>
            </div>
        </div>
    </header>

    <div id="app" class="container px-2 mx-auto flex flex-wrap">
        @yield('content')
    </div>

    <footer class="container mx-auto pt-8">
        <div class="flex px-4 border-t border-grey-light">
            <p class="flex-1 text-sm py-4 text-grey tracking-wide uppercase text-right">© Johan le Roux, {{ now()->year }}</p>
        </div>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>