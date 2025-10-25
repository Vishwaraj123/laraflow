@extends('laraflow::layouts.app')
@php
    // $manifest_file = public_path('build/manifest.json');
    // $manifest = file_exists($manifest_file)
    //     ? json_decode(file_get_contents($manifest_file), true)
    //     : ['resources/js/app.js' => ['file' => 'app.js']];
    // $js = $manifest['resources/js/app.js']['file'];
    $parse_url = parse_url(config('app.url'));
    $path = '/';

    if (!empty($parse_url['path'])) {
        $path = trim($parse_url['path'], '/');
    }
@endphp
@section('content')
    <div id="app">
    </div>
@endsection
@push('js')
    {{-- @if (file_exists($manifest_file))
        {{ Vite::useBuildDirectory('build') }}
        <script src="{{ asset("build/$js") }}"></script>
    @else --}}
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    {{-- @endif --}}
@endpush
