<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Speso USSD Simulator</title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="USSD Simulator, Speso, Laravel USSD, Livewire, USSD testing, USSD applications, telecom, Africa fintech, mobile simulator">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

        <!-- Tailwind CDN fallback for development (temporary) -->
        @if (config('app.env') !== 'production')
            <!-- Using CDN only in non-production to provide visual utilities while local CSS build is disabled -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
        @endif
        <!-- Scripts -->
        <script src="{{ config('app.env') === 'production' ? secure_asset('js/app.js') : asset('js/app.js') }}"></script>

        <!-- Styles -->
        <link href="{{ config('app.env') === 'production' ? secure_asset('css/app.css') : asset('css/app.css') }}" rel="stylesheet">

        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

        @yield('extra-head')
    </head>
    <body>
        <div class="h-full flex flex-col font-ubuntu bg-gray-100">
            <!-- Header -->
            <div class="flex-shrink bg-purple-800">
                <div class="w-full mx-auto flex-col h-full">
                    <div class="flex items-center justify-between pt-6 pb-8 px-6 sm:px-12 md:px-20 lg:px-32">
                        <div class="text-lg flex-none">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('img/logo.png') }}" width="100">
                            </a>
                        </div>
                        <div class="flex space-x-3">
                            @include('partials.navigation')
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex-1 px-6 sm:px-12 md:px-20 lg:px-32 pt-16">
                        @yield('content')
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex-none flex items-center justify-between py-8 text-ash-darkest bg-white">
                <div class="space-x-5 ml-6 sm:ml-12 md:ml-20 lg:ml-32">
                    <p class="text-black">
                        &copy; 2025. <a href="https://speso.co" target="_blank" class="text-purple-800 hover:text-purple-900 font-semibold">Speso Technologies Limited</a>
                    </p>
                </div>

                <div class="mr-6 sm:mr-12">
                    <span class="text-black">v1.0</span>
                </div>
            </div>
        </div>

        @yield('extra-body')
    </body>
</html>
