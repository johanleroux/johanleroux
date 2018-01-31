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
                    <path fill="none" d="M-1-1h55.333v55.333H-1z" />
                    <g>
                        <circle fill="#fff" r="32" cy="32" cx="32" />
                        <path fill="#A9A598" d="M32 64a32 32 0 1 1 0-64 32 32 0 0 1 0 64zm0-2a30 30 0 1 0 0-60 30 30 0 0 0 0 60z"
                        />
                        <g stroke-linecap="round" fill-rule="evenodd" font-size="12" stroke="#39362f" stroke-width=".945"
                            fill="#39362f">
                            <path d="M37.457 38.884V13.982h6.152V38.91q0 5.102-3.186 8.105t-8.411 3.003q-5.566 0-8.593-2.807-3.028-2.808-3.028-7.813h6.153q0 2.832 1.403 4.26 1.404 1.43 4.065 1.43 2.491 0 3.968-1.649 1.477-1.648 1.477-4.554z"
                            />
                        </g>
                    </g>
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