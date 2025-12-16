@extends('layouts.app')

@section('title', 'FAQ')
@section('description', 'Frequently Asked Questions about the Speso USSD Simulator.')

@section('content')
    <h1 class="text-white font-semibold text-3xl tracking-wide mb-4">
        Frequently Asked Questions
    </h1>

    <p class="text-white text-lg leading-relaxed mb-8">
        Find answers to common questions about the Speso USSD Simulator.
    </p>

    <div class="pb-16">
        <!-- Accordion Container -->
        <div x-data="{ openItem: null }" class="space-y-6">
            <!-- FAQ Item 1 -->
            <div class="bg-white rounded-lg shadow-lg">
                <button @click="openItem = openItem === 1 ? null : 1" class="w-full flex items-center justify-between p-6 hover:bg-gray-50 transition focus:outline-none">
                    <h3 class="text-purple-800 font-bold text-lg text-left">What is a session ID?</h3>
                    <svg x-show="openItem !== 1" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    <svg x-show="openItem === 1" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
                <div x-show="openItem === 1" x-transition class="px-6 pb-6 border-t border-gray-200">
                    <p class="text-gray-700">
                        Each USSD interaction starts with a unique session ID. The simulator generates this automatically, allowing your endpoint to track multi-step USSD flows. A session ID helps maintain context across multiple USSD requests within a single conversation.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white rounded-lg shadow-lg">
                <button @click="openItem = openItem === 2 ? null : 2" class="w-full flex items-center justify-between p-6 hover:bg-gray-50 transition focus:outline-none">
                    <h3 class="text-purple-800 font-bold text-lg text-left">Can I test locally?</h3>
                    <svg x-show="openItem !== 2" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    <svg x-show="openItem === 2" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
                <div x-show="openItem === 2" x-transition class="px-6 pb-6 border-t border-gray-200">
                    <p class="text-gray-700 mb-4">
                        Yes! You can test locally using a tunneling tool like ngrok. Here's how:
                    </p>
                    <ol class="list-decimal list-inside text-gray-700 space-y-2 ml-4">
                        <li>Install and run ngrok on your local machine</li>
                        <li>Start your local USSD endpoint (e.g., on port 8000)</li>
                        <li>Run <code class="bg-gray-200 px-2 py-1 rounded">ngrok http 8000</code></li>
                        <li>Copy the ngrok URL provided and use it as your Host URL in the simulator</li>
                    </ol>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white rounded-lg shadow-lg">
                <button @click="openItem = openItem === 3 ? null : 3" class="w-full flex items-center justify-between p-6 hover:bg-gray-50 transition focus:outline-none">
                    <h3 class="text-purple-800 font-bold text-lg text-left">What request parameters are sent?</h3>
                    <svg x-show="openItem !== 3" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    <svg x-show="openItem === 3" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
                <div x-show="openItem === 3" x-transition class="px-6 pb-6 border-t border-gray-200">
                    <p class="text-gray-700 mb-4">
                        The simulator sends the following parameters based on your aggregator's specification:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4">
                        <li><strong>Session ID:</strong> Unique identifier for the USSD session</li>
                        <li><strong>Sequence Number:</strong> Increments with each request in the session</li>
                        <li><strong>Phone Number:</strong> The customer's phone number</li>
                        <li><strong>USSD Code:</strong> The input from the user</li>
                        <li><strong>Network Operator:</strong> AT, Glo, MTN, or Telecel</li>
                        <li><strong>Aggregator-specific fields:</strong> Additional fields required by the aggregator</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white rounded-lg shadow-lg">
                <button @click="openItem = openItem === 4 ? null : 4" class="w-full flex items-center justify-between p-6 hover:bg-gray-50 transition focus:outline-none">
                    <h3 class="text-purple-800 font-bold text-lg text-left">Is HTTPS required?</h3>
                    <svg x-show="openItem !== 4" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    <svg x-show="openItem === 4" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
                <div x-show="openItem === 4" x-transition class="px-6 pb-6 border-t border-gray-200">
                    <p class="text-gray-700">
                        Not strictly required for testing, but it's recommended for production environments. The simulator supports both HTTP and HTTPS URLs. When deploying to production, always use HTTPS to ensure secure communication between the simulator and your endpoint.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-white rounded-lg shadow-lg">
                <button @click="openItem = openItem === 5 ? null : 5" class="w-full flex items-center justify-between p-6 hover:bg-gray-50 transition focus:outline-none">
                    <h3 class="text-purple-800 font-bold text-lg text-left">How does session sequencing work?</h3>
                    <svg x-show="openItem !== 5" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    <svg x-show="openItem === 5" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
                <div x-show="openItem === 5" x-transition class="px-6 pb-6 border-t border-gray-200">
                    <p class="text-gray-700">
                        Each USSD session maintains a sequence number that increments with every request sent. This helps your endpoint track the flow of the conversation. For example:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4 mt-4">
                        <li>Request 1: *721# → Sequence = 1</li>
                        <li>Request 2: 1 → Sequence = 2</li>
                        <li>Request 3: 2 → Sequence = 3</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="bg-white rounded-lg shadow-lg">
                <button @click="openItem = openItem === 6 ? null : 6" class="w-full flex items-center justify-between p-6 hover:bg-gray-50 transition focus:outline-none">
                    <h3 class="text-purple-800 font-bold text-lg text-left">What are the supported aggregators?</h3>
                    <svg x-show="openItem !== 6" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    <svg x-show="openItem === 6" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
                <div x-show="openItem === 6" x-transition class="px-6 pb-6 border-t border-gray-200">
                    <p class="text-gray-700 mb-4">
                        The simulator supports the following USSD aggregators:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4">
                        <li><strong>Korba:</strong> Popular USSD aggregator for African markets</li>
                        <li><strong>Nsano:</strong> USSD platform and aggregation services</li>
                        <li><strong>Nalo:</strong> SMS and USSD solutions provider</li>
                        <li><strong>Arkesel:</strong> Bulk SMS and USSD messaging platform</li>
                        <li><strong>Africa's Talking:</strong> Communications API platform</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="bg-white rounded-lg shadow-lg">
                <button @click="openItem = openItem === 7 ? null : 7" class="w-full flex items-center justify-between p-6 hover:bg-gray-50 transition focus:outline-none">
                    <h3 class="text-purple-800 font-bold text-lg text-left">How do I handle errors?</h3>
                    <svg x-show="openItem !== 7" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    <svg x-show="openItem === 7" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
                <div x-show="openItem === 7" x-transition class="px-6 pb-6 border-t border-gray-200">
                    <p class="text-gray-700 mb-4">
                        Your endpoint should return appropriate responses for different scenarios:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4">
                        <li><strong>Valid input:</strong> Return the next menu or confirmation message</li>
                        <li><strong>Invalid input:</strong> Return an error message prompting the user to try again</li>
                        <li><strong>End of flow:</strong> Return a message indicating the session is complete</li>
                    </ul>
                    <p class="text-gray-700 mt-4">
                        The simulator will display any response your endpoint returns, making it easy to debug issues in real-time.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="bg-white rounded-lg shadow-lg">
                <button @click="openItem = openItem === 8 ? null : 8" class="w-full flex items-center justify-between p-6 hover:bg-gray-50 transition focus:outline-none">
                    <h3 class="text-purple-800 font-bold text-lg text-left">Can I test multiple networks?</h3>
                    <svg x-show="openItem !== 8" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    <svg x-show="openItem === 8" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
                <div x-show="openItem === 8" x-transition class="px-6 pb-6 border-t border-gray-200">
                    <p class="text-gray-700">
                        Yes! The simulator allows you to test with different networks (AT, Glo, MTN, Telecel) and aggregators. This helps ensure your USSD application works correctly across different telecom providers and aggregation platforms. Simply change the network and aggregator dropdowns and send a new request.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 9 -->
            <div class="bg-white rounded-lg shadow-lg">
                <button @click="openItem = openItem === 9 ? null : 9" class="w-full flex items-center justify-between p-6 hover:bg-gray-50 transition focus:outline-none">
                    <h3 class="text-purple-800 font-bold text-lg text-left">What does the "Reset" button do?</h3>
                    <svg x-show="openItem !== 9" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    <svg x-show="openItem === 9" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
                <div x-show="openItem === 9" x-transition class="px-6 pb-6 border-t border-gray-200">
                    <p class="text-gray-700">
                        The Reset button clears the current USSD session and returns you to the simulator home page. This is useful when you want to:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4 mt-4">
                        <li>Start a completely new session with a different configuration</li>
                        <li>Clear all input fields and session data</li>
                        <li>End a testing session and begin fresh</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ Item 10 -->
            <div class="bg-white rounded-lg shadow-lg">
                <button @click="openItem = openItem === 10 ? null : 10" class="w-full flex items-center justify-between p-6 hover:bg-gray-50 transition focus:outline-none">
                    <h3 class="text-purple-800 font-bold text-lg text-left">Can I pre-populate the form using a URL?</h3>
                    <svg x-show="openItem !== 10" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    <svg x-show="openItem === 10" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
                <div x-show="openItem === 10" x-transition class="px-6 pb-6 border-t border-gray-200">
                    <p class="text-gray-700 mb-4">
                        Yes! You can share pre-filled simulator links by adding query parameters to the URL. Click the example below to try it:
                    </p>
                    <div class="bg-gray-100 p-4 rounded-lg mb-4 overflow-x-auto">
                        <a href="{{ config('app.url') }}?url=https://birthreg.speso.co/ussd&method=post&network=mtn&phone=0544909090&aggregator=nalo&ussd=*920*28#" class="text-sm text-purple-800 hover:text-purple-900 font-semibold underline break-all">
                            {{ config('app.url') }}?url=https://birthreg.speso.co/ussd&method=post&network=mtn&phone=0544909090&aggregator=nalo&ussd=*920*28#
                        </a>
                    </div>
                    <p class="text-gray-700 mb-2 font-semibold">Available parameters:</p>
                    <ul class="list-disc list-inside text-gray-700 space-y-1 ml-4">
                        <li><code class="bg-gray-200 px-2 py-1 rounded">url</code> - Host URL for your USSD endpoint</li>
                        <li><code class="bg-gray-200 px-2 py-1 rounded">method</code> - Request method (get or post)</li>
                        <li><code class="bg-gray-200 px-2 py-1 rounded">network</code> - Network operator (at, glo, mtn, telecel)</li>
                        <li><code class="bg-gray-200 px-2 py-1 rounded">phone</code> - Phone number</li>
                        <li><code class="bg-gray-200 px-2 py-1 rounded">aggregator</code> - Aggregator (korba, nsano, nalo, arkesel, africastalking)</li>
                        <li><code class="bg-gray-200 px-2 py-1 rounded">ussd</code> - Initial USSD code</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ Item 11 -->
            <div class="bg-white rounded-lg shadow-lg">
                <button @click="openItem = openItem === 11 ? null : 11" class="w-full flex items-center justify-between p-6 hover:bg-gray-50 transition focus:outline-none">
                    <h3 class="text-purple-800 font-bold text-lg text-left">How do I troubleshoot connection issues?</h3>
                    <svg x-show="openItem !== 11" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    <svg x-show="openItem === 11" class="w-6 h-6 text-purple-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </button>
                <div x-show="openItem === 11" x-transition class="px-6 pb-6 border-t border-gray-200">
                    <p class="text-gray-700 mb-4">
                        If you're experiencing connection issues:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4">
                        <li>Ensure your endpoint URL is correct and publicly accessible</li>
                        <li>Check that your endpoint is running and listening on the correct port</li>
                        <li>If using ngrok, verify the tunnel is still active</li>
                        <li>Check your firewall and network settings</li>
                        <li>Review your endpoint logs for any error messages</li>
                        <li>Test the endpoint URL directly in your browser first</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection