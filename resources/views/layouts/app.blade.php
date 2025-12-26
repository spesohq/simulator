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
                        
                        <!-- Desktop Navigation -->
                        <div class="hidden md:flex space-x-3">
                            @include('partials.navigation')
                        </div>

                        <!-- Mobile Hamburger Menu -->
                        <div class="md:hidden" x-data="{ open: false }">
                            <!-- Hamburger Button -->
                            <button @click="open = true" class="text-white p-2 focus:outline-none" aria-label="Open menu">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>

                            <!-- Mobile Menu Overlay -->
                            <div x-show="open" 
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0"
                                 @click.away="open = false"
                                 class="fixed inset-0 bg-purple-900 bg-opacity-95 z-50 flex flex-col"
                                 style="display: none;">
                                
                                <!-- Close Button -->
                                <div class="flex justify-between items-center px-6 pt-6 pb-4">
                                    <img src="{{ asset('img/logo.png') }}" width="100">
                                    <button @click="open = false" class="text-white p-2 focus:outline-none" aria-label="Close menu">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Mobile Navigation Links -->
                                <nav class="flex flex-col space-y-2 px-6 py-8">
                                    <a href="{{ route('home') }}" class="block py-3 px-4 text-white text-lg font-semibold rounded-md transition {{ request()->routeIs('home') ? 'bg-purple-700' : 'hover:bg-purple-800' }}">
                                        Simulator
                                    </a>
                                    <a href="{{ route('how-it-works') }}" class="block py-3 px-4 text-white text-lg font-semibold rounded-md transition {{ request()->routeIs('how-it-works') ? 'bg-purple-700' : 'hover:bg-purple-800' }}">
                                        How It Works
                                    </a>
                                    <a href="{{ config('app.url') }}?url=https://birthreg.speso.co/ussd&method=post&network=mtn&phone=0544909090&aggregator=nalo&ussd=*920*28#" class="block py-3 px-4 text-white text-lg font-semibold rounded-md transition hover:bg-purple-800" title="Try it out">
                                        Try it out
                                    </a>
                                    <a href="{{ route('faq') }}" class="block py-3 px-4 text-white text-lg font-semibold rounded-md transition {{ request()->routeIs('faq') ? 'bg-purple-700' : 'hover:bg-purple-800' }}">
                                        FAQ
                                    </a>
                                    <a href="https://github.com/spesohq/simulator" target="_blank" class="block py-3 px-4 text-white text-lg font-semibold rounded-md transition hover:bg-purple-800 inline-flex items-center" aria-label="Open Documentation (GitHub)">
                                        <span>Documentation</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M18 13v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                            <path d="M15 3h6v6"></path>
                                            <path d="M10 14L21 3"></path>
                                        </svg>
                                    </a>
                                </nav>
                            </div>
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
