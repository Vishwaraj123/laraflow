@extends('laraflow::layouts.app')

@section('content')
    <div id="app"></div>
@endsection
@php
    $manifest_file = public_path('vendor/vishwaraj/laraflow/public/build/manifest.json');
@endphp
@push('js')
    {{-- @if (app()->environment('local'))
        @vite(['resources/js/app.js'], 'vendor/vishwaraj/laraflow')
    @else --}}
    <script src="{{ asset('vendor/vishwaraj/laraflow/public/build/assets/app.js') }}"></script>
    {{-- @endif --}}
@endpush
