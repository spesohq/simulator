<a href="{{ route('how-it-works') }}" class="inline-block py-2 px-4 bg-white hover:bg-gray-100 text-purple-800 font-semibold rounded-md shadow-lg transition text-sm">
    How It Works
</a>
<a href="https://github.com/spesohq/simulator" target="_blank" class="inline-block py-2 px-4 bg-white hover:bg-gray-100 text-purple-800 font-semibold rounded-md shadow-lg transition text-sm">
    Documentation
</a>
<a href="{{ route('faq') }}" class="inline-block py-2 px-4 bg-white hover:bg-gray-100 text-purple-800 font-semibold rounded-md shadow-lg transition text-sm">
    FAQ
</a>
@if(request()->routeIs('home'))
@else
    <a href="{{ route('home') }}" class="inline-block py-2 px-4 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold rounded-md shadow-lg transition text-sm">
        Back to Simulator
    </a>
@endif
