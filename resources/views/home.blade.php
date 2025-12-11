@extends('layouts.app')

@section('title', 'Speso')
@section('description', 'A web-based USSD Simulator by Speso, built with Laravel and Livewire to test, debug, and preview USSD applications seamlessly.')

@section('extra-head')
    <livewire:styles />
@endsection

@section('content')
    <livewire:simulator />
@endsection

@section('extra-body')
    <livewire:scripts />

    <script>
        document.addEventListener('livewire:load', function () {
            setInterval(function () {
                window.livewire.emit('alive');
            }, 180000);
        })
    </script>
@endsection
