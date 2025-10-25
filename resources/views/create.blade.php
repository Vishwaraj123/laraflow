@extends('laraflow::layouts.app')

@section('content')
    <div id="app"></div>
@endsection

@push('js')
    @vite(['packages/vishwaraj/laraflow/src/resources/js/app.js', 'resources/css/app.css'])
@endpush
