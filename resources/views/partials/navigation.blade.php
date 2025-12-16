<a href="{{ route('home') }}" class="inline-block py-2 px-4 text-white font-semibold rounded-md transition text-sm {{ request()->routeIs('home') ? 'border-b-2 border-white pb-1' : 'hover:text-gray-200' }}">
    Simulator
</a>
<a href="{{ route('how-it-works') }}" class="inline-block py-2 px-4 text-white font-semibold rounded-md transition text-sm {{ request()->routeIs('how-it-works') ? 'border-b-2 border-white pb-1' : 'hover:text-gray-200' }}">
    How It Works
</a>
<a href="{{ config('app.url') }}?url=https://birthreg.speso.co/ussd&method=post&network=mtn&phone=0544909090&aggregator=nalo&ussd=*920*28#" class="inline-block py-2 px-4 text-white font-semibold rounded-md transition text-sm hover:text-gray-200" title="Try it out">
    Try it out
</a>
<a href="{{ route('faq') }}" class="inline-block py-2 px-4 text-white font-semibold rounded-md transition text-sm {{ request()->routeIs('faq') ? 'border-b-2 border-white pb-1' : 'hover:text-gray-200' }}">
    FAQ
</a>
<a href="https://github.com/spesohq/simulator" target="_blank" class="inline-block py-2 px-4 text-white font-semibold rounded-md transition text-sm hover:text-gray-200 inline-flex items-center" aria-label="Open Documentation (GitHub)">
    <span>Documentation</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M18 13v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
        <path d="M15 3h6v6"></path>
        <path d="M10 14L21 3"></path>
    </svg>
</a>
