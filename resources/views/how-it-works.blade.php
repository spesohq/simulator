@extends('layouts.app')

@section('title', 'How It Works')
@section('description', 'Learn how to use the Speso USSD Simulator to test and debug your USSD applications.')

@section('content')
    <h1 class="text-white font-semibold text-3xl tracking-wide mb-4">
        How It Works
    </h1>

    <p class="text-white text-lg leading-relaxed mb-8">
        The Speso USSD Simulator is a web-based tool designed for developers to test their USSD endpoint implementations before integration. Follow the guide below to get started.
    </p>

    <div class="space-y-8 pb-16">
        <!-- Step 1 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-purple-800 font-bold text-2xl mb-4">
                Step 1: Configure Your Endpoint
            </h2>
            <p class="text-gray-700 mb-4">
                Enter your USSD endpoint details:
            </p>
            <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4">
                <li><strong>Host URL:</strong> The full URL of your USSD endpoint (e.g., https://api.example.com/ussd)</li>
                <li><strong>Method:</strong> Choose between GET or POST request methods</li>
                <li><strong>Network Operator:</strong> Select the telecom network (AT, Glo, MTN, or Telecel)</li>
                <li><strong>Phone Number:</strong> Enter a valid 10-digit phone number starting with 0</li>
                <li><strong>Aggregator:</strong> Choose your USSD aggregator (Korba, Nsano, Nalo, Arkesel, or Africa's Talking)</li>
            </ul>
        </div>

        <!-- Step 2 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-purple-800 font-bold text-2xl mb-4">
                Step 2: Enter USSD Code
            </h2>
            <p class="text-gray-700 mb-4">
                In the "Enter USSD Code" field, input your USSD code. Examples:
            </p>
            <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4">
                <li><code class="bg-gray-200 px-2 py-1 rounded">*721#</code> - Initial request</li>
                <li><code class="bg-gray-200 px-2 py-1 rounded">1</code> - Menu selection response</li>
                <li><code class="bg-gray-200 px-2 py-1 rounded">2</code> - Another menu selection</li>
            </ul>
            <p class="text-gray-700 mt-4">
                The USSD code field will automatically clear after each request, allowing you to quickly send the next input.
            </p>
        </div>

        <!-- Step 3 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-purple-800 font-bold text-2xl mb-4">
                Step 3: Send Request & View Response
            </h2>
            <p class="text-gray-700 mb-4">
                Click the <strong>Send</strong> button to submit your USSD request. The simulator will:
            </p>
            <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4">
                <li>Forward your request to your endpoint</li>
                <li>Display the response in the output panel</li>
                <li>Clear the USSD code field for the next input</li>
            </ul>
            <p class="text-gray-700 mt-4">
                The output panel shows the raw response from your endpoint, helping you debug issues in real-time.
            </p>
        </div>

        <!-- Step 4 -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-purple-800 font-bold text-2xl mb-4">
                Step 4: Reset & Start Over
            </h2>
            <p class="text-gray-700 mb-4">
                Use the <strong>Reset</strong> button to clear the session and start a fresh USSD flow. This will:
            </p>
            <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4">
                <li>Clear all input fields</li>
                <li>End the current USSD session</li>
                <li>Redirect you back to the simulator home</li>
            </ul>
        </div>

        <!-- Tips -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-purple-800 font-bold text-2xl mb-4">
                💡 Tips & Best Practices
            </h2>
            <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4">
                <li>Ensure your endpoint is publicly accessible (or use ngrok for local testing)</li>
                <li>Test with different networks and aggregators to ensure compatibility</li>
                <li>Use meaningful phone numbers for testing (ensure they're valid 10-digit numbers)</li>
                <li>Monitor your endpoint logs to see the exact requests being sent</li>
                <li>Test both successful and error scenarios</li>
                <li>Remember that each Send request increments the session sequence number</li>
            </ul>
        </div>
    </div>
@endsection
